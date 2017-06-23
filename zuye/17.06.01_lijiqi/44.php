<?php 
	
	//创建链接
	$fp = fsockopen('localhost',80, $errno,$errmsg, 10);

	//判断
	if(!$fp) {
		echo $errmsg;die;
	}

	//拼接post请求报文
	$str =<<<DDD
POST /ljq/zuye/17.06.01_lijiqi/server-2.php HTTP/1.1
Host: localhost
Connection: close
Content-type: application/x-www-form-urlencoded
Content-length: 18

{"name":"lamp179"}
DDD;

	//class=lamp179&age=6	  19

	//传递发送数据
	fwrite($fp, $str);

	//接收结果
	$res = '';
	while(!feof($fp)) {
		$res .= fgets($fp);
	}

	echo $res;

