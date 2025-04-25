<?php
    require_once 'Kampus.php';

    $mhs1 = new Mahasiswa("Andi Wijaya", "231050001", "D4 Teknik Informatika");
    $mhs2 = new Mahasiswa("Rina Kurnia", "231050002", "D4 Teknik Komputer");
    $mhs3 = new Mahasiswa("Satria Putra", "231050003", "D3 Teknik Elektronika");

    $kampus = new Kampus("Politeknik Elektronika Negeri Surabaya");

    $kampus->tambahMahasiswa($mhs1);
    $kampus->tambahMahasiswa($mhs2);
    $kampus->tambahMahasiswa($mhs3);

    $kampus->tampilkanMahasiswa();
?>