var http = require('http');
var fs = require('fs');
var formidable = require('formidable');
var mysql = require('mysql');

var server = http.createServer(function(req,res){
	var url = req.url;
	// GET
	if(req.method.toLowerCase() == 'get' && url == '/form'){
		fs.readFile('./form.html',function(err,data){
			if(err) {
				res.statusCode = 404;
				res.end('404 not found');
				return;
			}
			res.statusCode = 200;
			res.end(data);
			return;
		});
	}

	// POST
	if (req.method.toLowerCase() == 'post' && url ='/form') {
		var form = new formidable.IncomingForm();
 		form.uploadDir = "./uploads";
 		form.keepExtensions = true;
		form.parse(req, function(err, fields, files) {
		    res.writeHead(200, {'content-type': 'text/plain'});
		    res.write('received upload:\n\n');
		    console.log(fields);
		    console.log(files);
		    console.log(fields.nickname);
		    res.end();
		});
	}

	if(req.url == '/mysql') {
		var connection = mysql.createConnection({
		    host : 'localhost',
		    user : 'root',
		    password : 'root',
		    database : 'asd'
		});
		connection.connect();
		connection.query('select * from songs where id = 811', function (error, results, fields) {
		    if (error) throw error;
		    console.log('结果: ', results);
		});
		connection.end();
		res.end('ok');
	}
});