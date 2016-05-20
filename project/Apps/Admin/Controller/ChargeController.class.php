<?php 
namespace Admin\Controller;
use Think\Controller;
class ChargeController extends Controller{
	//显示充值列表
	public function index(){
		$charge = M('charge');
		if(!empty($_GET['keyword'])){
			$where = "username like '%".$_GET['keyword']."%'";
		}else{
			$where = '';
		}
		//获取每页显示的数量
        $num = !empty($_GET['num']) ? $_GET['num'] : 5;
        
        //统计总数
        $count = $charge->where($where)->count();
        // 实例化分页类
        $Page = new \Think\Page($count,$num);

        //获取limit
        $limit = $Page->firstRow.','.$Page->listRows;
        // 分页显示输出
        $pages = $Page->show();
        // var_dump($pages);
        //查询
        $charges = $charge->field('user.*,charge.*,charge.status as cs')->join('LEFT JOIN __USER__ ON __CHARGE__.uid = __USER__.id')->limit($limit)->where($where)->select();
        // var_dump($charges);die();
        //查看sql语句
        // echo $user->_sql();

        //分配变量
        $this->assign('charges',$charges);
        $this->assign('pages',$pages);

		$this->display();
	}
	//修改操作
	public function edit(){
		$charge = M('charge');

		$id = I('get.id');

		$info = $charge->where(array('id'=>$id))->find();

		$this->assign('info',$info);

		$this->display();
	}
	//执行修改操作
	public function update(){
		$id = $_POST['id'];

		$charge = M('charge');
		//创建数据
		$charge->create();
		//修改 更新表
		$res = $charge->save();
		//判断
		if($res){
			//添加成功
			$this->success('修改成功',U('Admin/Charge/index'));
		}else{
			//失败
			$this->error('修改失败',U('Admin/Charge/idnex'));
		}
	}
	//删除操作
	public function delete(){
		//获取id
        $id = I('get.id');
        //创建对象模型
        $m = new \Think\Model();
        //创建对象 执行删除
        $res = $m->table(__CHARGE__)->delete($id);
        //判断
        if($res){
            $this->success('删除成功',U('Admin/Admin/index'));
        }else{
            $this->error('删除失败',U('Admin/Admin/index'));
        }
	}
}



 ?>