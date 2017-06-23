<?php
/**
 * @version  
 * @author   ZhongAnPing
 * @date     
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
  curl_setopt($ch, CURLOPT_HTTPHEADER, [
  	'APIKEY:8ea6744a67c32b9d6ffd84375ed41d7b'
  	]);

  // 设置请求体 设置请求方式为post
  curl_setopt($ch, CURLOPT_POST, 1);

  // post请求体信息
  curl_setopt($ch, CURLOPT_POSTFIELDS, [
  	'fromdevice' => 'pc',
  	'clientip' => '10.10.10.0',
  	'detecttype' => 'locateRecognize',
  	'imagetype' => '2',
  	'image' => new CURLFile(realpath($path))
  	]);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_TIMEOUT, 10);

  $res = curl_exec($ch);

  var_dump(json_decode($res));