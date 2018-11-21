<?php
/**
 * @version  
 * @author   ZhongAnPing
 * @date     
 */
  
  	class http
  	{
  		public static function get($url,$headers=[])
  		{
  			$ch = curl_init();
  			curl_setopt($ch, CURLOPT_URL, $url);
  			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  			// 设置
  			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  			curl_setopt($ch, CURLOPT_TIMEOUT, 10);
  			// 发送请求
  			$res = curl_exec($ch);
  			curl_close($ch);
  			return $res;
  		}

  		public static function post($url,$headers=[],$body=[])
  		{
  			$ch = curl_init();
  			// 设置请求头信息
  			curl_setopt($ch, CURLOPT_HTTPHEADER, $url);
  			curl_setopt($ch, CURLOPT_POST, 1);
  			curl_setopt($ch, CURLOPT_POSTFIELDS, $body);

  			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  			curl_setopt($ch, CURLOPT_TIMEOUT, 10);

  			$res = curl_exec($ch);
  			return $res;
  		}
  	}