<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Favicon -->
  <link rel="icon" href="images/favicon.png">

  <!-- CSS -->
  <link rel="stylesheet" href="styles/navbar.css">
  <link rel="stylesheet" href="styles/main.css">
  <link rel="stylesheet" href="styles/scroll-btn.css">

</head>

<body onload="loadPreloader()">

<!-- Preloader -->
<div id="loading"></div>

  <!-- site-navbar start -->
  <div class="navbar-area">
    <div class="container">
      <nav class="site-navbar">
        <!-- site logo -->
        <a href="index">
          <img src="images/logo.png" class="logo" alt="foodshala-logo">
        </a>

        <!-- site menu/nav -->
        <ul>
          <li><a href="#">home</a></li>
          <li><a href="#">about</a></li>
          <li><a href="#">service</a></li>
          <li><a href="#">contact</a></li>
          <li style="margin:auto 0"><button class="btn-default dark">Login</button></li>
          
        </ul>

        <!-- nav-toggler for mobile version only -->
        <button class="nav-toggler">
          <span></span>
        </button>
      </nav>
    </div>
  </div><!-- navbar-area end -->