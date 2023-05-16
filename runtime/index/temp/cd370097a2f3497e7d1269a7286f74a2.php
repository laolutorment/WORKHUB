<?php /*a:1:{s:62:"F:\site\ztx\public\template\default\index\html\user_index.html";i:1642750854;}*/ ?>
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
        <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo url('index'); ?>">欢迎您：<?php echo htmlentities($user['email']); ?></a></li>
            <li><a href="<?php echo url('logout'); ?>">退出</a></li>
        </ul>
    </div>
</nav>
<!--main-->
<div class="container">
    <div class="row user_center">
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">
                <li class="active"><a href="<?php echo url('index'); ?>">我的主页</a></li>
                <li><a href="<?php echo url('set'); ?>">基本设置</a></li>
            </ul>
        </div>
        <div class="col-sm-9 col-md-10 main">
            <div class="page-header">
                <h1>我的主页</h1>
            </div>
            <p>
                当前用户等级：<?php echo htmlentities($user['type_name']); ?>
            </p>
        </div>
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/jquery@1.12.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
</body>
</html>