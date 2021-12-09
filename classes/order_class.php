
<?php

require('../settings/db_class.php');

class Order extends Connection{

    function viewAllOrders(){
        $query = "select * from orders order by order_id ;";
        return $this->fetch($query);
    }

    function deleteOneOrder($id){
        $query = "DELETE FROM  orders where order_id = '$id' ;";
        return $this->query($query);
    }

    function searchDb($phrase){
        $query = "SELECT * FROM `orders` WHERE `order_date` LIKE '%$phrase%' ORDER BY `order_date`;";
        return $this->fetch($query);
    }

}

?>