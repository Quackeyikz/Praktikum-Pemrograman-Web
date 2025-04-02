<?php
	setcookie("nama", "", time()-3600, "/");
	echo '<meta http-equiv="refresh" content="3;url=index.php">';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Logout..</title>
	<link rel="stylesheet" href="style/logout.css">
</head>
<body>
	<main>
		<img src="PHP.png" width="50px">
		<p>
		<span class="title-text">Anda telah LOG OUT</span><br>
		Mengembalikan ke halaman login...
		</p>
	</main>
</body>
</html>
