<?php if (!defined('THINK_PATH')) exit();?>!<DOCTYPE html>
<html>
<head>
<title>主页</title>

<link href="/project5-19/Public/Home/css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="/project5-19/Public/Home/css/body.css" rel='stylesheet' type='text/css' />
<link href="/project5-19/Public/Home/css/search.css" rel='stylesheet' type='text/css' />


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="/project5-19/Public/Home/js/jquery.min.js"></script>

<!-- Custom Theme files -->
<link href="/project5-19/Public/Home/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.useso.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
<link href="/project5-19/Public/Home/css/lrtk.css" rel="stylesheet" type="text/css" />
<link href="/project5-19/Public/Home/css/guangao.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.useso.com/css?family=Niconne' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="/project5-19/Public/Home/js/move-top.js"></script>
<script type="text/javascript" src="/project5-19/Public/Home/js/easing.js"></script>
<script type="text/javascript" src="/project5-19/Public/Home/js/luo.js"></script>
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
 /* #clock{
    font :20px sans;background: #ddf;
      padding: 10px;
      float: right;
      border-radius:10px;
  }*/
  </style>
</head>
<body>
<ul id="side-bar" class="side-pannel side-bar">
  <a href="javascript:;" class="gotop" style="display:none;"><s class="g-icon-top"></s></a>
  <a href="http://wpa.qq.com/msgrd?v=3&uin=123456789&site=qq&menu=yes" target="_blank" class="text"><s class="g-icon-qq1"></s><span>在线咨询</span></a>
  <a href="http://weibo.com/" target="_blank" class="text weibo"><s class="g-icon-weibo1"></s><span>微博</span></a>
  <a href="javascript:;" class="qr"><s class="g-icon-qr1"></s><i></i></a>
  <a href="http://koubei.baidu.com/" class="text survey" target="_blank"><s class="g-icon-survey1"></s><span>百度口碑</span></a>
</ul>



  <!-- header-section-starts -->
  <div class="header-banner">
    <div class="container">
      <div class="home">
          <a href="/project5-19/Public/Home/index.html"><span class="glyphicon glyphicon-home"></span></a>
      </div>
      <div class="header-top">
      <span id="clock"></span>
                <script type="text/javascript">
            // var clock =document.getElementById('clock');
s
            // function displayTime(){
              
            //   var now = new Date();
            //   clock.innerHTML =now.toLocaleTimeString();
            //   setTimeout(displayTime,1000);
            // }
            // window.onload =displayTime;
            // </script>
<!-- 雪花特效 -->
<canvas id="snowFallTop" class="snowFall snowFallTop" width="1220" height="28" style="left: 321px;"></canvas>
<canvas id="snowFallLeft" class="snowFall snowFallLeft" width="321" height="1342" style="width: 321px;background:#ffffff"></canvas>
<canvas id="snowFallRight" class="snowFall snowFallRight" width="321" height="1342" style="width: 321px;background:#ffffff"></canvas>
<script type="text/javascript" src="/project5-19/Public/Home/js/snow.min.js"></script>
<!-- 特效结束 -->
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
 }else{ echo "<a>".$_SESSION['username']."</a>"; } ?>
              
              
          </li>
          <li><a href="<?php echo U('Home/Logout/logout');?>">退出</a></li>
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
      <div class="header-bottom-grids text-center">
        <div class="header-bottom-grid1">
          <span class="glyphicon glyphicon-leaf"></span>          
          <h4>资源</h4>
        </div>
        <div class="header-bottom-grid2">
          <span class="glyphicon glyphicon-certificate"></span>
          <h4>服务</h4>
        </div>
        <div class="header-bottom-grid3">
          <span class="glyphicon glyphicon-tree-deciduous"></span>
          <h4>概况</h4>
        </div>
        <div class="header-bottom-grid4">
          <span class="glyphicon glyphicon-screenshot"></span>
          <h4>消息</h4>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
  <!-- header-section-ends -->
  <!-- content-section-starts -->
  <div class="services">
    <div class="container">
      <div class="services-top-grids text-center">
        <!-- <div class="secvice-top-grid-1">
          <h3>Mirum est notare</h3>
          <p>ziyuan</p>
          <div class="icon1">
            <i class="icon1"></i>
          </div>
        </div>
        <div class="secvice-top-grid-2">
          <h3>Mirum est notare</h3>
          <p>fuwu</p>
          <div class="icon1">
            <i class="icon2"></i>
          </div>
        </div>
        <div class="secvice-top-grid-3">
          <h3>Mirum est notare</h3>
          <p>gaikuang</p>
          <div class="icon1">
            <i class="icon3"></i>
          </div>
        </div>
        <div class="secvice-top-grid-4">
          <h3>Mirum est notare</h3>
          <p>xiaoxi</p>
          <div class="icon1">
            <i class="icon4"></i>
          </div>
        </div> -->
        <div class="clearfix"></div>
      </div>
      <div class="services-bottom-grids">
        <div class="col-md-3 services-bottom-left">
          <img src="/project5-19/Public/Home/images/s1.jpg" alt="" />
        </div>
        <div class="col-md-6 services-bottom-middle text-center">
<div class="Tab-1">
          <div class="ya-tabs" style="height: 203px;">
            <ul class="ya-tabs-head">
              <li class="ya-active">兄弟连搜索</li>
              <li class="">馆藏目录</li>
              <li class="">电子期刊</li>
              <li class="">数据库</li>
              <!-- <li>WEB资源</li> -->
            </ul>
            <ul class="ya-tabs-body">
              <li style="display: none;" class="item">
<div class="search">
            <p>说明：该发现平台可分别用中文、外文搜索</p>
<iframe width="460" height="66" frameborder="0" src="http://en.nankai.findplus.cn/search.html?tag=new" scrolling="no" framespacing="0" marginheight="0" marginwidth="0" hspace="0" vspace="0" border="0" id="duxiuframe14" allowtransparency="true" style="display: block; margin: 10px auto 30px auto;"></iframe>

<div class="search-sider">
    <ul>
      <li><a target="_blank" href="http://scholar.google.com/">google学术搜索</a></li>
      <li>|</li>
      <li><a target="_blank" href="http://wenku.baidu.com/">百度文库</a></li>
      <li>|</li>
      <li><a target="_blank" href="http://nankai.cn.libguides.com/content.php?pid=308901">学科服务资源</a></li>
    </ul>
</div>
</div>
</li>

    <li style="display: list-item;" class="item">
    <p>说明：查找本馆收藏的图书、报刊等纸质资源</p>
    <div class="search">



    <!-- <form action="<?php echo U('Admin/Quan/Index');?>" method="get" id="mid">
          <div class="widget-content nopadding">
            <div role="grid" class="dataTables_wrapper" id=""><div class=""><div id="" class="dataTables_length">
            <ul class="select2-results">   </ul></div></div>
            <select name="num" size="1" aria-controls="DataTables_Table_0" onChange="document.getElementById('mid').submit()" id="select_1" onclick="setCookie('select_1',this.selectedIndex)" >
            <option value="5">5</option>
            <option value="10">10</option>
            <option value="15">15</option>
            <option value="20">20</option>
            </select>
            <script src="/project5-19/Public/Admin/js/jquery-1.8.3.min.js"></script>
            <script type="text/javascript">
            var selectedIndex = getCookie("select_1");
            // alert(selectedIndex);
            if(selectedIndex != null) {
            document.getElementById("select_1").selectedIndex = selectedIndex;
          }
          </script>
         <!--   <label>Search: <input type="text" aria-controls="DataTables_Table_0"></label></button> -->
            <!-- <label><input value="<?php echo ($_GET['keyword']); ?>" name="keyword" type="search" class="form-control input-sm" placeholder="" aria-controls="dataTables-example"></label>
            <button class="btn btn-primary">搜索</button>

    </form> -->



    <form target="_blank" action="<?php echo U('Home/Index/Index');?>" method="get">
          <div class="search-common">
          <div class="search-ever">
          <div class="search-ever-left">
          <div class="search-ever-warp">
            <select name="strSearchType" class="search-sel">
            <?php if(is_array($res1)): foreach($res1 as $key=>$vo): ?><option value="title"><?php echo ($vo["name"]); ?></option><?php endforeach; endif; ?>
            </select>
        </div>
        </div>
        <div class="search-txt">
        <!-- <input type="text" id="strtext" name="strText"> -->
        <label><input value="<?php echo ($_GET['keyword']); ?>" name="keyword" type="search" class="form-control input-sm" placeholder="" aria-controls="dataTables-example">
        </label>
        </div>
        </div>
        <!-- <input type="hidden" value="检索" id="Submit2" name="Submit2"> -->

        </div>
                  <!-- / .search-common -->
                  <div class="search-btn"> <a class="common active" href="<?php echo U('Home/Book/gallery');?>">高级检索</a></div>
    </form>




                  <div class="fn-clear"></div>
                  
                </div>
                <!-- / .search --> 
              </li>
              <li class="item" style="display: none;">
                <p>说明：查找本馆收藏的全文电子期刊</p>
                <div class="search">
                  <form target="_blank" onsubmit="document.charset='gb2312';" name="form2" method="post" action="http://www2.lib.nankai.edu.cn/nav/Foreign/e_data_search.asp">
                  <div class="search-common">
                    <div class="search-ever">
                      <div class="search-ever-left">
                        <div class="search-ever-warp">                        
                            <select id="selectName" name="selectName" class="search-sel">
                              <option value="fullname">期刊名称关键词</option>
                              <option value="data">来源数据库</option>
                              <option value="source">ISSN</option>
                            </select>                        
                        </div>
                      </div>
                      
                      <div class="search-txt">
                        <input type="text" id="name" name="name">
                        <input type="hidden" value="查找" name="Submit">
                      </div>
                    </div>
                  </div>
                  <div class="search-btn"><button style="border:none;" class="common active" id="subm" name="subm" type="submit">检索</button></div>
                  </form>
                  <div class="fn-clear"></div>
                  <div class="search-sider">
                    <ul>
                      <li><a target="_blank" href="/zydh/zwwhxqk">中外文核心期刊</a></li>
                      <li>|</li>
                      <li><a target="_blank" href="http://www2.lib.nankai.edu.cn/nav/Foreign/index.asp">外文期刊导航</a></li>
                    </ul>
                  </div>
                </div>
                <!-- / .search --> 
              </li>
              <li class="item" style="display: none;">
                <p>说明：查找本馆购买和自建的数据库</p>
                <div class="search">
                  <form target="_blank" onsubmit="document.charset='gb2312';" name="form3" method="post" action="http://www2.lib.nankai.edu.cn/nav/Chinese/show/data_search.asp">
                  <div class="search-common">
                    <div class="search-ever">
                      <div class="search-ever-left">
                        <div class="search-ever-warp">
                          
                            <select name="subject" class="search-sel">
                              <option value="">请选择学科</option>
                              <option value="生物">生物</option>
                              <option value="物理">物理</option>
                              <option value="数学">数学</option>
                              <option value="历史">历史</option>
                              <option value="哲学">哲学</option>
                              <option value="教育">教育</option>
                              <option value="环境科学">环境科学</option>
                              <option value="社会学">社会学</option>
                              <option value="心理学">心理学</option>
                              <option value="化学化工">化学化工</option>
                              <option value="医药卫生">医药卫生</option>
                              <option value="化学化工">化学化工</option>
                              <option value="文学艺术">文学艺术</option>
                              <option value="语言文字">语言文字</option>
                              <option value="材料科学">材料科学</option>
                              <option value="政治/法律">政治/法律</option>
                              <option value="经济/商业/管理">经济/商业/管理</option>
                              <option value="计算机/电子/信息">计算机/电子/信息</option>
                              <option value="图书情报档案">图书情报档案</option>
                              <option value="其他">其他</option>
                            </select>
                        </div>
                      </div>
                      <div class="search-txt">
                        <input type="text" id="keyword" name="keyword">
                      </div>
                    </div>
                  </div>
                  <!-- / .search-common -->
                  
                  <div class="search-btn"> <button style="border:none;" class="common active" id="subm" name="subm" type="submit">检索</button> </div>
                  </form>
                  <div class="fn-clear"></div>
                  <div class="search-sider">
                    <ul>
                      <li><a target="_blank" href="http://www2.lib.nankai.edu.cn/nav/index.asp">常用数据库</a></li>
                      <li>|</li>
                      <li><a target="_blank" href="http://www2.lib.nankai.edu.cn/nav/Chinese/show/data_query.asp?kind=8">试用数据库</a></li>
                      <li>|</li>
                      <li><a target="_blank" href="http://www2.lib.nankai.edu.cn/nav/Chinese/show/data_query2.asp?kind=9">自建数据库</a></li>
                    </ul>
                  </div>
                </div>
                <!-- / .search --> 
              </li>
      <li class="item" style="display: none;">
<p>说明：轻松实现跨库检索、成员馆之间的原文传递及资源共享</p>
<iframe width="400" height="66" frameborder="0" src="http://www.blyun.com/pop/isearch.jsp?style=14&amp;sw=%CA%E4%C8%EB%BC%EC%CB%F7%B4%CA" scrolling="no" framespacing="0" marginheight="0" marginwidth="0" hspace="0" vspace="0" border="0" id="duxiuframe14" allowtransparency="true" style="display: block; margin: 20px auto 59px auto;"></iframe>
                
                
                <!-- / .search --> 
              </li>  
            </ul>
          </div>
          <!--/选项卡 --> 
        </div>
        <!-- <h3>搜索 </h3>

          <p>search </p> -->
        </div>
        <div class="col-md-3 services-bottom-right">
          <img src="/project5-19/Public/Home/images/s2.jpg" alt="" />
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
<!-- 资源 -->
  <div class="panels-flexible-region panels-flexible-region-4-resource_right panels-flexible-region-last ">
  <div class="inside panels-flexible-region-inside panels-flexible-region-4-resource_right-inside panels-flexible-region-inside-last">
<div class="panel-pane pane-block pane-block-16">
  
        <h2 class="pane-title">资源</h2>
    
  
  <div class="pane-content">
    <p>
  <img style="width: 56px; height: 56px; float: left;" src="/project5-19/Public/Home/images/1.png" alt=""><span class="homepage-ziyuan">电子资源</span></p>
<div class="homepage-ziyuan-list">
  <a target="_blank" href="http://dbnav.lib.pku.edu.cn">数据库</a> <a target="_blank" href="http://zm8lp2fe5j.search.serialssolutions.com/?L=ZM8LP2FE5J&amp;tab=JOURNALS">电子期刊</a> <a target="_blank" href="http://zm8lp2fe5j.search.serialssolutions.com/?L=ZM8LP2FE5J&amp;tab=BOOKS">电子图书</a> <a target="_blank" href="http://162.105.138.115/">多媒体资源</a> <a target="_blank" href="http://202.117.24.168/cm/main.jsp">网络资源</a> <a target="_blank" href="http://appendcd.lib.pku.edu.cn/emlib4/format/release/aspx/eml_homepage.aspx?RUID=1">随书光盘</a> <a target="_blank" href="/portal/zy/dzzy/xueweilunwen">学位论文</a> <a target="_blank" href="/portal/zy/dzzy/dianzijiaocan">电子教参书</a> <a target="_blank" href="/portal/zy/dzzy/gjrj/spss">工具与软件</a></div>
  </div>

  
  </div>
<div class="panel-separator"></div><div class="panel-pane pane-block pane-block-17">
  
      
  
  <div class="pane-content">
    <p>
  <img style="width: 56px; height: 56px; float: left;" src="/project5-19/Public/Home/images/2.png" alt=""><span class="homepage-ziyuan">纸质资源</span></p>
<div class="homepage-ziyuan-list">
  <a target="_blank" href="zy/zzzy/shukanbaozhi">书刊报纸</a> <a target="_blank" href="/portal/zy/zzzy/guji">古籍</a> <a target="_blank" href="zy/zzzy/tecang">特藏</a> <a target="_blank" href="/portal/zy/zzzy/xueweilunwen">学位论文</a> <a target="_blank" href="/portal/mylib/services/reference">教学参考书</a></div>
  </div>

  
  </div>
<div class="panel-separator"></div><div class="panel-pane pane-block pane-block-18">
  
  <div class="pane-content">
    <p>
  <img style="width: 56px; float: left; height: 56px" src="/project5-19/Public/Home/images/3.png" alt=""><a href="http://www.lib.pku.edu.cn/portal/special"><span class="homepage-ziyuan">数字特藏</span></a></p>
<div class="homepage-ziyuan-list">
  <a target="_blank" href="http://ir.pku.edu.cn">北大机构知识库</a> <a target="_blank" href="http://bowen.lib.pku.edu.cn/">北大博文</a> <a target="_blank" href="http://162.105.138.115/index.php?m=content&amp;c=index&amp;a=lists&amp;catid=33&amp;sserial=3713">北大讲座</a> <a target="_blank" href="/portal/zy/tczy/beidamingshi">北大名师</a> <a target="_blank" href="http://bjhg.lib.pku.edu.cn/">北京历史地理</a> <a target="_blank" href="http://162.105.138.175/dlib/List.asp?lang=gb&amp;DocGroupID=11">燕大论文</a> <a target="_blank" href="http://rbdl.calis.edu.cn/aopac/indexold.jsp">古文献资源库</a> <a target="_blank" href="http://localsev.lib.pku.edu.cn/lizhengdao/home/index.asp">李政道图书馆</a> <a target="_blank" href="http://162.105.138.110:8011/mgqk/">民国旧报刊</a> <a target="_blank" href="http://dbook.lib.pku.edu.cn/hourenzhi/">侯仁之赠书</a> <a target="_blank" href="http://dbook.lib.pku.edu.cn/duanbaolin/">段宝林赠书</a> <a target="_blank" href="http://www.lib.pku.edu.cn/portal/special">更多</a></div>

  </div>

  
  </div>
  </div>
</div>
</div>
</div>

<div class="clearfix"></div>
</div>


  <div class="items">
    <div class="container">
      <div class="col-md-4 item-1">
        <img src="/project5-19/Public/Home/images/i1.jpg" alt="" />
        <h3>图书</h3>
      </div>
      <div class="col-md-4 item-2">
        <img src="/project5-19/Public/Home/images/i2.jpg" alt="" />
        <h3>书架</h3>
      </div>
        <!-- 广告 -->
         <div id="big">
          <a href="" target="_blank"><img width="307" height="319" src="/project5-19/Public/Home/images/index.png"></a> 
          <div class="msg_block" style="background:url(/project5-19/Public<?php echo ($dian['0']['adimg']); ?>) no-repeat right top;"></div>
        </div>
  <script type="text/javascript" src="/project5-19/Public/Home/js/jquery-1.4.2.min.js"></script>
  <script type="text/javascript">  
  $(document).ready(function(){
    $("#big").hover(function(){
      $("#big img, .msg_block").stop().animate({width:'160px',height:'110px'}, 500);
    },function(){
      // $('#big img').stop().animate({width:'50px',height:'52px'}, 220);
      // $(".msg_block").stop().animate({width:'50px',height:'50px'}, 200);
      $("#big img, .msg_block").stop().animate({width:'50px',height:'50px'}, 200);

    })
  })
  </script>
      <div class="col-md-4 item-3 text-center">
              <h4>图书馆公告</h4>

      <div id="demo" class="conter">
           <div id="demo1">
              <?php if(is_array($res)): foreach($res as $key=>$vo): ?><p><?php echo ($vo["title"]); ?></p>
              <p><?php echo ($vo["time"]); ?></p><?php endforeach; endif; ?>
           </div>
           <div id="demo2"></div>
      </div>

      </div>
      <script language="javascript">
            var speed=35;
            var demo=document.getElementById("demo");
            var demo2=document.getElementById("demo2");
            var demo1=document.getElementById("demo1");
            demo2.innerHTML=demo1.innerHTML;
            function gun(){
            if(demo2.offsetTop-demo.scrollTop<=0)
            demo.scrollTop-=demo1.offsetHeight
            else{
            demo.scrollTop++
            }
            }
            var a=setInterval(gun,speed)
            demo.onmouseover=function(){clearInterval(a)}
            demo.onmouseout=function(){a=setInterval(gun,speed)}
      </script>
      
 

      <div class="clearfix"></div>
    </div>
  </div>
      <!-- testimonials -->
<style type="text/css">
    /**{margin: 0;padding: 0;list-style:none;}*/
    .luobo{width: 1000px;height: 365px;
      margin: 50px;/*margin-left:60px;*//*border:1px solid blue;*/overflow: hidden;position: relative;}
    .luobo .img{width: 6000px;position: absolute;}
    .luobo .img li{float: left;}
    .luobo .img li img{width: 1000px;}
    .btn{width: 30px;height: 50px;position: absolute;top:50%;
    background: rgba(0,0,0,0.5);text-align:center;margin-top: -25px;
    line-height:50px;color:#fff;font-size:40px;font-family:'宋体';
    cursor:pointer;
    }
    .btn_l{left:0px;}
    .btn_r{right:0px;}
    .num{position: absolute;width: 100%;bottom:10px;left: 0px;text-align:center;}
    .num li{width: 10px;height: 10px;background: #333;
    border-radius:50%;margin: 0 3px;display:inline-block;
    }
    .num .on{background: #f39;}
    .conter{
            overflow:hidden;
            height:182px;
            width:300px;
            border:1px solid #000000;
            margin:10px}
    #demo p{
            display:block;
            color:#fff;
            padding-left:2px;
            overflow:hidden;
            white-space:nowrap;
            width:282px;
            text-overflow:ellipsis;
            }

    #demo p:hover{
            color:#A6192E}


    /*广告*/

    #big{
      right:0px;
      float:right;
      position:relative;
      margin-top:0px;

    }

    #big img{
      z-index:99;
      right:0px;
      width:50px;
      position:absolute;
      top:0px;
      height:52px;
      background: red;
      ms-interpolation-mode:bicubic;
    }
    #big .msg_block{
      right:0px;
      overflow:hidden;
      width:50px;
      position:absolute;
      top:0px;
      height:50px;
    }

      </style>



  <!-- <div class="testimonials">
    <div class="container">
      <div class="testimonial-info"> -->



<div align="center"> 
      <div class="luobo">
     
      <ul class="img">
       <?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href=""><img src="/project5-19/Public/<?php echo ($vo["pic"]); ?>" width="100%"></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
      </ul>
     
    <div class="btn btn_l">&lt;</div>
    <div class="btn btn_r">&gt;</div>
    <ul class="num">
      <li class="on"></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
    </ul>
  </div>
</div>

  <script type="text/javascript" src="_PUBLIC__/Home/js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript">
    //定义全局变量
    var i = 0;
    //无缝第一步 克隆第一张图片
    var cloneimg = $('.luobo .img li').first().clone();
    //插入进去 克隆第二步
    $('.luobo .img').append(cloneimg);
    //获取图片的个数
    var length = $('.luobo .img li').length;
    // console.log(length);

    // 启动定时器
    var inte = setInterval(moveR,3000);
    //鼠标悬停事件
    $('.luobo').hover(function(){
      //鼠标移入以后 清除定时器
      clearInterval(inte);
    },function(){
      //启动轮播
      inte = setInterval(moveR,3000);
    })

    //给小圆点绑定鼠标滑入事件
    $('.luobo .num li').hover(function(){
      //获取当前小圆点的索引
      var index = $(this).index();
      i = index;
      //计算新left
      newLeft = i*1000;
      //设置样式
      $('.luobo .img').animate({left:-newLeft+'px'},500);
      //在方法中移动园点 class="on"
      $('.luobo .num li').eq(i).addClass('on').siblings().removeClass();
    })

    // 绑定向右移动事件
    $('.btn_r').click(function(){
      moveR();
    })
    // 绑定向左移动事件
    $('.btn_l').click(function(){
      moveL();
    })
    // 封装向右移动的方法
    function moveR(){
      i++;
      //检测越界
      if(i == length){
        // i = 0;//不能等于0 无缝第三步
        $('.luobo .img').css({left:0});
        //把i改成1
        i = 1;
      }
      //计算新left
      newLeft = i*1000;
      //修复bug
      if(i == length-1){
        $('.luobo .num li').eq(0).addClass('on').siblings().removeClass();
      }else{
        $('.luobo .num li').eq(i).addClass('on').siblings().removeClass();
      }
      //设置样式 //stop是为了运行更流畅
      $('.luobo .img').stop().animate({left:-newLeft+'px'},500);
      //在方法中移动园点 class="on"
    }
    // 封装向左移动的方法
    function moveL(){
      i--;
      //检测越界
      if(i == -1){
        // i = length-1;
        //第四步
        $('.luobo .img').css({left:-(length-1)*1000});
        i = length-2;
      }
      //计算新left
      newLeft = i*1000;
      //设置样式
      $('.luobo .img').stop().animate({left:-newLeft+'px'},500);
      //在方法中移动园点 class="on"
      $('.luobo .num li').eq(i).addClass('on').siblings().removeClass();
    }
  </script>




    <!--     <h3>轮播</h3>
        <h5>介绍</span></h5>
      </div>
      <div class="testimonial-grids">
        <div class="testimonial-grid">
          <p><span>"</span> 书籍是人们进步的阶梯.<span> "</span></p>
        </div>
      </div>
    </div>
  </div> -->
  <!-- //testimonials -->
    <!-- <div class="copyrights">Collect from <a href="/project5-19/Public/Home/http://www.cssmoban.com/" ></a></div> -->
  <!-- news -->
  <div class="news" id="news">
    <div class="container">
      <div class="news-text">
        <h3>图书</h3>
        <h5>热销图书 </span></h5>
      </div>
      <div class="news-grids">
        <div class="col-md-3 news-grid wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
          <a href="/project5-19/Public/Home/single.html">书名</a>
          <span>平凡的世界.2版</span>
          <a class="mask" href="/project5-19/Public/Home/single.html"><img src="/project5-19/Public/Home/images/img1.jpg" class="img-responsive zoom-img" alt="" height="300px"/></a>
          <div class="news-info">
            <p>《平凡的世界(套装共3册)》是一部现实主义小说，也是小说化的家族史。作家高度浓缩了中国西北农村的历史变迁过程，作品达到了思想性与艺术性的高度统一，特别是主人公面对困境艰苦奋斗的精神，对今天的大学生朋友仍有启迪。这是一部全景式地表现中国当代城乡社会生活的长篇小说。《平凡的 世界(套装共3册)》共三部。作者在近十年问广阔背景上，通过复杂的矛盾纠葛，刻画了社会各阶层众多普通人的形象。劳动与爱情，挫折与追求，痛苦与欢乐，日常生活与巨大社会冲突，纷繁地交织在一起，深刻地展示了普通人在大时代历史进程中所走过的艰难曲折的道路。</p>
            <a class="button" href="/project5-19/Public/Home/single.html"><img src="/project5-19/Public/Home/images/read.png" alt=""></a>
          </div>
        </div>
        <div class="col-md-3 news-grid wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
          <a href="/project5-19/Public/Home/single.html">书名</a>
          <span>小王子</span>
          <a class="mask" href="/project5-19/Public/Home/single.html"><img src="/project5-19/Public/Home/images/img2.jpg" class="img-responsive zoom-img" alt="" height="300px" /></a>
          <div class="news-info">
            <p>本书是法国童话《小王子》中英法文对照译本，全文以图文并茂的形式讲述了来自太阳系中某个不为人知的小行星的小男孩——小王子，因与美丽而骄傲的玫瑰发生了感情纠葛负气出走，他在各星球中漫游，造访了国王、自负的人、酒鬼、商人、掌灯人和地理学家，最后来到了地球，在这里他与小狐狸建立了友谊，学到了许多人生的真谛。</p>
            <a class="button" href="/project5-19/Public/Home/single.html"><img src="/project5-19/Public/Home/images/read.png" alt=""></a>
          </div>
        </div>
        <div class="col-md-3 news-grid wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
          <a href="/project5-19/Public/Home/single.html">书名</a>
          <span>大学英语四级听力快速通关800题</span>
          <a class="mask" href="/project5-19/Public/Home/single.html"><img src="/project5-19/Public/Home/images/img3.jpg" class="img-responsive zoom-img" alt="" height="300px"/></a>
          <div class="news-info">
            <p>本书根据大学英语四六级考试官网公布的四六级听力考试试题的改革信息及时作出调整，增加短篇新闻听力新题型，删除短对话和短文听写。全书短篇新闻听力新题型部分，包括13个模拟演练和8套四级听力全真模拟试卷，共计包括短篇新闻听力新题型200题。</p>
            <a class="button" href="/project5-19/Public/Home/single.html"><img src="/project5-19/Public/Home/images/read.png" alt=""></a>
          </div>
        </div>
        <div class="col-md-3 news-grid wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
          <a href="/project5-19/Public/Home/single.html">书名</a>
          <span>围城.2版</span>
          <a class="mask" href="/project5-19/Public/Home/single.html"><img src="/project5-19/Public/Home/images/img4.jpg" class="img-responsive zoom-img" alt="" height="300px" /></a>
          <div class="news-info">
            <p>《围城》三十年来横贯常销畅销小说之首。《围城》是钱钟书唯一的一部长篇小说，堪称中国现当代长篇小说的经典。小说塑造了抗战开初一类知识分子的群像，生动反映了在国家特定时期，特殊人群的行为操守、以及困惑。从另一个角度记述了当时的情景、氛围。虽然有具体的历史背景，但这部小说揭示的只是人群的弱点，在今天依然能够引起人们的共鸣。第一版于1947年由上海晨光出版公司出版。《围城》是中国现代文学史上一部风格独特的讽刺小说。被誉为“新儒林外史”。“围在城里的人想逃出来，城外的人想冲进去。对婚姻也罢，职业也罢，人生的愿望大都如此。”——杨绛</p>
            <a class="button" href="/project5-19/Public/Home/single.html"><img src="/project5-19/Public/Home/images/read.png" alt=""></a>
          </div>
        </div>
        <div class="clearfix"> </div>
      </div>
    </div>
  </div>
  <!-- //news -->
  <!-- content-section-ends -->



  <!-- <div class="get-in-touch"> -->
  <!--     <div class="container">

         
</div> -->

<!--   </div>
 -->


  <!-- footer-section -->
  <div class="footer">
    <div class="container">
      <div class="copyright text-center">
       
        <ul>
            <li><a target="_blank" href="/other/wzdt">网站地图</a></li>
            <li>|</li>
            <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a target="_blank" href="<?php echo ($vo["url"]); ?>"><?php echo ($vo["name"]); ?></a></li>
            <li>|</li><?php endforeach; endif; else: echo "" ;endif; ?>
            <li><a target="_blank" href="/other/xglj">相关链接</a></li>
          
      
        </ul>
        <?php if(is_array($inf)): $i = 0; $__LIST__ = $inf;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><p><?php echo ($vo["config"]); ?></p><?php endforeach; endif; else: echo "" ;endif; ?>
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
<a href="/project5-19/Public/Home/#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!----> 

</body>
</html>