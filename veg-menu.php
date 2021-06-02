<?php
require 'header.php';
?>
<!-- ...:::: Start Breadcrumb Section:::... -->
<div class="breadcrumb-section breadcrumb-bg-color--golden">
    <div class="breadcrumb-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="breadcrumb-title">Veg Dishes</h3>
                    <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--golden">
                        <nav aria-label="breadcrumb">
                            <ul>
                                <li><a href="index">Home</a></li>
                                <li><a href="shop-full-width">All Menu</a></li>
                                <li class="active" aria-current="page">Veg Dishes</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- ...:::: End Breadcrumb Section:::... -->

<!-- ...:::: Start Shop Section:::... -->
<div class="shop-section">
    <div class="container">
        <div class="row flex-column-reverse flex-lg-row">
            <div class="col-lg-12">
                <!-- Start Shop Product Sorting Section -->
                <div class="shop-sort-section">
                    <div class="container">
                        <div class="row">
                            <!-- Start Sort Wrapper Box -->
                            <div class="sort-box d-flex justify-content-between align-items-md-center align-items-start flex-md-row flex-column" data-aos="fade-up" data-aos-delay="0">
                                <!-- Start Sort tab Button -->
                                <div class="sort-tablist d-flex align-items-center">
                                    <ul class="tablist nav sort-tab-btn">
                                        <li><a class="nav-link active" data-bs-toggle="tab" href="#layout-4-grid"><img src="assets/images/icons/bkg_grid.png" alt=""></a></li>
                                        <li><a class="nav-link" data-bs-toggle="tab" href="#layout-list"><img src="assets/images/icons/bkg_list.png" alt=""></a></li>
                                    </ul>

                                    <!-- Start Page Amount -->
                                    <div class="page-amount ml-2">
                                        <span>Showing all results for Veg Dishes</span>
                                    </div> <!-- End Page Amount -->
                                </div> <!-- End Sort tab Button -->

                                <!-- Start Sort Select Option -->
                                <div class="sort-select-list d-flex align-items-center">
                                    <label class="mr-2">Sort By:</label>
                                    <select class="form-control" onchange="window.location.href=`veg-menu?filter-product=${value}`">
                                        <option value="" selected disabled hidden>Select Filter to Apply</option>
                                        <option value="ASC">Sort by price: low to high</option>
                                        <option value="DESC">Sort by price: high to low</option>
                                        <option value="">Clear Filter</option>
                                    </select>
                                </div> <!-- End Sort Select Option -->



                            </div> <!-- Start Sort Wrapper Box -->
                        </div>
                    </div>
                </div> <!-- End Section Content -->

                <!-- Start Tab Wrapper -->
                <div class="sort-product-tab-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="tab-content">
                                    <!-- Start Grid View Product -->
                                    <div class="tab-pane active show sort-layout-single" id="layout-4-grid">
                                        <div class="row">

                                            <!-- Start Product Default Single Item -->
                                            <?php
                                            require_once 'includes/db.inc.php';
                                            if (!empty($_GET['filter-product'])) {
                                                $filter = $_GET['filter-product'];
                                                $sql = "SELECT * FROM products where foodType='Non Veg' ORDER BY price $filter";
                                                $result = $conn->query($sql);
                                                if ($conn) {
                                                    if ($result->num_rows > 0) {
                                                        while ($row = $result->fetch_assoc()) {
                                                            echo '
                                                                <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                                                                <div class="product-default-single-item product-color--golden" data-aos="fade-up" data-aos-delay="0">
                                                                    <div class="image-box">
                                                                <a href="product-details-default.html" class="image-link">
                                                                    <img class="product-image-veg" src="' . $row['productImage'] . '" alt="">
                                                                    <img class="product-image-veg" src="' . $row['image3'] . '" alt="">
                                                                </a>
                                                                ';
                                                            if ($row['foodType'] == 'Veg') {
                                                                echo '
                                                                        <div class="tag">
                                                                            <span class="veg">Veg</span>
                                                                        </div>
                                                                        ';
                                                            } else {
                                                                echo '
                                                                        <div class="tag">
                                                                            <span class="non-veg">Non Veg</span>
                                                                        </div>
                                                                        ';
                                                            }
                                                            echo '
                                                                <div class="action-link">
                                                                    <div class="action-link-left">
                                                                        <a href="#">Order Now</a>
                                                                    </div>
                                                                    <div class="action-link-right">
                                                                    <form action="includes/add-to-cart.inc" method="POST">
                                                                    <input type="hidden" value="' . $row['productImage'] . '" name="product-image">
                                                                    <input type="hidden" value="' . $row['productName'] . '" name="product-name">
                                                                    <input type="hidden" value="' . $row['price'] . '" name="product-price">
                                                                    <input type="hidden" value="'.$row['products'].'" name="product-ID">
                                                                        <button type=""submit"" name="add-to-cart"><i style="color:white"class="icon-bag"></i></button>
                                                                    
                                                                    </form>                                                                 
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                <div class="content">
                                                                <div class="content-left">
                                                                    <h6 class="title"><a href="product-details-default.html">' . $row['productName'] . '</a></h6>
                                                                    <ul class="review-star">
                                                                        <li class="fill"><i class="ion-android-star"></i>
                                                                        </li>
                                                                        <li class="fill"><i class="ion-android-star"></i>
                                                                        </li>
                                                                        <li class="fill"><i class="ion-android-star"></i>
                                                                        </li>
                                                                        <li class="fill"><i class="ion-android-star"></i>
                                                                        </li>
                                                                        <li class="empty"><i class="ion-android-star"></i>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="content-right">
                                                                    <span class="price">Rs ' . $row['price'] . '</span>
                                                                </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        ';
                                                        }
                                                    }
                                                }
                                            } else {
                                                $sql = "SELECT * FROM products where foodType='Veg'";
                                                $result = $conn->query($sql);
                                                if ($conn) {
                                                    if ($result->num_rows > 0) {
                                                        while ($row = $result->fetch_assoc()) {
                                                            echo '
                                                                <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                                                                <div class="product-default-single-item product-color--golden" data-aos="fade-up" data-aos-delay="0">
                                                                    <div class="image-box">
                                                                <a href="product-details-default.html" class="image-link">
                                                                    <img class="product-image-veg" src="' . $row['productImage'] . '" alt="">
                                                                    <img class="product-image-veg" src="' . $row['image3'] . '" alt="">
                                                                </a>
                                                                ';
                                                            if ($row['foodType'] == 'Veg') {
                                                                echo '
                                                                        <div class="tag">
                                                                            <span class="veg">Veg</span>
                                                                        </div>
                                                                        ';
                                                            } else {
                                                                echo '
                                                                        <div class="tag">
                                                                            <span class="non-veg">Non Veg</span>
                                                                        </div>
                                                                        ';
                                                            }
                                                            echo '
                                                                <div class="action-link">
                                                                    <div class="action-link-left">
                                                                        <a href="#">Order Now</a>
                                                                    </div>
                                                                    <div class="action-link-right">
                                                                    <form action="includes/add-to-cart.inc" method="POST">
                                                                                <input type="hidden" value="' . $row['productImage'] . '" name="product-image">
                                                                                <input type="hidden" value="' . $row['productName'] . '" name="product-name">
                                                                                <input type="hidden" value="' . $row['price'] . '" name="product-price">
                                                                                <input type="hidden" value="'.$row['products'].'" name="product-ID">
                                                                                    <button type=""submit"" name="add-to-cart"><i style="color:white"class="icon-bag"></i></button>
                                                                                
                                                                                </form>                                                                
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                <div class="content">
                                                                <div class="content-left">
                                                                    <h6 class="title"><a href="product-details-default.html">' . $row['productName'] . '</a></h6>
                                                                    <ul class="review-star">
                                                                        <li class="fill"><i class="ion-android-star"></i>
                                                                        </li>
                                                                        <li class="fill"><i class="ion-android-star"></i>
                                                                        </li>
                                                                        <li class="fill"><i class="ion-android-star"></i>
                                                                        </li>
                                                                        <li class="fill"><i class="ion-android-star"></i>
                                                                        </li>
                                                                        <li class="empty"><i class="ion-android-star"></i>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="content-right">
                                                                    <span class="price">Rs ' . $row['price'] . '</span>
                                                                </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        ';
                                                        }
                                                    }
                                                }
                                            }
                                            ?>
                                            <!-- End Product Default Single Item -->

                                        </div>
                                    </div>
                                    <!-- End Grid View Product -->

                                    <!-- Start List View Product -->
                                    <div class="tab-pane sort-layout-single" id="layout-list">
                                        <div class="row">
                                            <!-- Start Product Defautlt Single -->
                                            <?php
                                            require_once 'includes/db.inc.php';

                                            if (!empty($_GET['filter-product'])) {
                                                $filter = $_GET['filter-product'];
                                                $sql = "SELECT * FROM products where foodType='Non Veg' ORDER BY price $filter";
                                                $result = $conn->query($sql);
                                                if ($conn) {
                                                    if ($result->num_rows > 0) {
                                                        while ($row = $result->fetch_assoc()) {
                                                            echo '
                                                            <div class="col-12">
                                                                <div class="product-list-single product-color--golden">
                                                                    <a href="product-details-default?pid='.$row['products'].'" class="product-list-img-link product-image-non-veg">
                                                                        <img class="image-fluid product-image-non-veg-fluid" src="' . $row['productImage'] . '" alt="">
                                                                        <img class="image-fluid product-image-non-veg-fluid" src="' . $row['image3'] . '" alt="">
                                                                    </a>
                                                                    <div class="product-list-content">
                                                                        <h5 class="product-list-link"><a href="product-details-default?pid='.$row['products'].'">' . $row['productName'] . '</a></h5>
                                                                        <ul class="review-star">
                                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                                            <li class="empty"><i class="ion-android-star"></i></li>
                                                                        </ul>
                                                                        <span class="product-list-price">Rs ' . $row['price'] . '</span>
                                                                        <p><b>' . $row['foodType'] . '</b><br>' . $row['description'] . '</p>
                                                                        <div class="product-action-icon-link-list">
                                                                        <form action="includes/add-to-cart.inc" method="POST">
                                                                        <input type="hidden" value="' . $row['productImage'] . '" name="product-image">
                                                                        <input type="hidden" value="' . $row['productName'] . '" name="product-name">
                                                                        <input type="hidden" value="' . $row['price'] . '" name="product-price">
                                                                        <input type="hidden" value="'.$row['products'].'" name="product-ID">
                                                                            <button type="submit" class="btn btn-block btn-lg btn-black-default-hover" name="add-to-cart">+ Add To Cart</button>
                                                                        
                                                                        </form>
                                                                        </div>
                                                                    </div>
                                                                </div> 
                                                            </div>
                                                            ';
                                                        }
                                                    }
                                                }
                                            } else {
                                                $sql = "SELECT * FROM products where foodType='Veg'";
                                                $result = $conn->query($sql);
                                                if ($conn) {
                                                    if ($result->num_rows > 0) {
                                                        while ($row = $result->fetch_assoc()) {
                                                            echo '
                                                        <div class="col-12">
                                                            <div class="product-list-single product-color--golden">
                                                                <a href="product-details-default?pid='.$row['products'].'" class="product-list-img-link product-image-non-veg">
                                                                    <img class="image-fluid product-image-non-veg-fluid" src="' . $row['productImage'] . '" alt="">
                                                                    <img class="image-fluid product-image-non-veg-fluid" src="' . $row['image3'] . '" alt="">
                                                                </a>
                                                                <div class="product-list-content">
                                                                    <h5 class="product-list-link"><a href="product-details-default?pid='.$row['products'].'">' . $row['productName'] . '</a></h5>
                                                                    <ul class="review-star">
                                                                        <li class="fill"><i class="ion-android-star"></i></li>
                                                                        <li class="fill"><i class="ion-android-star"></i></li>
                                                                        <li class="fill"><i class="ion-android-star"></i></li>
                                                                        <li class="fill"><i class="ion-android-star"></i></li>
                                                                        <li class="empty"><i class="ion-android-star"></i></li>
                                                                    </ul>
                                                                    <span class="product-list-price">Rs ' . $row['price'] . '</span>
                                                                    <p><b>' . $row['foodType'] . '</b><br>' . $row['description'] . '</p>
                                                                    <div class="product-action-icon-link-list">
                                                                    <form action="includes/add-to-cart.inc" method="POST">
                                                                    <input type="hidden" value="' . $row['productImage'] . '" name="product-image">
                                                                    <input type="hidden" value="' . $row['productName'] . '" name="product-name">
                                                                    <input type="hidden" value="' . $row['price'] . '" name="product-price">
                                                                    <input type="hidden" value="'.$row['products'].'" name="product-ID">
                                                                        <button type="submit" class="btn btn-block btn-lg btn-black-default-hover" name="add-to-cart">+ Add To Cart</button>
                                                                    
                                                                    </form>
                                                                    </div>
                                                                </div>
                                                            </div> 
                                                        </div>
                                                        ';
                                                        }
                                                    }
                                                }
                                            }
                                            ?>
                                            <!-- End Product Defautlt Single -->
                                        </div>
                                    </div> <!-- End List View Product -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Tab Wrapper -->


            </div> <!-- End Shop Product Sorting Section  -->
        </div>
    </div>
</div> <!-- ...:::: End Shop Section:::... -->


<?php
require 'footer.php';
?>