<?php 
	include_once("conn.php");
	include_once("schema.php");
?>
<!DOCTYPE html>
    
<html>

        
	<head>
            
		<meta name="author" content="greatsilas23_JJFelix">
		<meta name="charset" content="utf-8">
		<meta name="viewport" content="device-width initial-scale=1.0 "
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
                
		<a onclick="showLogin()">Login</a>
                
		<a href="#createAccount">Create Account</a>
                
		<a href="#loans">Loan Services</a>
                
		<a href="#otherservices">Other Services</a>
            
	</div>


	<div class="loginPopup">
		<form name="usrLogin" id="usrLogin" action="login.php" method="$_POST">
			<h2>Account Log In</h2>
			<label for="loginName">Username: </label>
			<input type="text" id="loginName" name="usrName" placeholder="Example: player456"></br>
			<label for="usrPass">Password: </label>
			<input type="password" id="usrPass" name="usrPass" plaholder="******"><br>
			<input type="submit" value="Login">
		</form>
	</div>            
            
	<div class="row">

                
		<div class="leftcolumn">

                    
			<div class="createForm" id="createAccount">
                        
				<h2>Account Creation:</h2>
                        
				<form name="regUser" action="register.php" method="$_POST">
                             
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
                            
					<input type="submit" value="Sign up">
                        
				</form>
                    
			</div>
  	                             
			<div class="createForm" id="createAccount">
                        
				<p>Deposit to account:</p>
                        
				<form name="usrDeposit" action="deposit.php" method="$_POST" onsubmit="showReceipt()">
                            
					<label for="depositIdNumber">Id Number:</label>
                            
					<input type="text" id="depositIdNumber" name="depIdNumber" placeholder="Example: 4000044"><br>
                            
					<hr>
                            
					<label for="depositAmount">Deposit Amount</label>
                            
					<input type="number" name="depositAmount" id="depositAmount" placeholder="Example: Ksh. 4000"><br>
                            
					<hr>
                            
					<input type="submit" value="Deposit">
                        
				</form>
                    
			</div>
                             
			<div class="createForm" id="createAccount">
                        
				<p>Withdraw from account:</p>
                        
				<form name="usrWithdraw" action="withdraw.php" method="$_POST" onsubmit="showReceipt()">
                            
                            
					<label for="withdrawIdNumber">Id Number:</label>
                            
					<input type="text" id="withdrawIdNumber" name="withdrawIdNumber" placeholder="Example: 4000044"><br>
                            
					<hr>
                            
					<label for="withdrawAmount">Withdraw Amount</label>
                            
					<input type="number" name="withdrawAmount" id="withdrawAmount" placeholder="Example: Ksh. 2000"><br>
                            
					<hr>
                            
					<input type="button" value="Withdraw">
                        
				</form>
                    
			</div>

                
		</div>

                
		<div class="rightcolumn" id="otherservices">
                    
			<p style="color: rgb(255, 255, 255);">Query the Database:</p>

                    
			<div class="createForm" ">
                        
				<p>User details</p>
                        
				<form target="_self" method="post">
                            
					<input type="button" value="Display user details" onclick="">
                        
				</form>
                    
			</div>
                    
				<p></p>

                    
			<div class="createForm" id="loans" style="margin-bottom: 5mm;">
                        
				<p>Loan Services</p>
                        
				<form target="_blank" method="post">
                            
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
                            
					<input type="button" value="Yes" onclick="">
                            
					<input type="reset" value="No" onclick="">
                            
					<hr>
                            
					<label for="checkLoanbalance">Check loan balance: </label>
                            
					<input type="button" value="Check loan balance" onclick="">
                            
					<hr>
                            
					<label for="repayAmount">Repay Amount:</label>
                            
					<input type="number" name="repayAmount" id="repayAmount">
                            
					<hr>
                            
					<label for="payLoan">Pay loan: </label>
                            
					<input type="button" value="Yes" onclick="">
                            
					<hr>
                        
				</form>
                    
			</div>

                
		</div>

            	
	</div>

        
	</body>
        
    
</html>