
<?php

require('../settings/db_class.php');

class Payment extends Connection{

    function viewAllPayments(){
        $query = "select * from payment order by pay_id;";
        return $this->fetch($query);
    }

    function checkPayment($order_id){
        $query = "select * from payment where order_id = '$order_id';";
        return $this->fetch($query);
    }

    function addPayment($cid,$curr,$amt,$orderid){
		// query to insert into table customer
        return $this->query("insert into payment(customer_id,currency,amt,order_id) values('$cid','$curr','$amt','$orderid');");

    }

    function  deleteOnePayment($pay_id){
        $query = "delete from payment where pay_id = '$pay_id';";
        return $this->query($query);
    }

    function searchDb($phrase){
        $query = "SELECT * FROM `payment` WHERE `payment_date` LIKE '%$phrase%' ORDER BY `payment_date`;";
        return $this->fetch($query);
    }


}

?>