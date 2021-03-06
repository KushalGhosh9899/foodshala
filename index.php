<?php
require 'header.php';
?>

<head>
    <title>
        FoodShala
    </title>
</head>

<div class="home-container">

    <div class="left-column">
        <h1 class="home-txt">
            Confused what to <span>eat?</span>
        </h1>

        <div class="scroll-div-btn">
            <a href="#scroll-down">
                <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_fau2luju.json" background="transparent" speed="1" style="width: 100%; height: 100%;" loop autoplay></lottie-player>
                <p class="scroll-div-txt">Scroll Down</p>
            </a>
        </div>
    </div>

    <div class="right-column">
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        <lottie-player src="https://assets3.lottiefiles.com/packages/lf20_tll0j4bb.json" background="transparent" speed="1" style="width:100%; height: 100%;" loop autoplay></lottie-player>
    </div>

</div>

<!-- Start Banner Section -->
<div class="banner-section">
    <div class="banner-wrapper clearfix">
        <!-- Start Banner Single Item -->
        <a href="product-details-default.html">
            <div class="banner-single-item banner-style-8 banner-animation banner-color--green float-left" data-aos="fade-up" data-aos-delay="0">
                <div class="image">
                    <img class="img-fluid" src="assets/images/banner/banner-style-8-img-1.png" alt="">
                </div>
            </div>
        </a>
        <!-- End Banner Single Item -->
        <!-- Start Banner Single Item -->
        <a href="product-details-default.html">
            <div class="banner-single-item banner-style-8 banner-animation banner-color--green float-left" data-aos="fade-up" data-aos-delay="200">
                <div class="image">
                    <img class="img-fluid" src="assets/images/banner/banner-style-8-img-2.png" alt="">
                </div>
            </div>
        </a>
        <!-- End Banner Single Item -->
    </div>
</div>
<!-- End Banner Section -->


<!-- Start Product Default Slider Section -->
<div class="product-default-slider-section section-fluid section-inner-bg section-inner-bg-white">
    <!-- Start Section Content Text Area -->
    <div class="section-title-wrapper" data-aos="fade-up" data-aos-delay="0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-content-gap">
                        <div class="secton-content">
                            <h3 class="section-title">BEST VEG SELLERS</h3>
                            <p>Our All Veg Dishes Line up is Here.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Section Content Text Area -->
    <div class="product-wrapper" data-aos="fade-up" data-aos-delay="0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product-slider-default-1row default-slider-nav-arrow">
                        <!-- Slider main container -->
                        <div class="swiper-container product-default-slider-4grid-1row">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- End Product Default Single Item -->


                                <!-- Start Product Default Single Item -->
                                <?php
                                require_once 'includes/db.inc.php';
                                $sql = "SELECT * FROM products where foodType='Veg' LIMIT 10";
                                $result = $conn->query($sql);
                                if ($conn) {
                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                            echo '
                                            <div class="product-default-single-item product-color--pink swiper-slide">
                                    <div class="image-box">
                                        <a href="product-details-default.html" class="image-link">
                                            <img class="product-image-veg" src="'.$row['productImage'].'" alt="">
                                            <img class="product-image-veg"  src="'.$row['image3'].'" alt="">
                                        </a>
                                        <div class="tag">
                                            <span class="veg">Veg</span>
                                        </div>
                                        <div class="action-link">
                                            <div class="action-link-left">
                                                <a href="#">Order Now</a>
                                            </div>
                                            <div class="action-link-right">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modalAddcart">
                                                <i class="icon-bag"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <div class="content-left">
                                            <h6 class="title"><a href="product-details-default.html">'.$row['productName'].'</a></h6>
                                            <ul class="review-star">
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="empty"><i class="ion-android-star"></i></li>
                                                </ul>
                                        </div>
                                        <div class="content-right">
                                            <span class="price">Rs '.$row['price'].'</span>
                                        </div>

                                    </div>
                                </div>
                                            ';
                                        }
                                    }
                                }

                                ?>
                                <!-- End Product Default Single Item -->

                            </div>
                        </div>
                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Product Default Slider Section -->

<!-- Start Product Default Slider Section -->
<div class="product-default-slider-section section-fluid section-inner-bg">
    <!-- Start Section Content Text Area -->
    <div class="section-title-wrapper" data-aos="fade-up" data-aos-delay="0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-content-gap">
                        <div class="secton-content">
                            <h3 class="section-title">BEST NON-VEG SELLERS</h3>
                            <p>Our All Non-Veg Dishes Line up is Here.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Section Content Text Area -->
    <div class="product-wrapper" data-aos="fade-up" data-aos-delay="0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product-slider-default-1row default-slider-nav-arrow">
                        <!-- Slider main container -->
                        <div class="swiper-container product-default-slider-4grid-1row">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- End Product Default Single Item -->


                                <!-- Start Product Default Single Item -->
                                <?php
                                require_once 'includes/db.inc.php';
                                $sql = "SELECT * FROM products where foodType='Non Veg' LIMIT 10";
                                $result = $conn->query($sql);
                                if ($conn) {
                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                            echo '
                                            <div class="product-default-single-item product-color--pink swiper-slide">
                                    <div class="image-box">
                                        <a href="product-details-default.html" class="image-link">
                                            <img class="product-image-veg" src="'.$row['productImage'].'" alt="">
                                            <img class="product-image-veg"  src="'.$row['image3'].'" alt="">
                                        </a>
                                        <div class="tag">
                                            <span class="non-veg">Non Veg</span>
                                        </div>
                                        <div class="action-link">
                                            <div class="action-link-left">
                                                <a href="#">Order Now</a>
                                            </div>
                                            <div class="action-link-right">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modalAddcart">
                                                <i class="icon-bag"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <div class="content-left">
                                            <h6 class="title"><a href="product-details-default.html">'.$row['productName'].'</a></h6>
                                            <ul class="review-star">
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="empty"><i class="ion-android-star"></i></li>
                                                </ul>
                                        </div>
                                        <div class="content-right">
                                            <span class="price">Rs '.$row['price'].'</span>
                                        </div>

                                    </div>
                                </div>
                                            ';
                                        }
                                    }
                                }

                                ?>
                                <!-- End Product Default Single Item -->

                            </div>
                        </div>
                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Product Default Slider Section -->

<!-- Why US Container -->
<h1 id="#scroll-down" class="whyus-txt">
    Why <span>US?</span>
</h1>

<!-- Dishes Container -->
<div class="whyus-container">

    <div class="right-column">
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        <lottie-player src="https://assets4.lottiefiles.com/packages/lf20_njxltiss.json" background="transparent" speed="1" style="width: 100%; height: 100%;" loop autoplay></lottie-player>
    </div>

    <div class="left-column">
        <h1 class="home-txt">
            Explore Top Rated <span>dishes</span>
        </h1>
    </div>

</div>

<!-- Explore  -->
<div class="whyus-container">

    <div class="left-column">
        <h1 class="home-txt">
            Search from Top <span>restaurants</span>
        </h1>
    </div>

    <div class="right-column">
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        <lottie-player src="https://assets4.lottiefiles.com/private_files/lf30_6yjihjym.json" background="transparent" speed="1" style="width: 100%; height: 100%;" loop autoplay></lottie-player>
    </div>


</div>

<!-- Menu Container -->
<div class="whyus-container">

    <div class="right-column">
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        <lottie-player src="https://assets4.lottiefiles.com/packages/lf20_szviypry.json" background="transparent" speed="1" style="width: 100%; height: 100%;" loop autoplay></lottie-player>
    </div>

    <div class="left-column">
        <h1 class="home-txt">
            Choose From Wide Variety of <span>menu</span>
        </h1>
    </div>

</div>

<!-- Delivery Container -->
<div class="whyus-container">

    <div class="left-column">
        <h1 class="home-txt">
            Very Fast <span>delivery</span>
        </h1>
    </div>
    <div class="right-column">
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        <lottie-player src="https://assets4.lottiefiles.com/packages/lf20_0tt5wF.json" background="transparent" speed="1" style="width: 100%; height: 100%;" loop autoplay></lottie-player>
    </div>

</div>

<!-- Start Banner Section -->
<div class="banner-section">
    <div class="banner-wrapper clearfix">
        <!-- Start Banner Single Item -->
        <a href="product-details-default.html">
            <div class="banner-single-item banner-style-7 banner-animation banner-color--green float-left" data-aos="fade-up" data-aos-delay="0">
                <div class="image">
                    <img class="img-fluid" src="assets/images/banner/banner-style-7-img-1.png" alt="">
                </div>
            </div>
        </a>
        <!-- End Banner Single Item -->
        <!-- Start Banner Single Item -->
        <a href="product-details-default.html">
            <div class="banner-single-item banner-style-7 banner-animation banner-color--green float-left" data-aos="fade-up" data-aos-delay="200">
                <div class="image">
                    <img class="img-fluid" src="assets/images/banner/banner-style-7-img-2.png" alt="">
                </div>
            </div>
        </a>
        <!-- End Banner Single Item -->
        <!-- Start Banner Single Item -->
        <a href="product-details-default.html">
            <div class="banner-single-item banner-style-7 banner-animation banner-color--green float-left" data-aos="fade-up" data-aos-delay="400">
                <div class="image">
                    <img class="img-fluid" src="assets/images/banner/banner-style-7-img-3.png" alt="">
                </div>
            </div>
        </a>
        <!-- End Banner Single Item -->
    </div>
</div>
<!-- End Banner Section -->

<!-- Start Product Default Slider Section -->
<div class="product-default-slider-section section-fluid section-inner-bg">
    <!-- Start Section Content Text Area -->
    <div class="section-title-wrapper" data-aos="fade-up" data-aos-delay="0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-content-gap">
                        <div class="secton-content">
                            <h3 class="section-title">WIDE VARIETY OF DISHES</h3>
                            <p>Have a look at our different variety of Dishes lineup.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Section Content Text Area -->
    <div class="product-wrapper" data-aos="fade-up" data-aos-delay="0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product-slider-default-1row default-slider-nav-arrow">
                        <!-- Slider main container -->
                        <div class="swiper-container product-default-slider-4grid-1row">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- End Product Default Single Item -->                                

                                <!-- Start Product Default Single Item -->
                                <?php
                                require_once 'includes/db.inc.php';
                                $sql = "SELECT * FROM products LIMIT 20";
                                $result = $conn->query($sql);
                                if ($conn) {
                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                            echo '
                                            <div class="product-default-single-item product-color--pink swiper-slide">
                                    <div class="image-box">
                                        <a href="product-details-default.html" class="image-link">
                                            <img class="product-image-veg" src="'.$row['productImage'].'" alt="">
                                            <img class="product-image-veg" src="'.$row['image3'].'" alt="">
                                        </a>
                                        ';
                                        if($row['foodType']=='Veg'){
                                            echo'
                                            <div class="tag">
                                                <span class="veg">Veg</span>
                                            </div>
                                            ';
                                        }
                                        else{
                                            echo '
                                            <div class="tag">
                                                <span class="non-veg">Non Veg</span>
                                            </div>
                                            ';

                                        }
                                        echo'
                                        <div class="action-link">
                                            <div class="action-link-left">
                                                <a href="#">Order Now</a>
                                            </div>
                                            <div class="action-link-right">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modalAddcart">
                                                <i class="icon-bag"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <div class="content-left">
                                            <h6 class="title"><a href="product-details-default.html">'.$row['productName'].'</a></h6>
                                            <ul class="review-star">
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                    <li class="empty"><i class="ion-android-star"></i></li>
                                                </ul>
                                        </div>
                                        <div class="content-right">
                                            <span class="price">Rs '.$row['price'].'</span>
                                        </div>

                                    </div>
                                </div>
                                            ';
                                        }
                                    }
                                }

                                ?>
                                <!-- End Product Default Single Item -->

                            </div>
                        </div>
                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Product Default Slider Section -->

<!-- Start Company Logo Section -->
<div class="company-logo-section section-top-gap-100 section-fluid">
    <div class="company-logo-wrapper" data-aos="fade-up" data-aos-delay="0">
        <div class="container">
            <div class="row">
                    <h2 style="text-align: center;margin-bottom:4rem;">OUR TOP RESTAURANTS</h2>
                <div class="col-12">
                    <div class="company-logo-slider default-slider-nav-arrow">
                        <!-- Slider main container -->
                        <div class="swiper-container company-logo-slider">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Start Company Logo Single Item -->
                                <div class="company-logo-single-item swiper-slide">
                                    <div class="image"><img class="img-fluid" src="assets/images/company-logo/company-logo-1.png" alt=""></div>
                                </div>
                                <!-- End Company Logo Single Item -->
                                <!-- Start Company Logo Single Item -->
                                <div class="company-logo-single-item swiper-slide">
                                    <div class="image"><img class="img-fluid" src="assets/images/company-logo/company-logo-2.png" alt=""></div>
                                </div>
                                <!-- End Company Logo Single Item -->
                                <!-- Start Company Logo Single Item -->
                                <div class="company-logo-single-item swiper-slide">
                                    <div class="image"><img class="img-fluid" src="assets/images/company-logo/company-logo-3.png" alt=""></div>
                                </div>
                                <!-- End Company Logo Single Item -->
                                <!-- Start Company Logo Single Item -->
                                <div class="company-logo-single-item swiper-slide">
                                    <div class="image"><img class="img-fluid" src="assets/images/company-logo/company-logo-4.png" alt=""></div>
                                </div>
                                <!-- End Company Logo Single Item -->
                                <!-- Start Company Logo Single Item -->
                                <div class="company-logo-single-item swiper-slide">
                                    <div class="image"><img class="img-fluid" src="assets/images/company-logo/company-logo-5.png" alt=""></div>
                                </div>
                                <!-- End Company Logo Single Item -->
                                <!-- Start Company Logo Single Item -->
                                <div class="company-logo-single-item swiper-slide">
                                    <div class="image"><img class="img-fluid" src="assets/images/company-logo/company-logo-6.png" alt=""></div>
                                </div>
                                <!-- End Company Logo Single Item -->
                                <!-- Start Company Logo Single Item -->
                                <div class="company-logo-single-item swiper-slide">
                                    <div class="image"><img class="img-fluid" src="assets/images/company-logo/company-logo-7.png" alt=""></div>
                                </div>
                                <!-- End Company Logo Single Item -->
                                <!-- Start Company Logo Single Item -->
                                <div class="company-logo-single-item swiper-slide">
                                    <div class="image"><img class="img-fluid" src="assets/images/company-logo/company-logo-8.png" alt=""></div>
                                </div>
                                <!-- End Company Logo Single Item -->
                            </div>
                        </div>
                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev d-none d-md-block"></div>
                        <div class="swiper-button-next d-none d-md-block"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Company Logo Section -->



<?php
require 'footer.php';
?>