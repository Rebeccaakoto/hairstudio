<?php

require ('../controllers/cart_controller.php');
require('../settings/core.php');


$ipadd = null;
if (isset($_SESSION['customer_id'])){
    $cid = $_SESSION['customer_id'];
    $cart = displayCart_fxn($cid);

}else{
    $ipadd = getRealIpAddr();


}

  $curl = curl_init();
  
  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.paystack.co/transaction/verify/{$_GET['ref']}",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
      "Authorization: Bearer sk_live_497a3a223893acf3ff8ecfd4dce1158b2fc9b088",
      "Cache-Control: no-cache",
    ),
  ));

  $response = curl_exec($curl);
  $err = curl_error($curl);
  curl_close($curl);
  

  $responseObject = json_decode($response);

  if(isset($responseObject->data->status)&& $responseObject->data->status === 'success'){
           
      $email = $_GET['email'];
      $amount = $_GET['amount'];
     
      $orderid = $_GET['oid'];



    processPaymentController($ipadd, $amount, $currency,$orderid);
    //clear from cart
    removeAllCartController($ipadd);


      header("location:../view/payment_success.php"); 
    } else {
        header("location:../view/payment_error.php"); 
    }
?>