<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Forms / Layouts - NiceAdmin Bootstrap Template</title>
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

    <!-- Template Main CSS File -->
    <link href="assets/css/Adminstyle.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <!--This is for header-->
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
            <li><a class="nav-link scrollto" href="#hero">Home</a></li>
            <li><a class="nav-link scrollto" href="#about">About</a></li>
            <li><a class="nav-link scrollto" href="#services">Services</a></li>
            <li>
              <a class="nav-link scrollto" href="#portfolio">Key Segments</a>
            </li>
            <li><a class="nav-link scrollto" href="Map.php">Map</a></li>
            <li>
              <a class="nav-link scrollto" href="#team">Why Coral Reef</a>
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
                <li><a href="#">Coral Reef Community</a></li>
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
        <h1>Form Layouts</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item">Forms</li>
            <li class="breadcrumb-item active">Layouts</li>
          </ol>
        </nav>
      </div>
      <!-- End Page Title -->
      <section class="section">
        <div class="row">
          <div class="col-lg-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Horizontal Form</h5>

                <!-- Horizontal Form -->
                <form>
                  <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"
                      >Your Name</label
                    >
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputText" />
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"
                      >Email</label
                    >
                    <div class="col-sm-10">
                      <input
                        type="email"
                        class="form-control"
                        id="inputEmail"
                      />
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"
                      >Password</label
                    >
                    <div class="col-sm-10">
                      <input
                        type="password"
                        class="form-control"
                        id="inputPassword"
                      />
                    </div>
                  </div>
                  <fieldset class="row mb-3">
                    <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
                    <div class="col-sm-10">
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="radio"
                          name="gridRadios"
                          id="gridRadios1"
                          value="option1"
                          checked
                        />
                        <label class="form-check-label" for="gridRadios1">
                          First radio
                        </label>
                      </div>
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="radio"
                          name="gridRadios"
                          id="gridRadios2"
                          value="option2"
                        />
                        <label class="form-check-label" for="gridRadios2">
                          Second radio
                        </label>
                      </div>
                      <div class="form-check disabled">
                        <input
                          class="form-check-input"
                          type="radio"
                          name="gridRadios"
                          id="gridRadios3"
                          value="option3"
                          disabled
                        />
                        <label class="form-check-label" for="gridRadios3">
                          Third disabled radio
                        </label>
                      </div>
                    </div>
                  </fieldset>
                  <div class="row mb-3">
                    <div class="col-sm-10 offset-sm-2">
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="checkbox"
                          id="gridCheck1"
                        />
                        <label class="form-check-label" for="gridCheck1">
                          Example checkbox
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary">
                      Submit
                    </button>
                    <button type="reset" class="btn btn-secondary">
                      Reset
                    </button>
                  </div>
                </form>
                <!-- End Horizontal Form -->
              </div>
            </div>

            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Multi Columns Form</h5>

                <!-- Multi Columns Form -->
                <form class="row g-3">
                  <div class="col-md-12">
                    <label for="inputName5" class="form-label">Your Name</label>
                    <input type="text" class="form-control" id="inputName5" />
                  </div>
                  <div class="col-md-6">
                    <label for="inputEmail5" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail5" />
                  </div>
                  <div class="col-md-6">
                    <label for="inputPassword5" class="form-label"
                      >Password</label
                    >
                    <input
                      type="password"
                      class="form-control"
                      id="inputPassword5"
                    />
                  </div>
                  <div class="col-12">
                    <label for="inputAddress5" class="form-label"
                      >Address</label
                    >
                    <input
                      type="text"
                      class="form-control"
                      id="inputAddres5s"
                      placeholder="1234 Main St"
                    />
                  </div>
                  <div class="col-12">
                    <label for="inputAddress2" class="form-label"
                      >Address 2</label
                    >
                    <input
                      type="text"
                      class="form-control"
                      id="inputAddress2"
                      placeholder="Apartment, studio, or floor"
                    />
                  </div>
                  <div class="col-md-6">
                    <label for="inputCity" class="form-label">City</label>
                    <input type="text" class="form-control" id="inputCity" />
                  </div>
                  <div class="col-md-4">
                    <label for="inputState" class="form-label">State</label>
                    <select id="inputState" class="form-select">
                      <option selected>Choose...</option>
                      <option>...</option>
                    </select>
                  </div>
                  <div class="col-md-2">
                    <label for="inputZip" class="form-label">Zip</label>
                    <input type="text" class="form-control" id="inputZip" />
                  </div>
                  <div class="col-12">
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        id="gridCheck"
                      />
                      <label class="form-check-label" for="gridCheck">
                        Check me out
                      </label>
                    </div>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary">
                      Submit
                    </button>
                    <button type="reset" class="btn btn-secondary">
                      Reset
                    </button>
                  </div>
                </form>
                <!-- End Multi Columns Form -->
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Vertical Form</h5>

                <!-- Vertical Form -->
                <form class="row g-3">
                  <div class="col-12">
                    <label for="inputNanme4" class="form-label"
                      >Your Name</label
                    >
                    <input type="text" class="form-control" id="inputNanme4" />
                  </div>
                  <div class="col-12">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" />
                  </div>
                  <div class="col-12">
                    <label for="inputPassword4" class="form-label"
                      >Password</label
                    >
                    <input
                      type="password"
                      class="form-control"
                      id="inputPassword4"
                    />
                  </div>
                  <div class="col-12">
                    <label for="inputAddress" class="form-label">Address</label>
                    <input
                      type="text"
                      class="form-control"
                      id="inputAddress"
                      placeholder="1234 Main St"
                    />
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary">
                      Submit
                    </button>
                    <button type="reset" class="btn btn-secondary">
                      Reset
                    </button>
                  </div>
                </form>
                <!-- Vertical Form -->
              </div>
            </div>

            <div class="card">
              <div class="card-body">
                <h5 class="card-title">
                  No Labels / Placeholders as labels Form
                </h5>

                <!-- No Labels Form -->
                <form class="row g-3">
                  <div class="col-md-12">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Your Name"
                    />
                  </div>
                  <div class="col-md-6">
                    <input
                      type="email"
                      class="form-control"
                      placeholder="Email"
                    />
                  </div>
                  <div class="col-md-6">
                    <input
                      type="password"
                      class="form-control"
                      placeholder="Password"
                    />
                  </div>
                  <div class="col-12">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Address"
                    />
                  </div>
                  <div class="col-md-6">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="City"
                    />
                  </div>
                  <div class="col-md-4">
                    <select id="inputState" class="form-select">
                      <option selected>Choose...</option>
                      <option>...</option>
                    </select>
                  </div>
                  <div class="col-md-2">
                    <input type="text" class="form-control" placeholder="Zip" />
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary">
                      Submit
                    </button>
                    <button type="reset" class="btn btn-secondary">
                      Reset
                    </button>
                  </div>
                </form>
                <!-- End No Labels Form -->
              </div>
            </div>

            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Floating labels Form</h5>

                <!-- Floating Labels Form -->
                <form class="row g-3">
                  <div class="col-md-12">
                    <div class="form-floating">
                      <input
                        type="text"
                        class="form-control"
                        id="floatingName"
                        placeholder="Your Name"
                      />
                      <label for="floatingName">Your Name</label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-floating">
                      <input
                        type="email"
                        class="form-control"
                        id="floatingEmail"
                        placeholder="Your Email"
                      />
                      <label for="floatingEmail">Your Email</label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-floating">
                      <input
                        type="password"
                        class="form-control"
                        id="floatingPassword"
                        placeholder="Password"
                      />
                      <label for="floatingPassword">Password</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-floating">
                      <textarea
                        class="form-control"
                        placeholder="Address"
                        id="floatingTextarea"
                        style="height: 100px"
                      ></textarea>
                      <label for="floatingTextarea">Address</label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="col-md-12">
                      <div class="form-floating">
                        <input
                          type="text"
                          class="form-control"
                          id="floatingCity"
                          placeholder="City"
                        />
                        <label for="floatingCity">City</label>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-floating mb-3">
                      <select
                        class="form-select"
                        id="floatingSelect"
                        aria-label="State"
                      >
                        <option selected>New York</option>
                        <option value="1">Oregon</option>
                        <option value="2">DC</option>
                      </select>
                      <label for="floatingSelect">State</label>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-floating">
                      <input
                        type="text"
                        class="form-control"
                        id="floatingZip"
                        placeholder="Zip"
                      />
                      <label for="floatingZip">Zip</label>
                    </div>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary">
                      Submit
                    </button>
                    <button type="reset" class="btn btn-secondary">
                      Reset
                    </button>
                  </div>
                </form>
                <!-- End floating Labels Form -->
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
