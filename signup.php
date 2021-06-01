<?php
require 'header.php';
?>

<head>
    <title>Sign up | Food Shala</title>
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
                    <p class="sub-title">Sign up now</p>
                </div>
                <!-- login form starts -->
                <div class="form-group d-block mx-auto">
                    <form action="includes/signup.inc" method="post" class="mx-auto" autocomplete="off">
                        <input type="text" name="name" class="form-control input-box" name="userName" placeholder="Enter your Full Name" autocomplete="off" required autocomplete="off">
                        
                        <input type="email" name="mail"  class="form-control input-box" name="userEmail" id="user-email-id" aria-describedby="helpEmail" placeholder="Enter your email ID" autocomplete="off" required autocomplete="off">
                        
                        <select class="form-control" name="preference" required>
                            <option value="" selected disabled hidden>Select Your Preference</option>
                            <option value="veg">Veg</option>
                            <option value="nonveg">Non Veg</option>
                        </select>
                        <select class="form-control" name="accountType" required>
                            <option value="" selected disabled hidden>Select Account Type</option>
                            <option value="user">User</option>
                            <option value="restaurant">Restaurant</option>
                        </select>
                        <input type="password" name="pwd" class="form-control input-box" name="userPW" id="createPW" placeholder="Create your password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[#?!@$%^&*-]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required autocomplete="off">
                        <div id="pwErrMessage">
                            <h6>Password must contain the following:</h6>
                            <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                            <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                            <p id="number" class="invalid">A <b>number</b></p>
                            <p id="length" class="invalid">Minimum <b>8 characters</b></p>
                            <p id="spcl" class="invalid">Minimum 1 <b>Special character</b></p>
                        </div>
                        <input type="password" class="form-control input-box" name="userConfirmPW" id="confirmPW" placeholder="Confirm your password" required>
                        <div class="text-center">
                            <div id="CheckPassword">
                            </div>
                            <button type="submit" name="signup-submit" class="btn btn-primary mt-3" id="loginBtn">Sign up</button>
                        </div>
                    </form>

                    <!-- login form ends-->
                    <div class="text-center mt-3">
                        <a href="login" class="log-in-txt">Already have an account? Log in</a>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <script src="assets/js/validation.js"></script>
    <?php
    require 'footer.php';
    ?>