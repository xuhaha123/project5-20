<?php 
namespace Admin\Model;
use Think\Model;
class GuserModel extends Model {
	//自动验证的数组
	protected $_validate = array(
		array('username','require','管理员名必须填写!'),
		array('password','require','密码必须填写!'),
		
	);
}


 ?>