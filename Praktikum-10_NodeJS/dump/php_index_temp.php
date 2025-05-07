<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil - File Handling</title>

    <link rel="stylesheet" href="style/index-style.css">
</head>
<body>
    <main>
        <div class="profile">
            <div>
                <h2>Edit Profil</h2>
                <div class="profile-picture"></div>
                <p><small class="theme-text"><b>Foto Profil</b></small></p>
            </div>

            <?php
                if (isset($_POST['submit']))
                echo "<div class='success-alert'>Data berhasil disimpan.</div>";
            ?>

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

        <form action="" method="post" name="form">
            <div class="d-flex form-row">
                <div class="d-flex-column">
                    <label>Nama <span>*</span></label>
                    <input type="text" name="nama" value="<?php if(isset($_POST['nama'])) echo $_POST['nama']; ?>">
                    
                    <div class="d-flex">
                        <div class="d-flex-column">
                            <label>NRP</label>
                            <input type="text" name="nrp" value="<?php if(isset($_POST['nrp'])) echo $_POST['nrp']; ?>">
                        </div>
                        <div class="d-flex-column">
                            <label>Kelas</label>
                            <input type="text" name="kelas" value="<?php if(isset($_POST['kelas'])) echo $_POST['kelas']; ?>">
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="d-flex-column">
                            <label>Jenis Kelamin <span>*</span></label>
                            <div>
                                <input type="radio" name="jenis-kelamin" value="Pria" <?php if(isset($_POST['jenis-kelamin']) && $_POST['jenis-kelamin'] == "Pria") echo "checked"; ?>>Pria
                                <input type="radio" name="jenis-kelamin" value="Wanita"<?php if(isset($_POST['jenis-kelamin']) && $_POST['jenis-kelamin'] == "Wanita") echo "checked"; ?>>Wanita
                            </div>
                        </div>
                        <div class="d-flex-column">
                            <label>Agama <span>*</span></label>
                            <select name="agama">
                                <option value="Islam" <?php if(isset($_POST['agama']) && $_POST['agama'] == "Islam") echo "selected"; ?>>Islam</option>
                                <option value="Kristen" <?php if(isset($_POST['agama']) && $_POST['agama'] == "Kristen") echo "selected"; ?>>Kristen</option>
                                <option value="Hindu" <?php if(isset($_POST['agama']) && $_POST['agama'] == "Hindu") echo "selected"; ?>>Hindu</option>
                                <option value="Katolik" <?php if(isset($_POST['agama']) && $_POST['agama'] == "Katolik") echo "selected"; ?>>Katolik</option>
                                <option value="Buddha" <?php if(isset($_POST['agama']) && $_POST['agama'] == "Buddha") echo "selected"; ?>>Buddha</option>
                                <option value="Konghucu" <?php if(isset($_POST['agama']) && $_POST['agama'] == "Konghucu") echo "selected"; ?>>Konghucu</option>
                            </select>
                        </div>
                    </div>

                    <label>Tempat / Tanggal Lahir <span>*</span></label>
                    <div class="d-flex">
                        <input type="text" name="tempat-lahir" value="<?php if(isset($_POST['tempat-lahir'])) echo $_POST['tempat-lahir']; ?>">
                        <input type="date" name="tanggal-lahir" value="<?php if(isset($_POST['tanggal-lahir'])) echo $_POST['tanggal-lahir']; ?>">
                    </div>

                    <label>Alamat <span>*</span></label>
                    <textarea name="alamat" cols="30" rows="3"><?php if(isset($_POST['alamat'])) echo $_POST['alamat']; ?></textarea>

                    <label>Riwayat Pendidikan <span>*</span></label>
                    <div class="d-flex label-nogrow">
                        <label>SD </label>
                        <input type="text" name="sd" value="<?php if(isset($_POST['sd'])) echo $_POST['sd']; ?>">
                    </div>
                    <div class="d-flex label-nogrow">
                        <label>SMP </label>
                        <input type="text" name="smp" value="<?php if(isset($_POST['smp'])) echo $_POST['smp']; ?>">
                    </div>
                    <div class="d-flex label-nogrow">
                        <label>SMA </label>
                        <input type="text" name="sma" value="<?php if(isset($_POST['sma'])) echo $_POST['sma']; ?>">
                    </div>
                </div>


                <div class="d-flex-column">
                    <label>Email <span>*</span></label>
                    <input type="email" name="email" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>">

                    <label>Homepage</label>
                    <input type="url" name="homepage" value="<?php if(isset($_POST['homepage'])) echo $_POST['homepage']; ?>">
                    
                    <label>Hobi </label>
                    <textarea name="hobi" cols="30" rows="3"><?php if(isset($_POST['hobi'])) echo $_POST['hobi']; ?></textarea>
                    
                    <label>Interest </label>
                    <div class="check"><input type="checkbox" name="komputer" value="Komputer" <?php if(isset($_POST['komputer'])) echo "checked"; ?>> Komputer</div>
                    <div class="check"><input type="checkbox" name="sport" value="Sport" <?php if(isset($_POST['sport'])) echo "checked"; ?>> Sport</div>
                    <div class="check"><input type="checkbox" name="traveling" value="Traveling" <?php if(isset($_POST['traveling'])) echo "checked"; ?>> Traveling</div>
                    <div class="check"><input type="checkbox" name="writing" value="Writing" <?php if(isset($_POST['writing'])) echo "checked"; ?>> Writing</div>
                    <div class="check"><input type="checkbox" name="reading" value="Reading" <?php if(isset($_POST['reading'])) echo "checked"; ?>> Reading</div>

                    <div class="submit-group">
                        <input type="submit" name="submit" value="Simpan">
                        <input type="reset" name="Reset">
                    </div>
                </div>
            </div>

            <?php
                if(isset($_POST['submit']))
                {
                    $handler = fopen("data.txt", "w");

                    if (isset($_POST['nama'])) fputs($handler, $_POST['nama'] . "\n");
                    if (isset($_POST['nrp'])) fputs($handler, $_POST['nrp'] . "\n");
                    if (isset($_POST['kelas'])) fputs($handler, $_POST['kelas'] . "\n");
                    if (isset($_POST['jenis-kelamin'])) fputs($handler, $_POST['jenis-kelamin'] . "\n");
                    if (isset($_POST['agama'])) fputs($handler, $_POST['agama'] . "\n");
                    if (isset($_POST['tempat-lahir'])) fputs($handler, $_POST['tempat-lahir'] . "\n");
                    if (isset($_POST['tanggal-lahir'])) fputs($handler, $_POST['tanggal-lahir'] . "\n");
                    if (isset($_POST['alamat'])) fputs($handler, $_POST['alamat'] . "\n");
                    if (isset($_POST['sd'])) fputs($handler, $_POST['sd'] . "\n");
                    if (isset($_POST['smp'])) fputs($handler, $_POST['smp'] . "\n");
                    if (isset($_POST['sma'])) fputs($handler, $_POST['sma'] . "\n");
                    if (isset($_POST['email'])) fputs($handler, $_POST['email'] . "\n");
                    if (isset($_POST['homepage'])) fputs($handler, $_POST['homepage'] . "\n");
                    if (isset($_POST['hobi'])) fputs($handler, $_POST['hobi'] . "\n");
                    if (isset($_POST['komputer'])) fputs($handler, $_POST['komputer'] . "\n");
                        else fputs($handler, " ");
                    if (isset($_POST['sport'])) fputs($handler, $_POST['sport'] . "\n");
                        else fputs($handler, " ");
                    if (isset($_POST['traveling'])) fputs($handler, $_POST['traveling'] . "\n");
                        else fputs($handler, " ");
                    if (isset($_POST['writing'])) fputs($handler, $_POST['writing'] . "\n");
                        else fputs($handler, " ");
                    if (isset($_POST['reading'])) fputs($handler, $_POST['reading'] . "\n");
                        else fputs($handler, " ");

                    fclose($handler);
                }
            ?>
        </form>
    </main>

    <div class="back-button">
        <a href="dashboard.php"><  Beranda</a>
    </div>
</body>
</html>