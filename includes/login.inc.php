<?php
if(isset($_POST['login-submit'])){
  require 'db.inc.php';
  $mailuid = $_POST['mailuid'];
  $password = $_POST['pwd'];
  if(empty($mailuid)||empty($password)){
    header("Location:../login?error=emptyfields");
    exit();
  }
  else{
    $sql = "SELECT * FROM users WHERE email=?";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
      header("Location:../login?error=sqlerror");
      exit();
    }
    else{
      mysqli_stmt_bind_param($stmt,"s",$mailuid);
      mysqli_stmt_execute($stmt);
      $result=mysqli_stmt_get_result($stmt);
      if($row=mysqli_fetch_assoc($result)){
        $pwdCheck= password_verify($password,$row['hashedPassword']);
        if($pwdCheck==false){
          header("Location:../login?error=wrong_password");
          exit();
        }
        else if($pwdCheck==true){
          session_start();

          $_SESSION['userId']=$row['userid'];
          $_SESSION['name']=$row['fullname'];
          $_SESSION['type']=$row['accountType'];
          echo $_SESSION['userId'];
          header("Location:../login-success?login=Success");
          exit();
        }
        else{
          header("Location:../login?error=wrong_password");
          exit();
        }
      }
      else{
        header("Location:../login?error=nouser");
        exit();
      }
    }
  }

}

else{
  header("Location:../index");
  exit();
}
