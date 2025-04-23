<?php
    try {
        $dbh = new PDO('mysql:host=localhost;dbname=perpustakaan_pw', "root", "");
    }
    catch (PDOException $e) {
        echo $e->getMessage();
    }
?>