<?php /*a:12:{s:50:"F:\site\haoqi\view\admin\table_builder\layout.html";i:1660832329;s:36:"F:\site\haoqi\view\admin\layout.html";i:1642750854;s:47:"F:\site\haoqi\view\admin\public\breadcrumb.html";i:1651030174;s:50:"F:\site\haoqi\view\admin\table_builder\search.html";i:1642750854;s:51:"F:\site\haoqi\view\admin\table_builder\toolbar.html";i:1642750854;s:43:"F:\site\haoqi\view\admin\public\header.html";i:1654181682;s:43:"F:\site\haoqi\view\admin\public\css_js.html";i:1650874429;s:47:"F:\site\haoqi\view\admin\index\webuploader.html";i:1660828475;s:41:"F:\site\haoqi\view\admin\public\left.html";i:1648199939;s:43:"F:\site\haoqi\view\admin\public\footer.html";i:1648198181;s:48:"F:\site\haoqi\view\admin\public\foot_css_js.html";i:1648736693;s:41:"F:\site\haoqi\view\admin\index\index.html";i:1657374967;}*/ ?>

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
    
    <?php echo (isset($extra_css) && ($extra_css !== '')?$extra_css:''); ?>
    
    <?php echo (isset($extra_html_content_top) && ($extra_html_content_top !== '')?$extra_html_content_top:''); ?>
    <!--顶部提示开始-->
    <?php if(!(empty($page_tips_top) || (($page_tips_top instanceof \think\Collection || $page_tips_top instanceof \think\Paginator ) && $page_tips_top->isEmpty()))): ?>
    <div class="alert alert-<?php echo htmlentities($tips_type); ?> alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <p><?php echo $page_tips_top; ?></p>
    </div>
    <?php endif; ?>
    <!--顶部提示结束-->
    <div class="container-fluid">
        <div class="row">
            <!--搜索区域开始-->
            <?php if($search OR $page_tips_search): ?>
<div class="col-12 search-collapse">
    <form id="search_form">
        <div class="select-list">
            <?php if(!(empty($page_tips_search) || (($page_tips_search instanceof \think\Collection || $page_tips_search instanceof \think\Paginator ) && $page_tips_search->isEmpty()))): ?><?php echo $page_tips_search; ?><?php endif; if(!(empty($search) || (($search instanceof \think\Collection || $search instanceof \think\Paginator ) && $search->isEmpty()))): ?>
            <ul>
                <?php if(is_array($search) || $search instanceof \think\Collection || $search instanceof \think\Paginator): $i = 0; $__LIST__ = $search;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$search): $mod = ($i % 2 );++$i;?>
                <li>
                    <label><?php echo htmlentities((isset($search['title']) && ($search['title'] !== '')?$search['title']:'')); ?>： </label>
                    <?php if($search['param']): if($search['data_source'] == 2 && ($search['type'] == 'text' || $search['type'] == 'textarea' || $search['type'] == 'number' || $search['type'] == 'hidden')): ?>
                            
                            <input type="text" id="search_<?php echo htmlentities((isset($search['name']) && ($search['name'] !== '')?$search['name']:'')); ?>" name="<?php echo htmlentities((isset($search['name']) && ($search['name'] !== '')?$search['name']:'')); ?>" value="<?php echo htmlentities((isset($search['default']) && ($search['default'] !== '')?$search['default']:'')); ?>"/>
                        <?php elseif($search['data_source'] == 2 && $search['type'] == 'linkage'): 
                                // 获取字段信息
                                $filedInfo = \app\common\model\Field::where('id', $search['field_id'])->find();
                                $filedInfo['setup'] = string2array($filedInfo['setup']);
                                $setupFields = explode(',', $filedInfo['setup']['fields']);

                                // 获取一级联动数据
                                $levelOne  = getLinkageData($search['relation_model'], 0, $setupFields[2]);
                                $levelKey  = [];
                                $levelData = [];
                                $ajaxUrl = (string)url('Index/linkage', ['id' => $search['field_id']]);

                                // 默认值
                                if ($search['default'] != '') {
                                    $levelKeyData = getLinkageAllData($search['relation_model'], $search['default'], $setupFields[0], $setupFields[1], $setupFields[2]);
                                    $levelKey = $levelKeyData['key'];
                                    $levelData = $levelKeyData['data'];
                                    sort($levelKey); // 升序排序
                                    $levelData = array_reverse($levelData); // 以相反的元素顺序返回数组
                                }
                             ?>
                            <select class="js_linkage" data-model="<?php echo htmlentities($search['relation_model']); ?>" data-key="<?php echo htmlentities($setupFields['0']); ?>" data-key_value="<?php echo htmlentities($setupFields['1']); ?>" data-pid_field_name="<?php echo htmlentities((isset($setupFields['2']) && ($setupFields['2'] !== '')?$setupFields['2']:'pid')); ?>" data-next_level_id="<?php echo htmlentities($search['name']); ?>_2" id="<?php echo htmlentities($search['name']); ?>_1" name="<?php echo htmlentities($search['name']); if($filedInfo['setup']['level'] > '1'): ?>_1<?php endif; ?>" data-placeholder="请选择" data-ajax_url="<?php echo htmlentities($ajaxUrl); ?>" style="width: auto; display: inline-block">
                                <option value="">请选择</option>
                                <?php if(is_array($levelOne) || $levelOne instanceof \think\Collection || $levelOne instanceof \think\Paginator): $i = 0; $__LIST__ = $levelOne;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;if($filedInfo['setup']['level'] == '1'): ?>
                                <option value="<?php echo htmlentities($option[$setupFields[0]]); ?>" <?php if(($search['default'] == (string)$option[$setupFields[0]])): ?>selected<?php endif; ?>><?php echo $option[$setupFields[1]]; ?></option>
                                <?php else: ?>
                                <option value="<?php echo htmlentities($option[$setupFields[0]]); ?>" <?php if((isset($levelKey[1]) && $levelKey[1] == (string)$option[$setupFields[0]])): ?>selected<?php endif; ?>><?php echo $option[$setupFields[1]]; ?></option>
                                <?php endif; ?>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                            <?php if($filedInfo['setup']['level'] == '2'): ?>
                            <select id="<?php echo htmlentities($search['name']); ?>_2" name="<?php echo htmlentities($search['name']); ?>" data-placeholder="请选择" style="width: auto; display: inline-block">
                                <option value="">请选择</option>
                                <?php if(!(empty($levelData['1']) || (($levelData['1'] instanceof \think\Collection || $levelData['1'] instanceof \think\Paginator ) && $levelData['1']->isEmpty()))): if(is_array($levelData['1']) || $levelData['1'] instanceof \think\Collection || $levelData['1'] instanceof \think\Paginator): $i = 0; $__LIST__ = $levelData['1'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;?>
                                <option value="<?php echo htmlentities($option[$setupFields[0]]); ?>" <?php if(($search['default'] == (string)$option[$setupFields[0]])): ?>selected<?php endif; ?>><?php echo $option[$setupFields[1]]; ?></option>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                                <?php endif; ?>
                            </select>
                            <?php endif; if($filedInfo['setup']['level'] == '3'): ?>
                            <select class="js_linkage" data-model="<?php echo htmlentities($search['relation_model']); ?>" data-key="<?php echo htmlentities($setupFields['0']); ?>" data-key_value="<?php echo htmlentities($setupFields['1']); ?>" data-pid_field_name="<?php echo htmlentities((isset($setupFields['2']) && ($setupFields['2'] !== '')?$setupFields['2']:'pid')); ?>" data-next_level_id="<?php echo htmlentities($search['name']); ?>_3" id="<?php echo htmlentities($search['name']); ?>_2" name="<?php echo htmlentities($search['name']); ?>_2" data-placeholder="请选择" data-ajax_url="<?php echo htmlentities($ajaxUrl); ?>" style="width: auto; display: inline-block">
                                <option value="">请选择</option>
                                <?php if(!(empty($levelData['1']) || (($levelData['1'] instanceof \think\Collection || $levelData['1'] instanceof \think\Paginator ) && $levelData['1']->isEmpty()))): if(is_array($levelData['1']) || $levelData['1'] instanceof \think\Collection || $levelData['1'] instanceof \think\Paginator): $i = 0; $__LIST__ = $levelData['1'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;?>
                                <option value="<?php echo htmlentities($option[$setupFields[0]]); ?>" <?php if((isset($levelKey[2]) && $levelKey[2] == (string)$option[$setupFields[0]])): ?>selected<?php endif; ?>><?php echo $option[$setupFields[1]]; ?></option>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                                <?php endif; ?>
                            </select>
                            <select id="<?php echo htmlentities($search['name']); ?>_3" name="<?php echo htmlentities($search['name']); ?>" data-placeholder="请选择" style="width: auto; display: inline-block">
                                <option value="">请选择</option>
                                <?php if(!(empty($levelData['2']) || (($levelData['2'] instanceof \think\Collection || $levelData['2'] instanceof \think\Paginator ) && $levelData['2']->isEmpty()))): if(is_array($levelData['2']) || $levelData['2'] instanceof \think\Collection || $levelData['2'] instanceof \think\Paginator): $i = 0; $__LIST__ = $levelData['2'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;?>
                                <option value="<?php echo htmlentities($option[$setupFields[0]]); ?>" <?php if(($search['default'] == (string)$option[$setupFields[0]])): ?>selected<?php endif; ?>><?php echo $option[$setupFields[1]]; ?></option>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                                <?php endif; ?>
                            </select>
                            <?php endif; else: ?>
                            <select id="search_<?php echo htmlentities((isset($search['name']) && ($search['name'] !== '')?$search['name']:'')); ?>" name="<?php echo htmlentities((isset($search['name']) && ($search['name'] !== '')?$search['name']:'')); ?>">
                                <option value="">所有</option>
                                <?php if(!(empty($search['param']) || (($search['param'] instanceof \think\Collection || $search['param'] instanceof \think\Paginator ) && $search['param']->isEmpty()))): if(is_array($search['param']) || $search['param'] instanceof \think\Collection || $search['param'] instanceof \think\Paginator): $i = 0; $__LIST__ = $search['param'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;if(is_array($v)): ?>
                                <option value="<?php echo htmlentities($key); ?>" <?php if(((string)$search['default'] == (string)$key)): ?>selected<?php endif; if($v['disabled'] == 1): ?>disabled<?php endif; ?>><?php echo htmlentities($v['value']); ?></option>
                                <?php else: ?>
                                <option value="<?php echo htmlentities($key); ?>" <?php if(((string)$search['default'] == (string)$key)): ?>selected<?php endif; ?>><?php echo htmlentities($v); ?></option>
                                <?php endif; ?>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                                <?php endif; ?>
                            </select>
                        <?php endif; else: if($search['type'] == 'date' OR $search['type'] == 'time' OR $search['type'] == 'datetime'): ?>
                            
                            <input type="text" id="search_<?php echo htmlentities((isset($search['name']) && ($search['name'] !== '')?$search['name']:'')); ?>" name="<?php echo htmlentities((isset($search['name']) && ($search['name'] !== '')?$search['name']:'')); ?>" value="<?php echo htmlentities((isset($search['default']) && ($search['default'] !== '')?$search['default']:'')); ?>" daterange="true" autocomplete="off"/>
                        <?php elseif($search['type'] == 'select2'): ?>
                            <select class="select2" id="search_<?php echo htmlentities((isset($search['name']) && ($search['name'] !== '')?$search['name']:'')); ?>" name="<?php echo htmlentities((isset($search['name']) && ($search['name'] !== '')?$search['name']:'')); ?>" data-value="<?php echo htmlentities((isset($search['default']) && ($search['default'] !== '')?$search['default']:'')); ?>">
                                <option value="">所有</option>
                            </select>
                            <script>
                                $(function () {
                                    var option = {};
                                    // 启用ajax分页查询
                                    option = {
                                        language: "zh-CN",
                                        //allowClear: true,
                                        ajax: {
                                            delay: 250, // 限速请求
                                            url: "<?php echo url('Index/select2',['id'=>$search['field_id']]); ?>",   //  请求地址
                                            dataType: 'json',
                                            data: function (params) {
                                                return {
                                                    keyWord: params.term || '',    //搜索参数
                                                    page: params.page || 1,        //分页参数
                                                    rows: params.pagesize || 10,   //每次查询10条记录
                                                };
                                            },
                                            processResults: function (data, params) {
                                                params.page = params.page || 1;
                                                if (params.page == 1) {
                                                    data.data.unshift({id: '', name: "", text: "所有"});
                                                }
                                                return {
                                                    results: data.data,
                                                    pagination: {
                                                        more: (params.page) < data.last_page
                                                    }
                                                };
                                            },
                                            cache: true
                                        }
                                    };
                                    // 默认值设置
                                    var defaultValue = $("#search_<?php echo htmlentities((isset($search['name']) && ($search['name'] !== '')?$search['name']:'')); ?>").data("value");
                                    if (defaultValue) {
                                        $.ajax({
                                            type: "POST",
                                            url: "<?php echo url('Index/select2',['id'=>$search['field_id']]); ?>",
                                            data: {value: defaultValue},
                                            dataType: "json",
                                            async: false,
                                            success: function(data){
                                                $("#search_<?php echo htmlentities((isset($search['name']) && ($search['name'] !== '')?$search['name']:'')); ?>").append("<option selected value='" + data.key + "'>" + data.value + "</option>");
                                            }
                                        });
                                    }
                                    $("#search_<?php echo htmlentities((isset($search['name']) && ($search['name'] !== '')?$search['name']:'')); ?>").select2(option);
                                })
                            </script>
                        <?php else: ?>
                            
                            <input type="text" id="search_<?php echo htmlentities((isset($search['name']) && ($search['name'] !== '')?$search['name']:'')); ?>" name="<?php echo htmlentities((isset($search['name']) && ($search['name'] !== '')?$search['name']:'')); ?>" value="<?php echo htmlentities((isset($search['default']) && ($search['default'] !== '')?$search['default']:'')); ?>"/>
                        <?php endif; ?>
                    <?php endif; ?>
                </li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                <li>
                    <a class="btn btn-primary btn-rounded btn-sm" onclick="$.table.search()"><i class="fa fa-search"></i>&nbsp;搜索</a>
                    <a class="btn btn-warning btn-rounded btn-sm" onclick="resetPre()"><i class="fas fa-sync-alt"></i>&nbsp;重置</a>
                    <input class="hide" type="submit" name="btnSave" value="提交" onclick="$.table.search();return false;"/>
                </li>
            </ul>
            <?php endif; ?>
        </div>
    </form>
</div>
<?php endif; ?>
            <!--列表区域开始-->
            <div class="col-sm-12 select-table table-striped">
                <div class="btn-group-sm" id="toolbar" role="group">
    <?php if(is_array($top_buttons) || $top_buttons instanceof \think\Collection || $top_buttons instanceof \think\Paginator): $i = 0; $__LIST__ = $top_buttons;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$top_button): $mod = ($i % 2 );++$i;if(!(empty($top_button['group']) || (($top_button['group'] instanceof \think\Collection || $top_button['group'] instanceof \think\Paginator ) && $top_button['group']->isEmpty()))): ?>
    <div class="btn-group">
    <?php endif; ?>
        <a class="<?php echo htmlentities((isset($top_button['class']) && ($top_button['class'] !== '')?$top_button['class']:'')); ?>" <?php if(!(empty($top_button['href']) || (($top_button['href'] instanceof \think\Collection || $top_button['href'] instanceof \think\Paginator ) && $top_button['href']->isEmpty()))): ?>href="<?php echo htmlentities((isset($top_button['href']) && ($top_button['href'] !== '')?$top_button['href']:'')); ?>"<?php endif; if(!(empty($top_button['target']) || (($top_button['target'] instanceof \think\Collection || $top_button['target'] instanceof \think\Paginator ) && $top_button['target']->isEmpty()))): ?> target="<?php echo htmlentities((isset($top_button['target']) && ($top_button['target'] !== '')?$top_button['target']:'')); ?>"<?php endif; if(!(empty($top_button['onclick']) || (($top_button['onclick'] instanceof \think\Collection || $top_button['onclick'] instanceof \think\Paginator ) && $top_button['onclick']->isEmpty()))): ?> onclick="<?php echo htmlentities((isset($top_button['onclick']) && ($top_button['onclick'] !== '')?$top_button['onclick']:'')); ?>"<?php endif; ?>>
            <i class="<?php echo htmlentities((isset($top_button['icon']) && ($top_button['icon'] !== '')?$top_button['icon']:'')); ?>"></i> <?php echo htmlentities((isset($top_button['title']) && ($top_button['title'] !== '')?$top_button['title']:'')); ?>
        </a>
        <?php if(!(empty($top_button['group']) || (($top_button['group'] instanceof \think\Collection || $top_button['group'] instanceof \think\Paginator ) && $top_button['group']->isEmpty()))): ?>
        <button type="button" class="btn <?php echo htmlentities((isset($top_button['group']['class']) && ($top_button['group']['class'] !== '')?$top_button['group']['class']:'btn-info')); ?> dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="sr-only">Toggle Dropdown</span>
        </button>
        <div class="dropdown-menu">
            <?php foreach($top_button['group']['menus'] as $key=>$vo): ?>
            <a class="dropdown-item <?php echo htmlentities((isset($vo['class']) && ($vo['class'] !== '')?$vo['class']:'')); ?>" <?php if(!(empty($vo['href']) || (($vo['href'] instanceof \think\Collection || $vo['href'] instanceof \think\Paginator ) && $vo['href']->isEmpty()))): ?>href="<?php echo htmlentities((isset($vo['href']) && ($vo['href'] !== '')?$vo['href']:'')); ?>"<?php endif; if(!(empty($vo['target']) || (($vo['target'] instanceof \think\Collection || $vo['target'] instanceof \think\Paginator ) && $vo['target']->isEmpty()))): ?> target="<?php echo htmlentities((isset($vo['target']) && ($vo['target'] !== '')?$vo['target']:'')); ?>"<?php endif; if(!(empty($vo['onclick']) || (($vo['onclick'] instanceof \think\Collection || $vo['onclick'] instanceof \think\Paginator ) && $vo['onclick']->isEmpty()))): ?> onclick="<?php echo htmlentities((isset($vo['onclick']) && ($vo['onclick'] !== '')?$vo['onclick']:'')); ?>"<?php endif; ?>>
                <i class="<?php echo htmlentities((isset($vo['icon']) && ($vo['icon'] !== '')?$vo['icon']:'')); ?>"></i> <?php echo htmlentities((isset($vo['title']) && ($vo['title'] !== '')?$vo['title']:'')); ?>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
    <?php endif; ?>
    <?php endforeach; endif; else: echo "" ;endif; ?>
</div>
                <table id="bootstrap-table" data-mobile-responsive="true"></table>
            </div>
        </div>
    </div>
    <script>
	//ZTX-003前端把转义符转为普通字符 by折腾侠
	function escape2Html(str) {
	var arrEntities={'lt':'<','gt':'>','nbsp':' ','amp':'&','quot':'"'};
	return str.replace(/&(lt|gt|nbsp|amp|quot);/ig,function(all,t){return arrEntities[t];});
	}
	//ZTX-003前端把转义符转为普通字符 by折腾侠
        $(function() {
            var options = {
                uniqueId      : "<?php echo htmlentities($unique_id); ?>",         // 表格主键名称，（默认为id，如表主键不为id必须设置主键）
                url           : "<?php echo $data_url; ?>",      // 请求后台的URL
                addUrl        : "<?php echo $add_url; ?>",       // 新增的地址
                editUrl       : "<?php echo $edit_url; ?>",      // 修改的地址
                delUrl        : "<?php echo $del_url; ?>",       // 删除的地址
                exportUrl     : "<?php echo $export_url; ?>",    // 导出的地址
                sortUrl       : "<?php echo $sort_url; ?>",      // 排序的地址
                sortName      : "<?php echo htmlentities($unique_id); ?>",         // 排序列名称
                sortOrder     : "desc",                 // 排序方式  asc 或者 desc
				pagination    : <?php echo htmlentities($pagination); ?>,			// 是否进行分页
                parentIdField : "<?php echo htmlentities($parent_id_field); ?>",   // 列表树模式需传递父id字段名（parent_id/pid）
				clickToSelect : true,				    // 默认false不响应，设为true则当点击此行的某处时，会自动选中此行的checkbox/radiobox
                pageSize      : "<?php echo htmlentities($page_size); ?>",         // 每页显示的行数
                layerOpen     : "<?php echo htmlentities($layer_open); ?>",        // 添加/编辑等页启用layer弹层加载
                emptyTips     : "<?php echo htmlentities($empty_tips); ?>",        // 空数据提示信息
                fixedColumns  : false,                   // 是否启用固定列功能
                fixedLeft     : <?php echo htmlentities($fixed_left); ?>,          // 左侧固定列数
                fixedRight    : <?php echo htmlentities($fixed_right); ?>,         // 右侧固定列数
                columns: [
                    {
                        //field: 'state',
                        checkbox: true,
						// 当某行包含checkbox_disabled时禁止选择
						formatter: function(value, row, index) {
							if(row.checkbox_disabled =='1'){
								 return {
									 disabled : true
								}
							 }
						}
                    },
                    <?php if(is_array($columns) || $columns instanceof \think\Collection || $columns instanceof \think\Paginator): $i = 0; $__LIST__ = $columns;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$column): $mod = ($i % 2 );++$i;?>
                        {
                            field: '<?php echo htmlentities((isset($column['name']) && ($column['name'] !== '')?$column['name']:'')); ?>',  
                            title: '<?php echo htmlentities((isset($column['title']) && ($column['title'] !== '')?$column['title']:'')); ?>', 
                            align:'<?php echo htmlentities((isset($column['align']) && ($column['align'] !== '')?$column['align']:'center')); ?>',
                            visible:'<?php echo htmlentities((isset($column['visible']) && ($column['visible'] !== '')?$column['visible']:'true')); ?>',

                            <?php if($column['name']==$unique_id): ?>
                                sortable: true,                  
                            <?php else: ?>
                                sortable: <?php echo htmlentities($column['sortable']); ?>,     
                            <?php endif; if(!(empty($column['class']) || (($column['class'] instanceof \think\Collection || $column['class'] instanceof \think\Paginator ) && $column['class']->isEmpty()))): ?>
                                class: '<?php echo htmlentities((isset($column['class']) && ($column['class'] !== '')?$column['class']:'')); ?>', 
                            <?php endif; if(!(empty($column['width']) || (($column['width'] instanceof \think\Collection || $column['width'] instanceof \think\Paginator ) && $column['width']->isEmpty()))): ?>
                                width: <?php echo htmlentities($column['width']); ?>, 
                            <?php endif; if($column['param']): if($column['name'] == 'status'): ?>
									formatter: function(value, row, index) {
										if (value == 0) {
											return '<i class="fa fa-toggle-off text-info fa-2x cursor_pointer" onclick="$.operate.state(\'' + row.<?php echo htmlentities($unique_id); ?> + '\',\'<?php echo url('state'); ?>\')"></i>';
										} else {
											return '<i class="fa fa-toggle-on text-info fa-2x cursor_pointer" onclick="$.operate.state(\'' + row.<?php echo htmlentities($unique_id); ?> + '\',\'<?php echo url('state'); ?>\')"></i>';
										}
									}
								<?php else: ?>
								formatter: function(value, row, index) {
                                    if (value == 0) {
                                        return '<span class="badge badge-<?php echo htmlentities((isset($column['param']['0']['class']) && ($column['param']['0']['class'] !== '')?$column['param']['0']['class']:'danger')); ?>"><?php echo htmlentities((isset($column['param']['0']) && ($column['param']['0'] !== '')?$column['param']['0']:'禁用')); ?></span>';
                                    } else if (value == 1) {
                                        return '<span class="badge badge-<?php echo htmlentities((isset($column['param']['1']['class']) && ($column['param']['1']['class'] !== '')?$column['param']['1']['class']:'primary')); ?>"><?php echo htmlentities((isset($column['param']['1']) && ($column['param']['1'] !== '')?$column['param']['1']:'启用')); ?></span>';
                                    }else if (value == 2) {
                                        return '<span class="badge badge-<?php echo htmlentities((isset($column['param']['1']['class']) && ($column['param']['1']['class'] !== '')?$column['param']['1']['class']:'info')); ?>"><?php echo htmlentities((isset($column['param']['2']) && ($column['param']['2'] !== '')?$column['param']['2']:'状态2')); ?></span>';
                                    }else if (value == 3) {
                                        return '<span class="badge badge-<?php echo htmlentities((isset($column['param']['1']['class']) && ($column['param']['1']['class'] !== '')?$column['param']['1']['class']:'success')); ?>"><?php echo htmlentities((isset($column['param']['3']) && ($column['param']['3'] !== '')?$column['param']['3']:'状态3')); ?></span>';
                                    }else {
                                        var str = '';
                                        <?php foreach($column['param'] as $key=>$vo): ?>
                                            var kk = '<?php echo htmlentities($key); ?>';
                                            if (value == kk || checkValInStr(kk, value)) {
                                                str += '<span class="badge badge-info"><?php echo htmlentities($vo); ?></span> ';
                                            }
                                        <?php endforeach; ?>
                                        return str;
                                    }
                                }
								<?php endif; else: if($column['name'] == 'sort'): ?>
									formatter: function(value, row, index) {
										return '<input class="form-control input-sm w_40 changeSort" type="text" value="' + value + '" data-id="' + row.<?php echo htmlentities($unique_id); ?> + '" onblur="$.table.sort(this)">';
									}
								<?php else: switch($column['type']): case "text": ?>
									
										formatter: function(value, row, index) {
											return HTMLDecode(value);
										}
									<?php break; case "datetime": ?>
                                    formatter: function(value, row, index) {
                                        return changeDateFormat(value);
                                    }
                                    <?php break; case "status": ?>
										formatter: function(value, row, index) {
											if (value == 0) {
												return '<span class="badge badge-<?php echo htmlentities((isset($column['param']['0']['class']) && ($column['param']['0']['class'] !== '')?$column['param']['0']['class']:'danger')); ?>"><?php echo htmlentities((isset($column['param']['0']['title']) && ($column['param']['0']['title'] !== '')?$column['param']['0']['title']:'禁用')); ?></span>';
											} else if (value == 1) {
												return '<span class="badge badge-<?php echo htmlentities((isset($column['param']['1']['class']) && ($column['param']['1']['class'] !== '')?$column['param']['1']['class']:'primary')); ?>"><?php echo htmlentities((isset($column['param']['1']['title']) && ($column['param']['1']['title'] !== '')?$column['param']['1']['title']:'启用')); ?></span>';
											}else if (value == 2) {
												return '<span class="badge badge-<?php echo htmlentities((isset($column['param']['1']['class']) && ($column['param']['1']['class'] !== '')?$column['param']['1']['class']:'default')); ?>"><?php echo htmlentities((isset($column['param']['1']['title']) && ($column['param']['1']['title'] !== '')?$column['param']['1']['title']:'状态2')); ?></span>';
											}else if (value == 3) {
												return '<span class="badge badge-<?php echo htmlentities((isset($column['param']['1']['class']) && ($column['param']['1']['class'] !== '')?$column['param']['1']['class']:'success')); ?>"><?php echo htmlentities((isset($column['param']['1']['title']) && ($column['param']['1']['title'] !== '')?$column['param']['1']['title']:'状态3')); ?></span>';
											}else {
												return '<span class="badge badge-<?php echo htmlentities((isset($column['param']['1']['class']) && ($column['param']['1']['class'] !== '')?$column['param']['1']['class']:'info')); ?>"><?php echo htmlentities((isset($column['param']['1']['title']) && ($column['param']['1']['title'] !== '')?$column['param']['1']['title']:'其他')); ?></span>';
											}
										}
									<?php break; case "yesno": ?>
										formatter: function(value, row, index) {
											if (value == 0) {
												return '<i class="fa fa-ban text-<?php echo htmlentities((isset($column['param']['0']['class']) && ($column['param']['0']['class'] !== '')?$column['param']['0']['class']:'danger')); ?>"></i>';
											} else if (value == 1) {
												return '<i class="fa fa-check text-<?php echo htmlentities((isset($column['param']['1']['class']) && ($column['param']['1']['class'] !== '')?$column['param']['1']['class']:'primary')); ?>"></i>';
											}
										}
									<?php break; case "customize": ?>
                                    //自定义列表字段类型的格式化设置
										formatter: <?php echo (isset($column['formatter']) && ($column['formatter'] !== '')?$column['formatter']:''); ?>,
									<?php break; case "link": ?>
									formatter: function(value, row, index) {
										var link = '<?php echo htmlentities((isset($column['default']) && ($column['default'] !== '')?$column['default']:'')); ?>';
										var reg = /__(.*?)__/g;
										// 匹配ID和email，可能为任何的其他参数，但都是 __字段__ 格式
										while (result = reg.exec(link)) {
											link = link.replace(result[0], row[result[1]]);
										}
										// 拼接
										link = '<a href="'+link+'" target="<?php echo htmlentities($column['param']); ?>">' + value + '</a>';
										return link;
									}
									<?php break; case "image": ?>
									formatter: function(value, row, index) {
										if ($.common.isNotEmpty(value)) {
											return '<a href="' + value + '" target="_blank"><img class="image_preview" src="' + value + '"></a>';
										}
									}
									<?php break; ?>
									//ZTX-003增加多图字段的处理 by折腾侠
									<?php case "images": ?>
									formatter: function(value, row, index,field) {
										if ($.common.isNotEmpty(value)&&value!='[]') {
										value_str=escape2Html(value);										
										value_json=JSON.parse(value_str); 
										var key=Object.keys(value_json)[0];                                                                           
                                        if(typeof value_json[key].small == "undefined" || value_json[key].small == null || value_json[key].small == ""){
                                            var scrvlaue=value_json[key].image;
                                        }else{
                                            var scrvlaue=value_json[key].small;
                                        }
                                    

										return '<a href="./images_info.html?id='+ row.<?php echo htmlentities($unique_id); ?> + '&field='+field+'" target="_blank"><img class="images_preview" src="' + scrvlaue + '" ><p hidden="hidden">'+value_str+'</p></a>';
										}
									}
									<?php break; ?>
									//ZTX-003增加多图字段的处理 by折腾侠
									
									
                                    <?php case "color": ?>
                                    formatter: function(value, row, index) {
                                        if ($.common.isNotEmpty(value)) {
                                            return '<i class="table_colorpicker" style="background: ' + value + '""></i>';
                                        }
                                    }
                                    <?php break; case "select": ?>
									formatter: function(value, row, index) {
										return row.<?php echo htmlentities((isset($column['name']) && ($column['name'] !== '')?$column['name']:'')); ?>;
									}
									<?php break; case "select2": ?>
									formatter: function(value, row, index) {
										return row.<?php echo htmlentities((isset($column['name']) && ($column['name'] !== '')?$column['name']:'')); ?>;
									}
									<?php break; case "btn": ?>
                                    class : 'text-nowrap',
									formatter: function(value, row, index) {
										var actions = [];
										<?php if(is_array($right_buttons) || $right_buttons instanceof \think\Collection || $right_buttons instanceof \think\Paginator): $i = 0; $__LIST__ = $right_buttons;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$right_button): $mod = ($i % 2 );++$i;?>
										if('<?php echo htmlentities((isset($right_button['type']) && ($right_button['type'] !== '')?$right_button['type']:'')); ?>' == 'edit' || '<?php echo htmlentities((isset($right_button['type']) && ($right_button['type'] !== '')?$right_button['type']:'')); ?>' == 'preview'){
                                            if('<?php echo htmlentities((isset($right_button['href']) && ($right_button['href'] !== '')?$right_button['href']:'')); ?>'){
                                                var url = '<?php echo htmlentities((isset($right_button['href']) && ($right_button['href'] !== '')?$right_button['href']:'')); ?>';
                                                var reg = /__(.*?)__/g;
                                                // 匹配ID和email，可能为任何的其他参数，但都是 __字段__ 格式
                                                while (result = reg.exec(url)) {
                                                    url = url.replace(result[0], row[result[1]]);
                                                }
                                                actions.push('<a class="<?php echo htmlentities((isset($right_button['class']) && ($right_button['class'] !== '')?$right_button['class']:'')); ?>" target="<?php echo htmlentities((isset($right_button['target']) && ($right_button['target'] !== '')?$right_button['target']:'')); ?>" href="'+url+'"><i class="<?php echo htmlentities((isset($right_button['icon']) && ($right_button['icon'] !== '')?$right_button['icon']:'')); ?>"></i> <?php echo htmlentities((isset($right_button['title']) && ($right_button['title'] !== '')?$right_button['title']:'')); ?></a> ');
                                            }else{
                                                actions.push('<a class="<?php echo htmlentities((isset($right_button['class']) && ($right_button['class'] !== '')?$right_button['class']:'')); ?>" href="javascript:void(0)" onclick="$.operate.edit(\'' + row.<?php echo htmlentities($unique_id); ?> + '\')"><i class="<?php echo htmlentities((isset($right_button['icon']) && ($right_button['icon'] !== '')?$right_button['icon']:'')); ?>"></i> <?php echo htmlentities((isset($right_button['title']) && ($right_button['title'] !== '')?$right_button['title']:'')); ?></a> ');
                                            }
										} else if ('<?php echo htmlentities((isset($right_button['type']) && ($right_button['type'] !== '')?$right_button['type']:'')); ?>' == 'delete'){
                                            if('<?php echo htmlentities((isset($right_button['href']) && ($right_button['href'] !== '')?$right_button['href']:'')); ?>'){
                                                var url = '<?php echo htmlentities((isset($right_button['href']) && ($right_button['href'] !== '')?$right_button['href']:'')); ?>';
                                                var reg = /__(.*?)__/g;
                                                // 匹配ID和email，可能为任何的其他参数，但都是 __字段__ 格式
                                                while (result = reg.exec(url)) {
                                                    url = url.replace(result[0], row[result[1]]);
                                                }
                                                actions.push('<a class="<?php echo htmlentities((isset($right_button['class']) && ($right_button['class'] !== '')?$right_button['class']:'')); ?>" target="<?php echo htmlentities((isset($right_button['target']) && ($right_button['target'] !== '')?$right_button['target']:'')); ?>" href="'+url+'"><i class="<?php echo htmlentities((isset($right_button['icon']) && ($right_button['icon'] !== '')?$right_button['icon']:'')); ?>"></i> <?php echo htmlentities((isset($right_button['title']) && ($right_button['title'] !== '')?$right_button['title']:'')); ?></a> ');
                                            }else{
                                                actions.push('<a class="<?php echo htmlentities((isset($right_button['class']) && ($right_button['class'] !== '')?$right_button['class']:'')); ?>" href="javascript:void(0)" onclick="$.operate.remove(\'' + row.<?php echo htmlentities($unique_id); ?> + '\')"><i class="<?php echo htmlentities((isset($right_button['icon']) && ($right_button['icon'] !== '')?$right_button['icon']:'')); ?>"></i> <?php echo htmlentities((isset($right_button['title']) && ($right_button['title'] !== '')?$right_button['title']:'')); ?></a> ');
                                            }
										} else {
											var url = '<?php echo htmlentities((isset($right_button['href']) && ($right_button['href'] !== '')?$right_button['href']:'')); ?>';
											var reg = /__(.*?)__/g;
											// 匹配ID和email，可能为任何的其他参数，但都是 __字段__ 格式
											while (result = reg.exec(url)) {
												url = url.replace(result[0], row[result[1]]);
											}
											actions.push('<a class="<?php echo htmlentities((isset($right_button['class']) && ($right_button['class'] !== '')?$right_button['class']:'')); ?>" target="<?php echo htmlentities((isset($right_button['target']) && ($right_button['target'] !== '')?$right_button['target']:'')); ?>" href="'+url+'"><i class="<?php echo htmlentities((isset($right_button['icon']) && ($right_button['icon'] !== '')?$right_button['icon']:'')); ?>"></i> <?php echo htmlentities((isset($right_button['title']) && ($right_button['title'] !== '')?$right_button['title']:'')); ?></a> ');
										}

										<?php endforeach; endif; else: echo "" ;endif; ?>
										return actions.join('');
									}
									<?php break; default: ?>
									<?php endswitch; ?>
								<?php endif; ?>
							<?php endif; ?>

                        },
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                ]
            };
            $.table.init(options);
        });

        // 搜索
        function searchPre() {
            var data = {};
            $.table.search('', data);
        }

        // 重置搜索
        function resetPre() {
            $.form.reset();
        }
		//HTML反转义
		function HTMLDecode(text) {
			var temp = document.createElement("div");
			temp.innerHTML = text;
			var output = temp.innerText || temp.textContent;
			temp = null;
			return output;
		}
    </script>

    <!--bootstrap table end-->

    <!--底部提示-->
    <?php if(!(empty($page_tips_bottom) || (($page_tips_bottom instanceof \think\Collection || $page_tips_bottom instanceof \think\Paginator ) && $page_tips_bottom->isEmpty()))): ?>
    <div class="alert alert-<?php echo htmlentities($tips_type); ?> alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <p><?php echo $page_tips_bottom; ?></p>
    </div>
    <?php endif; ?>
    
    <?php echo (isset($extra_html_content_bottom) && ($extra_html_content_bottom !== '')?$extra_html_content_bottom:''); ?>
    
    <?php echo (isset($extra_js) && ($extra_js !== '')?$extra_js:''); ?>
</section>
<!--内容结束-->

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
    
    <?php echo (isset($extra_css) && ($extra_css !== '')?$extra_css:''); ?>
    
    <?php echo (isset($extra_html_content_top) && ($extra_html_content_top !== '')?$extra_html_content_top:''); ?>
    <!--顶部提示开始-->
    <?php if(!(empty($page_tips_top) || (($page_tips_top instanceof \think\Collection || $page_tips_top instanceof \think\Paginator ) && $page_tips_top->isEmpty()))): ?>
    <div class="alert alert-<?php echo htmlentities($tips_type); ?> alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <p><?php echo $page_tips_top; ?></p>
    </div>
    <?php endif; ?>
    <!--顶部提示结束-->
    <div class="container-fluid">
        <div class="row">
            <!--搜索区域开始-->
            <?php if($search OR $page_tips_search): ?>
<div class="col-12 search-collapse">
    <form id="search_form">
        <div class="select-list">
            <?php if(!(empty($page_tips_search) || (($page_tips_search instanceof \think\Collection || $page_tips_search instanceof \think\Paginator ) && $page_tips_search->isEmpty()))): ?><?php echo $page_tips_search; ?><?php endif; if(!(empty($search) || (($search instanceof \think\Collection || $search instanceof \think\Paginator ) && $search->isEmpty()))): ?>
            <ul>
                <?php if(is_array($search) || $search instanceof \think\Collection || $search instanceof \think\Paginator): $i = 0; $__LIST__ = $search;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$search): $mod = ($i % 2 );++$i;?>
                <li>
                    <label><?php echo htmlentities((isset($search['title']) && ($search['title'] !== '')?$search['title']:'')); ?>： </label>
                    <?php if($search['param']): if($search['data_source'] == 2 && ($search['type'] == 'text' || $search['type'] == 'textarea' || $search['type'] == 'number' || $search['type'] == 'hidden')): ?>
                            
                            <input type="text" id="search_<?php echo htmlentities((isset($search['name']) && ($search['name'] !== '')?$search['name']:'')); ?>" name="<?php echo htmlentities((isset($search['name']) && ($search['name'] !== '')?$search['name']:'')); ?>" value="<?php echo htmlentities((isset($search['default']) && ($search['default'] !== '')?$search['default']:'')); ?>"/>
                        <?php elseif($search['data_source'] == 2 && $search['type'] == 'linkage'): 
                                // 获取字段信息
                                $filedInfo = \app\common\model\Field::where('id', $search['field_id'])->find();
                                $filedInfo['setup'] = string2array($filedInfo['setup']);
                                $setupFields = explode(',', $filedInfo['setup']['fields']);

                                // 获取一级联动数据
                                $levelOne  = getLinkageData($search['relation_model'], 0, $setupFields[2]);
                                $levelKey  = [];
                                $levelData = [];
                                $ajaxUrl = (string)url('Index/linkage', ['id' => $search['field_id']]);

                                // 默认值
                                if ($search['default'] != '') {
                                    $levelKeyData = getLinkageAllData($search['relation_model'], $search['default'], $setupFields[0], $setupFields[1], $setupFields[2]);
                                    $levelKey = $levelKeyData['key'];
                                    $levelData = $levelKeyData['data'];
                                    sort($levelKey); // 升序排序
                                    $levelData = array_reverse($levelData); // 以相反的元素顺序返回数组
                                }
                             ?>
                            <select class="js_linkage" data-model="<?php echo htmlentities($search['relation_model']); ?>" data-key="<?php echo htmlentities($setupFields['0']); ?>" data-key_value="<?php echo htmlentities($setupFields['1']); ?>" data-pid_field_name="<?php echo htmlentities((isset($setupFields['2']) && ($setupFields['2'] !== '')?$setupFields['2']:'pid')); ?>" data-next_level_id="<?php echo htmlentities($search['name']); ?>_2" id="<?php echo htmlentities($search['name']); ?>_1" name="<?php echo htmlentities($search['name']); if($filedInfo['setup']['level'] > '1'): ?>_1<?php endif; ?>" data-placeholder="请选择" data-ajax_url="<?php echo htmlentities($ajaxUrl); ?>" style="width: auto; display: inline-block">
                                <option value="">请选择</option>
                                <?php if(is_array($levelOne) || $levelOne instanceof \think\Collection || $levelOne instanceof \think\Paginator): $i = 0; $__LIST__ = $levelOne;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;if($filedInfo['setup']['level'] == '1'): ?>
                                <option value="<?php echo htmlentities($option[$setupFields[0]]); ?>" <?php if(($search['default'] == (string)$option[$setupFields[0]])): ?>selected<?php endif; ?>><?php echo $option[$setupFields[1]]; ?></option>
                                <?php else: ?>
                                <option value="<?php echo htmlentities($option[$setupFields[0]]); ?>" <?php if((isset($levelKey[1]) && $levelKey[1] == (string)$option[$setupFields[0]])): ?>selected<?php endif; ?>><?php echo $option[$setupFields[1]]; ?></option>
                                <?php endif; ?>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                            <?php if($filedInfo['setup']['level'] == '2'): ?>
                            <select id="<?php echo htmlentities($search['name']); ?>_2" name="<?php echo htmlentities($search['name']); ?>" data-placeholder="请选择" style="width: auto; display: inline-block">
                                <option value="">请选择</option>
                                <?php if(!(empty($levelData['1']) || (($levelData['1'] instanceof \think\Collection || $levelData['1'] instanceof \think\Paginator ) && $levelData['1']->isEmpty()))): if(is_array($levelData['1']) || $levelData['1'] instanceof \think\Collection || $levelData['1'] instanceof \think\Paginator): $i = 0; $__LIST__ = $levelData['1'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;?>
                                <option value="<?php echo htmlentities($option[$setupFields[0]]); ?>" <?php if(($search['default'] == (string)$option[$setupFields[0]])): ?>selected<?php endif; ?>><?php echo $option[$setupFields[1]]; ?></option>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                                <?php endif; ?>
                            </select>
                            <?php endif; if($filedInfo['setup']['level'] == '3'): ?>
                            <select class="js_linkage" data-model="<?php echo htmlentities($search['relation_model']); ?>" data-key="<?php echo htmlentities($setupFields['0']); ?>" data-key_value="<?php echo htmlentities($setupFields['1']); ?>" data-pid_field_name="<?php echo htmlentities((isset($setupFields['2']) && ($setupFields['2'] !== '')?$setupFields['2']:'pid')); ?>" data-next_level_id="<?php echo htmlentities($search['name']); ?>_3" id="<?php echo htmlentities($search['name']); ?>_2" name="<?php echo htmlentities($search['name']); ?>_2" data-placeholder="请选择" data-ajax_url="<?php echo htmlentities($ajaxUrl); ?>" style="width: auto; display: inline-block">
                                <option value="">请选择</option>
                                <?php if(!(empty($levelData['1']) || (($levelData['1'] instanceof \think\Collection || $levelData['1'] instanceof \think\Paginator ) && $levelData['1']->isEmpty()))): if(is_array($levelData['1']) || $levelData['1'] instanceof \think\Collection || $levelData['1'] instanceof \think\Paginator): $i = 0; $__LIST__ = $levelData['1'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;?>
                                <option value="<?php echo htmlentities($option[$setupFields[0]]); ?>" <?php if((isset($levelKey[2]) && $levelKey[2] == (string)$option[$setupFields[0]])): ?>selected<?php endif; ?>><?php echo $option[$setupFields[1]]; ?></option>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                                <?php endif; ?>
                            </select>
                            <select id="<?php echo htmlentities($search['name']); ?>_3" name="<?php echo htmlentities($search['name']); ?>" data-placeholder="请选择" style="width: auto; display: inline-block">
                                <option value="">请选择</option>
                                <?php if(!(empty($levelData['2']) || (($levelData['2'] instanceof \think\Collection || $levelData['2'] instanceof \think\Paginator ) && $levelData['2']->isEmpty()))): if(is_array($levelData['2']) || $levelData['2'] instanceof \think\Collection || $levelData['2'] instanceof \think\Paginator): $i = 0; $__LIST__ = $levelData['2'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;?>
                                <option value="<?php echo htmlentities($option[$setupFields[0]]); ?>" <?php if(($search['default'] == (string)$option[$setupFields[0]])): ?>selected<?php endif; ?>><?php echo $option[$setupFields[1]]; ?></option>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                                <?php endif; ?>
                            </select>
                            <?php endif; else: ?>
                            <select id="search_<?php echo htmlentities((isset($search['name']) && ($search['name'] !== '')?$search['name']:'')); ?>" name="<?php echo htmlentities((isset($search['name']) && ($search['name'] !== '')?$search['name']:'')); ?>">
                                <option value="">所有</option>
                                <?php if(!(empty($search['param']) || (($search['param'] instanceof \think\Collection || $search['param'] instanceof \think\Paginator ) && $search['param']->isEmpty()))): if(is_array($search['param']) || $search['param'] instanceof \think\Collection || $search['param'] instanceof \think\Paginator): $i = 0; $__LIST__ = $search['param'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;if(is_array($v)): ?>
                                <option value="<?php echo htmlentities($key); ?>" <?php if(((string)$search['default'] == (string)$key)): ?>selected<?php endif; if($v['disabled'] == 1): ?>disabled<?php endif; ?>><?php echo htmlentities($v['value']); ?></option>
                                <?php else: ?>
                                <option value="<?php echo htmlentities($key); ?>" <?php if(((string)$search['default'] == (string)$key)): ?>selected<?php endif; ?>><?php echo htmlentities($v); ?></option>
                                <?php endif; ?>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                                <?php endif; ?>
                            </select>
                        <?php endif; else: if($search['type'] == 'date' OR $search['type'] == 'time' OR $search['type'] == 'datetime'): ?>
                            
                            <input type="text" id="search_<?php echo htmlentities((isset($search['name']) && ($search['name'] !== '')?$search['name']:'')); ?>" name="<?php echo htmlentities((isset($search['name']) && ($search['name'] !== '')?$search['name']:'')); ?>" value="<?php echo htmlentities((isset($search['default']) && ($search['default'] !== '')?$search['default']:'')); ?>" daterange="true" autocomplete="off"/>
                        <?php elseif($search['type'] == 'select2'): ?>
                            <select class="select2" id="search_<?php echo htmlentities((isset($search['name']) && ($search['name'] !== '')?$search['name']:'')); ?>" name="<?php echo htmlentities((isset($search['name']) && ($search['name'] !== '')?$search['name']:'')); ?>" data-value="<?php echo htmlentities((isset($search['default']) && ($search['default'] !== '')?$search['default']:'')); ?>">
                                <option value="">所有</option>
                            </select>
                            <script>
                                $(function () {
                                    var option = {};
                                    // 启用ajax分页查询
                                    option = {
                                        language: "zh-CN",
                                        //allowClear: true,
                                        ajax: {
                                            delay: 250, // 限速请求
                                            url: "<?php echo url('Index/select2',['id'=>$search['field_id']]); ?>",   //  请求地址
                                            dataType: 'json',
                                            data: function (params) {
                                                return {
                                                    keyWord: params.term || '',    //搜索参数
                                                    page: params.page || 1,        //分页参数
                                                    rows: params.pagesize || 10,   //每次查询10条记录
                                                };
                                            },
                                            processResults: function (data, params) {
                                                params.page = params.page || 1;
                                                if (params.page == 1) {
                                                    data.data.unshift({id: '', name: "", text: "所有"});
                                                }
                                                return {
                                                    results: data.data,
                                                    pagination: {
                                                        more: (params.page) < data.last_page
                                                    }
                                                };
                                            },
                                            cache: true
                                        }
                                    };
                                    // 默认值设置
                                    var defaultValue = $("#search_<?php echo htmlentities((isset($search['name']) && ($search['name'] !== '')?$search['name']:'')); ?>").data("value");
                                    if (defaultValue) {
                                        $.ajax({
                                            type: "POST",
                                            url: "<?php echo url('Index/select2',['id'=>$search['field_id']]); ?>",
                                            data: {value: defaultValue},
                                            dataType: "json",
                                            async: false,
                                            success: function(data){
                                                $("#search_<?php echo htmlentities((isset($search['name']) && ($search['name'] !== '')?$search['name']:'')); ?>").append("<option selected value='" + data.key + "'>" + data.value + "</option>");
                                            }
                                        });
                                    }
                                    $("#search_<?php echo htmlentities((isset($search['name']) && ($search['name'] !== '')?$search['name']:'')); ?>").select2(option);
                                })
                            </script>
                        <?php else: ?>
                            
                            <input type="text" id="search_<?php echo htmlentities((isset($search['name']) && ($search['name'] !== '')?$search['name']:'')); ?>" name="<?php echo htmlentities((isset($search['name']) && ($search['name'] !== '')?$search['name']:'')); ?>" value="<?php echo htmlentities((isset($search['default']) && ($search['default'] !== '')?$search['default']:'')); ?>"/>
                        <?php endif; ?>
                    <?php endif; ?>
                </li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                <li>
                    <a class="btn btn-primary btn-rounded btn-sm" onclick="$.table.search()"><i class="fa fa-search"></i>&nbsp;搜索</a>
                    <a class="btn btn-warning btn-rounded btn-sm" onclick="resetPre()"><i class="fas fa-sync-alt"></i>&nbsp;重置</a>
                    <input class="hide" type="submit" name="btnSave" value="提交" onclick="$.table.search();return false;"/>
                </li>
            </ul>
            <?php endif; ?>
        </div>
    </form>
</div>
<?php endif; ?>
            <!--列表区域开始-->
            <div class="col-sm-12 select-table table-striped">
                <div class="btn-group-sm" id="toolbar" role="group">
    <?php if(is_array($top_buttons) || $top_buttons instanceof \think\Collection || $top_buttons instanceof \think\Paginator): $i = 0; $__LIST__ = $top_buttons;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$top_button): $mod = ($i % 2 );++$i;if(!(empty($top_button['group']) || (($top_button['group'] instanceof \think\Collection || $top_button['group'] instanceof \think\Paginator ) && $top_button['group']->isEmpty()))): ?>
    <div class="btn-group">
    <?php endif; ?>
        <a class="<?php echo htmlentities((isset($top_button['class']) && ($top_button['class'] !== '')?$top_button['class']:'')); ?>" <?php if(!(empty($top_button['href']) || (($top_button['href'] instanceof \think\Collection || $top_button['href'] instanceof \think\Paginator ) && $top_button['href']->isEmpty()))): ?>href="<?php echo htmlentities((isset($top_button['href']) && ($top_button['href'] !== '')?$top_button['href']:'')); ?>"<?php endif; if(!(empty($top_button['target']) || (($top_button['target'] instanceof \think\Collection || $top_button['target'] instanceof \think\Paginator ) && $top_button['target']->isEmpty()))): ?> target="<?php echo htmlentities((isset($top_button['target']) && ($top_button['target'] !== '')?$top_button['target']:'')); ?>"<?php endif; if(!(empty($top_button['onclick']) || (($top_button['onclick'] instanceof \think\Collection || $top_button['onclick'] instanceof \think\Paginator ) && $top_button['onclick']->isEmpty()))): ?> onclick="<?php echo htmlentities((isset($top_button['onclick']) && ($top_button['onclick'] !== '')?$top_button['onclick']:'')); ?>"<?php endif; ?>>
            <i class="<?php echo htmlentities((isset($top_button['icon']) && ($top_button['icon'] !== '')?$top_button['icon']:'')); ?>"></i> <?php echo htmlentities((isset($top_button['title']) && ($top_button['title'] !== '')?$top_button['title']:'')); ?>
        </a>
        <?php if(!(empty($top_button['group']) || (($top_button['group'] instanceof \think\Collection || $top_button['group'] instanceof \think\Paginator ) && $top_button['group']->isEmpty()))): ?>
        <button type="button" class="btn <?php echo htmlentities((isset($top_button['group']['class']) && ($top_button['group']['class'] !== '')?$top_button['group']['class']:'btn-info')); ?> dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="sr-only">Toggle Dropdown</span>
        </button>
        <div class="dropdown-menu">
            <?php foreach($top_button['group']['menus'] as $key=>$vo): ?>
            <a class="dropdown-item <?php echo htmlentities((isset($vo['class']) && ($vo['class'] !== '')?$vo['class']:'')); ?>" <?php if(!(empty($vo['href']) || (($vo['href'] instanceof \think\Collection || $vo['href'] instanceof \think\Paginator ) && $vo['href']->isEmpty()))): ?>href="<?php echo htmlentities((isset($vo['href']) && ($vo['href'] !== '')?$vo['href']:'')); ?>"<?php endif; if(!(empty($vo['target']) || (($vo['target'] instanceof \think\Collection || $vo['target'] instanceof \think\Paginator ) && $vo['target']->isEmpty()))): ?> target="<?php echo htmlentities((isset($vo['target']) && ($vo['target'] !== '')?$vo['target']:'')); ?>"<?php endif; if(!(empty($vo['onclick']) || (($vo['onclick'] instanceof \think\Collection || $vo['onclick'] instanceof \think\Paginator ) && $vo['onclick']->isEmpty()))): ?> onclick="<?php echo htmlentities((isset($vo['onclick']) && ($vo['onclick'] !== '')?$vo['onclick']:'')); ?>"<?php endif; ?>>
                <i class="<?php echo htmlentities((isset($vo['icon']) && ($vo['icon'] !== '')?$vo['icon']:'')); ?>"></i> <?php echo htmlentities((isset($vo['title']) && ($vo['title'] !== '')?$vo['title']:'')); ?>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
    <?php endif; ?>
    <?php endforeach; endif; else: echo "" ;endif; ?>
</div>
                <table id="bootstrap-table" data-mobile-responsive="true"></table>
            </div>
        </div>
    </div>
    <script>
	//ZTX-003前端把转义符转为普通字符 by折腾侠
	function escape2Html(str) {
	var arrEntities={'lt':'<','gt':'>','nbsp':' ','amp':'&','quot':'"'};
	return str.replace(/&(lt|gt|nbsp|amp|quot);/ig,function(all,t){return arrEntities[t];});
	}
	//ZTX-003前端把转义符转为普通字符 by折腾侠
        $(function() {
            var options = {
                uniqueId      : "<?php echo htmlentities($unique_id); ?>",         // 表格主键名称，（默认为id，如表主键不为id必须设置主键）
                url           : "<?php echo $data_url; ?>",      // 请求后台的URL
                addUrl        : "<?php echo $add_url; ?>",       // 新增的地址
                editUrl       : "<?php echo $edit_url; ?>",      // 修改的地址
                delUrl        : "<?php echo $del_url; ?>",       // 删除的地址
                exportUrl     : "<?php echo $export_url; ?>",    // 导出的地址
                sortUrl       : "<?php echo $sort_url; ?>",      // 排序的地址
                sortName      : "<?php echo htmlentities($unique_id); ?>",         // 排序列名称
                sortOrder     : "desc",                 // 排序方式  asc 或者 desc
				pagination    : <?php echo htmlentities($pagination); ?>,			// 是否进行分页
                parentIdField : "<?php echo htmlentities($parent_id_field); ?>",   // 列表树模式需传递父id字段名（parent_id/pid）
				clickToSelect : true,				    // 默认false不响应，设为true则当点击此行的某处时，会自动选中此行的checkbox/radiobox
                pageSize      : "<?php echo htmlentities($page_size); ?>",         // 每页显示的行数
                layerOpen     : "<?php echo htmlentities($layer_open); ?>",        // 添加/编辑等页启用layer弹层加载
                emptyTips     : "<?php echo htmlentities($empty_tips); ?>",        // 空数据提示信息
                fixedColumns  : false,                   // 是否启用固定列功能
                fixedLeft     : <?php echo htmlentities($fixed_left); ?>,          // 左侧固定列数
                fixedRight    : <?php echo htmlentities($fixed_right); ?>,         // 右侧固定列数
                columns: [
                    {
                        //field: 'state',
                        checkbox: true,
						// 当某行包含checkbox_disabled时禁止选择
						formatter: function(value, row, index) {
							if(row.checkbox_disabled =='1'){
								 return {
									 disabled : true
								}
							 }
						}
                    },
                    <?php if(is_array($columns) || $columns instanceof \think\Collection || $columns instanceof \think\Paginator): $i = 0; $__LIST__ = $columns;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$column): $mod = ($i % 2 );++$i;?>
                        {
                            field: '<?php echo htmlentities((isset($column['name']) && ($column['name'] !== '')?$column['name']:'')); ?>',  
                            title: '<?php echo htmlentities((isset($column['title']) && ($column['title'] !== '')?$column['title']:'')); ?>', 
                            align:'<?php echo htmlentities((isset($column['align']) && ($column['align'] !== '')?$column['align']:'center')); ?>',
                            visible:'<?php echo htmlentities((isset($column['visible']) && ($column['visible'] !== '')?$column['visible']:'true')); ?>',

                            <?php if($column['name']==$unique_id): ?>
                                sortable: true,                  
                            <?php else: ?>
                                sortable: <?php echo htmlentities($column['sortable']); ?>,     
                            <?php endif; if(!(empty($column['class']) || (($column['class'] instanceof \think\Collection || $column['class'] instanceof \think\Paginator ) && $column['class']->isEmpty()))): ?>
                                class: '<?php echo htmlentities((isset($column['class']) && ($column['class'] !== '')?$column['class']:'')); ?>', 
                            <?php endif; if(!(empty($column['width']) || (($column['width'] instanceof \think\Collection || $column['width'] instanceof \think\Paginator ) && $column['width']->isEmpty()))): ?>
                                width: <?php echo htmlentities($column['width']); ?>, 
                            <?php endif; if($column['param']): if($column['name'] == 'status'): ?>
									formatter: function(value, row, index) {
										if (value == 0) {
											return '<i class="fa fa-toggle-off text-info fa-2x cursor_pointer" onclick="$.operate.state(\'' + row.<?php echo htmlentities($unique_id); ?> + '\',\'<?php echo url('state'); ?>\')"></i>';
										} else {
											return '<i class="fa fa-toggle-on text-info fa-2x cursor_pointer" onclick="$.operate.state(\'' + row.<?php echo htmlentities($unique_id); ?> + '\',\'<?php echo url('state'); ?>\')"></i>';
										}
									}
								<?php else: ?>
								formatter: function(value, row, index) {
                                    if (value == 0) {
                                        return '<span class="badge badge-<?php echo htmlentities((isset($column['param']['0']['class']) && ($column['param']['0']['class'] !== '')?$column['param']['0']['class']:'danger')); ?>"><?php echo htmlentities((isset($column['param']['0']) && ($column['param']['0'] !== '')?$column['param']['0']:'禁用')); ?></span>';
                                    } else if (value == 1) {
                                        return '<span class="badge badge-<?php echo htmlentities((isset($column['param']['1']['class']) && ($column['param']['1']['class'] !== '')?$column['param']['1']['class']:'primary')); ?>"><?php echo htmlentities((isset($column['param']['1']) && ($column['param']['1'] !== '')?$column['param']['1']:'启用')); ?></span>';
                                    }else if (value == 2) {
                                        return '<span class="badge badge-<?php echo htmlentities((isset($column['param']['1']['class']) && ($column['param']['1']['class'] !== '')?$column['param']['1']['class']:'info')); ?>"><?php echo htmlentities((isset($column['param']['2']) && ($column['param']['2'] !== '')?$column['param']['2']:'状态2')); ?></span>';
                                    }else if (value == 3) {
                                        return '<span class="badge badge-<?php echo htmlentities((isset($column['param']['1']['class']) && ($column['param']['1']['class'] !== '')?$column['param']['1']['class']:'success')); ?>"><?php echo htmlentities((isset($column['param']['3']) && ($column['param']['3'] !== '')?$column['param']['3']:'状态3')); ?></span>';
                                    }else {
                                        var str = '';
                                        <?php foreach($column['param'] as $key=>$vo): ?>
                                            var kk = '<?php echo htmlentities($key); ?>';
                                            if (value == kk || checkValInStr(kk, value)) {
                                                str += '<span class="badge badge-info"><?php echo htmlentities($vo); ?></span> ';
                                            }
                                        <?php endforeach; ?>
                                        return str;
                                    }
                                }
								<?php endif; else: if($column['name'] == 'sort'): ?>
									formatter: function(value, row, index) {
										return '<input class="form-control input-sm w_40 changeSort" type="text" value="' + value + '" data-id="' + row.<?php echo htmlentities($unique_id); ?> + '" onblur="$.table.sort(this)">';
									}
								<?php else: switch($column['type']): case "text": ?>
									
										formatter: function(value, row, index) {
											return HTMLDecode(value);
										}
									<?php break; case "datetime": ?>
                                    formatter: function(value, row, index) {
                                        return changeDateFormat(value);
                                    }
                                    <?php break; case "status": ?>
										formatter: function(value, row, index) {
											if (value == 0) {
												return '<span class="badge badge-<?php echo htmlentities((isset($column['param']['0']['class']) && ($column['param']['0']['class'] !== '')?$column['param']['0']['class']:'danger')); ?>"><?php echo htmlentities((isset($column['param']['0']['title']) && ($column['param']['0']['title'] !== '')?$column['param']['0']['title']:'禁用')); ?></span>';
											} else if (value == 1) {
												return '<span class="badge badge-<?php echo htmlentities((isset($column['param']['1']['class']) && ($column['param']['1']['class'] !== '')?$column['param']['1']['class']:'primary')); ?>"><?php echo htmlentities((isset($column['param']['1']['title']) && ($column['param']['1']['title'] !== '')?$column['param']['1']['title']:'启用')); ?></span>';
											}else if (value == 2) {
												return '<span class="badge badge-<?php echo htmlentities((isset($column['param']['1']['class']) && ($column['param']['1']['class'] !== '')?$column['param']['1']['class']:'default')); ?>"><?php echo htmlentities((isset($column['param']['1']['title']) && ($column['param']['1']['title'] !== '')?$column['param']['1']['title']:'状态2')); ?></span>';
											}else if (value == 3) {
												return '<span class="badge badge-<?php echo htmlentities((isset($column['param']['1']['class']) && ($column['param']['1']['class'] !== '')?$column['param']['1']['class']:'success')); ?>"><?php echo htmlentities((isset($column['param']['1']['title']) && ($column['param']['1']['title'] !== '')?$column['param']['1']['title']:'状态3')); ?></span>';
											}else {
												return '<span class="badge badge-<?php echo htmlentities((isset($column['param']['1']['class']) && ($column['param']['1']['class'] !== '')?$column['param']['1']['class']:'info')); ?>"><?php echo htmlentities((isset($column['param']['1']['title']) && ($column['param']['1']['title'] !== '')?$column['param']['1']['title']:'其他')); ?></span>';
											}
										}
									<?php break; case "yesno": ?>
										formatter: function(value, row, index) {
											if (value == 0) {
												return '<i class="fa fa-ban text-<?php echo htmlentities((isset($column['param']['0']['class']) && ($column['param']['0']['class'] !== '')?$column['param']['0']['class']:'danger')); ?>"></i>';
											} else if (value == 1) {
												return '<i class="fa fa-check text-<?php echo htmlentities((isset($column['param']['1']['class']) && ($column['param']['1']['class'] !== '')?$column['param']['1']['class']:'primary')); ?>"></i>';
											}
										}
									<?php break; case "customize": ?>
                                    //自定义列表字段类型的格式化设置
										formatter: <?php echo (isset($column['formatter']) && ($column['formatter'] !== '')?$column['formatter']:''); ?>,
									<?php break; case "link": ?>
									formatter: function(value, row, index) {
										var link = '<?php echo htmlentities((isset($column['default']) && ($column['default'] !== '')?$column['default']:'')); ?>';
										var reg = /__(.*?)__/g;
										// 匹配ID和email，可能为任何的其他参数，但都是 __字段__ 格式
										while (result = reg.exec(link)) {
											link = link.replace(result[0], row[result[1]]);
										}
										// 拼接
										link = '<a href="'+link+'" target="<?php echo htmlentities($column['param']); ?>">' + value + '</a>';
										return link;
									}
									<?php break; case "image": ?>
									formatter: function(value, row, index) {
										if ($.common.isNotEmpty(value)) {
											return '<a href="' + value + '" target="_blank"><img class="image_preview" src="' + value + '"></a>';
										}
									}
									<?php break; ?>
									//ZTX-003增加多图字段的处理 by折腾侠
									<?php case "images": ?>
									formatter: function(value, row, index,field) {
										if ($.common.isNotEmpty(value)&&value!='[]') {
										value_str=escape2Html(value);										
										value_json=JSON.parse(value_str); 
										var key=Object.keys(value_json)[0];                                                                           
                                        if(typeof value_json[key].small == "undefined" || value_json[key].small == null || value_json[key].small == ""){
                                            var scrvlaue=value_json[key].image;
                                        }else{
                                            var scrvlaue=value_json[key].small;
                                        }
                                    

										return '<a href="./images_info.html?id='+ row.<?php echo htmlentities($unique_id); ?> + '&field='+field+'" target="_blank"><img class="images_preview" src="' + scrvlaue + '" ><p hidden="hidden">'+value_str+'</p></a>';
										}
									}
									<?php break; ?>
									//ZTX-003增加多图字段的处理 by折腾侠
									
									
                                    <?php case "color": ?>
                                    formatter: function(value, row, index) {
                                        if ($.common.isNotEmpty(value)) {
                                            return '<i class="table_colorpicker" style="background: ' + value + '""></i>';
                                        }
                                    }
                                    <?php break; case "select": ?>
									formatter: function(value, row, index) {
										return row.<?php echo htmlentities((isset($column['name']) && ($column['name'] !== '')?$column['name']:'')); ?>;
									}
									<?php break; case "select2": ?>
									formatter: function(value, row, index) {
										return row.<?php echo htmlentities((isset($column['name']) && ($column['name'] !== '')?$column['name']:'')); ?>;
									}
									<?php break; case "btn": ?>
                                    class : 'text-nowrap',
									formatter: function(value, row, index) {
										var actions = [];
										<?php if(is_array($right_buttons) || $right_buttons instanceof \think\Collection || $right_buttons instanceof \think\Paginator): $i = 0; $__LIST__ = $right_buttons;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$right_button): $mod = ($i % 2 );++$i;?>
										if('<?php echo htmlentities((isset($right_button['type']) && ($right_button['type'] !== '')?$right_button['type']:'')); ?>' == 'edit' || '<?php echo htmlentities((isset($right_button['type']) && ($right_button['type'] !== '')?$right_button['type']:'')); ?>' == 'preview'){
                                            if('<?php echo htmlentities((isset($right_button['href']) && ($right_button['href'] !== '')?$right_button['href']:'')); ?>'){
                                                var url = '<?php echo htmlentities((isset($right_button['href']) && ($right_button['href'] !== '')?$right_button['href']:'')); ?>';
                                                var reg = /__(.*?)__/g;
                                                // 匹配ID和email，可能为任何的其他参数，但都是 __字段__ 格式
                                                while (result = reg.exec(url)) {
                                                    url = url.replace(result[0], row[result[1]]);
                                                }
                                                actions.push('<a class="<?php echo htmlentities((isset($right_button['class']) && ($right_button['class'] !== '')?$right_button['class']:'')); ?>" target="<?php echo htmlentities((isset($right_button['target']) && ($right_button['target'] !== '')?$right_button['target']:'')); ?>" href="'+url+'"><i class="<?php echo htmlentities((isset($right_button['icon']) && ($right_button['icon'] !== '')?$right_button['icon']:'')); ?>"></i> <?php echo htmlentities((isset($right_button['title']) && ($right_button['title'] !== '')?$right_button['title']:'')); ?></a> ');
                                            }else{
                                                actions.push('<a class="<?php echo htmlentities((isset($right_button['class']) && ($right_button['class'] !== '')?$right_button['class']:'')); ?>" href="javascript:void(0)" onclick="$.operate.edit(\'' + row.<?php echo htmlentities($unique_id); ?> + '\')"><i class="<?php echo htmlentities((isset($right_button['icon']) && ($right_button['icon'] !== '')?$right_button['icon']:'')); ?>"></i> <?php echo htmlentities((isset($right_button['title']) && ($right_button['title'] !== '')?$right_button['title']:'')); ?></a> ');
                                            }
										} else if ('<?php echo htmlentities((isset($right_button['type']) && ($right_button['type'] !== '')?$right_button['type']:'')); ?>' == 'delete'){
                                            if('<?php echo htmlentities((isset($right_button['href']) && ($right_button['href'] !== '')?$right_button['href']:'')); ?>'){
                                                var url = '<?php echo htmlentities((isset($right_button['href']) && ($right_button['href'] !== '')?$right_button['href']:'')); ?>';
                                                var reg = /__(.*?)__/g;
                                                // 匹配ID和email，可能为任何的其他参数，但都是 __字段__ 格式
                                                while (result = reg.exec(url)) {
                                                    url = url.replace(result[0], row[result[1]]);
                                                }
                                                actions.push('<a class="<?php echo htmlentities((isset($right_button['class']) && ($right_button['class'] !== '')?$right_button['class']:'')); ?>" target="<?php echo htmlentities((isset($right_button['target']) && ($right_button['target'] !== '')?$right_button['target']:'')); ?>" href="'+url+'"><i class="<?php echo htmlentities((isset($right_button['icon']) && ($right_button['icon'] !== '')?$right_button['icon']:'')); ?>"></i> <?php echo htmlentities((isset($right_button['title']) && ($right_button['title'] !== '')?$right_button['title']:'')); ?></a> ');
                                            }else{
                                                actions.push('<a class="<?php echo htmlentities((isset($right_button['class']) && ($right_button['class'] !== '')?$right_button['class']:'')); ?>" href="javascript:void(0)" onclick="$.operate.remove(\'' + row.<?php echo htmlentities($unique_id); ?> + '\')"><i class="<?php echo htmlentities((isset($right_button['icon']) && ($right_button['icon'] !== '')?$right_button['icon']:'')); ?>"></i> <?php echo htmlentities((isset($right_button['title']) && ($right_button['title'] !== '')?$right_button['title']:'')); ?></a> ');
                                            }
										} else {
											var url = '<?php echo htmlentities((isset($right_button['href']) && ($right_button['href'] !== '')?$right_button['href']:'')); ?>';
											var reg = /__(.*?)__/g;
											// 匹配ID和email，可能为任何的其他参数，但都是 __字段__ 格式
											while (result = reg.exec(url)) {
												url = url.replace(result[0], row[result[1]]);
											}
											actions.push('<a class="<?php echo htmlentities((isset($right_button['class']) && ($right_button['class'] !== '')?$right_button['class']:'')); ?>" target="<?php echo htmlentities((isset($right_button['target']) && ($right_button['target'] !== '')?$right_button['target']:'')); ?>" href="'+url+'"><i class="<?php echo htmlentities((isset($right_button['icon']) && ($right_button['icon'] !== '')?$right_button['icon']:'')); ?>"></i> <?php echo htmlentities((isset($right_button['title']) && ($right_button['title'] !== '')?$right_button['title']:'')); ?></a> ');
										}

										<?php endforeach; endif; else: echo "" ;endif; ?>
										return actions.join('');
									}
									<?php break; default: ?>
									<?php endswitch; ?>
								<?php endif; ?>
							<?php endif; ?>

                        },
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                ]
            };
            $.table.init(options);
        });

        // 搜索
        function searchPre() {
            var data = {};
            $.table.search('', data);
        }

        // 重置搜索
        function resetPre() {
            $.form.reset();
        }
		//HTML反转义
		function HTMLDecode(text) {
			var temp = document.createElement("div");
			temp.innerHTML = text;
			var output = temp.innerText || temp.textContent;
			temp = null;
			return output;
		}
    </script>

    <!--bootstrap table end-->

    <!--底部提示-->
    <?php if(!(empty($page_tips_bottom) || (($page_tips_bottom instanceof \think\Collection || $page_tips_bottom instanceof \think\Paginator ) && $page_tips_bottom->isEmpty()))): ?>
    <div class="alert alert-<?php echo htmlentities($tips_type); ?> alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <p><?php echo $page_tips_bottom; ?></p>
    </div>
    <?php endif; ?>
    
    <?php echo (isset($extra_html_content_bottom) && ($extra_html_content_bottom !== '')?$extra_html_content_bottom:''); ?>
    
    <?php echo (isset($extra_js) && ($extra_js !== '')?$extra_js:''); ?>
</section>
<!--内容结束-->

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
    
    <?php echo (isset($extra_css) && ($extra_css !== '')?$extra_css:''); ?>
    
    <?php echo (isset($extra_html_content_top) && ($extra_html_content_top !== '')?$extra_html_content_top:''); ?>
    <!--顶部提示开始-->
    <?php if(!(empty($page_tips_top) || (($page_tips_top instanceof \think\Collection || $page_tips_top instanceof \think\Paginator ) && $page_tips_top->isEmpty()))): ?>
    <div class="alert alert-<?php echo htmlentities($tips_type); ?> alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <p><?php echo $page_tips_top; ?></p>
    </div>
    <?php endif; ?>
    <!--顶部提示结束-->
    <div class="container-fluid">
        <div class="row">
            <!--搜索区域开始-->
            <?php if($search OR $page_tips_search): ?>
<div class="col-12 search-collapse">
    <form id="search_form">
        <div class="select-list">
            <?php if(!(empty($page_tips_search) || (($page_tips_search instanceof \think\Collection || $page_tips_search instanceof \think\Paginator ) && $page_tips_search->isEmpty()))): ?><?php echo $page_tips_search; ?><?php endif; if(!(empty($search) || (($search instanceof \think\Collection || $search instanceof \think\Paginator ) && $search->isEmpty()))): ?>
            <ul>
                <?php if(is_array($search) || $search instanceof \think\Collection || $search instanceof \think\Paginator): $i = 0; $__LIST__ = $search;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$search): $mod = ($i % 2 );++$i;?>
                <li>
                    <label><?php echo htmlentities((isset($search['title']) && ($search['title'] !== '')?$search['title']:'')); ?>： </label>
                    <?php if($search['param']): if($search['data_source'] == 2 && ($search['type'] == 'text' || $search['type'] == 'textarea' || $search['type'] == 'number' || $search['type'] == 'hidden')): ?>
                            
                            <input type="text" id="search_<?php echo htmlentities((isset($search['name']) && ($search['name'] !== '')?$search['name']:'')); ?>" name="<?php echo htmlentities((isset($search['name']) && ($search['name'] !== '')?$search['name']:'')); ?>" value="<?php echo htmlentities((isset($search['default']) && ($search['default'] !== '')?$search['default']:'')); ?>"/>
                        <?php elseif($search['data_source'] == 2 && $search['type'] == 'linkage'): 
                                // 获取字段信息
                                $filedInfo = \app\common\model\Field::where('id', $search['field_id'])->find();
                                $filedInfo['setup'] = string2array($filedInfo['setup']);
                                $setupFields = explode(',', $filedInfo['setup']['fields']);

                                // 获取一级联动数据
                                $levelOne  = getLinkageData($search['relation_model'], 0, $setupFields[2]);
                                $levelKey  = [];
                                $levelData = [];
                                $ajaxUrl = (string)url('Index/linkage', ['id' => $search['field_id']]);

                                // 默认值
                                if ($search['default'] != '') {
                                    $levelKeyData = getLinkageAllData($search['relation_model'], $search['default'], $setupFields[0], $setupFields[1], $setupFields[2]);
                                    $levelKey = $levelKeyData['key'];
                                    $levelData = $levelKeyData['data'];
                                    sort($levelKey); // 升序排序
                                    $levelData = array_reverse($levelData); // 以相反的元素顺序返回数组
                                }
                             ?>
                            <select class="js_linkage" data-model="<?php echo htmlentities($search['relation_model']); ?>" data-key="<?php echo htmlentities($setupFields['0']); ?>" data-key_value="<?php echo htmlentities($setupFields['1']); ?>" data-pid_field_name="<?php echo htmlentities((isset($setupFields['2']) && ($setupFields['2'] !== '')?$setupFields['2']:'pid')); ?>" data-next_level_id="<?php echo htmlentities($search['name']); ?>_2" id="<?php echo htmlentities($search['name']); ?>_1" name="<?php echo htmlentities($search['name']); if($filedInfo['setup']['level'] > '1'): ?>_1<?php endif; ?>" data-placeholder="请选择" data-ajax_url="<?php echo htmlentities($ajaxUrl); ?>" style="width: auto; display: inline-block">
                                <option value="">请选择</option>
                                <?php if(is_array($levelOne) || $levelOne instanceof \think\Collection || $levelOne instanceof \think\Paginator): $i = 0; $__LIST__ = $levelOne;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;if($filedInfo['setup']['level'] == '1'): ?>
                                <option value="<?php echo htmlentities($option[$setupFields[0]]); ?>" <?php if(($search['default'] == (string)$option[$setupFields[0]])): ?>selected<?php endif; ?>><?php echo $option[$setupFields[1]]; ?></option>
                                <?php else: ?>
                                <option value="<?php echo htmlentities($option[$setupFields[0]]); ?>" <?php if((isset($levelKey[1]) && $levelKey[1] == (string)$option[$setupFields[0]])): ?>selected<?php endif; ?>><?php echo $option[$setupFields[1]]; ?></option>
                                <?php endif; ?>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                            <?php if($filedInfo['setup']['level'] == '2'): ?>
                            <select id="<?php echo htmlentities($search['name']); ?>_2" name="<?php echo htmlentities($search['name']); ?>" data-placeholder="请选择" style="width: auto; display: inline-block">
                                <option value="">请选择</option>
                                <?php if(!(empty($levelData['1']) || (($levelData['1'] instanceof \think\Collection || $levelData['1'] instanceof \think\Paginator ) && $levelData['1']->isEmpty()))): if(is_array($levelData['1']) || $levelData['1'] instanceof \think\Collection || $levelData['1'] instanceof \think\Paginator): $i = 0; $__LIST__ = $levelData['1'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;?>
                                <option value="<?php echo htmlentities($option[$setupFields[0]]); ?>" <?php if(($search['default'] == (string)$option[$setupFields[0]])): ?>selected<?php endif; ?>><?php echo $option[$setupFields[1]]; ?></option>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                                <?php endif; ?>
                            </select>
                            <?php endif; if($filedInfo['setup']['level'] == '3'): ?>
                            <select class="js_linkage" data-model="<?php echo htmlentities($search['relation_model']); ?>" data-key="<?php echo htmlentities($setupFields['0']); ?>" data-key_value="<?php echo htmlentities($setupFields['1']); ?>" data-pid_field_name="<?php echo htmlentities((isset($setupFields['2']) && ($setupFields['2'] !== '')?$setupFields['2']:'pid')); ?>" data-next_level_id="<?php echo htmlentities($search['name']); ?>_3" id="<?php echo htmlentities($search['name']); ?>_2" name="<?php echo htmlentities($search['name']); ?>_2" data-placeholder="请选择" data-ajax_url="<?php echo htmlentities($ajaxUrl); ?>" style="width: auto; display: inline-block">
                                <option value="">请选择</option>
                                <?php if(!(empty($levelData['1']) || (($levelData['1'] instanceof \think\Collection || $levelData['1'] instanceof \think\Paginator ) && $levelData['1']->isEmpty()))): if(is_array($levelData['1']) || $levelData['1'] instanceof \think\Collection || $levelData['1'] instanceof \think\Paginator): $i = 0; $__LIST__ = $levelData['1'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;?>
                                <option value="<?php echo htmlentities($option[$setupFields[0]]); ?>" <?php if((isset($levelKey[2]) && $levelKey[2] == (string)$option[$setupFields[0]])): ?>selected<?php endif; ?>><?php echo $option[$setupFields[1]]; ?></option>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                                <?php endif; ?>
                            </select>
                            <select id="<?php echo htmlentities($search['name']); ?>_3" name="<?php echo htmlentities($search['name']); ?>" data-placeholder="请选择" style="width: auto; display: inline-block">
                                <option value="">请选择</option>
                                <?php if(!(empty($levelData['2']) || (($levelData['2'] instanceof \think\Collection || $levelData['2'] instanceof \think\Paginator ) && $levelData['2']->isEmpty()))): if(is_array($levelData['2']) || $levelData['2'] instanceof \think\Collection || $levelData['2'] instanceof \think\Paginator): $i = 0; $__LIST__ = $levelData['2'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;?>
                                <option value="<?php echo htmlentities($option[$setupFields[0]]); ?>" <?php if(($search['default'] == (string)$option[$setupFields[0]])): ?>selected<?php endif; ?>><?php echo $option[$setupFields[1]]; ?></option>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                                <?php endif; ?>
                            </select>
                            <?php endif; else: ?>
                            <select id="search_<?php echo htmlentities((isset($search['name']) && ($search['name'] !== '')?$search['name']:'')); ?>" name="<?php echo htmlentities((isset($search['name']) && ($search['name'] !== '')?$search['name']:'')); ?>">
                                <option value="">所有</option>
                                <?php if(!(empty($search['param']) || (($search['param'] instanceof \think\Collection || $search['param'] instanceof \think\Paginator ) && $search['param']->isEmpty()))): if(is_array($search['param']) || $search['param'] instanceof \think\Collection || $search['param'] instanceof \think\Paginator): $i = 0; $__LIST__ = $search['param'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;if(is_array($v)): ?>
                                <option value="<?php echo htmlentities($key); ?>" <?php if(((string)$search['default'] == (string)$key)): ?>selected<?php endif; if($v['disabled'] == 1): ?>disabled<?php endif; ?>><?php echo htmlentities($v['value']); ?></option>
                                <?php else: ?>
                                <option value="<?php echo htmlentities($key); ?>" <?php if(((string)$search['default'] == (string)$key)): ?>selected<?php endif; ?>><?php echo htmlentities($v); ?></option>
                                <?php endif; ?>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                                <?php endif; ?>
                            </select>
                        <?php endif; else: if($search['type'] == 'date' OR $search['type'] == 'time' OR $search['type'] == 'datetime'): ?>
                            
                            <input type="text" id="search_<?php echo htmlentities((isset($search['name']) && ($search['name'] !== '')?$search['name']:'')); ?>" name="<?php echo htmlentities((isset($search['name']) && ($search['name'] !== '')?$search['name']:'')); ?>" value="<?php echo htmlentities((isset($search['default']) && ($search['default'] !== '')?$search['default']:'')); ?>" daterange="true" autocomplete="off"/>
                        <?php elseif($search['type'] == 'select2'): ?>
                            <select class="select2" id="search_<?php echo htmlentities((isset($search['name']) && ($search['name'] !== '')?$search['name']:'')); ?>" name="<?php echo htmlentities((isset($search['name']) && ($search['name'] !== '')?$search['name']:'')); ?>" data-value="<?php echo htmlentities((isset($search['default']) && ($search['default'] !== '')?$search['default']:'')); ?>">
                                <option value="">所有</option>
                            </select>
                            <script>
                                $(function () {
                                    var option = {};
                                    // 启用ajax分页查询
                                    option = {
                                        language: "zh-CN",
                                        //allowClear: true,
                                        ajax: {
                                            delay: 250, // 限速请求
                                            url: "<?php echo url('Index/select2',['id'=>$search['field_id']]); ?>",   //  请求地址
                                            dataType: 'json',
                                            data: function (params) {
                                                return {
                                                    keyWord: params.term || '',    //搜索参数
                                                    page: params.page || 1,        //分页参数
                                                    rows: params.pagesize || 10,   //每次查询10条记录
                                                };
                                            },
                                            processResults: function (data, params) {
                                                params.page = params.page || 1;
                                                if (params.page == 1) {
                                                    data.data.unshift({id: '', name: "", text: "所有"});
                                                }
                                                return {
                                                    results: data.data,
                                                    pagination: {
                                                        more: (params.page) < data.last_page
                                                    }
                                                };
                                            },
                                            cache: true
                                        }
                                    };
                                    // 默认值设置
                                    var defaultValue = $("#search_<?php echo htmlentities((isset($search['name']) && ($search['name'] !== '')?$search['name']:'')); ?>").data("value");
                                    if (defaultValue) {
                                        $.ajax({
                                            type: "POST",
                                            url: "<?php echo url('Index/select2',['id'=>$search['field_id']]); ?>",
                                            data: {value: defaultValue},
                                            dataType: "json",
                                            async: false,
                                            success: function(data){
                                                $("#search_<?php echo htmlentities((isset($search['name']) && ($search['name'] !== '')?$search['name']:'')); ?>").append("<option selected value='" + data.key + "'>" + data.value + "</option>");
                                            }
                                        });
                                    }
                                    $("#search_<?php echo htmlentities((isset($search['name']) && ($search['name'] !== '')?$search['name']:'')); ?>").select2(option);
                                })
                            </script>
                        <?php else: ?>
                            
                            <input type="text" id="search_<?php echo htmlentities((isset($search['name']) && ($search['name'] !== '')?$search['name']:'')); ?>" name="<?php echo htmlentities((isset($search['name']) && ($search['name'] !== '')?$search['name']:'')); ?>" value="<?php echo htmlentities((isset($search['default']) && ($search['default'] !== '')?$search['default']:'')); ?>"/>
                        <?php endif; ?>
                    <?php endif; ?>
                </li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                <li>
                    <a class="btn btn-primary btn-rounded btn-sm" onclick="$.table.search()"><i class="fa fa-search"></i>&nbsp;搜索</a>
                    <a class="btn btn-warning btn-rounded btn-sm" onclick="resetPre()"><i class="fas fa-sync-alt"></i>&nbsp;重置</a>
                    <input class="hide" type="submit" name="btnSave" value="提交" onclick="$.table.search();return false;"/>
                </li>
            </ul>
            <?php endif; ?>
        </div>
    </form>
</div>
<?php endif; ?>
            <!--列表区域开始-->
            <div class="col-sm-12 select-table table-striped">
                <div class="btn-group-sm" id="toolbar" role="group">
    <?php if(is_array($top_buttons) || $top_buttons instanceof \think\Collection || $top_buttons instanceof \think\Paginator): $i = 0; $__LIST__ = $top_buttons;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$top_button): $mod = ($i % 2 );++$i;if(!(empty($top_button['group']) || (($top_button['group'] instanceof \think\Collection || $top_button['group'] instanceof \think\Paginator ) && $top_button['group']->isEmpty()))): ?>
    <div class="btn-group">
    <?php endif; ?>
        <a class="<?php echo htmlentities((isset($top_button['class']) && ($top_button['class'] !== '')?$top_button['class']:'')); ?>" <?php if(!(empty($top_button['href']) || (($top_button['href'] instanceof \think\Collection || $top_button['href'] instanceof \think\Paginator ) && $top_button['href']->isEmpty()))): ?>href="<?php echo htmlentities((isset($top_button['href']) && ($top_button['href'] !== '')?$top_button['href']:'')); ?>"<?php endif; if(!(empty($top_button['target']) || (($top_button['target'] instanceof \think\Collection || $top_button['target'] instanceof \think\Paginator ) && $top_button['target']->isEmpty()))): ?> target="<?php echo htmlentities((isset($top_button['target']) && ($top_button['target'] !== '')?$top_button['target']:'')); ?>"<?php endif; if(!(empty($top_button['onclick']) || (($top_button['onclick'] instanceof \think\Collection || $top_button['onclick'] instanceof \think\Paginator ) && $top_button['onclick']->isEmpty()))): ?> onclick="<?php echo htmlentities((isset($top_button['onclick']) && ($top_button['onclick'] !== '')?$top_button['onclick']:'')); ?>"<?php endif; ?>>
            <i class="<?php echo htmlentities((isset($top_button['icon']) && ($top_button['icon'] !== '')?$top_button['icon']:'')); ?>"></i> <?php echo htmlentities((isset($top_button['title']) && ($top_button['title'] !== '')?$top_button['title']:'')); ?>
        </a>
        <?php if(!(empty($top_button['group']) || (($top_button['group'] instanceof \think\Collection || $top_button['group'] instanceof \think\Paginator ) && $top_button['group']->isEmpty()))): ?>
        <button type="button" class="btn <?php echo htmlentities((isset($top_button['group']['class']) && ($top_button['group']['class'] !== '')?$top_button['group']['class']:'btn-info')); ?> dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="sr-only">Toggle Dropdown</span>
        </button>
        <div class="dropdown-menu">
            <?php foreach($top_button['group']['menus'] as $key=>$vo): ?>
            <a class="dropdown-item <?php echo htmlentities((isset($vo['class']) && ($vo['class'] !== '')?$vo['class']:'')); ?>" <?php if(!(empty($vo['href']) || (($vo['href'] instanceof \think\Collection || $vo['href'] instanceof \think\Paginator ) && $vo['href']->isEmpty()))): ?>href="<?php echo htmlentities((isset($vo['href']) && ($vo['href'] !== '')?$vo['href']:'')); ?>"<?php endif; if(!(empty($vo['target']) || (($vo['target'] instanceof \think\Collection || $vo['target'] instanceof \think\Paginator ) && $vo['target']->isEmpty()))): ?> target="<?php echo htmlentities((isset($vo['target']) && ($vo['target'] !== '')?$vo['target']:'')); ?>"<?php endif; if(!(empty($vo['onclick']) || (($vo['onclick'] instanceof \think\Collection || $vo['onclick'] instanceof \think\Paginator ) && $vo['onclick']->isEmpty()))): ?> onclick="<?php echo htmlentities((isset($vo['onclick']) && ($vo['onclick'] !== '')?$vo['onclick']:'')); ?>"<?php endif; ?>>
                <i class="<?php echo htmlentities((isset($vo['icon']) && ($vo['icon'] !== '')?$vo['icon']:'')); ?>"></i> <?php echo htmlentities((isset($vo['title']) && ($vo['title'] !== '')?$vo['title']:'')); ?>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
    <?php endif; ?>
    <?php endforeach; endif; else: echo "" ;endif; ?>
</div>
                <table id="bootstrap-table" data-mobile-responsive="true"></table>
            </div>
        </div>
    </div>
    <script>
	//ZTX-003前端把转义符转为普通字符 by折腾侠
	function escape2Html(str) {
	var arrEntities={'lt':'<','gt':'>','nbsp':' ','amp':'&','quot':'"'};
	return str.replace(/&(lt|gt|nbsp|amp|quot);/ig,function(all,t){return arrEntities[t];});
	}
	//ZTX-003前端把转义符转为普通字符 by折腾侠
        $(function() {
            var options = {
                uniqueId      : "<?php echo htmlentities($unique_id); ?>",         // 表格主键名称，（默认为id，如表主键不为id必须设置主键）
                url           : "<?php echo $data_url; ?>",      // 请求后台的URL
                addUrl        : "<?php echo $add_url; ?>",       // 新增的地址
                editUrl       : "<?php echo $edit_url; ?>",      // 修改的地址
                delUrl        : "<?php echo $del_url; ?>",       // 删除的地址
                exportUrl     : "<?php echo $export_url; ?>",    // 导出的地址
                sortUrl       : "<?php echo $sort_url; ?>",      // 排序的地址
                sortName      : "<?php echo htmlentities($unique_id); ?>",         // 排序列名称
                sortOrder     : "desc",                 // 排序方式  asc 或者 desc
				pagination    : <?php echo htmlentities($pagination); ?>,			// 是否进行分页
                parentIdField : "<?php echo htmlentities($parent_id_field); ?>",   // 列表树模式需传递父id字段名（parent_id/pid）
				clickToSelect : true,				    // 默认false不响应，设为true则当点击此行的某处时，会自动选中此行的checkbox/radiobox
                pageSize      : "<?php echo htmlentities($page_size); ?>",         // 每页显示的行数
                layerOpen     : "<?php echo htmlentities($layer_open); ?>",        // 添加/编辑等页启用layer弹层加载
                emptyTips     : "<?php echo htmlentities($empty_tips); ?>",        // 空数据提示信息
                fixedColumns  : false,                   // 是否启用固定列功能
                fixedLeft     : <?php echo htmlentities($fixed_left); ?>,          // 左侧固定列数
                fixedRight    : <?php echo htmlentities($fixed_right); ?>,         // 右侧固定列数
                columns: [
                    {
                        //field: 'state',
                        checkbox: true,
						// 当某行包含checkbox_disabled时禁止选择
						formatter: function(value, row, index) {
							if(row.checkbox_disabled =='1'){
								 return {
									 disabled : true
								}
							 }
						}
                    },
                    <?php if(is_array($columns) || $columns instanceof \think\Collection || $columns instanceof \think\Paginator): $i = 0; $__LIST__ = $columns;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$column): $mod = ($i % 2 );++$i;?>
                        {
                            field: '<?php echo htmlentities((isset($column['name']) && ($column['name'] !== '')?$column['name']:'')); ?>',  
                            title: '<?php echo htmlentities((isset($column['title']) && ($column['title'] !== '')?$column['title']:'')); ?>', 
                            align:'<?php echo htmlentities((isset($column['align']) && ($column['align'] !== '')?$column['align']:'center')); ?>',
                            visible:'<?php echo htmlentities((isset($column['visible']) && ($column['visible'] !== '')?$column['visible']:'true')); ?>',

                            <?php if($column['name']==$unique_id): ?>
                                sortable: true,                  
                            <?php else: ?>
                                sortable: <?php echo htmlentities($column['sortable']); ?>,     
                            <?php endif; if(!(empty($column['class']) || (($column['class'] instanceof \think\Collection || $column['class'] instanceof \think\Paginator ) && $column['class']->isEmpty()))): ?>
                                class: '<?php echo htmlentities((isset($column['class']) && ($column['class'] !== '')?$column['class']:'')); ?>', 
                            <?php endif; if(!(empty($column['width']) || (($column['width'] instanceof \think\Collection || $column['width'] instanceof \think\Paginator ) && $column['width']->isEmpty()))): ?>
                                width: <?php echo htmlentities($column['width']); ?>, 
                            <?php endif; if($column['param']): if($column['name'] == 'status'): ?>
									formatter: function(value, row, index) {
										if (value == 0) {
											return '<i class="fa fa-toggle-off text-info fa-2x cursor_pointer" onclick="$.operate.state(\'' + row.<?php echo htmlentities($unique_id); ?> + '\',\'<?php echo url('state'); ?>\')"></i>';
										} else {
											return '<i class="fa fa-toggle-on text-info fa-2x cursor_pointer" onclick="$.operate.state(\'' + row.<?php echo htmlentities($unique_id); ?> + '\',\'<?php echo url('state'); ?>\')"></i>';
										}
									}
								<?php else: ?>
								formatter: function(value, row, index) {
                                    if (value == 0) {
                                        return '<span class="badge badge-<?php echo htmlentities((isset($column['param']['0']['class']) && ($column['param']['0']['class'] !== '')?$column['param']['0']['class']:'danger')); ?>"><?php echo htmlentities((isset($column['param']['0']) && ($column['param']['0'] !== '')?$column['param']['0']:'禁用')); ?></span>';
                                    } else if (value == 1) {
                                        return '<span class="badge badge-<?php echo htmlentities((isset($column['param']['1']['class']) && ($column['param']['1']['class'] !== '')?$column['param']['1']['class']:'primary')); ?>"><?php echo htmlentities((isset($column['param']['1']) && ($column['param']['1'] !== '')?$column['param']['1']:'启用')); ?></span>';
                                    }else if (value == 2) {
                                        return '<span class="badge badge-<?php echo htmlentities((isset($column['param']['1']['class']) && ($column['param']['1']['class'] !== '')?$column['param']['1']['class']:'info')); ?>"><?php echo htmlentities((isset($column['param']['2']) && ($column['param']['2'] !== '')?$column['param']['2']:'状态2')); ?></span>';
                                    }else if (value == 3) {
                                        return '<span class="badge badge-<?php echo htmlentities((isset($column['param']['1']['class']) && ($column['param']['1']['class'] !== '')?$column['param']['1']['class']:'success')); ?>"><?php echo htmlentities((isset($column['param']['3']) && ($column['param']['3'] !== '')?$column['param']['3']:'状态3')); ?></span>';
                                    }else {
                                        var str = '';
                                        <?php foreach($column['param'] as $key=>$vo): ?>
                                            var kk = '<?php echo htmlentities($key); ?>';
                                            if (value == kk || checkValInStr(kk, value)) {
                                                str += '<span class="badge badge-info"><?php echo htmlentities($vo); ?></span> ';
                                            }
                                        <?php endforeach; ?>
                                        return str;
                                    }
                                }
								<?php endif; else: if($column['name'] == 'sort'): ?>
									formatter: function(value, row, index) {
										return '<input class="form-control input-sm w_40 changeSort" type="text" value="' + value + '" data-id="' + row.<?php echo htmlentities($unique_id); ?> + '" onblur="$.table.sort(this)">';
									}
								<?php else: switch($column['type']): case "text": ?>
									
										formatter: function(value, row, index) {
											return HTMLDecode(value);
										}
									<?php break; case "datetime": ?>
                                    formatter: function(value, row, index) {
                                        return changeDateFormat(value);
                                    }
                                    <?php break; case "status": ?>
										formatter: function(value, row, index) {
											if (value == 0) {
												return '<span class="badge badge-<?php echo htmlentities((isset($column['param']['0']['class']) && ($column['param']['0']['class'] !== '')?$column['param']['0']['class']:'danger')); ?>"><?php echo htmlentities((isset($column['param']['0']['title']) && ($column['param']['0']['title'] !== '')?$column['param']['0']['title']:'禁用')); ?></span>';
											} else if (value == 1) {
												return '<span class="badge badge-<?php echo htmlentities((isset($column['param']['1']['class']) && ($column['param']['1']['class'] !== '')?$column['param']['1']['class']:'primary')); ?>"><?php echo htmlentities((isset($column['param']['1']['title']) && ($column['param']['1']['title'] !== '')?$column['param']['1']['title']:'启用')); ?></span>';
											}else if (value == 2) {
												return '<span class="badge badge-<?php echo htmlentities((isset($column['param']['1']['class']) && ($column['param']['1']['class'] !== '')?$column['param']['1']['class']:'default')); ?>"><?php echo htmlentities((isset($column['param']['1']['title']) && ($column['param']['1']['title'] !== '')?$column['param']['1']['title']:'状态2')); ?></span>';
											}else if (value == 3) {
												return '<span class="badge badge-<?php echo htmlentities((isset($column['param']['1']['class']) && ($column['param']['1']['class'] !== '')?$column['param']['1']['class']:'success')); ?>"><?php echo htmlentities((isset($column['param']['1']['title']) && ($column['param']['1']['title'] !== '')?$column['param']['1']['title']:'状态3')); ?></span>';
											}else {
												return '<span class="badge badge-<?php echo htmlentities((isset($column['param']['1']['class']) && ($column['param']['1']['class'] !== '')?$column['param']['1']['class']:'info')); ?>"><?php echo htmlentities((isset($column['param']['1']['title']) && ($column['param']['1']['title'] !== '')?$column['param']['1']['title']:'其他')); ?></span>';
											}
										}
									<?php break; case "yesno": ?>
										formatter: function(value, row, index) {
											if (value == 0) {
												return '<i class="fa fa-ban text-<?php echo htmlentities((isset($column['param']['0']['class']) && ($column['param']['0']['class'] !== '')?$column['param']['0']['class']:'danger')); ?>"></i>';
											} else if (value == 1) {
												return '<i class="fa fa-check text-<?php echo htmlentities((isset($column['param']['1']['class']) && ($column['param']['1']['class'] !== '')?$column['param']['1']['class']:'primary')); ?>"></i>';
											}
										}
									<?php break; case "customize": ?>
                                    //自定义列表字段类型的格式化设置
										formatter: <?php echo (isset($column['formatter']) && ($column['formatter'] !== '')?$column['formatter']:''); ?>,
									<?php break; case "link": ?>
									formatter: function(value, row, index) {
										var link = '<?php echo htmlentities((isset($column['default']) && ($column['default'] !== '')?$column['default']:'')); ?>';
										var reg = /__(.*?)__/g;
										// 匹配ID和email，可能为任何的其他参数，但都是 __字段__ 格式
										while (result = reg.exec(link)) {
											link = link.replace(result[0], row[result[1]]);
										}
										// 拼接
										link = '<a href="'+link+'" target="<?php echo htmlentities($column['param']); ?>">' + value + '</a>';
										return link;
									}
									<?php break; case "image": ?>
									formatter: function(value, row, index) {
										if ($.common.isNotEmpty(value)) {
											return '<a href="' + value + '" target="_blank"><img class="image_preview" src="' + value + '"></a>';
										}
									}
									<?php break; ?>
									//ZTX-003增加多图字段的处理 by折腾侠
									<?php case "images": ?>
									formatter: function(value, row, index,field) {
										if ($.common.isNotEmpty(value)&&value!='[]') {
										value_str=escape2Html(value);										
										value_json=JSON.parse(value_str); 
										var key=Object.keys(value_json)[0];                                                                           
                                        if(typeof value_json[key].small == "undefined" || value_json[key].small == null || value_json[key].small == ""){
                                            var scrvlaue=value_json[key].image;
                                        }else{
                                            var scrvlaue=value_json[key].small;
                                        }
                                    

										return '<a href="./images_info.html?id='+ row.<?php echo htmlentities($unique_id); ?> + '&field='+field+'" target="_blank"><img class="images_preview" src="' + scrvlaue + '" ><p hidden="hidden">'+value_str+'</p></a>';
										}
									}
									<?php break; ?>
									//ZTX-003增加多图字段的处理 by折腾侠
									
									
                                    <?php case "color": ?>
                                    formatter: function(value, row, index) {
                                        if ($.common.isNotEmpty(value)) {
                                            return '<i class="table_colorpicker" style="background: ' + value + '""></i>';
                                        }
                                    }
                                    <?php break; case "select": ?>
									formatter: function(value, row, index) {
										return row.<?php echo htmlentities((isset($column['name']) && ($column['name'] !== '')?$column['name']:'')); ?>;
									}
									<?php break; case "select2": ?>
									formatter: function(value, row, index) {
										return row.<?php echo htmlentities((isset($column['name']) && ($column['name'] !== '')?$column['name']:'')); ?>;
									}
									<?php break; case "btn": ?>
                                    class : 'text-nowrap',
									formatter: function(value, row, index) {
										var actions = [];
										<?php if(is_array($right_buttons) || $right_buttons instanceof \think\Collection || $right_buttons instanceof \think\Paginator): $i = 0; $__LIST__ = $right_buttons;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$right_button): $mod = ($i % 2 );++$i;?>
										if('<?php echo htmlentities((isset($right_button['type']) && ($right_button['type'] !== '')?$right_button['type']:'')); ?>' == 'edit' || '<?php echo htmlentities((isset($right_button['type']) && ($right_button['type'] !== '')?$right_button['type']:'')); ?>' == 'preview'){
                                            if('<?php echo htmlentities((isset($right_button['href']) && ($right_button['href'] !== '')?$right_button['href']:'')); ?>'){
                                                var url = '<?php echo htmlentities((isset($right_button['href']) && ($right_button['href'] !== '')?$right_button['href']:'')); ?>';
                                                var reg = /__(.*?)__/g;
                                                // 匹配ID和email，可能为任何的其他参数，但都是 __字段__ 格式
                                                while (result = reg.exec(url)) {
                                                    url = url.replace(result[0], row[result[1]]);
                                                }
                                                actions.push('<a class="<?php echo htmlentities((isset($right_button['class']) && ($right_button['class'] !== '')?$right_button['class']:'')); ?>" target="<?php echo htmlentities((isset($right_button['target']) && ($right_button['target'] !== '')?$right_button['target']:'')); ?>" href="'+url+'"><i class="<?php echo htmlentities((isset($right_button['icon']) && ($right_button['icon'] !== '')?$right_button['icon']:'')); ?>"></i> <?php echo htmlentities((isset($right_button['title']) && ($right_button['title'] !== '')?$right_button['title']:'')); ?></a> ');
                                            }else{
                                                actions.push('<a class="<?php echo htmlentities((isset($right_button['class']) && ($right_button['class'] !== '')?$right_button['class']:'')); ?>" href="javascript:void(0)" onclick="$.operate.edit(\'' + row.<?php echo htmlentities($unique_id); ?> + '\')"><i class="<?php echo htmlentities((isset($right_button['icon']) && ($right_button['icon'] !== '')?$right_button['icon']:'')); ?>"></i> <?php echo htmlentities((isset($right_button['title']) && ($right_button['title'] !== '')?$right_button['title']:'')); ?></a> ');
                                            }
										} else if ('<?php echo htmlentities((isset($right_button['type']) && ($right_button['type'] !== '')?$right_button['type']:'')); ?>' == 'delete'){
                                            if('<?php echo htmlentities((isset($right_button['href']) && ($right_button['href'] !== '')?$right_button['href']:'')); ?>'){
                                                var url = '<?php echo htmlentities((isset($right_button['href']) && ($right_button['href'] !== '')?$right_button['href']:'')); ?>';
                                                var reg = /__(.*?)__/g;
                                                // 匹配ID和email，可能为任何的其他参数，但都是 __字段__ 格式
                                                while (result = reg.exec(url)) {
                                                    url = url.replace(result[0], row[result[1]]);
                                                }
                                                actions.push('<a class="<?php echo htmlentities((isset($right_button['class']) && ($right_button['class'] !== '')?$right_button['class']:'')); ?>" target="<?php echo htmlentities((isset($right_button['target']) && ($right_button['target'] !== '')?$right_button['target']:'')); ?>" href="'+url+'"><i class="<?php echo htmlentities((isset($right_button['icon']) && ($right_button['icon'] !== '')?$right_button['icon']:'')); ?>"></i> <?php echo htmlentities((isset($right_button['title']) && ($right_button['title'] !== '')?$right_button['title']:'')); ?></a> ');
                                            }else{
                                                actions.push('<a class="<?php echo htmlentities((isset($right_button['class']) && ($right_button['class'] !== '')?$right_button['class']:'')); ?>" href="javascript:void(0)" onclick="$.operate.remove(\'' + row.<?php echo htmlentities($unique_id); ?> + '\')"><i class="<?php echo htmlentities((isset($right_button['icon']) && ($right_button['icon'] !== '')?$right_button['icon']:'')); ?>"></i> <?php echo htmlentities((isset($right_button['title']) && ($right_button['title'] !== '')?$right_button['title']:'')); ?></a> ');
                                            }
										} else {
											var url = '<?php echo htmlentities((isset($right_button['href']) && ($right_button['href'] !== '')?$right_button['href']:'')); ?>';
											var reg = /__(.*?)__/g;
											// 匹配ID和email，可能为任何的其他参数，但都是 __字段__ 格式
											while (result = reg.exec(url)) {
												url = url.replace(result[0], row[result[1]]);
											}
											actions.push('<a class="<?php echo htmlentities((isset($right_button['class']) && ($right_button['class'] !== '')?$right_button['class']:'')); ?>" target="<?php echo htmlentities((isset($right_button['target']) && ($right_button['target'] !== '')?$right_button['target']:'')); ?>" href="'+url+'"><i class="<?php echo htmlentities((isset($right_button['icon']) && ($right_button['icon'] !== '')?$right_button['icon']:'')); ?>"></i> <?php echo htmlentities((isset($right_button['title']) && ($right_button['title'] !== '')?$right_button['title']:'')); ?></a> ');
										}

										<?php endforeach; endif; else: echo "" ;endif; ?>
										return actions.join('');
									}
									<?php break; default: ?>
									<?php endswitch; ?>
								<?php endif; ?>
							<?php endif; ?>

                        },
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                ]
            };
            $.table.init(options);
        });

        // 搜索
        function searchPre() {
            var data = {};
            $.table.search('', data);
        }

        // 重置搜索
        function resetPre() {
            $.form.reset();
        }
		//HTML反转义
		function HTMLDecode(text) {
			var temp = document.createElement("div");
			temp.innerHTML = text;
			var output = temp.innerText || temp.textContent;
			temp = null;
			return output;
		}
    </script>

    <!--bootstrap table end-->

    <!--底部提示-->
    <?php if(!(empty($page_tips_bottom) || (($page_tips_bottom instanceof \think\Collection || $page_tips_bottom instanceof \think\Paginator ) && $page_tips_bottom->isEmpty()))): ?>
    <div class="alert alert-<?php echo htmlentities($tips_type); ?> alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <p><?php echo $page_tips_bottom; ?></p>
    </div>
    <?php endif; ?>
    
    <?php echo (isset($extra_html_content_bottom) && ($extra_html_content_bottom !== '')?$extra_html_content_bottom:''); ?>
    
    <?php echo (isset($extra_js) && ($extra_js !== '')?$extra_js:''); ?>
</section>
<!--内容结束-->

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
    
    <?php echo (isset($extra_css) && ($extra_css !== '')?$extra_css:''); ?>
    
    <?php echo (isset($extra_html_content_top) && ($extra_html_content_top !== '')?$extra_html_content_top:''); ?>
    <!--顶部提示开始-->
    <?php if(!(empty($page_tips_top) || (($page_tips_top instanceof \think\Collection || $page_tips_top instanceof \think\Paginator ) && $page_tips_top->isEmpty()))): ?>
    <div class="alert alert-<?php echo htmlentities($tips_type); ?> alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <p><?php echo $page_tips_top; ?></p>
    </div>
    <?php endif; ?>
    <!--顶部提示结束-->
    <div class="container-fluid">
        <div class="row">
            <!--搜索区域开始-->
            <?php if($search OR $page_tips_search): ?>
<div class="col-12 search-collapse">
    <form id="search_form">
        <div class="select-list">
            <?php if(!(empty($page_tips_search) || (($page_tips_search instanceof \think\Collection || $page_tips_search instanceof \think\Paginator ) && $page_tips_search->isEmpty()))): ?><?php echo $page_tips_search; ?><?php endif; if(!(empty($search) || (($search instanceof \think\Collection || $search instanceof \think\Paginator ) && $search->isEmpty()))): ?>
            <ul>
                <?php if(is_array($search) || $search instanceof \think\Collection || $search instanceof \think\Paginator): $i = 0; $__LIST__ = $search;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$search): $mod = ($i % 2 );++$i;?>
                <li>
                    <label><?php echo htmlentities((isset($search['title']) && ($search['title'] !== '')?$search['title']:'')); ?>： </label>
                    <?php if($search['param']): if($search['data_source'] == 2 && ($search['type'] == 'text' || $search['type'] == 'textarea' || $search['type'] == 'number' || $search['type'] == 'hidden')): ?>
                            
                            <input type="text" id="search_<?php echo htmlentities((isset($search['name']) && ($search['name'] !== '')?$search['name']:'')); ?>" name="<?php echo htmlentities((isset($search['name']) && ($search['name'] !== '')?$search['name']:'')); ?>" value="<?php echo htmlentities((isset($search['default']) && ($search['default'] !== '')?$search['default']:'')); ?>"/>
                        <?php elseif($search['data_source'] == 2 && $search['type'] == 'linkage'): 
                                // 获取字段信息
                                $filedInfo = \app\common\model\Field::where('id', $search['field_id'])->find();
                                $filedInfo['setup'] = string2array($filedInfo['setup']);
                                $setupFields = explode(',', $filedInfo['setup']['fields']);

                                // 获取一级联动数据
                                $levelOne  = getLinkageData($search['relation_model'], 0, $setupFields[2]);
                                $levelKey  = [];
                                $levelData = [];
                                $ajaxUrl = (string)url('Index/linkage', ['id' => $search['field_id']]);

                                // 默认值
                                if ($search['default'] != '') {
                                    $levelKeyData = getLinkageAllData($search['relation_model'], $search['default'], $setupFields[0], $setupFields[1], $setupFields[2]);
                                    $levelKey = $levelKeyData['key'];
                                    $levelData = $levelKeyData['data'];
                                    sort($levelKey); // 升序排序
                                    $levelData = array_reverse($levelData); // 以相反的元素顺序返回数组
                                }
                             ?>
                            <select class="js_linkage" data-model="<?php echo htmlentities($search['relation_model']); ?>" data-key="<?php echo htmlentities($setupFields['0']); ?>" data-key_value="<?php echo htmlentities($setupFields['1']); ?>" data-pid_field_name="<?php echo htmlentities((isset($setupFields['2']) && ($setupFields['2'] !== '')?$setupFields['2']:'pid')); ?>" data-next_level_id="<?php echo htmlentities($search['name']); ?>_2" id="<?php echo htmlentities($search['name']); ?>_1" name="<?php echo htmlentities($search['name']); if($filedInfo['setup']['level'] > '1'): ?>_1<?php endif; ?>" data-placeholder="请选择" data-ajax_url="<?php echo htmlentities($ajaxUrl); ?>" style="width: auto; display: inline-block">
                                <option value="">请选择</option>
                                <?php if(is_array($levelOne) || $levelOne instanceof \think\Collection || $levelOne instanceof \think\Paginator): $i = 0; $__LIST__ = $levelOne;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;if($filedInfo['setup']['level'] == '1'): ?>
                                <option value="<?php echo htmlentities($option[$setupFields[0]]); ?>" <?php if(($search['default'] == (string)$option[$setupFields[0]])): ?>selected<?php endif; ?>><?php echo $option[$setupFields[1]]; ?></option>
                                <?php else: ?>
                                <option value="<?php echo htmlentities($option[$setupFields[0]]); ?>" <?php if((isset($levelKey[1]) && $levelKey[1] == (string)$option[$setupFields[0]])): ?>selected<?php endif; ?>><?php echo $option[$setupFields[1]]; ?></option>
                                <?php endif; ?>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                            <?php if($filedInfo['setup']['level'] == '2'): ?>
                            <select id="<?php echo htmlentities($search['name']); ?>_2" name="<?php echo htmlentities($search['name']); ?>" data-placeholder="请选择" style="width: auto; display: inline-block">
                                <option value="">请选择</option>
                                <?php if(!(empty($levelData['1']) || (($levelData['1'] instanceof \think\Collection || $levelData['1'] instanceof \think\Paginator ) && $levelData['1']->isEmpty()))): if(is_array($levelData['1']) || $levelData['1'] instanceof \think\Collection || $levelData['1'] instanceof \think\Paginator): $i = 0; $__LIST__ = $levelData['1'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;?>
                                <option value="<?php echo htmlentities($option[$setupFields[0]]); ?>" <?php if(($search['default'] == (string)$option[$setupFields[0]])): ?>selected<?php endif; ?>><?php echo $option[$setupFields[1]]; ?></option>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                                <?php endif; ?>
                            </select>
                            <?php endif; if($filedInfo['setup']['level'] == '3'): ?>
                            <select class="js_linkage" data-model="<?php echo htmlentities($search['relation_model']); ?>" data-key="<?php echo htmlentities($setupFields['0']); ?>" data-key_value="<?php echo htmlentities($setupFields['1']); ?>" data-pid_field_name="<?php echo htmlentities((isset($setupFields['2']) && ($setupFields['2'] !== '')?$setupFields['2']:'pid')); ?>" data-next_level_id="<?php echo htmlentities($search['name']); ?>_3" id="<?php echo htmlentities($search['name']); ?>_2" name="<?php echo htmlentities($search['name']); ?>_2" data-placeholder="请选择" data-ajax_url="<?php echo htmlentities($ajaxUrl); ?>" style="width: auto; display: inline-block">
                                <option value="">请选择</option>
                                <?php if(!(empty($levelData['1']) || (($levelData['1'] instanceof \think\Collection || $levelData['1'] instanceof \think\Paginator ) && $levelData['1']->isEmpty()))): if(is_array($levelData['1']) || $levelData['1'] instanceof \think\Collection || $levelData['1'] instanceof \think\Paginator): $i = 0; $__LIST__ = $levelData['1'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;?>
                                <option value="<?php echo htmlentities($option[$setupFields[0]]); ?>" <?php if((isset($levelKey[2]) && $levelKey[2] == (string)$option[$setupFields[0]])): ?>selected<?php endif; ?>><?php echo $option[$setupFields[1]]; ?></option>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                                <?php endif; ?>
                            </select>
                            <select id="<?php echo htmlentities($search['name']); ?>_3" name="<?php echo htmlentities($search['name']); ?>" data-placeholder="请选择" style="width: auto; display: inline-block">
                                <option value="">请选择</option>
                                <?php if(!(empty($levelData['2']) || (($levelData['2'] instanceof \think\Collection || $levelData['2'] instanceof \think\Paginator ) && $levelData['2']->isEmpty()))): if(is_array($levelData['2']) || $levelData['2'] instanceof \think\Collection || $levelData['2'] instanceof \think\Paginator): $i = 0; $__LIST__ = $levelData['2'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;?>
                                <option value="<?php echo htmlentities($option[$setupFields[0]]); ?>" <?php if(($search['default'] == (string)$option[$setupFields[0]])): ?>selected<?php endif; ?>><?php echo $option[$setupFields[1]]; ?></option>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                                <?php endif; ?>
                            </select>
                            <?php endif; else: ?>
                            <select id="search_<?php echo htmlentities((isset($search['name']) && ($search['name'] !== '')?$search['name']:'')); ?>" name="<?php echo htmlentities((isset($search['name']) && ($search['name'] !== '')?$search['name']:'')); ?>">
                                <option value="">所有</option>
                                <?php if(!(empty($search['param']) || (($search['param'] instanceof \think\Collection || $search['param'] instanceof \think\Paginator ) && $search['param']->isEmpty()))): if(is_array($search['param']) || $search['param'] instanceof \think\Collection || $search['param'] instanceof \think\Paginator): $i = 0; $__LIST__ = $search['param'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;if(is_array($v)): ?>
                                <option value="<?php echo htmlentities($key); ?>" <?php if(((string)$search['default'] == (string)$key)): ?>selected<?php endif; if($v['disabled'] == 1): ?>disabled<?php endif; ?>><?php echo htmlentities($v['value']); ?></option>
                                <?php else: ?>
                                <option value="<?php echo htmlentities($key); ?>" <?php if(((string)$search['default'] == (string)$key)): ?>selected<?php endif; ?>><?php echo htmlentities($v); ?></option>
                                <?php endif; ?>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                                <?php endif; ?>
                            </select>
                        <?php endif; else: if($search['type'] == 'date' OR $search['type'] == 'time' OR $search['type'] == 'datetime'): ?>
                            
                            <input type="text" id="search_<?php echo htmlentities((isset($search['name']) && ($search['name'] !== '')?$search['name']:'')); ?>" name="<?php echo htmlentities((isset($search['name']) && ($search['name'] !== '')?$search['name']:'')); ?>" value="<?php echo htmlentities((isset($search['default']) && ($search['default'] !== '')?$search['default']:'')); ?>" daterange="true" autocomplete="off"/>
                        <?php elseif($search['type'] == 'select2'): ?>
                            <select class="select2" id="search_<?php echo htmlentities((isset($search['name']) && ($search['name'] !== '')?$search['name']:'')); ?>" name="<?php echo htmlentities((isset($search['name']) && ($search['name'] !== '')?$search['name']:'')); ?>" data-value="<?php echo htmlentities((isset($search['default']) && ($search['default'] !== '')?$search['default']:'')); ?>">
                                <option value="">所有</option>
                            </select>
                            <script>
                                $(function () {
                                    var option = {};
                                    // 启用ajax分页查询
                                    option = {
                                        language: "zh-CN",
                                        //allowClear: true,
                                        ajax: {
                                            delay: 250, // 限速请求
                                            url: "<?php echo url('Index/select2',['id'=>$search['field_id']]); ?>",   //  请求地址
                                            dataType: 'json',
                                            data: function (params) {
                                                return {
                                                    keyWord: params.term || '',    //搜索参数
                                                    page: params.page || 1,        //分页参数
                                                    rows: params.pagesize || 10,   //每次查询10条记录
                                                };
                                            },
                                            processResults: function (data, params) {
                                                params.page = params.page || 1;
                                                if (params.page == 1) {
                                                    data.data.unshift({id: '', name: "", text: "所有"});
                                                }
                                                return {
                                                    results: data.data,
                                                    pagination: {
                                                        more: (params.page) < data.last_page
                                                    }
                                                };
                                            },
                                            cache: true
                                        }
                                    };
                                    // 默认值设置
                                    var defaultValue = $("#search_<?php echo htmlentities((isset($search['name']) && ($search['name'] !== '')?$search['name']:'')); ?>").data("value");
                                    if (defaultValue) {
                                        $.ajax({
                                            type: "POST",
                                            url: "<?php echo url('Index/select2',['id'=>$search['field_id']]); ?>",
                                            data: {value: defaultValue},
                                            dataType: "json",
                                            async: false,
                                            success: function(data){
                                                $("#search_<?php echo htmlentities((isset($search['name']) && ($search['name'] !== '')?$search['name']:'')); ?>").append("<option selected value='" + data.key + "'>" + data.value + "</option>");
                                            }
                                        });
                                    }
                                    $("#search_<?php echo htmlentities((isset($search['name']) && ($search['name'] !== '')?$search['name']:'')); ?>").select2(option);
                                })
                            </script>
                        <?php else: ?>
                            
                            <input type="text" id="search_<?php echo htmlentities((isset($search['name']) && ($search['name'] !== '')?$search['name']:'')); ?>" name="<?php echo htmlentities((isset($search['name']) && ($search['name'] !== '')?$search['name']:'')); ?>" value="<?php echo htmlentities((isset($search['default']) && ($search['default'] !== '')?$search['default']:'')); ?>"/>
                        <?php endif; ?>
                    <?php endif; ?>
                </li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                <li>
                    <a class="btn btn-primary btn-rounded btn-sm" onclick="$.table.search()"><i class="fa fa-search"></i>&nbsp;搜索</a>
                    <a class="btn btn-warning btn-rounded btn-sm" onclick="resetPre()"><i class="fas fa-sync-alt"></i>&nbsp;重置</a>
                    <input class="hide" type="submit" name="btnSave" value="提交" onclick="$.table.search();return false;"/>
                </li>
            </ul>
            <?php endif; ?>
        </div>
    </form>
</div>
<?php endif; ?>
            <!--列表区域开始-->
            <div class="col-sm-12 select-table table-striped">
                <div class="btn-group-sm" id="toolbar" role="group">
    <?php if(is_array($top_buttons) || $top_buttons instanceof \think\Collection || $top_buttons instanceof \think\Paginator): $i = 0; $__LIST__ = $top_buttons;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$top_button): $mod = ($i % 2 );++$i;if(!(empty($top_button['group']) || (($top_button['group'] instanceof \think\Collection || $top_button['group'] instanceof \think\Paginator ) && $top_button['group']->isEmpty()))): ?>
    <div class="btn-group">
    <?php endif; ?>
        <a class="<?php echo htmlentities((isset($top_button['class']) && ($top_button['class'] !== '')?$top_button['class']:'')); ?>" <?php if(!(empty($top_button['href']) || (($top_button['href'] instanceof \think\Collection || $top_button['href'] instanceof \think\Paginator ) && $top_button['href']->isEmpty()))): ?>href="<?php echo htmlentities((isset($top_button['href']) && ($top_button['href'] !== '')?$top_button['href']:'')); ?>"<?php endif; if(!(empty($top_button['target']) || (($top_button['target'] instanceof \think\Collection || $top_button['target'] instanceof \think\Paginator ) && $top_button['target']->isEmpty()))): ?> target="<?php echo htmlentities((isset($top_button['target']) && ($top_button['target'] !== '')?$top_button['target']:'')); ?>"<?php endif; if(!(empty($top_button['onclick']) || (($top_button['onclick'] instanceof \think\Collection || $top_button['onclick'] instanceof \think\Paginator ) && $top_button['onclick']->isEmpty()))): ?> onclick="<?php echo htmlentities((isset($top_button['onclick']) && ($top_button['onclick'] !== '')?$top_button['onclick']:'')); ?>"<?php endif; ?>>
            <i class="<?php echo htmlentities((isset($top_button['icon']) && ($top_button['icon'] !== '')?$top_button['icon']:'')); ?>"></i> <?php echo htmlentities((isset($top_button['title']) && ($top_button['title'] !== '')?$top_button['title']:'')); ?>
        </a>
        <?php if(!(empty($top_button['group']) || (($top_button['group'] instanceof \think\Collection || $top_button['group'] instanceof \think\Paginator ) && $top_button['group']->isEmpty()))): ?>
        <button type="button" class="btn <?php echo htmlentities((isset($top_button['group']['class']) && ($top_button['group']['class'] !== '')?$top_button['group']['class']:'btn-info')); ?> dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="sr-only">Toggle Dropdown</span>
        </button>
        <div class="dropdown-menu">
            <?php foreach($top_button['group']['menus'] as $key=>$vo): ?>
            <a class="dropdown-item <?php echo htmlentities((isset($vo['class']) && ($vo['class'] !== '')?$vo['class']:'')); ?>" <?php if(!(empty($vo['href']) || (($vo['href'] instanceof \think\Collection || $vo['href'] instanceof \think\Paginator ) && $vo['href']->isEmpty()))): ?>href="<?php echo htmlentities((isset($vo['href']) && ($vo['href'] !== '')?$vo['href']:'')); ?>"<?php endif; if(!(empty($vo['target']) || (($vo['target'] instanceof \think\Collection || $vo['target'] instanceof \think\Paginator ) && $vo['target']->isEmpty()))): ?> target="<?php echo htmlentities((isset($vo['target']) && ($vo['target'] !== '')?$vo['target']:'')); ?>"<?php endif; if(!(empty($vo['onclick']) || (($vo['onclick'] instanceof \think\Collection || $vo['onclick'] instanceof \think\Paginator ) && $vo['onclick']->isEmpty()))): ?> onclick="<?php echo htmlentities((isset($vo['onclick']) && ($vo['onclick'] !== '')?$vo['onclick']:'')); ?>"<?php endif; ?>>
                <i class="<?php echo htmlentities((isset($vo['icon']) && ($vo['icon'] !== '')?$vo['icon']:'')); ?>"></i> <?php echo htmlentities((isset($vo['title']) && ($vo['title'] !== '')?$vo['title']:'')); ?>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
    <?php endif; ?>
    <?php endforeach; endif; else: echo "" ;endif; ?>
</div>
                <table id="bootstrap-table" data-mobile-responsive="true"></table>
            </div>
        </div>
    </div>
    <script>
	//ZTX-003前端把转义符转为普通字符 by折腾侠
	function escape2Html(str) {
	var arrEntities={'lt':'<','gt':'>','nbsp':' ','amp':'&','quot':'"'};
	return str.replace(/&(lt|gt|nbsp|amp|quot);/ig,function(all,t){return arrEntities[t];});
	}
	//ZTX-003前端把转义符转为普通字符 by折腾侠
        $(function() {
            var options = {
                uniqueId      : "<?php echo htmlentities($unique_id); ?>",         // 表格主键名称，（默认为id，如表主键不为id必须设置主键）
                url           : "<?php echo $data_url; ?>",      // 请求后台的URL
                addUrl        : "<?php echo $add_url; ?>",       // 新增的地址
                editUrl       : "<?php echo $edit_url; ?>",      // 修改的地址
                delUrl        : "<?php echo $del_url; ?>",       // 删除的地址
                exportUrl     : "<?php echo $export_url; ?>",    // 导出的地址
                sortUrl       : "<?php echo $sort_url; ?>",      // 排序的地址
                sortName      : "<?php echo htmlentities($unique_id); ?>",         // 排序列名称
                sortOrder     : "desc",                 // 排序方式  asc 或者 desc
				pagination    : <?php echo htmlentities($pagination); ?>,			// 是否进行分页
                parentIdField : "<?php echo htmlentities($parent_id_field); ?>",   // 列表树模式需传递父id字段名（parent_id/pid）
				clickToSelect : true,				    // 默认false不响应，设为true则当点击此行的某处时，会自动选中此行的checkbox/radiobox
                pageSize      : "<?php echo htmlentities($page_size); ?>",         // 每页显示的行数
                layerOpen     : "<?php echo htmlentities($layer_open); ?>",        // 添加/编辑等页启用layer弹层加载
                emptyTips     : "<?php echo htmlentities($empty_tips); ?>",        // 空数据提示信息
                fixedColumns  : false,                   // 是否启用固定列功能
                fixedLeft     : <?php echo htmlentities($fixed_left); ?>,          // 左侧固定列数
                fixedRight    : <?php echo htmlentities($fixed_right); ?>,         // 右侧固定列数
                columns: [
                    {
                        //field: 'state',
                        checkbox: true,
						// 当某行包含checkbox_disabled时禁止选择
						formatter: function(value, row, index) {
							if(row.checkbox_disabled =='1'){
								 return {
									 disabled : true
								}
							 }
						}
                    },
                    <?php if(is_array($columns) || $columns instanceof \think\Collection || $columns instanceof \think\Paginator): $i = 0; $__LIST__ = $columns;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$column): $mod = ($i % 2 );++$i;?>
                        {
                            field: '<?php echo htmlentities((isset($column['name']) && ($column['name'] !== '')?$column['name']:'')); ?>',  
                            title: '<?php echo htmlentities((isset($column['title']) && ($column['title'] !== '')?$column['title']:'')); ?>', 
                            align:'<?php echo htmlentities((isset($column['align']) && ($column['align'] !== '')?$column['align']:'center')); ?>',
                            visible:'<?php echo htmlentities((isset($column['visible']) && ($column['visible'] !== '')?$column['visible']:'true')); ?>',

                            <?php if($column['name']==$unique_id): ?>
                                sortable: true,                  
                            <?php else: ?>
                                sortable: <?php echo htmlentities($column['sortable']); ?>,     
                            <?php endif; if(!(empty($column['class']) || (($column['class'] instanceof \think\Collection || $column['class'] instanceof \think\Paginator ) && $column['class']->isEmpty()))): ?>
                                class: '<?php echo htmlentities((isset($column['class']) && ($column['class'] !== '')?$column['class']:'')); ?>', 
                            <?php endif; if(!(empty($column['width']) || (($column['width'] instanceof \think\Collection || $column['width'] instanceof \think\Paginator ) && $column['width']->isEmpty()))): ?>
                                width: <?php echo htmlentities($column['width']); ?>, 
                            <?php endif; if($column['param']): if($column['name'] == 'status'): ?>
									formatter: function(value, row, index) {
										if (value == 0) {
											return '<i class="fa fa-toggle-off text-info fa-2x cursor_pointer" onclick="$.operate.state(\'' + row.<?php echo htmlentities($unique_id); ?> + '\',\'<?php echo url('state'); ?>\')"></i>';
										} else {
											return '<i class="fa fa-toggle-on text-info fa-2x cursor_pointer" onclick="$.operate.state(\'' + row.<?php echo htmlentities($unique_id); ?> + '\',\'<?php echo url('state'); ?>\')"></i>';
										}
									}
								<?php else: ?>
								formatter: function(value, row, index) {
                                    if (value == 0) {
                                        return '<span class="badge badge-<?php echo htmlentities((isset($column['param']['0']['class']) && ($column['param']['0']['class'] !== '')?$column['param']['0']['class']:'danger')); ?>"><?php echo htmlentities((isset($column['param']['0']) && ($column['param']['0'] !== '')?$column['param']['0']:'禁用')); ?></span>';
                                    } else if (value == 1) {
                                        return '<span class="badge badge-<?php echo htmlentities((isset($column['param']['1']['class']) && ($column['param']['1']['class'] !== '')?$column['param']['1']['class']:'primary')); ?>"><?php echo htmlentities((isset($column['param']['1']) && ($column['param']['1'] !== '')?$column['param']['1']:'启用')); ?></span>';
                                    }else if (value == 2) {
                                        return '<span class="badge badge-<?php echo htmlentities((isset($column['param']['1']['class']) && ($column['param']['1']['class'] !== '')?$column['param']['1']['class']:'info')); ?>"><?php echo htmlentities((isset($column['param']['2']) && ($column['param']['2'] !== '')?$column['param']['2']:'状态2')); ?></span>';
                                    }else if (value == 3) {
                                        return '<span class="badge badge-<?php echo htmlentities((isset($column['param']['1']['class']) && ($column['param']['1']['class'] !== '')?$column['param']['1']['class']:'success')); ?>"><?php echo htmlentities((isset($column['param']['3']) && ($column['param']['3'] !== '')?$column['param']['3']:'状态3')); ?></span>';
                                    }else {
                                        var str = '';
                                        <?php foreach($column['param'] as $key=>$vo): ?>
                                            var kk = '<?php echo htmlentities($key); ?>';
                                            if (value == kk || checkValInStr(kk, value)) {
                                                str += '<span class="badge badge-info"><?php echo htmlentities($vo); ?></span> ';
                                            }
                                        <?php endforeach; ?>
                                        return str;
                                    }
                                }
								<?php endif; else: if($column['name'] == 'sort'): ?>
									formatter: function(value, row, index) {
										return '<input class="form-control input-sm w_40 changeSort" type="text" value="' + value + '" data-id="' + row.<?php echo htmlentities($unique_id); ?> + '" onblur="$.table.sort(this)">';
									}
								<?php else: switch($column['type']): case "text": ?>
									
										formatter: function(value, row, index) {
											return HTMLDecode(value);
										}
									<?php break; case "datetime": ?>
                                    formatter: function(value, row, index) {
                                        return changeDateFormat(value);
                                    }
                                    <?php break; case "status": ?>
										formatter: function(value, row, index) {
											if (value == 0) {
												return '<span class="badge badge-<?php echo htmlentities((isset($column['param']['0']['class']) && ($column['param']['0']['class'] !== '')?$column['param']['0']['class']:'danger')); ?>"><?php echo htmlentities((isset($column['param']['0']['title']) && ($column['param']['0']['title'] !== '')?$column['param']['0']['title']:'禁用')); ?></span>';
											} else if (value == 1) {
												return '<span class="badge badge-<?php echo htmlentities((isset($column['param']['1']['class']) && ($column['param']['1']['class'] !== '')?$column['param']['1']['class']:'primary')); ?>"><?php echo htmlentities((isset($column['param']['1']['title']) && ($column['param']['1']['title'] !== '')?$column['param']['1']['title']:'启用')); ?></span>';
											}else if (value == 2) {
												return '<span class="badge badge-<?php echo htmlentities((isset($column['param']['1']['class']) && ($column['param']['1']['class'] !== '')?$column['param']['1']['class']:'default')); ?>"><?php echo htmlentities((isset($column['param']['1']['title']) && ($column['param']['1']['title'] !== '')?$column['param']['1']['title']:'状态2')); ?></span>';
											}else if (value == 3) {
												return '<span class="badge badge-<?php echo htmlentities((isset($column['param']['1']['class']) && ($column['param']['1']['class'] !== '')?$column['param']['1']['class']:'success')); ?>"><?php echo htmlentities((isset($column['param']['1']['title']) && ($column['param']['1']['title'] !== '')?$column['param']['1']['title']:'状态3')); ?></span>';
											}else {
												return '<span class="badge badge-<?php echo htmlentities((isset($column['param']['1']['class']) && ($column['param']['1']['class'] !== '')?$column['param']['1']['class']:'info')); ?>"><?php echo htmlentities((isset($column['param']['1']['title']) && ($column['param']['1']['title'] !== '')?$column['param']['1']['title']:'其他')); ?></span>';
											}
										}
									<?php break; case "yesno": ?>
										formatter: function(value, row, index) {
											if (value == 0) {
												return '<i class="fa fa-ban text-<?php echo htmlentities((isset($column['param']['0']['class']) && ($column['param']['0']['class'] !== '')?$column['param']['0']['class']:'danger')); ?>"></i>';
											} else if (value == 1) {
												return '<i class="fa fa-check text-<?php echo htmlentities((isset($column['param']['1']['class']) && ($column['param']['1']['class'] !== '')?$column['param']['1']['class']:'primary')); ?>"></i>';
											}
										}
									<?php break; case "customize": ?>
                                    //自定义列表字段类型的格式化设置
										formatter: <?php echo (isset($column['formatter']) && ($column['formatter'] !== '')?$column['formatter']:''); ?>,
									<?php break; case "link": ?>
									formatter: function(value, row, index) {
										var link = '<?php echo htmlentities((isset($column['default']) && ($column['default'] !== '')?$column['default']:'')); ?>';
										var reg = /__(.*?)__/g;
										// 匹配ID和email，可能为任何的其他参数，但都是 __字段__ 格式
										while (result = reg.exec(link)) {
											link = link.replace(result[0], row[result[1]]);
										}
										// 拼接
										link = '<a href="'+link+'" target="<?php echo htmlentities($column['param']); ?>">' + value + '</a>';
										return link;
									}
									<?php break; case "image": ?>
									formatter: function(value, row, index) {
										if ($.common.isNotEmpty(value)) {
											return '<a href="' + value + '" target="_blank"><img class="image_preview" src="' + value + '"></a>';
										}
									}
									<?php break; ?>
									//ZTX-003增加多图字段的处理 by折腾侠
									<?php case "images": ?>
									formatter: function(value, row, index,field) {
										if ($.common.isNotEmpty(value)&&value!='[]') {
										value_str=escape2Html(value);										
										value_json=JSON.parse(value_str); 
										var key=Object.keys(value_json)[0];                                                                           
                                        if(typeof value_json[key].small == "undefined" || value_json[key].small == null || value_json[key].small == ""){
                                            var scrvlaue=value_json[key].image;
                                        }else{
                                            var scrvlaue=value_json[key].small;
                                        }
                                    

										return '<a href="./images_info.html?id='+ row.<?php echo htmlentities($unique_id); ?> + '&field='+field+'" target="_blank"><img class="images_preview" src="' + scrvlaue + '" ><p hidden="hidden">'+value_str+'</p></a>';
										}
									}
									<?php break; ?>
									//ZTX-003增加多图字段的处理 by折腾侠
									
									
                                    <?php case "color": ?>
                                    formatter: function(value, row, index) {
                                        if ($.common.isNotEmpty(value)) {
                                            return '<i class="table_colorpicker" style="background: ' + value + '""></i>';
                                        }
                                    }
                                    <?php break; case "select": ?>
									formatter: function(value, row, index) {
										return row.<?php echo htmlentities((isset($column['name']) && ($column['name'] !== '')?$column['name']:'')); ?>;
									}
									<?php break; case "select2": ?>
									formatter: function(value, row, index) {
										return row.<?php echo htmlentities((isset($column['name']) && ($column['name'] !== '')?$column['name']:'')); ?>;
									}
									<?php break; case "btn": ?>
                                    class : 'text-nowrap',
									formatter: function(value, row, index) {
										var actions = [];
										<?php if(is_array($right_buttons) || $right_buttons instanceof \think\Collection || $right_buttons instanceof \think\Paginator): $i = 0; $__LIST__ = $right_buttons;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$right_button): $mod = ($i % 2 );++$i;?>
										if('<?php echo htmlentities((isset($right_button['type']) && ($right_button['type'] !== '')?$right_button['type']:'')); ?>' == 'edit' || '<?php echo htmlentities((isset($right_button['type']) && ($right_button['type'] !== '')?$right_button['type']:'')); ?>' == 'preview'){
                                            if('<?php echo htmlentities((isset($right_button['href']) && ($right_button['href'] !== '')?$right_button['href']:'')); ?>'){
                                                var url = '<?php echo htmlentities((isset($right_button['href']) && ($right_button['href'] !== '')?$right_button['href']:'')); ?>';
                                                var reg = /__(.*?)__/g;
                                                // 匹配ID和email，可能为任何的其他参数，但都是 __字段__ 格式
                                                while (result = reg.exec(url)) {
                                                    url = url.replace(result[0], row[result[1]]);
                                                }
                                                actions.push('<a class="<?php echo htmlentities((isset($right_button['class']) && ($right_button['class'] !== '')?$right_button['class']:'')); ?>" target="<?php echo htmlentities((isset($right_button['target']) && ($right_button['target'] !== '')?$right_button['target']:'')); ?>" href="'+url+'"><i class="<?php echo htmlentities((isset($right_button['icon']) && ($right_button['icon'] !== '')?$right_button['icon']:'')); ?>"></i> <?php echo htmlentities((isset($right_button['title']) && ($right_button['title'] !== '')?$right_button['title']:'')); ?></a> ');
                                            }else{
                                                actions.push('<a class="<?php echo htmlentities((isset($right_button['class']) && ($right_button['class'] !== '')?$right_button['class']:'')); ?>" href="javascript:void(0)" onclick="$.operate.edit(\'' + row.<?php echo htmlentities($unique_id); ?> + '\')"><i class="<?php echo htmlentities((isset($right_button['icon']) && ($right_button['icon'] !== '')?$right_button['icon']:'')); ?>"></i> <?php echo htmlentities((isset($right_button['title']) && ($right_button['title'] !== '')?$right_button['title']:'')); ?></a> ');
                                            }
										} else if ('<?php echo htmlentities((isset($right_button['type']) && ($right_button['type'] !== '')?$right_button['type']:'')); ?>' == 'delete'){
                                            if('<?php echo htmlentities((isset($right_button['href']) && ($right_button['href'] !== '')?$right_button['href']:'')); ?>'){
                                                var url = '<?php echo htmlentities((isset($right_button['href']) && ($right_button['href'] !== '')?$right_button['href']:'')); ?>';
                                                var reg = /__(.*?)__/g;
                                                // 匹配ID和email，可能为任何的其他参数，但都是 __字段__ 格式
                                                while (result = reg.exec(url)) {
                                                    url = url.replace(result[0], row[result[1]]);
                                                }
                                                actions.push('<a class="<?php echo htmlentities((isset($right_button['class']) && ($right_button['class'] !== '')?$right_button['class']:'')); ?>" target="<?php echo htmlentities((isset($right_button['target']) && ($right_button['target'] !== '')?$right_button['target']:'')); ?>" href="'+url+'"><i class="<?php echo htmlentities((isset($right_button['icon']) && ($right_button['icon'] !== '')?$right_button['icon']:'')); ?>"></i> <?php echo htmlentities((isset($right_button['title']) && ($right_button['title'] !== '')?$right_button['title']:'')); ?></a> ');
                                            }else{
                                                actions.push('<a class="<?php echo htmlentities((isset($right_button['class']) && ($right_button['class'] !== '')?$right_button['class']:'')); ?>" href="javascript:void(0)" onclick="$.operate.remove(\'' + row.<?php echo htmlentities($unique_id); ?> + '\')"><i class="<?php echo htmlentities((isset($right_button['icon']) && ($right_button['icon'] !== '')?$right_button['icon']:'')); ?>"></i> <?php echo htmlentities((isset($right_button['title']) && ($right_button['title'] !== '')?$right_button['title']:'')); ?></a> ');
                                            }
										} else {
											var url = '<?php echo htmlentities((isset($right_button['href']) && ($right_button['href'] !== '')?$right_button['href']:'')); ?>';
											var reg = /__(.*?)__/g;
											// 匹配ID和email，可能为任何的其他参数，但都是 __字段__ 格式
											while (result = reg.exec(url)) {
												url = url.replace(result[0], row[result[1]]);
											}
											actions.push('<a class="<?php echo htmlentities((isset($right_button['class']) && ($right_button['class'] !== '')?$right_button['class']:'')); ?>" target="<?php echo htmlentities((isset($right_button['target']) && ($right_button['target'] !== '')?$right_button['target']:'')); ?>" href="'+url+'"><i class="<?php echo htmlentities((isset($right_button['icon']) && ($right_button['icon'] !== '')?$right_button['icon']:'')); ?>"></i> <?php echo htmlentities((isset($right_button['title']) && ($right_button['title'] !== '')?$right_button['title']:'')); ?></a> ');
										}

										<?php endforeach; endif; else: echo "" ;endif; ?>
										return actions.join('');
									}
									<?php break; default: ?>
									<?php endswitch; ?>
								<?php endif; ?>
							<?php endif; ?>

                        },
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                ]
            };
            $.table.init(options);
        });

        // 搜索
        function searchPre() {
            var data = {};
            $.table.search('', data);
        }

        // 重置搜索
        function resetPre() {
            $.form.reset();
        }
		//HTML反转义
		function HTMLDecode(text) {
			var temp = document.createElement("div");
			temp.innerHTML = text;
			var output = temp.innerText || temp.textContent;
			temp = null;
			return output;
		}
    </script>

    <!--bootstrap table end-->

    <!--底部提示-->
    <?php if(!(empty($page_tips_bottom) || (($page_tips_bottom instanceof \think\Collection || $page_tips_bottom instanceof \think\Paginator ) && $page_tips_bottom->isEmpty()))): ?>
    <div class="alert alert-<?php echo htmlentities($tips_type); ?> alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <p><?php echo $page_tips_bottom; ?></p>
    </div>
    <?php endif; ?>
    
    <?php echo (isset($extra_html_content_bottom) && ($extra_html_content_bottom !== '')?$extra_html_content_bottom:''); ?>
    
    <?php echo (isset($extra_js) && ($extra_js !== '')?$extra_js:''); ?>
</section>
<!--内容结束-->

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



