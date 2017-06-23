/*
* @Author: Administrator
* @Date:   2017-06-04 04:33:13
* @Last Modified by:   Administrator
* @Last Modified time: 2017-06-04 04:35:30
*/

var http = require('http');

var server =http.createServer(function(req,res){

	res.end('agsdyuahdbakjdsiuw');
});
server.listen(8080);
console.log('服务器8080端口正在监听...');