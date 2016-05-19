<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="/project/Public/Home/css/charge.css" type="text/css"/>
<script type="text/javascript" src="/project/Public/Home/js/charge.js"></script>
<script type="text/javascript" src="/project/Public/Home/js/charge1.js"></script>
<title>充值中心</title>

<link href="/project/Public/Home/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="/project/Public/Home/js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="/project/Public/Home/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.useso.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.useso.com/css?family=Niconne' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="/project/Public/Home/js/move-top.js"></script>
<script type="text/javascript" src="/project/Public/Home/js/easing.js"></script>
<!--/script-->
<script type="text/javascript">
      jQuery(document).ready(function($) {
        $(".scroll").click(function(event){   
          event.preventDefault();
          $('html,body').animate({scrollTop:$(this.hash).offset().top},900);
        });
      });
</script>
<style type="text/css">
  /*#clock{
    font :20px sans;background: #ddf;
      padding: 10px;
      float: right;
      border-radius:10px;
  }*/
  </style>
</head>
<body>
  <!-- header-section-starts -->
  <div class="about-header-banner" >
    <div class="container">
      <div class="home">
          <a href="/project/Public/Home/index.html"><span class="glyphicon glyphicon-home"></span></a>
      </div>
       <div class="header-top">
      <span id="clock"></span>
               <script type="text/javascript">
            // var clock =document.getElementById('clock');

            // function displayTime(){
              
            //   var now = new Date();
            //   clock.innerHTML =now.toLocaleTimeString();
            //   setTimeout(displayTime,1000);
            // }
            // window.onload =displayTime;
            </script>
         <span class="menu"><a href="<?php echo U('Home/Index/index');?>"><img src="/project/Public/Home/images/nav.png" alt=""/></a></span>
         <div class="top-menu">
          <ul>
          <nav class="cl-effect-13">
          <li><a href="<?php echo U('Home/Index/index');?>">首页</a></li>
          <li><a href="<?php echo U('Home/Advice/index');?>">图书馆简介</a></li>
          <li><a href="<?php echo U('Home/Book/gallery');?>">经典图书</a></li>
          <li><a href="<?php echo U('Home/Myinfo/typography');?>">我的图书馆</a></li>
          <li><a href="<?php echo U('Home/Charge/index');?>">充值</a></li>
          <li><a href="<?php echo U('Home/Jieyue/index');?>">借阅表</a></li>
          <li><?php
 if(empty($_SESSION['username'])) { ?>
                 <a href="<?php echo U('Home/Login/index');?>">登录</a>
                
            <?php
 }else{ echo "<a>".$_SESSION['username']."</a>"; } ?></li>
          <li><a href="<?php echo U('Home/Logout/Logout');?>">退出</a></li>
          <li><a href="<?php echo U('Home/Login/zhuce');?>">注册</a></li>
          </nav>
          </ul>
        </div>
        <!-- script for menu -->
          <script> 
            $( "span.menu" ).click(function() {
            $( ".top-menu ul" ).slideToggle( 300, function() {
             // Animation complete.
            });
            });
          </script>
        <!-- //script for menu -->
        <div class="clearfix"></div>
      </div>
      <div class="clearfix"></div>
      <div class="banner-info text-center">
        <h1><a href="/project/Public/Home/index.html">Brother Library</a></h1>
      </div>
    </div>
  </div>
  <!-- header-section-ends -->
   <!---start-content---->
   

<div class="w" id="headers">
   		
   		<div class="clr"></div>
</div>
<div class="w main">
   		<div class="o-mt">
   			<h2>填写充值金额</h2>
   		</div>
         <form action="<?php echo U('Home/Charge/insert');?>" method="post">
   		<div class="m">
   			<div class="form">
   				<div class="item">
   					<span class="label">充值账户：</span>
					<!-- <div id="username" class="fl">jd_722169546c4dc</div> -->
					<input type="text" value="<?php echo ($_SESSION['username']); ?>" class="fl" readonly>
					<div class="clr"></div>
   				</div>
   				<div class="item">
   					<span class="label">充值金额：</span>
   					<div class="fl">
   						<input type="text" onfocus="cleanMes();" onblur="checkMoney();" id="txtAccount" name="rechage" class="text">
						<label>元</label>
						<div class="msg-text"></div>
						<div class="msg-error">只能填写大于等于10，小于等于50000的整数金额</div>
						<div class="clr"></div>
						<div class="msg-text">请注意：支持国内主流银行储蓄卡充值，在线支付成功后，充值金额会在1分钟内到账；如果需要提现，请致电网站客服办理</div>
						<div class="clr"></div>
						<div class="i-tips">
							<s class="icon-info05"></s>客服电话：400-616-5500&nbsp;|&nbsp;0527-88105500&nbsp;&nbsp;&nbsp;&nbsp;服务时间：周一至周日 0:00-24:00
                        </div>
   					</div>
   					<div class="clr"></div>
   				</div>
   				<div class="item">
   					<span class="label">&nbsp;<input type="submit" value="充值" id=""></span>

   					<div class="clr"></div>
   				</div>
   			</div>
   		</div>
         </form>
   		<div class="m m1">
   			<div class="mt">
   				<h3>温馨提示：</h3>
   			</div>
			<div class="mc">
				<p>
					1. 充值成功后，余额可能存在延迟现象，一般1到5分钟内到账，如有问题，请咨询客服；
					<br>
                                            2. 充值金额输入值必须是不小于10且不大于50000的正整数；
                    
					<br>
					3. 您只能用储蓄卡进行充值，如遇到任何支付问题可以查看在线支付帮助；
					<br>
					4. 充值完成后，您可以进入账户充值记录页面进行查看余额充值状态。
				</p>
			</div>
   		</div>
   		
   		<input type="hidden" value="0" id="balance">
        <input type="hidden" value="false" id="isWhiteVip">
   	</div>

  <!-- footer-section -->
  <div class="footer">
    <div class="container">
      <div class="copyright text-center  top-menu">
       
        <ul>

            <li><a target="_blank" href="/other/wzdt">网站地图</a></li>
            <li>|</li>
            <li><a target="_blank" href="http://www.nankai.edu.cn">兄弟连图书馆</a></li>
            <!-- <li>|</li>
            <li><a href="http://202.113.20.163:8080/was40/info_win.htm" target="_blank">信息窗</a></li> -->
            <li>|</li>
            <li><a target="_blank" href="http://www2.lib.nankai.edu.cn/reader/Frame-reader.htm">馆办刊物</a></li>
            <li>|</li>
            <li><a target="_blank" href="http://www.nlc.gov.cn/">中国国家图书馆</a></li>
            <li>|</li>
            <li><a target="_blank" href="http://www.xhlib.net/">上海徐汇区图书馆</a></li>
            <li>|</li>
            <li><a target="_blank" href="http://www.pdlib.com/pdtsg_website/html/defaultsite/portal/index/index.htm">浦东图书馆</a></li>
            <li>|</li>
            <li><a target="_blank" href="http://www.tjdl.cn/">TALIS中心</a></li>
            <li>|</li>
            <li><a target="_blank" href="http://www.calis.edu.cn/calisnew/">CALIS中心</a></li>
            <li>|</li>
            <li><a target="_blank" href="http://www.cashl.edu.cn/portal/index.jsp">CASHL</a></li>
            <li>|</li>
            <li><a target="_blank" href="/other/xglj">相关链接</a></li>
          
      
        </ul>

         <p>Copyright &copy; 2016.Company name All rights reserved.More Templates <a href="http://localhost/project/index.php/Home/Index/index" target="_blank" >兄弟连图书馆</a> - Collect from <a href="http://localhost/project/index.php/Home/Index/index" title="图书馆" target="_blank">兄弟连图书馆</a></p>

      </div>
    </div>
  </div>
  <!-- footer-section -->
  
<a href="/project/Public/Home/#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!----> 
</body>
</html>