<?php
/**
 * 
 * @authors ${author} (${email})
 * @date    2017-06-13
 * @version $Id$
 */
	// 接口地址
	$url = 'http://apis.baidu.com/netpopo/express/express1?type=ZTO&number=438402830868';

	// 初始化
	$ch = curl_init();

	// 设置请求的url地址
	curl_setopt($ch, CURLOPT_URL, $url);

	// 设置请求头信息  设置请求头信息  是一个索引数组
	curl_setopt($ch, CURLOPT_HTTPHEADER, [
		'APIKEY:8ea6744a67c32b9d6ffd84375ed41d7b'
		]);

	// 设置
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_TIMEOUT, 10);

	// 发送
	$res= curl_exec($ch);

	var_dump(json_decode($res));

	curl_close($ch);

	// include './function/function.php';
	// echo getComName('438402830868');