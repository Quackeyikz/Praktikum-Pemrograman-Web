const fs = require('fs');
const filePath = 'fileBaruSync.txt';

try {
    fs.unlinkSync(filePath);
    console.log('File berhasil dihapus:', filePath);
} catch (err) {
    console.error('Gagal menghapus file: ', err);
}