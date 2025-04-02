<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
	$name = $_POST['nama'];
	$pass = $_POST['pass'];

	$valid = 0;

	if($name == "Erik Triayuda Wijaya" && $pass == "3124600094")
		$valid = 1;
	else if($name == "dougdoug" && $pass == "dougdougmougmoug")
		$valid = 1;
	else if($name == "erik" && $pass == "erikphp")
		$valid = 1;

	if($valid){
		setcookie("nama", $name, time()+3600, "/");
		echo '<meta http-equiv="refresh" content="3;url=dashboard.php">';
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login | Cookies</title>
	<link rel="stylesheet" href="style/index.css">
	<link rel="icon" href="PHP.png">
</head>
<body>
	<main>
	<section class="login-form">
		<img src="PHP.png" width="50px">
		<p>
			<span class="title-text">Selamat Datang!</span><br>
			Akun yang bisa digunakan telah ditetapkan pada sistem.
		</p>

		<?php
		if($_SERVER['REQUEST_METHOD'] == "POST"){
			if($valid)
				echo '<span class="success-msg">Login berhasil, mohon tunggu...</span>';
			else
				echo '<span class="fail-msg">Nama atau password salah!</span>';
		}
		?>

		<form action="" method="post">
			Nama : <br>
			<input name="nama" type="text" placeholder="Masukkan Nama"><br>
			Password :<br>
			<input name="pass" type="password" placeholder="Masukkan Password"><br>

			<input name="submit" type="submit" value="Masuk">
		</form>

		<small>Lupa akun?</small>

		<a href="accounts.php">Akun yang Tersedia</a>

		<small>
			Code by Erik Triayuda Wijaya<br>
			Pemrograman Web | IT PENS
		</small>
	</section>

	<section class="login-bg"></section>
	</main>
</body>
</html>
