<?php
require 'header.php';
?>
<!-- ...:::: Start Breadcrumb Section:::... -->
<div class="breadcrumb-section breadcrumb-bg-color--golden">
    <div class="breadcrumb-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="breadcrumb-title">Empty Cart</h3>
                    <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--golden">
                        <nav aria-label="breadcrumb">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="shop-grid-sidebar-left.html">Shop</a></li>
                                <li class="active" aria-current="page">Empty Cart</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- ...:::: End Breadcrumb Section:::... -->

<!-- ...::::Start About Us Center Section:::... -->
<div class="empty-cart-section section-fluid">
    <div class="emptycart-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-10 offset-md-1 col-xl-6 offset-xl-3">
                    <div class="emptycart-content text-center">
                        <div class="image">
                            <img class="img-fluid" src="assets/images/emprt-cart/empty-cart.png" alt="">
                        </div>
                        <h4 class="title">Your Cart is Empty</h4>
                        <h6 class="sub-title">Sorry Mate... No item Found inside your cart!</h6>
                        <a href="shop-grid-sidebar-left.html" class="btn btn-lg btn-golden">Continue Shopping</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- ...::::End  About Us Center Section:::... -->

<?php
require 'footer.php';
?>