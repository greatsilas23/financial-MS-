# financial-MS-
## ABOUT US
Frontend for financial management systems
## DEVELOPING financial-MS-
Create a Database using MySQL for this fullstack-website
```bash
	sudo mysql -u root -p 
	SHOW DATABASES;
	CREATE DATABASE myDb;
	USE myDb;
```
Edit the conn.php file so that you use the details of the new database
```bash 
	cd /home/silas/Downloads/financial-MS--master/financial-MS--master/
	gedit conn.php
```
Edit the set the following in the conn.php file
```php
	<?php
	$usr = "myUsername";
	$server = "localhost";
	$db = "myDb";
	$pass = "myPass";
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
```
where myUsername, myDb and myPass are your system's username for root user, the name of the database we created and the password to SQL
