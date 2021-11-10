# financial-MS-
## ABOUT US
Frontend for financial management systems
## DEVELOPING financial-MS-
Create a Database using MySQL for this website
```bash
	sudo mysql -u root -p 
	SHOW DATABASES;
	CREATE DATABASE financialMS;
	USE financialMS;
```
Edit the conn.php file 
```bash 
	cd /home/silas/Downloads/financial-MS--master/financial-MS--master/
	gedit conn.php
```
Add the following changes
```php
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
```
