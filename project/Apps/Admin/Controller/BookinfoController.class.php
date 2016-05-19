<?php
namespace Admin\Controller;
use Think\Controller;
class BookinfoController extends CommonController {
    public function index(){
        //创建对象
        $book = M('book');
        if(!empty($_GET['keyword'])){
            //建议使用数组形式来创建where条件
            // $where['bookname'] = array('like','%'.$_GET['keyword'].'%');
            $where = "title like '%".$_GET['keyword']."%'";
        }else{
            $where = '';
        }

        //获取每页显示的数量
        $num = !empty($_GET['num']) ? $_GET['num'] : 5;
        
        //统计总数
        $count = $book->where($where)->count();
        // 实例化分页类
        $Page = new \Think\Page($count,$num);

        //获取limit
        $limit = $Page->firstRow.','.$Page->listRows;
        // 分页显示输出
        $pages = $Page->show();
        // var_dump($pages);
        //查询
        $books = $book->limit($limit)->where($where)->select();
        // var_dump($books);
        //分配变量
        $this->assign('books',$books);
        $this->assign('pages',$pages);

        //解析模板
        $this->display();   
    }
    //添加详情
    public function add(){
        // var_dump($_GET);
        // 获取id
        $id=$_GET['id'];
        // echo $id;die;
        //创建对象
        $book = M('book');
        //查询数据
        $info=$book->where(array('id'=>$id))->find();
        // var_dump($info);die;
        //分配变量
        $this->assign('info',$info);
        //解析模板
        $this->display();
    }
    //确认添加
    public function insert(){
        // var_dump($_POST);
        //处理图片上传
        if($_FILES['relatepic']['error'] == 0){
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
                $str = $info['relatepic']['savepath']. $info['relatepic']['savename'];
                // var_dump($str);
                $_POST['relatepic'] = $str;
            }
        }else{
            $_POST['relatepic'] = '';
        }
        //创建表对象
        $bookinfo=D('bookinfo');
        //创建数据
        if(!$bookinfo->create()){
            //获取错误信息
            $info=$bookinfo->getError();
            $this->error($info,'',3);
        }
        //创建数据
        $bookinfo->create();
        // die;
        //执行添加
        $res=$bookinfo->add();
        // echo $bookinfo->_sql();die;
        if($res){
            //添加成功
            $this->success('添加成功',U('Admin/Bookinfo/index'));
        }else{
            //失败
            $this->error('添加失败',U('Admin/Bookinfo/index'));
        }
    }

    //查看详情
    public function see(){
        // 获取id
        $id=$_GET['id'];
        // echo $id;
        //创建对象
        $bookinfo = M('bookinfo');
        //查询数据
        $info=$bookinfo->join('LEFT JOIN __BOOK__ ON __BOOKINFO__.id=__BOOK__.id')->where(array('bookinfo.id'=>$id))->select();
        // echo $bookinfo->_sql();
        // var_dump($info);die;
        //分配变量
        $this->assign('info',$info);
        //解析模板
        $this->display();
    }

    //修改
    public function edit(){
        //创建对象
        $bookinfo = M('bookinfo');
        //获取id
        $id = I('get.id');
        //var_dump($id);die();
        //读取数据
        $info=$bookinfo->join('LEFT JOIN __BOOK__ ON __BOOKINFO__.id=__BOOK__.id')->where(array('bookinfo.id'=>$id))->find();
        // var_dump($info);die;
        //分配变量
        $this->assign('info',$info);
        //解析模板
        $this->display();
    }
    //确认修改
    public function update(){
        // var_dump($_POST);
        //接收值
        $id = $_POST['id'];
        //更新表
        $bookinfo = M('bookinfo');
        //处理文件上传
        if($_FILES['relatepic']['error'] == 0){
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
                $str = $info['relatepic']['savepath']. $info['relatepic']['savename'];
                // var_dump($str);
                $_POST['relatepic'] = $str;
            }
            //获取原图的路径
            $res = $bookinfo->find($_POST['id']);
            $pic = $res['relatepic'];
            //删除图片
            unlink('./Public'.$pic);
        }   
        //创建数据
        $bookinfo->create();
        // var_dump($_POST);die;
        //执行更新
        $res = $bookinfo->save();
        // echo $bookinfo->_sql();die;
        //判断
        if($res){
            //添加成功
            $this->success('修改成功',U('Admin/Bookinfo/index'));
        }else{
            //失败
            $this->error('修改失败',U('Admin/Bookinfo/index'));
        }
    }

    //删除
    public function delete(){
        $id = I('get.id');
        //创建对象模型
        $m = new \Think\Model();
        //创建对象 执行删除
        $res = $m->table(__BOOKINFO__)->delete($id);
        //判断
        if($res){
            $this->success('删除成功',U('Admin/Bookinfo/index'));
        }else{
            $this->error('删除失败',U('Admin/Bookinfo/index'));
        }
    }
 
}