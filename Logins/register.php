<?php
require("../controllers/customer_controller.php");

if (isset($_POST['Register'])){
	//grab form details 
	

	$email = $_POST['email'];
	$name = $_POST['name'];
	$pass = $_POST['pass'];
    $country= $_POST['country'];
    $city= $_POST['city'];
    $contact=$_POST['contact'];
    $image= $_POST['img'];
	

	$hash = password_hash($pass, PASSWORD_DEFAULT);
	//check if email exist

	$register = customer_add($name,$email,$hash,$country,$city,$contact,$image);

	if ($register) {
			//echo success
		header('Location: login-register.html');
	}else{
				//echo failure
		echo "error";

			}
		
	}

    
?>