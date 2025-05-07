// Import module fs (remember what's that?)
const fs = require('fs');

// Path ke file yang akan dibaca
const filePath = 'contoh.txt';

// Membaca file secara asynchronous
fs.readFile(filePath, 'utf8', (err, data) => {
	if(err) {
		console.error('Terjadi error saat membaca file: ', err);
		return;
	}
	console.log("Isi file: ");
	console.log(data);
});
