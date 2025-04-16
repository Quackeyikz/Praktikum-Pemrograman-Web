<?php
    try {
        $dbh = new PDO("mysql:host=localhost;dbname=datadiri_pwpdo", "root", "");
    } 
    catch (PDOException $e) {
        echo "GAGAL! Error message: ";
        echo $e->getMessage();
    }
?>