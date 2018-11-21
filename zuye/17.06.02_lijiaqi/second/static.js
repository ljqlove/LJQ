/*
* @Author: Administrator
* @Date:   2017-06-04 04:36:09
* @Last Modified by:   Administrator
* @Last Modified time: 2017-06-04 04:36:31
*/
var http = require('http');
var urlTool = require('url');
var fs = require('fs');

var	 server = http.createServer(function(req, res){
	//获取请求路径
	var path = req.url;
	//解析url字符串
	var data = urlTool.parse(path);
	//获取路径
	var path = data.pathname;//   /public/test.js  =>   ./public/test.js   /css/test.css    =>  ./public/css/test.css

	var f = './public'+path;

	//检测并读取
	// if(path == '/test.html') {
	// 	//
	// 	fs.readFile('./test.html', function(err, data){
	// 		res.end(data);
	// 	});
	// }else{
	// 	res.end('ok');
	// }

	fs.readFile(f, function(err, data){
		if(err) {
			res.statusCode = 404;
			res.end(`
<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN">
<html><head>
<title>404 Not Found</title>
</head><body>
<h1>Not Found</h1>
<p>The requested URL /asdjfalkdfjas was not found on this server.</p>
<hr>
<address>Nodejs 6.10.3 (Win32) PHP/7.0.4 Server at localhost Port 80</address>
</body></html>
`);
		}

		res.end(data);
	});

});

server.listen(8090);