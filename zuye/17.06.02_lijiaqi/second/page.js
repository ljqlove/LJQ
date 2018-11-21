/*
* @Author: Administrator
* @Date:   2017-06-04 04:06:32
* @Last Modified by:   Administrator
* @Last Modified time: 2017-06-04 04:17:31
*/

var http = require('http');
var fs = require('fs');
var urlTool = require('url');

var server = http.createServer(function(req, res){

	//获取url
	var url = req.url;
	var pathname = urlTool.parse(url).pathname;

	//判断路径
	if(pathname == '/') {
		fs.readFile('./page.html', function(err,data){
			res.end(data);
		});
	}else{
		//拼接路径
		var p = './public'+pathname;
		fs.readFile(p, function(err, data){
			if(err) {
				res.statusCode = 404;
				res.end('<h1>404 not found</h1>');
			}else{
				res.end(data);
			}
		});

	}


	

});

server.listen(8080);