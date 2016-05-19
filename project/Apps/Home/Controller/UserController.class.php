<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends CommonController {
    //显示个人中心主页
    public function index(){
        //创建对象
        $user = M('user');
        $id = I('get.id');
        //查询
        $info = $user->where(array('id'=>$_SESSION['uid']))->select();
        
        // echo $user->_sql();die();
        $this->assign('info',$info);
        $this->display();

        
        // var_dump($info);
    }
    public function edit(){

        $id = $_POST['id'];
        // var_dump($_POST['id']);die;
        //创建对象
        $user = M('user');
        //处理文件上传
        if($_FILES['pic']['error'] == 0){
            $upload = new \Think\Upload();// 实例化上传类    
            $upload->maxSize   =   3145728 ;// 设置附件上传大小   
            $upload->exts      =   array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型    
            $upload->rootPath = './Public';//手动设置网站根目录
            $upload->savePath  =   '/Uploads/'; // 设置附件上传目录    
            $info   =   $upload->upload();    // 上传文件     
            if(!$info) {// 上传错误提示错误信息        
                $this->error($upload->getError());    
            }else{// 上传成功       
                // $this->success('上传成功！'); 
                $str = $info['pic']['savepath']. $info['pic']['savename'];
                // var_dump($str);
                $_POST['pic'] = $str;
            }
            //获取原图的路径
            $res = $user->find($_POST['id']);
            $pic = $res['pic'];
            //删除图片
            unlink('./Public'.$pic);
        }
        
        //更新表
        $user = M('user');
        
        
        //创建数据
        $user->create();
        
        $res = $user->save();
        
        //判断
        if($res){
            //添加成功
            $this->success('修改成功',U('Home/User/index'));
        }else{
            //失败
            $this->error('修改失败',U('Home/User/index'));
        }
    
    }
    public function comment(){
         session_start();
    
        $id = $_SESSION['uid']; 
        // var_dump($id);
        // var_dump($_SESSION);die;
        $comm = M('comm');
        // $sql = "select "
        $comms = $comm->where('c_status =1')->select();
        // var_dump($comms);
        foreach ($comms as $key => $value) 
        $this->assign('value',$value);
        $this->assign('comms',$comms);
        $this->display();
        

    }
    public function docomment(){
        // var_dump($_GET);
        $j_id = $_GET['j_id'];
        $jie = M('jie');
        $jies = $jie->table('book b,jie j')->field('b.title,b.pic,j.*,b.*')->where('b.title = j.book and j.j_id = '.$j_id)->select();
        // var_dump($jies);die;
        foreach ($jies as $key => $value){
            // var_dump($value);
        } 
        // die;
        $this->assign('jies',$jies);
        $this->assign('value',$value);
        $this->display();
    }
     public function add(){ 
        // $comment = M('comm');
        // $comments = $comment->select();
        // $this->assign('comment',$comment);
        // $this->display();

    }
     public function insert(){
        // var_dump($_GET);die;
        $uid = $_SESSION['uid'];
        // var_dump($uid);
        $comment = M('comm');
        $username = I('get.username');
        $book = I('get.book');
        $context = I('get.context');
        $book_id = I('get.book_id');
        // $sql = "select c.book_id,c.name,c.display,c.context,c.reply,c.uid,c.c_status,b.id bid,b.title from book b,comm c where c.book_id = b.id and c.uid = ".$uid;
        // var_dump($sql);
        // var_dump($book);die;
        $data['book_id']=$book_id;
        $data['name']=$username;
        $data['book']=$book;
        $data['context']=$context;
        $data['uid']=$uid;
        

        // var_dump($data);die;

        $com = $comment->add($data);
        // var_dump($com);
        // die;
        
        if($com){
             //成功
            $this->success('添加成功',U('Home/User/comment'));
        }else{
            //失败
            $this->error('添加失败',U('Home/User/comment'));
        }
    }
    
}