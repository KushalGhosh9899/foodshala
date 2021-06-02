<?php
require 'header.php';
if (!isset($_SESSION['type'])) {
    echo '<script>window.location.href="index"</script>';
} else if ($_SESSION['type'] !== 'user') {
    echo '<script>window.location.href="index"</script>';
}
?>
<!-- ...:::: Start Breadcrumb Section:::... -->
<div class="breadcrumb-section breadcrumb-bg-color--golden">
    <div class="breadcrumb-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="breadcrumb-title">Checkout</h3>
                    <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--golden">
                        <nav aria-label="breadcrumb">
                            <ul>
                                <li><a href="index">Home</a></li>
                                <li><a href="shop-full-width">Shop</a></li>
                                <li class="active" aria-current="page">Checkout</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- ...:::: End Breadcrumb Section:::... -->

<!-- ...:::: Start Checkout Section:::... -->
<div class="checkout-section">
    <div class="container">
        <div class="row">
            <!-- User Quick Action Form -->
            <div class="col-12">
                <div class="user-actions accordion" data-aos="fade-up" data-aos-delay="200">
                    <h3>
                        <i class="fa fa-file-o" aria-hidden="true"></i>
                        Have Coupon?
                        <a class="Returning" href="#" data-bs-toggle="collapse" data-bs-target="#checkout_coupon" aria-expanded="true">Click here to enter your code</a>

                    </h3>
                    <div id="checkout_coupon" class="collapse checkout_coupon" data-parent="#checkout_coupon">
                        <div class="checkout_info">
                            <form action="#">
                                <input placeholder="Coupon code" type="text">
                                <button class="btn btn-md btn-black-default-hover" type="submit">Apply
                                    coupon</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- User Quick Action Form -->
        </div>
        <!-- Start User Details Checkout Form -->
        <div class="checkout_form" data-aos="fade-up" data-aos-delay="400">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <form action="includes/checkout-product" method="POST">
                        <h3>Billing Details</h3>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="default-form-box">
                                    <label>First Name <span>*</span></label>
                                    <input type="text" name="fname" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="default-form-box">
                                    <label>Last Name <span>*</span></label>
                                    <input type="text" name="lname" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="default-form-box">
                                    <label>Street address <span>*</span></label>
                                    <input name="hno" required placeholder="House number and street name" type="text">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="default-form-box">
                                    <input name="apartment" required placeholder="Apartment, suite, unit etc. (optional)" type="text">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="default-form-box">
                                    <label>Town / City <span>*</span></label>
                                    <input name="town" required type="text">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="default-form-box">
                                    <label>State <span>*</span></label>
                                    <input name="state" required type="text">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="default-form-box">
                                    <label>Phone<span>*</span></label>
                                    <input name="phone" maxlength="10" required type="text">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="default-form-box">
                                    <label> Email Address <span>*</span></label>
                                    <input name="email" required type="email">
                                </div>
                            </div>
                            <div class="col-12 mt-3">
                                <div class="order-notes">
                                    <label for="order_note">Order Notes</label>
                                    <textarea name="order-note" value="" id="order_note" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <h3>Your order</h3>
                    <div class="order_table table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <?php
                            require_once 'includes/db.inc.php';
                            $sql = "SELECT * FROM cart where userID='$userid'";
                            $result = $conn->query($sql);
                            if ($conn) {
                                if ($result->num_rows > 0) {
                                    echo '<tbody>';
                                    while ($row = $result->fetch_assoc()) {
                                        echo '                                                                   
                                            <tr>
                                                <td><a href="product-details-default?pid=' . $row['productID'] . '">' . $row['productName'] . '</a></td>
                                                <td>Rs ' . $row['price'] . '</td>
                                            </tr>
                                        ';
                                    }
                                }
                                $query = "select SUM(price) as 'sumcart' from cart WHERE userID='$userid'";
                                $res = mysqli_query($conn, $query);
                                $data = mysqli_fetch_array($res);
                                echo '                                
                                    </tbody>
                                    <tfoot>
                                    <input type="hidden" value="' . $data['sumcart'] . '" name="total-price">
                                        <tr class="order_total">
                                            <th>Order Total</th>
                                            <td><strong>Rs ' . $data['sumcart'] . '</strong></td>
                                        </tr>
                                    </tfoot>
                                ';
                            }
                            ?>
                        </table>
                    </div>
                    <div class="payment_method">
                        <div class="panel-default">
                            <label class="checkbox-default" for="currencyCod" data-bs-toggle="collapse" data-bs-target="#methodCod">
                                <input type="checkbox" id="currencyCod">
                                <span><span class="product-stock-in"><i class="ion-checkmark-circled"></i></span> Cash on Delivery</span>
                            </label>

                            <div id="methodCod" class="collapse" data-parent="#methodCod">
                                <div class="card-body1">
                                    <p>Cash on Delivery is Available for this product.</p>
                                </div>
                            </div>
                        </div>
                        <div class="order_button pt-3">
                            <button class="btn btn-md btn-black-default-hover" name="confirm-order" type="submit">Confirm Order</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div> <!-- Start User Details Checkout Form -->
    </div>
</div><!-- ...:::: End Checkout Section:::... -->

<?php
require 'footer.php';
?>