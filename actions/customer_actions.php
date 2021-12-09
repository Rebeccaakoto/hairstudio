<?php
require('../controllers/customer_controller.php');
$cust_id = null;

// add new customer process
 if(isset($_POST['addCust'])){
    // retrieve form details
    $name = $_POST['name'];
    $email = $_POST['mail'];
    $pswd = $_POST['pass'];
    $pass_hash = password_hash($pswd,PASSWORD_DEFAULT);
    $country = $_POST['country'];
    $city = $_POST['city'];
    $contact = $_POST['contact'];
    $role = $_POST['role'];


                customer_add ($name,$email,$pass_hash,$country,$city,$contact,$role);
                header("location:../view/customertable.php"); 



              }  
           
    


// delete btn process
 if(isset($_POST["custdelbtn"])){

    $customer_id = $_POST['custdel'];
    deleteOneCustomerController($customer_id);
    header("location:../view/customertable.php"); 
     }


// eedit  btn process
if(isset($_POST["editCustbtn"])){

   $cust_id ;
   $name = $_POST['name'];
   $email = $_POST['mail'];
   $pswd = $_POST['pass'];
   $pass_hash = password_hash($pswd,PASSWORD_DEFAULT);
   $country = $_POST['country'];
   $city = $_POST['city'];
   $contact = $_POST['contact'];
   $role = $_POST['role'];

   editCustomerContoller($name,$email,$pass_hash,$country,$city,$contact,$cust_id);
   header("location:../view/customertable.php"); 
    }


if (isset($_POST["custeditbtn"])) {
   $cust_id = $_POST['custedit'];
   header("location:../actions/update.php?id=<?php echo $cust_id; ?>"); 
 
}

?>