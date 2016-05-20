<?php 

	namespace Admin\Model;
	use Think\Model;
	/**
	* 
	*/
	class BookModel extends Model
	{

		protected $_validate = array(

		array('b_path','require','请选择图书分类!'),
		array('title','require','图书名必须填写!'),
		array('title','','此图书已经存在！',0,'unique',1), 
		array('num','require','图书数量必须填写!'),
		array('num','number','图书数量必须为数字!'),
		array('time','require','上传时间必须填写!'),
		array('pic','require','请上传图片!'),
		array('b_content','require','图书详情必须填写!'),

		);






	}






p




 ?>