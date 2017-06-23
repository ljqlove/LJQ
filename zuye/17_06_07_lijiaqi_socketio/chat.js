var express = require('express');

var app = express();
app.use(express.static('node_modules'));

// 配置模板引擎
app.set('view engine','ejs');
app.set('views','./views');

var server = require('http').Server(app);
var io = require('socket.io')(server);

server.listen(80);

// 路由规则
app.get('/',function (req,res){
	res.render('index');
});

var users = [];
// socket操作
io.on('connection',function(socket){
	socket.on('msg',function(data){
		console.log(data);
		// 将消息大送给所有的连接者
		socket.broadcast.emit('msg'.data);
	});
	socket.on('login',function(data){
		// 保存当前用户的socket信息
		users.push(data.nickname);
		socket.broadcast.emit('login',data);
	});
	// 监听频道
	socket.on('user-list',function(){
		socket.emit('user-list',users);
	})
});
