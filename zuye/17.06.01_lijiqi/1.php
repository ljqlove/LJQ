<?php 
	
	//
	$fp = fsockopen('www.baidu.com', '80', $errno, $errmsg, 10);

	//
	if(!$fp) {
		echo $errmsg;die;
	}

	$str =<<<ABC
GET / HTTP/1.1
Host: www.baidu.com
Connection: close


ABC;
	
	fwrite($fp, $str);

	$res = '';
	while(!feof($fp)) {
		$res .= fgets($fp);
	}

	echo $res;

