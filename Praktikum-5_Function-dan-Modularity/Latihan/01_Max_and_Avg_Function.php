<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maks and Average Function</title>
</head>
<body>
    <form action="" method="post">
        Bilangan 1 : 
        <input type="text" name="bil1"><br>
        Bilangan 2 : 
        <input type="text" name="bil2"><br>
        Bilangan 3 : 
        <input type="text" name="bil3"><br>

        <input type="submit" name="submit">
    </form>

    <?php
        function findMax($arr) {
            $maks = $arr[0];

            for ($i=1; $i < count($arr); $i++) { 
                if ($maks < $arr[$i])
                    $maks = $arr[$i];
            }

            return $maks;
        }

        function findAvg($arr) {
            $jmlBil = count($arr);
            $totalBil = 0;

            for ($i = 0; $i < $jmlBil; $i++) { 
                $totalBil += $arr[$i];
            }

            return $totalBil / $jmlBil;
        }

        if(isset($_POST['submit'])){
            if(isset($_POST['bil1']))
                $arrBil[0] = $_POST['bil1'];

            if(isset($_POST['bil2']))
                $arrBil[1] = $_POST['bil2'];

            if(isset($_POST['bil3']))
                $arrBil[2] = $_POST['bil3'];

            $hasilMaks = findMax($arrBil);
            $hasilAvg = findAvg($arrBil);

            echo "<p style='font-size: 2rem;'>";
            for ($i=0; $i < count($arrBil); $i++) { 
                echo "$arrBil[$i] ";
            }
            echo "</p>";

            echo "<h2>Bilangan Terbesar = $hasilMaks <br>";
            echo "Rata-Rata = $hasilAvg</h2>";
        }
    ?>
</body>
</html>