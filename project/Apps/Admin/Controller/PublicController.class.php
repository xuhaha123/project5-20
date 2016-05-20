<?php
namespace Admin\Controller;
use Think\Controller;
class PublicController extends CommonController {
	//开始生成验证码
	public function  createVcode(){
		$Verify = new \Think\Verify();

		$Verify->fontSize = 30;
		$Verify->length   = 4;
		$Verify->useNoise = true;
		$Verify->useImgBg = true; 


		$Verify->entry();
	}



}