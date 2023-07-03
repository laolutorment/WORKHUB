<?php
/**
 * +----------------------------------------------------------------------
 * | 会员管理验证器
 * +----------------------------------------------------------------------
 *                      .::::.
 *                    .::::::::.            | AUTHOR: siyu
 *                    :::::::::::           | EMAIL: 407593529@qq.com
 *                 ..:::::::::::'           | DATETIME: 2021/06/23
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
namespace app\admin\validate;

use think\Validate;

class Users extends Validate
{
    protected $rule = [
        'email|邮箱' => [
            'require' => 'require',
            'max' => '100',  
            'unique'=>'users'          
        ],
        'password|密码' => [
            'require' => 'require',
            'max' => '100',
            'min' => '8',
        ],
        'nick_name|姓名' => [
            'require' => 'require',
            'max' => '100',
            'min' => '1',
            'unique'=>'users'   
        ],
        'sex|性别' => [
            'require' => 'require',
            'max' => '1',
        ],
        'last_login_time|最后登录时间' => [
            'max' => '10',
        ],
        'last_login_ip|最后登录IP' => [
            'max' => '15',
        ],
        'qq|QQ' => [
            'max' => '20',
        ],
        'mobile|手机' => [
            'mobile'=>'mobile'
        ],       
        'type_id|所属分组' => [
            'require' => 'require',
            'max' => '3',
        ],
        'status|状态' => [
            'require' => 'require',
        ],
        'create_ip|注册IP' => [
            'max' => '15',
        ]
    ];

    public static $index_rule = [
        'email|邮箱' => [
            'require' => 'require',
            'max' => '100',  
            'unique'=>'users',
            'email' => 'email',          
        ],
        'password|密码' => [
            'require' => 'require',
            'max' => '100',
            'min' => '8',
        ],
        'nick_name|姓名' => [
            'require' => 'require',
            'max' => '100',
            'min' => '1',
            'unique'=>'users'   
        ],
        'sex|性别' => [
            'require' => 'require',
            'max' => '1',
        ],       
        'qq|QQ' => [
            'max' => '20',
        ],
        'mobile|手机' => [
            'require' => 'require',
            'mobile'=>'mobile'
        ],          
        'type_id|所属分组' => [
            'require' => 'require',
            'max' => '3',
        ],
        'status|状态' => [
            'require' => 'require',
        ],
        
    ];
}