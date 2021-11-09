/* 
	date created: 9 Nov, 2021
	date modified: 9 Nov, 2021
*/

//constants
const myReceipt = document.getElementById("myReceipt")
//Account Creation
const usrName = document.getElementById("createName")
const usrId = document.getElementById("createIdNumber")
const usrPassKey = document.getElementById("createPasskey");
onst usrConfirmPass = document.getElementById("confirmPassKey")

//Account Login
const loginName = document.getElementById("loginName")
const usrPass = document.getElementByid("usrPass")

//Account Deposit
const depositIdNumber = document.getElementById("depositIdNumber")
const depositAmount = document.getElementById("depositAmount")

//Account Withdraw
const withdrawIdNumber = document.getElementById("withdrawIdNumber")
const withdrawAmount = document.getElementById("withdrawAmount")

//variables
let popupIsShowing = false
//opartational methods
function validateCreation(){	
}

function validateLogin(){
}

function validateDeposit(){
}

function validateWithdraw(){
}
//styling methods
function showReceipt(){
	myReceipt.style.display = "block"
	popupIsShowing = true
}