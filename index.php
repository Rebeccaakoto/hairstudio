

<?php

require("settings/core.php");
require("controllers/cart.php");
?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">

    <title>Rama Hair GH</title>

    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon"/>

    <!--== Google Fonts ==-->
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Droid+Serif:400,400i,700,700i"/>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat:400,700"/>
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i"/>

    <!--=== Bootstrap CSS ===-->
    <link href="assets/css/vendor/bootstrap.min.css" rel="stylesheet">
    <!--=== Font-Awesome CSS ===-->
    <link href="assets/css/vendor/font-awesome.css" rel="stylesheet">
    <!--=== Plugins CSS ===-->
    <link href="assets/css/plugins.css" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>


    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!--== Header Area Start ==-->
<header id="header-area">
    <div class="ruby-container">
        <div class="row">
            <!-- Logo Area Start -->
            <div class="col-3 col-lg-1 col-xl-2 m-auto">
                <a href="index.html" class="logo-area">
                    <img src="assets/img/daimond.png" alt="Logo" class="img-fluid"/>
                </a>
            </div>
            <!-- Logo Area End -->

            <!-- Navigation Area Start -->
            <div class="col-3 col-lg-9 col-xl-8 m-auto">
                <div class="main-menu-wrap">
                    <nav id="mainmenu">
                        <ul>
                            <li ><a href="index.php">Home</a>
                                
                            </li>
                            <li class="dropdown-show"><a href="#">Shop</a>
                                <ul class="mega-menu-wrap dropdown-nav">
                                    <li><a href="view/shop-right-full-wide.php">All Products</a></li>
                                    <li><a href="view/single-product-normal.html">Single Product</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-show"><a href="#">Profile</a>
                                <ul class="dropdown-nav">
                                    <li><a href="view/cart.php">Shopping Cart</a></li>
                                    <li><a href="view/checkout.html">Checkout</a></li>
                                    <li><a href="view/compare.html">Compare</a></li>
                                    <li><a href="view/wishlist.html">Wishlist</a></li>
                                    <li><a href="Logins/login-register.html">Login & Register</a></li>
                                    <li><a href="view/my-account.html">My Account</a></li>
                                    
                                </ul>
                            </li>
                           
                            <li class="dropdown-show"><a href="view/shop.php">Braids</a>
                                
                                    
                            </li>
                            <li><a href="view/contact.html">Contact Us</a></li>
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
                                    <dd class="current"><a href="#">GHC</a></dd>
                                    <dd><a href="#">USD</a></dd>
                                    <dd><a href="#">CAD</a></dd>
                                    <dd><a href="#">BDT</a></dd>
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
                                class="count"></span></a>
                            <div class="mini-cart">
                                <div class="mini-cart-body">
                                    <div class="single-cart-item d-flex">
                                        <figure class="product-thumb">
                                            <?php
                                        $ipadd = getRealIpAddr();
                                        if(isset($_SESSION['customer_id'])){
                                            $total = cartTotal_fxn($_SESSION['customer_id']);
                                        }else{
                                            $total = cartTotalNull_fxn($ipadd);
                                        }
                                        ?>
                                        </figure>

                                        <div class="product-details">
                                            
                                        </div>
                                        <a href="#" class="remove-icon"><i class="fa fa-trash-o"></i></a>
                                    </div>
                                    <div class="single-cart-item d-flex">
                                        <figure class="product-thumb">
                                            
                                        </figure>
                                       
                                        <a href="#" class="remove-icon"><i class="fa fa-trash-o"></i></a>
                                    </div>
                                    <div class="single-cart-item d-flex">
                                        <figure class="product-thumb">
                                            
                                        </figure>
                                        <div class="product-details">
                                            
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
    <span class="modal-close"><img src="assets/img/cancel.png" alt="Close" class="img-fluid"/></span>
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

<!--== Banner // Slider Area Start ==-->
<section id="banner-area">
    <div class="ruby-container">
        <div class="row">
            <div class="col-lg-12">
                <div id="banner-carousel" class="owl-carousel">
                    <!-- Banner Single Carousel Start -->
                    <div class="single-carousel-wrap slide-item-1">
                        <div class="banner-caption text-center text-lg-left">
                            <h4>Rama Hair Studios</h4>
                            <h2>De_Hairmatezgh</h2>
                            <p>Professional Hair stylist and Wigmaker</p>
                            <a href="shop.html" class="btn-long-arrow">Shop Now</a>
                        </div>
                    </div>
                    <!-- Banner Single Carousel End -->

                    <!-- Banner Single Carousel Start -->
                    <div class="single-carousel-wrap slide-item-2">
                        <div class="banner-caption text-center text-lg-left">
                            <h4>Deliveries</h4>
                            <h2>Call for enquiries</h2>
                            <p>Affordable and quality wig extensions
                            </p>
                            <a href="shop.html" class="btn-long-arrow">Shop Now</a>
                        </div>
                    </div>
                    <!-- Banner Single Carousel End -->
                </div>
            </div>
        </div>
    </div>
</section>
<!--== Banner Slider End ==-->

<!--== About Us Area Start ==-->
<section id="aboutUs-area" class="pt-9">
    <div class="ruby-container">
        <div class="row">
            <div class="col-lg-6">
                <!-- About Image Area Start -->
                <div class="about-image-wrap">
                    <a href="about.html"><img src="assets/img/hair2.jpeg" alt="About Us" class="img-fluid"/></a>
                </div>
                <!-- About Image Area End -->
            </div>

            <div class="col-lg-6 m-auto">
                <!-- About Text Area Start -->
                <div class="about-content-wrap ml-0 ml-lg-5 mt-5 mt-lg-0">
                    <h2>About Us</h2>
                    <h3>WE ARE VISIONARY</h3>
                    <div class="about-text">
                        <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum
                            est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum
                            formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc
                            nobis videntur parum clari, fiant sollemnes in futurum.</p>

                        <p>Typi noni habented claritatem insitamed ested usused legentis in iis qui facit eorum
                            claritatem. Investigationes demonstraverunt lectores legere me lius quod ii loreem ipsum ius
                            delour legunt saepius.</p>

                        <a href="about.html" class="btn btn-long-arrow">Learn More</a>


                        <h4 class="vertical-text">WHO WE ARE?</h4>
                    </div>
                </div>
                <!-- About Text Area End -->
            </div>
        </div>
    </div>
</section>
<!--== About Us Area End ==-->

<!--== New Collection Area Start ==-->
<section id="new-collection-area" class="p-9">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h2>New Collection Products</h2>
                    <p>Best Hair deals</p>
                </div>
                <!-- Section Title End -->
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="new-collection-tabs">

                    <!-- Tab Menu Area Start -->
                    <ul class="nav tab-menu-wrap" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="active" id="feature-products-tab" data-toggle="tab" href="#feature-products"
                               role="tab" aria-controls="feature-products-tab" aria-selected="true">Feature Products</a>
                        </li>
                        <li class="nav-item">
                            <a id="new-products-tab" data-toggle="tab" href="#new-products" role="tab"
                               aria-controls="new-products" aria-selected="false">New Products</a>
                        </li>
                        <li class="nav-item">
                            <a id="onsale-tab" data-toggle="tab" href="#onsale" role="tab" aria-controls="onsale"
                               aria-selected="false">christmas hair</a>
                        </li>
                    </ul>
                    <!-- Tab Menu Area End -->

                    <!-- Tab Content Area Start -->
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="feature-products" role="tabpanel"
                             aria-labelledby="feature-products-tab">
                            <div class="products-wrapper">
                                <div class="products-carousel owl-carousel">
                                    <!-- Single Product Item -->
                                    <div class="single-product-item text-center">
                                        <figure class="product-thumb">
                                            <a href="single-product.html"><img src="assets/img/hair7.jpeg"
                                                                               alt="Products" class="img-fluid"></a>
                                        </figure>

                                        <div class="product-details">
                                            <h2><a href="single-product.html">braids frontal wig cap</a></h2>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <span class="price">GHS 500.00</span>
                                            <a href="single-product-normal.html" class="btn btn-add-to-cart">+ See more</a>
                                            <span class="product-bedge">New</span>
                                        </div>

                                        <div class="product-meta">
                                            <button type="button" data-toggle="modal" data-target="#quickView">
                                                <span data-toggle="tooltip" data-placement="left" title="Quick View"><i
                                                        class="fa fa-compress"></i></span>
                                            </button>
                                            <a href="wishlist.html" data-toggle="tooltip" data-placement="left"
                                               title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                            <a href="compare.html" data-toggle="tooltip" data-placement="left"
                                               title="Compare"><i class="fa fa-tags"></i></a>
                                        </div>
                                    </div>
                                    <!-- Single Product Item -->

                                    <!-- Single Product Item -->
                                    <div class="single-product-item text-center">
                                        <figure class="product-thumb">
                                            <a href="single-product.html"><img src="assets/img/hair8 (1).jpeg"
                                                                               alt="Products" class="img-fluid"></a>
                                        </figure>

                                        <div class="product-details">
                                            <h2><a href="single-product.html">Bouncy Raw Hair</a></h2>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <span class="price">$152.00</span>
                                            <a href="single-product-normal.html" class="btn btn-add-to-cart">+ See more</a>
                                        </div>

                                        <div class="product-meta">
                                            <button type="button" data-toggle="modal" data-target="#quickView">
                                                <span data-toggle="tooltip" data-placement="left" title="Quick View"><i
                                                        class="fa fa-compress"></i></span>
                                            </button>
                                            <a href="wishlist.html" data-toggle="tooltip" data-placement="left"
                                               title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                            <a href="compare.html" data-toggle="tooltip" data-placement="left"
                                               title="Compare"><i class="fa fa-tags"></i></a>
                                        </div>
                                    </div>
                                    <!-- Single Product Item -->

                                    <!-- Single Product Item -->
                                    <div class="single-product-item text-center">
                                        <figure class="product-thumb">
                                            <a href="single-product.html"><img src="assets/img/hair8 (2).jpeg"
                                                                               alt="Products" class="img-fluid"></a>
                                        </figure>

                                        <div class="product-details">
                                            <h2><a href="single-product.html">Straight brown highlights</a></h2>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <span class="price">$43.00</span>
                                            <a href="single-product-normal.html" class="btn btn-add-to-cart">+ See more</a>
                                        </div>

                                        <div class="product-meta">
                                            <button type="button" data-toggle="modal" data-target="#quickView">
                                                <span data-toggle="tooltip" data-placement="left" title="Quick View"><i
                                                        class="fa fa-compress"></i></span>
                                            </button>
                                            <a href="wishlist.html" data-toggle="tooltip" data-placement="left"
                                               title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                            <a href="compare.html" data-toggle="tooltip" data-placement="left"
                                               title="Compare"><i class="fa fa-tags"></i></a>
                                        </div>
                                    </div>
                                    <!-- Single Product Item -->

                                    <!-- Single Product Item -->
                                    <div class="single-product-item text-center">
                                        <figure class="product-thumb">
                                            <a href="single-product.html"><img src="assets/img/hair8 (5).jpeg"
                                                                               alt="Products" class="img-fluid"></a>
                                        </figure>

                                        <div class="product-details">
                                            <h2><a href="single-product.html">Bone Straight</a></h2>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half"></i>
                                            </div>
                                            <span class="price">$83.00</span>
                                            <a href="single-product-normal.html" class="btn btn-add-to-cart">+ See more</a>
                                            <span class="product-bedge sale">Sale</span>
                                        </div>

                                        <div class="product-meta">
                                            <button type="button" data-toggle="modal" data-target="#quickView">
                                                <span data-toggle="tooltip" data-placement="left" title="Quick View"><i
                                                        class="fa fa-compress"></i></span>
                                            </button>
                                            <a href="wishlist.html" data-toggle="tooltip" data-placement="left"
                                               title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                            <a href="compare.html" data-toggle="tooltip" data-placement="left"
                                               title="Compare"><i class="fa fa-tags"></i></a>
                                        </div>
                                    </div>
                                    <!-- Single Product Item -->
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="new-products" role="tabpanel" aria-labelledby="new-products-tab">
                            <div class="products-wrapper">
                                <div class="products-carousel owl-carousel">
                                    <!-- Single Product Item -->
                                    <div class="single-product-item text-center">
                                        <figure class="product-thumb">
                                            <a href="single-product.html"><img src="assets/img/hair3.jpeg"
                                                                               alt="Products" class="img-fluid"></a>
                                        </figure>

                                        <div class="product-details">
                                            <h2><a href="single-product.html">natural kinky straight</a></h2>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <span class="price">$52.00</span>
                                            <a href="single-product-normal.html" class="btn btn-add-to-cart">+ See more</a>
                                            <span class="product-bedge">New</span>
                                        </div>

                                        <div class="product-meta">
                                            <button type="button" data-toggle="modal" data-target="#quickView">
                                                <span data-toggle="tooltip" data-placement="left" title="Quick View"><i
                                                        class="fa fa-compress"></i></span>
                                            </button>
                                            <a href="wishlist.html" data-toggle="tooltip" data-placement="left"
                                               title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                            <a href="compare.html" data-toggle="tooltip" data-placement="left"
                                               title="Compare"><i class="fa fa-tags"></i></a>
                                        </div>
                                    </div>
                                    <!-- Single Product Item -->

                                    <!-- Single Product Item -->
                                    <div class="single-product-item text-center">
                                        <figure class="product-thumb">
                                            <a href="single-product.html"><img src="assets/img/hair2.jpeg"
                                                                               alt="Products" class="img-fluid"></a>
                                        </figure>

                                        <div class="product-details">
                                            <h2><a href="single-product.html">spanish curls</a></h2>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <span class="price">$152.00</span>
                                            <a href="single-product-normal.html" class="btn btn-add-to-cart">+ See more</a>
                                            <span class="product-bedge">New</span>
                                        </div>

                                        <div class="product-meta">
                                            <button type="button" data-toggle="modal" data-target="#quickView">
                                                <span data-toggle="tooltip" data-placement="left" title="Quick View"><i
                                                        class="fa fa-compress"></i></span>
                                            </button>
                                            <a href="wishlist.html" data-toggle="tooltip" data-placement="left"
                                               title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                            <a href="compare.html" data-toggle="tooltip" data-placement="left"
                                               title="Compare"><i class="fa fa-tags"></i></a>
                                        </div>
                                    </div>
                                    <!-- Single Product Item -->
                                    
                                    <!-- Single Product Item -->
                                    <div class="single-product-item text-center">
                                        <figure class="product-thumb">
                                            <a href="single-product.html"><img src="assets/img/hair8 (10).jpeg"
                                                                               alt="Products" class="img-fluid"></a>
                                        </figure>

                                        <div class="product-details">
                                            <h2><a href="single-product.html">bulb straight hair</a></h2>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <span class="price">$43.00</span>
                                            <a href="single-product-normal.html" class="btn btn-add-to-cart">+ See more</a>
                                            <span class="product-bedge">New</span>
                                        </div>

                                        <div class="product-meta">
                                            <button type="button" data-toggle="modal" data-target="#quickView">
                                                <span data-toggle="tooltip" data-placement="left" title="Quick View"><i
                                                        class="fa fa-compress"></i></span>
                                            </button>
                                            <a href="wishlist.html" data-toggle="tooltip" data-placement="left"
                                               title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                            <a href="compare.html" data-toggle="tooltip" data-placement="left"
                                               title="Compare"><i class="fa fa-tags"></i></a>
                                        </div>
                                    </div>
                                    <!-- Single Product Item -->

                                    <!-- Single Product Item -->
                                    <div class="single-product-item text-center">
                                        <figure class="product-thumb">
                                            <a href="single-product.html"><img src="assets/img/sale (3).jpeg"
                                                                               alt="Products" class="img-fluid"></a>
                                        </figure>

                                        <div class="product-details">
                                            <h2><a href="single-product.html">Asian Wig</a></h2>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half"></i>
                                            </div>
                                            <span class="price">$83.00</span>
                                            <a href="single-product-normal.html" class="btn btn-add-to-cart">+ See more</a>
                                            <span class="product-bedge sale">Sale</span>
                                        </div>

                                        <div class="product-meta">
                                            <button type="button" data-toggle="modal" data-target="#quickView">
                                                <span data-toggle="tooltip" data-placement="left" title="Quick View"><i
                                                        class="fa fa-compress"></i></span>
                                            </button>
                                            <a href="wishlist.html" data-toggle="tooltip" data-placement="left"
                                               title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                            <a href="compare.html" data-toggle="tooltip" data-placement="left"
                                               title="Compare"><i class="fa fa-tags"></i></a>
                                        </div>
                                    </div>
                                    <!-- Single Product Item -->
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="onsale" role="tabpanel" aria-labelledby="onsale-tab">
                            <div class="products-wrapper">
                                <div class="products-carousel owl-carousel">
                                    <!-- Single Product Item -->
                                    <div class="single-product-item text-center">
                                        <figure class="product-thumb">
                                            <a href="single-product.html"><img src="assets/img/sale (4).jpeg"
                                                                               alt="Products" class="img-fluid"></a>
                                        </figure>

                                        <div class="product-details">
                                            <h2><a href="single-product.html">Deepwave</a></h2>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <span class="price">$52.00</span>
                                            <a href="single-product-normal.html" class="btn btn-add-to-cart">+ See more</a>
                                            <span class="product-bedge sale">Sale</span>
                                        </div>

                                        <div class="product-meta">
                                            <button type="button" data-toggle="modal" data-target="#quickView">
                                                <span data-toggle="tooltip" data-placement="left" title="Quick View"><i
                                                        class="fa fa-compress"></i></span>
                                            </button>
                                            <a href="wishlist.html" data-toggle="tooltip" data-placement="left"
                                               title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                            <a href="compare.html" data-toggle="tooltip" data-placement="left"
                                               title="Compare"><i class="fa fa-tags"></i></a>
                                        </div>
                                    </div>
                                    <!-- Single Product Item -->

                                    <!-- Single Product Item -->
                                    <div class="single-product-item text-center">
                                        <figure class="product-thumb">
                                            <a href="single-product.html"><img src="assets/img/sale (1).jpeg"
                                                                               alt="Products" class="img-fluid"></a>
                                        </figure>

                                        <div class="product-details">
                                            <h2><a href="single-product.html">brown highlights</a></h2>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <span class="price">$152.00</span>
                                            <a href="Single-product-normal.html" class="btn btn-add-to-cart">+ See more</a>
                                            <span class="product-bedge sale">Sale</span>
                                        </div>

                                        <div class="product-meta">
                                            <button type="button" data-toggle="modal" data-target="#quickView">
                                                <span data-toggle="tooltip" data-placement="left" title="Quick View"><i
                                                        class="fa fa-compress"></i></span>
                                            </button>
                                            <a href="wishlist.html" data-toggle="tooltip" data-placement="left"
                                               title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                            <a href="compare.html" data-toggle="tooltip" data-placement="left"
                                               title="Compare"><i class="fa fa-tags"></i></a>
                                        </div>
                                    </div>
                                    <!-- Single Product Item -->

                                    <!-- Single Product Item -->
                                    <div class="single-product-item text-center">
                                        <figure class="product-thumb">
                                            <a href="single-product.html"><img src="assets/img/sale (2).jpeg"
                                                                               alt="Products" class="img-fluid"></a>
                                        </figure>

                                        <div class="product-details">
                                            <h2><a href="single-product.html">loose wave</a></h2>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <span class="price">$43.00</span>
                                            <a href="Single-product-normal.html" class="btn btn-add-to-cart">+ See more</a>
                                            <span class="product-bedge sale">Sale</span>
                                        </div>

                                        <div class="product-meta">
                                            <button type="button" data-toggle="modal" data-target="#quickView">
                                                <span data-toggle="tooltip" data-placement="left" title="Quick View"><i
                                                        class="fa fa-compress"></i></span>
                                            </button>
                                            <a href="wishlist.html" data-toggle="tooltip" data-placement="left"
                                               title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                            <a href="compare.html" data-toggle="tooltip" data-placement="left"
                                               title="Compare"><i class="fa fa-tags"></i></a>
                                        </div>
                                    </div>
                                    <!-- Single Product Item -->

                                    <!-- Single Product Item -->
                                    <div class="single-product-item text-center">
                                        <figure class="product-thumb">
                                            <a href="single-product.html"><img src="assets/img/hair8 (16).jpeg"
                                                                               alt="Products" class="img-fluid"></a>
                                        </figure>

                                        <div class="product-details">
                                            <h2><a href="single-product.html">shoulder lenght bone straight</a></h2>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half"></i>
                                            </div>
                                            <span class="price">$83.00</span>
                                            <a href="Single-product-normal.html" class="btn btn-add-to-cart">+ See more</a>
                                            <span class="product-bedge sale">Sale</span>
                                        </div>

                                        <div class="product-meta">
                                            <button type="button" data-toggle="modal" data-target="#quickView">
                                                <span data-toggle="tooltip" data-placement="left" title="Quick View"><i
                                                        class="fa fa-compress"></i></span>
                                            </button>
                                            <a href="wishlist.html" data-toggle="tooltip" data-placement="left"
                                               title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                            <a href="compare.html" data-toggle="tooltip" data-placement="left"
                                               title="Compare"><i class="fa fa-tags"></i></a>
                                        </div>
                                    </div>
                                    <!-- Single Product Item -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Tab Content Area End -->
                </div>
            </div>
        </div>
    </div>
</section>
<!--== New Collection Area End ==-->
<a href="all_products.php" class="btn btn-long-arrow">View More products</a>

<!--== Products by Category Area Start ==-->
<div id="product-categories-area">
    <div class="ruby-container">
        <div class="row">
            <div class="col-lg-6">
                <div class="large-size-cate">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="single-cat-item">
                                <figure class="category-thumb">
                                    <a href="#"><img src="assets/img/shop (1).jpeg" alt="bone straight"
                                                     class="img-fluid"/></a>

                                    <figcaption class="category-name">
                                        <a href="#">loose wave</a>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="single-cat-item">
                                <figure class="category-thumb">
                                    <a href="#"><img src="assets/img/shop (2).jpeg" alt="Hair" class="img-fluid"/></a>

                                    <figcaption class="category-name">
                                        <a href="#">Peruvian hair</a>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="small-size-cate">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="single-cat-item">
                                <figure class="category-thumb">
                                    <a href="#"><img src="assets/img/shop (3).jpeg" alt="Hair"
                                                     class="img-fluid"/></a>

                                    <figcaption class="category-name">
                                        <a href="#">Double drawn</a>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="single-cat-item">
                                <figure class="category-thumb">
                                    <a href="#"><img src="assets/img/shop (4).jpeg" alt="fillipiano"
                                                     class="img-fluid"/></a>

                                    <figcaption class="category-name">
                                        <a href="#">fillipino straight</a>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>

                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== Products by Category Area End ==-->

<!--== New Products Area Start ==-->
<section id="new-products-area" class="p-9">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h2>Bridal Styles</h2>
                    <p>Trending stunning Unique</p>
                </div>
                <!-- Section Title End -->
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="products-wrapper">
                    <div class="new-products-carousel owl-carousel">
                        <!-- Single Product Item -->
                        <div class="single-product-item text-center">
                            <figure class="product-thumb">
                                <a href="single-product.html"><img src="assets/img/bride (1).jpeg" alt="Products"
                                                                   class="img-fluid"></a>
                            </figure>

                            <div class="product-details">
                                <h2><a href="single-product.html">closure Pack</a></h2>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <span class="price">$52.00</span>
                                <a href="Single-product-normal.html" class="btn btn-add-to-cart">+ See more</a>
                                <span class="product-bedge">New</span>
                            </div>

                            <div class="product-meta">
                                <button type="button" data-toggle="modal" data-target="#quickView">
                                    <span data-toggle="tooltip" data-placement="left" title="Quick View"><i
                                            class="fa fa-compress"></i></span>
                                </button>
                                <a href="wishlist.html" data-toggle="tooltip" data-placement="left"
                                   title="Add to Wishlist"><i
                                        class="fa fa-heart-o"></i></a>
                                <a href="compare.html" data-toggle="tooltip" data-placement="left" title="Compare"><i
                                        class="fa fa-tags"></i></a>
                            </div>
                        </div>
                        <!-- Single Product Item -->

                        <!-- Single Product Item -->
                        <div class="single-product-item text-center">
                            <figure class="product-thumb">
                                <a href="single-product.html"><img src="assets/img/bride (2).jpeg" alt="Products"
                                                                   class="img-fluid"></a>
                            </figure>

                            <div class="product-details">
                                <h2><a href="single-product.html">Pixie Pack</a></h2>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <span class="price">$152.00</span>
                                <a href="Single-product-normal.html" class="btn btn-add-to-cart">+ See more</a>
                                <span class="product-bedge">New</span>
                            </div>

                            <div class="product-meta">
                                <button type="button" data-toggle="modal" data-target="#quickView">
                                    <span data-toggle="tooltip" data-placement="left" title="Quick View"><i
                                            class="fa fa-compress"></i></span>
                                </button>
                                <a href="wishlist.html" data-toggle="tooltip" data-placement="left"
                                   title="Add to Wishlist"><i
                                        class="fa fa-heart-o"></i></a>
                                <a href="compare.html" data-toggle="tooltip" data-placement="left" title="Compare"><i
                                        class="fa fa-tags"></i></a>
                            </div>
                        </div>
                        <!-- Single Product Item -->

                        <!-- Single Product Item -->
                        <div class="single-product-item text-center">
                            <figure class="product-thumb">
                                <a href="single-product.html"><img src="assets/img/bride (3).jpeg" alt="Products"
                                                                   class="img-fluid"></a>
                            </figure>

                            <div class="product-details">
                                <h2><a href="single-product.html">Frontal pack</a></h2>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <span class="price">$43.00</span>
                                <a href="Single-product-normal.html" class="btn btn-add-to-cart">+ See more</a>
                                <span class="product-bedge">New</span>
                            </div>

                            <div class="product-meta">
                                <button type="button" data-toggle="modal" data-target="#quickView">
                                    <span data-toggle="tooltip" data-placement="left" title="Quick View"><i
                                            class="fa fa-compress"></i></span>
                                </button>
                                <a href="wishlist.html" data-toggle="tooltip" data-placement="left"
                                   title="Add to Wishlist"><i
                                        class="fa fa-heart-o"></i></a>
                                <a href="compare.html" data-toggle="tooltip" data-placement="left" title="Compare"><i
                                        class="fa fa-tags"></i></a>
                            </div>
                        </div>
                        <!-- Single Product Item -->

                        <!-- Single Product Item -->
                        <div class="single-product-item text-center">
                            <figure class="product-thumb">
                                <a href="single-product.html"><img src="assets/img/bride (4).jpeg" alt="Products"
                                                                   class="img-fluid"></a>
                            </figure>

                            <div class="product-details">
                                <h2><a href="single-product.html">frontal and closure pack</a></h2>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half"></i>
                                </div>
                                <span class="price">$83.00</span>
                                <a href="Single-product-normal.html" class="btn btn-add-to-cart">+ See more</a>
                                <span class="product-bedge sale">Sale</span>
                            </div>

                            <div class="product-meta">
                                <button type="button" data-toggle="modal" data-target="#quickView">
                                    <span data-toggle="tooltip" data-placement="left" title="Quick View"><i
                                            class="fa fa-compress"></i></span>
                                </button>
                                <a href="wishlist.html" data-toggle="tooltip" data-placement="left"
                                   title="Add to Wishlist"><i
                                        class="fa fa-heart-o"></i></a>
                                <a href="compare.html" data-toggle="tooltip" data-placement="left" title="Compare"><i
                                        class="fa fa-tags"></i></a>
                            </div>
                        </div>
                        <!-- Single Product Item -->

                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== New Products Area End ==-->

<!--== Testimonial Area Start ==-->
<section id="testimonial-area">
    <div class="ruby-container">
        <div class="testimonial-wrapper">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h2>What People Say</h2>
                        <p>Testimonials</p>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-7 m-auto text-center">
                    <div class="testimonial-content-wrap">
                        <div id="testimonialCarousel" class="owl-carousel">
                            <div class="single-testimonial-item">
                                <p>These guys have been absolutely outstanding. When I needed them they came through in
                                    a big way! I know that if you buy this theme, you'll get the one thing we all look
                                    for when we buy on Themeforest, and that's real support for the craziest of
                                    requests!</p>

                                <h3 class="client-name">Luis Manrata</h3>
                                <span class="client-email">you@email.here</span>
                            </div>

                            <div class="single-testimonial-item">
                                <p>These guys have been absolutely outstanding. When I needed them they came through in
                                    a big way! I know that if you buy this theme, you'll get the one thing we all look
                                    for when we buy on Themeforest, and that's real support for the craziest of
                                    requests!</p>

                                <h3 class="client-name">John Dibba</h3>
                                <span class="client-email">you@email.here</span>
                            </div>

                            <div class="single-testimonial-item">
                                <p>These guys have been absolutely outstanding. When I needed them they came through in
                                    a big way! I know that if you buy this theme, you'll get the one thing we all look
                                    for when we buy on Themeforest, and that's real support for the craziest of
                                    requests!</p>

                                <h3 class="client-name">Alex Tuntuni</h3>
                                <span class="client-email">you@email.here</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== Testimonial Area End ==-->

<!--== Blog Area Start ==-->
<section id="blog-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h2>From Our Blog</h2>
                    <p>Share your latest posts or best articles will post here.</p>
                </div>
                <!-- Section Title End -->
            </div>
        </div>

        <div class="blog-content-wrap">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <!-- Single Blog Item Start -->
                    <div class="single-blog-wrap">
                        <figure class="blog-thumb">
                            <a href="single-blog.html"><img src="assets/img/blog-thumb.jpg" alt="blog"
                                                            class="img-fluid"/></a>
                            <figcaption class="blog-icon">
                                <a href="single-blog.html"><i class="fa fa-file-image-o"></i></a>
                            </figcaption>
                        </figure>

                        <div class="blog-details">
                            <h3><a href="single-blog.html">Mirum est notare quam</a></h3>
                            <span class="post-date">20/June/2018</span>
                            <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit
                                litterarum.</p>
                            <a href="single-blog.html" class="btn-long-arrow">Read More</a>
                        </div>
                    </div>
                    <!-- Single Blog Item End -->
                </div>

                <div class="col-lg-6 col-md-6">
                    <!-- Single Blog Item Start -->
                    <div class="single-blog-wrap">
                        <figure class="blog-thumb">
                            <a href="single-blog.html"><img src="assets/img/blog-thumb-2.jpg" alt="blog"
                                                            class="img-fluid"/></a>
                            <figcaption class="blog-icon">
                                <a href="single-blog.html"><i class="fa fa-file-image-o"></i></a>
                            </figcaption>
                        </figure>

                        <div class="blog-details">
                            <h3><a href="single-blog.html">Mirum est notare quam</a></h3>
                            <span class="post-date">20/June/2018</span>
                            <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit
                                litterarum.</p>
                            <a href="single-blog.html" class="btn-long-arrow">Read More</a>
                        </div>
                    </div>
                    <!-- Single Blog Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Single Blog Item Start -->
                    <div class="single-blog-wrap">
                        <figure class="blog-thumb">
                            <a href="single-blog.html"><img src="assets/img/blog-thumb-3.jpg" alt="blog"
                                                            class="img-fluid"/></a>
                            <figcaption class="blog-icon">
                                <a href="single-blog.html"><i class="fa fa-file-image-o"></i></a>
                            </figcaption>
                        </figure>

                        <div class="blog-details">
                            <h3><a href="single-blog.html">Mirum est notare quam</a></h3>
                            <span class="post-date">20/June/2018</span>
                            <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit
                                litterarum.</p>
                            <a href="single-blog.html" class="btn-long-arrow">Read More</a>
                        </div>
                    </div>
                    <!-- Single Blog Item End -->
                </div>
            </div>
        </div>
    </div>
</section>
<!--== Blog Area End ==-->

<!--== Newsletter Area Start ==-->
<section id="newsletter-area" class="p-9">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h2>Join The Newsletter</h2>
                    <p>Sign Up for Our Newsletter</p>
                </div>
                <!-- Section Title End -->
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8 m-auto">
                <div class="newsletter-form-wrap">
                    <form id="subscribe-form" action="https://d29u17ylf1ylz9.cloudfront.net/ruby-v2/ruby/assets/php/subscribe.php" method="post">
                        <input id="subscribe" type="email" name="email" placeholder="Enter your Email  Here" required/>
                        <button type="submit" class="btn-long-arrow">Subscribe</button>
                        <div id="result"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== Newsletter Area End ==-->

<!-- Footer Area Start -->
<footer id="footer-area">
    <!-- Footer Call to Action Start -->
    <div class="footer-callto-action">
        <div class="ruby-container">
            <div class="callto-action-wrapper">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <!-- Single Call-to Action Start -->
                        <div class="single-callto-action d-flex">
                            <figure class="callto-thumb">
                                <img src="assets/img/air-plane.png" alt="WorldWide Shipping"/>
                            </figure>
                            <div class="callto-info">
                                <h2>Free Shipping Worldwide</h2>
                                <p>On order over $150 - 7 days a week</p>
                            </div>
                        </div>
                        <!-- Single Call-to Action End -->
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <!-- Single Call-to Action Start -->
                        <div class="single-callto-action d-flex">
                            <figure class="callto-thumb">
                                <img src="assets/img/support.png" alt="Support"/>
                            </figure>
                            <div class="callto-info">
                                <h2>24/7 CUSTOMER SERVICE</h2>
                                <p>Call us 24/7 at 000 - 123 - 456k</p>
                            </div>
                        </div>
                        <!-- Single Call-to Action End -->
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <!-- Single Call-to Action Start -->
                        <div class="single-callto-action d-flex">
                            <figure class="callto-thumb">
                                <img src="assets/img/money-back.png" alt="Money Back"/>
                            </figure>
                            <div class="callto-info">
                                <h2>MONEY BACK Guarantee!</h2>
                                <p>Send within 30 days</p>
                            </div>
                        </div>
                        <!-- Single Call-to Action End -->
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <!-- Single Call-to Action Start -->
                        <div class="single-callto-action d-flex">
                            <figure class="callto-thumb">
                                <img src="assets/img/cog.png" alt="Guide"/>
                            </figure>
                            <div class="callto-info">
                                <h2>SHOPPING GUIDE</h2>
                                <p>Quis Eum Iure Reprehenderit</p>
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
                            <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="logo"/></a>
                            <p>Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum</p>

                            <div class="footer-social-icons">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-flickr"></i></a>
                            </div>

                            <a href="#"><img src="assets/img/payment.png" alt="Payment Method"/></a>
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
                                <a href="#"><img src="assets/img/hair7.jpeg" alt="Gallery"/></a>
                            </div>
                            <div class="gallery-item">
                                <a href="#"><img src="assets/img/hair8 (1).jpeg" alt="Gallery"/></a>
                            </div>
                            <div class="gallery-item">
                                <a href="#"><img src="assets/img/hair8 (11).jpeg" alt="Gallery"/></a>
                            </div>
                            <div class="gallery-item">
                                <a href="#"><img src="assets/img/braids (2).jpeg" alt="Gallery"/></a>
                            </div>
                            <div class="gallery-item">
                                <a href="#"><img src="assets/img/braids (4).jpeg" alt="Gallery"/></a>
                            </div>
                            <div class="gallery-item">
                                <a href="#"><img src="assets/img/hair8 (14).jpeg" alt="Gallery"/></a>
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
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright Area End -->

</footer>
<!-- Footer Area End -->


<!-- Start All Modal Content -->
<!--== Product Quick View Modal Area Wrap ==-->
<div class="modal fade" id="quickView" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><img src="assets/img/cancel.png" alt="Close" class="img-fluid"/></span>
            </button>
            <div class="modal-body">
                <div class="quick-view-content single-product-page-content">
                    <div class="row">
                        <!-- Product Thumbnail Start -->
                        <div class="col-lg-5 col-md-6">
                            <div class="product-thumbnail-wrap">
                                <div class="product-thumb-carousel owl-carousel">
                                    <div class="single-thumb-item">
                                        <a href="single-product.html"><img class="img-fluid"
                                                                           src="assets/img/hair7.jpeg"
                                                                           alt="Product"/></a>
                                    </div>

                                    <div class="single-thumb-item">
                                        <a href="single-product.html"><img class="img-fluid"
                                                                           src="assets/img/hair8 (1).jpeg"
                                                                           alt="Product"/></a>
                                    </div>

                                    <div class="single-thumb-item">
                                        <a href="single-product.html"><img class="img-fluid"
                                                                           src="assets/img/hair8 (2).jpeg"
                                                                           alt="Product"/></a>
                                    </div>

                                    <div class="single-thumb-item">
                                        <a href="single-product.html"><img class="img-fluid"
                                                                           src="assets/img/hair8 (5).jpeg"
                                                                           alt="Product"/></a>
                                    </div>
                                    <div class="single-thumb-item">
                                        <a href="single-product.html"><img class="img-fluid"
                                                                           src="assets/img/hair8 (3).jpeg"
                                                                           alt="Product"/></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product Thumbnail End -->

                        <!-- Product Details Start -->
                        <div class="col-lg-7 col-md-6 mt-5 mt-md-0">
                            <div class="product-details">
                                <h2><a href="single-product.html">Crown Summit Backpack</a></h2>

                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>

                                <span class="price">$52.00</span>

                                <div class="product-info-stock-sku">
                                    <span class="product-stock-status">In Stock</span>
                                    <span class="product-sku-status ml-5"><strong>SKU</strong> MH03</span>
                                </div>

                                <p class="products-desc">Ideal for cold-weathered training worked lorem ipsum outdoors,
                                    the Chaz Hoodie promises superior warmth with every wear. Thick material blocks out
                                    the wind as ribbed cuffs and bottom band seal in body heat Lorem ipsum dolor sit
                                    amet, consectetur adipisicing elit. Enim, reprehenderit.</p>
                                <div class="shopping-option-item">
                                    <h4>Color</h4>
                                    <ul class="color-option-select d-flex">
                                        <li class="color-item black">
                                            <div class="color-hvr">
                                                <span class="color-fill"></span>
                                                <span class="color-name">Black</span>
                                            </div>
                                        </li>

                                        <li class="color-item green">
                                            <div class="color-hvr">
                                                <span class="color-fill"></span>
                                                <span class="color-name">green</span>
                                            </div>
                                        </li>

                                        <li class="color-item orange">
                                            <div class="color-hvr">
                                                <span class="color-fill"></span>
                                                <span class="color-name">Orange</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-quantity d-flex align-items-center">
                                    <div class="quantity-field">
                                        <label for="qty">Qty</label>
                                        <input type="number" id="qty" min="1" max="100" value="1"/>
                                    </div>

                                    <a href="single-product-normal.html" class="btn btn-add-to-cart">See more</a>
                                </div>
                            </div>
                        </div>
                        <!-- Product Details End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== Product Quick View Modal Area End ==-->
<!-- End All Modal Content -->

<!-- Scroll to Top Start -->
<a href="#" class="scrolltotop"><i class="fa fa-angle-up"></i></a>
<!-- Scroll to Top End -->


<!--=======================Javascript============================-->
<!--=== Jquery Min Js ===-->
<script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
<!--=== Jquery Migrate Min Js ===-->
<script src="assets/js/vendor/jquery-migrate-1.4.1.min.js"></script>
<!--=== Popper Min Js ===-->
<script src="assets/js/vendor/popper.min.js"></script>
<!--=== Bootstrap Min Js ===-->
<script src="assets/js/vendor/bootstrap.min.js"></script>
<!--=== Plugins Min Js ===-->
<script src="assets/js/plugins.js"></script>

<!--=== Active Js ===-->
<script src="assets/js/active.js"></script>
</body>

</html>