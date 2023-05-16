<?php /*a:10:{s:39:"F:\site\haoqi\view\admin\field\add.html";i:1660830990;s:36:"F:\site\haoqi\view\admin\layout.html";i:1642750854;s:47:"F:\site\haoqi\view\admin\public\breadcrumb.html";i:1651030174;s:43:"F:\site\haoqi\view\admin\public\header.html";i:1654181682;s:43:"F:\site\haoqi\view\admin\public\css_js.html";i:1650874429;s:47:"F:\site\haoqi\view\admin\index\webuploader.html";i:1660828475;s:41:"F:\site\haoqi\view\admin\public\left.html";i:1648199939;s:43:"F:\site\haoqi\view\admin\public\footer.html";i:1648198181;s:48:"F:\site\haoqi\view\admin\public\foot_css_js.html";i:1648736693;s:41:"F:\site\haoqi\view\admin\index\index.html";i:1657374967;}*/ ?>

<?php if($system['display_mode'] == 0): if($layer == false): if($pjax == true): if(isset($page_title) && !empty($page_title)): ?>
<div class="content-header">
    <div class="container-fluid">
       <!-- ZTX-006，修改表格自动以页面标题样式。 -->
		<h1 class="m-0">
                    <?php echo (isset($page_title) && ($page_title !== '')?$page_title:''); ?>
                </h1>
				 <!-- ZTX-006，修改表格自动以页面标题样式。 -->
    </div>
</div>
<?php elseif($breadCrumb): ?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="m-0">
                    <?php echo htmlentities($breadCrumb['left']['0']); ?>
                    <small><?php echo htmlentities($breadCrumb['left']['1']); ?></small>
                </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo url('index/index'); ?>">Home</a></li>
                    <li class="breadcrumb-item active"><a href="<?php echo url($breadCrumb['right']['url']); ?>"><?php echo htmlentities($breadCrumb['right']['title']); ?></a></li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<?php endif; ?>
            <!--内容开始-->
<section class="content">
    <!-- <style> -->
    <!-- .typeTable tr td {padding: 5px;} -->
    <!-- .typeTable tr td:first-child{text-align: right} -->
    <!-- </style> -->
    <div class="container-fluid">
        <div class="row">
            <!--顶部提示开始-->
            <div class="col-12 alert alert-warning alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <p>
                    <?php if($info): ?>
                    字段修改时会构建SQL语句来修改数据表的字段，如不想修改可勾选<修改表字段>为[否];
                        <?php else: ?>
                        1、数据表中不存在要添加的字段时会自动创建该字段并添加到字段管理中;<br>
                        2、数据表中已存在要添加的字段时仅会插入到字段管理中;
                        <?php endif; ?>
                </p>
            </div>
            <!--顶部提示结束-->
            <?php if($layer == false): ?>
            <div class="col-12 callout search">
                <form action="">
                    <a class="btn btn-flat btn-primary" href="<?php echo url('index'); ?>"><i
                            class="fa fa-list-ul m-r-10"></i>查看全部</a>
                    <a class="btn btn-flat btn-success f_r" onclick="javascript :history.back(-1)"><i
                            class="fa fa-undo m-r-10"></i>返 回</a>
                </form>
            </div>
            <?php endif; ?>
            <!--数据表开始-->
            <?php if($info): ?>
            <form class="col-12 form_builder" method="post" action="<?php echo url('editPost'); ?>" submit_confirm>
                <input type="hidden" name="id" value="<?php echo htmlentities($info['id']); ?>" />
                <input type="hidden" name="old_field" value="<?php echo htmlentities($info['field']); ?>" />
                <?php else: ?>
                <form class="col-12 form_builder" method="post" action="<?php echo url('addPost'); ?>" submit_confirm>
                    <?php endif; ?>
                    <input type="hidden" name="module_id" value="<?php echo !empty($info) ? htmlentities($info['module_id']) : htmlentities($module_id); ?>" />
                    <!---->
                    <div class="row dd_input_group no-gutters">
                        <label
                            class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label is-required">所属模块</label>
                        <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
                            <select id="module_id" name="module_id" class="form-control">
                                <option value=''>请选择</option>
                                <?php if(is_array($modules) || $modules instanceof \think\Collection || $modules instanceof \think\Paginator): $i = 0; $__LIST__ = $modules;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$module): $mod = ($i % 2 );++$i;?>
                                <option value="<?php echo htmlentities($module['id']); ?>" <?php echo $module_id==$module['id'] ? 'selected="selected"'  :  ''; ?>>
                                    <?php echo htmlentities($module['module_name']); ?> - [ <?php echo htmlentities($module['table_name']); ?> ]</option>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                        </div>
                        <div
                            class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
                            <small class="text-muted">
                                <i class="fa fa-info-circle"></i> 字段所属的模块/表
                            </small>
                        </div>
                    </div>
                    <!---->


                    <!-- ZTX-009，重新调整字段属性设置。 -->



                    <div class="row dd_input_group no-gutters">
                        <label
                            class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label is-required">字段名称</label>
                        <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
                            <input type="text" name="field" class="form-control" placeholder="字段英文名称，如 title"
                                value="<?php echo !empty($info['field']) ? htmlentities($info['field']) : ''; ?>">
                        </div>
                        <div
                            class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
                            <small class="text-muted">
                                <i class="fa fa-info-circle"></i> 注意不要包含空格，建议全部小写，通过_分割，如 user_name, goods_price
                            </small>
                        </div>
                    </div>
                    <!---->
                    <div class="row dd_input_group no-gutters">
                        <label
                            class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label is-required">字段别名</label>
                        <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
                            <input type="text" name="name" class="form-control" placeholder="字段中文名称，如 标题"
                                value="<?php echo !empty($info['name']) ? htmlentities($info['name']) : ''; ?>">
                        </div>
                        <div
                            class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
                            <small class="text-muted">
                                <i class="fa fa-info-circle"></i> 建议不超过4个汉字
                            </small>
                        </div>
                    </div>

                    <div class="row dd_input_group no-gutters">
                        <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label">是否必填</label>
                        <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
                            <div class="dd_radio_lable_left">
                                <label class="dd_radio_lable">
                                    <input type="radio" name="required" value="1" class="dd_radio" <?php if($info): ?><?php echo $info['required']==1 ? 'checked' : ''; ?><?php endif; ?>><span>是</span>
                                </label>
                                <label class="dd_radio_lable">
                                    <input type="radio" name="required" value="0" class="dd_radio" <?php if($info): ?><?php echo $info['required']==0 ? 'checked' : ''; else: ?>checked<?php endif; ?>><span>否</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <!---->
                    <div class="row dd_input_group no-gutters">
                        <label
                            class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label is-required">字段展示</label>
                        <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
                            <div class="dd_radio_lable_left">
                                <label class="dd_radio_lable">
                                    <input type="checkbox" name="is_list" value="1" class="dd_radio" <?php if($info): ?><?php echo $info['is_list']===0 ? '' : 'checked'; else: ?>checked<?php endif; ?>><span>列表</span></label>
                                <label class="dd_radio_lable">
                                    <input type="checkbox" name="is_add" value="1" class="dd_radio" <?php if($info): ?><?php echo $info['is_add']===0 ? '' : 'checked'; else: ?>checked<?php endif; ?>><span>添加</span></label>
                                <label class="dd_radio_lable">
                                    <input type="checkbox" name="is_edit" value="1" class="dd_radio" <?php if($info): ?><?php echo $info['is_edit']===0 ? '' : 'checked'; else: ?>checked<?php endif; ?>><span>修改</span></label>
                                <label class="dd_radio_lable">
                                    <input type="checkbox" name="is_search" value="1" class="dd_radio" <?php if($info): ?><?php echo $info['is_search']===0 ? '' : 'checked'; else: ?>checked<?php endif; ?>><span>搜索</span></label>
                                <label class="dd_radio_lable">
                                    <input type="checkbox" name="is_sort" value="1" class="dd_radio" <?php if($info): ?><?php echo $info['is_sort']===0 ? '' : 'checked'; else: ?>checked<?php endif; ?>><span>排序</span></label>
                            </div>
                        </div>
                        <div
                            class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
                            <small class="text-muted">
                                <i class="fa fa-info-circle"></i> 设置字段的使用场景
                            </small>
                        </div>
                    </div>

                    <div class="row dd_input_group no-gutters">
                        <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label">字符长度</label>
                        <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
                            <div class="col-4 p-0 float-left">
                                <input type="text" name="minlength" class="form-control"
                                    value="<?php echo !empty($info['minlength']) ? htmlentities($info['minlength']) : '0'; ?>">
                            </div>
                            <div class="col-1 p-0 float-left line_height_38 text-center">-</div>
                            <div class="col-4 p-0 float-left">
                                <input type="text" name="maxlength" class="form-control"
                                    value="<?php echo !empty($info['maxlength']) ? htmlentities($info['maxlength']) : '0'; ?>">
                            </div>
                        </div>
                        <div
                            class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
                            <small class="text-muted">
                                <i class="fa fa-info-circle"></i> 通常无需配置，系统会自动设置
                            </small>
                        </div>
                    </div>
                    <!---->
                    <div class="row dd_input_group no-gutters">
                        <label
                            class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label is-required">数据源</label>
                        <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
                            <select id="data_source" name="data_source" class="form-control">
                                <option value='0'>字段本身</option>
                                <option value="1" <?php if($info): ?><?php echo $info['data_source']=='1' ? 'selected="selected"' : ''; ?><?php endif; ?>>系统字典</option>
                                <option value="2" <?php if($info): ?><?php echo $info['data_source']==' 2' ? 'selected="selected"' : ''; ?><?php endif; ?>>模型数据</option>
                            </select>
                        </div>
                        <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
                            <small class="text-muted">
                                <i class="fa fa-info-circle"></i> 通常 select|radio|checkbox 或关联了其他模型时需配置
                            </small>
                        </div>
                    </div>
                    <!---->
                    <div class="row dd_input_group no-gutters">
                        <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label">关联模型</label>
                        <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
                            <input type="text" name="relation_model" class="form-control" placeholder="请填写关联的模型"
                                   value="<?php echo !empty($info['relation_model']) ? htmlentities($info['relation_model']) : ''; ?>">
                        </div>
                        <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
                            <small class="text-muted">
                                <i class="fa fa-info-circle"></i> 只有数据源选择<模型数据>时生效，填写完整的模型名称，如 User
                            </small>
                        </div>
                    </div>
                    <!---->
                    <div class="row dd_input_group no-gutters">
                        <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label">展示字段</label>
                        <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
                            <input type="text" name="relation_field" class="form-control" placeholder="请填写关联模型对应的字段"
                                   value="<?php echo !empty($info['relation_field']) ? htmlentities($info['relation_field']) : ''; ?>">
                        </div>
                        <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
                            <small class="text-muted">
                                <i class="fa fa-info-circle"></i> 只有数据源选择<模型数据>时生效，填写完整的字段名称，如 type_name
                            </small>
                        </div>
                    </div>
                    <!---->
                    <div class="row dd_input_group no-gutters">
                        <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label">字典类型</label>
                        <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
                            <select id="dict_code" name="dict_code" class="form-control">
                                <option value=''>请选择</option>
                                <?php if(is_array($dictTypes) || $dictTypes instanceof \think\Collection || $dictTypes instanceof \think\Paginator): $i = 0; $__LIST__ = $dictTypes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$dictTypes): $mod = ($i % 2 );++$i;?>
                                <option value="<?php echo htmlentities($dictTypes['id']); ?>" <?php if($info): ?><?php echo $info['dict_code']==$dictTypes['id'] ? '
                                    selected="selected"'  :  ''; ?><?php endif; ?>><?php echo htmlentities($dictTypes['dict_name']); ?> - [ <?php echo htmlentities($dictTypes['remark']); ?> ]</option>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                        </div>
                        <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
                            <small class="text-muted">
                                <i class="fa fa-info-circle"></i> 只有数据源选择<系统字典>时生效
                            </small>
                        </div>
                    </div>
					
					<!--表单设置-->
                    <div class="row dd_input_group no-gutters">
                        <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label">表单设置</label>
                        <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
                            <div class="dd_radio_lable_left field_setup" id="form_setup">
                                <!--ajax调用文件-->
									
								
  <table class="typeTable" cellpadding="2" cellspacing="1"  >
  <?php if($groups): ?>
  <tr>
                   <td>字段分组</td><td>
                            <select id="group_id" name="group_id" class="form-control">
                                <option value=''>请选择</option>
                                <?php if(is_array($groups) || $groups instanceof \think\Collection || $groups instanceof \think\Paginator): $i = 0; $__LIST__ = $groups;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$group): $mod = ($i % 2 );++$i;?>
                                <option value="<?php echo htmlentities($group['id']); ?>" <?php echo $info['group_id']==$group['id'] ? ' selected="selected"'  :  ''; ?> ><?php echo htmlentities($group['group_name']); ?></option>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>
							 <small class="text-muted">
                                <i class="fa fa-info-circle"></i> 字段所属分组
                            </small>
                        </td>
                        
					</tr>
                    <?php endif; ?>
   
    <tr>
        <td> <label class="dd_input_l col-form-label is-required">表单类型</label></td>
        <td> <select id="type" name="type" class="form-control">
                                <option value=''>请选择字段类型</option>
                                <option value="text" <?php if($info): ?><?php echo $info['type']=='text' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>单行文本</option>
                                <option value="textarea" <?php if($info): ?><?php echo $info['type']=='textarea' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>多行文本</option>
                                <option value="radio" <?php if($info): ?><?php echo $info['type']=='radio' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>单选按钮</option>
                                <option value="checkbox" <?php if($info): ?><?php echo $info['type']=='checkbox' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>多选按钮</option>
                                <option value="date" <?php if($info): ?><?php echo $info['type']=='date' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>
                                    日期</option>
                                <option value="time" <?php if($info): ?><?php echo $info['type']=='time' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>
                                    时间</option>
                                <option value="datetime" <?php if($info): ?><?php echo $info['type']=='datetime' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>日期时间</option>
                                <option value="daterange" <?php if($info): ?><?php echo $info['type']=='daterange' ? 'selected="selected"'
                                     :  ''; ?><?php endif; ?>>日期范围</option>
                                <option value="tag" <?php if($info): ?><?php echo $info['type']=='tag' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>标签
                                </option>
                                <option value="number" <?php if($info): ?><?php echo $info['type']=='number' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>数字</option>
                                <option value="password" <?php if($info): ?><?php echo $info['type']=='password' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>密码</option>
                                <option value="select" <?php if($info): ?><?php echo $info['type']=='select' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>普通下拉菜单</option>
                                <option value="select2" <?php if($info): ?><?php echo $info['type']=='select2' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>高级下拉菜单</option>
                                <option value="linkage" <?php if($info): ?><?php echo $info['type']=='linkage' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>多级联动菜单</option>
                                <option value="image" <?php if($info): ?><?php echo $info['type']=='image' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>单张图片</option>
                                <option value="images" <?php if($info): ?><?php echo $info['type']=='images' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>多张图片</option>
                                <option value="file" <?php if($info): ?><?php echo $info['type']=='file' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>
                                    单文件上传</option>
                                <option value="files" <?php if($info): ?><?php echo $info['type']=='files' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>多文件上传</option>
                                <option value="editor" <?php if($info): ?><?php echo $info['type']=='editor' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>编辑器</option>
                                <option value="hidden" <?php if($info): ?><?php echo $info['type']=='hidden' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>隐藏域</option>
                                <option value="color" <?php if($info): ?><?php echo $info['type']=='color' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>取色器</option>
                                <!-- ZTX-007，增加字段模板“代码编辑器” -->
                                <option value="code" <?php if($info): ?><?php echo $info['type']=='code' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>
                                    代码编辑器</option>
                                <!-- ZTX-007，增加字段模板“代码编辑器” -->
                            </select>
                            </td>
                            </tr>

                            <tr>
                                <td>字段提示</td>
                                <td>
                                    <input type="text" name="tips" class="form-control" placeholder="字段右侧提示信息"
                                        value="<?php echo !empty($info['tips']) ? htmlentities($info['tips']) : ''; ?>">
                                    <small class="text-muted">
                                        <i class="fa fa-info-circle"></i> 新增/修改页面字段右侧的提示信息
                                    </small>
                                </td>
                            </tr>
                            </table>
                            <table class="typeTable" cellpadding="2" cellspacing="1" id="form_setup_table">
                                <tbody>
                                </tbody>
                            </table>


                            <!--ajax调用结束-->
                        </div>
                    </div>
        </div>
        <!--表单设置-->


        <!--列表设置-->
        <div class="row dd_input_group no-gutters">
            <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label">列表设置</label>
            <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
                <div class="dd_radio_lable_left field_setup" id="table_setup">
                    <!--ajax调用文件-->





                    <table class="typeTable" cellpadding="2" cellspacing="1">

                        <td>列表类型</td>
                        <td> <select id="table_col_type" name="table_col_type" class="form-control">
                                <option value=''>请选择字段类型</option>
                                <option value="text" <?php if($info): ?><?php echo $info['table_col_type']=='text' ? 'selected="selected"'
                                     :  ''; ?><?php endif; ?>>单行文本</option>
                                <option value="checkbox" <?php if($info): ?><?php echo $info['table_col_type']=='checkbox' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>多选按钮</option>
                                <option value="datetime" <?php if($info): ?><?php echo $info['table_col_type']=='datetime' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>日期时间</option>
                                <option value="select" <?php if($info): ?><?php echo $info['table_col_type']=='select' ? 'selected="selected"'
                                     :  ''; ?><?php endif; ?>>普通下拉菜单</option>
                                <option value="select2" <?php if($info): ?><?php echo $info['table_col_type']=='select2' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>高级下拉菜单</option>
                                <option value="image" <?php if($info): ?><?php echo $info['table_col_type']=='image' ? 'selected="selected"'
                                     :  ''; ?><?php endif; ?>>单张图片</option>
                                <option value="images" <?php if($info): ?><?php echo $info['table_col_type']=='images' ? 'selected="selected"'
                                     :  ''; ?><?php endif; ?>>多张图片</option>
                                <option value="color" <?php if($info): ?><?php echo $info['table_col_type']=='color' ? 'selected="selected"'
                                     :  ''; ?><?php endif; ?>>取色器</option>
                                <option value="customize" <?php if($info): ?><?php echo $info['table_col_type']=='customize' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>自定义</option>
                                <!-- <option value="linkage" <?php if($info): ?><?php echo $info['table_col_type']=='linkage' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>多级联动菜单</option> -->
                                <!-- <option value="textarea" <?php if($info): ?><?php echo $info['table_col_type']=='textarea' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>多行文本</option> -->
                                <!-- <option value="radio" <?php if($info): ?><?php echo $info['table_col_type']=='radio' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>单选按钮</option> -->
                                <!-- <option value="file" <?php if($info): ?><?php echo $info['table_col_type']=='file' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>单文件上传</option> -->
                                <!-- <option value="files" <?php if($info): ?><?php echo $info['table_col_type']=='files' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>多文件上传</option> -->
                                <!-- <option value="editor" <?php if($info): ?><?php echo $info['table_col_type']=='editor' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>编辑器</option> -->
                                <!-- <option value="hidden" <?php if($info): ?><?php echo $info['table_col_type']=='hidden' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>隐藏域</option> -->
                                <!-- <option value="daterange" <?php if($info): ?><?php echo $info['table_col_type']=='daterange' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>日期范围</option> -->
                                <!-- <option value="tag" <?php if($info): ?><?php echo $info['table_col_type']=='tag' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>标签</option> -->
                                <!-- <option value="number" <?php if($info): ?><?php echo $info['table_col_type']=='number' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>数字</option> -->
                                <!-- <option value="password" <?php if($info): ?><?php echo $info['table_col_type']=='password' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>密码</option> -->
                                <!-- <option value="date" <?php if($info): ?><?php echo $info['table_col_type']=='date' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>日期</option> -->
                                <!-- <option value="time" <?php if($info): ?><?php echo $info['table_col_type']=='time' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>时间</option> -->
                            </select>
                        </td>
                        </tr>

                        <tr>
                            <td>搜索类型</td>
                            <td>
                                <input type="text" name="search_type" class="form-control" placeholder="请填写搜索类型"
                                    value="<?php echo !empty($info['search_type']) ? htmlentities($info['search_type']) : '='; ?>">
                                <small class="text-muted">
                                    <i class="fa fa-info-circle"></i> 如：=, <>, >, <, LIKE,in等表达式，如字段可被搜索则必须设置 </small>
                            </td>
                        </tr>
                        <tr>
                            <td>列对齐</td>
                            <td>
                                <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
                                    <div class="dd_radio_lable_left">
                                        <label class="dd_radio_lable">
                                            <input type="radio" name="table_col_align" value="left" class="dd_radio" <?php if($info): ?><?php echo $info['table_col_align']=='left' ? 'checked' : ''; ?><?php endif; ?>><span>左对齐</span>
                                        </label>
                                        <label class="dd_radio_lable">
                                            <input type="radio" name="table_col_align" value="right" class="dd_radio"
                                                <?php if($info): ?><?php echo $info['table_col_align']=='right' ? 'checked' : ''; else: ?>checked<?php endif; ?>><span>右对齐</span>
                                        </label>
                                        <label class="dd_radio_lable">
                                            <input type="radio" name="table_col_align" value="center" class="dd_radio"
                                                <?php if($info): ?><?php echo $info['table_col_align']=='center' ? 'checked' : ''; else: ?>checked<?php endif; ?>><span>居中</span>
                                        </label>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>列初始显示状态</td>
                            <td>
                                <label class="dd_radio_lable">
                                    <input type="radio" name="table_col_visible" value="false" class="dd_radio" <?php if($info): ?><?php echo $info['table_col_visible']=='false' ? 'checked' : ''; ?><?php endif; ?>><span>显示</span>
                                </label>
                                <label class="dd_radio_lable">
                                    <input type="radio" name="table_col_visible" value="true" class="dd_radio" <?php if($info): ?><?php echo $info['table_col_visible']=='true' ? 'checked' : ''; else: ?>checked<?php endif; ?>><span>隐藏</span>
                                </label>

                            </td>
                        </tr>
                        <tr>
                            <td>格式化</td>
                            <td>
                                <input id="table_col_formatter" type="text" name="table_col_formatter"
                                    class="form-control" readonly="readonly"
                                    value="<?php echo !empty($info['table_col_formatter']) ? htmlentities($info['table_col_formatter']) : 'function(value, row, index,field) { return value;}'; ?>">
                                <small class="text-muted">
                                    <i class="fa fa-info-circle"></i> 当列表类型为“自定义时”有效。value: 字段值，row：行记录数据，index:
                                    行索引，field: 行字段名。
                                </small>
                            </td>
                        </tr>

                    </table>

                    <script>
                        $(function () {
                            // CodeMirror
                            var codeEditor = CodeMirror.fromTextArea(document.getElementById("table_col_formatter"), {
                                mode: "javascript",     // 编辑器语言
                                theme: "monokai",   // 编辑器主题
                                lineNumbers: true,              // 显示行号
                                showCursorWhenSelecting: true,  // 文本选中时显示光标
                                lineWrapping: true,             // 代码折叠
                            });
                            codeEditor.setSize('auto', "200px");




                        })
                    </script>
                    <table class="typeTable" cellpadding="2" cellspacing="1" id="table_setup_table">
                        <tbody>
                        </tbody>

                    </table>

                    <!--ajax调用结束-->
                </div>
            </div>
        </div>
        <!--列表设置-->
        <!---->
        <div class="row dd_input_group no-gutters">
            <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label">数据设置</label>
            <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
                <div class="dd_radio_lable_left field_setup" id="field_setup">
                    <!--ajax调用文件-->
                    <!--ajax调用结束-->
                </div>
            </div>
        </div>
        <!---->
        <div class="row dd_input_group no-gutters">
            <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label">状态</label>
            <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
                <div class="dd_radio_lable_left">
                    <?php if($info): ?>
                    <label class="dd_radio_lable">
                        <input type="radio" name="status" value="1" class="dd_radio" <?php echo !empty($info['status']) ? 'checked'  :  ''; ?>><span>显示</span>
                    </label>
                    <label class="dd_radio_lable">
                        <input type="radio" name="status" value="0" class="dd_radio" <?php echo !empty($info['status']) ? ''  :  'checked'; ?>><span>隐藏</span>
                    </label>
                    <?php else: ?>
                    <label class="dd_radio_lable">
                        <input type="radio" name="status" value="1" class="dd_radio" checked><span>显示</span>
                    </label>
                    <label class="dd_radio_lable">
                        <input type="radio" name="status" value="0" class="dd_radio"><span>隐藏</span>
                    </label>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <!---->
        <div class="row dd_input_group no-gutters">
            <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label is-required">排序</label>
            <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
                <input type="text" name="sort" class="form-control" placeholder="请输入排序"
                    value="<?php echo !empty($info['sort']) ? htmlentities($info['sort']) :  '50'; ?>">
            </div>
            <div
                class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
                <small class="text-muted">
                    <i class="fa fa-info-circle"></i> 排序为从小到大排序，默认为50
                </small>
            </div>
        </div>
        <!---->
        <div class="row dd_input_group no-gutters">
            <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label">字段备注</label>
            <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
                <textarea class="form-control" name="remark" rows="3"
                    placeholder="请输入字段备注"><?php echo htmlentities((isset($info['remark']) && ($info['remark'] !== '')?$info['remark']:'')); ?></textarea>
            </div>
            <div
                class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
                <small class="text-muted">
                    <i class="fa fa-info-circle"></i> 字段备注
                </small>
            </div>
        </div>
        <?php if($info): ?>
        <!---->
        <div class="row dd_input_group no-gutters">
            <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label">修改表字段</label>
            <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
                <div class="dd_radio_lable_left">
                    <label class="dd_radio_lable">
                        <input type="radio" name="execute_sql" value="1" class="dd_radio" checked><span>是</span>
                    </label>
                    <label class="dd_radio_lable">
                        <input type="radio" name="execute_sql" value="0" class="dd_radio"><span>否</span>
                    </label>
                </div>
            </div>
            <div
                class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
                <small class="text-muted">
                    <i class="fa fa-info-circle"></i> 选择是会构建SQL语句来修改数据表的字段，选择否则不修改
                </small>
            </div>
        </div>
        <?php endif; ?>
        <!---->
        <div class="row dd_input_group form-builder-submit no-gutters <?php if($layer == true): ?>hide<?php endif; ?>">
            <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-11 offset-sm-2 offset-md-2 offset-lg-2 offset-xl-1">
                <button type="submit" class="btn btn-flat btn-primary ">提 交</button>
                <button type="button" class="btn btn-flat btn-default" onclick="javascript :history.back(-1)">返 回
                </button>
            </div>
        </div>
        </form>
        <!--数据表结束-->
    </div>
    </div>
</section>
<!--内容结束-->
<!-- ZTX-009，重新调整字段属性设置。 -->
<script>
    $(function () {
        // 字段变更时触发
        $("#type").change(function () {
            var type = $(this).val();
            var url = "<?php echo url('changeType'); ?>?isajax=1&moduleId=<?php echo htmlentities($module_id); ?>&type=" + type;
            field_setting(type, url);
        });
        // 编辑字段时触发
        <?php if($info): ?>
        var type = '<?php echo htmlentities($info['type']); ?>';
        var field = '<?php echo htmlentities($info['field']); ?>';
        var url = "<?php echo url('changeType'); ?>?isajax=1&moduleId=<?php echo htmlentities($info['module_id']); ?>&type=" + type + "&field=" + field;
        field_setting(type, url);
        <?php endif; ?>

        });
    //选择后变更
    function field_setting(type, url, data) {
        $.ajax({
            type: "POST",
            url: url,
            data: '',
            beforeSend: function () {
                $('#field_setup').html('<i class="fa fa-spinner fa-spin fa-fw"></i>');
            },
            success: function (msg) {
                // <!-- ZTX-009，重新调整字段属性设置。 -->
                var form_begin = msg.indexOf("form_begin@") + 11;//定位表单设置元素的初始位置
                var form_end = msg.indexOf("form_end@");//定位表单设置元素的结束位置
                var form_msg = msg.substring(form_begin, form_end);//截取表单设置元素

                var table_begin = msg.indexOf("table_begin@") + 12;//定位列表设置元素的初始位置
                var table_end = msg.indexOf("table_end@");//定位表单设置元素的结束位置
                var table_msg = msg.substring(table_begin, table_end);//截取表单设置元素
                $("#form_setup_table tbody").html(form_msg);//将表单设置元素加入到表单设置框架内
                $("#table_setup_table tbody").html(table_msg);//将表单设置元素加入到表单设置框架内
                $('#field_setup').html(msg);//将字段设置元素加入到字段设置框架内
                // <!-- ZTX-009，重新调整字段属性设置。 -->
            }
        });
    }
</script>
        <?php else: ?>
            <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo htmlentities($system['label_logo']); ?>" /> <!--折腾侠修改标签页图标为动态自定义--> 
	<!-- ※折腾侠：修改后台页面标题为动态标题，可自定义 -->
    <title><?php echo htmlentities((isset($system['backstage_name']) && ($system['backstage_name'] !== '')?$system['backstage_name']:'SIYUCMS')); ?> | 控制台</title>

    <!-- layui -->
<link rel="stylesheet" href="/static/plugins/layui/css/layui.css">
<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/google-fonts/google.fonts.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/fontawesome-free/css/all.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="https://cdn.staticfile.org/ionicons/2.0.1/css/ionicons.min.css">
<!-- Tempusdominus Bootstrap 4 -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
<!-- iCheck -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/dist/css/AdminLTE.min.css">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
<!-- Daterange picker -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/daterangepicker/daterangepicker.css">
<!-- Bootstrap Color Picker -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
<!-- Toastr -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/toastr/toastr.min.css">
<!-- pace-progress -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/pace-progress/themes/black/pace-theme-flat-top.css">
<!-- jQuery -->
<script src="/static/plugins/AdminLTE/plugins/jquery/jquery.min.js"></script>
<!-- layui -->
<script src="/static/plugins/layui/layui.js"></script>
<!-- webuploader -->
<link rel="stylesheet" href="/static/plugins/webuploader-0.1.5/webuploader.css">
<script src="/static/plugins/webuploader-0.1.5/webuploader.min.js"></script>
<script type="text/javascript">
    /**
     * 封装上传组件
     * @param list
     * @param filePicker_image
     * @param image_preview
     * @param image
     * @param more            是否图集
     * @param upload_allowext 格式限制
     * @param size            大小限制
     * @param type            上传类型[file/img]
     */
    function webupload(list, filePicker_image, image_preview, image, more, upload_allowext, size, type) {
        if (upload_allowext) {
            upload_allowext = upload_allowext.replace(/\|/g, ",");
        }
        if (size) {
            size = size * 1024;
        } else {
            size = 10240 * 1024 * 1024;
        }
        type = type || 'img';
	
		//ZTX-005重新设置上传文件目录
		var pathName = window.document.location.pathname;//获取网址目录
		var pos = pathName.lastIndexOf('/');//获取斜杠的最后位置
		var path = encodeURI(pathName.substr(1,pos));//获取地址目录
		//ZTX-005重新设置上传文件目录
        var $list = $("#" + list + "");                                // 这几个初始化全局的百度文档上没说明
        var GUID = WebUploader.Base.guid();                            // 一个GUID
		
        var uploader = WebUploader.create({
		// ZTX-002折腾侠：增加从服务器上删除对应文件的操作,并开启允许重复上传
			duplicate :true,
            auto: true,                                                // 选完文件后，是否自动上传。
            swf: '/static/plugins/webuploader-0.1.5/uploader.swf',     // 加载swf文件，路径一定要对
            server: '<?php echo url("upload/index"); ?>' + '?upload_type=' + type+'&path='+path, // 文件接收服务端//ZTX-004重新设置上传文件目录：“+'&path='+path”
			
            pick: '#' + filePicker_image,                              // 选择文件的按钮。可选。
            resize: false,                                             // 不压缩image, 默认如果是jpeg，文件上传前会压缩一把再上传！
            chunked: true,                                             // 是否分片
            chunkSize: 5 * 1024 * 1024,                                // 分片大小
            threads: 1,                                                // 上传并发数
            formData: {
                // 由于Http的无状态特征，在往服务器发送数据过程传递一个进入当前页面是生成的GUID作为标示
                GUID: GUID,                                            // 自定义参数
            },
            compress: false,
            fileSingleSizeLimit: size,                                 // 限制大小200M，单文件
            //fileSizeLimit: allMaxSize*1024*1024,                     // 限制大小10M，所有被选文件，超出选择不上
            accept: {
                title: '上传图片/文件',
                extensions: upload_allowext,                           // 允许上传的类型 'gif,jpg,jpeg,bmp,png'
                mimeTypes: '*',                                        // 默认全部文件，为兼容上传文件功能，如只上传图片可写成img/*
            }
        });

        // 文件上传过程中创建进度条实时显示。
        uploader.on('uploadProgress', function (file, percentage) {
            var $li = $list,
                    $percent = $li.find('.progress .progress-bar');
            // 避免重复创建
            if (!$percent.length) {
                $percent = $('<div class="progress progress-striped active">' +
                        '<div class="progress-bar" role="progressbar" style="width: 0%">' +
                        '</div>' +
                        '</div>').appendTo($li).find('.progress-bar');
            }
            //$li.find('p.state').text('上传中');
            $percent.css('width', percentage * 100 + '%');
        });
        uploader.on('uploadSuccess', function (file, response) {
            if (response.code == 0) {
                $.modal.alertError(response.msg);
            }
            var url = response.url;
            if (more == true) {
			// <!-- ZTX-004 设置图片预览   by 折腾侠 -->
			
			if(type=='img'){
			
			var images = '' +
                    '<div class="row no-gutters">' +
                    '   <div class="col-4 col-sm-4"><input type="text" name="' + image + '[]" value="' + url + '" class="form-control"/><input type="text" name="' + image + '_small[]" value="' + response.small + '" class="hide"/></div>' +
                    '   <div class="col-3 col-sm-3"><input class="form-control input-sm" type="text" name="' + image + '_title[]" value="' + file.name + '" ></div>' +
                    '   <div class="col-4 col-sm-3">' +
                    '       <div class="btn-group">' +
                    '           <button type="button" class="btn btn-default btn-sm move_up_images"><i class="fa fa-chevron-up"></i></button>' +
                    '           <button type="button" class="btn btn-default btn-sm move_down_images"><i class="fa fa-chevron-down"></i></button>' +
                    '           <button type="button" class="btn btn-default btn-sm remove_images"><i class="fa fa-times"></i></button>' +
                    '       </div>' +
                    '   </div>' +
					'   <div class="col-4 col-sm-2"><a href="'+ url +'" target="_blank"> <img class="image_preview_info" src="'+ response.small +'"  ></a></div>'+
					
					
                    '</div>';}
			else{
			var images = '' +
                    '<div class="row no-gutters">' +
                    '   <div class="col-4 col-sm-6"><input type="text" name="' + image + '[]" value="' + url + '" class="form-control"/></div>' +
                    '   <div class="col-3 col-sm-3"><input class="form-control input-sm" type="text" name="' + image + '_title[]" value="' + file.name + '" ></div>' +
                    '   <div class="col-4 col-sm-3">' +
                    '       <div class="btn-group">' +
                    '           <button type="button" class="btn btn-default btn-sm move_up_images"><i class="fa fa-chevron-up"></i></button>' +
                    '           <button type="button" class="btn btn-default btn-sm move_down_images"><i class="fa fa-chevron-down"></i></button>' +
                    '           <button type="button" class="btn btn-default btn-sm remove_images"><i class="fa fa-times"></i></button>' +
                    '       </div>' +
                    '   </div>' +
					
                    '</div>';
			}
                
                var images_list = $('#more_images_' + image).html();

                $('#more_images_' + image).html(images + images_list);
				// <!--ZTX-004  设置图片预览   by 折腾侠 -->
	
				
            } else {
                $("input[name='" + image + "']").val(url);
                $("#" + image_preview).attr('src', url);
                $("#" + image_preview).parent("a").attr('href', url);
			
            }
        });
        uploader.on('uploadComplete', function (file) {
        //   <!-- ZTX-001-折腾侠：当多个文件上传完成后，原代码把“.progress”元素设置成隐藏，导致第二个文件上传以后的进度条无法显示。 -->
			// <!-- 原代码：$list.find('.progress').fadeOut();  -->
			
            $list.find('.progress').remove();
			
			//  <!-- ZTX-001折腾侠：上传完成后，把“.progress”元素直接删除，下一个文件上传时就会显示进度条。 -->
			
        });
        // 错误提示
        uploader.on("error", function (type) {
            if (type == "Q_TYPE_DENIED") {
                $.modal.alertError('请上传' + upload_allowext + '格式的文件！');
            } else if (type == "F_EXCEED_SIZE") {
                $.modal.alertError('单个文件大小不能超过' + size / 1024 + 'kb！');
            } else if (type == "F_DUPLICATE") {
                $.modal.alertError('请不要重复选择文件');
            } else {
                $.modal.alertError('上传出错！请检查后重新上传！错误代码' + type);
            }
        });
    }
</script>
<?php if($system['editor'] == '1'): ?>
<!-- ueditor -->
<script src="/static/plugins/ueditor/ueditor.config.js"></script>
<script src="/static/plugins/ueditor/ueditor.all.min.js"> </script>
<script src="/static/plugins/ueditor/lang/zh-cn/zh-cn.js"></script>
<?php else: ?>
<!-- ckeditor4 -->
<script src="/static/plugins/ckeditor/ckeditor.js"></script>
<?php endif; ?>
<!-- Bootstrap Table -->
<link rel="stylesheet" href="/static/plugins/bootstrap-table/bootstrap-table.min.css" />
<!-- layer 弹层组件 -->
<script>
    layui.use('layer',
        function () {
            var layer = layui.layer;
        })
</script>
<!-- zTree 树节点组件 -->
<script type="text/javascript" src="/static/plugins/zTree_v3/js/jquery.ztree.core.js"></script>
<script type="text/javascript" src="/static/plugins/zTree_v3/js/jquery.ztree.excheck.js"></script>
<!-- jQueryTagsInput -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/jQueryTagsInput/jquery.tagsinput.css">
<script src="/static/plugins/AdminLTE/plugins/jQueryTagsInput/jquery.tagsinput.js"></script>
<!-- Select2 -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/select2/css/select2.min.css">
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
<script src="/static/plugins/AdminLTE/plugins/select2/js/select2.full.min.js"></script>
<!-- CodeMirror -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/codemirror/codemirror.css">
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/codemirror/theme/monokai.css">

<!-- SIYUCMS -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/dist/css/siyucms.css?v=20211203">
<script src="/static/plugins/siyu-ui.js?v=20211203"></script>
<script src="/static/plugins/siyucms.js?v=20211203"></script>
<!-- jQuery-ui ZTX-005-->
<link rel="stylesheet" href="/static/plugins/jquery-ui-1.13.1.custom/jquery-ui.css">
<link rel="stylesheet" href="/static/plugins/jquery-ui-1.13.1.custom/jquery-ui.structure.css">
<link rel="stylesheet" href="/static/plugins/jquery-ui-1.13.1.custom/jquery-ui.theme.css">
<script src="/static/plugins/jquery-ui-1.13.1.custom/jquery-ui.js"></script>

</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed pace-primary text-sm <?php if($layer == true): ?>layer-body<?php endif; ?>" data-display_mode="<?php echo htmlentities($system['display_mode']); ?>">
<div class="wrapper">

<?php if($iframe == false && $layer == false): ?>
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>

        <!-- Left navbar links -->
        <ul class="navbar-nav js_left_menu">
            <li class="nav-item active">
                <a class="nav-link" href="javascript:;">
                    <i class="fas fa-cog"></i>
                    <span>主导航</span>
                </a>
            </li>
            <?php if(count($cates)): ?>
            <li class="nav-item">
                <a class="nav-link" href="javascript:;">
                    <i class="fa fa-th-large"></i>
                    <span>内容管理</span>
                </a>
            </li>
            <?php endif; ?>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- User Account Menu -->
            <li class="nav-item dropdown user user-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo session('admin.image') ?: '/static/plugins/AdminLTE/dist/img/user2-160x160.jpg'; ?>" class="user-image">
                    <span class="d-none d-lg-block"><?php echo session('admin.nickname') ?: session('admin.username'); ?></span>
                </a>
                <ul class="dropdown-menu">
                    <li class="user-header">
                        <img src="<?php echo session('admin.image') ?: '/static/plugins/AdminLTE/dist/img/user2-160x160.jpg'; ?>" class="img-circle">
                        <h5>上次登录时间：<?php echo session('admin.login_time'); ?></h5>
                        <h5>上次登录IP：<?php echo session('admin.login_ip'); ?></h5>
                    </li>
                    <li class="user-footer">
                        <div class="pull-left">
                            <a href="<?php echo url('Admin/edit',['id'=>session('admin.id')]); ?>" class="btn btn-default btn-flat">资料</a>
                        </div>
                        <div class="pull-right">
                            <a href="<?php echo url('Login/logout'); ?>" class="btn btn-default btn-flat">退出</a>
                        </div>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button" title="全屏">
                    <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button" title="自定义">
                    <i class="fas fa-palette"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link js_clear_cash" href="javascript:;" title="清空缓存">
                    <i class="fas fa-sync-alt"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo htmlentities($indexUrl); ?>" target="_blank" title="前台首页">
                    <i class="fas fa-home"></i>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->
<?php endif; ?>
                <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-default elevation-4">
        <!-- Brand Logo -->
        <a href="<?php echo url('Index/index'); ?>" class="brand-link">
		
		<!-- 折腾侠：修改后台logo和名称为动态 -->
            <img src="<?php echo htmlentities((isset($system['backstage_logo']) && ($system['backstage_logo'] !== '')?$system['backstage_logo']:'/static/plugins/AdminLTE/dist/img/AdminLTELogo.png')); ?>" alt="<?php echo htmlentities((isset($system['backstage_name']) && ($system['backstage_name'] !== '')?$system['backstage_name']:'SIYUCMS')); ?>" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light"><?php echo htmlentities((isset($system['backstage_name']) && ($system['backstage_name'] !== '')?$system['backstage_name']:'SIYUCMS')); ?></span>
        </a>
		<!-- 折腾侠：修改后台logo和名称为动态 -->
        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="<?php echo session('admin.image') ?: '/static/plugins/AdminLTE/dist/img/user2-160x160.jpg'; ?>" class="img-circle elevation-2">
                </div>
                <div class="info">
                    <a href="<?php echo url('Admin/edit',['id'=>session('admin.id')]); ?>" class="d-block"><?php echo session('admin.nickname') ?: session('admin.username'); ?></a>
                </div>
            </div>

            <!-- SidebarSearch Form -->
            <div class="form-inline">
                <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar">
                            <i class="fas fa-search fa-fw"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2 mb-2">
                <ul class="nav nav-pills no_radius nav-sidebar flex-column nav-child-indent js_left_menu_show" data-widget="treeview" role="menu" data-accordion="true">
                    <li data-item="0" class="nav-header nav-item_0">主导航</li>
                    <?php if(is_array($menus) || $menus instanceof \think\Collection || $menus instanceof \think\Paginator): $i = 0; $__LIST__ = $menus;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <li data-item="0" class="nav-item nav-item_0 has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon <?php echo htmlentities((isset($vo['icon']) && ($vo['icon'] !== '')?$vo['icon']:'fas fa-bars')); ?>"></i>
                            <p>
                                <?php echo htmlentities($vo['title']); ?>
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <?php if(is_array($vo['children']) || $vo['children'] instanceof \think\Collection || $vo['children'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voo): $mod = ($i % 2 );++$i;?>
                            <li class="nav-item <?php if(count($voo['children'])): ?>has-treeview<?php endif; ?>">
                                <a href="<?php if(count($voo['children'])): ?>#<?php else: ?><?php echo htmlentities($voo['href']); ?><?php endif; ?>" class="nav-link">
                                    <i class="<?php echo htmlentities((isset($voo['icon']) && ($voo['icon'] !== '')?$voo['icon']:'far fa-circle')); ?> nav-icon"></i>
                                    <p><?php echo htmlentities($voo['title']); if(count($voo['children'])): ?><i class="right fas fa-angle-left"></i><?php endif; ?></p>
                                </a>
                                <?php if(count($voo['children'])): ?>
                                <ul class="nav nav-treeview">
                                    <?php if(is_array($voo['children']) || $voo['children'] instanceof \think\Collection || $voo['children'] instanceof \think\Paginator): $i = 0; $__LIST__ = $voo['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vooo): $mod = ($i % 2 );++$i;?>
                                    <li class="nav-item">
                                        <a href="<?php echo htmlentities($vooo['href']); ?>" class="nav-link">
                                            <i class="<?php echo htmlentities((isset($vooo['icon']) && ($vooo['icon'] !== '')?$vooo['icon']:'far fa-circle')); ?> nav-icon"></i>
                                            <p><?php echo htmlentities($vooo['title']); ?></p>
                                        </a>
                                    </li>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </ul>
                                <?php endif; ?>
                            </li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                    <li data-item="1" class="nav-header nav-item_1" style="display: none">内容管理</li>
                    <?php if(is_array($cates) || $cates instanceof \think\Collection || $cates instanceof \think\Paginator): $i = 0; $__LIST__ = $cates;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <li data-item="1" class="nav-item nav-item_1 <?php if(count($vo['sub'])): ?>has-treeview<?php endif; ?>" style="display: none">
                        <a href="<?php if(count($vo['sub'])): ?>#<?php else: ?><?php echo url($vo['module']['model_name'].'/index',['cate_id'=>$vo['id']]); ?><?php endif; ?>" class="nav-link">
                            <i class="fas fa-bars nav-icon"></i>
                            <p>
                                <?php echo htmlentities($vo['cate_name']); if(count($vo['sub'])): ?><i class="right fas fa-angle-left"></i><?php endif; ?>
                            </p>
                        </a>
                        <?php if(count($vo['sub'])): ?>
                        <ul class="nav nav-treeview">
                            <?php if(is_array($vo['sub']) || $vo['sub'] instanceof \think\Collection || $vo['sub'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['sub'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voo): $mod = ($i % 2 );++$i;?>
                            <li class="nav-item">
                                <a href="<?php echo url($voo['module']['model_name'].'/index',['cate_id'=>$voo['id']]); ?>" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <?php echo htmlentities($voo['left_html']); ?>
                                    <p>
                                        <?php echo htmlentities($voo['original_cate_name']); if(count($voo['sub'])): ?><i class="right fas fa-angle-left"></i><?php endif; ?>
                                    </p>
                                </a>
                                <?php if(count($voo['sub'])): ?>
                                <ul class="nav nav-treeview">
                                    <?php if(is_array($voo['sub']) || $voo['sub'] instanceof \think\Collection || $voo['sub'] instanceof \think\Paginator): $i = 0; $__LIST__ = $voo['sub'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vooo): $mod = ($i % 2 );++$i;?>
                                    <li class="nav-item">
                                        <a href="<?php echo url($vooo['module']['model_name'].'/index',['cate_id'=>$vooo['id']]); ?>" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <?php echo htmlentities($vooo['left_html']); ?>
                                            <p>
                                                <?php echo htmlentities($vooo['original_cate_name']); ?>
                                            </p>
                                        </a>
                                    </li>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </ul>
                                <?php endif; ?>
                            </li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                        <?php endif; ?>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <script>
        // 主导航、内容管理切换
        $(".js_left_menu li").click(function () {
            // 通过 .index()方法获取元素下标（从0开始）
            var _index = $(this).index();
            // 让左侧菜单第 _index 个显示出来，其他的隐藏起来
            $(".js_left_menu_show > li").hide();
            $(".js_left_menu_show > li.nav-item_" + _index).show();
            // 当前菜单添加选中效果，同级的移除选中效果
            $(this).addClass('active').siblings('li').removeClass('active');
        })

        // 清空缓存
        $(".js_clear_cash").click(function () {
            var url = "<?php echo url('index/clear'); ?>";
            $.modal.confirm('确定要清除缓存吗？', function () {
                $.post(url, {
                    del: true
                }, function (result) {
                    if (result.error == 0) {
                        $.modal.alertSuccess(result.msg, function (index) {
                            layer.close(index);
                            $.pjax.reload('.content-wrapper'); // pjax 重载
                        });
                    } else {
                        $.modal.alertError(result.msg);
                    }
                });
            });
        })

    </script>
            <div class="content-wrapper">
                <?php if(isset($page_title) && !empty($page_title)): ?>
<div class="content-header">
    <div class="container-fluid">
       <!-- ZTX-006，修改表格自动以页面标题样式。 -->
		<h1 class="m-0">
                    <?php echo (isset($page_title) && ($page_title !== '')?$page_title:''); ?>
                </h1>
				 <!-- ZTX-006，修改表格自动以页面标题样式。 -->
    </div>
</div>
<?php elseif($breadCrumb): ?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="m-0">
                    <?php echo htmlentities($breadCrumb['left']['0']); ?>
                    <small><?php echo htmlentities($breadCrumb['left']['1']); ?></small>
                </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo url('index/index'); ?>">Home</a></li>
                    <li class="breadcrumb-item active"><a href="<?php echo url($breadCrumb['right']['url']); ?>"><?php echo htmlentities($breadCrumb['right']['title']); ?></a></li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<?php endif; ?>
                <!--内容开始-->
<section class="content">
    <!-- <style> -->
    <!-- .typeTable tr td {padding: 5px;} -->
    <!-- .typeTable tr td:first-child{text-align: right} -->
    <!-- </style> -->
    <div class="container-fluid">
        <div class="row">
            <!--顶部提示开始-->
            <div class="col-12 alert alert-warning alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <p>
                    <?php if($info): ?>
                    字段修改时会构建SQL语句来修改数据表的字段，如不想修改可勾选<修改表字段>为[否];
                        <?php else: ?>
                        1、数据表中不存在要添加的字段时会自动创建该字段并添加到字段管理中;<br>
                        2、数据表中已存在要添加的字段时仅会插入到字段管理中;
                        <?php endif; ?>
                </p>
            </div>
            <!--顶部提示结束-->
            <?php if($layer == false): ?>
            <div class="col-12 callout search">
                <form action="">
                    <a class="btn btn-flat btn-primary" href="<?php echo url('index'); ?>"><i
                            class="fa fa-list-ul m-r-10"></i>查看全部</a>
                    <a class="btn btn-flat btn-success f_r" onclick="javascript :history.back(-1)"><i
                            class="fa fa-undo m-r-10"></i>返 回</a>
                </form>
            </div>
            <?php endif; ?>
            <!--数据表开始-->
            <?php if($info): ?>
            <form class="col-12 form_builder" method="post" action="<?php echo url('editPost'); ?>" submit_confirm>
                <input type="hidden" name="id" value="<?php echo htmlentities($info['id']); ?>" />
                <input type="hidden" name="old_field" value="<?php echo htmlentities($info['field']); ?>" />
                <?php else: ?>
                <form class="col-12 form_builder" method="post" action="<?php echo url('addPost'); ?>" submit_confirm>
                    <?php endif; ?>
                    <input type="hidden" name="module_id" value="<?php echo !empty($info) ? htmlentities($info['module_id']) : htmlentities($module_id); ?>" />
                    <!---->
                    <div class="row dd_input_group no-gutters">
                        <label
                            class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label is-required">所属模块</label>
                        <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
                            <select id="module_id" name="module_id" class="form-control">
                                <option value=''>请选择</option>
                                <?php if(is_array($modules) || $modules instanceof \think\Collection || $modules instanceof \think\Paginator): $i = 0; $__LIST__ = $modules;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$module): $mod = ($i % 2 );++$i;?>
                                <option value="<?php echo htmlentities($module['id']); ?>" <?php echo $module_id==$module['id'] ? 'selected="selected"'  :  ''; ?>>
                                    <?php echo htmlentities($module['module_name']); ?> - [ <?php echo htmlentities($module['table_name']); ?> ]</option>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                        </div>
                        <div
                            class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
                            <small class="text-muted">
                                <i class="fa fa-info-circle"></i> 字段所属的模块/表
                            </small>
                        </div>
                    </div>
                    <!---->


                    <!-- ZTX-009，重新调整字段属性设置。 -->



                    <div class="row dd_input_group no-gutters">
                        <label
                            class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label is-required">字段名称</label>
                        <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
                            <input type="text" name="field" class="form-control" placeholder="字段英文名称，如 title"
                                value="<?php echo !empty($info['field']) ? htmlentities($info['field']) : ''; ?>">
                        </div>
                        <div
                            class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
                            <small class="text-muted">
                                <i class="fa fa-info-circle"></i> 注意不要包含空格，建议全部小写，通过_分割，如 user_name, goods_price
                            </small>
                        </div>
                    </div>
                    <!---->
                    <div class="row dd_input_group no-gutters">
                        <label
                            class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label is-required">字段别名</label>
                        <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
                            <input type="text" name="name" class="form-control" placeholder="字段中文名称，如 标题"
                                value="<?php echo !empty($info['name']) ? htmlentities($info['name']) : ''; ?>">
                        </div>
                        <div
                            class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
                            <small class="text-muted">
                                <i class="fa fa-info-circle"></i> 建议不超过4个汉字
                            </small>
                        </div>
                    </div>

                    <div class="row dd_input_group no-gutters">
                        <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label">是否必填</label>
                        <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
                            <div class="dd_radio_lable_left">
                                <label class="dd_radio_lable">
                                    <input type="radio" name="required" value="1" class="dd_radio" <?php if($info): ?><?php echo $info['required']==1 ? 'checked' : ''; ?><?php endif; ?>><span>是</span>
                                </label>
                                <label class="dd_radio_lable">
                                    <input type="radio" name="required" value="0" class="dd_radio" <?php if($info): ?><?php echo $info['required']==0 ? 'checked' : ''; else: ?>checked<?php endif; ?>><span>否</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <!---->
                    <div class="row dd_input_group no-gutters">
                        <label
                            class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label is-required">字段展示</label>
                        <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
                            <div class="dd_radio_lable_left">
                                <label class="dd_radio_lable">
                                    <input type="checkbox" name="is_list" value="1" class="dd_radio" <?php if($info): ?><?php echo $info['is_list']===0 ? '' : 'checked'; else: ?>checked<?php endif; ?>><span>列表</span></label>
                                <label class="dd_radio_lable">
                                    <input type="checkbox" name="is_add" value="1" class="dd_radio" <?php if($info): ?><?php echo $info['is_add']===0 ? '' : 'checked'; else: ?>checked<?php endif; ?>><span>添加</span></label>
                                <label class="dd_radio_lable">
                                    <input type="checkbox" name="is_edit" value="1" class="dd_radio" <?php if($info): ?><?php echo $info['is_edit']===0 ? '' : 'checked'; else: ?>checked<?php endif; ?>><span>修改</span></label>
                                <label class="dd_radio_lable">
                                    <input type="checkbox" name="is_search" value="1" class="dd_radio" <?php if($info): ?><?php echo $info['is_search']===0 ? '' : 'checked'; else: ?>checked<?php endif; ?>><span>搜索</span></label>
                                <label class="dd_radio_lable">
                                    <input type="checkbox" name="is_sort" value="1" class="dd_radio" <?php if($info): ?><?php echo $info['is_sort']===0 ? '' : 'checked'; else: ?>checked<?php endif; ?>><span>排序</span></label>
                            </div>
                        </div>
                        <div
                            class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
                            <small class="text-muted">
                                <i class="fa fa-info-circle"></i> 设置字段的使用场景
                            </small>
                        </div>
                    </div>

                    <div class="row dd_input_group no-gutters">
                        <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label">字符长度</label>
                        <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
                            <div class="col-4 p-0 float-left">
                                <input type="text" name="minlength" class="form-control"
                                    value="<?php echo !empty($info['minlength']) ? htmlentities($info['minlength']) : '0'; ?>">
                            </div>
                            <div class="col-1 p-0 float-left line_height_38 text-center">-</div>
                            <div class="col-4 p-0 float-left">
                                <input type="text" name="maxlength" class="form-control"
                                    value="<?php echo !empty($info['maxlength']) ? htmlentities($info['maxlength']) : '0'; ?>">
                            </div>
                        </div>
                        <div
                            class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
                            <small class="text-muted">
                                <i class="fa fa-info-circle"></i> 通常无需配置，系统会自动设置
                            </small>
                        </div>
                    </div>
                    <!---->
                    <div class="row dd_input_group no-gutters">
                        <label
                            class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label is-required">数据源</label>
                        <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
                            <select id="data_source" name="data_source" class="form-control">
                                <option value='0'>字段本身</option>
                                <option value="1" <?php if($info): ?><?php echo $info['data_source']=='1' ? 'selected="selected"' : ''; ?><?php endif; ?>>系统字典</option>
                                <option value="2" <?php if($info): ?><?php echo $info['data_source']==' 2' ? 'selected="selected"' : ''; ?><?php endif; ?>>模型数据</option>
                            </select>
                        </div>
                        <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
                            <small class="text-muted">
                                <i class="fa fa-info-circle"></i> 通常 select|radio|checkbox 或关联了其他模型时需配置
                            </small>
                        </div>
                    </div>
                    <!---->
                    <div class="row dd_input_group no-gutters">
                        <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label">关联模型</label>
                        <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
                            <input type="text" name="relation_model" class="form-control" placeholder="请填写关联的模型"
                                   value="<?php echo !empty($info['relation_model']) ? htmlentities($info['relation_model']) : ''; ?>">
                        </div>
                        <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
                            <small class="text-muted">
                                <i class="fa fa-info-circle"></i> 只有数据源选择<模型数据>时生效，填写完整的模型名称，如 User
                            </small>
                        </div>
                    </div>
                    <!---->
                    <div class="row dd_input_group no-gutters">
                        <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label">展示字段</label>
                        <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
                            <input type="text" name="relation_field" class="form-control" placeholder="请填写关联模型对应的字段"
                                   value="<?php echo !empty($info['relation_field']) ? htmlentities($info['relation_field']) : ''; ?>">
                        </div>
                        <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
                            <small class="text-muted">
                                <i class="fa fa-info-circle"></i> 只有数据源选择<模型数据>时生效，填写完整的字段名称，如 type_name
                            </small>
                        </div>
                    </div>
                    <!---->
                    <div class="row dd_input_group no-gutters">
                        <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label">字典类型</label>
                        <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
                            <select id="dict_code" name="dict_code" class="form-control">
                                <option value=''>请选择</option>
                                <?php if(is_array($dictTypes) || $dictTypes instanceof \think\Collection || $dictTypes instanceof \think\Paginator): $i = 0; $__LIST__ = $dictTypes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$dictTypes): $mod = ($i % 2 );++$i;?>
                                <option value="<?php echo htmlentities($dictTypes['id']); ?>" <?php if($info): ?><?php echo $info['dict_code']==$dictTypes['id'] ? '
                                    selected="selected"'  :  ''; ?><?php endif; ?>><?php echo htmlentities($dictTypes['dict_name']); ?> - [ <?php echo htmlentities($dictTypes['remark']); ?> ]</option>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                        </div>
                        <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
                            <small class="text-muted">
                                <i class="fa fa-info-circle"></i> 只有数据源选择<系统字典>时生效
                            </small>
                        </div>
                    </div>
					
					<!--表单设置-->
                    <div class="row dd_input_group no-gutters">
                        <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label">表单设置</label>
                        <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
                            <div class="dd_radio_lable_left field_setup" id="form_setup">
                                <!--ajax调用文件-->
									
								
  <table class="typeTable" cellpadding="2" cellspacing="1"  >
  <?php if($groups): ?>
  <tr>
                   <td>字段分组</td><td>
                            <select id="group_id" name="group_id" class="form-control">
                                <option value=''>请选择</option>
                                <?php if(is_array($groups) || $groups instanceof \think\Collection || $groups instanceof \think\Paginator): $i = 0; $__LIST__ = $groups;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$group): $mod = ($i % 2 );++$i;?>
                                <option value="<?php echo htmlentities($group['id']); ?>" <?php echo $info['group_id']==$group['id'] ? ' selected="selected"'  :  ''; ?> ><?php echo htmlentities($group['group_name']); ?></option>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>
							 <small class="text-muted">
                                <i class="fa fa-info-circle"></i> 字段所属分组
                            </small>
                        </td>
                        
					</tr>
                    <?php endif; ?>
   
    <tr>
        <td> <label class="dd_input_l col-form-label is-required">表单类型</label></td>
        <td> <select id="type" name="type" class="form-control">
                                <option value=''>请选择字段类型</option>
                                <option value="text" <?php if($info): ?><?php echo $info['type']=='text' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>单行文本</option>
                                <option value="textarea" <?php if($info): ?><?php echo $info['type']=='textarea' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>多行文本</option>
                                <option value="radio" <?php if($info): ?><?php echo $info['type']=='radio' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>单选按钮</option>
                                <option value="checkbox" <?php if($info): ?><?php echo $info['type']=='checkbox' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>多选按钮</option>
                                <option value="date" <?php if($info): ?><?php echo $info['type']=='date' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>
                                    日期</option>
                                <option value="time" <?php if($info): ?><?php echo $info['type']=='time' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>
                                    时间</option>
                                <option value="datetime" <?php if($info): ?><?php echo $info['type']=='datetime' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>日期时间</option>
                                <option value="daterange" <?php if($info): ?><?php echo $info['type']=='daterange' ? 'selected="selected"'
                                     :  ''; ?><?php endif; ?>>日期范围</option>
                                <option value="tag" <?php if($info): ?><?php echo $info['type']=='tag' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>标签
                                </option>
                                <option value="number" <?php if($info): ?><?php echo $info['type']=='number' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>数字</option>
                                <option value="password" <?php if($info): ?><?php echo $info['type']=='password' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>密码</option>
                                <option value="select" <?php if($info): ?><?php echo $info['type']=='select' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>普通下拉菜单</option>
                                <option value="select2" <?php if($info): ?><?php echo $info['type']=='select2' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>高级下拉菜单</option>
                                <option value="linkage" <?php if($info): ?><?php echo $info['type']=='linkage' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>多级联动菜单</option>
                                <option value="image" <?php if($info): ?><?php echo $info['type']=='image' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>单张图片</option>
                                <option value="images" <?php if($info): ?><?php echo $info['type']=='images' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>多张图片</option>
                                <option value="file" <?php if($info): ?><?php echo $info['type']=='file' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>
                                    单文件上传</option>
                                <option value="files" <?php if($info): ?><?php echo $info['type']=='files' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>多文件上传</option>
                                <option value="editor" <?php if($info): ?><?php echo $info['type']=='editor' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>编辑器</option>
                                <option value="hidden" <?php if($info): ?><?php echo $info['type']=='hidden' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>隐藏域</option>
                                <option value="color" <?php if($info): ?><?php echo $info['type']=='color' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>取色器</option>
                                <!-- ZTX-007，增加字段模板“代码编辑器” -->
                                <option value="code" <?php if($info): ?><?php echo $info['type']=='code' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>
                                    代码编辑器</option>
                                <!-- ZTX-007，增加字段模板“代码编辑器” -->
                            </select>
                            </td>
                            </tr>

                            <tr>
                                <td>字段提示</td>
                                <td>
                                    <input type="text" name="tips" class="form-control" placeholder="字段右侧提示信息"
                                        value="<?php echo !empty($info['tips']) ? htmlentities($info['tips']) : ''; ?>">
                                    <small class="text-muted">
                                        <i class="fa fa-info-circle"></i> 新增/修改页面字段右侧的提示信息
                                    </small>
                                </td>
                            </tr>
                            </table>
                            <table class="typeTable" cellpadding="2" cellspacing="1" id="form_setup_table">
                                <tbody>
                                </tbody>
                            </table>


                            <!--ajax调用结束-->
                        </div>
                    </div>
        </div>
        <!--表单设置-->


        <!--列表设置-->
        <div class="row dd_input_group no-gutters">
            <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label">列表设置</label>
            <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
                <div class="dd_radio_lable_left field_setup" id="table_setup">
                    <!--ajax调用文件-->





                    <table class="typeTable" cellpadding="2" cellspacing="1">

                        <td>列表类型</td>
                        <td> <select id="table_col_type" name="table_col_type" class="form-control">
                                <option value=''>请选择字段类型</option>
                                <option value="text" <?php if($info): ?><?php echo $info['table_col_type']=='text' ? 'selected="selected"'
                                     :  ''; ?><?php endif; ?>>单行文本</option>
                                <option value="checkbox" <?php if($info): ?><?php echo $info['table_col_type']=='checkbox' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>多选按钮</option>
                                <option value="datetime" <?php if($info): ?><?php echo $info['table_col_type']=='datetime' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>日期时间</option>
                                <option value="select" <?php if($info): ?><?php echo $info['table_col_type']=='select' ? 'selected="selected"'
                                     :  ''; ?><?php endif; ?>>普通下拉菜单</option>
                                <option value="select2" <?php if($info): ?><?php echo $info['table_col_type']=='select2' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>高级下拉菜单</option>
                                <option value="image" <?php if($info): ?><?php echo $info['table_col_type']=='image' ? 'selected="selected"'
                                     :  ''; ?><?php endif; ?>>单张图片</option>
                                <option value="images" <?php if($info): ?><?php echo $info['table_col_type']=='images' ? 'selected="selected"'
                                     :  ''; ?><?php endif; ?>>多张图片</option>
                                <option value="color" <?php if($info): ?><?php echo $info['table_col_type']=='color' ? 'selected="selected"'
                                     :  ''; ?><?php endif; ?>>取色器</option>
                                <option value="customize" <?php if($info): ?><?php echo $info['table_col_type']=='customize' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>自定义</option>
                                <!-- <option value="linkage" <?php if($info): ?><?php echo $info['table_col_type']=='linkage' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>多级联动菜单</option> -->
                                <!-- <option value="textarea" <?php if($info): ?><?php echo $info['table_col_type']=='textarea' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>多行文本</option> -->
                                <!-- <option value="radio" <?php if($info): ?><?php echo $info['table_col_type']=='radio' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>单选按钮</option> -->
                                <!-- <option value="file" <?php if($info): ?><?php echo $info['table_col_type']=='file' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>单文件上传</option> -->
                                <!-- <option value="files" <?php if($info): ?><?php echo $info['table_col_type']=='files' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>多文件上传</option> -->
                                <!-- <option value="editor" <?php if($info): ?><?php echo $info['table_col_type']=='editor' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>编辑器</option> -->
                                <!-- <option value="hidden" <?php if($info): ?><?php echo $info['table_col_type']=='hidden' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>隐藏域</option> -->
                                <!-- <option value="daterange" <?php if($info): ?><?php echo $info['table_col_type']=='daterange' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>日期范围</option> -->
                                <!-- <option value="tag" <?php if($info): ?><?php echo $info['table_col_type']=='tag' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>标签</option> -->
                                <!-- <option value="number" <?php if($info): ?><?php echo $info['table_col_type']=='number' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>数字</option> -->
                                <!-- <option value="password" <?php if($info): ?><?php echo $info['table_col_type']=='password' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>密码</option> -->
                                <!-- <option value="date" <?php if($info): ?><?php echo $info['table_col_type']=='date' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>日期</option> -->
                                <!-- <option value="time" <?php if($info): ?><?php echo $info['table_col_type']=='time' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>时间</option> -->
                            </select>
                        </td>
                        </tr>

                        <tr>
                            <td>搜索类型</td>
                            <td>
                                <input type="text" name="search_type" class="form-control" placeholder="请填写搜索类型"
                                    value="<?php echo !empty($info['search_type']) ? htmlentities($info['search_type']) : '='; ?>">
                                <small class="text-muted">
                                    <i class="fa fa-info-circle"></i> 如：=, <>, >, <, LIKE,in等表达式，如字段可被搜索则必须设置 </small>
                            </td>
                        </tr>
                        <tr>
                            <td>列对齐</td>
                            <td>
                                <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
                                    <div class="dd_radio_lable_left">
                                        <label class="dd_radio_lable">
                                            <input type="radio" name="table_col_align" value="left" class="dd_radio" <?php if($info): ?><?php echo $info['table_col_align']=='left' ? 'checked' : ''; ?><?php endif; ?>><span>左对齐</span>
                                        </label>
                                        <label class="dd_radio_lable">
                                            <input type="radio" name="table_col_align" value="right" class="dd_radio"
                                                <?php if($info): ?><?php echo $info['table_col_align']=='right' ? 'checked' : ''; else: ?>checked<?php endif; ?>><span>右对齐</span>
                                        </label>
                                        <label class="dd_radio_lable">
                                            <input type="radio" name="table_col_align" value="center" class="dd_radio"
                                                <?php if($info): ?><?php echo $info['table_col_align']=='center' ? 'checked' : ''; else: ?>checked<?php endif; ?>><span>居中</span>
                                        </label>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>列初始显示状态</td>
                            <td>
                                <label class="dd_radio_lable">
                                    <input type="radio" name="table_col_visible" value="false" class="dd_radio" <?php if($info): ?><?php echo $info['table_col_visible']=='false' ? 'checked' : ''; ?><?php endif; ?>><span>显示</span>
                                </label>
                                <label class="dd_radio_lable">
                                    <input type="radio" name="table_col_visible" value="true" class="dd_radio" <?php if($info): ?><?php echo $info['table_col_visible']=='true' ? 'checked' : ''; else: ?>checked<?php endif; ?>><span>隐藏</span>
                                </label>

                            </td>
                        </tr>
                        <tr>
                            <td>格式化</td>
                            <td>
                                <input id="table_col_formatter" type="text" name="table_col_formatter"
                                    class="form-control" readonly="readonly"
                                    value="<?php echo !empty($info['table_col_formatter']) ? htmlentities($info['table_col_formatter']) : 'function(value, row, index,field) { return value;}'; ?>">
                                <small class="text-muted">
                                    <i class="fa fa-info-circle"></i> 当列表类型为“自定义时”有效。value: 字段值，row：行记录数据，index:
                                    行索引，field: 行字段名。
                                </small>
                            </td>
                        </tr>

                    </table>

                    <script>
                        $(function () {
                            // CodeMirror
                            var codeEditor = CodeMirror.fromTextArea(document.getElementById("table_col_formatter"), {
                                mode: "javascript",     // 编辑器语言
                                theme: "monokai",   // 编辑器主题
                                lineNumbers: true,              // 显示行号
                                showCursorWhenSelecting: true,  // 文本选中时显示光标
                                lineWrapping: true,             // 代码折叠
                            });
                            codeEditor.setSize('auto', "200px");




                        })
                    </script>
                    <table class="typeTable" cellpadding="2" cellspacing="1" id="table_setup_table">
                        <tbody>
                        </tbody>

                    </table>

                    <!--ajax调用结束-->
                </div>
            </div>
        </div>
        <!--列表设置-->
        <!---->
        <div class="row dd_input_group no-gutters">
            <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label">数据设置</label>
            <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
                <div class="dd_radio_lable_left field_setup" id="field_setup">
                    <!--ajax调用文件-->
                    <!--ajax调用结束-->
                </div>
            </div>
        </div>
        <!---->
        <div class="row dd_input_group no-gutters">
            <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label">状态</label>
            <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
                <div class="dd_radio_lable_left">
                    <?php if($info): ?>
                    <label class="dd_radio_lable">
                        <input type="radio" name="status" value="1" class="dd_radio" <?php echo !empty($info['status']) ? 'checked'  :  ''; ?>><span>显示</span>
                    </label>
                    <label class="dd_radio_lable">
                        <input type="radio" name="status" value="0" class="dd_radio" <?php echo !empty($info['status']) ? ''  :  'checked'; ?>><span>隐藏</span>
                    </label>
                    <?php else: ?>
                    <label class="dd_radio_lable">
                        <input type="radio" name="status" value="1" class="dd_radio" checked><span>显示</span>
                    </label>
                    <label class="dd_radio_lable">
                        <input type="radio" name="status" value="0" class="dd_radio"><span>隐藏</span>
                    </label>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <!---->
        <div class="row dd_input_group no-gutters">
            <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label is-required">排序</label>
            <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
                <input type="text" name="sort" class="form-control" placeholder="请输入排序"
                    value="<?php echo !empty($info['sort']) ? htmlentities($info['sort']) :  '50'; ?>">
            </div>
            <div
                class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
                <small class="text-muted">
                    <i class="fa fa-info-circle"></i> 排序为从小到大排序，默认为50
                </small>
            </div>
        </div>
        <!---->
        <div class="row dd_input_group no-gutters">
            <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label">字段备注</label>
            <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
                <textarea class="form-control" name="remark" rows="3"
                    placeholder="请输入字段备注"><?php echo htmlentities((isset($info['remark']) && ($info['remark'] !== '')?$info['remark']:'')); ?></textarea>
            </div>
            <div
                class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
                <small class="text-muted">
                    <i class="fa fa-info-circle"></i> 字段备注
                </small>
            </div>
        </div>
        <?php if($info): ?>
        <!---->
        <div class="row dd_input_group no-gutters">
            <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label">修改表字段</label>
            <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
                <div class="dd_radio_lable_left">
                    <label class="dd_radio_lable">
                        <input type="radio" name="execute_sql" value="1" class="dd_radio" checked><span>是</span>
                    </label>
                    <label class="dd_radio_lable">
                        <input type="radio" name="execute_sql" value="0" class="dd_radio"><span>否</span>
                    </label>
                </div>
            </div>
            <div
                class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
                <small class="text-muted">
                    <i class="fa fa-info-circle"></i> 选择是会构建SQL语句来修改数据表的字段，选择否则不修改
                </small>
            </div>
        </div>
        <?php endif; ?>
        <!---->
        <div class="row dd_input_group form-builder-submit no-gutters <?php if($layer == true): ?>hide<?php endif; ?>">
            <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-11 offset-sm-2 offset-md-2 offset-lg-2 offset-xl-1">
                <button type="submit" class="btn btn-flat btn-primary ">提 交</button>
                <button type="button" class="btn btn-flat btn-default" onclick="javascript :history.back(-1)">返 回
                </button>
            </div>
        </div>
        </form>
        <!--数据表结束-->
    </div>
    </div>
</section>
<!--内容结束-->
<!-- ZTX-009，重新调整字段属性设置。 -->
<script>
    $(function () {
        // 字段变更时触发
        $("#type").change(function () {
            var type = $(this).val();
            var url = "<?php echo url('changeType'); ?>?isajax=1&moduleId=<?php echo htmlentities($module_id); ?>&type=" + type;
            field_setting(type, url);
        });
        // 编辑字段时触发
        <?php if($info): ?>
        var type = '<?php echo htmlentities($info['type']); ?>';
        var field = '<?php echo htmlentities($info['field']); ?>';
        var url = "<?php echo url('changeType'); ?>?isajax=1&moduleId=<?php echo htmlentities($info['module_id']); ?>&type=" + type + "&field=" + field;
        field_setting(type, url);
        <?php endif; ?>

        });
    //选择后变更
    function field_setting(type, url, data) {
        $.ajax({
            type: "POST",
            url: url,
            data: '',
            beforeSend: function () {
                $('#field_setup').html('<i class="fa fa-spinner fa-spin fa-fw"></i>');
            },
            success: function (msg) {
                // <!-- ZTX-009，重新调整字段属性设置。 -->
                var form_begin = msg.indexOf("form_begin@") + 11;//定位表单设置元素的初始位置
                var form_end = msg.indexOf("form_end@");//定位表单设置元素的结束位置
                var form_msg = msg.substring(form_begin, form_end);//截取表单设置元素

                var table_begin = msg.indexOf("table_begin@") + 12;//定位列表设置元素的初始位置
                var table_end = msg.indexOf("table_end@");//定位表单设置元素的结束位置
                var table_msg = msg.substring(table_begin, table_end);//截取表单设置元素
                $("#form_setup_table tbody").html(form_msg);//将表单设置元素加入到表单设置框架内
                $("#table_setup_table tbody").html(table_msg);//将表单设置元素加入到表单设置框架内
                $('#field_setup').html(msg);//将字段设置元素加入到字段设置框架内
                // <!-- ZTX-009，重新调整字段属性设置。 -->
            }
        });
    }
</script>
            </div>
            <?php if($layer == false): ?>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
	
	 <!--折腾侠：修改版权信息为动态，可自定义。原代码如下：
		 
		 <strong>Copyright &copy; 2019-<?php echo date("Y"); ?> <a href="https://siyucms.com" target="_blank">siyucms.com</a>.</strong> -->
        <strong>Copyright &copy; 2019-<?php echo date("Y"); ?> <a href="<?php echo htmlentities((isset($system['rights_link']) && ($system['rights_link'] !== '')?$system['rights_link']:'https://siyucms.com')); ?>" target="_blank"><?php echo htmlentities((isset($system['rights']) && ($system['rights'] !== '')?$system['rights']:'siyucms.com')); ?></a>.</strong>
		 <!-- 折腾侠 -->
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> <?php echo config('app.siyu_version'); ?>-折腾侠修改版
        </div>
    </footer>
<?php endif; ?>
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<button id="totop" title="返回顶部" style="display: none;"><i class="fa fa-chevron-up"></i></button>
<!-- Bootstrap 4 -->
<script src="/static/plugins/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- daterangepicker -->
<script src="/static/plugins/AdminLTE/plugins/moment/moment.min.js"></script>
<script src="/static/plugins/AdminLTE/plugins/moment/locale/zh-cn.js"></script>
<script src="/static/plugins/AdminLTE/plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="/static/plugins/AdminLTE/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="/static/plugins/AdminLTE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- overlayScrollbars -->
<script src="/static/plugins/AdminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- Toastr -->
<script src="/static/plugins/AdminLTE/plugins/toastr/toastr.min.js"></script>
<!-- pace-progress -->
<script src="/static/plugins/AdminLTE/plugins/pace-progress/pace.min.js"></script>
<!-- Bootstrap Table 表格插件样式 -->
<script src="/static/plugins/bootstrap-table/bootstrap-table.min.js"></script>
<script src="/static/plugins/bootstrap-table/locale/bootstrap-table-zh-CN.min.js"></script>
<script src="/static/plugins/bootstrap-table/extensions/mobile/bootstrap-table-mobile.js"></script>
<script src="/static/plugins/bootstrap-table/extensions/toolbar/bootstrap-table-toolbar.min.js"></script>
<link rel="stylesheet" href="/static/plugins/bootstrap-table/extensions/fixed-columns/bootstrap-table-fixed-columns.min.css"/>
<script src="/static/plugins/bootstrap-table/extensions/fixed-columns/bootstrap-table-fixed-columns.min.js"></script>

<!-- AdminLTE App -->
<script src="/static/plugins/AdminLTE/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/static/plugins/AdminLTE/dist/js/demo.js"></script>
<!-- jQueryForm -->
<script src="/static/plugins/AdminLTE/plugins/jQueryForm/jquery.form.js"></script>
<!-- CodeMirror -->
<script src="/static/plugins/AdminLTE/plugins/codemirror/codemirror.js"></script>
<script src="/static/plugins/AdminLTE/plugins/codemirror/mode/css/css.js"></script>
<script src="/static/plugins/AdminLTE/plugins/codemirror/mode/xml/xml.js"></script>
<script src="/static/plugins/AdminLTE/plugins/codemirror/mode/javascript/javascript.js"></script>
<script src="/static/plugins/AdminLTE/plugins/codemirror/mode/htmlmixed/htmlmixed.js"></script>
<!-- jquery-treegrid -->
<link rel="stylesheet" href="/static/plugins/jquery-treegrid/css/jquery.treegrid.css">
<script src="/static/plugins/jquery-treegrid/js/jquery.treegrid.js"></script>
<script src="/static/plugins/bootstrap-table/extensions/treegrid/bootstrap-table-treegrid.js"></script>

<!-- pjax -->
<script src="/static/plugins/AdminLTE/plugins/pjax/jquery.pjax.js"></script>


<?php if($system['display_mode'] == 0): ?>

<script type="text/javascript">
    $(function () {
        // 跳转页
        $(document).on('pjax:complete', function (event, xhr, textStatus, options) {
            var url = xhr.getResponseHeader('X-PJAX-URL');
            if (url) {
                $.pjax({url: url, container: '.content-wrapper'})
            }
        });

        // a 链接
        $(document).pjax('a[target!=_blank]', '.content-wrapper');

        // form 表单
        $(document).on('submit', 'form[data-pjax]', function (event) {
            $.pjax.submit(event, '.content-wrapper');
        });

        // 阻止超时导致的链接跳转(ajax默认超时时间650毫秒，超时后强制刷新整个页面)
        $(document).on('pjax:timeout', function (event) {
            event.preventDefault()
        });

        // 重新加载
        //$.pjax.reload('.content-wrapper');
    
	
	
	
	
	
	
	
	
	
	
	
	
	
	})
	
	
	
	
	
	
	
	
</script>





<?php endif; ?>
</body>
</html>
        <?php endif; else: ?>
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo htmlentities($system['label_logo']); ?>" /> <!--折腾侠修改标签页图标为动态自定义--> 
	<!-- ※折腾侠：修改后台页面标题为动态标题，可自定义 -->
    <title><?php echo htmlentities((isset($system['backstage_name']) && ($system['backstage_name'] !== '')?$system['backstage_name']:'SIYUCMS')); ?> | 控制台</title>

    <!-- layui -->
<link rel="stylesheet" href="/static/plugins/layui/css/layui.css">
<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/google-fonts/google.fonts.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/fontawesome-free/css/all.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="https://cdn.staticfile.org/ionicons/2.0.1/css/ionicons.min.css">
<!-- Tempusdominus Bootstrap 4 -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
<!-- iCheck -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/dist/css/AdminLTE.min.css">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
<!-- Daterange picker -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/daterangepicker/daterangepicker.css">
<!-- Bootstrap Color Picker -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
<!-- Toastr -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/toastr/toastr.min.css">
<!-- pace-progress -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/pace-progress/themes/black/pace-theme-flat-top.css">
<!-- jQuery -->
<script src="/static/plugins/AdminLTE/plugins/jquery/jquery.min.js"></script>
<!-- layui -->
<script src="/static/plugins/layui/layui.js"></script>
<!-- webuploader -->
<link rel="stylesheet" href="/static/plugins/webuploader-0.1.5/webuploader.css">
<script src="/static/plugins/webuploader-0.1.5/webuploader.min.js"></script>
<script type="text/javascript">
    /**
     * 封装上传组件
     * @param list
     * @param filePicker_image
     * @param image_preview
     * @param image
     * @param more            是否图集
     * @param upload_allowext 格式限制
     * @param size            大小限制
     * @param type            上传类型[file/img]
     */
    function webupload(list, filePicker_image, image_preview, image, more, upload_allowext, size, type) {
        if (upload_allowext) {
            upload_allowext = upload_allowext.replace(/\|/g, ",");
        }
        if (size) {
            size = size * 1024;
        } else {
            size = 10240 * 1024 * 1024;
        }
        type = type || 'img';
	
		//ZTX-005重新设置上传文件目录
		var pathName = window.document.location.pathname;//获取网址目录
		var pos = pathName.lastIndexOf('/');//获取斜杠的最后位置
		var path = encodeURI(pathName.substr(1,pos));//获取地址目录
		//ZTX-005重新设置上传文件目录
        var $list = $("#" + list + "");                                // 这几个初始化全局的百度文档上没说明
        var GUID = WebUploader.Base.guid();                            // 一个GUID
		
        var uploader = WebUploader.create({
		// ZTX-002折腾侠：增加从服务器上删除对应文件的操作,并开启允许重复上传
			duplicate :true,
            auto: true,                                                // 选完文件后，是否自动上传。
            swf: '/static/plugins/webuploader-0.1.5/uploader.swf',     // 加载swf文件，路径一定要对
            server: '<?php echo url("upload/index"); ?>' + '?upload_type=' + type+'&path='+path, // 文件接收服务端//ZTX-004重新设置上传文件目录：“+'&path='+path”
			
            pick: '#' + filePicker_image,                              // 选择文件的按钮。可选。
            resize: false,                                             // 不压缩image, 默认如果是jpeg，文件上传前会压缩一把再上传！
            chunked: true,                                             // 是否分片
            chunkSize: 5 * 1024 * 1024,                                // 分片大小
            threads: 1,                                                // 上传并发数
            formData: {
                // 由于Http的无状态特征，在往服务器发送数据过程传递一个进入当前页面是生成的GUID作为标示
                GUID: GUID,                                            // 自定义参数
            },
            compress: false,
            fileSingleSizeLimit: size,                                 // 限制大小200M，单文件
            //fileSizeLimit: allMaxSize*1024*1024,                     // 限制大小10M，所有被选文件，超出选择不上
            accept: {
                title: '上传图片/文件',
                extensions: upload_allowext,                           // 允许上传的类型 'gif,jpg,jpeg,bmp,png'
                mimeTypes: '*',                                        // 默认全部文件，为兼容上传文件功能，如只上传图片可写成img/*
            }
        });

        // 文件上传过程中创建进度条实时显示。
        uploader.on('uploadProgress', function (file, percentage) {
            var $li = $list,
                    $percent = $li.find('.progress .progress-bar');
            // 避免重复创建
            if (!$percent.length) {
                $percent = $('<div class="progress progress-striped active">' +
                        '<div class="progress-bar" role="progressbar" style="width: 0%">' +
                        '</div>' +
                        '</div>').appendTo($li).find('.progress-bar');
            }
            //$li.find('p.state').text('上传中');
            $percent.css('width', percentage * 100 + '%');
        });
        uploader.on('uploadSuccess', function (file, response) {
            if (response.code == 0) {
                $.modal.alertError(response.msg);
            }
            var url = response.url;
            if (more == true) {
			// <!-- ZTX-004 设置图片预览   by 折腾侠 -->
			
			if(type=='img'){
			
			var images = '' +
                    '<div class="row no-gutters">' +
                    '   <div class="col-4 col-sm-4"><input type="text" name="' + image + '[]" value="' + url + '" class="form-control"/><input type="text" name="' + image + '_small[]" value="' + response.small + '" class="hide"/></div>' +
                    '   <div class="col-3 col-sm-3"><input class="form-control input-sm" type="text" name="' + image + '_title[]" value="' + file.name + '" ></div>' +
                    '   <div class="col-4 col-sm-3">' +
                    '       <div class="btn-group">' +
                    '           <button type="button" class="btn btn-default btn-sm move_up_images"><i class="fa fa-chevron-up"></i></button>' +
                    '           <button type="button" class="btn btn-default btn-sm move_down_images"><i class="fa fa-chevron-down"></i></button>' +
                    '           <button type="button" class="btn btn-default btn-sm remove_images"><i class="fa fa-times"></i></button>' +
                    '       </div>' +
                    '   </div>' +
					'   <div class="col-4 col-sm-2"><a href="'+ url +'" target="_blank"> <img class="image_preview_info" src="'+ response.small +'"  ></a></div>'+
					
					
                    '</div>';}
			else{
			var images = '' +
                    '<div class="row no-gutters">' +
                    '   <div class="col-4 col-sm-6"><input type="text" name="' + image + '[]" value="' + url + '" class="form-control"/></div>' +
                    '   <div class="col-3 col-sm-3"><input class="form-control input-sm" type="text" name="' + image + '_title[]" value="' + file.name + '" ></div>' +
                    '   <div class="col-4 col-sm-3">' +
                    '       <div class="btn-group">' +
                    '           <button type="button" class="btn btn-default btn-sm move_up_images"><i class="fa fa-chevron-up"></i></button>' +
                    '           <button type="button" class="btn btn-default btn-sm move_down_images"><i class="fa fa-chevron-down"></i></button>' +
                    '           <button type="button" class="btn btn-default btn-sm remove_images"><i class="fa fa-times"></i></button>' +
                    '       </div>' +
                    '   </div>' +
					
                    '</div>';
			}
                
                var images_list = $('#more_images_' + image).html();

                $('#more_images_' + image).html(images + images_list);
				// <!--ZTX-004  设置图片预览   by 折腾侠 -->
	
				
            } else {
                $("input[name='" + image + "']").val(url);
                $("#" + image_preview).attr('src', url);
                $("#" + image_preview).parent("a").attr('href', url);
			
            }
        });
        uploader.on('uploadComplete', function (file) {
        //   <!-- ZTX-001-折腾侠：当多个文件上传完成后，原代码把“.progress”元素设置成隐藏，导致第二个文件上传以后的进度条无法显示。 -->
			// <!-- 原代码：$list.find('.progress').fadeOut();  -->
			
            $list.find('.progress').remove();
			
			//  <!-- ZTX-001折腾侠：上传完成后，把“.progress”元素直接删除，下一个文件上传时就会显示进度条。 -->
			
        });
        // 错误提示
        uploader.on("error", function (type) {
            if (type == "Q_TYPE_DENIED") {
                $.modal.alertError('请上传' + upload_allowext + '格式的文件！');
            } else if (type == "F_EXCEED_SIZE") {
                $.modal.alertError('单个文件大小不能超过' + size / 1024 + 'kb！');
            } else if (type == "F_DUPLICATE") {
                $.modal.alertError('请不要重复选择文件');
            } else {
                $.modal.alertError('上传出错！请检查后重新上传！错误代码' + type);
            }
        });
    }
</script>
<?php if($system['editor'] == '1'): ?>
<!-- ueditor -->
<script src="/static/plugins/ueditor/ueditor.config.js"></script>
<script src="/static/plugins/ueditor/ueditor.all.min.js"> </script>
<script src="/static/plugins/ueditor/lang/zh-cn/zh-cn.js"></script>
<?php else: ?>
<!-- ckeditor4 -->
<script src="/static/plugins/ckeditor/ckeditor.js"></script>
<?php endif; ?>
<!-- Bootstrap Table -->
<link rel="stylesheet" href="/static/plugins/bootstrap-table/bootstrap-table.min.css" />
<!-- layer 弹层组件 -->
<script>
    layui.use('layer',
        function () {
            var layer = layui.layer;
        })
</script>
<!-- zTree 树节点组件 -->
<script type="text/javascript" src="/static/plugins/zTree_v3/js/jquery.ztree.core.js"></script>
<script type="text/javascript" src="/static/plugins/zTree_v3/js/jquery.ztree.excheck.js"></script>
<!-- jQueryTagsInput -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/jQueryTagsInput/jquery.tagsinput.css">
<script src="/static/plugins/AdminLTE/plugins/jQueryTagsInput/jquery.tagsinput.js"></script>
<!-- Select2 -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/select2/css/select2.min.css">
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
<script src="/static/plugins/AdminLTE/plugins/select2/js/select2.full.min.js"></script>
<!-- CodeMirror -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/codemirror/codemirror.css">
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/codemirror/theme/monokai.css">

<!-- SIYUCMS -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/dist/css/siyucms.css?v=20211203">
<script src="/static/plugins/siyu-ui.js?v=20211203"></script>
<script src="/static/plugins/siyucms.js?v=20211203"></script>
<!-- jQuery-ui ZTX-005-->
<link rel="stylesheet" href="/static/plugins/jquery-ui-1.13.1.custom/jquery-ui.css">
<link rel="stylesheet" href="/static/plugins/jquery-ui-1.13.1.custom/jquery-ui.structure.css">
<link rel="stylesheet" href="/static/plugins/jquery-ui-1.13.1.custom/jquery-ui.theme.css">
<script src="/static/plugins/jquery-ui-1.13.1.custom/jquery-ui.js"></script>

</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed pace-primary text-sm <?php if($layer == true): ?>layer-body<?php endif; ?>" data-display_mode="<?php echo htmlentities($system['display_mode']); ?>">
<div class="wrapper">

<?php if($iframe == false && $layer == false): ?>
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>

        <!-- Left navbar links -->
        <ul class="navbar-nav js_left_menu">
            <li class="nav-item active">
                <a class="nav-link" href="javascript:;">
                    <i class="fas fa-cog"></i>
                    <span>主导航</span>
                </a>
            </li>
            <?php if(count($cates)): ?>
            <li class="nav-item">
                <a class="nav-link" href="javascript:;">
                    <i class="fa fa-th-large"></i>
                    <span>内容管理</span>
                </a>
            </li>
            <?php endif; ?>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- User Account Menu -->
            <li class="nav-item dropdown user user-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo session('admin.image') ?: '/static/plugins/AdminLTE/dist/img/user2-160x160.jpg'; ?>" class="user-image">
                    <span class="d-none d-lg-block"><?php echo session('admin.nickname') ?: session('admin.username'); ?></span>
                </a>
                <ul class="dropdown-menu">
                    <li class="user-header">
                        <img src="<?php echo session('admin.image') ?: '/static/plugins/AdminLTE/dist/img/user2-160x160.jpg'; ?>" class="img-circle">
                        <h5>上次登录时间：<?php echo session('admin.login_time'); ?></h5>
                        <h5>上次登录IP：<?php echo session('admin.login_ip'); ?></h5>
                    </li>
                    <li class="user-footer">
                        <div class="pull-left">
                            <a href="<?php echo url('Admin/edit',['id'=>session('admin.id')]); ?>" class="btn btn-default btn-flat">资料</a>
                        </div>
                        <div class="pull-right">
                            <a href="<?php echo url('Login/logout'); ?>" class="btn btn-default btn-flat">退出</a>
                        </div>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button" title="全屏">
                    <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button" title="自定义">
                    <i class="fas fa-palette"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link js_clear_cash" href="javascript:;" title="清空缓存">
                    <i class="fas fa-sync-alt"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo htmlentities($indexUrl); ?>" target="_blank" title="前台首页">
                    <i class="fas fa-home"></i>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->
<?php endif; ?>
        <div class="content-wrapper">
            <!--内容开始-->
<section class="content">
    <!-- <style> -->
    <!-- .typeTable tr td {padding: 5px;} -->
    <!-- .typeTable tr td:first-child{text-align: right} -->
    <!-- </style> -->
    <div class="container-fluid">
        <div class="row">
            <!--顶部提示开始-->
            <div class="col-12 alert alert-warning alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <p>
                    <?php if($info): ?>
                    字段修改时会构建SQL语句来修改数据表的字段，如不想修改可勾选<修改表字段>为[否];
                        <?php else: ?>
                        1、数据表中不存在要添加的字段时会自动创建该字段并添加到字段管理中;<br>
                        2、数据表中已存在要添加的字段时仅会插入到字段管理中;
                        <?php endif; ?>
                </p>
            </div>
            <!--顶部提示结束-->
            <?php if($layer == false): ?>
            <div class="col-12 callout search">
                <form action="">
                    <a class="btn btn-flat btn-primary" href="<?php echo url('index'); ?>"><i
                            class="fa fa-list-ul m-r-10"></i>查看全部</a>
                    <a class="btn btn-flat btn-success f_r" onclick="javascript :history.back(-1)"><i
                            class="fa fa-undo m-r-10"></i>返 回</a>
                </form>
            </div>
            <?php endif; ?>
            <!--数据表开始-->
            <?php if($info): ?>
            <form class="col-12 form_builder" method="post" action="<?php echo url('editPost'); ?>" submit_confirm>
                <input type="hidden" name="id" value="<?php echo htmlentities($info['id']); ?>" />
                <input type="hidden" name="old_field" value="<?php echo htmlentities($info['field']); ?>" />
                <?php else: ?>
                <form class="col-12 form_builder" method="post" action="<?php echo url('addPost'); ?>" submit_confirm>
                    <?php endif; ?>
                    <input type="hidden" name="module_id" value="<?php echo !empty($info) ? htmlentities($info['module_id']) : htmlentities($module_id); ?>" />
                    <!---->
                    <div class="row dd_input_group no-gutters">
                        <label
                            class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label is-required">所属模块</label>
                        <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
                            <select id="module_id" name="module_id" class="form-control">
                                <option value=''>请选择</option>
                                <?php if(is_array($modules) || $modules instanceof \think\Collection || $modules instanceof \think\Paginator): $i = 0; $__LIST__ = $modules;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$module): $mod = ($i % 2 );++$i;?>
                                <option value="<?php echo htmlentities($module['id']); ?>" <?php echo $module_id==$module['id'] ? 'selected="selected"'  :  ''; ?>>
                                    <?php echo htmlentities($module['module_name']); ?> - [ <?php echo htmlentities($module['table_name']); ?> ]</option>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                        </div>
                        <div
                            class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
                            <small class="text-muted">
                                <i class="fa fa-info-circle"></i> 字段所属的模块/表
                            </small>
                        </div>
                    </div>
                    <!---->


                    <!-- ZTX-009，重新调整字段属性设置。 -->



                    <div class="row dd_input_group no-gutters">
                        <label
                            class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label is-required">字段名称</label>
                        <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
                            <input type="text" name="field" class="form-control" placeholder="字段英文名称，如 title"
                                value="<?php echo !empty($info['field']) ? htmlentities($info['field']) : ''; ?>">
                        </div>
                        <div
                            class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
                            <small class="text-muted">
                                <i class="fa fa-info-circle"></i> 注意不要包含空格，建议全部小写，通过_分割，如 user_name, goods_price
                            </small>
                        </div>
                    </div>
                    <!---->
                    <div class="row dd_input_group no-gutters">
                        <label
                            class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label is-required">字段别名</label>
                        <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
                            <input type="text" name="name" class="form-control" placeholder="字段中文名称，如 标题"
                                value="<?php echo !empty($info['name']) ? htmlentities($info['name']) : ''; ?>">
                        </div>
                        <div
                            class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
                            <small class="text-muted">
                                <i class="fa fa-info-circle"></i> 建议不超过4个汉字
                            </small>
                        </div>
                    </div>

                    <div class="row dd_input_group no-gutters">
                        <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label">是否必填</label>
                        <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
                            <div class="dd_radio_lable_left">
                                <label class="dd_radio_lable">
                                    <input type="radio" name="required" value="1" class="dd_radio" <?php if($info): ?><?php echo $info['required']==1 ? 'checked' : ''; ?><?php endif; ?>><span>是</span>
                                </label>
                                <label class="dd_radio_lable">
                                    <input type="radio" name="required" value="0" class="dd_radio" <?php if($info): ?><?php echo $info['required']==0 ? 'checked' : ''; else: ?>checked<?php endif; ?>><span>否</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <!---->
                    <div class="row dd_input_group no-gutters">
                        <label
                            class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label is-required">字段展示</label>
                        <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
                            <div class="dd_radio_lable_left">
                                <label class="dd_radio_lable">
                                    <input type="checkbox" name="is_list" value="1" class="dd_radio" <?php if($info): ?><?php echo $info['is_list']===0 ? '' : 'checked'; else: ?>checked<?php endif; ?>><span>列表</span></label>
                                <label class="dd_radio_lable">
                                    <input type="checkbox" name="is_add" value="1" class="dd_radio" <?php if($info): ?><?php echo $info['is_add']===0 ? '' : 'checked'; else: ?>checked<?php endif; ?>><span>添加</span></label>
                                <label class="dd_radio_lable">
                                    <input type="checkbox" name="is_edit" value="1" class="dd_radio" <?php if($info): ?><?php echo $info['is_edit']===0 ? '' : 'checked'; else: ?>checked<?php endif; ?>><span>修改</span></label>
                                <label class="dd_radio_lable">
                                    <input type="checkbox" name="is_search" value="1" class="dd_radio" <?php if($info): ?><?php echo $info['is_search']===0 ? '' : 'checked'; else: ?>checked<?php endif; ?>><span>搜索</span></label>
                                <label class="dd_radio_lable">
                                    <input type="checkbox" name="is_sort" value="1" class="dd_radio" <?php if($info): ?><?php echo $info['is_sort']===0 ? '' : 'checked'; else: ?>checked<?php endif; ?>><span>排序</span></label>
                            </div>
                        </div>
                        <div
                            class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
                            <small class="text-muted">
                                <i class="fa fa-info-circle"></i> 设置字段的使用场景
                            </small>
                        </div>
                    </div>

                    <div class="row dd_input_group no-gutters">
                        <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label">字符长度</label>
                        <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
                            <div class="col-4 p-0 float-left">
                                <input type="text" name="minlength" class="form-control"
                                    value="<?php echo !empty($info['minlength']) ? htmlentities($info['minlength']) : '0'; ?>">
                            </div>
                            <div class="col-1 p-0 float-left line_height_38 text-center">-</div>
                            <div class="col-4 p-0 float-left">
                                <input type="text" name="maxlength" class="form-control"
                                    value="<?php echo !empty($info['maxlength']) ? htmlentities($info['maxlength']) : '0'; ?>">
                            </div>
                        </div>
                        <div
                            class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
                            <small class="text-muted">
                                <i class="fa fa-info-circle"></i> 通常无需配置，系统会自动设置
                            </small>
                        </div>
                    </div>
                    <!---->
                    <div class="row dd_input_group no-gutters">
                        <label
                            class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label is-required">数据源</label>
                        <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
                            <select id="data_source" name="data_source" class="form-control">
                                <option value='0'>字段本身</option>
                                <option value="1" <?php if($info): ?><?php echo $info['data_source']=='1' ? 'selected="selected"' : ''; ?><?php endif; ?>>系统字典</option>
                                <option value="2" <?php if($info): ?><?php echo $info['data_source']==' 2' ? 'selected="selected"' : ''; ?><?php endif; ?>>模型数据</option>
                            </select>
                        </div>
                        <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
                            <small class="text-muted">
                                <i class="fa fa-info-circle"></i> 通常 select|radio|checkbox 或关联了其他模型时需配置
                            </small>
                        </div>
                    </div>
                    <!---->
                    <div class="row dd_input_group no-gutters">
                        <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label">关联模型</label>
                        <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
                            <input type="text" name="relation_model" class="form-control" placeholder="请填写关联的模型"
                                   value="<?php echo !empty($info['relation_model']) ? htmlentities($info['relation_model']) : ''; ?>">
                        </div>
                        <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
                            <small class="text-muted">
                                <i class="fa fa-info-circle"></i> 只有数据源选择<模型数据>时生效，填写完整的模型名称，如 User
                            </small>
                        </div>
                    </div>
                    <!---->
                    <div class="row dd_input_group no-gutters">
                        <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label">展示字段</label>
                        <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
                            <input type="text" name="relation_field" class="form-control" placeholder="请填写关联模型对应的字段"
                                   value="<?php echo !empty($info['relation_field']) ? htmlentities($info['relation_field']) : ''; ?>">
                        </div>
                        <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
                            <small class="text-muted">
                                <i class="fa fa-info-circle"></i> 只有数据源选择<模型数据>时生效，填写完整的字段名称，如 type_name
                            </small>
                        </div>
                    </div>
                    <!---->
                    <div class="row dd_input_group no-gutters">
                        <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label">字典类型</label>
                        <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
                            <select id="dict_code" name="dict_code" class="form-control">
                                <option value=''>请选择</option>
                                <?php if(is_array($dictTypes) || $dictTypes instanceof \think\Collection || $dictTypes instanceof \think\Paginator): $i = 0; $__LIST__ = $dictTypes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$dictTypes): $mod = ($i % 2 );++$i;?>
                                <option value="<?php echo htmlentities($dictTypes['id']); ?>" <?php if($info): ?><?php echo $info['dict_code']==$dictTypes['id'] ? '
                                    selected="selected"'  :  ''; ?><?php endif; ?>><?php echo htmlentities($dictTypes['dict_name']); ?> - [ <?php echo htmlentities($dictTypes['remark']); ?> ]</option>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                        </div>
                        <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
                            <small class="text-muted">
                                <i class="fa fa-info-circle"></i> 只有数据源选择<系统字典>时生效
                            </small>
                        </div>
                    </div>
					
					<!--表单设置-->
                    <div class="row dd_input_group no-gutters">
                        <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label">表单设置</label>
                        <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
                            <div class="dd_radio_lable_left field_setup" id="form_setup">
                                <!--ajax调用文件-->
									
								
  <table class="typeTable" cellpadding="2" cellspacing="1"  >
  <?php if($groups): ?>
  <tr>
                   <td>字段分组</td><td>
                            <select id="group_id" name="group_id" class="form-control">
                                <option value=''>请选择</option>
                                <?php if(is_array($groups) || $groups instanceof \think\Collection || $groups instanceof \think\Paginator): $i = 0; $__LIST__ = $groups;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$group): $mod = ($i % 2 );++$i;?>
                                <option value="<?php echo htmlentities($group['id']); ?>" <?php echo $info['group_id']==$group['id'] ? ' selected="selected"'  :  ''; ?> ><?php echo htmlentities($group['group_name']); ?></option>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>
							 <small class="text-muted">
                                <i class="fa fa-info-circle"></i> 字段所属分组
                            </small>
                        </td>
                        
					</tr>
                    <?php endif; ?>
   
    <tr>
        <td> <label class="dd_input_l col-form-label is-required">表单类型</label></td>
        <td> <select id="type" name="type" class="form-control">
                                <option value=''>请选择字段类型</option>
                                <option value="text" <?php if($info): ?><?php echo $info['type']=='text' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>单行文本</option>
                                <option value="textarea" <?php if($info): ?><?php echo $info['type']=='textarea' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>多行文本</option>
                                <option value="radio" <?php if($info): ?><?php echo $info['type']=='radio' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>单选按钮</option>
                                <option value="checkbox" <?php if($info): ?><?php echo $info['type']=='checkbox' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>多选按钮</option>
                                <option value="date" <?php if($info): ?><?php echo $info['type']=='date' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>
                                    日期</option>
                                <option value="time" <?php if($info): ?><?php echo $info['type']=='time' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>
                                    时间</option>
                                <option value="datetime" <?php if($info): ?><?php echo $info['type']=='datetime' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>日期时间</option>
                                <option value="daterange" <?php if($info): ?><?php echo $info['type']=='daterange' ? 'selected="selected"'
                                     :  ''; ?><?php endif; ?>>日期范围</option>
                                <option value="tag" <?php if($info): ?><?php echo $info['type']=='tag' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>标签
                                </option>
                                <option value="number" <?php if($info): ?><?php echo $info['type']=='number' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>数字</option>
                                <option value="password" <?php if($info): ?><?php echo $info['type']=='password' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>密码</option>
                                <option value="select" <?php if($info): ?><?php echo $info['type']=='select' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>普通下拉菜单</option>
                                <option value="select2" <?php if($info): ?><?php echo $info['type']=='select2' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>高级下拉菜单</option>
                                <option value="linkage" <?php if($info): ?><?php echo $info['type']=='linkage' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>多级联动菜单</option>
                                <option value="image" <?php if($info): ?><?php echo $info['type']=='image' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>单张图片</option>
                                <option value="images" <?php if($info): ?><?php echo $info['type']=='images' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>多张图片</option>
                                <option value="file" <?php if($info): ?><?php echo $info['type']=='file' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>
                                    单文件上传</option>
                                <option value="files" <?php if($info): ?><?php echo $info['type']=='files' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>多文件上传</option>
                                <option value="editor" <?php if($info): ?><?php echo $info['type']=='editor' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>编辑器</option>
                                <option value="hidden" <?php if($info): ?><?php echo $info['type']=='hidden' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>隐藏域</option>
                                <option value="color" <?php if($info): ?><?php echo $info['type']=='color' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>取色器</option>
                                <!-- ZTX-007，增加字段模板“代码编辑器” -->
                                <option value="code" <?php if($info): ?><?php echo $info['type']=='code' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>
                                    代码编辑器</option>
                                <!-- ZTX-007，增加字段模板“代码编辑器” -->
                            </select>
                            </td>
                            </tr>

                            <tr>
                                <td>字段提示</td>
                                <td>
                                    <input type="text" name="tips" class="form-control" placeholder="字段右侧提示信息"
                                        value="<?php echo !empty($info['tips']) ? htmlentities($info['tips']) : ''; ?>">
                                    <small class="text-muted">
                                        <i class="fa fa-info-circle"></i> 新增/修改页面字段右侧的提示信息
                                    </small>
                                </td>
                            </tr>
                            </table>
                            <table class="typeTable" cellpadding="2" cellspacing="1" id="form_setup_table">
                                <tbody>
                                </tbody>
                            </table>


                            <!--ajax调用结束-->
                        </div>
                    </div>
        </div>
        <!--表单设置-->


        <!--列表设置-->
        <div class="row dd_input_group no-gutters">
            <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label">列表设置</label>
            <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
                <div class="dd_radio_lable_left field_setup" id="table_setup">
                    <!--ajax调用文件-->





                    <table class="typeTable" cellpadding="2" cellspacing="1">

                        <td>列表类型</td>
                        <td> <select id="table_col_type" name="table_col_type" class="form-control">
                                <option value=''>请选择字段类型</option>
                                <option value="text" <?php if($info): ?><?php echo $info['table_col_type']=='text' ? 'selected="selected"'
                                     :  ''; ?><?php endif; ?>>单行文本</option>
                                <option value="checkbox" <?php if($info): ?><?php echo $info['table_col_type']=='checkbox' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>多选按钮</option>
                                <option value="datetime" <?php if($info): ?><?php echo $info['table_col_type']=='datetime' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>日期时间</option>
                                <option value="select" <?php if($info): ?><?php echo $info['table_col_type']=='select' ? 'selected="selected"'
                                     :  ''; ?><?php endif; ?>>普通下拉菜单</option>
                                <option value="select2" <?php if($info): ?><?php echo $info['table_col_type']=='select2' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>高级下拉菜单</option>
                                <option value="image" <?php if($info): ?><?php echo $info['table_col_type']=='image' ? 'selected="selected"'
                                     :  ''; ?><?php endif; ?>>单张图片</option>
                                <option value="images" <?php if($info): ?><?php echo $info['table_col_type']=='images' ? 'selected="selected"'
                                     :  ''; ?><?php endif; ?>>多张图片</option>
                                <option value="color" <?php if($info): ?><?php echo $info['table_col_type']=='color' ? 'selected="selected"'
                                     :  ''; ?><?php endif; ?>>取色器</option>
                                <option value="customize" <?php if($info): ?><?php echo $info['table_col_type']=='customize' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>自定义</option>
                                <!-- <option value="linkage" <?php if($info): ?><?php echo $info['table_col_type']=='linkage' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>多级联动菜单</option> -->
                                <!-- <option value="textarea" <?php if($info): ?><?php echo $info['table_col_type']=='textarea' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>多行文本</option> -->
                                <!-- <option value="radio" <?php if($info): ?><?php echo $info['table_col_type']=='radio' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>单选按钮</option> -->
                                <!-- <option value="file" <?php if($info): ?><?php echo $info['table_col_type']=='file' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>单文件上传</option> -->
                                <!-- <option value="files" <?php if($info): ?><?php echo $info['table_col_type']=='files' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>多文件上传</option> -->
                                <!-- <option value="editor" <?php if($info): ?><?php echo $info['table_col_type']=='editor' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>编辑器</option> -->
                                <!-- <option value="hidden" <?php if($info): ?><?php echo $info['table_col_type']=='hidden' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>隐藏域</option> -->
                                <!-- <option value="daterange" <?php if($info): ?><?php echo $info['table_col_type']=='daterange' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>日期范围</option> -->
                                <!-- <option value="tag" <?php if($info): ?><?php echo $info['table_col_type']=='tag' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>标签</option> -->
                                <!-- <option value="number" <?php if($info): ?><?php echo $info['table_col_type']=='number' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>数字</option> -->
                                <!-- <option value="password" <?php if($info): ?><?php echo $info['table_col_type']=='password' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>密码</option> -->
                                <!-- <option value="date" <?php if($info): ?><?php echo $info['table_col_type']=='date' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>日期</option> -->
                                <!-- <option value="time" <?php if($info): ?><?php echo $info['table_col_type']=='time' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>时间</option> -->
                            </select>
                        </td>
                        </tr>

                        <tr>
                            <td>搜索类型</td>
                            <td>
                                <input type="text" name="search_type" class="form-control" placeholder="请填写搜索类型"
                                    value="<?php echo !empty($info['search_type']) ? htmlentities($info['search_type']) : '='; ?>">
                                <small class="text-muted">
                                    <i class="fa fa-info-circle"></i> 如：=, <>, >, <, LIKE,in等表达式，如字段可被搜索则必须设置 </small>
                            </td>
                        </tr>
                        <tr>
                            <td>列对齐</td>
                            <td>
                                <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
                                    <div class="dd_radio_lable_left">
                                        <label class="dd_radio_lable">
                                            <input type="radio" name="table_col_align" value="left" class="dd_radio" <?php if($info): ?><?php echo $info['table_col_align']=='left' ? 'checked' : ''; ?><?php endif; ?>><span>左对齐</span>
                                        </label>
                                        <label class="dd_radio_lable">
                                            <input type="radio" name="table_col_align" value="right" class="dd_radio"
                                                <?php if($info): ?><?php echo $info['table_col_align']=='right' ? 'checked' : ''; else: ?>checked<?php endif; ?>><span>右对齐</span>
                                        </label>
                                        <label class="dd_radio_lable">
                                            <input type="radio" name="table_col_align" value="center" class="dd_radio"
                                                <?php if($info): ?><?php echo $info['table_col_align']=='center' ? 'checked' : ''; else: ?>checked<?php endif; ?>><span>居中</span>
                                        </label>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>列初始显示状态</td>
                            <td>
                                <label class="dd_radio_lable">
                                    <input type="radio" name="table_col_visible" value="false" class="dd_radio" <?php if($info): ?><?php echo $info['table_col_visible']=='false' ? 'checked' : ''; ?><?php endif; ?>><span>显示</span>
                                </label>
                                <label class="dd_radio_lable">
                                    <input type="radio" name="table_col_visible" value="true" class="dd_radio" <?php if($info): ?><?php echo $info['table_col_visible']=='true' ? 'checked' : ''; else: ?>checked<?php endif; ?>><span>隐藏</span>
                                </label>

                            </td>
                        </tr>
                        <tr>
                            <td>格式化</td>
                            <td>
                                <input id="table_col_formatter" type="text" name="table_col_formatter"
                                    class="form-control" readonly="readonly"
                                    value="<?php echo !empty($info['table_col_formatter']) ? htmlentities($info['table_col_formatter']) : 'function(value, row, index,field) { return value;}'; ?>">
                                <small class="text-muted">
                                    <i class="fa fa-info-circle"></i> 当列表类型为“自定义时”有效。value: 字段值，row：行记录数据，index:
                                    行索引，field: 行字段名。
                                </small>
                            </td>
                        </tr>

                    </table>

                    <script>
                        $(function () {
                            // CodeMirror
                            var codeEditor = CodeMirror.fromTextArea(document.getElementById("table_col_formatter"), {
                                mode: "javascript",     // 编辑器语言
                                theme: "monokai",   // 编辑器主题
                                lineNumbers: true,              // 显示行号
                                showCursorWhenSelecting: true,  // 文本选中时显示光标
                                lineWrapping: true,             // 代码折叠
                            });
                            codeEditor.setSize('auto', "200px");




                        })
                    </script>
                    <table class="typeTable" cellpadding="2" cellspacing="1" id="table_setup_table">
                        <tbody>
                        </tbody>

                    </table>

                    <!--ajax调用结束-->
                </div>
            </div>
        </div>
        <!--列表设置-->
        <!---->
        <div class="row dd_input_group no-gutters">
            <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label">数据设置</label>
            <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
                <div class="dd_radio_lable_left field_setup" id="field_setup">
                    <!--ajax调用文件-->
                    <!--ajax调用结束-->
                </div>
            </div>
        </div>
        <!---->
        <div class="row dd_input_group no-gutters">
            <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label">状态</label>
            <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
                <div class="dd_radio_lable_left">
                    <?php if($info): ?>
                    <label class="dd_radio_lable">
                        <input type="radio" name="status" value="1" class="dd_radio" <?php echo !empty($info['status']) ? 'checked'  :  ''; ?>><span>显示</span>
                    </label>
                    <label class="dd_radio_lable">
                        <input type="radio" name="status" value="0" class="dd_radio" <?php echo !empty($info['status']) ? ''  :  'checked'; ?>><span>隐藏</span>
                    </label>
                    <?php else: ?>
                    <label class="dd_radio_lable">
                        <input type="radio" name="status" value="1" class="dd_radio" checked><span>显示</span>
                    </label>
                    <label class="dd_radio_lable">
                        <input type="radio" name="status" value="0" class="dd_radio"><span>隐藏</span>
                    </label>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <!---->
        <div class="row dd_input_group no-gutters">
            <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label is-required">排序</label>
            <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
                <input type="text" name="sort" class="form-control" placeholder="请输入排序"
                    value="<?php echo !empty($info['sort']) ? htmlentities($info['sort']) :  '50'; ?>">
            </div>
            <div
                class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
                <small class="text-muted">
                    <i class="fa fa-info-circle"></i> 排序为从小到大排序，默认为50
                </small>
            </div>
        </div>
        <!---->
        <div class="row dd_input_group no-gutters">
            <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label">字段备注</label>
            <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
                <textarea class="form-control" name="remark" rows="3"
                    placeholder="请输入字段备注"><?php echo htmlentities((isset($info['remark']) && ($info['remark'] !== '')?$info['remark']:'')); ?></textarea>
            </div>
            <div
                class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
                <small class="text-muted">
                    <i class="fa fa-info-circle"></i> 字段备注
                </small>
            </div>
        </div>
        <?php if($info): ?>
        <!---->
        <div class="row dd_input_group no-gutters">
            <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label">修改表字段</label>
            <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
                <div class="dd_radio_lable_left">
                    <label class="dd_radio_lable">
                        <input type="radio" name="execute_sql" value="1" class="dd_radio" checked><span>是</span>
                    </label>
                    <label class="dd_radio_lable">
                        <input type="radio" name="execute_sql" value="0" class="dd_radio"><span>否</span>
                    </label>
                </div>
            </div>
            <div
                class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
                <small class="text-muted">
                    <i class="fa fa-info-circle"></i> 选择是会构建SQL语句来修改数据表的字段，选择否则不修改
                </small>
            </div>
        </div>
        <?php endif; ?>
        <!---->
        <div class="row dd_input_group form-builder-submit no-gutters <?php if($layer == true): ?>hide<?php endif; ?>">
            <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-11 offset-sm-2 offset-md-2 offset-lg-2 offset-xl-1">
                <button type="submit" class="btn btn-flat btn-primary ">提 交</button>
                <button type="button" class="btn btn-flat btn-default" onclick="javascript :history.back(-1)">返 回
                </button>
            </div>
        </div>
        </form>
        <!--数据表结束-->
    </div>
    </div>
</section>
<!--内容结束-->
<!-- ZTX-009，重新调整字段属性设置。 -->
<script>
    $(function () {
        // 字段变更时触发
        $("#type").change(function () {
            var type = $(this).val();
            var url = "<?php echo url('changeType'); ?>?isajax=1&moduleId=<?php echo htmlentities($module_id); ?>&type=" + type;
            field_setting(type, url);
        });
        // 编辑字段时触发
        <?php if($info): ?>
        var type = '<?php echo htmlentities($info['type']); ?>';
        var field = '<?php echo htmlentities($info['field']); ?>';
        var url = "<?php echo url('changeType'); ?>?isajax=1&moduleId=<?php echo htmlentities($info['module_id']); ?>&type=" + type + "&field=" + field;
        field_setting(type, url);
        <?php endif; ?>

        });
    //选择后变更
    function field_setting(type, url, data) {
        $.ajax({
            type: "POST",
            url: url,
            data: '',
            beforeSend: function () {
                $('#field_setup').html('<i class="fa fa-spinner fa-spin fa-fw"></i>');
            },
            success: function (msg) {
                // <!-- ZTX-009，重新调整字段属性设置。 -->
                var form_begin = msg.indexOf("form_begin@") + 11;//定位表单设置元素的初始位置
                var form_end = msg.indexOf("form_end@");//定位表单设置元素的结束位置
                var form_msg = msg.substring(form_begin, form_end);//截取表单设置元素

                var table_begin = msg.indexOf("table_begin@") + 12;//定位列表设置元素的初始位置
                var table_end = msg.indexOf("table_end@");//定位表单设置元素的结束位置
                var table_msg = msg.substring(table_begin, table_end);//截取表单设置元素
                $("#form_setup_table tbody").html(form_msg);//将表单设置元素加入到表单设置框架内
                $("#table_setup_table tbody").html(table_msg);//将表单设置元素加入到表单设置框架内
                $('#field_setup').html(msg);//将字段设置元素加入到字段设置框架内
                // <!-- ZTX-009，重新调整字段属性设置。 -->
            }
        });
    }
</script>
        </div>
        <?php if($layer == false): ?>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
	
	 <!--折腾侠：修改版权信息为动态，可自定义。原代码如下：
		 
		 <strong>Copyright &copy; 2019-<?php echo date("Y"); ?> <a href="https://siyucms.com" target="_blank">siyucms.com</a>.</strong> -->
        <strong>Copyright &copy; 2019-<?php echo date("Y"); ?> <a href="<?php echo htmlentities((isset($system['rights_link']) && ($system['rights_link'] !== '')?$system['rights_link']:'https://siyucms.com')); ?>" target="_blank"><?php echo htmlentities((isset($system['rights']) && ($system['rights'] !== '')?$system['rights']:'siyucms.com')); ?></a>.</strong>
		 <!-- 折腾侠 -->
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> <?php echo config('app.siyu_version'); ?>-折腾侠修改版
        </div>
    </footer>
<?php endif; ?>
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<button id="totop" title="返回顶部" style="display: none;"><i class="fa fa-chevron-up"></i></button>
<!-- Bootstrap 4 -->
<script src="/static/plugins/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- daterangepicker -->
<script src="/static/plugins/AdminLTE/plugins/moment/moment.min.js"></script>
<script src="/static/plugins/AdminLTE/plugins/moment/locale/zh-cn.js"></script>
<script src="/static/plugins/AdminLTE/plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="/static/plugins/AdminLTE/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="/static/plugins/AdminLTE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- overlayScrollbars -->
<script src="/static/plugins/AdminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- Toastr -->
<script src="/static/plugins/AdminLTE/plugins/toastr/toastr.min.js"></script>
<!-- pace-progress -->
<script src="/static/plugins/AdminLTE/plugins/pace-progress/pace.min.js"></script>
<!-- Bootstrap Table 表格插件样式 -->
<script src="/static/plugins/bootstrap-table/bootstrap-table.min.js"></script>
<script src="/static/plugins/bootstrap-table/locale/bootstrap-table-zh-CN.min.js"></script>
<script src="/static/plugins/bootstrap-table/extensions/mobile/bootstrap-table-mobile.js"></script>
<script src="/static/plugins/bootstrap-table/extensions/toolbar/bootstrap-table-toolbar.min.js"></script>
<link rel="stylesheet" href="/static/plugins/bootstrap-table/extensions/fixed-columns/bootstrap-table-fixed-columns.min.css"/>
<script src="/static/plugins/bootstrap-table/extensions/fixed-columns/bootstrap-table-fixed-columns.min.js"></script>

<!-- AdminLTE App -->
<script src="/static/plugins/AdminLTE/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/static/plugins/AdminLTE/dist/js/demo.js"></script>
<!-- jQueryForm -->
<script src="/static/plugins/AdminLTE/plugins/jQueryForm/jquery.form.js"></script>
<!-- CodeMirror -->
<script src="/static/plugins/AdminLTE/plugins/codemirror/codemirror.js"></script>
<script src="/static/plugins/AdminLTE/plugins/codemirror/mode/css/css.js"></script>
<script src="/static/plugins/AdminLTE/plugins/codemirror/mode/xml/xml.js"></script>
<script src="/static/plugins/AdminLTE/plugins/codemirror/mode/javascript/javascript.js"></script>
<script src="/static/plugins/AdminLTE/plugins/codemirror/mode/htmlmixed/htmlmixed.js"></script>
<!-- jquery-treegrid -->
<link rel="stylesheet" href="/static/plugins/jquery-treegrid/css/jquery.treegrid.css">
<script src="/static/plugins/jquery-treegrid/js/jquery.treegrid.js"></script>
<script src="/static/plugins/bootstrap-table/extensions/treegrid/bootstrap-table-treegrid.js"></script>

<!-- pjax -->
<script src="/static/plugins/AdminLTE/plugins/pjax/jquery.pjax.js"></script>


<?php if($system['display_mode'] == 0): ?>

<script type="text/javascript">
    $(function () {
        // 跳转页
        $(document).on('pjax:complete', function (event, xhr, textStatus, options) {
            var url = xhr.getResponseHeader('X-PJAX-URL');
            if (url) {
                $.pjax({url: url, container: '.content-wrapper'})
            }
        });

        // a 链接
        $(document).pjax('a[target!=_blank]', '.content-wrapper');

        // form 表单
        $(document).on('submit', 'form[data-pjax]', function (event) {
            $.pjax.submit(event, '.content-wrapper');
        });

        // 阻止超时导致的链接跳转(ajax默认超时时间650毫秒，超时后强制刷新整个页面)
        $(document).on('pjax:timeout', function (event) {
            event.preventDefault()
        });

        // 重新加载
        //$.pjax.reload('.content-wrapper');
    
	
	
	
	
	
	
	
	
	
	
	
	
	
	})
	
	
	
	
	
	
	
	
</script>





<?php endif; ?>
</body>
</html>
    <?php endif; else: if($iframe == true): ?>
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo htmlentities($system['label_logo']); ?>" /> <!--折腾侠修改标签页图标为动态自定义--> 
	<!-- ※折腾侠：修改后台页面标题为动态标题，可自定义 -->
    <title><?php echo htmlentities((isset($system['backstage_name']) && ($system['backstage_name'] !== '')?$system['backstage_name']:'SIYUCMS')); ?> | 控制台</title>

    <!-- layui -->
<link rel="stylesheet" href="/static/plugins/layui/css/layui.css">
<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/google-fonts/google.fonts.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/fontawesome-free/css/all.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="https://cdn.staticfile.org/ionicons/2.0.1/css/ionicons.min.css">
<!-- Tempusdominus Bootstrap 4 -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
<!-- iCheck -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/dist/css/AdminLTE.min.css">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
<!-- Daterange picker -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/daterangepicker/daterangepicker.css">
<!-- Bootstrap Color Picker -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
<!-- Toastr -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/toastr/toastr.min.css">
<!-- pace-progress -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/pace-progress/themes/black/pace-theme-flat-top.css">
<!-- jQuery -->
<script src="/static/plugins/AdminLTE/plugins/jquery/jquery.min.js"></script>
<!-- layui -->
<script src="/static/plugins/layui/layui.js"></script>
<!-- webuploader -->
<link rel="stylesheet" href="/static/plugins/webuploader-0.1.5/webuploader.css">
<script src="/static/plugins/webuploader-0.1.5/webuploader.min.js"></script>
<script type="text/javascript">
    /**
     * 封装上传组件
     * @param list
     * @param filePicker_image
     * @param image_preview
     * @param image
     * @param more            是否图集
     * @param upload_allowext 格式限制
     * @param size            大小限制
     * @param type            上传类型[file/img]
     */
    function webupload(list, filePicker_image, image_preview, image, more, upload_allowext, size, type) {
        if (upload_allowext) {
            upload_allowext = upload_allowext.replace(/\|/g, ",");
        }
        if (size) {
            size = size * 1024;
        } else {
            size = 10240 * 1024 * 1024;
        }
        type = type || 'img';
	
		//ZTX-005重新设置上传文件目录
		var pathName = window.document.location.pathname;//获取网址目录
		var pos = pathName.lastIndexOf('/');//获取斜杠的最后位置
		var path = encodeURI(pathName.substr(1,pos));//获取地址目录
		//ZTX-005重新设置上传文件目录
        var $list = $("#" + list + "");                                // 这几个初始化全局的百度文档上没说明
        var GUID = WebUploader.Base.guid();                            // 一个GUID
		
        var uploader = WebUploader.create({
		// ZTX-002折腾侠：增加从服务器上删除对应文件的操作,并开启允许重复上传
			duplicate :true,
            auto: true,                                                // 选完文件后，是否自动上传。
            swf: '/static/plugins/webuploader-0.1.5/uploader.swf',     // 加载swf文件，路径一定要对
            server: '<?php echo url("upload/index"); ?>' + '?upload_type=' + type+'&path='+path, // 文件接收服务端//ZTX-004重新设置上传文件目录：“+'&path='+path”
			
            pick: '#' + filePicker_image,                              // 选择文件的按钮。可选。
            resize: false,                                             // 不压缩image, 默认如果是jpeg，文件上传前会压缩一把再上传！
            chunked: true,                                             // 是否分片
            chunkSize: 5 * 1024 * 1024,                                // 分片大小
            threads: 1,                                                // 上传并发数
            formData: {
                // 由于Http的无状态特征，在往服务器发送数据过程传递一个进入当前页面是生成的GUID作为标示
                GUID: GUID,                                            // 自定义参数
            },
            compress: false,
            fileSingleSizeLimit: size,                                 // 限制大小200M，单文件
            //fileSizeLimit: allMaxSize*1024*1024,                     // 限制大小10M，所有被选文件，超出选择不上
            accept: {
                title: '上传图片/文件',
                extensions: upload_allowext,                           // 允许上传的类型 'gif,jpg,jpeg,bmp,png'
                mimeTypes: '*',                                        // 默认全部文件，为兼容上传文件功能，如只上传图片可写成img/*
            }
        });

        // 文件上传过程中创建进度条实时显示。
        uploader.on('uploadProgress', function (file, percentage) {
            var $li = $list,
                    $percent = $li.find('.progress .progress-bar');
            // 避免重复创建
            if (!$percent.length) {
                $percent = $('<div class="progress progress-striped active">' +
                        '<div class="progress-bar" role="progressbar" style="width: 0%">' +
                        '</div>' +
                        '</div>').appendTo($li).find('.progress-bar');
            }
            //$li.find('p.state').text('上传中');
            $percent.css('width', percentage * 100 + '%');
        });
        uploader.on('uploadSuccess', function (file, response) {
            if (response.code == 0) {
                $.modal.alertError(response.msg);
            }
            var url = response.url;
            if (more == true) {
			// <!-- ZTX-004 设置图片预览   by 折腾侠 -->
			
			if(type=='img'){
			
			var images = '' +
                    '<div class="row no-gutters">' +
                    '   <div class="col-4 col-sm-4"><input type="text" name="' + image + '[]" value="' + url + '" class="form-control"/><input type="text" name="' + image + '_small[]" value="' + response.small + '" class="hide"/></div>' +
                    '   <div class="col-3 col-sm-3"><input class="form-control input-sm" type="text" name="' + image + '_title[]" value="' + file.name + '" ></div>' +
                    '   <div class="col-4 col-sm-3">' +
                    '       <div class="btn-group">' +
                    '           <button type="button" class="btn btn-default btn-sm move_up_images"><i class="fa fa-chevron-up"></i></button>' +
                    '           <button type="button" class="btn btn-default btn-sm move_down_images"><i class="fa fa-chevron-down"></i></button>' +
                    '           <button type="button" class="btn btn-default btn-sm remove_images"><i class="fa fa-times"></i></button>' +
                    '       </div>' +
                    '   </div>' +
					'   <div class="col-4 col-sm-2"><a href="'+ url +'" target="_blank"> <img class="image_preview_info" src="'+ response.small +'"  ></a></div>'+
					
					
                    '</div>';}
			else{
			var images = '' +
                    '<div class="row no-gutters">' +
                    '   <div class="col-4 col-sm-6"><input type="text" name="' + image + '[]" value="' + url + '" class="form-control"/></div>' +
                    '   <div class="col-3 col-sm-3"><input class="form-control input-sm" type="text" name="' + image + '_title[]" value="' + file.name + '" ></div>' +
                    '   <div class="col-4 col-sm-3">' +
                    '       <div class="btn-group">' +
                    '           <button type="button" class="btn btn-default btn-sm move_up_images"><i class="fa fa-chevron-up"></i></button>' +
                    '           <button type="button" class="btn btn-default btn-sm move_down_images"><i class="fa fa-chevron-down"></i></button>' +
                    '           <button type="button" class="btn btn-default btn-sm remove_images"><i class="fa fa-times"></i></button>' +
                    '       </div>' +
                    '   </div>' +
					
                    '</div>';
			}
                
                var images_list = $('#more_images_' + image).html();

                $('#more_images_' + image).html(images + images_list);
				// <!--ZTX-004  设置图片预览   by 折腾侠 -->
	
				
            } else {
                $("input[name='" + image + "']").val(url);
                $("#" + image_preview).attr('src', url);
                $("#" + image_preview).parent("a").attr('href', url);
			
            }
        });
        uploader.on('uploadComplete', function (file) {
        //   <!-- ZTX-001-折腾侠：当多个文件上传完成后，原代码把“.progress”元素设置成隐藏，导致第二个文件上传以后的进度条无法显示。 -->
			// <!-- 原代码：$list.find('.progress').fadeOut();  -->
			
            $list.find('.progress').remove();
			
			//  <!-- ZTX-001折腾侠：上传完成后，把“.progress”元素直接删除，下一个文件上传时就会显示进度条。 -->
			
        });
        // 错误提示
        uploader.on("error", function (type) {
            if (type == "Q_TYPE_DENIED") {
                $.modal.alertError('请上传' + upload_allowext + '格式的文件！');
            } else if (type == "F_EXCEED_SIZE") {
                $.modal.alertError('单个文件大小不能超过' + size / 1024 + 'kb！');
            } else if (type == "F_DUPLICATE") {
                $.modal.alertError('请不要重复选择文件');
            } else {
                $.modal.alertError('上传出错！请检查后重新上传！错误代码' + type);
            }
        });
    }
</script>
<?php if($system['editor'] == '1'): ?>
<!-- ueditor -->
<script src="/static/plugins/ueditor/ueditor.config.js"></script>
<script src="/static/plugins/ueditor/ueditor.all.min.js"> </script>
<script src="/static/plugins/ueditor/lang/zh-cn/zh-cn.js"></script>
<?php else: ?>
<!-- ckeditor4 -->
<script src="/static/plugins/ckeditor/ckeditor.js"></script>
<?php endif; ?>
<!-- Bootstrap Table -->
<link rel="stylesheet" href="/static/plugins/bootstrap-table/bootstrap-table.min.css" />
<!-- layer 弹层组件 -->
<script>
    layui.use('layer',
        function () {
            var layer = layui.layer;
        })
</script>
<!-- zTree 树节点组件 -->
<script type="text/javascript" src="/static/plugins/zTree_v3/js/jquery.ztree.core.js"></script>
<script type="text/javascript" src="/static/plugins/zTree_v3/js/jquery.ztree.excheck.js"></script>
<!-- jQueryTagsInput -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/jQueryTagsInput/jquery.tagsinput.css">
<script src="/static/plugins/AdminLTE/plugins/jQueryTagsInput/jquery.tagsinput.js"></script>
<!-- Select2 -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/select2/css/select2.min.css">
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
<script src="/static/plugins/AdminLTE/plugins/select2/js/select2.full.min.js"></script>
<!-- CodeMirror -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/codemirror/codemirror.css">
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/codemirror/theme/monokai.css">

<!-- SIYUCMS -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/dist/css/siyucms.css?v=20211203">
<script src="/static/plugins/siyu-ui.js?v=20211203"></script>
<script src="/static/plugins/siyucms.js?v=20211203"></script>
<!-- jQuery-ui ZTX-005-->
<link rel="stylesheet" href="/static/plugins/jquery-ui-1.13.1.custom/jquery-ui.css">
<link rel="stylesheet" href="/static/plugins/jquery-ui-1.13.1.custom/jquery-ui.structure.css">
<link rel="stylesheet" href="/static/plugins/jquery-ui-1.13.1.custom/jquery-ui.theme.css">
<script src="/static/plugins/jquery-ui-1.13.1.custom/jquery-ui.js"></script>

</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed pace-primary text-sm <?php if($layer == true): ?>layer-body<?php endif; ?>" data-display_mode="<?php echo htmlentities($system['display_mode']); ?>">
<div class="wrapper">

<?php if($iframe == false && $layer == false): ?>
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>

        <!-- Left navbar links -->
        <ul class="navbar-nav js_left_menu">
            <li class="nav-item active">
                <a class="nav-link" href="javascript:;">
                    <i class="fas fa-cog"></i>
                    <span>主导航</span>
                </a>
            </li>
            <?php if(count($cates)): ?>
            <li class="nav-item">
                <a class="nav-link" href="javascript:;">
                    <i class="fa fa-th-large"></i>
                    <span>内容管理</span>
                </a>
            </li>
            <?php endif; ?>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- User Account Menu -->
            <li class="nav-item dropdown user user-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo session('admin.image') ?: '/static/plugins/AdminLTE/dist/img/user2-160x160.jpg'; ?>" class="user-image">
                    <span class="d-none d-lg-block"><?php echo session('admin.nickname') ?: session('admin.username'); ?></span>
                </a>
                <ul class="dropdown-menu">
                    <li class="user-header">
                        <img src="<?php echo session('admin.image') ?: '/static/plugins/AdminLTE/dist/img/user2-160x160.jpg'; ?>" class="img-circle">
                        <h5>上次登录时间：<?php echo session('admin.login_time'); ?></h5>
                        <h5>上次登录IP：<?php echo session('admin.login_ip'); ?></h5>
                    </li>
                    <li class="user-footer">
                        <div class="pull-left">
                            <a href="<?php echo url('Admin/edit',['id'=>session('admin.id')]); ?>" class="btn btn-default btn-flat">资料</a>
                        </div>
                        <div class="pull-right">
                            <a href="<?php echo url('Login/logout'); ?>" class="btn btn-default btn-flat">退出</a>
                        </div>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button" title="全屏">
                    <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button" title="自定义">
                    <i class="fas fa-palette"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link js_clear_cash" href="javascript:;" title="清空缓存">
                    <i class="fas fa-sync-alt"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo htmlentities($indexUrl); ?>" target="_blank" title="前台首页">
                    <i class="fas fa-home"></i>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->
<?php endif; ?>
        <div class="content-iframe">
            <?php if($layer == false): if(isset($page_title) && !empty($page_title)): ?>
<div class="content-header">
    <div class="container-fluid">
       <!-- ZTX-006，修改表格自动以页面标题样式。 -->
		<h1 class="m-0">
                    <?php echo (isset($page_title) && ($page_title !== '')?$page_title:''); ?>
                </h1>
				 <!-- ZTX-006，修改表格自动以页面标题样式。 -->
    </div>
</div>
<?php elseif($breadCrumb): ?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="m-0">
                    <?php echo htmlentities($breadCrumb['left']['0']); ?>
                    <small><?php echo htmlentities($breadCrumb['left']['1']); ?></small>
                </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo url('index/index'); ?>">Home</a></li>
                    <li class="breadcrumb-item active"><a href="<?php echo url($breadCrumb['right']['url']); ?>"><?php echo htmlentities($breadCrumb['right']['title']); ?></a></li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<?php endif; ?>
            <?php endif; ?>
            <!--内容开始-->
<section class="content">
    <!-- <style> -->
    <!-- .typeTable tr td {padding: 5px;} -->
    <!-- .typeTable tr td:first-child{text-align: right} -->
    <!-- </style> -->
    <div class="container-fluid">
        <div class="row">
            <!--顶部提示开始-->
            <div class="col-12 alert alert-warning alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <p>
                    <?php if($info): ?>
                    字段修改时会构建SQL语句来修改数据表的字段，如不想修改可勾选<修改表字段>为[否];
                        <?php else: ?>
                        1、数据表中不存在要添加的字段时会自动创建该字段并添加到字段管理中;<br>
                        2、数据表中已存在要添加的字段时仅会插入到字段管理中;
                        <?php endif; ?>
                </p>
            </div>
            <!--顶部提示结束-->
            <?php if($layer == false): ?>
            <div class="col-12 callout search">
                <form action="">
                    <a class="btn btn-flat btn-primary" href="<?php echo url('index'); ?>"><i
                            class="fa fa-list-ul m-r-10"></i>查看全部</a>
                    <a class="btn btn-flat btn-success f_r" onclick="javascript :history.back(-1)"><i
                            class="fa fa-undo m-r-10"></i>返 回</a>
                </form>
            </div>
            <?php endif; ?>
            <!--数据表开始-->
            <?php if($info): ?>
            <form class="col-12 form_builder" method="post" action="<?php echo url('editPost'); ?>" submit_confirm>
                <input type="hidden" name="id" value="<?php echo htmlentities($info['id']); ?>" />
                <input type="hidden" name="old_field" value="<?php echo htmlentities($info['field']); ?>" />
                <?php else: ?>
                <form class="col-12 form_builder" method="post" action="<?php echo url('addPost'); ?>" submit_confirm>
                    <?php endif; ?>
                    <input type="hidden" name="module_id" value="<?php echo !empty($info) ? htmlentities($info['module_id']) : htmlentities($module_id); ?>" />
                    <!---->
                    <div class="row dd_input_group no-gutters">
                        <label
                            class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label is-required">所属模块</label>
                        <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
                            <select id="module_id" name="module_id" class="form-control">
                                <option value=''>请选择</option>
                                <?php if(is_array($modules) || $modules instanceof \think\Collection || $modules instanceof \think\Paginator): $i = 0; $__LIST__ = $modules;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$module): $mod = ($i % 2 );++$i;?>
                                <option value="<?php echo htmlentities($module['id']); ?>" <?php echo $module_id==$module['id'] ? 'selected="selected"'  :  ''; ?>>
                                    <?php echo htmlentities($module['module_name']); ?> - [ <?php echo htmlentities($module['table_name']); ?> ]</option>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                        </div>
                        <div
                            class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
                            <small class="text-muted">
                                <i class="fa fa-info-circle"></i> 字段所属的模块/表
                            </small>
                        </div>
                    </div>
                    <!---->


                    <!-- ZTX-009，重新调整字段属性设置。 -->



                    <div class="row dd_input_group no-gutters">
                        <label
                            class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label is-required">字段名称</label>
                        <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
                            <input type="text" name="field" class="form-control" placeholder="字段英文名称，如 title"
                                value="<?php echo !empty($info['field']) ? htmlentities($info['field']) : ''; ?>">
                        </div>
                        <div
                            class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
                            <small class="text-muted">
                                <i class="fa fa-info-circle"></i> 注意不要包含空格，建议全部小写，通过_分割，如 user_name, goods_price
                            </small>
                        </div>
                    </div>
                    <!---->
                    <div class="row dd_input_group no-gutters">
                        <label
                            class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label is-required">字段别名</label>
                        <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
                            <input type="text" name="name" class="form-control" placeholder="字段中文名称，如 标题"
                                value="<?php echo !empty($info['name']) ? htmlentities($info['name']) : ''; ?>">
                        </div>
                        <div
                            class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
                            <small class="text-muted">
                                <i class="fa fa-info-circle"></i> 建议不超过4个汉字
                            </small>
                        </div>
                    </div>

                    <div class="row dd_input_group no-gutters">
                        <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label">是否必填</label>
                        <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
                            <div class="dd_radio_lable_left">
                                <label class="dd_radio_lable">
                                    <input type="radio" name="required" value="1" class="dd_radio" <?php if($info): ?><?php echo $info['required']==1 ? 'checked' : ''; ?><?php endif; ?>><span>是</span>
                                </label>
                                <label class="dd_radio_lable">
                                    <input type="radio" name="required" value="0" class="dd_radio" <?php if($info): ?><?php echo $info['required']==0 ? 'checked' : ''; else: ?>checked<?php endif; ?>><span>否</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <!---->
                    <div class="row dd_input_group no-gutters">
                        <label
                            class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label is-required">字段展示</label>
                        <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
                            <div class="dd_radio_lable_left">
                                <label class="dd_radio_lable">
                                    <input type="checkbox" name="is_list" value="1" class="dd_radio" <?php if($info): ?><?php echo $info['is_list']===0 ? '' : 'checked'; else: ?>checked<?php endif; ?>><span>列表</span></label>
                                <label class="dd_radio_lable">
                                    <input type="checkbox" name="is_add" value="1" class="dd_radio" <?php if($info): ?><?php echo $info['is_add']===0 ? '' : 'checked'; else: ?>checked<?php endif; ?>><span>添加</span></label>
                                <label class="dd_radio_lable">
                                    <input type="checkbox" name="is_edit" value="1" class="dd_radio" <?php if($info): ?><?php echo $info['is_edit']===0 ? '' : 'checked'; else: ?>checked<?php endif; ?>><span>修改</span></label>
                                <label class="dd_radio_lable">
                                    <input type="checkbox" name="is_search" value="1" class="dd_radio" <?php if($info): ?><?php echo $info['is_search']===0 ? '' : 'checked'; else: ?>checked<?php endif; ?>><span>搜索</span></label>
                                <label class="dd_radio_lable">
                                    <input type="checkbox" name="is_sort" value="1" class="dd_radio" <?php if($info): ?><?php echo $info['is_sort']===0 ? '' : 'checked'; else: ?>checked<?php endif; ?>><span>排序</span></label>
                            </div>
                        </div>
                        <div
                            class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
                            <small class="text-muted">
                                <i class="fa fa-info-circle"></i> 设置字段的使用场景
                            </small>
                        </div>
                    </div>

                    <div class="row dd_input_group no-gutters">
                        <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label">字符长度</label>
                        <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
                            <div class="col-4 p-0 float-left">
                                <input type="text" name="minlength" class="form-control"
                                    value="<?php echo !empty($info['minlength']) ? htmlentities($info['minlength']) : '0'; ?>">
                            </div>
                            <div class="col-1 p-0 float-left line_height_38 text-center">-</div>
                            <div class="col-4 p-0 float-left">
                                <input type="text" name="maxlength" class="form-control"
                                    value="<?php echo !empty($info['maxlength']) ? htmlentities($info['maxlength']) : '0'; ?>">
                            </div>
                        </div>
                        <div
                            class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
                            <small class="text-muted">
                                <i class="fa fa-info-circle"></i> 通常无需配置，系统会自动设置
                            </small>
                        </div>
                    </div>
                    <!---->
                    <div class="row dd_input_group no-gutters">
                        <label
                            class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label is-required">数据源</label>
                        <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
                            <select id="data_source" name="data_source" class="form-control">
                                <option value='0'>字段本身</option>
                                <option value="1" <?php if($info): ?><?php echo $info['data_source']=='1' ? 'selected="selected"' : ''; ?><?php endif; ?>>系统字典</option>
                                <option value="2" <?php if($info): ?><?php echo $info['data_source']==' 2' ? 'selected="selected"' : ''; ?><?php endif; ?>>模型数据</option>
                            </select>
                        </div>
                        <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
                            <small class="text-muted">
                                <i class="fa fa-info-circle"></i> 通常 select|radio|checkbox 或关联了其他模型时需配置
                            </small>
                        </div>
                    </div>
                    <!---->
                    <div class="row dd_input_group no-gutters">
                        <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label">关联模型</label>
                        <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
                            <input type="text" name="relation_model" class="form-control" placeholder="请填写关联的模型"
                                   value="<?php echo !empty($info['relation_model']) ? htmlentities($info['relation_model']) : ''; ?>">
                        </div>
                        <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
                            <small class="text-muted">
                                <i class="fa fa-info-circle"></i> 只有数据源选择<模型数据>时生效，填写完整的模型名称，如 User
                            </small>
                        </div>
                    </div>
                    <!---->
                    <div class="row dd_input_group no-gutters">
                        <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label">展示字段</label>
                        <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
                            <input type="text" name="relation_field" class="form-control" placeholder="请填写关联模型对应的字段"
                                   value="<?php echo !empty($info['relation_field']) ? htmlentities($info['relation_field']) : ''; ?>">
                        </div>
                        <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
                            <small class="text-muted">
                                <i class="fa fa-info-circle"></i> 只有数据源选择<模型数据>时生效，填写完整的字段名称，如 type_name
                            </small>
                        </div>
                    </div>
                    <!---->
                    <div class="row dd_input_group no-gutters">
                        <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label">字典类型</label>
                        <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
                            <select id="dict_code" name="dict_code" class="form-control">
                                <option value=''>请选择</option>
                                <?php if(is_array($dictTypes) || $dictTypes instanceof \think\Collection || $dictTypes instanceof \think\Paginator): $i = 0; $__LIST__ = $dictTypes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$dictTypes): $mod = ($i % 2 );++$i;?>
                                <option value="<?php echo htmlentities($dictTypes['id']); ?>" <?php if($info): ?><?php echo $info['dict_code']==$dictTypes['id'] ? '
                                    selected="selected"'  :  ''; ?><?php endif; ?>><?php echo htmlentities($dictTypes['dict_name']); ?> - [ <?php echo htmlentities($dictTypes['remark']); ?> ]</option>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                        </div>
                        <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
                            <small class="text-muted">
                                <i class="fa fa-info-circle"></i> 只有数据源选择<系统字典>时生效
                            </small>
                        </div>
                    </div>
					
					<!--表单设置-->
                    <div class="row dd_input_group no-gutters">
                        <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label">表单设置</label>
                        <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
                            <div class="dd_radio_lable_left field_setup" id="form_setup">
                                <!--ajax调用文件-->
									
								
  <table class="typeTable" cellpadding="2" cellspacing="1"  >
  <?php if($groups): ?>
  <tr>
                   <td>字段分组</td><td>
                            <select id="group_id" name="group_id" class="form-control">
                                <option value=''>请选择</option>
                                <?php if(is_array($groups) || $groups instanceof \think\Collection || $groups instanceof \think\Paginator): $i = 0; $__LIST__ = $groups;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$group): $mod = ($i % 2 );++$i;?>
                                <option value="<?php echo htmlentities($group['id']); ?>" <?php echo $info['group_id']==$group['id'] ? ' selected="selected"'  :  ''; ?> ><?php echo htmlentities($group['group_name']); ?></option>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>
							 <small class="text-muted">
                                <i class="fa fa-info-circle"></i> 字段所属分组
                            </small>
                        </td>
                        
					</tr>
                    <?php endif; ?>
   
    <tr>
        <td> <label class="dd_input_l col-form-label is-required">表单类型</label></td>
        <td> <select id="type" name="type" class="form-control">
                                <option value=''>请选择字段类型</option>
                                <option value="text" <?php if($info): ?><?php echo $info['type']=='text' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>单行文本</option>
                                <option value="textarea" <?php if($info): ?><?php echo $info['type']=='textarea' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>多行文本</option>
                                <option value="radio" <?php if($info): ?><?php echo $info['type']=='radio' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>单选按钮</option>
                                <option value="checkbox" <?php if($info): ?><?php echo $info['type']=='checkbox' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>多选按钮</option>
                                <option value="date" <?php if($info): ?><?php echo $info['type']=='date' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>
                                    日期</option>
                                <option value="time" <?php if($info): ?><?php echo $info['type']=='time' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>
                                    时间</option>
                                <option value="datetime" <?php if($info): ?><?php echo $info['type']=='datetime' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>日期时间</option>
                                <option value="daterange" <?php if($info): ?><?php echo $info['type']=='daterange' ? 'selected="selected"'
                                     :  ''; ?><?php endif; ?>>日期范围</option>
                                <option value="tag" <?php if($info): ?><?php echo $info['type']=='tag' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>标签
                                </option>
                                <option value="number" <?php if($info): ?><?php echo $info['type']=='number' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>数字</option>
                                <option value="password" <?php if($info): ?><?php echo $info['type']=='password' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>密码</option>
                                <option value="select" <?php if($info): ?><?php echo $info['type']=='select' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>普通下拉菜单</option>
                                <option value="select2" <?php if($info): ?><?php echo $info['type']=='select2' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>高级下拉菜单</option>
                                <option value="linkage" <?php if($info): ?><?php echo $info['type']=='linkage' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>多级联动菜单</option>
                                <option value="image" <?php if($info): ?><?php echo $info['type']=='image' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>单张图片</option>
                                <option value="images" <?php if($info): ?><?php echo $info['type']=='images' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>多张图片</option>
                                <option value="file" <?php if($info): ?><?php echo $info['type']=='file' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>
                                    单文件上传</option>
                                <option value="files" <?php if($info): ?><?php echo $info['type']=='files' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>多文件上传</option>
                                <option value="editor" <?php if($info): ?><?php echo $info['type']=='editor' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>编辑器</option>
                                <option value="hidden" <?php if($info): ?><?php echo $info['type']=='hidden' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>隐藏域</option>
                                <option value="color" <?php if($info): ?><?php echo $info['type']=='color' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>取色器</option>
                                <!-- ZTX-007，增加字段模板“代码编辑器” -->
                                <option value="code" <?php if($info): ?><?php echo $info['type']=='code' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>
                                    代码编辑器</option>
                                <!-- ZTX-007，增加字段模板“代码编辑器” -->
                            </select>
                            </td>
                            </tr>

                            <tr>
                                <td>字段提示</td>
                                <td>
                                    <input type="text" name="tips" class="form-control" placeholder="字段右侧提示信息"
                                        value="<?php echo !empty($info['tips']) ? htmlentities($info['tips']) : ''; ?>">
                                    <small class="text-muted">
                                        <i class="fa fa-info-circle"></i> 新增/修改页面字段右侧的提示信息
                                    </small>
                                </td>
                            </tr>
                            </table>
                            <table class="typeTable" cellpadding="2" cellspacing="1" id="form_setup_table">
                                <tbody>
                                </tbody>
                            </table>


                            <!--ajax调用结束-->
                        </div>
                    </div>
        </div>
        <!--表单设置-->


        <!--列表设置-->
        <div class="row dd_input_group no-gutters">
            <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label">列表设置</label>
            <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
                <div class="dd_radio_lable_left field_setup" id="table_setup">
                    <!--ajax调用文件-->





                    <table class="typeTable" cellpadding="2" cellspacing="1">

                        <td>列表类型</td>
                        <td> <select id="table_col_type" name="table_col_type" class="form-control">
                                <option value=''>请选择字段类型</option>
                                <option value="text" <?php if($info): ?><?php echo $info['table_col_type']=='text' ? 'selected="selected"'
                                     :  ''; ?><?php endif; ?>>单行文本</option>
                                <option value="checkbox" <?php if($info): ?><?php echo $info['table_col_type']=='checkbox' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>多选按钮</option>
                                <option value="datetime" <?php if($info): ?><?php echo $info['table_col_type']=='datetime' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>日期时间</option>
                                <option value="select" <?php if($info): ?><?php echo $info['table_col_type']=='select' ? 'selected="selected"'
                                     :  ''; ?><?php endif; ?>>普通下拉菜单</option>
                                <option value="select2" <?php if($info): ?><?php echo $info['table_col_type']=='select2' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>高级下拉菜单</option>
                                <option value="image" <?php if($info): ?><?php echo $info['table_col_type']=='image' ? 'selected="selected"'
                                     :  ''; ?><?php endif; ?>>单张图片</option>
                                <option value="images" <?php if($info): ?><?php echo $info['table_col_type']=='images' ? 'selected="selected"'
                                     :  ''; ?><?php endif; ?>>多张图片</option>
                                <option value="color" <?php if($info): ?><?php echo $info['table_col_type']=='color' ? 'selected="selected"'
                                     :  ''; ?><?php endif; ?>>取色器</option>
                                <option value="customize" <?php if($info): ?><?php echo $info['table_col_type']=='customize' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>自定义</option>
                                <!-- <option value="linkage" <?php if($info): ?><?php echo $info['table_col_type']=='linkage' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>多级联动菜单</option> -->
                                <!-- <option value="textarea" <?php if($info): ?><?php echo $info['table_col_type']=='textarea' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>多行文本</option> -->
                                <!-- <option value="radio" <?php if($info): ?><?php echo $info['table_col_type']=='radio' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>单选按钮</option> -->
                                <!-- <option value="file" <?php if($info): ?><?php echo $info['table_col_type']=='file' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>单文件上传</option> -->
                                <!-- <option value="files" <?php if($info): ?><?php echo $info['table_col_type']=='files' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>多文件上传</option> -->
                                <!-- <option value="editor" <?php if($info): ?><?php echo $info['table_col_type']=='editor' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>编辑器</option> -->
                                <!-- <option value="hidden" <?php if($info): ?><?php echo $info['table_col_type']=='hidden' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>隐藏域</option> -->
                                <!-- <option value="daterange" <?php if($info): ?><?php echo $info['table_col_type']=='daterange' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>日期范围</option> -->
                                <!-- <option value="tag" <?php if($info): ?><?php echo $info['table_col_type']=='tag' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>标签</option> -->
                                <!-- <option value="number" <?php if($info): ?><?php echo $info['table_col_type']=='number' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>数字</option> -->
                                <!-- <option value="password" <?php if($info): ?><?php echo $info['table_col_type']=='password' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>密码</option> -->
                                <!-- <option value="date" <?php if($info): ?><?php echo $info['table_col_type']=='date' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>日期</option> -->
                                <!-- <option value="time" <?php if($info): ?><?php echo $info['table_col_type']=='time' ? 'selected="selected"'  :  ''; ?><?php endif; ?>>时间</option> -->
                            </select>
                        </td>
                        </tr>

                        <tr>
                            <td>搜索类型</td>
                            <td>
                                <input type="text" name="search_type" class="form-control" placeholder="请填写搜索类型"
                                    value="<?php echo !empty($info['search_type']) ? htmlentities($info['search_type']) : '='; ?>">
                                <small class="text-muted">
                                    <i class="fa fa-info-circle"></i> 如：=, <>, >, <, LIKE,in等表达式，如字段可被搜索则必须设置 </small>
                            </td>
                        </tr>
                        <tr>
                            <td>列对齐</td>
                            <td>
                                <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
                                    <div class="dd_radio_lable_left">
                                        <label class="dd_radio_lable">
                                            <input type="radio" name="table_col_align" value="left" class="dd_radio" <?php if($info): ?><?php echo $info['table_col_align']=='left' ? 'checked' : ''; ?><?php endif; ?>><span>左对齐</span>
                                        </label>
                                        <label class="dd_radio_lable">
                                            <input type="radio" name="table_col_align" value="right" class="dd_radio"
                                                <?php if($info): ?><?php echo $info['table_col_align']=='right' ? 'checked' : ''; else: ?>checked<?php endif; ?>><span>右对齐</span>
                                        </label>
                                        <label class="dd_radio_lable">
                                            <input type="radio" name="table_col_align" value="center" class="dd_radio"
                                                <?php if($info): ?><?php echo $info['table_col_align']=='center' ? 'checked' : ''; else: ?>checked<?php endif; ?>><span>居中</span>
                                        </label>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>列初始显示状态</td>
                            <td>
                                <label class="dd_radio_lable">
                                    <input type="radio" name="table_col_visible" value="false" class="dd_radio" <?php if($info): ?><?php echo $info['table_col_visible']=='false' ? 'checked' : ''; ?><?php endif; ?>><span>显示</span>
                                </label>
                                <label class="dd_radio_lable">
                                    <input type="radio" name="table_col_visible" value="true" class="dd_radio" <?php if($info): ?><?php echo $info['table_col_visible']=='true' ? 'checked' : ''; else: ?>checked<?php endif; ?>><span>隐藏</span>
                                </label>

                            </td>
                        </tr>
                        <tr>
                            <td>格式化</td>
                            <td>
                                <input id="table_col_formatter" type="text" name="table_col_formatter"
                                    class="form-control" readonly="readonly"
                                    value="<?php echo !empty($info['table_col_formatter']) ? htmlentities($info['table_col_formatter']) : 'function(value, row, index,field) { return value;}'; ?>">
                                <small class="text-muted">
                                    <i class="fa fa-info-circle"></i> 当列表类型为“自定义时”有效。value: 字段值，row：行记录数据，index:
                                    行索引，field: 行字段名。
                                </small>
                            </td>
                        </tr>

                    </table>

                    <script>
                        $(function () {
                            // CodeMirror
                            var codeEditor = CodeMirror.fromTextArea(document.getElementById("table_col_formatter"), {
                                mode: "javascript",     // 编辑器语言
                                theme: "monokai",   // 编辑器主题
                                lineNumbers: true,              // 显示行号
                                showCursorWhenSelecting: true,  // 文本选中时显示光标
                                lineWrapping: true,             // 代码折叠
                            });
                            codeEditor.setSize('auto', "200px");




                        })
                    </script>
                    <table class="typeTable" cellpadding="2" cellspacing="1" id="table_setup_table">
                        <tbody>
                        </tbody>

                    </table>

                    <!--ajax调用结束-->
                </div>
            </div>
        </div>
        <!--列表设置-->
        <!---->
        <div class="row dd_input_group no-gutters">
            <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label">数据设置</label>
            <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
                <div class="dd_radio_lable_left field_setup" id="field_setup">
                    <!--ajax调用文件-->
                    <!--ajax调用结束-->
                </div>
            </div>
        </div>
        <!---->
        <div class="row dd_input_group no-gutters">
            <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label">状态</label>
            <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
                <div class="dd_radio_lable_left">
                    <?php if($info): ?>
                    <label class="dd_radio_lable">
                        <input type="radio" name="status" value="1" class="dd_radio" <?php echo !empty($info['status']) ? 'checked'  :  ''; ?>><span>显示</span>
                    </label>
                    <label class="dd_radio_lable">
                        <input type="radio" name="status" value="0" class="dd_radio" <?php echo !empty($info['status']) ? ''  :  'checked'; ?>><span>隐藏</span>
                    </label>
                    <?php else: ?>
                    <label class="dd_radio_lable">
                        <input type="radio" name="status" value="1" class="dd_radio" checked><span>显示</span>
                    </label>
                    <label class="dd_radio_lable">
                        <input type="radio" name="status" value="0" class="dd_radio"><span>隐藏</span>
                    </label>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <!---->
        <div class="row dd_input_group no-gutters">
            <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label is-required">排序</label>
            <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
                <input type="text" name="sort" class="form-control" placeholder="请输入排序"
                    value="<?php echo !empty($info['sort']) ? htmlentities($info['sort']) :  '50'; ?>">
            </div>
            <div
                class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
                <small class="text-muted">
                    <i class="fa fa-info-circle"></i> 排序为从小到大排序，默认为50
                </small>
            </div>
        </div>
        <!---->
        <div class="row dd_input_group no-gutters">
            <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label">字段备注</label>
            <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
                <textarea class="form-control" name="remark" rows="3"
                    placeholder="请输入字段备注"><?php echo htmlentities((isset($info['remark']) && ($info['remark'] !== '')?$info['remark']:'')); ?></textarea>
            </div>
            <div
                class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
                <small class="text-muted">
                    <i class="fa fa-info-circle"></i> 字段备注
                </small>
            </div>
        </div>
        <?php if($info): ?>
        <!---->
        <div class="row dd_input_group no-gutters">
            <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label">修改表字段</label>
            <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
                <div class="dd_radio_lable_left">
                    <label class="dd_radio_lable">
                        <input type="radio" name="execute_sql" value="1" class="dd_radio" checked><span>是</span>
                    </label>
                    <label class="dd_radio_lable">
                        <input type="radio" name="execute_sql" value="0" class="dd_radio"><span>否</span>
                    </label>
                </div>
            </div>
            <div
                class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
                <small class="text-muted">
                    <i class="fa fa-info-circle"></i> 选择是会构建SQL语句来修改数据表的字段，选择否则不修改
                </small>
            </div>
        </div>
        <?php endif; ?>
        <!---->
        <div class="row dd_input_group form-builder-submit no-gutters <?php if($layer == true): ?>hide<?php endif; ?>">
            <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-11 offset-sm-2 offset-md-2 offset-lg-2 offset-xl-1">
                <button type="submit" class="btn btn-flat btn-primary ">提 交</button>
                <button type="button" class="btn btn-flat btn-default" onclick="javascript :history.back(-1)">返 回
                </button>
            </div>
        </div>
        </form>
        <!--数据表结束-->
    </div>
    </div>
</section>
<!--内容结束-->
<!-- ZTX-009，重新调整字段属性设置。 -->
<script>
    $(function () {
        // 字段变更时触发
        $("#type").change(function () {
            var type = $(this).val();
            var url = "<?php echo url('changeType'); ?>?isajax=1&moduleId=<?php echo htmlentities($module_id); ?>&type=" + type;
            field_setting(type, url);
        });
        // 编辑字段时触发
        <?php if($info): ?>
        var type = '<?php echo htmlentities($info['type']); ?>';
        var field = '<?php echo htmlentities($info['field']); ?>';
        var url = "<?php echo url('changeType'); ?>?isajax=1&moduleId=<?php echo htmlentities($info['module_id']); ?>&type=" + type + "&field=" + field;
        field_setting(type, url);
        <?php endif; ?>

        });
    //选择后变更
    function field_setting(type, url, data) {
        $.ajax({
            type: "POST",
            url: url,
            data: '',
            beforeSend: function () {
                $('#field_setup').html('<i class="fa fa-spinner fa-spin fa-fw"></i>');
            },
            success: function (msg) {
                // <!-- ZTX-009，重新调整字段属性设置。 -->
                var form_begin = msg.indexOf("form_begin@") + 11;//定位表单设置元素的初始位置
                var form_end = msg.indexOf("form_end@");//定位表单设置元素的结束位置
                var form_msg = msg.substring(form_begin, form_end);//截取表单设置元素

                var table_begin = msg.indexOf("table_begin@") + 12;//定位列表设置元素的初始位置
                var table_end = msg.indexOf("table_end@");//定位表单设置元素的结束位置
                var table_msg = msg.substring(table_begin, table_end);//截取表单设置元素
                $("#form_setup_table tbody").html(form_msg);//将表单设置元素加入到表单设置框架内
                $("#table_setup_table tbody").html(table_msg);//将表单设置元素加入到表单设置框架内
                $('#field_setup').html(msg);//将字段设置元素加入到字段设置框架内
                // <!-- ZTX-009，重新调整字段属性设置。 -->
            }
        });
    }
</script>
        </div>
    <?php else: ?>
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo htmlentities($system['label_logo']); ?>" /> <!--折腾侠修改标签页图标为动态自定义--> 
	<!-- ※折腾侠：修改后台页面标题为动态标题，可自定义 -->
    <title><?php echo htmlentities((isset($system['backstage_name']) && ($system['backstage_name'] !== '')?$system['backstage_name']:'SIYUCMS')); ?> | 控制台</title>

    <!-- layui -->
<link rel="stylesheet" href="/static/plugins/layui/css/layui.css">
<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/google-fonts/google.fonts.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/fontawesome-free/css/all.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="https://cdn.staticfile.org/ionicons/2.0.1/css/ionicons.min.css">
<!-- Tempusdominus Bootstrap 4 -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
<!-- iCheck -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/dist/css/AdminLTE.min.css">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
<!-- Daterange picker -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/daterangepicker/daterangepicker.css">
<!-- Bootstrap Color Picker -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
<!-- Toastr -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/toastr/toastr.min.css">
<!-- pace-progress -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/pace-progress/themes/black/pace-theme-flat-top.css">
<!-- jQuery -->
<script src="/static/plugins/AdminLTE/plugins/jquery/jquery.min.js"></script>
<!-- layui -->
<script src="/static/plugins/layui/layui.js"></script>
<!-- webuploader -->
<link rel="stylesheet" href="/static/plugins/webuploader-0.1.5/webuploader.css">
<script src="/static/plugins/webuploader-0.1.5/webuploader.min.js"></script>
<script type="text/javascript">
    /**
     * 封装上传组件
     * @param list
     * @param filePicker_image
     * @param image_preview
     * @param image
     * @param more            是否图集
     * @param upload_allowext 格式限制
     * @param size            大小限制
     * @param type            上传类型[file/img]
     */
    function webupload(list, filePicker_image, image_preview, image, more, upload_allowext, size, type) {
        if (upload_allowext) {
            upload_allowext = upload_allowext.replace(/\|/g, ",");
        }
        if (size) {
            size = size * 1024;
        } else {
            size = 10240 * 1024 * 1024;
        }
        type = type || 'img';
	
		//ZTX-005重新设置上传文件目录
		var pathName = window.document.location.pathname;//获取网址目录
		var pos = pathName.lastIndexOf('/');//获取斜杠的最后位置
		var path = encodeURI(pathName.substr(1,pos));//获取地址目录
		//ZTX-005重新设置上传文件目录
        var $list = $("#" + list + "");                                // 这几个初始化全局的百度文档上没说明
        var GUID = WebUploader.Base.guid();                            // 一个GUID
		
        var uploader = WebUploader.create({
		// ZTX-002折腾侠：增加从服务器上删除对应文件的操作,并开启允许重复上传
			duplicate :true,
            auto: true,                                                // 选完文件后，是否自动上传。
            swf: '/static/plugins/webuploader-0.1.5/uploader.swf',     // 加载swf文件，路径一定要对
            server: '<?php echo url("upload/index"); ?>' + '?upload_type=' + type+'&path='+path, // 文件接收服务端//ZTX-004重新设置上传文件目录：“+'&path='+path”
			
            pick: '#' + filePicker_image,                              // 选择文件的按钮。可选。
            resize: false,                                             // 不压缩image, 默认如果是jpeg，文件上传前会压缩一把再上传！
            chunked: true,                                             // 是否分片
            chunkSize: 5 * 1024 * 1024,                                // 分片大小
            threads: 1,                                                // 上传并发数
            formData: {
                // 由于Http的无状态特征，在往服务器发送数据过程传递一个进入当前页面是生成的GUID作为标示
                GUID: GUID,                                            // 自定义参数
            },
            compress: false,
            fileSingleSizeLimit: size,                                 // 限制大小200M，单文件
            //fileSizeLimit: allMaxSize*1024*1024,                     // 限制大小10M，所有被选文件，超出选择不上
            accept: {
                title: '上传图片/文件',
                extensions: upload_allowext,                           // 允许上传的类型 'gif,jpg,jpeg,bmp,png'
                mimeTypes: '*',                                        // 默认全部文件，为兼容上传文件功能，如只上传图片可写成img/*
            }
        });

        // 文件上传过程中创建进度条实时显示。
        uploader.on('uploadProgress', function (file, percentage) {
            var $li = $list,
                    $percent = $li.find('.progress .progress-bar');
            // 避免重复创建
            if (!$percent.length) {
                $percent = $('<div class="progress progress-striped active">' +
                        '<div class="progress-bar" role="progressbar" style="width: 0%">' +
                        '</div>' +
                        '</div>').appendTo($li).find('.progress-bar');
            }
            //$li.find('p.state').text('上传中');
            $percent.css('width', percentage * 100 + '%');
        });
        uploader.on('uploadSuccess', function (file, response) {
            if (response.code == 0) {
                $.modal.alertError(response.msg);
            }
            var url = response.url;
            if (more == true) {
			// <!-- ZTX-004 设置图片预览   by 折腾侠 -->
			
			if(type=='img'){
			
			var images = '' +
                    '<div class="row no-gutters">' +
                    '   <div class="col-4 col-sm-4"><input type="text" name="' + image + '[]" value="' + url + '" class="form-control"/><input type="text" name="' + image + '_small[]" value="' + response.small + '" class="hide"/></div>' +
                    '   <div class="col-3 col-sm-3"><input class="form-control input-sm" type="text" name="' + image + '_title[]" value="' + file.name + '" ></div>' +
                    '   <div class="col-4 col-sm-3">' +
                    '       <div class="btn-group">' +
                    '           <button type="button" class="btn btn-default btn-sm move_up_images"><i class="fa fa-chevron-up"></i></button>' +
                    '           <button type="button" class="btn btn-default btn-sm move_down_images"><i class="fa fa-chevron-down"></i></button>' +
                    '           <button type="button" class="btn btn-default btn-sm remove_images"><i class="fa fa-times"></i></button>' +
                    '       </div>' +
                    '   </div>' +
					'   <div class="col-4 col-sm-2"><a href="'+ url +'" target="_blank"> <img class="image_preview_info" src="'+ response.small +'"  ></a></div>'+
					
					
                    '</div>';}
			else{
			var images = '' +
                    '<div class="row no-gutters">' +
                    '   <div class="col-4 col-sm-6"><input type="text" name="' + image + '[]" value="' + url + '" class="form-control"/></div>' +
                    '   <div class="col-3 col-sm-3"><input class="form-control input-sm" type="text" name="' + image + '_title[]" value="' + file.name + '" ></div>' +
                    '   <div class="col-4 col-sm-3">' +
                    '       <div class="btn-group">' +
                    '           <button type="button" class="btn btn-default btn-sm move_up_images"><i class="fa fa-chevron-up"></i></button>' +
                    '           <button type="button" class="btn btn-default btn-sm move_down_images"><i class="fa fa-chevron-down"></i></button>' +
                    '           <button type="button" class="btn btn-default btn-sm remove_images"><i class="fa fa-times"></i></button>' +
                    '       </div>' +
                    '   </div>' +
					
                    '</div>';
			}
                
                var images_list = $('#more_images_' + image).html();

                $('#more_images_' + image).html(images + images_list);
				// <!--ZTX-004  设置图片预览   by 折腾侠 -->
	
				
            } else {
                $("input[name='" + image + "']").val(url);
                $("#" + image_preview).attr('src', url);
                $("#" + image_preview).parent("a").attr('href', url);
			
            }
        });
        uploader.on('uploadComplete', function (file) {
        //   <!-- ZTX-001-折腾侠：当多个文件上传完成后，原代码把“.progress”元素设置成隐藏，导致第二个文件上传以后的进度条无法显示。 -->
			// <!-- 原代码：$list.find('.progress').fadeOut();  -->
			
            $list.find('.progress').remove();
			
			//  <!-- ZTX-001折腾侠：上传完成后，把“.progress”元素直接删除，下一个文件上传时就会显示进度条。 -->
			
        });
        // 错误提示
        uploader.on("error", function (type) {
            if (type == "Q_TYPE_DENIED") {
                $.modal.alertError('请上传' + upload_allowext + '格式的文件！');
            } else if (type == "F_EXCEED_SIZE") {
                $.modal.alertError('单个文件大小不能超过' + size / 1024 + 'kb！');
            } else if (type == "F_DUPLICATE") {
                $.modal.alertError('请不要重复选择文件');
            } else {
                $.modal.alertError('上传出错！请检查后重新上传！错误代码' + type);
            }
        });
    }
</script>
<?php if($system['editor'] == '1'): ?>
<!-- ueditor -->
<script src="/static/plugins/ueditor/ueditor.config.js"></script>
<script src="/static/plugins/ueditor/ueditor.all.min.js"> </script>
<script src="/static/plugins/ueditor/lang/zh-cn/zh-cn.js"></script>
<?php else: ?>
<!-- ckeditor4 -->
<script src="/static/plugins/ckeditor/ckeditor.js"></script>
<?php endif; ?>
<!-- Bootstrap Table -->
<link rel="stylesheet" href="/static/plugins/bootstrap-table/bootstrap-table.min.css" />
<!-- layer 弹层组件 -->
<script>
    layui.use('layer',
        function () {
            var layer = layui.layer;
        })
</script>
<!-- zTree 树节点组件 -->
<script type="text/javascript" src="/static/plugins/zTree_v3/js/jquery.ztree.core.js"></script>
<script type="text/javascript" src="/static/plugins/zTree_v3/js/jquery.ztree.excheck.js"></script>
<!-- jQueryTagsInput -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/jQueryTagsInput/jquery.tagsinput.css">
<script src="/static/plugins/AdminLTE/plugins/jQueryTagsInput/jquery.tagsinput.js"></script>
<!-- Select2 -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/select2/css/select2.min.css">
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
<script src="/static/plugins/AdminLTE/plugins/select2/js/select2.full.min.js"></script>
<!-- CodeMirror -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/codemirror/codemirror.css">
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/codemirror/theme/monokai.css">

<!-- SIYUCMS -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/dist/css/siyucms.css?v=20211203">
<script src="/static/plugins/siyu-ui.js?v=20211203"></script>
<script src="/static/plugins/siyucms.js?v=20211203"></script>
<!-- jQuery-ui ZTX-005-->
<link rel="stylesheet" href="/static/plugins/jquery-ui-1.13.1.custom/jquery-ui.css">
<link rel="stylesheet" href="/static/plugins/jquery-ui-1.13.1.custom/jquery-ui.structure.css">
<link rel="stylesheet" href="/static/plugins/jquery-ui-1.13.1.custom/jquery-ui.theme.css">
<script src="/static/plugins/jquery-ui-1.13.1.custom/jquery-ui.js"></script>

</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed pace-primary text-sm <?php if($layer == true): ?>layer-body<?php endif; ?>" data-display_mode="<?php echo htmlentities($system['display_mode']); ?>">
<div class="wrapper">

<?php if($iframe == false && $layer == false): ?>
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>

        <!-- Left navbar links -->
        <ul class="navbar-nav js_left_menu">
            <li class="nav-item active">
                <a class="nav-link" href="javascript:;">
                    <i class="fas fa-cog"></i>
                    <span>主导航</span>
                </a>
            </li>
            <?php if(count($cates)): ?>
            <li class="nav-item">
                <a class="nav-link" href="javascript:;">
                    <i class="fa fa-th-large"></i>
                    <span>内容管理</span>
                </a>
            </li>
            <?php endif; ?>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- User Account Menu -->
            <li class="nav-item dropdown user user-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo session('admin.image') ?: '/static/plugins/AdminLTE/dist/img/user2-160x160.jpg'; ?>" class="user-image">
                    <span class="d-none d-lg-block"><?php echo session('admin.nickname') ?: session('admin.username'); ?></span>
                </a>
                <ul class="dropdown-menu">
                    <li class="user-header">
                        <img src="<?php echo session('admin.image') ?: '/static/plugins/AdminLTE/dist/img/user2-160x160.jpg'; ?>" class="img-circle">
                        <h5>上次登录时间：<?php echo session('admin.login_time'); ?></h5>
                        <h5>上次登录IP：<?php echo session('admin.login_ip'); ?></h5>
                    </li>
                    <li class="user-footer">
                        <div class="pull-left">
                            <a href="<?php echo url('Admin/edit',['id'=>session('admin.id')]); ?>" class="btn btn-default btn-flat">资料</a>
                        </div>
                        <div class="pull-right">
                            <a href="<?php echo url('Login/logout'); ?>" class="btn btn-default btn-flat">退出</a>
                        </div>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button" title="全屏">
                    <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button" title="自定义">
                    <i class="fas fa-palette"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link js_clear_cash" href="javascript:;" title="清空缓存">
                    <i class="fas fa-sync-alt"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo htmlentities($indexUrl); ?>" target="_blank" title="前台首页">
                    <i class="fas fa-home"></i>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->
<?php endif; ?>
            <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-default elevation-4">
        <!-- Brand Logo -->
        <a href="<?php echo url('Index/index'); ?>" class="brand-link">
		
		<!-- 折腾侠：修改后台logo和名称为动态 -->
            <img src="<?php echo htmlentities((isset($system['backstage_logo']) && ($system['backstage_logo'] !== '')?$system['backstage_logo']:'/static/plugins/AdminLTE/dist/img/AdminLTELogo.png')); ?>" alt="<?php echo htmlentities((isset($system['backstage_name']) && ($system['backstage_name'] !== '')?$system['backstage_name']:'SIYUCMS')); ?>" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light"><?php echo htmlentities((isset($system['backstage_name']) && ($system['backstage_name'] !== '')?$system['backstage_name']:'SIYUCMS')); ?></span>
        </a>
		<!-- 折腾侠：修改后台logo和名称为动态 -->
        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="<?php echo session('admin.image') ?: '/static/plugins/AdminLTE/dist/img/user2-160x160.jpg'; ?>" class="img-circle elevation-2">
                </div>
                <div class="info">
                    <a href="<?php echo url('Admin/edit',['id'=>session('admin.id')]); ?>" class="d-block"><?php echo session('admin.nickname') ?: session('admin.username'); ?></a>
                </div>
            </div>

            <!-- SidebarSearch Form -->
            <div class="form-inline">
                <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar">
                            <i class="fas fa-search fa-fw"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2 mb-2">
                <ul class="nav nav-pills no_radius nav-sidebar flex-column nav-child-indent js_left_menu_show" data-widget="treeview" role="menu" data-accordion="true">
                    <li data-item="0" class="nav-header nav-item_0">主导航</li>
                    <?php if(is_array($menus) || $menus instanceof \think\Collection || $menus instanceof \think\Paginator): $i = 0; $__LIST__ = $menus;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <li data-item="0" class="nav-item nav-item_0 has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon <?php echo htmlentities((isset($vo['icon']) && ($vo['icon'] !== '')?$vo['icon']:'fas fa-bars')); ?>"></i>
                            <p>
                                <?php echo htmlentities($vo['title']); ?>
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <?php if(is_array($vo['children']) || $vo['children'] instanceof \think\Collection || $vo['children'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voo): $mod = ($i % 2 );++$i;?>
                            <li class="nav-item <?php if(count($voo['children'])): ?>has-treeview<?php endif; ?>">
                                <a href="<?php if(count($voo['children'])): ?>#<?php else: ?><?php echo htmlentities($voo['href']); ?><?php endif; ?>" class="nav-link">
                                    <i class="<?php echo htmlentities((isset($voo['icon']) && ($voo['icon'] !== '')?$voo['icon']:'far fa-circle')); ?> nav-icon"></i>
                                    <p><?php echo htmlentities($voo['title']); if(count($voo['children'])): ?><i class="right fas fa-angle-left"></i><?php endif; ?></p>
                                </a>
                                <?php if(count($voo['children'])): ?>
                                <ul class="nav nav-treeview">
                                    <?php if(is_array($voo['children']) || $voo['children'] instanceof \think\Collection || $voo['children'] instanceof \think\Paginator): $i = 0; $__LIST__ = $voo['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vooo): $mod = ($i % 2 );++$i;?>
                                    <li class="nav-item">
                                        <a href="<?php echo htmlentities($vooo['href']); ?>" class="nav-link">
                                            <i class="<?php echo htmlentities((isset($vooo['icon']) && ($vooo['icon'] !== '')?$vooo['icon']:'far fa-circle')); ?> nav-icon"></i>
                                            <p><?php echo htmlentities($vooo['title']); ?></p>
                                        </a>
                                    </li>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </ul>
                                <?php endif; ?>
                            </li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                    <li data-item="1" class="nav-header nav-item_1" style="display: none">内容管理</li>
                    <?php if(is_array($cates) || $cates instanceof \think\Collection || $cates instanceof \think\Paginator): $i = 0; $__LIST__ = $cates;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <li data-item="1" class="nav-item nav-item_1 <?php if(count($vo['sub'])): ?>has-treeview<?php endif; ?>" style="display: none">
                        <a href="<?php if(count($vo['sub'])): ?>#<?php else: ?><?php echo url($vo['module']['model_name'].'/index',['cate_id'=>$vo['id']]); ?><?php endif; ?>" class="nav-link">
                            <i class="fas fa-bars nav-icon"></i>
                            <p>
                                <?php echo htmlentities($vo['cate_name']); if(count($vo['sub'])): ?><i class="right fas fa-angle-left"></i><?php endif; ?>
                            </p>
                        </a>
                        <?php if(count($vo['sub'])): ?>
                        <ul class="nav nav-treeview">
                            <?php if(is_array($vo['sub']) || $vo['sub'] instanceof \think\Collection || $vo['sub'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['sub'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voo): $mod = ($i % 2 );++$i;?>
                            <li class="nav-item">
                                <a href="<?php echo url($voo['module']['model_name'].'/index',['cate_id'=>$voo['id']]); ?>" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <?php echo htmlentities($voo['left_html']); ?>
                                    <p>
                                        <?php echo htmlentities($voo['original_cate_name']); if(count($voo['sub'])): ?><i class="right fas fa-angle-left"></i><?php endif; ?>
                                    </p>
                                </a>
                                <?php if(count($voo['sub'])): ?>
                                <ul class="nav nav-treeview">
                                    <?php if(is_array($voo['sub']) || $voo['sub'] instanceof \think\Collection || $voo['sub'] instanceof \think\Paginator): $i = 0; $__LIST__ = $voo['sub'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vooo): $mod = ($i % 2 );++$i;?>
                                    <li class="nav-item">
                                        <a href="<?php echo url($vooo['module']['model_name'].'/index',['cate_id'=>$vooo['id']]); ?>" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <?php echo htmlentities($vooo['left_html']); ?>
                                            <p>
                                                <?php echo htmlentities($vooo['original_cate_name']); ?>
                                            </p>
                                        </a>
                                    </li>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </ul>
                                <?php endif; ?>
                            </li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                        <?php endif; ?>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <script>
        // 主导航、内容管理切换
        $(".js_left_menu li").click(function () {
            // 通过 .index()方法获取元素下标（从0开始）
            var _index = $(this).index();
            // 让左侧菜单第 _index 个显示出来，其他的隐藏起来
            $(".js_left_menu_show > li").hide();
            $(".js_left_menu_show > li.nav-item_" + _index).show();
            // 当前菜单添加选中效果，同级的移除选中效果
            $(this).addClass('active').siblings('li').removeClass('active');
        })

        // 清空缓存
        $(".js_clear_cash").click(function () {
            var url = "<?php echo url('index/clear'); ?>";
            $.modal.confirm('确定要清除缓存吗？', function () {
                $.post(url, {
                    del: true
                }, function (result) {
                    if (result.error == 0) {
                        $.modal.alertSuccess(result.msg, function (index) {
                            layer.close(index);
                            $.pjax.reload('.content-wrapper'); // pjax 重载
                        });
                    } else {
                        $.modal.alertError(result.msg);
                    }
                });
            });
        })

    </script>
        <div class="content-wrapper iframe-mode" data-widget="iframe" data-loading-screen="600">
            <div class="nav navbar navbar-expand navbar-white navbar-light border-bottom p-0">
                <div class="nav-item dropdown">
                    <a class="nav-link bg-danger dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Close</a>
                    <div class="dropdown-menu mt-0">
                        <a class="dropdown-item" href="#" data-widget="iframe-close" data-type="all">Close All</a>
                        <a class="dropdown-item" href="#" data-widget="iframe-close" data-type="all-other">Close All Other</a>
                    </div>
                </div>
                <a class="nav-link bg-light" href="#" data-widget="iframe-scrollleft"><i class="fas fa-angle-double-left"></i></a>
                <ul class="navbar-nav overflow-hidden" role="tablist"></ul>
                <a class="nav-link bg-light" href="#" data-widget="iframe-scrollright"><i class="fas fa-angle-double-right"></i></a>
                <a class="nav-link bg-light" href="#" data-widget="iframe-fullscreen"><i class="fas fa-expand"></i></a>
            </div>
            <div class="tab-content">
                <div class="tab-empty">
                    <?php if(isset($page_title) && !empty($page_title)): ?>
<div class="content-header">
    <div class="container-fluid">
       <!-- ZTX-006，修改表格自动以页面标题样式。 -->
		<h1 class="m-0">
                    <?php echo (isset($page_title) && ($page_title !== '')?$page_title:''); ?>
                </h1>
				 <!-- ZTX-006，修改表格自动以页面标题样式。 -->
    </div>
</div>
<?php elseif($breadCrumb): ?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="m-0">
                    <?php echo htmlentities($breadCrumb['left']['0']); ?>
                    <small><?php echo htmlentities($breadCrumb['left']['1']); ?></small>
                </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo url('index/index'); ?>">Home</a></li>
                    <li class="breadcrumb-item active"><a href="<?php echo url($breadCrumb['right']['url']); ?>"><?php echo htmlentities($breadCrumb['right']['title']); ?></a></li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<?php endif; ?>
                    <!--内容开始-->
<section class="content content_main">
    <?php if($indexTips): ?>
    <div class="row">
        <div class="col-12">
            <div class="alert alert-default-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <?php echo $indexTips; ?>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <div class="row">
        <div class="col-lg-8">
            <div class="row">
                <!--快捷方式-->
                <div class="col-12 col-sm-6">
                    <div class="card">
                        <div class="card-header ui-sortable-handle">
                            <h3 class="card-title"><i class="fa fa-gift"></i> 快捷方式</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                            </div>
                            <!-- /.card-tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body" style="display: block;">
                            <a class="btn btn-app" href="<?php echo url('system/edit',['id'=>1]); ?>"><i class="fa fa-cogs"></i>系统设置</a><a
                                class="btn btn-app" href="<?php echo url('database/database'); ?>"><i class="fa fa-database"></i>数据备份</a><a
                                class="btn btn-app" href="<?php echo url('module/index'); ?>"><i class="fa fa-th-list"></i>模型管理</a><a
                                class="btn btn-app" href="<?php echo url('cate/index'); ?>"><i class="fa fa-th"></i>栏目管理</a><a
                                class="btn btn-app" href="<?php echo url('link/index'); ?>"><i class="fa fa-link"></i>友情链接</a><a
                                class="btn btn-app" href="<?php echo url('ad/index'); ?>"><i class="fa fa-ad"></i>广告管理</a><a
                                class="btn btn-app" href="<?php echo url('debris/index'); ?>"><i class="fa fa-puzzle-piece"></i>碎片管理</a><a
                                class="btn btn-app" href="<?php echo url('template/index'); ?>"><i class="fa fa-code"></i>模板管理</a>
                        </div>
                        <!-- /.card-body -->
                    </div>
                <!-- /.card -->
            </div>
                <!--数据统计-->
                <div class="col-12 col-sm-6">
                    <div class="card">
                        <div class="card-header ui-sortable-handle">
                            <h3 class="card-title"><i class="fas fa-chart-bar"></i> 数据统计</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                            </div>
                            <!-- /.card-tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body" style="display: block;">
                            <div class="row pt-1 pb-1">
                                <!-- ./col -->
                                <div class="col-6">
                                    <div class="small-box bg-info">
                                        <div class="inner">
                                            <h3><?php echo htmlentities($message); ?></h3>
                                            <p>待处理留言</p>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-android-clipboard"></i>
                                        </div>
                                        <a href="<?php echo htmlentities($messageCatUrl); ?>" class="small-box-footer">更多信息 <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                                <!-- ./col -->
                                <div class="col-6">
                                    <div class="small-box bg-yellow">
                                        <div class="inner">
                                            <h3><?php echo htmlentities($user); ?></h3>
                                            <p>一周用户注册</p>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-person-add"></i>
                                        </div>
                                        <a href="<?php echo url('users/index'); ?>" class="small-box-footer">更多信息 <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                                <!-- ./col -->
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                <!-- /.card -->
            </div>
            </div>
            <div class="row">
                <!--系统信息-->
                <div class="col-12">
                    <div class="card">
                        <div class="card-header ui-sortable-handle">
                            <h3 class="card-title"><i class="fa fa-cog"></i> 系统信息</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                            </div>
                            <!-- /.card-tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body" style="display: block;">
                            <table class="table table-striped">
                                <tr>
                                    <td>网站域名</td>
                                    <td><?php echo htmlentities($config['url']); ?></td>
                                </tr>
                                <tr>
                                    <td>网站目录</td>
                                    <td><?php echo htmlentities($config['document_root']); ?></td>
                                </tr>
                                <tr>
                                    <td>服务器操作系统</td>
                                    <td><?php echo htmlentities($config['server_os']); ?></td>
                                </tr>
                                <tr>
                                    <td>服务器端口</td>
                                    <td><?php echo htmlentities($config['server_port']); ?></td>
                                </tr>
                                <tr>
                                    <td>服务器IP</td>
                                    <td><?php echo htmlentities($config['server_ip']); ?></td>
                                </tr>
                                <tr>
                                    <td>WEB运行环境</td>
                                    <td><?php echo htmlentities($config['server_soft']); ?></td>
                                </tr>
                                <tr>
                                    <td>MySQL数据库版本</td>
                                    <td><?php echo htmlentities($config['mysql_version']); ?></td>
                                </tr>
                                <tr>
                                    <td>运行PHP版本</td>
                                    <td><?php echo htmlentities($config['php_version']); ?></td>
                                </tr>
                                <tr>
                                    <td>最大上传限制</td>
                                    <td><?php echo htmlentities($config['max_upload_size']); ?></td>
                                </tr>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="row">
                <!--版本信息-->
                <div class="col-12">
                    <div class="card">
                        <div class="card-header ui-sortable-handle">
                            <h3 class="card-title"><i class="fas fa-tag"></i> 版本信息</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                            </div>
                            <!-- /.card-tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body" style="display: block;">
                            <table class="table table-bordered">
                                <tr>
                                    <td class="text-center">当前版本</td>
                                    <td>SIYUCMS V<?php echo htmlentities($config['siyu_version']); ?>&ensp;折腾侠修改版</td>
                                </tr>
                                <tr>
                                    <td class="text-center">基于框架</td>
                                    <td>ThinkPHP <?php echo htmlentities($config['version']); ?> + AdminLTE</td>
                                </tr>
                                <tr>
                                    <td valign="middle" class="text-center" style="padding-top:15px">获取授权</td>
                                    <td>
                                        <a href="http://www.siyucms.com" target="_blank" class="btn btn-flat btn-info">获取授权</a>&nbsp;&nbsp;
                                        <a href="https://gitee.com/ruoshuiyx/tp6" target="_blank" class="btn btn-flat btn-warning">查看更新</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="study">
									<div class="card-body">
                                        <a href="https://www.kancloud.cn/ruoshuiyx/siyucms" target="_blank" class="btn btn-app ">SIYUCMS 开发手册</a>
                                        <a href="https://www.kancloud.cn/manual/thinkphp6_0" target="_blank" class="btn btn-app ">ThinkPHP6 开发手册</a>
										<a href="https://www.bootstrap-table.com.cn/doc/api/table-options/" target="_blank" class="btn btn-app ">bootstrap-table 中文文档</a>
										<a href="https://jqueryui.com/autocomplete/" target="_blank" class="btn btn-app ">autocomplete自动完成插件文档</a>
										<a href="https://codemirror.net/doc/manual.html" target="_blank" class="btn btn-app ">CodeMirror用户手册</a>
                                        <a href="https://www.runoob.com/jquery/jquery-tutorial.html target="_blank" class="btn btn-app ">jQuery 菜鸟教程</a>
										</div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!--推荐-->
                <div class="col-12">
                    <div class="card">
                        <div class="card-header ui-sortable-handle">
                            <h3 class="card-title"><i class="fas fa-bullhorn"></i> 推荐</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                            </div>
                            <!-- /.card-tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body main_ad" style="display: block;">
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!--作者-->
                <div class="col-12">
                    <div class="card">
                        <div class="card-header ui-sortable-handle">
                            <h3 class="card-title"><i class="fas fa-bookmark"></i> 作者</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                            </div>
                            <!-- /.card-tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body" style="display: block;">
                            <p class="mb-2">SIYUCMS 基于 ThinkPHP <?php echo htmlentities($config['version']); ?> + AdminLTE-3 开发<br>简单 / 易用 / 响应式 / 低门槛 。</p>
                            <p class="mb-2">请尊重SIYUCMS开发者的劳动成果，未授权前请保留前台 Powered by SIYUCMS ，并不得修改后台版权信息。</p>
                            <p class="mb-1 text-info juanzeng">如果SIYUCMS有帮到您，就请作者喝杯茶吧!</p>
                            <small>--<cite class="text-muted">感谢您的使用！</cite></small>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://www.siyucms.com/ad.js?date=<?php echo date('Y-m-d'); ?>"></script>


                    <!--<h2 class="display-4">No tab selected!</h2>-->
                </div>
                <!--<div class="tab-loading">
                    <div>
                        <h2 class="display-4">loading <i class="fa fa-sync fa-spin"></i></h2>
                    </div>
                </div>-->
            </div>
        </div>
    <?php endif; if($layer == false): ?>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
	
	 <!--折腾侠：修改版权信息为动态，可自定义。原代码如下：
		 
		 <strong>Copyright &copy; 2019-<?php echo date("Y"); ?> <a href="https://siyucms.com" target="_blank">siyucms.com</a>.</strong> -->
        <strong>Copyright &copy; 2019-<?php echo date("Y"); ?> <a href="<?php echo htmlentities((isset($system['rights_link']) && ($system['rights_link'] !== '')?$system['rights_link']:'https://siyucms.com')); ?>" target="_blank"><?php echo htmlentities((isset($system['rights']) && ($system['rights'] !== '')?$system['rights']:'siyucms.com')); ?></a>.</strong>
		 <!-- 折腾侠 -->
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> <?php echo config('app.siyu_version'); ?>-折腾侠修改版
        </div>
    </footer>
<?php endif; ?>
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<button id="totop" title="返回顶部" style="display: none;"><i class="fa fa-chevron-up"></i></button>
<!-- Bootstrap 4 -->
<script src="/static/plugins/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- daterangepicker -->
<script src="/static/plugins/AdminLTE/plugins/moment/moment.min.js"></script>
<script src="/static/plugins/AdminLTE/plugins/moment/locale/zh-cn.js"></script>
<script src="/static/plugins/AdminLTE/plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="/static/plugins/AdminLTE/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="/static/plugins/AdminLTE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- overlayScrollbars -->
<script src="/static/plugins/AdminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- Toastr -->
<script src="/static/plugins/AdminLTE/plugins/toastr/toastr.min.js"></script>
<!-- pace-progress -->
<script src="/static/plugins/AdminLTE/plugins/pace-progress/pace.min.js"></script>
<!-- Bootstrap Table 表格插件样式 -->
<script src="/static/plugins/bootstrap-table/bootstrap-table.min.js"></script>
<script src="/static/plugins/bootstrap-table/locale/bootstrap-table-zh-CN.min.js"></script>
<script src="/static/plugins/bootstrap-table/extensions/mobile/bootstrap-table-mobile.js"></script>
<script src="/static/plugins/bootstrap-table/extensions/toolbar/bootstrap-table-toolbar.min.js"></script>
<link rel="stylesheet" href="/static/plugins/bootstrap-table/extensions/fixed-columns/bootstrap-table-fixed-columns.min.css"/>
<script src="/static/plugins/bootstrap-table/extensions/fixed-columns/bootstrap-table-fixed-columns.min.js"></script>

<!-- AdminLTE App -->
<script src="/static/plugins/AdminLTE/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/static/plugins/AdminLTE/dist/js/demo.js"></script>
<!-- jQueryForm -->
<script src="/static/plugins/AdminLTE/plugins/jQueryForm/jquery.form.js"></script>
<!-- CodeMirror -->
<script src="/static/plugins/AdminLTE/plugins/codemirror/codemirror.js"></script>
<script src="/static/plugins/AdminLTE/plugins/codemirror/mode/css/css.js"></script>
<script src="/static/plugins/AdminLTE/plugins/codemirror/mode/xml/xml.js"></script>
<script src="/static/plugins/AdminLTE/plugins/codemirror/mode/javascript/javascript.js"></script>
<script src="/static/plugins/AdminLTE/plugins/codemirror/mode/htmlmixed/htmlmixed.js"></script>
<!-- jquery-treegrid -->
<link rel="stylesheet" href="/static/plugins/jquery-treegrid/css/jquery.treegrid.css">
<script src="/static/plugins/jquery-treegrid/js/jquery.treegrid.js"></script>
<script src="/static/plugins/bootstrap-table/extensions/treegrid/bootstrap-table-treegrid.js"></script>

<!-- pjax -->
<script src="/static/plugins/AdminLTE/plugins/pjax/jquery.pjax.js"></script>


<?php if($system['display_mode'] == 0): ?>

<script type="text/javascript">
    $(function () {
        // 跳转页
        $(document).on('pjax:complete', function (event, xhr, textStatus, options) {
            var url = xhr.getResponseHeader('X-PJAX-URL');
            if (url) {
                $.pjax({url: url, container: '.content-wrapper'})
            }
        });

        // a 链接
        $(document).pjax('a[target!=_blank]', '.content-wrapper');

        // form 表单
        $(document).on('submit', 'form[data-pjax]', function (event) {
            $.pjax.submit(event, '.content-wrapper');
        });

        // 阻止超时导致的链接跳转(ajax默认超时时间650毫秒，超时后强制刷新整个页面)
        $(document).on('pjax:timeout', function (event) {
            event.preventDefault()
        });

        // 重新加载
        //$.pjax.reload('.content-wrapper');
    
	
	
	
	
	
	
	
	
	
	
	
	
	
	})
	
	
	
	
	
	
	
	
</script>





<?php endif; ?>
</body>
</html>
<?php endif; ?>



