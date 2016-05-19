<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>

<title>图书详情</title>

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
   
	<!-- header-section-ends -->
	<!-- content-section-starts -->
 <div class="main">
    <!--single-page-->
	<div class="single-page">
		<div class="container">
			<div class="col-md-8 single-page-left">
				<div class="single-page-info">
					<img src="/project5-19/Public<?php echo ($info['0']['pic']); ?>" style="width:500px" /> 
					<h5>类别</h5>
					<p><?php echo ($info['0']['name']); ?></p>
					<h5><?php echo ($info['0']['title']); ?></h5>
					<p>作者：<?php echo ($info['0']['author']); ?></p>
					<h5>借阅积分</h5>
					<p><?php echo ($info['0']['jf']); ?></p>
					<h5>剩余数量</h5>
					<p><?php echo ($info['0']['num']); ?></p>
					<h5>借阅数量</h5>
					<form action="<?php echo U('Home/Comment/insert',array('id'=>$info['0']['id']));?>" method="post">
					<a onclick="jian()" style="float:left;width:30px;height:30px;background:white;border:1px solid #ccc;text-align:center"><h1 style="margin-top:-12px">-</h1></a><input type="text" value="1" id="num" name="j_num"  style="float:left;width:30px;height:30px;text-align:center"><a onclick="jia()" style="float:left;width:30px;height:30px;background:white;border:1px solid #ccc;text-align:center"><h1 style="margin-top:-12px">+</h1></a>
					<div class="posts-right">
							<button class="btn btn-primary hvr-rectangle-in" >提交借阅</button>
						</div>
					<script>
					function jian()
					{
							var num=document.getElementById('num').value;
							var num1 = parseInt(num);
							num1=num1-1;
							if(num1<1)
							{
								num1=1;
							}
							document.getElementById('num').value=num1;
						}
	
						function jia()
						{
							var num=document.getElementById('num').value;
							var num1 = parseInt(num);
							num1=num1+1;
							
							document.getElementById('num').value=num1;
	
						}

					</script>
					</form>
					<div class="comment-icons">
					<h5>相关作品</h5>
						<ul>
							<li><span class="glyphicon glyphicon-bookmark"></span><a href="/project5-19/Public/Home/#"><?php echo ($info['0']['relateb']); ?></a> </li>
							<li><span class="glyphicon glyphicon-thumbs-up"></span><a href="/project5-19/Public/Home/#">15</a></li>
							<li><span class="glyphicon glyphicon-book"></span><a href="<?php echo U('Home/Comment/Collect',array('id'=>$info['0']['id']));?>">收藏</a></li>
							<li><span class="glyphicon glyphicon-big"></span><a>
							<?php
 $id = $_GET['id']; $title = $info['0']['title']; $sql = "select count(book) from collect where book='$title'"; $result = mysql_query($sql); $row = mysql_fetch_assoc($result); $t = $row['count(book)']; echo "总收藏次数为：$t"; ?></a></li>
						</ul>
					</div>
				</div>	
				<div class="admin-text">
					<h5>作者简介</h5>
					<div class="admin-text-left">
						<a href="/project5-19/Public/Home/#"><img src="/project5-19/Public/Home/images/icon1.png" alt=""/></a>
					</div>
					<div class="admin-text-right">
						<p><?php echo ($info['0']['about']); ?></p>
						<span><a href="/project5-19/Public/Home/#"><?php echo ($info['0']['author']); ?></a></span>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-12 single-page-right">
				<div class="category">
					<h4>相关评论</h4>
					<ul class="list-group">
					<?php if(is_array($res)): foreach($res as $key=>$vo): ?><li style="float:left;width:200px;height:90px;">
							<a href="" class="list-group-item"><?php echo ($vo["name"]); ?></a>
							<a href="" class="list-group-item"><?php echo ($vo["context"]); ?></a>
							</li><?php endforeach; endif; ?>
					</ul>
					
				</div>
				</div>	
			</div>	
			<div class="col-md-4 single-page-right">
				<div class="category">
					<h4>图书信息</h4>
					<div class="list-group">
						<a href="" class="list-group-item">外文书名: <?php echo ($info['0']['Englishname']); ?></a>
						<a href="" class="list-group-item">平装: <?php echo ($info['0']['page']); ?>页</a>
						<a href="" class="list-group-item">语种： <?php echo ($info['0']['language']); ?></a>
						<a href="" class="list-group-item">开本: <?php echo ($info['0']['format']); ?></a>
						<a href="" class="list-group-item">条形码: <?php echo ($info['0']['bar']); ?></a>
						<a href="" class="list-group-item">尺寸: <?php echo ($info['0']['size']); ?></a>
						<a href="" class="list-group-item">重量: <?php echo ($info['0']['weight']); ?> (g)</a>
						<a href="" class="list-group-item">品牌: <?php echo ($info['0']['brand']); ?></a>
						<a href="" class="list-group-item">ASIN: <?php echo ($info['0']['asin']); ?></a>
						<a href="" class="list-group-item">出版社: <?php echo ($info['0']['press']); ?></a>
						<a href="" class="list-group-item">名人推荐: 
						<?php
 $str = $info['0']['b_content']; $html = htmlspecialchars_decode($str); echo $html; ?>
						</a>
					</div>
				</div>	
				<div class="recent-posts">
					<h4>相关图书</h4>
					<div class="recent-posts-info">
						<div class="posts-left sngl-img">
							<a href=""><img src="/project5-19/Public/<?php echo ($info['0']['relatepic']); ?>" alt="" style="width:140px"/> </a>
						</div>
						<div class="posts-right">
							<lable>June 5, 2015</lable>
							<h5><a href="/project5-19/Public/Home/single.html">FINIBUS BONORUM MALORUM </a></h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing incididunt.</p>
							<a href="/project5-19/Public/Home/single.html" class="btn btn-primary hvr-rectangle-in">Read More</a>
						</div>
						<div class="clearfix"> </div>
					</div>	
					<div class="recent-posts-info">
						<div class="posts-left sngl-img">
							<a href="/project5-19/Public/Home/single.html"> <img src="/project5-19/Public/Home/images/img16.jpg" alt=""/> </a>
						</div>
						<div class="posts-right">
							<lable>June 5, 2015</lable>
							<h5><a href="/project5-19/Public/Home/single.html">FINIBUS BONORUM MALORUM </a></h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing incididunt.</p>
							<a href="/project5-19/Public/Home/single.html" class="btn btn-primary hvr-rectangle-in">Read More</a>
						</div>
						<div class="clearfix"> </div>
					</div>	
					<div class="clearfix"> </div>
				</div>
				<!-- <div class="comments">
					<h4>回复评论</h4>
					<div class="comments-info">
						<div class="cmnt-icon-left">
							<a href="/project5-19/Public/Home/single.html"><img src="/project5-19/Public/Home/images/icon1.png" alt=""/></a>
						</div>
						<div class="cmnt-icon-right">
							<p>June 1, 2015时间</p>
							<p><a href="/project5-19/Public/Home/single.html">用户</a></p>
						</div>
						<div class="clearfix"> </div>
						<p class="cmmnt">回复内容</p>
					</div>
					<div class="comments-info cmnts-mddl">
						<div class="cmnt-icon-left">
							<a href="/project5-19/Public/Home/single.html"><img src="/project5-19/Public/Home/images/icon1.png" alt=""/></a>
						</div>
						<div class="cmnt-icon-right">
							<p>June 1, 2015</p>
							<p><a href="/project5-19/Public/Home/single.html">用户</a></p>
						</div>
						<div class="clearfix"> </div>
						<p class="cmmnt">回复内容</p>
					</div>
					<div class="comments-info">
						<div class="cmnt-icon-left">
							<a href="/project5-19/Public/Home/single.html"><img src="/project5-19/Public/Home/images/icon1.png" alt=""/></a>
						</div>
						<div class="cmnt-icon-right">
							<p>June 1, 2015</p>
							<p><a href="/project5-19/Public/Home/single.html">用户</a></p>
						</div>
						<div class="clearfix"> </div>
						<p class="cmmnt">回复内容</p>
					</div>
				</div> -->
			</div>
			<div class="clearfix"> </div>
		</div>	
	</div>
<!--//single-page-->

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