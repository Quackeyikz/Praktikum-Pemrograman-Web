const fs = require('fs');
const filePath = 'fileBaruSync.txt';
const fileContent = 'FILE BARU LAGI TAPI SYNC';

try {
	fs.writeFileSync(filePath, fileContent);
	console.log('FIle berhasil dibuat: ', filePath);
} catch (err) {
	console.error('Gagal membuat file:', err);
}
