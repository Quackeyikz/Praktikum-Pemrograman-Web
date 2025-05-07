<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link rel="stylesheet" href="style/dashboard.css">
</head>
<body>
    <?php
        /* 
            LIST INPUT NAME
            ---------------
            nama
            nrp
            kelas
            jenis-kelamin
            agama
            tempat-lahir
            tanggal-lahir
            alamat
            sd
            smp
            sma
            email
            homepage
            hobi
            komputer
            sport
            traveling
            writing
            reading
        */
        $handler = fopen("data.txt", "r");

        $komputer = $sport = $traveling = $writing = $reading = NULL;
        $tgl = array(2025, 3, 11);

        while(!feof($handler))
        {
            $nama = trim(fgets($handler, 255));
            $nrp = trim(fgets($handler, 255));
            $kelas = trim(fgets($handler, 255));
            $jenis_kelamin = trim(fgets($handler, 255));
            $agama = trim(fgets($handler, 255));
            $tempat_lahir = trim(fgets($handler, 255));
            $tanggal_lahir = trim(fgets($handler, 255));
            $alamat = trim(fgets($handler, 255));
            $sd = trim(fgets($handler, 255));
            $smp = trim(fgets($handler, 255));
            $sma = trim(fgets($handler, 255));
            $email = trim(fgets($handler, 255));
            $homepage = trim(fgets($handler, 255));
            $hobi = trim(fgets($handler, 255));
            
            for ($i=0; $i < 4; $i++) { 
                $minat = trim(fgets($handler, 255));

                if ($minat == "Komputer") $komputer = $minat;
                else if ($minat == "Sport") $sport = $minat;
                else if ($minat == "Traveling") $traveling = $minat;
                else if ($minat == "Writing") $writing = $minat;
                else if ($minat == "Reading") $reading = $minat;
            }
        }

        $tgl = explode('-', $tanggal_lahir);
        // Mengubah string ke angka (dari "01" -> 1)
        $bulan_angka = number_format($tgl[1]);

        $bulan_nama = array(
            1 => "Januari",
            "Februari",
            "Maret",
            "April",
            "Mei",
            "Juni",
            "Juli",
            "Agustus",
            "September",
            "Oktober",
            "November",
            "Desember"
        );
    ?>

    <main>
        <div class="profile-picture"></div>
        <a class="edit-button" href="index.php">Edit</a>
        <div class="name-group">
            <h1><?php echo $nama; ?></h1>
            <p>
                <?php 
                    if ($jenis_kelamin == "Pria") echo "&#9794; $jenis_kelamin &middot; <span>He/Him</span>";
                    else if ($jenis_kelamin == "Wanita") echo "&#9792; $jenis_kelamin &middot; <span>He/Him</span>";
                ?>
            </p>
        </div>

        <div class="display-container">
            <div class="light">
                <small>Agama</small><br>
                <span><?php echo $agama; ?></span>
            </div>
            <div class="light">
                <small>Tempat / Tanggal Lahir</small><br>
                <span><?php echo "$tempat_lahir, $tgl[2] $bulan_nama[$bulan_angka] $tgl[0]"; ?></span>
            </div>
            <div class="light">
                <small>Alamat</small><br>
                <span><?php echo $alamat; ?></span>
            </div>
            <div class="light">
                <small>Sekolah Dasar (SD)</small><br>
                <span><?php echo $sd; ?></span>
            </div>
            <div class="light">
                <small>Sekolah Menengah Pertama (SMP)</small><br>
                <span><?php echo $smp; ?></span>
            </div>
            <div class="light">
                <small>Sekolah Menengah Atas (SMA)</small><br>
                <span><?php echo $sma; ?></span>
            </div>
            <div class="light">
                <small>Email</small><br>
                <span><?php echo $email; ?></span>
            </div>
            <div class="themed">
                <small>Homepage</small><br>
                <span><?php echo $homepage; ?></span>
            </div>
            <div class="themed">
                <small>Hobi</small><br>
                <span><?php echo $hobi; ?></span>
            </div>
            <div class="themed">
                <small>Interest</small><br>
                <span>
                    <ul>
                    <?php 
                        if ($komputer) echo "<li>$komputer</li>";
                        if ($sport) echo "<li>$sport</li>";
                        if ($traveling) echo "<li>$traveling</li>";
                        if ($writing) echo "<li>$writing</li>";
                        if ($reading) echo "<li>$reading</li>";
                    ?>
                    </ul>
                </span>
            </div>
        </div>
    </main>
</body>
</html>