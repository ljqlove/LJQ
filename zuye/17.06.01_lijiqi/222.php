<?php 
	
	//cookie的模拟发送
	$fp = fsockopen('127.0.0.1',80, $errno, $errmsg, 10);

	if(!$fp){
		echo $errmsg;die;
	}

	//获取图片  二进制内容
	$img = file_get_contents('D:/xampp/htdocs/ljq/zuye/17.06.01_lijiqi/44.jpg');

	//请求体的内容
	$body =<<<DDD
------------iloveyoulamp179
Content-Disposition: form-data; name="username"

admin
------------iloveyoulamp179
Content-Disposition: form-data; name="password"

administrator
------------iloveyoulamp179
Content-Disposition: form-data; name="img"; filename="44.jpg"
Content-type: image/jpeg

$img
------------iloveyoulamp179--
DDD;
	
	//获取长度
	$len = strlen($body);

	$str =<<<ABC
POST /ljq/zuye/17.06.01_lijiqi/server.php HTTP/1.1
Host: localhost
Connection: close
Content-type: multipart/form-data; boundary=----------iloveyoulamp179
Content-length: $len

$body
ABC;


	// echo $str;die;

	fwrite($fp, $str);

	$res = '';
	while(!feof($fp)) {
		$res .= fgets($fp);
	}

	echo $res;