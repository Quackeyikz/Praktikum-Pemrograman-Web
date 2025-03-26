<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penjumlahan Matriks</title>
</head>
<body>
    <p>Masukkan Matriks :</p>
    <form action="" method="post">
        A[0][0] : 
        <input type="text" name="1a" size="5"><br>
        A[0][1] : 
        <input type="text" name="1b" size="5"><br>
        A[1][0] : 
        <input type="text" name="1c" size="5"><br>
        A[1][1] : 
        <input type="text" name="1d" size="5"><br>

        <br>

        B[0][0] : 
        <input type="text" name="2a" size="5"><br>
        B[0][1] : 
        <input type="text" name="2b" size="5"><br>
        B[1][0] : 
        <input type="text" name="2c" size="5"><br>
        B[1][1] : 
        <input type="text" name="2d" size="5"><br>

        <br>

        <input type="reset" value="Reset" name="reset">
        <input type="submit" value="Hitung" name="submit">
    </form>

    <?php
        if(isset($_POST['submit'])){
            function jumlahMatriks($A, $B){
                $hasil_matriks;

                for ($row=0; $row < 2; $row++) { 
                    for ($col=0; $col < 2; $col++) { 
                        $hasil_matriks[$row][$col] = $A[$row][$col] + $B[$row][$col];
                        echo "{$hasil_matriks[$row][$col]} ";
                    }
                    echo "<br>";
                }
            }

            $matriks_A = array(
                array($_POST['1a'], $_POST['1b']),
                array($_POST['1c'], $_POST['1d'])
            );
            $matriks_B = array(
                array($_POST['2a'], $_POST['2b']),
                array($_POST['2c'], $_POST['2d'])
            );

            echo "<h3>Hasil Penjumlahan:</h3>";
            jumlahMatriks($matriks_A, $matriks_B);
        }
    ?>
</body>
</html>