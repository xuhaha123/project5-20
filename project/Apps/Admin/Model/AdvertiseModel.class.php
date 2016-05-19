<?php 

	namespace Admin\Model;
	use Think\Model;
	/**
	* 
	*/
	class AdvertiseModel extends Model
	{

		protected $_validate = array(

		array('name','require','广告名必须填写!'),
		array('name','','此广告已经存在！',0,'unique',1), 
		array('content','require','广告简介必须填写!'),
		array('url','require','广告网址必须填写!'),
		array('time','require','广告添加时间必须填写!'),
		array('pic','require','请上传图片!'),

		);






	}






p




 ?>