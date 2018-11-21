//引入http模块儿
var http = require('http');

//调用方法创建服务
var server = http.createServer(function(req, res){
	// req http请求对象
	// res http响应对象

	res.end('hello world  nodejs http server ');

});

//监听端口
server.listen(8080);
console.log('服务器的8080端口正在监听中....');