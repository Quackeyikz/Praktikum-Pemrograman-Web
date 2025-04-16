<?php
    include("config.php");

    $dbh->exec("TRUNCATE TABLE data_diri");
    $dbh = NULL;

    header('location:dashboard.php');
?>