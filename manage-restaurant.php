<?php
require 'header.php';
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
            <a class="dashboard-stat red" href="#">
                <div class="visual">
                    <i class="fa fa-usd"></i>
                </div>
                <div class="details">
                    <div class="number">
                        <span>312</span>
                    </div>
                    <div class="desc">Total Revenue</div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <a class="dashboard-stat blue" href="#">
                <div class="visual">
                    <i class="fa fa-bar-chart-o"></i>
                </div>
                <div class="details">
                    <div class="number">
                        <span>12.5</span>
                    </div>
                    <div class="desc">Total Orders</div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <a class="dashboard-stat hoki" href="#">
                <div class="visual">
                    <i class="fa fa-credit-card"></i>
                </div>
                <div class="details">
                    <div class="number">
                        <span>+ 53%</span>
                    </div>
                    <div class="desc">Cancelled Orders</div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <a class="dashboard-stat purple" href="#">
                <div class="visual">
                    <i class="fa fa-comments"></i>
                </div>
                <div class="details">
                    <div class="number">
                        <span>689</span>
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