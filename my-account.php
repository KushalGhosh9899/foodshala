<?php
require 'header.php';
?>
<!-- ...:::: Start Breadcrumb Section:::... -->
<div class="breadcrumb-section breadcrumb-bg-color--golden">
    <div class="breadcrumb-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="breadcrumb-title">Order History - My Account</h3>
                    <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--golden">
                        <nav aria-label="breadcrumb">
                            <ul>
                                <li><a href="index">Home</a></li>
                                <li><a href="my-account">My Account</a></li>
                                <li class="active" aria-current="page">Order History</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- ...:::: End Breadcrumb Section:::... -->

<!-- ...:::: Start Cart Section:::... -->
<div class="cart-section">
    <!-- Start Cart Table -->
    <div class="cart-table-wrapper" data-aos="fade-up" data-aos-delay="0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="table_desc">
                        <div class="table_page table-responsive">
                            <table>
                                <!-- Start Cart Table Head -->
                                <thead>
                                    <tr>
                                        <th class="product_remove">Sno</th>
                                        <th class="product_thumb">Image</th>
                                        <th class="product_name">Product</th>
                                        <th class="product-price">Price</th>
                                        <th class="product_total">Order Date</th>
                                        <th class="product_quantity">Status</th>
                                        <th class="product_total">Action</th>
                                    </tr>
                                </thead> <!-- End Cart Table Head -->
                                <tbody>

                                    <!-- Start Cart Single Item-->

                                    <?php
                                    $userid = $_SESSION['userId'];
                                    $sql = "SELECT * FROM orderhistory where userID='$userid'";
                                    $result = $conn->query($sql);
                                    if ($conn) {
                                        $sno = 1;
                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                echo '
                                                    <tr>
                                                        <td class="product_remove">' . $sno . '
                                                        </td>
                                                        <td class="product_thumb"><a href="product-details-default?pid=' . $row['productID'] . '">
                                                        <img src="' . $row['productImage'] . '" alt=""></a></td>
                                                        <td class="product_name"><a href="product-details-default?pid=' . $row['productID'] . '">' . $row['productName'] . '</a></td>
                                                        <td class="product-price">Rs ' . $row['price'] . '</td>
                                                        <td class="product_name">' . $row['createdAt'] . '</td>
                                                        <td class="product_name">' . $row['orderStatus'] . '</td>
                                                        <td class="product-price">';
                                                        if($row['orderStatus']=='Pending'){
                                                            echo '                                                            
                                                            <form action="includes/change-order-status" method="POST" class="cart_submit">
                                                                <input type="hidden" value="'.$row['sno'].'" name="pid">
                                                                <button class="btn btn-md btn-golden" name="cancel-order" type="submit">Cancel Order</button>
                                                            </form>
                                                            ';
                                                        }
                                                        else{
                                                            echo 'Order Cancelled';
                                                        }
                                                        
                                                        echo'
                                                        </td>
                                                        
                                                    </tr>
                                                    ';
                                                $sno = $sno + 1;
                                            }
                                        }
                                    }

                                    ?>                                    
                                    <!-- End Cart Single Item-->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Cart Table -->


</div> <!-- ...:::: End Cart Section:::... -->

<?php
require 'footer.php';
?>