const fs = require('fs');
const filePath = 'contoh.txt';

try {
	// Membaca file secara sync
	const data = fs.readFileSync(filePath, 'utf8');
	console.log("Isi file: ");
	console.log(data);
} catch (err) {
	console.error("Terjadi error saaat membaca file: ", err);
}
