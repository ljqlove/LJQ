var http = require('http');
var fs = require('fs');
var formidable = require('formidable');
var mysql = require('mysql');

var server = http.createServer(function(req, res){
	// 获取路径
	var url = req.url;

	if (req.method.toLowerCase() == 'get' && url == '/form') {
		fs.readFile('./form.html',function(err,data){
			if (err) {
				res.statusCode = 404;
				res.end('404 not found');
				return;
			}
			res.statusCode = 200;
			res.end(data);
			return;
		});
	}

	if (req.method.toLowerCase() == 'post' && url == '/form') {
		var form = new formidable.IncomingForm();
		// 文件的上传目录
		form.uploadDir = "./uploads";
		// 保有文件后缀
		form.keepExtensions = true;
		// filelds存储的是 普通的字段信息
		// filelds 存储的是 文件类型的字段信息
		form.parse(req,function(err,fields,files){
			res.writeHead(200,{'content-type':'text/plain'});
			res.write('received upload:\n\n');
			console.log(fields);
			console.log(files);
			console.log(fields.nickname);
			res.end();
		});
	}

	if (req.url == '/mysql') {
		var connection = mysql.createConnection({
			host : 'localhost',
			user : 'root',
			password : 'root',
			database : 'asd'
		});
		connection.connect();
		connection.query('select * from songs where id = 811',function(err,result,fields){
			if (err) {
				throw err;
			}
			console.log('结果:',result);
		});
		connection.end();
		res.end('ok');
	}
});
server.listen(8080);