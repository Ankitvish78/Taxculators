<?php include 'sendemail.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contact</title>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shiconnk-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/contact.css">

    <!--hover.css-->
        <link rel="stylesheet" href="css/hover-min.css">
    <link rel="shortcut icon" type="image/icon" href="images/Fevicon.png"/>
</head>
<body>

	<div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>

      <header class="site-navbar site-navbar-target bg-white" role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">
            <div class="col-lg-12 text-center">
              <div class="site-logo">
                <a href="index.html"><img src="images/logo.png"></a>
              </div>
              <div class="ml-auto toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h1 text-black"></span></a></div>
            </div>
          </div>
        </div>

      </header>
      
      <div class="site-navbar site-navbar-target bg-white" role="banner">
        <div class="container">
          <div class="row align-items-center position-relative">
            <div class="col-lg-9">
              <nav class="site-navigation text-right ml-auto " role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                  <li><a href="index.html" class="nav-link">Home</a></li>
                  <li><a href="about.html" class="nav-link">About Us</a></li>
                  <li><a href="services.html" class="nav-link">Services</a></li>
                  <li><a href="blog.html" class="nav-link">Blog</a></li>
                  <li><a href="Career.html" class="nav-link">Career</a></li>
                  <li class="active"><a href="contact.php" class="nav-link">Contact</a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Contact</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Contact</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <div class="map-section">
      <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3768.504448875367!2d72.83933221473121!3d19.173157287032243!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b657e056657b%3A0x4d8d97c24813b626!2sRustomjee%20Ozone!5e0!3m2!1sen!2sin!4v1645088358929!5m2!1sen!2sin" frameborder="0" allowfullscreen></iframe>
    </div>

    <section id="contact" class="contact">
      <div class="container">

        <div class="row justify-content-center" data-aos="fade-up">

          <div class="col-lg-10">

            <div class="info-wrap">
              <div class="row">
                <div class="col-lg-4 info">
                  <i class="icon-map-marker"></i>
                  <h4>Location:</h4>
                  <p>T1/903, Rustomjee Ozone, Near Inorbit Mall, GMLR, Goregaon West, Mumbai - 400102</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="icon-envelope"></i>
                  <h4>Email:</h4>
                  <p>Taxculators@gmail.com<br>contact@example.com</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="icon-phone"></i>
                  <h4>Call:</h4>
                  <p>+91 93263 86681<br>+1 5589 22475 14</p>
                </div>
              </div>
            </div>

          </div>
        </div>

        <div class="row mt-5 justify-content-center" data-aos="fade-up">
          <div class="col-lg-10">
            <form action="" method="post" role="form" class="php-email-form contact">
              <!--alert messages start-->
                <?php echo $alert; ?>
              <!--alert messages end-->

              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" name="email" class="form-control" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" name="mobile" class="form-control" id="mobile" placeholder="Mobile Number" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <!--<div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>-->
              <div class="text-center send-btn"><button type="submit" name="submit" value="Send">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->


    <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
              <img src="images/logo.png" alt="">
            </a>
            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="icon-twitter"></i></a>
              <a href="#" class="facebook"><i class="icon-facebook"></i></a>
              <a href="#" class="instagram"><i class="icon-instagram"></i></a>
              <a href="#" class="linkedin"><i class="icon-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="icon-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="icon-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="icon-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="icon-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="icon-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="icon-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="icon-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="icon-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="icon-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="icon-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Contact Us</h4>
            <p>
              T1/903, Rustomjee Ozone <br>
              Near Inorbit Mall, GMLR,<br>
              Goregaon (W), Mumbai - 400102 <br><br>
              <strong>Phone:</strong> +91 93263 86681<br>
              <strong>Email:</strong> Taxculators@gmail.com<br>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Taxculators</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://ankitvish78.github.io/Ankit-Vish/">Ankitvish</a>
      </div>
    </div>
  </footer><!-- End Footer -->

    <!--<div id="preloader"></div>
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="icon-arrow-up"></i></a> -->

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/main.js"></script>

    <script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }
    </script>

</body>
</html>