<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>

<script type="text/javascript" src="/project5-19/Public/Admin/js/jquery-1.8.3.min.js"></script>
<script src="/project5-19/Public/Home/js/jquery.chocolat.js"></script>
<link rel="stylesheet" href="/project5-19/Public/Home/css/chocolat.css" type="text/css"/>
<title>图书</title>

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
   
<style type="text/css">
li{ list-style: none;}
.yi{float:left;width:100px;line-height:10px;}
.yi h4{text-align:center;border:0px solid #f90;}
.nav2{width:1000px;margin-left: 90px;float:left;}
.yi ul{width: 95px;height:auto;margin-top:15px;border:0px solid blue;display:none;text-align: center;}
.yi ul li{height:30px;}
.yi a{text-decoration:none;color:#007FFF;}
ul li a:hover{color:#f90;}
.nav2{position:absolute;z-index:1;text-align: center;margin-left:70px;}
.gallery-bottom{margin-top: 150px;}
</style>

	<!-- header-section-ends -->
	<!-- content-section-starts -->
    <div class="content">
   	<div class="container">
	<div class="gallery-head" id="portfolio">
	<h3>经典图书</h3>
	<!-- 二级导航栏 -->
	<div class="nav2" >		    
		<?php if(is_array($list[0])): foreach($list[0] as $key=>$vo): ?><div class="yi">
				<h4><a href="<?php echo U('Home/Comment/index',array('id' =>$vo['id']));?>"><?php echo ($vo["name"]); ?></a></h4>
				<ul>
				<?php if(is_array($list[$vo['id']])): foreach($list[$vo['id']] as $key=>$vn): ?><li><a href="<?php echo U('Home/Comment/index',array('id' =>$vn['id']));?>"><?php echo ($vn["name"]); ?></a></li><?php endforeach; endif; ?>
				</ul>
				</div><?php endforeach; endif; ?>
		<div class="clearfix"></div>
	</div>
	<div class="clearfix"></div>
	<div class="gallery-bottom" >
		 	<ul>
		 		<?php if(is_array($res)): foreach($res as $key=>$vo): ?><li class="col-md-4 gallery-left" style="border:1px solid #ccc; ">
		 		<a href="<?php echo U('Home/Comment/index',array('id'=>$vo['id']));?>">
		 		<img src="/project5-19/Public<?php echo ($vo["pic"]); ?>" width="100px" height="450px">书名: <?php echo ($vo["title"]); ?>
		 		</a>
		 		</li><?php endforeach; endif; ?>
		 		
		 		
		 	</ul>
					<div class="clearfix"></div>
	</div>
</div>
</div>
</div>

<script src="/project5-19/Public/Admin/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript">
	//给window绑定事件
	$(window).scroll(function(){
		// alert('aaaa');
		//获取所有li标签
		$('li').each(function(){
			//可视区域高度
			var kh =$(window).height();
			//y轴滚动距离
			var sy =$(window).scrollTop();
			//元素距离文档顶部的距离
			var sd =$(this).offset().top;
			// sd < kh + sy
			if(kh + sy > sd){
				//图片显示
				var src =$(this).find('img').attr('Imgsrc');
				$(this).find('img').attr('src',src);
				// $(this).attr('isLoaded',1);
			}
		})
	})

</script>

<script type="text/javascript">
	var yi = document.getElementsByClassName('yi');

	for(var i = 0;i < yi.length;i++){
		yi[i].onmouseover =function(){
			this.getElementsByTagName('ul')[0].style.display ="block";
		}
		yi[i].onmouseout =function(){
			this.getElementsByTagName('ul')[0].style.display ="none";
		}

	}


</script>



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