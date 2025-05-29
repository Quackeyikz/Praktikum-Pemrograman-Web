const express = require('express');
const db = require('./db');
const fs = require('fs');
const path = require('path');

const app = express();
const port = 3000;

app.use(express.json());
app.use(express.urlencoded({ extended: true }));

app.get('/', (req, res) => {
    res.send('Halo! Ini adalah "Yulje - Medical Center" app v0.1 (beta release). Route yang tersedia tidak lebih dari ini, silahkan update aplikasi!');
});

app.listen(port, () => {
    console.log(`Server berhasil berjalan di http://localhost:${port}`);
});