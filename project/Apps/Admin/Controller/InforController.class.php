<?php 
namespace Admin\Controller;
use Think\Controller;
class InforController extends CommonController {
	public function index(){
        //创建对象
        $infor = M('infor');
        if(!empty($_GET['keyword'])){
            //建议使用数组形式来创建where条件
            // $where['username'] = array('like','%'.$_GET['keyword'].'%');
            $where = "name like '%".$_GET['keyword']."%'";
        }else{
            $where = '';
        }

        //获取每页显示的数量
        $num = !empty($_GET['num']) ? $_GET['num'] : 5;
        
        //统计总数
        $count = $infor->where($where)->count();
        // 实例化分页类
        $Page = new \Think\Page($count,$num);

        //获取limit
        $limit = $Page->firstRow.','.$Page->listRows;
        // 分页显示输出
        $pages = $Page->show();
        // var_dump($pages);
        //查询
        $infors = $infor->limit($limit)->where($where)->select();
        //查看sql语句
        // echo $user->_sql();

        //分配变量
        $this->assign('infors',$infors);
        $this->assign('pages',$pages);

        //解析模板
        $this->display();   
    }
    public function add(){
    	//echo "用户添加";

    	$this->display();
    }
    public function insert(){
        //处理图片上传
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
        }else{
            $_POST['pic'] = '';
        }
        // var_dump($_POST);
        //创建表对象
        //$user = M('user');
        $infor = D('infor');
        //创建数据
        if(!$infor->create()){
            //获取错误信息
            $info = $infor->getError();
            $this->error($info,'',3);
        }
        
        //创建数据
        $_POST['id']=$id;
   
        $infor->create();
       
        
        //执行添加
        $res = $infor->add();
        
        if($res){
            //添加成功
            $this->success('添加成功',U('Admin/Infor/index'));
        }else{
            //失败
            $this->error('添加失败',U('Admin/Infor/index'));
        }
    }
    public function delete(){
        //获取id
        $id = I('get.id');
        //创建对象模型
        $m = new \Think\Model();
        //创建对象 执行删除
        $res = $m->table(__INFOR__)->delete($id);
        //判断
        if($res){
            $this->success('删除成功',U('Admin/Infor/index'));
        }else{
            $this->error('删除失败',U('Admin/Infor/index'));
        }
    }
    //用户修改
    public function edit(){
        //创建对象
        $infor = M('infor');
        //获取id
        $id = I('get.id');
        //var_dump($id);die();
        //读取数据
        $info = $infor->where(array('id'=>$id))->find();
        //echo $user->_sql;
        //分配变量
        $this->assign('info',$info);
        //解析模板
        $this->display();
    }
    //执行修改
    public function update(){
        $id = $_POST['id'];
        //更新表
        $infor = M('infor');
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
            $res = $infor->find($_POST['id']);
            $pic = $res['pic'];
            //删除图片
            unlink('./Public'.$pic);
        }
        //创建数据
        $infor->create();
        //执行更新
        $res = $infor->save();
        //判断
        if($res){
            //添加成功
            $this->success('修改成功',U('Admin/Infor/index'));
        }else{
            //失败
            $this->error('修改失败',U('Admin/Infor/index'));
        }
    }
 
}

 ?>