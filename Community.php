<?php
  include('session.php');
  require 'database_connect.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Coral Reef community</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet" />
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link
      href="assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link
      href="assets/vendor/glightbox/css/glightbox.min.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!--  Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/comunnity.css" rel="stylesheet" />
  </head>

  <body>
    <!-- ======= Header ======= -->
    <header
      id="header"
      class="fixed-top d-flex align-items-center header-transparent"
    >
      <div class="container d-flex align-items-center justify-content-between">
        <div class="logo1">
          <!-- Uncomment below if you prefer to use an image logo -->
          <a href="index.php"
            ><img src="assets/img/logo.png" alt="" class="img-fluid"
          /></a>
        </div>

        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link scrollto" href="index.php">Home</a></li>
            <li><a class="nav-link scrollto" href="index.php">About</a></li>
            <li><a class="nav-link scrollto" href="index.php">Services</a></li>
            <li>
              <a class="nav-link scrollto" href="index.php">Key Segments</a>
            </li>
            <li><a class="nav-link scrollto" href="Map.php">Map</a></li>
            <li>
              <a class="nav-link scrollto" href="Why coral Reef.php"
                >Why Coral Reef</a
              >
            </li>
            <li class="dropdown">
              <a href="#"
                ><span>Account</span> <i class="bi bi-chevron-down"></i
              ></a>
              <ul>
        
              <?php 
                  if($_SESSION['role']=='admin'){
                ?>
              <li><a href="Admin-users-profile.php">Profile</a></li>
              <?php } else { ?>
                <li><a href="User Profile.php">Profile</a></li>
                <?php } ?>
                <!-- <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li> -->
                <li><a href="Logout.php">Logout</a></li>
                <!-- <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li> -->
              </ul>
            </li>
            <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
            <li class="dropdown">
              <a href="#"
                ><span>Features</span> <i class="bi bi-chevron-down"></i
              ></a>
              <ul>
                <li><a href="Prediction.php">Prediction</a></li>
                <li><a href="News.php">News</a></li>
                <li>
                  <a class="nav-link scrollto active" href="Community.php"
                    >Coral Reef Community</a
                  >
                </li>
              </ul>
            </li>
          </ul>

          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
      </div>
    </header>
    <!-- End Header -->

    <main id="main">
      <!-- ======= Breadcrumbs ======= -->
      <div
        class="breadcrumbs d-flex align-items-center"
        style="background-image: url('assets/img/Article/2.jpg')"
      >
        <div
          class="container position-relative d-flex flex-column align-items-center"
          data-aos="fade"
        >
          <h2>CORAL REEF COMMUNITY</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Community Page</li>
          </ol>
        </div>
      </div>
      <!-- End Breadcrumbs -->

      <section class="Community">
        <div class="container">
          <div class="card mb-3">
            <div class="card-body">
              <form action="addPost.php" method="post" role="form" enctype="multipart/form-data">
                <div class="post">
                  <div class="form-group mt-3">
                    <textarea
                      class="form-control"
                      name="message"
                      rows="5"
                      placeholder="Add new Post"
                      style="border: none"
                    ></textarea>
                    <input type="file" name="post_img" class="btn btn-primary btn-sm" title="Upload new profile image"/>
                    <button type="submit" class="btn btn-primary">Post</button>
                  </div>
                </div>
              </form>
              <?php
                $query="select * from post;";
                $result=mysqli_query($conn,$query);
                while($row=mysqli_fetch_assoc($result)){
              ?>
              <div class="card2" >
              <div class="comment" >
                <div class="nav-profile d-flex align-items-center" >
                  
                  <?php
                    $conn1=new mysqli("localhost:3308","root","","coralbarrer");
                    if($row['role']=='user'){
                      $query1="select * from users where email='".$row['user_email']."';";
                    }
                    else{
                      $query1="select * from admins where email='".$row['user_email']."';";
                    }
                    $result1=mysqli_query($conn1,$query1);
                    if($result1){
                      $row1=mysqli_fetch_assoc($result1);
                    }
                    else{
                      echo mysqli_error($conn1);
                    }
                    
                  ?>
                  <img
                    src="<?php echo $row1['profile_pic']?>";
                    alt="Profile"
                    class="rounded-circle"
                    style="max-height:75px;width:20%px"
                  />
                  <span><?php echo $row1['name'];?></span>
                  <?php 
                    if($row1['email']==$_SESSION['logged_email'] || $_SESSION['role']=='admin'){
                  ?>
                  <div class="btn-text-right">
                    <a href="deletePost.php?email=<?php echo $row1['email'];?>&pid=<?php echo $row['post_id'];?>">
                    <button type="button" class="btn">delete</button>
                    </a>
                  </div>
                  <?php }?>
                </div>
                
                <p><?php echo $row['post']; ?></p>
                <hr size="5" width="100%" />
                <div class="postimg">
                  <img src="<?php echo $row['post_img']; ?>" alt="Image"  />
                </div>
                
                <form method="post" action="addComment.php">
                  
                    <div class="input-group">
                      <input
                        type="text"
                        placeholder="write a comment"
                        style="width:90%"
                        name="comment"
                      />
                      <input type="text" value="<?php echo $row['post_id'];?>" hidden name="post_id">
                      <button type="submit" class="btn btn-primary">
                        Comment
                      </button>
                    </div>
                  </form>
                  
                    <?php
                      $conn1=new mysqli("localhost:3308","root","","coralbarrer");
                      $query1="select * from comment where post_id=".$row['post_id'].";";
                      $result1=mysqli_query($conn1,$query1);
                     
                      while($row1=mysqli_fetch_assoc($result1)){
                        $conn2=new mysqli("localhost:3308","root","","coralbarrer");
                        if($row1['role']=='user'){
                          $query2="select * from USERS where email ='".$row1['user_email']."';";
                        }
                        else{
                          $query2="select * from admins where email ='".$row1['user_email']."';";
                        }
                        $result2=mysqli_query($conn2,$query2);
                        $row2=mysqli_fetch_assoc($result2);
                  ?>
                  <div class= "usercommet">
                    <div class="nav-profile d-flex align-items-center">
                      <img
                        src="<?php echo $row2['profile_pic'];?>"
                        alt="Profile"
                        class="rounded-circle"
                        style="max-height:75px;width:20%px"
                      />
                      <p><?php echo $row1['user_email'];?></p>
                    </div>
                    <p style="margin-left:10px"><?php echo $row1['msg'];?></p>
                    <?php }?>
              <?php }?>
              </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
      <div class="footer-content position-relative">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-6">
              <div class="footer-info">
                <h3>CORALBARRIER</h3>
                <p>
                  A108 Adam Street <br />
                  NY 535022, USA<br /><br />
                  <strong>Phone:</strong> +1 5589 55488 55<br />
                  <strong>Email:</strong> CoralBarrier@gmail.com<br />
                </p>
                <div class="social-links d-flex mt-3">
                  <a
                    href="#"
                    class="d-flex align-items-center justify-content-center"
                    ><i class="bi bi-twitter"></i
                  ></a>
                  <a
                    href="#"
                    class="d-flex align-items-center justify-content-center"
                    ><i class="bi bi-facebook"></i
                  ></a>
                  <a
                    href="#"
                    class="d-flex align-items-center justify-content-center"
                    ><i class="bi bi-instagram"></i
                  ></a>
                  <a
                    href="#"
                    class="d-flex align-items-center justify-content-center"
                    ><i class="bi bi-linkedin"></i
                  ></a>
                </div>
              </div>
            </div>
            <!-- End footer info column-->

            <div class="col-lg-2 col-md-3 footer-links">
              <h4>Useful Links</h4>
              <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">About us</a></li>
                <li><a href="Prediction.php">Prediction</a></li>
                <li><a href="News.php">News</a></li>
                <li><a href="#">Coral Reef Community</a></li>
              </ul>
            </div>
            <!-- End footer links column-->

            <div class="col-lg-2 col-md-3 footer-links">
              <h4>Objectives</h4>
              <ul>
                <li><a href="#">Coral Reef Prediction</a></li>
                <li><a href="#">Coral Reef Latets News</a></li>
                <li><a href="#">Community</a></li>
                <li><a href="#">Educational</a></li>
                <li><a href="#">Protection</a></li>
              </ul>
            </div>
            <!-- End footer links column-->

            <div class="col-lg-2 col-md-3 footer-links">
              <h4>About Us</h4>
              <p>
                Coral Guardian protects coral ecosystems through the involvement
                of local populations and raising awareness among the general
                public
              </p>
            </div>
            <!-- End footer links column-->
          </div>
        </div>
      </div>

      <div class="footer-legal text-center position-relative">
        <div class="container">
          <div class="copyright">
            <strong><span>CoralBarrer</span></strong
            >. All Rights Reserved
          </div>
        </div>
      </div>
    </footer>
    <!-- End Footer -->

    <a
      href="#"
      class="back-to-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

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
