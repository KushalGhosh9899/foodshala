<!-- Preloader Script -->
<script>
    var preloader = document.getElementById('loading');

    function loadPreloader() {
        preloader.style.display = 'none';
    }    
</script>

<!-- Start Footer Section -->
<footer class="footer-section footer-bg section-top-gap-100">
    <div class="footer-wrapper">
        <!-- Start Footer Top -->
        <div class="footer-top">
            <div class="container">
                <div class="row mb-n6">
                    <div class="col-lg-3 col-sm-6 mb-6">
                        <!-- Start Footer Single Item -->
                        <div class="footer-widget-single-item footer-widget-color--pink" data-aos="fade-up" data-aos-delay="0">
                            <h5 class="title">INFORMATION</h5>
                            <ul class="footer-nav">
                                <li><a href="#">Delivery Information</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="contact-us">Contact</a></li>
                                <li><a href="#">Returns</a></li>
                            </ul>
                        </div>
                        <!-- End Footer Single Item -->
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-6">
                        <!-- Start Footer Single Item -->
                        <div class="footer-widget-single-item footer-widget-color--pink" data-aos="fade-up" data-aos-delay="200">
                            <h5 class="title">MY ACCOUNT</h5>
                            <ul class="footer-nav">
                                <li><a href="my-account">My account</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Frequently Questions</a></li>
                                <li><a href="my-account">Order History</a></li>
                            </ul>
                        </div>
                        <!-- End Footer Single Item -->
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-6">
                        <!-- Start Footer Single Item -->
                        <div class="footer-widget-single-item footer-widget-color--pink" data-aos="fade-up" data-aos-delay="400">
                            <h5 class="title">CATEGORIES</h5>
                            <ul class="footer-nav">
                                <li><a href="veg-menu">Veg</a></li>
                                <li><a href="non-veg-menu">Non Veg</a></li>
                                <li><a href="shop-full-width">All Menu</a></li>
                                <li><a href="#">All dishes</a></li>
                            </ul>
                        </div>
                        <!-- End Footer Single Item -->
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-6">
                        <!-- Start Footer Single Item -->
                        <div class="footer-widget-single-item footer-widget-color--pink" data-aos="fade-up" data-aos-delay="600">
                            <h5 class="title">ABOUT US</h5>
                            <div class="footer-about">
                                <p>Foodshala is for Foodies who want food at their doorstep with very fast delivery and having all kinds of variety.</p>

                                <address>
                                    <span>Address: Your address goes here.</span>
                                    <span>Email: kushalghosh9899@gmail.com</span>
                                </address>
                            </div>
                        </div>
                        <!-- End Footer Single Item -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Top -->

        <!-- Start Footer Center -->
        <div class="footer-center">
            <div class="container">
                <div class="row mb-n6">
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-6">
                        <div class="footer-social" data-aos="fade-up" data-aos-delay="0">
                            <h4 class="title">FOLLOW US</h4>
                            <ul class="footer-social-link">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6 col-md-6 mb-6">
                        <div class="footer-newsletter" data-aos="fade-up" data-aos-delay="200">
                            <h4 class="title">DON'T MISS OUT ON THE LATEST</h4>
                            <div class="form-newsletter">
                                <form action="includes/subscribe-news-letter" method="post">
                                    <div class="form-fild-newsletter-single-item input-color--pink">
                                        <input type="email" name="email" placeholder="Your email address..." required>
                                        <button type="submit" name="subscribe-btn">SUBSCRIBE!</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Footer Center -->

        <!-- Start Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row justify-content-between align-items-center align-items-center flex-column flex-md-row mb-n6">
                    <div class="col-auto mb-6">
                        <div class="footer-copyright">
                            <p class="copyright-text">&copy; 2021 <a href="index">foodshala</a>. Made with <i class="fa fa-heart text-danger"></i> by 
                            <a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=kushalghosh9899@gmail.com" target="_blank">Kushal Ghosh</a> </p>

                        </div>
                    </div>
                    <div class="col-auto mb-6">
                        <div class="footer-payment">
                            <div class="image">
                                <img src="assets/images/company-logo/payment.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Footer Bottom -->
    </div>
</footer>
<!-- End Footer Section -->

<!-- material-scrolltop button -->
<button class="material-scrolltop" type="button"></button>

<!-- Start Modal Add cart -->
<div class="modal fade" id="modalAddcart" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col text-right">
                            <button type="button" class="close modal-close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true"> <i class="fa fa-times"></i></span>
                            </button>
                        </div>
                    </div>
                    <div class="row" style="flex-direction:column;align-items: center; justify-content: center;">
                        <h1 style="text-align: center;">
                            Product Added to Cart Successfully
                        </h1>
                        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                        <lottie-player src="https://assets1.lottiefiles.com/packages/lf20_ruryzm9h.json" background="transparent" speed="1" style="width: 100%; height: 40vh;" loop autoplay></lottie-player>
                        <a style="width:30%" href="#" class="btn btn-lg btn-black-default-hover">Continue Shopping</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End Modal Add cart -->

<!-- ::::::::::::::All JS Files here :::::::::::::: -->
<!-- Global Vendor, plugins JS -->
<script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>
<script src="assets/js/vendor/jquery-3.5.1.min.js"></script>
<script src="assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
<script src="assets/js/vendor/popper.min.js"></script>
<script src="assets/js/vendor/bootstrap.min.js"></script>
<script src="assets/js/vendor/jquery-ui.min.js"></script>

<!--Plugins JS-->
<script src="assets/js/plugins/swiper-bundle.min.js"></script>
<script src="assets/js/plugins/material-scrolltop.js"></script>
<script src="assets/js/plugins/jquery.nice-select.min.js"></script>
<script src="assets/js/plugins/jquery.zoom.min.js"></script>
<script src="assets/js/plugins/venobox.min.js"></script>
<script src="assets/js/plugins/jquery.waypoints.js"></script>
<script src="assets/js/plugins/jquery.lineProgressbar.js"></script>
<script src="assets/js/plugins/aos.min.js"></script>
<script src="assets/js/plugins/jquery.instagramFeed.js"></script>
<script src="assets/js/plugins/ajax-mail.js"></script>

<!-- Main JS -->
<script src="assets/js/main.js"></script>
</body>



</html>