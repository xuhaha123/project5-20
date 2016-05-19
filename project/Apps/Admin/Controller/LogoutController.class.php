<?php 
namespace Admin\Controller;
use Think\Controller;
class LogoutController extends Controller {
	public function logout(){
		session_start();
		// 使客户端COOKIE过去 ，让SESSIONID失效
		setcookie(session_name(),null,time()-1,'/');
		// 清楚当前页面的SESSION数组中的值
		$_SESSION=array();
		// 摧毁服务器的SESSION文件
		$res = session_destroy();//文件会被时时删除
		if($res){
			$this->success('退出成功',U('Admin/Login/index'));
		}else{
			$this->error('退出失败',U('Admin/Index/index'));
		}
	}
}

 ?>