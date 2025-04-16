<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Diri | PHP Data Object</title>

    <link rel="stylesheet" href="style/index.css">
</head>
<body>
    <?php include("config.php"); ?>

    <form action="" method="POST">
        <div class="form-title">Form Data Diri</div>
        <div>
            <label>Nama</label>
            <input type="text" name="nama" placeholder="Masukkan Nama"><br>
            
            <label>NRP</label>
            <input type="text" name="nrp" placeholder="Masukkan NRP"><br>

            <label>Kelas</label>
            <input type="text" name="kelas" placeholder="Masukkan Kelas"><br>

            <label>Jenis Kelamin</label>
            <input type="radio" name="jenis-kelamin" value="Pria" checked>Pria
            <input type="radio" name="jenis-kelamin" value="Wanita">Wanita<br>

            <label>Agama</label>
            <select name="agama">
                <option value="Islam">Islam</option>
                <option value="Katholik">Katolik</option>
                <option value="Kristen">Kristen</option>
                <option value="Buddha">Buddha</option>
                <option value="Hindu">Hindu</option>
                <option value="Konghuchu">Konghucu</option>
            </select>
            <br>

            <label>Tempat/Tanggal Lahir</label><br>
            <input type="text" name="tempat-lahir" placeholder="Masukkan tempat lahir">
            <input type="date" name="tanggal-lahir"><br>

            <label>Alamat</label>
            <textarea name="alamat" placeholder="Masukkan alamat anda"></textarea><br>
        </div>

        <div>
            <label>SD</label>
            <input type="text" name="sd" placeholder="Masukkan riwayat SD"><br>

            <label>SMP</label>
            <input type="text" name="smp" placeholder="Masukkan riwayat SMP"><br>

            <label>SMA</label>
            <input type="text" name="sma" placeholder="Masukkan riwayat SMA"><br>
            
            <label>Email</label>
            <input type="email" name="email" placeholder="contohemail@myemail.com"><br>
            
            <label>Homepage</label>
            <input type="text" name="homepage" placeholder="Masukkan url homepage"><br>
            
            <label>Hobby</label>
            <textarea name="hobi" placeholder="Masukkan hobi anda (opsional)"></textarea><br>
            
            <label>Interest</label><br>
            <input type="checkbox" name="komputer" value="Komputer">Komputer
            <input type="checkbox" name="sport" value="Sport">Sport
            <input type="checkbox" name="traveling" value="Traveling">Traveling
            <input type="checkbox" name="writing" value="Writing">Writing
            <input type="checkbox" name="reading" value="Reading">Reading
        </div>

        <div>
            <input type="submit" value="Submit">
            <input type="reset" value="Reset">
        </div>
    </form>

    <br>

    <a href="dashboard.php" class="page-link">Dashboard</a>

    <div><small>Code by Erik Triayuda Wijaya | Pemrograman Web | IT PENS<br>I've been inspired to create phpmyadmin's look.</small></div>

    <?php 
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            // Fail-safe variabel kosong apabila user tidak menginputkan suatu form
            $nama = ""; 
            $nrp = ""; 
            $kelas = ""; 
            $jenisKelamin = ""; 
            $agama = ""; 
            $tempatLahir = ""; 
            $tanggalLahir = ""; 
            $alamat = ""; 
            $sd = ""; 
            $smp = ""; 
            $sma = ""; 
            $email = ""; 
            $homepage = ""; 
            $hobi = ""; 
            $komputer_interest = ""; 
            $sport_interest = ""; 
            $traveling_interest = ""; 
            $writing_interest = ""; 
            $reading_interest = "";

            if(isset($_POST['nama']))
                $nama = $_POST['nama'];

            if(isset($_POST['nrp']))
                $nrp = $_POST['nrp'];

            if(isset($_POST['kelas']))
                $kelas = $_POST['kelas'];

            if(isset($_POST['jenis-kelamin']))
                $jenisKelamin = $_POST['jenis-kelamin'];

            if(isset($_POST['agama']))
                $agama = $_POST['agama'];

            if(isset($_POST['tempat-lahir']))
                $tempatLahir = $_POST['tempat-lahir'];

            if(isset($_POST['tanggal-lahir']))
                $tanggalLahir = $_POST['tanggal-lahir'];

            if(isset($_POST['alamat']))
                $alamat = $_POST['alamat'];

            if(isset($_POST['sd']))
                $sd = $_POST['sd'];

            if(isset($_POST['smp']))
                $smp = $_POST['smp'];

            if(isset($_POST['sma']))
                $sma = $_POST['sma'];

            if(isset($_POST['email']))
                $email = $_POST['email'];

            if(isset($_POST['homepage']))
                $homepage = $_POST['homepage'];

            if(isset($_POST['hobi']))
                $hobi = $_POST['hobi'];

            if(isset($_POST['komputer']))
                $komputer_interest = $_POST['komputer'];

            if(isset($_POST['sport']))
                $sport_interest = $_POST['sport'];

            if(isset($_POST['traveling']))
                $traveling_interest = $_POST['traveling'];

            if(isset($_POST['writing']))
                $writing_interest = $_POST['writing'];

            if(isset($_POST['reading']))
                $reading_interest = $_POST['reading'];

            $interest = implode(", ", array_filter([$komputer_interest, $sport_interest, $traveling_interest, $writing_interest, $reading_interest]));

            $dbh->exec("INSERT INTO data_diri VALUES (NULL, '$nama', '$nrp', '$kelas', '$jenisKelamin', '$agama', '$tempatLahir', '$tanggalLahir', '$alamat', '$sd', '$smp', '$sma', '$email', '$homepage', '$hobi', '$interest')");
        }
    ?>
</body>
</html>