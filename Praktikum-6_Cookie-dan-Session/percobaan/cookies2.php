<!DOCTYPE html>
<html>
<head>
	<title>Cookies are set! | Percobaan 2</title>
</head>
<body>
	<?php
		if(isset($_COOKIE["uname"]))
			echo "Welcome " . $_COOKIE["uname"] . "!<br>";
		else
			echo "You are not logged in!";
	?>

	<small>Hello lad</small>
</body>
</html>
