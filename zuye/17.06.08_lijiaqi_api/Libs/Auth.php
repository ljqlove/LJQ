<?php 
	
	/**
	 * 验证类
	 */
	class Auth
	{
		public static function checkTimestamp()
		{
			//检测是否有时间戳参数
			if(empty($_GET['t'])) {
				Tool::response('0002','缺少时间戳参数');
			}
			//检测时间戳参数跟当前服务器时间戳的间隔
			if(abs(time() - $_GET['t']) >= 300) {
				Tool::response('0003','请求时间过期');
			}
		}

		/**
		 * 检测签名
		 */
		public static function checkSign()
		{
			if(empty($_GET['sign'])) {
				Tool::response('0004','缺少签名');
			}
			//对参数排序
			$sign = $_GET['sign'];
			unset($_GET['sign']);
			ksort($_GET);
			//拼接参数字符串
			$str = '';
			foreach ($_GET as $key => $value) {
				$str .= $key.'='.$value.'&';
			}
			$res = trim($str,'&');

			//加密
			$tmp = md5($res.'iloveyoumm');

			$tmp_2 = $tmp[1].$tmp[7].$tmp[9];// zef  190   8af
			//转成十进制
			$tmp_3 = hexdec($tmp_2);


			$index = $tmp_3 % 4;
			$arr = [
				[1,6,3,6,7,9,0],
				[1,4,6,7,7,12,9],
				[2,3,4,5,19,7,12],
				[3,4,5,14,7,8,13]
			];

			$tmp_5 = '';
			foreach ($arr[$index] as $key => $value) {
				$tmp_5 .= $tmp[$value];
			}

			$calSign = md5($tmp_5);

			if($calSign != $sign) {
				Tool::response('0005','签名错误');
			}
		}

	}

