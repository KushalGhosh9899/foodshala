<?php
require 'header.php';
require_once 'includes/db.inc.php';

$totalrevenue = 0;
$totalorders = 0;
$cancelledorder = 0;
$alldish = 0;

$userid = $_SESSION['userId'];
$username = $_SESSION['name'];

//Finding out the total revenue

$sql = "SELECT productID FROM orderhistory";
$result = $conn->query($sql);
if ($conn) {
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $pid = $row['productID'];
            $sql = "SELECT price FROM products where products = '$pid'";
            $resultt = $conn->query($sql);
            if ($conn) {
                if ($resultt->num_rows > 0) {
                    while ($roww = $resultt->fetch_assoc()) {
                        $totalrevenue = $totalrevenue+$roww['price'];
                    }
                }
            }
        }
    }
}

//Finding out the total orders

$sql = "SELECT productID FROM orderhistory";
$result = $conn->query($sql);
if ($conn) {
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $pid = $row['productID'];
            $sql = "SELECT * FROM products where products = '$pid'";
            $resultt = $conn->query($sql);
            if ($conn) {
                if ($resultt->num_rows > 0) {
                    while ($roww = $resultt->fetch_assoc()) {
                        $totalorders=$totalorders+1;
                    }
                }
            }
        }
    }
}

//Finding out the toal cancelled Orders

$sql = "SELECT productID FROM orderhistory where orderStatus='Cancelled'";
$result = $conn->query($sql);
if ($conn) {
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $pid = $row['productID'];
            $sql = "SELECT * FROM products where products = '$pid'";
            $resultt = $conn->query($sql);
            if ($conn) {
                if ($resultt->num_rows > 0) {
                    while ($roww = $resultt->fetch_assoc()) {
                        $cancelledorder=$cancelledorder+1;
                    }
                }
            }
        }
    }
}

//Finding out the all dishes
$sql = "SELECT * FROM products where restaurantName='$username'";
$result = $conn->query($sql);
if ($conn) {
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $alldish=$alldish+1;
        }
    }
}
?>

<head>
    <title>
        Manage Restaurant | Foodshala
    </title>
    <link rel="stylesheet" href="styles/restaurant.css">
</head>

<div class="wrapper container">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="heading">All Stats</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <a class="dashboard-stat red" href="view-orders">
                <div class="visual">
                    <i class="fa fa-usd"></i>
                </div>
                <div class="details">
                    <div class="number">
                        <span><?php echo $totalrevenue; ?></span>
                    </div>
                    <div class="desc">Total Revenue</div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <a class="dashboard-stat blue" href="view-orders">
                <div class="visual">
                    <i class="fa fa-bar-chart-o"></i>
                </div>
                <div class="details">
                    <div class="number">
                        <span><?php echo $totalorders; ?></span>
                    </div>
                    <div class="desc">Total Orders</div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <a class="dashboard-stat hoki" href="view-cancelled">
                <div class="visual">
                    <i class="fa fa-ban"></i>
                </div>
                <div class="details">
                    <div class="number">
                        <span>+ <?php echo $cancelledorder; ?></span>
                    </div>
                    <div class="desc">Cancelled Orders</div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <a class="dashboard-stat purple" href="view-all-dish">
                <div class="visual">
                    <i class="fa fa-cutlery"></i>
                </div>
                <div class="details">
                    <div class="number">
                        <span> <?php echo $alldish; ?></span>
                    </div>
                    <div class="desc">All Dishes</div>
                </div>
            </a>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">

        <div class="column" onclick="window.location.href='add-dish'">
            <div class="card">
                <h3>Add Menu Item</h3>
                <img class="img-restaurant" src="images/add-dishes.png" alt="data">
            </div>
        </div>

        <div class="column" onclick="window.location.href='view-orders'">
            <div class="card">
                <h3>View Orders</h3>
                <img class="img-restaurant" src="images/orders.png" alt="data">
            </div>
        </div>

        <div class="column" onclick="window.location.href='view-cancelled'">
            <div class="card">
                <h3>View Cancelled Orders</h3>
                <img class="img-restaurant" src="images/cancel-orders.png" alt="data">
            </div>>
        </div>

        <div class="column" onclick="window.location.href='view-all-dish'">
            <div class="card">
                <h3>All Dishes</h3>
                <img class="img-restaurant" src="images/all-dishes.png" alt="data">
            </div>
        </div>



    </div>
</div>

<?php
require 'footer.php';
?>