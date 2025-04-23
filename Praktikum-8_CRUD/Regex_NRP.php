<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regex NRP</title>

    <style>
        .success {
            background-color: lime;
            color: darkgreen;
            border: 1px solid darkgreen;
            padding: 10px 20px;
            display: inline-block;
        }

        .fail {
            background-color: tomato;
            color: darkred;
            border: 1px solid darkred;
            padding: 10px 20px;
            display: inline-block;
        }
    </style>
</head>
<body>
    <h1>REGEX Untuk NRP Anda</h1>
    <small>Pastikan format NRP anda benar sebelum masuk kuliah! :D</small>

    <p>
        <b>Format NRP : </b><br>
        <ol>
            <li>2 karakter pertama adalah huruf mulai dari A sd D (Uppercase).</li>
            <li>4 karakter berikutnya adalah berupa tahun, 2000 ke atas.</li>
            <li>2 karakter berikutnya berupa spesial karakter (!@#$%).</li>
            <li>2 karakter berikutnya adalah panjang nama anda sendiri.</li>
        </ol>
    </p>

    <br>
    <hr>
    <br>

    <form action="" method="post">
        NRP : <input type="text" name="nrp" placeholder="Masukkan NRP"><br><br>

        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </form>

    <br>

    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $regex_nrp = '/^[A-D]{2}2[0-9]{3}[!@#$%]{2}[0-9]{2}$/';
            $panjang_nama_erik = strlen("Erik Triayuda Wijaya");  // 20 Karakter

            if(isset($_POST['nrp']))
                $nrp = $_POST['nrp'];
            else 
                $nrp = "";

            if(preg_match($regex_nrp, $nrp)){
                echo "<button class='success'>NRP Benar</button><br>";
            } else 
                echo "<button class='fail'>NRP SALAH!</button><br>";
        }
    ?>

    <hr>
</body>
</html>
