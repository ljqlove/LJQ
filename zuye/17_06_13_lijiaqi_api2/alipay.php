<?php
/**
 * @version  
 * @author   ZhongAnPing
 * @date     
 */
  	// 接口地址
	$url = 'https://mapi.alipay.com/gateway.do';

	// 准备参数
	$data['service'] = 'create_direct_pay_by_user';
	$data['partner'] = '2088221571819819';
	$data['_input_charset'] = 'UFT-8';
	$data['out_trade_no'] = time().rand(1000,9999);// 订单号
	$data['subject'] = '最新的篮球鞋';
	$data['payment_type'] = 1;
	$data['total_fee'] = 0.01;
	$data['seller_id'] = $data['partner'];
	$data['return_url'] = 'http:localhost';

	// 排序
	ksort($data);
	$paramsStr = '';
	foreach ($data as $key => $value) {
		$paramsStr = rtrim($paramsStr,'&');
	}
	// 点签名字符串
	$paramsStr = rtrim($paramsStr,'&');
	$paramsStr .= 'bkx2fverq2afllrhu8m5dzzn7y2ibaql';

	$sign_type = 'MD5';
	$sign = md5($paramsStr);

	// 拼接最终的参数字符串
	$str = '';
	foreach ($data as $key => $value) {
		$str .= $key.'='.$value.'&';
	}

	// 拼接参数字符串
	$str .= 'sign_type=MD5&sign='.$sign;

	// 拼接完整的url地址
	$url .= '?'.$str;

	header('Location:'.$url);