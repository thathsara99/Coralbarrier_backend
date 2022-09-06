<?php
  include ('crud.php');
  $name="";
  $nameErr="";
  $email="";
  $emailErr="";
  $country="";
  $countryErr="";
  $contact_no="";
  $contact_noErr="";
  $password="";
  $passwordErr="";
  $cpasswordErr="";
  $register_status="";

  if(isset($_POST['register'])){
    if(empty($_POST['name'])){
      $nameErr="Please, enter your name!";
    }
    
    if(empty($_POST['email'])){
      $emailErr="Please enter a valid Email adddress!";
    }
    else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
      $emailErr = "Invalid email format";
    }
    else{
      $obj=new CrudOperation();
      $temp=$obj->test_input($_POST['email']);

      if($obj->user_email_duplicate_check($temp)){
        $emailErr = "Existing email";
      }
    }
  
    if(empty($_POST['country'])){
      $countryErr="Please, enter your country!";
    }
    
    if(empty($_POST['contact_no'])){
      $contact_noErr="Please, enter your contact Number!";
    }
    else if(!is_numeric($_POST['contact_no'])){
      $contact_noErr="Please, enter only Number!";
    }
    
    if(empty($_POST['password'])){
      $passwordErr="Please enter your password!";
    }
    
    if(empty($_POST['cpassword'])){
      $cpasswordErr="Please enter your password!";
    }
    else if($_POST['password']!=$_POST['cpassword']){
      $cpasswordErr="Password Not match!";
    }

    if(empty($nameErr)&&empty($emailErr)&&empty($countryErr)&&empty($contact_noErr)&&empty($passwordErr)&&empty($cpasswordErr)&&isset($_POST['terms'])){
      $obj=new CrudOperation();
      $name=$obj->test_input($_POST['name']);
      $email=$obj->test_input($_POST['email']);
      $country=$obj->test_input($_POST['country']);
      $contact_no=$obj->test_input($_POST['contact_no']);
      $password=$obj->test_input($_POST['password']);
      $register_status=$obj->add_user($name,$email,$country,$contact_no,$password);
      if($register_status=="success"){
        header('location:Login.php');
      }
    }
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Register</title>
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
  <link href="assets/css/Register.css" rel="stylesheet">

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
        <li><a class="nav-link scrollto" href="index.php">Home</a></li>
        <li><a class="nav-link scrollto" href="index.php">About</a></li>
        <li><a class="nav-link scrollto" href="index.php">Services</a></li>
        <li><a class="nav-link scrollto " href="index.php">Key Segments</a></li>
        <li><a class="nav-link scrollto" href="Map.php">Map</a></li>
        <li><a class="nav-link scrollto" href="Why coral Reef.php">Why Coral Reef</a></li>
        <li class="dropdown" class="nav-link scrollto active"><a href="#account"><span>Account</span> <i class="bi bi-chevron-down"></i></a>
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
            <li><a href="Prediction.php">Prediction</a></li>
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

        <h2>REGISTER</h2>
        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Register</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <section id="account" class="account">
      <div class="container">

        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
  
                <div class="card mb-3">
  
                  <div class="card-body">
  
                    <div class="pt-4 pb-2">
                      <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                      <p class="text-center small">Enter your personal details to create account</p>
                    </div>
  
                    <form class="row g-3 needs-validation" novalidate method="post">
                      <div class="col-12">
                        <label for="yourName" class="form-label">Your Name</label>
                        <input type="text" name="name" class="form-control" id="yourName" required>
                        <div class="invalid-feedback">Please, enter your name!</div>
                        <div class="text-danger"><?php echo $nameErr;?></div>
                      </div>
  
                      <div class="col-12">
                        <label for="yourEmail" class="form-label">Your Email</label>
                        <div class="input-group has-validation">
                          <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="email" name="email" class="form-control" id="yourEmail" required>
                        <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                        <div class="text-danger"><?php echo $emailErr;?></div>
                        </div>
                      </div>
  
                      <div class="col-12">
                        <label for="yourName" class="form-label">Your Country</label>
                        <input type="text" name="country" class="form-control" id="yourContry" required>
                        <div class="invalid-feedback">Please, enter your country!</div>
                        <div class="text-danger"><?php echo $countryErr;?></div>
                      </div>
                      
                      <div class="col-12">
                        <label for="yourName" class="form-label">Contact Number</label>
                        <input type="text" pattern="[0-9]*" name="contact_no" class="form-control" id="contact_no" required>
                        <div class="invalid-feedback">Please, enter your contact Number!</div>
                        <div class="text-danger"><?php echo $contact_noErr;?></div>
                      </div>
  
                      <div class="col-12">
                        <label for="yourPassword" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="yourPassword" required>
                        <div class="invalid-feedback">Please enter your password!</div>
                        <div class="text-danger"><?php echo $passwordErr;?></div>
                      </div>

                      <div class="col-12">
                        <label for="yourPassword" class="form-label">Confirm Password</label>
                        <input type="password" name="cpassword" class="form-control" id="cpassword" required>
                        <div class="invalid-feedback">Please enter your password!</div>
                        <div class="text-danger"><?php echo $cpasswordErr;?></div>
                      </div>
  
                      <div class="col-12">
                        <div class="form-check">
                          <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                          <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
                          <div class="invalid-feedback">You must agree before submitting.</div>
                        </div>
                      </div>
                      <div class="col-12">
                        <button class="btn btn-primary w-100" type="submit" name="register">Create Account</button>
                      </div>
                      <div class="col-12">
                        <p class="small mb-0">Already have an account? <a href="Login.php">Log in</a></p>
                      </div>
                      <div class="text-danger"><?php echo $register_status;?></div>
                    </form>
  
                  </div>
                </div>
              </div>
            </div>
          </div>
  
        </section>

      </div>
    </section>

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