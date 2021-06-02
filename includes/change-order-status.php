<?php
if (isset($_POST['cancel-order'])) {
    require 'db.inc.php';
    session_start();
    $userid = $_SESSION['userId'];
    $orderStatus = "Cancelled";
    $pid = $_POST['pid'];

    $sql = "UPDATE orderhistory set orderStatus = ? WHERE userID = ? AND sno = ?";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, "ssi", $orderStatus, $userid, $pid);
    mysqli_stmt_execute($stmt);

    header("Location: ../my-account?booking-cancelled");
    exit();
} else {
    header("Location: ../index");
    exit();
}
