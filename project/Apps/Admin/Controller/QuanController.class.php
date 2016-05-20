<?php
namespace Admin\Controller;
use Think\Controller;
class QuanController extends CommonController {
    public function index(){
        // echo '1111111';
        $think =M('think_auth_rule');
        $res = $think->select();
        // var_dump($res);
        // for ($i=0; $i <count($res); $i++) {
        //     if($res[$i]['status'] ==1){
        //         $res[$i]['status'] = '开启';

        //     }else{
        //         $res[$i]['status']= '关闭';
        //     }

        // }
        // var_dump($res);
        if(!empty($_GET['keyword'])){
            $where = "where title like '%".$_GET['keyword']."%'";
            $w = "title like '%".$_GET['keyword']."%'";
            // var_dump($_SERVER);
        }else{
            $where = '';
        }

        $num = !empty($_GET['num']) ? $_GET['num'] : 10;

        $keyword =I('get.keyword');
        // var_dump($keyword);

        //统计总数
        // $count =$cate ->count();
        $count =$think->where($where)->count();


        //实例化分页类
        $Page = new \Think\Page($count,$num);
        //获取limit参数

        $limit =$Page->firstRow.','.$Page->listRows;
        //分页显示输出
        $pages =$Page->show();
        // var_dump($pages);

        $res =$think->limit($limit)->where($w)->select();
        // var_dump($cates);
        // echo $think->_sql();
        // SELECT * FROM `think_auth_rule` WHERE ( where name like '%sss%' ) LIMIT 0,10 

        for ($i=0; $i < count($res); $i++) { 
            if($res[$i]['status'] == 1)
                $res[$i]['status'] = '开启';
            else if($res[$i]['status'] == 0)
                $res[$i]['status'] = '关闭';
        }
         
        // $this->assign('cates',$cates);
        $this->assign('pages',$pages);
        $this->assign('res',$res);
        $this->display();
    }

    public function add(){
    	// echo "用户添加";
    	$this->display();
    }
    // public function del(){
    //     // echo '用户删除';s
    // }

     public function insert(){
        // echo '用户插入';
        // var_dump($_POST);
        $_POST['type']=1;
        $think = M('think_auth_rule');
        $think->create();
        $res =$think->add();

        $think = M('think_auth_group');
        $rules = $think->field('rules')->where('id=1')->find();
        // var_dump($rules);die;
        $rules = $rules['rules'].','.$res;
        // var_dump($rules);die;
        $_POST = array();
        $_POST['id'] = 1;
        $_POST['rules'] = $rules;
        $think->create();
        $think->save();


        if($res){
             //成功
            $this->success('添加成功',U('Admin/Quan/index'));
        }else{
            //失败
            $this->error('添加失败',U('Admin/Quan/index'));
        }
    }

    public function groupadd(){
        $think = M('think_auth_rule');
        $res=$think->field('id,title')->select();
        // var_dump($res);
        $this->assign('res',$res);
        $this->display();

    }
    public function group(){

        $think = M('think_auth_group');
        $sql = "SELECT A.*,C.username FROM think_auth_group A,think_auth_group_access B,guser C WHERE A.id=B.group_id AND B.uid=C.id";
        $res = $think->query($sql);
        // var_dump($res);
        $groups = $think->select();
        // var_dump($groups);
        foreach ($groups as $key => $value) {
            $groups[$key]['rules'] = str_replace(',',' ',$value['rules']);
            foreach ($res as $k => $v) {
                if($value['id'] == $v['id'])
                    $groups[$key]['username'] .= $v['username'].' ';
            }
        }
        // var_dump($groups);
        // var_dump($res);
        if(!empty($_GET['keyword'])){
            $where = "where title like '%".$_GET['keyword']."%'";
            $w = "title like '%".$_GET['keyword']."%'";
            // var_dump($_SERVER);
        }else{
            $where = '';
        }

        $num = !empty($_GET['num']) ? $_GET['num'] : 10;

        // $keyword =I('get.keyword');
        // var_dump($keyword);

        //统计总数
        // $count =$cate ->count();
        $count =$think->where($where)->count();


        //实例化分页类
        $Page = new \Think\Page($count,$num);
        //获取limit参数

        $limit =$Page->firstRow.','.$Page->listRows;
        //分页显示输出
        $pages =$Page->show();
        // var_dump($pages);

        $groups =$think->limit($limit)->where($w)->select();
        // var_dump($groups);
        // echo $think->_sql();
        // SELECT * FROM `think_auth_rule` WHERE ( where name like '%sss%' ) LIMIT 0,10 

        for ($i=0; $i < count($groups); $i++) { 
            if($groups[$i]['status'] == 1)
                $groups[$i]['status'] = '开启';
            else if($groups[$i]['status'] == 0)
                $groups[$i]['status'] = '关闭';
        }
        foreach ($groups as $key => $value) {
            $groups[$key]['rules'] = str_replace(',',' ',$value['rules']);
        }
         // var_dump($groups);
        // $this->assign('cates',$cates);
        $this->assign('pages',$pages);
        // $this->assign('res',$res);
        $this->assign('groups',$groups);
        $this->display();
    }

    public function groupinsert(){
        $think =M('think_auth_group');
        $a =$_POST['rules']=implode(',',$_POST['rules']);
        $a =$think->create();
        // var_dump($a);die;
        $res = $think->add();
        // var_dump($res);
        if($res){
            $this->success('添加成功',U('Admin/Quan/index'));
        }else{
            $this->error('添加失败',U('Admin/Quan/index'));
        }
    }

    public function del_ajax(){
        $id =I('get.id');
        // var_dump($_GET);
        // var_dump($id);die;
        $think = M('think_auth_rule');
        $res = $think ->delete($id);
        if($res){
            echo 1;
        }

    }

    public function do_ajax(){
        $id = I('post.id');
        // var_dump($_POST);
        // die;
        $think =M('think_auth_rule');
        $think->create();
        $res = $think->save();
        // var_dump($res);
        // die;
        if($res){
            echo 1;
        }
    }

    public function edit(){
        $id = I('get.id');
        $think = M('think_auth_rule');
        // $info =$think->select();
        $info = $think->find($id);
        // var_dump($info);  一维数组
        $this->assign('in',$info);
        $this->display();

    }
    public function update(){
        $think = M('think_auth_rule');
        // var_dump($_POST);
        $info = $think->find();
        // var_dump($info);die;
        $think->create();
        $res=$think->save();
        //执行添加
        if($res){
            //添加成功
            $this->success('修改成功',U('Admin/Quan/index'));

        }else{
            $this->error('修改失败',U('Admin/Quan/index'));
        }

    }
    public function update1(){
        $think = M('think_auth_group');
        $id = I('get.id');
        $rule = M('think_auth_rule');
        $rules_a = $rule->field('id,title')->select();
        $rules_h = $think->field('title,rules')->find($id);
        $rules_h = explode(',',implode(',',$rules_h));
        foreach ($rules_a as $key => $value) {
            if(in_array($value['id'],$rules_h))
                $rules_a[$key]['have'] = 1;
        }
        $sql = "SELECT A.uid,B.username FROM think_auth_group_access A,guser B WHERE A.uid=B.id";
        $users_a = $think->query($sql);
        // var_dump($users_a);
        $think_acc = M('think_auth_group_access');
        $users_h = $think_acc->field('uid')->where(['group_id'=>$id])->select();
        foreach ($users_a as $key => $value) {
            foreach ($users_h as $k => $v) {
                if($value['uid'] == $v['uid'])
                    $users_a[$key]['have'] = true;
            }
        }
        $this->assign('users',$users_a);
        $this->assign('id',$id);
        $this->assign('title',$rules_h[0]);
        $this->assign('rules',$rules_a);
        $this->display();
    }

     public function save(){
        $_POST['rules'] = implode(',',$_POST['rules']);
        $think = M('think_auth_group');
        $think->create();
        $res = $think->save();
        if(I('post.users'))
            $users = I('post.users');
            $id = I('post.id');
            foreach ($users as $key => $value) {
                $sql = "UPDATE think_auth_group_access SET group_id=".$id." WHERE uid=".$value;
                $think->query($sql);
            }
        $this->success('修改成功',U('Admin/Quan/group'));
    }
    
    public function group_ajax(){
        $think = M('think_auth_group');
        $think->create();
        $res = $think->save();
        if($res)
            echo 1;   
    }
    public function group_delete(){
        $id = I('get.id');
        // var_dump($id);die;
        $think = M('think_auth_group');
        $res = $think->field('id')->delete($id);
        if($res)
            echo 1;

    }








}