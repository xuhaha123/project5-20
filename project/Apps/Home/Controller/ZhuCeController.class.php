<?php 
namespace Home\Controller;
use Think\Controller;
class ZhuCeController extends Controller {
	public function index(){
		$this->display();
	}
	public function zhuce(){
		// var_dump($_POST);die();
		$username = $_GET['username'];
		
		$user = M('user');
		

		//插入
		$_POST['password'] = $_POST['password'];
		$user->create();

		// var_dump($user);die();

		$res = $user->add();
		// echo $user->_sql();die();
		if($res){
			//注册成功
			$this->success('注册成功',U('Home/Index/index'));
		}else{
			//注册失败
			$this->error('注册失败',U('Home/Login/zhuce'));
		}
	}
	public function ajax(){
		$username = $_GET['username'];
		// var_dump($username);die();
		$user = M('user');
		$info = $user->query('select * from user where username ='.$username);
		if($info){
			//用户已经存在
			echo 1;
		}else{
			//用户不存在
			echo 0;
		}
	}

}
 ?>