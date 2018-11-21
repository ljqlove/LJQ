<?php
	
	$fp = fsockopen('localhost',80,$error,$errmsg,10);

	if (!$fp) {
		echo $errmsg;die;
	}
	// 拼接http协议内容
	$str =<<<ASD
GET /ljq/zuye/17.06.01_lijiqi/server-1.php?a=100&b=200 HTTP/1.1
Host: localhost
Connection: close
User-Agent:firefox
cookie:username=ljq; password=ljq; uid=20
custom: lamp179


ASD;
	
	// 将报文信息发送给服务器端的server.php
	fwrite($fp, $str);
	$res = '';
	while (!feof($fp)) {
		$res .= fgets($fp);
	}
	echo $res;