<?php
/**
 * +----------------------------------------------------------------------
 * | 管理员列表模型
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

namespace app\common\model;

// 引入框架内置类
use think\facade\Db;
use think\facade\Event;
use think\facade\Request;
use think\facade\Session;

// 引入构建器
use app\common\facade\MakeBuilder;

class Admin extends Base
{
    // 定义时间戳字段名
    protected $createTime = 'create_time';
    protected $updateTime = 'update_time';

    // 获取列表
    public static function getList(array $where = [], int $pageSize = 0, array $order = ['sort', 'id' => 'desc'])
    {
        if ($pageSize) {
            $list = self::where($where)
                ->order($order)
                ->paginate([
                    'query'     => Request::get(),
                    'list_rows' => $pageSize,
                ]);
        } else {
            $list = self::where($where)
                ->order($order)
                ->select();
        }

        $auth = new \Auth();
        foreach ($list as $k => $v) {
            $title  = '';
            $groups = $auth->getGroups($v->id);
            foreach ($groups as $group) {
                $title .= $group['title'] . ',';
            }
            $title                  = rtrim($title, ',');
            $list[$k]['group_name'] = $title;
        }
        return MakeBuilder::changeTableData($list, 'Admin');
    }

    /**
     * 管理员登录校验
     * @return array|\think\response\Json
     * @throws \think\Exception
     */
    public static function checkLogin()
    {
        // 查找所有系统设置表数据
        $system = \app\common\model\System::find(1);

        $username  = Request::param("username");
        $password  = Request::param("password");
        $open_code = $system['code'];
        if ($open_code) {
            $code = Request::param("vercode");
            if (!captcha_check($code)) {
                $data = ['error' => '1', 'msg' => '验证码错误'];
                return json($data);
            }
        }
        $result = self::where(['username' => $username, 'password' => md5($password)])->find();

        if (empty($result)) {
            $data = ['error' => '1', 'msg' => '帐号或密码错误'];
            return json($data);
        } else {
            $check = Request::checkToken('__token__');
            if (false === $check) {
                $data = ['error' => '2', 'msg' => '页面过期'];
                return json($data);
            }
            if ($result['status'] == 1) {
                $uid = $result['id'];
                // 更新登录IP和登录时间
                self::where('id', '=', $result['id'])
                    ->update(['login_time' => time(), 'login_ip' => Request::ip()]);

                // 查找规则
                $rules = Db::name('auth_group_access')
                    ->alias('a')
                    ->leftJoin('auth_group ag', 'a.group_id = ag.id')
                    ->field('a.group_id,ag.rules,ag.title')
                    ->where('uid', $uid)
                    ->find();
                // 查询所有不验证的方法并放入规则中
                $authOpen  = AuthRule::where('auth_open', '=', '0')
                    ->select();
                $authRole  = AuthRule::select();
                $authOpens = [];
                foreach ($authOpen as $k => $v) {
                    $authOpens[] = $v['id'];
                    // 查询所有下级权限
                    $ids = getChildsRule($authRole, $v['id']);
                    foreach ($ids as $kk => $vv) {
                        $authOpens[] = $vv['id'];
                    }
                }

                $authOpensStr   = !empty($authOpens) ? implode(",", $authOpens) : '';
                $rules['rules'] = $rules['rules'] . $authOpensStr;

                // 重新查询要赋值的数据[原因是toArray必须保证find的数据不为空，为空就报错]
                $result = self::where(['username' => $username, 'password' => md5($password)])->find();
                Session::set('admin', [
                    'id'         => $result['id'],
                    'username'   => $result['username'],
                    'login_time' => date('Y-m-d H:i:s', $result['login_time']),
                    'login_ip'   => $result['login_ip'],
                    'nickname'   => $result['nickname'],
                    'image'      => $result['image'],
                ]);
                Session::set('admin.group_id', $rules['group_id']);
                Session::set('admin.rules', explode(',', $rules['rules']));
                Session::set('admin.title', $rules['title']);
                // 位置编号ZTX-013，增加登录后跳转前页的功能
                $backurl=Session('backurl')?? url('Index/index')->__toString();

                // 触发登录成功事件
                Event::trigger('AdminLogin', $result);

                $data = ['error' => '0', 'href' => $backurl, 'msg' => '登录成功'];
                // 位置编号ZTX-013，增加登录后跳转前页的功能
                return json($data);
            } else {
                return json(['error' => 1, 'msg' => '用户已被禁用!']);
            }

        }
    }

}