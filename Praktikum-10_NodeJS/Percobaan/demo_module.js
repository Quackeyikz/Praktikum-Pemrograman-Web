var http = require('http');
var dt = require('./myFirstModule');

http.createServer(function(req, res){
	res.writeHead(200, {'Content-Type': 'text/html'});
	res.write("Tanggal dan waktu saat ini adalah: " + dt.myDateTime());
	res.end();
}).listen(8080);
