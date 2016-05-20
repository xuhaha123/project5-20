<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>

<title>分类图书</title>

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
   
<div>


<div class="navbar-bg-top">
<div class="navbar-content layout">
<div class="navbar-content-box">
<dl class="index ">
<dt><a href="/">首页</a></dt>
</dl>
<dl class="cat ">
<dt><a>分类</a></dt>
<dd>
<div><a class="art" target="_blank" href="/art">艺术</a></div>
<div><a class="technology" target="_blank" href="/science">科技</a></div>
<div><a target="_blank" href="/ziran">自然</a></div>
<div><a target="_blank" href="/wenhua">文化</a></div>
<div><a target="_blank" href="/dili">地理</a></div>
<div><a target="_blank" href="/shenghuo">生活</a></div>
<div><a target="_blank" href="/shehui">社会</a></div>
<div><a target="_blank" href="/renwu">人物</a></div>
<div><a target="_blank" href="/jingji">经济</a></div>
<div><a target="_blank" href="/tiyu">体育</a></div>
<div><a target="_blank" href="/lishi">历史</a></div>
</dd>
</dl>
<dl class="special ">
<dt><a>特色百科</a></dt>
<dd>
<div><a target="_blank" href="/calendar/">历史上的今天</a></div>
<div><a target="_blank" href="/museum/">数字博物馆</a></div>
<div><a target="_blank" href="/shiji/2015?fr=navbar">史记·2015</a></div>
<div><a target="_blank" href="/city/">城市百科</a></div>
<div><a target="_blank" href="/operation/worldwar2">二战百科</a></div>
<div><a target="_blank" href="/feiyi?fr=dhlfeiyi">非遗百科</a></div>
</dd>
</dl>
<dl class="user">
<dt><a>用户</a></dt>
<dd>
<div><a target="_blank" href="/kedou/">蝌蚪团</a></div>
<div><a target="_blank" href="/event/ranmeng/">燃梦计划</a></div>
<div><a target="_blank" href="/task/">百科任务</a></div>
<div><a target="_blank" href="/mall/">百科商城</a></div>
</dd>
</dl>
<dl class="cooperation">
<dt><a>权威合作</a></dt>
<dd>
<div><a target="_blank" href="/operation/cooperation#joint">合作模式</a></div>
<div><a target="_blank" href="/operation/cooperation#issue">常见问题</a></div>
<div><a target="_blank" href="/operation/cooperation#connection">联系方式</a></div>
</dd>
</dl>
<dl class="mobile">
<dt><a>手机百科</a></dt>
<dd>
<div><a target="_blank" href="/m#download">客户端</a></div>
<div><a target="_blank" href="/m#wap">网页版</a></div>
</dd>
</dl>
<div class="usercenter">
<div><a target="_blank" href="/usercenter"><em class="cmn-icon cmn-icons cmn-icons_navbar-usercenter"></em>个人中心</a></div>
</div></div>
</div>
</div>


<div class="floats">
	<h3>生活</h3>
	<ul class="xs">
		<?php if(is_array($catef5)): foreach($catef5 as $key=>$vo): ?><li class="xs1"><?php echo ($vo["name"]); ?></li>
			<li class="xs1"><?php echo ($vo["name"]); ?></li><?php endforeach; endif; ?>
	</ul>
</div>

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
  
<a href="/project5-19/Public/Home/#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!----> 
</body>
</html>