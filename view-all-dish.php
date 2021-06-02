<?php
require 'header.php';
require_once 'includes/db.inc.php';
?>

<head>
    <title>
        View All Menu Item | Foodshala
    </title>
    <link rel="stylesheet" href="styles/restaurant.css">
</head>
<div>
    <a href="manage-restaurant" class="back-btn"><i class="ion-android-arrow-back"></i></a>
    <h1 class="heading">
        View All Menu Item
    </h1>
    <div>
        <table>
            <thead>
                <tr>
                    <th>Sno</th>
                    <th>Product Name</th>
                    <th>Product Image</th>
                    <th>Type</th>
                    <th>Description</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $username = $_SESSION['name'];
                $sql = "SELECT * FROM products where restaurantName='$username'";
                $result = $conn->query($sql);
                if ($conn) {
                    $sno = 1;
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>
                            <td>' . $sno . '</td>
                            <td>' . $row['productName'] . '</td>
                            <td class="image-table"><img class="product-image-restaurant" src="' . $row['productImage'] . '"/></td>
                            <td>' . $row['foodType'] . '</td>
                            <td>' . $row['description'] . '</td>
                            <td>Rs ' . $row['price'] . '</td>
                            </tr>
                            ';
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