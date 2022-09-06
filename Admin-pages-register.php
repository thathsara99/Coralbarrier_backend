<?php
  include ('crud.php');
  $name="";
  $nameErr="";
  $email="";
  $emailErr="";
  $password="";
  $passwordErr="";
  $cpasswordErr="";
  $create_status="";
  $role="";

  if(isset($_POST['create'])){
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

      if($obj->admin_email_duplicate_check($temp)){
        $emailErr = "Existing email";
      }
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

    if(empty($nameErr)&&empty($emailErr)&&empty($passwordErr)&&empty($cpasswordErr)&&isset($_POST['terms'])){
      $obj=new CrudOperation();
      $name=$obj->test_input($_POST['name']);
      $email=$obj->test_input($_POST['email']);
      $password=$obj->test_input($_POST['password']);
      $role=$obj->test_input($_POST['role']);
      if($role=="admin"){
        $create_status=$obj->add_admin($name,$email,$password);
      }
      else{
        $create_status=$obj->add_user($name,$email,"","",$password);
      }
      
    }
    
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Admin Register</title>
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
  </head>

  <body>
    <main>
      <div class="container">
        <section
          class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4"
        >
          <div class="container">
            <div class="row justify-content-center">
              <div
                class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center"
              >
                <div class="card mb-3">
                  <div class="card-body">
                    <div class="pt-4 pb-2">
                      <h5 class="card-title text-center pb-0 fs-4">
                        Create an Account
                      </h5>
                      <p class="text-center small">
                        Enter your personal details to create account
                      </p>
                    </div>

                    <form class="row g-3 needs-validation" method="post">
                      <div class="col-12">
                        <label for="yourName" class="form-label"
                          >Your Name</label
                        >
                        <input
                          type="text"
                          name="name"
                          class="form-control"
                          id="yourName"
                          required
                        />
                        <div class="invalid-feedback">
                          Please, enter your name!
                        </div>
                        <div class="text-danger"><?php echo $nameErr;?></div>
                      </div>

                      <div class="col-12">
                        <label for="yourEmail" class="form-label"
                          >Your Email</label
                        >
                        <div class="input-group has-validation">
                          <span class="input-group-text" id="inputGroupPrepend"
                            >@</span
                          >
                          <input
                            type="email"
                            name="email"
                            class="form-control"
                            id="yourEmail"
                            required
                          />
                          <div class="invalid-feedback">
                          Please enter a valid Email adddress!.
                          </div>
                          <div class="text-danger"><?php echo $emailErr;?></div>
                        </div>
                      </div>


                      <div class="col-12">
                        <label for="yourPassword" class="form-label"
                          >Password</label
                        >
                        <input
                          type="password"
                          name="password"
                          class="form-control"
                          id="yourPassword"
                          required
                        />
                        <div class="invalid-feedback">
                          Please enter your password!
                        </div>
                        <div class="text-danger"><?php echo $passwordErr;?></div>
                      </div>

                      <div class="col-12">
                        <label for="yourCPassword" class="form-label"
                          >Confirm Password</label
                        >
                        <input
                          type="password"
                          name="cpassword"
                          class="form-control"
                          id="yourCPassword"
                          required
                        />
                        <div class="invalid-feedback">
                          Please enter your password!
                        </div>
                        <div class="text-danger"><?php echo $cpasswordErr;?></div>
                      </div>

                      <div class="col-12">
                        <label for="yourCPassword" class="form-label"
                          >Role</label
                        >
                        <select name="role">
                          <option value="user">User</option>
                          <option value="admin">Admin</option>
                        </select>
                        <div class="text-danger"><?php echo $cpasswordErr;?></div>
                      </div>


                      <div class="col-12">
                        <div class="form-check">
                          <input
                            class="form-check-input"
                            name="terms"
                            type="checkbox"
                            value=""
                            id="acceptTerms"
                            required
                          />
                          <label class="form-check-label" for="acceptTerms"
                            >I agree and accept the
                            <a href="#">terms and conditions</a></label
                          >
                          <div class="invalid-feedback">
                            You must agree before submitting.
                          </div>
                        </div>
                      </div>
                      <div class="col-12">
                        <button class="btn btn-primary w-100" type="submit" name="create">
                          Create Account
                        </button>
                        <div class="text-danger"><?php echo $create_status;?></div>
                      </div>
                      <div class="col-12">
                        <p class="small mb-0">
                          Already have an account?
                          <a href="login.php">Log in</a>
                        </p>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
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
    <script src="assets/js/main.js"></script>
  </body>
</html>
