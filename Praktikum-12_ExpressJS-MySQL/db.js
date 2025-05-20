const mysql = require('mysql2');

const db = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: '',
    database: 'nodejs_sql_pw'
});

db.connect((err) => {
    if(err) throw err;
    console.log("Berhasil tersambung ke database!");
});

module.exports = db;