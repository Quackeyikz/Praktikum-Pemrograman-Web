<?php
	if(isset($_COOKIE['uname']))
		echo "Welcome" . $_COOKIE['uname'] . "!\nCookie: WORKING\n";
	else
		echo "You're not logged in!\nCookie: INACTIVE\n";
?>
