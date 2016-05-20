<?php
namespace Admin\Controller;
use Think\Controller;
class BookController extends CommonController {
    public function index(){
        //创建对象
        $cate = M('cate');
        if(!empty($_GET['keyword'])){
            //建议使用数组形式来创建where条件
            // $where['bookname'] = array('like','%'.$_GET['keyword'].'%');
            $where = "title like '%".$_GET['keyword']."%'";
        }else{
            $where = '';
        }
        //获取每页显示的数量
        $num = !empty($_GET['num']) ? $_GET['num'] : 100;
        
        //统计总数
        $count = $cate->join('RIGHT JOIN __BOOK__ ON __CATE__.id=__BOOK__.b_path')->where($where)->count();
        // echo $cate->_sql();
        // var_dump($count);die;
        // 实例化分页类
        $Page = new \Think\Page($count,$num);

        //获取limit
        $limit = $Page->firstRow.','.$Page->listRows;
        // 分页显示输出
        $pages = $Page->show();
        // var_dump($pages);
        //查询
        
        // var_dump($books);die;
        $cates = $cate->join('RIGHT JOIN __BOOK__ ON __CATE__.id=__BOOK__.b_path')->limit($limit)->where($where)->select();
        //分配变量
        $this->assign('cates',$cates);
        $this->assign('pages',$pages);
        // var_dump($cates);die;

        //解析模板
        $this->display();   
    }
    public function add(){
        // echo '111';die;
        //创建表对象
        $cate = M('cate');
        $cates = $cate->query('select * from cate order by concat(path,id) asc');

        foreach ($cates as $k => $v) {
            //计算出分隔多少次
            $c = count(explode(',',$v['path']))-2;
            $cates[$k]['name'] = str_repeat('|----->',$c).$v['name'];
            // var_dump($cates);
        }

        //分配变量
        $this->assign('cates',$cates);
        // var_dump($cates);die;
        //解析模板
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
        //创建表对象
        $book = D('book');
        //创建数据
        if(!$book->create()){
            //获取错误信息
            $info = $book->getError();
            $this->error($info,'',3);
        }
        
        //创建数据
        $book->create();
 
       
        //执行添加
        $res = $book->add();
        // echo $book->_sql();
        // var_dump($_POST);die;
        
        if($res){
            //添加成功
            $this->success('添加成功',U('Admin/Book/index'));
        }else{
            //失败
            $this->error('添加失败',U('Admin/Book/index'));
        }
    }
    public function delete(){
        //获取id
        $id = I('get.id');
        //创建对象模型
        $m = new \Think\Model();
        //创建对象 执行删除
        $res = $m->table(__BOOK__)->delete($id);
        $result=$m->table(__BOOKINFO__)->delete($id);
        // echo $m->_sql();die;
        //判断
        if($res){
            $this->success('删除成功',U('Admin/Book/index'));
        }else{
            $this->error('删除失败',U('Admin/Book/index'));
        }
    }
    //用户修改
    public function edit(){
        //创建表对象
        $cate = M('cate');
        $cates = $cate->query('select * from cate order by concat(path,id) asc');

        foreach ($cates as $k => $v) {
            //计算出分隔多少次
            $c = count(explode(',',$v['path']))-2;
            $cates[$k]['name'] = str_repeat('|----->',$c).$v['name'];
            // var_dump($cates);
        }

        //分配变量
        $this->assign('cates',$cates);
        // var_dump($cates);die;
        //解析模板
        $this->display();
    }
    //执行修改
    public function update(){
        // var_dump($_POST);die;
        $id = $_POST['id'];
        //更新表
        $book = M('book');
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
            $res = $book->find($_POST['id']);
            $pic = $res['pic'];
            //删除图片
            unlink('./Public'.$pic);
        }

        //创建数据
        $book->create();

        // var_dump($_POST);die;
        //执行更新
        $res = $book->save();
        //判断
        if($res){
            //添加成功
            $this->success('修改成功',U('Admin/book/index'));
        }else{
            //失败
            $this->error('修改失败',U('Admin/book/index'));
        }
    }
 
}