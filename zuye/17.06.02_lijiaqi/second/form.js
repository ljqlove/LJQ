/*
* @Author: Administrator
* @Date:   2017-06-04 02:28:45
* @Last Modified by:   Administrator
* @Last Modified time: 2017-06-04 03:01:17
*/

var http = require('http');
var fs = require('fs');
var qs = require('querystring');

var server = http.createServer(function(req,res){
	var pathname = req.url;
	if (req.method == 'GET' && pathname == '/') {
		fs.readFile('./form.html',function(err,data){
			res.end(data);
		});
	}
	if (req.method =='POST' && pathname == '/login') {
		var data = '';
		req.addListener('data',function(chunk){
			data += chunk;
		});
		req.addListener('end',function(){
			var tmp = qs.parse(data);
			console.log(tmp);
			res.end(data);
		});
	}
});
server.listen(8080);