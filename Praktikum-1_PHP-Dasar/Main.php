<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Latihan</title>
</head>
<body>
<?php
	$a = 2;
	$b = 5;
	
	$nol = 0;
	$satu = 1;
	$hasil = $nol & $satu;
	
	$aku = "aku";
	$dia = "dia";
	$akuDia = $aku . " " . $dia;
	
	echo "Bilangan $a+$b=" . $a + $b;
	echo "<br>Bilangan $nol and $satu =$hasil";
	echo "<br>Bilangan sisa hasil bagi $b dibagi $a adalah " . $b % $a;
	echo "<br>Bilangan $b x $b = " . $b * $b;
	echo "<br>Kata $aku dan $dia digabung menjadi $akuDia";
?>
</body>
</html>