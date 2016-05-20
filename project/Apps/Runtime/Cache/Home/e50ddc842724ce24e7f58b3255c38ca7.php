<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
   <meta charset="utf-8" />
   <title>登录</title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="" name="author" />
   <link href="/project5-19/Public/Home/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
   <link href="/project5-19/Public/Home/assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
   <link href="/project5-19/Public/Home/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
   <link href="/project5-19/Public/Home/css1/style.css" rel="stylesheet" />
   <link href="/project5-19/Public/Home/css1/style-responsive.css" rel="stylesheet" />
   <link href="/project5-19/Public/Home/css1/style-default.css" rel="stylesheet" id="style_color" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="lock">
    <div class="lock-header">
        <!-- BEGIN LOGO -->
        <a class="center" id="logo" href="<?php echo U('Home/Index/index');?>">
            <h1><span>Brother &nbsp;&nbsp; Library</span></h1> 
            <!-- <img class="center" alt="logo" src="img/logo.png"> -->
        </a>
        <!-- END LOGO -->
    </div>
    <div class="login-wrap">
        <div class="metro single-size red">
            <div class="locked">
                <i class="icon-lock"></i>
                <span>login</span>
            </div>
        </div>
         <form action="<?php echo U('Home/Login/login');?>" method="post">
        <div class="metro double-size green">
           <div class="input-append lock-input">
                <input type="text" name="username" placeholder="请输入用户名">
            </div>
        </div>
        <div class="metro double-size yellow">
            <div class="input-append lock-input">
                <input type="password" name="password" class="" placeholder="请输入密码">
            </div>
        </div>
        <div class="metro single-size terques login">
            <button type="submit" class="btn login-btn">
                登录
                <i class=" icon-long-arrow-right"></i>
            </button>
        </div>
        </form>
        <div class="metro double-size blue ">
            <a href="#" class="social-link">
                <i class="icon-facebook-sign"></i>
                <span>Facebook Login</span>
            </a>
        </div>
        <div class="metro single-size deep-red">
            <a href="#" class="social-link">
                <i class="icon-google-plus-sign"></i>
                <span>Google Login</span>
            </a>
        </div>
        <div class="metro double-size navy-blue">
            <a href="#" class="social-link">
                <i class="icon-twitter-sign"></i>
                <span>Twitter Login</span>
            </a>
        </div>
        <!-- <div class="metro single-size purple">
            <a href="<?php echo U(Home/Index/index);?>" class="social-link">
                <i class="icon-skype"></i>
                <span>Skype Login</span>
            </a>
        </div> -->
        <div class="metro single-size red">
            <form action="<?php echo U('Home/Login/zhuce');?>">
                <button type="submit" class="btn login-btn ">
                    注册
                    <i class=" icon-long-arrow-right"></i>
                </button>
            </form>
        </div>
        <div class="login-footer">
            <div class="remember-hint pull-left">
                <input type="checkbox" id=""> 记住密码
            </div>
            <div class="forgot-hint pull-right">
                <a id="forget-password" class="" href="/project5-19/Public/Home/javascript:;">忘记密码</a>
            </div>
        </div>
    </div>
</body>
<!-- END BODY -->
</html>