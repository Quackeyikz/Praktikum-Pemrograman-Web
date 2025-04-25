<?php
    require_once('Mahasiswa.php');

    class Kampus {
        private $namaKampus;
        private $listMahasiswa = [];

        public function __construct($namaKampus){
            $this->namaKampus = $namaKampus;
        }

        public function tambahMahasiswa(Mahasiswa $mhs){
            $this->listMahasiswa[] = $mhs;
        }

        public function tampilkanMahasiswa(){
            echo "Daftar Mahasiswa {$this->namaKampus} <br><br>";

            $no = 1;

            foreach ($this->listMahasiswa as $mhsIndv) {
                echo "{$no}. ";
                echo $mhsIndv->getProfil() . "<br>";
                $no++;
            }
        }
    }
?>