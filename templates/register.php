<?php include('../server/logserver.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>NariSuraksha- Helping women</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">

 
  <link href="../assets/css/profile_page.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../assets/css/reg.css">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <h1 class="text-light"><a href="index.html"><span>Nari Suraksha- Platform for women safety and help</span></a></h1>
        
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
        <li class="active"><a href="landing.php">Home</a></li>
          <li><a href="profile.php">Go to Profile</a></li>
          <li><a href="help.php">Call for help</a></li>
          <li><a href="#">Team of warriors</a></li>
          <li class="drop-down"><a href="">Report Harrasments</a>
                  <ul>
                    <li><a href="report.php">Report Mobile numbers</a></li>
                    <li><a href="stats.php">Show statistics of reported calls</a></li> 
                  </ul>
        </li> 
          <li><a href="testimonial.php">Message from users</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container" data-aos="fade-in">
      <h1>Welcome to Nari Suraksha</h1>
      <h2>Helping for Women safety and Help</h2>
      <div class="d-flex align-items-center">
        <i class="bx bxs-right-arrow-alt get-started-icon"></i>
        <a href="#about" class="btn-get-started scrollto">View your profile</a>
        <a href="#about" class="btn-get-started scrollto">Report a number</a>
      </div>
    </div>
  </section><!-- End Hero -->

<!-- login form -->
<section >
    <div class="container">
    <div class="row">
        <div class="col-lg-12">
<div class="login-container"id="log" > 
<form method="post" action="register.php" enctype="multipart/form-data">
           <h2 style="text-align:center;font-weight:bold;">Register</h2>
           <br> 
           
           <div class="container">
           <div class="row">

           <div class="col-lg-6 col-md-6 footer-contact"> 
           <div>
               <label><span style="color:#006494;">*</span>Firstname</label>
               <input type="text" name="firstname" placeholder="Enter your first name" value="">
           </div>
           </div> 


           <div class="col-lg-6 col-md-6 footer-contact">
           <div>
               <label><span style="color:#006494;">*</span>Lastname</label>
               <input type="text" name="lastname" placeholder="Enter Last name" value="">
           </div>
           </div>


           <div class="col-lg-6 col-md-6 footer-contact"> 
           <div>
               <label><span style="color:#006494;">*</span>Email</label>
               <input type="text" name="email" placeholder="abc@gmail.com" value="">
           </div>
           </div>

           <div class="col-lg-6 col-md-6 footer-contact">
           <div>
               <label><span style="color:#006494;">*</span>Mobile</label>
               <input type="tel" name="mobile" placeholder="888 888 8888" maxlength="12"  title="Ten digits code" required value="">
           </div>
           </div>

           <div class="col-lg-6 col-md-6 footer-contact">
           <div>
               <label><span style="color:#006494;">*</span>Birthday</label>
               <input type="date" name="dob" placeholder="20-10-2020" value="" >
           </div>
           </div>

           <div class="col-lg-6 col-md-6 footer-contact">
           <div>
               <label>Occupation/Profession</label>
               <input type="text" name="occupation" placeholder="Accountant/Domestic Worker" value="">
           </div>
           </div>

           <div class="col-lg-6 col-md-6 footer-contact">
           <div>
               <label><span style="color:#006494;">*</span>Full Address</label>
               <input type="text" name="address" placeholder="Raipur" value="">
           </div>
           </div>

           <div class="col-lg-6 col-md-6 footer-contact">
           <div>
               <label><span style="color:#006494;">*</span>Pincode</label>
               <input type="text" name="pincode"  maxlength="6" placeholder="123456" value="" >
           </div>
           </div>

           <div class="col-lg-6 col-md-6 footer-contact">
           <div>
               <label><span style="color:#006494;">*</span>Password</label>
               <input type="password" name="password_1" placeholder="Enter your password here" >
           </div>
           </div>

           <div class="col-lg-6 col-md-6 footer-contact">
           <div>
               <label><span style="color:#006494;">*</span>Confirm Password</label>
               <input type="password" name="password_2" placeholder="Confirm password here" >
           </div>
           </div>

           <div class="col-lg-6 col-md-6 footer-contact">
           <div>
                <label for="img">Select image:</label>
                <input type="file" name="avatar" id="img" name="img" accept="image/*">
           </div>
           </div>

           <div class="col-lg-6 col-md-6 footer-contact">
           <div>
           <span style="color:#006494;">*</span>Required all fields
           </div>
           </div>
           

           </div>
           </div>


           <input type="submit" name="reg_user" >
           <a href="login.php" style="font-size:16px;"><div>Alredy an account,Login Here</a> 
       </form>
       </div>
       </div>
</div>
</div>
</section>

<!-- login form end -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>NariSuraksha</h3>
            <p>
              Ajay Road <br>
              Raipur, Amanaka Road<br>
              India <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Profile</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Heroes working</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Report a number</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Call for help</a></li>
            </ul>
          </div>


          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Your message to us</h4>
            <p>If you face any issues, just submit your E-Mail or number and we will get back to you</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="../assets/vendor/venobox/venobox.min.js"></script>
  <script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>