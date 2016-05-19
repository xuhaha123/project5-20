<?php 
namespace Admin\Model;
use Think\Model;
class InforModel extends Model {
	//自动验证的数组
	protected $_validate = array(
		array('name','require','网站名必须填写!'),
		
		array('content','require','网站简介必须填写!'),
		array('pic','require','网站图片必须上传!'),

		array('config','require','网站版权必须填写!'),
	);
}

 ?>