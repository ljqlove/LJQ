<?php

	$fp = fsockopen('127.0.0.1',80,$errno,$errmsg,10);
	if (!$fp) {
		echo $errmsg;die;
	}
	// 获取图片 二进制内容
	$img = file_get_contents('D:/xampp/htdocs/ljq/zuye/17.06.01_lijiqi/44.jpg');
	// 请求体内容
	$body =<<<AAA
------------6666
Content-Disposition: form-data; name="username"

admin
------------6666
Content-Disposition: form-data; name="password"

administrator
------------6666
Content-Disposition: form-data; name="img"; filename="44.jpg"
Content-type: image/jpeg

$img
------------6666--
AAA;

	// 获取长度
	$len = strlen($body);
	$str =<<<SSS
POST /ljq/zuye/17.06.01_lijiqi/server.php HTTP/1.1
Host: localhost
Connection: close
Content-type: multipart/form-data; boundary=----------6666
Content-length: $len

$body
SSS;

	// echo $str;die;
	fwrite($fp, $str);

	$res = '';
	while(!feof($fp)) {
		$res .= fgets($fp);
	}

	echo $res;