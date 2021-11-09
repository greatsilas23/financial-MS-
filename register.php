<?php
	include_once("conn.php");
	$regId = 0;
	$regName = "";
	if(isset($_POST['regUser'])){
		$usrId = $_POST['IdNumber'];
		$usrName = $_POST['Name'];
		$passKey = $_POST['passKey'];
		mysqli_query($conn, "INSERT INTO regUsers (id, name, pass) VALUES ('$usrId', '$usrName', '$passKey')");
	}
?>