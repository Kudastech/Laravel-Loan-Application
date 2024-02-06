<!DOCTYPE html>
<html lang="en">

@include('user.head')

<body>

@include('user.header')


  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(website/assets/img/slide/slide-4.jpg)">
          <div class="opacity">
          <div class="container">
            <h2>Welcome to <span>SwiftCredit</h2>
            <p>We're excited to have you on board! Experience hassle-free borrowing, flexible repayment options, and a seamless application process. Let's make your financial goals a reality together.</p>
            <a href="{{ route('login') }}" class="btn-get-started scrollto">Get Started</a>
          </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(website/assets/img/slide/slide-2.jpg)">
          <div class="opacity">
          <div class="container">
            <h2>Unlock Financial Freedom</h2>
            <p>Get Quick and Reliable Loans for Your Goals</p>
            <a href="{{ route('login') }}" class="btn-get-started scrollto">Apply in Minutes</a>
          </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(website/assets/img/slide/slide-3.jpg)">
          <div class="opacity">
          <div class="container">
            <h2>Flexible Repayment</h2>
            <p>Tailor Your Loan Repayment Schedule to Fit Your Needs</p>
            <a href="{{ route('login') }}" class="btn-get-started scrollto">Explore Repayment <span class="d-none d-md-inline">Options</a>
          </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">


    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta mt-1">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>Facing a Financial Need?</h3>
          <p>When unforeseen expenses arise, we're here to assist you. Our streamlined process ensures quick solutions to your financial challenges.</p>
          <a class="cta-btn scrollto" href="{{ route('login') }}">Apply Now</a>
      </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Loan Application Process</h2>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon d-flex justify-content-center"><i class="fas fa-edit"></i></div>
              <h4 class="title"><a href="">Step 1: Apply Online</a></h4>
              <p class="description">Follow the simple, easy-to-understand instructions to fill out the online loan application.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon d-flex justify-content-center"><i class="fas fa-upload"></i></div>
              <h4 class="title"><a href="">Step 2: Upload Your Documents</a></h4>
              <p class="description">Upload scanned copies of all required documents for document submission.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon d-flex justify-content-center"><i class="fas fa-check-circle"></i></div>
              <h4 class="title"><a href="">Step 3: Verification</a></h4>
              <p class="description">Our loan officers review your application and verify uploaded documents following our company policy.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon d-flex justify-content-center"><i class="fas fa-money-bill-wave"></i></div>
              <h4 class="title"><a href="">Step 4: Get your money!</a></h4>
              <p class="description">The approved loan value is transferred to your bank account upon successful verification.</p>
            </div>
          </div>
        </div>



        </div>

      </div>
    </section><!-- End Featured Services Section -->
    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Our Loan Services</h2>
          <p>Discover how our loan solutions can support your financial journey. Learn more about our commitment to providing assistance.</p>
      </div>

      <div class="row">
          <div class="col-lg-6" data-aos="fade-right">
              <img src="website/assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
              <h3>Discover How We Can Assist You Financially</h3>
              <p class="fst-italic">
                  Explore our offerings to find the perfect solution for your financial needs.
              </p>
              <ul>
                  <li><i class="bi bi-check-circle"></i> Customized loan options tailored to your situation.</li>
                  <li><i class="bi bi-check-circle"></i> Swift and straightforward application process.</li>
                  <li><i class="bi bi-check-circle"></i> Transparent terms and competitive rates.</li>
              </ul>
              <p>
                  Empower your financial journey with our reliable and supportive loan services. We're dedicated to providing you with the assistance you need to reach your goals.
              </p>
              <a class="cta-btn scrollto" href="about.html">Learn More</a>
          </div>
      </div>


      </div>
    </section><!-- End About Us Section -->


    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Client Stories</h2>
          <p>Discover how our loan services have made a difference in the lives of our clients. Hear their experiences and successes.</p>
      </div>

      <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

              <div class="swiper-slide">
                  <div class="testimonial-item">
                      <p>
                          <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                          "Getting a loan through this app was a breeze. The application process was simple, and the quick approval ensured I could tackle my financial need without delays."
                          <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                      </p>
                      <img src="website/assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                      <h3>Edo Faith</h3>
                  </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                  <div class="testimonial-item">
                      <p>
                          <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                          "I'm extremely satisfied with the support I received from this loan app. Their transparent terms and expert guidance ensured I made the right financial decision."
                          <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                      </p>
                      <img src="website/assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                      <h3>Adeopa Omobolaji</h3>
                  </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                  <div class="testimonial-item">
                      <p>
                          <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                          "Thanks to this app, I managed to handle an emergency expense with ease. Their efficient process saved me time and stress during a crucial time."
                          <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                      </p>
                      <img src="website/assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                      <h3>James Daniel</h3>
                  </div>
              </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
      </div>
      </div>
    </section><!-- End Testimonials Section -->



    <!-- ======= Frequently Asked Questioins Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Frequently Asked Questions</h2>
          <p>Explore common questions about our loan services. If you have more inquiries, feel free to contact us.</p>
      </div>

      <ul class="faq-list">
          <li>
              <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">How can I apply for a loan? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
              <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                  <p>
                      Applying for a loan is simple. Just visit our application page, fill out the required information, and submit your application. Our team will review it and get back to you with further steps.
                  </p>
              </div>
          </li>

          <li>
              <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">What documents do I need to provide for my loan application? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
              <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                  <p>
                      To complete your loan application, you'll need to provide identification documents, proof of income, and details about your employment. These documents help us assess your eligibility and tailor the best loan offer for you.
                  </p>
              </div>
          </li>

          <li>
              <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">What is the loan approval process like? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
              <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                  <p>
                      Our loan approval process involves a comprehensive review of your application, including your credit history, income, and loan amount. Once approved, you'll receive the terms of the loan, and upon your agreement, funds will be disbursed to you.
                  </p>
              </div>
          </li>

          <li>
              <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Can I pay off my loan early? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
              <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                  <p>
                      Yes, you can pay off your loan early without incurring any additional fees. We encourage responsible financial management and offer flexibility for our borrowers to repay their loans ahead of schedule.
                  </p>
              </div>
          </li>

          <li>
              <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">What happens if I miss a loan payment? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
              <div id="faq5" class="collapse" data-bs-parent=".faq-list">
                  <p>
                      If you miss a loan payment, we recommend reaching out to our customer support team as soon as possible. We understand that unforeseen circumstances can arise, and we'll work with you to explore possible solutions to avoid any negative impact on your credit.
                  </p>
              </div>
          </li>

          <li>
              <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Is my personal and financial information secure? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
              <div id="faq6" class="collapse" data-bs-parent=".faq-list">
                  <p>
                      Yes, your personal and financial information is treated with the utmost confidentiality and security. We employ industry-standard encryption and security measures to protect your data and ensure a safe application process.
                  </p>
              </div>
          </li>
      </ul>

    </section><!-- End Frequently Asked Questioins Section -->

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
