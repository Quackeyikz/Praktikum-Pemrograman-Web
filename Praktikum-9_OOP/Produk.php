<?php
    class Produk {
        private $nama;
        private $harga;
        private $kategori;

        public function __construct($nama, $harga, $kategori){
            $this->nama = $nama;
            $this->harga = $harga;
            $this->kategori = $kategori;
        }

        public function getInfoProduk(){
            echo "<div class='item'>";
            echo "<p class='nama-item'>{$this->nama}</p>";
            echo "<div><span class='harga'>Rp{$this->harga}</span>";
            echo "<span class='kategori'>{$this->kategori}</span></div>";
            echo "</div>";
        }
    }
?>