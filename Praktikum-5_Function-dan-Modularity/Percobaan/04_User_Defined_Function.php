<?php
    function luasPersegiPanjang ($panjang, $lebar){
        return $panjang * $lebar;
    }

    $bil_1 = 5;
    $bil_2 = 3;
    $luas = luasPersegiPanjang($bil_1, $bil_2);

    echo "Luas persegi panjang dengan panjang $bil_1 dan lebar $bil_2 = $luas\n";
?>