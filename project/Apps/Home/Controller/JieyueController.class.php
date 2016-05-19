<?php 
namespace Home\Controller;
use Think\Controller;
class JieyueController extends Controller {
	public function index(){
            // echo '111';die;
            $jid=$_SESSION['uid'];
		    //创建对象       
            $jie=M('jie');
            //查询
            $jies=$jie->join('LEFT JOIN __BOOK__ ON __JIE__.book=__BOOK__.title')->where("jid='$jid'")->select();
                // var_dump($jies);
            //分配变量
            $this->assign('jies',$jies);

            //解析模板
            $this->display();
    }
	//单个删除操作
	public function delete(){
        // echo '111';die;
		// var_dump($_GET);die;
        $id=$_GET['j_id'];
        //创建对象模型
        $m = new \Think\Model();
        //创建对象 执行删除
        $res = $m->execute("delete from jie where(j_id='$id')");
        //判断
        if($res){
            $this->success('删除成功',U('Home/Jieyue/index'));
        }else{
            $this->error('删除失败',U('Home/Jieyue/index'));
        }
	}
    //清空
    public function del(){
        // echo '111';die;
        // var_dump($_GET);die;
        $jid=$_GET['jid'];
        //创建对象模型
        $m = new \Think\Model();
        //创建对象 执行删除
        $res = $m->execute("delete from jie where(jid='$jid' and i_j='0')");
        //判断
        if($res){
            $this->success('已清空未借书籍',U('Home/Jieyue/index'));
        }else{
            $this->error('清空失败',U('Home/Jieyue/index'));
        }
    }
    //借阅
    public function update(){
        // var_dump($_GET);die;
        $j_id=$_GET['j_id'];
        $jid=$_GET['jid'];
        // echo $j_id;die;
        // echo '111';die;
        //单个提交借阅
        if($jid==''){
            //创建对象
            $jie1=M('jie');
            $user=M('user');
            //创建对象
            $book=M('book');
            //查询
            $result=$jie1->where("j_id='$j_id'")->select();
            $bookn=$result['0']['book'];//书名
            $jnum=$result['0']['j_num'];//借阅数量
            $jf=$result['0']['S_jf'];//查出借阅所需积分
            $uid=$result['0']['jid'];//用户id
            $users=$user->where("id='$uid'")->select();
            $ujf=$users['0']['num'];//用户积分
            $books=$book->where("title='$bookn'")->select();
            $bnum=$books['0']['num'];//图书剩余数量
            if($jnum>$bnum){
                $this->error('此书已无库存,请耐心等待',U('Home/Jieyue/index'));
            }elseif($ujf<$jf*$jnum){
                $this->error('您的积分不足,请充值',U('Home/Jieyue/index'));
            }else{
                $num=$users['0']['num']-$jf*$jnum;//获取借阅后的积分
                //修改用户表
                $user->execute("update user set num='$num' where (id='$uid')");
                //插入借阅表
                $res=$jie1->execute("update jie set i_j='1' where(j_id='$j_id')");
                $a=$books['0']['num'];//图书总数量
                //图书剩余数量
                $b=$a-$jnum;
                 //更改
                $book->execute("update book set num='$b' where(title='$bookn')");
                // var_dump($res);die;
                if($res){
                $this->success('借阅成功,思密达',U('Home/Jieyue/index'));
                }else{
                $this->error('借阅失败',U('Home/Jieyue/index'));
                }
          }
        }else{
            //全部提交借阅
            //创建对象       
            $jie=M('jie');
            $user=M('user');
            //查询
            $jies=$jie->where("jid='$jid'")->select();
            $users=$user->where("id='$jid'")->select();
            $ujf=$users['0']['num'];//用户现有积分
            // var_dump($users);die;
            if($jies==''){
                $this->error('读书有益健康',U('Home/Book/gallery'));
            }else{
                $jies=$jie->where("jid='$jid' and i_j='0'")->select();
                $arr=[];
                foreach ($jies as $k => $v){
                    // var_dump($v);
                    $j= $v['j_num']*$v['S_jf'];
                    $a+=$j;
                    $arr[]=$a;
                    // echo $a;
                }
                // var_dump($arr);
                $m=array_sum($arr);//取出数组值的和
                if($ujf<$m){
                    $this->error('您的积分不足,请充值',U('Home/Jieyue/index'));
                }else{
                    foreach ($jies as $k => $v) {
                        $n=$v['j_num'];
                        $b=$v['book'];
                        // echo $b;
                        $book=M('book');
                        $c=$book->where("title='$b'")->select();
                        $d=$c['0']['num'];
                        // echo $book->_sql();
                        // var_dump($c);
                        if($d<$n){
                            $this->error("$b 已无库存,请耐心等待",U('Home/Jieyue/index'));
                        }
                    }
                    foreach ($jies as $k => $v) {
                        $n=$v['j_num'];
                        $b=$v['book'];
                        // echo $b;
                        $book=M('book');
                        $c=$book->where("title='$b'")->select();
                        $d=$c['0']['num'];
                        //计算剩余数量
                        $e=$d-$n;
                        //变更表数据
                        $book->execute("update book set num='$e' where(title='$b')");
                    }
                    //更改积分
                    $sjf=$ujf-$m;
                    //插入数据库
                    $user->execute("update user set num='$sjf' where (id='$jid')");
                    $res=$jie->execute("update jie set i_j='1' where(jid='$jid')");
                    if($res){
                        $this->success('借阅成功,思密达',U('Home/Book/gallery'));
                    }else{
                        $this->error('借阅失败',U('Home/Jieyue/index'));
                    }
                }
            } 
        }
        
    }

}
 ?>