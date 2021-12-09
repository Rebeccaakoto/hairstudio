<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">

    <title>Rama Hair</title>

    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="../asset/img/favicon.ico" type="image/x-icon"/>

    <!--== Google Fonts ==-->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Droid+Serif:400,400i,700,700i"/>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat:400,700"/>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i"/>

    <!--=== Bootstrap CSS ===-->
    <link href="../assets/css/vendor/bootstrap.min.css" rel="stylesheet">
    <!--=== Font-Awesome CSS ===-->
    <link href="../assets/css/vendor/font-awesome.css" rel="stylesheet">
    <!--=== Plugins CSS ===-->
    <link href="../assets/css/plugins.css" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="../assets/css/style.css" rel="stylesheet">

    <!-- Modernizer JS -->
    <script src="../assets/js/vendor/modernizr-2.8.3.min.js"></script>


    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <?php
    
      require_once("../controllers/cart_controller.php");
      require_once("../settings/core.php");
      if (isset($_SESSION['customer_id'])){
          $cid = $_SESSION['customer_id'];
          $cart = displayCart_fxn($cid);
          $checkOutAmt = cartValue_fxn($cid);

      }else{
          $ipadd = getRealIpAddr();
          $cart = displayCartNull_fxn($ipadd);
          $checkOutAmt = cartValueNull_fxn($ipadd);
      };

    ?>

<!--== Header Area Start ==-->
<header id="header-area" class="header__3">
    <div class="ruby-container">
        <div class="row">
            <!-- Logo Area Start -->
            <div class="col-3 col-lg-1 col-xl-2 m-auto">
                <a href="index.html" class="logo-area">
                    <img src="../assets/img/logo-black.png" alt="Logo" class="img-fluid"/>
                </a>
            </div>
            <!-- Logo Area End -->

            <!-- Navigation Area Start -->
            <div class="col-3 col-lg-9 col-xl-8 m-auto">
                <div class="main-menu-wrap">
                    <nav id="mainmenu">
                        <ul>
                            <li ><a href="index.html">Home</a>
                                
                            </li>
                            <li class="dropdown-show"><a href="#">Shop</a>
                                <ul class="mega-menu-wrap dropdown-nav">
                                    <li><a href="shop-right-full-wide.html">All Products</a></li>
                                    <li><a href="single-product-normal.html">Single Product</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-show"><a href="#">Profile</a>
                                <ul class="dropdown-nav">
                                    <li><a href="cart.html">Shopping Cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="compare.html">Compare</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                    <li><a href="Logins/login-register.html">Login & Register</a></li>
                                    <li><a href="my-account.html">My Account</a></li>
                                    
                                </ul>
                            </li>
                            <li><a href="single-product-group.html">Salon Services</a></li>
                            <li class="dropdown-show"><a href="shop.html">Braids</a>
                                
                                    
                            </li>
                            <li><a href="contact.html">Contact Us</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- Navigation Area End -->

            <!-- Header Right Meta Start -->
            <div class="col-6 col-lg-2 m-auto">
                <div class="header-right-meta text-right">
                    <ul>
                        <li><a href="#" class="modal-active"><i class="fa fa-search"></i></a></li>
                        <li class="settings"><a href="#"><i class="fa fa-cog"></i></a>
                            <div class="site-settings d-block d-sm-flex">
                                <dl class="currency">
                                    <dt>Currency</dt>
                                    <dd class="current"><a href="#">USD</a></dd>
                                    <dd><a href="#">AUD</a></dd>
                                    <dd><a href="#">CAD</a></dd>
                                    <dd><a href="#">BDT</a></dd>
                                </dl>

                                <dl class="my-account">
                                    <dt>My Account</dt>
                                    <dd><a href="#">Dashboard</a></dd>
                                    <dd><a href="#">Profile</a></dd>
                                    <dd><a href="#">Sign</a></dd>
                                </dl>

                                <dl class="language">
                                    <dt>Language</dt>
                                    <dd class="current"><a href="#">English (US)</a></dd>
                                    <dd><a href="#">English (UK)</a></dd>
                                    <dd><a href="#">Chinees</a></dd>
                                    <dd><a href="#">Bengali</a></dd>
                                    <dd><a href="#">Hindi</a></dd>
                                    <dd><a href="#">Japanees</a></dd>
                                </dl>
                            </div>
                        </li>
                        <li class="shop-cart"><a href="#"><i class="fa fa-shopping-bag"></i> <span
                                class="count">3</span></a>
                            <div class="mini-cart">
                                <div class="mini-cart-body">
                                    <div class="single-cart-item d-flex">
                                        <figure class="product-thumb">
                                            <a href="#"><img class="img-fluid" src="../assets/img/product-1.jpg"
                                                             alt="Products"/></a>
                                        </figure>

                                        <div class="product-details">
                                            <h2><a href="#">Sprite Yoga Companion</a></h2>
                                            <div class="cal d-flex align-items-center">
                                                <span class="quantity">3</span>
                                                <span class="multiplication">X</span>
                                                <span class="price">$77.00</span>
                                            </div>
                                        </div>
                                        <a href="#" class="remove-icon"><i class="fa fa-trash-o"></i></a>
                                    </div>
                                    <div class="single-cart-item d-flex">
                                        <figure class="product-thumb">
                                            <a href="#"><img class="img-fluid" src="../assets/img/product-2.jpg"
                                                             alt="Products"/></a>
                                        </figure>
                                        <div class="product-details">
                                            <h2><a href="#">Yoga Companion Kit</a></h2>
                                            <div class="cal d-flex align-items-center">
                                                <span class="quantity">2</span>
                                                <span class="multiplication">X</span>
                                                <span class="price">$6.00</span>
                                            </div>
                                        </div>
                                        <a href="#" class="remove-icon"><i class="fa fa-trash-o"></i></a>
                                    </div>
                                    <div class="single-cart-item d-flex">
                                        <figure class="product-thumb">
                                            <a href="#"><img class="img-fluid" src="../assets/img/product-3.jpg"
                                                             alt="Products"/></a>
                                        </figure>
                                        <div class="product-details">
                                            <h2><a href="#">Sprite Yoga Companion Kit</a></h2>
                                            <div class="cal d-flex align-items-center">
                                                <span class="quantity">1</span>
                                                <span class="multiplication">X</span>
                                                <span class="price">$116.00</span>
                                            </div>
                                        </div>
                                        <a href="#" class="remove-icon"><i class="fa fa-trash-o"></i></a>
                                    </div>
                                </div>
                                <div class="mini-cart-footer">
                                    <a href="checkout.html" class="btn-add-to-cart">Checkout</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Header Right Meta End -->
        </div>
    </div>
</header>
<!--== Header Area End ==-->

<!--== Search Box Area Start ==-->
<div class="body-popup-modal-area">
    <span class="modal-close"><img src="../assets/img/cancel.png" alt="Close" class="img-fluid"/></span>
    <div class="modal-container d-flex">
        <div class="search-box-area">
            <div class="search-box-form">
                <form action="#" method="post">
                    <input type="search" placeholder="type keyword and hit enter"/>
                    <button class="btn" type="button"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
    </div>
</div>
<!--== Search Box Area End ==-->

<!--== Page Title Area Start ==-->
<div id="page-title-area">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="page-title-content">
                    <h1>Shopping Cart</h1>
                    <ul class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="shop-left-full-wide.html">Shop</a></li>
                        <li><a href="cart.html" class="active">Cart</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== Page Title Area End ==-->

<!--== Page Content Wrapper Start ==-->
<div id="page-content-wrapper" class="p-9">
    <div class="container">
        <!-- Cart Page Content Start -->
        <div class="row">
            <div class="col-lg-12">
                <!-- Cart Table Area -->
                <div class="cart-table table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th class="pro-thumbnail">Thumbnail</th>
                            <th class="pro-title">Product</th>
                            <th class="pro-price">Price</th>
                            
                        </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach($cart as $key => $cartItem){
                            ?>

                            <tr>
                            <th scope="row"><?= $cartItem[2] ?></th>
                            <td>Ghc <?= $cartItem[3] ?></td>
                            <td>
                                <form class="form-inline" method="GET" action="../actions/manage_quantity.php">
                                    <input name="qty" type="number" value="<?= $cartItem[1] ?>" class="form-control input-sm">
                                    <input  type="hidden" name="pid" value="<?= $key ?>">
                                    <button class="mx-sm-3 btn btn-primary"> Update</button>
                                    <a href="<?php echo "../actions/remove_cart.php?id=".$key; ?>" class="btn btn-danger">Remove</a>
                                </form>

                            </td>
                            </tr>

                            <?php } ?>
 
                            
                        </tbody>
                    </table>
                </div>

                <!-- Cart Update Option -->
                <div class="cart-update-option d-block d-lg-flex">
                    
                </div>
            </div><br>
        </div><br>
        <a href="../Logins/login-register.html" class="btn-add-to-cart">Proceed To Checkout</a>
        <a href="shop-right-full-wide.php" class="btn btn-primary">Continue shopping</a>
                </div>
            </div>
        </div>
        <!-- Cart Page Content End -->
    </div>
</div>
<!--== Page Content Wrapper End ==-->

<!-- Footer Area Start -->
<footer id="footer-area">
    <!-- Footer Call to Action Start -->
    <div class="footer-callto-action">
        <div class="ruby-container">
            <div class="callto-action-wrapper">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                       
                        <!-- Single Call-to Action End -->
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <!-- Single Call-to Action Start -->
                        <div class="single-callto-action d-flex">
                            <figure class="callto-thumb">
                                <img src="../assets/img/support.png" alt="Support"/>
                            </figure>
                            <div class="callto-info">
                                <h2>24/7 CUSTOMER SERVICE</h2>
                                <p>Call us 24/7 at 000 - 123 - 456k</p>
                            </div>
                        </div>
                        <!-- Single Call-to Action End -->
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Footer Call to Action End -->

    <!-- Footer Follow Up Area Start -->
    <div class="footer-followup-area">
        <div class="ruby-container">
            <div class="followup-wrapper">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="follow-content-wrap">
                            <a href="index.html" class="logo"><img src="../assets/img/logo.png" alt="logo"/></a>
                            <p>Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum</p>

                            <div class="footer-social-icons">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-flickr"></i></a>
                            </div>

                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Follow Up Area End -->

    <!-- Footer Image Gallery Area Start -->
    <div class="footer-image-gallery">
        <div class="ruby-container">
            <div class="image-gallery-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="imgage-gallery-carousel owl-carousel">
                            <div class="gallery-item">
                                <a href="#"><img src="../assets/img/gallery-img-1.jpg" alt="Gallery"/></a>
                            </div>
                            <div class="gallery-item">
                                <a href="#"><img src="../assets/img/gallery-img-2.jpg" alt="Gallery"/></a>
                            </div>
                            <div class="gallery-item">
                                <a href="#"><img src="../assets/img/gallery-img-3.jpg" alt="Gallery"/></a>
                            </div>
                            <div class="gallery-item">
                                <a href="#"><img src="../assets/img/gallery-img-4.jpg" alt="Gallery"/></a>
                            </div>
                            <div class="gallery-item">
                                <a href="#"><img src="../assets/img/gallery-img-3.jpg" alt="Gallery"/></a>
                            </div>
                            <div class="gallery-item">
                                <a href="#"><img src="../assets/img/gallery-img-2.jpg" alt="Gallery"/></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Image Gallery Area End -->

    <!-- Copyright Area Start -->
    <div class="copyright-area">
        <div class="ruby-container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="copyright-text">
                        <p><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright Area End -->

</footer>
<!-- Footer Area End -->

<!-- Scroll to Top Start -->
<a href="#" class="scrolltotop"><i class="fa fa-angle-up"></i></a>
<!-- Scroll to Top End -->


<!--=======================Javascript============================-->
<!--=== Jquery Min Js ===-->
<script src="../assets/js/vendor/jquery-3.3.1.min.js"></script>
<!--=== Jquery Migrate Min Js ===-->
<script src="../assets/js/vendor/jquery-migrate-1.4.1.min.js"></script>
<!--=== Popper Min Js ===-->
<script src="../assets/js/vendor/popper.min.js"></script>
<!--=== Bootstrap Min Js ===-->
<script src="../assets/js/vendor/bootstrap.min.js"></script>
<!--=== Plugins Min Js ===-->
<script src="../assets/js/plugins.js"></script>

<!--=== Active Js ===-->
<script src="../assets/js/active.js"></script>
</body>

</html>