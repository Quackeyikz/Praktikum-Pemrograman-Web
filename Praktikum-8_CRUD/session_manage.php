<?php
    session_start();

    if(isset($_SESSION["toggle_admin"])){
        echo "Mengakhiri session...";
        session_unset();
        session_destroy();
    } else {
        $_SESSION["toggle_admin"] = "Halo";
        echo "Sekarang session dimulai.";
    }

    header('Location: index.php');
?>