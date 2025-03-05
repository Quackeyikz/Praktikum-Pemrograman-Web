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

        <?php
            $opsi_input = $_POST['opsi_loop'];
            $loop_count = $_POST['jumlah_loop'];

            echo "<p>Dengan melakukan perintah <b>$opsi_input</b> pada hitungan ke-<b>$loop_count</b></p>";

            echo "<p>Bilangan deretnya: </p>";

            echo "<div class='loop-box'>";
            for ($i = 0; $i < 11 ; $i++) { 
                if ($i == $loop_count){
                    // Continue, Break, Return, Exit
                    if ($opsi_input == 'Continue') {
                        continue;
                    } else if ($opsi_input == 'Break') {
                        break;
                    } else if ($opsi_input == 'Return') {
                        return;
                    } else if ($opsi_input == 'Exit') {
                        Exit;
                    }
                }

                echo "$i ";
            }
            echo "</div>";
        ?>
    </main>
</body>
</html>