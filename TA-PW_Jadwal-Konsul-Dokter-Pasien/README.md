# CRUD Jadwal Konsultasi Dokter dan Pasien
_Web App - Tugas Akhir Pemrograman Web_

**Deskripsi**
Projek aplikasi ini bertujuan untuk mengaplikasikan *study case* jadwal konsultasi antara dokter dengan pasien. Program menyajikan informasi mengenai penjadwalan yang telah dipesan oleh pasien dan status dari jadwal tersebut, mulai dari tanggal, deskripsi, status, dan lain-lain.

##  Teknologi
- Framework Bootstrap 5
- HTML5
- CSS3
- PHP (WBA)
- NodeJS (WBA)
- ExpressJS (WBA)
- MySQL (PhpMyAdmin)

## Database Tables
- **Jadwal Konsultasi**
  - *id_konsultasi* INT/SERIAL AUTO_INCREMENT(P)
  - *id_pasien* VARCHAR(50) (F)
  - *id_dokter* VARCHAR(50) (F)
  - *tanggal* DATE
  - *waktu* TIME
  - *keluhan* TEXT/VARCHAR(255)
  
- **Riwayat Konsultasi**
  - *id_riwayat* INT/SERIAL AUTO_INCREMENT(P)
  - *id_pasien* VARCHAR(50) (F)
  - *id_dokter* VARCHAR(50) (F)
  - *tanggal* DATE
  - *waktu* TIME
  - *keluhan* TEXT/VARCHAR(255)
  
- **Dokter**
  - *id_dokter* INT/SERIAL AUTO_INCREMENT(P)
  - *nama_dokter* VARCHAR(50)
  - *spesialis* VARCHAR(50)
  - *kontak* VARCHAR(30)
  - *jadwal_praktik* TIME?
  
- **Pasien**
  - *id_pasien* INT/SERIAL AUTO_INCREMENT(P)
  - *nama_pasien* VARCHAR(50)
  - *kontak* VARCHAR(30)
  
- **Transaksi**
  - *id_transaksi* INT/SERIAL AUTO_INCREMENT(P)
  - *id_konsultasi*
  - *biaya* NUMERIC/INT/DECIMAL
  - *tanggal_transaksi* DATE
  - *waktu_transaksi* TIME

- **Detail Transaksi**

##### Struktur Direktori Projek
(Will be Annouced)