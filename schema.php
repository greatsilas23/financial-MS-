<?php
	include_once("conn.php")
	mysqli_query($conn, "CREATE TABLE regUsers (id int(5) NOT NULL, name varchar(10), pass varchar(10), PRIMARY_KEY(id))");
	mysqli_query($conn, "CREATE TABLE usrTransactions (id int(5) NOT NULL, usrId int(5), type varchar(10), balance int(5), PRIMARY_KEY(id))");
	mysqli_query($conn, "CREATE TABLE transTypes (id int(5) NOT NULL, type varchar(10), PRIMARY_KEY(id))");
?>