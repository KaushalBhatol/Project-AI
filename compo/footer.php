</main><!-- End #main -->
<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
    <?php
    if ($showAlert) {
        echo ' <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
        <strong>Success!</strong> You are now subscribed our site.
    </div> ';
    }
    if ($showError) {
        echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> ' . $showError . '
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    ?>
    <div class="footer-newsletter" id="newslatter">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <h4>Newsletter</h4>
                    <p class="text-center">Get updated with us, subscrie to our newslatter</p>
                </div>
                <div class="col-lg-6">
                    <form action="#newslatter" method="post">
                        <input type="email" class="form-control" name="email"><input type="submit" value="Subscribe">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="credits">
            THE AIRTIFICIAL INTELLIGENCE
            <br>
            Designed by Kaushal Chaudhary and Harsh Bhavsar
        </div>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/purecounter/purecounter.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>


</body>

</html>