<?php
if (isset($_POST['signup-submit'])) {
    require 'db.inc.php';
    $name = $_POST['name'];
    $email = $_POST['mail'];
    $password = $_POST['pwd'];
    $confirmPassword = $_POST['userConfirmPW'];
    $accountType = $_POST['accountType'];
    $preference = $_POST['preference'];


    if (empty($name) || empty($email) || empty($password)) {
        header("Location: ../signup?error=emptyfields&uid=" . $name . "&mail=" . $email);
        exit();
    } else if ($password !== $confirmPassword) {
        header("Location: ../signup?error=password-is-not-same");
        exit();
    } else {
        $sql = "SELECT email FROM users WHERE email=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location:../signup?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if ($resultCheck > 0) {
                header("Location: ../signup?error=username-already-taken&mail=" . $email);
                exit();
            } else {
                $sql = "INSERT INTO users(userid, fullname, email,preference,accountType,hashedPassword) VALUES(?,?,?,?,?,?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location:../signup?error=sqlerror");
                    exit();
                } else {
                    $userid = bin2hex(random_bytes(4));
                    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt, "ssssss", $userid, $name, $email, $preference, $accountType, $hashedPwd);
                    mysqli_stmt_execute($stmt);
                    header("Location:../signup-success?&signup=Success");
                    exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
} else {
    header("Location:../signup");
    exit();
}
