<?php
if (isset($_POST['confirm-order'])) {
    require 'db.inc.php';
    session_start();
    $userid = $_SESSION['userId'];

    $orderID = bin2hex(random_bytes(8));

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $hno = $_POST['hno'];
    $apartment = $_POST['apartment'];
    $town = $_POST['town'];
    $state = $_POST['state'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $ordernote = $_POST['order-note'];
    $totalprice = $_POST['total-price'];

    // Pushing the Customer Details into Orders Table

    $sql = "INSERT INTO orders (fname,lname,hno,apartment,town,state,phone,email,orderNote,userID,totalPrice,orderID) VALUES(?,?,?,?,?,?,?,?,?,?,?,?)";

    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, "ssssssisssis", $fname, $lname, $hno, $apartment, $town, $state, $phone, $email, $ordernote, $userid, $totalprice, $orderID);
    mysqli_stmt_execute($stmt);

    // Pushing the Products Detail into Order History Table
    $sql = "SELECT * FROM cart WHERE userID='$userid'";
    $result = $conn->query($sql);
    if ($conn) {
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $orderDate = date("Y-m-d");
                $orderStatus = 'Pending';

                $sql = "INSERT INTO orderhistory (productImage,userID, productName, price,productID,orderID,orderStatus,createdAt) VALUES(?,?,?,?,?,?,?,?)";
                $stmt = mysqli_stmt_init($conn);
                mysqli_stmt_prepare($stmt, $sql);

                mysqli_stmt_bind_param($stmt, "sssisss", $row['productImage'], $row['userID'], $row['productName'], $row['price'], $row['productID'], $orderID, $orderStatus, $orderDate);
                mysqli_stmt_execute($stmt);
            }
        }
    }

    //Deleting the Data from Cart After succesfully Uploading all the necessary Data
    $sql = "DELETE FROM cart WHERE userID='$userid'";
    $result = $conn->query($sql);

    header("Location: ../checkout-success?purchase-is-successful");
    exit();
} else {
    header("Location: ../index");
    exit();
}
