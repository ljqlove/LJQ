<?php
/**
 * @version  
 * @author   ZhongAnPing
 * @date     
 */
  $fp = fsockopen("www.baidu.com",'80',$errno,$errmsg,10);
  if (!$fp) {
  	echo $errmsg;die;
  }
  $str =<<<AAA
GET / HTTP/1.1
host: www.baidu.com
Connection: close


AAA;
	fwrite($fp, $str);
	$res = '';
	while (!feof($fp)) {
		$res .= fgets($fp);
	}
	echo $res;
