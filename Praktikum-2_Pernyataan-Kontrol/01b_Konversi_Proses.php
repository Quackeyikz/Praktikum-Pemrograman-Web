<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Predikat</title>

    <link rel="stylesheet" href="style/01.css">
</head>
<body>
    <main>
        <form action="01b_Konversi_Proses.php" method="post">
            <fieldset>
                <legend>Pemrograman Web</legend>

                <h2>Konversi Predikat</h2>

                <div class="form-ui-container">
                    <div class="form-labels">
                        <span>Nama</span>
                        <span>NRP</span>
                        <span>Nilai Angka</span>
                        <span>Nilai Huruf</span>
                        <span>Predikat</span>
                    </div>
                    <div class="form-inputs">
                        <?php
                            $nilai_angka = $_POST['nilai'];
                            
                            if ($nilai_angka > 100) {
                                $huruf = 'Tidak Mungkin';
                                $predikat = 'Tidak Mungkin';
                            } else if ($nilai_angka >= 81 && $nilai_angka <= 100) {
                                $huruf = 'A';
                                $predikat = 'Sempurna';
                            } else if ($nilai_angka >= 71 && $nilai_angka <= 80) {
                                $huruf = 'AB';
                                $predikat = 'Sangat Baik';
                            } else if ($nilai_angka >= 66 && $nilai_angka <= 70) {
                                $huruf = 'B';
                                $predikat = 'Baik';
                            } else if ($nilai_angka >= 61 && $nilai_angka <= 65) {
                                $huruf = 'BC';
                                $predikat = 'Lebih Dari Cukup';
                            } else if ($nilai_angka >= 56 && $nilai_angka <= 60) {
                                $huruf = 'C';
                                $predikat = 'Cukup';
                            } else if ($nilai_angka >= 41 && $nilai_angka <= 55) {
                                $huruf = 'D';
                                $predikat = 'Tidak Memuaskan';
                            } else if ($nilai_angka >= 0 && $nilai_angka <= 40) {
                                $huruf = 'E';
                                $predikat = 'Sangat Tidak Memuaskan';
                            }
                        ?>

                        <span><?php echo $_POST['nama'] ?></span>
                        <span><?php echo $_POST['nrp'] ?></span>
                        <span><?php echo $_POST['nilai'] ?></span>
                        <span><?php echo $huruf ?></span>
                        <span><?php echo $predikat ?></span>

                        <div class="form-actions">
                            <button formaction="01a_Konversi_Predikat.php">Kembali</button>
                        </div>
                    </div>
                </div>

                <p><small>Erik Triayuda Wijaya<br>Semester 2 | 2025</small></p>
            </fieldset>
        </form>
    </main>
</body>
</html>