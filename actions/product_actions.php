<?php
require("../controllers/product_controller.php");

if (isset($_POST['addProduct'])){
	//grab form details 
	

	$product_title = $_POST['product_title'];
    $brand = $_POST['p_brand'];
    $price = $_POST['price'];
    $desc = $_POST['desc'];
    $img = $_POST['img'];
    $keywords = $_POST['key'];
	

	$insert = addProduct($brand,$product_title,$price,$desc, $img,$keywords);
	
	if ($insert) {
			//echo success
		header('Location: ../view/products_table.php');
	}else{
				//echo failure
		echo "error";

			}
		
	}

    if(isset($_GET["submit"])){

        $ceta_id = $_GET['submit'];
        $delete= deleteProduct($ceta_id);
       if($delete){
        header("location:../view/products_table.php"); 
       }
      
            
    }
    




?>