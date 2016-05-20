<?php 
namespace Home\Controller;
use Think\Controller;
class AlljieyueController extends Controller {
	public function alljieyue(){
		$jie = M('jie');
		$jies = $jie->table('book b,jie j')->field('b.title,b.pic,j.*')->where('b.title = j.book')->select();
		// var_dump($jies);
		$this->assign('jies',$jies);
		$this->display();
	}
	public function update(){
		echo 1;
	}
}