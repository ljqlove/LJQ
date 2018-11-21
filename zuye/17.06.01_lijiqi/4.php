<?php
	// 创建链接
	$fp = fsockopen('localhost',80,$errno,$errmsg,10);

	// 判断
	if (!$fp) {
		echo $errmsg;die;
	}
	// 拼接字符串
	$str =<<<AAA
POST /ljq/zuye/17.06.01_lijiqi/server-2.php HTTP/1.1
Host: localhost
Connection: close
Content-type: application/x-www-form-urlencoded
Content-length: 18

{"name":"lamp179"}
AAA;
	fwrite($fp, $str);
	// 传递发送数据
	$res = '';
	while(!feof($fp)){
		$res .= fgets($fp);
	}
	echo $res;