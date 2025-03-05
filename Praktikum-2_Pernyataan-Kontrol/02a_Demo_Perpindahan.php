<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo Perpindahan</title>

    <link rel="stylesheet" href="style/02.css">
</head>
<body>
    <main>
        <h2>Demo Perpindahan</h2>

        <p>Tampilkan angka dari 0 sampai 10</p>

        <form action="02b_Loop_Proses.php" method="post">
            <label for="opsi_loop"><b>Pilih Opsi :  </b></label>
            <input type="radio" name="opsi_loop" id="1" value="Continue">Continue
            <input type="radio" name="opsi_loop" id="2" value="Break">Break
            <input type="radio" name="opsi_loop" id="3" value="Return">Return
            <input type="radio" name="opsi_loop" id="4" value="Exit">Exit

            <br><br>
            <label for="jumlah_loop"><b>Pada Hitungan Ke: </b></label>
            <input type="number" name="jumlah_loop">

            <input type="submit" value="Submit">
        </form>
    </main>
</body>
</html>