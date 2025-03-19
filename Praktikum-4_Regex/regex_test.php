<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regex Testing Environment | Keren bgt gweh</title>
</head>
<body>
    <form action="" method="post" name="form">
        Nama : <input type="text" name="nama"><br><br>
        NRP  : <input type="text" name="nrp"><br><br>
        Tgl Lahir : <input type="text" name="tgl_lahir"><br><br>

        <input type="submit" value="Sumbit" name="submit">
        <input type="reset" value="Reset">
    </form>

    <br>

    <div>
        <?php
            // Awal kata huruf besar, bisa besar semua, spasi sebelum kata baru
            $regex_nama = '/^([A-Z][a-zA-Z]+)(\s[A-Z][A-Za-z]+)*$/';
            // 031 - 060
            $regex_nrp = '/^21101810(3[1-9]|[4-5][0-9]|60)$/';
            $regex_tgl_lahir = '/^\d{2}-(Jan|Feb|Mar|Apr|Mei|Jun|Jul|Agu|Sep|Okt|Nop|Des)-\d{4}$/';

            if(isset($_POST['submit'])){
                if(isset($_POST['nama'])){
                    $nama = $_POST['nama'];

                    if(preg_match($regex_nama, $nama))
                        echo "&#x2713; Nama Valid <br>";
                    else
                        echo "X Nama TIDAK VALID!<br>";
                }

                if(isset($_POST['nrp'])){
                    $nrp = $_POST['nrp'];

                    if(preg_match($regex_nrp, $nrp))
                        echo "&#x2713; NRP Valid<br>";
                    else
                        echo "X NRP TIDAK VALID!<br>";
                }

                if(isset($_POST['tgl_lahir'])){
                    $tgl_lahir = $_POST['tgl_lahir'];

                    if(preg_match($regex_tgl_lahir, $tgl_lahir))
                        echo "&#x2713; Tanggal Lahir Valid<br>";
                    else
                        echo "X Tanggal Lahir TIDAK VALID!<br>";
                }
            }
        ?>
    </div>
</body>
</html>