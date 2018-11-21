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
	echo '数组函数';
	$array = array(1,2,3,'4','五'=>5,'陆');
	var_dump(array_values($array));//返回数组中的所有值
	echo '<hr>';
	var_dump (array_keys($array));//返回数组中的所有键名
	echo '<hr>';
	var_dump(array_flip($array));//交换数组中的键和名
	echo '<hr>';
	var_dump(in_array('陆',$array));//检查数组中是否存在某个值
	echo '<hr>';
	var_dump(array_search('4',$array));//在数组中搜索给定的值，如果存在则返回所对应的键名，不存在返回false
	echo '<hr>';
	var_dump(array_key_exists('五',$array));//检查给定的键名或索引是否存在
	echo '<hr>';
#内部指针函数
	echo '内部指针函数';
	echo current($array);//指针当前指向的元素值
	echo '<hr>';
	echo next($array);//将指针后移一位
	echo next($array);
	echo '<hr>';
	echo prev($array);//将指针往回移动一位
	echo '<hr>';
	echo end($array);//将指针移动到最后一位
	echo '<hr>';
	echo reset($array);//将指针移动到开头
	echo '<hr>';
	echo key($array);
	echo '<hr>';
#字符串函数
	echo '字符串函数';
	$text	=	"\t\tThese are a few words  : ) ...		";
	$trimmed = trim($text);//去掉字符串首尾处的空白字符串（或其他字符） 
	$rtrimmed = rtrim($text);//去掉字符串末端的空白字符串（或其他字符） 
	$ltrimmed = ltrim($text);//去掉字符串开头的空白字符串（或其他字符） 
	var_dump($trimmed);
	var_dump($rtrimmed);
	var_dump($ltrimmed);
	echo '<hr>';
	$str = 'I love "PHP".';
	echo htmlspecialchars($str);//把一些预定义的字符转换为字符串
	echo '<hr>';
	$str = "This is some <b>bold</b> text.";
	echo htmlspecialchars_decode($str);//把一些预定义的HTML实体转换为字符
	echo '<hr>';
	$text = '<p>Test paragraph.</p><！--- Comment --><a href="#fragment">Other text</a>';
	echo $text;
	echo '<br>';
	echo ($text);//从字符串中去除HTML和PHP标记
	echo '<hr>';
	$path_parts=pathinfo('/www/htdocs/inc/lib.inc.php');//返回文件路径信息
	echo $path_parts ['dirname'], "\n";
	echo $path_parts ['basename'], "\n";
	echo $path_parts ['extension'], "\n";
	echo $path_parts ['filename'], "\n";
	echo '<hr>';
	echo dirname("c:/testweb/home.php");//反回路径中的目录部分
	echo dirname("/testweb/home.php");
	echo '<hr>';
	$input = "Alien";
	echo str_pad($input,10);//使用另一个字符串来填充字符串到指定的长度
	echo str_pad($input,10, "-=",STR_PAD_LEFT);
	echo str_pad($input,10,"--",STR_PAD_LEFT);
	echo str_pad($input,6, "____");
	echo '<hr>';
	echo str_repeat("-=", 10);//重复一个字符串
	echo strrev("Hello world!");//反转字符串
	echo '<hr>';
	$str = 'abcdefg';
	echo $shuffled = str_shuffle($str);//随机打乱一个字符串
	echo '<hr>';
	$str ="first=value&arr[]=foo+bar&arr[]=baz";
	parse_str($str);//将字符串解析成 多个变量
	echo $first;
	echo $arr[0];
	echo $arr[1];
	echo '<hr>';
	$url = "http://username:fbsql_password@hostname/path?arg=value#anchor";
	var_dump(parse_url($url));//解析URL，反回期组成部分
	echo '<hr>';
	var_dump( chr(61)).'<br>';//反回相对应与ASCII所指定的单个字符
	var_dump( chr(061)).'<br>';
	var_dump( chr(0x61)).'<br>';
	echo '<hr>';
	echo ord("S").'<br>';//返回字符串string第一个字符的ASCII码值
	echo ord("Shanghai").'<br>';