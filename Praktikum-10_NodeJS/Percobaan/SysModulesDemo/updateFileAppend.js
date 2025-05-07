const fs = require('fs');
const filePath = 'fileBaruAsync.txt';
const additionalContent = '\nTambahan baru di akhir file +++';

fs.appendFile(filePath, additionalContent, (err) => { 
    if(err) {
        console.error('Gagal menambahkan ke file:', err);
        return;
    }
    console.log('BErhasil menambahkan teks ke file.');
});