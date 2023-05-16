<?php /*a:8:{s:64:"F:\site\ztx\public\template\default\index\html\article_show.html";i:1648179448;s:62:"F:\site\ztx\public\template\default\index\html\common_css.html";i:1642750854;s:65:"F:\site\ztx\public\template\default\index\html\common_header.html";i:1648430456;s:65:"F:\site\ztx\public\template\default\index\html\common_banner.html";i:1642750854;s:62:"F:\site\ztx\public\template\default\index\html\common_nav.html";i:1642750854;s:62:"F:\site\ztx\public\template\default\index\html\common_hot.html";i:1642750854;s:65:"F:\site\ztx\public\template\default\index\html\common_footer.html";i:1642750854;s:61:"F:\site\ztx\public\template\default\index\html\common_js.html";i:1642750854;}*/ ?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <title><?php echo htmlentities($info['title']); ?>-<?php echo htmlentities($title); ?>_<?php echo htmlentities($system['name']); ?></title>
    <meta name="keywords" content="<?php echo htmlentities($keywords); ?>"/>
    <meta name="description" content="<?php echo htmlentities($description); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0"/>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo htmlentities($system['label_logo']); ?>"/>
      <!-- Google Fonts
		============================================ --> 
  <!--<link href="https://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,800" rel="stylesheet" type="text/css" /> -->
  <!-- Bootstrap CSS
		============================================ --> 
  <link rel="stylesheet" href="<?php echo htmlentities($public); ?>css/bootstrap.min.css" /> 
  <!-- Color Swithcer CSS
		============================================ --> 
  <link rel="stylesheet" href="<?php echo htmlentities($public); ?>css/color-switcher.css" /> 
  <!-- Fontawsome CSS
		============================================ --> 
  <link rel="stylesheet" href="<?php echo htmlentities($public); ?>css/font-awesome.min.css" /> 
  <!-- Owl Carousel CSS
		============================================ --> 
  <link rel="stylesheet" href="<?php echo htmlentities($public); ?>css/owl.carousel.css" /> 
  <!-- jquery-ui CSS
		============================================ --> 
  <link rel="stylesheet" href="<?php echo htmlentities($public); ?>css/jquery-ui.css" /> 
  <!-- Meanmenu CSS
		============================================ --> 
  <link rel="stylesheet" href="<?php echo htmlentities($public); ?>css/meanmenu.min.css" /> 
  <!-- Animate CSS
		============================================ --> 
  <link rel="stylesheet" href="<?php echo htmlentities($public); ?>css/animate.css" /> 
  <!-- Animated Headlines CSS
		============================================ --> 
  <link rel="stylesheet" href="<?php echo htmlentities($public); ?>css/animated-headlines.css" /> 
  <!-- Nivo slider CSS
		============================================ --> 
  <link rel="stylesheet" href="<?php echo htmlentities($public); ?>lib/nivo-slider/css/nivo-slider.css" type="text/css" /> 
  <link rel="stylesheet" href="<?php echo htmlentities($public); ?>lib/nivo-slider/css/preview.css" type="text/css" media="screen" /> 
  <!-- Metarial Iconic Font CSS
		============================================ --> 
  <link rel="stylesheet" href="<?php echo htmlentities($public); ?>css/material-design-iconic-font.css" /> 
  <link rel="stylesheet" href="<?php echo htmlentities($public); ?>css/material-design-iconic-font.min.css" /> 
  <!-- Slick CSS
		============================================ --> 
  <link rel="stylesheet" href="<?php echo htmlentities($public); ?>css/slick.css" /> 
  <!-- Video CSS
		============================================ --> 
  <link rel="stylesheet" href="<?php echo htmlentities($public); ?>css/jquery.mb.YTPlayer.css" /> 
  <!-- Style CSS
		============================================ --> 
  <link rel="stylesheet" href="<?php echo htmlentities($public); ?>style.css" /> 
  <!-- Color CSS
		============================================ --> 
  <link rel="stylesheet" href="<?php echo htmlentities($public); ?>css/color.css" /> 
  <!-- Responsive CSS
		============================================ --> 
  <link rel="stylesheet" href="<?php echo htmlentities($public); ?>css/responsive.css" /> 
  <!-- Modernizr JS
		============================================ --> 
  <script src="<?php echo htmlentities($public); ?>js/vendor/modernizr-2.8.3.min.js"></script> 
  <!-- Color Css Files
		============================================ --> 
  <link rel="alternate stylesheet" type="text/css" href="<?php echo htmlentities($public); ?>switcher/color-one.css" title="color-one" media="screen" /> 
  <link rel="alternate stylesheet" type="text/css" href="<?php echo htmlentities($public); ?>switcher/color-two.css" title="color-two" media="screen" /> 
  <link rel="alternate stylesheet" type="text/css" href="<?php echo htmlentities($public); ?>switcher/color-three.css" title="color-three" media="screen" /> 
  <link rel="alternate stylesheet" type="text/css" href="<?php echo htmlentities($public); ?>switcher/color-four.css" title="color-four" media="screen" /> 
  <link rel="alternate stylesheet" type="text/css" href="<?php echo htmlentities($public); ?>switcher/color-five.css" title="color-five" media="screen" /> 
  <link rel="alternate stylesheet" type="text/css" href="<?php echo htmlentities($public); ?>switcher/color-six.css" title="color-six" media="screen" /> 
  <link rel="alternate stylesheet" type="text/css" href="<?php echo htmlentities($public); ?>switcher/color-seven.css" title="color-seven" media="screen" /> 
  <link rel="alternate stylesheet" type="text/css" href="<?php echo htmlentities($public); ?>switcher/color-eight.css" title="color-eight" media="screen" /> 
  <link rel="alternate stylesheet" type="text/css" href="<?php echo htmlentities($public); ?>switcher/color-nine.css" title="color-nine" media="screen" /> 
  <link rel="alternate stylesheet" type="text/css" href="<?php echo htmlentities($public); ?>switcher/color-ten.css" title="color-ten" media="screen" /> 
  <link rel="alternate stylesheet" type="text/css" href="<?php echo htmlentities($public); ?>switcher/color-ten.css" title="color-ten" media="screen" /> 
  <link rel="alternate stylesheet" type="text/css" href="<?php echo htmlentities($public); ?>switcher/pattren1.css" title="pattren1" media="screen" /> 
  <link rel="alternate stylesheet" type="text/css" href="<?php echo htmlentities($public); ?>switcher/pattren2.css" title="pattren2" media="screen" /> 
  <link rel="alternate stylesheet" type="text/css" href="<?php echo htmlentities($public); ?>switcher/pattren3.css" title="pattren3" media="screen" /> 
  <link rel="alternate stylesheet" type="text/css" href="<?php echo htmlentities($public); ?>switcher/pattren4.css" title="pattren4" media="screen" /> 
  <link rel="alternate stylesheet" type="text/css" href="<?php echo htmlentities($public); ?>switcher/pattren5.css" title="pattren5" media="screen" /> 
  <link rel="alternate stylesheet" type="text/css" href="<?php echo htmlentities($public); ?>switcher/background1.css" title="background1" media="screen" /> 
  <link rel="alternate stylesheet" type="text/css" href="<?php echo htmlentities($public); ?>switcher/background2.css" title="background2" media="screen" /> 
  <link rel="alternate stylesheet" type="text/css" href="<?php echo htmlentities($public); ?>switcher/background3.css" title="background3" media="screen" /> 
  <link rel="alternate stylesheet" type="text/css" href="<?php echo htmlentities($public); ?>switcher/background4.css" title="background4" media="screen" /> 
  <link rel="alternate stylesheet" type="text/css" href="<?php echo htmlentities($public); ?>switcher/background5.css" title="background5" media="screen" /> 
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->
<!--Main Wrapper Start-->
<div class="as-mainwrapper">
    <!--Bg White Start-->
    <div class="bg-white">
        <!--Header Area Start-->
            <header class="header-two"> 
     <div class="header-top"> 
      <div class="container"> 
       <div class="row"> 
        <div class="col-lg-6 col-md-6 col-sm-5 hidden-xs">
         <span>24小时客户服务热线：<?php echo htmlentities($system['tel']); ?></span> 
        </div> 
        <div class="col-lg-6 col-md-6 col-sm-7 col-xs-12">
         <div class="header-top-right"> 
          <span>Phone: <?php echo htmlentities($system['mobile_phone']); ?></span> 
          <span>Email: <?php echo htmlentities($system['email']); ?></span>
          <span class="login">
              <i class="zmdi zmdi-account"></i>
              <a href="<?php echo url('user/index'); ?>"><?php echo htmlentities((app('request')->session('user.email') ?: "用户中心")); ?></a>
          </span>
         </div> 
        </div> 
       </div> 
      </div> 
     </div> 
     <div class="header-logo-menu sticker"> 
      <div class="container"> 
       <div class="row"> 
        <div class="col-md-4 col-sm-12"> 
         <div class="logo"> 
          <a href="/"><img src="<?php echo htmlentities($system['logo']); ?>" alt="<?php echo htmlentities($system['name']); ?>" /></a> 
         </div> 
        </div> 
        <div class="col-md-8"> 
         <div class="mainmenu-area pull-right"> 
          <div class="mainmenu hidden-sm hidden-xs"> 
           <nav> 
            <ul id="nav"> 
             <li <?php if(empty($cate['topid'])): ?>class="current"<?php endif; ?>><a href="/">首 页</a></li> 
             <?php $__CATE__ = \app\common\model\Cate::with(['module'])->where('is_menu',1)->order('sort ASC,id DESC')->select();$__LIST__ = unlimitedForLayer($__CATE__, 'sub', 0);$__LIST__ = array_slice($__LIST__, 0,10); if(is_array($__LIST__) || $__LIST__ instanceof \think\Collection || $__LIST__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__LIST__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i;?>
             <li <?php if($nav['id'] == $cate['topid']): ?>class="current"<?php endif; ?>><a data-id="nav_key_<?php echo htmlentities($key); ?>" href="<?php echo htmlentities($nav['url']); ?>"><?php echo htmlentities($nav['cate_name']); ?></a>
             	 <?php if($nav['sub']): ?>
             	 <ul class="sub-menu"> 
                   <?php if(is_array($nav['sub']) || $nav['sub'] instanceof \think\Collection || $nav['sub'] instanceof \think\Paginator): $i = 0; $__LIST__ = $nav['sub'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                   <li><a data-id="nav_sub_key_<?php echo htmlentities($key); ?>" href="<?php echo htmlentities($v['url']); ?>"><?php echo htmlentities($v['cate_name']); ?></a></li>
                   <?php endforeach; endif; else: echo "" ;endif; ?>
                 </ul>
                 <?php endif; ?>
             </li> 
             <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul> 
           </nav> 
          </div> 
          <ul class="header-search"> 
           <li class="search-menu"> <i id="toggle-search" class="zmdi zmdi-search-for"></i> </li> 
          </ul> 
          <!--Search Form--> 
          <div class="search"> 
           <div class="search-form"> 
            <form id="search-form" method="get" action="<?php echo url('index/search'); ?>"> 
             <input type="search" placeholder="Search here..." name="search" /> 
             <button type="submit"> <span><i class="fa fa-search"></i></span> </button> 
            </form> 
           </div> 
          </div> 
          <!--End of Search Form--> 
         </div> 
        </div> 
       </div> 
      </div> 
     </div> 
     <!-- Mobile Menu Area start --> 
     <div class="mobile-menu-area"> 
      <div class="container"> 
       <div class="row"> 
        <div class="col-lg-12 col-md-12 col-sm-12"> 
         <div class="mobile-menu"> 
          <nav id="dropdown"> 
           <ul> 
            <li class="current"><a href="/">首 页</a></li> 
             <?php $__CATE__ = \app\common\model\Cate::with(['module'])->where('is_menu',1)->order('sort ASC,id DESC')->select();$__LIST__ = unlimitedForLayer($__CATE__, 'sub', 0);$__LIST__ = array_slice($__LIST__, 0,10); if(is_array($__LIST__) || $__LIST__ instanceof \think\Collection || $__LIST__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__LIST__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i;?>
             <li><a href="<?php echo htmlentities($nav['url']); ?>"><?php echo htmlentities($nav['cate_name']); ?></a>
             	 <?php if($nav['sub']): ?>
             	 <ul class="sub-menu"> 
                   <?php if(is_array($nav['sub']) || $nav['sub'] instanceof \think\Collection || $nav['sub'] instanceof \think\Paginator): $i = 0; $__LIST__ = $nav['sub'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                   <li><a href="<?php echo htmlentities($v['url']); ?>"><?php echo htmlentities($v['cate_name']); ?></a></li>
                   <?php endforeach; endif; else: echo "" ;endif; ?>
                 </ul>
                 <?php endif; ?>
             </li> 
             <?php endforeach; endif; else: echo "" ;endif; ?>
           </ul> 
          </nav> 
         </div> 
        </div> 
       </div> 
      </div> 
     </div> 
     <!-- Mobile Menu Area end --> 
    </header>
        <!--End of Header Area-->
        <!--Breadcrumb Banner Area Start-->
        <div class="breadcrumb-banner-area" style="background:url('<?php $__CATE__ = \app\common\model\Cate::with(['module'])->where("id",$cate['topid'])->find();if ($__CATE__) { $__CATE__->url = getUrl($__CATE__->toArray());
            if (!empty('')) {
              $__CATE__->url = $__CATE__->url . '';
            }echo $__CATE__['image'];}?>') no-repeat scroll 0 0">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-text">
                    <h1 class="text-center"><?php $__CATE__ = \app\common\model\Cate::with(['module'])->where("id",$cate['topid'])->find();if ($__CATE__) { $__CATE__->url = getUrl($__CATE__->toArray());
            if (!empty('')) {
              $__CATE__->url = $__CATE__->url . '';
            }echo $__CATE__['en_name'];}?></h1>
                    <div class="breadcrumb-bar">
                        <ul class="breadcrumb text-center">
                            <li><a href="/">首页</a></li>
                            <!--<li><?php $__CATE__ = \app\common\model\Cate::with(['module'])->where("id",5)->find();if ($__CATE__) { $__CATE__->url = getUrl($__CATE__->toArray());
            if (!empty('')) {
              $__CATE__->url = $__CATE__->url . '';
            }echo $__CATE__['cate_name'];}?></li>-->
                            <?php $__CATE__   = \app\common\model\Cate::with(['module'])->select();$__CATEID__ = getCateId();$__LIST__   = getParents($__CATE__,$__CATEID__); if(is_array($__LIST__) || $__LIST__ instanceof \think\Collection || $__LIST__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__LIST__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;$v['url']=getUrl( $v); ?>
                            <li><a href="<?php echo htmlentities($v['url']); ?>"><?php echo htmlentities($v['cate_name']); ?></a></li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        <!--End of Breadcrumb Banner Area-->
        <!--Little Nav Start-->
        	<div class="little-nav">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul>
                    	<?php $__CATE__ = \app\common\model\Cate::with(['module'])->where('is_menu',1)->order('sort ASC,id DESC')->select();$__LIST__ = unlimitedForLayer($__CATE__, 'sub', $cate['topid']); if(is_array($__LIST__) || $__LIST__ instanceof \think\Collection || $__LIST__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__LIST__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i;?>
                        <li><a <?php if($cate['id'] == $nav['id']): ?>class="active"<?php endif; ?> href="<?php echo htmlentities($nav['url']); ?>"><?php echo htmlentities($nav['cate_name']); ?></a></li>
						<?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
        <!--End of Little Nav-->
        <!--News Detail Start-->
        <div class="news-details-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-8">
                        <div class="news-details-content">
                            <div class="single-latest-item">
                                <!--<img src="img/details/2.jpg" alt="">-->
                                <div class="single-latest-text">
                                    <h3><?php echo htmlentities($info['title']); ?></h3>
                                    <div class="single-item-comment-view">
                                        <span><i class="zmdi zmdi-calendar-check"></i><?php echo htmlentities(date("Y-m-d H:i:s",!is_numeric($info['create_time'])? strtotime($info['create_time']) : $info['create_time'])); ?></span>
                                        <span><i class="zmdi zmdi-eye"></i><?php echo htmlentities($info['hits']); ?></span>
                                        <span><i class="zmdi zmdi-pin-account"></i><?php echo htmlentities($info['author']); ?></span>
                                        <span>
                                        	<i class="zmdi zmdi-label"></i>
                                            <?php if($info['tags']): foreach($info['tags'] as $key=>$vo): ?>
                                                <a href="<?php echo htmlentities($vo['url']); ?>" target="_blank"><?php echo htmlentities($vo['name']); ?></a>
                                                <?php endforeach; ?>
                                            <?php endif; ?>    
                                        </span>
                                    </div>
                                    <?php echo $info['content']; ?>
                                    <div class="tags-and-links">
                                        <div class="related-tag">
                                            <span>上一篇:</span>
                                            <?php 
                $__CATEID__ = getCateId();
                $__CATE__   = \app\common\model\Cate::find($__CATEID__);
                $__MODEL__  = '\app\common\model\\' . $__CATE__->module->getData('model_name');
                $__PREV__   = $__MODEL__::where('cate_id',$__CATEID__)
                    ->where('id','<',input('id'))
                    ->where('status','=',1)
                    ->field('id,cate_id,title')
                    ->order('sort ASC,id DESC')
                    ->find();
                if($__PREV__){
                    // 处理字数
                    if(10<>500){
                       $__PREV__['title'] = mb_substr($__PREV__['title'],0,10);
                    }
                    // 处理上一篇中的URL
                    $__PREV__['url'] = getShowUrl($__PREV__);
                    $__PREV__ = "<a class=\"prev\" title=\" ".$__PREV__['title']." \" href=\" ".$__PREV__['url']." \">".$__PREV__['title']."</a>";
                }else{
                    $__PREV__ = "<a class=\"prev_no\" href=\"javascript:;\">暂无数据</a>";
                }
                echo $__PREV__;
                ?>
                                        </div>
                                        <div class="related-tag floatright">
                                            <span>下一篇:</span>
                                            <?php 
                $__CATEID__ = getCateId();
                $__CATE__   = \app\common\model\Cate::find($__CATEID__);
                $__MODEL__  = '\app\common\model\\' . $__CATE__->module->getData('model_name');
                $__PREV__   = $__MODEL__::where('cate_id',$__CATEID__)
                    ->where('id','>',input('id'))
                    ->where('status','=',1)
                    ->field('id,cate_id,title')
                    ->order('id ASC')
                    ->find();
                if($__PREV__){
                    //处理字数
                    if(10<>500){
                       $__PREV__['title'] = mb_substr($__PREV__['title'],0,10);
                    }
                    //处理上一篇中的URL
                    $__PREV__['url'] = getShowUrl($__PREV__);
                    $__PREV__ = "<a class=\"prev\" title=\" ".$__PREV__['title']." \" href=\" ".$__PREV__['url']." \">".$__PREV__['title']."</a>";
                }else{
                    $__PREV__ = "<a class=\"prev_no\" href=\"javascript:;\">暂无数据</a>";
                }
                echo $__PREV__;
                ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        								<div class="sidebar-widget">
                                    <div class="single-sidebar-widget">
                                        <h4 class="title">最新文章</h4>
                                        <div class="recent-content">
                                        	<?php 
            $list       = [];
            $__CATEID__ = 4 ? 4 : getCateId();
            $__CATE__   = \app\common\model\Cate::with(['module'])->find($__CATEID__);
            $__SEARCH__ = getSearchField('');
            // 查询子分类,列表要包含子分类内容
            $__ALLCATE__ = \app\common\model\Cate::field('id,parent_id')->select()->toArray();
            $__IDS__ = getChildsIdStr(getChildsId($__ALLCATE__,$__CATEID__),$__CATEID__);
            // 表名称为空时（id不存在）直接返回空数组
            if ($__CATE__ && !empty($__CATE__->module->getData('table_name'))) {
                $__MODEL__ = '\app\common\model\\' . $__CATE__->module->getData('model_name');
                // 当传递limit时，不再进行分页
                if(5 != 0){
                    $__LIST__ = $__MODEL__::with(['cate','cate.module'])->where("image <> ''  AND status = 1 " . $__SEARCH__)
                        ->where('cate_id', 'in', $__IDS__)
                        ->field($__CATE__->module->getData('list_fields'))
                        ->order('id desc')
                        ->limit('5')
                        ->select();
                    $page = '';
                }else{
                    $__PAGESIZE__ = empty($__CATE__['page_size'])?10:$__CATE__->page_size;
                    $__LIST__ =  $__MODEL__::with(['cate','cate.module'])->where("image <> ''  AND status = 1 " . $__SEARCH__)
                        ->where('cate_id', 'in', $__IDS__)
                        ->field($__CATE__->module->getData('list_fields'))
                        ->order('id desc')
                        ->paginate([
                            'query'     => request()->param(),
                            'list_rows' => $__PAGESIZE__,
                        ], false);
                    $page = $__LIST__->render();
                }
                // 处理数据（把列表中需要处理的字段转换成数组和对应的值）
                $__LIST__ = changeFields($__LIST__, $__CATE__->module_id);
            }else{
                $__LIST__ = [];
            }
             if(is_array($__LIST__) || $__LIST__ instanceof \think\Collection || $__LIST__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__LIST__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>
                                            <div class="recent-content-item">
                                            	<?php if($list['image']): ?>
                                                <a href="<?php echo htmlentities($list['url']); ?>"><img src="<?php echo htmlentities($list['image']); ?>" style="height:67px; width:70px"></a>
                                                <?php endif; ?>
                                                <div class="recent-text">
                                                    <h4><a href="<?php echo htmlentities($list['url']); ?>"><?php echo htmlentities($list['title']); ?></a></h4>
                                                    <div class="single-item-comment-view">
                                                        <span><i class="zmdi zmdi-eye"></i><?php echo htmlentities($list['hits']); ?></span>
                                                        <span><i class="zmdi zmdi-calendar-check"></i><?php echo htmlentities(date("Y-m-d",!is_numeric($list['create_time'])? strtotime($list['create_time']) : $list['create_time'])); ?></span>
                                                    </div>
                                                    <p class="line_two"><?php echo htmlentities($list['summary']); ?></p>
                                                </div>
                                            </div>
                                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                        </div>
                                    </div>
                                    <div class="single-sidebar-widget comment">
                                        <h4 class="title">热门产品</h4>
                                        <div class="recent-content">
                                        	<?php 
            $list       = [];
            $__CATEID__ = 8 ? 8 : getCateId();
            $__CATE__   = \app\common\model\Cate::with(['module'])->find($__CATEID__);
            $__SEARCH__ = getSearchField('');
            // 查询子分类,列表要包含子分类内容
            $__ALLCATE__ = \app\common\model\Cate::field('id,parent_id')->select()->toArray();
            $__IDS__ = getChildsIdStr(getChildsId($__ALLCATE__,$__CATEID__),$__CATEID__);
            // 表名称为空时（id不存在）直接返回空数组
            if ($__CATE__ && !empty($__CATE__->module->getData('table_name'))) {
                $__MODEL__ = '\app\common\model\\' . $__CATE__->module->getData('model_name');
                // 当传递limit时，不再进行分页
                if(3 != 0){
                    $__LIST__ = $__MODEL__::with(['cate','cate.module'])->where(" status = 1 " . $__SEARCH__)
                        ->where('cate_id', 'in', $__IDS__)
                        ->field($__CATE__->module->getData('list_fields'))
                        ->order('hits desc')
                        ->limit('3')
                        ->select();
                    $page = '';
                }else{
                    $__PAGESIZE__ = empty($__CATE__['page_size'])?10:$__CATE__->page_size;
                    $__LIST__ =  $__MODEL__::with(['cate','cate.module'])->where(" status = 1 " . $__SEARCH__)
                        ->where('cate_id', 'in', $__IDS__)
                        ->field($__CATE__->module->getData('list_fields'))
                        ->order('hits desc')
                        ->paginate([
                            'query'     => request()->param(),
                            'list_rows' => $__PAGESIZE__,
                        ], false);
                    $page = $__LIST__->render();
                }
                // 处理数据（把列表中需要处理的字段转换成数组和对应的值）
                $__LIST__ = changeFields($__LIST__, $__CATE__->module_id);
            }else{
                $__LIST__ = [];
            }
             if(is_array($__LIST__) || $__LIST__ instanceof \think\Collection || $__LIST__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__LIST__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>
                                            <div class="recent-content-item">
                                                <a href="<?php echo htmlentities($list['url']); ?>"><img src="<?php echo htmlentities($list['image']); ?>" alt="<?php echo htmlentities($list['title']); ?>"></a>
                                                <div class="recent-text">
                                                    <h4><a href="<?php echo htmlentities($list['url']); ?>"><?php echo htmlentities($list['title']); ?></a></h4>
                                                    <p><?php echo htmlentities($list['summary']); ?></p>
                                                </div>
                                            </div>
                                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                            
                                        </div>
                                    </div>
                                </div>
                    </div>
                </div>
            </div>
        </div>
        <!--News Detail End-->
        
	<!--Footer Widget Area Start--> 
    <div class="footer-widget-area"> 
     <div class="container"> 
      <div class="row"> 
       <div class="col-md-3 col-sm-4"> 
        <div class="single-footer-widget"> 
         <div class="footer-logo"> 
          <a href="index.html"><img src="<?php echo htmlentities($public); ?>img/logo/footer.png" alt="" /></a> 
         </div> 
         <p><?php echo htmlentities($system['des']); ?></p> 
         <div class="social-icons"> 
          <a href="tencent://message/?uin=<?php echo htmlentities($system['qq']); ?>&Site=SuperNic&Menu=yes"><i class="fa fa-qq"></i></a> 
          <a href="https://gitee.com/ruoshuiyx/SYPHP"><i class="fa fa-git"></i></a> 
          <a href="mailto:<?php echo htmlentities($system['email']); ?>"><i class="zmdi zmdi-email"></i></a> 
         </div> 
        </div> 
       </div> 
       <div class="col-md-3 col-sm-4"> 
        <div class="single-footer-widget"> 
         <h3>联系我们</h3> 
         <a href="tel:<?php echo htmlentities($system['tel']); ?>"><i class="fa fa-phone"></i><?php echo htmlentities($system['tel']); ?></a> 
         <span><i class="fa fa-envelope"></i><?php echo htmlentities($system['email']); ?></span> 
         <span><i class="fa fa-globe"></i><?php echo htmlentities($system['url']); ?></span> 
         <span><i class="fa fa-map-marker"></i><?php echo htmlentities($system['address']); ?></span> 
        </div> 
       </div> 
       <div class="col-md-3 hidden-sm"> 
        <div class="single-footer-widget"> 
         <h3>友情链接</h3> 
         <ul class="footer-list"> 
          <?php $__LIST__ = \app\common\model\Link::where('status',1)->order('sort asc,id desc')->select(); if(is_array($__LIST__) || $__LIST__ instanceof \think\Collection || $__LIST__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__LIST__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$link): $mod = ($i % 2 );++$i;?>
          <li><a target="_blank" href="<?php echo htmlentities($link['url']); ?>"><?php echo htmlentities($link['name']); ?></a></li> 
          <?php endforeach; endif; else: echo "" ;endif; ?>
         </ul> 
        </div> 
       </div> 
       <div class="col-md-3 col-sm-4"> 
        <div class="single-footer-widget"> 
         <h3>加入我们</h3> 
         <div class="instagram-image"> 
          <div class="footer-img"> 
           <img src="<?php echo htmlentities($system['qrcode']); ?>" />
          </div> 
          
         </div> 
        </div> 
       </div> 
      </div> 
     </div> 
    </div> 
    <!--End of Footer Widget Area--> 
    <!--Footer Area Start--> 
    <footer class="footer-area"> 
     <div class="container"> 
      <div class="row"> 
       <div class="col-md-6 col-sm-7"> 
        <span><?php echo htmlentities($system['copyright']); ?></span> 
       </div> 
       <div class="col-md-6 col-sm-5"> 
        <div class="column-right"> 
         <span>备案号：<?php echo htmlentities($system['icp']); ?></span> 
        </div> 
       </div> 
      </div> 
     </div> 
    </footer> 
    <!--End of Footer Area--> 
    </div>
    <!--End of Bg White-->
</div>
<!--End of Main Wrapper Area-->
  <!-- Color Switcher --> 
  <div class="ec-colorswitcher"> 
   <a class="ec-handle" href="#"><i class="zmdi zmdi-settings"></i></a> 
   <h3>选择样式</h3> 
   <div class="ec-switcherarea"> 
    <h6>选择布局</h6> 
    <div class="layout-btn"> 
     <a href="#" class="ec-boxed"><span>盒子</span></a> 
     <a href="#" class="ec-wide"><span>全屏</span></a> 
    </div> 
    <h6>选择颜色</h6> 
    <ul class="ec-switcher"> 
     <li><a href="#" class="cs-color-1 styleswitch" data-rel="color-one"></a></li> 
     <li><a href="#" class="cs-color-2 styleswitch" data-rel="color-two"></a></li> 
     <li><a href="#" class="cs-color-3 styleswitch" data-rel="color-three"></a></li> 
     <li><a href="#" class="cs-color-4 styleswitch" data-rel="color-four"></a></li> 
     <li><a href="#" class="cs-color-5 styleswitch" data-rel="color-five"></a></li> 
     <li><a href="#" class="cs-color-6 styleswitch" data-rel="color-six"></a></li> 
     <li><a href="#" class="cs-color-7 styleswitch" data-rel="color-seven"></a></li> 
     <li><a href="#" class="cs-color-8 styleswitch" data-rel="color-eight"></a></li> 
     <li><a href="#" class="cs-color-9 styleswitch" data-rel="color-nine"></a></li> 
     <li><a href="#" class="cs-color-10 styleswitch" data-rel="color-ten"></a></li> 
    </ul> 
    <div class="ec-pattren"> 
     <h6>选择背景</h6> 
     <div class="pattren-wrap"> 
      <a href="#" data-rel="pattren1" class="styleswitch"><img src="<?php echo htmlentities($public); ?>img/ec-pattren/pattren1.jpg" alt="" /></a> 
      <a href="#" data-rel="pattren2" class="styleswitch"><img src="<?php echo htmlentities($public); ?>img/ec-pattren/pattren2.jpg" alt="" /></a> 
      <a href="#" data-rel="pattren3" class="styleswitch"><img src="<?php echo htmlentities($public); ?>img/ec-pattren/pattren3.jpg" alt="" /></a> 
      <a href="#" data-rel="pattren4" class="styleswitch"><img src="<?php echo htmlentities($public); ?>img/ec-pattren/pattren4.jpg" alt="" /></a> 
      <a href="#" data-rel="pattren5" class="styleswitch"><img src="<?php echo htmlentities($public); ?>img/ec-pattren/pattren5.jpg" alt="" /></a> 
     </div> 
    </div> 
    <div class="ec-background"> 
     <h6>选择背景</h6> 
     <div class="background-wrap"> 
      <a href="#" data-rel="background1" class="styleswitch"><img src="<?php echo htmlentities($public); ?>img/ec-background/bg-1.jpg" alt="" /></a> 
      <a href="#" data-rel="background2" class="styleswitch"><img src="<?php echo htmlentities($public); ?>img/ec-background/bg-2.jpg" alt="" /></a> 
      <a href="#" data-rel="background3" class="styleswitch"><img src="<?php echo htmlentities($public); ?>img/ec-background/bg-3.jpg" alt="" /></a> 
      <a href="#" data-rel="background4" class="styleswitch"><img src="<?php echo htmlentities($public); ?>img/ec-background/bg-4.jpg" alt="" /></a> 
      <a href="#" data-rel="background5" class="styleswitch"><img src="<?php echo htmlentities($public); ?>img/ec-background/bg-5.jpg" alt="" /></a> 
     </div> 
    </div> 
   </div> 
  </div> 
  <!-- Color Switcher end --> 
  <!-- jquery
		============================================ --> 
  <script src="<?php echo htmlentities($public); ?>js/vendor/jquery-1.12.4.min.js"></script> 
  <!-- bootstrap JS
		============================================ --> 
  <script src="<?php echo htmlentities($public); ?>js/bootstrap.min.js"></script> 
  <!-- nivo slider js
		============================================ --> 
  <script src="<?php echo htmlentities($public); ?>lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script> 
  <script src="<?php echo htmlentities($public); ?>lib/nivo-slider/home.js" type="text/javascript"></script> 
  <!-- meanmenu JS
		============================================ --> 
  <script src="<?php echo htmlentities($public); ?>js/jquery.meanmenu.js"></script> 
  <!-- wow JS
		============================================ --> 
  <script src="<?php echo htmlentities($public); ?>js/wow.min.js"></script> 
  <!-- owl.carousel JS
		============================================ --> 
  <script src="<?php echo htmlentities($public); ?>js/owl.carousel.min.js"></script> 
  <!-- scrollUp JS
		============================================ --> 
  <script src="<?php echo htmlentities($public); ?>js/jquery.scrollUp.min.js"></script> 
  <!-- Waypoints JS
		============================================ --> 
  <script src="<?php echo htmlentities($public); ?>js/waypoints.min.js"></script> 
  <!-- Counterup JS
		============================================ --> 
  <script src="<?php echo htmlentities($public); ?>js/jquery.counterup.min.js"></script> 
  <!-- Slick JS
		============================================ --> 
  <script src="<?php echo htmlentities($public); ?>js/slick.min.js"></script> 
  <!-- Animated Headlines JS
		============================================ --> 
  <script src="<?php echo htmlentities($public); ?>js/animated-headlines.js"></script> 
  <!-- Textilate JS
		============================================ --> 
  <script src="<?php echo htmlentities($public); ?>js/textilate.js"></script> 
  <!-- Lettering JS
		============================================ --> 
  <script src="<?php echo htmlentities($public); ?>js/lettering.js"></script> 
  <!-- Video Player JS
		============================================ --> 
  <script src="<?php echo htmlentities($public); ?>js/jquery.mb.YTPlayer.js"></script> 
  <!-- plugins JS
		============================================ --> 
  <script src="<?php echo htmlentities($public); ?>js/plugins.js"></script> 
  <!-- StyleSwitch JS
		============================================ --> 
  <script src="<?php echo htmlentities($public); ?>js/styleswitch.js"></script> 
  <!-- main JS
		============================================ --> 
  <script src="<?php echo htmlentities($public); ?>js/main.js"></script>  
</body>
</html>