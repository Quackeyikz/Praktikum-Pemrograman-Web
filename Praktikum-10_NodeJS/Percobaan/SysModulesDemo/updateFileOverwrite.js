const fs = require('fs');
const filePath = 'fireBaruAsync.txt';
const newContent = 'Ini isi baru untuk replace lama';

fs.writeFile(filePath, newContent, (err) => {
	if(err) {
		console.error('Gagal mengupdate file:', err);
		return;
	}
	console.log('File berhasil diupdate dengan isi baru.');
});
