<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){
        // echo '这是网站的前台';
        //解析模板
        $this->display();
    }
     public function login(){
        // var_dump($_POST);die();
        $user = M('user');
        $username = $_POST['username'];
        $password = $_POST['password'];

        // $username = I('post.username');
        // $password = md5(I('post.password'));

        //查询
        // $info = $user->where('username = '.$username.' and password = '.$password)->find();
        $info = $user->where(['username'=>$username,'password'=>$password])->find();
        //echo $user->_sql();
        // var_dump($info);die;
        //检测 如果用户存在
        if(!empty($info)){
            session_start();
            $_SESSION = $_POST;
            $_SESSION['uid'] = $info['id'];
            $_SESSION['email'] = $info['email'];
            $_SESSION['phone'] = $info['phone'];

            $this->success('登录成功',U('Home/Index/index'),3);
        }else{
            $this->error('登录失败',U('Home/Login/index'),3);
        }
    }
}