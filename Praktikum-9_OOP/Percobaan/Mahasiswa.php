<?php
    class Mahasiswa {
        public $nama;
        public $nim;
        public $prodi;

        public function __construct($nama, $nim, $prodi){
            $this->nama = $nama;
            $this->nim = $nim;
            $this->prodi = $prodi;
        }

        public function getProfil(){
            echo "Nama : " . $this->nama . "<br>";
            echo "- NIM  :" . $this->nim . "<br>";
            echo "- Prodi:" . $this->prodi . "<br>";
        }
    }
?>