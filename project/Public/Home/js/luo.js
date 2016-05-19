<script type="text/javascript" src="jquery-1.8.3.min.js"></script>
	<script type="text/javascript">
		//定义全局变量
		var i = 0;
		//无缝第一步 克隆第一张图片
		var cloneimg = $('.luobo .img li').first().clone();
		//插入进去 克隆第二步
		$('.luobo .img').append(cloneimg);
		//获取图片的个数
		var length = $('.luobo .img li').length;
		// console.log(length);

		// 启动定时器
		var inte = setInterval(moveR,3000);
		//鼠标悬停事件
		$('.luobo').hover(function(){
			//鼠标移入以后 清除定时器
			clearInterval(inte);
		},function(){
			//启动轮播
			inte = setInterval(moveR,3000);
		})

		//给小圆点绑定鼠标滑入事件
		$('.luobo .num li').hover(function(){
			//获取当前小圆点的索引
			var index = $(this).index();
			i = index;
			//计算新left
			newLeft = i*1000;
			//设置样式
			$('.luobo .img').animate({left:-newLeft+'px'},500);
			//在方法中移动园点 class="on"
			$('.luobo .num li').eq(i).addClass('on').siblings().removeClass();
		})

		// 绑定向右移动事件
		$('.btn_r').click(function(){
			moveR();
		})
		// 绑定向左移动事件
		$('.btn_l').click(function(){
			moveL();
		})
		// 封装向右移动的方法
		function moveR(){
			i++;
			//检测越界
			if(i == length){
				// i = 0;//不能等于0 无缝第三步
				$('.luobo .img').css({left:0});
				//把i改成1
				i = 1;
			}
			//计算新left
			newLeft = i*1000;
			//修复bug
			if(i == length-1){
				$('.luobo .num li').eq(0).addClass('on').siblings().removeClass();
			}else{
				$('.luobo .num li').eq(i).addClass('on').siblings().removeClass();
			}
			//设置样式 //stop是为了运行更流畅
			$('.luobo .img').stop().animate({left:-newLeft+'px'},500);
			//在方法中移动园点 class="on"
		}
		// 封装向左移动的方法
		function moveL(){
			i--;
			//检测越界
			if(i == -1){
				// i = length-1;
				//第四步
				$('.luobo .img').css({left:-(length-1)*1000});
				i = length-2;
			}
			//计算新left
			newLeft = i*1000;
			//设置样式
			$('.luobo .img').stop().animate({left:-newLeft+'px'},500);
			//在方法中移动园点 class="on"
			$('.luobo .num li').eq(i).addClass('on').siblings().removeClass();
		}
	</script>