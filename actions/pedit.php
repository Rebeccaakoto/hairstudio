<?php

$pid = $_GET['id'];

require ('../controllers/product_controller.php');

$product = getOneProductController($pid);

foreach ($product as $x => $productitem) {

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<form method="POST" action="../actions/product_actions.php" class="row g-3">
   <div class="col-md-6">
     <label for="pid" class="form-label">Product Id</label>
     <input type="text" class="form-control" id="pname" name="pid" value= "<?php echo $productitem['product_id']; ?>" readonly>
   </div>
   <div class="col-md-6">
     <label for="pname" class="form-label">Product Name</label>
     <input type="text" class="form-control" id="pname"  name="pname" value= "<?php echo $productitem['product_name']; ?>" >
   </div>

   <div class="col-12">
     <label for="brand" class="form-label">Product Brand</label>
     <input type="text" class="form-control" id="brand" name="pbrand" value= "<?php echo $productitem['product_brand']; ?>">
   </div>

   <div class="col-md-6">
     <label for="img" class="form-label">Image Link</label>
     <input type="text" class="form-control" id="img" name="pimg" value= "<?php echo $productitem['product_image']; ?>">
   </div>

   <div class="col-md-6">
     <label for="price" class="form-label">Price</label>
     <input type="tel" class="form-control" id="price" name="pprice" value= "<?php echo $productitem['product_price']; ?>" >
   </div>
   <div class="col-md-6">
   <label for="desc" class="form-label">Description</label>
   <input type="text" class="form-control" id="desc" name="pdesc" value= "<?php echo $productitem['product_desc']; ?>">
   </div>
   <div class="col-md-6">
     <label for="key" class="form-label">Keywords</label>
     <input type="text" class="form-control" id="key" name="pkey" value= "<?php echo $productitem['product_keywords']; ?>">
   </div>
   <?php
}

?>

   <div>
   <button type="submit" class="btn btn-primary" name= "editprobtn">Add</button>
   </div>
   
   </form>


   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>