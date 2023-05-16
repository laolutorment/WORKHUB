<?php /*a:1:{s:62:"F:\site\ztx\public\template\default\index\html\user_login.html";i:1642750854;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo htmlentities($system['name']); ?></title>
    <meta name="keywords" content="<?php echo htmlentities($keywords); ?>" />
    <meta name="description" content="<?php echo htmlentities($description); ?>" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/respond.js@1.4.2/dest/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="<?php echo htmlentities($public); ?>css/user.css" />
</head>
<body>
<!-- Fixed navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="/"><?php echo htmlentities($system['name']); ?></a>
        </div>

    </div>
</nav>
<!--main-->
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="login">
                <div class="login-description text-center">
                    登 录
                </div>
                <form action="<?php echo url('login'); ?>" method="post" class="form-validate">
                    <div class="form-group">
                        <input type="text" name="username" class="form-control required" size="25" placeholder="邮箱或手机号" required >
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" placeholder="Password" class="form-control required" size="25" maxlength="99" >
                    </div>
                    <?php if($system['message_code']): ?>
                    <div class="clearfix"></div>
                    <div class="form-group message_code">
                        <input type="text" name="message_code" placeholder="验证码" class="form-control required   ">
                        <img src="<?php echo url('index/captcha'); ?>" title="点击切换验证码">
                    </div>
                    <?php endif; ?>
                    <div class="form-group mb-0">
                        <button type="submit" class="btn btn-success btn-md btn-block">登 录</button>
                    </div>
                    <div class="form-group mb-0">
                        <a href="<?php echo url('register'); ?>" class="btn btn-info btn-md btn-block">注 册</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/jquery@1.12.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
<script>
    //刷新验证码操作
    $(".message_code img").click(function(){
        $(this).attr("src",$(this).attr("src")+'?'+Math.random());
    })
</script>
    </body>
</html>