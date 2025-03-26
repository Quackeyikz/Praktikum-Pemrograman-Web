<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana - Function & Moodularity</title>
</head>
<body>
    <?php include("02b_Header.php"); ?>
    <br>

    <form action="" method="post">
        Masukkan bilangan ke-1 : 
        <input type="text" name="bil1" size="10"><br>
        Masukkan bilangan ke-2 : 
        <input type="text" name="bil2" size="10"><br><br>
        Masukkan Operator : &emsp; &nbsp;&nbsp;
        <input type="text" name="op" size="10"><br><br>

        <input type="submit" name="submit">
    </form>

    <?php
        function kalkulator($arr, $operator){
            switch ($operator) {
                case '^': 
                    return pow($arr[0], $arr[1]);
                    break;

                case '*': 
                    return $arr[0] * $arr[1];
                    break;

                case '/': 
                    return $arr[0] / $arr[1];

                case '+': 
                    return $arr[0] + $arr[1];

                case '-': 
                    return $arr[0] - $arr[1];
                    break;
                
                default:
                    echo "ERROR: Mohon masukkan operator dengan benar!";
                    break;
            }
        }

        if(isset($_POST['submit'])){
            if(isset($_POST['bil1']))
                $arrBil[0] = $_POST['bil1'];
            
            if(isset($_POST['bil2']))
                $arrBil[1] = $_POST['bil2'];

            if(isset($_POST['op']))
                $op = $_POST['op'];

            $hasil = kalkulator($arrBil, $op);

            echo "<h1>Hasil $arrBil[0] $op $arrBil[1] = $hasil</h1>";
        }
    ?>

    <br>

    <?php include("02c_Footer.php"); ?>
</body>
</html>