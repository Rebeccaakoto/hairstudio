<?php
require("../classes/admin_class.php");

function admin_login_controller ($email, $pass){
    
    $admin_actions = new admin();

    return $admin_actions->admin_login ($email, $pass);
}

?>