<?php
/**
 * +----------------------------------------------------------------------
 * | 首页控制器
 * +----------------------------------------------------------------------
 *                      .::::.
 *                    .::::::::.            | AUTHOR: siyu
 *                    :::::::::::           | DATETIME: 2019/04/12
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

use app\common\facade\Cms;
use think\captcha\facade\Captcha;
use think\facade\Request;
use think\facade\View;
use think\facade\Env;
use think\facade\Db;
use think\facade\Log;

class Index extends Base
{
    // 首页
    public function index()
    {
        // 手机端跳转
        $mobileUrl = Cms::goToMobile($this->system['mobile'], $this->appName);
        if ($mobileUrl !== false) {
            return redirect($mobileUrl);
        }

        $view = [
            'cate'        => ['topid' => 0],                                  // 栏目信息
            'system'      => $this->system,                                   // 系统信息
            'public'      => $this->public,                                   // 公共目录
            'title'       => $this->system['title'] ?: $this->system['name'], // 网站标题
            'keywords'    => $this->system['key'],                            // 网站关键字
            'description' => $this->system['des'],                            // 网站描述
        ];

        $template = $this->template . 'index.html';
        View::assign($view);
        return View::fetch($template);
    }

    // 搜索
    public function search()
    {
        $search = Request::param('search'); // 关键字
        if (empty($search)) {
            $this->error(lang('please input keywords'));
        }

        $view = [
            'cate'        => ['topid' => 0],                                  // 栏目信息
            'search'      => $search,                                         // 关键字
            'system'      => $this->system,                                   // 系统信息
            'public'      => $this->public,                                   // 公共目录
            'title'       => $this->system['title'] ?: $this->system['name'], // 网站标题
            'keywords'    => $this->system['key'],                            // 网站关键字
            'description' => $this->system['des'],                            // 网站描述
        ];

        $template = $this->template . 'search.html';
        View::assign($view);
        return View::fetch($template);
    }

    // 标签
    public function tag()
    {
        $tag = Request::param('t', '', 'htmlspecialchars');
        if (empty($tag)) {
            $this->error(lang('please input keywords'));
        }

        $view = [
            'cate'        => ['topid' => 0],                                  // 栏目信息
            'tag'         => $tag,                                            // 关键字
            'system'      => $this->system,                                   // 系统信息
            'public'      => $this->public,                                   // 公共目录
            'title'       => $this->system['title'] ?: $this->system['name'], // 网站标题
            'keywords'    => $this->system['key'],                            // 网站关键字
            'description' => $this->system['des'],                            // 网站描述
        ];

        $template = $this->template . 'tag.html';
        View::assign($view);
        return View::fetch($template);
    }

    // 留言/投稿
    public function add()
    {
        $result = Cms::addMessage($this->system);
        if ($result['error'] == 1) {
            $this->error($result['msg']);
        } else {
            $this->success($result['msg']);
        }
    }

    // 验证码
    public function captcha()
    {
        return Captcha::create();
    }

    public function uniqueCheck()
     {
        
        $field = input('field'); // 获取字段名称
        $value = input('value'); // 获取字段值
        $table = input('table'); // 获取数据库表名       
        $prefix = Env::get('DATABASE.PREFIX');    
        Log::info($prefix);  
        if($field && $table) {
            // 查询数据库，判断email字段的唯一性
            $user = Db::table( $prefix.$table)->where($field, $value)->find();           
            if ($user) {
                return 'false'; // 如果存在相同的email值，返回 false
            } else {
                return 'true'; // 如果email值唯一，返回 true
            }
        } else {
            return 'Error'; // 如果请求参数不正确，返回错误信息
        }
    }
    public function deleteFrontendFile(string $file = '', string $file_type = '')
     {    
        if (file_exists('.'.$file)) {
            if ($file_type == 'image') {
                $file_info = pathinfo($file);
                $small_file = '/uploads/index/thumb/' . 'small_' . $file_info['basename'];    
                $model = 'app\common\model\FileManagement'; //ZTX-005
                //ZTX-005删除文件管理模块数据  
                $result_small = $model::where('link', '=', $small_file)->find();
                if ($result_small) {
                    $result_small->user = ''; // 修改属性值
                    $result_small = $result_small->save(); // 保存修改
                   
                } else {
                    // 未找到记录的处理逻辑
                    $result_small = true;
                }         
            }
            $result = $model::where('link', '=', $file)->find()->save(['user'=>'']); 
            //删除文件
            if ($result&&$result_small) {
                $code = '1'; //删除成功
             
            } else {
                $code = '2'; //删除失败
            }
        } else {
            $code = '0'; //文件不存在
        }
        return $code;

     }

}
