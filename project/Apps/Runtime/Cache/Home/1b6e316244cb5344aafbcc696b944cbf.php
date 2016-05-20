<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>

<title>图书馆介绍</title>

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
  #clock{
    font :20px sans;background: #ddf;
      padding: 10px;
      float: right;
      border-radius:10px;
  }
  </style>
</head>
<body>
  <!-- header-section-starts -->
  <div class="about-header-banner">
    <div class="container">
      <div class="home">
          <a href="/project/Public/Home/index.html"><span class="glyphicon glyphicon-home"></span></a>
      </div>
       <div class="header-top">
      <span id="clock"></span>
               <script type="text/javascript">
            var clock =document.getElementById('clock');

            function displayTime(){
              
              var now = new Date();
              clock.innerHTML =now.toLocaleTimeString();
              setTimeout(displayTime,1000);
            }
            window.onload =displayTime;
            </script>
        <span class="menu"><img src="/project/Public/Home/images/nav.png" alt=""/></span>
         <div class="top-menu">
          <ul>
          <nav class="cl-effect-13">
          <li><a href="<?php echo U('Home/Book/about');?>">图书馆简介</a></li>
          <li><a href="<?php echo U('Home/Book/gallery');?>">经典图书</a></li>
          <li><a class="scroll" href="<?php echo U('Home/Index/index/#news');?>">图书馆新闻</a></li>
          <li><a href="<?php echo U('Home/Book/typography');?>">我的图书馆</a></li>
          <li><a href="<?php echo U('Home/Book/contact');?>">借阅表</a></li>
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
   
 <div class="main">
    <div class="about-content text-center">
			<div class="who_we_are">
			<div class="container">
					<div class="about-top">
						<header>
							<h3>兄弟连图书馆介绍</h3>
						</header>
			<h5>
			图书馆现有馆藏纸质文献资源170万册，电子图130万册，购置有清华同方、万方、人大复印资料、外文期刊等数字产品，阅览座位1500席。图书馆现设流通部、阅览部、参考咨询部、采编部、办公室等部门。
　			</h5>
			<p>
		　　 图书馆实行藏、借、阅一体化服务体系，实现检索、采访、编目、流通、期刊自动化管理，每周开放98个小时，全天24小时网络开放，读者可通过校园网实现电子资料的查询、阅读、下载和馆藏文献的检索、预约、续借等多功能服务。图书馆以“读者第一，服务至上”为服务宗旨，努力为学校师生和社会读者提供高效优质服务，除常规服务外，还为读者提供课题检索、文献传送等项目服务。图书馆在学校校企合作、“五位一体”办学模式指导下，努力探索社会化服务的新模式，新途径，在学校实训实习基地、企事业单位、农村、军营等开展各种文化服务活动。
			</p>
			<p>图书馆先后获国家文化部、省市各级荣誉称号10余项。目前，图书馆积极参与中国高等教育文献资源保障系统和省内高校的共建共享活动，努力把图书馆办成多层次、高品位、现代化的数字化图书馆。
			</p>
					</div>
					<div class="abt_img1"><img src="/project/Public/Home/images/w1.jpg" alt=""></div>
					<div class="abt_img2"><img src="/project/Public/Home/images/w2.jpg" alt=""></div>
					<div class="clearfix"></div>
			</div>
		</div>
		<div class="why_choose_us">
			<div class="container">
				<div class="row">
						<header>
							<h3>规章制度</h3>
						</header>
					</div>
					<div class="col-md-4 whyus">
						<div>
							<span>01</span>
							<h4>入馆须知</h4>
							<p> 1. 文明礼貌进入图书馆，衣着整洁，注重仪表，不穿拖鞋、短内裤、汗背心入内。
							2. 维护大楼安全，不携带易燃、易爆物品进馆，图书馆内禁烟。
							3. 遵守公共秩序，不高声喧哗、唱歌、吹口哨、相互追逐和打闹。</p>
						</div>
					</div>
					<div class="col-md-4 whyus">
						<div>
							<span>02</span>
							<h4>卡通在图书馆的使用须知</h4>
							<p>
							1. 一卡通限本人使用。
							2. 一卡通的挂失：一卡通遗失后，除了去学校有关部门挂失外必须立即到图书馆外借部办理挂失，避免被他人冒借。
							3. 到图书馆挂失以前，已经发生被他人冒借图书的，由一卡通的合法持有人按遗失的规定负责赔偿。</p>
						</div>
					</div>
					<div class="col-md-4 whyus">
						<div>
							<span>03</span>
							<h4>各部（室）借、阅须知图书借阅须知</h4>
							<p>
1.  不自带书刊、包、雨具等物品进入书库。请先寄存。2.  凭本人一卡通刷卡入库。
3.  在书架上选取图书时，不借的书要正确插回原位。4. 办理借书手续前，应自己检查所借图书。若发现有损毁，应当场向工作人员指出。</p>
			
						</div>
					</div>
			</div>
		</div>
		<div class="team">
		<header>
							<h3>联系我们</h3>
						</header>
		<section class="main">
			
				<ul class="ch-grid">
					<li>
						<div class="ch-item ch-img-1">
							<div class="ch-info">
								<h4>办公室</h4>
								<p>电话：8888888</p>
							</div>
						</div>
					</li>
					<li>
						<div class="ch-item ch-img-2">
							<div class="ch-info">
								<h4>流通部、阅览部</h4>
								<p>图书证办理、挂失、离校手续、图书借还、预约、咨询等任何有关图书馆的问题 </p>
							</div>
						</div>
					</li>
					<li>
						<div class="ch-item ch-img-1">
							<div class="ch-info">
								<h4> 采编部</h4>
								<p>图书荐购</p>
							</div>
						</div>
					</li>
					<li>
						<div class="ch-item ch-img-2">
							<div class="ch-info">
								<h4> 参考咨询部</h4>
								<p>文献传递、论文查重 </p>
							</div>
						</div>
					</li>
				</ul>
				
			</section>
			</div>
    </div>
 </div>
<div class="get-in-touch">
			<div class="container">
				<div class="col-md-3 gin">
					<h3>联系方式</h3>
					<p></p>
					<div class="social-icons footer-icons">
						<i class="facebook"></i>
						<i class="twitter"></i>
						<i class="googlepluse"></i>
					</div>
				</div>
				<div class="col-md-3 address">
					<h3>地址</h3>
					<address>
						<p>上海市,
						<p>闸北区,</p>
						<p>信息服务楼1188号.</p>
						<p class="phone"><span>电话</span> 88888</p>
						<span class="phone">E-mail : <a href="/project/Public/Home/mail-to:example@mail.com">lamp@mail.com</a></span>
					</address>
				</div>
				<div class="col-md-6 dal">
					<h3>意见反馈</h3>
					<input type="text" class="text" value="First Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'First Name';}">
					<input type="text" class="text" value="Last Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Last Name';}">
					<input type="text" class="text" value="E-mail" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-mail';}">
					<input type="text" class="text" value="Phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}">
					<textarea onfocus="if(this.value == 'Your Message') this.value='';" onblur="if(this.value == '') this.value='你的建议';" >你的建议</textarea>
					<input type="submit" value="提交">
				</div>
				<div class="clearfix"></div>
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
  <script type="text/javascript">
    $(document).ready(function() {
        /*
        var defaults = {
        containerID: 'toTop', // fading element id
        containerHoverID: 'toTopHover', // fading element hover id
        scrollSpeed: 1200,
        easingType: 'linear' 
        };
        */
    $().UItoTop({ easingType: 'easeOutQuart' });
});
</script>
<a href="/project/Public/Home/#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!----> 
</body>
</html>