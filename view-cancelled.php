<?php
require 'header.php';
require_once 'includes/db.inc.php';
?>

<head>
    <title>
        View All Orders | Foodshala
    </title>
    <link rel="stylesheet" href="styles/restaurant.css">
</head>
<div>
    <a href="manage-restaurant" class="back-btn"><i class="ion-android-arrow-back"></i></a>
    <h1 class="heading">
        View All Canceled Orders
    </h1>
    <div>
        <table>
            <thead>
                <tr>
                    <th>Sno</th>
                    <th>Product Name</th>
                    <th>Product Image</th>
                    <th>Order Date</th>
                    <th>Customer Details</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM orderhistory where orderStatus='Cancelled'";
                $result = $conn->query($sql);
                if ($conn) {
                    $sno = 1;
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $pid = $row['productID'];
                            $pname = $row['productName'];
                            $image = $row['productImage'];
                            $odate = $row['createdAt'];
                            $orderid = $row['orderID'];
                            $sql = "SELECT * FROM products where products = '$pid'";
                            $resultt = $conn->query($sql);
                            if ($conn) {
                                if ($resultt->num_rows > 0) {
                                    while ($roww = $resultt->fetch_assoc()) {
                                        echo '<tr>
                                            <td>' . $sno . '</td>
                                            <td>' . $pname  . '</td>
                                            <td class="image-table"><img class="product-image-restaurant" src="' . $image . '"/></td>                            
                                            <td>' . $odate . '</td>
                                            <td>
                                            ';
                                        $sql1 = "SELECT * FROM orders where orderID='$orderid' LIMIT 1";
                                        $result1 = $conn->query($sql1);
                                        if ($conn) {
                                            if ($result1->num_rows > 0) {
                                                while ($row1 = $result1->fetch_assoc()) {
                                                    echo'
                                                    ' . $row1['fname'] . ' ' . $row1['lname'] . '<br>
                                                    Mobile: ' . $row1['phone'] . '<br>
                                                    Email: ' . $row1['email'] . '<br>
                                                    </td>
                                                    <td>
                                                    ' . $row1['hno'] . ', ' . $row1['apartment'] . '<br>
                                                    ' . $row1['town'] . ', ' . $row1['state'] . '
                                                     ';
                                                }
                                            }
                                        }

                                        echo
                                        '                                               
                                            </td>
                                            ';
                                    }
                                }
                            }
                            echo '
                            </tr>';
                            $sno = $sno + 1;
                        }
                    }
                }
                ?>

            </tbody>
        </table>
    </div>
</div>

<?php
require 'footer.php';
?>