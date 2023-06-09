<?php

/**
 * +----------------------------------------------------------------------
 * | 用户中心控制器
 * +----------------------------------------------------------------------
 *                      .::::.
 *                    .::::::::.            | AUTHOR: siyu
 *                    :::::::::::           | DATETIME: 2019/03/28
 *                 ..:::::::::::'
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

namespace app\index\controller;

use AlibabaCloud\Client\Request\Request as RequestRequest;
use think\facade\Request;
use think\facade\Session;
use think\facade\View;
use ReflectionClass;

// 引入框架内置类
use think\App;
use think\exception\HttpResponseException;
use think\exception\ValidateException;
use think\facade\Config;
use think\Response;
use think\Validate;
use think\facade\Log;

// 引入表格和表单构建器
use app\common\builder\FormBuilder;
use app\common\facade\MakeBuilder;


class UserUpload extends Base
{
    // 用户ID
    protected $userId;
    // 验证器
    private $validate;
    // 当前主表
    private $tableName;
    // 当前主模型
    private $modelName;
    //当前上传
    private $userupload;
    //上传的$token验证
    private $token;



    // 初始化
    public function initialize()
    {
        parent::initialize();
        // 判断用户是否登录
        if (Session::has('user.id')) {
            $this->userId = Session::get('user.id');
            $isLoggedIn = true;
        } else {
            $isLoggedIn = false;
        }

        if (!empty(Request::param('userupload_id'))) {
            $userupload_id =  Request::param('userupload_id');
        } else {
            $this->adminError('未选择活动');
        }

        $this->userupload = \app\common\model\UserUpload::where('id', $userupload_id)->find();
        $this->tableName = \app\common\model\Module::Where('id', $this->userupload['module_r'])->value('table_name');
        $this->modelName = \app\common\model\Module::Where('id', $this->userupload['module_r'])->value('model_name');
        $this->validate = '\app\admin\validate\\' . $this->modelName;
        View::assign([
            'cate'        => ['topid' => 0],                                  // 栏目信息
            'system'      => $this->system,                                   // 系统信息
            'public'      => $this->public,                                   // 公共目录
            'title'       => $this->system['title'] ?: $this->system['name'], // 网站标题
            'keywords'    => $this->system['key'],                            // 网站关键字
            'description' => $this->system['des'],                            // 网站描述         
            'userupload_id' => $userupload_id,
            'model_name' => $this->modelName,
            'uploadDir' => $this->userupload['upload_file'],
            'isLoggedIn' => $isLoggedIn
        ]);
    }

    // 用户上传
    public function add()
    {

        $this->token =  Session::get('upload_token') ?: bin2hex(random_bytes(16)); // 生成一个16字节的随机字符串
        //设置来源认证的upload_token参数
        Session::set('upload_token', $this->token);
        $className = $this->validate;
        $rule = $className::$index_rule ?? [];
        if (empty($rule)) {
            $reflectionClass = new ReflectionClass($className);
            $reflectionProperty = $reflectionClass->getProperty('rule');
            $reflectionProperty->setAccessible(true);
            $rule = $reflectionProperty->getValue(new $className());
        }
        $rules = generateFrontendRules($rule);
        View::assign([
            'upload_token' => $this->token,
            'rules' => $rules
        ]);

        $userupload = $this->userupload;
        if ($userupload['status'] == 0) {
            $this->error('活动尚未开始，请等待');
        }
        if (!empty($userupload['auth'])) {
            if (!Session::has('user.id')) {
                // 获取当前网址
                $current_url = request()->url(true);
                // 将当前网址存入Session的“callback”变量中
                session('callback', $current_url);
                return redirect('/index/user/login');
            } elseif ($userupload['auth'] != Session::get('user.type_id')) {
                $this->error('用户无权限上传');
            }
        }
        $tableName = $this->tableName;
        $modelName = $this->modelName;
        $custom_field_ids = explode(",", $this->userupload['field_r']);
        // 获取字段信息
        $columns = MakeBuilder::getAddColumns($tableName, [], $custom_field_ids);

        // 获取分组后的字段信息
        $groups = MakeBuilder::getAddGroups($modelName, $tableName, $columns);
        // 隐藏<显示全部>按钮
        $hideShowAll = MakeBuilder::getHideShowAll($tableName);
        //ZTX-为排序字段设置自增
        $model      = '\app\common\model\\' . $modelName;
        foreach ($columns as $k => $v) {
            if ($v[1] == 'sort') {

                $maxsort = $model::max('sort');

                $columns[$k][4] = $maxsort + 1;
            }
        }

        // 构建页面
        $builder = FormBuilder::getInstance();
        //设置页面标题
        $userupload['page_title'] ? $builder->setPageTitle($userupload['page_title']) : $builder->setPageTitle('用户上传');
        //设置页面上端提示信息
        $userupload['page_top_tips'] ? $builder->setPageTips($userupload['page_top_tips'], 'info', 'top') : "";
        //设置页面下端提示信息
        $userupload['page_end_tips'] ? $builder->setPageTips($userupload['page_end_tips'], 'info', 'bottom') : "";
        //设置额外的前端代码
        $userupload['extra_code'] ? $builder->setExtraJs($userupload['extra_code']) : "";
        if ($hideShowAll) {
            $builder->hideShowAll();
        }
        $groups ? $builder->addGroup($groups) : $builder->addFormItems($columns);
        return $builder->fetch("./template/default/index_form_builder/layout.html");
    }

    // 添加保存
    public function addPost()
    {
        if (Request::isPost()) {
            // 验证码
            $message_code = $this->system['message_code'];
            if ($message_code) {
                if (!captcha_check(input("post.message_code"))) {
                    $this->error(lang('captcha error'));
                }
            }
            //来源认证判断
            $token = isset($_POST['upload_token']) ? $_POST['upload_token'] : '';
            if (empty($token) || $token !== Session::get('upload_token')) {
                // 验证失败 输出错误信息            
                $this->error("非法上传，请刷新");
            } else {
                //销毁upload_token
                Session::delete('upload_token');
            }
            $formData =   Request::except(['file'], 'post');
            $data   = MakeBuilder::changeFormData($formData, $this->tableName);
            //  针对用户注册的专门设置
            if ($this->modelName == 'Users') {
                $data['last_login_time'] = $data['create_time'] = time();
                $data['create_ip']       = $data['last_login_ip'] = Request::ip();
                $data['status']          = 0;
            }

            $result = $this->admin_validate($formData, $this->validate);
            if (true !== $result) {
                // 验证失败 输出错误信息
                $this->error($result);
            } else {
                $model  = '\app\common\model\\' . $this->modelName;
                $result = $model::addPost($data);
                if ($result['error']) {
                    $this->error($result['msg']);
                } else {
                    $upload_log = [
                        'user' => $this->userId ?? '1',
                        'upload_project' => Request::param('userupload_id'),
                        'upload_module' => $this->userupload['module_r'],
                        'upload_time' => time(),
                        'upload_ip' => Request::ip(),
                        'upload_id' => $result['id'],
                        'upload_remark' => Request::param('upload_remark') ?? ''
                    ];
                    //上传成功后记录上传日志
                    $result_s = \app\common\model\UploadRecord::addPost($upload_log);
                    if ($result_s['error']) {
                        $this->error($result_s['msg']);
                    } else {
                        if (Session::has('user.id')) {                            
                            $url = "/index/user/index.html";
                        } else {
                            $url = "";
                        }
                        // 重新设置新的提示信息返回函数adminSuccess(),$url为提交完成后需要跳转的页面地址
                        $this->adminSuccess($result['msg'],$url);
                    }
                }
            }
        }
    }
}
