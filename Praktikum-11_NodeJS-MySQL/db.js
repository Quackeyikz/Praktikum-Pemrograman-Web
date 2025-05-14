var mysql = require('mysql');

var db = mysql.createConnection ({
    host: "localhost",
    user: "root",
    password: "",
    database: "nodejs_sql_pw"
});

db.connect(function(err) {
    if(err) throw err;
    console.log("Terhubung dengan `nodejs_sql_pw`!");
});

module.exports = db;