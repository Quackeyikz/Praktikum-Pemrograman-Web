// VERSI PRODUCT
// UNUPDATED, WORKS FOR PRODUCTS TABLE

var http = require('http');
var url = require('url');
var qs = require('querystring');
var db = require('./db');
var port = 8080;

var fs = require('fs');

http.createServer(function (req, res) {
    var q = url.parse(req.url, true);
    var id = q.query.id;

    res.setHeader('Content-Type', 'application/json');

    if(q.pathname == "/products" && req.method === "GET")
    {
        // Jika tidak dispesifikkan id, maka tampilkan semua
        if(id === undefined){
            let sql = "SELECT * FROM products";

            db.query(sql,(err, result) => {
                if(err) throw err;
                res.end(JSON.stringify(result));
            });
        // Jika id dispesifikkan, tampilkan row dengan id tsb
        } else if (id > 0){
            let sql = "SELECT * FROM products WHERE id=" + id;

            db.query(sql,(err, result) => {
                if(err) throw err;

                var product = result[0];
                res.end(JSON.stringify(product));
            });
        }
    } 
    else if (q.pathname == "/products" && req.method === "POST")
    {
        // Create
        var body = '';

        req.on('data', function(data){
            body += data;

            if(body.length > 1e6)
                    req.connection.destroy();
        });

        req.on('end', function() {
            var postData = qs.parse(body);

            // Buat variabel dengan nilai spesifik dari form
            let name = postData.name;
            let price = postData.price;

            let sql = `INSERT INTO products (name, price) VALUES ('${name}', '${price}')`;

            db.query(sql,(err, result) => {
                if(err) throw err;

                if(result.affectedRows == 1)
                    res.end(JSON.stringify({message: 'success'}));
                else
                    res.end(JSON.stringify({message: 'gagal'}));
            });
        });
    } 
    else if (q.pathname == "/products" && req.method === "PUT")
    {
        // Update
        var body = '';

        req.on('data', function(data) {
            body += data;

            if(body.length > 1e6)
                req.connection.destroy();
        });

        req.on('end', function() {
            var postData = qs.parse(body);

            let name = postData.name;
            let price = postData.price;

            let sql = `UPDATE products SET name='${name}', price='${price}' WHERE id=${id}`;
            
            db.query(sql,(err, result) => {
                if(err) throw err;

                if(result.affectedRows == 1)
                    res.end(JSON.stringify({message: 'success'}));
                else
                    res.end(JSON.stringify({message: 'gagal'}));
            });
        });
    }
    else if (q.pathname == "/products" && req.method === "DELETE")
    {
        // Delete
        let sql = `DELETE FROM products WHERE id=${id}`;
        
        db.query(sql,(err, result) => {
            if(err) throw err;

            if(result.affectedRows == 1)
                res.end(JSON.stringify({message: 'success'}));
            else
                res.end(JSON.stringify({message: 'gagal'}));
        })
    }
    else if (q.pathname == "/")
    {
        fs.readFile('public/index.html', function(err, data){
            res.writeHead(200, {'Content-Type': 'text/html'});
            res.write(data);
            return res.end();
        });
    }
    else
    {
        fs.readFile('public/404.html', function(err, data){
            res.writeHead(200, {'Content-Type': 'text/html'});
            res.write(data);
            return res.end();
        });
    }
}).listen(port);

console.log("Server berhasil running pada http://localhost:" + port);