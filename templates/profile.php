<?php 
  session_start(); 

  if (!isset($_SESSION['email'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['email']);
  	header("location: landing.php");
  }

?>


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
          <li><a href="team.php">Team of warriors</a></li>
          <li><a href="report.php">Report a number</a></li>
          <li><a href="testimonial.php">Message from users</a></li>

        </ul>

        <img href="profile.php"  class='nav-avatar' style="height: 40px; width: 40px; -webkit-border-radius: 50%; -moz-border-radius: 50%; border-radius: 50%;"
                src="..\assets\img\prof.jpg"> 
         <button style="border:3px solid #000000;border-radius:8px 0px 8px 0px;"><a href="profile.php?logout='1'"><b  style="color:#006494;font-size:15px;">Logout</b></a>  </button>
          

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

  <main id="main">
    <div class="container">
      <div class="row">
        <div class="profile-nav col-md-3">
            <div class="panel">
                <div class="user-heading round">
                    <a href="#">
                        <!-- <img src="..\assets\img\prof1.jpg" alt=""> -->
                        <img src="..\assets\img\users_profile_pic\<?php echo $_SESSION['avatar']; ?>" alt="">
  
                        
                         
                        
                    </a>
                    <h1><?php echo $_SESSION['firstname']; ?> <?php echo $_SESSION['lastname']; ?></h1>
                  <p><?php echo $_SESSION['email']; ?></p>
                </div>
                    
            <div class="panel">
                <div class="card">
                    <div class="card-header" style="background-color: black;">
                        Number of times help called
                    </div>
                    <div class="card-body">
                      <p class="card-text"><?php echo $_SESSION['help_count']; ?></p>
                    </div>
                  </div>
                  <div class="card">
                      <div class="card-header" style="background-color: black;">
                        Total Number of phone numbers reported
                      </div>
                      <div class="card-body">
                        <p class="card-text"><?php echo $_SESSION['report_num_count']; ?></p>
                      </div>
                 </div>

                 <div class="card">
                  <div class="card-header" style="background-color: black;">
                    Total resolved queries
                  </div>
                  <div class="card-body">
                    <p class="card-text"><?php echo $_SESSION['resolve_queries']; ?></p>
                  </div>
                </div>
                 
  
              </div>
                </ul>
            </div>
        </div>
        <div class="profile-info col-md-9">
            <div class="panel">
                <div class="bio-graph-heading">
                    I am a homemaker and keep looking for innovative and creative things. I like gardening, watching TV and scrolling social media
                </div>
                <div class="panel-body bio-graph-info">
                  <h1>Profile details</h1>
                  <div class="row">
                      <div class="bio-row">
                          <p><span>First Name </span>: <?php echo $_SESSION['firstname']; ?></p>
                      </div>
                      <div class="bio-row">
                          <p><span>Last Name </span>: <?php echo $_SESSION['lastname']; ?></p>
                      </div>
                      <div class="bio-row">
                          <p><span>Birthday </span>: <?php echo $_SESSION['dob']; ?></p>
                      </div>
                      <div class="bio-row">
                          <p><span>Email</span>: <?php echo $_SESSION['email']; ?></p>
                      </div>
                      <div class="bio-row">
                          <p><span>Contact No </span>: <?php echo $_SESSION['mobile']; ?></p>
                      </div>
                      <div class="bio-row">
                          <p><span>Occupation </span>: <?php echo $_SESSION['occupation']; ?></p>
                      </div>
                      <div class="bio-row">
                          <p><span>Address </span>: <?php echo $_SESSION['address']; ?></p>
                      </div>
                      <div class="bio-row">
                          <p><span>Pincode </span>: <?php echo $_SESSION['pincode']; ?></p>
                      </div>
                  </div>
              </div>
            </div>
  
  </main>

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