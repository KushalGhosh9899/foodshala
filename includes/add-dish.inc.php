<?php
if (isset($_POST['add-dish'])) {
    
    //For Image 1
    $file = $_FILES['productImage'];
    $fileName = $_FILES['productImage']['name'];
    $fileTmpName = $_FILES['productImage']['tmp_name'];
    $fileError = $_FILES['productImage']['error'];
    $fileType = $_FILES['productImage']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    //For Image 2
    $file2 = $_FILES['productImage2'];
    $fileName2 = $_FILES['productImage2']['name'];
    $fileTmpName2 = $_FILES['productImage2']['tmp_name'];
    $fileError2 = $_FILES['productImage2']['error'];
    $fileType2 = $_FILES['productImage2']['type'];

    $fileExt2 = explode('.', $fileName2);
    $fileActualExt2 = strtolower(end($fileExt2));

    //For Image 3
    $file3 = $_FILES['productImage3'];
    $fileName3 = $_FILES['productImage3']['name'];
    $fileTmpName3 = $_FILES['productImage3']['tmp_name'];
    $fileError3 = $_FILES['productImage3']['error'];
    $fileType3 = $_FILES['productImage3']['type'];

    $fileExt3 = explode('.', $fileName3);
    $fileActualExt3 = strtolower(end($fileExt3));

    //For Image 4
    $file4 = $_FILES['productImage4'];
    $fileName4 = $_FILES['productImage4']['name'];
    $fileTmpName4 = $_FILES['productImage4']['tmp_name'];
    $fileError4 = $_FILES['productImage4']['error'];
    $fileType4 = $_FILES['productImage4']['type'];

    $fileExt4 = explode('.', $fileName4);
    $fileActualExt4 = strtolower(end($fileExt4));

    //For Image 5
    $file5 = $_FILES['productImage5'];
    $fileName5 = $_FILES['productImage5']['name'];
    $fileTmpName5 = $_FILES['productImage5']['tmp_name'];
    $fileError5 = $_FILES['productImage5']['error'];
    $fileType5 = $_FILES['productImage5']['type'];

    $fileExt5 = explode('.', $fileName5);
    $fileActualExt5 = strtolower(end($fileExt5));

    //Allowed File Types
    $allowed = array('jpg', 'jpeg', 'png');

    //For Image 1
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

    //For Image 2
    if (in_array($fileActualExt2, $allowed)) {
        if ($fileError2 === 0) {
            $fileNameNew2 = uniqid('', true) . "." . $fileActualExt2;
            $fileDestinationDB2 = "images/products/" . $fileNameNew2;
            $fileDestination2 = "../images/products/" . $fileNameNew2;
            move_uploaded_file($fileTmpName2, $fileDestination2);
        } else {
            header("Location: ../manage-restaurant?an-err0r-occured-during-uploading-the-file");
            exit();
        }
    } else {
        header("Location: ../manage-restaurant?file-type-not-supported-for-uploading");
        exit();
    }

    //For Image 3
    if (in_array($fileActualExt3, $allowed)) {
        if ($fileError3 === 0) {
            $fileNameNew3 = uniqid('', true) . "." . $fileActualExt3;
            $fileDestinationDB3 = "images/products/" . $fileNameNew3;
            $fileDestination3 = "../images/products/" . $fileNameNew3;
            move_uploaded_file($fileTmpName3, $fileDestination3);
        } else {
            header("Location: ../manage-restaurant?an-err0r-occured-during-uploading-the-file");
            exit();
        }
    } else {
        header("Location: ../manage-restaurant?file-type-not-supported-for-uploading");
        exit();
    }

    //For Image 4
    if (in_array($fileActualExt4, $allowed)) {
        if ($fileError4 === 0) {
            $fileNameNew4 = uniqid('', true) . "." . $fileActualExt4;
            $fileDestinationDB4 = "images/products/" . $fileNameNew4;
            $fileDestination4 = "../images/products/" . $fileNameNew4;
            move_uploaded_file($fileTmpName4, $fileDestination4);
        } else {
            header("Location: ../manage-restaurant?an-err0r-occured-during-uploading-the-file");
            exit();
        }
    } else {
        header("Location: ../manage-restaurant?file-type-not-supported-for-uploading");
        exit();
    }

    //For Image 5
    if (in_array($fileActualExt5, $allowed)) {
        if ($fileError5 === 0) {
            $fileNameNew5 = uniqid('', true) . "." . $fileActualExt5;
            $fileDestinationDB5 = "images/products/" . $fileNameNew5;
            $fileDestination5 = "../images/products/" . $fileNameNew5;
            move_uploaded_file($fileTmpName5, $fileDestination5);
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

    $sql = "INSERT INTO products (productName,productImage,image2,image3,image4,image5,restaurantName,foodType,price,description) VALUES(?,?,?,?,?,?,?,?,?,?)";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, "ssssssssis", $productName, $fileDestinationDB, $fileDestinationDB2, $fileDestinationDB3, $fileDestinationDB4, $fileDestinationDB5, $restaurantName, $foodtype, $price, $description);
    mysqli_stmt_execute($stmt);
    header("Location: ../manage-restaurant?menu-successfully-added-to-List");
    exit();
} else {
    header("Location: ../manage-restaurant");
    exit();
}
