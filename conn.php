<?php
	$usr = "root";
	$server = "localhost";
	$db = "financialMS";
	$pass = "secret";
	$conn = mysqli_connect($server, $usr, $pass, $db);
	if(!$conn){
		echo '<div class="hideThis">'.'<p>'.'Connection Failed'.'</p>'.'</div>';
	}
	else {
		echo '<div class="hideThis">'.'<p>'.'Connecteda Successfuly'.'</p>'.'</div>';
	}
?>