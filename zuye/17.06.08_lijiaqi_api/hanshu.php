<?php
#数学函数
	echo abs(-123.345);echo '<br>';//绝对值
	echo ceil(-123.345);echo '<br>';//进一法取整
	echo floor(-123.345);echo '<br>';//去一法取整
	echo fmod(3.2,1.5);echo '<br>';//浮点数求余
	echo pow(2,10);echo '<br>'."\n";//求第一个参数的第二个参数次方
	echo round(4.12345,2);echo '<br>';//浮点数四舍五入
	echo sqrt(4);echo '<br>';//求平方根		
	echo max(2,5,3,4,4,2);echo '<br>';//求最大值
	echo min(2,5,3,4,4,2);echo '<br>';//求最小值
	echo mt_rand(0,9);echo '<br>';//随机数
	echo rand(0,9);echo '<br>';//随机数
	echo pi();echo '<br>';//获取圆周率
	echo intval(4.2).'<br>';//获取变量整数值
	echo intval('43').'<hr>';
	echo '<hr>';
#字符串函数
	$str = "\t\t\n\nyou are 'ssbb'! LL....)\n";
	echo trim($str);//去除字符串两边的空白或空白字符
	echo rtrim($str);//去除字符串右边的空白或空白字符
	echo ltrim($str);//去除字符串左边的空白或空白字符
	echo '<br>';
	$str = 'I love "PHP".';
	echo htmlspecialchars($str);//将预定义的字符转换为HTML实体
	echo '<br>';
	$str = '"asd",<asd> '."\n";
	echo htmlspecialchars($str);
	echo '<br>';
	$str = "these are some <b>blod</b> text \n";
	echo htmlspecialchars_decode($str);//将预定义的html实体转换为字符串
	$text = '<p>Test paragraph.</p><!-- Comment --><a href="#fragment">text</a>';
	echo $text;
	echo '<br>';
	echo strip_tags($text);//去除字符串中的html和php字符
	echo strip_tags($text);
	$path_parts=pathinfo('/www/htdocs/inc/lib.inc.php');//返回文件路径信息

	echo $path_parts ['dirname'],"\n";
	echo $path_parts ['basename'],"\n";
	echo $path_parts ['extension'],"\n";
	echo $path_parts ['filename'],"\n";
	echo '<hr>';
	echo dirname("c://testweb/home.php");//返回文件中的目录部分
	echo '<br>';

	echo dirname("testweb/home.php");
	echo '<br>';
	$input = "ASDASD";
	echo str_pad($input,10,"=-=")."\n";//用指定字符填充字符串
	echo '<hr>';
	echo str_repeat($input,10)."\n".'<br>';//重复指定字符
	echo strrev($input)."\n".'<br>';//反转字符串
	echo str_shuffle($input)."\n".'<br>';//随机打乱字符串
	$str = "a=A&b=B&c=C";
	parse_str($str);//将字符串解析成多个变量
	echo $a.'<br>';
	echo $b.'<br>';
	echo $c.'<br>';
	echo chr(061)."<br>";//返回ASCII码所对应的单个字符
	echo chr(0x61)."<br>";
	echo chr(61)."<br>";
	echo ord("s")."<br>";//返回字符串第一个字符多对应的ASCII码
	echo ord("shanghai")."<br>";
	$str = "Mary Had A Little Lamp And She LOVE It";
	echo strtolower($str)."<br>";//将字符串转换为小写
	echo strtoupper($str)."<br>";//将字符串转换为大写
	$str = "how old are you?";
	echo ucfirst($str)."<br>";//将字符串第一个字符转换为大写
	echo ucwords($str)."<br>";//将字符串中每个单词的首字母转换为大写
	var_dump( explode(" ",$str));//将字符串以某种方式进行分割
	$array = array("how","old","are","you","?");
	echo implode(" ",$array);echo '<br>';//将字符串以某种方式进行重组
	echo $a = str_replace('search', 'replace', 'subject').'<br>';//替换
	echo substr('asdfg',1).'<br>';//截取字符串/sdfg
	echo substr('asdfg',1,3).'<br>';//sdf
	$str = 'abcdefghijklmnopqrst';
	echo "Original:$str <hr />\n";
	echo substr_replace($str, 'bob', 2).'<br>';//替换字符串的子串
	$email   =  'name@example.com' ;
	$domain  =  strstr ( $email ,  '@' );//查找字符串的首次出现，并返回字符串的剩余部分
	echo  $domain.'<br>' ; 
	echo strchr("Hello world!","world").'<br>';//查找指定字符在字符串中的最后一次出现
	echo strpos("You love php, I love php too!","php").'<br>';//查找字符串在另一字符串中第一次出现的位置
	echo strrpos("You love php, I love php too!","php").'<br>';//查找字符串在另一字符串中最后一次出现的位置
	echo strlen("Shanghai").'<br>';//返回字符串的长度
	$str = "Shanghai";
	echo md5($str);//计算字符串的 MD5 散列值（加密）
#数组函数
	echo '<hr>';
	echo '<hr>';
	$array = array('壹','2'=>'贰','叁','肆','伍','陆','柒');
	var_dump(array_values($array));//返回数组中的所有值
	var_dump(array_keys($array));//返回数组中的所有所有键名
	var_dump(array_flip($array));//交换数组中的键和值（如果有重复前面的会被后面的覆盖）
	var_dump(in_array('叁',$array));//检查数组中是否存在某个值
	var_dump(array_search('叁',$array));//在数组中搜索给定的值，如果成功则返回相应的键名
	var_dump(array_key_exists('2',$array));//检查给定的键名或索引是否存在于数组中
	echo current($array);//返回数组当前的单元
	echo '<br>';
	next($array);
	next($array);//指针往后移动一位
	echo current($array);
	echo "<br>";
	prev($array);//指针往回移动一位
	echo current($array);
	echo '<br>';
	end($array);//指针指向最后一个元素
	echo current($array);
	echo '<br>';
	reset($array);//指向数组开头的元素
	echo current($array);
	echo '<br>';
	echo key($array);//指向当前元素所指的键名
	// echo current($array);
#数组的分段和填充
	var_dump(array_slice($array,2,-1));//讲述组中的一段输出出来
	var_dump(array_slice($array,0,3));
	var_dump(array_slice($array,-2,3));
	$array1=array('1','2');
	var_dump(array_splice($array,0,2,$array1));//交换数组中的元素
	var_dump($array);	
	var_dump(array_pad($array,10,'a'));//讲一个或多个元素压入数组
	array_push($array,"八",'九');
	var_dump($array);
	$a = array_pop($array);//讲述组最后一个单元弹出
	var_dump($array);
	$b = array_shift($array);//去掉开头一个元素
	var_dump($array);
	var_dump(array_unshift($array,"壹","贰"));//在数组中插入一个或多个元素
	var_dump($array);
	sort($array);//对数组进行排序
	var_dump($array);
	rsort($array);//对数组进行逆向排序
	var_dump($array);
	asort($array);//对数组进行排序，并保持索引关系
	var_dump($array);