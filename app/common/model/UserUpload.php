<?php
/**
 * +----------------------------------------------------------------------
 * | 专门用于用户上传的模块模型
 * +----------------------------------------------------------------------
 *                      .::::.
 *                    .::::::::.            | AUTHOR: siyu
 *                    :::::::::::           | EMAIL: 407593529@qq.com
 *                 ..:::::::::::'           | DATETIME: 2023/04/17
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

class UserUpload extends Base
{
    // 定义时间戳字段名
    protected $createTime = 'create_time';
    protected $updateTime = 'update_time';

    
    
    public function module()
    {
        return $this->belongsTo('Module', 'module_r');
    }
    public function usersType()
    {
        return $this->belongsTo('UsersType', 'auth');
    }
    

// ZTX-增加模块的表格模板关联设置 
 public function auth()
 { 
 return $this->belongsTo('Auth', 'field_r');  
 }
 // ZTX-增加模块的表格模板关联设置

// ZTX-增加模块的表格模板关联设置 
 public function sField()
 { 
 return $this->belongsTo('SField', 'field_r');  
 }
 // ZTX-增加模块的表格模板关联设置


}