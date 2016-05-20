<?php 
namespace Admin\Controller;
use Think\Controller;
class GuserController extends CommonController {
	public function Index(){
		//创建对象
        $guser = M('guser');
        if(!empty($_GET['keyword'])){
            //建议使用数组形式来创建where条件
            // $where['username'] = array('like','%'.$_GET['keyword'].'%');
            $where = "username like '%".$_GET['keyword']."%'";
        }else{
            $where = '';
        }

        //获取每页显示的数量
        $num = !empty($_GET['num']) ? $_GET['num'] : 5;
        
        //统计总数
        $count = $guser->where($where)->count();
        // 实例化分页类
        $Page = new \Think\Page($count,$num);

        //获取limit
        $limit = $Page->firstRow.','.$Page->listRows;
        // 分页显示输出
        $pages = $Page->show();
        // var_dump($pages);
        //查询
        $gusers = $guser->limit($limit)->where($where)->select();
        //查看sql语句
        // echo $user->_sql();

        //分配变量
        $this->assign('gusers',$gusers);
        $this->assign('pages',$pages);

        //解析模板
        $this->display();   
    }
	public function add(){
		$this->display();
	}
	//执行添加
	public function insert(){
		//创建表对象
		$guser = D('guser');
		if(!$guser->create()){
			//获取错误信息
			$info = $guser->getError();
			$this->error($info,'',3);
		}
		//创建数据
		$_POST['id']=$id;
		$_POST['password']=md5($_POST['password']);
		$guser->create();

		//执行添加
		$res = $guser->add();
		//判断
		if($res){
			//添加成功
			$this->success('添加成功',U('Admin/Guser/index'));
		}else{
			//失败
			$this->error('添加失败',U('Admin/Guser/index'));
		}
	}
	//删除操作
	public function delete(){
		$id = I('get.id');
        //创建对象模型
        $m = new \Think\Model();
        //创建对象 执行删除
        $res = $m->table(__GUSER__)->delete($id);
        //判断
        if($res){
            $this->success('删除成功',U('Admin/Guser/index'));
        }else{
            $this->error('删除失败',U('Admin/Guser/index'));
        }
	}
	//编辑操作
	public function edit(){
		//创建对象
        $guser = M('guser');
        //获取id
        $id = I('get.id');
        //var_dump($id);die();
        //读取数据
        $info = $guser->where(array('id'=>$id))->find();
        //echo $user->_sql;
        //分配变量
        $this->assign('info',$info);
        //解析模板
        $this->display();
	}
	//执行编辑
	public function update(){
		//接收值
		$id = $_POST['id'];
		//更新表
		$guser = M('guser');
		//创建数据
        $guser->create();
        //执行更新
        $res = $guser->save();
        //判断
        if($res){
            //添加成功
            $this->success('修改成功',U('Admin/Guser/index'));
        }else{
            //失败
            $this->error('修改失败',U('Admin/Guser/index'));
        }
	}
}
 ?>