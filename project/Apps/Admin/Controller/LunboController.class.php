<?php 
namespace Admin\Controller;
use Think\Controller;
class LunboController extends CommonController{
	public function index(){
		//创建对象
		$lunbo = M('lunbo');
		if(!empty($_GET['keyword'])){
			$where = "username like '%".$_GET['keyword']."%'";
        }else{
            $where = '';
        }
        //获取每页显示的数量
        $num = !empty($_GET['num']) ? $_GET['num'] : 3;
        
        //统计总数
        $count = $lunbo->where($where)->count();
        // 实例化分页类
        $Page = new \Think\Page($count,$num);

        //获取limit
        $limit = $Page->firstRow.','.$Page->listRows;
        // 分页显示输出
        $pages = $Page->show();
        // var_dump($pages);
        //查询
        $lunbos = $lunbo->limit($limit)->where($where)->select();
        //查看sql语句
        // echo $user->_sql();

        //分配变量
        $this->assign('lunbos',$lunbos);
        $this->assign('pages',$pages);
		$this->display();
	}
	public function add(){
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
        //创建对象
        $lunbo = D('lunbo');
        //创建数据
        if(!$lunbo->create()){
        	//获取错误信息
        	$info = $lunbo->getError();
        	$this->error($info,'',3);
        }
        $lunbo->create();

        $res = $lunbo->add();
        
        if($res){
        	$this->success('添加成功',U('Admin/Lunbo/index'));
        }else{
        	$this->error('添加失败',U('Admin/Lunbo/index'));
        }
        
	}
	public function edit(){
		//创建对象
		$lunbo = M('lunbo');
		//获取id
		$id = I('get.id');
		//读取
		$info = $lunbo->where(array('id'=>$id))->find();

		$this->assign('info',$info);

		$this->display();
	}

	public function update(){
		$id = $_POST['id'];
		$lunbo = M('lunbo');
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
            $res = $lunbo->find($_POST['id']);
            $pic = $res['pic'];
            
            //删除图片
            unlink('./Public'.$pic);
        }
        $lunbo->create();

        $res = $lunbo->save();
        if($res){
        	$this->success('修改成功',U('Admin/Lunbo/index'));
        }else{
        	$this->error('修改失败',U('Admin/Lunbo/index'));
        }
	}

	public function delete(){
		//获取id
		$id = I('get.id');
		//创建对象
		$l = new \Think\Model();
		//创建对象
		$res = $l->table(__LUNBO__)->delete($id);
		//判断
		if($res){
			$this->success('删除成功',U('Admin/Lunbo/index'));
		}else{
			$this->error('删除失败',U('Admin/Lunbo/index'));
		}
	}
}


 ?>