<?php 
namespace Admin\Controller;
use Think\Controller;
class MaskController extends Controller{
	public function index(){
		$mask = M('user');

		if(!empty($_GET['keyword'])){
			$where = "username like '%".$_GET['keyword']."%'";
		}else{
			$where = '';
		}
		
		//获取每页显示的数量
        $num = !empty($_GET['num']) ? $_GET['num'] : 5;
        
        //统计总数
        $count = $mask->where($where)->count();
        // 实例化分页类
        $Page = new \Think\Page($count,$num);

        //获取limit
        $limit = $Page->firstRow.','.$Page->listRows;
        // 分页显示输出
        $pages = $Page->show();
        // var_dump($pages);
        //查询
        $masks = $mask->limit($limit)->where($where)->select();
        // var_dump($masks);die();
        //查看sql语句
        // echo $user->_sql();

        //分配变量
        $this->assign('masks',$masks);
        $this->assign('pages',$pages);
		$this->display();
	}
	
}


 ?>