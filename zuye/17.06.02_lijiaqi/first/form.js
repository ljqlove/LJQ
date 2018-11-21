var http = require('http');
var fs = require('fs');
var qs = require('querystring');

var server = http.createServer(function(req, res){

	//获取路径
	var pathname = req.url;

	//请求登陆页面
	if(req.method == 'GET' && pathname == '/') {
		fs.readFile('./form.html', function(err, data){
			res.end(data);
		});
	}

	if(req.method == 'POST' && pathname == '/login') {
		//变量用来接收结果
		var data = '';
		req.addListener('data', function(chunk){
			data += chunk;
		});

		req.addListener('end', function(){
			var tmp = qs.parse(data);
			console.log(tmp);
			res.end(data);
		});
	}

	
});

server.listen(8080);