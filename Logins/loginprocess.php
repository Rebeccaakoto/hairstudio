<?php


require("../controllers/customer_controller.php");
require("../settings/core.php");

    if(isset($_POST['login'])){
        //     //get user data
        $loginEmail = $_POST['login_email'];
        $loginPassword = sha1($_POST['login_pass']);
        
        $user= login_controller($loginEmail, $loginPassword);

        if($user) {
            $_SESSION['user_id']=$user['customer_id'];
            $_SESSION['user_role']=$user['user_role'];
            
            header("Location:../view/checkout.php");
        }else {
            echo "<script>alert('Username or Password incorrect'); window.location.href='./login-register.html'</script>";
        }
        

        // if (password_verify($loginPassword, $result['customer_pass'])){
        //     $_SESSION["user_id"] = $result["customer_id"];
        //     $_SESSION["user_role"] = $result["user_role"];
        //     check_permission();
        //     if($_SESSION["user_role"]== 1){
        //         header("Location:../view/checkout.php");
        //     }else{
        //         header("Location:../view/admindash.php");
        //         }
        // }else {
        //     echo "<script>alert('Username or Password incorrect')</script>";
        //     //header("Location: ../Logins/login.php");
        // }   
    }

?>