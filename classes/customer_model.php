<?php
    // database credentials
    require_once('../settings/db_class.php');

    class Customer_class extends connection{

        // method for insert
        public function customer_insert($name, $email, $password, $country, $city, $contact, $image){
            // formulate insert query
            $sql = "INSERT INTO customer(`customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_city`, `customer_contact`, `customer_image`, `user_role`) VALUES('$name', '$email', '$password', '$country', '$city', '$contact', '$image', 2)";
            return $this->query($sql);

            // $this->db_query($sql);
            // echo("Error description: " . mysqli_error($this->db));
        }

        public function select_all_cust(){
            $sql = "SELECT * FROM customer";
            return $this->query($sql);
        }

        function customerCount(){
            $query= "SELECT COUNT(customer_id) FROM customer where user_role = 2";
            return $this->query($query);
    
        }

        function searchDb($phrase){
            $query = "SELECT * FROM `customer` WHERE `customer_name` LIKE '%$phrase%' ORDER BY `customer_name`;";
            return $this->fetch($query);
        }

        function login($email, $pass){
            $query = "SELECT * FROM `customer` WHERE `customer_name`= '$email' AND `customer_pass`='$pass';";
            return $this->fetch($query);
        }

        function viewAllCustomers(){
            $query = "select * from customer where user_role = 2 order by customer_id;";
            return $this->fetch($query);
        }

        public function customer_check($email){
            // formulate verify query
            $sql = "SELECT * FROM customer WHERE customer_email = '$email'";
           
            return $this->query($sql);

        }

        public function customer_id($cust_name){
            $sql = "SELECT customer_id FROM customer WHERE customer_name = '$cust_name'";
            return $this->query($sql);
        }

        function deleteOneCustomer($customer_id){
            // delete specified customer record
            return $this->query("delete from customer where customer_id = '$customer_id'");
        }

        function viewAllAdmins(){
            $query = "select * from customer where user_role = 1";
            return $this->fetch($query);
        }
    }
?>