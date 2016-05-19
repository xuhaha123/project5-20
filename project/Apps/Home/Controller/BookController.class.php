<?php
namespace Home\Controller;
use Think\Controller;
class BookController extends Controller {
    public function index(){
        
        $this->display();
    }
     public function contact(){
        
        $this->display();
    }
     
    public function gallery(){
        // 创建对象
        $cate = M('cate');
        //查询父类及图书
        $data =$cate->where('display = 1 ')->select();

        $list=array();
        foreach($data as $arr){
        $list[$arr['pid']][]=$arr;//重新整理数据排序。

        }

        // var_dump($list);
        // die;
        //查询显示的图书
        $res =$cate->field('cate.*,book.*,cate.id as cid')->join('LEFT JOIN __BOOK__ ON __BOOK__.b_path=__CATE__.id')->where('cate.display = 1 and book.b_status=1')->select();
        // var_dump($res);
        // die;
        //循环查询子类

        //分配变量
        $this->assign('list',$list);
        $this->assign('res',$res);
        // var_dump($res);
        // die;
        //解析模板
        $this->display();
    }
    public function about(){
        
        $this->display();
    }
    public function comment(){
        
        $this->display();
    }
    //  public function docomment(){
        
    //     $this->display();
    // }
}