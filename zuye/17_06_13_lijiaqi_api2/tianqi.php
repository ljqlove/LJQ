<?php
/**
 * 
 * @authors ${author} (${email})
 * @date    2017-06-13
 * @version $Id$
 */

// // 接口设置
// $url = 'http://apis.baidu.com/heweather/pro/weather?city=北京';
// // 使用curl扩展来模拟http请求的发送
// // 创建curl资源  初始化
// $ch= curl_init();

// // 设置要求的url地址
// curl_setopt($ch, CURLOPT_URL, $url);

// // 设置请求头信息
// curl_setopt($ch, CURLOPT_HTTPHEADER, [
// 	'apikey:8ea6744a67c32b9d6ffd84375ed41d7b'
// 	]);

// // 设置返回结果的转换
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// // 设置请求超时时间
// curl_setopt($ch, CURLOPT_TIMEOUT, 10);

// // 发送请求
// $res = curl_exec($ch);
// // 关闭
// curl_close($ch);

// var_dump(json_decode($res,true));
include './function/function.php';
echo getWeather('北京');