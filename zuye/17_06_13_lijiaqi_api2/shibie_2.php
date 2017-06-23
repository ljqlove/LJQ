<?php
/**
 * 
 * @authors ${author} (${email})
 * @date    2017-06-13
 * @version $Id$
 */
	<?php
/**
 * 
 * @authors ${author} (${email})
 * @date    2017-06-13
 * @version $Id$
 */

	// 要识别的图片路径
	$path = './img/1.jpg';

	// 接口地址
	$url = 'http://apis.baidu.com/idl_baidu/baiduocrpay/idlocrpaid';

	// 初始化
	$ch = curl_init();
	// 设置url
	curl_setopt($ch, CURLOPT_URL, $url);
	// 设置请求头信息
	curl_setopt($ch, CURLOPT_POSTFIELDS, [
		'fromdevice' => 'pc',
		'clientip' => '10.10.10.0',
		'detecttype' =>'locateRecognize',
		'imagetype' => '2',
		'image' => new CURLFile(realpath($path))
		]);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_TIMEOUT, 10);

	$res = curl_exec($ch);

	var_dump(json_decode($res));
