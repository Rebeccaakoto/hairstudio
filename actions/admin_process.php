<?php

session_start();

include ('../controllers/adminlogin_controller.php');
// if log in button is clicked ...
if(isset($_POST["logbtn"]))  
 {  
      if(empty($_POST["log_email"]) || empty($_POST["log_pass"]))  
      {  
           echo '<script>alert("Both Fields are required")</script>';  
      }  
      else  
      {  
           $username = $_POST["log_email"];  
           $password = $_POST["log_pass"];  
           $result = admin_login_controller($username, $password);  

           if($result)  
           {              
               //return true;  
               $_SESSION["email"] = $username;
               $_SESSION['admin'] = "logged_in";  
               header("location:../view/admindash.php");  
          }  
          else  
          {  
               //return false;
               echo '<script>alert("Wrong User Details"); window.location.href = "../View/adminlog.php"</script>';  
          }  
                  
           
      }
 } 