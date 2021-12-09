<?php 
    //model
    require('../classes/customer_model.php');

    function customer_add($name, $email, $password, $country, $city, $contact, $image ) {
        
        //model class instance
        $customer = new Customer_class();

        //run insert phone model method
        $run_customer = $customer->customer_insert($name, $email, $password, $country, $city, $contact, $image);

        if ($run_customer) {
            return true;
        }
        else{
            return false;
        }
    }
    function searchDbController($phrase){
        $people_actions = new Customer_class();
        return $people_actions->searchDb($phrase);
    }
    function viewAllCustomersController(){
    
        $admin_actions = new Customer_class();
    
        return $admin_actions->viewAllCustomers();
    }

    function customerCountController(){
    
        $admin_actions = new Customer_class();;
    
        return $admin_actions->customerCount();
    }

    function select_customer($email, $password) {
        //model class instance
        $customer_view = new Customer_class();

        //run select phone model method
        $run_view = $customer_view->customer_select($email, $password);
        //create array
        if ($run_view) {
            $view_all = array();
            //loop through fetch array
            while ($onecustomer=$customer_view->fetchs()) {
                //append record to array
                $view_all[]=$onecustomer;
            }
            return $view_all;
        }
        else{
            return false;
        }
    }

    function returnEmail($email){
        //create an instance
        $newCustomerObject = new Customer_class();
    
        //run the return email method
        $returnEmail = $newCustomerObject->ExistingCustomer($email);
    
        if ($returnEmail){
            $existingEmail = $newCustomerObject->fetchs();
            return $existingEmail;
        }else{
            return false;
        }
    }

    function CustomerLoginInfo($email){
        //create an instance
        $newCustomerObject = new Customer_class();
    
        //run the return customer login details method
        $returnLoginInfo = $newCustomerObject->customer_check($email);
    
        //check if query run successful
        if ($returnLoginInfo){
    
            //create an array
            $credentials = array();
            $credentials = $newCustomerObject->fetchs();
    
            if (empty($credentials)){
                return false;
            }else{
                return $credentials;
            }
    
        }else{
            return false;
        }
    }

    function deleteOneCustomerController($customer_id){
    
        $admin_actions = new Customer_class();
    
        return $admin_actions->deleteOneCustomer($customer_id);
    }

    function viewAllAdminsController(){
    
        $admin_actions = new Customer_class();
    
        return $admin_actions->viewAllAdmins();
    }
?>