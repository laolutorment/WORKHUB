<?php /*a:1:{s:41:"F:\site\haoqi\view\ADMIN\login\index.html";i:1648605377;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <!--渲染器-->
    <meta name="renderer" content="webkit">
    <!--优先使用最新版本的IE 和 Chrome 内核-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>
        <?php echo htmlentities($system['name']); ?> | 登录
    </title>
    <link rel="stylesheet" href="/static/plugins/layui/css/layui.css">
    <link rel="stylesheet" href="/static/admin/css/style.css?v=20210521">
    <script src="/static/plugins/layui/layui.js">
    </script>
    <script src="/static/plugins/layui/js/jquery.min.js">
    </script>
    <script>
        layui.use('layer',
            function () {
                var $ = layui.jquery, layer = layui.layer;
            })
    </script>
</head>
<body>
<?php if($mobile==false): ?>
<style>
    html, body {
        width: 100%;
        height: 100%;
        background: url("/static/admin/images/login-bg.jpg") no-repeat;
        background-size: 100% 100%;
    }
    .cavs {
        z-index: 1;
        position: fixed;
        width: 95%;
        margin-left: 20px;
        margin-right: 20px;
    }
</style>
<script src="/static/admin/js/bg.js"></script>
<canvas class="cavs" width="1920" height="937"></canvas>
<?php endif; ?>
<div class="layadmin-user-login layadmin-user-display-show" id="LAY-user-login">
    <div class="layadmin-user-login-main">
        <div class="layadmin-user-login-box layadmin-user-login-header">
            <h2>
                <?php echo htmlentities($system['name']); ?>
            </h2>
        </div>
        <div class="layadmin-user-login-box layadmin-user-login-body layui-form">
            <div class="layui-form-item">
                <label class="layadmin-user-login-icon layui-icon layui-icon-username"
                       for="LAY-user-login-username">
                </label>
                <input type="text" name="username" id="LAY-user-login-username" lay-verify="required"
                       placeholder="用户名" class="layui-input">
            </div>
            <div class="layui-form-item">
                <label class="layadmin-user-login-icon layui-icon layui-icon-password"
                       for="LAY-user-login-password">
                </label>
                <input type="password" name="password" id="LAY-user-login-password" lay-verify="required"
                       placeholder="密码" class="layui-input">
            </div>
            <?php if($system['code']): ?>
            <div class="layui-form-item">
                <div class="layui-row">
                    <div class="layui-col-xs5">
                        <label class="layadmin-user-login-icon layui-icon layui-icon-vercode"
                               for="LAY-user-login-vercode">
                        </label>
                        <input type="text" name="vercode" id="LAY-user-login-vercode" lay-verify="required"
                               maxlength="5"
                               placeholder="验证码" class="layui-input">
                    </div>
                    <div class="layui-col-xs7">
                        <div style="margin-left: 10px;">
                            <img src="<?php echo url('Login/captcha'); ?>" class="layadmin-user-login-codeimg"
                                 id="LAY-user-get-vercode">
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <div class="layui-form-item" style="margin-top: 25px;">
                <input type="hidden" name="__token__" value="<?php echo token(); ?>"/>
                <button class="layui-btn layui-btn-lg layui-btn-fluid login" lay-submit
                        lay-filter="LAY-user-login-submit">
                    登 录
                </button>
            </div>
            <div class="layui-trans layadmin-user-login-footer">
                <p>
                    <?php echo htmlentities((isset($system['rights']) && ($system['rights'] !== '')?$system['rights']:'siyucms.com')); ?> ©
                </p>
                <p>
                    <span>
                        <a href="<?php echo htmlentities((isset($system['rights_link']) && ($system['rights_link'] !== '')?$system['rights_link']:'https://siyucms.com/index/authorize.html')); ?>" target="_blank">
                            获取授权
                        </a>
                    </span>
                    <span>
                        <a href="<?php echo htmlentities((isset($system['rights_link']) && ($system['rights_link'] !== '')?$system['rights_link']:'https://siyucms.com')); ?>" target="_blank">
                            前往官网
                        </a>
                    </span>
                </p>
            </div>
        </div>
    </div>
</div>
<script>
    // 回车触发登录
    $(document).keyup(function (event) {
        if (event.keyCode == 13) {
            $(".login").trigger("click");
        }
    });
    $(function () {
        // 刷新验证码操作
        $(".layadmin-user-login-codeimg").click(function () {
            $(this).attr("src", $(this).attr("src") + '?' + Math.random());
        })
        // 后台登录
        $(".login").click(function () {
            var username = $("input[name='username']").val();
            var password = $("input[name='password']").val();
            var __token__ = $("input[name='__token__']").val();
            var vercode = $("input[name='vercode']").val();
            if (!username) {
                layer.alert('请输入用户名', {
                    icon: 2
                }, function (index) {
                    layer.close(index);
                    $("input[name='username']").focus();
                });
                return false;
            }
            if (!password) {
                layer.alert('请输入密码', {
                    icon: 2
                }, function (index) {
                    layer.close(index);
                    $("input[name='password']").focus();
                });
                return false;
            }
            $.ajax({
                type: "post",
                url: "<?php echo url('checkLogin'); ?>",
                data: {
                    username: username,
                    password: password,
                    vercode: vercode,
                    __token__: __token__
                },
                dataType: "json",
                beforeSend: function () {
                    loadIndex = layer.load();
                },
                success: function (data) {
                    if (data.error == 1) {
                        layer.close(loadIndex);
                        layer.alert(data.msg, {
                            icon: 2
                        }, function (index) {
                            layer.close(index);
                            $(".layadmin-user-login-codeimg").attr("src", $(".layadmin-user-login-codeimg").attr("src") + '?' + Math.random());
                            $("input[name='vercode']").val('').focus();
                        });
                    } else if (data.error == 2) {
                        layer.close(loadIndex);
                        layer.alert(data.msg, {
                            icon: 2
                        }, function (index) {
                            layer.close(index);
                            window.location.reload();
                        });
                    } else {
                        window.location.href = data.href;
                    }
                },
                error: function (xhr) {

                }
            });

        })
    })
</script>
</body>

</html>