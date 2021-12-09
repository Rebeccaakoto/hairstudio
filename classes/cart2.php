<?php

require("settings/db_class.php");
class cartClass extends Connection{


    public function cartTotal($cid){
        $sql = "SELECT count(`c_id`) AS `count` FROM `cart` WHERE `c_id`='$cid'";
        return $this->query($sql);
    }

    public function cartTotalNull($ipadd){
        $sql = "SELECT count(`ip_add`) AS `count` FROM `cart` WHERE `ip_add`='$ipadd'";
        return $this->query($sql);
    }
}


?>