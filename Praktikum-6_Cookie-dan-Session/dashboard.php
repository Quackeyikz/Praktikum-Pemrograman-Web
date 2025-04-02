<?php
if(!isset($_COOKIE['nama']))
	header("location: index.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
    header("location: logout.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard | Cookies</title>
	<link rel="stylesheet" href="style/dashboard.css">
	<link rel="icon" href="PHP.png">
</head>
<body>
	<main>
        <div class="profile">
            <div>
                <h2>Edit Profil</h2>
                <div class="profile-picture"></div>
                <p><small class="theme-text"><b>Foto Profil</b></small></p>
            </div>
            <div>
                <p>
                    <small>
                        Code and Image is made by<br>
                        Erik Triayuda Wijaya <br>
                        <i>NOT PUBLIC </i><br><br>

                        Pemrograman Web<br>
                        Semester 2<br>
                    </small>
                </p>
            </div>
        </div>

        <form action="logout.php" method="post" name="form">
            <div class="d-flex form-row">
                <div class="d-flex-column">
                    <label>Nama</label>
                    <input type="text" name="nama" value="Erik Triayuda Wijaya" disabled>

                    <div class="d-flex">
                        <div class="d-flex-column">
                            <label>NRP</label>
                            <input type="text" name="nrp" value="3124600094" disabled>
                        </div>
                        <div class="d-flex-column">
                            <label>Kelas</label>
                            <input type="text" name="kelas" value="D4 IT D" disabled>
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="d-flex-column">
                            <label>Jenis Kelamin</label>
                            <div>
                                <input type="radio" name="jenis-kelamin" value="Pria" checked>Pria
                                <input type="radio" name="jenis-kelamin" value="Wanita" disabled>Wanita
                            </div>
                        </div>
                        <div class="d-flex-column">
                            <label>Agama</label>
                            <select name="agama" disabled>
                                <option value="Islam" selected>Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Konghucu">Konghucu</option>
                            </select>
                        </div>
                    </div>

                    <label>Tempat / Tanggal Lahir</label>
                    <div class="d-flex">
                        <input type="text" name="tempat-lahir" value="Tuban" disabled>
                        <input type="text" name="tanggal-lahir" value="2000-01-01" disabled>
                    </div>

                    <label>Alamat</label>
                    <textarea name="alamat" cols="30" rows="3" disabled>Surabaya, Jawa Timur, Indonesia</textarea>

                    <label>Riwayat Pendidikan</label>
                    <div class="d-flex label-nogrow">
                        <label>SD </label>
                        <input type="text" name="sd" value="SDN Parangbatu 2" disabled>
                    </div>
                    <div class="d-flex label-nogrow">
                        <label>SMP </label>
                        <input type="text" name="smp" value="SMPN 2 Parengan" disabled>
                    </div>
                    <div class="d-flex label-nogrow">
                        <label>SMA </label>
                        <input type="text" name="sma" value="SMKN 2 Bojonegoro" disabled>
                    </div>
                </div>


                <div class="d-flex-column">
                    <label>Email</label>
                    <input type="email" name="email" value="eriktriayudawijaya@gmail.com" disabled>

                    <label>Homepage</label>
                    <input type="url" name="homepage" value="https://quackeyikz.github.io/" disabled>
                    
                    <label>Hobi </label>
                    <textarea name="hobi" cols="30" rows="3" disabled>Menggambar</textarea>
                    
                    <label>Interest </label>
                    <div class="check"><input type="checkbox" name="komputer" value="Komputer" checked disabled> Komputer</div>
                    <div class="check"><input type="checkbox" name="sport" value="Sport" disabled> Sport</div>
                    <div class="check"><input type="checkbox" name="traveling" value="Traveling" disabled> Traveling</div>
                    <div class="check"><input type="checkbox" name="writing" value="Writing" checked disabled> Writing</div>
                    <div class="check"><input type="checkbox" name="reading" value="Reading" disabled> Reading</div>

                    <div class="submit-group">
                        <input type="submit" name="submit" value="Log Out &#8594;">
                    </div>
                </div>
            </div>
        </form>
    </main>
</body>
</html>
