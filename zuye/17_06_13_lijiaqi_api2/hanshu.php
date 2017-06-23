<?php
/**
 * 
 * @authors ${author} (${email})
 * @date    2017-06-13
 * @version $Id$
 */
	
#字符串函数
	$str = "\t\t\n\nyou are 'ssbb'! LL....)\n";
	echo trim($str);
	echo rtrim($str);
	echo ltrim($str);
	echo '<br>';

	$str = 'I love "PHP".';
	echo htmlspecialchars($str);
	$str = '"asd",<asd>'."\n";
	echo htmlspecialchars_decode($str);//预定义的html实体转换为字符串
	$text = '<p>Test paragraph.</p><!-- Comment --><a href="#fragment">text</a>';
	echo $text;
	echo '<br>';
	echo strip_tags($text);//去除字符串中的html和php字符
	$path_parts = pathinfo('./www/htdocs/inc/lib.inc.php');
	echo $path_parts['dirname'],"\n";
	echo $path_parts['basename'],"\n";
	echo $path_parts['extension'],"\n";
	echo $path_parts['filename'],"\n";
	echo "<hr>";
	echo dirname('./www/htdocs/inc/lib.inc.php');
	echo '<hr>';

	$input = "ASDASD";
	echo str_pad($input, 10,"=-=")."\n";//用指定字符填充字符串
	echo str_repeat($input, 10)."\n";//重复指定字符
	echo strrev($input)."\n"."<br>"; //反转字符串
	echo str_shuffle($input)."\n"."<br>";//随即打乱字符串
	$str = 'a=A&b=B&c=C';
	parse_str($str); //将字符串转换为多个变量
	echo $a."<br>";
	echo $b."<br>";
	echo $c."<br>";
	echo chr(061)."<br>";
	echo chr(0x61)."<br>";
	echo chr(61)."<br>";
	echo ord("s")."<br>";
	echo ord("string")."<br>";
	$str = "how old are you";
	echo strtolower($str)."<br>";
	echo strtoupper($str)."<br>";
	echo ucfirst($str)."<br>";
	echo ucwords($str)."<br>";
	var_dump(explode(" ", $str));//将字符串以某种方式进行分割
	$array = array("how","old","are","you","?");
	echo $a = str_replace('search', 'replace', 'subject')."<br>";
	echo substr('asdfg', 1)."<br>";
	echo substr('asdfg', 1,3)."<br>";
	$str = "ASDFGHJKL\n";
	echo substr_replace($str, 'bob', 2)."<br>";//替换字符串的子串
	$email = 'name@example.com';
	$domain = strstr($email,"@");//查找字符串的首次出现,并返回字符串的剩余部分
	echo $domain."<br>";
	echo strchr("Hello world!","world")."<br>";
	echo strpos("You love php, I love php too!","php").'<br>';//查找字符串在另一字符串中第一次出现的位置
	echo strrpos("You love php, I love php too!","php").'<br>';//查找字符串在另一字符串中最后一次出现的位置
	echo strlen("Shanghai").'<br>';//返回字符串的长度
	$str = "Shanghai";
	echo md5($str);//计算字符串的 MD5 散列值（加密）
#数组函数
	echo "<hr>";
	$array = array('壹','2'=>'贰','叁','肆','伍','陆','柒');
	var_dump(array_values($array));//返回数组中的所有值
	var_dump(array_keys($array));//返回数组中的所有所有键名
	var_dump(array_flip($array));//交换数组中的键和值（如果有重复前面的会被后面的覆盖）
	var_dump(in_array('叁',$array));//检查数组中时否存在某个值
	var_dump(array_key_exists('2',$array));//检查给定的键名或索引是否存在于数组中
	echo current($array);//返回数组当前的单元
	echo "<br>";
	next($array);
	echo current($array);
	echo "<br>";
	prev($array);
	echo "<br>";
	end($array);
	echo "<br>";
	reset($array);
	echo "<br>";
	key($array);

	var_dump(array_slice($array,2,-1));//讲述组中的一段输出出来
	var_dump(array_slice($array,0,3));
	$array1 = array('1','2');
	var_dump(array_splice($array,0,2,$array1));//交换数组中的元素
	var_dump($array);
	var_dump(array_pad($array,10,'a'));//将一个或多个元素压入数组中
	array_push($array, "八","久");
	var_dump($array);
	$a = array_shift($array);//将数组最后一个单元弹出
	var_dump($array);
	$b = array_shift($array);
	var_dump($array);
	var_dump(array_unshift($array,"壹","贰"));//在数组中插入一个或多个元素
	var_dump($array);
	sort($array);//对数组进行排序
	var_dump($array);
	rsort($array);
	var_dump($array);
	asort($array);
	var_dump($array);
	ksort($array);
	var_dump($array);
	krsort($array);
	natsort($array);
	natcasesort($array);
	var_dump($array)
	echo array_sum($array);
	var_dump(array_merge($array1));//合并一个或多个数组
	var_dump(array_diff($array, $array1));//计算数组的差集
	var_dump(array_diff_assoc($array, $array1));//带索引检查计算数组的差集
	var_dump(array_intersect($array,$array1));//计算数组的交集
	var_dump(array_intersect_assoc($array,$array1));//带索引检查计算数组的交集
	var_dump(array_combine($array,$array1));//创建一个数组,用一个数组的值作为其键名,另一个数组的值作为其值
	var_dump(array_unique());//移除数组中重复的值
	var_dump(shuffle($array));//将数组打乱
	var_dump(array_rand($array));//从数组中随机取出一个或多个单元
	var_dump(compact("firstname", "lastname", "age"));//建立一个数组,包括变量名和他们的值
	var_dump(substr_count($str, 'a')); //计算字符串出现的次数










