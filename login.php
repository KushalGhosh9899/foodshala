<?php
require 'header.php';
?>

<head>
    <title>Log in | Food Shala</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<div class="bg-lil-white">
    <div class="container-fluid" id="main">
        <div class="row  d-flex align-items-center justify-content-center" id="login-page">
            <div class="col-lg-4 col-sm-12 col-xs-12 col-md-6" id="content">
                <span class="text-center">
                </span>
                <div class="text-center">
                    <h1 class="title">Food Shala</h1>
                    <p class="sub-title">One Place for Ordering All Types of Dishes</p>
                    <p class="sub-title">Log in now</p>
                </div>
                <!-- login form starts -->
                <div class="form-group d-block mx-auto">
                    <form action="" method="post" class="mx-auto" autocomplete="off">
                        <input type="email" class="form-control input-box" name="userEmail" aria-describedby="helpEmail" placeholder="Enter your email ID" autocomplete="off" required autocomplete="off">
                        <input type="password" class="form-control input-box" name="userPW" placeholder="Create your password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[#?!@$%^&*-]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required autocomplete="off">

                        <input type="password" class="form-control input-box" name="userConfirmPW" placeholder="Confirm your password" required>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary mt-3" id="loginBtn">Log in</button>
                        </div>
                    </form>

                    <!-- login form ends-->
                    <div class="text-center mt-3">
                        <a href="signup" class="log-in-txt">Don't have an account? Sign up</a>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <?php
    require 'footer.php';
    ?>