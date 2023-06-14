<?php
/**
 * +----------------------------------------------------------------------
 * | 专门用于用户上传的模块控制器
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
namespace app\admin\controller;

// 引入框架内置类
use think\facade\Request;

// 引入表格和表单构建器
use app\common\facade\MakeBuilder;
use app\common\builder\FormBuilder;
use app\common\builder\TableBuilder;

class UserUpload extends Base
{
    // 验证器
    protected $validate = 'UserUpload';

    // 当前主表
    protected $tableName = 'user_upload';

    // 当前主模型
    protected $modelName = 'UserUpload';

    public function changeText()
    {
       if (Request::isPost()) {  
           $field_list = \app\common\model\SField::where('module_id','=',$_POST['module_id'])->select()->toArray();
           $data = [];
           foreach($field_list as $k=>$v){
            if($v['type']!='hidden'){  
                if($v['required']=="1"){
                    $required = '<span style="color:red;">*&nbsp</span>';
                    $checked = "checked";
                    $disabled = 'onclick="return false;"';
                } else{
                    $required ='';
                    $checked = "";
                    $disabled = "";
                }            
            $info = [
                'value' => $v['id'],
                'text' =>  $v['name'],
                'required' =>$required,
                'checked' =>  $checked,
                'disabled' => $disabled,          
            ];
            $data[]=$info;
            }
           }
          
           return $data;
            }
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
    

$extra_js = <<<'EOD'
<script>
 $(document).on('change', '#module_r', function () {
    var module_id = $('#module_r').val();
    var html = "<div class=\"dd_radio_lable_left border-white\"><input type=\"hidden\" name=\"field_r[]\"  value=\"\">";
        
    if (module_id) {
        // field_r_value、module_id、upload_token 都不为空          
        $.ajax({
                type: "POST",
                url: "/admin/UserUpload/changeText",
                data:{module_id:module_id},
                dataType: "json",
                success: function(data){	
                    $.each(data, function(index, item) {
                            // 访问每个数组元素的子元素
                            
                        var text = "<div class=\"icheck-peterriver icheck-inline\">"+
                                    "<input type=\"checkbox\" name=\"field_r[]\" id=\"field_r"+item.value+"\" class=\"dd_radio\" value=\""+item.value+"\" "+item.checked+"  "+item.disabled+" >"+
                                    "<label for=\"field_r"+item.value+"\" >"+item.required+item.text+"</label></div>";
                            html += text;       
                            });
                            html += "</div>"; 	                          
                            $('#form_group_field_r .col-9.col-sm-9.col-md-9.col-lg-6.col-xl-4').html(html);                              
                }
            });
        }else{
            html=  "<small class=\"text-muted\">"+
                "<i class=\"fa fa-info-circle\"></i>请先选择模块</small>";
                $('#form_group_field_r .col-9.col-sm-9.col-md-9.col-lg-6.col-xl-4').html(html);
        }
    
        
});
</script>
        
EOD;


  
     // 构建页面
     $builder = FormBuilder::getInstance();
     $builder->setExtraJs($extra_js);
     if ($hideShowAll) {
         $builder->hideShowAll();
     }
     $groups ? $builder->addGroup($groups) : $builder->addFormItems($columns);
     return $builder->fetch();
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

      $extra_js = <<<'EOD'
      <script>
 $(document).on('change', '#module_r', function () {
    var module_id = $('#module_r').val();
    var html = "<div class=\"dd_radio_lable_left border-white\"><input type=\"hidden\" name=\"field_r[]\"  value=\"\">";
        
    if (module_id) {
        // field_r_value、module_id、upload_token 都不为空          
        $.ajax({
                type: "POST",
                url: "/admin/UserUpload/changeText",
                data:{module_id:module_id},
                dataType: "json",
                success: function(data){	
                    $.each(data, function(index, item) {
                            // 访问每个数组元素的子元素
                        var text = "<div class=\"icheck-peterriver icheck-inline\">"+
                                    "<input type=\"checkbox\" name=\"field_r[]\" id=\"field_r"+item.value+"\" class=\"dd_radio\" value=\""+item.value+"\" "+item.checked+"  "+item.disabled+" >"+
                                    "<label for=\"field_r"+item.value+"\" >"+item.required+item.text+"</label></div>";
                            html += text;       
                            });
                            html += "</div>"; 	
                             
                            $('#form_group_field_r .col-9.col-sm-9.col-md-9.col-lg-6.col-xl-4').html(html);                              
                }
            });
        }else{
            html=  "<small class=\"text-muted\">"+
                "<i class=\"fa fa-info-circle\"></i>请先选择模块</small>";
                $('#form_group_field_r .col-9.col-sm-9.col-md-9.col-lg-6.col-xl-4').html(html);
        }
    
        
});
</script>
        
EOD;

      // 构建页面
      $builder = FormBuilder::getInstance();
      $builder->setExtraJs($extra_js);
      if ($hideShowAll) {
          $builder->hideShowAll();
      }
      $groups ? $builder->addGroup($groups) : $builder->addFormItems($columns);
      return $builder->fetch();
  }
  

}
