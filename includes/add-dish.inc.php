<?php
if (isset($_POST['add-dish'])) {
    
    $file = $_FILES['productImage'];
    $fileName = $_FILES['productImage']['name'];
    $fileTmpName = $_FILES['productImage']['tmp_name'];
    $fileError = $_FILES['productImage']['error'];
    $fileType = $_FILES['productImage']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    //Allowed File Types
    $allowed = array('jpg', 'jpeg', 'png');

    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            $fileNameNew = uniqid('', true) . "." . $fileActualExt;
            $fileDestinationDB = "images/products/" . $fileNameNew;
            $fileDestination = "../images/products/" . $fileNameNew;
            move_uploaded_file($fileTmpName, $fileDestination);
        } else {
            header("Location: ../manage-restaurant?an-err0r-occured-during-uploading-the-file");
            exit();
        }
    } else {
        header("Location: ../manage-restaurant?file-type-not-supported-for-uploading");
        exit();
    }

    session_start();
    require 'db.inc.php';

    $productName = $_POST['menu-name'];
    $foodtype = $_POST['foodtype'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $restaurantName = $_SESSION['name'];

    $sql = "INSERT INTO products (productName,productImage,restaurantName,foodType,price,description) VALUES(?,?,?,?,?,?)";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, "ssssis", $productName, $fileDestinationDB, $restaurantName, $foodtype, $price, $description);
    mysqli_stmt_execute($stmt);
    header("Location: ../manage-restaurant?menu-successfully-added-to-List");
    exit();
} else {
    header("Location: ../manage-restaurant");
    exit();
}
