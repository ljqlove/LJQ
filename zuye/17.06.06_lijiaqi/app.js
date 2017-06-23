// 引入模块
var express = require('express');
var formidable = require('formidable');
var cookieParser = require('cookie-parser');
var mysql = require('mysql');
var urlTool = require('url');
var session =require('express-session');


// 连接数据
var connection = mysql.createConnection({
	host : 'localhost',
	user : 'root',
	password : 'root',
	database : 'asd'
});
// // 接连数据库
connection.connect();

// // 创建应用对象
var app = express();

// // 静态资源符
// app.use(express.static('node_modules'));

// // 使用cookie解析服务
// app.use(cookieParser())
// // session功能
// app.use(session({
// 	secret : 'randomstring',
// 	cookie : {
// 		maxAge : 360000,
// 		httpOnly:true
// 	}
// }));

// // 设置模板引擎
// app.set('view engin','ejs');
// // 设置模板的默认存放目录
// app.set('views','./views');
// // 定义路由规则
// app.get('/login',function(req,res){
// 	res.render('login');
// });
// app.post('/login',function(req,res){
// 	var form =  new formidable.IncomingForm();
// 	form.parse(req,function(err,fields,files){
// 		var username = fields.username;
// 		var password = fields.password;
// 		connection.connect();

// 		connection.query('select * from user where name = "'+username+'"',function(err,results,fields){
// 			if (err) {
// 				throw err;
// 				// 如果结果集为空,证明用户输入错误
// 			}
// 			if (results.length <= 0) {
// 				res.end('对不起不存在该用户');
// 				return;
// 			}else{
// 				// 判断密码是否正确
// 				if (results[0].password == password) {
// 					// 写入cookie
// 					res.cookie('username',username,{maxAge:360000,httpOnly:true});
// 					// 通知
// 					res.send(`恭喜您登陆成功<script>setTimeout(function(){
// 						localhost.herf = "/admin";
// 					})</script>`)
// 				}
// 			}
// 		});
// 		connection.end();
// 	});
// });

// // 后台首页
// app.get('/admin',function(req,res){
// 	if (!req.cookies.userName) {
// 		res.redirect('/login');
// 		return;
// 	}
// 	// 显示后台首页
// 	res.render('admin');
// });

// // 用户列表页面

// app.get('/user',function(req,res){
// 	// 查询
// 	connection.query('select * from user order by id desc',function(err,result,fields){
// 		if (err) {
// 			throw err;
// 		}
// 			// 如果结果集为空 证明用户名输入错误
// 			res.render('user',{users:results});
// 	});
// });
// // 删除操作
// app.get('/user/delete/:id.html',function(req,res){
// 	// 获取id参数
// 	var id =req.params.id;
// 	var sql = "delete from user where id = ? ";
// 	var inserts = [id];
// 	sql =mysql.format(sqsl,inserts);
// 	connection.query(sql,function(err,results,fields){
// 		if (err) {
// 			throw err;
// 		}
// 		if (result.affectedRows > 0 ) {
// 			res.send('删除成功 <a herf = "/user">点击跳转</a>');
// 		}else{
// 			res.send('sorry 删除失败!!!请重试!!!');
// 		}
// 	});
// });

// // 入库
// app.post('/user/insert',function(req,res){
// 	var form = new formidable.IncomingForm();
// 	// 查询
// 	form.parse(req,function(err,fields,files){
// 		var username = fields.name;
// 		var email = fields.email;
// 		var password = fields.password;
// 		var sql = "insert into user (name,email,password) values(?,?,?)";
// 		var inserts = [username,email,password];
// 		sql = mysql.format(sql,inserts);
// 		connection.query(sql,function(error,results,fields){
// 			if (error) {
// 				throw error;
// 			}
// 			if (results.affectedRows > 0) {
// 				res.send('恭喜您入库成功<a href="/user">点击跳转</a>')

// 			}else{
// 				res.send('sorry 入库失败!!!请重试');

// 			}
// 		});
// 	});
// });
// // ajax更新
// app.get('/ajax/update',function(req,res){
// 	var url = req.url;
// 	// 解析url
// 	var params = urlTool.parse(url,true).query;
// 	// 更新
// 	var sql = "update user set name ='"+params.username+"'where id"+params.id;
// 	connection.query(sql,function(error,results,fields){
// 		if (error) {
// 			throw error;
// 		}
// 		if (results.affectedRows > 0) {
// 			res.json({msg:'ok',status:1});
// 		}else{
// 			res.json({msg:'fail',status:0});
// 		}
// 	});
// });

// // session的写入
// app.get('/session-set',function(req,res){
// 	req.session.username = 'abc';
// 	res.send('ok');
// });
// app.get('/session-get',function(req,res){
// 	res.send(req.session.username);
// });
// 监听端口
app.listen(8080);