<?php

require('../classes/payment_class.php');



function viewAllPaymentController(){
    
    $payment_actions = new Payment();

    return $payment_actions->viewAllPayments();
}

function checkPaymentController($id){
    
    $payment_actions = new Payment();

    return $payment_actions->checkPayment($order_id);
}

function addPaymentController($cid,$curr,$amt,$orderid){
    
    $payment_actions = new Payment();

    return $payment_actions->addPayment($cid,$curr,$amt,$orderid);
}

function deleteOnePaymentController($pay_id){
    
    $payment_actions = new Payment();
    return $payment_actions->deleteOnePayment($pay_id);
}

function searchDbController($phrase){
    $payment_actions = new Payment ();
    return $payment_actions->searchDb($phrase);
}






?>