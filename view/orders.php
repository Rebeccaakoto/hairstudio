<?php //customer id  product id amount  qty invoice no order status

require('../settings/core.php');
require('../controllers/cart_controller.php');


$ipadd = null;
if (isset($_SESSION['customer_id'])){
    $cid = $_SESSION['customer_id'];
    $cart = displayCart_fxn($cid);
    $checkOutAmt = cartValue_fxn($cid);

}else{
    $ipadd = getRealIpAddr();
    $viewCart = displayCartIPAddController($ipadd);


}


$invoice_num = rand(6,2147483647);


foreach( $viewCart as $row => $cartItem) {

$qty= $cartItem['qty'];
$product_id = $cartItem['p_id'];


}



$insertResult= insertOrderController($ipadd,$invoice_num,$qty,$product_id,$amt);

          //insert into orders table
          if ($insertResult === true) {
			header('location: payment.php');

		  }


?>