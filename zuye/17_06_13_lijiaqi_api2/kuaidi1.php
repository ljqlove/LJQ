<?php
/**
 * 
 * @authors ${author} (${email})
 * @date    2017-06-13
 * @version $Id$
 */
	// 快递单号
	$number= '9738910645932';

	// 获取公司的名称
	$url = 'http://www.kuaidi100.com/autonumber/autoComNum?text='.$number;

	// 初始化
	$ch = curl_init();

	// 设置请求的url地址
	curl_setopt($ch, CURLOPT_URL, $url);
	// 设置
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_TIMEOUT, 10);
	// 发送

	$res= curl_exec($ch);

	// 获取公司的名称
	$data = json_decode($res,true);
	$comName = $data['auto'][0]['comCode'];

	// 要请求的url地址
	$url = 'http://www.kuaidi100.com/query?type='.$comName.'&postid='.$number.'&id=1&valicode=&temp=0.7081298480212936';

	// 初始化
	$ch = curl_init();

	// 设置请求的url地址
	curl_setopt($ch, CURLOPT_URL, $url);

	// 设置
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_TIMEOUT, 10);

	// 发送
	$res = curl_exec($ch);

	curl_close($ch);

	echo $res;
	