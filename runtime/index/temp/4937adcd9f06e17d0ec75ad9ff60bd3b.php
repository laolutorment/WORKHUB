<?php /*a:1:{s:60:"F:\site\ztx\public\template\default\index\html\user_set.html";i:1642750854;}*/ ?>
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
                <li><a href="<?php echo url('index'); ?>">我的主页</a></li>
                <li class="active"><a href="<?php echo url('set'); ?>">基本设置</a></li>
            </ul>
        </div>
        <div class="col-sm-9 col-md-10 main">
            <div class="page-header">
                <h1>基本设置</h1>
            </div>
            <!--选项卡开始-->
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">我的资料</a></li>
                <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">修改密码</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="home">
                    <form class="form-inline" name="f1" method="post" action="">
                        <div class="form-group dd_input_group">
                            <label class="col-sm-2 col-xs-4 control-label dd_input_l">邮箱</label>
                            <div class="col-sm-4 col-xs-8 dd_input_2">
                                <input type="text" name="email" class="form-control" value="<?php echo htmlentities($user['email']); ?>" disabled>
                            </div>
                        </div>
                        <!---->
                        <div class="form-group dd_input_group">
                            <label class="col-sm-2 col-xs-4 control-label dd_input_l">性别</label>
                            <div class="col-sm-4 col-xs-8 dd_input_3 dd_radio_lable_left">
                                <label class="radio-inline">
                                    <input type="radio" name="sex" id="sex1" value="1" <?php if($user['sex']): ?>checked<?php endif; ?>> 男
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="sex" id="sex2" value="0" <?php if(!$user['sex']): ?>checked<?php endif; ?>> 女
                                </label>
                            </div>
                        </div>
                        <!---->
                        <div class="form-group dd_input_group">
                            <label class="col-sm-2 col-xs-4 control-label dd_input_l">qq</label>
                            <div class="col-sm-4 col-xs-8 dd_input_2">
                                <input type="text" name="qq" class="form-control" value="<?php echo htmlentities($user['qq']); ?>">
                            </div>
                        </div>
                        <!---->
                        <div class="form-group dd_input_group">
                            <label class="col-sm-2 col-xs-4 control-label dd_input_l">电话</label>
                            <div class="col-sm-4 col-xs-8 dd_input_2">
                                <input type="text" name="mobile" class="form-control" value="<?php echo htmlentities($user['mobile']); ?>">
                            </div>
                        </div>
                        <!---->
                        <button type="submit" class="btn btn-flat btn-primary ">提 交</button>
                    </form>
                </div>
                <div role="tabpanel" class="tab-pane" id="profile">
                    <form class="form-inline" name="f1" method="post" action="">
                        <div class="form-group dd_input_group">
                            <label class="col-sm-2 col-xs-4 control-label dd_input_l">原密码</label>
                            <div class="col-sm-4 col-xs-8 dd_input_2">
                                <input type="text" name="nowpassword" class="form-control" value="" >
                            </div>
                        </div>
                        <!---->
                        <div class="form-group dd_input_group">
                            <label class="col-sm-2 col-xs-4 control-label dd_input_l">新密码</label>
                            <div class="col-sm-4 col-xs-8 dd_input_2">
                                <input type="text" name="password" class="form-control" value="" >
                            </div>
                        </div>
                        <!---->
                        <div class="form-group dd_input_group">
                            <label class="col-sm-2 col-xs-4 control-label dd_input_l">确认密码</label>
                            <div class="col-sm-4 col-xs-8 dd_input_2">
                                <input type="text" name="password2" class="form-control" value="" >
                            </div>
                        </div>
                        <!---->
                        <button type="submit" class="btn btn-flat btn-primary ">提 交</button>
                    </form>
                </div>
            </div>
            <!--选项卡结束-->
        </div>
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/jquery@1.12.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
</body>
</html>