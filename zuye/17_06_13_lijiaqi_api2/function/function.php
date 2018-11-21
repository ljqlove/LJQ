<?php
/**
 * @version  
 * @author   ZhongAnPing
 * @date     
 */
  function getWeather($city) {

  	// 接口地址
	$url = 'http://apis.baidu.com/heweather/pro/weather?city='.$city;
	// 使用curl扩展来模拟http请求的发送
	// 创建curl资源  初始化
	$ch= curl_init();

	// 设置要求的url地址
	curl_setopt($ch, CURLOPT_URL, $url);

	// 设置请求头信息
	curl_setopt($ch, CURLOPT_HTTPHEADER, [
		'apikey:8ea6744a67c32b9d6ffd84375ed41d7b'
		]);

	// 设置返回结果的转换
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	// 设置请求超时时间
	curl_setopt($ch, CURLOPT_TIMEOUT, 10);

	// 发送请求
	$res = curl_exec($ch);
	// 关闭
	curl_close($ch);

	return json_decode($res,true)["HeWeather data service 3.0"][0]['now']['cond']['txt'];
  }


  	/**
	 * 通过快递单号获取公司的名称代号
	 */
  	function getComName($number) {
  		// 获取公司的名称(代号)
  		$url = 'http://apis.baidu.com/netpopo/express/express1?type=ZTO&number='.$number;

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

		$data = json_decode($res,true);

		// 获取公司的名称
		$comName = $data['auto'][0]['comCode'];
		return $comName;

  	}

