<?php
if (isset($_POST['submit-contact'])) {

    require 'db.inc.php';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $details = $_POST['message'];

    $sql = "INSERT INTO contactus (name,email,subject,details) VALUES (?,?,?,?)";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $subject, $details);
    mysqli_stmt_execute($stmt);
    header("Location: ../contact-us?Successfully-send-message");
} else {
    header("Location: ../index");
}
