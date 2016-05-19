<?php 
	namespace Admin\Model;
	use Think\Model;
	/**
	* 
	*/
	class BookinfoModel extends Model
	{

		protected $_validate = array(

		array('author','require','作者名必须填写!'),
		array('Englishname','require','英文名必须填写!'),
		array('press','require','出版社信息必须填写!'), 
		array('page','require','图书总页码必须填写!'),
		array('page','number','图书页码必须为数字!'),
		array('language','require','图书语言必须填写!'),
		array('format','require','图书开本必须填写!'),
		array('format','number','图书开本必须为数字!'),
		array('bar','require','图书条形码必须填写!'),
		array('bar','number','图书条形码必须为数字!'),
		array('size','require','图书尺寸必须填写!'),
		array('weight','require','图书重量必须填写!'),
		array('weight','number','图书重量必须为数字!'),
		array('brand','require','图书品牌必须填写!'),
		array('asin','require','asin必须为填写!'),
		array('relateb','require','相关图书必须填写!'),
		array('relatepic','require','请上传相关图书图片!'),
		array('about','require','作者简介必须填写!'),
		array('jf','require','积分必须填写!'),
		array('jf','number','积分必须数字!'),
		

		);






	}




 ?>