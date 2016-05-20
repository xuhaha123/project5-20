<?php
namespace Home\Controller;
use Think\Controller;
class ChargeController extends CommonController {
    public function index(){
        $this->display();
    }
    public function insert(){
        // var_dump($_SESSION);die();
        // var_dump($_POST);die();
        $charge = M('charge');
        $rechage = $_POST['rechage'];
        $uid = $_SESSION['uid'];
        // var_dump($rechage);die();
        //判断
        if($rechage >= 10 && $rechage <= 5000){
            // echo '1';
            //创建对象
            $charge = M('charge');
            $charge->create();
            //执行添加
            $res = $charge-> execute("insert into charge(rechage,uid) value($rechage,$uid)");
            // echo $charge->_sql();die();
            if($res){
                $this->success('充值成功',U('Home/Charge/index'));
            }else{
                $this->error('充值失败',U('Home/Charge/index'));
            }
        }else{
             //失败
            $this->error('所充金额，不在范围之间，请重新充值',U('Home/Charge/index'));
        }
    }
}