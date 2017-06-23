// var app =require('express')();
var express = require('express');
var app = express();
app.use(express.static('node_modules'));
var server = require('http').Server(app);
var io = require('socket.io')(server);

server.listen(80);

// 路由规则
app.get('/',function(req,res){
	res.sendfile(__dirname + '/index.html');
});

// socket操作
io.on('connection',function(socket){
	socket.emit('news',{hello:'world'});
	socket.emit('179','今天高,考祝大家能考出好的成绩!!!');
	socket.emit('new-user',{id:100,nickname:'ljq',profile:'/images/1.jpg',sex:1});


	// 监听帖子平道的信息
	socket.on('tiezi',function(data){
		console.log(data);
	});
});