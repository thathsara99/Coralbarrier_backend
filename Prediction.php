<?php
  session_start()

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Prediction</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/Prediction.css" rel="stylesheet">


</head>

<body>

  <!-- ======= Header ======= -->
 <header id="header" class="fixed-top d-flex align-items-center  header-transparent ">
       

  <div class="container d-flex align-items-center justify-content-between">

    <div class="logo1">
      <!-- Uncomment below if you prefer to use an image logo -->
       <a href="index.php"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
    </div>

    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link scrollto" href="#hero">Home</a></li>
        <li><a class="nav-link scrollto" href="#about">About</a></li>
        <li><a class="nav-link scrollto" href="#services">Services</a></li>
        <li><a class="nav-link scrollto " href="#portfolio">Key Segments</a></li>
        <li><a class="nav-link scrollto" href="Map.php">Map</a></li>
        <li><a class="nav-link scrollto" href="#team">Why Coral Reef</a></li>
        <li class="dropdown"><a href="#"><span>Account</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
          <?php
                if(isset($_SESSION['logged_email'])){
              ?>
              <?php 
                  if($_SESSION['role']=='admin'){
                ?>
                <li><a href="Admin-users-profile.php">Profile</a></li>
                <li><a href="Logout.php">Logout</a></li>
              <?php } else { ?>
                <li><a href="User Profile.php">Profile</a></li>
                <li><a href="Logout.php">Logout</a></li>
                <?php } ?>
              <?php } else{ ?>
              <li><a href="Register.php">Register</a></li>
              <li><a href="Login.php">Login</a></li>
              <?php } ?>
            <!-- <li><a href="#">Drop Down 3</a></li>
            <li><a href="#">Drop Down 4</a></li> -->
          </ul>
        </li>
        <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        <li class="dropdown"><a href="#"><span>Features</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a class="nav-link scrollto active" href="#">Prediction</a></li>
            <li><a href="News.php">News</a></li>
            <li><a href="Community.php">Coral Reef Community</a></li>
          </ul>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </div>
</header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/Article/2.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>PREDICTION</h2>
        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Sample Inner Page</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <section id="appointment" class="appointment section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Coral Reef Prediction</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <form action="#" method="post" role="form" class="php-email-form">
          <div class="row">
            <div class="col-md-4 form-group">
                <div class="section-title">
                    <h3>Select year & month to get prediction.</h3>
                </div>
              <input type="text" name="name" class="form-control" id="name" placeholder="Year" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 form-group mt-3">
              <select name="department" id="department" class="form-select">
                <option value="">Select Month</option>
                <option value="Department 1">January</option>
                <option value="Department 2">February</option>
                <option value="Department 3">March</option>
                <option value="Department 3">April</option>
                <option value="Department 3">May</option>
                <option value="Department 3">June</option>
                <option value="Department 3">July</option>
                <option value="Department 3">August</option>
                <option value="Department 3">September</option>
                <option value="Department 3">November</option>
                <option value="Department 3">December</option>
              </select>
              
            </div>
          </div><br>
          <div class="text-center"><button type="submit">Predict</button></div><br>
          <div class="section-title">
          <h3>Coral Reef Prediction according to your selection.</h3>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Prediction Details"></textarea>
          </div>
        </form>

      </div>
    </section><!-- End Appointment Section -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content position-relative">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>CORALBARRIER</h3>
              <p>
                A108 Adam Street <br>
                NY 535022, USA<br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> CoralBarrier@gmail.com<br>
              </p>
              <div class="social-links d-flex mt-3">
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-twitter"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-facebook"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-instagram"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End footer info column-->

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="#">About us</a></li>
              <li><a href="Prediction.php">Prediction</a></li>
              <li><a href="News.php">News</a></li>
              <li><a href="#">Coral Reef Community</a></li>
            </ul>
          </div><!-- End footer links column-->

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Objectives</h4>
            <ul>
              <li><a href="#">Coral Reef Prediction</a></li>
              <li><a href="#">Coral Reef Latets News</a></li>
              <li><a href="#">Community</a></li>
              <li><a href="#">Educational</a></li>
              <li><a href="#">Protection</a></li>
            </ul>
          </div><!-- End footer links column-->

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>About Us</h4>
            <p>Coral Guardian protects coral ecosystems through the involvement of local populations and raising awareness among the general public</p>
          </div><!-- End footer links column-->

          

        </div>
      </div>
    </div>

    <div class="footer-legal text-center position-relative">
      <div class="container">
        <div class="copyright">
          <strong><span>CoralBarrer</span></strong>. All Rights Reserved
        </div>
      </div>
    </div>

  </footer>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
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