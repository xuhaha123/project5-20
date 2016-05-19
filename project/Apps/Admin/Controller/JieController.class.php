<?php
namespace Admin\Controller;
use Think\Controller;
class JieController extends CommonController {
    public function index(){
        //创建对象
        $jie = M('jie');
        if(!empty($_GET['keyword'])){
            //建议使用数组形式来创建where条件
            // $where['jiename'] = array('like','%'.$_GET['keyword'].'%');
            $where = "title like '%".$_GET['keyword']."%'";
        }else{
            $where = '';
        }

        //获取每页显示的数量
        $num = !empty($_GET['num']) ? $_GET['num'] : 5;
        
        //统计总数
        $count = $jie->where($where)->count();
        // 实例化分页类
        $Page = new \Think\Page($count,$num);

        //获取limit
        $limit = $Page->firstRow.','.$Page->listRows;
        // 分页显示输出
        $pages = $Page->show();
        // var_dump($pages);
        //查询+图片
        $jies = $jie->field('book.*,jie.*,user.*,book.pic as bpic')->join('LEFT JOIN __BOOK__ ON  __JIE__.book= __BOOK__.title LEFT JOIN __USER__ ON __JIE__.jid=__USER__.id')->limit($limit)->where($where)->select();
        // var_dump($jies);die;
        //分配变量
        $this->assign('jies',$jies);
        $this->assign('pages',$pages);

        //解析模板
        $this->display();
    }
    //删除
    public function delete(){
        var_dump($_POST);die;
        //获取id
        $id = I('get.id');
        //创建对象
        $jie = M('jie');
        //获取id
        $id = I('get.id');
        // var_dump($id);die();
        //读取数据
        $info = $jie->field('book.*,jie.*,user.*,book.pic as bpic')->join('LEFT JOIN __BOOK__ ON  __JIE__.book= __BOOK__.title LEFT JOIN __USER__ ON __JIE__.jid=__USER__.id')->where(array('j_id'=>$id))->find();
        // echo $jie->_sql;
        $i=$info['i_j'];//借阅状态
        $g=$info['j_status'];//归还状态
        //判断是否借阅和归还
        if($i=='0'){
            $this->error('用户并未借阅此书,不能删除',U('Admin/Jie/index'));
        }elseif($g=='0'){
            $this->error('用户并未归还此书,不能删除',U('Admin/Jie/index'));
        }else{
            //创建对象模型
            $m = new \Think\Model();
            //创建对象 执行删除
            // $res = $m->query("delete from jie where j_id='$id'");
            $res = $m->table(__JIE__)->where(array('j_id'=>$id))->delete();
            //判断
            if($res){
                $this->success('删除成功',U('Admin/Jie/index'));
            }else{
                $this->error('删除失败',U('Admin/Jie/index'));
            }
        }
    }
    //修改
    public function edit(){
        //创建对象
        $jie = M('jie');
        //获取id
        $id = I('get.id');
        // var_dump($id);die();
        //读取数据
        $info = $jie->field('book.*,jie.*,user.*,book.pic as bpic')->join('LEFT JOIN __BOOK__ ON  __JIE__.book= __BOOK__.title LEFT JOIN __USER__ ON __JIE__.jid=__USER__.id')->where(array('j_id'=>$id))->find();
        // echo $jie->_sql;
        $i=$info['i_j'];
        if($i=='0'){
            $this->error('用户并未借阅此书',U('Admin/Jie/index'));
        }else{
            $htime=date("Y-m-d H:i:s",time());
            $info['htime']=$htime;
            // echo $htime;die;
            // var_dump($info);die;
            //分配变量
            $this->assign('info',$info);
            //解析模板
            $this->display();
        }
    }
    //执行修改
    public function update(){
        $id = $_POST['id'];
        // var_dump($_POST);die;
        // echo $id;die;
        //更新表
        $jie = M('jie');
        //创建数据
        $jie->create();
        //执行更新
        $res = $jie->save();
        //判断
        if($res){
            //添加成功
            $this->success('修改成功',U('Admin/Jie/index'));
        }else{
            //失败
            $this->error('修改失败',U('Admin/Jie/index'));
        }
    }
 
}