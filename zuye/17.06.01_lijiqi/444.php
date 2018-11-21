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

  $str =<<<AAA
POST /ljq/zuye/17.06.01_lijiqi/server-2.php HTTP/1.1
Host: localhost
Connection: close
Content-type: application/x-www-form-urlencoded
Content-length: 22

a=11111ssf&b=222114223
AAA;
	fwrite($fp, $str);
	$res ='';
	while (!feof($fp)) {
		$res .= fgets($fp);
	}
	echo $res;
