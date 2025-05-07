const fs = require('fs');
const filePath = 'fileBaruAsync.txt';

fs.unlink(filePath, (err) => {
    if(err){
        console.error('Gagal menghapus file:', err);
        return;
    }
    console.log('File berhasil dihapus:', filePath);
})