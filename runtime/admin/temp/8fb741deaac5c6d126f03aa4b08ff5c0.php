<?php /*a:1:{s:45:"F:\www\haoqi\view\admin\info\images_info.html";i:1648724496;}*/ ?>

<!DOCTYPE html>
<!-- saved from url=(0032)https://demo.daimabiji.com/3795/ -->
<html lang="zh"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php if(isset($title)): ?><?php echo htmlentities($title); ?><?php endif; ?></title>
	<link href="/static/plugins/image_info/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="/static/plugins/image_info/baguetteBox.min.css">
	<link rel="stylesheet" href="/static/plugins/image_info/gallery-clean.css">
</head>
<body>
	<div class="container">
        <!-- saved from url=(0032)https://demo.daimabiji.com/3795/
		<header class="header">
			 
			<div class="demo center">
			  <a href="https://demo.daimabiji.com/3795/index.html" class="current">Clean Layout</a>
			  <a href="https://demo.daimabiji.com/3795/index2.html">Fluid Layout</a>
			  <a href="https://demo.daimabiji.com/3795/index3.html">Grid Layout</a>
			  <a href="https://demo.daimabiji.com/3795/index4.html">Thumbnails</a>
			</div>
		</header>
        -->
		<div class="container gallery-container">

		    <h1><?php if(isset($title)): ?><?php echo htmlentities($title); ?><?php endif; ?></h1>

		    <p class="page-description text-center">相关档案资料</p>
		    
		    <div class="tz-gallery">

		        <div class="row">
                    <?php if(isset($photos)): foreach($photos as $key=>$vo): ?>
		            <div class="col-sm-6 col-md-4">
		                <div class="thumbnail">
		                    <a class="lightbox" href="<?php echo htmlentities($vo['image']); ?>">
		                        <img src="<?php echo htmlentities($vo['image']); ?>" alt="Park">
		                    </a>
		                    <div class="caption">
		                        <h3><?php echo htmlentities($vo['title']); ?></h3>

		                    </div>
		                </div>
		            </div>
                    <?php endforeach; ?>
                    <?php endif; if(isset($files)): foreach($files as $key=>$vo): ?>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">

                            <div class="caption">
                                <iframe
                                        :src="//www.xdocin.com/xdoc?_func=to&_format=html&_cache=1&_xdoc=<?php echo htmlentities($vo['image']); ?>"
                                        width="100%"
                                        height="100%"
                                        frameborder="0">
                                </iframe>
                                <h3><a href="<?php echo htmlentities($vo['image']); ?>" target="_blank"><?php echo htmlentities($vo['title']); ?>：下载

                                </a></h3>

                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    <?php endif; ?>

		        </div>

		    </div>

		</div>
		 
	</div>
	
	<script type="text/javascript" src="/static/plugins/image_info/baguetteBox.min.js"></script>
	<script type="text/javascript">
		baguetteBox.run('.tz-gallery');
	</script>
	<div role="dialog" id="baguetteBox-overlay">
		<div id="baguetteBox-slider">
		</div>
			<button type="button" id="previous-button" aria-label="Previous" class="baguetteBox-button">
				<svg width="44" height="60"><polyline points="30 10 10 30 30 50" stroke="rgba(255,255,255,0.5)" stroke-width="4" stroke-linecap="butt" fill="none" stroke-linejoin="round"></polyline></svg>
			</button>
			<button type="button" id="next-button" aria-label="Next" class="baguetteBox-button">
				<svg width="44" height="60"><polyline points="14 10 34 30 14 50" stroke="rgba(255,255,255,0.5)" stroke-width="4" stroke-linecap="butt" fill="none" stroke-linejoin="round"></polyline></svg>
			</button>
			<button type="button" id="close-button" aria-label="Close" class="baguetteBox-button">
				<svg width="30" height="30"><g stroke="rgb(160,160,160)" stroke-width="4"><line x1="5" y1="5" x2="25" y2="25"></line><line x1="5" y1="25" x2="25" y2="5"></line></g></svg>
			</button>
	</div>

<!-- <div class="xl-chrome-ext-bar" id="xl_chrome_ext_{4DB361DE-01F7-4376-B494-639E489D19ED}" style="display: none;"> -->
      <!-- <div class="xl-chrome-ext-bar__logo"></div> -->

      <!-- <a id="xl_chrome_ext_download" href="javascript:;" class="xl-chrome-ext-bar__option">下载视频</a> -->
      <!-- <a id="xl_chrome_ext_close" href="javascript:;" class="xl-chrome-ext-bar__close"></a> -->
    </div></body></html>