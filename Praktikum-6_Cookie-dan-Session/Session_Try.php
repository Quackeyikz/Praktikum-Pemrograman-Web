<?php
    $_SESSION['name'] = $name;
    $_SESSION['age'] = $age;

    // Reading Session
    $name = $_SESSION['name'];
    $age = $_SESSION['age'];

    // SESSION PROPAGATION
    // 1. Cookie Propagation
    // 2. URL

    session_start();

    echo '<a href=""><?=SID></a>';

    // Superglobal & cookie dihilangkan
    session_destroy();

    /* 
        Session Expired
        - 1440s default
        - Cookies hilang apabila browser close.
        - URL propagated, se-

        Long-term Session
        - 'Remember Me!'
        - Bisa berhari-hari, berbulan-bulan
    */

    /*
        HI-JACKING!!

        Session id seseorang dapat dimanfaatkan oleh orang lain
        apabila session id dibagikan saat masih dalam kondisi
        login / belum logout. Hijacker akan dianggap sebagai
        user aslinya apabila login menggunakan session id.

        Instead of URL Propagation...
        Propagation with Cookies - SAFER (Not fool-proof)
    */
?>
