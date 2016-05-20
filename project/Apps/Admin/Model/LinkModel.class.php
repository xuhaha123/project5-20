<?php 
namespace Admin\Model;
use Think\Model;
class LinkModel extends Model {
	//自动验证的数组
	protected $_validate = array(
		array('name','require','链接名必须填写!'),
		
		array('pic','require','图片必须上传!'),
		
	);
}

 ?>