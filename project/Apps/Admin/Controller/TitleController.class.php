<?php 
namespace Admin\Controller;
use Think\Controller;
class TitleController extends CommonController {
	public function index(){
        $title =M('title');
        $res =$title->select();
        // var_dump($res);
        $this->assign('res',$res);
        $this->display();
	   }

    public function del_ajax(){
        $id = I('get.id');
        $title = M('title');
        $res =$title->delete($id);
        if($res){
            echo 1;
        }
    }
    public function add(){
        $this ->display();
    }

    public function insert(){
        // var_dump($_POST);die;
        $title =M('title');
        $re =$title->create();
        // var_dump($re);die;
        $res = $title->add();
        if($res){
             //成功
            $this->success('添加成功',U('Admin/Title/index'));
        }else{
            //失败
            $this->error('添加失败',U('Admin/Title/index'));
        }


    }

    public function update(){
        // var_dump($_POST);
        $title = M('title');
        $info = $title->find();
        // var_dump($info);die;
        $Re =$title->create();
        // var_dump($Re);die;
        $res=$title->save();
        // var_dump($res);die;
        //执行添加
        if($res){
            //添加成功
            $this->success('修改成功',U('Admin/Title/index'));

        }else{
            $this->error('修改失败',U('Admin/Title/index'));
        }


    }
      public function edit(){
        $id = I('get.id');
        $title =M('title');
        // $info =$think->select();
        $info = $title->find($id);
        // var_dump($info);die;
        $this->assign('in',$info);
        $this->display();

    }

}

 ?>