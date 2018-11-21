<?php

	// 接口设置
	$url = 'http://apis.baidu.com/heweather/pro/weather?city=北京';

	$ch = curl_init();

	// 设置要求的url地址
	curl_setopt($ch, CURLOPT_URL, $url);

	// 设置请求头信息
	curl_setopt($ch, CURLOPT_HTTPHEADER,[
		'apikey:8ea6744a67c32b9d6ffd84375ed41d7b'
		] );
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
	curl_setopt($ch, CURLOPT_TIMEOUT, 10);

	// 发送请求
	$res = curl_exec($ch);
	// 关闭
	curl_close($ch);

	var_dump(json_decode($res,true));
	