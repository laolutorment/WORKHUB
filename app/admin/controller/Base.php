<?php

/**
 * +----------------------------------------------------------------------
 * | 基础控制器
 * +----------------------------------------------------------------------
 *                      .::::.
 *                    .::::::::.            | AUTHOR: siyu
 *                    :::::::::::           | EMAIL: 407593529@qq.com
 *                 ..:::::::::::'           | DATETIME: 2020/03/08
 *             '::::::::::::'
 *                .::::::::::
 *           '::::::::::::::..
 *                ..::::::::::::.
 *              ``::::::::::::::::
 *               ::::``:::::::::'        .:::.
 *              ::::'   ':::::'       .::::::::.
 *            .::::'      ::::     .:::::::'::::.
 *           .:::'       :::::  .:::::::::' ':::::.
 *          .::'        :::::.:::::::::'      ':::::.
 *         .::'         ::::::::::::::'         ``::::.
 *     ...:::           ::::::::::::'              ``::.
 *   ```` ':.          ':::::::::'                  ::::..
 *                      '.:::::'                    ':'````..
 * +----------------------------------------------------------------------
 */

declare(strict_types=1);

namespace app\admin\controller;

// 引入框架内置类
use think\App;
use think\exception\HttpResponseException;
use think\exception\ValidateException;
use think\facade\Config;
use think\facade\Request;
use think\facade\View;
use think\Response;
use think\Validate;
use think\facade\Log;

// 引入表格和表单构建器
use app\common\builder\FormBuilder;
use app\common\builder\TableBuilder;
use app\common\facade\MakeBuilder;

/**
 * 控制器基础类
 */
abstract class Base
{
    /**
     * Request实例
     * @var \think\Request
     */
    protected $request;

    /**
     * 应用实例
     * @var \think\App
     */
    protected $app;

    /**
     * 是否批量验证
     * @var bool
     */
    protected $batchValidate = false;

    /**
     * 控制器中间件
     * @var array
     */
    protected $middleware = ['app\admin\middleware\Admin'];

    /**
     * 分页数量
     * @var string
     */
    protected $pageSize = '';

    /**
     * 系统设置
     * @var array
     */
    protected $system = [];

    /**
     * 构造方法
     * @access public
     * @param App $app 应用对象
     */
    public function __construct(App $app)
    {
        $this->app     = $app;
        $this->request = $this->app->request;

        // 控制器初始化
        $this->initialize();
    }

    // 初始化
    protected function initialize()
    {
        // 每页显示数据量
        $this->pageSize = (int)Request::param('pageSize', Config::get('app.page_size'));

        // 左侧菜单
        $menus = \app\admin\model\Base::getMenus();
        View::assign(['menus' => $menus]);

        // 面包导航
        $auth       = new \Auth();
        $breadCrumb = $auth->getBreadCrumb();
        $breadCrumb = format_bread_crumb($breadCrumb);
        View::assign(['breadCrumb' => $breadCrumb]);

        // 内容管理,获取栏目列表
        if (class_exists('\app\common\model\Cate')) {
            $cates = \app\common\model\Cate::getList();
        }
        View::assign(['cates' => unlimitedForLayer($cates['data'] ?? [])]);

        // index应用地址
        $domainBind = Config::get('app.domain_bind');
        if ($domainBind) {
            $domainBindKey = array_search('index', $domainBind);
            $domainBindKey = $domainBindKey == '*' ? 'www.' : ($domainBindKey ? $domainBindKey . '.' : '');
            $indexUrl      = Request::scheme() . '://' . $domainBindKey . Request::rootDomain() . '/';
        }
        View::assign(['indexUrl' => $indexUrl ?? '/']);

        // 查询系统设置
        $system       = \app\common\model\System::find(1);
        $this->system = $system;

        View::assign(['system' => $system]);

        // pjax单页面模式
        if (Request::has('_pjax')) {
            View::assign(['pjax' => true]);
        } else {
            View::assign(['pjax' => false]);
        }

        // iframe多标签模式
        if ($system['display_mode'] == 1) {
            if ($this->request->controller() == 'Index' && $this->request->action() == 'index') {
                View::assign(['iframe' => false]);
            } else {
                View::assign(['iframe' => true]);
            }
        } else {
            View::assign(['iframe' => false]);
        }

        // layer open
        if (Request::has('_layer')) {
            View::assign(['layer' => true]);
        } else {
            View::assign(['layer' => false]);
        }
    }

    /**
     * 验证数据
     * @access protected
     * @param array        $data     数据
     * @param string|array $validate 验证器名或者验证规则数组
     * @param array        $message  提示信息
     * @param bool         $batch    是否批量验证
     * @return array|string|true
     * @throws ValidateException
     */
    protected function validate(array $data, $validate, array $message = [], bool $batch = false)
    {
        if (is_array($validate)) {
            $v = new Validate();
            $v->rule($validate);
        } else {
            if (strpos($validate, '.')) {
                // 支持场景
                list($validate, $scene) = explode('.', $validate);
            }
            $class = false !== strpos($validate, '\\') ? $validate : $this->app->parseClass('validate', $validate);
            $v     = new $class();
            if (!empty($scene)) {
                $v->scene($scene);
            }
        }

        $v->message($message);

        //是否批量验证
        if ($batch || $this->batchValidate) {
            $v->batch(true);
        }

        $result = $v->failException(false)->check($data);
        if (true !== $result) {
            return $v->getError();
        } else {
            return $result;
        }
    }

    /**
     * 操作错误跳转
     * @param mixed   $msg    提示信息
     * @param string  $url    跳转的URL地址
     * @param mixed   $data   返回的数据
     * @param integer $wait   跳转等待时间
     * @param array   $header 发送的Header信息
     * @return void
     */
    protected function error($msg = '', string $url = null, $data = '', int $wait = 3, array $header = []): Response
    {
        if (is_null($url)) {
            $url = request()->isAjax() ? '' : 'javascript:history.back(-1);';
        } elseif ($url) {
            $url = (strpos($url, '://') || 0 === strpos($url, '/')) ? $url : app('route')->buildUrl($url)->__toString();
        }

        $result = [
            'code' => 0,
            'msg'  => $msg,
            'data' => $data,
            'url'  => $url,
            'wait' => $wait,
        ];

        $type = (request()->isJson() || request()->isAjax()) ? 'json' : 'html';
        if ($type == 'html') {
            $response = view(app('config')->get('app.dispatch_error_tmpl'), $result);
        } else if ($type == 'json') {
            $response = json($result);
        }
        throw new HttpResponseException($response);
    }

    /**
     * 返回封装后的API数据到客户端
     * @param mixed   $data   要返回的数据
     * @param integer $code   返回的code
     * @param mixed   $msg    提示信息
     * @param string  $type   返回数据格式
     * @param array   $header 发送的Header信息
     * @return Response
     */
    protected function result($data, int $code = 0, $msg = '', string $type = '', array $header = []): Response
    {
        $result = [
            'code' => $code,
            'msg'  => $msg,
            'time' => time(),
            'data' => $data,
        ];

        $type     = $type ?: 'json';
        $response = Response::create($result, $type)->header($header);

        throw new HttpResponseException($response);
    }

    /**
     * 操作成功跳转
     * @param mixed   $msg    提示信息
     * @param string  $url    跳转的URL地址
     * @param mixed   $data   返回的数据
     * @param integer $wait   跳转等待时间
     * @param array   $header 发送的Header信息
     * @return void
     */
    protected function success($msg = '', string $url = null, $data = '', int $wait = 3, array $header = []): Response
    {
        if (is_null($url) && isset($_SERVER["HTTP_REFERER"])) {
            $url = $_SERVER["HTTP_REFERER"];
        } elseif ($url) {
            $url = (strpos($url, '://') || 0 === strpos($url, '/')) ? $url : app('route')->buildUrl($url, get_back_url())->__toString();
        }

        $result = [
            'code' => 1,
            'msg'  => $msg,
            'data' => $data,
            'url'  => $url,
            'wait' => $wait,
        ];

        $type = (request()->isJson() || request()->isAjax()) ? 'json' : 'html';
        if ($type == 'html') {
            $response = view(app('config')->get('app.dispatch_success_tmpl'), $result);
        } else if ($type == 'json') {
            $response = json($result);
        }
        throw new HttpResponseException($response);
    }

    /**
     * 跳转页
     * @param string $url
     * @return Response
     */
    protected function jump(string $url = '')
    {
        if ($this->request->isPjax()) {
            return response('<span style="display: none">loading...</span>', 200, ['X-PJAX-URL' => $url]);
        } else {
            return redirect($url);
        }
    }


    // 列表
    public function index()
    {
        // 获取主键
        $pk = MakeBuilder::getPrimarykey($this->tableName);
        // 获取列表数据
        $columns = MakeBuilder::getListColumns($this->tableName);
        // 获取搜索数据
        $search = MakeBuilder::getListSearch($this->tableName);
        // 获取当前模块信息
        $model  = '\app\common\model\\' . $this->modelName;
        $module = \app\common\model\Module::where('table_name', $this->tableName)->find();

        // 搜索
        if (Request::param('getList') == 1) {
            $where         = MakeBuilder::getListWhere($this->tableName);
            $orderByColumn = Request::param('orderByColumn') ?? $pk;
            $isAsc         = Request::param('isAsc') ?? 'desc';


            return $model::getList($where, $this->pageSize, [$orderByColumn => $isAsc]);
        }
        // 检测单页模式
        $isSingle = MakeBuilder::checkSingle($this->modelName);
        if ($isSingle) {
            return $this->jump($isSingle);
        }
        // 获取新增地址
        $addUlr = MakeBuilder::getAddUrl($this->tableName);
        // 构建页面
        return TableBuilder::getInstance()
            ->setUniqueId($pk)                              // 设置主键
            ->addColumns($columns)                          // 添加列表字段数据
            ->setSearch($search)                            // 添加头部搜索
            ->addColumn('right_button', '操作', 'btn')      // 启用右侧操作列
            ->addRightButtons($module->right_button)        // 设置右侧操作列
            ->addTopButtons($module->top_button)            // 设置顶部按钮组
            ->setAddUrl($addUlr)                            // 设置新增地址
            ->setTableTem($module->table_tem_set)           //ZTX-设置单独模板
            ->fetch();
    }

    // 添加
    public function add()
    {
        // 获取字段信息
        $columns = MakeBuilder::getAddColumns($this->tableName);

        // 获取分组后的字段信息
        $groups = MakeBuilder::getAddGroups($this->modelName, $this->tableName, $columns);
        // 隐藏<显示全部>按钮
        $hideShowAll = MakeBuilder::getHideShowAll($this->tableName);
        //ZTX-为排序字段设置自增
        $model      = '\app\common\model\\' . $this->modelName;
        foreach ($columns as $k => $v) {
            if ($v[1] == 'sort') {

                $maxsort = $model::max('sort');

                $columns[$k][4] = $maxsort + 1;
            }
        }
       
        // 构建页面
        $builder = FormBuilder::getInstance();
        if ($hideShowAll) {
            $builder->hideShowAll();
        }
        $groups ? $builder->addGroup($groups) : $builder->addFormItems($columns);
        return $builder->fetch();
    }

    // 添加保存
    public function addPost()
    {
        if (Request::isPost()) {
            $data   = MakeBuilder::changeFormData(Request::except(['file'], 'post'), $this->tableName);
            $result = $this->validate($data, $this->validate);
            if (true !== $result) {
                // 验证失败 输出错误信息
                $this->error($result);
            } else {
                $model  = '\app\common\model\\' . $this->modelName;
                $result = $model::addPost($data);
                if ($result['error']) {
                    $this->error($result['msg']);
                } else {
                    $this->success($result['msg'], 'index');
                }
            }
        }
    }

    // 修改
    public function edit(string $id)
    {
        $model = '\app\common\model\\' . $this->modelName;
        $info  = $model::edit($id)->toArray();
        // 获取字段信息
        $columns = MakeBuilder::getAddColumns($this->tableName, $info);
        // 获取分组后的字段信息
        $groups = MakeBuilder::getAddGroups($this->modelName, $this->tableName, $columns);
        // 隐藏<显示全部>按钮
        $hideShowAll = MakeBuilder::getHideShowAll($this->tableName);

        // 构建页面
        $builder = FormBuilder::getInstance();
        if ($hideShowAll) {
            $builder->hideShowAll();
        }
        $groups ? $builder->addGroup($groups) : $builder->addFormItems($columns);
        return $builder->fetch();
    }
    
    // 详情
    public function info(string $id)
    {
        
        // 获取当前模块信息
        $model = '\app\common\model\\' . $this->modelName;
        $module_id = \app\common\model\Module::where('table_name', $this->tableName)->value('id');
        $info  = $model::edit($id)->toArray();
        $info_obj = $model::edit($id);
        // 查询分组情况
        $filedGroup = \app\common\model\FieldGroup::where('module_id', $module_id)->where('status', 1)->order('sort asc,id desc')->select()->toArray();

        //创建模板数据
        $columns = [];
        //数据格式化
        if (empty($filedGroup)) {
            //没有分组时的数据整理
            //设置模板标签为info模板
            $tem = 'info';
            foreach ($info as $k => $v) {
                //获取字段信息
                $column =  \app\common\model\Field::where('module_id',  $module_id)->where('field', $k)->find();
                // 当数据来源为系统字典时，从系统字典中获取数据的值
                if ($column['data_source'] == 1) {
                    $value = \app\common\model\Dictionary::where('dict_type', $column['dict_code'])->where('dict_value', $v)->value('dict_label');
                }
                // 当数据来源为关联模型数据时，从关联模型中获取数据的值
                elseif ($column['data_source'] == 2) {
                    //获取关联模型所展现字段的值
                  
                    $value = !empty($info_obj->{$column['relation_model']})?$info_obj->{$column['relation_model']}->getData($column['relation_field']):'';
                    
                } else {
                    $value = $v;
                }
                //不同字段类型的格式转换
                if ($column['type'] == 'date') {
                    $value = is_int($value) && $value != 0 ? date('Y-m-d', $value) : $value;
                } elseif ($column['type'] == 'time') {
                    $value = is_int($value) && $value != 0 ? date('H:i:s', $value) : $value;
                } elseif ($column['type'] == 'datetime') {
                    $value = is_int($value) && $value != 0 ? date('Y-m-d H:i:s', $value) : $value;
                } elseif ($column['type'] == 'images' || $column['type'] == 'files') {
                    $value = json_decode($value, true);
                }

                $columns[$column['field']] = [
                    'name' => $column['field'],
                    'title' => $column['name'],
                    'value' => $value,
                    'type' => $column['type'],

                ];
            }
        } else {
            //有分组情况下的数据整理
            //建立一个新的分组标签
            $group_tab = [];
            //建立一个新的分组数组
            $group_content = [];
            //设置模板为数组模板
            $tem = 'group_info';
            //在原分组中加入一个新的“其它”分组
            $filedGroup[] = [
                'id' => 0,
                "group_name" => "其它",
            ];


            foreach ($filedGroup as $k => $v_group) {
                //定义分组标签的内容
                $group_tab[] = [
                    'tab_name' => $v_group['group_name'],
                    'tab_id' => $v_group['id']
                ];

                $group_content[$v_group['id']] = [
                    'id' =>  $v_group['id'],
                    'group_name' => $v_group['group_name'],
                    'options' => [],
                ];
                foreach ($info as $k => $v) {
                    //获取字段信息
                    $column =  \app\common\model\Field::where('module_id',  $module_id)->where('field', $k)->find();

                    if ($column['group_id'] == $v_group['id']) {
                        // 当数据来源为系统字典时，从系统字典中获取数据的值
                        if ($column['data_source'] == 1) {
                            $value = \app\common\model\Dictionary::where('dict_type', $column['dict_code'])->where('dict_value', $v)->value('dict_label');
                        }
                        // 当数据来源为关联模型数据时，从关联模型中获取数据的值
                        elseif ($column['data_source'] == 2) {
                            //获取关联模型所展现字段的值
                            $value = !empty($info_obj->{$column['relation_model']})?$info_obj->{$column['relation_model']}->getData($column['relation_field']):'';
                        } else {
                            $value = $v;
                        }
                        //不同字段类型的格式转换
                        if ($column['type'] == 'date') {
                            $value = is_int($value) && $value != 0 ? date('Y-m-d', $value) : $value;
                        } elseif ($column['type'] == 'time') {
                            $value = is_int($value) && $value != 0 ? date('H:i:s', $value) : $value;
                        } elseif ($column['type'] == 'datetime') {
                            $value = is_int($value) && $value != 0 ? date('Y-m-d H:i:s', $value) : $value;
                        } elseif ($column['type'] == 'images' || $column['type'] == 'files') {
                            $value = isset($value)?json_decode($value, true):$value;
                        }

                        $group_content[$v_group['id']]['options'][] = [
                            'name' => $column['field'],
                            'title' => $column['name'],
                            'value' => $value,
                            'type' => $column['type'],
                        ];
                    }
                }

                $columns['group_content'][] = $group_content[$v_group['id']];
            }
            $columns['group_tab'] = $group_tab;
        }

        View::assign("form_items", $columns);
        return View::fetch('info/' . $tem);
    }
    // 修改保存
    public function editPost()
    {
        if (Request::isPost()) {
            $data   = MakeBuilder::changeFormData(Request::except(['file'], 'post'), $this->tableName);
            $result = $this->validate($data, $this->validate);
            if (true !== $result) {
                // 验证失败 输出错误信息
                $this->error($result);
            } else {
                $model  = '\app\common\model\\' . $this->modelName;
                $result = $model::editPost($data);
                if ($result['error']) {
                    $this->error($result['msg']);
                } else {
                    $this->success($result['msg'], 'index');
                }
            }
        }
    }

    // 删除
    public function del(string $id)
    {
        if (Request::isPost()) {
            if (strpos($id, ',') !== false) {
                return $this->selectDel($id);
            }
            $model = '\app\common\model\\' . $this->modelName;
            return $model::del($id);
        }
    }

    // 批量删除
    public function selectDel(string $id)
    {
        if (Request::isPost()) {
            $model = '\app\common\model\\' . $this->modelName;
            return $model::selectDel($id);
        }
    }

    // 排序
    public function sort()
    {
        if (Request::isPost()) {
            $data  = Request::post();
            $model = '\app\common\model\\' . $this->modelName;
            return $model::sort($data);
        }
    }

    // 状态变更
    public function state(string $id)
    {
        if (Request::isPost()) {
            $model = '\app\common\model\\' . $this->modelName;
            return $model::state($id);
        }
    }

    // 导出
    public function export()
    {
        \app\common\model\Base::export($this->tableName, $this->modelName);
    }


    //ZTX-003多图查看 by 折腾侠
    public function images_info(string $id, string $field)
    {
        $model = '\app\common\model\\' . $this->modelName;
        $value = $model::find($id);
        $photos = json_decode($value[$field], true);
        View::assign("photos", $photos);
        return View::fetch('info/images_info');
    }
    //※查看图片
    //※查看文件
    public function files_info(string $id, string $field)
    {
        $model = '\app\common\model\\' . $this->modelName;
        $value = $model::find($id);
        $files = json_decode($value[$field], true);
        View::assign("files", $files);
        return View::fetch('info/images_info');
    }
    //※查看图片
}
