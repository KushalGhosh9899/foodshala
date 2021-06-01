<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>FoodShala</title>

  <!-- ::::::::::::::Favicon icon::::::::::::::-->
  <!-- Favicon -->
  <link rel="icon" href="images/favicon.png">

  <!-- CSS -->
  <link rel="stylesheet" href="styles/main.css">

  <!-- ::::::::::::::All CSS Files here :::::::::::::: -->
  <!-- Vendor CSS -->
  <link rel="stylesheet" href="assets/css/vendor/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/vendor/ionicons.css">
  <link rel="stylesheet" href="assets/css/vendor/simple-line-icons.css">
  <link rel="stylesheet" href="assets/css/vendor/jquery-ui.min.css">

  <!-- Plugin CSS -->
  <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css">
  <link rel="stylesheet" href="assets/css/plugins/animate.min.css">
  <link rel="stylesheet" href="assets/css/plugins/nice-select.css">
  <link rel="stylesheet" href="assets/css/plugins/venobox.min.css">
  <link rel="stylesheet" href="assets/css/plugins/jquery.lineProgressbar.css">
  <link rel="stylesheet" href="assets/css/plugins/aos.min.css">

  <!-- Main CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="styles/login.css">


</head>

<body onload="loadPreloader()">
  <!-- Preloader -->
  <div id="loading"></div>
  <!-- Start Header Area -->
  <header class="header-section d-none d-xl-block">
    <div class="header-wrapper">
      <div class="header-bottom header-bottom-color--black section-fluid sticky-header sticky-color--black">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12 d-flex align-items-center justify-content-between">
              <!-- Start Header Logo -->
              <div class="header-logo">
                <div class="logo">
                  <a href="index">
                    <img src="images/logo.png" alt=""></a>
                </div>
              </div>
              <!-- End Header Logo -->

              <!-- Start Header Main Menu -->
              <div class="main-menu menu-color--white menu-hover-color--pink">
                <nav>
                  <ul>
                    <li class="has-dropdown">
                      <a class="active main-menu-link" href="index">Home</a>
                    </li>

                    <li class="has-dropdown">
                      <a class="active main-menu-link" href="shop-full-width">Menu <i class="fa fa-angle-down"></i></a>
                      <!-- Sub Menu -->
                      <ul class="sub-menu">
                        <li><a href="index">All Dishes</a></li>
                        <li><a href="index-2">Veg Dishes</a></li>
                        <li><a href="index-3">Non Veg Dishes</a></li>
                      </ul>
                    </li>

                    <li>
                      <a href="about-us">About Us</a>
                    </li>

                    <li>
                      <a href="contact-us">Contact Us</a>
                    </li>
                    <li>
                      <a href="signup">Signup</a>
                    </li>
                  </ul>
                </nav>
              </div>
              <!-- End Header Main Menu Start -->

              <!-- Start Header Action Link -->
              <ul class="header-action-link action-color--white action-hover-color--pink">
                <li>
                  <a href="#offcanvas-add-cart" class="offcanvas-toggle">
                    <i class="icon-bag"></i>
                    <span class="item-count">3</span>
                  </a>
                </li>               
                <li>
                  <a href="logout">
                    <i class="icon-power"></i>
                  </a>
                </li>               
                <li>
                  <a href="signup">
                    <i class="icon-user"></i>
                  </a>
                </li>
                <li>
                  <a href="#search">
                    <i class="icon-magnifier"></i>
                  </a>
                </li>
                <li id="toggle-menu">
                  <a href="#offcanvas-about" class="offacnvas offside-about offcanvas-toggle">
                    <i class="icon-menu"></i>
                  </a>
                </li> 
              </ul>
              <!-- End Header Action Link -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- Start Header Area -->

  <!-- Start Mobile Header -->
  <div class="mobile-header  mobile-header-bg-color--black section-fluid d-lg-block d-xl-none">
    <div class="container">
      <div class="row">
        <div class="col-12 d-flex align-items-center justify-content-between">
          <!-- Start Mobile Left Side -->
          <div class="mobile-header-left">
            <ul class="mobile-menu-logo">
              <li>
                <a href="index">
                  <div class="logo">
                    <img src="images/logo.png" alt="">
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <!-- End Mobile Left Side -->

          <!-- Start Mobile Right Side -->
          <div class="mobile-right-side">
            <ul class="header-action-link action-color--white action-hover-color--pink">
              <li>
                <a href="#search">
                  <i class="icon-magnifier"></i>
                </a>
              </li>
              <li>
                <a href="#offcanvas-wishlish" class="offcanvas-toggle">
                  <i class="icon-heart"></i>
                  <span class="item-count">3</span>
                </a>
              </li>
              <li>
                <a href="#offcanvas-add-cart" class="offcanvas-toggle">
                  <i class="icon-bag"></i>
                  <span class="item-count">3</span>
                </a>
              </li>
              <li>
                <a href="#mobile-menu-offcanvas" class="offcanvas-toggle offside-menu offside-menu-color--black">
                  <i class="icon-menu"></i>
                </a>
              </li>
            </ul>
          </div>
          <!-- End Mobile Right Side -->
        </div>
      </div>
    </div>
  </div>
  <!-- End Mobile Header -->

  <!--  Start Offcanvas Mobile Menu Section -->
  <div id="mobile-menu-offcanvas" class="offcanvas offcanvas-rightside offcanvas-mobile-menu-section">
    <!-- Start Offcanvas Header -->
    <div class="offcanvas-header text-right">
      <button class="offcanvas-close"><i class="ion-android-close"></i></button>
    </div> <!-- End Offcanvas Header -->
    <!-- Start Offcanvas Mobile Menu Wrapper -->
    <div class="offcanvas-mobile-menu-wrapper">
      <!-- Start Mobile Menu  -->
      <div class="mobile-menu-bottom">
        <!-- Start Mobile Menu Nav -->
        <div class="offcanvas-menu">
          <ul>
            <li>
              <a href="index"><span>Home</span></a>
            </li>
            <li>
              <a href="#"><span>Menu</span></a>
              <ul class="mobile-sub-menu">
                <li><a href="my-account">My Account</a></li>
              </ul>
            </li>
            <li><a href="about-us">About Us</a></li>
            <li><a href="contact-us">Contact Us</a></li>
          </ul>
        </div> <!-- End Mobile Menu Nav -->
      </div> <!-- End Mobile Menu -->

      <!-- Start Mobile contact Info -->
      <div class="mobile-contact-info">
        <div class="logo">
          <a href="index"><img src="assets/images/logo/logo_white.png" alt=""></a>
        </div>

        <address class="address">
          <span>Address: Your address goes here.</span>
          <span>Call Us: 0123456789, 0123456789</span>
          <span>Email: demo@example.com</span>
        </address>

        <ul class="social-link">
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-instagram"></i></a></li>
          <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
        </ul>

        <ul class="user-link">
          <li><a href="wishlist">Wishlist</a></li>
          <li><a href="cart">Cart</a></li>
          <li><a href="checkout">Checkout</a></li>
        </ul>
      </div>
      <!-- End Mobile contact Info -->

    </div> <!-- End Offcanvas Mobile Menu Wrapper -->
  </div>
  <!-- ...:::: End Offcanvas Mobile Menu Section:::... -->

  <!-- Start Offcanvas Mobile Menu Section -->
  <div id="offcanvas-about" class="offcanvas offcanvas-rightside offcanvas-mobile-about-section">
    <!-- Start Offcanvas Header -->
    <div class="offcanvas-header text-right">
      <button class="offcanvas-close"><i class="ion-android-close"></i></button>
    </div> <!-- End Offcanvas Header -->
    <!-- Start Offcanvas Mobile Menu Wrapper -->
    <!-- Start Mobile contact Info -->
    <div class="mobile-contact-info">
      <div class="logo">
        <a href="index"><img src="assets/images/logo/logo_white.png" alt=""></a>
      </div>

      <address class="address">
        <span>Address: Your address goes here.</span>
        <span>Call Us: 0123456789, 0123456789</span>
        <span>Email: demo@example.com</span>
      </address>

      <ul class="social-link">
        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
      </ul>

      <ul class="user-link">
        <li><a href="wishlist">Wishlist</a></li>
        <li><a href="cart">Cart</a></li>
        <li><a href="checkout">Checkout</a></li>
      </ul>
    </div>
    <!-- End Mobile contact Info -->
  </div>
  <!-- ...:::: End Offcanvas Mobile Menu Section:::... -->

  <!-- Start Offcanvas Addcart Section -->
  <div id="offcanvas-add-cart" class="offcanvas offcanvas-rightside offcanvas-add-cart-section">
    <!-- Start Offcanvas Header -->
    <div class="offcanvas-header text-right">
      <button class="offcanvas-close"><i class="ion-android-close"></i></button>
    </div>
    <!-- End Offcanvas Header -->

    <!-- Start  Offcanvas Addcart Wrapper -->
    <div class="offcanvas-add-cart-wrapper">
      <h4 class="offcanvas-title">Shopping Cart</h4>
      <ul class="offcanvas-cart">
        <li class="offcanvas-cart-item-single">
          <div class="offcanvas-cart-item-block">
            <a href="#" class="offcanvas-cart-item-image-link">
              <img src="assets/images/product/default/home-3/default-1.jpg" alt="" class="offcanvas-cart-image">
            </a>
            <div class="offcanvas-cart-item-content">
              <a href="#" class="offcanvas-cart-item-link">Car Wheel</a>
              <div class="offcanvas-cart-item-details">
                <span class="offcanvas-cart-item-details-quantity">1 x </span>
                <span class="offcanvas-cart-item-details-price">$49.00</span>
              </div>
            </div>
          </div>
          <div class="offcanvas-cart-item-delete text-right">
            <a href="#" class="offcanvas-cart-item-delete"><i class="fa fa-trash-o"></i></a>
          </div>
        </li>
        <li class="offcanvas-cart-item-single">
          <div class="offcanvas-cart-item-block">
            <a href="#" class="offcanvas-cart-item-image-link">
              <img src="assets/images/product/default/home-2/default-1.jpg" alt="" class="offcanvas-cart-image">
            </a>
            <div class="offcanvas-cart-item-content">
              <a href="#" class="offcanvas-cart-item-link">Car Vails</a>
              <div class="offcanvas-cart-item-details">
                <span class="offcanvas-cart-item-details-quantity">3 x </span>
                <span class="offcanvas-cart-item-details-price">$500.00</span>
              </div>
            </div>
          </div>
          <div class="offcanvas-cart-item-delete text-right">
            <a href="#" class="offcanvas-cart-item-delete"><i class="fa fa-trash-o"></i></a>
          </div>
        </li>
        <li class="offcanvas-cart-item-single">
          <div class="offcanvas-cart-item-block">
            <a href="#" class="offcanvas-cart-item-image-link">
              <img src="assets/images/product/default/home-3/default-1.jpg" alt="" class="offcanvas-cart-image">
            </a>
            <div class="offcanvas-cart-item-content">
              <a href="#" class="offcanvas-cart-item-link">Shock Absorber</a>
              <div class="offcanvas-cart-item-details">
                <span class="offcanvas-cart-item-details-quantity">1 x </span>
                <span class="offcanvas-cart-item-details-price">$350.00</span>
              </div>
            </div>
          </div>
          <div class="offcanvas-cart-item-delete text-right">
            <a href="#" class="offcanvas-cart-item-delete"><i class="fa fa-trash-o"></i></a>
          </div>
        </li>
      </ul>
      <div class="offcanvas-cart-total-price">
        <span class="offcanvas-cart-total-price-text">Subtotal:</span>
        <span class="offcanvas-cart-total-price-value">$170.00</span>
      </div>
      <ul class="offcanvas-cart-action-button">
        <li><a href="cart" class="btn btn-block btn-pink">View Cart</a></li>
        <li><a href="compare" class=" btn btn-block btn-pink mt-5">Checkout</a></li>
      </ul>
    </div>
    <!-- End  Offcanvas Addcart Wrapper -->

  </div>
  <!-- End  Offcanvas Addcart Section -->

  <!-- Start Offcanvas Search Bar Section -->
  <div id="search" class="search-modal">
    <button type="button" class="close">×</button>
    <form>
      <input type="search" placeholder="type keyword(s) here" />
      <button type="submit" class="btn btn-lg btn-pink">Search</button>
    </form>
  </div>
  <!-- End Offcanvas Search Bar Section -->

  <!-- Offcanvas Overlay -->
  <div class="offcanvas-overlay"></div>