<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<title>图书馆</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="/project11-5/Public/Admin/css/bootstrap.min.css" />
<link rel="stylesheet" href="/project11-5/Public/Admin/css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="/project11-5/Public/Admin/css/fullcalendar.css" />
<link rel="stylesheet" href="/project11-5/Public/Admin/css/matrix-style.css" />
<link rel="stylesheet" href="/project11-5/Public/Admin/css/matrix-media.css" />
<link href="/project11-5/Public/Admin/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link rel="stylesheet" href="/project11-5/Public/Admin/css/jquery.gritter.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="/project11-5/Public/Admin/dashboard.html">图书馆管理系统</a></h1>
</div>
<!--close-Header-part--> 


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="/project11-5/Public/Admin/html/login" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">欢迎您登录&nbsp;&nbsp;<b style="color:blue;"><?php echo $_SESSION['username']; ?></b></span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="/project11-5/Public/Admin/#"><i class="icon-user"></i> My Profile</a></li>
        <li class="divider"></li>
        <li><a href="/project11-5/Public/Admin/#"><i class="icon-check"></i> My Tasks</a></li>
        <li class="divider"></li>
        <li><a href="<?php echo U('Admin/Logout/logout');?>"><i class="icon-key"></i> 退出登录</a></li>
      </ul>
    </li>
    <li class="dropdown" id="menu-messages"><a href="/project11-5/Public/Admin/#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">信息</span> <span class="label label-important">5</span> <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a class="sAdd" title="" href="/project11-5/Public/Admin/#"><i class="icon-plus"></i> 新信息</a></li>
        <li class="divider"></li>
        <li><a class="sInbox" title="" href="/project11-5/Public/Admin/#"><i class="icon-envelope"></i> inbox</a></li>
        <li class="divider"></li>
        <li><a class="sOutbox" title="" href="/project11-5/Public/Admin/#"><i class="icon-arrow-up"></i> outbox</a></li>
        <li class="divider"></li>
        <li><a class="sTrash" title="" href="/project11-5/Public/Admin/#"><i class="icon-trash"></i> trash</a></li>
      </ul>
    </li>
    <li class=""><a title="" href="/project11-5/Public/Admin/#"><i class="icon icon-cog"></i> <span class="text">设置</span></a></li>
    <li class=""><a title="" href="<?php echo U('Admin/Logout/logout');?>"><i class="icon icon-share-alt"></i> <span class="text">退出</span></a></li>
    <li class="">
        <a id="time1" style="color:#ccc;">
        <script> 
          setInterval("document.getElementById('time1').innerHTML = new Date().toLocaleString();", 1000);
        </script></a>
    </li>
  </ul>
</div>
<!--close-top-Header-menu-->
<!--start-top-serch-->
<div id="search">
  <input type="text" placeholder="点击搜索"/>
  <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div>
<!--close-top-serch-->
<!--sidebar-menu-->
<div id="sidebar"><a href="/project11-5/Public/Admin/#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
     <li class="submenu"> <a href="/project11-5/Public/Admin/#"><i class="icon icon-th-list"></i> <span>首页</span> <span class="label label-important">3</span></a>
      <ul>
        <li><a href="<?php echo U('Admin/Index/index');?>">首页</a></li>
      </ul>
    </li>
    <li class="submenu"> <a href="/project11-5/Public/Admin/#"><i class="icon icon-th-list"></i> <span>信息管理</span> <span class="label label-important">3</span></a>
      <ul>
        <li><a href="<?php echo U('Admin/Infor/add');?>">信息添加</a></li>
        <li><a href="<?php echo U('Admin/Infor/index');?>">信息查看</a></li>
      </ul>
    </li>
    <li class="submenu"> <a href="/project11-5/Public/Admin/#"><i class="icon icon-fullscreen"></i> <span>用户列表</span> <span class="label label-important">6</span></a>
      <ul>
        <li><a href="<?php echo U('Admin/User/add');?>">用户添加</a></li>
        <li><a href="<?php echo U('Admin/User/index');?>">用户列表</a></li>
      </ul>
    </li>
    <li class="submenu"> <a href="/project11-5/Public/Admin/#"><i class="icon icon-th-list"></i> <span>管理员管理</span> <span class="label label-important">3</span></a>
      <ul>
        <li><a href="<?php echo U('Admin/Guser/add');?>">管理员添加</a></li>
        <li><a href="<?php echo U('Admin/Guser/index');?>">管理员列表</a></li>
      </ul>
    </li>
    <li class="submenu"> <a href="/project11-5/Public/Admin/#"><i class="icon icon-fullscreen"></i> <span>权限管理</span> <span class="label label-important">6</span></a>
      <ul>
        <li><a href="<?php echo U('Admin/Quan/add');?>">添加权限</a></li>
        <li><a href="<?php echo U('Admin/Quan/index');?>">权限规则列表</a></li>
         <li><a href="<?php echo U('Admin/Quan/groupadd');?>">添加用户组</a></li>
         <li><a href="<?php echo U('Admin/Quan/group');?>">用户组列表</a></li>
      </ul>
    </li>
    <li class="submenu"> <a href="/project11-5/Public/Admin/#"><i class="icon icon-th-list"></i> <span>分类列表</span> <span class="label label-important">2</span></a>
      <ul>
        <li><a href="<?php echo U('Admin/Cate/add');?>">分类添加</a></li>
        <li><a href="<?php echo U('Admin/Cate/index');?>">分类列表</a></li>
      </ul>
    </li>
    <li class="submenu"> <a href="/project11-5/Public/Admin/#"><i class="icon icon-th"></i> <span>图书列表</span> <span class="label label-important">1</span></a>
      <ul>
        <li><a href="<?php echo U('Admin/Book/add');?>">图书添加</a></li>
        <li><a href="<?php echo U('Admin/Book/index');?>">图书列表</a></li>
      </ul>
    </li>
    <li class="submenu"> <a href="/project11-5/Public/Admin/#"><i class="icon icon-th"></i> <span>图书详情</span> <span class="label label-important">1</span></a>
      <ul>
        <li><a href="<?php echo U('Admin/Bookinfo/index');?>">图书列表</a></li>
      </ul>
    </li>
    <li class="submenu"> <a href="/project11-5/Public/Admin/#"><i class="icon icon-th"></i> <span>借阅管理</span> <span class="label label-important">1</span></a>
      <ul>
        <li><a href="<?php echo U('Admin/Jie/index');?>">借阅信息</a></li>
      </ul>
    </li>
    <li class="submenu"> <a href="/project11-5/Public/Admin/#"><i class="icon icon-file"></i> <span>评论表</span> <span class="label label-important">5</span></a>
     <ul>
        <li><a href="<?php echo U('Admin/Comm/add');?>">评论添加</a></li>
        <li><a href="<?php echo U('Admin/Comm/index');?>">评论列表</a></li>
      </ul>
    </li>
    <li class="submenu"> <a href="/project11-5/Public/Admin/#"><i class="icon icon-info-sign"></i> <span>积分表</span> <span class="label label-important">4</span></a>
     <ul>
        <li><a href="<?php echo U('Admin/Mask/add');?>">积分添加</a></li>
        <li><a href="<?php echo U('Admin/Mask/index');?>">积分列表</a></li>
      </ul>
    </li>
    <li class="submenu"> <a href="/project11-5/Public/Admin/#"><i class="icon icon-info-sign"></i> <span>广告管理</span> <span class="label label-important">4</span></a>
     <ul>
        <li><a href="<?php echo U('Admin/Advertise/add');?>">广告添加</a></li>
        <li><a href="<?php echo U('Admin/Advertise/index');?>">广告列表</a></li>
      </ul>
    </li>
    <li class="submenu"> <a href="/project11-5/Public/Admin/#"><i class="icon icon-info-sign"></i> <span>友情链接</span> <span class="label label-important">4</span></a>
     <ul>
        <li><a href="<?php echo U('Admin/Link/add');?>">链接添加</a></li>
        <li><a href="<?php echo U('Admin/Link/index');?>">链接列表</a></li>
      </ul>
    </li>
    <!-- <li class="content"> <span>Monthly Bandwidth Transfer</span>
      <div class="progress progress-mini progress-danger active progress-striped">
        <div style="width: 77%;" class="bar"></div>
      </div>
      <span class="percent">77%</span>
      <div class="stat">21419.94 / 14000 MB</div>
    </li>
    <li class="content"> <span>Disk Space Usage</span>
      <div class="progress progress-mini active progress-striped">
        <div style="width: 87%;" class="bar"></div>
      </div>
      <span class="percent">87%</span>
      <div class="stat">604.44 / 4000 MB</div>
    </li> -->
  </ul>
</div>
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="/project11-5/Public/Admin/index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
  </div>
<!--End-breadcrumbs-->

<!-- <!--Action boxes-->
 
  <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>用户添加</h5>
        </div>
        <div class="widget-content nopadding">
          <form class="form-horizontal" method="post" action="<?php echo U('Admin/User/insert');?>" enctype="multipart/form-data">
            <div class="control-group">
              <label class="control-label">用户名</label>
              <div class="controls">
                <input type="text" name="username" class="colorpicker input-big span11"  data-color="#ffffff">
                <span class="help-block">请输入用户名</span> </div>
            </div>
            <div class="control-group">
              <label class="control-label">密码</label>
              <div class="controls">
                <input type="password" name="password" class="colorpicker span11" data-color-format="rgba"  data-color="rgba(344,232,53,0.5)">
                <span class="help-block">请输入密码</span> </div>
            </div>
            <div class="control-group">
              <label class="control-label">年龄</label>
              <div class="controls">
                <input type="text" name="age" class="datepicker span11"  data-date-format="dd-mm-yyyy" data-date="01-02-2013">
                <span class="help-block">请输入年龄</span> </div>
            </div>
            <div class="control-group">
              <label class="control-label">性别</label>
              <div class="controls">
                <input type="radio" name="sex" value="男">男
                <input type="radio" name="sex" value="女">女
                <input type="radio" name="sex" value="保密">保密
                <span class="help-block">请输入性别</span> </div>
            </div>
            <div class="control-group">
              <label class="control-label">邮箱</label>
              <div class="controls">
                <input type="text" name="email" class="datepicker span11"  data-date-format="dd-mm-yyyy" data-date="01-02-2013">
                <span class="help-block">请输入邮箱</span> </div>
            </div>
            <div class="control-group">
              <label class="control-label">手机</label>
              <div class="controls">
                <input type="text" name="phone" class="datepicker span11"  data-date-format="dd-mm-yyyy" data-date="01-02-2013">
                <span class="help-block">请输入手机</span> </div>
            </div>
            <div class="control-group">
              <label class="control-label">地址</label>
              <div class="controls">
                <input type="text" name="address" class="datepicker span11"  data-date-format="dd-mm-yyyy" data-date="01-02-2013">
                <span class="help-block">请输入地址</span> </div>
            </div>
            <div class="control-group">
              <label class="control-label">等级</label>
              <div class="controls">
               <select name="level" id="">
                 <option value="初级vip会员">初级vip会员</option>
                 <option value="中级vip会员">中级vip会员</option>
                 <option value="高级vip会员">高级vip会员</option>
               </select>
                <span class="help-block">请输入等级</span> </div>
            </div>
            <div class="control-group">
              <label class="control-label">状态</label>
              <div class="controls">
               <select name="status" id="">
                 <option value="关闭">关闭</option>
                 <option value="开启">开启</option>
               </select>
                <span class="help-block">请输入状态</span> </div>
            </div>
            <div class="control-group">
              <label class="control-label">头像上传</label>
              <div class="controls">
                <div class="input-append date datepicker" data-date="12-02-2012">
                  <input type="file" name="pic">
                </div>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">借阅数量</label>
              <div class="controls">
                <input type="text" name="booknum" class="datepicker span11"  data-date-format="dd-mm-yyyy" data-date="01-02-2013">
                <span class="help-block">请输入借阅数量</span> </div>
            </div>
            <div class="form-actions">
              <button class="btn btn-success" type="submit">Save</button>
              <button class="btn btn-primary" type="submit">Reset</button>
              <button class="btn btn-info" type="submit">Edit</button>
              <button class="btn btn-danger" type="submit">Cancel</button>
            </div>
          </form>
        </div>
  </div>

<!--end-main-container-part-->

<!--Footer-part-->

<div class="row-fluid">
  <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="/project11-5/Public/Admin/http://themedesigner.in/">Themedesigner.in</a> </div>
</div>

<!--end-Footer-part-->

<script src="/project11-5/Public/Admin/js/excanvas.min.js"></script> 
<script src="/project11-5/Public/Admin/js/jquery.min.js"></script> 
<script src="/project11-5/Public/Admin/js/jquery.ui.custom.js"></script> 
<script src="/project11-5/Public/Admin/js/bootstrap.min.js"></script> 
<script src="/project11-5/Public/Admin/js/jquery.flot.min.js"></script> 
<script src="/project11-5/Public/Admin/js/jquery.flot.resize.min.js"></script> 
<script src="/project11-5/Public/Admin/js/jquery.peity.min.js"></script> 
<script src="/project11-5/Public/Admin/js/fullcalendar.min.js"></script> 
<script src="/project11-5/Public/Admin/js/matrix.js"></script> 
<script src="/project11-5/Public/Admin/js/matrix.dashboard.js"></script> 
<script src="/project11-5/Public/Admin/js/jquery.gritter.min.js"></script> 
<script src="/project11-5/Public/Admin/js/matrix.interface.js"></script> 
<script src="/project11-5/Public/Admin/js/matrix.chat.js"></script> 
<script src="/project11-5/Public/Admin/js/jquery.validate.js"></script> 
<script src="/project11-5/Public/Admin/js/matrix.form_validation.js"></script> 
<script src="/project11-5/Public/Admin/js/jquery.wizard.js"></script> 
<script src="/project11-5/Public/Admin/js/jquery.uniform.js"></script> 
<script src="/project11-5/Public/Admin/js/select2.min.js"></script> 
<script src="/project11-5/Public/Admin/js/matrix.popover.js"></script> 
<script src="/project11-5/Public/Admin/js/jquery.dataTables.min.js"></script> 
<script src="/project11-5/Public/Admin/js/matrix.tables.js"></script> 

<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>
</body>
</html>