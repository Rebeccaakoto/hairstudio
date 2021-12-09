<?php
//connect to database class
require_once("../settings/db_class.php");



class productClass extends Connection
{
   /**
	*method to insert new brand
	*takes brand name
	*/

    public function addNewBrand($brandName){
        //sql query
        $sql = "INSERT INTO `brands`(`brand_name`) VALUES ('$brandName')";

        //run the sql query
        return $this->query($sql);
    }

    function add_brands($name) {

        //formulate insert query
        $sql = "INSERT INTO brands(`brand_name`) values('$name')";
        //execute query
        return $this->query($sql);

    }

    public function displayBrands(){
        //sql query
        $sql = "SELECT `brand_id`, `brand_name` FROM `brands`";

        //run the sql query
        return $this->query($sql);
    }

    public function updateBrand($brandID, $brandName){
        //sql query
        $sql = "UPDATE `brands` SET `brand_name`='$brandName' WHERE `brand_id` = '$brandID'";

        return $this->query($sql);
    }

    function select_all_brands(){
        $sql= "SELECT * FROM brands";
        return $this->fetch($sql);
     }

    public function deleteBrand($brandID){
        //sql query
        $sql = "DELETE FROM `brands` WHERE `brand_id` = '$brandID'";

        return $this->query($sql);
    }


    function  deleteOneProduct($product_id) {
        $query = "delete from products where product_id = '$product_id';";
        return $this->query($query);
    }

    

    /*
    *methods to insert, edit, select and delete all products
    */

    public function addProduct( $brand, $title, $price, $desc, $img, $keywords){

        //sql query
        $sql = "INSERT INTO `products`( `product_brand`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`) VALUES ('$brand','$title','$price','$desc','$img','$keywords')";

        return $this->query($sql);

    }

    //method to list all products for updating or editing
    public function listProductsID(){
        $sql = "SELECT `product_id`, `product_title` FROM `products`";
        return $this->query($sql);
    }

    //method to update product
    public function updateProduct($id, $brand, $title, $price, $desc, $img, $keywords){
        $sql = "UPDATE `products` SET `product_brand`='$brand',`product_title`='$title',`product_price`='$price',`product_desc`='$desc',`product_image`='$img',`product_keywords`='$keywords' WHERE `product_id` = '$id'";
        return $this->query($sql);
    }

    function getAllProducts(){
        $query = "SELECT * FROM products; " ;
        return $this->fetch($query);
    }

    //method to return the product
    public function returnProduct($id){
        $sql = "SELECT brands.brand_name, brands.brand_id, 
        products.product_title, products.product_price, products.product_desc, products.product_image, product_keywords
        FROM `products`
        JOIN brands ON (products.product_brand = brands.brand_id)
        
        WHERE products.product_id = '$id'";
        return $this->query($sql);
    }

    //method to delete product
    public function deleteProduct($id){
        $sql = "DELETE FROM `products` WHERE `product_id` = '$id'";
        return $this->query($sql);
    }

    function getOneProduct($product_id){
        $query = "select * from products where product_id = '$product_id' " ;
        return $this->fetch($query);
    }

   //method to display products
    public function displayProducts($start, $limit){
        $sql = "SELECT brands.brand_name,  products.product_id,
        products.product_title, products.product_price, products.product_desc, products.product_image, product_keywords
        FROM `products`
        JOIN brands ON (products.product_brand = brands.brand_id)
        
        LIMIT $start, $limit
        ";
        return $this->query($sql);
    }

    //method to count how many products are in the database
    //to for estimating how many pages
    public function countRows(){
        $sql = "SELECT count(`product_id`) AS id FROM `products`";
        return $this->query($sql);
    }

    //method to search for products
    public function searchProduct($searchTerm){
        $sql = "SELECT * FROM `products` WHERE `product_title` LIKE '$searchTerm'";
        return $this->query($sql);
    }
}

?>
