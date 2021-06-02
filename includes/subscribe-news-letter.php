<?php
if (isset($_POST['subscribe-btn'])) {

    require 'db.inc.php';
    $email = $_POST['email'];

    $sql = "INSERT INTO newsletter (email) VALUES (?)";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, "s",$email);
    mysqli_stmt_execute($stmt);
    header("Location: ../index?Successfully-subscribed-news-letter");
} else {
    header("Location: ../index");
}
