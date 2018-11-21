var express = require('express');
var urlTool = requrie('url');

//创建应用对象
var app = express();

app.get('/css/:id.css', function(req, res){
	res.end('test');
});


//静态资源处理
app.use(express.static('public'));

//路由
app.get('/',function(req,res){
	res.end('express');
});

app.get('/admin', function(req, res){
	res.end('后台管理!!!');
});

//请求规则
app.get('/request', function(req, res){
	//获取url路机构
	var url = req.url;
	var data = urlTool.parse(url, true).query;

	//请求的版本号
	var version = req.httpVersion;

	//请求头
	var header = req.headers;

	res.end(version);
});

//帖子
app.get('/tiezi/:id', function(req, res){
	res.end('我是一个贴子哦!!!!');
});
//商品的详情
app.get('/:id.html', function(req, res){
	//获取url中占位的参数
	var id = req.params.id;// params 参数  
	console.log(id);

	res.end('商品详情页哦!!!!');
});

//响应
app.get('/res', function(req, res){
	//设置响应码
	res.statusCode = 404;
	//设置相应头
	res.setHeader('aaaa','bbbbb');
	//设置响应体
	res.send(`<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8" /><title>Document</title></head><body></body></html>`);//send发送

	//json
	res.json({name:'lamp179',num:65,age:18});

	//跳转到百度
	res.redirect('http://www.baidu.com');

	//下载资源
	res.download('./package.json');
	res.download('./public/images/2.jpg');

	//手动设置cookie
	res.setHeader('Set-Cookie','age=18; path=/');

	//cookie设置   httpOnly 只允许http请求使用的cookie    setcookie('name','value',time()+3600, '/');
	res.cookie('username', 'lamp179', { maxAge: 900000, httpOnly: true })
	res.end();

});

//监听端口
app.listen(80);