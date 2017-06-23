/*
* @Author: Administrator
* @Date:   2017-06-02 20:01:34
* @Last Modified by:   Administrator
* @Last Modified time: 2017-06-02 21:12:49
*/

var http = require('http');
var urlTool = require('url');
var server = http.createServer(function(req,res){
	// 获取当前请求的方式
	var method = req.method;
	console.log(method); //GET
	// 获取请求的路径
	var path = req.url;
	// console.log(path); ///asdad/asda/index.php?a=123&b=123
	// 获取协议的版本
	var version =req.httpVersion;
	// console.log(version); //1.1
	// 获取请求头
	var headers = req.headers;
	// console.log(headers); //{ host: '192.168.179.180:8080',
							 //  'user-agent': 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:51.0) Gecko/20100101 Firefox/51.0',
							 //  accept: 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8',
							 //  'accept-language': 'zh-CN,zh;q=0.8,en-US;q=0.5,en;q=0.3',
							 //  'accept-encoding': 'gzip, deflate',
							 //  connection: 'keep-alive',
							 //  'upgrade-insecure-requests': '1',
							 //  'cache-control': 'max-age=0' }
	var host = headers.host;
	// console.log(host);//192.168.179.180:8080
	var userAgent = headers['user-agent'];
	// console.log(userAgent);//Mozilla/5.0 (Windows NT 6.1; WOW64; rv:51.0) Gecko/20100101 Firefox/51.0


	// 解析url参数
	var data = urlTool.parse(path,true);
	// console.log(data);
	var id =data.query.id;
	// console.log(id);
	res.end('end');

});
server.listen(8080);
console.log('事件赈灾监听');