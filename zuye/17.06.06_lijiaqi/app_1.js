var express =require('express');
var formidable = require('formidable');
var cookieParser = require('cookie-parser');
var mysql = require('mysql');
var urlTool =require('url');
var session = require('express-session');

// 连接数据库
var connection = mysql.createConnection({
	host : 'localhost',
	user : 'root',
	password : 'root',
	database : 'asd'
});
connection.connect();
// 创建应用对象
var app = express();
// session功能
app.use(session({
	secret: 'randomstring',
	cookie: {
		maxAge:360000,
		httpOnly:true
	}
}));

// 设置模板引擎
app.set('view engine','ejs');
// 设置模板存放目录
app.set('views','./views');
// 静态资源符
app.use(express.static('node_modules'));
// 定义路由规则
app.get('/login',function(req,res){
	res.render('login');
});
app.post('/login',function(req,res){
	var form = new formidable.IncomingForm();
	form.parse(req,function(err,fields,files){
		var username = fields.username;
		var password = fields.password;
		connection.query('select * from user where name="'+username+'"',function(error,results,fields){
			if (error) {
				throw error;

			}
			if (results.length <= 0) {
				res.end('对不起用户不存在!!!');
				return;
			}else{
				if (results[0].password == password) {
					res.cookie('username',username,{maxAge:3600000,httpOnly:true});
					res.send(`恭喜新登陆成功!!!<script> setTimeout(function(){
						location.href = "/admin";						
					},3000)</script>`);
				}
			}
		});
	});
});
// 后台首页
app.get('/admin',function(req,res){
	// if (!req.cookies.username) {
	// 	res.redirect('/login');
	// 	return;
	// }
	res.render('admin');
});
// 用户列表页面
app.get('/user',function(req,res){
	// 查询
	connection.query('select * from user order by id desc',function(error,results,fields){
		if (error) {
			throw error;
		}
		res.render('user',{users:results});
	});
});
// 添加页面显示
app.get('/user/add',function(req,res){
	res.render('add');
});
app.get('/user/delete/:id.html',function(req,res){
	// 获取id参数
	var id = req.params.id;
	var sql = "delete from user where id = ?";
	var inserts = [id];
	sql = mysql.format(sql,function(error,results,fields){
		if (error) {throw error;}
		if (results.affectedRows > 0) {
			res.send('删除成功<a href="/user">点击跳转</a>')
		}else{
			res.send('sorry 删除失败!!!请重试!!!');
		}
	});
});
app.post('/user/insert', function(req, res){
	var form = new formidable.IncomingForm();

	//查询
	form.parse(req, function(err, fields, files) {
		var username = fields.name;
		var email = fields.email;
		var password = fields.password;
		 
		var sql = "insert into user (name,email,password) values(?,?,?)";
		var inserts = [username,email,password];
		sql = mysql.format(sql, inserts);

		connection.query(sql, function (error, results, fields) {
			if (error) throw error;
			
			if(results.affectedRows > 0) {
				res.send('恭喜你入库成功 <a href="/user">点击跳转</a>');
			}else{
				res.send('sorry 入库失败!!请重试!!!');
			}
			
		});
		 
    });
});
app.get('/ajax/update', function(req, res){
	var url = req.url;
	//解析url
	var params = urlTool.parse(url, true).query;

	//更新
	var sql = "update user set name ='"+params.username+"' where id = "+params.id;

	connection.query(sql, function (error, results, fields) {
		if (error) throw error;
		
		if(results.affectedRows > 0) {
			res.json({msg:'ok',status:1});
		}else{
			res.json({msg:'fail',status:0});
		}
	});
});

//session的写入
app.get('/session-set', function(req, res){
	//写入session
	req.session.username = 'abc';
	res.send('ok');
});

app.get('/session-get', function(req, res){
	//读取session
	res.send(req.session.username);
});
// 监听端口
app.listen(8080);