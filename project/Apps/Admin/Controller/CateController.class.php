<?php
namespace Admin\Controller;
use Think\Controller;
class CateController extends CommonController {
    public function index(){
        // echo '用户列表';
        // 创建对象
        $cate = M('cate');
        $re = $cate->select();
        // var_dump(count($re));
        

        // if(!empty($_GET['keyword'])){
        //     //建议数组形式创建where条件
        //     $where['name']=array('like','%'.$_GET['keyword'].'%');

        //     // $where ="name like '%".$_GET['keyword']."%'";

        // }else{
        //     $where='';
        // }

        if(!empty($_GET['keyword'])){
            $where = "where name like '%".$_GET['keyword']."%'";
            $w = "name like '%".$_GET['keyword']."%'";
        }else{
            $where = '';
        }
        // echo $where;

        //获取每页显示的数量
        $num = !empty($_GET['num']) ? $_GET['num'] : 10;

        $keyword =I('get.keyword');
        // var_dump($keyword);

        //统计总数
        // $count =$cate ->count();
        $count =$cate->where($where)->count();


        //实例化分页类
        $Page = new \Think\Page($count,$num);
        //获取limit参数

        $limit =$Page->firstRow.','.$Page->listRows;
        //分页显示输出
        $pages =$Page->show();
        // var_dump($pages);

        $cates =$cate->limit($limit)->where($where)->select();
        // echo $cate->_sql();s

        // name like '%小说%'SELECT * FROM `cate` WHERE ( name like '%小说%' ) LIMIT 0,5

        $sql = "select * from cate ".$where." order by concat(path,id) asc limit ".$limit;
        
        $cates = $cate->query($sql);
        for ($i=0; $i <count($cates); $i++) {
            if($cates[$i]['display'] ==1){
                $cates[$i]['display'] = '开启';

            }else{
                $cates[$i]['display']= '隐藏';
            }
        // var_dump($re);
        // var_dump($cates[$i]['display']);
        }
        //查看sql语句
        // echo $cate->_sql();

        // var_dump($cates);die;
        foreach ($cates as $k => $v) {
            //计算出分隔多少次
            $c = count(explode(',',$v['path']))-2;
            $cates[$k]['name'] = str_repeat('|----->',$c).$v['name'];
        }




        $this->assign('cates',$cates);
        $this->assign('pages',$pages);
         // var_dump($cates);
        // $_GET = '';
        $this->display();


    }

    public function add(){
        //创建表对象
        $cate =M('cate');
        $cates =$cate->order('concat(path,id)')->select();
        // var_dump($cates);

        foreach ($cates as $k => $v) {
            //计算出分隔多少次
            $c = count(explode(',',$v['path']))-2;
            $cates[$k]['name'] = str_repeat('|----->',$c).$v['name'];
        }
        //分配变量
        $this->assign('cates',$cates);
        $this->display();
    	
    	
    }
    public function delete(){
       //  $id = I('get.id');
       //  $cate = M('cate');
       //  $info = $cate->find($id);
       //  //拼接path
       //  $path = $info['path'].$info['id'].',';
       //  // 删除子类信息
       // $res =  $cate->where('path like "'.$path.'%" or id='.$id)->delete();
      
       // //执行添加
       //  if($res){
       //       //添加成功
       //      $this->success('删除成功',U('Admin/Cate/index'));
       //  }else{
       //      //失败
       //      $this->error('删除失败',U('Admin/Cate/index'));
       //  }

        $id = I('get.id');
        $cate = M('cate');
        $info = $cate->find($id);
        // var_dump($info);die;
        //拼接path
        if($info['path'] == '0,' ){
            $path = $info['path'].$info['id'];
        }else{
            $path = $info['path'].$info['id'].',';
           
        }

        // $path = $info['path'].$info['id'].',';
        // var_dump($path);die;
        // 删除子类信息
       $res =  $cate->where('path like "'.$path.'%" or id='.$id)->delete();
      
       //执行添加
        if($res){
             //添加成功
            $this->success('删除成功',U('Admin/Cate/index'));
        }else{
            //失败
            $this->error('删除失败',U('Admin/Cate/index'));
        }



        
    }

    //用户修改
    public function edit(){
        $id = I('get.id');
        //查询出所有的分类
        $cate = M('cate');
        $cates = $cate->query('select * from cate where id != '.$id.' order by concat(path,id) asc');
        
        foreach ($cates as $k => $v) {
            //计算出分隔多少次
            $c = count(explode(',',$v['path']))-2;
            $cates[$k]['name'] = str_repeat('|-----',$c).$v['name'];
        }
        //根据id查询要修改的哪个数据
        
        $info = $cate->find($id);

        //分配变量
        $this->assign('info',$info);
        $this->assign('cates',$cates);
        //解析模板
        $this->display();

    }

    //执行修改
    public function update(){
        // var_dump($_POST);

        $cate= M('cate');
        // if($_POST['pid']==0){
        //     $_POST['pid']==0;

        // }

        $info = $cate->where('id ='.$_POST['pid'])->find();
        // var_dump($info);die;
        // echo $cate->_sql();
        if($_POST['pid'] == 0){
            $_POST['path'] = '0,';
        }else{
            $_POST['path'] = $info['path'].$info['id'].',';
        }
        // var_dump($_POST);die;   
        // $info = $cate->where('id = '.$_POST['pid'])->find();
        // var_dump($info);
        // $_POST['path'] = $info['path'].$info['id'].',';
        $cate->create();
        $res=$cate->save();
        //执行添加
        if($res){
            //添加成功
            $this->success('修改成功',U('Admin/Cate/index'));

        }else{
            $this->error('修改失败',U('Admin/cate/index'));
        }

    }

     public function insert(){
       // var_dump($_POST);
       //创建对象
       $cate =M('cate');
       //检测是否为顶级分类
       if ($_POST['pid'] == 0) {
           $_POST['path'] = '0,';
       }else{
        //按照pid查找分类的path信息
            $info =$cate->where('id='.$_POST['pid'])->find();
            // var_dump($info);
            $_POST['path'] =$info['path'].$info['id'].',';
       }
            // var_dump($_POST);
            // die;
       //创建数据
       $cate->create();
       //执行添加
       if($cate->add()){

            $this->success('添加成功',U('Admin/Cate/index'));
       }else{
            $this->error('添加失败',U('Admin/Cate/index'));
       }

    }

     public function do_ajax(){
        $id = I('post.id');
        // var_dump($_POST);
        // die;
        $cate =M('cate');
        $a= $cate->create();
        // var_dump($a);
        $res = $cate->save();
        // var_dump($res);
        // die;
        if($res){
            echo 1;
        }
    }

    //  public function del_ajax(){
    //     $id =I('get.id');
    //     // var_dump($_GET);
    //     // var_dump($id);die;
    //     $cate = M('cate');
    //     $res = $cate ->delete($id);
    //     if($res){
    //         echo 1;
    //     }

    // }


}
