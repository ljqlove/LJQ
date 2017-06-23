/*
* @Author: Administrator
* @Date:   2017-06-02 21:13:13
* @Last Modified by:   Administrator
* @Last Modified time: 2017-06-02 21:28:30
*/

var http = require('http');
var server = http.createServer(function(req,res){
	// 修改http响应吗
	res.statusCode = 404;
	// 修改相应头
	res.setHeader('haha','hehe');
	// 设置响应体
	// res.write('lololololol');

	// html代码
	res.write(`
		<!DOCTYPE html>
		<html lang="en">
		    <head>
		        <meta charset="utf-8">
		        <title>666</title>
		        <style type="text/css" >
		        div{
		        	width:100px;
		        	height:100px;
		        	background-color:orange; 
		        }
		        </style>
		    </head>
		    <body>
				<div ></div>
		    </body>
		</html>
		`);
	// var obj = {a:100,b:200};
	// var str = JSON.stringify(obj); //将js对象装换为字符串
	// res.write(str);
	res.end();

});
server.listen(8080);
