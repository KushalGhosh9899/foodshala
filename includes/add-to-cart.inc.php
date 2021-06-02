<?php
if (isset($_POST['add-to-cart'])) {    
    session_start();
    require 'db.inc.php';

    $productImage = $_POST['product-image'];
    $productName = $_POST['product-name'];
    $productPrice = $_POST['product-price'];

    $sql = "INSERT INTO cart (productName,productImage,price) VALUES(?,?,?)";

    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, "ssi", $productName,$productImage,$productPrice);
    mysqli_stmt_execute($stmt);
    header("Location: ../shop-full-width?product-successfully-added-to-cart");
}
else {
    header("Location: ../index");
    exit();
}