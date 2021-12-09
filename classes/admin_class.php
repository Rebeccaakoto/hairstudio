<?php

require("../settings/db_class.php");

class admin extends Connection{

    function admin_login ($email, $pass){
        return $this->fetch("SELECT * FROM customer WHERE customer_email='$email' AND `customer_pass`='$pass';");
    }
    // return $this->query("select count(customer_email) from customer where customer_email = '$email';");
    

}




?>