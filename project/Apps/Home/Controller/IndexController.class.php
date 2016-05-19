<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $title = M('title');
        $res =$title->select();
        $cate = M('cate');
        $res1 =$cate->select();
        $link = M('link');
        $info = $link->select();
        $lunbo = M('lunbo');
        $result = $lunbo->select();
        // var_dump($result);die();
        $in = M('infor');
        // var_dump($res);
        $inf = $in->select();
        // echo $in->_sql();die();
        $this->assign('res',$res);
        $this->assign('res1',$res1);
        $this->assign('info',$info);
        $this->assign('result',$result);
        $this->assign('inf',$inf);
        $this->display();
    }
   
}