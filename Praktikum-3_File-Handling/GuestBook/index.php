<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi PHP GuestBook</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <div class="input-form">
            <form action="" name="form" method="post">
                <label for="nama">Nama : </label>
                <input type="text" name="nama" value="<?php if (isset($_POST['nama'])) echo $_POST['nama']; ?>"><br>
                <br>
                <label for="jenis-kelamin">Jenis Kelamin :</label><br>
                <input type="radio" value="P" name="jenis-kelamin" <?php if (isset($_POST['jenis-kelamin']) && $_POST['jenis-kelamin'] == 'P') echo "checked"; ?>> Wanita<br>
                <input type="radio" value="L" name="jenis-kelamin" <?php if (isset($_POST['jenis-kelamin']) && $_POST['jenis-kelamin'] == 'L') echo "checked"; ?>> Laki-Laki<br>
                <br>
                <label for="email">Email : </label>
                <input type="email" name="email" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>"><br>
                <br>
                <label for="minat">Minat :</label><br>
                <input type="checkbox" name="minat1" <?php if (isset($_POST['minat1'])) echo 'checked="checked"' ?> value="Bonsai"> Bonsai<br>
                <input type="checkbox" name="minat2" <?php if (isset($_POST['minat2'])) echo 'checked="checked"' ?> value="Tanaman Hias"> Tanaman Hias<br>
                <input type="checkbox" name="minat3" <?php if (isset($_POST['minat3'])) echo 'checked="checked"' ?> value="Musik Jazz"> Musik Jazz<br>
                <input type="checkbox" name="minat4" <?php if (isset($_POST['minat4'])) echo 'checked="checked"' ?> value="Pemrograman"> Pemrograman<br>
                <br>
                <label for="komentar">Komentar :</label><br>
                <textarea name="komentar" cols="27" rows="5"><?php if (isset($_POST['komentar'])) echo $_POST['komentar']; ?></textarea><br>
                <br>
                <input type="submit" value="Submit">
                <input type="submit" value="Cancel" name="reset">
            </form>
        </div>

        <!-- Proses Simpan file data -->
        <?php
        if(isset($_POST['form'])){
            $handler = fopen("dataDiri.txt", "r+");

            fputs($handler, $_POST['nama'] . "\n");
            fputs($handler, $_POST['jenis-kelamin'] . "\n");
            fputs($handler, $_POST['email'] . "\n");
            fputs($handler, $_POST['minat1'] . "\n");
            fputs($handler, $_POST['minat2'] . "\n");
            fputs($handler, $_POST['minat3'] . "\n");
            fputs($handler, $_POST['minat4'] . "\n");
            fputs($handler, $_POST['komentar'] . "\n");
            fputs($handler, "\n");

            fclose($handler);
        }
        ?>

        <div class="output-form">
            <p><b>Data Diri Anda</b></p>
        
            <label for="nama">Nama : </label>
            <input type="text" name="nama" value="<?php if (isset($_POST['nama'])) echo $_POST['nama']; ?>" disabled><br>
            <br>
            <label for="jenis-kelamin">Jenis Kelamin :</label><br>
            <input type="radio" value="P" name="jenis-kelamin" <?php if (isset($_POST['jenis-kelamin']) && $_POST['jenis-kelamin'] == 'P') echo "checked"; ?> disabled> Wanita<br>
            <input type="radio" value="L" name="jenis-kelamin" <?php if (isset($_POST['jenis-kelamin']) && $_POST['jenis-kelamin'] == 'L') echo "checked"; ?> disabled> Laki-Laki<br>
            <br>
            <label for="email">Email : </label>
            <input type="email" name="email" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>" disabled><br>
            <br>
            <label for="minat">Minat :</label><br>
            <input type="checkbox" name="minat1" <?php if (isset($_POST['minat1'])) echo 'checked="checked"' ?> value="Bonsai" disabled> Bonsai<br>
            <input type="checkbox" name="minat2" <?php if (isset($_POST['minat2'])) echo 'checked="checked"' ?> value="Tanaman Hias" disabled> Tanaman Hias<br>
            <input type="checkbox" name="minat3" <?php if (isset($_POST['minat3'])) echo 'checked="checked"' ?> value="Musik Jazz" disabled> Musik Jazz<br>
            <input type="checkbox" name="minat4" <?php if (isset($_POST['minat4'])) echo 'checked="checked"' ?> value="Pemrograman" disabled> Pemrograman<br>
            <br>
            <label for="komentar">Komentar :</label><br>
            <textarea name="komentar" cols="27" rows="5" disabled><?php if (isset($_POST['komentar'])) echo $_POST['komentar']; ?></textarea><br>
            <br>
        </div>
    </main>
    <!-- <?php
        $str_file_data = file_get_contents("dataDiri.txt");
        echo $str_file_data;
    ?> -->
</body>
</html>