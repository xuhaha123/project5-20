<?php
namespace Admin\Controller;
use Think\Controller;
    class CommController extends CommonController {

    public function index(){

        $comm = M('comm');
        
        $sql = "SELECT b.title,c.id,c.name,c.context,c.reply,c.c_status FROM book b,comm c WHERE b.id=c.book_id"; 
        // SELECT b.title,c.book_id,c.name,c.context,c.reply,c.c_status FROM book b LEFT JOIN comm c ON b.id=c.book_id;
        $comms = $comm->query($sql);
        // var_dump($comms);die;
        $res = $comm->select();
        for ($i=0; $i <count($comms); $i++) {
            if($comms[$i]['c_status'] ==1){
                $comms[$i]['c_status'] = '开启';

            }else{
                $comms[$i]['c_status']= '隐藏';
            }

        }
        // $comms1 = $comm->select();
        // var_dump($res);

        // var_dump($comms);
        // var_dump($comms1);


        $this->assign('res',$res);
        $this->assign('comms',$comms);

        //解析模板
        $this->display();   


    }
       public function do_ajax(){
        $id = I('post.id');
        // var_dump($_POST);
        // die;
        $comm =M('comm');
        $a= $comm->create();
        // var_dump($a);
        $res = $comm->save();
        // var_dump($res);
        // die;
        if($res){
            echo 1;
        }
    }

    public function edit(){
         $id = I('get.id');
        //查询出所有的分类
        $comm = M('comm');
        // $cates = $cate->query('select * from yc_cate where id != '.$id.' order by concat(path,id) asc');
        // select * from book where id
        
        $info = $comm->find($id);
        // var_dump($info);
        //分配变量
        $this->assign('info',$info);
        // $this->assign('cates',$cates);
        //解析模板
        $this->display();


    }

    public function update(){
        // var_dump($_POST);
        // die;
        $id = $_POST['id'];       
        
        $comm = M('comm');
       
        $info = $comm->find();
        // $_POST['id'] = $info['id'];
        // var_dump($id);
        // var_dump($_POST);
        // die;
        $comm->create();
        // var_dump($comm);
        $res = $comm->save();
        // var_dump($res);
        // echo $res;
          //执行添加
        if($res){
             //添加成功
            $this->success('修改成功',U('Admin/Comm/index'));
        }else{
            //失败
            $this->error('修改失败',U('Admin/Comm/index'));
        }
    }

    public function delete(){
        $id =I('get.id');
        // var_dump($id);
        $comm = M('comm');
        $res =$comm ->where($id)->delete();
        if($res){
             //添加成功
            $this->success('删除成功',U('Admin/Comm/index'));
        }else{
            //失败
            $this->error('删除失败',U('Admin/Comm/index'));
        }


    }
    public function reply(){
       // $id = $_POST['id'];       
        
        $id = I('get.id');
        //查询出所有的分类
        $comm = M('comm');
        // $cates = $cate->query('select * from yc_cate where id != '.$id.' order by concat(path,id) asc');
        // select * from book where id
         $res = $comm->select($id);
       
            // if($res[0]['display'] ==0){
            //     $res[0]['display'] = '未评论'; 

            // }else if($res[0]['display'] ==1){
            //     $res[0]['display'] = '已评论未回复';

            // }else if($res[0]['display'] ==2){
            //     $res[0]['display']= '已回复';
            // }
  
        $info = $comm->find($id);
        // var_dump($res);
        //分配变量
        $this->assign('res',$res);     
        $this->assign('info',$info);
        $this->display();
       

    }
    public function update1(){
        // var_dump($_POST);
        // die;
        $id = $_POST['id'];       
        
        $comm = M('comm');
        // $_POST['id'] = $info['id'];
        // var_dump($id);
        // var_dump($_POST);
       
        $info = $comm->find();
        // $info = $comm->select();
        // $_POST['id'] = $info['id'];
        // var_dump($id);
        // var_dump($_POST);
      
        $comm->create();
        // var_dump($comm);
        $res = $comm->save();
        // var_dump($res);
        // echo $res;
          //执行添加
        if($res){
             //添加成功
            $this->success('回复成功',U('Admin/Comm/index'));
        }else{
            //失败
            $this->error('回复失败',U('Admin/Comm/index'));
        }
    }














    }