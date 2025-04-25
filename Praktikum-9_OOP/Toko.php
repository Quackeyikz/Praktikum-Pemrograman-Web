<?php
    require_once 'Produk.php';

    class Toko {
        private $namaToko;
        private $listProduk = [];

        public function __construct($namaToko){
            $this->namaToko = $namaToko;
        }

        public function tambahProduk(Produk $item){
            $this->listProduk[] = $item;
        }

        public function getNamaToko(){
            echo "<h1>Daftar Produk - {$this->namaToko}</h1><br>";
        }

        public function tampilkanProduk(){
            foreach ($this->listProduk as $item) {
                echo $item->getInfoProduk() . "<br>";
            }
        }
    }
?>