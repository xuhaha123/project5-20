<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<link href="/project5-19/Public/Home/css/style1.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		
</head>
 
<body>
	<div class="main">
				 <!-----start-main---->
				 <!-- <div class="inset">
				 	<div class="social-icons">
		    			 <div class="span"><a href="#"><img src="images/fb.png" alt=""/><i>Connect with Facebook </i><div class="clear"></div></a></div>	
    					 <div class="span1"><a href="#"><img src="images/t-bird.png" alt=""/><i>Connect with Twitter</i><div class="clear"></div></a></div>
    					 <div class="clear"></div>
					</div>
				 </div>	 -->
				 <h2>用户注册</h2>
				 <form action="<?php echo U('Home/ZhuCe/zhuce');?>" method="post">
							<div class="lable">

		                     	<input type="text" style="width:630px;" class="text" name="username" value="请输入用户名" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '请输入用户名';}" id="active" readme="请输入6-16位字母数字下划线用户名"><span></span><br>


		                     	<input type="password" class="text" name="password" value="请输入密码" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '请输入密码';}" readme="请输入6-16位字母数字下划线密码"><span></span><br>
		                    </div>
		                    <div class="clear"> </div>
		                    <div class="lable-2">
		                    <input type="text" class="text" name="email" value="请输入邮箱" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '请输入邮箱';}" readme="请输入正确邮箱"><span></span><br>
		                     <input type="text" class="text" name="phone" value="请输入手机号码 " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '请输入手机号码 ';}" readme="请输入11位手机号码"><span></span><br>
							</div>

							<div class="clear"> </div>
							<!--  <h3>同意以下的协议<span><a href="#">Terms & Conditions</a> <span></h3> -->
						
								 <div class="submit"> 	
									<input type="submit" onclick="myFunction()" value="注册" >
								</div>

									<div class="clear"> </div>
							 </form>
							 
		<!-----//end-main---->
		</div>
		<script type="text/javascript" src="/project5-19/Public/Home/js/jquery-1.8.3.min.js"></script>
		<script type="text/javascript">
			var Cuser = false;
			var Cpass = false;
			var Cemail = false;
			var Cphone = false;

			//绑定表单事件
			$('form').submit(function(){
				//触发丧失焦点事件
				$('input').trigger('blur');

				//检测是否能够提交
				if(Cuser && Cpass && Crepass && Cemail && Cphone){
					//提交
					return true;
				}
				return false;
			})

			//绑定获取焦点事件  显示提示信息
			$('input').focus(function(){
				//获取文本
				var text = $(this).attr('readme');
				//设置文本
				$(this).next().html(text).css('color','green');
				$(this).addClass('cur');
			})

			//绑定丧失焦点事件
			$('input[name=username]').blur(function(){
				//正则
				var reg = /^\w{6,16}$/;
				//获取用户名
				var username = $(this).val();
				//检测
				var res = reg.test(username);
				if(!res){
					// alert('格式不正确');
					$(this).next().html('用户名格式不正确').css('color','red');
					$(this).addClass('error');
					Cuser = false;
					//停止
					return false;
				}
				var inp = $(this);
				//发送ajax验证用户名是否可用
				$.ajax({
					url:'<?php echo U("Home/ZhuCe/ajax");?>',
					data:{username:username},
					type:'get',
					// 同步
					async:false,
					success:function(data){
						//如果用户名可用
						if(data == 0){
							// alert('可用');
							inp.next().html('√').css('color','blue');
							inp.removeClass();
							Cuser = true;

						}else{
							// alert('用户名已存在');
							inp.next().html('用户名已存在').css('color','red');
							inp.addClass('error');
							Cuser = false;
						}
					}
				})
			})
			//密码
			$('input[name=password]').blur(function(){
				//获取密码
				var pass = $(this).val();
				//声明正则
				var reg = /^\w{6,16}$/;
				//验证
				if(reg.test(pass)){
					//正确
					$(this).next().html('√').css('color','blue');
					$(this).removeClass();
					Cpass = true;
				}else{
					//错误
					$(this).next().html('密码格式不正确').css('color','red');
					// $(this).removeClass();
					$(this).attr('class','error');
					Cpass = false;
				}
			})

			
			//邮箱验证
			$('input[name=email]').blur(function(){
				//获取确认密码
				var email = $(this).val();
				//声明正则
				var reg = /^\w+@\w+\.(com|cn|com\.cn|net|org)$/;
				//验证
				if(reg.test(email)){
					//正确
					$(this).next().html('√').css('color','blue');
					$(this).removeClass();
					Cemail = true;
				}else{
					//错误
					$(this).next().html('邮箱格式不正确').css('color','red');
					// $(this).removeClass();
					$(this).attr('class','error');
					Cemail = false;
				}
			})

			//手机验证
			$('input[name=phone]').blur(function(){
				//获取确认密码
				var phone = $(this).val();
				//声明正则
				var reg = /^1\d{10}$/;
				//验证
				if(reg.test(phone)){
					//正确
					$(this).next().html('√').css('color','blue');
					$(this).removeClass();
					Cphone = true;
				}else{
					//错误
					$(this).next().html('手机格式不正确').css('color','red');
					// $(this).removeClass();
					$(this).attr('class','error');
					Cphone = false;
				}
			})
		</script>
</body>
</html>