<?php
/**
 * +----------------------------------------------------------------------
 * | 记录用户上传情况模型
 * +----------------------------------------------------------------------
 *                      .::::.
 *                    .::::::::.            | AUTHOR: siyu
 *                    :::::::::::           | EMAIL: 407593529@qq.com
 *                 ..:::::::::::'           | DATETIME: 2023/06/14
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

class UploadRecord extends Base
{
    // 定义时间戳字段名
    protected $createTime = 'create_time';
    protected $updateTime = 'update_time';

    
    protected $table = 'tp_upload_records';
   
    public function userUpload()
    {
        return $this->belongsTo('UserUpload', 'upload_project');
    }
    public function module()
    {
        return $this->belongsTo('Module', 'upload_module');
    }
    

// ZTX-增加模块的表格模板关联设置 
 public function users()
 { 
 return $this->belongsTo('Users', 'user');  
 }
 // ZTX-增加模块的表格模板关联设置
// ZTX-增加模块的表格模板关联设置 
 public function testModule()
 { 
 return $this->belongsTo('TestModule', 'user');  
 }
 // ZTX-增加模块的表格模板关联设置
}