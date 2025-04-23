<?php
    include('config.php');

    if(isset($_GET['id'])){
        $id_target = $_GET['id'];

        $dbh->exec("DELETE FROM buku WHERE id='$id_target'");
    }

    header('Location: index.php');
?>