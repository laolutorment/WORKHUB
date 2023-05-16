<?php /*a:3:{s:45:"F:\site\haoqi\view\ADMIN\database\export.html";i:1655217047;s:48:"F:\site\haoqi\view\ADMIN\public\base_css_js.html";i:1654342741;s:47:"F:\site\haoqi\view\ADMIN\index\webuploader.html";i:1650961026;}*/ ?>

<!-- 为不使用框架的开关代码，本页为ZTX-011，增加数据库导入导出功能导出功能页面 -->

<!DOCTYPE html>
<html lang="en">

<head>
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
        var $list = $("#" + list + "");                                // 这几个初始化全局的百度文档上没说明，好蛋疼
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
			<!-- ZTX-004 设置图片预览   by 折腾侠 -->
			
			if(type=='img'){
			
			var images = '' +
                    '<div class="row no-gutters">' +
                    '   <div class="col-4 col-sm-4"><input type="text" name="' + image + '[]" value="' + url + '" class="form-control"/></div>' +
                    '   <div class="col-3 col-sm-3"><input class="form-control input-sm" type="text" name="' + image + '_title[]" value="' + file.name + '" ></div>' +
                    '   <div class="col-4 col-sm-3">' +
                    '       <div class="btn-group">' +
                    '           <button type="button" class="btn btn-default btn-sm move_up_images"><i class="fa fa-chevron-up"></i></button>' +
                    '           <button type="button" class="btn btn-default btn-sm move_down_images"><i class="fa fa-chevron-down"></i></button>' +
                    '           <button type="button" class="btn btn-default btn-sm remove_images"><i class="fa fa-times"></i></button>' +
                    '       </div>' +
                    '   </div>' +
					'   <div class="col-4 col-sm-2"><a href="'+ url +'" target="_blank"> <img class="images_preview_info" src="'+ url +'"  ></a></div>'+
					
					
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
				<!--ZTX-004  设置图片预览   by 折腾侠 -->
	
				
            } else {
                $("input[name='" + image + "']").val(url);
                $("#" + image_preview).attr('src', url);
                $("#" + image_preview).parent("a").attr('href', url);
			
            }
        });
        uploader.on('uploadComplete', function (file) {
          <!-- ZTX-001-折腾侠：当多个文件上传完成后，原代码把“.progress”元素设置成隐藏，导致第二个文件上传以后的进度条无法显示。 -->
			<!-- 原代码：$list.find('.progress').fadeOut();  -->
			
            $list.find('.progress').remove();
			
			 <!-- ZTX-001折腾侠：上传完成后，把“.progress”元素直接删除，下一个文件上传时就会显示进度条。 -->
			
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
<!-- ueditor -->
<script src="/static/plugins/ueditor/ueditor.config.js"></script>
<script src="/static/plugins/ueditor/ueditor.all.min.js"> </script>
<script src="/static/plugins/ueditor/lang/zh-cn/zh-cn.js"></script>
<!-- Bootstrap Table -->
<link rel="stylesheet" href="/static/plugins/bootstrap-table/bootstrap-table.min.css" />
<!-- layer 弹层组件 -->
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
<!-- jQuery-ui ZTX-005-->
<link rel="stylesheet" href="/static/plugins/jquery-ui-1.13.1.custom/jquery-ui.css">
<link rel="stylesheet" href="/static/plugins/jquery-ui-1.13.1.custom/jquery-ui.structure.css">
<link rel="stylesheet" href="/static/plugins/jquery-ui-1.13.1.custom/jquery-ui.theme.css">
<script src="/static/plugins/jquery-ui-1.13.1.custom/jquery-ui.js"></script>
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
    <!--折腾侠修改标签页图标为动态自定义-->
    <!-- ※折腾侠：修改后台页面标题为动态标题，可自定义 -->
    <title><?php echo htmlentities((isset($system['backstage_name']) && ($system['backstage_name'] !== '')?$system['backstage_name']:'SIYUCMS')); ?> | 控制台</title>
</head>

<body>
    <form target="_blank" name="form-builder" class="col-12 form_builder" id="form-builder" method="post"
        action="/ADMIN/Database/exportPost.html">
        <input type="hidden" name="table_name" value="<?php echo htmlentities($table_name); ?>">
        <div class="row">
            <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label " for="col">选择字段</label>
            <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                        <th class="text-center" >
                        
                            字段
                        
                        </th>
                        <th class="text-center">
                            格式转换
                       
                        </th>
                    </tr>
                        <?php foreach($columns_checkbox as $k=>$v): ?>
                        <tr>
                            <td class="text-left"><label>
                                    <input type="checkbox" name="col[]" value="<?php echo htmlentities($k); ?>"
                                        checked="checked"><span><?php echo htmlentities($v); ?></span></label></td><td> <select  id="<?php echo htmlentities($k); ?>" name="<?php echo htmlentities($k); ?>">
                                            <option value=""></option>
                                            <option value="datetime">转成时间格式</option>
                                            </select>
                                        </td>

                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div>

        </div>
        <div class="row">
            <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label "></label>
            <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
                <input type="checkbox" id='all_chose' name="all" class="dd_radio"
                    checked="checked"><span>全选</span></label></td>


            </div>
        </div>

    </form>
</body>

<script>
    //全选和全不选的设置
    //当全选的checkbox发生变化时
    $("#all_chose").change(function () {
        //判断全选的checkbox的状态
        if ($("#all_chose").is(':checked')) {
            //当全选的checkbox为选中状态时，其余复选框设置为选中
            $('#form-builder').find("input[type='checkbox']").prop("checked", "true");
        }
        else {
            //当全选的checkbox为未选中状态时，其余复选框设置为不选
            $('#form-builder').find("input[type='checkbox']").prop("checked", false);
        }
    });
</script>

</html>