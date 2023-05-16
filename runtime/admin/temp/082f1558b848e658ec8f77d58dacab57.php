<?php /*a:35:{s:49:"F:\site\haoqi\view\admin\form_builder\layout.html";i:1660841048;s:36:"F:\site\haoqi\view\admin\layout.html";i:1642750854;s:47:"F:\site\haoqi\view\admin\public\breadcrumb.html";i:1651030174;s:54:"F:\site\haoqi\view\admin\form_builder\items\group.html";i:1642750854;s:53:"F:\site\haoqi\view\admin\form_builder\items\text.html";i:1642750854;s:57:"F:\site\haoqi\view\admin\form_builder\items\textarea.html";i:1642750854;s:54:"F:\site\haoqi\view\admin\form_builder\items\radio.html";i:1642750854;s:57:"F:\site\haoqi\view\admin\form_builder\items\checkbox.html";i:1642750854;s:53:"F:\site\haoqi\view\admin\form_builder\items\date.html";i:1642750854;s:53:"F:\site\haoqi\view\admin\form_builder\items\time.html";i:1642750854;s:57:"F:\site\haoqi\view\admin\form_builder\items\datetime.html";i:1642750854;s:58:"F:\site\haoqi\view\admin\form_builder\items\daterange.html";i:1642750854;s:53:"F:\site\haoqi\view\admin\form_builder\items\tags.html";i:1642750854;s:55:"F:\site\haoqi\view\admin\form_builder\items\number.html";i:1642750854;s:57:"F:\site\haoqi\view\admin\form_builder\items\password.html";i:1642750854;s:55:"F:\site\haoqi\view\admin\form_builder\items\select.html";i:1642750854;s:56:"F:\site\haoqi\view\admin\form_builder\items\select2.html";i:1642750854;s:56:"F:\site\haoqi\view\admin\form_builder\items\linkage.html";i:1642750854;s:54:"F:\site\haoqi\view\admin\form_builder\items\image.html";i:1642750854;s:55:"F:\site\haoqi\view\admin\form_builder\items\images.html";i:1660828461;s:53:"F:\site\haoqi\view\admin\form_builder\items\file.html";i:1642750854;s:54:"F:\site\haoqi\view\admin\form_builder\items\files.html";i:1650988440;s:55:"F:\site\haoqi\view\admin\form_builder\items\editor.html";i:1642750854;s:55:"F:\site\haoqi\view\admin\form_builder\items\button.html";i:1642750854;s:55:"F:\site\haoqi\view\admin\form_builder\items\hidden.html";i:1642750854;s:53:"F:\site\haoqi\view\admin\form_builder\items\html.html";i:1642750854;s:54:"F:\site\haoqi\view\admin\form_builder\items\color.html";i:1642750854;s:53:"F:\site\haoqi\view\admin\form_builder\items\code.html";i:1642750854;s:43:"F:\site\haoqi\view\admin\public\header.html";i:1654181682;s:43:"F:\site\haoqi\view\admin\public\css_js.html";i:1650874429;s:47:"F:\site\haoqi\view\admin\index\webuploader.html";i:1660828475;s:41:"F:\site\haoqi\view\admin\public\left.html";i:1648199939;s:43:"F:\site\haoqi\view\admin\public\footer.html";i:1648198181;s:48:"F:\site\haoqi\view\admin\public\foot_css_js.html";i:1648736693;s:41:"F:\site\haoqi\view\admin\index\index.html";i:1657374967;}*/ ?>

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
    <div class="container-fluid">
        <div class="row">
            
            <?php echo (isset($extra_html_content_top) && ($extra_html_content_top !== '')?$extra_html_content_top:''); ?>
            <!--顶部提示开始-->
            <?php if(!(empty($page_tips_top) || (($page_tips_top instanceof \think\Collection || $page_tips_top instanceof \think\Paginator ) && $page_tips_top->isEmpty()))): ?>
            <div class="col-12 alert alert-<?php echo htmlentities($tips_type); ?> alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <p><?php echo $page_tips_top; ?></p>
            </div>
            <?php endif; ?>
            <!--顶部提示结束-->
            <?php if($layer == false): if(isset($page_tips_search) OR $show_all): ?>
            <div class="col-12 callout search">
                <form action="" data-pjax-other>
                    <?php if(!(empty($page_tips_search) || (($page_tips_search instanceof \think\Collection || $page_tips_search instanceof \think\Paginator ) && $page_tips_search->isEmpty()))): ?><?php echo $page_tips_search; ?><?php endif; if($show_all): ?>
                    <a class="btn btn-flat btn-primary" href="<?php echo url('index'); ?>"><i class="fa fa-list-ul m-r-10"></i>查看全部</a>
                    <?php endif; ?>
                    <a class="btn btn-flat btn-success f_r" onclick="javascript :history.back(-1)"><i class="fa fa-undo m-r-10"></i>返 回</a>
                </form>
            </div>
            <?php endif; ?>
            <?php endif; ?>
            <!--数据表开始-->
            <form name="form-builder" class="col-12 form_builder" method="<?php echo htmlentities($form_method); ?>" action="<?php echo htmlentities($form_url); ?>"  <?php if(!empty($submit_confirm)) echo 'submit_confirm'; ?> >
                <!---->
                <?php if($form_items): ?>
                    <!---->
                    <?php if(is_array($form_items) || $form_items instanceof \think\Collection || $form_items instanceof \think\Paginator): $i = 0; $__LIST__ = $form_items;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$form): $mod = ($i % 2 );++$i;switch($form['type']): case "group": ?>
                            
                            <ul class="nav nav-tabs" id="builder-form-group-tab" role="tablist">
    <?php if(is_array($form['options']) || $form['options'] instanceof \think\Collection || $form['options'] instanceof \think\Paginator): $items_key = 0; $__LIST__ = $form['options'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($items_key % 2 );++$items_key;?>
    <li class="nav-item">
        <a class="nav-link <?php if($items_key == '1'): ?>active<?php endif; ?>" id="nav-tab-<?php echo htmlentities($items_key); ?>" href="#nav-tab-content-<?php echo htmlentities($items_key); ?>" role="tab" data-toggle="tab"><?php echo htmlentities(htmlspecialchars($key)); ?></a>
    </li>
    <?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
<div class="tab-content no-padding">
    <?php if(is_array($form['options']) || $form['options'] instanceof \think\Collection || $form['options'] instanceof \think\Paginator): $items_key = 0; $__LIST__ = $form['options'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$items): $mod = ($items_key % 2 );++$items_key;?>
    <div class="tab-pane <?php if($items_key == '1'): ?>active<?php endif; ?>" id="nav-tab-content-<?php echo htmlentities($items_key); ?>" >
    <?php if(is_array($items) || $items instanceof \think\Collection || $items instanceof \think\Paginator): $i = 0; $__LIST__ = $items;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$form_group): $mod = ($i % 2 );++$i;switch($form_group['type']): case "text": ?>
                
                <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form_group['required']) || (($form_group['required'] instanceof \think\Collection || $form_group['required'] instanceof \think\Paginator ) && $form_group['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form_group['name']); ?>"><?php echo htmlentities(htmlspecialchars($form_group['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <?php if(!(empty($form_group['group']) || (($form_group['group'] instanceof \think\Collection || $form_group['group'] instanceof \think\Paginator ) && $form_group['group']->isEmpty()))): ?>
        <div class="input-group">
            <?php endif; if(!(empty($form_group['group']['0']) || (($form_group['group']['0'] instanceof \think\Collection || $form_group['group']['0'] instanceof \think\Paginator ) && $form_group['group']['0']->isEmpty()))): ?>
            <div class="input-group-prepend">
                <span class="input-group-text"><?php echo $form_group['group']['0']; ?></span>
            </div>
            <?php endif; ?>
            <input class="form-control" type="text" id="<?php echo htmlentities($form_group['name']); ?>" name="<?php echo htmlentities($form_group['name']); ?>" value="<?php echo htmlentities($form_group['value']); ?>" placeholder="<?php echo htmlentities($form_group['placeholder']); ?>" <?php echo $form_group['extra_attr']; ?>>
            <?php if(!(empty($form_group['group']['1']) || (($form_group['group']['1'] instanceof \think\Collection || $form_group['group']['1'] instanceof \think\Paginator ) && $form_group['group']['1']->isEmpty()))): ?>
            <div class="input-group-append">
                <span class="input-group-text"><?php echo $form_group['group']['1']; ?></span>
            </div>
            <?php endif; if(!(empty($form_group['group']) || (($form_group['group'] instanceof \think\Collection || $form_group['group'] instanceof \think\Paginator ) && $form_group['group']->isEmpty()))): ?>
        </div>
        <?php endif; ?>
    </div>
    <?php if(!(empty($form_group['tips']) || (($form_group['tips'] instanceof \think\Collection || $form_group['tips'] instanceof \think\Paginator ) && $form_group['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form_group['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
            <?php break; case "textarea": ?>
                
                <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form_group['required']) || (($form_group['required'] instanceof \think\Collection || $form_group['required'] instanceof \think\Paginator ) && $form_group['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form_group['name']); ?>"><?php echo htmlentities(htmlspecialchars($form_group['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <textarea class="form-control" id="<?php echo htmlentities($form_group['name']); ?>" name="<?php echo htmlentities($form_group['name']); ?>" rows="<?php echo htmlentities((isset($form_group['rows']) && ($form_group['rows'] !== '')?$form_group['rows']:'3')); ?>" placeholder="<?php echo htmlentities($form_group['placeholder']); ?>" <?php echo $form_group['extra_attr']; ?>><?php echo htmlentities($form_group['value']); ?></textarea>
    </div>
    <?php if(!(empty($form_group['tips']) || (($form_group['tips'] instanceof \think\Collection || $form_group['tips'] instanceof \think\Paginator ) && $form_group['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form_group['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
            <?php break; case "radio": ?>
                
                <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form_group['required']) || (($form_group['required'] instanceof \think\Collection || $form_group['required'] instanceof \think\Paginator ) && $form_group['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form_group['name']); ?>"><?php echo htmlentities(htmlspecialchars($form_group['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4 dd_radio_lable_left border-white">
        <?php if(is_array($form_group['options']) || $form_group['options'] instanceof \think\Collection || $form_group['options'] instanceof \think\Paginator): $i = 0; $__LIST__ = $form_group['options'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;?>
        <div class="icheck-peterriver icheck-inline">
            <input type="radio" name="<?php echo htmlentities($form_group['name']); ?>" class="dd_radio" id="<?php echo htmlentities($form_group['name']); ?><?php echo htmlentities($i); ?>" value="<?php echo htmlentities($key); ?>" <?php if($key == (isset($form_group['value']) && ($form_group['value'] !== '')?$form_group['value']:'')): ?>checked<?php endif; ?> <?php echo (isset($form_group['extra_attr']) && ($form_group['extra_attr'] !== '')?$form_group['extra_attr']:''); ?>>
            <label for="<?php echo htmlentities($form_group['name']); ?><?php echo htmlentities($i); ?>"><?php echo htmlspecialchars($option); ?></label>
        </div>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
    <?php if(!(empty($form_group['tips']) || (($form_group['tips'] instanceof \think\Collection || $form_group['tips'] instanceof \think\Paginator ) && $form_group['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form_group['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
            <?php break; case "checkbox": ?>
                
                <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form_group['required']) || (($form_group['required'] instanceof \think\Collection || $form_group['required'] instanceof \think\Paginator ) && $form_group['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form_group['name']); ?>"><?php echo htmlentities(htmlspecialchars($form_group['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <div class="dd_radio_lable_left border-white">
            <input type="hidden" name="<?php echo htmlentities($form_group['name']); ?>[]" value="">
            <?php if(is_array($form_group['options']) || $form_group['options'] instanceof \think\Collection || $form_group['options'] instanceof \think\Paginator): $i = 0; $__LIST__ = $form_group['options'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;?>
            <div class="icheck-peterriver icheck-inline">
                <input type="checkbox" name="<?php echo htmlentities($form_group['name']); ?>[]" class="dd_radio" id="<?php echo htmlentities($form_group['name']); ?><?php echo htmlentities($i); ?>" value="<?php echo htmlentities($key); ?>" <?php if(in_array(($key), is_array((isset($form_group['value']) && ($form_group['value'] !== '')?$form_group['value']:''))?(isset($form_group['value']) && ($form_group['value'] !== '')?$form_group['value']:''):explode(',',(isset($form_group['value']) && ($form_group['value'] !== '')?$form_group['value']:'')))): ?>checked<?php endif; ?> <?php echo (isset($form_group['extra_attr']) && ($form_group['extra_attr'] !== '')?$form_group['extra_attr']:''); ?>>
                <label for="<?php echo htmlentities($form_group['name']); ?><?php echo htmlentities($i); ?>"><?php echo htmlspecialchars($option); ?></label>
            </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </div>
    <?php if(!(empty($form_group['tips']) || (($form_group['tips'] instanceof \think\Collection || $form_group['tips'] instanceof \think\Paginator ) && $form_group['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form_group['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
            <?php break; case "date": ?>
                
                <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form_group['required']) || (($form_group['required'] instanceof \think\Collection || $form_group['required'] instanceof \think\Paginator ) && $form_group['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form_group['name']); ?>"><?php echo htmlentities(htmlspecialchars($form_group['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <div class="input-group date" id="reservationdate_<?php echo htmlentities($form_group['name']); ?>"
             data-date-format="<?php echo htmlentities(convert_php_to_moment_format($form_group['format'])); ?>" data-target-input="nearest">
            <input class="form-control" type="text" id="<?php echo htmlentities($form_group['name']); ?>" name="<?php echo htmlentities($form_group['name']); ?>"
                   value="<?php echo htmlentities((isset($form_group['value']) && ($form_group['value'] !== '')?$form_group['value']:'')); ?>" placeholder="<?php echo htmlentities($form_group['placeholder']); ?>"
                   autocomplete="off" <?php echo $form_group['extra_attr']; ?>>
            <div class="input-group-append" data-target="#reservationdate_<?php echo htmlentities($form_group['name']); ?>"
                 data-toggle="datetimepicker">
                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
            </div>
        </div>
    </div>
    <?php if(!(empty($form_group['tips']) || (($form_group['tips'] instanceof \think\Collection || $form_group['tips'] instanceof \think\Paginator ) && $form_group['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form_group['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
<script>
    $(function () {
        $('#reservationdate_<?php echo htmlentities($form_group['name']); ?>').datetimepicker();
    })
</script>
            <?php break; case "time": ?>
                
                <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form_group['required']) || (($form_group['required'] instanceof \think\Collection || $form_group['required'] instanceof \think\Paginator ) && $form_group['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form_group['name']); ?>"><?php echo htmlentities(htmlspecialchars($form_group['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <div class="input-group date" id="timepicker_<?php echo htmlentities($form_group['name']); ?>"
             data-date-format="<?php echo htmlentities(convert_php_to_moment_format($form_group['format'])); ?>" data-target-input="nearest">
            <input class="form-control datetimepicker-input" type="text" id="<?php echo htmlentities($form_group['name']); ?>"
                   name="<?php echo htmlentities($form_group['name']); ?>" value="<?php echo htmlentities((isset($form_group['value']) && ($form_group['value'] !== '')?$form_group['value']:'')); ?>"
                   placeholder="<?php echo htmlentities($form_group['placeholder']); ?>" autocomplete="off" data-target="#timepicker_<?php echo htmlentities($form_group['name']); ?>" <?php echo $form_group['extra_attr']; ?>>
            <div class="input-group-append" data-target="#timepicker_<?php echo htmlentities($form_group['name']); ?>" data-toggle="datetimepicker">
                <div class="input-group-text"><i class="far fa-clock"></i></div>
            </div>
        </div>
    </div>
    <?php if(!(empty($form_group['tips']) || (($form_group['tips'] instanceof \think\Collection || $form_group['tips'] instanceof \think\Paginator ) && $form_group['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form_group['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
<script>
    $(function () {
        $('#timepicker_<?php echo htmlentities($form_group['name']); ?>').datetimepicker()
    })
</script>
            <?php break; case "datetime": ?>
                
                <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form_group['required']) || (($form_group['required'] instanceof \think\Collection || $form_group['required'] instanceof \think\Paginator ) && $form_group['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form_group['name']); ?>"><?php echo htmlentities(htmlspecialchars($form_group['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <div class="input-group date" id="reservationdate_<?php echo htmlentities($form_group['name']); ?>"
             data-date-format="<?php echo htmlentities(convert_php_to_moment_format($form_group['format'])); ?>" data-target-input="nearest">
            <input class="form-control datetimepicker-input" type="text" id="<?php echo htmlentities($form_group['name']); ?>" name="<?php echo htmlentities($form_group['name']); ?>"
                   value="<?php echo htmlentities((isset($form_group['value']) && ($form_group['value'] !== '')?$form_group['value']:'')); ?>" placeholder="<?php echo htmlentities($form_group['placeholder']); ?>"
                   autocomplete="off" data-target="#reservationdate_<?php echo htmlentities($form_group['name']); ?>" <?php echo $form_group['extra_attr']; ?>>
            <div class="input-group-append" data-target="#reservationdate_<?php echo htmlentities($form_group['name']); ?>"
                 data-toggle="datetimepicker">
                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
            </div>
        </div>
    </div>
    <?php if(!(empty($form_group['tips']) || (($form_group['tips'] instanceof \think\Collection || $form_group['tips'] instanceof \think\Paginator ) && $form_group['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form_group['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>

<script>
    $(function () {
        $('#reservationdate_<?php echo htmlentities($form_group['name']); ?>').datetimepicker({icons: {time: 'far fa-clock'}});
    })
</script>
            <?php break; case "daterange": ?>
                
                <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form_group['required']) || (($form_group['required'] instanceof \think\Collection || $form_group['required'] instanceof \think\Paginator ) && $form_group['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form_group['name']); ?>"><?php echo htmlentities(htmlspecialchars($form_group['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <div class="input-group">
            <input class="form-control" type="text" id="<?php echo htmlentities($form_group['name']); ?>" name="<?php echo htmlentities($form_group['name']); ?>"
                   value="<?php echo htmlentities((isset($form_group['value']) && ($form_group['value'] !== '')?$form_group['value']:'')); ?>" placeholder="<?php echo htmlentities($form_group['placeholder']); ?>"
                   autocomplete="off" <?php echo $form_group['extra_attr']; ?>>
            <div class="input-group-append">
                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
            </div>
        </div>
    </div>
    <?php if(!(empty($form_group['tips']) || (($form_group['tips'] instanceof \think\Collection || $form_group['tips'] instanceof \think\Paginator ) && $form_group['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form_group['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>

<script>
    $(function () {
        $('#<?php echo htmlentities($form_group['name']); ?>').daterangepicker({
            showDropdowns: true,     // 年月份下拉框
            timePicker: true,        // 显示时间
            timePicker24Hour: true,  // 时间制
            timePickerSeconds: true, // 时间显示到秒
            ranges: {
                '今天': [moment(), moment()],
                '昨天': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                '上周': [moment().subtract(6, 'days'), moment()],
                '前30天': [moment().subtract(29, 'days'), moment()],
                '本月': [moment().startOf('month'), moment().endOf('month')],
                '上月': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            },
            //timePicker: true,
            //timePickerIncrement: 30,
            locale: {
                format: '<?php echo htmlentities(convert_php_to_moment_format($form_group['format'])); ?>',
                applyLabel: '确定',       // 确定按钮文本
                cancelLabel: '取消',      // 取消按钮文本
                customRangeLabel: '自定义',
            }
        });
    })
</script>


            <?php break; case "tags": ?>
                
                <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form_group['required']) || (($form_group['required'] instanceof \think\Collection || $form_group['required'] instanceof \think\Paginator ) && $form_group['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form_group['name']); ?>"><?php echo htmlentities(htmlspecialchars($form_group['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <input class="form-control tags" type="text" id="<?php echo htmlentities($form_group['name']); ?>" name="<?php echo htmlentities($form_group['name']); ?>" value="<?php echo htmlentities($form_group['value']); ?>" placeholder="输入后请回车确认" <?php echo $form_group['extra_attr']; ?>>
    </div>
    <?php if(!(empty($form_group['tips']) || (($form_group['tips'] instanceof \think\Collection || $form_group['tips'] instanceof \think\Paginator ) && $form_group['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form_group['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
            <?php break; case "number": ?>
                
                <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form_group['required']) || (($form_group['required'] instanceof \think\Collection || $form_group['required'] instanceof \think\Paginator ) && $form_group['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form_group['name']); ?>"><?php echo htmlentities(htmlspecialchars($form_group['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <input class="form-control" type="number" id="<?php echo htmlentities($form_group['name']); ?>" name="<?php echo htmlentities($form_group['name']); ?>" value="<?php echo htmlentities($form_group['value']); ?>" <?php if(isset($form_group['min']) && $form_group['min'] !== ''): ?>min="<?php echo htmlentities($form_group['min']); ?>"<?php endif; if(isset($form_group['max']) && $form_group['max'] !== ''): ?>max="<?php echo htmlentities($form_group['max']); ?>"<?php endif; if(isset($form_group['step']) && $form_group['step'] !== ''): ?>step="<?php echo htmlentities($form_group['step']); ?>"<?php endif; ?> <?php echo $form_group['extra_attr']; ?>>
    </div>
    <?php if(!(empty($form_group['tips']) || (($form_group['tips'] instanceof \think\Collection || $form_group['tips'] instanceof \think\Paginator ) && $form_group['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form_group['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>


            <?php break; case "password": ?>
                
                <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form_group['required']) || (($form_group['required'] instanceof \think\Collection || $form_group['required'] instanceof \think\Paginator ) && $form_group['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form_group['name']); ?>"><?php echo htmlentities(htmlspecialchars($form_group['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <input class="form-control" type="password" id="<?php echo htmlentities($form_group['name']); ?>" name="<?php echo htmlentities($form_group['name']); ?>" value="" placeholder="<?php echo htmlentities($form_group['placeholder']); ?>" <?php echo $form_group['extra_attr']; ?>>
    </div>
    <?php if(!(empty($form_group['tips']) || (($form_group['tips'] instanceof \think\Collection || $form_group['tips'] instanceof \think\Paginator ) && $form_group['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form_group['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
            <?php break; case "select": ?>
                
                <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form_group['required']) || (($form_group['required'] instanceof \think\Collection || $form_group['required'] instanceof \think\Paginator ) && $form_group['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form_group['name']); ?>"><?php echo htmlentities(htmlspecialchars($form_group['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <select class="form-control" id="<?php echo htmlentities($form_group['name']); ?>" name="<?php echo htmlentities($form_group['name']); ?>" <?php echo htmlentities((isset($form_group['extra_attr']) && ($form_group['extra_attr'] !== '')?$form_group['extra_attr']:'')); ?>>
            <option value=""><?php echo htmlentities($form_group['placeholder']); ?></option>
            <?php if(is_array($form_group['options']) || $form_group['options'] instanceof \think\Collection || $form_group['options'] instanceof \think\Paginator): $i = 0; $__LIST__ = $form_group['options'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;if(is_array($option)): ?>
            <option value="<?php echo htmlentities($key); ?>" <?php if(((string)$form_group['value'] == (string)$key)): ?>selected<?php endif; if($option['disabled'] == 1): ?>disabled<?php endif; ?>><?php echo htmlentities($option['value']); ?></option>
            <?php else: ?>
            <option value="<?php echo htmlentities($key); ?>" <?php if(((string)$form_group['value'] == (string)$key)): ?>selected<?php endif; ?>><?php echo htmlentities($option); ?></option>
            <?php endif; ?>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </select>
    </div>
    <?php if(!(empty($form_group['tips']) || (($form_group['tips'] instanceof \think\Collection || $form_group['tips'] instanceof \think\Paginator ) && $form_group['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form_group['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
            <?php break; case "select2": ?>
                
                <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form_group['required']) || (($form_group['required'] instanceof \think\Collection || $form_group['required'] instanceof \think\Paginator ) && $form_group['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form_group['name']); ?>"><?php echo htmlentities(htmlspecialchars($form_group['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <select class="select2 form-control" id="<?php echo htmlentities($form_group['name']); ?>" name="<?php echo htmlentities($form_group['name']); ?>" data-value="<?php echo htmlentities($form_group['value']); ?>" <?php echo htmlentities((isset($form_group['extra_attr']) && ($form_group['extra_attr'] !== '')?$form_group['extra_attr']:'')); ?>>
            <option value=""><?php echo htmlentities($form_group['placeholder']); ?></option>
            <?php if(is_array($form_group['options']) || $form_group['options'] instanceof \think\Collection || $form_group['options'] instanceof \think\Paginator): $i = 0; $__LIST__ = $form_group['options'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;?>
            <option value="<?php echo htmlentities($key); ?>" <?php if(in_array(($key), is_array($form_group['value'])?$form_group['value']:explode(',',$form_group['value']))): ?>selected<?php endif; ?>><?php echo htmlentities($option); ?></option>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </select>
    </div>
    <?php if(!(empty($form_group['tips']) || (($form_group['tips'] instanceof \think\Collection || $form_group['tips'] instanceof \think\Paginator ) && $form_group['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form_group['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
<script>
    $(function () {
        var option = {};
        <?php if(!$form_group['options']): ?>
        if('<?php echo htmlentities($form_group['ajax_url']); ?>' !== ''){
            // 启用ajax分页查询
            option = {
                language: "zh-CN",
                //allowClear: true,
                ajax: {
                    delay: 250, // 限速请求
                    url: "<?php echo htmlentities($form_group['ajax_url']); ?>",   //  请求地址
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
                            data.data.unshift({id: '', name: "", text: "<?php echo htmlentities($form_group['placeholder']); ?>"});
                        }
                        return {
                            results: data.data,
                            pagination: {
                                //more: (params.page) < data.paginator.totalPages
                                more: (params.page) < data.last_page
                            }
                        };
                    },
                    cache: true
                }
            };
            // 默认值设置
            var defaultValue = $('#<?php echo htmlentities($form_group['name']); ?>').data("value");
            if (defaultValue) {
                $.ajax({
                    type: "POST",
                    url: "<?php echo htmlentities($form_group['ajax_url']); ?>",
                    data: {value:defaultValue},
                    dataType: "json",
                    success: function(data){
                        $('#<?php echo htmlentities($form_group['name']); ?>').append("<option selected value='" + data.key + "'>" + data.value + "</option>");
                    }
                });
            }
        }
        <?php endif; ?>
        $('#<?php echo htmlentities($form_group['name']); ?>').select2(option);
    })
</script>

            <?php break; case "linkage": 
    // 获取一级联动数据
    $levelOne  = getLinkageData($form_group['model'], 0, $form_group['pid']);
    $levelKey  = [];
    $levelData = [];

    // 默认值
    if ($form_group['value'] != '') {
        $levelKeyData = getLinkageAllData($form_group['model'], $form_group['value'], $form_group['key'], $form_group['option'], $form_group['pid']);
        $levelKey = $levelKeyData['key'];
        $levelData = $levelKeyData['data'];
        sort($levelKey); // 升序排序
        $levelData = array_reverse($levelData); // 以相反的元素顺序返回数组
    }
 ?>
<div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form_group['required']) || (($form_group['required'] instanceof \think\Collection || $form_group['required'] instanceof \think\Paginator ) && $form_group['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form_group['name']); ?>"><?php echo htmlentities(htmlspecialchars($form_group['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-8 col-xl-7">
        <select class="form-control js_linkage" data-model="<?php echo htmlentities($form_group['model']); ?>" data-key="<?php echo htmlentities($form_group['key']); ?>" data-key_value="<?php echo htmlentities($form_group['option']); ?>" data-pid_field_name="<?php echo htmlentities((isset($form_group['pid']) && ($form_group['pid'] !== '')?$form_group['pid']:'pid')); ?>" data-next_level_id="<?php echo htmlentities($form_group['name']); ?>_2" id="<?php echo htmlentities($form_group['name']); ?>_1" name="<?php echo htmlentities($form_group['name']); if($form_group['level'] > '1'): ?>_1<?php endif; ?>" data-placeholder="<?php echo htmlentities($form_group['placeholder']); ?>" <?php echo htmlentities((isset($form_group['extra_attr']) && ($form_group['extra_attr'] !== '')?$form_group['extra_attr']:'')); ?> data-ajax_url="<?php echo htmlentities($form_group['ajax_url']); ?>" style="width: auto; display: inline-block">
            <option value=""><?php echo htmlentities($form_group['placeholder']); ?></option>
            <?php if(is_array($levelOne) || $levelOne instanceof \think\Collection || $levelOne instanceof \think\Paginator): $i = 0; $__LIST__ = $levelOne;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;if($form_group['level'] == '1'): ?>
                <option value="<?php echo htmlentities($option[$form_group['key']]); ?>" <?php if(($form_group['value'] == (string)$option[$form_group['key']])): ?>selected<?php endif; ?>><?php echo $option[$form_group['option']]; ?></option>
            <?php else: ?>
                <option value="<?php echo htmlentities($option[$form_group['key']]); ?>" <?php if((isset($levelKey[1]) && $levelKey[1] == (string)$option[$form_group['key']])): ?>selected<?php endif; ?>><?php echo $option[$form_group['option']]; ?></option>
            <?php endif; ?>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </select>
        <?php if($form_group['level'] == '2'): ?>
        <select class="form-control" id="<?php echo htmlentities($form_group['name']); ?>_2" name="<?php echo htmlentities($form_group['name']); ?>" data-placeholder="<?php echo htmlentities($form_group['placeholder']); ?>" <?php echo htmlentities((isset($form_group['extra_attr']) && ($form_group['extra_attr'] !== '')?$form_group['extra_attr']:'')); ?> style="width: auto; display: inline-block">
            <option value=""><?php echo htmlentities($form_group['placeholder']); ?></option>
            <?php if(!(empty($levelData['1']) || (($levelData['1'] instanceof \think\Collection || $levelData['1'] instanceof \think\Paginator ) && $levelData['1']->isEmpty()))): if(is_array($levelData['1']) || $levelData['1'] instanceof \think\Collection || $levelData['1'] instanceof \think\Paginator): $i = 0; $__LIST__ = $levelData['1'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;?>
            <option value="<?php echo htmlentities($option[$form_group['key']]); ?>" <?php if(($form_group['value'] == (string)$option[$form_group['key']])): ?>selected<?php endif; ?>><?php echo $option[$form_group['option']]; ?></option>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            <?php endif; ?>
        </select>
        <?php endif; if($form_group['level'] == '3'): ?>
        <select class="form-control js_linkage" data-model="<?php echo htmlentities($form_group['model']); ?>" data-key="<?php echo htmlentities($form_group['key']); ?>" data-key_value="<?php echo htmlentities($form_group['option']); ?>" data-pid_field_name="<?php echo htmlentities((isset($form_group['pid']) && ($form_group['pid'] !== '')?$form_group['pid']:'pid')); ?>" data-next_level_id="<?php echo htmlentities($form_group['name']); ?>_3" id="<?php echo htmlentities($form_group['name']); ?>_2" name="<?php echo htmlentities($form_group['name']); ?>_2" data-placeholder="<?php echo htmlentities($form_group['placeholder']); ?>" <?php echo htmlentities((isset($form_group['extra_attr']) && ($form_group['extra_attr'] !== '')?$form_group['extra_attr']:'')); ?> data-ajax_url="<?php echo htmlentities($form_group['ajax_url']); ?>" style="width: auto; display: inline-block">
            <option value=""><?php echo htmlentities($form_group['placeholder']); ?></option>
            <?php if(!(empty($levelData['1']) || (($levelData['1'] instanceof \think\Collection || $levelData['1'] instanceof \think\Paginator ) && $levelData['1']->isEmpty()))): if(is_array($levelData['1']) || $levelData['1'] instanceof \think\Collection || $levelData['1'] instanceof \think\Paginator): $i = 0; $__LIST__ = $levelData['1'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;?>
            <option value="<?php echo htmlentities($option[$form_group['key']]); ?>" <?php if((isset($levelKey[2]) && $levelKey[2] == (string)$option[$form_group['key']])): ?>selected<?php endif; ?>><?php echo $option[$form_group['option']]; ?></option>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            <?php endif; ?>
        </select>
        <select class="form-control" id="<?php echo htmlentities($form_group['name']); ?>_3" name="<?php echo htmlentities($form_group['name']); ?>" data-placeholder="<?php echo htmlentities($form_group['placeholder']); ?>" <?php echo htmlentities((isset($form_group['extra_attr']) && ($form_group['extra_attr'] !== '')?$form_group['extra_attr']:'')); ?> style="width: auto; display: inline-block">
            <option value=""><?php echo htmlentities($form_group['placeholder']); ?></option>
            <?php if(!(empty($levelData['2']) || (($levelData['2'] instanceof \think\Collection || $levelData['2'] instanceof \think\Paginator ) && $levelData['2']->isEmpty()))): if(is_array($levelData['2']) || $levelData['2'] instanceof \think\Collection || $levelData['2'] instanceof \think\Paginator): $i = 0; $__LIST__ = $levelData['2'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;?>
            <option value="<?php echo htmlentities($option[$form_group['key']]); ?>" <?php if(($form_group['value'] == (string)$option[$form_group['key']])): ?>selected<?php endif; ?>><?php echo $option[$form_group['option']]; ?></option>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            <?php endif; ?>
        </select>
        <?php endif; ?>
    </div>
    <?php if(!(empty($form_group['tips']) || (($form_group['tips'] instanceof \think\Collection || $form_group['tips'] instanceof \think\Paginator ) && $form_group['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-2 col-xl-4 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form_group['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
            <?php break; case "image": ?>
                
                <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form_group['required']) || (($form_group['required'] instanceof \think\Collection || $form_group['required'] instanceof \think\Paginator ) && $form_group['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form_group['name']); ?>"><?php echo htmlentities(htmlspecialchars($form_group['title'])); ?></label>
    <div class="col-9 col-sm-6 col-md-6 col-lg-6 col-xl-4">
        <input class="form-control" type="text" id="<?php echo htmlentities($form_group['name']); ?>" name="<?php echo htmlentities($form_group['name']); ?>" value="<?php echo htmlentities($form_group['value']); ?>" placeholder="<?php echo htmlentities($form_group['placeholder']); ?>" <?php echo $form_group['extra_attr']; ?>>
    </div>
    <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-7 dd_ts dd_ts_img">
        <!--上传图片-->
        <!--用来存放item-->
        <div id="fileList_<?php echo htmlentities($form_group['name']); ?>" class="uploader-list"></div>
        <div id="filePicker_<?php echo htmlentities($form_group['name']); ?>"><i class="fa fa-upload m-r-10"></i>选择图片</div>
        <a href="<?php echo !empty($form_group['value']) ? htmlentities($form_group['value']) : '/static/admin/images/nopic.png'; ?>" target="_blank">
            <img class="image_preview_info"
                 src="<?php echo !empty($form_group['value']) ? htmlentities($form_group['value']) : '/static/admin/images/nopic.png'; ?>"
                 id="<?php echo htmlentities($form_group['name']); ?>_preview">
        </a>
        <!--上传图片-->
        <?php if(!(empty($form_group['tips']) || (($form_group['tips'] instanceof \think\Collection || $form_group['tips'] instanceof \think\Paginator ) && $form_group['tips']->isEmpty()))): ?>
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form_group['tips']; ?>
        </small>
        <?php endif; ?>
    </div>
</div>
<script type="text/javascript">
    webupload('fileList_<?php echo htmlentities($form_group['name']); ?>', 'filePicker_<?php echo htmlentities($form_group['name']); ?>', '<?php echo htmlentities($form_group['name']); ?>_preview', '<?php echo htmlentities($form_group['name']); ?>', false, '<?php echo htmlentities((isset($system['upload_image_ext']) && ($system['upload_image_ext'] !== '')?$system['upload_image_ext']:"")); ?>', '<?php echo htmlentities((isset($system['upload_image_size']) && ($system['upload_image_size'] !== '')?$system['upload_image_size']:"0")); ?>');
</script>


            <?php break; case "images": ?>
                
                <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
<!-- ZTX-004  by 折腾侠-->
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form_group['required']) || (($form_group['required'] instanceof \think\Collection || $form_group['required'] instanceof \think\Paginator ) && $form_group['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form_group['name']); ?>"><?php echo htmlentities(htmlspecialchars($form_group['title'])); ?></label>
	
	<div class="col-12 col-sm-7 col-md-7 col-lg-7 col-xl-4" >
	<!-- ZTX-004  by 折腾侠-->
        <div class="more_images dd_ts">
            <div id="more_images_<?php echo htmlentities($form_group['name']); ?>">
                <div class="hide">
                    <input type="text" name="<?php echo htmlentities($form_group['name']); ?>[]" value="">
                    <input type="text" name="<?php echo htmlentities($form_group['name']); ?>_title[]" value="">
                    <!-- ZTX-增加缩略图显示 -->
                    <input type="text" name="<?php echo htmlentities($form_group['name']); ?>_small[]" value="">
                    <!-- ZTX-增加缩略图显示 -->
                </div>
                <?php if(!(empty($form_group['value']) || (($form_group['value'] instanceof \think\Collection || $form_group['value'] instanceof \think\Paginator ) && $form_group['value']->isEmpty()))): if(is_array($form_group['value']) || $form_group['value'] instanceof \think\Collection || $form_group['value'] instanceof \think\Paginator): $i = 0; $__LIST__ = $form_group['value'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
				<!-- ZTX-004  by 折腾侠-->
                <div class="row no-gutters">
                    <div class="col-4 col-sm-4">
                        <input type="text" name="<?php echo htmlentities($form_group['name']); ?>[]" value="<?php echo htmlentities($vo['image']); ?>" class="form-control">
                        <!-- ZTX-增加缩略图显示 -->
                        <input type="text" name="<?php echo htmlentities($form_group['name']); ?>_small[]" value="<?php echo isset($vo['small']) ? htmlentities($vo['small']) : ''; ?>" class="hide">
                        <!-- ZTX-增加缩略图显示 -->
                    </div>
                    <div class="col-3 col-sm-3">
                        <input type="text" name="<?php echo htmlentities($form_group['name']); ?>_title[]" value="<?php echo htmlentities($vo['title']); ?>" class="form-control input-sm">
                    </div>
                    <div class="col-4 col-sm-3">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default btn-sm move_up_images">
                                <i class="fa fa-chevron-up"></i>
                            </button>
                            <button type="button" class="btn btn-default btn-sm move_down_images">
                                <i class="fa fa-chevron-down"></i>
                            </button>
                            <button type="button" class="btn btn-default btn-sm remove_images">
                                <i class="fa fa-times"></i>
                            </button>
							
                        </div>
                    </div>
					
					 <div class="col-4 col-sm-2"><a href="<?php echo htmlentities($vo['image']); ?>" target="_blank"> <img class="image_preview_info" src="<?php echo !empty($vo['small']) ? htmlentities($vo['small']) : htmlentities($vo['image']); ?>"  ></a></div>
                </div>
				<!-- ZTX-004  by 折腾侠-->
                <?php endforeach; endif; else: echo "" ;endif; ?>
                <?php endif; ?>
            </div>
			
			
        </div>
		<!-- ZTX-005  by 折腾侠-->
		<div class="row no-gutters">
		 <div class="col-4 col-sm-12">
			<input class="form-control" type="text" id="img" name="site_img_choose" value="" placeholder="从站内选择图片，输入搜索关键词" >
		</div>
		
		
		</div>
		
		
		<!-- ZTX-005  by 折腾侠-->
    </div>
	<!-- ZTX-004  by 折腾侠-->
    <div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-7 dd_ts dd_ts_img">
	<!-- ZTX-004  by 折腾侠-->
        <!--上传图片-->
        <!--用来存放item-->
        <div id="fileList_<?php echo htmlentities($form_group['name']); ?>" class="uploader-list"></div>
        <div id="filePicker_<?php echo htmlentities($form_group['name']); ?>"><i class="fa fa-upload m-r-10"></i>上传图片</div>
		
	
		
		
        <!--上传图片-->
        <?php if(!(empty($form_group['tips']) || (($form_group['tips'] instanceof \think\Collection || $form_group['tips'] instanceof \think\Paginator ) && $form_group['tips']->isEmpty()))): ?>
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form_group['tips']; ?>
        </small>
        <?php endif; ?>
    </div>
</div>
<script type="text/javascript">
    webupload('fileList_<?php echo htmlentities($form_group['name']); ?>', 'filePicker_<?php echo htmlentities($form_group['name']); ?>', '<?php echo htmlentities($form_group['name']); ?>_preview', '<?php echo htmlentities($form_group['name']); ?>', true, '<?php echo htmlentities((isset($system['upload_image_ext']) && ($system['upload_image_ext'] !== '')?$system['upload_image_ext']:"")); ?>', '<?php echo htmlentities((isset($system['upload_image_size']) && ($system['upload_image_size'] !== '')?$system['upload_image_size']:"0")); ?>');
</script>
            <?php break; case "file": ?>
                
                <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form_group['required']) || (($form_group['required'] instanceof \think\Collection || $form_group['required'] instanceof \think\Paginator ) && $form_group['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form_group['name']); ?>"><?php echo htmlentities(htmlspecialchars($form_group['title'])); ?></label>
    <div class="col-9 col-sm-6 col-md-6 col-lg-6 col-xl-4">
        <input class="form-control" type="text" id="<?php echo htmlentities($form_group['name']); ?>" name="<?php echo htmlentities($form_group['name']); ?>" value="<?php echo htmlentities($form_group['value']); ?>" placeholder="<?php echo htmlentities($form_group['placeholder']); ?>" <?php echo $form_group['extra_attr']; ?>>
    </div>
    <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-7 dd_ts dd_ts_img">
        <!--上传图片-->
        <!--用来存放item-->
        <div id="fileList_<?php echo htmlentities($form_group['name']); ?>" class="uploader-list"></div>
        <div id="filePicker_<?php echo htmlentities($form_group['name']); ?>"><i class="fa fa-upload m-r-10"></i>选择文件</div>
        <!--上传图片-->
        <?php if(!(empty($form_group['tips']) || (($form_group['tips'] instanceof \think\Collection || $form_group['tips'] instanceof \think\Paginator ) && $form_group['tips']->isEmpty()))): ?>
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form_group['tips']; ?>
        </small>
        <?php endif; ?>
    </div>
</div>
<script type="text/javascript">
    webupload('fileList_<?php echo htmlentities($form_group['name']); ?>', 'filePicker_<?php echo htmlentities($form_group['name']); ?>', '<?php echo htmlentities($form_group['name']); ?>_preview', '<?php echo htmlentities($form_group['name']); ?>', false, '<?php echo htmlentities((isset($system['upload_file_ext']) && ($system['upload_file_ext'] !== '')?$system['upload_file_ext']:"")); ?>', '<?php echo htmlentities((isset($system['upload_file_size']) && ($system['upload_file_size'] !== '')?$system['upload_file_size']:"0")); ?>', 'file');
</script>


            <?php break; case "files": ?>
                
                <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form_group['required']) || (($form_group['required'] instanceof \think\Collection || $form_group['required'] instanceof \think\Paginator ) && $form_group['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form_group['name']); ?>"><?php echo htmlentities(htmlspecialchars($form_group['title'])); ?></label>
    <div class="col-9 col-sm-7 col-md-7 col-lg-7 col-xl-4">
        <div class="more_images dd_ts">
            <div id="more_images_<?php echo htmlentities($form_group['name']); ?>">
                <div class="hide">
                    <input type="text" name="<?php echo htmlentities($form_group['name']); ?>[]" value="">
                    <input type="text" name="<?php echo htmlentities($form_group['name']); ?>_title[]" value="">
                </div>
                <?php if(!(empty($form_group['value']) || (($form_group['value'] instanceof \think\Collection || $form_group['value'] instanceof \think\Paginator ) && $form_group['value']->isEmpty()))): if(is_array($form_group['value']) || $form_group['value'] instanceof \think\Collection || $form_group['value'] instanceof \think\Paginator): $i = 0; $__LIST__ = $form_group['value'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <!-- ZTX-002  by 折腾侠删除原有代码，改为跟图片显示容器一样的代码-->
                <div class="row no-gutters">
                    <div class="col-4 col-sm-6">
                        <input type="text" name="<?php echo htmlentities($form_group['name']); ?>[]" value="<?php echo htmlentities($vo['image']); ?>" class="form-control">
                    </div>
                    <div class="col-3 col-sm-3">
                        <input type="text" name="<?php echo htmlentities($form_group['name']); ?>_title[]" value="<?php echo htmlentities($vo['title']); ?>" class="form-control input-sm">
                    </div>
                    <div class="col-4 col-sm-3">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default btn-sm move_up_images">
                                <i class="fa fa-chevron-up"></i>
                            </button>
                            <button type="button" class="btn btn-default btn-sm move_down_images">
                                <i class="fa fa-chevron-down"></i>
                            </button>
                            <button type="button" class="btn btn-default btn-sm remove_images">
                                <i class="fa fa-times"></i>
                            </button>
							
                        </div>
                    </div>
					 </div>
					
				<!-- ZTX-002  by 折腾侠 删除原有代码，改为跟图片显示容器一样的代码-->
                <?php endforeach; endif; else: echo "" ;endif; ?>
                <?php endif; ?>
            </div>
        </div>
		<!-- ZTX-005  by 折腾侠-->
		<div class="row no-gutters">
		 <div class="col-4 col-sm-12">
			<input class="form-control" type="text" id="file" name="site_file_choose" value="" placeholder="从站内选择文件，输入搜索关键词" >
		</div>
		
		
		</div>
		
		
		<!-- ZTX-005  by 折腾侠-->
    </div>
    <div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-7 dd_ts dd_ts_img">
        <!--上传图片-->
        <!--用来存放item-->
        <div id="fileList_<?php echo htmlentities($form_group['name']); ?>" class="uploader-list"></div>
        <div id="filePicker_<?php echo htmlentities($form_group['name']); ?>"><i class="fa fa-upload m-r-10"></i>选择文件</div>
        <!--上传图片-->
        <?php if(!(empty($form_group['tips']) || (($form_group['tips'] instanceof \think\Collection || $form_group['tips'] instanceof \think\Paginator ) && $form_group['tips']->isEmpty()))): ?>
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form_group['tips']; ?>
        </small>
        <?php endif; ?>
    </div>
</div>
<script type="text/javascript">
    webupload('fileList_<?php echo htmlentities($form_group['name']); ?>', 'filePicker_<?php echo htmlentities($form_group['name']); ?>', '<?php echo htmlentities($form_group['name']); ?>_preview', '<?php echo htmlentities($form_group['name']); ?>', true, '<?php echo htmlentities((isset($system['upload_file_ext']) && ($system['upload_file_ext'] !== '')?$system['upload_file_ext']:"")); ?>', '<?php echo htmlentities((isset($system['upload_file_size']) && ($system['upload_file_size'] !== '')?$system['upload_file_size']:"0")); ?>', 'file');
</script>
            <?php break; case "editor": ?>
                
                <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form_group['required']) || (($form_group['required'] instanceof \think\Collection || $form_group['required'] instanceof \think\Paginator ) && $form_group['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form_group['name']); ?>"><?php echo htmlentities(htmlspecialchars($form_group['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-8 col-xl-7">
        <textarea id="<?php echo htmlentities($form_group['name']); ?>" name="<?php echo htmlentities($form_group['name']); ?>" <?php echo $form_group['extra_attr']; ?> style="width:100%;height: <?php echo htmlentities($form_group['height']); ?>px"><?php echo htmlentities($form_group['value']); ?></textarea>
    </div>
    <?php if(!(empty($form_group['tips']) || (($form_group['tips'] instanceof \think\Collection || $form_group['tips'] instanceof \think\Paginator ) && $form_group['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-2 col-xl-4 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form_group['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
<script>
    <?php if($system['editor'] == '1'): ?>
    UE.delEditor('<?php echo htmlentities($form_group['name']); ?>');
    UE.getEditor('<?php echo htmlentities($form_group['name']); ?>', {
        serverUrl: "<?php echo url('Upload/index',['from'=>'ueditor']); ?>",
    });
    <?php else: ?>
    CKEDITOR.replace('<?php echo htmlentities($form_group['name']); ?>', {height: '<?php echo htmlentities($form_group['height']); ?>px'});
    <?php endif; ?>
</script>
            <?php break; case "editor": ?>
                
                <div class="row dd_input_group no-gutters" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <div class="form-group">
        <div class="col-12">
            <?php if($form_group['elemtype'] == "button"): ?>
            <button class="btn btn-flat <?php echo htmlentities((isset($form_group['class']) && ($form_group['class'] !== '')?$form_group['class']:'btn-primary')); ?>" id="<?php echo htmlentities((isset($form_group['id']) && ($form_group['id'] !== '')?$form_group['id']:'')); ?>" type="button" <?php echo (isset($form_group['data']) && ($form_group['data'] !== '')?$form_group['data']:''); if(isset($form_group['disabled'])): ?>disabled<?php endif; ?>>
            <i class="<?php echo htmlentities((isset($form_group['icon']) && ($form_group['icon'] !== '')?$form_group['icon']:'')); ?>"></i> <?php echo htmlentities((isset($form_group['title']) && ($form_group['title'] !== '')?$form_group['title']:'')); ?></button>
            <?php else: ?>
            <a class="btn btn-flat <?php echo htmlentities((isset($form_group['class']) && ($form_group['class'] !== '')?$form_group['class']:'btn-primary')); if(isset($form_group['disabled'])): ?> disabled<?php endif; ?>" id="<?php echo htmlentities((isset($form_group['id']) && ($form_group['id'] !== '')?$form_group['id']:'')); ?>" title="<?php echo htmlentities((isset($form_group['title']) && ($form_group['title'] !== '')?$form_group['title']:'')); ?>" target="<?php echo htmlentities((isset($form_group['target']) && ($form_group['target'] !== '')?$form_group['target']:'')); ?>" href="<?php echo htmlentities((isset($form_group['href']) && ($form_group['href'] !== '')?$form_group['href']:'')); ?>" <?php echo (isset($form_group['data']) && ($form_group['data'] !== '')?$form_group['data']:''); ?>><i class="<?php echo htmlentities((isset($form_group['icon']) && ($form_group['icon'] !== '')?$form_group['icon']:'')); ?>"></i> <?php echo htmlentities((isset($form_group['title']) && ($form_group['title'] !== '')?$form_group['title']:'')); ?></a>
            <?php endif; ?>
        </div>
    </div>
</div>
            <?php break; case "hidden": ?>
                
                <div class="row dd_input_group hide <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <div class="form-group">
        <input type="hidden" name="<?php echo htmlentities($form_group['name']); ?>" value="<?php echo htmlentities((isset($form_group['value']) && ($form_group['value'] !== '')?$form_group['value']:'')); ?>" id="<?php echo htmlentities($form_group['name']); ?>" <?php echo (isset($form_group['extra_attr']) && ($form_group['extra_attr'] !== '')?$form_group['extra_attr']:''); ?>>
    </div>
</div>


            <?php break; case "html": ?>
                
                <?php echo $form_group['html']; break; case "color": ?>
                
                <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form_group['required']) || (($form_group['required'] instanceof \think\Collection || $form_group['required'] instanceof \think\Paginator ) && $form_group['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form_group['name']); ?>"><?php echo htmlentities(htmlspecialchars($form_group['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <div class="input-group <?php echo htmlentities($form_group['name']); ?>-colorpicker">
            <input class="form-control" type="text" id="<?php echo htmlentities($form_group['name']); ?>" name="<?php echo htmlentities($form_group['name']); ?>" value="<?php echo htmlentities($form_group['value']); ?>" placeholder="<?php echo htmlentities($form_group['placeholder']); ?>" <?php echo $form_group['extra_attr']; ?>>
            <div class="input-group-append">
                <span class="input-group-text">
                    <i class="fas fa-square" <?php if($form_group['value']): ?>style="color: <?php echo htmlentities($form_group['value']); ?>"<?php endif; ?>></i>
                </span>
            </div>
        </div>
    </div>
    <?php if(!(empty($form_group['tips']) || (($form_group['tips'] instanceof \think\Collection || $form_group['tips'] instanceof \think\Paginator ) && $form_group['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form_group['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
<script>
    $(function () {
        $('.<?php echo htmlentities($form_group['name']); ?>-colorpicker').colorpicker()
        $('.<?php echo htmlentities($form_group['name']); ?>-colorpicker').on('colorpickerChange', function(event) {
            $('.<?php echo htmlentities($form_group['name']); ?>-colorpicker .fa-square').css('color', event.color.toString());
        });
    })
</script>
            <?php break; case "code": ?>
                
                <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form_group['required']) || (($form_group['required'] instanceof \think\Collection || $form_group['required'] instanceof \think\Paginator ) && $form_group['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form_group['name']); ?>"><?php echo htmlentities(htmlspecialchars($form_group['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-8 col-xl-7">
        <textarea id="<?php echo htmlentities($form_group['name']); ?>" name="<?php echo htmlentities($form_group['name']); ?>" <?php echo $form_group['extra_attr']; ?>><?php echo htmlentities($form_group['value']); ?></textarea>
    </div>
    <?php if(!(empty($form_group['tips']) || (($form_group['tips'] instanceof \think\Collection || $form_group['tips'] instanceof \think\Paginator ) && $form_group['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-2 col-xl-4 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form_group['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
<script>
    $(function () {
        // CodeMirror
        var codeEditor = CodeMirror.fromTextArea(document.getElementById("<?php echo htmlentities($form_group['name']); ?>"), {
            mode: "<?php echo htmlentities($form_group['mode']); ?>",     // 编辑器语言
            theme: "<?php echo htmlentities($form_group['theme']); ?>",   // 编辑器主题
            lineNumbers: true,              // 显示行号
            showCursorWhenSelecting: true,  // 文本选中时显示光标
            lineWrapping: true,             // 代码折叠
        });
        codeEditor.setSize('auto',"<?php echo htmlentities($form_group['height']); ?>px");
    })
</script>
            <?php break; default: ?>

        <?php endswitch; ?>
    <?php endforeach; endif; else: echo "" ;endif; ?>
</div>
<?php endforeach; endif; else: echo "" ;endif; ?>
</div>

                        <?php break; case "text": ?>
                            
                            <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form['required']) || (($form['required'] instanceof \think\Collection || $form['required'] instanceof \think\Paginator ) && $form['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form['name']); ?>"><?php echo htmlentities(htmlspecialchars($form['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <?php if(!(empty($form['group']) || (($form['group'] instanceof \think\Collection || $form['group'] instanceof \think\Paginator ) && $form['group']->isEmpty()))): ?>
        <div class="input-group">
            <?php endif; if(!(empty($form['group']['0']) || (($form['group']['0'] instanceof \think\Collection || $form['group']['0'] instanceof \think\Paginator ) && $form['group']['0']->isEmpty()))): ?>
            <div class="input-group-prepend">
                <span class="input-group-text"><?php echo $form['group']['0']; ?></span>
            </div>
            <?php endif; ?>
            <input class="form-control" type="text" id="<?php echo htmlentities($form['name']); ?>" name="<?php echo htmlentities($form['name']); ?>" value="<?php echo htmlentities($form['value']); ?>" placeholder="<?php echo htmlentities($form['placeholder']); ?>" <?php echo $form['extra_attr']; ?>>
            <?php if(!(empty($form['group']['1']) || (($form['group']['1'] instanceof \think\Collection || $form['group']['1'] instanceof \think\Paginator ) && $form['group']['1']->isEmpty()))): ?>
            <div class="input-group-append">
                <span class="input-group-text"><?php echo $form['group']['1']; ?></span>
            </div>
            <?php endif; if(!(empty($form['group']) || (($form['group'] instanceof \think\Collection || $form['group'] instanceof \think\Paginator ) && $form['group']->isEmpty()))): ?>
        </div>
        <?php endif; ?>
    </div>
    <?php if(!(empty($form['tips']) || (($form['tips'] instanceof \think\Collection || $form['tips'] instanceof \think\Paginator ) && $form['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
                        <?php break; case "textarea": ?>
                            
                            <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form['required']) || (($form['required'] instanceof \think\Collection || $form['required'] instanceof \think\Paginator ) && $form['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form['name']); ?>"><?php echo htmlentities(htmlspecialchars($form['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <textarea class="form-control" id="<?php echo htmlentities($form['name']); ?>" name="<?php echo htmlentities($form['name']); ?>" rows="<?php echo htmlentities((isset($form['rows']) && ($form['rows'] !== '')?$form['rows']:'3')); ?>" placeholder="<?php echo htmlentities($form['placeholder']); ?>" <?php echo $form['extra_attr']; ?>><?php echo htmlentities($form['value']); ?></textarea>
    </div>
    <?php if(!(empty($form['tips']) || (($form['tips'] instanceof \think\Collection || $form['tips'] instanceof \think\Paginator ) && $form['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
                        <?php break; case "radio": ?>
                            
                            <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form['required']) || (($form['required'] instanceof \think\Collection || $form['required'] instanceof \think\Paginator ) && $form['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form['name']); ?>"><?php echo htmlentities(htmlspecialchars($form['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4 dd_radio_lable_left border-white">
        <?php if(is_array($form['options']) || $form['options'] instanceof \think\Collection || $form['options'] instanceof \think\Paginator): $i = 0; $__LIST__ = $form['options'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;?>
        <div class="icheck-peterriver icheck-inline">
            <input type="radio" name="<?php echo htmlentities($form['name']); ?>" class="dd_radio" id="<?php echo htmlentities($form['name']); ?><?php echo htmlentities($i); ?>" value="<?php echo htmlentities($key); ?>" <?php if($key == (isset($form['value']) && ($form['value'] !== '')?$form['value']:'')): ?>checked<?php endif; ?> <?php echo (isset($form['extra_attr']) && ($form['extra_attr'] !== '')?$form['extra_attr']:''); ?>>
            <label for="<?php echo htmlentities($form['name']); ?><?php echo htmlentities($i); ?>"><?php echo htmlspecialchars($option); ?></label>
        </div>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
    <?php if(!(empty($form['tips']) || (($form['tips'] instanceof \think\Collection || $form['tips'] instanceof \think\Paginator ) && $form['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
                        <?php break; case "checkbox": ?>
                            
                            <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form['required']) || (($form['required'] instanceof \think\Collection || $form['required'] instanceof \think\Paginator ) && $form['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form['name']); ?>"><?php echo htmlentities(htmlspecialchars($form['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <div class="dd_radio_lable_left border-white">
            <input type="hidden" name="<?php echo htmlentities($form['name']); ?>[]" value="">
            <?php if(is_array($form['options']) || $form['options'] instanceof \think\Collection || $form['options'] instanceof \think\Paginator): $i = 0; $__LIST__ = $form['options'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;?>
            <div class="icheck-peterriver icheck-inline">
                <input type="checkbox" name="<?php echo htmlentities($form['name']); ?>[]" class="dd_radio" id="<?php echo htmlentities($form['name']); ?><?php echo htmlentities($i); ?>" value="<?php echo htmlentities($key); ?>" <?php if(in_array(($key), is_array((isset($form['value']) && ($form['value'] !== '')?$form['value']:''))?(isset($form['value']) && ($form['value'] !== '')?$form['value']:''):explode(',',(isset($form['value']) && ($form['value'] !== '')?$form['value']:'')))): ?>checked<?php endif; ?> <?php echo (isset($form['extra_attr']) && ($form['extra_attr'] !== '')?$form['extra_attr']:''); ?>>
                <label for="<?php echo htmlentities($form['name']); ?><?php echo htmlentities($i); ?>"><?php echo htmlspecialchars($option); ?></label>
            </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </div>
    <?php if(!(empty($form['tips']) || (($form['tips'] instanceof \think\Collection || $form['tips'] instanceof \think\Paginator ) && $form['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
                        <?php break; case "date": ?>
                            
                            <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form['required']) || (($form['required'] instanceof \think\Collection || $form['required'] instanceof \think\Paginator ) && $form['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form['name']); ?>"><?php echo htmlentities(htmlspecialchars($form['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <div class="input-group date" id="reservationdate_<?php echo htmlentities($form['name']); ?>"
             data-date-format="<?php echo htmlentities(convert_php_to_moment_format($form['format'])); ?>" data-target-input="nearest">
            <input class="form-control" type="text" id="<?php echo htmlentities($form['name']); ?>" name="<?php echo htmlentities($form['name']); ?>"
                   value="<?php echo htmlentities((isset($form['value']) && ($form['value'] !== '')?$form['value']:'')); ?>" placeholder="<?php echo htmlentities($form['placeholder']); ?>"
                   autocomplete="off" <?php echo $form['extra_attr']; ?>>
            <div class="input-group-append" data-target="#reservationdate_<?php echo htmlentities($form['name']); ?>"
                 data-toggle="datetimepicker">
                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
            </div>
        </div>
    </div>
    <?php if(!(empty($form['tips']) || (($form['tips'] instanceof \think\Collection || $form['tips'] instanceof \think\Paginator ) && $form['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
<script>
    $(function () {
        $('#reservationdate_<?php echo htmlentities($form['name']); ?>').datetimepicker();
    })
</script>
                        <?php break; case "time": ?>
                            
                            <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form['required']) || (($form['required'] instanceof \think\Collection || $form['required'] instanceof \think\Paginator ) && $form['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form['name']); ?>"><?php echo htmlentities(htmlspecialchars($form['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <div class="input-group date" id="timepicker_<?php echo htmlentities($form['name']); ?>"
             data-date-format="<?php echo htmlentities(convert_php_to_moment_format($form['format'])); ?>" data-target-input="nearest">
            <input class="form-control datetimepicker-input" type="text" id="<?php echo htmlentities($form['name']); ?>"
                   name="<?php echo htmlentities($form['name']); ?>" value="<?php echo htmlentities((isset($form['value']) && ($form['value'] !== '')?$form['value']:'')); ?>"
                   placeholder="<?php echo htmlentities($form['placeholder']); ?>" autocomplete="off" data-target="#timepicker_<?php echo htmlentities($form['name']); ?>" <?php echo $form['extra_attr']; ?>>
            <div class="input-group-append" data-target="#timepicker_<?php echo htmlentities($form['name']); ?>" data-toggle="datetimepicker">
                <div class="input-group-text"><i class="far fa-clock"></i></div>
            </div>
        </div>
    </div>
    <?php if(!(empty($form['tips']) || (($form['tips'] instanceof \think\Collection || $form['tips'] instanceof \think\Paginator ) && $form['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
<script>
    $(function () {
        $('#timepicker_<?php echo htmlentities($form['name']); ?>').datetimepicker()
    })
</script>
                        <?php break; case "datetime": ?>
                            
                            <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form['required']) || (($form['required'] instanceof \think\Collection || $form['required'] instanceof \think\Paginator ) && $form['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form['name']); ?>"><?php echo htmlentities(htmlspecialchars($form['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <div class="input-group date" id="reservationdate_<?php echo htmlentities($form['name']); ?>"
             data-date-format="<?php echo htmlentities(convert_php_to_moment_format($form['format'])); ?>" data-target-input="nearest">
            <input class="form-control datetimepicker-input" type="text" id="<?php echo htmlentities($form['name']); ?>" name="<?php echo htmlentities($form['name']); ?>"
                   value="<?php echo htmlentities((isset($form['value']) && ($form['value'] !== '')?$form['value']:'')); ?>" placeholder="<?php echo htmlentities($form['placeholder']); ?>"
                   autocomplete="off" data-target="#reservationdate_<?php echo htmlentities($form['name']); ?>" <?php echo $form['extra_attr']; ?>>
            <div class="input-group-append" data-target="#reservationdate_<?php echo htmlentities($form['name']); ?>"
                 data-toggle="datetimepicker">
                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
            </div>
        </div>
    </div>
    <?php if(!(empty($form['tips']) || (($form['tips'] instanceof \think\Collection || $form['tips'] instanceof \think\Paginator ) && $form['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>

<script>
    $(function () {
        $('#reservationdate_<?php echo htmlentities($form['name']); ?>').datetimepicker({icons: {time: 'far fa-clock'}});
    })
</script>
                        <?php break; case "daterange": ?>
                            
                            <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form['required']) || (($form['required'] instanceof \think\Collection || $form['required'] instanceof \think\Paginator ) && $form['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form['name']); ?>"><?php echo htmlentities(htmlspecialchars($form['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <div class="input-group">
            <input class="form-control" type="text" id="<?php echo htmlentities($form['name']); ?>" name="<?php echo htmlentities($form['name']); ?>"
                   value="<?php echo htmlentities((isset($form['value']) && ($form['value'] !== '')?$form['value']:'')); ?>" placeholder="<?php echo htmlentities($form['placeholder']); ?>"
                   autocomplete="off" <?php echo $form['extra_attr']; ?>>
            <div class="input-group-append">
                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
            </div>
        </div>
    </div>
    <?php if(!(empty($form['tips']) || (($form['tips'] instanceof \think\Collection || $form['tips'] instanceof \think\Paginator ) && $form['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>

<script>
    $(function () {
        $('#<?php echo htmlentities($form['name']); ?>').daterangepicker({
            showDropdowns: true,     // 年月份下拉框
            timePicker: true,        // 显示时间
            timePicker24Hour: true,  // 时间制
            timePickerSeconds: true, // 时间显示到秒
            ranges: {
                '今天': [moment(), moment()],
                '昨天': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                '上周': [moment().subtract(6, 'days'), moment()],
                '前30天': [moment().subtract(29, 'days'), moment()],
                '本月': [moment().startOf('month'), moment().endOf('month')],
                '上月': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            },
            //timePicker: true,
            //timePickerIncrement: 30,
            locale: {
                format: '<?php echo htmlentities(convert_php_to_moment_format($form['format'])); ?>',
                applyLabel: '确定',       // 确定按钮文本
                cancelLabel: '取消',      // 取消按钮文本
                customRangeLabel: '自定义',
            }
        });
    })
</script>


                        <?php break; case "tags": ?>
                            
                            <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form['required']) || (($form['required'] instanceof \think\Collection || $form['required'] instanceof \think\Paginator ) && $form['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form['name']); ?>"><?php echo htmlentities(htmlspecialchars($form['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <input class="form-control tags" type="text" id="<?php echo htmlentities($form['name']); ?>" name="<?php echo htmlentities($form['name']); ?>" value="<?php echo htmlentities($form['value']); ?>" placeholder="输入后请回车确认" <?php echo $form['extra_attr']; ?>>
    </div>
    <?php if(!(empty($form['tips']) || (($form['tips'] instanceof \think\Collection || $form['tips'] instanceof \think\Paginator ) && $form['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
                        <?php break; case "number": ?>
                            
                            <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form['required']) || (($form['required'] instanceof \think\Collection || $form['required'] instanceof \think\Paginator ) && $form['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form['name']); ?>"><?php echo htmlentities(htmlspecialchars($form['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <input class="form-control" type="number" id="<?php echo htmlentities($form['name']); ?>" name="<?php echo htmlentities($form['name']); ?>" value="<?php echo htmlentities($form['value']); ?>" <?php if(isset($form['min']) && $form['min'] !== ''): ?>min="<?php echo htmlentities($form['min']); ?>"<?php endif; if(isset($form['max']) && $form['max'] !== ''): ?>max="<?php echo htmlentities($form['max']); ?>"<?php endif; if(isset($form['step']) && $form['step'] !== ''): ?>step="<?php echo htmlentities($form['step']); ?>"<?php endif; ?> <?php echo $form['extra_attr']; ?>>
    </div>
    <?php if(!(empty($form['tips']) || (($form['tips'] instanceof \think\Collection || $form['tips'] instanceof \think\Paginator ) && $form['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>


                        <?php break; case "password": ?>
                            
                            <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form['required']) || (($form['required'] instanceof \think\Collection || $form['required'] instanceof \think\Paginator ) && $form['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form['name']); ?>"><?php echo htmlentities(htmlspecialchars($form['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <input class="form-control" type="password" id="<?php echo htmlentities($form['name']); ?>" name="<?php echo htmlentities($form['name']); ?>" value="" placeholder="<?php echo htmlentities($form['placeholder']); ?>" <?php echo $form['extra_attr']; ?>>
    </div>
    <?php if(!(empty($form['tips']) || (($form['tips'] instanceof \think\Collection || $form['tips'] instanceof \think\Paginator ) && $form['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
                        <?php break; case "select": ?>
                            
                            <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form['required']) || (($form['required'] instanceof \think\Collection || $form['required'] instanceof \think\Paginator ) && $form['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form['name']); ?>"><?php echo htmlentities(htmlspecialchars($form['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <select class="form-control" id="<?php echo htmlentities($form['name']); ?>" name="<?php echo htmlentities($form['name']); ?>" <?php echo htmlentities((isset($form['extra_attr']) && ($form['extra_attr'] !== '')?$form['extra_attr']:'')); ?>>
            <option value=""><?php echo htmlentities($form['placeholder']); ?></option>
            <?php if(is_array($form['options']) || $form['options'] instanceof \think\Collection || $form['options'] instanceof \think\Paginator): $i = 0; $__LIST__ = $form['options'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;if(is_array($option)): ?>
            <option value="<?php echo htmlentities($key); ?>" <?php if(((string)$form['value'] == (string)$key)): ?>selected<?php endif; if($option['disabled'] == 1): ?>disabled<?php endif; ?>><?php echo htmlentities($option['value']); ?></option>
            <?php else: ?>
            <option value="<?php echo htmlentities($key); ?>" <?php if(((string)$form['value'] == (string)$key)): ?>selected<?php endif; ?>><?php echo htmlentities($option); ?></option>
            <?php endif; ?>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </select>
    </div>
    <?php if(!(empty($form['tips']) || (($form['tips'] instanceof \think\Collection || $form['tips'] instanceof \think\Paginator ) && $form['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
                        <?php break; case "select2": ?>
                            
                            <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form['required']) || (($form['required'] instanceof \think\Collection || $form['required'] instanceof \think\Paginator ) && $form['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form['name']); ?>"><?php echo htmlentities(htmlspecialchars($form['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <select class="select2 form-control" id="<?php echo htmlentities($form['name']); ?>" name="<?php echo htmlentities($form['name']); ?>" data-value="<?php echo htmlentities($form['value']); ?>" <?php echo htmlentities((isset($form['extra_attr']) && ($form['extra_attr'] !== '')?$form['extra_attr']:'')); ?>>
            <option value=""><?php echo htmlentities($form['placeholder']); ?></option>
            <?php if(is_array($form['options']) || $form['options'] instanceof \think\Collection || $form['options'] instanceof \think\Paginator): $i = 0; $__LIST__ = $form['options'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;?>
            <option value="<?php echo htmlentities($key); ?>" <?php if(in_array(($key), is_array($form['value'])?$form['value']:explode(',',$form['value']))): ?>selected<?php endif; ?>><?php echo htmlentities($option); ?></option>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </select>
    </div>
    <?php if(!(empty($form['tips']) || (($form['tips'] instanceof \think\Collection || $form['tips'] instanceof \think\Paginator ) && $form['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
<script>
    $(function () {
        var option = {};
        <?php if(!$form['options']): ?>
        if('<?php echo htmlentities($form['ajax_url']); ?>' !== ''){
            // 启用ajax分页查询
            option = {
                language: "zh-CN",
                //allowClear: true,
                ajax: {
                    delay: 250, // 限速请求
                    url: "<?php echo htmlentities($form['ajax_url']); ?>",   //  请求地址
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
                            data.data.unshift({id: '', name: "", text: "<?php echo htmlentities($form['placeholder']); ?>"});
                        }
                        return {
                            results: data.data,
                            pagination: {
                                //more: (params.page) < data.paginator.totalPages
                                more: (params.page) < data.last_page
                            }
                        };
                    },
                    cache: true
                }
            };
            // 默认值设置
            var defaultValue = $('#<?php echo htmlentities($form['name']); ?>').data("value");
            if (defaultValue) {
                $.ajax({
                    type: "POST",
                    url: "<?php echo htmlentities($form['ajax_url']); ?>",
                    data: {value:defaultValue},
                    dataType: "json",
                    success: function(data){
                        $('#<?php echo htmlentities($form['name']); ?>').append("<option selected value='" + data.key + "'>" + data.value + "</option>");
                    }
                });
            }
        }
        <?php endif; ?>
        $('#<?php echo htmlentities($form['name']); ?>').select2(option);
    })
</script>

                        <?php break; case "image": ?>
                            
                            <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form['required']) || (($form['required'] instanceof \think\Collection || $form['required'] instanceof \think\Paginator ) && $form['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form['name']); ?>"><?php echo htmlentities(htmlspecialchars($form['title'])); ?></label>
    <div class="col-9 col-sm-6 col-md-6 col-lg-6 col-xl-4">
        <input class="form-control" type="text" id="<?php echo htmlentities($form['name']); ?>" name="<?php echo htmlentities($form['name']); ?>" value="<?php echo htmlentities($form['value']); ?>" placeholder="<?php echo htmlentities($form['placeholder']); ?>" <?php echo $form['extra_attr']; ?>>
    </div>
    <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-7 dd_ts dd_ts_img">
        <!--上传图片-->
        <!--用来存放item-->
        <div id="fileList_<?php echo htmlentities($form['name']); ?>" class="uploader-list"></div>
        <div id="filePicker_<?php echo htmlentities($form['name']); ?>"><i class="fa fa-upload m-r-10"></i>选择图片</div>
        <a href="<?php echo !empty($form['value']) ? htmlentities($form['value']) : '/static/admin/images/nopic.png'; ?>" target="_blank">
            <img class="image_preview_info"
                 src="<?php echo !empty($form['value']) ? htmlentities($form['value']) : '/static/admin/images/nopic.png'; ?>"
                 id="<?php echo htmlentities($form['name']); ?>_preview">
        </a>
        <!--上传图片-->
        <?php if(!(empty($form['tips']) || (($form['tips'] instanceof \think\Collection || $form['tips'] instanceof \think\Paginator ) && $form['tips']->isEmpty()))): ?>
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form['tips']; ?>
        </small>
        <?php endif; ?>
    </div>
</div>
<script type="text/javascript">
    webupload('fileList_<?php echo htmlentities($form['name']); ?>', 'filePicker_<?php echo htmlentities($form['name']); ?>', '<?php echo htmlentities($form['name']); ?>_preview', '<?php echo htmlentities($form['name']); ?>', false, '<?php echo htmlentities((isset($system['upload_image_ext']) && ($system['upload_image_ext'] !== '')?$system['upload_image_ext']:"")); ?>', '<?php echo htmlentities((isset($system['upload_image_size']) && ($system['upload_image_size'] !== '')?$system['upload_image_size']:"0")); ?>');
</script>


                        <?php break; case "images": ?>
                            
                            <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
<!-- ZTX-004  by 折腾侠-->
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form['required']) || (($form['required'] instanceof \think\Collection || $form['required'] instanceof \think\Paginator ) && $form['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form['name']); ?>"><?php echo htmlentities(htmlspecialchars($form['title'])); ?></label>
	
	<div class="col-12 col-sm-7 col-md-7 col-lg-7 col-xl-4" >
	<!-- ZTX-004  by 折腾侠-->
        <div class="more_images dd_ts">
            <div id="more_images_<?php echo htmlentities($form['name']); ?>">
                <div class="hide">
                    <input type="text" name="<?php echo htmlentities($form['name']); ?>[]" value="">
                    <input type="text" name="<?php echo htmlentities($form['name']); ?>_title[]" value="">
                    <!-- ZTX-增加缩略图显示 -->
                    <input type="text" name="<?php echo htmlentities($form['name']); ?>_small[]" value="">
                    <!-- ZTX-增加缩略图显示 -->
                </div>
                <?php if(!(empty($form['value']) || (($form['value'] instanceof \think\Collection || $form['value'] instanceof \think\Paginator ) && $form['value']->isEmpty()))): if(is_array($form['value']) || $form['value'] instanceof \think\Collection || $form['value'] instanceof \think\Paginator): $i = 0; $__LIST__ = $form['value'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
				<!-- ZTX-004  by 折腾侠-->
                <div class="row no-gutters">
                    <div class="col-4 col-sm-4">
                        <input type="text" name="<?php echo htmlentities($form['name']); ?>[]" value="<?php echo htmlentities($vo['image']); ?>" class="form-control">
                        <!-- ZTX-增加缩略图显示 -->
                        <input type="text" name="<?php echo htmlentities($form['name']); ?>_small[]" value="<?php echo isset($vo['small']) ? htmlentities($vo['small']) : ''; ?>" class="hide">
                        <!-- ZTX-增加缩略图显示 -->
                    </div>
                    <div class="col-3 col-sm-3">
                        <input type="text" name="<?php echo htmlentities($form['name']); ?>_title[]" value="<?php echo htmlentities($vo['title']); ?>" class="form-control input-sm">
                    </div>
                    <div class="col-4 col-sm-3">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default btn-sm move_up_images">
                                <i class="fa fa-chevron-up"></i>
                            </button>
                            <button type="button" class="btn btn-default btn-sm move_down_images">
                                <i class="fa fa-chevron-down"></i>
                            </button>
                            <button type="button" class="btn btn-default btn-sm remove_images">
                                <i class="fa fa-times"></i>
                            </button>
							
                        </div>
                    </div>
					
					 <div class="col-4 col-sm-2"><a href="<?php echo htmlentities($vo['image']); ?>" target="_blank"> <img class="image_preview_info" src="<?php echo !empty($vo['small']) ? htmlentities($vo['small']) : htmlentities($vo['image']); ?>"  ></a></div>
                </div>
				<!-- ZTX-004  by 折腾侠-->
                <?php endforeach; endif; else: echo "" ;endif; ?>
                <?php endif; ?>
            </div>
			
			
        </div>
		<!-- ZTX-005  by 折腾侠-->
		<div class="row no-gutters">
		 <div class="col-4 col-sm-12">
			<input class="form-control" type="text" id="img" name="site_img_choose" value="" placeholder="从站内选择图片，输入搜索关键词" >
		</div>
		
		
		</div>
		
		
		<!-- ZTX-005  by 折腾侠-->
    </div>
	<!-- ZTX-004  by 折腾侠-->
    <div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-7 dd_ts dd_ts_img">
	<!-- ZTX-004  by 折腾侠-->
        <!--上传图片-->
        <!--用来存放item-->
        <div id="fileList_<?php echo htmlentities($form['name']); ?>" class="uploader-list"></div>
        <div id="filePicker_<?php echo htmlentities($form['name']); ?>"><i class="fa fa-upload m-r-10"></i>上传图片</div>
		
	
		
		
        <!--上传图片-->
        <?php if(!(empty($form['tips']) || (($form['tips'] instanceof \think\Collection || $form['tips'] instanceof \think\Paginator ) && $form['tips']->isEmpty()))): ?>
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form['tips']; ?>
        </small>
        <?php endif; ?>
    </div>
</div>
<script type="text/javascript">
    webupload('fileList_<?php echo htmlentities($form['name']); ?>', 'filePicker_<?php echo htmlentities($form['name']); ?>', '<?php echo htmlentities($form['name']); ?>_preview', '<?php echo htmlentities($form['name']); ?>', true, '<?php echo htmlentities((isset($system['upload_image_ext']) && ($system['upload_image_ext'] !== '')?$system['upload_image_ext']:"")); ?>', '<?php echo htmlentities((isset($system['upload_image_size']) && ($system['upload_image_size'] !== '')?$system['upload_image_size']:"0")); ?>');
</script>
                        <?php break; case "file": ?>
                            
                            <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form['required']) || (($form['required'] instanceof \think\Collection || $form['required'] instanceof \think\Paginator ) && $form['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form['name']); ?>"><?php echo htmlentities(htmlspecialchars($form['title'])); ?></label>
    <div class="col-9 col-sm-6 col-md-6 col-lg-6 col-xl-4">
        <input class="form-control" type="text" id="<?php echo htmlentities($form['name']); ?>" name="<?php echo htmlentities($form['name']); ?>" value="<?php echo htmlentities($form['value']); ?>" placeholder="<?php echo htmlentities($form['placeholder']); ?>" <?php echo $form['extra_attr']; ?>>
    </div>
    <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-7 dd_ts dd_ts_img">
        <!--上传图片-->
        <!--用来存放item-->
        <div id="fileList_<?php echo htmlentities($form['name']); ?>" class="uploader-list"></div>
        <div id="filePicker_<?php echo htmlentities($form['name']); ?>"><i class="fa fa-upload m-r-10"></i>选择文件</div>
        <!--上传图片-->
        <?php if(!(empty($form['tips']) || (($form['tips'] instanceof \think\Collection || $form['tips'] instanceof \think\Paginator ) && $form['tips']->isEmpty()))): ?>
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form['tips']; ?>
        </small>
        <?php endif; ?>
    </div>
</div>
<script type="text/javascript">
    webupload('fileList_<?php echo htmlentities($form['name']); ?>', 'filePicker_<?php echo htmlentities($form['name']); ?>', '<?php echo htmlentities($form['name']); ?>_preview', '<?php echo htmlentities($form['name']); ?>', false, '<?php echo htmlentities((isset($system['upload_file_ext']) && ($system['upload_file_ext'] !== '')?$system['upload_file_ext']:"")); ?>', '<?php echo htmlentities((isset($system['upload_file_size']) && ($system['upload_file_size'] !== '')?$system['upload_file_size']:"0")); ?>', 'file');
</script>


                        <?php break; case "files": ?>
                            
                            <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form['required']) || (($form['required'] instanceof \think\Collection || $form['required'] instanceof \think\Paginator ) && $form['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form['name']); ?>"><?php echo htmlentities(htmlspecialchars($form['title'])); ?></label>
    <div class="col-9 col-sm-7 col-md-7 col-lg-7 col-xl-4">
        <div class="more_images dd_ts">
            <div id="more_images_<?php echo htmlentities($form['name']); ?>">
                <div class="hide">
                    <input type="text" name="<?php echo htmlentities($form['name']); ?>[]" value="">
                    <input type="text" name="<?php echo htmlentities($form['name']); ?>_title[]" value="">
                </div>
                <?php if(!(empty($form['value']) || (($form['value'] instanceof \think\Collection || $form['value'] instanceof \think\Paginator ) && $form['value']->isEmpty()))): if(is_array($form['value']) || $form['value'] instanceof \think\Collection || $form['value'] instanceof \think\Paginator): $i = 0; $__LIST__ = $form['value'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <!-- ZTX-002  by 折腾侠删除原有代码，改为跟图片显示容器一样的代码-->
                <div class="row no-gutters">
                    <div class="col-4 col-sm-6">
                        <input type="text" name="<?php echo htmlentities($form['name']); ?>[]" value="<?php echo htmlentities($vo['image']); ?>" class="form-control">
                    </div>
                    <div class="col-3 col-sm-3">
                        <input type="text" name="<?php echo htmlentities($form['name']); ?>_title[]" value="<?php echo htmlentities($vo['title']); ?>" class="form-control input-sm">
                    </div>
                    <div class="col-4 col-sm-3">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default btn-sm move_up_images">
                                <i class="fa fa-chevron-up"></i>
                            </button>
                            <button type="button" class="btn btn-default btn-sm move_down_images">
                                <i class="fa fa-chevron-down"></i>
                            </button>
                            <button type="button" class="btn btn-default btn-sm remove_images">
                                <i class="fa fa-times"></i>
                            </button>
							
                        </div>
                    </div>
					 </div>
					
				<!-- ZTX-002  by 折腾侠 删除原有代码，改为跟图片显示容器一样的代码-->
                <?php endforeach; endif; else: echo "" ;endif; ?>
                <?php endif; ?>
            </div>
        </div>
		<!-- ZTX-005  by 折腾侠-->
		<div class="row no-gutters">
		 <div class="col-4 col-sm-12">
			<input class="form-control" type="text" id="file" name="site_file_choose" value="" placeholder="从站内选择文件，输入搜索关键词" >
		</div>
		
		
		</div>
		
		
		<!-- ZTX-005  by 折腾侠-->
    </div>
    <div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-7 dd_ts dd_ts_img">
        <!--上传图片-->
        <!--用来存放item-->
        <div id="fileList_<?php echo htmlentities($form['name']); ?>" class="uploader-list"></div>
        <div id="filePicker_<?php echo htmlentities($form['name']); ?>"><i class="fa fa-upload m-r-10"></i>选择文件</div>
        <!--上传图片-->
        <?php if(!(empty($form['tips']) || (($form['tips'] instanceof \think\Collection || $form['tips'] instanceof \think\Paginator ) && $form['tips']->isEmpty()))): ?>
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form['tips']; ?>
        </small>
        <?php endif; ?>
    </div>
</div>
<script type="text/javascript">
    webupload('fileList_<?php echo htmlentities($form['name']); ?>', 'filePicker_<?php echo htmlentities($form['name']); ?>', '<?php echo htmlentities($form['name']); ?>_preview', '<?php echo htmlentities($form['name']); ?>', true, '<?php echo htmlentities((isset($system['upload_file_ext']) && ($system['upload_file_ext'] !== '')?$system['upload_file_ext']:"")); ?>', '<?php echo htmlentities((isset($system['upload_file_size']) && ($system['upload_file_size'] !== '')?$system['upload_file_size']:"0")); ?>', 'file');
</script>
                        <?php break; case "editor": ?>
                            
                            <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form['required']) || (($form['required'] instanceof \think\Collection || $form['required'] instanceof \think\Paginator ) && $form['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form['name']); ?>"><?php echo htmlentities(htmlspecialchars($form['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-8 col-xl-7">
        <textarea id="<?php echo htmlentities($form['name']); ?>" name="<?php echo htmlentities($form['name']); ?>" <?php echo $form['extra_attr']; ?> style="width:100%;height: <?php echo htmlentities($form['height']); ?>px"><?php echo htmlentities($form['value']); ?></textarea>
    </div>
    <?php if(!(empty($form['tips']) || (($form['tips'] instanceof \think\Collection || $form['tips'] instanceof \think\Paginator ) && $form['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-2 col-xl-4 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
<script>
    <?php if($system['editor'] == '1'): ?>
    UE.delEditor('<?php echo htmlentities($form['name']); ?>');
    UE.getEditor('<?php echo htmlentities($form['name']); ?>', {
        serverUrl: "<?php echo url('Upload/index',['from'=>'ueditor']); ?>",
    });
    <?php else: ?>
    CKEDITOR.replace('<?php echo htmlentities($form['name']); ?>', {height: '<?php echo htmlentities($form['height']); ?>px'});
    <?php endif; ?>
</script>
                        <?php break; case "button": ?>
                            
                            <div class="row dd_input_group no-gutters" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <div class="form-group">
        <div class="col-12">
            <?php if($form['elemtype'] == "button"): ?>
            <button class="btn btn-flat <?php echo htmlentities((isset($form['class']) && ($form['class'] !== '')?$form['class']:'btn-primary')); ?>" id="<?php echo htmlentities((isset($form['id']) && ($form['id'] !== '')?$form['id']:'')); ?>" type="button" <?php echo (isset($form['data']) && ($form['data'] !== '')?$form['data']:''); if(isset($form['disabled'])): ?>disabled<?php endif; ?>>
            <i class="<?php echo htmlentities((isset($form['icon']) && ($form['icon'] !== '')?$form['icon']:'')); ?>"></i> <?php echo htmlentities((isset($form['title']) && ($form['title'] !== '')?$form['title']:'')); ?></button>
            <?php else: ?>
            <a class="btn btn-flat <?php echo htmlentities((isset($form['class']) && ($form['class'] !== '')?$form['class']:'btn-primary')); if(isset($form['disabled'])): ?> disabled<?php endif; ?>" id="<?php echo htmlentities((isset($form['id']) && ($form['id'] !== '')?$form['id']:'')); ?>" title="<?php echo htmlentities((isset($form['title']) && ($form['title'] !== '')?$form['title']:'')); ?>" target="<?php echo htmlentities((isset($form['target']) && ($form['target'] !== '')?$form['target']:'')); ?>" href="<?php echo htmlentities((isset($form['href']) && ($form['href'] !== '')?$form['href']:'')); ?>" <?php echo (isset($form['data']) && ($form['data'] !== '')?$form['data']:''); ?>><i class="<?php echo htmlentities((isset($form['icon']) && ($form['icon'] !== '')?$form['icon']:'')); ?>"></i> <?php echo htmlentities((isset($form['title']) && ($form['title'] !== '')?$form['title']:'')); ?></a>
            <?php endif; ?>
        </div>
    </div>
</div>
                        <?php break; case "hidden": ?>
                            
                            <div class="row dd_input_group hide <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <div class="form-group">
        <input type="hidden" name="<?php echo htmlentities($form['name']); ?>" value="<?php echo htmlentities((isset($form['value']) && ($form['value'] !== '')?$form['value']:'')); ?>" id="<?php echo htmlentities($form['name']); ?>" <?php echo (isset($form['extra_attr']) && ($form['extra_attr'] !== '')?$form['extra_attr']:''); ?>>
    </div>
</div>


                        <?php break; case "html": ?>
                            
                            <?php echo $form['html']; break; case "color": ?>
                            
                            <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form['required']) || (($form['required'] instanceof \think\Collection || $form['required'] instanceof \think\Paginator ) && $form['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form['name']); ?>"><?php echo htmlentities(htmlspecialchars($form['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <div class="input-group <?php echo htmlentities($form['name']); ?>-colorpicker">
            <input class="form-control" type="text" id="<?php echo htmlentities($form['name']); ?>" name="<?php echo htmlentities($form['name']); ?>" value="<?php echo htmlentities($form['value']); ?>" placeholder="<?php echo htmlentities($form['placeholder']); ?>" <?php echo $form['extra_attr']; ?>>
            <div class="input-group-append">
                <span class="input-group-text">
                    <i class="fas fa-square" <?php if($form['value']): ?>style="color: <?php echo htmlentities($form['value']); ?>"<?php endif; ?>></i>
                </span>
            </div>
        </div>
    </div>
    <?php if(!(empty($form['tips']) || (($form['tips'] instanceof \think\Collection || $form['tips'] instanceof \think\Paginator ) && $form['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
<script>
    $(function () {
        $('.<?php echo htmlentities($form['name']); ?>-colorpicker').colorpicker()
        $('.<?php echo htmlentities($form['name']); ?>-colorpicker').on('colorpickerChange', function(event) {
            $('.<?php echo htmlentities($form['name']); ?>-colorpicker .fa-square').css('color', event.color.toString());
        });
    })
</script>
                        <?php break; case "code": ?>
                            
                            <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form['required']) || (($form['required'] instanceof \think\Collection || $form['required'] instanceof \think\Paginator ) && $form['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form['name']); ?>"><?php echo htmlentities(htmlspecialchars($form['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-8 col-xl-7">
        <textarea id="<?php echo htmlentities($form['name']); ?>" name="<?php echo htmlentities($form['name']); ?>" <?php echo $form['extra_attr']; ?>><?php echo htmlentities($form['value']); ?></textarea>
    </div>
    <?php if(!(empty($form['tips']) || (($form['tips'] instanceof \think\Collection || $form['tips'] instanceof \think\Paginator ) && $form['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-2 col-xl-4 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
<script>
    $(function () {
        // CodeMirror
        var codeEditor = CodeMirror.fromTextArea(document.getElementById("<?php echo htmlentities($form['name']); ?>"), {
            mode: "<?php echo htmlentities($form['mode']); ?>",     // 编辑器语言
            theme: "<?php echo htmlentities($form['theme']); ?>",   // 编辑器主题
            lineNumbers: true,              // 显示行号
            showCursorWhenSelecting: true,  // 文本选中时显示光标
            lineWrapping: true,             // 代码折叠
        });
        codeEditor.setSize('auto',"<?php echo htmlentities($form['height']); ?>px");
    })
</script>
                        <?php break; case "linkage": 
    // 获取一级联动数据
    $levelOne  = getLinkageData($form['model'], 0, $form['pid']);
    $levelKey  = [];
    $levelData = [];

    // 默认值
    if ($form['value'] != '') {
        $levelKeyData = getLinkageAllData($form['model'], $form['value'], $form['key'], $form['option'], $form['pid']);
        $levelKey = $levelKeyData['key'];
        $levelData = $levelKeyData['data'];
        sort($levelKey); // 升序排序
        $levelData = array_reverse($levelData); // 以相反的元素顺序返回数组
    }
 ?>
<div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form['required']) || (($form['required'] instanceof \think\Collection || $form['required'] instanceof \think\Paginator ) && $form['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form['name']); ?>"><?php echo htmlentities(htmlspecialchars($form['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-8 col-xl-7">
        <select class="form-control js_linkage" data-model="<?php echo htmlentities($form['model']); ?>" data-key="<?php echo htmlentities($form['key']); ?>" data-key_value="<?php echo htmlentities($form['option']); ?>" data-pid_field_name="<?php echo htmlentities((isset($form['pid']) && ($form['pid'] !== '')?$form['pid']:'pid')); ?>" data-next_level_id="<?php echo htmlentities($form['name']); ?>_2" id="<?php echo htmlentities($form['name']); ?>_1" name="<?php echo htmlentities($form['name']); if($form['level'] > '1'): ?>_1<?php endif; ?>" data-placeholder="<?php echo htmlentities($form['placeholder']); ?>" <?php echo htmlentities((isset($form['extra_attr']) && ($form['extra_attr'] !== '')?$form['extra_attr']:'')); ?> data-ajax_url="<?php echo htmlentities($form['ajax_url']); ?>" style="width: auto; display: inline-block">
            <option value=""><?php echo htmlentities($form['placeholder']); ?></option>
            <?php if(is_array($levelOne) || $levelOne instanceof \think\Collection || $levelOne instanceof \think\Paginator): $i = 0; $__LIST__ = $levelOne;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;if($form['level'] == '1'): ?>
                <option value="<?php echo htmlentities($option[$form['key']]); ?>" <?php if(($form['value'] == (string)$option[$form['key']])): ?>selected<?php endif; ?>><?php echo $option[$form['option']]; ?></option>
            <?php else: ?>
                <option value="<?php echo htmlentities($option[$form['key']]); ?>" <?php if((isset($levelKey[1]) && $levelKey[1] == (string)$option[$form['key']])): ?>selected<?php endif; ?>><?php echo $option[$form['option']]; ?></option>
            <?php endif; ?>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </select>
        <?php if($form['level'] == '2'): ?>
        <select class="form-control" id="<?php echo htmlentities($form['name']); ?>_2" name="<?php echo htmlentities($form['name']); ?>" data-placeholder="<?php echo htmlentities($form['placeholder']); ?>" <?php echo htmlentities((isset($form['extra_attr']) && ($form['extra_attr'] !== '')?$form['extra_attr']:'')); ?> style="width: auto; display: inline-block">
            <option value=""><?php echo htmlentities($form['placeholder']); ?></option>
            <?php if(!(empty($levelData['1']) || (($levelData['1'] instanceof \think\Collection || $levelData['1'] instanceof \think\Paginator ) && $levelData['1']->isEmpty()))): if(is_array($levelData['1']) || $levelData['1'] instanceof \think\Collection || $levelData['1'] instanceof \think\Paginator): $i = 0; $__LIST__ = $levelData['1'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;?>
            <option value="<?php echo htmlentities($option[$form['key']]); ?>" <?php if(($form['value'] == (string)$option[$form['key']])): ?>selected<?php endif; ?>><?php echo $option[$form['option']]; ?></option>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            <?php endif; ?>
        </select>
        <?php endif; if($form['level'] == '3'): ?>
        <select class="form-control js_linkage" data-model="<?php echo htmlentities($form['model']); ?>" data-key="<?php echo htmlentities($form['key']); ?>" data-key_value="<?php echo htmlentities($form['option']); ?>" data-pid_field_name="<?php echo htmlentities((isset($form['pid']) && ($form['pid'] !== '')?$form['pid']:'pid')); ?>" data-next_level_id="<?php echo htmlentities($form['name']); ?>_3" id="<?php echo htmlentities($form['name']); ?>_2" name="<?php echo htmlentities($form['name']); ?>_2" data-placeholder="<?php echo htmlentities($form['placeholder']); ?>" <?php echo htmlentities((isset($form['extra_attr']) && ($form['extra_attr'] !== '')?$form['extra_attr']:'')); ?> data-ajax_url="<?php echo htmlentities($form['ajax_url']); ?>" style="width: auto; display: inline-block">
            <option value=""><?php echo htmlentities($form['placeholder']); ?></option>
            <?php if(!(empty($levelData['1']) || (($levelData['1'] instanceof \think\Collection || $levelData['1'] instanceof \think\Paginator ) && $levelData['1']->isEmpty()))): if(is_array($levelData['1']) || $levelData['1'] instanceof \think\Collection || $levelData['1'] instanceof \think\Paginator): $i = 0; $__LIST__ = $levelData['1'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;?>
            <option value="<?php echo htmlentities($option[$form['key']]); ?>" <?php if((isset($levelKey[2]) && $levelKey[2] == (string)$option[$form['key']])): ?>selected<?php endif; ?>><?php echo $option[$form['option']]; ?></option>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            <?php endif; ?>
        </select>
        <select class="form-control" id="<?php echo htmlentities($form['name']); ?>_3" name="<?php echo htmlentities($form['name']); ?>" data-placeholder="<?php echo htmlentities($form['placeholder']); ?>" <?php echo htmlentities((isset($form['extra_attr']) && ($form['extra_attr'] !== '')?$form['extra_attr']:'')); ?> style="width: auto; display: inline-block">
            <option value=""><?php echo htmlentities($form['placeholder']); ?></option>
            <?php if(!(empty($levelData['2']) || (($levelData['2'] instanceof \think\Collection || $levelData['2'] instanceof \think\Paginator ) && $levelData['2']->isEmpty()))): if(is_array($levelData['2']) || $levelData['2'] instanceof \think\Collection || $levelData['2'] instanceof \think\Paginator): $i = 0; $__LIST__ = $levelData['2'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;?>
            <option value="<?php echo htmlentities($option[$form['key']]); ?>" <?php if(($form['value'] == (string)$option[$form['key']])): ?>selected<?php endif; ?>><?php echo $option[$form['option']]; ?></option>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            <?php endif; ?>
        </select>
        <?php endif; ?>
    </div>
    <?php if(!(empty($form['tips']) || (($form['tips'] instanceof \think\Collection || $form['tips'] instanceof \think\Paginator ) && $form['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-2 col-xl-4 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
                        <?php break; default: ?>

                    <?php endswitch; ?>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                    <!---->
                    <div class="row dd_input_group form-builder-submit no-gutters">
                        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-11 offset-sm-2 offset-md-2 offset-lg-2 offset-xl-1">
                            <?php if(isset($btn_hide) && !in_array('submit', $btn_hide)): ?>
                            <button type="submit" class="btn btn-flat btn-primary <?php if($layer == true): ?>hide<?php endif; ?>"><?php echo htmlentities((isset($btn_title['submit']) && ($btn_title['submit'] !== '')?$btn_title['submit']:'提 交')); ?></button>
                            <?php endif; if(isset($btn_hide) && !in_array('back', $btn_hide)): ?>
                            <button type="button" class="btn btn-flat btn-default <?php if($layer == true): ?>hide<?php endif; ?>" onclick="javascript :history.back(-1)"><?php echo htmlentities((isset($btn_title['back']) && ($btn_title['back'] !== '')?$btn_title['back']:'返 回')); ?></button>
                            <?php endif; foreach($btn_extra as $key=>$vo): ?>
                            <?php echo (isset($vo) && ($vo !== '')?$vo:''); ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <!-- /.box -->
                <?php else: ?>
                    <div class="box box-body">
                        <?php echo $empty_tips; ?>
                    </div>
                    <!-- /.box -->
                <?php endif; ?>
            </form>
            <!--底部提示-->
            <?php if(!(empty($page_tips_bottom) || (($page_tips_bottom instanceof \think\Collection || $page_tips_bottom instanceof \think\Paginator ) && $page_tips_bottom->isEmpty()))): ?>
            <div class="col-12 alert alert-<?php echo htmlentities($tips_type); ?> alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <p><?php echo $page_tips_bottom; ?></p>
            </div>
            <?php endif; ?>
            
            <?php echo (isset($extra_html_content_bottom) && ($extra_html_content_bottom !== '')?$extra_html_content_bottom:''); ?>
            
            <?php echo (isset($extra_js) && ($extra_js !== '')?$extra_js:''); ?>
			
	<script>
	
	
	
	
	
	
	// ZTX-002折腾侠：增加从服务器上删除对应文件的操作	
	$(document).on('click', '.remove_images', function () {
var file = $(this).parent().parent().parent().find("input[name='images[]']").val();
var file_type='image';
if(typeof file == "undefined" ){
file = $(this).parent().parent().parent().find("input[name='files_test[]']").val();
file_type='file';
}
var remove = $(this).parent().parent().parent();
	layer.confirm("是否删除原文件",{
	icon: 3,
    title: "系统提示",
    btn: ['是', '否']
	}, function (index) {
	//第一个按钮运行的函数，传递index（当前层）参数
		// 删除服务器上的文件
		if (file=='') {
				remove.remove();
            }
			else{
			 $.ajax({
                    type: "POST",
                    url: "/admin/Index/file_del",
                    data:{file:file,file_type:file_type},
                    dataType: "json",
                    success: function(data){
					 switch (data) {
                    case ("1"):
                       console.log('删除成功');
					   remove.remove();
                        break;
                    case ("0"):
                        console.log('文件不存在');
						remove.remove();
                        break;
                    case ("2"):
                      console.log('删除失败');
                        break;
						default:
						console.log('删除失败,原因不明');
                        break;
								 }}
                    });
			}
	layer.close(index);
	}, function(){
	//第二个按钮运行的函数
		// 仅删除标签
		remove.remove();
	});// 折腾侠：增加从服务器上删除对应文件的操作
  // ZTX-002折腾侠：增加从服务器上删除对应文件的操作	
})

// ZTX-选择图标
$( function() {

    if($('[icon]').length >0 ){
        $( '[icon]' ).autocomplete({
	
    source:function(request, response){
     $.ajax({
                  type: "POST",
                  url: "/admin/Index/autocomplete_icon",
                  data:{key:request.term},
                  dataType: "json",
                  success: function(data){
                  
                      response(data);
                  }
              });
    },
    select: function (event, ui) {    // 下拉框选中事件
          
        $(this).val( ui.item.code);
        return false;
      }
  }).autocomplete( "instance" )._renderItem = function( ul, item ) {
                  return $( "<li>" )
                      .append( '<div class="mb-2"> <i class="'+item.code+'"></i> <span class="align-middle">'+item.code+'  '+item.name+'</span> </div>')
                      .appendTo( ul );
                      };

    }
//ZTX-005从站内选择图片
if($( '[name="site_img_choose"]' ).length >0 ){


    $( '[name="site_img_choose"]' ).autocomplete({
	
      source:function(request, response){
	   $.ajax({
                    type: "POST",
                    url: "/admin/Index/autocomplete_file",
                    data:{where:[['link','like','%'+request.term+'%'],['file_type','like','%img%']]},
                    dataType: "json",
                    success: function(data){
					
                        response(data);
                    }
                });
	  },
	  select: function (event, ui) {    // 下拉框选中事件
            
		 var images = '' +
                    '<div class="row no-gutters">' +
                    '   <div class="col-4 col-sm-4"><input type="text" name="images[]" value="' + ui.item.link + '" class="form-control"/></div>' +
                    '   <div class="col-3 col-sm-3"><input class="form-control input-sm" type="text" name="images_title[]" value="' + ui.item.name + '" ></div>' +
                    '   <div class="col-4 col-sm-3">' +
                    '       <div class="btn-group">' +
                    '           <button type="button" class="btn btn-default btn-sm move_up_images"><i class="fa fa-chevron-up"></i></button>' +
                    '           <button type="button" class="btn btn-default btn-sm move_down_images"><i class="fa fa-chevron-down"></i></button>' +
                    '           <button type="button" class="btn btn-default btn-sm remove_images"><i class="fa fa-times"></i></button>' +
                    '       </div>' +
                    '   </div>' +
					'   <div class="col-4 col-sm-2"><a href="'+ ui.item.link +'" target="_blank"> <img class="images_preview_info" src="'+ ui.item.link +'"  ></a></div>'+
					
					
                    '</div>';
                var images_list = $('#more_images_images').html();

                $('#more_images_images').html(images + images_list);
            return false;
        }
    }).autocomplete( "instance" )._renderItem = function( ul, item ) {
                    return $( "<li>" )
                        .append( '<div><img  width="100" height="100" src="'+item.link+'"><a>' + item.name + '</a></div>')
                        .appendTo( ul );
						};}
						
						//站内文件选择
	if($( '[name="site_file_choose"]' ).length >0 ){
	 $( '[name="site_file_choose"]' ).autocomplete({
	
      source:function(request, response){
	   $.ajax({
                    type: "POST",
                    url: "/admin/Index/autocomplete_file",
                    data:{where:[['link','like','%'+request.term+'%'],['file_type','like','%file%']]},
                    dataType: "json",
                    success: function(data){
					
                        response(data);
                    }
                });
	  },
	  select: function (event, ui) {    // 下拉框选中事件
            
		 var images = '' +
                    '<div class="row no-gutters">' +
                    '   <div class="col-4 col-sm-6"><input type="text" name="images[]" value="' + ui.item.link + '" class="form-control"/></div>' +
                    '   <div class="col-3 col-sm-3"><input class="form-control input-sm" type="text" name="images_title[]" value="' + ui.item.name + '" ></div>' +
                    '   <div class="col-4 col-sm-3">' +
                    '       <div class="btn-group">' +
                    '           <button type="button" class="btn btn-default btn-sm move_up_images"><i class="fa fa-chevron-up"></i></button>' +
                    '           <button type="button" class="btn btn-default btn-sm move_down_images"><i class="fa fa-chevron-down"></i></button>' +
                    '           <button type="button" class="btn btn-default btn-sm remove_images"><i class="fa fa-times"></i></button>' +
                    '       </div>' +
                    '   </div>' +
					
					
					
                    '</div>';
                var images_list = $('#more_images_files_test').html();

                $('#more_images_files_test').html(images + images_list);
            return false;
        }
    }).autocomplete( "instance" )._renderItem = function( ul, item ) {
                    return $( "<li>" )
                        .append( '<div>' + item.name + '</a></div>')
                        .appendTo( ul );
						}
  } });
  
  
  </script>
			
			
        </div>
    </div>
</div>

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
    <div class="container-fluid">
        <div class="row">
            
            <?php echo (isset($extra_html_content_top) && ($extra_html_content_top !== '')?$extra_html_content_top:''); ?>
            <!--顶部提示开始-->
            <?php if(!(empty($page_tips_top) || (($page_tips_top instanceof \think\Collection || $page_tips_top instanceof \think\Paginator ) && $page_tips_top->isEmpty()))): ?>
            <div class="col-12 alert alert-<?php echo htmlentities($tips_type); ?> alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <p><?php echo $page_tips_top; ?></p>
            </div>
            <?php endif; ?>
            <!--顶部提示结束-->
            <?php if($layer == false): if(isset($page_tips_search) OR $show_all): ?>
            <div class="col-12 callout search">
                <form action="" data-pjax-other>
                    <?php if(!(empty($page_tips_search) || (($page_tips_search instanceof \think\Collection || $page_tips_search instanceof \think\Paginator ) && $page_tips_search->isEmpty()))): ?><?php echo $page_tips_search; ?><?php endif; if($show_all): ?>
                    <a class="btn btn-flat btn-primary" href="<?php echo url('index'); ?>"><i class="fa fa-list-ul m-r-10"></i>查看全部</a>
                    <?php endif; ?>
                    <a class="btn btn-flat btn-success f_r" onclick="javascript :history.back(-1)"><i class="fa fa-undo m-r-10"></i>返 回</a>
                </form>
            </div>
            <?php endif; ?>
            <?php endif; ?>
            <!--数据表开始-->
            <form name="form-builder" class="col-12 form_builder" method="<?php echo htmlentities($form_method); ?>" action="<?php echo htmlentities($form_url); ?>"  <?php if(!empty($submit_confirm)) echo 'submit_confirm'; ?> >
                <!---->
                <?php if($form_items): ?>
                    <!---->
                    <?php if(is_array($form_items) || $form_items instanceof \think\Collection || $form_items instanceof \think\Paginator): $i = 0; $__LIST__ = $form_items;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$form): $mod = ($i % 2 );++$i;switch($form['type']): case "group": ?>
                            
                            <ul class="nav nav-tabs" id="builder-form-group-tab" role="tablist">
    <?php if(is_array($form['options']) || $form['options'] instanceof \think\Collection || $form['options'] instanceof \think\Paginator): $items_key = 0; $__LIST__ = $form['options'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($items_key % 2 );++$items_key;?>
    <li class="nav-item">
        <a class="nav-link <?php if($items_key == '1'): ?>active<?php endif; ?>" id="nav-tab-<?php echo htmlentities($items_key); ?>" href="#nav-tab-content-<?php echo htmlentities($items_key); ?>" role="tab" data-toggle="tab"><?php echo htmlentities(htmlspecialchars($key)); ?></a>
    </li>
    <?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
<div class="tab-content no-padding">
    <?php if(is_array($form['options']) || $form['options'] instanceof \think\Collection || $form['options'] instanceof \think\Paginator): $items_key = 0; $__LIST__ = $form['options'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$items): $mod = ($items_key % 2 );++$items_key;?>
    <div class="tab-pane <?php if($items_key == '1'): ?>active<?php endif; ?>" id="nav-tab-content-<?php echo htmlentities($items_key); ?>" >
    <?php if(is_array($items) || $items instanceof \think\Collection || $items instanceof \think\Paginator): $i = 0; $__LIST__ = $items;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$form_group): $mod = ($i % 2 );++$i;switch($form_group['type']): case "text": ?>
                
                <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form_group['required']) || (($form_group['required'] instanceof \think\Collection || $form_group['required'] instanceof \think\Paginator ) && $form_group['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form_group['name']); ?>"><?php echo htmlentities(htmlspecialchars($form_group['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <?php if(!(empty($form_group['group']) || (($form_group['group'] instanceof \think\Collection || $form_group['group'] instanceof \think\Paginator ) && $form_group['group']->isEmpty()))): ?>
        <div class="input-group">
            <?php endif; if(!(empty($form_group['group']['0']) || (($form_group['group']['0'] instanceof \think\Collection || $form_group['group']['0'] instanceof \think\Paginator ) && $form_group['group']['0']->isEmpty()))): ?>
            <div class="input-group-prepend">
                <span class="input-group-text"><?php echo $form_group['group']['0']; ?></span>
            </div>
            <?php endif; ?>
            <input class="form-control" type="text" id="<?php echo htmlentities($form_group['name']); ?>" name="<?php echo htmlentities($form_group['name']); ?>" value="<?php echo htmlentities($form_group['value']); ?>" placeholder="<?php echo htmlentities($form_group['placeholder']); ?>" <?php echo $form_group['extra_attr']; ?>>
            <?php if(!(empty($form_group['group']['1']) || (($form_group['group']['1'] instanceof \think\Collection || $form_group['group']['1'] instanceof \think\Paginator ) && $form_group['group']['1']->isEmpty()))): ?>
            <div class="input-group-append">
                <span class="input-group-text"><?php echo $form_group['group']['1']; ?></span>
            </div>
            <?php endif; if(!(empty($form_group['group']) || (($form_group['group'] instanceof \think\Collection || $form_group['group'] instanceof \think\Paginator ) && $form_group['group']->isEmpty()))): ?>
        </div>
        <?php endif; ?>
    </div>
    <?php if(!(empty($form_group['tips']) || (($form_group['tips'] instanceof \think\Collection || $form_group['tips'] instanceof \think\Paginator ) && $form_group['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form_group['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
            <?php break; case "textarea": ?>
                
                <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form_group['required']) || (($form_group['required'] instanceof \think\Collection || $form_group['required'] instanceof \think\Paginator ) && $form_group['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form_group['name']); ?>"><?php echo htmlentities(htmlspecialchars($form_group['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <textarea class="form-control" id="<?php echo htmlentities($form_group['name']); ?>" name="<?php echo htmlentities($form_group['name']); ?>" rows="<?php echo htmlentities((isset($form_group['rows']) && ($form_group['rows'] !== '')?$form_group['rows']:'3')); ?>" placeholder="<?php echo htmlentities($form_group['placeholder']); ?>" <?php echo $form_group['extra_attr']; ?>><?php echo htmlentities($form_group['value']); ?></textarea>
    </div>
    <?php if(!(empty($form_group['tips']) || (($form_group['tips'] instanceof \think\Collection || $form_group['tips'] instanceof \think\Paginator ) && $form_group['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form_group['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
            <?php break; case "radio": ?>
                
                <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form_group['required']) || (($form_group['required'] instanceof \think\Collection || $form_group['required'] instanceof \think\Paginator ) && $form_group['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form_group['name']); ?>"><?php echo htmlentities(htmlspecialchars($form_group['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4 dd_radio_lable_left border-white">
        <?php if(is_array($form_group['options']) || $form_group['options'] instanceof \think\Collection || $form_group['options'] instanceof \think\Paginator): $i = 0; $__LIST__ = $form_group['options'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;?>
        <div class="icheck-peterriver icheck-inline">
            <input type="radio" name="<?php echo htmlentities($form_group['name']); ?>" class="dd_radio" id="<?php echo htmlentities($form_group['name']); ?><?php echo htmlentities($i); ?>" value="<?php echo htmlentities($key); ?>" <?php if($key == (isset($form_group['value']) && ($form_group['value'] !== '')?$form_group['value']:'')): ?>checked<?php endif; ?> <?php echo (isset($form_group['extra_attr']) && ($form_group['extra_attr'] !== '')?$form_group['extra_attr']:''); ?>>
            <label for="<?php echo htmlentities($form_group['name']); ?><?php echo htmlentities($i); ?>"><?php echo htmlspecialchars($option); ?></label>
        </div>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
    <?php if(!(empty($form_group['tips']) || (($form_group['tips'] instanceof \think\Collection || $form_group['tips'] instanceof \think\Paginator ) && $form_group['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form_group['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
            <?php break; case "checkbox": ?>
                
                <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form_group['required']) || (($form_group['required'] instanceof \think\Collection || $form_group['required'] instanceof \think\Paginator ) && $form_group['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form_group['name']); ?>"><?php echo htmlentities(htmlspecialchars($form_group['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <div class="dd_radio_lable_left border-white">
            <input type="hidden" name="<?php echo htmlentities($form_group['name']); ?>[]" value="">
            <?php if(is_array($form_group['options']) || $form_group['options'] instanceof \think\Collection || $form_group['options'] instanceof \think\Paginator): $i = 0; $__LIST__ = $form_group['options'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;?>
            <div class="icheck-peterriver icheck-inline">
                <input type="checkbox" name="<?php echo htmlentities($form_group['name']); ?>[]" class="dd_radio" id="<?php echo htmlentities($form_group['name']); ?><?php echo htmlentities($i); ?>" value="<?php echo htmlentities($key); ?>" <?php if(in_array(($key), is_array((isset($form_group['value']) && ($form_group['value'] !== '')?$form_group['value']:''))?(isset($form_group['value']) && ($form_group['value'] !== '')?$form_group['value']:''):explode(',',(isset($form_group['value']) && ($form_group['value'] !== '')?$form_group['value']:'')))): ?>checked<?php endif; ?> <?php echo (isset($form_group['extra_attr']) && ($form_group['extra_attr'] !== '')?$form_group['extra_attr']:''); ?>>
                <label for="<?php echo htmlentities($form_group['name']); ?><?php echo htmlentities($i); ?>"><?php echo htmlspecialchars($option); ?></label>
            </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </div>
    <?php if(!(empty($form_group['tips']) || (($form_group['tips'] instanceof \think\Collection || $form_group['tips'] instanceof \think\Paginator ) && $form_group['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form_group['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
            <?php break; case "date": ?>
                
                <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form_group['required']) || (($form_group['required'] instanceof \think\Collection || $form_group['required'] instanceof \think\Paginator ) && $form_group['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form_group['name']); ?>"><?php echo htmlentities(htmlspecialchars($form_group['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <div class="input-group date" id="reservationdate_<?php echo htmlentities($form_group['name']); ?>"
             data-date-format="<?php echo htmlentities(convert_php_to_moment_format($form_group['format'])); ?>" data-target-input="nearest">
            <input class="form-control" type="text" id="<?php echo htmlentities($form_group['name']); ?>" name="<?php echo htmlentities($form_group['name']); ?>"
                   value="<?php echo htmlentities((isset($form_group['value']) && ($form_group['value'] !== '')?$form_group['value']:'')); ?>" placeholder="<?php echo htmlentities($form_group['placeholder']); ?>"
                   autocomplete="off" <?php echo $form_group['extra_attr']; ?>>
            <div class="input-group-append" data-target="#reservationdate_<?php echo htmlentities($form_group['name']); ?>"
                 data-toggle="datetimepicker">
                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
            </div>
        </div>
    </div>
    <?php if(!(empty($form_group['tips']) || (($form_group['tips'] instanceof \think\Collection || $form_group['tips'] instanceof \think\Paginator ) && $form_group['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form_group['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
<script>
    $(function () {
        $('#reservationdate_<?php echo htmlentities($form_group['name']); ?>').datetimepicker();
    })
</script>
            <?php break; case "time": ?>
                
                <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form_group['required']) || (($form_group['required'] instanceof \think\Collection || $form_group['required'] instanceof \think\Paginator ) && $form_group['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form_group['name']); ?>"><?php echo htmlentities(htmlspecialchars($form_group['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <div class="input-group date" id="timepicker_<?php echo htmlentities($form_group['name']); ?>"
             data-date-format="<?php echo htmlentities(convert_php_to_moment_format($form_group['format'])); ?>" data-target-input="nearest">
            <input class="form-control datetimepicker-input" type="text" id="<?php echo htmlentities($form_group['name']); ?>"
                   name="<?php echo htmlentities($form_group['name']); ?>" value="<?php echo htmlentities((isset($form_group['value']) && ($form_group['value'] !== '')?$form_group['value']:'')); ?>"
                   placeholder="<?php echo htmlentities($form_group['placeholder']); ?>" autocomplete="off" data-target="#timepicker_<?php echo htmlentities($form_group['name']); ?>" <?php echo $form_group['extra_attr']; ?>>
            <div class="input-group-append" data-target="#timepicker_<?php echo htmlentities($form_group['name']); ?>" data-toggle="datetimepicker">
                <div class="input-group-text"><i class="far fa-clock"></i></div>
            </div>
        </div>
    </div>
    <?php if(!(empty($form_group['tips']) || (($form_group['tips'] instanceof \think\Collection || $form_group['tips'] instanceof \think\Paginator ) && $form_group['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form_group['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
<script>
    $(function () {
        $('#timepicker_<?php echo htmlentities($form_group['name']); ?>').datetimepicker()
    })
</script>
            <?php break; case "datetime": ?>
                
                <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form_group['required']) || (($form_group['required'] instanceof \think\Collection || $form_group['required'] instanceof \think\Paginator ) && $form_group['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form_group['name']); ?>"><?php echo htmlentities(htmlspecialchars($form_group['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <div class="input-group date" id="reservationdate_<?php echo htmlentities($form_group['name']); ?>"
             data-date-format="<?php echo htmlentities(convert_php_to_moment_format($form_group['format'])); ?>" data-target-input="nearest">
            <input class="form-control datetimepicker-input" type="text" id="<?php echo htmlentities($form_group['name']); ?>" name="<?php echo htmlentities($form_group['name']); ?>"
                   value="<?php echo htmlentities((isset($form_group['value']) && ($form_group['value'] !== '')?$form_group['value']:'')); ?>" placeholder="<?php echo htmlentities($form_group['placeholder']); ?>"
                   autocomplete="off" data-target="#reservationdate_<?php echo htmlentities($form_group['name']); ?>" <?php echo $form_group['extra_attr']; ?>>
            <div class="input-group-append" data-target="#reservationdate_<?php echo htmlentities($form_group['name']); ?>"
                 data-toggle="datetimepicker">
                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
            </div>
        </div>
    </div>
    <?php if(!(empty($form_group['tips']) || (($form_group['tips'] instanceof \think\Collection || $form_group['tips'] instanceof \think\Paginator ) && $form_group['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form_group['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>

<script>
    $(function () {
        $('#reservationdate_<?php echo htmlentities($form_group['name']); ?>').datetimepicker({icons: {time: 'far fa-clock'}});
    })
</script>
            <?php break; case "daterange": ?>
                
                <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form_group['required']) || (($form_group['required'] instanceof \think\Collection || $form_group['required'] instanceof \think\Paginator ) && $form_group['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form_group['name']); ?>"><?php echo htmlentities(htmlspecialchars($form_group['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <div class="input-group">
            <input class="form-control" type="text" id="<?php echo htmlentities($form_group['name']); ?>" name="<?php echo htmlentities($form_group['name']); ?>"
                   value="<?php echo htmlentities((isset($form_group['value']) && ($form_group['value'] !== '')?$form_group['value']:'')); ?>" placeholder="<?php echo htmlentities($form_group['placeholder']); ?>"
                   autocomplete="off" <?php echo $form_group['extra_attr']; ?>>
            <div class="input-group-append">
                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
            </div>
        </div>
    </div>
    <?php if(!(empty($form_group['tips']) || (($form_group['tips'] instanceof \think\Collection || $form_group['tips'] instanceof \think\Paginator ) && $form_group['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form_group['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>

<script>
    $(function () {
        $('#<?php echo htmlentities($form_group['name']); ?>').daterangepicker({
            showDropdowns: true,     // 年月份下拉框
            timePicker: true,        // 显示时间
            timePicker24Hour: true,  // 时间制
            timePickerSeconds: true, // 时间显示到秒
            ranges: {
                '今天': [moment(), moment()],
                '昨天': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                '上周': [moment().subtract(6, 'days'), moment()],
                '前30天': [moment().subtract(29, 'days'), moment()],
                '本月': [moment().startOf('month'), moment().endOf('month')],
                '上月': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            },
            //timePicker: true,
            //timePickerIncrement: 30,
            locale: {
                format: '<?php echo htmlentities(convert_php_to_moment_format($form_group['format'])); ?>',
                applyLabel: '确定',       // 确定按钮文本
                cancelLabel: '取消',      // 取消按钮文本
                customRangeLabel: '自定义',
            }
        });
    })
</script>


            <?php break; case "tags": ?>
                
                <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form_group['required']) || (($form_group['required'] instanceof \think\Collection || $form_group['required'] instanceof \think\Paginator ) && $form_group['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form_group['name']); ?>"><?php echo htmlentities(htmlspecialchars($form_group['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <input class="form-control tags" type="text" id="<?php echo htmlentities($form_group['name']); ?>" name="<?php echo htmlentities($form_group['name']); ?>" value="<?php echo htmlentities($form_group['value']); ?>" placeholder="输入后请回车确认" <?php echo $form_group['extra_attr']; ?>>
    </div>
    <?php if(!(empty($form_group['tips']) || (($form_group['tips'] instanceof \think\Collection || $form_group['tips'] instanceof \think\Paginator ) && $form_group['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form_group['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
            <?php break; case "number": ?>
                
                <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form_group['required']) || (($form_group['required'] instanceof \think\Collection || $form_group['required'] instanceof \think\Paginator ) && $form_group['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form_group['name']); ?>"><?php echo htmlentities(htmlspecialchars($form_group['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <input class="form-control" type="number" id="<?php echo htmlentities($form_group['name']); ?>" name="<?php echo htmlentities($form_group['name']); ?>" value="<?php echo htmlentities($form_group['value']); ?>" <?php if(isset($form_group['min']) && $form_group['min'] !== ''): ?>min="<?php echo htmlentities($form_group['min']); ?>"<?php endif; if(isset($form_group['max']) && $form_group['max'] !== ''): ?>max="<?php echo htmlentities($form_group['max']); ?>"<?php endif; if(isset($form_group['step']) && $form_group['step'] !== ''): ?>step="<?php echo htmlentities($form_group['step']); ?>"<?php endif; ?> <?php echo $form_group['extra_attr']; ?>>
    </div>
    <?php if(!(empty($form_group['tips']) || (($form_group['tips'] instanceof \think\Collection || $form_group['tips'] instanceof \think\Paginator ) && $form_group['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form_group['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>


            <?php break; case "password": ?>
                
                <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form_group['required']) || (($form_group['required'] instanceof \think\Collection || $form_group['required'] instanceof \think\Paginator ) && $form_group['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form_group['name']); ?>"><?php echo htmlentities(htmlspecialchars($form_group['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <input class="form-control" type="password" id="<?php echo htmlentities($form_group['name']); ?>" name="<?php echo htmlentities($form_group['name']); ?>" value="" placeholder="<?php echo htmlentities($form_group['placeholder']); ?>" <?php echo $form_group['extra_attr']; ?>>
    </div>
    <?php if(!(empty($form_group['tips']) || (($form_group['tips'] instanceof \think\Collection || $form_group['tips'] instanceof \think\Paginator ) && $form_group['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form_group['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
            <?php break; case "select": ?>
                
                <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form_group['required']) || (($form_group['required'] instanceof \think\Collection || $form_group['required'] instanceof \think\Paginator ) && $form_group['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form_group['name']); ?>"><?php echo htmlentities(htmlspecialchars($form_group['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <select class="form-control" id="<?php echo htmlentities($form_group['name']); ?>" name="<?php echo htmlentities($form_group['name']); ?>" <?php echo htmlentities((isset($form_group['extra_attr']) && ($form_group['extra_attr'] !== '')?$form_group['extra_attr']:'')); ?>>
            <option value=""><?php echo htmlentities($form_group['placeholder']); ?></option>
            <?php if(is_array($form_group['options']) || $form_group['options'] instanceof \think\Collection || $form_group['options'] instanceof \think\Paginator): $i = 0; $__LIST__ = $form_group['options'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;if(is_array($option)): ?>
            <option value="<?php echo htmlentities($key); ?>" <?php if(((string)$form_group['value'] == (string)$key)): ?>selected<?php endif; if($option['disabled'] == 1): ?>disabled<?php endif; ?>><?php echo htmlentities($option['value']); ?></option>
            <?php else: ?>
            <option value="<?php echo htmlentities($key); ?>" <?php if(((string)$form_group['value'] == (string)$key)): ?>selected<?php endif; ?>><?php echo htmlentities($option); ?></option>
            <?php endif; ?>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </select>
    </div>
    <?php if(!(empty($form_group['tips']) || (($form_group['tips'] instanceof \think\Collection || $form_group['tips'] instanceof \think\Paginator ) && $form_group['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form_group['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
            <?php break; case "select2": ?>
                
                <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form_group['required']) || (($form_group['required'] instanceof \think\Collection || $form_group['required'] instanceof \think\Paginator ) && $form_group['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form_group['name']); ?>"><?php echo htmlentities(htmlspecialchars($form_group['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <select class="select2 form-control" id="<?php echo htmlentities($form_group['name']); ?>" name="<?php echo htmlentities($form_group['name']); ?>" data-value="<?php echo htmlentities($form_group['value']); ?>" <?php echo htmlentities((isset($form_group['extra_attr']) && ($form_group['extra_attr'] !== '')?$form_group['extra_attr']:'')); ?>>
            <option value=""><?php echo htmlentities($form_group['placeholder']); ?></option>
            <?php if(is_array($form_group['options']) || $form_group['options'] instanceof \think\Collection || $form_group['options'] instanceof \think\Paginator): $i = 0; $__LIST__ = $form_group['options'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;?>
            <option value="<?php echo htmlentities($key); ?>" <?php if(in_array(($key), is_array($form_group['value'])?$form_group['value']:explode(',',$form_group['value']))): ?>selected<?php endif; ?>><?php echo htmlentities($option); ?></option>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </select>
    </div>
    <?php if(!(empty($form_group['tips']) || (($form_group['tips'] instanceof \think\Collection || $form_group['tips'] instanceof \think\Paginator ) && $form_group['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form_group['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
<script>
    $(function () {
        var option = {};
        <?php if(!$form_group['options']): ?>
        if('<?php echo htmlentities($form_group['ajax_url']); ?>' !== ''){
            // 启用ajax分页查询
            option = {
                language: "zh-CN",
                //allowClear: true,
                ajax: {
                    delay: 250, // 限速请求
                    url: "<?php echo htmlentities($form_group['ajax_url']); ?>",   //  请求地址
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
                            data.data.unshift({id: '', name: "", text: "<?php echo htmlentities($form_group['placeholder']); ?>"});
                        }
                        return {
                            results: data.data,
                            pagination: {
                                //more: (params.page) < data.paginator.totalPages
                                more: (params.page) < data.last_page
                            }
                        };
                    },
                    cache: true
                }
            };
            // 默认值设置
            var defaultValue = $('#<?php echo htmlentities($form_group['name']); ?>').data("value");
            if (defaultValue) {
                $.ajax({
                    type: "POST",
                    url: "<?php echo htmlentities($form_group['ajax_url']); ?>",
                    data: {value:defaultValue},
                    dataType: "json",
                    success: function(data){
                        $('#<?php echo htmlentities($form_group['name']); ?>').append("<option selected value='" + data.key + "'>" + data.value + "</option>");
                    }
                });
            }
        }
        <?php endif; ?>
        $('#<?php echo htmlentities($form_group['name']); ?>').select2(option);
    })
</script>

            <?php break; case "linkage": 
    // 获取一级联动数据
    $levelOne  = getLinkageData($form_group['model'], 0, $form_group['pid']);
    $levelKey  = [];
    $levelData = [];

    // 默认值
    if ($form_group['value'] != '') {
        $levelKeyData = getLinkageAllData($form_group['model'], $form_group['value'], $form_group['key'], $form_group['option'], $form_group['pid']);
        $levelKey = $levelKeyData['key'];
        $levelData = $levelKeyData['data'];
        sort($levelKey); // 升序排序
        $levelData = array_reverse($levelData); // 以相反的元素顺序返回数组
    }
 ?>
<div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form_group['required']) || (($form_group['required'] instanceof \think\Collection || $form_group['required'] instanceof \think\Paginator ) && $form_group['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form_group['name']); ?>"><?php echo htmlentities(htmlspecialchars($form_group['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-8 col-xl-7">
        <select class="form-control js_linkage" data-model="<?php echo htmlentities($form_group['model']); ?>" data-key="<?php echo htmlentities($form_group['key']); ?>" data-key_value="<?php echo htmlentities($form_group['option']); ?>" data-pid_field_name="<?php echo htmlentities((isset($form_group['pid']) && ($form_group['pid'] !== '')?$form_group['pid']:'pid')); ?>" data-next_level_id="<?php echo htmlentities($form_group['name']); ?>_2" id="<?php echo htmlentities($form_group['name']); ?>_1" name="<?php echo htmlentities($form_group['name']); if($form_group['level'] > '1'): ?>_1<?php endif; ?>" data-placeholder="<?php echo htmlentities($form_group['placeholder']); ?>" <?php echo htmlentities((isset($form_group['extra_attr']) && ($form_group['extra_attr'] !== '')?$form_group['extra_attr']:'')); ?> data-ajax_url="<?php echo htmlentities($form_group['ajax_url']); ?>" style="width: auto; display: inline-block">
            <option value=""><?php echo htmlentities($form_group['placeholder']); ?></option>
            <?php if(is_array($levelOne) || $levelOne instanceof \think\Collection || $levelOne instanceof \think\Paginator): $i = 0; $__LIST__ = $levelOne;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;if($form_group['level'] == '1'): ?>
                <option value="<?php echo htmlentities($option[$form_group['key']]); ?>" <?php if(($form_group['value'] == (string)$option[$form_group['key']])): ?>selected<?php endif; ?>><?php echo $option[$form_group['option']]; ?></option>
            <?php else: ?>
                <option value="<?php echo htmlentities($option[$form_group['key']]); ?>" <?php if((isset($levelKey[1]) && $levelKey[1] == (string)$option[$form_group['key']])): ?>selected<?php endif; ?>><?php echo $option[$form_group['option']]; ?></option>
            <?php endif; ?>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </select>
        <?php if($form_group['level'] == '2'): ?>
        <select class="form-control" id="<?php echo htmlentities($form_group['name']); ?>_2" name="<?php echo htmlentities($form_group['name']); ?>" data-placeholder="<?php echo htmlentities($form_group['placeholder']); ?>" <?php echo htmlentities((isset($form_group['extra_attr']) && ($form_group['extra_attr'] !== '')?$form_group['extra_attr']:'')); ?> style="width: auto; display: inline-block">
            <option value=""><?php echo htmlentities($form_group['placeholder']); ?></option>
            <?php if(!(empty($levelData['1']) || (($levelData['1'] instanceof \think\Collection || $levelData['1'] instanceof \think\Paginator ) && $levelData['1']->isEmpty()))): if(is_array($levelData['1']) || $levelData['1'] instanceof \think\Collection || $levelData['1'] instanceof \think\Paginator): $i = 0; $__LIST__ = $levelData['1'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;?>
            <option value="<?php echo htmlentities($option[$form_group['key']]); ?>" <?php if(($form_group['value'] == (string)$option[$form_group['key']])): ?>selected<?php endif; ?>><?php echo $option[$form_group['option']]; ?></option>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            <?php endif; ?>
        </select>
        <?php endif; if($form_group['level'] == '3'): ?>
        <select class="form-control js_linkage" data-model="<?php echo htmlentities($form_group['model']); ?>" data-key="<?php echo htmlentities($form_group['key']); ?>" data-key_value="<?php echo htmlentities($form_group['option']); ?>" data-pid_field_name="<?php echo htmlentities((isset($form_group['pid']) && ($form_group['pid'] !== '')?$form_group['pid']:'pid')); ?>" data-next_level_id="<?php echo htmlentities($form_group['name']); ?>_3" id="<?php echo htmlentities($form_group['name']); ?>_2" name="<?php echo htmlentities($form_group['name']); ?>_2" data-placeholder="<?php echo htmlentities($form_group['placeholder']); ?>" <?php echo htmlentities((isset($form_group['extra_attr']) && ($form_group['extra_attr'] !== '')?$form_group['extra_attr']:'')); ?> data-ajax_url="<?php echo htmlentities($form_group['ajax_url']); ?>" style="width: auto; display: inline-block">
            <option value=""><?php echo htmlentities($form_group['placeholder']); ?></option>
            <?php if(!(empty($levelData['1']) || (($levelData['1'] instanceof \think\Collection || $levelData['1'] instanceof \think\Paginator ) && $levelData['1']->isEmpty()))): if(is_array($levelData['1']) || $levelData['1'] instanceof \think\Collection || $levelData['1'] instanceof \think\Paginator): $i = 0; $__LIST__ = $levelData['1'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;?>
            <option value="<?php echo htmlentities($option[$form_group['key']]); ?>" <?php if((isset($levelKey[2]) && $levelKey[2] == (string)$option[$form_group['key']])): ?>selected<?php endif; ?>><?php echo $option[$form_group['option']]; ?></option>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            <?php endif; ?>
        </select>
        <select class="form-control" id="<?php echo htmlentities($form_group['name']); ?>_3" name="<?php echo htmlentities($form_group['name']); ?>" data-placeholder="<?php echo htmlentities($form_group['placeholder']); ?>" <?php echo htmlentities((isset($form_group['extra_attr']) && ($form_group['extra_attr'] !== '')?$form_group['extra_attr']:'')); ?> style="width: auto; display: inline-block">
            <option value=""><?php echo htmlentities($form_group['placeholder']); ?></option>
            <?php if(!(empty($levelData['2']) || (($levelData['2'] instanceof \think\Collection || $levelData['2'] instanceof \think\Paginator ) && $levelData['2']->isEmpty()))): if(is_array($levelData['2']) || $levelData['2'] instanceof \think\Collection || $levelData['2'] instanceof \think\Paginator): $i = 0; $__LIST__ = $levelData['2'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;?>
            <option value="<?php echo htmlentities($option[$form_group['key']]); ?>" <?php if(($form_group['value'] == (string)$option[$form_group['key']])): ?>selected<?php endif; ?>><?php echo $option[$form_group['option']]; ?></option>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            <?php endif; ?>
        </select>
        <?php endif; ?>
    </div>
    <?php if(!(empty($form_group['tips']) || (($form_group['tips'] instanceof \think\Collection || $form_group['tips'] instanceof \think\Paginator ) && $form_group['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-2 col-xl-4 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form_group['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
            <?php break; case "image": ?>
                
                <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form_group['required']) || (($form_group['required'] instanceof \think\Collection || $form_group['required'] instanceof \think\Paginator ) && $form_group['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form_group['name']); ?>"><?php echo htmlentities(htmlspecialchars($form_group['title'])); ?></label>
    <div class="col-9 col-sm-6 col-md-6 col-lg-6 col-xl-4">
        <input class="form-control" type="text" id="<?php echo htmlentities($form_group['name']); ?>" name="<?php echo htmlentities($form_group['name']); ?>" value="<?php echo htmlentities($form_group['value']); ?>" placeholder="<?php echo htmlentities($form_group['placeholder']); ?>" <?php echo $form_group['extra_attr']; ?>>
    </div>
    <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-7 dd_ts dd_ts_img">
        <!--上传图片-->
        <!--用来存放item-->
        <div id="fileList_<?php echo htmlentities($form_group['name']); ?>" class="uploader-list"></div>
        <div id="filePicker_<?php echo htmlentities($form_group['name']); ?>"><i class="fa fa-upload m-r-10"></i>选择图片</div>
        <a href="<?php echo !empty($form_group['value']) ? htmlentities($form_group['value']) : '/static/admin/images/nopic.png'; ?>" target="_blank">
            <img class="image_preview_info"
                 src="<?php echo !empty($form_group['value']) ? htmlentities($form_group['value']) : '/static/admin/images/nopic.png'; ?>"
                 id="<?php echo htmlentities($form_group['name']); ?>_preview">
        </a>
        <!--上传图片-->
        <?php if(!(empty($form_group['tips']) || (($form_group['tips'] instanceof \think\Collection || $form_group['tips'] instanceof \think\Paginator ) && $form_group['tips']->isEmpty()))): ?>
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form_group['tips']; ?>
        </small>
        <?php endif; ?>
    </div>
</div>
<script type="text/javascript">
    webupload('fileList_<?php echo htmlentities($form_group['name']); ?>', 'filePicker_<?php echo htmlentities($form_group['name']); ?>', '<?php echo htmlentities($form_group['name']); ?>_preview', '<?php echo htmlentities($form_group['name']); ?>', false, '<?php echo htmlentities((isset($system['upload_image_ext']) && ($system['upload_image_ext'] !== '')?$system['upload_image_ext']:"")); ?>', '<?php echo htmlentities((isset($system['upload_image_size']) && ($system['upload_image_size'] !== '')?$system['upload_image_size']:"0")); ?>');
</script>


            <?php break; case "images": ?>
                
                <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
<!-- ZTX-004  by 折腾侠-->
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form_group['required']) || (($form_group['required'] instanceof \think\Collection || $form_group['required'] instanceof \think\Paginator ) && $form_group['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form_group['name']); ?>"><?php echo htmlentities(htmlspecialchars($form_group['title'])); ?></label>
	
	<div class="col-12 col-sm-7 col-md-7 col-lg-7 col-xl-4" >
	<!-- ZTX-004  by 折腾侠-->
        <div class="more_images dd_ts">
            <div id="more_images_<?php echo htmlentities($form_group['name']); ?>">
                <div class="hide">
                    <input type="text" name="<?php echo htmlentities($form_group['name']); ?>[]" value="">
                    <input type="text" name="<?php echo htmlentities($form_group['name']); ?>_title[]" value="">
                    <!-- ZTX-增加缩略图显示 -->
                    <input type="text" name="<?php echo htmlentities($form_group['name']); ?>_small[]" value="">
                    <!-- ZTX-增加缩略图显示 -->
                </div>
                <?php if(!(empty($form_group['value']) || (($form_group['value'] instanceof \think\Collection || $form_group['value'] instanceof \think\Paginator ) && $form_group['value']->isEmpty()))): if(is_array($form_group['value']) || $form_group['value'] instanceof \think\Collection || $form_group['value'] instanceof \think\Paginator): $i = 0; $__LIST__ = $form_group['value'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
				<!-- ZTX-004  by 折腾侠-->
                <div class="row no-gutters">
                    <div class="col-4 col-sm-4">
                        <input type="text" name="<?php echo htmlentities($form_group['name']); ?>[]" value="<?php echo htmlentities($vo['image']); ?>" class="form-control">
                        <!-- ZTX-增加缩略图显示 -->
                        <input type="text" name="<?php echo htmlentities($form_group['name']); ?>_small[]" value="<?php echo isset($vo['small']) ? htmlentities($vo['small']) : ''; ?>" class="hide">
                        <!-- ZTX-增加缩略图显示 -->
                    </div>
                    <div class="col-3 col-sm-3">
                        <input type="text" name="<?php echo htmlentities($form_group['name']); ?>_title[]" value="<?php echo htmlentities($vo['title']); ?>" class="form-control input-sm">
                    </div>
                    <div class="col-4 col-sm-3">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default btn-sm move_up_images">
                                <i class="fa fa-chevron-up"></i>
                            </button>
                            <button type="button" class="btn btn-default btn-sm move_down_images">
                                <i class="fa fa-chevron-down"></i>
                            </button>
                            <button type="button" class="btn btn-default btn-sm remove_images">
                                <i class="fa fa-times"></i>
                            </button>
							
                        </div>
                    </div>
					
					 <div class="col-4 col-sm-2"><a href="<?php echo htmlentities($vo['image']); ?>" target="_blank"> <img class="image_preview_info" src="<?php echo !empty($vo['small']) ? htmlentities($vo['small']) : htmlentities($vo['image']); ?>"  ></a></div>
                </div>
				<!-- ZTX-004  by 折腾侠-->
                <?php endforeach; endif; else: echo "" ;endif; ?>
                <?php endif; ?>
            </div>
			
			
        </div>
		<!-- ZTX-005  by 折腾侠-->
		<div class="row no-gutters">
		 <div class="col-4 col-sm-12">
			<input class="form-control" type="text" id="img" name="site_img_choose" value="" placeholder="从站内选择图片，输入搜索关键词" >
		</div>
		
		
		</div>
		
		
		<!-- ZTX-005  by 折腾侠-->
    </div>
	<!-- ZTX-004  by 折腾侠-->
    <div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-7 dd_ts dd_ts_img">
	<!-- ZTX-004  by 折腾侠-->
        <!--上传图片-->
        <!--用来存放item-->
        <div id="fileList_<?php echo htmlentities($form_group['name']); ?>" class="uploader-list"></div>
        <div id="filePicker_<?php echo htmlentities($form_group['name']); ?>"><i class="fa fa-upload m-r-10"></i>上传图片</div>
		
	
		
		
        <!--上传图片-->
        <?php if(!(empty($form_group['tips']) || (($form_group['tips'] instanceof \think\Collection || $form_group['tips'] instanceof \think\Paginator ) && $form_group['tips']->isEmpty()))): ?>
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form_group['tips']; ?>
        </small>
        <?php endif; ?>
    </div>
</div>
<script type="text/javascript">
    webupload('fileList_<?php echo htmlentities($form_group['name']); ?>', 'filePicker_<?php echo htmlentities($form_group['name']); ?>', '<?php echo htmlentities($form_group['name']); ?>_preview', '<?php echo htmlentities($form_group['name']); ?>', true, '<?php echo htmlentities((isset($system['upload_image_ext']) && ($system['upload_image_ext'] !== '')?$system['upload_image_ext']:"")); ?>', '<?php echo htmlentities((isset($system['upload_image_size']) && ($system['upload_image_size'] !== '')?$system['upload_image_size']:"0")); ?>');
</script>
            <?php break; case "file": ?>
                
                <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form_group['required']) || (($form_group['required'] instanceof \think\Collection || $form_group['required'] instanceof \think\Paginator ) && $form_group['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form_group['name']); ?>"><?php echo htmlentities(htmlspecialchars($form_group['title'])); ?></label>
    <div class="col-9 col-sm-6 col-md-6 col-lg-6 col-xl-4">
        <input class="form-control" type="text" id="<?php echo htmlentities($form_group['name']); ?>" name="<?php echo htmlentities($form_group['name']); ?>" value="<?php echo htmlentities($form_group['value']); ?>" placeholder="<?php echo htmlentities($form_group['placeholder']); ?>" <?php echo $form_group['extra_attr']; ?>>
    </div>
    <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-7 dd_ts dd_ts_img">
        <!--上传图片-->
        <!--用来存放item-->
        <div id="fileList_<?php echo htmlentities($form_group['name']); ?>" class="uploader-list"></div>
        <div id="filePicker_<?php echo htmlentities($form_group['name']); ?>"><i class="fa fa-upload m-r-10"></i>选择文件</div>
        <!--上传图片-->
        <?php if(!(empty($form_group['tips']) || (($form_group['tips'] instanceof \think\Collection || $form_group['tips'] instanceof \think\Paginator ) && $form_group['tips']->isEmpty()))): ?>
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form_group['tips']; ?>
        </small>
        <?php endif; ?>
    </div>
</div>
<script type="text/javascript">
    webupload('fileList_<?php echo htmlentities($form_group['name']); ?>', 'filePicker_<?php echo htmlentities($form_group['name']); ?>', '<?php echo htmlentities($form_group['name']); ?>_preview', '<?php echo htmlentities($form_group['name']); ?>', false, '<?php echo htmlentities((isset($system['upload_file_ext']) && ($system['upload_file_ext'] !== '')?$system['upload_file_ext']:"")); ?>', '<?php echo htmlentities((isset($system['upload_file_size']) && ($system['upload_file_size'] !== '')?$system['upload_file_size']:"0")); ?>', 'file');
</script>


            <?php break; case "files": ?>
                
                <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form_group['required']) || (($form_group['required'] instanceof \think\Collection || $form_group['required'] instanceof \think\Paginator ) && $form_group['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form_group['name']); ?>"><?php echo htmlentities(htmlspecialchars($form_group['title'])); ?></label>
    <div class="col-9 col-sm-7 col-md-7 col-lg-7 col-xl-4">
        <div class="more_images dd_ts">
            <div id="more_images_<?php echo htmlentities($form_group['name']); ?>">
                <div class="hide">
                    <input type="text" name="<?php echo htmlentities($form_group['name']); ?>[]" value="">
                    <input type="text" name="<?php echo htmlentities($form_group['name']); ?>_title[]" value="">
                </div>
                <?php if(!(empty($form_group['value']) || (($form_group['value'] instanceof \think\Collection || $form_group['value'] instanceof \think\Paginator ) && $form_group['value']->isEmpty()))): if(is_array($form_group['value']) || $form_group['value'] instanceof \think\Collection || $form_group['value'] instanceof \think\Paginator): $i = 0; $__LIST__ = $form_group['value'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <!-- ZTX-002  by 折腾侠删除原有代码，改为跟图片显示容器一样的代码-->
                <div class="row no-gutters">
                    <div class="col-4 col-sm-6">
                        <input type="text" name="<?php echo htmlentities($form_group['name']); ?>[]" value="<?php echo htmlentities($vo['image']); ?>" class="form-control">
                    </div>
                    <div class="col-3 col-sm-3">
                        <input type="text" name="<?php echo htmlentities($form_group['name']); ?>_title[]" value="<?php echo htmlentities($vo['title']); ?>" class="form-control input-sm">
                    </div>
                    <div class="col-4 col-sm-3">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default btn-sm move_up_images">
                                <i class="fa fa-chevron-up"></i>
                            </button>
                            <button type="button" class="btn btn-default btn-sm move_down_images">
                                <i class="fa fa-chevron-down"></i>
                            </button>
                            <button type="button" class="btn btn-default btn-sm remove_images">
                                <i class="fa fa-times"></i>
                            </button>
							
                        </div>
                    </div>
					 </div>
					
				<!-- ZTX-002  by 折腾侠 删除原有代码，改为跟图片显示容器一样的代码-->
                <?php endforeach; endif; else: echo "" ;endif; ?>
                <?php endif; ?>
            </div>
        </div>
		<!-- ZTX-005  by 折腾侠-->
		<div class="row no-gutters">
		 <div class="col-4 col-sm-12">
			<input class="form-control" type="text" id="file" name="site_file_choose" value="" placeholder="从站内选择文件，输入搜索关键词" >
		</div>
		
		
		</div>
		
		
		<!-- ZTX-005  by 折腾侠-->
    </div>
    <div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-7 dd_ts dd_ts_img">
        <!--上传图片-->
        <!--用来存放item-->
        <div id="fileList_<?php echo htmlentities($form_group['name']); ?>" class="uploader-list"></div>
        <div id="filePicker_<?php echo htmlentities($form_group['name']); ?>"><i class="fa fa-upload m-r-10"></i>选择文件</div>
        <!--上传图片-->
        <?php if(!(empty($form_group['tips']) || (($form_group['tips'] instanceof \think\Collection || $form_group['tips'] instanceof \think\Paginator ) && $form_group['tips']->isEmpty()))): ?>
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form_group['tips']; ?>
        </small>
        <?php endif; ?>
    </div>
</div>
<script type="text/javascript">
    webupload('fileList_<?php echo htmlentities($form_group['name']); ?>', 'filePicker_<?php echo htmlentities($form_group['name']); ?>', '<?php echo htmlentities($form_group['name']); ?>_preview', '<?php echo htmlentities($form_group['name']); ?>', true, '<?php echo htmlentities((isset($system['upload_file_ext']) && ($system['upload_file_ext'] !== '')?$system['upload_file_ext']:"")); ?>', '<?php echo htmlentities((isset($system['upload_file_size']) && ($system['upload_file_size'] !== '')?$system['upload_file_size']:"0")); ?>', 'file');
</script>
            <?php break; case "editor": ?>
                
                <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form_group['required']) || (($form_group['required'] instanceof \think\Collection || $form_group['required'] instanceof \think\Paginator ) && $form_group['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form_group['name']); ?>"><?php echo htmlentities(htmlspecialchars($form_group['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-8 col-xl-7">
        <textarea id="<?php echo htmlentities($form_group['name']); ?>" name="<?php echo htmlentities($form_group['name']); ?>" <?php echo $form_group['extra_attr']; ?> style="width:100%;height: <?php echo htmlentities($form_group['height']); ?>px"><?php echo htmlentities($form_group['value']); ?></textarea>
    </div>
    <?php if(!(empty($form_group['tips']) || (($form_group['tips'] instanceof \think\Collection || $form_group['tips'] instanceof \think\Paginator ) && $form_group['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-2 col-xl-4 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form_group['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
<script>
    <?php if($system['editor'] == '1'): ?>
    UE.delEditor('<?php echo htmlentities($form_group['name']); ?>');
    UE.getEditor('<?php echo htmlentities($form_group['name']); ?>', {
        serverUrl: "<?php echo url('Upload/index',['from'=>'ueditor']); ?>",
    });
    <?php else: ?>
    CKEDITOR.replace('<?php echo htmlentities($form_group['name']); ?>', {height: '<?php echo htmlentities($form_group['height']); ?>px'});
    <?php endif; ?>
</script>
            <?php break; case "editor": ?>
                
                <div class="row dd_input_group no-gutters" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <div class="form-group">
        <div class="col-12">
            <?php if($form_group['elemtype'] == "button"): ?>
            <button class="btn btn-flat <?php echo htmlentities((isset($form_group['class']) && ($form_group['class'] !== '')?$form_group['class']:'btn-primary')); ?>" id="<?php echo htmlentities((isset($form_group['id']) && ($form_group['id'] !== '')?$form_group['id']:'')); ?>" type="button" <?php echo (isset($form_group['data']) && ($form_group['data'] !== '')?$form_group['data']:''); if(isset($form_group['disabled'])): ?>disabled<?php endif; ?>>
            <i class="<?php echo htmlentities((isset($form_group['icon']) && ($form_group['icon'] !== '')?$form_group['icon']:'')); ?>"></i> <?php echo htmlentities((isset($form_group['title']) && ($form_group['title'] !== '')?$form_group['title']:'')); ?></button>
            <?php else: ?>
            <a class="btn btn-flat <?php echo htmlentities((isset($form_group['class']) && ($form_group['class'] !== '')?$form_group['class']:'btn-primary')); if(isset($form_group['disabled'])): ?> disabled<?php endif; ?>" id="<?php echo htmlentities((isset($form_group['id']) && ($form_group['id'] !== '')?$form_group['id']:'')); ?>" title="<?php echo htmlentities((isset($form_group['title']) && ($form_group['title'] !== '')?$form_group['title']:'')); ?>" target="<?php echo htmlentities((isset($form_group['target']) && ($form_group['target'] !== '')?$form_group['target']:'')); ?>" href="<?php echo htmlentities((isset($form_group['href']) && ($form_group['href'] !== '')?$form_group['href']:'')); ?>" <?php echo (isset($form_group['data']) && ($form_group['data'] !== '')?$form_group['data']:''); ?>><i class="<?php echo htmlentities((isset($form_group['icon']) && ($form_group['icon'] !== '')?$form_group['icon']:'')); ?>"></i> <?php echo htmlentities((isset($form_group['title']) && ($form_group['title'] !== '')?$form_group['title']:'')); ?></a>
            <?php endif; ?>
        </div>
    </div>
</div>
            <?php break; case "hidden": ?>
                
                <div class="row dd_input_group hide <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <div class="form-group">
        <input type="hidden" name="<?php echo htmlentities($form_group['name']); ?>" value="<?php echo htmlentities((isset($form_group['value']) && ($form_group['value'] !== '')?$form_group['value']:'')); ?>" id="<?php echo htmlentities($form_group['name']); ?>" <?php echo (isset($form_group['extra_attr']) && ($form_group['extra_attr'] !== '')?$form_group['extra_attr']:''); ?>>
    </div>
</div>


            <?php break; case "html": ?>
                
                <?php echo $form_group['html']; break; case "color": ?>
                
                <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form_group['required']) || (($form_group['required'] instanceof \think\Collection || $form_group['required'] instanceof \think\Paginator ) && $form_group['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form_group['name']); ?>"><?php echo htmlentities(htmlspecialchars($form_group['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <div class="input-group <?php echo htmlentities($form_group['name']); ?>-colorpicker">
            <input class="form-control" type="text" id="<?php echo htmlentities($form_group['name']); ?>" name="<?php echo htmlentities($form_group['name']); ?>" value="<?php echo htmlentities($form_group['value']); ?>" placeholder="<?php echo htmlentities($form_group['placeholder']); ?>" <?php echo $form_group['extra_attr']; ?>>
            <div class="input-group-append">
                <span class="input-group-text">
                    <i class="fas fa-square" <?php if($form_group['value']): ?>style="color: <?php echo htmlentities($form_group['value']); ?>"<?php endif; ?>></i>
                </span>
            </div>
        </div>
    </div>
    <?php if(!(empty($form_group['tips']) || (($form_group['tips'] instanceof \think\Collection || $form_group['tips'] instanceof \think\Paginator ) && $form_group['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form_group['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
<script>
    $(function () {
        $('.<?php echo htmlentities($form_group['name']); ?>-colorpicker').colorpicker()
        $('.<?php echo htmlentities($form_group['name']); ?>-colorpicker').on('colorpickerChange', function(event) {
            $('.<?php echo htmlentities($form_group['name']); ?>-colorpicker .fa-square').css('color', event.color.toString());
        });
    })
</script>
            <?php break; case "code": ?>
                
                <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form_group['required']) || (($form_group['required'] instanceof \think\Collection || $form_group['required'] instanceof \think\Paginator ) && $form_group['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form_group['name']); ?>"><?php echo htmlentities(htmlspecialchars($form_group['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-8 col-xl-7">
        <textarea id="<?php echo htmlentities($form_group['name']); ?>" name="<?php echo htmlentities($form_group['name']); ?>" <?php echo $form_group['extra_attr']; ?>><?php echo htmlentities($form_group['value']); ?></textarea>
    </div>
    <?php if(!(empty($form_group['tips']) || (($form_group['tips'] instanceof \think\Collection || $form_group['tips'] instanceof \think\Paginator ) && $form_group['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-2 col-xl-4 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form_group['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
<script>
    $(function () {
        // CodeMirror
        var codeEditor = CodeMirror.fromTextArea(document.getElementById("<?php echo htmlentities($form_group['name']); ?>"), {
            mode: "<?php echo htmlentities($form_group['mode']); ?>",     // 编辑器语言
            theme: "<?php echo htmlentities($form_group['theme']); ?>",   // 编辑器主题
            lineNumbers: true,              // 显示行号
            showCursorWhenSelecting: true,  // 文本选中时显示光标
            lineWrapping: true,             // 代码折叠
        });
        codeEditor.setSize('auto',"<?php echo htmlentities($form_group['height']); ?>px");
    })
</script>
            <?php break; default: ?>

        <?php endswitch; ?>
    <?php endforeach; endif; else: echo "" ;endif; ?>
</div>
<?php endforeach; endif; else: echo "" ;endif; ?>
</div>

                        <?php break; case "text": ?>
                            
                            <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form['required']) || (($form['required'] instanceof \think\Collection || $form['required'] instanceof \think\Paginator ) && $form['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form['name']); ?>"><?php echo htmlentities(htmlspecialchars($form['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <?php if(!(empty($form['group']) || (($form['group'] instanceof \think\Collection || $form['group'] instanceof \think\Paginator ) && $form['group']->isEmpty()))): ?>
        <div class="input-group">
            <?php endif; if(!(empty($form['group']['0']) || (($form['group']['0'] instanceof \think\Collection || $form['group']['0'] instanceof \think\Paginator ) && $form['group']['0']->isEmpty()))): ?>
            <div class="input-group-prepend">
                <span class="input-group-text"><?php echo $form['group']['0']; ?></span>
            </div>
            <?php endif; ?>
            <input class="form-control" type="text" id="<?php echo htmlentities($form['name']); ?>" name="<?php echo htmlentities($form['name']); ?>" value="<?php echo htmlentities($form['value']); ?>" placeholder="<?php echo htmlentities($form['placeholder']); ?>" <?php echo $form['extra_attr']; ?>>
            <?php if(!(empty($form['group']['1']) || (($form['group']['1'] instanceof \think\Collection || $form['group']['1'] instanceof \think\Paginator ) && $form['group']['1']->isEmpty()))): ?>
            <div class="input-group-append">
                <span class="input-group-text"><?php echo $form['group']['1']; ?></span>
            </div>
            <?php endif; if(!(empty($form['group']) || (($form['group'] instanceof \think\Collection || $form['group'] instanceof \think\Paginator ) && $form['group']->isEmpty()))): ?>
        </div>
        <?php endif; ?>
    </div>
    <?php if(!(empty($form['tips']) || (($form['tips'] instanceof \think\Collection || $form['tips'] instanceof \think\Paginator ) && $form['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
                        <?php break; case "textarea": ?>
                            
                            <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form['required']) || (($form['required'] instanceof \think\Collection || $form['required'] instanceof \think\Paginator ) && $form['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form['name']); ?>"><?php echo htmlentities(htmlspecialchars($form['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <textarea class="form-control" id="<?php echo htmlentities($form['name']); ?>" name="<?php echo htmlentities($form['name']); ?>" rows="<?php echo htmlentities((isset($form['rows']) && ($form['rows'] !== '')?$form['rows']:'3')); ?>" placeholder="<?php echo htmlentities($form['placeholder']); ?>" <?php echo $form['extra_attr']; ?>><?php echo htmlentities($form['value']); ?></textarea>
    </div>
    <?php if(!(empty($form['tips']) || (($form['tips'] instanceof \think\Collection || $form['tips'] instanceof \think\Paginator ) && $form['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
                        <?php break; case "radio": ?>
                            
                            <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form['required']) || (($form['required'] instanceof \think\Collection || $form['required'] instanceof \think\Paginator ) && $form['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form['name']); ?>"><?php echo htmlentities(htmlspecialchars($form['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4 dd_radio_lable_left border-white">
        <?php if(is_array($form['options']) || $form['options'] instanceof \think\Collection || $form['options'] instanceof \think\Paginator): $i = 0; $__LIST__ = $form['options'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;?>
        <div class="icheck-peterriver icheck-inline">
            <input type="radio" name="<?php echo htmlentities($form['name']); ?>" class="dd_radio" id="<?php echo htmlentities($form['name']); ?><?php echo htmlentities($i); ?>" value="<?php echo htmlentities($key); ?>" <?php if($key == (isset($form['value']) && ($form['value'] !== '')?$form['value']:'')): ?>checked<?php endif; ?> <?php echo (isset($form['extra_attr']) && ($form['extra_attr'] !== '')?$form['extra_attr']:''); ?>>
            <label for="<?php echo htmlentities($form['name']); ?><?php echo htmlentities($i); ?>"><?php echo htmlspecialchars($option); ?></label>
        </div>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
    <?php if(!(empty($form['tips']) || (($form['tips'] instanceof \think\Collection || $form['tips'] instanceof \think\Paginator ) && $form['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
                        <?php break; case "checkbox": ?>
                            
                            <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form['required']) || (($form['required'] instanceof \think\Collection || $form['required'] instanceof \think\Paginator ) && $form['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form['name']); ?>"><?php echo htmlentities(htmlspecialchars($form['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <div class="dd_radio_lable_left border-white">
            <input type="hidden" name="<?php echo htmlentities($form['name']); ?>[]" value="">
            <?php if(is_array($form['options']) || $form['options'] instanceof \think\Collection || $form['options'] instanceof \think\Paginator): $i = 0; $__LIST__ = $form['options'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;?>
            <div class="icheck-peterriver icheck-inline">
                <input type="checkbox" name="<?php echo htmlentities($form['name']); ?>[]" class="dd_radio" id="<?php echo htmlentities($form['name']); ?><?php echo htmlentities($i); ?>" value="<?php echo htmlentities($key); ?>" <?php if(in_array(($key), is_array((isset($form['value']) && ($form['value'] !== '')?$form['value']:''))?(isset($form['value']) && ($form['value'] !== '')?$form['value']:''):explode(',',(isset($form['value']) && ($form['value'] !== '')?$form['value']:'')))): ?>checked<?php endif; ?> <?php echo (isset($form['extra_attr']) && ($form['extra_attr'] !== '')?$form['extra_attr']:''); ?>>
                <label for="<?php echo htmlentities($form['name']); ?><?php echo htmlentities($i); ?>"><?php echo htmlspecialchars($option); ?></label>
            </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </div>
    <?php if(!(empty($form['tips']) || (($form['tips'] instanceof \think\Collection || $form['tips'] instanceof \think\Paginator ) && $form['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
                        <?php break; case "date": ?>
                            
                            <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form['required']) || (($form['required'] instanceof \think\Collection || $form['required'] instanceof \think\Paginator ) && $form['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form['name']); ?>"><?php echo htmlentities(htmlspecialchars($form['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <div class="input-group date" id="reservationdate_<?php echo htmlentities($form['name']); ?>"
             data-date-format="<?php echo htmlentities(convert_php_to_moment_format($form['format'])); ?>" data-target-input="nearest">
            <input class="form-control" type="text" id="<?php echo htmlentities($form['name']); ?>" name="<?php echo htmlentities($form['name']); ?>"
                   value="<?php echo htmlentities((isset($form['value']) && ($form['value'] !== '')?$form['value']:'')); ?>" placeholder="<?php echo htmlentities($form['placeholder']); ?>"
                   autocomplete="off" <?php echo $form['extra_attr']; ?>>
            <div class="input-group-append" data-target="#reservationdate_<?php echo htmlentities($form['name']); ?>"
                 data-toggle="datetimepicker">
                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
            </div>
        </div>
    </div>
    <?php if(!(empty($form['tips']) || (($form['tips'] instanceof \think\Collection || $form['tips'] instanceof \think\Paginator ) && $form['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
<script>
    $(function () {
        $('#reservationdate_<?php echo htmlentities($form['name']); ?>').datetimepicker();
    })
</script>
                        <?php break; case "time": ?>
                            
                            <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form['required']) || (($form['required'] instanceof \think\Collection || $form['required'] instanceof \think\Paginator ) && $form['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form['name']); ?>"><?php echo htmlentities(htmlspecialchars($form['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <div class="input-group date" id="timepicker_<?php echo htmlentities($form['name']); ?>"
             data-date-format="<?php echo htmlentities(convert_php_to_moment_format($form['format'])); ?>" data-target-input="nearest">
            <input class="form-control datetimepicker-input" type="text" id="<?php echo htmlentities($form['name']); ?>"
                   name="<?php echo htmlentities($form['name']); ?>" value="<?php echo htmlentities((isset($form['value']) && ($form['value'] !== '')?$form['value']:'')); ?>"
                   placeholder="<?php echo htmlentities($form['placeholder']); ?>" autocomplete="off" data-target="#timepicker_<?php echo htmlentities($form['name']); ?>" <?php echo $form['extra_attr']; ?>>
            <div class="input-group-append" data-target="#timepicker_<?php echo htmlentities($form['name']); ?>" data-toggle="datetimepicker">
                <div class="input-group-text"><i class="far fa-clock"></i></div>
            </div>
        </div>
    </div>
    <?php if(!(empty($form['tips']) || (($form['tips'] instanceof \think\Collection || $form['tips'] instanceof \think\Paginator ) && $form['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
<script>
    $(function () {
        $('#timepicker_<?php echo htmlentities($form['name']); ?>').datetimepicker()
    })
</script>
                        <?php break; case "datetime": ?>
                            
                            <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form['required']) || (($form['required'] instanceof \think\Collection || $form['required'] instanceof \think\Paginator ) && $form['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form['name']); ?>"><?php echo htmlentities(htmlspecialchars($form['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <div class="input-group date" id="reservationdate_<?php echo htmlentities($form['name']); ?>"
             data-date-format="<?php echo htmlentities(convert_php_to_moment_format($form['format'])); ?>" data-target-input="nearest">
            <input class="form-control datetimepicker-input" type="text" id="<?php echo htmlentities($form['name']); ?>" name="<?php echo htmlentities($form['name']); ?>"
                   value="<?php echo htmlentities((isset($form['value']) && ($form['value'] !== '')?$form['value']:'')); ?>" placeholder="<?php echo htmlentities($form['placeholder']); ?>"
                   autocomplete="off" data-target="#reservationdate_<?php echo htmlentities($form['name']); ?>" <?php echo $form['extra_attr']; ?>>
            <div class="input-group-append" data-target="#reservationdate_<?php echo htmlentities($form['name']); ?>"
                 data-toggle="datetimepicker">
                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
            </div>
        </div>
    </div>
    <?php if(!(empty($form['tips']) || (($form['tips'] instanceof \think\Collection || $form['tips'] instanceof \think\Paginator ) && $form['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>

<script>
    $(function () {
        $('#reservationdate_<?php echo htmlentities($form['name']); ?>').datetimepicker({icons: {time: 'far fa-clock'}});
    })
</script>
                        <?php break; case "daterange": ?>
                            
                            <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form['required']) || (($form['required'] instanceof \think\Collection || $form['required'] instanceof \think\Paginator ) && $form['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form['name']); ?>"><?php echo htmlentities(htmlspecialchars($form['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <div class="input-group">
            <input class="form-control" type="text" id="<?php echo htmlentities($form['name']); ?>" name="<?php echo htmlentities($form['name']); ?>"
                   value="<?php echo htmlentities((isset($form['value']) && ($form['value'] !== '')?$form['value']:'')); ?>" placeholder="<?php echo htmlentities($form['placeholder']); ?>"
                   autocomplete="off" <?php echo $form['extra_attr']; ?>>
            <div class="input-group-append">
                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
            </div>
        </div>
    </div>
    <?php if(!(empty($form['tips']) || (($form['tips'] instanceof \think\Collection || $form['tips'] instanceof \think\Paginator ) && $form['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>

<script>
    $(function () {
        $('#<?php echo htmlentities($form['name']); ?>').daterangepicker({
            showDropdowns: true,     // 年月份下拉框
            timePicker: true,        // 显示时间
            timePicker24Hour: true,  // 时间制
            timePickerSeconds: true, // 时间显示到秒
            ranges: {
                '今天': [moment(), moment()],
                '昨天': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                '上周': [moment().subtract(6, 'days'), moment()],
                '前30天': [moment().subtract(29, 'days'), moment()],
                '本月': [moment().startOf('month'), moment().endOf('month')],
                '上月': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            },
            //timePicker: true,
            //timePickerIncrement: 30,
            locale: {
                format: '<?php echo htmlentities(convert_php_to_moment_format($form['format'])); ?>',
                applyLabel: '确定',       // 确定按钮文本
                cancelLabel: '取消',      // 取消按钮文本
                customRangeLabel: '自定义',
            }
        });
    })
</script>


                        <?php break; case "tags": ?>
                            
                            <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form['required']) || (($form['required'] instanceof \think\Collection || $form['required'] instanceof \think\Paginator ) && $form['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form['name']); ?>"><?php echo htmlentities(htmlspecialchars($form['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <input class="form-control tags" type="text" id="<?php echo htmlentities($form['name']); ?>" name="<?php echo htmlentities($form['name']); ?>" value="<?php echo htmlentities($form['value']); ?>" placeholder="输入后请回车确认" <?php echo $form['extra_attr']; ?>>
    </div>
    <?php if(!(empty($form['tips']) || (($form['tips'] instanceof \think\Collection || $form['tips'] instanceof \think\Paginator ) && $form['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
                        <?php break; case "number": ?>
                            
                            <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form['required']) || (($form['required'] instanceof \think\Collection || $form['required'] instanceof \think\Paginator ) && $form['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form['name']); ?>"><?php echo htmlentities(htmlspecialchars($form['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <input class="form-control" type="number" id="<?php echo htmlentities($form['name']); ?>" name="<?php echo htmlentities($form['name']); ?>" value="<?php echo htmlentities($form['value']); ?>" <?php if(isset($form['min']) && $form['min'] !== ''): ?>min="<?php echo htmlentities($form['min']); ?>"<?php endif; if(isset($form['max']) && $form['max'] !== ''): ?>max="<?php echo htmlentities($form['max']); ?>"<?php endif; if(isset($form['step']) && $form['step'] !== ''): ?>step="<?php echo htmlentities($form['step']); ?>"<?php endif; ?> <?php echo $form['extra_attr']; ?>>
    </div>
    <?php if(!(empty($form['tips']) || (($form['tips'] instanceof \think\Collection || $form['tips'] instanceof \think\Paginator ) && $form['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>


                        <?php break; case "password": ?>
                            
                            <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form['required']) || (($form['required'] instanceof \think\Collection || $form['required'] instanceof \think\Paginator ) && $form['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form['name']); ?>"><?php echo htmlentities(htmlspecialchars($form['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <input class="form-control" type="password" id="<?php echo htmlentities($form['name']); ?>" name="<?php echo htmlentities($form['name']); ?>" value="" placeholder="<?php echo htmlentities($form['placeholder']); ?>" <?php echo $form['extra_attr']; ?>>
    </div>
    <?php if(!(empty($form['tips']) || (($form['tips'] instanceof \think\Collection || $form['tips'] instanceof \think\Paginator ) && $form['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
                        <?php break; case "select": ?>
                            
                            <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form['required']) || (($form['required'] instanceof \think\Collection || $form['required'] instanceof \think\Paginator ) && $form['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form['name']); ?>"><?php echo htmlentities(htmlspecialchars($form['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <select class="form-control" id="<?php echo htmlentities($form['name']); ?>" name="<?php echo htmlentities($form['name']); ?>" <?php echo htmlentities((isset($form['extra_attr']) && ($form['extra_attr'] !== '')?$form['extra_attr']:'')); ?>>
            <option value=""><?php echo htmlentities($form['placeholder']); ?></option>
            <?php if(is_array($form['options']) || $form['options'] instanceof \think\Collection || $form['options'] instanceof \think\Paginator): $i = 0; $__LIST__ = $form['options'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;if(is_array($option)): ?>
            <option value="<?php echo htmlentities($key); ?>" <?php if(((string)$form['value'] == (string)$key)): ?>selected<?php endif; if($option['disabled'] == 1): ?>disabled<?php endif; ?>><?php echo htmlentities($option['value']); ?></option>
            <?php else: ?>
            <option value="<?php echo htmlentities($key); ?>" <?php if(((string)$form['value'] == (string)$key)): ?>selected<?php endif; ?>><?php echo htmlentities($option); ?></option>
            <?php endif; ?>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </select>
    </div>
    <?php if(!(empty($form['tips']) || (($form['tips'] instanceof \think\Collection || $form['tips'] instanceof \think\Paginator ) && $form['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
                        <?php break; case "select2": ?>
                            
                            <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form['required']) || (($form['required'] instanceof \think\Collection || $form['required'] instanceof \think\Paginator ) && $form['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form['name']); ?>"><?php echo htmlentities(htmlspecialchars($form['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <select class="select2 form-control" id="<?php echo htmlentities($form['name']); ?>" name="<?php echo htmlentities($form['name']); ?>" data-value="<?php echo htmlentities($form['value']); ?>" <?php echo htmlentities((isset($form['extra_attr']) && ($form['extra_attr'] !== '')?$form['extra_attr']:'')); ?>>
            <option value=""><?php echo htmlentities($form['placeholder']); ?></option>
            <?php if(is_array($form['options']) || $form['options'] instanceof \think\Collection || $form['options'] instanceof \think\Paginator): $i = 0; $__LIST__ = $form['options'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;?>
            <option value="<?php echo htmlentities($key); ?>" <?php if(in_array(($key), is_array($form['value'])?$form['value']:explode(',',$form['value']))): ?>selected<?php endif; ?>><?php echo htmlentities($option); ?></option>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </select>
    </div>
    <?php if(!(empty($form['tips']) || (($form['tips'] instanceof \think\Collection || $form['tips'] instanceof \think\Paginator ) && $form['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
<script>
    $(function () {
        var option = {};
        <?php if(!$form['options']): ?>
        if('<?php echo htmlentities($form['ajax_url']); ?>' !== ''){
            // 启用ajax分页查询
            option = {
                language: "zh-CN",
                //allowClear: true,
                ajax: {
                    delay: 250, // 限速请求
                    url: "<?php echo htmlentities($form['ajax_url']); ?>",   //  请求地址
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
                            data.data.unshift({id: '', name: "", text: "<?php echo htmlentities($form['placeholder']); ?>"});
                        }
                        return {
                            results: data.data,
                            pagination: {
                                //more: (params.page) < data.paginator.totalPages
                                more: (params.page) < data.last_page
                            }
                        };
                    },
                    cache: true
                }
            };
            // 默认值设置
            var defaultValue = $('#<?php echo htmlentities($form['name']); ?>').data("value");
            if (defaultValue) {
                $.ajax({
                    type: "POST",
                    url: "<?php echo htmlentities($form['ajax_url']); ?>",
                    data: {value:defaultValue},
                    dataType: "json",
                    success: function(data){
                        $('#<?php echo htmlentities($form['name']); ?>').append("<option selected value='" + data.key + "'>" + data.value + "</option>");
                    }
                });
            }
        }
        <?php endif; ?>
        $('#<?php echo htmlentities($form['name']); ?>').select2(option);
    })
</script>

                        <?php break; case "image": ?>
                            
                            <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form['required']) || (($form['required'] instanceof \think\Collection || $form['required'] instanceof \think\Paginator ) && $form['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form['name']); ?>"><?php echo htmlentities(htmlspecialchars($form['title'])); ?></label>
    <div class="col-9 col-sm-6 col-md-6 col-lg-6 col-xl-4">
        <input class="form-control" type="text" id="<?php echo htmlentities($form['name']); ?>" name="<?php echo htmlentities($form['name']); ?>" value="<?php echo htmlentities($form['value']); ?>" placeholder="<?php echo htmlentities($form['placeholder']); ?>" <?php echo $form['extra_attr']; ?>>
    </div>
    <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-7 dd_ts dd_ts_img">
        <!--上传图片-->
        <!--用来存放item-->
        <div id="fileList_<?php echo htmlentities($form['name']); ?>" class="uploader-list"></div>
        <div id="filePicker_<?php echo htmlentities($form['name']); ?>"><i class="fa fa-upload m-r-10"></i>选择图片</div>
        <a href="<?php echo !empty($form['value']) ? htmlentities($form['value']) : '/static/admin/images/nopic.png'; ?>" target="_blank">
            <img class="image_preview_info"
                 src="<?php echo !empty($form['value']) ? htmlentities($form['value']) : '/static/admin/images/nopic.png'; ?>"
                 id="<?php echo htmlentities($form['name']); ?>_preview">
        </a>
        <!--上传图片-->
        <?php if(!(empty($form['tips']) || (($form['tips'] instanceof \think\Collection || $form['tips'] instanceof \think\Paginator ) && $form['tips']->isEmpty()))): ?>
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form['tips']; ?>
        </small>
        <?php endif; ?>
    </div>
</div>
<script type="text/javascript">
    webupload('fileList_<?php echo htmlentities($form['name']); ?>', 'filePicker_<?php echo htmlentities($form['name']); ?>', '<?php echo htmlentities($form['name']); ?>_preview', '<?php echo htmlentities($form['name']); ?>', false, '<?php echo htmlentities((isset($system['upload_image_ext']) && ($system['upload_image_ext'] !== '')?$system['upload_image_ext']:"")); ?>', '<?php echo htmlentities((isset($system['upload_image_size']) && ($system['upload_image_size'] !== '')?$system['upload_image_size']:"0")); ?>');
</script>


                        <?php break; case "images": ?>
                            
                            <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
<!-- ZTX-004  by 折腾侠-->
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form['required']) || (($form['required'] instanceof \think\Collection || $form['required'] instanceof \think\Paginator ) && $form['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form['name']); ?>"><?php echo htmlentities(htmlspecialchars($form['title'])); ?></label>
	
	<div class="col-12 col-sm-7 col-md-7 col-lg-7 col-xl-4" >
	<!-- ZTX-004  by 折腾侠-->
        <div class="more_images dd_ts">
            <div id="more_images_<?php echo htmlentities($form['name']); ?>">
                <div class="hide">
                    <input type="text" name="<?php echo htmlentities($form['name']); ?>[]" value="">
                    <input type="text" name="<?php echo htmlentities($form['name']); ?>_title[]" value="">
                    <!-- ZTX-增加缩略图显示 -->
                    <input type="text" name="<?php echo htmlentities($form['name']); ?>_small[]" value="">
                    <!-- ZTX-增加缩略图显示 -->
                </div>
                <?php if(!(empty($form['value']) || (($form['value'] instanceof \think\Collection || $form['value'] instanceof \think\Paginator ) && $form['value']->isEmpty()))): if(is_array($form['value']) || $form['value'] instanceof \think\Collection || $form['value'] instanceof \think\Paginator): $i = 0; $__LIST__ = $form['value'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
				<!-- ZTX-004  by 折腾侠-->
                <div class="row no-gutters">
                    <div class="col-4 col-sm-4">
                        <input type="text" name="<?php echo htmlentities($form['name']); ?>[]" value="<?php echo htmlentities($vo['image']); ?>" class="form-control">
                        <!-- ZTX-增加缩略图显示 -->
                        <input type="text" name="<?php echo htmlentities($form['name']); ?>_small[]" value="<?php echo isset($vo['small']) ? htmlentities($vo['small']) : ''; ?>" class="hide">
                        <!-- ZTX-增加缩略图显示 -->
                    </div>
                    <div class="col-3 col-sm-3">
                        <input type="text" name="<?php echo htmlentities($form['name']); ?>_title[]" value="<?php echo htmlentities($vo['title']); ?>" class="form-control input-sm">
                    </div>
                    <div class="col-4 col-sm-3">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default btn-sm move_up_images">
                                <i class="fa fa-chevron-up"></i>
                            </button>
                            <button type="button" class="btn btn-default btn-sm move_down_images">
                                <i class="fa fa-chevron-down"></i>
                            </button>
                            <button type="button" class="btn btn-default btn-sm remove_images">
                                <i class="fa fa-times"></i>
                            </button>
							
                        </div>
                    </div>
					
					 <div class="col-4 col-sm-2"><a href="<?php echo htmlentities($vo['image']); ?>" target="_blank"> <img class="image_preview_info" src="<?php echo !empty($vo['small']) ? htmlentities($vo['small']) : htmlentities($vo['image']); ?>"  ></a></div>
                </div>
				<!-- ZTX-004  by 折腾侠-->
                <?php endforeach; endif; else: echo "" ;endif; ?>
                <?php endif; ?>
            </div>
			
			
        </div>
		<!-- ZTX-005  by 折腾侠-->
		<div class="row no-gutters">
		 <div class="col-4 col-sm-12">
			<input class="form-control" type="text" id="img" name="site_img_choose" value="" placeholder="从站内选择图片，输入搜索关键词" >
		</div>
		
		
		</div>
		
		
		<!-- ZTX-005  by 折腾侠-->
    </div>
	<!-- ZTX-004  by 折腾侠-->
    <div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-7 dd_ts dd_ts_img">
	<!-- ZTX-004  by 折腾侠-->
        <!--上传图片-->
        <!--用来存放item-->
        <div id="fileList_<?php echo htmlentities($form['name']); ?>" class="uploader-list"></div>
        <div id="filePicker_<?php echo htmlentities($form['name']); ?>"><i class="fa fa-upload m-r-10"></i>上传图片</div>
		
	
		
		
        <!--上传图片-->
        <?php if(!(empty($form['tips']) || (($form['tips'] instanceof \think\Collection || $form['tips'] instanceof \think\Paginator ) && $form['tips']->isEmpty()))): ?>
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form['tips']; ?>
        </small>
        <?php endif; ?>
    </div>
</div>
<script type="text/javascript">
    webupload('fileList_<?php echo htmlentities($form['name']); ?>', 'filePicker_<?php echo htmlentities($form['name']); ?>', '<?php echo htmlentities($form['name']); ?>_preview', '<?php echo htmlentities($form['name']); ?>', true, '<?php echo htmlentities((isset($system['upload_image_ext']) && ($system['upload_image_ext'] !== '')?$system['upload_image_ext']:"")); ?>', '<?php echo htmlentities((isset($system['upload_image_size']) && ($system['upload_image_size'] !== '')?$system['upload_image_size']:"0")); ?>');
</script>
                        <?php break; case "file": ?>
                            
                            <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form['required']) || (($form['required'] instanceof \think\Collection || $form['required'] instanceof \think\Paginator ) && $form['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form['name']); ?>"><?php echo htmlentities(htmlspecialchars($form['title'])); ?></label>
    <div class="col-9 col-sm-6 col-md-6 col-lg-6 col-xl-4">
        <input class="form-control" type="text" id="<?php echo htmlentities($form['name']); ?>" name="<?php echo htmlentities($form['name']); ?>" value="<?php echo htmlentities($form['value']); ?>" placeholder="<?php echo htmlentities($form['placeholder']); ?>" <?php echo $form['extra_attr']; ?>>
    </div>
    <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-7 dd_ts dd_ts_img">
        <!--上传图片-->
        <!--用来存放item-->
        <div id="fileList_<?php echo htmlentities($form['name']); ?>" class="uploader-list"></div>
        <div id="filePicker_<?php echo htmlentities($form['name']); ?>"><i class="fa fa-upload m-r-10"></i>选择文件</div>
        <!--上传图片-->
        <?php if(!(empty($form['tips']) || (($form['tips'] instanceof \think\Collection || $form['tips'] instanceof \think\Paginator ) && $form['tips']->isEmpty()))): ?>
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form['tips']; ?>
        </small>
        <?php endif; ?>
    </div>
</div>
<script type="text/javascript">
    webupload('fileList_<?php echo htmlentities($form['name']); ?>', 'filePicker_<?php echo htmlentities($form['name']); ?>', '<?php echo htmlentities($form['name']); ?>_preview', '<?php echo htmlentities($form['name']); ?>', false, '<?php echo htmlentities((isset($system['upload_file_ext']) && ($system['upload_file_ext'] !== '')?$system['upload_file_ext']:"")); ?>', '<?php echo htmlentities((isset($system['upload_file_size']) && ($system['upload_file_size'] !== '')?$system['upload_file_size']:"0")); ?>', 'file');
</script>


                        <?php break; case "files": ?>
                            
                            <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form['required']) || (($form['required'] instanceof \think\Collection || $form['required'] instanceof \think\Paginator ) && $form['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form['name']); ?>"><?php echo htmlentities(htmlspecialchars($form['title'])); ?></label>
    <div class="col-9 col-sm-7 col-md-7 col-lg-7 col-xl-4">
        <div class="more_images dd_ts">
            <div id="more_images_<?php echo htmlentities($form['name']); ?>">
                <div class="hide">
                    <input type="text" name="<?php echo htmlentities($form['name']); ?>[]" value="">
                    <input type="text" name="<?php echo htmlentities($form['name']); ?>_title[]" value="">
                </div>
                <?php if(!(empty($form['value']) || (($form['value'] instanceof \think\Collection || $form['value'] instanceof \think\Paginator ) && $form['value']->isEmpty()))): if(is_array($form['value']) || $form['value'] instanceof \think\Collection || $form['value'] instanceof \think\Paginator): $i = 0; $__LIST__ = $form['value'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <!-- ZTX-002  by 折腾侠删除原有代码，改为跟图片显示容器一样的代码-->
                <div class="row no-gutters">
                    <div class="col-4 col-sm-6">
                        <input type="text" name="<?php echo htmlentities($form['name']); ?>[]" value="<?php echo htmlentities($vo['image']); ?>" class="form-control">
                    </div>
                    <div class="col-3 col-sm-3">
                        <input type="text" name="<?php echo htmlentities($form['name']); ?>_title[]" value="<?php echo htmlentities($vo['title']); ?>" class="form-control input-sm">
                    </div>
                    <div class="col-4 col-sm-3">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default btn-sm move_up_images">
                                <i class="fa fa-chevron-up"></i>
                            </button>
                            <button type="button" class="btn btn-default btn-sm move_down_images">
                                <i class="fa fa-chevron-down"></i>
                            </button>
                            <button type="button" class="btn btn-default btn-sm remove_images">
                                <i class="fa fa-times"></i>
                            </button>
							
                        </div>
                    </div>
					 </div>
					
				<!-- ZTX-002  by 折腾侠 删除原有代码，改为跟图片显示容器一样的代码-->
                <?php endforeach; endif; else: echo "" ;endif; ?>
                <?php endif; ?>
            </div>
        </div>
		<!-- ZTX-005  by 折腾侠-->
		<div class="row no-gutters">
		 <div class="col-4 col-sm-12">
			<input class="form-control" type="text" id="file" name="site_file_choose" value="" placeholder="从站内选择文件，输入搜索关键词" >
		</div>
		
		
		</div>
		
		
		<!-- ZTX-005  by 折腾侠-->
    </div>
    <div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-7 dd_ts dd_ts_img">
        <!--上传图片-->
        <!--用来存放item-->
        <div id="fileList_<?php echo htmlentities($form['name']); ?>" class="uploader-list"></div>
        <div id="filePicker_<?php echo htmlentities($form['name']); ?>"><i class="fa fa-upload m-r-10"></i>选择文件</div>
        <!--上传图片-->
        <?php if(!(empty($form['tips']) || (($form['tips'] instanceof \think\Collection || $form['tips'] instanceof \think\Paginator ) && $form['tips']->isEmpty()))): ?>
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form['tips']; ?>
        </small>
        <?php endif; ?>
    </div>
</div>
<script type="text/javascript">
    webupload('fileList_<?php echo htmlentities($form['name']); ?>', 'filePicker_<?php echo htmlentities($form['name']); ?>', '<?php echo htmlentities($form['name']); ?>_preview', '<?php echo htmlentities($form['name']); ?>', true, '<?php echo htmlentities((isset($system['upload_file_ext']) && ($system['upload_file_ext'] !== '')?$system['upload_file_ext']:"")); ?>', '<?php echo htmlentities((isset($system['upload_file_size']) && ($system['upload_file_size'] !== '')?$system['upload_file_size']:"0")); ?>', 'file');
</script>
                        <?php break; case "editor": ?>
                            
                            <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form['required']) || (($form['required'] instanceof \think\Collection || $form['required'] instanceof \think\Paginator ) && $form['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form['name']); ?>"><?php echo htmlentities(htmlspecialchars($form['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-8 col-xl-7">
        <textarea id="<?php echo htmlentities($form['name']); ?>" name="<?php echo htmlentities($form['name']); ?>" <?php echo $form['extra_attr']; ?> style="width:100%;height: <?php echo htmlentities($form['height']); ?>px"><?php echo htmlentities($form['value']); ?></textarea>
    </div>
    <?php if(!(empty($form['tips']) || (($form['tips'] instanceof \think\Collection || $form['tips'] instanceof \think\Paginator ) && $form['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-2 col-xl-4 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
<script>
    <?php if($system['editor'] == '1'): ?>
    UE.delEditor('<?php echo htmlentities($form['name']); ?>');
    UE.getEditor('<?php echo htmlentities($form['name']); ?>', {
        serverUrl: "<?php echo url('Upload/index',['from'=>'ueditor']); ?>",
    });
    <?php else: ?>
    CKEDITOR.replace('<?php echo htmlentities($form['name']); ?>', {height: '<?php echo htmlentities($form['height']); ?>px'});
    <?php endif; ?>
</script>
                        <?php break; case "button": ?>
                            
                            <div class="row dd_input_group no-gutters" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <div class="form-group">
        <div class="col-12">
            <?php if($form['elemtype'] == "button"): ?>
            <button class="btn btn-flat <?php echo htmlentities((isset($form['class']) && ($form['class'] !== '')?$form['class']:'btn-primary')); ?>" id="<?php echo htmlentities((isset($form['id']) && ($form['id'] !== '')?$form['id']:'')); ?>" type="button" <?php echo (isset($form['data']) && ($form['data'] !== '')?$form['data']:''); if(isset($form['disabled'])): ?>disabled<?php endif; ?>>
            <i class="<?php echo htmlentities((isset($form['icon']) && ($form['icon'] !== '')?$form['icon']:'')); ?>"></i> <?php echo htmlentities((isset($form['title']) && ($form['title'] !== '')?$form['title']:'')); ?></button>
            <?php else: ?>
            <a class="btn btn-flat <?php echo htmlentities((isset($form['class']) && ($form['class'] !== '')?$form['class']:'btn-primary')); if(isset($form['disabled'])): ?> disabled<?php endif; ?>" id="<?php echo htmlentities((isset($form['id']) && ($form['id'] !== '')?$form['id']:'')); ?>" title="<?php echo htmlentities((isset($form['title']) && ($form['title'] !== '')?$form['title']:'')); ?>" target="<?php echo htmlentities((isset($form['target']) && ($form['target'] !== '')?$form['target']:'')); ?>" href="<?php echo htmlentities((isset($form['href']) && ($form['href'] !== '')?$form['href']:'')); ?>" <?php echo (isset($form['data']) && ($form['data'] !== '')?$form['data']:''); ?>><i class="<?php echo htmlentities((isset($form['icon']) && ($form['icon'] !== '')?$form['icon']:'')); ?>"></i> <?php echo htmlentities((isset($form['title']) && ($form['title'] !== '')?$form['title']:'')); ?></a>
            <?php endif; ?>
        </div>
    </div>
</div>
                        <?php break; case "hidden": ?>
                            
                            <div class="row dd_input_group hide <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <div class="form-group">
        <input type="hidden" name="<?php echo htmlentities($form['name']); ?>" value="<?php echo htmlentities((isset($form['value']) && ($form['value'] !== '')?$form['value']:'')); ?>" id="<?php echo htmlentities($form['name']); ?>" <?php echo (isset($form['extra_attr']) && ($form['extra_attr'] !== '')?$form['extra_attr']:''); ?>>
    </div>
</div>


                        <?php break; case "html": ?>
                            
                            <?php echo $form['html']; break; case "color": ?>
                            
                            <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form['required']) || (($form['required'] instanceof \think\Collection || $form['required'] instanceof \think\Paginator ) && $form['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form['name']); ?>"><?php echo htmlentities(htmlspecialchars($form['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <div class="input-group <?php echo htmlentities($form['name']); ?>-colorpicker">
            <input class="form-control" type="text" id="<?php echo htmlentities($form['name']); ?>" name="<?php echo htmlentities($form['name']); ?>" value="<?php echo htmlentities($form['value']); ?>" placeholder="<?php echo htmlentities($form['placeholder']); ?>" <?php echo $form['extra_attr']; ?>>
            <div class="input-group-append">
                <span class="input-group-text">
                    <i class="fas fa-square" <?php if($form['value']): ?>style="color: <?php echo htmlentities($form['value']); ?>"<?php endif; ?>></i>
                </span>
            </div>
        </div>
    </div>
    <?php if(!(empty($form['tips']) || (($form['tips'] instanceof \think\Collection || $form['tips'] instanceof \think\Paginator ) && $form['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
<script>
    $(function () {
        $('.<?php echo htmlentities($form['name']); ?>-colorpicker').colorpicker()
        $('.<?php echo htmlentities($form['name']); ?>-colorpicker').on('colorpickerChange', function(event) {
            $('.<?php echo htmlentities($form['name']); ?>-colorpicker .fa-square').css('color', event.color.toString());
        });
    })
</script>
                        <?php break; case "code": ?>
                            
                            <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form['required']) || (($form['required'] instanceof \think\Collection || $form['required'] instanceof \think\Paginator ) && $form['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form['name']); ?>"><?php echo htmlentities(htmlspecialchars($form['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-8 col-xl-7">
        <textarea id="<?php echo htmlentities($form['name']); ?>" name="<?php echo htmlentities($form['name']); ?>" <?php echo $form['extra_attr']; ?>><?php echo htmlentities($form['value']); ?></textarea>
    </div>
    <?php if(!(empty($form['tips']) || (($form['tips'] instanceof \think\Collection || $form['tips'] instanceof \think\Paginator ) && $form['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-2 col-xl-4 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
<script>
    $(function () {
        // CodeMirror
        var codeEditor = CodeMirror.fromTextArea(document.getElementById("<?php echo htmlentities($form['name']); ?>"), {
            mode: "<?php echo htmlentities($form['mode']); ?>",     // 编辑器语言
            theme: "<?php echo htmlentities($form['theme']); ?>",   // 编辑器主题
            lineNumbers: true,              // 显示行号
            showCursorWhenSelecting: true,  // 文本选中时显示光标
            lineWrapping: true,             // 代码折叠
        });
        codeEditor.setSize('auto',"<?php echo htmlentities($form['height']); ?>px");
    })
</script>
                        <?php break; case "linkage": 
    // 获取一级联动数据
    $levelOne  = getLinkageData($form['model'], 0, $form['pid']);
    $levelKey  = [];
    $levelData = [];

    // 默认值
    if ($form['value'] != '') {
        $levelKeyData = getLinkageAllData($form['model'], $form['value'], $form['key'], $form['option'], $form['pid']);
        $levelKey = $levelKeyData['key'];
        $levelData = $levelKeyData['data'];
        sort($levelKey); // 升序排序
        $levelData = array_reverse($levelData); // 以相反的元素顺序返回数组
    }
 ?>
<div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form['required']) || (($form['required'] instanceof \think\Collection || $form['required'] instanceof \think\Paginator ) && $form['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form['name']); ?>"><?php echo htmlentities(htmlspecialchars($form['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-8 col-xl-7">
        <select class="form-control js_linkage" data-model="<?php echo htmlentities($form['model']); ?>" data-key="<?php echo htmlentities($form['key']); ?>" data-key_value="<?php echo htmlentities($form['option']); ?>" data-pid_field_name="<?php echo htmlentities((isset($form['pid']) && ($form['pid'] !== '')?$form['pid']:'pid')); ?>" data-next_level_id="<?php echo htmlentities($form['name']); ?>_2" id="<?php echo htmlentities($form['name']); ?>_1" name="<?php echo htmlentities($form['name']); if($form['level'] > '1'): ?>_1<?php endif; ?>" data-placeholder="<?php echo htmlentities($form['placeholder']); ?>" <?php echo htmlentities((isset($form['extra_attr']) && ($form['extra_attr'] !== '')?$form['extra_attr']:'')); ?> data-ajax_url="<?php echo htmlentities($form['ajax_url']); ?>" style="width: auto; display: inline-block">
            <option value=""><?php echo htmlentities($form['placeholder']); ?></option>
            <?php if(is_array($levelOne) || $levelOne instanceof \think\Collection || $levelOne instanceof \think\Paginator): $i = 0; $__LIST__ = $levelOne;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;if($form['level'] == '1'): ?>
                <option value="<?php echo htmlentities($option[$form['key']]); ?>" <?php if(($form['value'] == (string)$option[$form['key']])): ?>selected<?php endif; ?>><?php echo $option[$form['option']]; ?></option>
            <?php else: ?>
                <option value="<?php echo htmlentities($option[$form['key']]); ?>" <?php if((isset($levelKey[1]) && $levelKey[1] == (string)$option[$form['key']])): ?>selected<?php endif; ?>><?php echo $option[$form['option']]; ?></option>
            <?php endif; ?>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </select>
        <?php if($form['level'] == '2'): ?>
        <select class="form-control" id="<?php echo htmlentities($form['name']); ?>_2" name="<?php echo htmlentities($form['name']); ?>" data-placeholder="<?php echo htmlentities($form['placeholder']); ?>" <?php echo htmlentities((isset($form['extra_attr']) && ($form['extra_attr'] !== '')?$form['extra_attr']:'')); ?> style="width: auto; display: inline-block">
            <option value=""><?php echo htmlentities($form['placeholder']); ?></option>
            <?php if(!(empty($levelData['1']) || (($levelData['1'] instanceof \think\Collection || $levelData['1'] instanceof \think\Paginator ) && $levelData['1']->isEmpty()))): if(is_array($levelData['1']) || $levelData['1'] instanceof \think\Collection || $levelData['1'] instanceof \think\Paginator): $i = 0; $__LIST__ = $levelData['1'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;?>
            <option value="<?php echo htmlentities($option[$form['key']]); ?>" <?php if(($form['value'] == (string)$option[$form['key']])): ?>selected<?php endif; ?>><?php echo $option[$form['option']]; ?></option>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            <?php endif; ?>
        </select>
        <?php endif; if($form['level'] == '3'): ?>
        <select class="form-control js_linkage" data-model="<?php echo htmlentities($form['model']); ?>" data-key="<?php echo htmlentities($form['key']); ?>" data-key_value="<?php echo htmlentities($form['option']); ?>" data-pid_field_name="<?php echo htmlentities((isset($form['pid']) && ($form['pid'] !== '')?$form['pid']:'pid')); ?>" data-next_level_id="<?php echo htmlentities($form['name']); ?>_3" id="<?php echo htmlentities($form['name']); ?>_2" name="<?php echo htmlentities($form['name']); ?>_2" data-placeholder="<?php echo htmlentities($form['placeholder']); ?>" <?php echo htmlentities((isset($form['extra_attr']) && ($form['extra_attr'] !== '')?$form['extra_attr']:'')); ?> data-ajax_url="<?php echo htmlentities($form['ajax_url']); ?>" style="width: auto; display: inline-block">
            <option value=""><?php echo htmlentities($form['placeholder']); ?></option>
            <?php if(!(empty($levelData['1']) || (($levelData['1'] instanceof \think\Collection || $levelData['1'] instanceof \think\Paginator ) && $levelData['1']->isEmpty()))): if(is_array($levelData['1']) || $levelData['1'] instanceof \think\Collection || $levelData['1'] instanceof \think\Paginator): $i = 0; $__LIST__ = $levelData['1'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;?>
            <option value="<?php echo htmlentities($option[$form['key']]); ?>" <?php if((isset($levelKey[2]) && $levelKey[2] == (string)$option[$form['key']])): ?>selected<?php endif; ?>><?php echo $option[$form['option']]; ?></option>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            <?php endif; ?>
        </select>
        <select class="form-control" id="<?php echo htmlentities($form['name']); ?>_3" name="<?php echo htmlentities($form['name']); ?>" data-placeholder="<?php echo htmlentities($form['placeholder']); ?>" <?php echo htmlentities((isset($form['extra_attr']) && ($form['extra_attr'] !== '')?$form['extra_attr']:'')); ?> style="width: auto; display: inline-block">
            <option value=""><?php echo htmlentities($form['placeholder']); ?></option>
            <?php if(!(empty($levelData['2']) || (($levelData['2'] instanceof \think\Collection || $levelData['2'] instanceof \think\Paginator ) && $levelData['2']->isEmpty()))): if(is_array($levelData['2']) || $levelData['2'] instanceof \think\Collection || $levelData['2'] instanceof \think\Paginator): $i = 0; $__LIST__ = $levelData['2'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;?>
            <option value="<?php echo htmlentities($option[$form['key']]); ?>" <?php if(($form['value'] == (string)$option[$form['key']])): ?>selected<?php endif; ?>><?php echo $option[$form['option']]; ?></option>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            <?php endif; ?>
        </select>
        <?php endif; ?>
    </div>
    <?php if(!(empty($form['tips']) || (($form['tips'] instanceof \think\Collection || $form['tips'] instanceof \think\Paginator ) && $form['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-2 col-xl-4 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
                        <?php break; default: ?>

                    <?php endswitch; ?>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                    <!---->
                    <div class="row dd_input_group form-builder-submit no-gutters">
                        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-11 offset-sm-2 offset-md-2 offset-lg-2 offset-xl-1">
                            <?php if(isset($btn_hide) && !in_array('submit', $btn_hide)): ?>
                            <button type="submit" class="btn btn-flat btn-primary <?php if($layer == true): ?>hide<?php endif; ?>"><?php echo htmlentities((isset($btn_title['submit']) && ($btn_title['submit'] !== '')?$btn_title['submit']:'提 交')); ?></button>
                            <?php endif; if(isset($btn_hide) && !in_array('back', $btn_hide)): ?>
                            <button type="button" class="btn btn-flat btn-default <?php if($layer == true): ?>hide<?php endif; ?>" onclick="javascript :history.back(-1)"><?php echo htmlentities((isset($btn_title['back']) && ($btn_title['back'] !== '')?$btn_title['back']:'返 回')); ?></button>
                            <?php endif; foreach($btn_extra as $key=>$vo): ?>
                            <?php echo (isset($vo) && ($vo !== '')?$vo:''); ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <!-- /.box -->
                <?php else: ?>
                    <div class="box box-body">
                        <?php echo $empty_tips; ?>
                    </div>
                    <!-- /.box -->
                <?php endif; ?>
            </form>
            <!--底部提示-->
            <?php if(!(empty($page_tips_bottom) || (($page_tips_bottom instanceof \think\Collection || $page_tips_bottom instanceof \think\Paginator ) && $page_tips_bottom->isEmpty()))): ?>
            <div class="col-12 alert alert-<?php echo htmlentities($tips_type); ?> alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <p><?php echo $page_tips_bottom; ?></p>
            </div>
            <?php endif; ?>
            
            <?php echo (isset($extra_html_content_bottom) && ($extra_html_content_bottom !== '')?$extra_html_content_bottom:''); ?>
            
            <?php echo (isset($extra_js) && ($extra_js !== '')?$extra_js:''); ?>
			
	<script>
	
	
	
	
	
	
	// ZTX-002折腾侠：增加从服务器上删除对应文件的操作	
	$(document).on('click', '.remove_images', function () {
var file = $(this).parent().parent().parent().find("input[name='images[]']").val();
var file_type='image';
if(typeof file == "undefined" ){
file = $(this).parent().parent().parent().find("input[name='files_test[]']").val();
file_type='file';
}
var remove = $(this).parent().parent().parent();
	layer.confirm("是否删除原文件",{
	icon: 3,
    title: "系统提示",
    btn: ['是', '否']
	}, function (index) {
	//第一个按钮运行的函数，传递index（当前层）参数
		// 删除服务器上的文件
		if (file=='') {
				remove.remove();
            }
			else{
			 $.ajax({
                    type: "POST",
                    url: "/admin/Index/file_del",
                    data:{file:file,file_type:file_type},
                    dataType: "json",
                    success: function(data){
					 switch (data) {
                    case ("1"):
                       console.log('删除成功');
					   remove.remove();
                        break;
                    case ("0"):
                        console.log('文件不存在');
						remove.remove();
                        break;
                    case ("2"):
                      console.log('删除失败');
                        break;
						default:
						console.log('删除失败,原因不明');
                        break;
								 }}
                    });
			}
	layer.close(index);
	}, function(){
	//第二个按钮运行的函数
		// 仅删除标签
		remove.remove();
	});// 折腾侠：增加从服务器上删除对应文件的操作
  // ZTX-002折腾侠：增加从服务器上删除对应文件的操作	
})

// ZTX-选择图标
$( function() {

    if($('[icon]').length >0 ){
        $( '[icon]' ).autocomplete({
	
    source:function(request, response){
     $.ajax({
                  type: "POST",
                  url: "/admin/Index/autocomplete_icon",
                  data:{key:request.term},
                  dataType: "json",
                  success: function(data){
                  
                      response(data);
                  }
              });
    },
    select: function (event, ui) {    // 下拉框选中事件
          
        $(this).val( ui.item.code);
        return false;
      }
  }).autocomplete( "instance" )._renderItem = function( ul, item ) {
                  return $( "<li>" )
                      .append( '<div class="mb-2"> <i class="'+item.code+'"></i> <span class="align-middle">'+item.code+'  '+item.name+'</span> </div>')
                      .appendTo( ul );
                      };

    }
//ZTX-005从站内选择图片
if($( '[name="site_img_choose"]' ).length >0 ){


    $( '[name="site_img_choose"]' ).autocomplete({
	
      source:function(request, response){
	   $.ajax({
                    type: "POST",
                    url: "/admin/Index/autocomplete_file",
                    data:{where:[['link','like','%'+request.term+'%'],['file_type','like','%img%']]},
                    dataType: "json",
                    success: function(data){
					
                        response(data);
                    }
                });
	  },
	  select: function (event, ui) {    // 下拉框选中事件
            
		 var images = '' +
                    '<div class="row no-gutters">' +
                    '   <div class="col-4 col-sm-4"><input type="text" name="images[]" value="' + ui.item.link + '" class="form-control"/></div>' +
                    '   <div class="col-3 col-sm-3"><input class="form-control input-sm" type="text" name="images_title[]" value="' + ui.item.name + '" ></div>' +
                    '   <div class="col-4 col-sm-3">' +
                    '       <div class="btn-group">' +
                    '           <button type="button" class="btn btn-default btn-sm move_up_images"><i class="fa fa-chevron-up"></i></button>' +
                    '           <button type="button" class="btn btn-default btn-sm move_down_images"><i class="fa fa-chevron-down"></i></button>' +
                    '           <button type="button" class="btn btn-default btn-sm remove_images"><i class="fa fa-times"></i></button>' +
                    '       </div>' +
                    '   </div>' +
					'   <div class="col-4 col-sm-2"><a href="'+ ui.item.link +'" target="_blank"> <img class="images_preview_info" src="'+ ui.item.link +'"  ></a></div>'+
					
					
                    '</div>';
                var images_list = $('#more_images_images').html();

                $('#more_images_images').html(images + images_list);
            return false;
        }
    }).autocomplete( "instance" )._renderItem = function( ul, item ) {
                    return $( "<li>" )
                        .append( '<div><img  width="100" height="100" src="'+item.link+'"><a>' + item.name + '</a></div>')
                        .appendTo( ul );
						};}
						
						//站内文件选择
	if($( '[name="site_file_choose"]' ).length >0 ){
	 $( '[name="site_file_choose"]' ).autocomplete({
	
      source:function(request, response){
	   $.ajax({
                    type: "POST",
                    url: "/admin/Index/autocomplete_file",
                    data:{where:[['link','like','%'+request.term+'%'],['file_type','like','%file%']]},
                    dataType: "json",
                    success: function(data){
					
                        response(data);
                    }
                });
	  },
	  select: function (event, ui) {    // 下拉框选中事件
            
		 var images = '' +
                    '<div class="row no-gutters">' +
                    '   <div class="col-4 col-sm-6"><input type="text" name="images[]" value="' + ui.item.link + '" class="form-control"/></div>' +
                    '   <div class="col-3 col-sm-3"><input class="form-control input-sm" type="text" name="images_title[]" value="' + ui.item.name + '" ></div>' +
                    '   <div class="col-4 col-sm-3">' +
                    '       <div class="btn-group">' +
                    '           <button type="button" class="btn btn-default btn-sm move_up_images"><i class="fa fa-chevron-up"></i></button>' +
                    '           <button type="button" class="btn btn-default btn-sm move_down_images"><i class="fa fa-chevron-down"></i></button>' +
                    '           <button type="button" class="btn btn-default btn-sm remove_images"><i class="fa fa-times"></i></button>' +
                    '       </div>' +
                    '   </div>' +
					
					
					
                    '</div>';
                var images_list = $('#more_images_files_test').html();

                $('#more_images_files_test').html(images + images_list);
            return false;
        }
    }).autocomplete( "instance" )._renderItem = function( ul, item ) {
                    return $( "<li>" )
                        .append( '<div>' + item.name + '</a></div>')
                        .appendTo( ul );
						}
  } });
  
  
  </script>
			
			
        </div>
    </div>
</div>

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
    <div class="container-fluid">
        <div class="row">
            
            <?php echo (isset($extra_html_content_top) && ($extra_html_content_top !== '')?$extra_html_content_top:''); ?>
            <!--顶部提示开始-->
            <?php if(!(empty($page_tips_top) || (($page_tips_top instanceof \think\Collection || $page_tips_top instanceof \think\Paginator ) && $page_tips_top->isEmpty()))): ?>
            <div class="col-12 alert alert-<?php echo htmlentities($tips_type); ?> alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <p><?php echo $page_tips_top; ?></p>
            </div>
            <?php endif; ?>
            <!--顶部提示结束-->
            <?php if($layer == false): if(isset($page_tips_search) OR $show_all): ?>
            <div class="col-12 callout search">
                <form action="" data-pjax-other>
                    <?php if(!(empty($page_tips_search) || (($page_tips_search instanceof \think\Collection || $page_tips_search instanceof \think\Paginator ) && $page_tips_search->isEmpty()))): ?><?php echo $page_tips_search; ?><?php endif; if($show_all): ?>
                    <a class="btn btn-flat btn-primary" href="<?php echo url('index'); ?>"><i class="fa fa-list-ul m-r-10"></i>查看全部</a>
                    <?php endif; ?>
                    <a class="btn btn-flat btn-success f_r" onclick="javascript :history.back(-1)"><i class="fa fa-undo m-r-10"></i>返 回</a>
                </form>
            </div>
            <?php endif; ?>
            <?php endif; ?>
            <!--数据表开始-->
            <form name="form-builder" class="col-12 form_builder" method="<?php echo htmlentities($form_method); ?>" action="<?php echo htmlentities($form_url); ?>"  <?php if(!empty($submit_confirm)) echo 'submit_confirm'; ?> >
                <!---->
                <?php if($form_items): ?>
                    <!---->
                    <?php if(is_array($form_items) || $form_items instanceof \think\Collection || $form_items instanceof \think\Paginator): $i = 0; $__LIST__ = $form_items;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$form): $mod = ($i % 2 );++$i;switch($form['type']): case "group": ?>
                            
                            <ul class="nav nav-tabs" id="builder-form-group-tab" role="tablist">
    <?php if(is_array($form['options']) || $form['options'] instanceof \think\Collection || $form['options'] instanceof \think\Paginator): $items_key = 0; $__LIST__ = $form['options'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($items_key % 2 );++$items_key;?>
    <li class="nav-item">
        <a class="nav-link <?php if($items_key == '1'): ?>active<?php endif; ?>" id="nav-tab-<?php echo htmlentities($items_key); ?>" href="#nav-tab-content-<?php echo htmlentities($items_key); ?>" role="tab" data-toggle="tab"><?php echo htmlentities(htmlspecialchars($key)); ?></a>
    </li>
    <?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
<div class="tab-content no-padding">
    <?php if(is_array($form['options']) || $form['options'] instanceof \think\Collection || $form['options'] instanceof \think\Paginator): $items_key = 0; $__LIST__ = $form['options'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$items): $mod = ($items_key % 2 );++$items_key;?>
    <div class="tab-pane <?php if($items_key == '1'): ?>active<?php endif; ?>" id="nav-tab-content-<?php echo htmlentities($items_key); ?>" >
    <?php if(is_array($items) || $items instanceof \think\Collection || $items instanceof \think\Paginator): $i = 0; $__LIST__ = $items;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$form_group): $mod = ($i % 2 );++$i;switch($form_group['type']): case "text": ?>
                
                <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form_group['required']) || (($form_group['required'] instanceof \think\Collection || $form_group['required'] instanceof \think\Paginator ) && $form_group['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form_group['name']); ?>"><?php echo htmlentities(htmlspecialchars($form_group['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <?php if(!(empty($form_group['group']) || (($form_group['group'] instanceof \think\Collection || $form_group['group'] instanceof \think\Paginator ) && $form_group['group']->isEmpty()))): ?>
        <div class="input-group">
            <?php endif; if(!(empty($form_group['group']['0']) || (($form_group['group']['0'] instanceof \think\Collection || $form_group['group']['0'] instanceof \think\Paginator ) && $form_group['group']['0']->isEmpty()))): ?>
            <div class="input-group-prepend">
                <span class="input-group-text"><?php echo $form_group['group']['0']; ?></span>
            </div>
            <?php endif; ?>
            <input class="form-control" type="text" id="<?php echo htmlentities($form_group['name']); ?>" name="<?php echo htmlentities($form_group['name']); ?>" value="<?php echo htmlentities($form_group['value']); ?>" placeholder="<?php echo htmlentities($form_group['placeholder']); ?>" <?php echo $form_group['extra_attr']; ?>>
            <?php if(!(empty($form_group['group']['1']) || (($form_group['group']['1'] instanceof \think\Collection || $form_group['group']['1'] instanceof \think\Paginator ) && $form_group['group']['1']->isEmpty()))): ?>
            <div class="input-group-append">
                <span class="input-group-text"><?php echo $form_group['group']['1']; ?></span>
            </div>
            <?php endif; if(!(empty($form_group['group']) || (($form_group['group'] instanceof \think\Collection || $form_group['group'] instanceof \think\Paginator ) && $form_group['group']->isEmpty()))): ?>
        </div>
        <?php endif; ?>
    </div>
    <?php if(!(empty($form_group['tips']) || (($form_group['tips'] instanceof \think\Collection || $form_group['tips'] instanceof \think\Paginator ) && $form_group['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form_group['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
            <?php break; case "textarea": ?>
                
                <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form_group['required']) || (($form_group['required'] instanceof \think\Collection || $form_group['required'] instanceof \think\Paginator ) && $form_group['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form_group['name']); ?>"><?php echo htmlentities(htmlspecialchars($form_group['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <textarea class="form-control" id="<?php echo htmlentities($form_group['name']); ?>" name="<?php echo htmlentities($form_group['name']); ?>" rows="<?php echo htmlentities((isset($form_group['rows']) && ($form_group['rows'] !== '')?$form_group['rows']:'3')); ?>" placeholder="<?php echo htmlentities($form_group['placeholder']); ?>" <?php echo $form_group['extra_attr']; ?>><?php echo htmlentities($form_group['value']); ?></textarea>
    </div>
    <?php if(!(empty($form_group['tips']) || (($form_group['tips'] instanceof \think\Collection || $form_group['tips'] instanceof \think\Paginator ) && $form_group['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form_group['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
            <?php break; case "radio": ?>
                
                <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form_group['required']) || (($form_group['required'] instanceof \think\Collection || $form_group['required'] instanceof \think\Paginator ) && $form_group['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form_group['name']); ?>"><?php echo htmlentities(htmlspecialchars($form_group['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4 dd_radio_lable_left border-white">
        <?php if(is_array($form_group['options']) || $form_group['options'] instanceof \think\Collection || $form_group['options'] instanceof \think\Paginator): $i = 0; $__LIST__ = $form_group['options'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;?>
        <div class="icheck-peterriver icheck-inline">
            <input type="radio" name="<?php echo htmlentities($form_group['name']); ?>" class="dd_radio" id="<?php echo htmlentities($form_group['name']); ?><?php echo htmlentities($i); ?>" value="<?php echo htmlentities($key); ?>" <?php if($key == (isset($form_group['value']) && ($form_group['value'] !== '')?$form_group['value']:'')): ?>checked<?php endif; ?> <?php echo (isset($form_group['extra_attr']) && ($form_group['extra_attr'] !== '')?$form_group['extra_attr']:''); ?>>
            <label for="<?php echo htmlentities($form_group['name']); ?><?php echo htmlentities($i); ?>"><?php echo htmlspecialchars($option); ?></label>
        </div>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
    <?php if(!(empty($form_group['tips']) || (($form_group['tips'] instanceof \think\Collection || $form_group['tips'] instanceof \think\Paginator ) && $form_group['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form_group['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
            <?php break; case "checkbox": ?>
                
                <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form_group['required']) || (($form_group['required'] instanceof \think\Collection || $form_group['required'] instanceof \think\Paginator ) && $form_group['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form_group['name']); ?>"><?php echo htmlentities(htmlspecialchars($form_group['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <div class="dd_radio_lable_left border-white">
            <input type="hidden" name="<?php echo htmlentities($form_group['name']); ?>[]" value="">
            <?php if(is_array($form_group['options']) || $form_group['options'] instanceof \think\Collection || $form_group['options'] instanceof \think\Paginator): $i = 0; $__LIST__ = $form_group['options'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;?>
            <div class="icheck-peterriver icheck-inline">
                <input type="checkbox" name="<?php echo htmlentities($form_group['name']); ?>[]" class="dd_radio" id="<?php echo htmlentities($form_group['name']); ?><?php echo htmlentities($i); ?>" value="<?php echo htmlentities($key); ?>" <?php if(in_array(($key), is_array((isset($form_group['value']) && ($form_group['value'] !== '')?$form_group['value']:''))?(isset($form_group['value']) && ($form_group['value'] !== '')?$form_group['value']:''):explode(',',(isset($form_group['value']) && ($form_group['value'] !== '')?$form_group['value']:'')))): ?>checked<?php endif; ?> <?php echo (isset($form_group['extra_attr']) && ($form_group['extra_attr'] !== '')?$form_group['extra_attr']:''); ?>>
                <label for="<?php echo htmlentities($form_group['name']); ?><?php echo htmlentities($i); ?>"><?php echo htmlspecialchars($option); ?></label>
            </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </div>
    <?php if(!(empty($form_group['tips']) || (($form_group['tips'] instanceof \think\Collection || $form_group['tips'] instanceof \think\Paginator ) && $form_group['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form_group['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
            <?php break; case "date": ?>
                
                <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form_group['required']) || (($form_group['required'] instanceof \think\Collection || $form_group['required'] instanceof \think\Paginator ) && $form_group['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form_group['name']); ?>"><?php echo htmlentities(htmlspecialchars($form_group['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <div class="input-group date" id="reservationdate_<?php echo htmlentities($form_group['name']); ?>"
             data-date-format="<?php echo htmlentities(convert_php_to_moment_format($form_group['format'])); ?>" data-target-input="nearest">
            <input class="form-control" type="text" id="<?php echo htmlentities($form_group['name']); ?>" name="<?php echo htmlentities($form_group['name']); ?>"
                   value="<?php echo htmlentities((isset($form_group['value']) && ($form_group['value'] !== '')?$form_group['value']:'')); ?>" placeholder="<?php echo htmlentities($form_group['placeholder']); ?>"
                   autocomplete="off" <?php echo $form_group['extra_attr']; ?>>
            <div class="input-group-append" data-target="#reservationdate_<?php echo htmlentities($form_group['name']); ?>"
                 data-toggle="datetimepicker">
                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
            </div>
        </div>
    </div>
    <?php if(!(empty($form_group['tips']) || (($form_group['tips'] instanceof \think\Collection || $form_group['tips'] instanceof \think\Paginator ) && $form_group['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form_group['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
<script>
    $(function () {
        $('#reservationdate_<?php echo htmlentities($form_group['name']); ?>').datetimepicker();
    })
</script>
            <?php break; case "time": ?>
                
                <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form_group['required']) || (($form_group['required'] instanceof \think\Collection || $form_group['required'] instanceof \think\Paginator ) && $form_group['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form_group['name']); ?>"><?php echo htmlentities(htmlspecialchars($form_group['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <div class="input-group date" id="timepicker_<?php echo htmlentities($form_group['name']); ?>"
             data-date-format="<?php echo htmlentities(convert_php_to_moment_format($form_group['format'])); ?>" data-target-input="nearest">
            <input class="form-control datetimepicker-input" type="text" id="<?php echo htmlentities($form_group['name']); ?>"
                   name="<?php echo htmlentities($form_group['name']); ?>" value="<?php echo htmlentities((isset($form_group['value']) && ($form_group['value'] !== '')?$form_group['value']:'')); ?>"
                   placeholder="<?php echo htmlentities($form_group['placeholder']); ?>" autocomplete="off" data-target="#timepicker_<?php echo htmlentities($form_group['name']); ?>" <?php echo $form_group['extra_attr']; ?>>
            <div class="input-group-append" data-target="#timepicker_<?php echo htmlentities($form_group['name']); ?>" data-toggle="datetimepicker">
                <div class="input-group-text"><i class="far fa-clock"></i></div>
            </div>
        </div>
    </div>
    <?php if(!(empty($form_group['tips']) || (($form_group['tips'] instanceof \think\Collection || $form_group['tips'] instanceof \think\Paginator ) && $form_group['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form_group['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
<script>
    $(function () {
        $('#timepicker_<?php echo htmlentities($form_group['name']); ?>').datetimepicker()
    })
</script>
            <?php break; case "datetime": ?>
                
                <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form_group['required']) || (($form_group['required'] instanceof \think\Collection || $form_group['required'] instanceof \think\Paginator ) && $form_group['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form_group['name']); ?>"><?php echo htmlentities(htmlspecialchars($form_group['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <div class="input-group date" id="reservationdate_<?php echo htmlentities($form_group['name']); ?>"
             data-date-format="<?php echo htmlentities(convert_php_to_moment_format($form_group['format'])); ?>" data-target-input="nearest">
            <input class="form-control datetimepicker-input" type="text" id="<?php echo htmlentities($form_group['name']); ?>" name="<?php echo htmlentities($form_group['name']); ?>"
                   value="<?php echo htmlentities((isset($form_group['value']) && ($form_group['value'] !== '')?$form_group['value']:'')); ?>" placeholder="<?php echo htmlentities($form_group['placeholder']); ?>"
                   autocomplete="off" data-target="#reservationdate_<?php echo htmlentities($form_group['name']); ?>" <?php echo $form_group['extra_attr']; ?>>
            <div class="input-group-append" data-target="#reservationdate_<?php echo htmlentities($form_group['name']); ?>"
                 data-toggle="datetimepicker">
                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
            </div>
        </div>
    </div>
    <?php if(!(empty($form_group['tips']) || (($form_group['tips'] instanceof \think\Collection || $form_group['tips'] instanceof \think\Paginator ) && $form_group['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form_group['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>

<script>
    $(function () {
        $('#reservationdate_<?php echo htmlentities($form_group['name']); ?>').datetimepicker({icons: {time: 'far fa-clock'}});
    })
</script>
            <?php break; case "daterange": ?>
                
                <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form_group['required']) || (($form_group['required'] instanceof \think\Collection || $form_group['required'] instanceof \think\Paginator ) && $form_group['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form_group['name']); ?>"><?php echo htmlentities(htmlspecialchars($form_group['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <div class="input-group">
            <input class="form-control" type="text" id="<?php echo htmlentities($form_group['name']); ?>" name="<?php echo htmlentities($form_group['name']); ?>"
                   value="<?php echo htmlentities((isset($form_group['value']) && ($form_group['value'] !== '')?$form_group['value']:'')); ?>" placeholder="<?php echo htmlentities($form_group['placeholder']); ?>"
                   autocomplete="off" <?php echo $form_group['extra_attr']; ?>>
            <div class="input-group-append">
                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
            </div>
        </div>
    </div>
    <?php if(!(empty($form_group['tips']) || (($form_group['tips'] instanceof \think\Collection || $form_group['tips'] instanceof \think\Paginator ) && $form_group['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form_group['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>

<script>
    $(function () {
        $('#<?php echo htmlentities($form_group['name']); ?>').daterangepicker({
            showDropdowns: true,     // 年月份下拉框
            timePicker: true,        // 显示时间
            timePicker24Hour: true,  // 时间制
            timePickerSeconds: true, // 时间显示到秒
            ranges: {
                '今天': [moment(), moment()],
                '昨天': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                '上周': [moment().subtract(6, 'days'), moment()],
                '前30天': [moment().subtract(29, 'days'), moment()],
                '本月': [moment().startOf('month'), moment().endOf('month')],
                '上月': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            },
            //timePicker: true,
            //timePickerIncrement: 30,
            locale: {
                format: '<?php echo htmlentities(convert_php_to_moment_format($form_group['format'])); ?>',
                applyLabel: '确定',       // 确定按钮文本
                cancelLabel: '取消',      // 取消按钮文本
                customRangeLabel: '自定义',
            }
        });
    })
</script>


            <?php break; case "tags": ?>
                
                <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form_group['required']) || (($form_group['required'] instanceof \think\Collection || $form_group['required'] instanceof \think\Paginator ) && $form_group['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form_group['name']); ?>"><?php echo htmlentities(htmlspecialchars($form_group['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <input class="form-control tags" type="text" id="<?php echo htmlentities($form_group['name']); ?>" name="<?php echo htmlentities($form_group['name']); ?>" value="<?php echo htmlentities($form_group['value']); ?>" placeholder="输入后请回车确认" <?php echo $form_group['extra_attr']; ?>>
    </div>
    <?php if(!(empty($form_group['tips']) || (($form_group['tips'] instanceof \think\Collection || $form_group['tips'] instanceof \think\Paginator ) && $form_group['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form_group['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
            <?php break; case "number": ?>
                
                <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form_group['required']) || (($form_group['required'] instanceof \think\Collection || $form_group['required'] instanceof \think\Paginator ) && $form_group['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form_group['name']); ?>"><?php echo htmlentities(htmlspecialchars($form_group['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <input class="form-control" type="number" id="<?php echo htmlentities($form_group['name']); ?>" name="<?php echo htmlentities($form_group['name']); ?>" value="<?php echo htmlentities($form_group['value']); ?>" <?php if(isset($form_group['min']) && $form_group['min'] !== ''): ?>min="<?php echo htmlentities($form_group['min']); ?>"<?php endif; if(isset($form_group['max']) && $form_group['max'] !== ''): ?>max="<?php echo htmlentities($form_group['max']); ?>"<?php endif; if(isset($form_group['step']) && $form_group['step'] !== ''): ?>step="<?php echo htmlentities($form_group['step']); ?>"<?php endif; ?> <?php echo $form_group['extra_attr']; ?>>
    </div>
    <?php if(!(empty($form_group['tips']) || (($form_group['tips'] instanceof \think\Collection || $form_group['tips'] instanceof \think\Paginator ) && $form_group['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form_group['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>


            <?php break; case "password": ?>
                
                <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form_group['required']) || (($form_group['required'] instanceof \think\Collection || $form_group['required'] instanceof \think\Paginator ) && $form_group['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form_group['name']); ?>"><?php echo htmlentities(htmlspecialchars($form_group['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <input class="form-control" type="password" id="<?php echo htmlentities($form_group['name']); ?>" name="<?php echo htmlentities($form_group['name']); ?>" value="" placeholder="<?php echo htmlentities($form_group['placeholder']); ?>" <?php echo $form_group['extra_attr']; ?>>
    </div>
    <?php if(!(empty($form_group['tips']) || (($form_group['tips'] instanceof \think\Collection || $form_group['tips'] instanceof \think\Paginator ) && $form_group['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form_group['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
            <?php break; case "select": ?>
                
                <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form_group['required']) || (($form_group['required'] instanceof \think\Collection || $form_group['required'] instanceof \think\Paginator ) && $form_group['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form_group['name']); ?>"><?php echo htmlentities(htmlspecialchars($form_group['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <select class="form-control" id="<?php echo htmlentities($form_group['name']); ?>" name="<?php echo htmlentities($form_group['name']); ?>" <?php echo htmlentities((isset($form_group['extra_attr']) && ($form_group['extra_attr'] !== '')?$form_group['extra_attr']:'')); ?>>
            <option value=""><?php echo htmlentities($form_group['placeholder']); ?></option>
            <?php if(is_array($form_group['options']) || $form_group['options'] instanceof \think\Collection || $form_group['options'] instanceof \think\Paginator): $i = 0; $__LIST__ = $form_group['options'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;if(is_array($option)): ?>
            <option value="<?php echo htmlentities($key); ?>" <?php if(((string)$form_group['value'] == (string)$key)): ?>selected<?php endif; if($option['disabled'] == 1): ?>disabled<?php endif; ?>><?php echo htmlentities($option['value']); ?></option>
            <?php else: ?>
            <option value="<?php echo htmlentities($key); ?>" <?php if(((string)$form_group['value'] == (string)$key)): ?>selected<?php endif; ?>><?php echo htmlentities($option); ?></option>
            <?php endif; ?>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </select>
    </div>
    <?php if(!(empty($form_group['tips']) || (($form_group['tips'] instanceof \think\Collection || $form_group['tips'] instanceof \think\Paginator ) && $form_group['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form_group['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
            <?php break; case "select2": ?>
                
                <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form_group['required']) || (($form_group['required'] instanceof \think\Collection || $form_group['required'] instanceof \think\Paginator ) && $form_group['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form_group['name']); ?>"><?php echo htmlentities(htmlspecialchars($form_group['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <select class="select2 form-control" id="<?php echo htmlentities($form_group['name']); ?>" name="<?php echo htmlentities($form_group['name']); ?>" data-value="<?php echo htmlentities($form_group['value']); ?>" <?php echo htmlentities((isset($form_group['extra_attr']) && ($form_group['extra_attr'] !== '')?$form_group['extra_attr']:'')); ?>>
            <option value=""><?php echo htmlentities($form_group['placeholder']); ?></option>
            <?php if(is_array($form_group['options']) || $form_group['options'] instanceof \think\Collection || $form_group['options'] instanceof \think\Paginator): $i = 0; $__LIST__ = $form_group['options'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;?>
            <option value="<?php echo htmlentities($key); ?>" <?php if(in_array(($key), is_array($form_group['value'])?$form_group['value']:explode(',',$form_group['value']))): ?>selected<?php endif; ?>><?php echo htmlentities($option); ?></option>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </select>
    </div>
    <?php if(!(empty($form_group['tips']) || (($form_group['tips'] instanceof \think\Collection || $form_group['tips'] instanceof \think\Paginator ) && $form_group['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form_group['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
<script>
    $(function () {
        var option = {};
        <?php if(!$form_group['options']): ?>
        if('<?php echo htmlentities($form_group['ajax_url']); ?>' !== ''){
            // 启用ajax分页查询
            option = {
                language: "zh-CN",
                //allowClear: true,
                ajax: {
                    delay: 250, // 限速请求
                    url: "<?php echo htmlentities($form_group['ajax_url']); ?>",   //  请求地址
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
                            data.data.unshift({id: '', name: "", text: "<?php echo htmlentities($form_group['placeholder']); ?>"});
                        }
                        return {
                            results: data.data,
                            pagination: {
                                //more: (params.page) < data.paginator.totalPages
                                more: (params.page) < data.last_page
                            }
                        };
                    },
                    cache: true
                }
            };
            // 默认值设置
            var defaultValue = $('#<?php echo htmlentities($form_group['name']); ?>').data("value");
            if (defaultValue) {
                $.ajax({
                    type: "POST",
                    url: "<?php echo htmlentities($form_group['ajax_url']); ?>",
                    data: {value:defaultValue},
                    dataType: "json",
                    success: function(data){
                        $('#<?php echo htmlentities($form_group['name']); ?>').append("<option selected value='" + data.key + "'>" + data.value + "</option>");
                    }
                });
            }
        }
        <?php endif; ?>
        $('#<?php echo htmlentities($form_group['name']); ?>').select2(option);
    })
</script>

            <?php break; case "linkage": 
    // 获取一级联动数据
    $levelOne  = getLinkageData($form_group['model'], 0, $form_group['pid']);
    $levelKey  = [];
    $levelData = [];

    // 默认值
    if ($form_group['value'] != '') {
        $levelKeyData = getLinkageAllData($form_group['model'], $form_group['value'], $form_group['key'], $form_group['option'], $form_group['pid']);
        $levelKey = $levelKeyData['key'];
        $levelData = $levelKeyData['data'];
        sort($levelKey); // 升序排序
        $levelData = array_reverse($levelData); // 以相反的元素顺序返回数组
    }
 ?>
<div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form_group['required']) || (($form_group['required'] instanceof \think\Collection || $form_group['required'] instanceof \think\Paginator ) && $form_group['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form_group['name']); ?>"><?php echo htmlentities(htmlspecialchars($form_group['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-8 col-xl-7">
        <select class="form-control js_linkage" data-model="<?php echo htmlentities($form_group['model']); ?>" data-key="<?php echo htmlentities($form_group['key']); ?>" data-key_value="<?php echo htmlentities($form_group['option']); ?>" data-pid_field_name="<?php echo htmlentities((isset($form_group['pid']) && ($form_group['pid'] !== '')?$form_group['pid']:'pid')); ?>" data-next_level_id="<?php echo htmlentities($form_group['name']); ?>_2" id="<?php echo htmlentities($form_group['name']); ?>_1" name="<?php echo htmlentities($form_group['name']); if($form_group['level'] > '1'): ?>_1<?php endif; ?>" data-placeholder="<?php echo htmlentities($form_group['placeholder']); ?>" <?php echo htmlentities((isset($form_group['extra_attr']) && ($form_group['extra_attr'] !== '')?$form_group['extra_attr']:'')); ?> data-ajax_url="<?php echo htmlentities($form_group['ajax_url']); ?>" style="width: auto; display: inline-block">
            <option value=""><?php echo htmlentities($form_group['placeholder']); ?></option>
            <?php if(is_array($levelOne) || $levelOne instanceof \think\Collection || $levelOne instanceof \think\Paginator): $i = 0; $__LIST__ = $levelOne;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;if($form_group['level'] == '1'): ?>
                <option value="<?php echo htmlentities($option[$form_group['key']]); ?>" <?php if(($form_group['value'] == (string)$option[$form_group['key']])): ?>selected<?php endif; ?>><?php echo $option[$form_group['option']]; ?></option>
            <?php else: ?>
                <option value="<?php echo htmlentities($option[$form_group['key']]); ?>" <?php if((isset($levelKey[1]) && $levelKey[1] == (string)$option[$form_group['key']])): ?>selected<?php endif; ?>><?php echo $option[$form_group['option']]; ?></option>
            <?php endif; ?>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </select>
        <?php if($form_group['level'] == '2'): ?>
        <select class="form-control" id="<?php echo htmlentities($form_group['name']); ?>_2" name="<?php echo htmlentities($form_group['name']); ?>" data-placeholder="<?php echo htmlentities($form_group['placeholder']); ?>" <?php echo htmlentities((isset($form_group['extra_attr']) && ($form_group['extra_attr'] !== '')?$form_group['extra_attr']:'')); ?> style="width: auto; display: inline-block">
            <option value=""><?php echo htmlentities($form_group['placeholder']); ?></option>
            <?php if(!(empty($levelData['1']) || (($levelData['1'] instanceof \think\Collection || $levelData['1'] instanceof \think\Paginator ) && $levelData['1']->isEmpty()))): if(is_array($levelData['1']) || $levelData['1'] instanceof \think\Collection || $levelData['1'] instanceof \think\Paginator): $i = 0; $__LIST__ = $levelData['1'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;?>
            <option value="<?php echo htmlentities($option[$form_group['key']]); ?>" <?php if(($form_group['value'] == (string)$option[$form_group['key']])): ?>selected<?php endif; ?>><?php echo $option[$form_group['option']]; ?></option>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            <?php endif; ?>
        </select>
        <?php endif; if($form_group['level'] == '3'): ?>
        <select class="form-control js_linkage" data-model="<?php echo htmlentities($form_group['model']); ?>" data-key="<?php echo htmlentities($form_group['key']); ?>" data-key_value="<?php echo htmlentities($form_group['option']); ?>" data-pid_field_name="<?php echo htmlentities((isset($form_group['pid']) && ($form_group['pid'] !== '')?$form_group['pid']:'pid')); ?>" data-next_level_id="<?php echo htmlentities($form_group['name']); ?>_3" id="<?php echo htmlentities($form_group['name']); ?>_2" name="<?php echo htmlentities($form_group['name']); ?>_2" data-placeholder="<?php echo htmlentities($form_group['placeholder']); ?>" <?php echo htmlentities((isset($form_group['extra_attr']) && ($form_group['extra_attr'] !== '')?$form_group['extra_attr']:'')); ?> data-ajax_url="<?php echo htmlentities($form_group['ajax_url']); ?>" style="width: auto; display: inline-block">
            <option value=""><?php echo htmlentities($form_group['placeholder']); ?></option>
            <?php if(!(empty($levelData['1']) || (($levelData['1'] instanceof \think\Collection || $levelData['1'] instanceof \think\Paginator ) && $levelData['1']->isEmpty()))): if(is_array($levelData['1']) || $levelData['1'] instanceof \think\Collection || $levelData['1'] instanceof \think\Paginator): $i = 0; $__LIST__ = $levelData['1'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;?>
            <option value="<?php echo htmlentities($option[$form_group['key']]); ?>" <?php if((isset($levelKey[2]) && $levelKey[2] == (string)$option[$form_group['key']])): ?>selected<?php endif; ?>><?php echo $option[$form_group['option']]; ?></option>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            <?php endif; ?>
        </select>
        <select class="form-control" id="<?php echo htmlentities($form_group['name']); ?>_3" name="<?php echo htmlentities($form_group['name']); ?>" data-placeholder="<?php echo htmlentities($form_group['placeholder']); ?>" <?php echo htmlentities((isset($form_group['extra_attr']) && ($form_group['extra_attr'] !== '')?$form_group['extra_attr']:'')); ?> style="width: auto; display: inline-block">
            <option value=""><?php echo htmlentities($form_group['placeholder']); ?></option>
            <?php if(!(empty($levelData['2']) || (($levelData['2'] instanceof \think\Collection || $levelData['2'] instanceof \think\Paginator ) && $levelData['2']->isEmpty()))): if(is_array($levelData['2']) || $levelData['2'] instanceof \think\Collection || $levelData['2'] instanceof \think\Paginator): $i = 0; $__LIST__ = $levelData['2'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;?>
            <option value="<?php echo htmlentities($option[$form_group['key']]); ?>" <?php if(($form_group['value'] == (string)$option[$form_group['key']])): ?>selected<?php endif; ?>><?php echo $option[$form_group['option']]; ?></option>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            <?php endif; ?>
        </select>
        <?php endif; ?>
    </div>
    <?php if(!(empty($form_group['tips']) || (($form_group['tips'] instanceof \think\Collection || $form_group['tips'] instanceof \think\Paginator ) && $form_group['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-2 col-xl-4 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form_group['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
            <?php break; case "image": ?>
                
                <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form_group['required']) || (($form_group['required'] instanceof \think\Collection || $form_group['required'] instanceof \think\Paginator ) && $form_group['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form_group['name']); ?>"><?php echo htmlentities(htmlspecialchars($form_group['title'])); ?></label>
    <div class="col-9 col-sm-6 col-md-6 col-lg-6 col-xl-4">
        <input class="form-control" type="text" id="<?php echo htmlentities($form_group['name']); ?>" name="<?php echo htmlentities($form_group['name']); ?>" value="<?php echo htmlentities($form_group['value']); ?>" placeholder="<?php echo htmlentities($form_group['placeholder']); ?>" <?php echo $form_group['extra_attr']; ?>>
    </div>
    <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-7 dd_ts dd_ts_img">
        <!--上传图片-->
        <!--用来存放item-->
        <div id="fileList_<?php echo htmlentities($form_group['name']); ?>" class="uploader-list"></div>
        <div id="filePicker_<?php echo htmlentities($form_group['name']); ?>"><i class="fa fa-upload m-r-10"></i>选择图片</div>
        <a href="<?php echo !empty($form_group['value']) ? htmlentities($form_group['value']) : '/static/admin/images/nopic.png'; ?>" target="_blank">
            <img class="image_preview_info"
                 src="<?php echo !empty($form_group['value']) ? htmlentities($form_group['value']) : '/static/admin/images/nopic.png'; ?>"
                 id="<?php echo htmlentities($form_group['name']); ?>_preview">
        </a>
        <!--上传图片-->
        <?php if(!(empty($form_group['tips']) || (($form_group['tips'] instanceof \think\Collection || $form_group['tips'] instanceof \think\Paginator ) && $form_group['tips']->isEmpty()))): ?>
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form_group['tips']; ?>
        </small>
        <?php endif; ?>
    </div>
</div>
<script type="text/javascript">
    webupload('fileList_<?php echo htmlentities($form_group['name']); ?>', 'filePicker_<?php echo htmlentities($form_group['name']); ?>', '<?php echo htmlentities($form_group['name']); ?>_preview', '<?php echo htmlentities($form_group['name']); ?>', false, '<?php echo htmlentities((isset($system['upload_image_ext']) && ($system['upload_image_ext'] !== '')?$system['upload_image_ext']:"")); ?>', '<?php echo htmlentities((isset($system['upload_image_size']) && ($system['upload_image_size'] !== '')?$system['upload_image_size']:"0")); ?>');
</script>


            <?php break; case "images": ?>
                
                <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
<!-- ZTX-004  by 折腾侠-->
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form_group['required']) || (($form_group['required'] instanceof \think\Collection || $form_group['required'] instanceof \think\Paginator ) && $form_group['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form_group['name']); ?>"><?php echo htmlentities(htmlspecialchars($form_group['title'])); ?></label>
	
	<div class="col-12 col-sm-7 col-md-7 col-lg-7 col-xl-4" >
	<!-- ZTX-004  by 折腾侠-->
        <div class="more_images dd_ts">
            <div id="more_images_<?php echo htmlentities($form_group['name']); ?>">
                <div class="hide">
                    <input type="text" name="<?php echo htmlentities($form_group['name']); ?>[]" value="">
                    <input type="text" name="<?php echo htmlentities($form_group['name']); ?>_title[]" value="">
                    <!-- ZTX-增加缩略图显示 -->
                    <input type="text" name="<?php echo htmlentities($form_group['name']); ?>_small[]" value="">
                    <!-- ZTX-增加缩略图显示 -->
                </div>
                <?php if(!(empty($form_group['value']) || (($form_group['value'] instanceof \think\Collection || $form_group['value'] instanceof \think\Paginator ) && $form_group['value']->isEmpty()))): if(is_array($form_group['value']) || $form_group['value'] instanceof \think\Collection || $form_group['value'] instanceof \think\Paginator): $i = 0; $__LIST__ = $form_group['value'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
				<!-- ZTX-004  by 折腾侠-->
                <div class="row no-gutters">
                    <div class="col-4 col-sm-4">
                        <input type="text" name="<?php echo htmlentities($form_group['name']); ?>[]" value="<?php echo htmlentities($vo['image']); ?>" class="form-control">
                        <!-- ZTX-增加缩略图显示 -->
                        <input type="text" name="<?php echo htmlentities($form_group['name']); ?>_small[]" value="<?php echo isset($vo['small']) ? htmlentities($vo['small']) : ''; ?>" class="hide">
                        <!-- ZTX-增加缩略图显示 -->
                    </div>
                    <div class="col-3 col-sm-3">
                        <input type="text" name="<?php echo htmlentities($form_group['name']); ?>_title[]" value="<?php echo htmlentities($vo['title']); ?>" class="form-control input-sm">
                    </div>
                    <div class="col-4 col-sm-3">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default btn-sm move_up_images">
                                <i class="fa fa-chevron-up"></i>
                            </button>
                            <button type="button" class="btn btn-default btn-sm move_down_images">
                                <i class="fa fa-chevron-down"></i>
                            </button>
                            <button type="button" class="btn btn-default btn-sm remove_images">
                                <i class="fa fa-times"></i>
                            </button>
							
                        </div>
                    </div>
					
					 <div class="col-4 col-sm-2"><a href="<?php echo htmlentities($vo['image']); ?>" target="_blank"> <img class="image_preview_info" src="<?php echo !empty($vo['small']) ? htmlentities($vo['small']) : htmlentities($vo['image']); ?>"  ></a></div>
                </div>
				<!-- ZTX-004  by 折腾侠-->
                <?php endforeach; endif; else: echo "" ;endif; ?>
                <?php endif; ?>
            </div>
			
			
        </div>
		<!-- ZTX-005  by 折腾侠-->
		<div class="row no-gutters">
		 <div class="col-4 col-sm-12">
			<input class="form-control" type="text" id="img" name="site_img_choose" value="" placeholder="从站内选择图片，输入搜索关键词" >
		</div>
		
		
		</div>
		
		
		<!-- ZTX-005  by 折腾侠-->
    </div>
	<!-- ZTX-004  by 折腾侠-->
    <div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-7 dd_ts dd_ts_img">
	<!-- ZTX-004  by 折腾侠-->
        <!--上传图片-->
        <!--用来存放item-->
        <div id="fileList_<?php echo htmlentities($form_group['name']); ?>" class="uploader-list"></div>
        <div id="filePicker_<?php echo htmlentities($form_group['name']); ?>"><i class="fa fa-upload m-r-10"></i>上传图片</div>
		
	
		
		
        <!--上传图片-->
        <?php if(!(empty($form_group['tips']) || (($form_group['tips'] instanceof \think\Collection || $form_group['tips'] instanceof \think\Paginator ) && $form_group['tips']->isEmpty()))): ?>
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form_group['tips']; ?>
        </small>
        <?php endif; ?>
    </div>
</div>
<script type="text/javascript">
    webupload('fileList_<?php echo htmlentities($form_group['name']); ?>', 'filePicker_<?php echo htmlentities($form_group['name']); ?>', '<?php echo htmlentities($form_group['name']); ?>_preview', '<?php echo htmlentities($form_group['name']); ?>', true, '<?php echo htmlentities((isset($system['upload_image_ext']) && ($system['upload_image_ext'] !== '')?$system['upload_image_ext']:"")); ?>', '<?php echo htmlentities((isset($system['upload_image_size']) && ($system['upload_image_size'] !== '')?$system['upload_image_size']:"0")); ?>');
</script>
            <?php break; case "file": ?>
                
                <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form_group['required']) || (($form_group['required'] instanceof \think\Collection || $form_group['required'] instanceof \think\Paginator ) && $form_group['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form_group['name']); ?>"><?php echo htmlentities(htmlspecialchars($form_group['title'])); ?></label>
    <div class="col-9 col-sm-6 col-md-6 col-lg-6 col-xl-4">
        <input class="form-control" type="text" id="<?php echo htmlentities($form_group['name']); ?>" name="<?php echo htmlentities($form_group['name']); ?>" value="<?php echo htmlentities($form_group['value']); ?>" placeholder="<?php echo htmlentities($form_group['placeholder']); ?>" <?php echo $form_group['extra_attr']; ?>>
    </div>
    <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-7 dd_ts dd_ts_img">
        <!--上传图片-->
        <!--用来存放item-->
        <div id="fileList_<?php echo htmlentities($form_group['name']); ?>" class="uploader-list"></div>
        <div id="filePicker_<?php echo htmlentities($form_group['name']); ?>"><i class="fa fa-upload m-r-10"></i>选择文件</div>
        <!--上传图片-->
        <?php if(!(empty($form_group['tips']) || (($form_group['tips'] instanceof \think\Collection || $form_group['tips'] instanceof \think\Paginator ) && $form_group['tips']->isEmpty()))): ?>
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form_group['tips']; ?>
        </small>
        <?php endif; ?>
    </div>
</div>
<script type="text/javascript">
    webupload('fileList_<?php echo htmlentities($form_group['name']); ?>', 'filePicker_<?php echo htmlentities($form_group['name']); ?>', '<?php echo htmlentities($form_group['name']); ?>_preview', '<?php echo htmlentities($form_group['name']); ?>', false, '<?php echo htmlentities((isset($system['upload_file_ext']) && ($system['upload_file_ext'] !== '')?$system['upload_file_ext']:"")); ?>', '<?php echo htmlentities((isset($system['upload_file_size']) && ($system['upload_file_size'] !== '')?$system['upload_file_size']:"0")); ?>', 'file');
</script>


            <?php break; case "files": ?>
                
                <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form_group['required']) || (($form_group['required'] instanceof \think\Collection || $form_group['required'] instanceof \think\Paginator ) && $form_group['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form_group['name']); ?>"><?php echo htmlentities(htmlspecialchars($form_group['title'])); ?></label>
    <div class="col-9 col-sm-7 col-md-7 col-lg-7 col-xl-4">
        <div class="more_images dd_ts">
            <div id="more_images_<?php echo htmlentities($form_group['name']); ?>">
                <div class="hide">
                    <input type="text" name="<?php echo htmlentities($form_group['name']); ?>[]" value="">
                    <input type="text" name="<?php echo htmlentities($form_group['name']); ?>_title[]" value="">
                </div>
                <?php if(!(empty($form_group['value']) || (($form_group['value'] instanceof \think\Collection || $form_group['value'] instanceof \think\Paginator ) && $form_group['value']->isEmpty()))): if(is_array($form_group['value']) || $form_group['value'] instanceof \think\Collection || $form_group['value'] instanceof \think\Paginator): $i = 0; $__LIST__ = $form_group['value'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <!-- ZTX-002  by 折腾侠删除原有代码，改为跟图片显示容器一样的代码-->
                <div class="row no-gutters">
                    <div class="col-4 col-sm-6">
                        <input type="text" name="<?php echo htmlentities($form_group['name']); ?>[]" value="<?php echo htmlentities($vo['image']); ?>" class="form-control">
                    </div>
                    <div class="col-3 col-sm-3">
                        <input type="text" name="<?php echo htmlentities($form_group['name']); ?>_title[]" value="<?php echo htmlentities($vo['title']); ?>" class="form-control input-sm">
                    </div>
                    <div class="col-4 col-sm-3">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default btn-sm move_up_images">
                                <i class="fa fa-chevron-up"></i>
                            </button>
                            <button type="button" class="btn btn-default btn-sm move_down_images">
                                <i class="fa fa-chevron-down"></i>
                            </button>
                            <button type="button" class="btn btn-default btn-sm remove_images">
                                <i class="fa fa-times"></i>
                            </button>
							
                        </div>
                    </div>
					 </div>
					
				<!-- ZTX-002  by 折腾侠 删除原有代码，改为跟图片显示容器一样的代码-->
                <?php endforeach; endif; else: echo "" ;endif; ?>
                <?php endif; ?>
            </div>
        </div>
		<!-- ZTX-005  by 折腾侠-->
		<div class="row no-gutters">
		 <div class="col-4 col-sm-12">
			<input class="form-control" type="text" id="file" name="site_file_choose" value="" placeholder="从站内选择文件，输入搜索关键词" >
		</div>
		
		
		</div>
		
		
		<!-- ZTX-005  by 折腾侠-->
    </div>
    <div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-7 dd_ts dd_ts_img">
        <!--上传图片-->
        <!--用来存放item-->
        <div id="fileList_<?php echo htmlentities($form_group['name']); ?>" class="uploader-list"></div>
        <div id="filePicker_<?php echo htmlentities($form_group['name']); ?>"><i class="fa fa-upload m-r-10"></i>选择文件</div>
        <!--上传图片-->
        <?php if(!(empty($form_group['tips']) || (($form_group['tips'] instanceof \think\Collection || $form_group['tips'] instanceof \think\Paginator ) && $form_group['tips']->isEmpty()))): ?>
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form_group['tips']; ?>
        </small>
        <?php endif; ?>
    </div>
</div>
<script type="text/javascript">
    webupload('fileList_<?php echo htmlentities($form_group['name']); ?>', 'filePicker_<?php echo htmlentities($form_group['name']); ?>', '<?php echo htmlentities($form_group['name']); ?>_preview', '<?php echo htmlentities($form_group['name']); ?>', true, '<?php echo htmlentities((isset($system['upload_file_ext']) && ($system['upload_file_ext'] !== '')?$system['upload_file_ext']:"")); ?>', '<?php echo htmlentities((isset($system['upload_file_size']) && ($system['upload_file_size'] !== '')?$system['upload_file_size']:"0")); ?>', 'file');
</script>
            <?php break; case "editor": ?>
                
                <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form_group['required']) || (($form_group['required'] instanceof \think\Collection || $form_group['required'] instanceof \think\Paginator ) && $form_group['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form_group['name']); ?>"><?php echo htmlentities(htmlspecialchars($form_group['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-8 col-xl-7">
        <textarea id="<?php echo htmlentities($form_group['name']); ?>" name="<?php echo htmlentities($form_group['name']); ?>" <?php echo $form_group['extra_attr']; ?> style="width:100%;height: <?php echo htmlentities($form_group['height']); ?>px"><?php echo htmlentities($form_group['value']); ?></textarea>
    </div>
    <?php if(!(empty($form_group['tips']) || (($form_group['tips'] instanceof \think\Collection || $form_group['tips'] instanceof \think\Paginator ) && $form_group['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-2 col-xl-4 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form_group['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
<script>
    <?php if($system['editor'] == '1'): ?>
    UE.delEditor('<?php echo htmlentities($form_group['name']); ?>');
    UE.getEditor('<?php echo htmlentities($form_group['name']); ?>', {
        serverUrl: "<?php echo url('Upload/index',['from'=>'ueditor']); ?>",
    });
    <?php else: ?>
    CKEDITOR.replace('<?php echo htmlentities($form_group['name']); ?>', {height: '<?php echo htmlentities($form_group['height']); ?>px'});
    <?php endif; ?>
</script>
            <?php break; case "editor": ?>
                
                <div class="row dd_input_group no-gutters" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <div class="form-group">
        <div class="col-12">
            <?php if($form_group['elemtype'] == "button"): ?>
            <button class="btn btn-flat <?php echo htmlentities((isset($form_group['class']) && ($form_group['class'] !== '')?$form_group['class']:'btn-primary')); ?>" id="<?php echo htmlentities((isset($form_group['id']) && ($form_group['id'] !== '')?$form_group['id']:'')); ?>" type="button" <?php echo (isset($form_group['data']) && ($form_group['data'] !== '')?$form_group['data']:''); if(isset($form_group['disabled'])): ?>disabled<?php endif; ?>>
            <i class="<?php echo htmlentities((isset($form_group['icon']) && ($form_group['icon'] !== '')?$form_group['icon']:'')); ?>"></i> <?php echo htmlentities((isset($form_group['title']) && ($form_group['title'] !== '')?$form_group['title']:'')); ?></button>
            <?php else: ?>
            <a class="btn btn-flat <?php echo htmlentities((isset($form_group['class']) && ($form_group['class'] !== '')?$form_group['class']:'btn-primary')); if(isset($form_group['disabled'])): ?> disabled<?php endif; ?>" id="<?php echo htmlentities((isset($form_group['id']) && ($form_group['id'] !== '')?$form_group['id']:'')); ?>" title="<?php echo htmlentities((isset($form_group['title']) && ($form_group['title'] !== '')?$form_group['title']:'')); ?>" target="<?php echo htmlentities((isset($form_group['target']) && ($form_group['target'] !== '')?$form_group['target']:'')); ?>" href="<?php echo htmlentities((isset($form_group['href']) && ($form_group['href'] !== '')?$form_group['href']:'')); ?>" <?php echo (isset($form_group['data']) && ($form_group['data'] !== '')?$form_group['data']:''); ?>><i class="<?php echo htmlentities((isset($form_group['icon']) && ($form_group['icon'] !== '')?$form_group['icon']:'')); ?>"></i> <?php echo htmlentities((isset($form_group['title']) && ($form_group['title'] !== '')?$form_group['title']:'')); ?></a>
            <?php endif; ?>
        </div>
    </div>
</div>
            <?php break; case "hidden": ?>
                
                <div class="row dd_input_group hide <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <div class="form-group">
        <input type="hidden" name="<?php echo htmlentities($form_group['name']); ?>" value="<?php echo htmlentities((isset($form_group['value']) && ($form_group['value'] !== '')?$form_group['value']:'')); ?>" id="<?php echo htmlentities($form_group['name']); ?>" <?php echo (isset($form_group['extra_attr']) && ($form_group['extra_attr'] !== '')?$form_group['extra_attr']:''); ?>>
    </div>
</div>


            <?php break; case "html": ?>
                
                <?php echo $form_group['html']; break; case "color": ?>
                
                <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form_group['required']) || (($form_group['required'] instanceof \think\Collection || $form_group['required'] instanceof \think\Paginator ) && $form_group['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form_group['name']); ?>"><?php echo htmlentities(htmlspecialchars($form_group['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <div class="input-group <?php echo htmlentities($form_group['name']); ?>-colorpicker">
            <input class="form-control" type="text" id="<?php echo htmlentities($form_group['name']); ?>" name="<?php echo htmlentities($form_group['name']); ?>" value="<?php echo htmlentities($form_group['value']); ?>" placeholder="<?php echo htmlentities($form_group['placeholder']); ?>" <?php echo $form_group['extra_attr']; ?>>
            <div class="input-group-append">
                <span class="input-group-text">
                    <i class="fas fa-square" <?php if($form_group['value']): ?>style="color: <?php echo htmlentities($form_group['value']); ?>"<?php endif; ?>></i>
                </span>
            </div>
        </div>
    </div>
    <?php if(!(empty($form_group['tips']) || (($form_group['tips'] instanceof \think\Collection || $form_group['tips'] instanceof \think\Paginator ) && $form_group['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form_group['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
<script>
    $(function () {
        $('.<?php echo htmlentities($form_group['name']); ?>-colorpicker').colorpicker()
        $('.<?php echo htmlentities($form_group['name']); ?>-colorpicker').on('colorpickerChange', function(event) {
            $('.<?php echo htmlentities($form_group['name']); ?>-colorpicker .fa-square').css('color', event.color.toString());
        });
    })
</script>
            <?php break; case "code": ?>
                
                <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form_group['required']) || (($form_group['required'] instanceof \think\Collection || $form_group['required'] instanceof \think\Paginator ) && $form_group['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form_group['name']); ?>"><?php echo htmlentities(htmlspecialchars($form_group['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-8 col-xl-7">
        <textarea id="<?php echo htmlentities($form_group['name']); ?>" name="<?php echo htmlentities($form_group['name']); ?>" <?php echo $form_group['extra_attr']; ?>><?php echo htmlentities($form_group['value']); ?></textarea>
    </div>
    <?php if(!(empty($form_group['tips']) || (($form_group['tips'] instanceof \think\Collection || $form_group['tips'] instanceof \think\Paginator ) && $form_group['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-2 col-xl-4 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form_group['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
<script>
    $(function () {
        // CodeMirror
        var codeEditor = CodeMirror.fromTextArea(document.getElementById("<?php echo htmlentities($form_group['name']); ?>"), {
            mode: "<?php echo htmlentities($form_group['mode']); ?>",     // 编辑器语言
            theme: "<?php echo htmlentities($form_group['theme']); ?>",   // 编辑器主题
            lineNumbers: true,              // 显示行号
            showCursorWhenSelecting: true,  // 文本选中时显示光标
            lineWrapping: true,             // 代码折叠
        });
        codeEditor.setSize('auto',"<?php echo htmlentities($form_group['height']); ?>px");
    })
</script>
            <?php break; default: ?>

        <?php endswitch; ?>
    <?php endforeach; endif; else: echo "" ;endif; ?>
</div>
<?php endforeach; endif; else: echo "" ;endif; ?>
</div>

                        <?php break; case "text": ?>
                            
                            <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form['required']) || (($form['required'] instanceof \think\Collection || $form['required'] instanceof \think\Paginator ) && $form['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form['name']); ?>"><?php echo htmlentities(htmlspecialchars($form['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <?php if(!(empty($form['group']) || (($form['group'] instanceof \think\Collection || $form['group'] instanceof \think\Paginator ) && $form['group']->isEmpty()))): ?>
        <div class="input-group">
            <?php endif; if(!(empty($form['group']['0']) || (($form['group']['0'] instanceof \think\Collection || $form['group']['0'] instanceof \think\Paginator ) && $form['group']['0']->isEmpty()))): ?>
            <div class="input-group-prepend">
                <span class="input-group-text"><?php echo $form['group']['0']; ?></span>
            </div>
            <?php endif; ?>
            <input class="form-control" type="text" id="<?php echo htmlentities($form['name']); ?>" name="<?php echo htmlentities($form['name']); ?>" value="<?php echo htmlentities($form['value']); ?>" placeholder="<?php echo htmlentities($form['placeholder']); ?>" <?php echo $form['extra_attr']; ?>>
            <?php if(!(empty($form['group']['1']) || (($form['group']['1'] instanceof \think\Collection || $form['group']['1'] instanceof \think\Paginator ) && $form['group']['1']->isEmpty()))): ?>
            <div class="input-group-append">
                <span class="input-group-text"><?php echo $form['group']['1']; ?></span>
            </div>
            <?php endif; if(!(empty($form['group']) || (($form['group'] instanceof \think\Collection || $form['group'] instanceof \think\Paginator ) && $form['group']->isEmpty()))): ?>
        </div>
        <?php endif; ?>
    </div>
    <?php if(!(empty($form['tips']) || (($form['tips'] instanceof \think\Collection || $form['tips'] instanceof \think\Paginator ) && $form['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
                        <?php break; case "textarea": ?>
                            
                            <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form['required']) || (($form['required'] instanceof \think\Collection || $form['required'] instanceof \think\Paginator ) && $form['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form['name']); ?>"><?php echo htmlentities(htmlspecialchars($form['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <textarea class="form-control" id="<?php echo htmlentities($form['name']); ?>" name="<?php echo htmlentities($form['name']); ?>" rows="<?php echo htmlentities((isset($form['rows']) && ($form['rows'] !== '')?$form['rows']:'3')); ?>" placeholder="<?php echo htmlentities($form['placeholder']); ?>" <?php echo $form['extra_attr']; ?>><?php echo htmlentities($form['value']); ?></textarea>
    </div>
    <?php if(!(empty($form['tips']) || (($form['tips'] instanceof \think\Collection || $form['tips'] instanceof \think\Paginator ) && $form['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
                        <?php break; case "radio": ?>
                            
                            <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form['required']) || (($form['required'] instanceof \think\Collection || $form['required'] instanceof \think\Paginator ) && $form['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form['name']); ?>"><?php echo htmlentities(htmlspecialchars($form['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4 dd_radio_lable_left border-white">
        <?php if(is_array($form['options']) || $form['options'] instanceof \think\Collection || $form['options'] instanceof \think\Paginator): $i = 0; $__LIST__ = $form['options'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;?>
        <div class="icheck-peterriver icheck-inline">
            <input type="radio" name="<?php echo htmlentities($form['name']); ?>" class="dd_radio" id="<?php echo htmlentities($form['name']); ?><?php echo htmlentities($i); ?>" value="<?php echo htmlentities($key); ?>" <?php if($key == (isset($form['value']) && ($form['value'] !== '')?$form['value']:'')): ?>checked<?php endif; ?> <?php echo (isset($form['extra_attr']) && ($form['extra_attr'] !== '')?$form['extra_attr']:''); ?>>
            <label for="<?php echo htmlentities($form['name']); ?><?php echo htmlentities($i); ?>"><?php echo htmlspecialchars($option); ?></label>
        </div>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
    <?php if(!(empty($form['tips']) || (($form['tips'] instanceof \think\Collection || $form['tips'] instanceof \think\Paginator ) && $form['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
                        <?php break; case "checkbox": ?>
                            
                            <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form['required']) || (($form['required'] instanceof \think\Collection || $form['required'] instanceof \think\Paginator ) && $form['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form['name']); ?>"><?php echo htmlentities(htmlspecialchars($form['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <div class="dd_radio_lable_left border-white">
            <input type="hidden" name="<?php echo htmlentities($form['name']); ?>[]" value="">
            <?php if(is_array($form['options']) || $form['options'] instanceof \think\Collection || $form['options'] instanceof \think\Paginator): $i = 0; $__LIST__ = $form['options'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;?>
            <div class="icheck-peterriver icheck-inline">
                <input type="checkbox" name="<?php echo htmlentities($form['name']); ?>[]" class="dd_radio" id="<?php echo htmlentities($form['name']); ?><?php echo htmlentities($i); ?>" value="<?php echo htmlentities($key); ?>" <?php if(in_array(($key), is_array((isset($form['value']) && ($form['value'] !== '')?$form['value']:''))?(isset($form['value']) && ($form['value'] !== '')?$form['value']:''):explode(',',(isset($form['value']) && ($form['value'] !== '')?$form['value']:'')))): ?>checked<?php endif; ?> <?php echo (isset($form['extra_attr']) && ($form['extra_attr'] !== '')?$form['extra_attr']:''); ?>>
                <label for="<?php echo htmlentities($form['name']); ?><?php echo htmlentities($i); ?>"><?php echo htmlspecialchars($option); ?></label>
            </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </div>
    <?php if(!(empty($form['tips']) || (($form['tips'] instanceof \think\Collection || $form['tips'] instanceof \think\Paginator ) && $form['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
                        <?php break; case "date": ?>
                            
                            <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form['required']) || (($form['required'] instanceof \think\Collection || $form['required'] instanceof \think\Paginator ) && $form['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form['name']); ?>"><?php echo htmlentities(htmlspecialchars($form['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <div class="input-group date" id="reservationdate_<?php echo htmlentities($form['name']); ?>"
             data-date-format="<?php echo htmlentities(convert_php_to_moment_format($form['format'])); ?>" data-target-input="nearest">
            <input class="form-control" type="text" id="<?php echo htmlentities($form['name']); ?>" name="<?php echo htmlentities($form['name']); ?>"
                   value="<?php echo htmlentities((isset($form['value']) && ($form['value'] !== '')?$form['value']:'')); ?>" placeholder="<?php echo htmlentities($form['placeholder']); ?>"
                   autocomplete="off" <?php echo $form['extra_attr']; ?>>
            <div class="input-group-append" data-target="#reservationdate_<?php echo htmlentities($form['name']); ?>"
                 data-toggle="datetimepicker">
                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
            </div>
        </div>
    </div>
    <?php if(!(empty($form['tips']) || (($form['tips'] instanceof \think\Collection || $form['tips'] instanceof \think\Paginator ) && $form['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
<script>
    $(function () {
        $('#reservationdate_<?php echo htmlentities($form['name']); ?>').datetimepicker();
    })
</script>
                        <?php break; case "time": ?>
                            
                            <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form['required']) || (($form['required'] instanceof \think\Collection || $form['required'] instanceof \think\Paginator ) && $form['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form['name']); ?>"><?php echo htmlentities(htmlspecialchars($form['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <div class="input-group date" id="timepicker_<?php echo htmlentities($form['name']); ?>"
             data-date-format="<?php echo htmlentities(convert_php_to_moment_format($form['format'])); ?>" data-target-input="nearest">
            <input class="form-control datetimepicker-input" type="text" id="<?php echo htmlentities($form['name']); ?>"
                   name="<?php echo htmlentities($form['name']); ?>" value="<?php echo htmlentities((isset($form['value']) && ($form['value'] !== '')?$form['value']:'')); ?>"
                   placeholder="<?php echo htmlentities($form['placeholder']); ?>" autocomplete="off" data-target="#timepicker_<?php echo htmlentities($form['name']); ?>" <?php echo $form['extra_attr']; ?>>
            <div class="input-group-append" data-target="#timepicker_<?php echo htmlentities($form['name']); ?>" data-toggle="datetimepicker">
                <div class="input-group-text"><i class="far fa-clock"></i></div>
            </div>
        </div>
    </div>
    <?php if(!(empty($form['tips']) || (($form['tips'] instanceof \think\Collection || $form['tips'] instanceof \think\Paginator ) && $form['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
<script>
    $(function () {
        $('#timepicker_<?php echo htmlentities($form['name']); ?>').datetimepicker()
    })
</script>
                        <?php break; case "datetime": ?>
                            
                            <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form['required']) || (($form['required'] instanceof \think\Collection || $form['required'] instanceof \think\Paginator ) && $form['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form['name']); ?>"><?php echo htmlentities(htmlspecialchars($form['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <div class="input-group date" id="reservationdate_<?php echo htmlentities($form['name']); ?>"
             data-date-format="<?php echo htmlentities(convert_php_to_moment_format($form['format'])); ?>" data-target-input="nearest">
            <input class="form-control datetimepicker-input" type="text" id="<?php echo htmlentities($form['name']); ?>" name="<?php echo htmlentities($form['name']); ?>"
                   value="<?php echo htmlentities((isset($form['value']) && ($form['value'] !== '')?$form['value']:'')); ?>" placeholder="<?php echo htmlentities($form['placeholder']); ?>"
                   autocomplete="off" data-target="#reservationdate_<?php echo htmlentities($form['name']); ?>" <?php echo $form['extra_attr']; ?>>
            <div class="input-group-append" data-target="#reservationdate_<?php echo htmlentities($form['name']); ?>"
                 data-toggle="datetimepicker">
                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
            </div>
        </div>
    </div>
    <?php if(!(empty($form['tips']) || (($form['tips'] instanceof \think\Collection || $form['tips'] instanceof \think\Paginator ) && $form['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>

<script>
    $(function () {
        $('#reservationdate_<?php echo htmlentities($form['name']); ?>').datetimepicker({icons: {time: 'far fa-clock'}});
    })
</script>
                        <?php break; case "daterange": ?>
                            
                            <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form['required']) || (($form['required'] instanceof \think\Collection || $form['required'] instanceof \think\Paginator ) && $form['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form['name']); ?>"><?php echo htmlentities(htmlspecialchars($form['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <div class="input-group">
            <input class="form-control" type="text" id="<?php echo htmlentities($form['name']); ?>" name="<?php echo htmlentities($form['name']); ?>"
                   value="<?php echo htmlentities((isset($form['value']) && ($form['value'] !== '')?$form['value']:'')); ?>" placeholder="<?php echo htmlentities($form['placeholder']); ?>"
                   autocomplete="off" <?php echo $form['extra_attr']; ?>>
            <div class="input-group-append">
                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
            </div>
        </div>
    </div>
    <?php if(!(empty($form['tips']) || (($form['tips'] instanceof \think\Collection || $form['tips'] instanceof \think\Paginator ) && $form['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>

<script>
    $(function () {
        $('#<?php echo htmlentities($form['name']); ?>').daterangepicker({
            showDropdowns: true,     // 年月份下拉框
            timePicker: true,        // 显示时间
            timePicker24Hour: true,  // 时间制
            timePickerSeconds: true, // 时间显示到秒
            ranges: {
                '今天': [moment(), moment()],
                '昨天': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                '上周': [moment().subtract(6, 'days'), moment()],
                '前30天': [moment().subtract(29, 'days'), moment()],
                '本月': [moment().startOf('month'), moment().endOf('month')],
                '上月': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            },
            //timePicker: true,
            //timePickerIncrement: 30,
            locale: {
                format: '<?php echo htmlentities(convert_php_to_moment_format($form['format'])); ?>',
                applyLabel: '确定',       // 确定按钮文本
                cancelLabel: '取消',      // 取消按钮文本
                customRangeLabel: '自定义',
            }
        });
    })
</script>


                        <?php break; case "tags": ?>
                            
                            <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form['required']) || (($form['required'] instanceof \think\Collection || $form['required'] instanceof \think\Paginator ) && $form['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form['name']); ?>"><?php echo htmlentities(htmlspecialchars($form['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <input class="form-control tags" type="text" id="<?php echo htmlentities($form['name']); ?>" name="<?php echo htmlentities($form['name']); ?>" value="<?php echo htmlentities($form['value']); ?>" placeholder="输入后请回车确认" <?php echo $form['extra_attr']; ?>>
    </div>
    <?php if(!(empty($form['tips']) || (($form['tips'] instanceof \think\Collection || $form['tips'] instanceof \think\Paginator ) && $form['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
                        <?php break; case "number": ?>
                            
                            <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form['required']) || (($form['required'] instanceof \think\Collection || $form['required'] instanceof \think\Paginator ) && $form['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form['name']); ?>"><?php echo htmlentities(htmlspecialchars($form['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <input class="form-control" type="number" id="<?php echo htmlentities($form['name']); ?>" name="<?php echo htmlentities($form['name']); ?>" value="<?php echo htmlentities($form['value']); ?>" <?php if(isset($form['min']) && $form['min'] !== ''): ?>min="<?php echo htmlentities($form['min']); ?>"<?php endif; if(isset($form['max']) && $form['max'] !== ''): ?>max="<?php echo htmlentities($form['max']); ?>"<?php endif; if(isset($form['step']) && $form['step'] !== ''): ?>step="<?php echo htmlentities($form['step']); ?>"<?php endif; ?> <?php echo $form['extra_attr']; ?>>
    </div>
    <?php if(!(empty($form['tips']) || (($form['tips'] instanceof \think\Collection || $form['tips'] instanceof \think\Paginator ) && $form['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>


                        <?php break; case "password": ?>
                            
                            <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form['required']) || (($form['required'] instanceof \think\Collection || $form['required'] instanceof \think\Paginator ) && $form['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form['name']); ?>"><?php echo htmlentities(htmlspecialchars($form['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <input class="form-control" type="password" id="<?php echo htmlentities($form['name']); ?>" name="<?php echo htmlentities($form['name']); ?>" value="" placeholder="<?php echo htmlentities($form['placeholder']); ?>" <?php echo $form['extra_attr']; ?>>
    </div>
    <?php if(!(empty($form['tips']) || (($form['tips'] instanceof \think\Collection || $form['tips'] instanceof \think\Paginator ) && $form['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
                        <?php break; case "select": ?>
                            
                            <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form['required']) || (($form['required'] instanceof \think\Collection || $form['required'] instanceof \think\Paginator ) && $form['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form['name']); ?>"><?php echo htmlentities(htmlspecialchars($form['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <select class="form-control" id="<?php echo htmlentities($form['name']); ?>" name="<?php echo htmlentities($form['name']); ?>" <?php echo htmlentities((isset($form['extra_attr']) && ($form['extra_attr'] !== '')?$form['extra_attr']:'')); ?>>
            <option value=""><?php echo htmlentities($form['placeholder']); ?></option>
            <?php if(is_array($form['options']) || $form['options'] instanceof \think\Collection || $form['options'] instanceof \think\Paginator): $i = 0; $__LIST__ = $form['options'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;if(is_array($option)): ?>
            <option value="<?php echo htmlentities($key); ?>" <?php if(((string)$form['value'] == (string)$key)): ?>selected<?php endif; if($option['disabled'] == 1): ?>disabled<?php endif; ?>><?php echo htmlentities($option['value']); ?></option>
            <?php else: ?>
            <option value="<?php echo htmlentities($key); ?>" <?php if(((string)$form['value'] == (string)$key)): ?>selected<?php endif; ?>><?php echo htmlentities($option); ?></option>
            <?php endif; ?>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </select>
    </div>
    <?php if(!(empty($form['tips']) || (($form['tips'] instanceof \think\Collection || $form['tips'] instanceof \think\Paginator ) && $form['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
                        <?php break; case "select2": ?>
                            
                            <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form['required']) || (($form['required'] instanceof \think\Collection || $form['required'] instanceof \think\Paginator ) && $form['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form['name']); ?>"><?php echo htmlentities(htmlspecialchars($form['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <select class="select2 form-control" id="<?php echo htmlentities($form['name']); ?>" name="<?php echo htmlentities($form['name']); ?>" data-value="<?php echo htmlentities($form['value']); ?>" <?php echo htmlentities((isset($form['extra_attr']) && ($form['extra_attr'] !== '')?$form['extra_attr']:'')); ?>>
            <option value=""><?php echo htmlentities($form['placeholder']); ?></option>
            <?php if(is_array($form['options']) || $form['options'] instanceof \think\Collection || $form['options'] instanceof \think\Paginator): $i = 0; $__LIST__ = $form['options'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;?>
            <option value="<?php echo htmlentities($key); ?>" <?php if(in_array(($key), is_array($form['value'])?$form['value']:explode(',',$form['value']))): ?>selected<?php endif; ?>><?php echo htmlentities($option); ?></option>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </select>
    </div>
    <?php if(!(empty($form['tips']) || (($form['tips'] instanceof \think\Collection || $form['tips'] instanceof \think\Paginator ) && $form['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
<script>
    $(function () {
        var option = {};
        <?php if(!$form['options']): ?>
        if('<?php echo htmlentities($form['ajax_url']); ?>' !== ''){
            // 启用ajax分页查询
            option = {
                language: "zh-CN",
                //allowClear: true,
                ajax: {
                    delay: 250, // 限速请求
                    url: "<?php echo htmlentities($form['ajax_url']); ?>",   //  请求地址
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
                            data.data.unshift({id: '', name: "", text: "<?php echo htmlentities($form['placeholder']); ?>"});
                        }
                        return {
                            results: data.data,
                            pagination: {
                                //more: (params.page) < data.paginator.totalPages
                                more: (params.page) < data.last_page
                            }
                        };
                    },
                    cache: true
                }
            };
            // 默认值设置
            var defaultValue = $('#<?php echo htmlentities($form['name']); ?>').data("value");
            if (defaultValue) {
                $.ajax({
                    type: "POST",
                    url: "<?php echo htmlentities($form['ajax_url']); ?>",
                    data: {value:defaultValue},
                    dataType: "json",
                    success: function(data){
                        $('#<?php echo htmlentities($form['name']); ?>').append("<option selected value='" + data.key + "'>" + data.value + "</option>");
                    }
                });
            }
        }
        <?php endif; ?>
        $('#<?php echo htmlentities($form['name']); ?>').select2(option);
    })
</script>

                        <?php break; case "image": ?>
                            
                            <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form['required']) || (($form['required'] instanceof \think\Collection || $form['required'] instanceof \think\Paginator ) && $form['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form['name']); ?>"><?php echo htmlentities(htmlspecialchars($form['title'])); ?></label>
    <div class="col-9 col-sm-6 col-md-6 col-lg-6 col-xl-4">
        <input class="form-control" type="text" id="<?php echo htmlentities($form['name']); ?>" name="<?php echo htmlentities($form['name']); ?>" value="<?php echo htmlentities($form['value']); ?>" placeholder="<?php echo htmlentities($form['placeholder']); ?>" <?php echo $form['extra_attr']; ?>>
    </div>
    <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-7 dd_ts dd_ts_img">
        <!--上传图片-->
        <!--用来存放item-->
        <div id="fileList_<?php echo htmlentities($form['name']); ?>" class="uploader-list"></div>
        <div id="filePicker_<?php echo htmlentities($form['name']); ?>"><i class="fa fa-upload m-r-10"></i>选择图片</div>
        <a href="<?php echo !empty($form['value']) ? htmlentities($form['value']) : '/static/admin/images/nopic.png'; ?>" target="_blank">
            <img class="image_preview_info"
                 src="<?php echo !empty($form['value']) ? htmlentities($form['value']) : '/static/admin/images/nopic.png'; ?>"
                 id="<?php echo htmlentities($form['name']); ?>_preview">
        </a>
        <!--上传图片-->
        <?php if(!(empty($form['tips']) || (($form['tips'] instanceof \think\Collection || $form['tips'] instanceof \think\Paginator ) && $form['tips']->isEmpty()))): ?>
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form['tips']; ?>
        </small>
        <?php endif; ?>
    </div>
</div>
<script type="text/javascript">
    webupload('fileList_<?php echo htmlentities($form['name']); ?>', 'filePicker_<?php echo htmlentities($form['name']); ?>', '<?php echo htmlentities($form['name']); ?>_preview', '<?php echo htmlentities($form['name']); ?>', false, '<?php echo htmlentities((isset($system['upload_image_ext']) && ($system['upload_image_ext'] !== '')?$system['upload_image_ext']:"")); ?>', '<?php echo htmlentities((isset($system['upload_image_size']) && ($system['upload_image_size'] !== '')?$system['upload_image_size']:"0")); ?>');
</script>


                        <?php break; case "images": ?>
                            
                            <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
<!-- ZTX-004  by 折腾侠-->
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form['required']) || (($form['required'] instanceof \think\Collection || $form['required'] instanceof \think\Paginator ) && $form['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form['name']); ?>"><?php echo htmlentities(htmlspecialchars($form['title'])); ?></label>
	
	<div class="col-12 col-sm-7 col-md-7 col-lg-7 col-xl-4" >
	<!-- ZTX-004  by 折腾侠-->
        <div class="more_images dd_ts">
            <div id="more_images_<?php echo htmlentities($form['name']); ?>">
                <div class="hide">
                    <input type="text" name="<?php echo htmlentities($form['name']); ?>[]" value="">
                    <input type="text" name="<?php echo htmlentities($form['name']); ?>_title[]" value="">
                    <!-- ZTX-增加缩略图显示 -->
                    <input type="text" name="<?php echo htmlentities($form['name']); ?>_small[]" value="">
                    <!-- ZTX-增加缩略图显示 -->
                </div>
                <?php if(!(empty($form['value']) || (($form['value'] instanceof \think\Collection || $form['value'] instanceof \think\Paginator ) && $form['value']->isEmpty()))): if(is_array($form['value']) || $form['value'] instanceof \think\Collection || $form['value'] instanceof \think\Paginator): $i = 0; $__LIST__ = $form['value'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
				<!-- ZTX-004  by 折腾侠-->
                <div class="row no-gutters">
                    <div class="col-4 col-sm-4">
                        <input type="text" name="<?php echo htmlentities($form['name']); ?>[]" value="<?php echo htmlentities($vo['image']); ?>" class="form-control">
                        <!-- ZTX-增加缩略图显示 -->
                        <input type="text" name="<?php echo htmlentities($form['name']); ?>_small[]" value="<?php echo isset($vo['small']) ? htmlentities($vo['small']) : ''; ?>" class="hide">
                        <!-- ZTX-增加缩略图显示 -->
                    </div>
                    <div class="col-3 col-sm-3">
                        <input type="text" name="<?php echo htmlentities($form['name']); ?>_title[]" value="<?php echo htmlentities($vo['title']); ?>" class="form-control input-sm">
                    </div>
                    <div class="col-4 col-sm-3">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default btn-sm move_up_images">
                                <i class="fa fa-chevron-up"></i>
                            </button>
                            <button type="button" class="btn btn-default btn-sm move_down_images">
                                <i class="fa fa-chevron-down"></i>
                            </button>
                            <button type="button" class="btn btn-default btn-sm remove_images">
                                <i class="fa fa-times"></i>
                            </button>
							
                        </div>
                    </div>
					
					 <div class="col-4 col-sm-2"><a href="<?php echo htmlentities($vo['image']); ?>" target="_blank"> <img class="image_preview_info" src="<?php echo !empty($vo['small']) ? htmlentities($vo['small']) : htmlentities($vo['image']); ?>"  ></a></div>
                </div>
				<!-- ZTX-004  by 折腾侠-->
                <?php endforeach; endif; else: echo "" ;endif; ?>
                <?php endif; ?>
            </div>
			
			
        </div>
		<!-- ZTX-005  by 折腾侠-->
		<div class="row no-gutters">
		 <div class="col-4 col-sm-12">
			<input class="form-control" type="text" id="img" name="site_img_choose" value="" placeholder="从站内选择图片，输入搜索关键词" >
		</div>
		
		
		</div>
		
		
		<!-- ZTX-005  by 折腾侠-->
    </div>
	<!-- ZTX-004  by 折腾侠-->
    <div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-7 dd_ts dd_ts_img">
	<!-- ZTX-004  by 折腾侠-->
        <!--上传图片-->
        <!--用来存放item-->
        <div id="fileList_<?php echo htmlentities($form['name']); ?>" class="uploader-list"></div>
        <div id="filePicker_<?php echo htmlentities($form['name']); ?>"><i class="fa fa-upload m-r-10"></i>上传图片</div>
		
	
		
		
        <!--上传图片-->
        <?php if(!(empty($form['tips']) || (($form['tips'] instanceof \think\Collection || $form['tips'] instanceof \think\Paginator ) && $form['tips']->isEmpty()))): ?>
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form['tips']; ?>
        </small>
        <?php endif; ?>
    </div>
</div>
<script type="text/javascript">
    webupload('fileList_<?php echo htmlentities($form['name']); ?>', 'filePicker_<?php echo htmlentities($form['name']); ?>', '<?php echo htmlentities($form['name']); ?>_preview', '<?php echo htmlentities($form['name']); ?>', true, '<?php echo htmlentities((isset($system['upload_image_ext']) && ($system['upload_image_ext'] !== '')?$system['upload_image_ext']:"")); ?>', '<?php echo htmlentities((isset($system['upload_image_size']) && ($system['upload_image_size'] !== '')?$system['upload_image_size']:"0")); ?>');
</script>
                        <?php break; case "file": ?>
                            
                            <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form['required']) || (($form['required'] instanceof \think\Collection || $form['required'] instanceof \think\Paginator ) && $form['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form['name']); ?>"><?php echo htmlentities(htmlspecialchars($form['title'])); ?></label>
    <div class="col-9 col-sm-6 col-md-6 col-lg-6 col-xl-4">
        <input class="form-control" type="text" id="<?php echo htmlentities($form['name']); ?>" name="<?php echo htmlentities($form['name']); ?>" value="<?php echo htmlentities($form['value']); ?>" placeholder="<?php echo htmlentities($form['placeholder']); ?>" <?php echo $form['extra_attr']; ?>>
    </div>
    <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-7 dd_ts dd_ts_img">
        <!--上传图片-->
        <!--用来存放item-->
        <div id="fileList_<?php echo htmlentities($form['name']); ?>" class="uploader-list"></div>
        <div id="filePicker_<?php echo htmlentities($form['name']); ?>"><i class="fa fa-upload m-r-10"></i>选择文件</div>
        <!--上传图片-->
        <?php if(!(empty($form['tips']) || (($form['tips'] instanceof \think\Collection || $form['tips'] instanceof \think\Paginator ) && $form['tips']->isEmpty()))): ?>
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form['tips']; ?>
        </small>
        <?php endif; ?>
    </div>
</div>
<script type="text/javascript">
    webupload('fileList_<?php echo htmlentities($form['name']); ?>', 'filePicker_<?php echo htmlentities($form['name']); ?>', '<?php echo htmlentities($form['name']); ?>_preview', '<?php echo htmlentities($form['name']); ?>', false, '<?php echo htmlentities((isset($system['upload_file_ext']) && ($system['upload_file_ext'] !== '')?$system['upload_file_ext']:"")); ?>', '<?php echo htmlentities((isset($system['upload_file_size']) && ($system['upload_file_size'] !== '')?$system['upload_file_size']:"0")); ?>', 'file');
</script>


                        <?php break; case "files": ?>
                            
                            <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form['required']) || (($form['required'] instanceof \think\Collection || $form['required'] instanceof \think\Paginator ) && $form['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form['name']); ?>"><?php echo htmlentities(htmlspecialchars($form['title'])); ?></label>
    <div class="col-9 col-sm-7 col-md-7 col-lg-7 col-xl-4">
        <div class="more_images dd_ts">
            <div id="more_images_<?php echo htmlentities($form['name']); ?>">
                <div class="hide">
                    <input type="text" name="<?php echo htmlentities($form['name']); ?>[]" value="">
                    <input type="text" name="<?php echo htmlentities($form['name']); ?>_title[]" value="">
                </div>
                <?php if(!(empty($form['value']) || (($form['value'] instanceof \think\Collection || $form['value'] instanceof \think\Paginator ) && $form['value']->isEmpty()))): if(is_array($form['value']) || $form['value'] instanceof \think\Collection || $form['value'] instanceof \think\Paginator): $i = 0; $__LIST__ = $form['value'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <!-- ZTX-002  by 折腾侠删除原有代码，改为跟图片显示容器一样的代码-->
                <div class="row no-gutters">
                    <div class="col-4 col-sm-6">
                        <input type="text" name="<?php echo htmlentities($form['name']); ?>[]" value="<?php echo htmlentities($vo['image']); ?>" class="form-control">
                    </div>
                    <div class="col-3 col-sm-3">
                        <input type="text" name="<?php echo htmlentities($form['name']); ?>_title[]" value="<?php echo htmlentities($vo['title']); ?>" class="form-control input-sm">
                    </div>
                    <div class="col-4 col-sm-3">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default btn-sm move_up_images">
                                <i class="fa fa-chevron-up"></i>
                            </button>
                            <button type="button" class="btn btn-default btn-sm move_down_images">
                                <i class="fa fa-chevron-down"></i>
                            </button>
                            <button type="button" class="btn btn-default btn-sm remove_images">
                                <i class="fa fa-times"></i>
                            </button>
							
                        </div>
                    </div>
					 </div>
					
				<!-- ZTX-002  by 折腾侠 删除原有代码，改为跟图片显示容器一样的代码-->
                <?php endforeach; endif; else: echo "" ;endif; ?>
                <?php endif; ?>
            </div>
        </div>
		<!-- ZTX-005  by 折腾侠-->
		<div class="row no-gutters">
		 <div class="col-4 col-sm-12">
			<input class="form-control" type="text" id="file" name="site_file_choose" value="" placeholder="从站内选择文件，输入搜索关键词" >
		</div>
		
		
		</div>
		
		
		<!-- ZTX-005  by 折腾侠-->
    </div>
    <div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-7 dd_ts dd_ts_img">
        <!--上传图片-->
        <!--用来存放item-->
        <div id="fileList_<?php echo htmlentities($form['name']); ?>" class="uploader-list"></div>
        <div id="filePicker_<?php echo htmlentities($form['name']); ?>"><i class="fa fa-upload m-r-10"></i>选择文件</div>
        <!--上传图片-->
        <?php if(!(empty($form['tips']) || (($form['tips'] instanceof \think\Collection || $form['tips'] instanceof \think\Paginator ) && $form['tips']->isEmpty()))): ?>
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form['tips']; ?>
        </small>
        <?php endif; ?>
    </div>
</div>
<script type="text/javascript">
    webupload('fileList_<?php echo htmlentities($form['name']); ?>', 'filePicker_<?php echo htmlentities($form['name']); ?>', '<?php echo htmlentities($form['name']); ?>_preview', '<?php echo htmlentities($form['name']); ?>', true, '<?php echo htmlentities((isset($system['upload_file_ext']) && ($system['upload_file_ext'] !== '')?$system['upload_file_ext']:"")); ?>', '<?php echo htmlentities((isset($system['upload_file_size']) && ($system['upload_file_size'] !== '')?$system['upload_file_size']:"0")); ?>', 'file');
</script>
                        <?php break; case "editor": ?>
                            
                            <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form['required']) || (($form['required'] instanceof \think\Collection || $form['required'] instanceof \think\Paginator ) && $form['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form['name']); ?>"><?php echo htmlentities(htmlspecialchars($form['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-8 col-xl-7">
        <textarea id="<?php echo htmlentities($form['name']); ?>" name="<?php echo htmlentities($form['name']); ?>" <?php echo $form['extra_attr']; ?> style="width:100%;height: <?php echo htmlentities($form['height']); ?>px"><?php echo htmlentities($form['value']); ?></textarea>
    </div>
    <?php if(!(empty($form['tips']) || (($form['tips'] instanceof \think\Collection || $form['tips'] instanceof \think\Paginator ) && $form['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-2 col-xl-4 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
<script>
    <?php if($system['editor'] == '1'): ?>
    UE.delEditor('<?php echo htmlentities($form['name']); ?>');
    UE.getEditor('<?php echo htmlentities($form['name']); ?>', {
        serverUrl: "<?php echo url('Upload/index',['from'=>'ueditor']); ?>",
    });
    <?php else: ?>
    CKEDITOR.replace('<?php echo htmlentities($form['name']); ?>', {height: '<?php echo htmlentities($form['height']); ?>px'});
    <?php endif; ?>
</script>
                        <?php break; case "button": ?>
                            
                            <div class="row dd_input_group no-gutters" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <div class="form-group">
        <div class="col-12">
            <?php if($form['elemtype'] == "button"): ?>
            <button class="btn btn-flat <?php echo htmlentities((isset($form['class']) && ($form['class'] !== '')?$form['class']:'btn-primary')); ?>" id="<?php echo htmlentities((isset($form['id']) && ($form['id'] !== '')?$form['id']:'')); ?>" type="button" <?php echo (isset($form['data']) && ($form['data'] !== '')?$form['data']:''); if(isset($form['disabled'])): ?>disabled<?php endif; ?>>
            <i class="<?php echo htmlentities((isset($form['icon']) && ($form['icon'] !== '')?$form['icon']:'')); ?>"></i> <?php echo htmlentities((isset($form['title']) && ($form['title'] !== '')?$form['title']:'')); ?></button>
            <?php else: ?>
            <a class="btn btn-flat <?php echo htmlentities((isset($form['class']) && ($form['class'] !== '')?$form['class']:'btn-primary')); if(isset($form['disabled'])): ?> disabled<?php endif; ?>" id="<?php echo htmlentities((isset($form['id']) && ($form['id'] !== '')?$form['id']:'')); ?>" title="<?php echo htmlentities((isset($form['title']) && ($form['title'] !== '')?$form['title']:'')); ?>" target="<?php echo htmlentities((isset($form['target']) && ($form['target'] !== '')?$form['target']:'')); ?>" href="<?php echo htmlentities((isset($form['href']) && ($form['href'] !== '')?$form['href']:'')); ?>" <?php echo (isset($form['data']) && ($form['data'] !== '')?$form['data']:''); ?>><i class="<?php echo htmlentities((isset($form['icon']) && ($form['icon'] !== '')?$form['icon']:'')); ?>"></i> <?php echo htmlentities((isset($form['title']) && ($form['title'] !== '')?$form['title']:'')); ?></a>
            <?php endif; ?>
        </div>
    </div>
</div>
                        <?php break; case "hidden": ?>
                            
                            <div class="row dd_input_group hide <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <div class="form-group">
        <input type="hidden" name="<?php echo htmlentities($form['name']); ?>" value="<?php echo htmlentities((isset($form['value']) && ($form['value'] !== '')?$form['value']:'')); ?>" id="<?php echo htmlentities($form['name']); ?>" <?php echo (isset($form['extra_attr']) && ($form['extra_attr'] !== '')?$form['extra_attr']:''); ?>>
    </div>
</div>


                        <?php break; case "html": ?>
                            
                            <?php echo $form['html']; break; case "color": ?>
                            
                            <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form['required']) || (($form['required'] instanceof \think\Collection || $form['required'] instanceof \think\Paginator ) && $form['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form['name']); ?>"><?php echo htmlentities(htmlspecialchars($form['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <div class="input-group <?php echo htmlentities($form['name']); ?>-colorpicker">
            <input class="form-control" type="text" id="<?php echo htmlentities($form['name']); ?>" name="<?php echo htmlentities($form['name']); ?>" value="<?php echo htmlentities($form['value']); ?>" placeholder="<?php echo htmlentities($form['placeholder']); ?>" <?php echo $form['extra_attr']; ?>>
            <div class="input-group-append">
                <span class="input-group-text">
                    <i class="fas fa-square" <?php if($form['value']): ?>style="color: <?php echo htmlentities($form['value']); ?>"<?php endif; ?>></i>
                </span>
            </div>
        </div>
    </div>
    <?php if(!(empty($form['tips']) || (($form['tips'] instanceof \think\Collection || $form['tips'] instanceof \think\Paginator ) && $form['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
<script>
    $(function () {
        $('.<?php echo htmlentities($form['name']); ?>-colorpicker').colorpicker()
        $('.<?php echo htmlentities($form['name']); ?>-colorpicker').on('colorpickerChange', function(event) {
            $('.<?php echo htmlentities($form['name']); ?>-colorpicker .fa-square').css('color', event.color.toString());
        });
    })
</script>
                        <?php break; case "code": ?>
                            
                            <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form['required']) || (($form['required'] instanceof \think\Collection || $form['required'] instanceof \think\Paginator ) && $form['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form['name']); ?>"><?php echo htmlentities(htmlspecialchars($form['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-8 col-xl-7">
        <textarea id="<?php echo htmlentities($form['name']); ?>" name="<?php echo htmlentities($form['name']); ?>" <?php echo $form['extra_attr']; ?>><?php echo htmlentities($form['value']); ?></textarea>
    </div>
    <?php if(!(empty($form['tips']) || (($form['tips'] instanceof \think\Collection || $form['tips'] instanceof \think\Paginator ) && $form['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-2 col-xl-4 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
<script>
    $(function () {
        // CodeMirror
        var codeEditor = CodeMirror.fromTextArea(document.getElementById("<?php echo htmlentities($form['name']); ?>"), {
            mode: "<?php echo htmlentities($form['mode']); ?>",     // 编辑器语言
            theme: "<?php echo htmlentities($form['theme']); ?>",   // 编辑器主题
            lineNumbers: true,              // 显示行号
            showCursorWhenSelecting: true,  // 文本选中时显示光标
            lineWrapping: true,             // 代码折叠
        });
        codeEditor.setSize('auto',"<?php echo htmlentities($form['height']); ?>px");
    })
</script>
                        <?php break; case "linkage": 
    // 获取一级联动数据
    $levelOne  = getLinkageData($form['model'], 0, $form['pid']);
    $levelKey  = [];
    $levelData = [];

    // 默认值
    if ($form['value'] != '') {
        $levelKeyData = getLinkageAllData($form['model'], $form['value'], $form['key'], $form['option'], $form['pid']);
        $levelKey = $levelKeyData['key'];
        $levelData = $levelKeyData['data'];
        sort($levelKey); // 升序排序
        $levelData = array_reverse($levelData); // 以相反的元素顺序返回数组
    }
 ?>
<div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form['required']) || (($form['required'] instanceof \think\Collection || $form['required'] instanceof \think\Paginator ) && $form['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form['name']); ?>"><?php echo htmlentities(htmlspecialchars($form['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-8 col-xl-7">
        <select class="form-control js_linkage" data-model="<?php echo htmlentities($form['model']); ?>" data-key="<?php echo htmlentities($form['key']); ?>" data-key_value="<?php echo htmlentities($form['option']); ?>" data-pid_field_name="<?php echo htmlentities((isset($form['pid']) && ($form['pid'] !== '')?$form['pid']:'pid')); ?>" data-next_level_id="<?php echo htmlentities($form['name']); ?>_2" id="<?php echo htmlentities($form['name']); ?>_1" name="<?php echo htmlentities($form['name']); if($form['level'] > '1'): ?>_1<?php endif; ?>" data-placeholder="<?php echo htmlentities($form['placeholder']); ?>" <?php echo htmlentities((isset($form['extra_attr']) && ($form['extra_attr'] !== '')?$form['extra_attr']:'')); ?> data-ajax_url="<?php echo htmlentities($form['ajax_url']); ?>" style="width: auto; display: inline-block">
            <option value=""><?php echo htmlentities($form['placeholder']); ?></option>
            <?php if(is_array($levelOne) || $levelOne instanceof \think\Collection || $levelOne instanceof \think\Paginator): $i = 0; $__LIST__ = $levelOne;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;if($form['level'] == '1'): ?>
                <option value="<?php echo htmlentities($option[$form['key']]); ?>" <?php if(($form['value'] == (string)$option[$form['key']])): ?>selected<?php endif; ?>><?php echo $option[$form['option']]; ?></option>
            <?php else: ?>
                <option value="<?php echo htmlentities($option[$form['key']]); ?>" <?php if((isset($levelKey[1]) && $levelKey[1] == (string)$option[$form['key']])): ?>selected<?php endif; ?>><?php echo $option[$form['option']]; ?></option>
            <?php endif; ?>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </select>
        <?php if($form['level'] == '2'): ?>
        <select class="form-control" id="<?php echo htmlentities($form['name']); ?>_2" name="<?php echo htmlentities($form['name']); ?>" data-placeholder="<?php echo htmlentities($form['placeholder']); ?>" <?php echo htmlentities((isset($form['extra_attr']) && ($form['extra_attr'] !== '')?$form['extra_attr']:'')); ?> style="width: auto; display: inline-block">
            <option value=""><?php echo htmlentities($form['placeholder']); ?></option>
            <?php if(!(empty($levelData['1']) || (($levelData['1'] instanceof \think\Collection || $levelData['1'] instanceof \think\Paginator ) && $levelData['1']->isEmpty()))): if(is_array($levelData['1']) || $levelData['1'] instanceof \think\Collection || $levelData['1'] instanceof \think\Paginator): $i = 0; $__LIST__ = $levelData['1'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;?>
            <option value="<?php echo htmlentities($option[$form['key']]); ?>" <?php if(($form['value'] == (string)$option[$form['key']])): ?>selected<?php endif; ?>><?php echo $option[$form['option']]; ?></option>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            <?php endif; ?>
        </select>
        <?php endif; if($form['level'] == '3'): ?>
        <select class="form-control js_linkage" data-model="<?php echo htmlentities($form['model']); ?>" data-key="<?php echo htmlentities($form['key']); ?>" data-key_value="<?php echo htmlentities($form['option']); ?>" data-pid_field_name="<?php echo htmlentities((isset($form['pid']) && ($form['pid'] !== '')?$form['pid']:'pid')); ?>" data-next_level_id="<?php echo htmlentities($form['name']); ?>_3" id="<?php echo htmlentities($form['name']); ?>_2" name="<?php echo htmlentities($form['name']); ?>_2" data-placeholder="<?php echo htmlentities($form['placeholder']); ?>" <?php echo htmlentities((isset($form['extra_attr']) && ($form['extra_attr'] !== '')?$form['extra_attr']:'')); ?> data-ajax_url="<?php echo htmlentities($form['ajax_url']); ?>" style="width: auto; display: inline-block">
            <option value=""><?php echo htmlentities($form['placeholder']); ?></option>
            <?php if(!(empty($levelData['1']) || (($levelData['1'] instanceof \think\Collection || $levelData['1'] instanceof \think\Paginator ) && $levelData['1']->isEmpty()))): if(is_array($levelData['1']) || $levelData['1'] instanceof \think\Collection || $levelData['1'] instanceof \think\Paginator): $i = 0; $__LIST__ = $levelData['1'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;?>
            <option value="<?php echo htmlentities($option[$form['key']]); ?>" <?php if((isset($levelKey[2]) && $levelKey[2] == (string)$option[$form['key']])): ?>selected<?php endif; ?>><?php echo $option[$form['option']]; ?></option>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            <?php endif; ?>
        </select>
        <select class="form-control" id="<?php echo htmlentities($form['name']); ?>_3" name="<?php echo htmlentities($form['name']); ?>" data-placeholder="<?php echo htmlentities($form['placeholder']); ?>" <?php echo htmlentities((isset($form['extra_attr']) && ($form['extra_attr'] !== '')?$form['extra_attr']:'')); ?> style="width: auto; display: inline-block">
            <option value=""><?php echo htmlentities($form['placeholder']); ?></option>
            <?php if(!(empty($levelData['2']) || (($levelData['2'] instanceof \think\Collection || $levelData['2'] instanceof \think\Paginator ) && $levelData['2']->isEmpty()))): if(is_array($levelData['2']) || $levelData['2'] instanceof \think\Collection || $levelData['2'] instanceof \think\Paginator): $i = 0; $__LIST__ = $levelData['2'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;?>
            <option value="<?php echo htmlentities($option[$form['key']]); ?>" <?php if(($form['value'] == (string)$option[$form['key']])): ?>selected<?php endif; ?>><?php echo $option[$form['option']]; ?></option>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            <?php endif; ?>
        </select>
        <?php endif; ?>
    </div>
    <?php if(!(empty($form['tips']) || (($form['tips'] instanceof \think\Collection || $form['tips'] instanceof \think\Paginator ) && $form['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-2 col-xl-4 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
                        <?php break; default: ?>

                    <?php endswitch; ?>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                    <!---->
                    <div class="row dd_input_group form-builder-submit no-gutters">
                        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-11 offset-sm-2 offset-md-2 offset-lg-2 offset-xl-1">
                            <?php if(isset($btn_hide) && !in_array('submit', $btn_hide)): ?>
                            <button type="submit" class="btn btn-flat btn-primary <?php if($layer == true): ?>hide<?php endif; ?>"><?php echo htmlentities((isset($btn_title['submit']) && ($btn_title['submit'] !== '')?$btn_title['submit']:'提 交')); ?></button>
                            <?php endif; if(isset($btn_hide) && !in_array('back', $btn_hide)): ?>
                            <button type="button" class="btn btn-flat btn-default <?php if($layer == true): ?>hide<?php endif; ?>" onclick="javascript :history.back(-1)"><?php echo htmlentities((isset($btn_title['back']) && ($btn_title['back'] !== '')?$btn_title['back']:'返 回')); ?></button>
                            <?php endif; foreach($btn_extra as $key=>$vo): ?>
                            <?php echo (isset($vo) && ($vo !== '')?$vo:''); ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <!-- /.box -->
                <?php else: ?>
                    <div class="box box-body">
                        <?php echo $empty_tips; ?>
                    </div>
                    <!-- /.box -->
                <?php endif; ?>
            </form>
            <!--底部提示-->
            <?php if(!(empty($page_tips_bottom) || (($page_tips_bottom instanceof \think\Collection || $page_tips_bottom instanceof \think\Paginator ) && $page_tips_bottom->isEmpty()))): ?>
            <div class="col-12 alert alert-<?php echo htmlentities($tips_type); ?> alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <p><?php echo $page_tips_bottom; ?></p>
            </div>
            <?php endif; ?>
            
            <?php echo (isset($extra_html_content_bottom) && ($extra_html_content_bottom !== '')?$extra_html_content_bottom:''); ?>
            
            <?php echo (isset($extra_js) && ($extra_js !== '')?$extra_js:''); ?>
			
	<script>
	
	
	
	
	
	
	// ZTX-002折腾侠：增加从服务器上删除对应文件的操作	
	$(document).on('click', '.remove_images', function () {
var file = $(this).parent().parent().parent().find("input[name='images[]']").val();
var file_type='image';
if(typeof file == "undefined" ){
file = $(this).parent().parent().parent().find("input[name='files_test[]']").val();
file_type='file';
}
var remove = $(this).parent().parent().parent();
	layer.confirm("是否删除原文件",{
	icon: 3,
    title: "系统提示",
    btn: ['是', '否']
	}, function (index) {
	//第一个按钮运行的函数，传递index（当前层）参数
		// 删除服务器上的文件
		if (file=='') {
				remove.remove();
            }
			else{
			 $.ajax({
                    type: "POST",
                    url: "/admin/Index/file_del",
                    data:{file:file,file_type:file_type},
                    dataType: "json",
                    success: function(data){
					 switch (data) {
                    case ("1"):
                       console.log('删除成功');
					   remove.remove();
                        break;
                    case ("0"):
                        console.log('文件不存在');
						remove.remove();
                        break;
                    case ("2"):
                      console.log('删除失败');
                        break;
						default:
						console.log('删除失败,原因不明');
                        break;
								 }}
                    });
			}
	layer.close(index);
	}, function(){
	//第二个按钮运行的函数
		// 仅删除标签
		remove.remove();
	});// 折腾侠：增加从服务器上删除对应文件的操作
  // ZTX-002折腾侠：增加从服务器上删除对应文件的操作	
})

// ZTX-选择图标
$( function() {

    if($('[icon]').length >0 ){
        $( '[icon]' ).autocomplete({
	
    source:function(request, response){
     $.ajax({
                  type: "POST",
                  url: "/admin/Index/autocomplete_icon",
                  data:{key:request.term},
                  dataType: "json",
                  success: function(data){
                  
                      response(data);
                  }
              });
    },
    select: function (event, ui) {    // 下拉框选中事件
          
        $(this).val( ui.item.code);
        return false;
      }
  }).autocomplete( "instance" )._renderItem = function( ul, item ) {
                  return $( "<li>" )
                      .append( '<div class="mb-2"> <i class="'+item.code+'"></i> <span class="align-middle">'+item.code+'  '+item.name+'</span> </div>')
                      .appendTo( ul );
                      };

    }
//ZTX-005从站内选择图片
if($( '[name="site_img_choose"]' ).length >0 ){


    $( '[name="site_img_choose"]' ).autocomplete({
	
      source:function(request, response){
	   $.ajax({
                    type: "POST",
                    url: "/admin/Index/autocomplete_file",
                    data:{where:[['link','like','%'+request.term+'%'],['file_type','like','%img%']]},
                    dataType: "json",
                    success: function(data){
					
                        response(data);
                    }
                });
	  },
	  select: function (event, ui) {    // 下拉框选中事件
            
		 var images = '' +
                    '<div class="row no-gutters">' +
                    '   <div class="col-4 col-sm-4"><input type="text" name="images[]" value="' + ui.item.link + '" class="form-control"/></div>' +
                    '   <div class="col-3 col-sm-3"><input class="form-control input-sm" type="text" name="images_title[]" value="' + ui.item.name + '" ></div>' +
                    '   <div class="col-4 col-sm-3">' +
                    '       <div class="btn-group">' +
                    '           <button type="button" class="btn btn-default btn-sm move_up_images"><i class="fa fa-chevron-up"></i></button>' +
                    '           <button type="button" class="btn btn-default btn-sm move_down_images"><i class="fa fa-chevron-down"></i></button>' +
                    '           <button type="button" class="btn btn-default btn-sm remove_images"><i class="fa fa-times"></i></button>' +
                    '       </div>' +
                    '   </div>' +
					'   <div class="col-4 col-sm-2"><a href="'+ ui.item.link +'" target="_blank"> <img class="images_preview_info" src="'+ ui.item.link +'"  ></a></div>'+
					
					
                    '</div>';
                var images_list = $('#more_images_images').html();

                $('#more_images_images').html(images + images_list);
            return false;
        }
    }).autocomplete( "instance" )._renderItem = function( ul, item ) {
                    return $( "<li>" )
                        .append( '<div><img  width="100" height="100" src="'+item.link+'"><a>' + item.name + '</a></div>')
                        .appendTo( ul );
						};}
						
						//站内文件选择
	if($( '[name="site_file_choose"]' ).length >0 ){
	 $( '[name="site_file_choose"]' ).autocomplete({
	
      source:function(request, response){
	   $.ajax({
                    type: "POST",
                    url: "/admin/Index/autocomplete_file",
                    data:{where:[['link','like','%'+request.term+'%'],['file_type','like','%file%']]},
                    dataType: "json",
                    success: function(data){
					
                        response(data);
                    }
                });
	  },
	  select: function (event, ui) {    // 下拉框选中事件
            
		 var images = '' +
                    '<div class="row no-gutters">' +
                    '   <div class="col-4 col-sm-6"><input type="text" name="images[]" value="' + ui.item.link + '" class="form-control"/></div>' +
                    '   <div class="col-3 col-sm-3"><input class="form-control input-sm" type="text" name="images_title[]" value="' + ui.item.name + '" ></div>' +
                    '   <div class="col-4 col-sm-3">' +
                    '       <div class="btn-group">' +
                    '           <button type="button" class="btn btn-default btn-sm move_up_images"><i class="fa fa-chevron-up"></i></button>' +
                    '           <button type="button" class="btn btn-default btn-sm move_down_images"><i class="fa fa-chevron-down"></i></button>' +
                    '           <button type="button" class="btn btn-default btn-sm remove_images"><i class="fa fa-times"></i></button>' +
                    '       </div>' +
                    '   </div>' +
					
					
					
                    '</div>';
                var images_list = $('#more_images_files_test').html();

                $('#more_images_files_test').html(images + images_list);
            return false;
        }
    }).autocomplete( "instance" )._renderItem = function( ul, item ) {
                    return $( "<li>" )
                        .append( '<div>' + item.name + '</a></div>')
                        .appendTo( ul );
						}
  } });
  
  
  </script>
			
			
        </div>
    </div>
</div>

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
    <div class="container-fluid">
        <div class="row">
            
            <?php echo (isset($extra_html_content_top) && ($extra_html_content_top !== '')?$extra_html_content_top:''); ?>
            <!--顶部提示开始-->
            <?php if(!(empty($page_tips_top) || (($page_tips_top instanceof \think\Collection || $page_tips_top instanceof \think\Paginator ) && $page_tips_top->isEmpty()))): ?>
            <div class="col-12 alert alert-<?php echo htmlentities($tips_type); ?> alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <p><?php echo $page_tips_top; ?></p>
            </div>
            <?php endif; ?>
            <!--顶部提示结束-->
            <?php if($layer == false): if(isset($page_tips_search) OR $show_all): ?>
            <div class="col-12 callout search">
                <form action="" data-pjax-other>
                    <?php if(!(empty($page_tips_search) || (($page_tips_search instanceof \think\Collection || $page_tips_search instanceof \think\Paginator ) && $page_tips_search->isEmpty()))): ?><?php echo $page_tips_search; ?><?php endif; if($show_all): ?>
                    <a class="btn btn-flat btn-primary" href="<?php echo url('index'); ?>"><i class="fa fa-list-ul m-r-10"></i>查看全部</a>
                    <?php endif; ?>
                    <a class="btn btn-flat btn-success f_r" onclick="javascript :history.back(-1)"><i class="fa fa-undo m-r-10"></i>返 回</a>
                </form>
            </div>
            <?php endif; ?>
            <?php endif; ?>
            <!--数据表开始-->
            <form name="form-builder" class="col-12 form_builder" method="<?php echo htmlentities($form_method); ?>" action="<?php echo htmlentities($form_url); ?>"  <?php if(!empty($submit_confirm)) echo 'submit_confirm'; ?> >
                <!---->
                <?php if($form_items): ?>
                    <!---->
                    <?php if(is_array($form_items) || $form_items instanceof \think\Collection || $form_items instanceof \think\Paginator): $i = 0; $__LIST__ = $form_items;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$form): $mod = ($i % 2 );++$i;switch($form['type']): case "group": ?>
                            
                            <ul class="nav nav-tabs" id="builder-form-group-tab" role="tablist">
    <?php if(is_array($form['options']) || $form['options'] instanceof \think\Collection || $form['options'] instanceof \think\Paginator): $items_key = 0; $__LIST__ = $form['options'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($items_key % 2 );++$items_key;?>
    <li class="nav-item">
        <a class="nav-link <?php if($items_key == '1'): ?>active<?php endif; ?>" id="nav-tab-<?php echo htmlentities($items_key); ?>" href="#nav-tab-content-<?php echo htmlentities($items_key); ?>" role="tab" data-toggle="tab"><?php echo htmlentities(htmlspecialchars($key)); ?></a>
    </li>
    <?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
<div class="tab-content no-padding">
    <?php if(is_array($form['options']) || $form['options'] instanceof \think\Collection || $form['options'] instanceof \think\Paginator): $items_key = 0; $__LIST__ = $form['options'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$items): $mod = ($items_key % 2 );++$items_key;?>
    <div class="tab-pane <?php if($items_key == '1'): ?>active<?php endif; ?>" id="nav-tab-content-<?php echo htmlentities($items_key); ?>" >
    <?php if(is_array($items) || $items instanceof \think\Collection || $items instanceof \think\Paginator): $i = 0; $__LIST__ = $items;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$form_group): $mod = ($i % 2 );++$i;switch($form_group['type']): case "text": ?>
                
                <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form_group['required']) || (($form_group['required'] instanceof \think\Collection || $form_group['required'] instanceof \think\Paginator ) && $form_group['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form_group['name']); ?>"><?php echo htmlentities(htmlspecialchars($form_group['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <?php if(!(empty($form_group['group']) || (($form_group['group'] instanceof \think\Collection || $form_group['group'] instanceof \think\Paginator ) && $form_group['group']->isEmpty()))): ?>
        <div class="input-group">
            <?php endif; if(!(empty($form_group['group']['0']) || (($form_group['group']['0'] instanceof \think\Collection || $form_group['group']['0'] instanceof \think\Paginator ) && $form_group['group']['0']->isEmpty()))): ?>
            <div class="input-group-prepend">
                <span class="input-group-text"><?php echo $form_group['group']['0']; ?></span>
            </div>
            <?php endif; ?>
            <input class="form-control" type="text" id="<?php echo htmlentities($form_group['name']); ?>" name="<?php echo htmlentities($form_group['name']); ?>" value="<?php echo htmlentities($form_group['value']); ?>" placeholder="<?php echo htmlentities($form_group['placeholder']); ?>" <?php echo $form_group['extra_attr']; ?>>
            <?php if(!(empty($form_group['group']['1']) || (($form_group['group']['1'] instanceof \think\Collection || $form_group['group']['1'] instanceof \think\Paginator ) && $form_group['group']['1']->isEmpty()))): ?>
            <div class="input-group-append">
                <span class="input-group-text"><?php echo $form_group['group']['1']; ?></span>
            </div>
            <?php endif; if(!(empty($form_group['group']) || (($form_group['group'] instanceof \think\Collection || $form_group['group'] instanceof \think\Paginator ) && $form_group['group']->isEmpty()))): ?>
        </div>
        <?php endif; ?>
    </div>
    <?php if(!(empty($form_group['tips']) || (($form_group['tips'] instanceof \think\Collection || $form_group['tips'] instanceof \think\Paginator ) && $form_group['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form_group['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
            <?php break; case "textarea": ?>
                
                <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form_group['required']) || (($form_group['required'] instanceof \think\Collection || $form_group['required'] instanceof \think\Paginator ) && $form_group['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form_group['name']); ?>"><?php echo htmlentities(htmlspecialchars($form_group['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <textarea class="form-control" id="<?php echo htmlentities($form_group['name']); ?>" name="<?php echo htmlentities($form_group['name']); ?>" rows="<?php echo htmlentities((isset($form_group['rows']) && ($form_group['rows'] !== '')?$form_group['rows']:'3')); ?>" placeholder="<?php echo htmlentities($form_group['placeholder']); ?>" <?php echo $form_group['extra_attr']; ?>><?php echo htmlentities($form_group['value']); ?></textarea>
    </div>
    <?php if(!(empty($form_group['tips']) || (($form_group['tips'] instanceof \think\Collection || $form_group['tips'] instanceof \think\Paginator ) && $form_group['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form_group['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
            <?php break; case "radio": ?>
                
                <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form_group['required']) || (($form_group['required'] instanceof \think\Collection || $form_group['required'] instanceof \think\Paginator ) && $form_group['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form_group['name']); ?>"><?php echo htmlentities(htmlspecialchars($form_group['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4 dd_radio_lable_left border-white">
        <?php if(is_array($form_group['options']) || $form_group['options'] instanceof \think\Collection || $form_group['options'] instanceof \think\Paginator): $i = 0; $__LIST__ = $form_group['options'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;?>
        <div class="icheck-peterriver icheck-inline">
            <input type="radio" name="<?php echo htmlentities($form_group['name']); ?>" class="dd_radio" id="<?php echo htmlentities($form_group['name']); ?><?php echo htmlentities($i); ?>" value="<?php echo htmlentities($key); ?>" <?php if($key == (isset($form_group['value']) && ($form_group['value'] !== '')?$form_group['value']:'')): ?>checked<?php endif; ?> <?php echo (isset($form_group['extra_attr']) && ($form_group['extra_attr'] !== '')?$form_group['extra_attr']:''); ?>>
            <label for="<?php echo htmlentities($form_group['name']); ?><?php echo htmlentities($i); ?>"><?php echo htmlspecialchars($option); ?></label>
        </div>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
    <?php if(!(empty($form_group['tips']) || (($form_group['tips'] instanceof \think\Collection || $form_group['tips'] instanceof \think\Paginator ) && $form_group['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form_group['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
            <?php break; case "checkbox": ?>
                
                <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form_group['required']) || (($form_group['required'] instanceof \think\Collection || $form_group['required'] instanceof \think\Paginator ) && $form_group['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form_group['name']); ?>"><?php echo htmlentities(htmlspecialchars($form_group['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <div class="dd_radio_lable_left border-white">
            <input type="hidden" name="<?php echo htmlentities($form_group['name']); ?>[]" value="">
            <?php if(is_array($form_group['options']) || $form_group['options'] instanceof \think\Collection || $form_group['options'] instanceof \think\Paginator): $i = 0; $__LIST__ = $form_group['options'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;?>
            <div class="icheck-peterriver icheck-inline">
                <input type="checkbox" name="<?php echo htmlentities($form_group['name']); ?>[]" class="dd_radio" id="<?php echo htmlentities($form_group['name']); ?><?php echo htmlentities($i); ?>" value="<?php echo htmlentities($key); ?>" <?php if(in_array(($key), is_array((isset($form_group['value']) && ($form_group['value'] !== '')?$form_group['value']:''))?(isset($form_group['value']) && ($form_group['value'] !== '')?$form_group['value']:''):explode(',',(isset($form_group['value']) && ($form_group['value'] !== '')?$form_group['value']:'')))): ?>checked<?php endif; ?> <?php echo (isset($form_group['extra_attr']) && ($form_group['extra_attr'] !== '')?$form_group['extra_attr']:''); ?>>
                <label for="<?php echo htmlentities($form_group['name']); ?><?php echo htmlentities($i); ?>"><?php echo htmlspecialchars($option); ?></label>
            </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </div>
    <?php if(!(empty($form_group['tips']) || (($form_group['tips'] instanceof \think\Collection || $form_group['tips'] instanceof \think\Paginator ) && $form_group['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form_group['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
            <?php break; case "date": ?>
                
                <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form_group['required']) || (($form_group['required'] instanceof \think\Collection || $form_group['required'] instanceof \think\Paginator ) && $form_group['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form_group['name']); ?>"><?php echo htmlentities(htmlspecialchars($form_group['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <div class="input-group date" id="reservationdate_<?php echo htmlentities($form_group['name']); ?>"
             data-date-format="<?php echo htmlentities(convert_php_to_moment_format($form_group['format'])); ?>" data-target-input="nearest">
            <input class="form-control" type="text" id="<?php echo htmlentities($form_group['name']); ?>" name="<?php echo htmlentities($form_group['name']); ?>"
                   value="<?php echo htmlentities((isset($form_group['value']) && ($form_group['value'] !== '')?$form_group['value']:'')); ?>" placeholder="<?php echo htmlentities($form_group['placeholder']); ?>"
                   autocomplete="off" <?php echo $form_group['extra_attr']; ?>>
            <div class="input-group-append" data-target="#reservationdate_<?php echo htmlentities($form_group['name']); ?>"
                 data-toggle="datetimepicker">
                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
            </div>
        </div>
    </div>
    <?php if(!(empty($form_group['tips']) || (($form_group['tips'] instanceof \think\Collection || $form_group['tips'] instanceof \think\Paginator ) && $form_group['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form_group['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
<script>
    $(function () {
        $('#reservationdate_<?php echo htmlentities($form_group['name']); ?>').datetimepicker();
    })
</script>
            <?php break; case "time": ?>
                
                <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form_group['required']) || (($form_group['required'] instanceof \think\Collection || $form_group['required'] instanceof \think\Paginator ) && $form_group['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form_group['name']); ?>"><?php echo htmlentities(htmlspecialchars($form_group['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <div class="input-group date" id="timepicker_<?php echo htmlentities($form_group['name']); ?>"
             data-date-format="<?php echo htmlentities(convert_php_to_moment_format($form_group['format'])); ?>" data-target-input="nearest">
            <input class="form-control datetimepicker-input" type="text" id="<?php echo htmlentities($form_group['name']); ?>"
                   name="<?php echo htmlentities($form_group['name']); ?>" value="<?php echo htmlentities((isset($form_group['value']) && ($form_group['value'] !== '')?$form_group['value']:'')); ?>"
                   placeholder="<?php echo htmlentities($form_group['placeholder']); ?>" autocomplete="off" data-target="#timepicker_<?php echo htmlentities($form_group['name']); ?>" <?php echo $form_group['extra_attr']; ?>>
            <div class="input-group-append" data-target="#timepicker_<?php echo htmlentities($form_group['name']); ?>" data-toggle="datetimepicker">
                <div class="input-group-text"><i class="far fa-clock"></i></div>
            </div>
        </div>
    </div>
    <?php if(!(empty($form_group['tips']) || (($form_group['tips'] instanceof \think\Collection || $form_group['tips'] instanceof \think\Paginator ) && $form_group['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form_group['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
<script>
    $(function () {
        $('#timepicker_<?php echo htmlentities($form_group['name']); ?>').datetimepicker()
    })
</script>
            <?php break; case "datetime": ?>
                
                <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form_group['required']) || (($form_group['required'] instanceof \think\Collection || $form_group['required'] instanceof \think\Paginator ) && $form_group['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form_group['name']); ?>"><?php echo htmlentities(htmlspecialchars($form_group['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <div class="input-group date" id="reservationdate_<?php echo htmlentities($form_group['name']); ?>"
             data-date-format="<?php echo htmlentities(convert_php_to_moment_format($form_group['format'])); ?>" data-target-input="nearest">
            <input class="form-control datetimepicker-input" type="text" id="<?php echo htmlentities($form_group['name']); ?>" name="<?php echo htmlentities($form_group['name']); ?>"
                   value="<?php echo htmlentities((isset($form_group['value']) && ($form_group['value'] !== '')?$form_group['value']:'')); ?>" placeholder="<?php echo htmlentities($form_group['placeholder']); ?>"
                   autocomplete="off" data-target="#reservationdate_<?php echo htmlentities($form_group['name']); ?>" <?php echo $form_group['extra_attr']; ?>>
            <div class="input-group-append" data-target="#reservationdate_<?php echo htmlentities($form_group['name']); ?>"
                 data-toggle="datetimepicker">
                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
            </div>
        </div>
    </div>
    <?php if(!(empty($form_group['tips']) || (($form_group['tips'] instanceof \think\Collection || $form_group['tips'] instanceof \think\Paginator ) && $form_group['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form_group['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>

<script>
    $(function () {
        $('#reservationdate_<?php echo htmlentities($form_group['name']); ?>').datetimepicker({icons: {time: 'far fa-clock'}});
    })
</script>
            <?php break; case "daterange": ?>
                
                <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form_group['required']) || (($form_group['required'] instanceof \think\Collection || $form_group['required'] instanceof \think\Paginator ) && $form_group['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form_group['name']); ?>"><?php echo htmlentities(htmlspecialchars($form_group['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <div class="input-group">
            <input class="form-control" type="text" id="<?php echo htmlentities($form_group['name']); ?>" name="<?php echo htmlentities($form_group['name']); ?>"
                   value="<?php echo htmlentities((isset($form_group['value']) && ($form_group['value'] !== '')?$form_group['value']:'')); ?>" placeholder="<?php echo htmlentities($form_group['placeholder']); ?>"
                   autocomplete="off" <?php echo $form_group['extra_attr']; ?>>
            <div class="input-group-append">
                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
            </div>
        </div>
    </div>
    <?php if(!(empty($form_group['tips']) || (($form_group['tips'] instanceof \think\Collection || $form_group['tips'] instanceof \think\Paginator ) && $form_group['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form_group['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>

<script>
    $(function () {
        $('#<?php echo htmlentities($form_group['name']); ?>').daterangepicker({
            showDropdowns: true,     // 年月份下拉框
            timePicker: true,        // 显示时间
            timePicker24Hour: true,  // 时间制
            timePickerSeconds: true, // 时间显示到秒
            ranges: {
                '今天': [moment(), moment()],
                '昨天': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                '上周': [moment().subtract(6, 'days'), moment()],
                '前30天': [moment().subtract(29, 'days'), moment()],
                '本月': [moment().startOf('month'), moment().endOf('month')],
                '上月': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            },
            //timePicker: true,
            //timePickerIncrement: 30,
            locale: {
                format: '<?php echo htmlentities(convert_php_to_moment_format($form_group['format'])); ?>',
                applyLabel: '确定',       // 确定按钮文本
                cancelLabel: '取消',      // 取消按钮文本
                customRangeLabel: '自定义',
            }
        });
    })
</script>


            <?php break; case "tags": ?>
                
                <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form_group['required']) || (($form_group['required'] instanceof \think\Collection || $form_group['required'] instanceof \think\Paginator ) && $form_group['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form_group['name']); ?>"><?php echo htmlentities(htmlspecialchars($form_group['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <input class="form-control tags" type="text" id="<?php echo htmlentities($form_group['name']); ?>" name="<?php echo htmlentities($form_group['name']); ?>" value="<?php echo htmlentities($form_group['value']); ?>" placeholder="输入后请回车确认" <?php echo $form_group['extra_attr']; ?>>
    </div>
    <?php if(!(empty($form_group['tips']) || (($form_group['tips'] instanceof \think\Collection || $form_group['tips'] instanceof \think\Paginator ) && $form_group['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form_group['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
            <?php break; case "number": ?>
                
                <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form_group['required']) || (($form_group['required'] instanceof \think\Collection || $form_group['required'] instanceof \think\Paginator ) && $form_group['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form_group['name']); ?>"><?php echo htmlentities(htmlspecialchars($form_group['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <input class="form-control" type="number" id="<?php echo htmlentities($form_group['name']); ?>" name="<?php echo htmlentities($form_group['name']); ?>" value="<?php echo htmlentities($form_group['value']); ?>" <?php if(isset($form_group['min']) && $form_group['min'] !== ''): ?>min="<?php echo htmlentities($form_group['min']); ?>"<?php endif; if(isset($form_group['max']) && $form_group['max'] !== ''): ?>max="<?php echo htmlentities($form_group['max']); ?>"<?php endif; if(isset($form_group['step']) && $form_group['step'] !== ''): ?>step="<?php echo htmlentities($form_group['step']); ?>"<?php endif; ?> <?php echo $form_group['extra_attr']; ?>>
    </div>
    <?php if(!(empty($form_group['tips']) || (($form_group['tips'] instanceof \think\Collection || $form_group['tips'] instanceof \think\Paginator ) && $form_group['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form_group['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>


            <?php break; case "password": ?>
                
                <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form_group['required']) || (($form_group['required'] instanceof \think\Collection || $form_group['required'] instanceof \think\Paginator ) && $form_group['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form_group['name']); ?>"><?php echo htmlentities(htmlspecialchars($form_group['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <input class="form-control" type="password" id="<?php echo htmlentities($form_group['name']); ?>" name="<?php echo htmlentities($form_group['name']); ?>" value="" placeholder="<?php echo htmlentities($form_group['placeholder']); ?>" <?php echo $form_group['extra_attr']; ?>>
    </div>
    <?php if(!(empty($form_group['tips']) || (($form_group['tips'] instanceof \think\Collection || $form_group['tips'] instanceof \think\Paginator ) && $form_group['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form_group['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
            <?php break; case "select": ?>
                
                <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form_group['required']) || (($form_group['required'] instanceof \think\Collection || $form_group['required'] instanceof \think\Paginator ) && $form_group['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form_group['name']); ?>"><?php echo htmlentities(htmlspecialchars($form_group['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <select class="form-control" id="<?php echo htmlentities($form_group['name']); ?>" name="<?php echo htmlentities($form_group['name']); ?>" <?php echo htmlentities((isset($form_group['extra_attr']) && ($form_group['extra_attr'] !== '')?$form_group['extra_attr']:'')); ?>>
            <option value=""><?php echo htmlentities($form_group['placeholder']); ?></option>
            <?php if(is_array($form_group['options']) || $form_group['options'] instanceof \think\Collection || $form_group['options'] instanceof \think\Paginator): $i = 0; $__LIST__ = $form_group['options'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;if(is_array($option)): ?>
            <option value="<?php echo htmlentities($key); ?>" <?php if(((string)$form_group['value'] == (string)$key)): ?>selected<?php endif; if($option['disabled'] == 1): ?>disabled<?php endif; ?>><?php echo htmlentities($option['value']); ?></option>
            <?php else: ?>
            <option value="<?php echo htmlentities($key); ?>" <?php if(((string)$form_group['value'] == (string)$key)): ?>selected<?php endif; ?>><?php echo htmlentities($option); ?></option>
            <?php endif; ?>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </select>
    </div>
    <?php if(!(empty($form_group['tips']) || (($form_group['tips'] instanceof \think\Collection || $form_group['tips'] instanceof \think\Paginator ) && $form_group['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form_group['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
            <?php break; case "select2": ?>
                
                <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form_group['required']) || (($form_group['required'] instanceof \think\Collection || $form_group['required'] instanceof \think\Paginator ) && $form_group['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form_group['name']); ?>"><?php echo htmlentities(htmlspecialchars($form_group['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <select class="select2 form-control" id="<?php echo htmlentities($form_group['name']); ?>" name="<?php echo htmlentities($form_group['name']); ?>" data-value="<?php echo htmlentities($form_group['value']); ?>" <?php echo htmlentities((isset($form_group['extra_attr']) && ($form_group['extra_attr'] !== '')?$form_group['extra_attr']:'')); ?>>
            <option value=""><?php echo htmlentities($form_group['placeholder']); ?></option>
            <?php if(is_array($form_group['options']) || $form_group['options'] instanceof \think\Collection || $form_group['options'] instanceof \think\Paginator): $i = 0; $__LIST__ = $form_group['options'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;?>
            <option value="<?php echo htmlentities($key); ?>" <?php if(in_array(($key), is_array($form_group['value'])?$form_group['value']:explode(',',$form_group['value']))): ?>selected<?php endif; ?>><?php echo htmlentities($option); ?></option>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </select>
    </div>
    <?php if(!(empty($form_group['tips']) || (($form_group['tips'] instanceof \think\Collection || $form_group['tips'] instanceof \think\Paginator ) && $form_group['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form_group['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
<script>
    $(function () {
        var option = {};
        <?php if(!$form_group['options']): ?>
        if('<?php echo htmlentities($form_group['ajax_url']); ?>' !== ''){
            // 启用ajax分页查询
            option = {
                language: "zh-CN",
                //allowClear: true,
                ajax: {
                    delay: 250, // 限速请求
                    url: "<?php echo htmlentities($form_group['ajax_url']); ?>",   //  请求地址
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
                            data.data.unshift({id: '', name: "", text: "<?php echo htmlentities($form_group['placeholder']); ?>"});
                        }
                        return {
                            results: data.data,
                            pagination: {
                                //more: (params.page) < data.paginator.totalPages
                                more: (params.page) < data.last_page
                            }
                        };
                    },
                    cache: true
                }
            };
            // 默认值设置
            var defaultValue = $('#<?php echo htmlentities($form_group['name']); ?>').data("value");
            if (defaultValue) {
                $.ajax({
                    type: "POST",
                    url: "<?php echo htmlentities($form_group['ajax_url']); ?>",
                    data: {value:defaultValue},
                    dataType: "json",
                    success: function(data){
                        $('#<?php echo htmlentities($form_group['name']); ?>').append("<option selected value='" + data.key + "'>" + data.value + "</option>");
                    }
                });
            }
        }
        <?php endif; ?>
        $('#<?php echo htmlentities($form_group['name']); ?>').select2(option);
    })
</script>

            <?php break; case "linkage": 
    // 获取一级联动数据
    $levelOne  = getLinkageData($form_group['model'], 0, $form_group['pid']);
    $levelKey  = [];
    $levelData = [];

    // 默认值
    if ($form_group['value'] != '') {
        $levelKeyData = getLinkageAllData($form_group['model'], $form_group['value'], $form_group['key'], $form_group['option'], $form_group['pid']);
        $levelKey = $levelKeyData['key'];
        $levelData = $levelKeyData['data'];
        sort($levelKey); // 升序排序
        $levelData = array_reverse($levelData); // 以相反的元素顺序返回数组
    }
 ?>
<div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form_group['required']) || (($form_group['required'] instanceof \think\Collection || $form_group['required'] instanceof \think\Paginator ) && $form_group['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form_group['name']); ?>"><?php echo htmlentities(htmlspecialchars($form_group['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-8 col-xl-7">
        <select class="form-control js_linkage" data-model="<?php echo htmlentities($form_group['model']); ?>" data-key="<?php echo htmlentities($form_group['key']); ?>" data-key_value="<?php echo htmlentities($form_group['option']); ?>" data-pid_field_name="<?php echo htmlentities((isset($form_group['pid']) && ($form_group['pid'] !== '')?$form_group['pid']:'pid')); ?>" data-next_level_id="<?php echo htmlentities($form_group['name']); ?>_2" id="<?php echo htmlentities($form_group['name']); ?>_1" name="<?php echo htmlentities($form_group['name']); if($form_group['level'] > '1'): ?>_1<?php endif; ?>" data-placeholder="<?php echo htmlentities($form_group['placeholder']); ?>" <?php echo htmlentities((isset($form_group['extra_attr']) && ($form_group['extra_attr'] !== '')?$form_group['extra_attr']:'')); ?> data-ajax_url="<?php echo htmlentities($form_group['ajax_url']); ?>" style="width: auto; display: inline-block">
            <option value=""><?php echo htmlentities($form_group['placeholder']); ?></option>
            <?php if(is_array($levelOne) || $levelOne instanceof \think\Collection || $levelOne instanceof \think\Paginator): $i = 0; $__LIST__ = $levelOne;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;if($form_group['level'] == '1'): ?>
                <option value="<?php echo htmlentities($option[$form_group['key']]); ?>" <?php if(($form_group['value'] == (string)$option[$form_group['key']])): ?>selected<?php endif; ?>><?php echo $option[$form_group['option']]; ?></option>
            <?php else: ?>
                <option value="<?php echo htmlentities($option[$form_group['key']]); ?>" <?php if((isset($levelKey[1]) && $levelKey[1] == (string)$option[$form_group['key']])): ?>selected<?php endif; ?>><?php echo $option[$form_group['option']]; ?></option>
            <?php endif; ?>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </select>
        <?php if($form_group['level'] == '2'): ?>
        <select class="form-control" id="<?php echo htmlentities($form_group['name']); ?>_2" name="<?php echo htmlentities($form_group['name']); ?>" data-placeholder="<?php echo htmlentities($form_group['placeholder']); ?>" <?php echo htmlentities((isset($form_group['extra_attr']) && ($form_group['extra_attr'] !== '')?$form_group['extra_attr']:'')); ?> style="width: auto; display: inline-block">
            <option value=""><?php echo htmlentities($form_group['placeholder']); ?></option>
            <?php if(!(empty($levelData['1']) || (($levelData['1'] instanceof \think\Collection || $levelData['1'] instanceof \think\Paginator ) && $levelData['1']->isEmpty()))): if(is_array($levelData['1']) || $levelData['1'] instanceof \think\Collection || $levelData['1'] instanceof \think\Paginator): $i = 0; $__LIST__ = $levelData['1'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;?>
            <option value="<?php echo htmlentities($option[$form_group['key']]); ?>" <?php if(($form_group['value'] == (string)$option[$form_group['key']])): ?>selected<?php endif; ?>><?php echo $option[$form_group['option']]; ?></option>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            <?php endif; ?>
        </select>
        <?php endif; if($form_group['level'] == '3'): ?>
        <select class="form-control js_linkage" data-model="<?php echo htmlentities($form_group['model']); ?>" data-key="<?php echo htmlentities($form_group['key']); ?>" data-key_value="<?php echo htmlentities($form_group['option']); ?>" data-pid_field_name="<?php echo htmlentities((isset($form_group['pid']) && ($form_group['pid'] !== '')?$form_group['pid']:'pid')); ?>" data-next_level_id="<?php echo htmlentities($form_group['name']); ?>_3" id="<?php echo htmlentities($form_group['name']); ?>_2" name="<?php echo htmlentities($form_group['name']); ?>_2" data-placeholder="<?php echo htmlentities($form_group['placeholder']); ?>" <?php echo htmlentities((isset($form_group['extra_attr']) && ($form_group['extra_attr'] !== '')?$form_group['extra_attr']:'')); ?> data-ajax_url="<?php echo htmlentities($form_group['ajax_url']); ?>" style="width: auto; display: inline-block">
            <option value=""><?php echo htmlentities($form_group['placeholder']); ?></option>
            <?php if(!(empty($levelData['1']) || (($levelData['1'] instanceof \think\Collection || $levelData['1'] instanceof \think\Paginator ) && $levelData['1']->isEmpty()))): if(is_array($levelData['1']) || $levelData['1'] instanceof \think\Collection || $levelData['1'] instanceof \think\Paginator): $i = 0; $__LIST__ = $levelData['1'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;?>
            <option value="<?php echo htmlentities($option[$form_group['key']]); ?>" <?php if((isset($levelKey[2]) && $levelKey[2] == (string)$option[$form_group['key']])): ?>selected<?php endif; ?>><?php echo $option[$form_group['option']]; ?></option>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            <?php endif; ?>
        </select>
        <select class="form-control" id="<?php echo htmlentities($form_group['name']); ?>_3" name="<?php echo htmlentities($form_group['name']); ?>" data-placeholder="<?php echo htmlentities($form_group['placeholder']); ?>" <?php echo htmlentities((isset($form_group['extra_attr']) && ($form_group['extra_attr'] !== '')?$form_group['extra_attr']:'')); ?> style="width: auto; display: inline-block">
            <option value=""><?php echo htmlentities($form_group['placeholder']); ?></option>
            <?php if(!(empty($levelData['2']) || (($levelData['2'] instanceof \think\Collection || $levelData['2'] instanceof \think\Paginator ) && $levelData['2']->isEmpty()))): if(is_array($levelData['2']) || $levelData['2'] instanceof \think\Collection || $levelData['2'] instanceof \think\Paginator): $i = 0; $__LIST__ = $levelData['2'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;?>
            <option value="<?php echo htmlentities($option[$form_group['key']]); ?>" <?php if(($form_group['value'] == (string)$option[$form_group['key']])): ?>selected<?php endif; ?>><?php echo $option[$form_group['option']]; ?></option>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            <?php endif; ?>
        </select>
        <?php endif; ?>
    </div>
    <?php if(!(empty($form_group['tips']) || (($form_group['tips'] instanceof \think\Collection || $form_group['tips'] instanceof \think\Paginator ) && $form_group['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-2 col-xl-4 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form_group['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
            <?php break; case "image": ?>
                
                <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form_group['required']) || (($form_group['required'] instanceof \think\Collection || $form_group['required'] instanceof \think\Paginator ) && $form_group['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form_group['name']); ?>"><?php echo htmlentities(htmlspecialchars($form_group['title'])); ?></label>
    <div class="col-9 col-sm-6 col-md-6 col-lg-6 col-xl-4">
        <input class="form-control" type="text" id="<?php echo htmlentities($form_group['name']); ?>" name="<?php echo htmlentities($form_group['name']); ?>" value="<?php echo htmlentities($form_group['value']); ?>" placeholder="<?php echo htmlentities($form_group['placeholder']); ?>" <?php echo $form_group['extra_attr']; ?>>
    </div>
    <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-7 dd_ts dd_ts_img">
        <!--上传图片-->
        <!--用来存放item-->
        <div id="fileList_<?php echo htmlentities($form_group['name']); ?>" class="uploader-list"></div>
        <div id="filePicker_<?php echo htmlentities($form_group['name']); ?>"><i class="fa fa-upload m-r-10"></i>选择图片</div>
        <a href="<?php echo !empty($form_group['value']) ? htmlentities($form_group['value']) : '/static/admin/images/nopic.png'; ?>" target="_blank">
            <img class="image_preview_info"
                 src="<?php echo !empty($form_group['value']) ? htmlentities($form_group['value']) : '/static/admin/images/nopic.png'; ?>"
                 id="<?php echo htmlentities($form_group['name']); ?>_preview">
        </a>
        <!--上传图片-->
        <?php if(!(empty($form_group['tips']) || (($form_group['tips'] instanceof \think\Collection || $form_group['tips'] instanceof \think\Paginator ) && $form_group['tips']->isEmpty()))): ?>
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form_group['tips']; ?>
        </small>
        <?php endif; ?>
    </div>
</div>
<script type="text/javascript">
    webupload('fileList_<?php echo htmlentities($form_group['name']); ?>', 'filePicker_<?php echo htmlentities($form_group['name']); ?>', '<?php echo htmlentities($form_group['name']); ?>_preview', '<?php echo htmlentities($form_group['name']); ?>', false, '<?php echo htmlentities((isset($system['upload_image_ext']) && ($system['upload_image_ext'] !== '')?$system['upload_image_ext']:"")); ?>', '<?php echo htmlentities((isset($system['upload_image_size']) && ($system['upload_image_size'] !== '')?$system['upload_image_size']:"0")); ?>');
</script>


            <?php break; case "images": ?>
                
                <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
<!-- ZTX-004  by 折腾侠-->
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form_group['required']) || (($form_group['required'] instanceof \think\Collection || $form_group['required'] instanceof \think\Paginator ) && $form_group['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form_group['name']); ?>"><?php echo htmlentities(htmlspecialchars($form_group['title'])); ?></label>
	
	<div class="col-12 col-sm-7 col-md-7 col-lg-7 col-xl-4" >
	<!-- ZTX-004  by 折腾侠-->
        <div class="more_images dd_ts">
            <div id="more_images_<?php echo htmlentities($form_group['name']); ?>">
                <div class="hide">
                    <input type="text" name="<?php echo htmlentities($form_group['name']); ?>[]" value="">
                    <input type="text" name="<?php echo htmlentities($form_group['name']); ?>_title[]" value="">
                    <!-- ZTX-增加缩略图显示 -->
                    <input type="text" name="<?php echo htmlentities($form_group['name']); ?>_small[]" value="">
                    <!-- ZTX-增加缩略图显示 -->
                </div>
                <?php if(!(empty($form_group['value']) || (($form_group['value'] instanceof \think\Collection || $form_group['value'] instanceof \think\Paginator ) && $form_group['value']->isEmpty()))): if(is_array($form_group['value']) || $form_group['value'] instanceof \think\Collection || $form_group['value'] instanceof \think\Paginator): $i = 0; $__LIST__ = $form_group['value'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
				<!-- ZTX-004  by 折腾侠-->
                <div class="row no-gutters">
                    <div class="col-4 col-sm-4">
                        <input type="text" name="<?php echo htmlentities($form_group['name']); ?>[]" value="<?php echo htmlentities($vo['image']); ?>" class="form-control">
                        <!-- ZTX-增加缩略图显示 -->
                        <input type="text" name="<?php echo htmlentities($form_group['name']); ?>_small[]" value="<?php echo isset($vo['small']) ? htmlentities($vo['small']) : ''; ?>" class="hide">
                        <!-- ZTX-增加缩略图显示 -->
                    </div>
                    <div class="col-3 col-sm-3">
                        <input type="text" name="<?php echo htmlentities($form_group['name']); ?>_title[]" value="<?php echo htmlentities($vo['title']); ?>" class="form-control input-sm">
                    </div>
                    <div class="col-4 col-sm-3">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default btn-sm move_up_images">
                                <i class="fa fa-chevron-up"></i>
                            </button>
                            <button type="button" class="btn btn-default btn-sm move_down_images">
                                <i class="fa fa-chevron-down"></i>
                            </button>
                            <button type="button" class="btn btn-default btn-sm remove_images">
                                <i class="fa fa-times"></i>
                            </button>
							
                        </div>
                    </div>
					
					 <div class="col-4 col-sm-2"><a href="<?php echo htmlentities($vo['image']); ?>" target="_blank"> <img class="image_preview_info" src="<?php echo !empty($vo['small']) ? htmlentities($vo['small']) : htmlentities($vo['image']); ?>"  ></a></div>
                </div>
				<!-- ZTX-004  by 折腾侠-->
                <?php endforeach; endif; else: echo "" ;endif; ?>
                <?php endif; ?>
            </div>
			
			
        </div>
		<!-- ZTX-005  by 折腾侠-->
		<div class="row no-gutters">
		 <div class="col-4 col-sm-12">
			<input class="form-control" type="text" id="img" name="site_img_choose" value="" placeholder="从站内选择图片，输入搜索关键词" >
		</div>
		
		
		</div>
		
		
		<!-- ZTX-005  by 折腾侠-->
    </div>
	<!-- ZTX-004  by 折腾侠-->
    <div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-7 dd_ts dd_ts_img">
	<!-- ZTX-004  by 折腾侠-->
        <!--上传图片-->
        <!--用来存放item-->
        <div id="fileList_<?php echo htmlentities($form_group['name']); ?>" class="uploader-list"></div>
        <div id="filePicker_<?php echo htmlentities($form_group['name']); ?>"><i class="fa fa-upload m-r-10"></i>上传图片</div>
		
	
		
		
        <!--上传图片-->
        <?php if(!(empty($form_group['tips']) || (($form_group['tips'] instanceof \think\Collection || $form_group['tips'] instanceof \think\Paginator ) && $form_group['tips']->isEmpty()))): ?>
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form_group['tips']; ?>
        </small>
        <?php endif; ?>
    </div>
</div>
<script type="text/javascript">
    webupload('fileList_<?php echo htmlentities($form_group['name']); ?>', 'filePicker_<?php echo htmlentities($form_group['name']); ?>', '<?php echo htmlentities($form_group['name']); ?>_preview', '<?php echo htmlentities($form_group['name']); ?>', true, '<?php echo htmlentities((isset($system['upload_image_ext']) && ($system['upload_image_ext'] !== '')?$system['upload_image_ext']:"")); ?>', '<?php echo htmlentities((isset($system['upload_image_size']) && ($system['upload_image_size'] !== '')?$system['upload_image_size']:"0")); ?>');
</script>
            <?php break; case "file": ?>
                
                <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form_group['required']) || (($form_group['required'] instanceof \think\Collection || $form_group['required'] instanceof \think\Paginator ) && $form_group['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form_group['name']); ?>"><?php echo htmlentities(htmlspecialchars($form_group['title'])); ?></label>
    <div class="col-9 col-sm-6 col-md-6 col-lg-6 col-xl-4">
        <input class="form-control" type="text" id="<?php echo htmlentities($form_group['name']); ?>" name="<?php echo htmlentities($form_group['name']); ?>" value="<?php echo htmlentities($form_group['value']); ?>" placeholder="<?php echo htmlentities($form_group['placeholder']); ?>" <?php echo $form_group['extra_attr']; ?>>
    </div>
    <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-7 dd_ts dd_ts_img">
        <!--上传图片-->
        <!--用来存放item-->
        <div id="fileList_<?php echo htmlentities($form_group['name']); ?>" class="uploader-list"></div>
        <div id="filePicker_<?php echo htmlentities($form_group['name']); ?>"><i class="fa fa-upload m-r-10"></i>选择文件</div>
        <!--上传图片-->
        <?php if(!(empty($form_group['tips']) || (($form_group['tips'] instanceof \think\Collection || $form_group['tips'] instanceof \think\Paginator ) && $form_group['tips']->isEmpty()))): ?>
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form_group['tips']; ?>
        </small>
        <?php endif; ?>
    </div>
</div>
<script type="text/javascript">
    webupload('fileList_<?php echo htmlentities($form_group['name']); ?>', 'filePicker_<?php echo htmlentities($form_group['name']); ?>', '<?php echo htmlentities($form_group['name']); ?>_preview', '<?php echo htmlentities($form_group['name']); ?>', false, '<?php echo htmlentities((isset($system['upload_file_ext']) && ($system['upload_file_ext'] !== '')?$system['upload_file_ext']:"")); ?>', '<?php echo htmlentities((isset($system['upload_file_size']) && ($system['upload_file_size'] !== '')?$system['upload_file_size']:"0")); ?>', 'file');
</script>


            <?php break; case "files": ?>
                
                <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form_group['required']) || (($form_group['required'] instanceof \think\Collection || $form_group['required'] instanceof \think\Paginator ) && $form_group['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form_group['name']); ?>"><?php echo htmlentities(htmlspecialchars($form_group['title'])); ?></label>
    <div class="col-9 col-sm-7 col-md-7 col-lg-7 col-xl-4">
        <div class="more_images dd_ts">
            <div id="more_images_<?php echo htmlentities($form_group['name']); ?>">
                <div class="hide">
                    <input type="text" name="<?php echo htmlentities($form_group['name']); ?>[]" value="">
                    <input type="text" name="<?php echo htmlentities($form_group['name']); ?>_title[]" value="">
                </div>
                <?php if(!(empty($form_group['value']) || (($form_group['value'] instanceof \think\Collection || $form_group['value'] instanceof \think\Paginator ) && $form_group['value']->isEmpty()))): if(is_array($form_group['value']) || $form_group['value'] instanceof \think\Collection || $form_group['value'] instanceof \think\Paginator): $i = 0; $__LIST__ = $form_group['value'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <!-- ZTX-002  by 折腾侠删除原有代码，改为跟图片显示容器一样的代码-->
                <div class="row no-gutters">
                    <div class="col-4 col-sm-6">
                        <input type="text" name="<?php echo htmlentities($form_group['name']); ?>[]" value="<?php echo htmlentities($vo['image']); ?>" class="form-control">
                    </div>
                    <div class="col-3 col-sm-3">
                        <input type="text" name="<?php echo htmlentities($form_group['name']); ?>_title[]" value="<?php echo htmlentities($vo['title']); ?>" class="form-control input-sm">
                    </div>
                    <div class="col-4 col-sm-3">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default btn-sm move_up_images">
                                <i class="fa fa-chevron-up"></i>
                            </button>
                            <button type="button" class="btn btn-default btn-sm move_down_images">
                                <i class="fa fa-chevron-down"></i>
                            </button>
                            <button type="button" class="btn btn-default btn-sm remove_images">
                                <i class="fa fa-times"></i>
                            </button>
							
                        </div>
                    </div>
					 </div>
					
				<!-- ZTX-002  by 折腾侠 删除原有代码，改为跟图片显示容器一样的代码-->
                <?php endforeach; endif; else: echo "" ;endif; ?>
                <?php endif; ?>
            </div>
        </div>
		<!-- ZTX-005  by 折腾侠-->
		<div class="row no-gutters">
		 <div class="col-4 col-sm-12">
			<input class="form-control" type="text" id="file" name="site_file_choose" value="" placeholder="从站内选择文件，输入搜索关键词" >
		</div>
		
		
		</div>
		
		
		<!-- ZTX-005  by 折腾侠-->
    </div>
    <div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-7 dd_ts dd_ts_img">
        <!--上传图片-->
        <!--用来存放item-->
        <div id="fileList_<?php echo htmlentities($form_group['name']); ?>" class="uploader-list"></div>
        <div id="filePicker_<?php echo htmlentities($form_group['name']); ?>"><i class="fa fa-upload m-r-10"></i>选择文件</div>
        <!--上传图片-->
        <?php if(!(empty($form_group['tips']) || (($form_group['tips'] instanceof \think\Collection || $form_group['tips'] instanceof \think\Paginator ) && $form_group['tips']->isEmpty()))): ?>
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form_group['tips']; ?>
        </small>
        <?php endif; ?>
    </div>
</div>
<script type="text/javascript">
    webupload('fileList_<?php echo htmlentities($form_group['name']); ?>', 'filePicker_<?php echo htmlentities($form_group['name']); ?>', '<?php echo htmlentities($form_group['name']); ?>_preview', '<?php echo htmlentities($form_group['name']); ?>', true, '<?php echo htmlentities((isset($system['upload_file_ext']) && ($system['upload_file_ext'] !== '')?$system['upload_file_ext']:"")); ?>', '<?php echo htmlentities((isset($system['upload_file_size']) && ($system['upload_file_size'] !== '')?$system['upload_file_size']:"0")); ?>', 'file');
</script>
            <?php break; case "editor": ?>
                
                <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form_group['required']) || (($form_group['required'] instanceof \think\Collection || $form_group['required'] instanceof \think\Paginator ) && $form_group['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form_group['name']); ?>"><?php echo htmlentities(htmlspecialchars($form_group['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-8 col-xl-7">
        <textarea id="<?php echo htmlentities($form_group['name']); ?>" name="<?php echo htmlentities($form_group['name']); ?>" <?php echo $form_group['extra_attr']; ?> style="width:100%;height: <?php echo htmlentities($form_group['height']); ?>px"><?php echo htmlentities($form_group['value']); ?></textarea>
    </div>
    <?php if(!(empty($form_group['tips']) || (($form_group['tips'] instanceof \think\Collection || $form_group['tips'] instanceof \think\Paginator ) && $form_group['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-2 col-xl-4 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form_group['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
<script>
    <?php if($system['editor'] == '1'): ?>
    UE.delEditor('<?php echo htmlentities($form_group['name']); ?>');
    UE.getEditor('<?php echo htmlentities($form_group['name']); ?>', {
        serverUrl: "<?php echo url('Upload/index',['from'=>'ueditor']); ?>",
    });
    <?php else: ?>
    CKEDITOR.replace('<?php echo htmlentities($form_group['name']); ?>', {height: '<?php echo htmlentities($form_group['height']); ?>px'});
    <?php endif; ?>
</script>
            <?php break; case "editor": ?>
                
                <div class="row dd_input_group no-gutters" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <div class="form-group">
        <div class="col-12">
            <?php if($form_group['elemtype'] == "button"): ?>
            <button class="btn btn-flat <?php echo htmlentities((isset($form_group['class']) && ($form_group['class'] !== '')?$form_group['class']:'btn-primary')); ?>" id="<?php echo htmlentities((isset($form_group['id']) && ($form_group['id'] !== '')?$form_group['id']:'')); ?>" type="button" <?php echo (isset($form_group['data']) && ($form_group['data'] !== '')?$form_group['data']:''); if(isset($form_group['disabled'])): ?>disabled<?php endif; ?>>
            <i class="<?php echo htmlentities((isset($form_group['icon']) && ($form_group['icon'] !== '')?$form_group['icon']:'')); ?>"></i> <?php echo htmlentities((isset($form_group['title']) && ($form_group['title'] !== '')?$form_group['title']:'')); ?></button>
            <?php else: ?>
            <a class="btn btn-flat <?php echo htmlentities((isset($form_group['class']) && ($form_group['class'] !== '')?$form_group['class']:'btn-primary')); if(isset($form_group['disabled'])): ?> disabled<?php endif; ?>" id="<?php echo htmlentities((isset($form_group['id']) && ($form_group['id'] !== '')?$form_group['id']:'')); ?>" title="<?php echo htmlentities((isset($form_group['title']) && ($form_group['title'] !== '')?$form_group['title']:'')); ?>" target="<?php echo htmlentities((isset($form_group['target']) && ($form_group['target'] !== '')?$form_group['target']:'')); ?>" href="<?php echo htmlentities((isset($form_group['href']) && ($form_group['href'] !== '')?$form_group['href']:'')); ?>" <?php echo (isset($form_group['data']) && ($form_group['data'] !== '')?$form_group['data']:''); ?>><i class="<?php echo htmlentities((isset($form_group['icon']) && ($form_group['icon'] !== '')?$form_group['icon']:'')); ?>"></i> <?php echo htmlentities((isset($form_group['title']) && ($form_group['title'] !== '')?$form_group['title']:'')); ?></a>
            <?php endif; ?>
        </div>
    </div>
</div>
            <?php break; case "hidden": ?>
                
                <div class="row dd_input_group hide <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <div class="form-group">
        <input type="hidden" name="<?php echo htmlentities($form_group['name']); ?>" value="<?php echo htmlentities((isset($form_group['value']) && ($form_group['value'] !== '')?$form_group['value']:'')); ?>" id="<?php echo htmlentities($form_group['name']); ?>" <?php echo (isset($form_group['extra_attr']) && ($form_group['extra_attr'] !== '')?$form_group['extra_attr']:''); ?>>
    </div>
</div>


            <?php break; case "html": ?>
                
                <?php echo $form_group['html']; break; case "color": ?>
                
                <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form_group['required']) || (($form_group['required'] instanceof \think\Collection || $form_group['required'] instanceof \think\Paginator ) && $form_group['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form_group['name']); ?>"><?php echo htmlentities(htmlspecialchars($form_group['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <div class="input-group <?php echo htmlentities($form_group['name']); ?>-colorpicker">
            <input class="form-control" type="text" id="<?php echo htmlentities($form_group['name']); ?>" name="<?php echo htmlentities($form_group['name']); ?>" value="<?php echo htmlentities($form_group['value']); ?>" placeholder="<?php echo htmlentities($form_group['placeholder']); ?>" <?php echo $form_group['extra_attr']; ?>>
            <div class="input-group-append">
                <span class="input-group-text">
                    <i class="fas fa-square" <?php if($form_group['value']): ?>style="color: <?php echo htmlentities($form_group['value']); ?>"<?php endif; ?>></i>
                </span>
            </div>
        </div>
    </div>
    <?php if(!(empty($form_group['tips']) || (($form_group['tips'] instanceof \think\Collection || $form_group['tips'] instanceof \think\Paginator ) && $form_group['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form_group['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
<script>
    $(function () {
        $('.<?php echo htmlentities($form_group['name']); ?>-colorpicker').colorpicker()
        $('.<?php echo htmlentities($form_group['name']); ?>-colorpicker').on('colorpickerChange', function(event) {
            $('.<?php echo htmlentities($form_group['name']); ?>-colorpicker .fa-square').css('color', event.color.toString());
        });
    })
</script>
            <?php break; case "code": ?>
                
                <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form_group['extra_class']) && ($form_group['extra_class'] !== '')?$form_group['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form_group['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form_group['required']) || (($form_group['required'] instanceof \think\Collection || $form_group['required'] instanceof \think\Paginator ) && $form_group['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form_group['name']); ?>"><?php echo htmlentities(htmlspecialchars($form_group['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-8 col-xl-7">
        <textarea id="<?php echo htmlentities($form_group['name']); ?>" name="<?php echo htmlentities($form_group['name']); ?>" <?php echo $form_group['extra_attr']; ?>><?php echo htmlentities($form_group['value']); ?></textarea>
    </div>
    <?php if(!(empty($form_group['tips']) || (($form_group['tips'] instanceof \think\Collection || $form_group['tips'] instanceof \think\Paginator ) && $form_group['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-2 col-xl-4 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form_group['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
<script>
    $(function () {
        // CodeMirror
        var codeEditor = CodeMirror.fromTextArea(document.getElementById("<?php echo htmlentities($form_group['name']); ?>"), {
            mode: "<?php echo htmlentities($form_group['mode']); ?>",     // 编辑器语言
            theme: "<?php echo htmlentities($form_group['theme']); ?>",   // 编辑器主题
            lineNumbers: true,              // 显示行号
            showCursorWhenSelecting: true,  // 文本选中时显示光标
            lineWrapping: true,             // 代码折叠
        });
        codeEditor.setSize('auto',"<?php echo htmlentities($form_group['height']); ?>px");
    })
</script>
            <?php break; default: ?>

        <?php endswitch; ?>
    <?php endforeach; endif; else: echo "" ;endif; ?>
</div>
<?php endforeach; endif; else: echo "" ;endif; ?>
</div>

                        <?php break; case "text": ?>
                            
                            <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form['required']) || (($form['required'] instanceof \think\Collection || $form['required'] instanceof \think\Paginator ) && $form['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form['name']); ?>"><?php echo htmlentities(htmlspecialchars($form['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <?php if(!(empty($form['group']) || (($form['group'] instanceof \think\Collection || $form['group'] instanceof \think\Paginator ) && $form['group']->isEmpty()))): ?>
        <div class="input-group">
            <?php endif; if(!(empty($form['group']['0']) || (($form['group']['0'] instanceof \think\Collection || $form['group']['0'] instanceof \think\Paginator ) && $form['group']['0']->isEmpty()))): ?>
            <div class="input-group-prepend">
                <span class="input-group-text"><?php echo $form['group']['0']; ?></span>
            </div>
            <?php endif; ?>
            <input class="form-control" type="text" id="<?php echo htmlentities($form['name']); ?>" name="<?php echo htmlentities($form['name']); ?>" value="<?php echo htmlentities($form['value']); ?>" placeholder="<?php echo htmlentities($form['placeholder']); ?>" <?php echo $form['extra_attr']; ?>>
            <?php if(!(empty($form['group']['1']) || (($form['group']['1'] instanceof \think\Collection || $form['group']['1'] instanceof \think\Paginator ) && $form['group']['1']->isEmpty()))): ?>
            <div class="input-group-append">
                <span class="input-group-text"><?php echo $form['group']['1']; ?></span>
            </div>
            <?php endif; if(!(empty($form['group']) || (($form['group'] instanceof \think\Collection || $form['group'] instanceof \think\Paginator ) && $form['group']->isEmpty()))): ?>
        </div>
        <?php endif; ?>
    </div>
    <?php if(!(empty($form['tips']) || (($form['tips'] instanceof \think\Collection || $form['tips'] instanceof \think\Paginator ) && $form['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
                        <?php break; case "textarea": ?>
                            
                            <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form['required']) || (($form['required'] instanceof \think\Collection || $form['required'] instanceof \think\Paginator ) && $form['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form['name']); ?>"><?php echo htmlentities(htmlspecialchars($form['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <textarea class="form-control" id="<?php echo htmlentities($form['name']); ?>" name="<?php echo htmlentities($form['name']); ?>" rows="<?php echo htmlentities((isset($form['rows']) && ($form['rows'] !== '')?$form['rows']:'3')); ?>" placeholder="<?php echo htmlentities($form['placeholder']); ?>" <?php echo $form['extra_attr']; ?>><?php echo htmlentities($form['value']); ?></textarea>
    </div>
    <?php if(!(empty($form['tips']) || (($form['tips'] instanceof \think\Collection || $form['tips'] instanceof \think\Paginator ) && $form['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
                        <?php break; case "radio": ?>
                            
                            <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form['required']) || (($form['required'] instanceof \think\Collection || $form['required'] instanceof \think\Paginator ) && $form['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form['name']); ?>"><?php echo htmlentities(htmlspecialchars($form['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4 dd_radio_lable_left border-white">
        <?php if(is_array($form['options']) || $form['options'] instanceof \think\Collection || $form['options'] instanceof \think\Paginator): $i = 0; $__LIST__ = $form['options'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;?>
        <div class="icheck-peterriver icheck-inline">
            <input type="radio" name="<?php echo htmlentities($form['name']); ?>" class="dd_radio" id="<?php echo htmlentities($form['name']); ?><?php echo htmlentities($i); ?>" value="<?php echo htmlentities($key); ?>" <?php if($key == (isset($form['value']) && ($form['value'] !== '')?$form['value']:'')): ?>checked<?php endif; ?> <?php echo (isset($form['extra_attr']) && ($form['extra_attr'] !== '')?$form['extra_attr']:''); ?>>
            <label for="<?php echo htmlentities($form['name']); ?><?php echo htmlentities($i); ?>"><?php echo htmlspecialchars($option); ?></label>
        </div>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
    <?php if(!(empty($form['tips']) || (($form['tips'] instanceof \think\Collection || $form['tips'] instanceof \think\Paginator ) && $form['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
                        <?php break; case "checkbox": ?>
                            
                            <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form['required']) || (($form['required'] instanceof \think\Collection || $form['required'] instanceof \think\Paginator ) && $form['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form['name']); ?>"><?php echo htmlentities(htmlspecialchars($form['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <div class="dd_radio_lable_left border-white">
            <input type="hidden" name="<?php echo htmlentities($form['name']); ?>[]" value="">
            <?php if(is_array($form['options']) || $form['options'] instanceof \think\Collection || $form['options'] instanceof \think\Paginator): $i = 0; $__LIST__ = $form['options'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;?>
            <div class="icheck-peterriver icheck-inline">
                <input type="checkbox" name="<?php echo htmlentities($form['name']); ?>[]" class="dd_radio" id="<?php echo htmlentities($form['name']); ?><?php echo htmlentities($i); ?>" value="<?php echo htmlentities($key); ?>" <?php if(in_array(($key), is_array((isset($form['value']) && ($form['value'] !== '')?$form['value']:''))?(isset($form['value']) && ($form['value'] !== '')?$form['value']:''):explode(',',(isset($form['value']) && ($form['value'] !== '')?$form['value']:'')))): ?>checked<?php endif; ?> <?php echo (isset($form['extra_attr']) && ($form['extra_attr'] !== '')?$form['extra_attr']:''); ?>>
                <label for="<?php echo htmlentities($form['name']); ?><?php echo htmlentities($i); ?>"><?php echo htmlspecialchars($option); ?></label>
            </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </div>
    <?php if(!(empty($form['tips']) || (($form['tips'] instanceof \think\Collection || $form['tips'] instanceof \think\Paginator ) && $form['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
                        <?php break; case "date": ?>
                            
                            <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form['required']) || (($form['required'] instanceof \think\Collection || $form['required'] instanceof \think\Paginator ) && $form['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form['name']); ?>"><?php echo htmlentities(htmlspecialchars($form['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <div class="input-group date" id="reservationdate_<?php echo htmlentities($form['name']); ?>"
             data-date-format="<?php echo htmlentities(convert_php_to_moment_format($form['format'])); ?>" data-target-input="nearest">
            <input class="form-control" type="text" id="<?php echo htmlentities($form['name']); ?>" name="<?php echo htmlentities($form['name']); ?>"
                   value="<?php echo htmlentities((isset($form['value']) && ($form['value'] !== '')?$form['value']:'')); ?>" placeholder="<?php echo htmlentities($form['placeholder']); ?>"
                   autocomplete="off" <?php echo $form['extra_attr']; ?>>
            <div class="input-group-append" data-target="#reservationdate_<?php echo htmlentities($form['name']); ?>"
                 data-toggle="datetimepicker">
                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
            </div>
        </div>
    </div>
    <?php if(!(empty($form['tips']) || (($form['tips'] instanceof \think\Collection || $form['tips'] instanceof \think\Paginator ) && $form['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
<script>
    $(function () {
        $('#reservationdate_<?php echo htmlentities($form['name']); ?>').datetimepicker();
    })
</script>
                        <?php break; case "time": ?>
                            
                            <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form['required']) || (($form['required'] instanceof \think\Collection || $form['required'] instanceof \think\Paginator ) && $form['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form['name']); ?>"><?php echo htmlentities(htmlspecialchars($form['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <div class="input-group date" id="timepicker_<?php echo htmlentities($form['name']); ?>"
             data-date-format="<?php echo htmlentities(convert_php_to_moment_format($form['format'])); ?>" data-target-input="nearest">
            <input class="form-control datetimepicker-input" type="text" id="<?php echo htmlentities($form['name']); ?>"
                   name="<?php echo htmlentities($form['name']); ?>" value="<?php echo htmlentities((isset($form['value']) && ($form['value'] !== '')?$form['value']:'')); ?>"
                   placeholder="<?php echo htmlentities($form['placeholder']); ?>" autocomplete="off" data-target="#timepicker_<?php echo htmlentities($form['name']); ?>" <?php echo $form['extra_attr']; ?>>
            <div class="input-group-append" data-target="#timepicker_<?php echo htmlentities($form['name']); ?>" data-toggle="datetimepicker">
                <div class="input-group-text"><i class="far fa-clock"></i></div>
            </div>
        </div>
    </div>
    <?php if(!(empty($form['tips']) || (($form['tips'] instanceof \think\Collection || $form['tips'] instanceof \think\Paginator ) && $form['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
<script>
    $(function () {
        $('#timepicker_<?php echo htmlentities($form['name']); ?>').datetimepicker()
    })
</script>
                        <?php break; case "datetime": ?>
                            
                            <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form['required']) || (($form['required'] instanceof \think\Collection || $form['required'] instanceof \think\Paginator ) && $form['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form['name']); ?>"><?php echo htmlentities(htmlspecialchars($form['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <div class="input-group date" id="reservationdate_<?php echo htmlentities($form['name']); ?>"
             data-date-format="<?php echo htmlentities(convert_php_to_moment_format($form['format'])); ?>" data-target-input="nearest">
            <input class="form-control datetimepicker-input" type="text" id="<?php echo htmlentities($form['name']); ?>" name="<?php echo htmlentities($form['name']); ?>"
                   value="<?php echo htmlentities((isset($form['value']) && ($form['value'] !== '')?$form['value']:'')); ?>" placeholder="<?php echo htmlentities($form['placeholder']); ?>"
                   autocomplete="off" data-target="#reservationdate_<?php echo htmlentities($form['name']); ?>" <?php echo $form['extra_attr']; ?>>
            <div class="input-group-append" data-target="#reservationdate_<?php echo htmlentities($form['name']); ?>"
                 data-toggle="datetimepicker">
                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
            </div>
        </div>
    </div>
    <?php if(!(empty($form['tips']) || (($form['tips'] instanceof \think\Collection || $form['tips'] instanceof \think\Paginator ) && $form['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>

<script>
    $(function () {
        $('#reservationdate_<?php echo htmlentities($form['name']); ?>').datetimepicker({icons: {time: 'far fa-clock'}});
    })
</script>
                        <?php break; case "daterange": ?>
                            
                            <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form['required']) || (($form['required'] instanceof \think\Collection || $form['required'] instanceof \think\Paginator ) && $form['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form['name']); ?>"><?php echo htmlentities(htmlspecialchars($form['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <div class="input-group">
            <input class="form-control" type="text" id="<?php echo htmlentities($form['name']); ?>" name="<?php echo htmlentities($form['name']); ?>"
                   value="<?php echo htmlentities((isset($form['value']) && ($form['value'] !== '')?$form['value']:'')); ?>" placeholder="<?php echo htmlentities($form['placeholder']); ?>"
                   autocomplete="off" <?php echo $form['extra_attr']; ?>>
            <div class="input-group-append">
                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
            </div>
        </div>
    </div>
    <?php if(!(empty($form['tips']) || (($form['tips'] instanceof \think\Collection || $form['tips'] instanceof \think\Paginator ) && $form['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>

<script>
    $(function () {
        $('#<?php echo htmlentities($form['name']); ?>').daterangepicker({
            showDropdowns: true,     // 年月份下拉框
            timePicker: true,        // 显示时间
            timePicker24Hour: true,  // 时间制
            timePickerSeconds: true, // 时间显示到秒
            ranges: {
                '今天': [moment(), moment()],
                '昨天': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                '上周': [moment().subtract(6, 'days'), moment()],
                '前30天': [moment().subtract(29, 'days'), moment()],
                '本月': [moment().startOf('month'), moment().endOf('month')],
                '上月': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            },
            //timePicker: true,
            //timePickerIncrement: 30,
            locale: {
                format: '<?php echo htmlentities(convert_php_to_moment_format($form['format'])); ?>',
                applyLabel: '确定',       // 确定按钮文本
                cancelLabel: '取消',      // 取消按钮文本
                customRangeLabel: '自定义',
            }
        });
    })
</script>


                        <?php break; case "tags": ?>
                            
                            <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form['required']) || (($form['required'] instanceof \think\Collection || $form['required'] instanceof \think\Paginator ) && $form['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form['name']); ?>"><?php echo htmlentities(htmlspecialchars($form['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <input class="form-control tags" type="text" id="<?php echo htmlentities($form['name']); ?>" name="<?php echo htmlentities($form['name']); ?>" value="<?php echo htmlentities($form['value']); ?>" placeholder="输入后请回车确认" <?php echo $form['extra_attr']; ?>>
    </div>
    <?php if(!(empty($form['tips']) || (($form['tips'] instanceof \think\Collection || $form['tips'] instanceof \think\Paginator ) && $form['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
                        <?php break; case "number": ?>
                            
                            <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form['required']) || (($form['required'] instanceof \think\Collection || $form['required'] instanceof \think\Paginator ) && $form['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form['name']); ?>"><?php echo htmlentities(htmlspecialchars($form['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <input class="form-control" type="number" id="<?php echo htmlentities($form['name']); ?>" name="<?php echo htmlentities($form['name']); ?>" value="<?php echo htmlentities($form['value']); ?>" <?php if(isset($form['min']) && $form['min'] !== ''): ?>min="<?php echo htmlentities($form['min']); ?>"<?php endif; if(isset($form['max']) && $form['max'] !== ''): ?>max="<?php echo htmlentities($form['max']); ?>"<?php endif; if(isset($form['step']) && $form['step'] !== ''): ?>step="<?php echo htmlentities($form['step']); ?>"<?php endif; ?> <?php echo $form['extra_attr']; ?>>
    </div>
    <?php if(!(empty($form['tips']) || (($form['tips'] instanceof \think\Collection || $form['tips'] instanceof \think\Paginator ) && $form['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>


                        <?php break; case "password": ?>
                            
                            <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form['required']) || (($form['required'] instanceof \think\Collection || $form['required'] instanceof \think\Paginator ) && $form['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form['name']); ?>"><?php echo htmlentities(htmlspecialchars($form['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <input class="form-control" type="password" id="<?php echo htmlentities($form['name']); ?>" name="<?php echo htmlentities($form['name']); ?>" value="" placeholder="<?php echo htmlentities($form['placeholder']); ?>" <?php echo $form['extra_attr']; ?>>
    </div>
    <?php if(!(empty($form['tips']) || (($form['tips'] instanceof \think\Collection || $form['tips'] instanceof \think\Paginator ) && $form['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
                        <?php break; case "select": ?>
                            
                            <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form['required']) || (($form['required'] instanceof \think\Collection || $form['required'] instanceof \think\Paginator ) && $form['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form['name']); ?>"><?php echo htmlentities(htmlspecialchars($form['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <select class="form-control" id="<?php echo htmlentities($form['name']); ?>" name="<?php echo htmlentities($form['name']); ?>" <?php echo htmlentities((isset($form['extra_attr']) && ($form['extra_attr'] !== '')?$form['extra_attr']:'')); ?>>
            <option value=""><?php echo htmlentities($form['placeholder']); ?></option>
            <?php if(is_array($form['options']) || $form['options'] instanceof \think\Collection || $form['options'] instanceof \think\Paginator): $i = 0; $__LIST__ = $form['options'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;if(is_array($option)): ?>
            <option value="<?php echo htmlentities($key); ?>" <?php if(((string)$form['value'] == (string)$key)): ?>selected<?php endif; if($option['disabled'] == 1): ?>disabled<?php endif; ?>><?php echo htmlentities($option['value']); ?></option>
            <?php else: ?>
            <option value="<?php echo htmlentities($key); ?>" <?php if(((string)$form['value'] == (string)$key)): ?>selected<?php endif; ?>><?php echo htmlentities($option); ?></option>
            <?php endif; ?>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </select>
    </div>
    <?php if(!(empty($form['tips']) || (($form['tips'] instanceof \think\Collection || $form['tips'] instanceof \think\Paginator ) && $form['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
                        <?php break; case "select2": ?>
                            
                            <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form['required']) || (($form['required'] instanceof \think\Collection || $form['required'] instanceof \think\Paginator ) && $form['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form['name']); ?>"><?php echo htmlentities(htmlspecialchars($form['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <select class="select2 form-control" id="<?php echo htmlentities($form['name']); ?>" name="<?php echo htmlentities($form['name']); ?>" data-value="<?php echo htmlentities($form['value']); ?>" <?php echo htmlentities((isset($form['extra_attr']) && ($form['extra_attr'] !== '')?$form['extra_attr']:'')); ?>>
            <option value=""><?php echo htmlentities($form['placeholder']); ?></option>
            <?php if(is_array($form['options']) || $form['options'] instanceof \think\Collection || $form['options'] instanceof \think\Paginator): $i = 0; $__LIST__ = $form['options'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;?>
            <option value="<?php echo htmlentities($key); ?>" <?php if(in_array(($key), is_array($form['value'])?$form['value']:explode(',',$form['value']))): ?>selected<?php endif; ?>><?php echo htmlentities($option); ?></option>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </select>
    </div>
    <?php if(!(empty($form['tips']) || (($form['tips'] instanceof \think\Collection || $form['tips'] instanceof \think\Paginator ) && $form['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
<script>
    $(function () {
        var option = {};
        <?php if(!$form['options']): ?>
        if('<?php echo htmlentities($form['ajax_url']); ?>' !== ''){
            // 启用ajax分页查询
            option = {
                language: "zh-CN",
                //allowClear: true,
                ajax: {
                    delay: 250, // 限速请求
                    url: "<?php echo htmlentities($form['ajax_url']); ?>",   //  请求地址
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
                            data.data.unshift({id: '', name: "", text: "<?php echo htmlentities($form['placeholder']); ?>"});
                        }
                        return {
                            results: data.data,
                            pagination: {
                                //more: (params.page) < data.paginator.totalPages
                                more: (params.page) < data.last_page
                            }
                        };
                    },
                    cache: true
                }
            };
            // 默认值设置
            var defaultValue = $('#<?php echo htmlentities($form['name']); ?>').data("value");
            if (defaultValue) {
                $.ajax({
                    type: "POST",
                    url: "<?php echo htmlentities($form['ajax_url']); ?>",
                    data: {value:defaultValue},
                    dataType: "json",
                    success: function(data){
                        $('#<?php echo htmlentities($form['name']); ?>').append("<option selected value='" + data.key + "'>" + data.value + "</option>");
                    }
                });
            }
        }
        <?php endif; ?>
        $('#<?php echo htmlentities($form['name']); ?>').select2(option);
    })
</script>

                        <?php break; case "image": ?>
                            
                            <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form['required']) || (($form['required'] instanceof \think\Collection || $form['required'] instanceof \think\Paginator ) && $form['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form['name']); ?>"><?php echo htmlentities(htmlspecialchars($form['title'])); ?></label>
    <div class="col-9 col-sm-6 col-md-6 col-lg-6 col-xl-4">
        <input class="form-control" type="text" id="<?php echo htmlentities($form['name']); ?>" name="<?php echo htmlentities($form['name']); ?>" value="<?php echo htmlentities($form['value']); ?>" placeholder="<?php echo htmlentities($form['placeholder']); ?>" <?php echo $form['extra_attr']; ?>>
    </div>
    <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-7 dd_ts dd_ts_img">
        <!--上传图片-->
        <!--用来存放item-->
        <div id="fileList_<?php echo htmlentities($form['name']); ?>" class="uploader-list"></div>
        <div id="filePicker_<?php echo htmlentities($form['name']); ?>"><i class="fa fa-upload m-r-10"></i>选择图片</div>
        <a href="<?php echo !empty($form['value']) ? htmlentities($form['value']) : '/static/admin/images/nopic.png'; ?>" target="_blank">
            <img class="image_preview_info"
                 src="<?php echo !empty($form['value']) ? htmlentities($form['value']) : '/static/admin/images/nopic.png'; ?>"
                 id="<?php echo htmlentities($form['name']); ?>_preview">
        </a>
        <!--上传图片-->
        <?php if(!(empty($form['tips']) || (($form['tips'] instanceof \think\Collection || $form['tips'] instanceof \think\Paginator ) && $form['tips']->isEmpty()))): ?>
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form['tips']; ?>
        </small>
        <?php endif; ?>
    </div>
</div>
<script type="text/javascript">
    webupload('fileList_<?php echo htmlentities($form['name']); ?>', 'filePicker_<?php echo htmlentities($form['name']); ?>', '<?php echo htmlentities($form['name']); ?>_preview', '<?php echo htmlentities($form['name']); ?>', false, '<?php echo htmlentities((isset($system['upload_image_ext']) && ($system['upload_image_ext'] !== '')?$system['upload_image_ext']:"")); ?>', '<?php echo htmlentities((isset($system['upload_image_size']) && ($system['upload_image_size'] !== '')?$system['upload_image_size']:"0")); ?>');
</script>


                        <?php break; case "images": ?>
                            
                            <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
<!-- ZTX-004  by 折腾侠-->
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form['required']) || (($form['required'] instanceof \think\Collection || $form['required'] instanceof \think\Paginator ) && $form['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form['name']); ?>"><?php echo htmlentities(htmlspecialchars($form['title'])); ?></label>
	
	<div class="col-12 col-sm-7 col-md-7 col-lg-7 col-xl-4" >
	<!-- ZTX-004  by 折腾侠-->
        <div class="more_images dd_ts">
            <div id="more_images_<?php echo htmlentities($form['name']); ?>">
                <div class="hide">
                    <input type="text" name="<?php echo htmlentities($form['name']); ?>[]" value="">
                    <input type="text" name="<?php echo htmlentities($form['name']); ?>_title[]" value="">
                    <!-- ZTX-增加缩略图显示 -->
                    <input type="text" name="<?php echo htmlentities($form['name']); ?>_small[]" value="">
                    <!-- ZTX-增加缩略图显示 -->
                </div>
                <?php if(!(empty($form['value']) || (($form['value'] instanceof \think\Collection || $form['value'] instanceof \think\Paginator ) && $form['value']->isEmpty()))): if(is_array($form['value']) || $form['value'] instanceof \think\Collection || $form['value'] instanceof \think\Paginator): $i = 0; $__LIST__ = $form['value'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
				<!-- ZTX-004  by 折腾侠-->
                <div class="row no-gutters">
                    <div class="col-4 col-sm-4">
                        <input type="text" name="<?php echo htmlentities($form['name']); ?>[]" value="<?php echo htmlentities($vo['image']); ?>" class="form-control">
                        <!-- ZTX-增加缩略图显示 -->
                        <input type="text" name="<?php echo htmlentities($form['name']); ?>_small[]" value="<?php echo isset($vo['small']) ? htmlentities($vo['small']) : ''; ?>" class="hide">
                        <!-- ZTX-增加缩略图显示 -->
                    </div>
                    <div class="col-3 col-sm-3">
                        <input type="text" name="<?php echo htmlentities($form['name']); ?>_title[]" value="<?php echo htmlentities($vo['title']); ?>" class="form-control input-sm">
                    </div>
                    <div class="col-4 col-sm-3">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default btn-sm move_up_images">
                                <i class="fa fa-chevron-up"></i>
                            </button>
                            <button type="button" class="btn btn-default btn-sm move_down_images">
                                <i class="fa fa-chevron-down"></i>
                            </button>
                            <button type="button" class="btn btn-default btn-sm remove_images">
                                <i class="fa fa-times"></i>
                            </button>
							
                        </div>
                    </div>
					
					 <div class="col-4 col-sm-2"><a href="<?php echo htmlentities($vo['image']); ?>" target="_blank"> <img class="image_preview_info" src="<?php echo !empty($vo['small']) ? htmlentities($vo['small']) : htmlentities($vo['image']); ?>"  ></a></div>
                </div>
				<!-- ZTX-004  by 折腾侠-->
                <?php endforeach; endif; else: echo "" ;endif; ?>
                <?php endif; ?>
            </div>
			
			
        </div>
		<!-- ZTX-005  by 折腾侠-->
		<div class="row no-gutters">
		 <div class="col-4 col-sm-12">
			<input class="form-control" type="text" id="img" name="site_img_choose" value="" placeholder="从站内选择图片，输入搜索关键词" >
		</div>
		
		
		</div>
		
		
		<!-- ZTX-005  by 折腾侠-->
    </div>
	<!-- ZTX-004  by 折腾侠-->
    <div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-7 dd_ts dd_ts_img">
	<!-- ZTX-004  by 折腾侠-->
        <!--上传图片-->
        <!--用来存放item-->
        <div id="fileList_<?php echo htmlentities($form['name']); ?>" class="uploader-list"></div>
        <div id="filePicker_<?php echo htmlentities($form['name']); ?>"><i class="fa fa-upload m-r-10"></i>上传图片</div>
		
	
		
		
        <!--上传图片-->
        <?php if(!(empty($form['tips']) || (($form['tips'] instanceof \think\Collection || $form['tips'] instanceof \think\Paginator ) && $form['tips']->isEmpty()))): ?>
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form['tips']; ?>
        </small>
        <?php endif; ?>
    </div>
</div>
<script type="text/javascript">
    webupload('fileList_<?php echo htmlentities($form['name']); ?>', 'filePicker_<?php echo htmlentities($form['name']); ?>', '<?php echo htmlentities($form['name']); ?>_preview', '<?php echo htmlentities($form['name']); ?>', true, '<?php echo htmlentities((isset($system['upload_image_ext']) && ($system['upload_image_ext'] !== '')?$system['upload_image_ext']:"")); ?>', '<?php echo htmlentities((isset($system['upload_image_size']) && ($system['upload_image_size'] !== '')?$system['upload_image_size']:"0")); ?>');
</script>
                        <?php break; case "file": ?>
                            
                            <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form['required']) || (($form['required'] instanceof \think\Collection || $form['required'] instanceof \think\Paginator ) && $form['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form['name']); ?>"><?php echo htmlentities(htmlspecialchars($form['title'])); ?></label>
    <div class="col-9 col-sm-6 col-md-6 col-lg-6 col-xl-4">
        <input class="form-control" type="text" id="<?php echo htmlentities($form['name']); ?>" name="<?php echo htmlentities($form['name']); ?>" value="<?php echo htmlentities($form['value']); ?>" placeholder="<?php echo htmlentities($form['placeholder']); ?>" <?php echo $form['extra_attr']; ?>>
    </div>
    <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-7 dd_ts dd_ts_img">
        <!--上传图片-->
        <!--用来存放item-->
        <div id="fileList_<?php echo htmlentities($form['name']); ?>" class="uploader-list"></div>
        <div id="filePicker_<?php echo htmlentities($form['name']); ?>"><i class="fa fa-upload m-r-10"></i>选择文件</div>
        <!--上传图片-->
        <?php if(!(empty($form['tips']) || (($form['tips'] instanceof \think\Collection || $form['tips'] instanceof \think\Paginator ) && $form['tips']->isEmpty()))): ?>
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form['tips']; ?>
        </small>
        <?php endif; ?>
    </div>
</div>
<script type="text/javascript">
    webupload('fileList_<?php echo htmlentities($form['name']); ?>', 'filePicker_<?php echo htmlentities($form['name']); ?>', '<?php echo htmlentities($form['name']); ?>_preview', '<?php echo htmlentities($form['name']); ?>', false, '<?php echo htmlentities((isset($system['upload_file_ext']) && ($system['upload_file_ext'] !== '')?$system['upload_file_ext']:"")); ?>', '<?php echo htmlentities((isset($system['upload_file_size']) && ($system['upload_file_size'] !== '')?$system['upload_file_size']:"0")); ?>', 'file');
</script>


                        <?php break; case "files": ?>
                            
                            <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form['required']) || (($form['required'] instanceof \think\Collection || $form['required'] instanceof \think\Paginator ) && $form['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form['name']); ?>"><?php echo htmlentities(htmlspecialchars($form['title'])); ?></label>
    <div class="col-9 col-sm-7 col-md-7 col-lg-7 col-xl-4">
        <div class="more_images dd_ts">
            <div id="more_images_<?php echo htmlentities($form['name']); ?>">
                <div class="hide">
                    <input type="text" name="<?php echo htmlentities($form['name']); ?>[]" value="">
                    <input type="text" name="<?php echo htmlentities($form['name']); ?>_title[]" value="">
                </div>
                <?php if(!(empty($form['value']) || (($form['value'] instanceof \think\Collection || $form['value'] instanceof \think\Paginator ) && $form['value']->isEmpty()))): if(is_array($form['value']) || $form['value'] instanceof \think\Collection || $form['value'] instanceof \think\Paginator): $i = 0; $__LIST__ = $form['value'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <!-- ZTX-002  by 折腾侠删除原有代码，改为跟图片显示容器一样的代码-->
                <div class="row no-gutters">
                    <div class="col-4 col-sm-6">
                        <input type="text" name="<?php echo htmlentities($form['name']); ?>[]" value="<?php echo htmlentities($vo['image']); ?>" class="form-control">
                    </div>
                    <div class="col-3 col-sm-3">
                        <input type="text" name="<?php echo htmlentities($form['name']); ?>_title[]" value="<?php echo htmlentities($vo['title']); ?>" class="form-control input-sm">
                    </div>
                    <div class="col-4 col-sm-3">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default btn-sm move_up_images">
                                <i class="fa fa-chevron-up"></i>
                            </button>
                            <button type="button" class="btn btn-default btn-sm move_down_images">
                                <i class="fa fa-chevron-down"></i>
                            </button>
                            <button type="button" class="btn btn-default btn-sm remove_images">
                                <i class="fa fa-times"></i>
                            </button>
							
                        </div>
                    </div>
					 </div>
					
				<!-- ZTX-002  by 折腾侠 删除原有代码，改为跟图片显示容器一样的代码-->
                <?php endforeach; endif; else: echo "" ;endif; ?>
                <?php endif; ?>
            </div>
        </div>
		<!-- ZTX-005  by 折腾侠-->
		<div class="row no-gutters">
		 <div class="col-4 col-sm-12">
			<input class="form-control" type="text" id="file" name="site_file_choose" value="" placeholder="从站内选择文件，输入搜索关键词" >
		</div>
		
		
		</div>
		
		
		<!-- ZTX-005  by 折腾侠-->
    </div>
    <div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-7 dd_ts dd_ts_img">
        <!--上传图片-->
        <!--用来存放item-->
        <div id="fileList_<?php echo htmlentities($form['name']); ?>" class="uploader-list"></div>
        <div id="filePicker_<?php echo htmlentities($form['name']); ?>"><i class="fa fa-upload m-r-10"></i>选择文件</div>
        <!--上传图片-->
        <?php if(!(empty($form['tips']) || (($form['tips'] instanceof \think\Collection || $form['tips'] instanceof \think\Paginator ) && $form['tips']->isEmpty()))): ?>
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form['tips']; ?>
        </small>
        <?php endif; ?>
    </div>
</div>
<script type="text/javascript">
    webupload('fileList_<?php echo htmlentities($form['name']); ?>', 'filePicker_<?php echo htmlentities($form['name']); ?>', '<?php echo htmlentities($form['name']); ?>_preview', '<?php echo htmlentities($form['name']); ?>', true, '<?php echo htmlentities((isset($system['upload_file_ext']) && ($system['upload_file_ext'] !== '')?$system['upload_file_ext']:"")); ?>', '<?php echo htmlentities((isset($system['upload_file_size']) && ($system['upload_file_size'] !== '')?$system['upload_file_size']:"0")); ?>', 'file');
</script>
                        <?php break; case "editor": ?>
                            
                            <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form['required']) || (($form['required'] instanceof \think\Collection || $form['required'] instanceof \think\Paginator ) && $form['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form['name']); ?>"><?php echo htmlentities(htmlspecialchars($form['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-8 col-xl-7">
        <textarea id="<?php echo htmlentities($form['name']); ?>" name="<?php echo htmlentities($form['name']); ?>" <?php echo $form['extra_attr']; ?> style="width:100%;height: <?php echo htmlentities($form['height']); ?>px"><?php echo htmlentities($form['value']); ?></textarea>
    </div>
    <?php if(!(empty($form['tips']) || (($form['tips'] instanceof \think\Collection || $form['tips'] instanceof \think\Paginator ) && $form['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-2 col-xl-4 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
<script>
    <?php if($system['editor'] == '1'): ?>
    UE.delEditor('<?php echo htmlentities($form['name']); ?>');
    UE.getEditor('<?php echo htmlentities($form['name']); ?>', {
        serverUrl: "<?php echo url('Upload/index',['from'=>'ueditor']); ?>",
    });
    <?php else: ?>
    CKEDITOR.replace('<?php echo htmlentities($form['name']); ?>', {height: '<?php echo htmlentities($form['height']); ?>px'});
    <?php endif; ?>
</script>
                        <?php break; case "button": ?>
                            
                            <div class="row dd_input_group no-gutters" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <div class="form-group">
        <div class="col-12">
            <?php if($form['elemtype'] == "button"): ?>
            <button class="btn btn-flat <?php echo htmlentities((isset($form['class']) && ($form['class'] !== '')?$form['class']:'btn-primary')); ?>" id="<?php echo htmlentities((isset($form['id']) && ($form['id'] !== '')?$form['id']:'')); ?>" type="button" <?php echo (isset($form['data']) && ($form['data'] !== '')?$form['data']:''); if(isset($form['disabled'])): ?>disabled<?php endif; ?>>
            <i class="<?php echo htmlentities((isset($form['icon']) && ($form['icon'] !== '')?$form['icon']:'')); ?>"></i> <?php echo htmlentities((isset($form['title']) && ($form['title'] !== '')?$form['title']:'')); ?></button>
            <?php else: ?>
            <a class="btn btn-flat <?php echo htmlentities((isset($form['class']) && ($form['class'] !== '')?$form['class']:'btn-primary')); if(isset($form['disabled'])): ?> disabled<?php endif; ?>" id="<?php echo htmlentities((isset($form['id']) && ($form['id'] !== '')?$form['id']:'')); ?>" title="<?php echo htmlentities((isset($form['title']) && ($form['title'] !== '')?$form['title']:'')); ?>" target="<?php echo htmlentities((isset($form['target']) && ($form['target'] !== '')?$form['target']:'')); ?>" href="<?php echo htmlentities((isset($form['href']) && ($form['href'] !== '')?$form['href']:'')); ?>" <?php echo (isset($form['data']) && ($form['data'] !== '')?$form['data']:''); ?>><i class="<?php echo htmlentities((isset($form['icon']) && ($form['icon'] !== '')?$form['icon']:'')); ?>"></i> <?php echo htmlentities((isset($form['title']) && ($form['title'] !== '')?$form['title']:'')); ?></a>
            <?php endif; ?>
        </div>
    </div>
</div>
                        <?php break; case "hidden": ?>
                            
                            <div class="row dd_input_group hide <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <div class="form-group">
        <input type="hidden" name="<?php echo htmlentities($form['name']); ?>" value="<?php echo htmlentities((isset($form['value']) && ($form['value'] !== '')?$form['value']:'')); ?>" id="<?php echo htmlentities($form['name']); ?>" <?php echo (isset($form['extra_attr']) && ($form['extra_attr'] !== '')?$form['extra_attr']:''); ?>>
    </div>
</div>


                        <?php break; case "html": ?>
                            
                            <?php echo $form['html']; break; case "color": ?>
                            
                            <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form['required']) || (($form['required'] instanceof \think\Collection || $form['required'] instanceof \think\Paginator ) && $form['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form['name']); ?>"><?php echo htmlentities(htmlspecialchars($form['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-6 col-xl-4">
        <div class="input-group <?php echo htmlentities($form['name']); ?>-colorpicker">
            <input class="form-control" type="text" id="<?php echo htmlentities($form['name']); ?>" name="<?php echo htmlentities($form['name']); ?>" value="<?php echo htmlentities($form['value']); ?>" placeholder="<?php echo htmlentities($form['placeholder']); ?>" <?php echo $form['extra_attr']; ?>>
            <div class="input-group-append">
                <span class="input-group-text">
                    <i class="fas fa-square" <?php if($form['value']): ?>style="color: <?php echo htmlentities($form['value']); ?>"<?php endif; ?>></i>
                </span>
            </div>
        </div>
    </div>
    <?php if(!(empty($form['tips']) || (($form['tips'] instanceof \think\Collection || $form['tips'] instanceof \think\Paginator ) && $form['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-4 col-xl-7 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
<script>
    $(function () {
        $('.<?php echo htmlentities($form['name']); ?>-colorpicker').colorpicker()
        $('.<?php echo htmlentities($form['name']); ?>-colorpicker').on('colorpickerChange', function(event) {
            $('.<?php echo htmlentities($form['name']); ?>-colorpicker .fa-square').css('color', event.color.toString());
        });
    })
</script>
                        <?php break; case "code": ?>
                            
                            <div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form['required']) || (($form['required'] instanceof \think\Collection || $form['required'] instanceof \think\Paginator ) && $form['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form['name']); ?>"><?php echo htmlentities(htmlspecialchars($form['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-8 col-xl-7">
        <textarea id="<?php echo htmlentities($form['name']); ?>" name="<?php echo htmlentities($form['name']); ?>" <?php echo $form['extra_attr']; ?>><?php echo htmlentities($form['value']); ?></textarea>
    </div>
    <?php if(!(empty($form['tips']) || (($form['tips'] instanceof \think\Collection || $form['tips'] instanceof \think\Paginator ) && $form['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-2 col-xl-4 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
<script>
    $(function () {
        // CodeMirror
        var codeEditor = CodeMirror.fromTextArea(document.getElementById("<?php echo htmlentities($form['name']); ?>"), {
            mode: "<?php echo htmlentities($form['mode']); ?>",     // 编辑器语言
            theme: "<?php echo htmlentities($form['theme']); ?>",   // 编辑器主题
            lineNumbers: true,              // 显示行号
            showCursorWhenSelecting: true,  // 文本选中时显示光标
            lineWrapping: true,             // 代码折叠
        });
        codeEditor.setSize('auto',"<?php echo htmlentities($form['height']); ?>px");
    })
</script>
                        <?php break; case "linkage": 
    // 获取一级联动数据
    $levelOne  = getLinkageData($form['model'], 0, $form['pid']);
    $levelKey  = [];
    $levelData = [];

    // 默认值
    if ($form['value'] != '') {
        $levelKeyData = getLinkageAllData($form['model'], $form['value'], $form['key'], $form['option'], $form['pid']);
        $levelKey = $levelKeyData['key'];
        $levelData = $levelKeyData['data'];
        sort($levelKey); // 升序排序
        $levelData = array_reverse($levelData); // 以相反的元素顺序返回数组
    }
 ?>
<div class="row dd_input_group no-gutters <?php echo htmlentities((isset($form['extra_class']) && ($form['extra_class'] !== '')?$form['extra_class']:'')); ?>" id="form_group_<?php echo htmlentities($form['name']); ?>">
    <label class="col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1 dd_input_l col-form-label <?php if(!(empty($form['required']) || (($form['required'] instanceof \think\Collection || $form['required'] instanceof \think\Paginator ) && $form['required']->isEmpty()))): ?>is-required<?php endif; ?>" for="<?php echo htmlentities($form['name']); ?>"><?php echo htmlentities(htmlspecialchars($form['title'])); ?></label>
    <div class="col-9 col-sm-9 col-md-9 col-lg-8 col-xl-7">
        <select class="form-control js_linkage" data-model="<?php echo htmlentities($form['model']); ?>" data-key="<?php echo htmlentities($form['key']); ?>" data-key_value="<?php echo htmlentities($form['option']); ?>" data-pid_field_name="<?php echo htmlentities((isset($form['pid']) && ($form['pid'] !== '')?$form['pid']:'pid')); ?>" data-next_level_id="<?php echo htmlentities($form['name']); ?>_2" id="<?php echo htmlentities($form['name']); ?>_1" name="<?php echo htmlentities($form['name']); if($form['level'] > '1'): ?>_1<?php endif; ?>" data-placeholder="<?php echo htmlentities($form['placeholder']); ?>" <?php echo htmlentities((isset($form['extra_attr']) && ($form['extra_attr'] !== '')?$form['extra_attr']:'')); ?> data-ajax_url="<?php echo htmlentities($form['ajax_url']); ?>" style="width: auto; display: inline-block">
            <option value=""><?php echo htmlentities($form['placeholder']); ?></option>
            <?php if(is_array($levelOne) || $levelOne instanceof \think\Collection || $levelOne instanceof \think\Paginator): $i = 0; $__LIST__ = $levelOne;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;if($form['level'] == '1'): ?>
                <option value="<?php echo htmlentities($option[$form['key']]); ?>" <?php if(($form['value'] == (string)$option[$form['key']])): ?>selected<?php endif; ?>><?php echo $option[$form['option']]; ?></option>
            <?php else: ?>
                <option value="<?php echo htmlentities($option[$form['key']]); ?>" <?php if((isset($levelKey[1]) && $levelKey[1] == (string)$option[$form['key']])): ?>selected<?php endif; ?>><?php echo $option[$form['option']]; ?></option>
            <?php endif; ?>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </select>
        <?php if($form['level'] == '2'): ?>
        <select class="form-control" id="<?php echo htmlentities($form['name']); ?>_2" name="<?php echo htmlentities($form['name']); ?>" data-placeholder="<?php echo htmlentities($form['placeholder']); ?>" <?php echo htmlentities((isset($form['extra_attr']) && ($form['extra_attr'] !== '')?$form['extra_attr']:'')); ?> style="width: auto; display: inline-block">
            <option value=""><?php echo htmlentities($form['placeholder']); ?></option>
            <?php if(!(empty($levelData['1']) || (($levelData['1'] instanceof \think\Collection || $levelData['1'] instanceof \think\Paginator ) && $levelData['1']->isEmpty()))): if(is_array($levelData['1']) || $levelData['1'] instanceof \think\Collection || $levelData['1'] instanceof \think\Paginator): $i = 0; $__LIST__ = $levelData['1'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;?>
            <option value="<?php echo htmlentities($option[$form['key']]); ?>" <?php if(($form['value'] == (string)$option[$form['key']])): ?>selected<?php endif; ?>><?php echo $option[$form['option']]; ?></option>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            <?php endif; ?>
        </select>
        <?php endif; if($form['level'] == '3'): ?>
        <select class="form-control js_linkage" data-model="<?php echo htmlentities($form['model']); ?>" data-key="<?php echo htmlentities($form['key']); ?>" data-key_value="<?php echo htmlentities($form['option']); ?>" data-pid_field_name="<?php echo htmlentities((isset($form['pid']) && ($form['pid'] !== '')?$form['pid']:'pid')); ?>" data-next_level_id="<?php echo htmlentities($form['name']); ?>_3" id="<?php echo htmlentities($form['name']); ?>_2" name="<?php echo htmlentities($form['name']); ?>_2" data-placeholder="<?php echo htmlentities($form['placeholder']); ?>" <?php echo htmlentities((isset($form['extra_attr']) && ($form['extra_attr'] !== '')?$form['extra_attr']:'')); ?> data-ajax_url="<?php echo htmlentities($form['ajax_url']); ?>" style="width: auto; display: inline-block">
            <option value=""><?php echo htmlentities($form['placeholder']); ?></option>
            <?php if(!(empty($levelData['1']) || (($levelData['1'] instanceof \think\Collection || $levelData['1'] instanceof \think\Paginator ) && $levelData['1']->isEmpty()))): if(is_array($levelData['1']) || $levelData['1'] instanceof \think\Collection || $levelData['1'] instanceof \think\Paginator): $i = 0; $__LIST__ = $levelData['1'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;?>
            <option value="<?php echo htmlentities($option[$form['key']]); ?>" <?php if((isset($levelKey[2]) && $levelKey[2] == (string)$option[$form['key']])): ?>selected<?php endif; ?>><?php echo $option[$form['option']]; ?></option>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            <?php endif; ?>
        </select>
        <select class="form-control" id="<?php echo htmlentities($form['name']); ?>_3" name="<?php echo htmlentities($form['name']); ?>" data-placeholder="<?php echo htmlentities($form['placeholder']); ?>" <?php echo htmlentities((isset($form['extra_attr']) && ($form['extra_attr'] !== '')?$form['extra_attr']:'')); ?> style="width: auto; display: inline-block">
            <option value=""><?php echo htmlentities($form['placeholder']); ?></option>
            <?php if(!(empty($levelData['2']) || (($levelData['2'] instanceof \think\Collection || $levelData['2'] instanceof \think\Paginator ) && $levelData['2']->isEmpty()))): if(is_array($levelData['2']) || $levelData['2'] instanceof \think\Collection || $levelData['2'] instanceof \think\Paginator): $i = 0; $__LIST__ = $levelData['2'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;?>
            <option value="<?php echo htmlentities($option[$form['key']]); ?>" <?php if(($form['value'] == (string)$option[$form['key']])): ?>selected<?php endif; ?>><?php echo $option[$form['option']]; ?></option>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            <?php endif; ?>
        </select>
        <?php endif; ?>
    </div>
    <?php if(!(empty($form['tips']) || (($form['tips'] instanceof \think\Collection || $form['tips'] instanceof \think\Paginator ) && $form['tips']->isEmpty()))): ?>
    <div class="col-12 offset-sm-2 offset-md-2 offset-lg-0 offset-xl-0 col-sm-10 col-md-10 col-lg-2 col-xl-4 dd_ts">
        <small class="text-muted">
            <i class="fa fa-info-circle"></i> <?php echo $form['tips']; ?>
        </small>
    </div>
    <?php endif; ?>
</div>
                        <?php break; default: ?>

                    <?php endswitch; ?>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                    <!---->
                    <div class="row dd_input_group form-builder-submit no-gutters">
                        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-11 offset-sm-2 offset-md-2 offset-lg-2 offset-xl-1">
                            <?php if(isset($btn_hide) && !in_array('submit', $btn_hide)): ?>
                            <button type="submit" class="btn btn-flat btn-primary <?php if($layer == true): ?>hide<?php endif; ?>"><?php echo htmlentities((isset($btn_title['submit']) && ($btn_title['submit'] !== '')?$btn_title['submit']:'提 交')); ?></button>
                            <?php endif; if(isset($btn_hide) && !in_array('back', $btn_hide)): ?>
                            <button type="button" class="btn btn-flat btn-default <?php if($layer == true): ?>hide<?php endif; ?>" onclick="javascript :history.back(-1)"><?php echo htmlentities((isset($btn_title['back']) && ($btn_title['back'] !== '')?$btn_title['back']:'返 回')); ?></button>
                            <?php endif; foreach($btn_extra as $key=>$vo): ?>
                            <?php echo (isset($vo) && ($vo !== '')?$vo:''); ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <!-- /.box -->
                <?php else: ?>
                    <div class="box box-body">
                        <?php echo $empty_tips; ?>
                    </div>
                    <!-- /.box -->
                <?php endif; ?>
            </form>
            <!--底部提示-->
            <?php if(!(empty($page_tips_bottom) || (($page_tips_bottom instanceof \think\Collection || $page_tips_bottom instanceof \think\Paginator ) && $page_tips_bottom->isEmpty()))): ?>
            <div class="col-12 alert alert-<?php echo htmlentities($tips_type); ?> alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <p><?php echo $page_tips_bottom; ?></p>
            </div>
            <?php endif; ?>
            
            <?php echo (isset($extra_html_content_bottom) && ($extra_html_content_bottom !== '')?$extra_html_content_bottom:''); ?>
            
            <?php echo (isset($extra_js) && ($extra_js !== '')?$extra_js:''); ?>
			
	<script>
	
	
	
	
	
	
	// ZTX-002折腾侠：增加从服务器上删除对应文件的操作	
	$(document).on('click', '.remove_images', function () {
var file = $(this).parent().parent().parent().find("input[name='images[]']").val();
var file_type='image';
if(typeof file == "undefined" ){
file = $(this).parent().parent().parent().find("input[name='files_test[]']").val();
file_type='file';
}
var remove = $(this).parent().parent().parent();
	layer.confirm("是否删除原文件",{
	icon: 3,
    title: "系统提示",
    btn: ['是', '否']
	}, function (index) {
	//第一个按钮运行的函数，传递index（当前层）参数
		// 删除服务器上的文件
		if (file=='') {
				remove.remove();
            }
			else{
			 $.ajax({
                    type: "POST",
                    url: "/admin/Index/file_del",
                    data:{file:file,file_type:file_type},
                    dataType: "json",
                    success: function(data){
					 switch (data) {
                    case ("1"):
                       console.log('删除成功');
					   remove.remove();
                        break;
                    case ("0"):
                        console.log('文件不存在');
						remove.remove();
                        break;
                    case ("2"):
                      console.log('删除失败');
                        break;
						default:
						console.log('删除失败,原因不明');
                        break;
								 }}
                    });
			}
	layer.close(index);
	}, function(){
	//第二个按钮运行的函数
		// 仅删除标签
		remove.remove();
	});// 折腾侠：增加从服务器上删除对应文件的操作
  // ZTX-002折腾侠：增加从服务器上删除对应文件的操作	
})

// ZTX-选择图标
$( function() {

    if($('[icon]').length >0 ){
        $( '[icon]' ).autocomplete({
	
    source:function(request, response){
     $.ajax({
                  type: "POST",
                  url: "/admin/Index/autocomplete_icon",
                  data:{key:request.term},
                  dataType: "json",
                  success: function(data){
                  
                      response(data);
                  }
              });
    },
    select: function (event, ui) {    // 下拉框选中事件
          
        $(this).val( ui.item.code);
        return false;
      }
  }).autocomplete( "instance" )._renderItem = function( ul, item ) {
                  return $( "<li>" )
                      .append( '<div class="mb-2"> <i class="'+item.code+'"></i> <span class="align-middle">'+item.code+'  '+item.name+'</span> </div>')
                      .appendTo( ul );
                      };

    }
//ZTX-005从站内选择图片
if($( '[name="site_img_choose"]' ).length >0 ){


    $( '[name="site_img_choose"]' ).autocomplete({
	
      source:function(request, response){
	   $.ajax({
                    type: "POST",
                    url: "/admin/Index/autocomplete_file",
                    data:{where:[['link','like','%'+request.term+'%'],['file_type','like','%img%']]},
                    dataType: "json",
                    success: function(data){
					
                        response(data);
                    }
                });
	  },
	  select: function (event, ui) {    // 下拉框选中事件
            
		 var images = '' +
                    '<div class="row no-gutters">' +
                    '   <div class="col-4 col-sm-4"><input type="text" name="images[]" value="' + ui.item.link + '" class="form-control"/></div>' +
                    '   <div class="col-3 col-sm-3"><input class="form-control input-sm" type="text" name="images_title[]" value="' + ui.item.name + '" ></div>' +
                    '   <div class="col-4 col-sm-3">' +
                    '       <div class="btn-group">' +
                    '           <button type="button" class="btn btn-default btn-sm move_up_images"><i class="fa fa-chevron-up"></i></button>' +
                    '           <button type="button" class="btn btn-default btn-sm move_down_images"><i class="fa fa-chevron-down"></i></button>' +
                    '           <button type="button" class="btn btn-default btn-sm remove_images"><i class="fa fa-times"></i></button>' +
                    '       </div>' +
                    '   </div>' +
					'   <div class="col-4 col-sm-2"><a href="'+ ui.item.link +'" target="_blank"> <img class="images_preview_info" src="'+ ui.item.link +'"  ></a></div>'+
					
					
                    '</div>';
                var images_list = $('#more_images_images').html();

                $('#more_images_images').html(images + images_list);
            return false;
        }
    }).autocomplete( "instance" )._renderItem = function( ul, item ) {
                    return $( "<li>" )
                        .append( '<div><img  width="100" height="100" src="'+item.link+'"><a>' + item.name + '</a></div>')
                        .appendTo( ul );
						};}
						
						//站内文件选择
	if($( '[name="site_file_choose"]' ).length >0 ){
	 $( '[name="site_file_choose"]' ).autocomplete({
	
      source:function(request, response){
	   $.ajax({
                    type: "POST",
                    url: "/admin/Index/autocomplete_file",
                    data:{where:[['link','like','%'+request.term+'%'],['file_type','like','%file%']]},
                    dataType: "json",
                    success: function(data){
					
                        response(data);
                    }
                });
	  },
	  select: function (event, ui) {    // 下拉框选中事件
            
		 var images = '' +
                    '<div class="row no-gutters">' +
                    '   <div class="col-4 col-sm-6"><input type="text" name="images[]" value="' + ui.item.link + '" class="form-control"/></div>' +
                    '   <div class="col-3 col-sm-3"><input class="form-control input-sm" type="text" name="images_title[]" value="' + ui.item.name + '" ></div>' +
                    '   <div class="col-4 col-sm-3">' +
                    '       <div class="btn-group">' +
                    '           <button type="button" class="btn btn-default btn-sm move_up_images"><i class="fa fa-chevron-up"></i></button>' +
                    '           <button type="button" class="btn btn-default btn-sm move_down_images"><i class="fa fa-chevron-down"></i></button>' +
                    '           <button type="button" class="btn btn-default btn-sm remove_images"><i class="fa fa-times"></i></button>' +
                    '       </div>' +
                    '   </div>' +
					
					
					
                    '</div>';
                var images_list = $('#more_images_files_test').html();

                $('#more_images_files_test').html(images + images_list);
            return false;
        }
    }).autocomplete( "instance" )._renderItem = function( ul, item ) {
                    return $( "<li>" )
                        .append( '<div>' + item.name + '</a></div>')
                        .appendTo( ul );
						}
  } });
  
  
  </script>
			
			
        </div>
    </div>
</div>

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



