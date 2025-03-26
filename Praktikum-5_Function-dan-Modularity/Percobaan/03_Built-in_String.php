<?php
    $str = "Belajar PHP ternyata Menyenangkan!";

    echo strtolower($str) . "\n";      // Ubah string ke lowercase
    echo strtoupper($str) . "\n";      // Ubah string ke uppercase

    echo str_replace("Menyenangkan", "mudah lho", $str); // Mengganti string
?>