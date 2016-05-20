<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller {

	//功能类似构造方法 率先执行的方法
	public function _initialize(){
		//用户的登录检测
		$id = session('uid');
		//判断
		if(empty($id)){
			$this->error('您还有没有登录呢',U('Home/Login/index'));
		}
	}
}