<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>ThePrimeEvent - Login</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/LOGO1.png" rel="icon">
  <link href="img/LOGO1.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/venobox/venobox.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header" class="header-fixed">
    <div class="container">

      <div id="logo" class="pull-left">
        <!-- Uncomment below if you prefer to use a text logo -->
        <!-- <h1><a href="#main">C<span>o</span>nf</a></h1>-->
        <a href="index.html#intro" class="scrollto"><img src="img/LOGO1.png" alt="" title=""></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="{{ url('/home') }}">Home</a></li>
          <!-- <li><a href="#">About</a></li> -->
          <!-- <li><a href="index.html#speakers">Speakers</a></li> -->
          <!-- <li><a href="index.html#schedule">Schedule</a></li> -->
          <!-- <li><a href="index.html#venue">Venue</a></li> -->
          <li><a href="index.html#hotels">Hotels</a></li>
          <li><a href="index.html#gallery">Gallery</a></li>
          <!-- <li><a href="index.html#supporters">supporters</a></li> -->
          <!-- <li  class="menu-active"><a href="index.html#contact">Book Event</a></li> -->
          <li class="menu-active"><a href="{{ url('/bookEvent') }}">Book Event</a></li>
          <!-- <li class="buy-tickets"><a href="index.html#buy-tickets">Book Event</a></li> -->
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <main id="main" class="main-page">
    <!--==========================
      Registration form Section
    ============================-->
    <section id="registerForm" class="wow fadeIn">
      <div class="container container-b">
        <div class="section-header">
          <h2>Register</h2>
          <p>Registration for New User</p>
        </div>
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <div id="ui">
                    <form action="registerUser" method="POST" class="form-group">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="">First Name:</label>
                                <input type="text" name="FirstName" class="form-control" required> <!--placeholder="Enter first Name"-->
                            </div>
                            <div class="col-lg-6">
                                <label for="">Second Name:</label>
                                <input type="text" name="SecondName" class="form-control">
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-lg-12">
                                <label for="">Address:</label>
                                <input type="text" name="addresstxt" class="form-control" required>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-lg-12">
                                <label for="">E-mail:</label>
                                <input type="text" name="emailtxt" class="form-control" required>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="">Mobile No:</label>
                                <input type="text" name="mobileNotxt" class="form-control" required>
                            </div>
                            <div class="col-lg-6">
                                <label for="">Gender:</label><br>
                                <select name="genderOption" id="" class="form-control">
                                    <option value="">Male</option>
                                    <option value="">FeMale</option>
                                    <option value="">Others</option>
                                </select>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="">Password:</label>
                                <input type="password" name="passwordtxt" class="form-control" required>
                            </div>
                            <div class="col-lg-6">
                                <label for="">Retype-Password:</label>
                                <input type="password" name="repasswordtxt" class="form-control" required>
                            </div>
                        </div>
                        <br>
                        <input type="submit" name="submitBtn" value="submit" class="btn btn-primary btn-block btn-lg">
                    </form>
                </div>
            </div>


            <div class="col-lg-3"></div>          
        </div>
      </div>

    </section>
    

  </main>


  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <img src="img/logo1.png" alt="TheEvenet">
            <p>Prime Events Management.Co was established with an idea to create magnificent events. We are highly experienced team from Kochi, inspired by passion and continuously seeking creative and unique events for YOU!
              Today, Prime events has been acknowledged as a pioneer in event management of Corporate Events, Weddings, Award Galas, Conferences, Product Launches, Outdoor Stage Shows, Festivals, Premiere Live Entertainments, Fashion Shows etc.</p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="fa fa-angle-right"></i> <a href="#">Home</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">About us</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Services</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="fa fa-angle-right"></i> <a href="#">Home</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">About us</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Services</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              Central Tower, <br>
              8th Floor, Kochi<br>
              Kerala, India. <br>
              <strong>Phone:</strong> +91 9400 600 720<br>
              <strong>Email:</strong> primeevent@media.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>The Prime Event</strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- #footer --><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/venobox/venobox.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
</body>
<style>
    .registerForm{
        
        height:100vh;
        justify-content: center;
        align-items: center;
        
    }
    .container-b{

        padding: 10px;
        background: linear-gradient(135deg, #71b7e6, #9b59b6);
    }
</style>
</html>
