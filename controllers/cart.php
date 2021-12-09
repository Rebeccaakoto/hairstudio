<?php
require("classes/cart2.php");

function cartTotal_fxn($cid){
    $newCartObject = new cartClass();

    $runQuery = $newCartObject->cartTotal($cid);

    //check if query run
    if($runQuery){
        $total = $newCartObject->fetch();
        return $total;
    }else{
        return false;
    }
}

function cartTotalNull_fxn($ipadd){
    $newCartObject = new cartClass();

    $runQuery = $newCartObject->cartTotalNull($ipadd);

    //check if query run
    if($runQuery){
        $total = $newCartObject->fetchs();
        return $total;
    }else{
        return false;
    }
}

?>