// Note:    Request method diuji menggunakan POSTMAN
//          Post, Get, Put, Delete dapat diimplementasikan dalam request method di POSTMAN
//          Pada file source code, hanya terdapat form, dan gateway '/data-diri',
//          Belum terdapat menu atau halaman yang dapat melakukan RUD.
//          - Erik, mirip seperti praktikum sebelumnya

const express = require('express');
const db = require('./db');
const fs = require('fs');
const path = require('path');

const app = express();

app.use(express.json());
app.use(express.urlencoded({ extended: true }));

app.get('/', (_, res) => {
    res.sendFile(path.join(__dirname, 'public', 'index.html'));
});

app.post('/data-diri', (req, res) => {
    const { 
        nama, nrp, kelas, jenisKelamin, agama, tempatLahir, tanggalLahir, alamat, 
        sd, smp, sma, email, homepage, hobi, komputer, sport, traveling, writing, reading 
    } = req.body;

    const interest = [komputer, sport, traveling, writing, reading].filter(Boolean).join(', ');

    const sql = `INSERT INTO data_diri (nama, nrp, kelas, jenis_kelamin, agama, tempat_lahir, tanggal_lahir, alamat, SD, SMP, SMA, email, homepage, hobi, interest) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)`;

    db.query(sql, [nama, nrp, kelas, jenisKelamin, agama, tempatLahir, tanggalLahir, alamat, sd, smp, sma, email, homepage, hobi, interest], (err, result) => {
        if (err) return res.status(500).send(err);
        res.status(201).json({ id: result.insertId, nama, nrp, kelas, jenisKelamin, agama, tempatLahir, tanggalLahir, alamat, sd, smp, sma, email, homepage, hobi, interest });
    });
});

app.get('/data-diri', (_, res) => {
    db.query('SELECT * FROM data_diri', (err, results) => {
        if (err) return res.status(500).send(err);
        res.json(results);
    });
});

app.get('/data-diri/:id', (req, res) => {
    db.query('SELECT * FROM data_diri WHERE id=?', [req.params.id], (err, result) => {
        if (err) return res.status(500).send(err);
        if (result.length === 0) return res.status(404).send('Data diri tidak ditemukan');
        res.json(result[0]);
    });
});

app.put('/data-diri/:id', (req, res) => {
    const { 
        nama, nrp, kelas, jenisKelamin, agama, tempatLahir, tanggalLahir, alamat, 
        sd, smp, sma, email, homepage, hobi, komputer, sport, traveling, writing, reading 
    } = req.body;

    const interest = [komputer, sport, traveling, writing, reading].filter(Boolean).join(', ');

    const sql = `UPDATE data_diri SET nama=?, nrp=?, kelas=?, jenis_kelamin=?, agama=?, tempat_lahir=?, tanggal_lahir=?, alamat=?, SD=?, SMP=?, SMA=?, email=?, homepage=?, hobi=?, interest=? WHERE id=?`;

    db.query(sql, [nama, nrp, kelas, jenisKelamin, agama, tempatLahir, tanggalLahir, alamat, sd, smp, sma, email, homepage, hobi, interest, req.params.id], (err, result) => {
        if (err) return res.status(500).send(err);
        res.send('Data berhasil diupdate');
    });
});

app.delete('/data-diri/:id', (req, res) => {
    db.query('DELETE FROM data_diri WHERE id=?', [req.params.id], (err) => {
        if (err) return res.status(500).send(err);
        res.send('Data berhasil dihapus');
    });
});

app.listen(3000, () => {
    console.log('Server berjalan di http://localhost:3000');
});
