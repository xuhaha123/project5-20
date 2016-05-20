<?php 
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller{
	//显示
	public function index(){
		//解析模板
		$this->display();
	}
	//验证用户信息
	public function login(){
		$user = M('guser');
		$username = $_POST['username'];
        $password = $_POST['password'];

		// $username = I('post.username');
		// $password = md5(I('post.password'));

		//查询
		$info = $user->where(['username'=>$username,'password'=>$password])->find();
		// echo $user->_sql();
		//检测 如果用户存在
		if(!empty($info)){
			session_start();
			$_SESSION = $_POST;
			$_SESSION['uid'] = $info['id'];

			$this->success('登录成功',U('Admin/Index/index'),3);
		}else{
			$this->error('登录失败',U('Admin/Login/index'),3);
		}
	}
}


 ?>