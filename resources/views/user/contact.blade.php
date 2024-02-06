<!DOCTYPE html>
<html lang="en">

@include('user.head')

<body>

@include('user.header')


<main class="mt-5">

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
            <h2>Contact Us</h2>
            <p>If you have any questions or need assistance, feel free to reach out. We're here to help!</p>
        </div>

    </div>
    <div class="container">

        <div class="row mt-5">

            <div class="col-lg-6">

                <div class="row">
                    <div class="col-md-12">
                        <div class="info-box">
                            <i class="bx bx-map"></i>
                            <h3>Our Address</h3>
                            <p>123 Loan Street, Ilaro, Ogun State, Nigeria</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-box mt-4">
                            <i class="bx bx-envelope"></i>
                            <h3>Email Us</h3>
                            <p>swiftcredit@gmail.com</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-box mt-4">
                            <i class="bx bx-phone-call"></i>
                            <h3>Call Us</h3>
                            <p>+234 123 456 7890</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-6">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required="">
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="">
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required="">
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="7" placeholder="Message" required=""></textarea>
                    </div>
                    <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
            </div>

        </div>

    </div>
    </section>

    </section><!-- End Contact Section -->

  </main><!-- End #main -->

    @include('user.footer')

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="website/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="website/assets/vendor/aos/aos.js"></script>
  <script src="website/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="website/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="website/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="website/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="website/assets/js/main.js"></script>

</body>

</html>
