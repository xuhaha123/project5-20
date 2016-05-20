<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>

<title>我的图书馆</title>

<link href="/project5-19/Public/Home/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="/project5-19/Public/Home/js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="/project5-19/Public/Home/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.useso.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.useso.com/css?family=Niconne' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="/project5-19/Public/Home/js/move-top.js"></script>
<script type="text/javascript" src="/project5-19/Public/Home/js/easing.js"></script>
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
          <a href="/project5-19/Public/Home/index.html"><span class="glyphicon glyphicon-home"></span></a>
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
         <span class="menu"><a href="<?php echo U('Home/Index/index');?>"><img src="/project5-19/Public/Home/images/nav.png" alt=""/></a></span>
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
        <h1><a href="/project5-19/Public/Home/index.html">Brother Library</a></h1>
      </div>
    </div>
  </div>
  <!-- header-section-ends -->
   <!---start-content---->
   
<block name="head">
<link rel="stylesheet" type="text/css" href="/project5-19/Public/Home/css1/ht.css"/>
<div class="typrography">
  <div class="container">
      <h3 class="type text-center">我的图书馆</h3>
        <div id="main-r">
  <div id="main-p">
              
      <div class="left fl">
            <div class="div1">
            <div class="left_top">
              <img src="/project5-19/Public/Home/images/images2/bbb_01.jpg">
                <img src="/project5-19/Public/Home/images/images2/bbb_02.jpg" id="2">
                <img src="/project5-19/Public/Home/images/images2/bbb_03.jpg">
                <img src="/project5-19/Public/Home/images/images2/bbb_04.jpg">
            </div>
            <div class="div2">
            <div class="jbsz"></div>
                <a href="<?php echo U('Home/User/index');?>">个人信息</a>
            </div>
            <div class="div3">
              <ul>
                <li><a href=""> 修改密码</a></li>
                <li><a href=""> 修改头像</a></li>
        
              </ul>
            </div>
             <div class="div2">
            <div class="xwzx"></div>
               我的借阅
            </div>
            <div class="div3">
                 <ul>
                 <li> <a href="">全部借阅</a></li>
               
                 </ul>
            </div>
            <div class="div2">
            <div class="zxcp"></div>
                我的积分
            </div>
            <div class="div3">
             <ul>
            <li>积分管理</li>
            <li>积分兑换</li>
                
             </ul>
            </div>
            <div class="div2">
            <div class="lmtj"></div>
                评价管理
            </div>
            <div class="div3">
                <ul>
            <li><a href="commect.php">用户评价</a></li>
                 </ul>
            </div>
  
            <div class="div2">
            <div class="zxcp"></div>
                 服务中心
            </div>
            <div class="div3">
                <ul>
            <li><a href="<?php echo U('Home/Kf/index');?>">在线客服</a></li>
               
                 </ul>
            </div>
            <div class="div2">
            <div class="lmtj"></div>
                联系方式
            </div>
            <div class="div3">
                <ul>
            <li>email</li>
                 </ul>
            </div>
            </div>
            </div>
    <div class="success9">
      
  <center>
  <div style="margin-top:-60px">
   <font style="color:#F6416C;font-weight:bold">在线客服</font>
      <hr color="#e2e2e2">
      <br/>
      <h2>在线客服qq:947036348</h2>
  </div>
    

      
  </div>    
 <script src="http://www.lanrenzhijia.com/ajaxjs/jquery.min.js"></script>
<script>
$(function(){
  $(".div2").click(function(){ 
    $(this).next("div").slideToggle("slow").siblings(".div3:visible").slideUp("slow");
  });
});
</script>
<div class="clear"></div>

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
  
<a href="/project5-19/Public/Home/#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!----> 
</body>
</html>