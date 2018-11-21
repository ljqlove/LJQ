<?php
/**
 * @version  
 * @author   ZhongAnPing
 * @date     
 */
  $fp = fsockopen('localhost',80,$errno,$errmsg,10);
  if (!$fp) {
  	echo $errmsg;die;
  }
  // 拼接http协议内容
  $str =<<<AAA
GET /ljq/zuye/17.06.01_lijiqi/server-1.php?a=1123&b=4532 HTTP/1.1
Host: localhost
Connection: close
User-Agent: firefox
cookie: username=ljq; password=ljq; uid=26
custom:179


AAA;

	fwrite($fp, $str);
	$res = '';
	while(!feof($fp)) {
		$res .= fgets($fp);
	}
	echo $res;