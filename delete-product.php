<?php
session_start();
require 'includes/db.inc.php';
$userid = $_SESSION['userId'];
$pid=$_GET['pid'];

$sql = "DELETE FROM cart WHERE productID=? AND userID=? ";
$stmt = mysqli_stmt_init($conn);
mysqli_stmt_prepare($stmt,$sql);
mysqli_stmt_bind_param($stmt,"is",$pid,$userid);
mysqli_stmt_execute($stmt);
header("Location: index?product_DELETED_from_cart");