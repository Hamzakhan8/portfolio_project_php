<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>my portfolio</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
    <?php
                          $conn=mysqli_connect("localhost","root","","portfolio","3308");
                          $result=mysqli_query($conn," SELECT * from header ");
                          while ($row=mysqli_fetch_array($result)) {
                            # code...
                         
                        ?>

                        
  <!-- Favicons -->
  <link href="../AdminLTE-master/<?php echo $row['logo']; ?>" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: DevFolio - v2.4.1
  * Template URL: https://bootstrapmade.com/devfolio-bootstrap-portfolio-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body id="page-top">

  <!-- ======= Header/ Navbar ======= -->
  <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container" >
      <a class="navbar-brand js-scroll" href="#home">

       
        <img style="width: 100px;height: 50px;" src="../AdminLTE-master/<?php echo $row['logo']; ?>"></a>
      <?php };?>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll active" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#service">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#work">Work</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#blog">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- ======= Intro Section ======= -->

  


  <?php
                          $conn=mysqli_connect("localhost","root","","portfolio","3308");
                          $result=mysqli_query($conn," SELECT * from header ");
                          while ($row=mysqli_fetch_array($result)) {
                            # code...
                         
                        ?>

<div id="home" class="intro route bg-image" style="background-image: url(../AdminLTE-master/<?php echo $row['bg_image']; ?>)">
    <div class="overlay-itro"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container" >
          <!--<p class="display-6 color-d">Hello, world!</p>-->
          <div class="head_text"> 
          <h2 class="intro-title mb-4"> <?php echo $row['h1']; ?> </h2>
          <p class="intro-subtitle"><span class="text-slider-items"><?php echo $row['h2']; ?></span><strong class="text-slider"></strong></p>
<?php }; ?>
          <div class="socials_top">
                      <ul>
                      <?php
                          $conn=mysqli_connect("localhost","root","","portfolio","3308");
                         $result=mysqli_query($conn," SELECT * from social_url ");
                          while ($row=mysqli_fetch_array($result)) {
                            
                        ?>
                        <li><a href="<?php echo $row['facebook_url']; ?>"><span class="ico-circle"><i class="ion-social-facebook"></i></span></a></li>
                        <li><a href="<?php echo $row['insta_url']; ?>"><span class="ico-circle"><i class="ion-social-instagram"></i></span></a></li>
                        <li><a href="<?php echo $row['twitter_url']; ?>"><span class="ico-circle"><i class="ion-social-twitter"></i></span></a></li>
                        <?php }; ?>
                       
                       
                    </div>

          </div>        
        </div>
      </div>
    </div>
  </div>
  <!-- End Intro Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <?php

      include"include/about.php";

    ?>

    <!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="service" class="services-mf pt-5 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Services
              </h3>
              <?php
              $conn=mysqli_connect('localhost','root','','portfolio','3308');

              $result=mysqli_query($conn,"SELECT * FROM services" ) ;
              while ($row=mysqli_fetch_array($result)) {
          
             


              ?>
              <p class="subtitle-a">
             <?php echo $row['para1']; ?>
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="ion-monitor"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">Web Design</h2>
                <p class="s-description text-center">
                  <?php echo $row['para2']; ?>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="ion-code-working"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">Web Development</h2>
                <p class="s-description text-center">
                 <?php echo $row['para3']; ?>
                </p>
              </div>
            </div>
          </div>
          
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="ion-android-phone-portrait"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">Responsive Design</h2>
                <p class="s-description text-center">
                  <?php echo $row['para4']; ?>
                </p>
              <?php };?>
              </div>
            </div>
          </div>
          
          
    </section><!-- End Services Section -->

    <!-- ======= Counter Section ======= -->
    <div class="section-counter paralax-mf bg-image" style="background-image: url(assets/img/counters-bg.jpg)">
      <div class="overlay-mf"></div>
      <div class="container" >
        <div class="row">
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="ion-checkmark-round"></i></span>
              </div>
              <div class="counter-num">
                <p class="counter">450</p>
                <span class="counter-text">WORKS COMPLETED</span>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="ion-ios-calendar-outline"></i></span>
              </div>
              <div class="counter-num">
                <p class="counter">15</p>
                <span class="counter-text">YEARS OF EXPERIENCE</span>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="ion-ios-people"></i></span>
              </div>
              <div class="counter-num">
                <p class="counter">550</p>
                <span class="counter-text">TOTAL CLIENTS</span>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="ion-ribbon-a"></i></span>
              </div>
              <div class="counter-num">
                <p class="counter">36</p>
                <span class="counter-text">AWARD WON</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Counter Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="work" class="portfolio-mf sect-pt4 route">
      <div class="container" >
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                TEAM MEMBER
              </h3>
              <p class="subtitle-a">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="work-box">
              <a href="assets/img/work-1.jpg" data-gall="portfolioGallery" class="venobox">
                <div class="work-img">
                  <img src="assets/img/work-1.jpg" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Lorem impsum dolor</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <a href="portfolio-details.html"> <span class="ion-ios-plus-outline"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="work-box">
              <a href="assets/img/work-2.jpg" data-gall="portfolioGallery" class="venobox">
                <div class="work-img">
                  <img src="assets/img/work-2.jpg" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Loreda Cuno Nere</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <a href="portfolio-details.html"> <span class="ion-ios-plus-outline"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="work-box">
              <a href="assets/img/work-3.jpg" data-gall="portfolioGallery" class="venobox">
                <div class="work-img">
                  <a href="portfolio-details.html"> <img src="assets/img/work-3.jpg" alt="" class="img-fluid"></a>
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Mavrito Lana Dere</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <a href="portfolio-details.html">
                      <span class="ion-ios-plus-outline"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
         

        </div>
      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->

  <?php
                          $conn=mysqli_connect('localhost','root','','portfolio','3308');
                          $result=mysqli_query($conn," SELECT * from my  ");
                          

                          if ($result ) {
                            # code...
                          
                          while ($row=mysqli_fetch_array($result)) {
                            # code...
                         
                        ?>
    
    <div class="testimonials paralax-mf bg-image" style="background-image: url(assets/img/overlay-bg.jpg)">
      <div class="overlay-mf"></div>
      <div class="container" >
        <div class="row">
          <div class="col-md-12">
            <div id="testimonial-mf" class="owl-carousel owl-theme">
              <div class="testimonial-box">
                <div class="author-test">
                  <img src="../AdminLTE-master/<?php echo $row['image']; ?>" alt="" class="rounded-circle b-shadow-a">
                  <span class="author"><?php echo $row['name']; ?></span>
                </div>
                <div class="content-test">
                  <p class="description lead">
                   <?php echo $row['para1']; ?>
                  </p>
                  <span class="comit"><i class="fa fa-quote-right"></i></span>
                </div>
              </div>
              <div class="testimonial-box">
                <div class="author-test">
                                        
                  <img src="../AdminLTE-master/<?php echo $row['image']; ?>" alt="" class="rounded-circle b-shadow-a">

                  <span class="author"><?php echo $row['name']; ?></span>
                </div>
                <div class="content-test">
                  <p class="description lead">
                 <?php echo $row['para1']; ?>
                  </p>
                  <span class="comit"><i class="fa fa-quote-right"></i></span>
                <?php }}; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Testimonials Section -->

    <!-- ======= Blog Section ======= -->
    <?php

    include"include/blog.php";


    ?><!-- End Blog Section -->

    <!-- ======= Contact Section ======= -->
    <?php
    include"include/contact.php"
    ?>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="copyright-box">
            <p class="copyright">&copy; Copyright <strong>HAMZA</strong>. All Rights Reserved</p>
            <div class="credits">
              
              Designed by <a href="https://bootstrapmade.com/">HAMZA KHAN</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/jquery.counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
      <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        duration: 1000,
        once: true,
      });
    </script>

</body>

</html>
