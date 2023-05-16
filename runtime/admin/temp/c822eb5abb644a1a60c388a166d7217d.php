<?php /*a:1:{s:46:"F:\site\haoqi\view\admin\info\images_info.html";i:1660833747;}*/ ?>

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
		                        <img src="<?php echo !empty($vo['small']) ? htmlentities($vo['small']) : htmlentities($vo['image']); ?>" alt="Park">
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
	<script src="/static/plugins/AdminLTE/plugins/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="/static/plugins/image_info/baguetteBox.min.js"></script>
	<script type="text/javascript">
		baguetteBox.run('.tz-gallery');
		// 设置图片点击旋转
		$(document).ready(function(){
			current =0;
			$(document).on("click","figure img",function(){
				current = (current-90)%360;
				$(this).css({"transform":"rotate("+current+"deg)"});
});
		});
	</script>
	

    </div></body></html>