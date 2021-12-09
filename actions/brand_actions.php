<?php

require("../controllers/product_controller.php");
if(isset($_POST['addProduct'])){
  
    
  $name = $_POST['brand_name'];
 
  // call the add_brand_controller function: return true or false
  $result = addNewBrand($name);
  

  if($result==true) {
      header("Location: ../view/brands.php");
      echo "success";
  }else{
      echo "insertion failed";
  }

}



if(isset($_GET['submit'])){

  $id = $_GET['submit'];

  // call the function
  $result = deleteBrandName($id);

  if($result === true) header("Location: ../view/brands.php");
  else echo "deletion failed";


}


// updating
if(isset($_POST["submit"])){
  $id = $_POST["brand_id"];
  $name = $_POST["brand_name"];
  $result = updateBrandName($id, $name);
  //die($result);
  if($result === true) 
  header("Location: ../view/brands.php");
  else echo "updating failed";

  
}

?>