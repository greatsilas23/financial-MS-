<?php 
	include_once("conn.php");
?>
<!DOCTYPE html>
    
<html>
	<head>   
		<meta name="author" content="greatsilas23_JJFelix">
		<meta name="charset" content="utf-8">
		<meta name="viewport" content="width-device-width initial-scale=1.0">
		<title>financial-MS-</title>
		<link rel="stylesheet" href="styles.css">
	</head>
	<body>
		<div class="mainWrapper">           
			<div class="welcome">          
				<h2>Welcome to EasySolutions</h2>       
				<h3>Your able Financial Manager</h3>   
			</div>     
			<div class="navbar">
				<!-- <a onclick="showLogin()">Login</a> -->
				<a href="#createAccount">Create Account</a>
				<a href="#loans">Loan Services</a>
				<a href="#otherservices">Other Services</a>
			</div>
			<div class="loginPopup">
				<form id="usrLogin" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
					<h2>Account Log In</h2>
					<label for="loginName">Username: </label>
					<input type="text" id="loginName" name="usrName" placeholder="Example: player456"></br>
					<label for="usrPass">Password: </label>
					<input type="password" id="usrPass" name="usrPass" plaholder="******"><br>
					<input type="submit" class="colorGreen" name="usrLogin" value="Login">
				</form>
				<?php include_once("login.php"); ?>
			</div>            
			<div class="row">
				<div class="leftcolumn">    
					<div class="createForm" id="createAccount">     
						<h2>Account Creation:</h2>    
						<form autocomplete="off" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
							<label for="Name">Name:</label>      
							<input type="text" id="createName" name="Name"><br>    
							<hr>    
							<label for="IdNumber">Id Number:</label>    
							<input type="text" id="createIdNumber" name="IdNumber"><br>    
							<label for="usrPin">Pin :</label>
							<input type="password" id="createPassKey" name="passKey" placeholder="******"><br>
							<label for="usrConfirm">Confirm Pin: </label>
							<input type="password" id="confirmPassKey" placeholder="******"><br>	
							<hr>     
							<input type="submit" class="colorGreen" name="regUser" value="Sign up">
						</form>
						<?php include_once("register.php"); ?>
					</div>               
					<div class="createForm" id="createAccount">
						<p>Deposit to account:</p>
						<form autocomplete="off" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">   
							<label for="depositIdNumber">Id Number:</label>   
							<input type="text" id="depositIdNumber" name="depIdNumber" placeholder="Example: 4000044"><br>   
							<hr>   
							<label for="depositAmount">Deposit Amount</label>  
							<input type="number" name="depositAmount" id="depositAmount" placeholder="Example: Ksh. 4000"><br>  
							<hr>  
							<input type="submit" class="colorGreen" name="usrDeposit" value="Deposit">
						</form>
						<?php include_once("transact.php"); ?>
					</div>       
					<div class="createForm" id="createAccount">  
						<p>Withdraw from account:</p>
						<form autocomplete="off" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">    
							<label for="withdrawIdNumber">Id Number:</label>    
							<input type="text" id="withdrawIdNumber" name="withdrawIdNumber" placeholder="Example: 4000044"><br>   
							<hr>   
							<label for="withdrawAmount">Withdraw Amount</label>   
							<input type="number" name="withdrawAmount" id="withdrawAmount" placeholder="Example: Ksh. 2000"><br>   
							<hr>   
							<input type="button" name="usrWithdraw" value="Withdraw">
						</form>
						<?php include_once("transact.php"); ?>
					</div>
				</div>
				<div class="rightcolumn" id="otherservices">
					<div class="queryForm">
						<p>Query the Database:</p>
						<form autocomplete="off" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
							<label for="queryUserId">User ID</label>
							<input type="number" id="queryUserId" name="queryUserId" placeholder="Example: 4000044">
							<input type="submit" class="colorGreen" name="queryService" value="SEARCH">
						</form>
						<?php include_once("find.php"); ?>
					</div>
					<div class="createForm" id="loans" style="margin-bottom: 5mm;">
						<p>Loan Services</p>
						<form autocomplete="off" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
							<hr>
							<label for="IdNumber">Enter Acc/Number:</label>
							<input type="text" name="IdNumber" id="IdNumber">
							<hr>
							<p></p>
							<label for="checkEligibility">Check loan eligibility:</label>
							<input type="button" value="Check Eligibility" onclick="" >
							<hr> 
							<label for="checkLimit">Check loan limit: </label> 
							<input type="button" value="Check loan limit" onclick=""> 
							<hr>  
							<label for="loanAmount">Loan Amount:</label>  
							<input type="number" name="loanAmount" id="loanAmount">  
							<hr>  
							<label for="takeLoan">Take loan: </label>  
							<input type="submit" class="colorGreen" name="takeLoan" value="APPLY">
						</form>
						<?php include_once("loan.php"); ?>
					</div>
					<div class="createForm" id="repay_loans" style="margin-bottom: 5mm;">
						<form autocomplete="off" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"> 
							<hr>    
							<label for="checkLoanbalance">Check loan balance: </label>    
							<input type="button" value="Check loan balance" onclick="">    
							<hr>      
							<label for="repayAmount">Repay Amount:</label>     
							<input type="number" name="repayAmount" id="repayAmount">      
							<hr>      
							<input type="submit" class="colorGreen" value="CONFIRM" >     
							<hr> 
						</form>
						<?php include_once("transact.php"); ?>
					</div>
				</div>    	
			</div> 
		</div>	
	</body>
</html>