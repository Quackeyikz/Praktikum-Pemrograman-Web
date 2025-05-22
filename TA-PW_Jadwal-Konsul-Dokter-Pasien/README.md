# CRUD Jadwal Konsultasi Dokter dan Pasien
_Web App - Tugas Akhir Pemrograman Web_

**Deskripsi**
Projek aplikasi ini bertujuan untuk mengaplikasikan *study case* jadwal konsultasi antara dokter dengan pasien. Program menyajikan informasi mengenai penjadwalan yang telah dipesan oleh pasien dan status dari jadwal tersebut, mulai dari tanggal, deskripsi, status, dan lain-lain.

**Flow**
- Mengisi data diri pasien (login).
- Mengisi jadwal konsultasi tanggal, jam, spesialis, keluhan (dokter diassign oleh sistem).
- Jika berhasil, mengarah ke pembayaran/transaksi.
- Jika gagal, kembali ke halaman input konsultasi.

##  Teknologi
- Framework Bootstrap 5
- HTML5
- CSS3
- ~~PHP~~ (WBA)
- ~~NodeJS~~ (WBA)
- ~~ExpressJS~~ (WBA)
- MySQL (PhpMyAdmin)

## Database Tables
- **Jadwal_Konsultasi**
  - *id_konsultasi* INT/SERIAL AUTO_INCREMENT(P)
  - *id_pasien* VARCHAR(50) (F)
  - *id_dokter* VARCHAR(50) (F)
  - *tanggal* DATE
  - *waktu* TIME
  - *keluhan* TEXT/VARCHAR(255)
  - *status* VARCHAR(30)
  
- **Riwayat_Konsultasi**
  - *id_riwayat* INT/SERIAL AUTO_INCREMENT(P)
  - *id_pasien* VARCHAR(50) (F)
  - *id_dokter* VARCHAR(50) (F)
  - *tanggal* DATE
  - *waktu* TIME
  - *keluhan* TEXT/VARCHAR(255)
  - *status* VARCHAR(30)
  - *diagnosis* VARCHAR(255)
  - *tindakan* VARCHAR(255)
  
- **Dokter**
  - *id_dokter* INT/SERIAL AUTO_INCREMENT(P)
  - *nama_dokter* VARCHAR(50)
  - *spesialis* VARCHAR(50)
  - *kontak* VARCHAR(30)
  - *id_praktik* VARCHAR(100) (F)
  
- **Jadwal_Praktik**
  - *id_praktik* INT/SERIAL AUTO_INCREMENT(P)
  - *hari* VARCHAR(10)
  - *waktu_mulai* TIME
  - *waktu_selesai* TIME
  
- **Pasien**
  - *id_pasien* INT/SERIAL AUTO_INCREMENT(P)
  - *nama_pasien* VARCHAR(50)
  - *jenis_kelamin* VARCHAR(10)
  - *tanggal_lahir* DATE
  - *kontak* VARCHAR(30)
  - *alamat* VARCHAR(255)
  
- **Transaksi**
  - *id_transaksi* INT/SERIAL AUTO_INCREMENT(P)
  - *id_konsultasi* INT/SERIAL (F)
  - *nominal* NUMERIC/INT/DECIMAL
  - *metode_bayar* VARCHAR(30)
  - *tanggal_transaksi* DATE
  - *waktu_transaksi* TIME
  - *status* VARCHAR(30)

##### Struktur Direktori Projek
(Will be Annouced)