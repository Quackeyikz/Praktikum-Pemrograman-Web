const fs = require('fs');
const filePath = 'fileBaruAsync.txt';
const fileContent = 'Halo, ini file baru lagi';

fs.writeFile(filePath, fileContent, (err) => {
	if(err) {
		console.error('Gagal membuat file:', err);
		return;
	}
	console.log('File berhasil dibuat:', filePath);
});
