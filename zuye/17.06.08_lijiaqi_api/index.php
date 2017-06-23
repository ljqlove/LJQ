<?php
$c = !empty($_GET['c']) ? $_GET['c'] : 'Index';
$a = !empty($_GET['a']) ? $_GET['a'] : 'index';


// 引入类文件
include './Controller/'.$c.'Controller.php';
include './Libs/Model.php';
include './Libs/Page.php';
include './Libs/Auth.php';
include './Libs/Tool.php';

 // 检测请求的合法性
Auth::checkTimestamp();
Auth::checkSign();

// 实例化对象
$className = $c.'Controller';
$obj = new $className;

// 调用方法
$obj -> $a();