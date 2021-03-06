<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    
<head>
        <title>后台图书馆</title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="/project5-19/Public/Admin/css/bootstrap.min.css" />
		<link rel="stylesheet" href="/project5-19/Public/Admin/css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="/project5-19/Public/Admin/css/matrix-login.css" />
        <link href="/project5-19/Public/Admin/font-awesome/css/font-awesome.css" rel="stylesheet" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

    </head>
    <body>
        <div id="loginbox">            
            <form id="loginform" class="form-vertical" action="<?php echo U('Admin/Login/login');?>" method="post">
				 <div class="control-group normal_text"> <h3>后台登录</h3></div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lg"><i class="icon-user"></i></span><input type="text" name="username" placeholder="请输入用户名" />
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_ly"><i class="icon-lock"></i></span><input type="password" name="password" placeholder="请输入密码" />
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <span class="pull-left"><button class="flip-link btn btn-info" id="to-recover">忘记密码?</button></span>
                    <span class="pull-right"><button class="btn btn-success" /> 登录</button></span>
                </div>
            </form>
            <form id="recoverform" action="#" class="form-vertical">
				<p class="normal_text">Enter your e-mail address below and we will send you instructions how to recover a password.</p>
				
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lo"><i class="icon-envelope"></i></span><input type="text" placeholder="E-mail address" />
                        </div>
                    </div>
               
                <div class="form-actions">
                    <span class="pull-left"><a href="#" class="flip-link btn btn-success" id="to-login">&laquo; 返回登录</a></span>
                    <span class="pull-right"><a class="btn btn-info"/>Reecover</a></span>
                </div>
            </form>
        </div>
        
        <script src="/project5-19/Public/Admin/js/jquery.min.js"></script>  
        <script src="/project5-19/Public/Admin/js/matrix.login.js"></script> 
    </body>

</html>