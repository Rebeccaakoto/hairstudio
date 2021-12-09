
<?php
//check if login session exit
include('../settings/core.php');
require("../Controllers/product_controller.php");

$brands = select_all_brands_controller();

check_admin_login();

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Admin Panel for GlowSpot">
    <meta name="author" content="Lawrencia Cobbina">

    <title>Rama Hair</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">


        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" method='post' action='products_table.php'>
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" name="search_product" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <input class="btn btn-primary" type="submit" name="psearch" value="search">
                                    
                                
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle"  href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                        <div class="topbar-divider d-none d-sm-block"></div>


                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION["email"]; ?></span>
                                <img class="img-profile rounded-circle"
                                    src="../assets/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="index.php" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

<!-- Palmers Table Section -->

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center float-right mb-4">
                    
                       <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#productmodal">
  Add New Product
</button>
                    </div>
                    <br>
                      <br>
                      <br>

<!-- Modal -->
<div class="modal fade" id="productmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
      <form method="POST" action="../actions/product_actions.php" class="row g-3">
  <div class="col-md-6">
    <label for="product_title" class="form-label">Product Name</label>
    <input type="text" class="form-control" id="name" name="product_title">
  </div>
  
  <div class="col-md-6">
    <label for="price" class="form-label">Price</label>
    <input type="tel" class="form-control" id="price"  name="price">
  </div>
  <div class="col-md-6">
    <label for="product_brand" class="form-label">Brand</label>
    <select class="form-control" id="exampleFormControlSelect1" name="p_brand">
                <option value="" selected disabled hidden>Choose here</option>
                <?php
                 foreach($brands as $brand ){
                    echo "<option value=".$brand['brand_id'].">".$brand['brand_name']."</options>";
                 }
                ?>
    </select>
  </div>

  <div class="col-md-6">
    <label for="image" class="form-label">Image Link</label>
    <input type="text" class="form-control" id="img" name="img">
  </div>
  <div class="col-md-6" >
  <label for="desc" class="form-label">Description</label>
  <input type="text" class="form-control" id="desc" name="desc">
  </div>
  <div class="col-md-6" >
  <label for="keywords" class="form-label">Keywords</label>
  <input type="text" class="form-control" id="key" name="key">
  </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name= "addProduct">Add</button>
      </div>

      </form>

    </div>
  </div>
</div>
<?php
                        

				if(isset($_POST['psearch'])){
					$phrase = $_POST['search_product'];

                $results = searchDbController($phrase);
                ?>

<h4 class="display-7 mb-2 text-center">Search Results</h4>
<?php

                foreach( $results as $searchresult ) {
			?>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Description</th>
      <th scope="col">Keywords</th>
      <th scope="col">Actions</th>


    </tr>
  </thead>


<tbody>
    <tr>
      <td><?php echo $searchresult["product_id"]; ?></td>
      <td><?php echo $searchresult["product_name"]; ?></td>
      <td><?php echo $searchresult["product_price"]; ?></td>
      <td><?php echo $searchresult["product_desc"]; ?></td>
      <td><?php echo $searchresult["product_keywords"]; ?></td>
    </tr>
  </tbody>
  </table>

<br>
<?php


                }

              }

                ?>






  

  

     
      </section>    
      <!-- Cerave Section -->

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h2 class="h3 mb-0 text-gray-800">All Products</h2>
    </div>
<?php


$cerave = getAllProductsController();


?>

                    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Description</th>
      <th scope="col">Keywords</th>
      <th scope="col">Actions</th>


    </tr>
  </thead>

  <?php
       foreach( $cerave as $row1 ) {


?>

  <tbody>
    <tr>
    <td><?php echo $row1["product_id"] ?></td>
      <td><?php echo $row1["product_title"] ?></td>
      <td><?php echo $row1["product_price"] ?></td>
      <td><?php echo $row1["product_desc"]; ?></td>
      <td><?php echo $row1["product_keywords"]; ?></td>
      <td> 
      <form class="d-inline-flex" action="../actions/product_actions.php" method="post">
                        <input hidden  name="ceraedit" value="<?php echo $row1['product_id']; ?>" />
                        <button class="btn btn-primary" type="submit" name="ceraeditbtn" >edit</button>
                    </form>   
         

            <form class="d-inline-flex" action="../actions/product_actions.php" method="post">
                <input type=hidden name="ceradel" value="<?php echo $row1['product_id']; ?>" />
                <button class="btn btn-danger" type="submit" name="ceradelbtn" >delete</button>
            </form>    
    </td>

    </tr>
  </tbody>

  <?php
       }
  ?>
</table>           
    </section>
<br>



</div>
            <!-- End of Main Content -->

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/chart-area-demo.js"></script>
    <script src="../js/demo/chart-pie-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

               <!-- Footer -->
               <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

        </div>
    <!-- End of Page Wrapper -->

</body>

</html>





