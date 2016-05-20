<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends CommonController {
    public function index(){
        echo '这是网站的后台';
        //解析模板
        $this->display();

    }
}