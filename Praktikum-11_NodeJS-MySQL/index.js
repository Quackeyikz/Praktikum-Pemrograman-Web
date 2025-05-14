// Note:    Request method diuji menggunakan POSTMAN
//          Post, Get, Put, Delete dapat diimplementasikan dalam request method di POSTMAN
//          Pada file source code, hanya terdapat form, 404, dan gateway '/data-diri',
//          Belum terdapat menu atau halaman yang dapat melakukan RUD.
//          - Erik

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

    if(q.pathname == "/data-diri" && req.method === "GET")
    {
        // Jika tidak dispesifikkan id, maka tampilkan semua
        if(id === undefined){
            let sql = "SELECT * FROM data_diri";

            db.query(sql,(err, result) => {
                if(err) throw err;
                res.end(JSON.stringify(result));
            });
        // Jika id dispesifikkan, tampilkan row dengan id tsb
        } else if (id > 0){
            let sql = "SELECT * FROM data_diri WHERE id=" + id;

            db.query(sql,(err, result) => {
                if(err) throw err;

                var dataDiri = result[0];
                res.end(JSON.stringify(dataDiri));
            });
        }
    } 
    else if (q.pathname == "/data-diri" && req.method === "POST")
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
            let nama = postData.nama || '';
            let nrp = postData.nrp || '';
            let kelas = postData.kelas || '';
            let jenisKelamin = postData.jenisKelamin || '';
            let agama = postData.agama || '';
            let tempatLahir = postData.tempatLahir || '';
            let tanggalLahir = postData.tanggalLahir || '';
            let alamat = postData.alamat || '';
            let sd = postData.sd || '';
            let smp = postData.smp || '';
            let sma = postData.sma || '';
            let email = postData.email || '';
            let homepage = postData.homepage || '';
            let hobi = postData.hobi || '';
            let komputer = postData.komputer || '';
            let sport = postData.sport || '';
            let traveling = postData.traveling || '';
            let writing = postData.writing || '';
            let reading = postData.reading || '';

            let sql = `INSERT INTO data_diri VALUES (NULL, '${nama}', '${nrp}', '${kelas}', '${jenisKelamin}', '${agama}', '${tempatLahir}', '${tanggalLahir}', '${alamat}', '${sd}', '${smp}', '${sma}', '${email}', '${homepage}', '${hobi}', '${komputer}, ${sport}, ${traveling}, ${writing}, ${reading}')`;

            db.query(sql,(err, result) => {
                if(err) throw err;

                if(result.affectedRows == 1)
                    res.end(JSON.stringify({message: 'success'}));
                else
                    res.end(JSON.stringify({message: 'gagal'}));
            });
        });
    } 
    else if (q.pathname == "/data-diri" && req.method === "PUT")
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

            let nama = postData.nama || '';
            let nrp = postData.nrp || '';
            let kelas = postData.kelas || '';
            let jenisKelamin = postData.jenisKelamin || '';
            let agama = postData.agama || '';
            let tempatLahir = postData.tempatLahir || '';
            let tanggalLahir = postData.tanggalLahir || '';
            let alamat = postData.alamat || '';
            let sd = postData.sd || '';
            let smp = postData.smp || '';
            let sma = postData.sma || '';
            let email = postData.email || '';
            let homepage = postData.homepage || '';
            let hobi = postData.hobi || '';
            let komputer = postData.komputer || '';
            let sport = postData.sport || '';
            let traveling = postData.traveling || '';
            let writing = postData.writing || '';
            let reading = postData.reading || '';

            let sql = `UPDATE data_diri SET nama='${nama}', nrp='${nrp}', kelas='${kelas}', jenis_kelamin='${jenisKelamin}', agama='${agama}', tempat_lahir='${tempatLahir}', tanggal_lahir='${tanggalLahir}', alamat='${alamat}', sd='${sd}', smp='${smp}', sma='${sma}', email='${email}', homepage='${homepage}', hobi='${hobi}', interest='${komputer}, ${sport}, ${traveling}, ${writing}, ${reading}'  WHERE id='${id}'`;
            
            db.query(sql,(err, result) => {
                if(err) throw err;

                if(result.affectedRows == 1)
                    res.end(JSON.stringify({message: 'success'}));
                else
                    res.end(JSON.stringify({message: 'gagal'}));
            });
        });
    }
    else if (q.pathname == "/data-diri" && req.method === "DELETE")
    {
        // Delete
        let sql = `DELETE FROM data_diri WHERE id=${id}`;
        
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