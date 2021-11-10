<?php
	include_once("conn.php");
	$isIn = false;
	if(isset($_POST['usrName'], $_POST['usrPass'])){
		$i = 0;
		while($row = mysqli_fetch_array($result)){
			$usrName = $_POST['usrName'];
			$usrPass = $_POST['usrPass'];
			$regName = mysqli_master_query($conn, "SELECT * FROM regUsers WHERE name = '".$usrName."'");
			$regPass = mysqli_master_query($conn, "SELECT * FROM regUsers WHERE pass = '".$usrPass."'");
			if($usrName = $regName && $usrPass = $regPass){
				$isIn = true;
?>
				<script>
					const loginForm = document.getElementById("usrLogin")
					function authenticateUser(){
						loginForm.style.display = "none"
					}
				</script>
<?php
			} else {
				$isIn = false;
?>
				<script>
					const loginForm = document.getElementById("usrLogin")
					function authenticateUser(){
						loginForm.style.backgroundColor = "red"
						alert("Sorry, wrong username or password")
					}
				</script>
<?php
			}
			$i++;
		}
		
	}
?>