<?php
//for header redirection
ob_start();

//start session
session_start(); 

//get the name of the current page
$current_file = $_SERVER['SCRIPT_NAME']; 

//funtion to check for login
function check_login(){
	//check if login session exit
	if (!isset($_SESSION['customer_email'])) 
	{
		//redirect to login page
    	header('Location:../Logins/login-register.html');
	}
}


function check_admin_login(){
	//check if login session exit
	if (!isset($_SESSION['email'])) 
	{
		//redirect to login page
    	header('Location:../view/adminlogin.php');
	}
}
//function to check for permission 
function check_permission(){
	//get session role
	if (isset($_SESSION['user_role'])) {
		//assign session to an array
		return $_SESSION['user_role'];
	}
}



function getRealIpAddr(){
    $ip = $_SERVER['REMOTE_ADDR'];

	if(!empty($_SERVER['HTTP_CLIENT_IP']))
	{
		$ip = $_SERVER['HTTP_CLIENT_IP'];
	}
	elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) 
	{
		$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	}
	return $ip;
}

?>