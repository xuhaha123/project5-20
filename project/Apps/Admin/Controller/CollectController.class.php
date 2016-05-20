<?php 
namespace Admin\Controller;
use Think\Controller;
class CollectController extends Controller{
	public function index(){
		$collect = M('collect');
		if(!empty($_GET['keyword'])){
			$where = "username like '%".$_GET['keyword']."%'";
		}else{
			$where = '';
		}
		//获取每页显示的数量
        $num = !empty($_GET['num']) ? $_GET['num'] : 5;
        
        //统计总数
        $count = $collect->where($where)->count();
        // 实例化分页类
        $Page = new \Think\Page($count,$num);

        //获取limit
        $limit = $Page->firstRow.','.$Page->listRows;
        // 分页显示输出
        $pages = $Page->show();
        // var_dump($pages);
        //查询
        $collects = $collect->field('user.*,collect.*,collect.cid as cs')->join('LEFT JOIN __USER__ ON __COLLECT__.Cid = __USER__.id')->limit($limit)->where($where)->select();
        // var_dump($collects);die();
        //查看sql语句
        // echo $user->_sql();

        //分配变量
        $this->assign('collects',$collects);
        $this->assign('pages',$pages);

		$this->display();
	}
	public function delete(){
		// var_dump($_GET);die();
		$id = $_GET['id'];

		$collect = M('collect');

		$res = $collect->delete($id);

		if($res){
			$this->success('删除成功',U('Admin/Collect/index'));
		}else{
			$this->error('删除失败',U('Admin/Collect/index'));
		}
	}
}






 ?>