<?php
	$usr = "";
	$server = "localhost";
	$db = "";
	$pass = "";
	$conn = mysqli_connect($usr, $server, $db, $pass);
	if(!$conn){
		die("Connection Failed");
?>
<div>
	<p class="sqlConn">Failed To Connect to MySQL</p>	
</div>
<?php
	}
?>