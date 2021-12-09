<?php
//connect to the product class
require_once("../classes/product_class.php");

//add new brand function
//takes brand name

function addNewBrand($brandName){
    //create an instance
    $newProductObject = new productClass();

    //run the add new brand method
    $addBrand = $newProductObject->addNewBrand($brandName);

    if ($addBrand){
        //return the query result
        return $addBrand;
    }else{
        return false;
    }
}

/*
display all brands
*/
function returnBrands(){
    //create an instance
    $newProductObject = new productClass();

    //run the select all brands method
    $selectBrands = $newProductObject->displayBrands();

    //check if select worked
    if ($selectBrands){

        $brands = array();

        while($record = $newProductObject->fetch()){
            $brands[$record['brand_id']] = $record['brand_name'];
        }

        //return the array
        return $brands;

    }else{
        return false;
    }

}


//update brand name
function updateBrandName($brandID, $brandName){
    //create an instance
    $newProductObject = new productClass();

    //run the update method
    $updateBrand = $newProductObject->updateBrand($brandID, $brandName);

    //check if it worked
    if($updateBrand){
        return $updateBrand;
    }else{
        return false;
    }
}

//delete brand name
function deleteBrandName($brandID){
    //create an instance
    $newProductObject = new productClass();

    //run the update method
    $deleteBrand = $newProductObject->deleteBrand($brandID);

    //check if it worked
    if ($deleteBrand){
        return $deleteBrand;
    }else{
        return false;
    }
}
    function select_all_brands_controller(){
        // create an instance of the Product class
        $product_instance = new productClass();
        // call the method from the class
        return $product_instance->select_all_brands();
     }








/*
*controller functions to add, edit, delete and view all products
*/

//function to add product
function addProduct( $brand, $title, $price, $desc, $img, $keywords){
    //create an instance of the class
    $newProductObject = new productClass();

    //add product
    $addProduct = $newProductObject->addProduct( $brand, $title, $price, $desc, $img, $keywords);

    //check if add worked
    if ($addProduct){
        return $addProduct;
    }else{
        return false;
    }
}

//function to list products for editing
function listProductsID(){
    //create an instance of the class
    $newProductObject = new productClass();

    //run the select query
    $runquery = $newProductObject->listProductsID();

    //check the query worked
    if($runquery){
        //create array to store ids
        $ids = array();
        //loop through the select result and store the ids in the array
        while($record = $newProductObject->fetchs()){
            $ids[$record['product_id']] = $record['product_title'];
        }

        //return the array
        return $ids;
    }else{
        return false;
    }

}

function getAllProductsController(){
    $product_actions = new productClass ();
    return $product_actions->getAllProducts();
}

function getOneProductController($product_id){
    $product_actions = new productClass ();
    return $product_actions->getOneProduct($product_id);
}


//function to update product
function updateProduct($id, $brand, $title, $price, $desc, $img, $keywords){
    //create an instance of the class
    $newProductObject = new productClass();

    //run the update method
    $runQuery = $newProductObject->updateProduct($id, $brand, $title, $price, $desc, $img, $keywords);

    //check if it worked
    if($runQuery){
        return $runQuery;
    }else{
        return false;
    }
}

//function to return a product's details
function returnProduct($id){
    //create an instance of the class
    $newProductObject = new productClass();

    //run the select method
    $runQuery = $newProductObject->returnProduct($id);

    //if it worked
    if($runQuery){
        //create array
        $productArray = array();
        while($record = $newProductObject->fetchs()){

            
            $productArray['brand_name'] = $record['brand_name'];
            $productArray['product_title'] = $record['product_title'];
            $productArray['product_price'] = $record['product_price'];
            $productArray['product_desc'] = $record['product_desc'];
            $productArray['product_image'] = $record['product_image'];
            $productArray['product_keywords'] = $record['product_keywords'];
            
            $productArray['brand_id'] = $record['brand_id'];

        }
        return $productArray;
    }else{
        return false;
    }
}

//function to delete product
function deleteProduct($id){
    //create an instance of the class
    $newProductObject = new productClass();

    //run the select method
    $runQuery = $newProductObject->deleteProduct($id);

    //check if it worked
    if($runQuery){
        return $runQuery;
    }else{
        return false;
    }
}

//function to display products
function displayProducts($start, $limit){
    //create an instance of the class
    $newProductObject = new productClass();

    //run the select method
    $runQuery = $newProductObject->displayProducts($start, $limit);

    //if it worked
    if($runQuery){
        //create array
        $productArray = array();
        while($record = $newProductObject->fetch()){

            $productArray[$record['product_id']] = [$record['brand_name'],
                                                    
                                                    $record['product_title'],
                                                    $record['product_desc'],
                                                    $record['product_image'],
                                                    $record['product_keywords'],
                                                    $record['product_price']];



        }
        return $productArray;
    }else{
        return false;
    }
}

//function to count products
function countRows(){
    //create an instance of the class
    $newProductObject = new productClass();

    //run the select method
    $runQuery = $newProductObject->countRows();

    if($runQuery){
        $countProducts = $newProductObject->fetch();
        return $countProducts;
    }else{
        return false;
    }
}

//function to search for products
function searchProducts($searchTerm){
    //create an instance of the class
    $newProductObject = new productClass();

    //run the select method
    $runQuery = $newProductObject->searchProduct($searchTerm);

    if($runQuery){
        $searchArray = array();
        while ($record = $newProductObject->fetch()){
            $searchArray[$record['product_id']] = [ $record['product_title'],
                                                    $record['product_image'],
                                                    $record['product_price']];
        }
        return $searchArray;
    }else{
        return false;
    }
}

?>
