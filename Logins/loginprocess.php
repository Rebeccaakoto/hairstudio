<?php


require("../controllers/customer_controller.php");
require("../settings/core.php");

    if(isset($_POST['login'])){
        //     //get user data
        $loginEmail = $_POST['email'];
        $loginPassword = $_POST['pass'];
        
      
        $result= CustomerLoginInfo($loginEmail);

        if (password_verify($loginPassword, $result['customer_pass'])){
            $_SESSION["user_id"] = $result["customer_id"];
            $_SESSION["user_role"] = $result["user_role"];
            check_permission();
            if($_SESSION["user_role"]== 2){
                header("Location:../view/checkout.php");
            }else{
                header("Location:../view/admindash.php");
                }
            }else {
                    echo "<script>alert('Username or Password incorrect')</script>";
                    //header("Location: ../Logins/login.php");
                }
        
       

   
    }

?>