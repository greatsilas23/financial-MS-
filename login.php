<?php
	include_once("conn.php")
	$result = mysqli_query($conn, "SELECT * FROM regUsers");
	$isIn = false;
	if(isset($_POST['usrLogin'])){
		$i = 0;
		while($row = mysqli_fetch_array($result){
			$usrName = $_POST['usrName'];
			$usrPass = $_POST['usrPass'];
			$regName = $row['name'];
			$regpass = $row['pass']
			if($usrName == $regName && $usrPass == $regPass){
				isIn = true;
				die("User Found");
				<script>
					const loginForm = document.getElementById("usrLogin")
					function authenticateUser(){
						loginForm.style.display = "none"
					}
				</script>
			} else {
				isIn = false;
				die("Sorry, User Not Found");
				<script>
					const loginForm = document.getElementById("usrLogin")
					function authenticateUser(){
						loginForm.classList.add("shakeItem")
						loginForm.style.backgroundColor = "red"
						alert("Sorry, wrong username or password")
					}
				</script>
			}
			$i++;
		}
		
	}
?>