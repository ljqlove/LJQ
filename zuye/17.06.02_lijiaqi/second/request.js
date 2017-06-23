/*
* @Author: Administrator
* @Date:   2017-06-04 04:18:14
* @Last Modified by:   Administrator
* @Last Modified time: 2017-06-04 04:27:45
*/

var http = require('http');
var urlTool =require('url');

var server = http.createServer(function(req,res){
	var method = req.method;
	var path = req.url;
	var version = req.httpVersion;
	var headers = req.headers;
	var host = headers.host;
	var userAgent =headers['user-agent'];
	var data = urlTool.parse(path,true);
	console.log(data);
	var id = data.query.id;
	console.log(id);
	res.end('end');
});
server.listen(8080);