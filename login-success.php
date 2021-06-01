<?php
require 'header.php';
?>
<div class="success-container">
    <h1>Welcome <?php echo $_SESSION['name'];?></h1><br>
    <h2>You Have Successfully Logged In</h2>
    <div>
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        <lottie-player src="https://assets1.lottiefiles.com/packages/lf20_ruryzm9h.json" background="transparent" speed="1" style="width: 100%; height: 40%;" loop autoplay></lottie-player>
    </div>
    <a style="width:30%" href="shop-full-width" class="btn btn-lg btn-black-default-hover">Continue Shopping</a>

</div>

<?php
require 'footer.php';
?>