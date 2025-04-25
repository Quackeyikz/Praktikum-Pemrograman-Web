<?php
    class Buah {
        public $nama ;
        public $warna;

        function __construct($nama, $warna){
            $this->nama = $nama;
            $this->warna = $warna;
        }

        function __destruct(){
            echo "Nama Buah adalah $this->nama\n";
            echo "Warna Buah adalah $this->warna\n";
        }

        // Only available for Buah and it's childs
        protected function intro(){
            echo "INTROOOO\n";
        }
        
        final public function outro(){
            echo "OUTROOO\n";
        }
    }

    class Mobil {
        public $nama;
        public $warna;

        function __construct($nama, $warna){
            $this->nama = $nama;
            $this->warna = $warna;
        }

        // This still displayed before Buah class despite it's defined after it
        function __destruct(){
            echo "Nama Mobil adalah $this->nama\n";
            echo "Warna Mobil adalah $this->warna\n";
        }
    }

    class Berry extends Buah {
        public function beri(){
            echo "Am I a berry?";
            $this->intro();
        }
    }

    $apel = new Buah("Apel Jawa", "Hijau");
    $toyota = new Mobil("GH21x", "Hitam");

    echo "<table>";
        echo "<tr>";
            echo "<td>";
                echo "Hai1";
                // echo $apel->get_nama();
            echo "</td>";
            echo "<td>";
                echo "Hai2";
                // echo $apel->get_warna();
            echo "</td>";
        echo "</tr>";
    echo "</table>";

    $strawberry = new Berry("Strawberry", "Merah");

    $strawberry->beri();
    // This will throw an error cuz intro() is only available for access INSIDE the class itself
    // $strawberry->intro();
?>