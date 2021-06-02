<?php
require 'header.php';
require_once 'includes/db.inc.php';
$pid = $_GET['pid'];
$sql = "SELECT * FROM products where products='$pid'";
$result = $conn->query($sql);
if ($conn) {
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '
<!-- ...:::: Start Breadcrumb Section:::... -->
<div class="breadcrumb-section breadcrumb-bg-color--golden">
    <div class="breadcrumb-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="breadcrumb-title">Product Details</h3>
                    <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--golden">
                        <nav aria-label="breadcrumb">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="shop-full-width">All Menu</a></li>
                                <li class="active" aria-current="page">Product Details</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- ...:::: End Breadcrumb Section:::... -->

<!-- Start Product Details Section -->
<div class="product-details-section">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-6"> 
                <div class="product-details-gallery-area" data-aos="fade-up" data-aos-delay="0">
                    <!-- Start Large Image -->
                    <div class="product-large-image product-large-image-horaizontal swiper-container">
                        <div class="swiper-wrapper">
                            <div class="product-image-large-image swiper-slide zoom-image-hover img-responsive">
                                <img class="img-veg" src="'.$row['productImage'].'" alt="">
                            </div>
                            <div class="product-image-large-image swiper-slide zoom-image-hover img-responsive">
                                <img class="img-veg" src="'.$row['image2'].'" alt="">
                            </div>
                            <div class="product-image-large-image swiper-slide zoom-image-hover img-responsive">
                                <img class="img-veg" src="'.$row['image3'].'" alt="">
                            </div>
                            <div class="product-image-large-image swiper-slide zoom-image-hover img-responsive">
                                <img class="img-veg" src="'.$row['image4'].'" alt="">
                            </div>
                            <div class="product-image-large-image swiper-slide zoom-image-hover img-responsive">
                                <img class="img-veg" src="'.$row['image5'].'" alt="">
                            </div>
                        </div>
                    </div>
                    <!-- End Large Image -->
                    <!-- Start Thumbnail Image -->
                    <div class="product-image-thumb product-image-thumb-horizontal swiper-container pos-relative mt-5">
                        <div class="swiper-wrapper">
                            <div class="product-image-thumb-single swiper-slide">
                                <img class="img-fluid img-non-veg" src="'.$row['productImage'].'" alt="">
                            </div>
                            <div class="product-image-thumb-single swiper-slide">
                                <img class="img-fluid img-non-veg" src="'.$row['image2'].'" alt="">
                            </div>
                            <div class="product-image-thumb-single swiper-slide">
                                <img class="img-fluid img-non-veg" src="'.$row['image3'].'" alt="">
                            </div>
                            <div class="product-image-thumb-single swiper-slide">
                                <img class="img-fluid img-non-veg" src="'.$row['image4'].'" alt="">
                            </div>
                            <div class="product-image-thumb-single swiper-slide">
                                <img class="img-fluid img-non-veg" src="'.$row['image5'].'" alt="">
                            </div>
                        </div>
                        <!-- Add Arrows -->
                        <div class="gallery-thumb-arrow swiper-button-next"></div>
                        <div class="gallery-thumb-arrow swiper-button-prev"></div>
                    </div>
                    <!-- End Thumbnail Image -->
                </div>
            </div>
            <div class="col-xl-7 col-lg-6">
                <div class="product-details-content-area product-details--golden" data-aos="fade-up" data-aos-delay="200">
                    <!-- Start  Product Details Text Area-->
                    <div class="product-details-text">
                        <h4 class="title">'.$row['productName'].'</h4>
                        <div class="price">Rs '.$row['price'].'</div>
                        <p><b>'.$row['foodType'].'</b><br>'.$row['description'].'</p>
                    </div> <!-- End  Product Details Text Area-->
                    <!-- Start Product Variable Area -->
                    <div class="product-details-variable">
                        <h4 class="title">Available Options</h4>
                        <!-- Product Variable Single Item -->
                        <div class="variable-single-item">
                            <div class="product-stock"> <span class="product-stock-in"><i class="ion-checkmark-circled"></i></span> AVAILABLE FOR COD</div>
                        </div>
                        <!-- Product Variable Single Item -->
                        <div class="d-flex align-items-center ">

                            <div class="product-add-to-cart-btn">
                            <form action="includes/add-to-cart.inc" method="POST">
                            <input type="hidden" value="'.$row['productImage'].'" name="product-image">
                            <input type="hidden" value="'.$row['productName'].'" name="product-name">
                            <input type="hidden" value="'.$row['products'].'" name="product-ID">
                            <input type="hidden" value="'.$row['price'].'" name="product-price">
                                <button type="submit" class="btn btn-block btn-lg btn-black-default-hover" name="add-to-cart">+ Add To Cart</button>
                            </div>
                            </form>
                        </div>
                    </div> <!-- End Product Variable Area -->

                    <!-- Start  Product Details Catagories Area-->
                    <div class="product-details-catagory mb-2">
                        <span class="title">CATEGORIES:</span>
                        <ul>
                            <li><a href="shop-full-width">All Dishes</a></li>
                            ';
                            if($row['foodType']=='Veg'){
                                echo '
                                <li><a href="veg-menu">Veg Dishes</a></li>
                                ';
                            }
                            else{
                                echo '
                                <li><a href="non-veg-menu">Non Veg Dishes</a></li>
                                ';                                
                            }
                            echo'
                            
                        </ul>
                    </div> <!-- End  Product Details Catagories Area-->
                    <!-- Start  Product Details Social Area-->
                    <div class="product-details-social">
                        <span class="title">SHARE THIS PRODUCT:</span>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div> <!-- End  Product Details Social Area-->
                </div>
            </div>
        </div>
    </div>
</div> <!-- End Product Details Section -->


';
        }
    }
}
require 'footer.php';
