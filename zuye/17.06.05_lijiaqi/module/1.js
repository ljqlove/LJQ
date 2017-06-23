console.log('1.js');

//相对路径
require('./2.js');

//绝对路径
require('C:/wamp/www/class/lamp179/nodejs-3/module/3.js');

//函数
var res = require('./4.js');

//使用
res.func();
console.log(res.obj);

//引入文件夹  自动去加载目录下的index.js文件
require('./libs');

//使用npm安装包
require('formidable');