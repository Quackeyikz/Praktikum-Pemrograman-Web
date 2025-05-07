var http = require('http');
var url = require('url');
var fs = require('fs');
var qs = require('querystring');

var fileTarget = 'data_simpan.json';

http.createServer(function (req, res) {
    var q = url.parse(req.url, true);

    if (q.pathname == "/submit" && req.method === "POST") {
        let body = '';

        req.on('data', partData => {
            body += partData.toString();
        });

        req.on('end', () => {
            var formData = qs.parse(body);

            fs.writeFile(fileTarget, JSON.stringify(formData, null, 2), (err) => {
                if (err) {
                    console.log("Gagal menyimpan data");
                } else {
                    console.log("Data tersimpan");
                }
            });
        });

        res.writeHead(302, { 'Location': '/dashboard' });
        res.end();
    }
    else if (q.pathname == "/dashboard"){
        fs.readFile(fileTarget, (err, data) => {
            const jsonData = JSON.parse(data);

            let displayData = '';
            for(const [key, value] of Object.entries(jsonData)){
                displayData += `${key}: ${value}\n`;
            }

            res.writeHead(200, {'Content-Type': 'text/plain'});
            res.end(displayData);
        });
    }
    else if (q.pathname == "/") {
        fs.readFile('index.html', function (err, data) {
            res.writeHead(200, { 'Content-Type': 'text/html' });
            res.write(data);
            return res.end();
        });
    }
    else {
        res.writeHead(404, {'content-type' : 'text/html'});
        res.end("<h1>404 NOT FOUND</h1>");
    }
}).listen(8080);
