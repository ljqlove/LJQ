/*
* @Author: Administrator
* @Date:   2017-06-04 04:29:02
* @Last Modified by:   Administrator
* @Last Modified time: 2017-06-04 04:32:54
*/

var http = require('http');
var server = http.createServer(function(req,res){
	res.statussCode = 404;
	res.setHeader('haha','hehe');


	// res.write('iloveyou');
	// res.write(`
	// 	<!DOCTYPE html>
	// 	<html lang="en">
	// 	<head>
	// 		<meta charset="UTF-8">
	// 		<title>nodejs页面</title>
	// 		<style>
	// 			div{width:200px;height:200px;background:orange}
	// 		</style>
	// 	</head>
	// 	<body>
	// 		<div></div>
	// 	</body>
	// 	</html>
	// 	`);

	var obj = {a:100,b:200};
	var str = JSON.stringify(obj);
	res.write(str);
	res.end();
});
server.listen(8080);