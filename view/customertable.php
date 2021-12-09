
<?php
//check if login session exit
include('../settings/core.php');

check_admin_login();



    // display error if customer exists already or insertion failed
    if (isset($_GET['exits']) ) {
        echo "<script>alert('Error: This customer already exists.')</script>";

    } 

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Admin Panel for GlowSpot">
    <meta name="author" content="Lawrencia Cobbina">

    <title>Ruby</title>

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
                    <a href="admindash.php">Home</a>
                    <a href="admin_table.php">Admin</a>
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" method='post' action='customer_table.php'>
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" name="search_customer" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <input class="btn btn-primary" type="submit" name="csearch" value="search">
                                    
                                
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
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
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
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

                    <!-- Page Heading -->

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">All Customers</h1>
                       <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#custmodal">
  Add Customer
</button>
                    </div>


<!-- Modal -->
<div class="modal fade" id="custmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
      <form method="POST" action="../actions/customer_actions.php" class="row g-3">
  <div class="col-md-6">
    <label for="fname" class="form-label">Full Name</label>
    <input type="text" class="form-control" id="fname" name="name">
  </div>
  <div class="col-md-6">
    <label for="tel" class="form-label">Contact</label>
    <input type="tel" class="form-control" id="tel"  name="contact">
  </div>
  <div class="col-12">
    <label for="Email" class="form-label">Email</label>
    <input type="email" class="form-control" id="Email" name="mail">
  </div>
  <div class="col-12">
  <label for="pass" class="form-label">Password</label>
  <input type="password" class="form-control" id="pass" name="pass">
  </div>
  <div class="col-md-6">
    <label for="city" class="form-label">City</label>
    <input type="text" class="form-control" id="city" name="city">
  </div>
  <div class="col-md-4">
    <label for="country" class="form-label">Country</label>
    <input type="text" class="form-control" id="country" name="country">
  </div>
  <div class="col-md-2">
    <label for="userrole" class="form-label">Role</label>
    <input readonly type="tel" class="form-control" id="userrole" value="2" name="role">
  </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name= "addCust">Add</button>
      </div>

      </form>

    </div>
  </div>
</div>

<?php
                        require('../controllers/customer_controller.php');

				if(isset($_POST['csearch'])){
					$phrase = $_POST['search_customer'];

                $results = searchDbController($phrase);
                ?>

<h4 class="display-7 mb-2 text-center">Search Results</h4>

<table class="table table-striped">
  <thead>
    <tr>
    <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">User Role</th>
      <th scope="col">Email</th>
      <th scope="col">Country</th>
      <th scope="col">City</th>
      <th scope="col">Contact</th>


    </tr>
  </thead>

<?php

                foreach( $results as $searchresult ) {
			?>

<tbody>
    <tr>
    <td><?php echo $searchresult["customer_id"] ?></td>
      <td><?php echo $searchresult["customer_name"] ?></td>
      <td><?php echo $searchresult["user_role"]; ?></td>
      <td><?php echo $searchresult["customer_email"] ?></td>
      <td><?php echo $searchresult["customer_country"]; ?></td>
      <td><?php echo $searchresult["customer_city"]; ?></td>
      <td><?php echo $searchresult["customer_contact"]; ?></td>
    </tr>
  </tbody>
  </table>

<br>
<br>
<br>
<?php


                }

              }

                ?>


<?php


$customers = viewAllCustomersController();


?>

                    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">User Role</th>
      <th scope="col">Email</th>
      <th scope="col">Country</th>
      <th scope="col">City</th>
      <th scope="col">Contact</th>
      <th scope="col">Actions</th>


    </tr>
  </thead>

  <?php
       foreach( $customers as $row ) {


?>

  <tbody>
    <tr>
      <td><?php echo $row["customer_id"] ?></td>
      <td><?php echo $row["customer_name"] ?></td>
      <td><?php echo $row["user_role"]; ?></td>
      <td><?php echo $row["customer_email"] ?></td>
      <td><?php echo $row["customer_country"]; ?></td>
      <td><?php echo $row["customer_city"]; ?></td>
      <td><?php echo $row["customer_contact"]; ?></td>
      <td> 
      <form class="d-inline-flex" action="../actions/customer_actions.php" method="post">
                        <input type="hidden" name="custedit" value="<?php echo $row['customer_id']; ?>" />
                        <button class="btn btn-primary" type="submit" name="custeditbtn" >edit</button>
                    </form>   
         

            <form class="d-inline-flex" action="../actions/customer_actions.php" method="post">
                <input type=hidden name="custdel" value="<?php echo $row['customer_id']; ?>" />
                <button class="btn btn-danger" type="submit" name="custdelbtn" >delete</button>
            </form>    
    </td>

    </tr>
  </tbody>

  <?php
       }
  ?>
</table>           

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





