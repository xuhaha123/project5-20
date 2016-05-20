<?php
namespace Home\Controller;
use Think\Controller;
class CommentController extends Controller {
    public function index(){
        //获取id
        $id=$_GET['id'];
        //创建对象
        $bookinfo=M('bookinfo');
        $comm =M('comm');
        $res = $comm->table('comm c,book b')->where('c.book=b.title and b.id='.$id)->field('c.context,c.name')->select();
        //查询数据
        $info=$bookinfo->join('LEFT JOIN __BOOK__ ON __BOOKINFO__.id=__BOOK__.id LEFT JOIN __CATE__ ON __BOOK__.b_path=__CATE__.id')->where(array('bookinfo.id'=>$id))->select();
        $info['0']['id']=$id;
        // $fl=$info['0']['b_path'];
        // echo $fl;
        //分配变量
        $this->assign('info',$info);
        $this->assign('res',$res);
        // var_dump($info);
        // die;
        //解析模板
        $this->display();
    }
    // 插入数据库
     public function insert(){
        // var_dump($_SESSION);die;
        if(empty($_SESSION)){
            $this->error('请先登录或注册',U('Home/Login/index'));
        }else{
            // var_dump($_GET);die;
            // var_dump($_POST);die;
            // var_dump($_SESSION);die;
            $jid=$_SESSION['uid'];
            //创建对象
            $jie=M('jie');
            $user=M('user');
            $book=M('book');
            //查询用户积分
            $users=$user->where("id='$jid'")->select();
            // var_dump($users);die;
            $u_num=$users['0']['num'];//用户积分
            //查询借阅表中数据
            $jienum=$jie->query("select sum(j_num) from jie where(jid='$jid' and j_status='0')");
            $zjnum=$jienum['0']['sum(j_num)'];//未归还书总数
            //接受id
            $id=$_GET['id'];
            //接收借阅数量
            $num=$_POST['j_num'];
            //查询此书剩余数量
            $ress=$book->where("id='$id'")->select();
            // var_dump($ress);die;
            $snum=$ress['0']['num'];
            $nm=$num+$zjnum;//借阅后书的总数
            if($num>$snum){
                $this->error('库存不足,请更改数量',U('Home/Comment/index',array('id'=>$id)));
            }elseif($snum=0){
                $this->error('此书已被借完,请借阅其他书籍',U('Home/Book/gallery'));
            }elseif($nm>8){
            //判断为归还图书总数
                $this->error('您只能借阅8本书,不可以贪心哦,要看完再借',U('Home/Jieyue/index'));
            }else{
                // die;
                //创建对象
                $book = M('book');
                $jie=M('jie');
                //查询
                $books = $book->join('LEFT JOIN __BOOKINFO__ ON __BOOK__.id=__BOOKINFO__.id')->where("book.id='$id'")->select();
                // var_dump($books);die;
                $bnum=$books['0']['num'];//图书数量
                $j=$books['0']['jf'];
                //计算借阅此书需要的总积分
                $n=$j*$num;
                if($num>$bnum){
                    $this->error('借阅失败',U('Home/Comment/index',array('id'=>$id)));
                }elseif($num<=0){
                    $this->error('请输入正确的借阅数量，思密达',U('Home/Comment/index',array('id'=>$id)));
                }elseif($u_num<$j){
                    $this->error("您只剩余$u_num 积分,不足本次借阅",U('Home/Comment/index',array('id'=>$id)));
                }else{
                    $book=$books['0']['title'];
                    $jf=$books['0']['jf'];
                    // echo $book;
                    $jtime=date("Y-m-d H:i:s",time());
                //创建数据
                $jie->create();
                //执行添加
                $res=$jie->execute("insert into jie (`jid`,`book`,`j_num`,`jtime`,`S_jf`,`j_status`,`i_j`)values('$jid','$book','$num','$jtime','$jf','0','0')");
                //判断
                if($res){
                    //添加成功
                    $this->success('添加成功',U('Home/Jieyue/index'));
                }
            }
          }
        }
    }
    //收藏
    public function collect(){
        if(empty($_SESSION)){
            $this->error('您还没有登录,不可以收藏,请登录！',U('Home/Login/index'));
        }else{
            // var_dump($_GET);die();
            // var_dump($_SESSION);
            $id = $_GET['id'];
            $cid = $_SESSION['uid'];
            $book = M('book');
            $collect = M('collect');
            $info = $book->where('id ='.$id)->select();
            $books = $info['0']['title']; 
            $res = $collect->execute("insert into collect(cid,book)values('$cid','$books')");
            // echo $collect->_sql();die();
            if($res){
                $this->success('收藏成功',U('Home/Comment/index'));
            }else{
                $this->error('收藏失败',U('Home/Comment/index'));
            }
        }
    }
}