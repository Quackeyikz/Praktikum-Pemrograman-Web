// HELLO NODE JS!!
// Finally a proper lesson of NodeJS
// - Erik

var http = require('http');
http
.createServer(function (req, res){
	res.writeHead(200, {'Content-Type': 'text/html'});
	res.end('Hello World! from Erik');
})

.listen(8080);
