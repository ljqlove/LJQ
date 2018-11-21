function func() {
	console.log('4.js');
}

var obj = {
	a:100,
	b:200
}

//输出
module.exports.func = func;
module.exports.obj = obj