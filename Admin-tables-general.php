<?php
    include('session.php');
    require 'database_connect.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Admin Data Tables</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect" />
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link
      href="assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet" />
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet" />
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    />

    <!-- Template Main CSS File -->
    <link href="assets/css/Adminstyle.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
  </head>

  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
      <div class="d-flex align-items-center justify-content-between">
        <i class="bi bi-list toggle-sidebar-btn"></i>
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
            <li class="dropdown">
              <a href="#"
                ><span>Features</span> <i class="bi bi-chevron-down"></i
              ></a>
              <ul>
                <li><a href="Prediction.php">Prediction</a></li>
                <li><a href="News.php">News</a></li>
                <li><a href="Community.php">Coral Reef Community</a></li>
              </ul>
            </li>
          </ul>

          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
      </div>
      <!-- End Logo -->
    </header>
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">
      <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
          <a class="nav-link" href="Admin.php">
            <i class="bi bi-grid"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <!-- End Dashboard Nav -->

        <li class="nav-item">
          <a
            class="nav-link collapsed"
            data-bs-target="#forms-nav"
            data-bs-toggle="collapse"
            href="#"
          >
            <i class="bi bi-journal-text"></i><span>Forms</span
            ><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul
            id="forms-nav"
            class="nav-content collapse"
            data-bs-parent="#sidebar-nav"
          >
            <li>
              <a href="Admin-forms-elements.php">
                <i class="bi bi-circle"></i><span>Form Elements</span>
              </a>
            </li>
            <li>
              <a href="Admin-forms-layouts.php">
                <i class="bi bi-circle"></i><span>Form Layouts</span>
              </a>
            </li>
          </ul>
        </li>
        <!-- End Forms Nav -->

        <li class="nav-item">
          <a
            class="nav-link collapsed"
            data-bs-target="#tables-nav"
            data-bs-toggle="collapse"
            href="#"
          >
            <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span
            ><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul
            id="tables-nav"
            class="nav-content collapse"
            data-bs-parent="#sidebar-nav"
          >
            <li>
              <a href="Admin-tables-general.php">
                <i class="bi bi-circle"></i><span>General Tables</span>
              </a>
            </li>
          </ul>
        </li>
        <!-- End Tables Nav -->
        <li class="nav-heading">Pages</li>

        <li class="nav-item">
          <a class="nav-link collapsed" href="Admin-users-profile.php">
            <i class="bi bi-person"></i>
            <span>Profile</span>
          </a>
        </li>
        <!-- End Profile Page Nav -->

        <li class="nav-item">
          <a class="nav-link collapsed" href="Admin-pages-register.php">
            <i class="bi bi-card-list"></i>
            <span>Register</span>
          </a>
        </li>
        <!-- End Register Page Nav -->

        <li class="nav-item">
          <a class="nav-link collapsed" href="Admin-pages-login.php">
            <i class="bi bi-box-arrow-in-right"></i>
            <span>Login</span>
          </a>
        </li>
        <!-- End Login Page Nav -->

        <li class="nav-item">
          <a class="nav-link collapsed" href="pages-blank.php">
            <i class="bi bi-file-earmark"></i>
            <span>Blank</span>
          </a>
        </li>
        <!-- End Blank Page Nav -->
      </ul>
    </aside>
    <!-- End Sidebar-->

    <main id="main" class="main">
      <div class="pagetitle">
        <h1>General Tables</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item">Tables</li>
            <li class="breadcrumb-item active">General</li>
          </ol>
        </nav>
      </div>
      <!-- End Page Title -->

      <section class="section">
        <div class="row">
          <div class="col-lg-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">All News</h5>

                <!-- Default Table -->
                <table class="table">
                  <thead>
                  
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Title</th>
                      <th scope="col">Description</th>
                      <th scope="col">Image</th>
                      <th scope="col"></th>
                      <th scope="col">Action</th>
                    </tr>
                    
                  </thead>
                  <tbody>
                  <?php
                    $query="select * from news where type='news';";
                    $result=mysqli_query($conn,$query);
                    
                    while($row=mysqli_fetch_assoc($result)){
                  ?>
                    <tr>
                      <th scope="row">1</th>
                      <td><?php echo $row['title'];?></td>
                      <td><?php echo $row['description'];?></td>
                      <td>
                        <img
                          class="admin-project-image"
                          src="<?php echo $row['img'];?>"
                        />
                      </td>
                      <td><?php echo $row['date'];?></td>
                      <td>
                      <a href="deleteNews.php?id=<?php echo $row['news_id'];?>">
                        <button
                          class="btn btn-danger"
                          style="margin-left: 5px"
                          type="submit"
                        >
                          <i
                            class="glyphicon glyphicon-remove"
                            style="font-size: 15px"
                          ></i>
                        </button></a>
                      </td>
                    </tr>
                    <?php }?>
                  </tbody>
                </table>
                <!-- End Default Table Example -->
              </div>
            </div>

            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Why Coral Reef</h5>

                <!-- Table with hoverable rows -->
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Title</th>
                      <th scope="col">Description</th>
                      <th scope="col">Image</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                    $query="select * from news where type='Coral';";
                    $result=mysqli_query($conn,$query);
                    
                    while($row=mysqli_fetch_assoc($result)){
                  ?>
                    <tr>
                      <th scope="row">1</th>
                      <td><?php echo $row['title'];?></td>
                      <td><?php echo $row['description'];?></td>
                      <td>
                        <img
                          class="admin-project-image"
                          src="<?php echo $row['img'];?>"
                        />
                      </td>
                      <td><?php echo $row['date'];?></td>
                      <td>
                        <a href="deleteNews.php?id=<?php echo $row['news_id'];?>">
                        <button
                          class="btn btn-danger"
                          style="margin-left: 5px"
                          type="submit"
                        >
                          <i
                            class="glyphicon glyphicon-remove"
                            style="font-size: 15px"
                          ></i>
                        </button></a>
                      </td>
                    </tr>
                    <?php }?>
                  </tbody>
                </table>
                <!-- End Table with hoverable rows -->
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">All Users</h5>

                <!-- Table with hoverable rows -->
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">User Name</th>
                      <th scope="col">Email</th>
                      <th scope="col">Contact Number</th>
                      <th scope="col">Role</th>
                      <th scope="col">Image</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                      $query="select * from users;";
                      $result=mysqli_query($conn,$query);
                      
                      while($row=mysqli_fetch_assoc($result)){
                    ?>
                    <tr>
                    
                      <th scope="row">1</th>
                      <td><?php echo $row['name'];?></td>
                      <td><?php echo $row['email'];?></td>
                      <th scope="col"><?php echo $row['contact_no'];?></th>
                      <th scope="col"><?php echo $row['role'];?></th>
                      <td>
                        <img
                          class="admin-project-image"
                          src="<?php echo $row['profile_pic'];?>"
                        />
                      </td>
                      <td>
                      <a href="deleteUser.php?id=<?php echo $row['user_id'];?>">
                        <button
                          class="btn btn-danger"
                          style="margin-left: 5px"
                          type="submit"
                        >
                          <i
                            class="glyphicon glyphicon-remove"
                            style="font-size: 15px"
                          ></i>
                        </button></a>
                      </td>
                    </tr>
                    <?php } ?>
                    <?php
                      $query="select * from admins;";
                      $result=mysqli_query($conn,$query);
                      
                      while($row=mysqli_fetch_assoc($result)){
                    ?>
                    <tr>
                    
                      <th scope="row">1</th>
                      <td><?php echo $row['name'];?></td>
                      <td><?php echo $row['email'];?></td>
                      <th scope="col"></th>
                      <th scope="col"><?php echo $row['role'];?></th>
                      <td>
                        <img
                          class="admin-project-image"
                          src="<?php echo $row['profile_pic'];?>"
                        />
                      </td>
                      <td>
                        <a href="deleteAdmin.php?id=<?php echo $row['admin_id'];?>">
                        <button
                          class="btn btn-danger"
                          style="margin-left: 5px"
                          type="submit"
                        >
                          <i
                            class="glyphicon glyphicon-remove"
                            style="font-size: 15px"
                          ></i>
                        </button></a>
                      </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
                <!-- End Table with hoverable rows -->
              </div>
            </div>

            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Coaral Reef Community</h5>

                <!-- Table with hoverable rows -->
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">User Name</th>
                      <th scope="col">Email</th>
                      <th scope="col">Message</th>
                      <th scope="col">Image</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                      $query="select * from post;";
                      $result=mysqli_query($conn,$query);
                      
                      while($row=mysqli_fetch_assoc($result)){
                    ?>
                    <tr>
                    <?php
                      $conn1=new mysqli("localhost:3308","root","","coralbarrer");
                      $query1="select * from users where email='".$row['user_email']."';";
                      $result1=mysqli_query($conn1,$query1);
                      if($result1){
                        $row1=mysqli_fetch_assoc($result1);
                      }
                      else{
                        echo mysqli_error($conn1);
                      }
                    ?>
                      <th scope="row">1</th>
                      <td><?php echo $row1['name']?></td>
                      <td><?php echo $row1['email']?></td>
                      <th scope="col"><?php echo $row['post']?></th>
                      <td>
                        <img
                          class="admin-project-image"
                          src="<?php echo $row['post_img']?>"
                        />
                      </td>
                      <td>
                        <a href="deletePost1.php?id=<?php echo $row['post_id']?>">
                        <button
                          class="btn btn-danger"
                          style="margin-left: 5px"
                          type="submit"
                        >
                          <i
                            class="glyphicon glyphicon-remove"
                            style="font-size: 15px"
                          ></i>
                        </button></a>
                      </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
                <!-- End Table with hoverable rows -->
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <!-- End #main -->
    <a
      href="#"
      class="back-to-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.min.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/Adminmain.js"></script>
  </body>
</html>
