<?php
if (isset($_POST['add-to-cart'])) {    
    session_start();
    require 'db.inc.php';
    $userid=$_SESSION['userId'];

    $productImage = $_POST['product-image'];
    $productName = $_POST['product-name'];
    $productPrice = $_POST['product-price'];
    $productID = $_POST['product-ID'];

    $sql = "INSERT INTO cart (productName,productImage,productID,price,userID) VALUES(?,?,?,?,?)";

    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, "ssiis", $productName,$productImage,$productID,$productPrice,$userid);
    mysqli_stmt_execute($stmt);
    header("Location: ../shop-full-width?product-successfully-added-to-cart");
}
else {
    header("Location: ../index");
    exit();
}