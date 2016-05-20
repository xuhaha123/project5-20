<?php 
namespace Admin\Controller;
use Think\Controller;
class SugController extends CommonController {
	public function index(){
		$advice = M('advice');
		$sql = "SELECT a.id aid,a.context,a.reply,u.id uid,u.username,u.phone,u.email FROM advice a,user u WHERE a.uid=u.id";
		$advices = $advice->query($sql);
		// var_dump($advices);
		$this->assign('advices',$advices);
		$this->display();

	}
	 public function del_ajax(){
        $aid =I('get.aid');
        $advice = M('advice');
        $res = $advice ->delete($aid);
        if($res){
            echo 1;
        }

    }
    public function reply(){
        $aid = I('get.id');
        // var_dump($aid);
        $advice = M('advice');
        $res = $advice->select($id);
       
            if($res[0]['display'] ==0){
                $res[0]['display'] = '未评论';

            }else if($res[0]['display'] ==1){
                $res[0]['display'] = '已评论未回复';

            }else if($res[0]['display'] ==2){
                $res[0]['display']= '已回复';
            }
        $sql = "SELECT a.context,a.reply,a.id aid,u.id uid,u.username,u.phone,u.email FROM advice a,user u WHERE a.id = ".$aid." and a.uid = u.id";
        $advices = $advice->query($sql);
        foreach ($advices as $key => $value)
        // var_dump($value); 
        $this->assign('value',$value);
        //分配变量    
        $this->assign('info',$info);
        $this->display();
       

    }
    public function update1(){
        $aid = $_POST['aid']; 
        // var_dump($_POST);
        // var_dump($id);die;      
        $advice = M('advice');
        $advices = $advice->create();
        $reply = $advices['reply'];
        $context = $advices['context'];
        // var_dump($reply);
        $sql = "update advice set reply = '".$reply."' where id = ".$aid." and context = '".$context."'";
        // var_dump($sql);
        $res = $advice->query($sql);
        // var_dump($res);
        // die;
          //执行添加
        if(!$res){
             //添加成功
            $this->success('回复成功',U('Admin/Sug/index'));
        }else{
            //失败
            $this->error('回复失败',U('Admin/Sug/index'));
        }
    }

    

	 
}

 ?>