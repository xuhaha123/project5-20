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
     <li class="submenu"> <a href="/project11-5/Public/Admin/#"><i class="icon icon-th-list"></i> <span>图书馆公告</span> <span class="label label-important">3</span></a>
      <ul>
        <li><a href="<?php echo U('Admin/Title/add');?>">公告添加</a></li>
        <li><a href="<?php echo U('Admin/Title/index');?>">公告列表</a></li>
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
 
  <div class="container-fluid">
    <div class="quick-actions_homepage">
      <ul class="quick-actions">
        <li class="bg_lb"> <a href=""> <i class="icon-signal"></i> <span class="label label-important">10</span> 广告列表 </a> </li>
      </ul>
    </div>
  </div>
  <div class="widget-box">
  <form action="<?php echo U('Admin/Advertise/index');?>" method="get">
    <div class="widget-content nopadding">
      <div role="grid" class="dataTables_wrapper" id="DataTables_Table_0_wrapper"><div class=""><div id="" class="dataTables_length">
      <ul class="select2-results">   </ul></div></div>
      <select name="num" size="1" aria-controls="DataTables_Table_0">
        <option value="5">5</option>
        <option value="10">10</option>
        <option value="15">15</option>
        <option value="20">20</option>
      </select>
     <!--  <label>Search: <input type="text" aria-controls="DataTables_Table_0"><button>搜索</button></label></label> -->
      <label>Search:<input value="<?php echo ($_GET['keyword']); ?>" name="keyword" type="search" class="form-control input-sm" placeholder="" aria-controls="dataTables-example"></label><button class="btn btn-primary" style="margin-top:-12px;">搜索</button>

      </div>
    </div>

</form>
<table class="table table-bordered data-table dataTable" id="DataTables_Table_0">
  <thead>
    <tr role="row">
      <th class="ui-state-default" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 183px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
        <div class="DataTables_sort_wrapper">ID
            <span class="DataTables_sort_icon css_right ui-icon ui-icon-triangle-1-n"></span>
        </div>
      </th>
      <th class="ui-state-default" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 200px;" aria-label="Browser: activate to sort column ascending">
        <div class="DataTables_sort_wrapper">广告名
            <span class="DataTables_sort_icon css_right ui-icon ui-icon-carat-2-n-s"></span></div>
      </th>
      <th class="ui-state-default" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 300px;" aria-label="Engine version: activate to sort column ascending">
        <div class="DataTables_sort_wrapper">广告简介
            <span class="DataTables_sort_icon css_right ui-icon ui-icon-carat-2-n-s"></span>
        </div>
      </th>
      <th class="ui-state-default" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 300px;" aria-label="Engine version: activate to sort column ascending">
        <div class="DataTables_sort_wrapper">广告链接
            <span class="DataTables_sort_icon css_right ui-icon ui-icon-carat-2-n-s"></span>
        </div>
      </th>
      <th class="ui-state-default" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 300px;" aria-label="Engine version: activate to sort column ascending">
        <div class="DataTables_sort_wrapper">添加时间
            <span class="DataTables_sort_icon css_right ui-icon ui-icon-carat-2-n-s"></span>
        </div>
      </th>
      <th class="ui-state-default" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 300px;" aria-label="Engine version: activate to sort column ascending">
        <div class="DataTables_sort_wrapper">状态
            <span class="DataTables_sort_icon css_right ui-icon ui-icon-carat-2-n-s"></span>
        </div>
      </th>
      <th class="ui-state-default" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 300px;" aria-label="Engine version: activate to sort column ascending">
        <div class="DataTables_sort_wrapper">广告图片
            <span class="DataTables_sort_icon css_right ui-icon ui-icon-carat-2-n-s"></span>
        </div>
      </th>
      <th class="ui-state-default" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width:300px;" aria-label="Engine version: activate to sort column ascending">
        <div class="DataTables_sort_wrapper" style="width:150px">操作
            <span class="DataTables_sort_icon css_right ui-icon ui-icon-carat-2-n-s"></span>
        </div>
      </th>
    </tr>
  </thead>
  
<tbody role="alert" aria-live="polite" aria-relevant="all">
  <?php if(is_array($advertises)): $i = 0; $__LIST__ = $advertises;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="gradeA odd">
          <td class="  sorting_1" style="text-align:center"><?php echo ($vo["id"]); ?></td>
          <td class=" " style="text-align:center"><?php echo ($vo["name"]); ?></td>
          <td class="center " style="text-align:center"><?php echo ($vo["content"]); ?></td>
          <td class=" " style="text-align:center"><a href="<?php echo ($vo["url"]); ?>" target="view_window"><?php echo ($vo["url"]); ?></a></td>
          <td class=" " style="text-align:center"><?php echo ($vo["time"]); ?></td>
          <td class=" " style="text-align:center">
          <?php
 switch ($vo['status']) { case '0': echo '下线'; break; default: echo '上线'; break; } ?>
          </td>
          <td class=" " style="text-align:center"><img src="/project11-5/Public/<?php echo ($vo["pic"]); ?>" width="50px"></td>
          <td class="center " style="text-align:center">
            <a href="<?php echo U('Admin/Advertise/edit',array('id'=>$vo['id']));?>">
            <button class="btn btn-primary"><i class="icon-edit"></i>编辑</button></a>
            <a href="<?php echo U('Admin/Advertise/delete',array('id'=>$vo['id']));?>">
            <button class="btn btn-danger btn-del"><i class="icon-edit"></i>
            删除</button></a>
          </td>
    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
</tbody>
</table>
  <style type="text/css">
      #pages a,#pages span{
       background-color: #fff;
       border: 1px solid #ddd;
       color: #337ab7;
       float: left;
       line-height: 1.42857;
       margin-left: -1px;
       padding: 6px 12px;
       position: relative;
       text-decoration: none;
   }
   #pages span{
  /*background:#337ab7;
  color:white;*/
  background-color: #337ab7;
  border-color: #337ab7;
  color: #fff;
  cursor: default;
  z-index: 2;
}
  </style>
  <div class="fg-toolbar ui-toolbar ui-widget-header ui-corner-bl ui-corner-br ui-helper-clearfix">
   
    <div class="dataTables_paginate fg-buttonset ui-buttonset fg-buttonset-multi ui-buttonset-multi paging_full_numbers" id="DataTables_Table_0_paginate">
      <div id="pages">
        <?php echo ($pages); ?>
      </div>
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