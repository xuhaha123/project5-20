<?php 
namespace Admin\Model;
use Think\Model;
class UserModel extends Model {
	//自动验证的数组
	protected $_validate = array(
		array('username','require','用户名必须填写!'),
		array('password','require','密码必须填写!'),
		array('age','require','年龄必须填写!'),
		array('email','require','邮箱必须填写!'),
		array('pic','require','图片必须上传!'),
		array('phone','require','手机必须填写!'),
		array('address','require','地址必须填写!'),
		
	);
}

 ?>