<?php
namespace Home\Controller;
use Think\Controller;
class AdviceController extends Controller {
    public function index(){
        session_start();
        // $_SESSION['user']['id']=1;
        var_dump($_SESSION);
        $uid = $_SESSION['uid']; 
        $email =$_SESSION['email'];
        // $email =$_SESSION['']
        // var_dump($uid);       
        $advice = M('advice');
        $user = M('user');
        $advices = $user->where("status= '开启' and id='$id'")->select();
        // $comms = $comm->where("c_status = '1' and id='$id'")->select();

        // $advice1 = $user->where('uid'=.$id)->select();
        // var_dump($advices); die;
        $sql = "SELECT a.reply,a.id aid,a.context,u.username,u.status,u.email,u.phone,u.level FROM advice a,user u WHERE u.id=a.uid and u.status='开启' and a.uid=".$uid;
         // var_dump($sql);
        $advices = $user->query($sql);
        // var_dump($advices);
        foreach ($advices as $key => $value)
        // var_dump($value);
        $this->assign('value',$value);
        // $this->assign('advice',$advice);       
        $this->assign('advices',$advices);       
        $this->display();
    }
    public function insert(){
        // var_dump($_GET);die;
        // var_dump($_SESSION);
        // die;
        if(empty($_SESSION)){
            $this->error('用户还没登录',U('Home/Login/index'));
        }
        $advice = M('advice');
        // $id = I('get.id');
        $username = I('get.username');
        $email = I('get.e-mail');
        $context = I('get.context');
        $phone = I('get.phone');
        $id = $_SESSION['uid']; 
        // var_dump($_SESSION);die;



        $data['uid']=$id;
        $data['context']=$context;
        // var_dump($data);die;
        $res = $advice->add($data);
        // var_dump($res);die;
        if($res){
             //成功
            $this->success('提交成功',U('Home/advice/index'));
        }else{
            //失败
            $this->error('提交失败',U('Home/advice/index'));
        }
    }
}