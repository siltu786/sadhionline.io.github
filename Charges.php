
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>MJais Shadi Online -- Find Your Life Partner</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="MatchMaker, Wedding, Life Partner" name="keywords">
  <meta content="MJais Shadi Online -- Platform for Finding Life Partner for You" name="description">

  <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
<!--
  
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
-->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700|Open+Sans:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Avilon
    Theme URL: https://bootstrapmade.com/avilon-bootstrap-landing-page-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>
<body>

    <!--==========================
    Header
  ============================-->
    <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">MJais Shadi Online</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title=""></a> -->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="index.php">Home</a></li>
          <li class="menu-active"><a href="Charges.php">Fee Charges</a></li>
            
                        
            <li class="menu-has-children" style="color:white">Login
                <ul>
                  <li><a href="Login.php">Client</a></li>
                  <li><a href="MatchLoginSess.php">MatchMaker</a></li>
                    
                </ul>
              </li>
            
            <li class="menu-has-children"style="color:white">Register
                <ul>
                  <li><a href="Registeration1.php">Client</a></li>
                  <li><a href="MatchmakerRegisteration.php">MatchMaker</a></li>
                    
                </ul>
              </li>
            
                    </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

    
  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">

    <div class="intro-text">
      <h2>Welcome to MJais Shadi Online</h2>
      <p>We are team of talanted MatchMakers Helping you in Finding Your Partner</p>
      <a href="Registeration.php" class="btn-get-started scrollto">Get Registered</a>
    </div>

    <div class="product-screens">

      <div class="product-screen-1 wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="0.6s">
        <img src="img/Shadi2.jpg" alt="">
      </div>

      <div class="product-screen-2 wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="0.6s">
        <img src="img/Shadi3.jpg" alt="">
      </div>

      <div class="product-screen-3 wow fadeInUp" data-wow-duration="0.6s">
        <img src="img/Shadi1.png" alt="">
      </div>

    </div>

  </section><!-- #intro -->


  <main id="main">

    
      
      
      
    <!--==========================
      More Features Section
    ============================-->
    <section id="more-features" class="section-bg">
      <div class="container">

        <div class="section-header">
          <h3 class="section-title">Fee Charges</h3>
          <span class="section-divider"></span>
          <p class="section-description">
            Give Your Information to Find out How much we Charge.<br>
              Please Tell Your Correct WhatsApp Number so We can Contact on That Number.
            </p>
        </div>

        <div class="row">

          <div class="col-lg-12">
            <div class="box wow fadeInLeft">
              <div class="icon"><i class="ion-ios-heart-outline"></i></div>
              <h4 class="title"><a href="">Give Your Correct Information</a></h4>
                <div class="form">
              
                  <form action="ChargesResult.php" method="GET">
                      
                      
                      <div class="form-row">
                          
                          <div class="form-group">
                       <label for="whatsApp">WhatsApp Number</label>
                    <input type="text" class="form-control" name="whatsApp" id="whatsApp" data-rule="minlen:7" data-msg="Please give Correct WhatsApp Number" placeholder="+92 332 5568674" required />
                    <div class="validation"></div>
                  </div>
                          
                      <div class="form-group">
                        <label for="age">Age (in Years)</label>
                    <input type="text" name="age" class="form-control" id="age" placeholder="23" data-rule="minlen:1" data-msg="Please enter Age in Numbers" required/>
                    <div class="validation"></div>
                  </div>    
                          
                      </div>
                      
                      
                      <div class="form-row">
                          
                          <div class="form-group col-lg-3">
                            <select name="country" class="form-control" id="country" >
                             <option value="Other">Other</option>
                            <option value="Pakistan">Pakistan</option>
                                
                                <option value="America">America</option>
                                <option value="Australia">Australia</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Brazil">Brazil</option>
                                
                                <option value="Canada">Canada</option>
                                <option value="China">China</option>
                                <option value="France">France</option>
                                
                                <option value="Germany">Germany</option>
                                <option value="India">India</option>
                                <option value="Iran">Iran</option>
                                <option value="Iraq">Iraq</option>
                                <option value="Kuwait">Kuwait</option>
                                <option value="Oman">Oman</option>
                                
                                <option value="SaudiArabia">SaudiArabia</option>
                            <option value="UnitedArabEmirates">UnitedArabEmirates</option>
                            <option value="UnitedKingdom">UnitedKingdom</option>
                            
                            
                        </select>
                          </div>
                      
                       <div class="form-group  col-lg-3">
                        
                        <select name="Income" class="form-control" id="Income" >
                            <option value="Others">Monthly Income</option>
                            <option value="N.A">Not Applicable</option>
                            <option value="Others">Others</option>
                          <option value="Rs. 6,000 - Rs. 15,000">Rs. 6,000 - Rs. 15,000</option>  
                          <option value="Rs. 15,000 - Rs. 20,000">Rs. 15,000 - Rs. 20,000</option>
                          <option value="Rs. 20,000 - Rs. 30,000">Rs. 20,000 - Rs. 30,000</option>
                          <option value="Rs. 30,000 - Rs. 50,000">Rs. 30,000 - Rs. 50,000</option>
                          <option value="Rs. 50,000 - Rs. 70,000">Rs. 50,000 - Rs. 70,000</option>
                          <option value="Rs. 70,000 - Rs. 90,000">Rs. 70,000 - Rs. 90,000</option>
                          <option value="Rs. 90,000 - Rs. 1,00,000">Rs. 90,000 - Rs. 1,00,000</option>
                          <option value="Rs. 1,00,000 - Rs. 1,25,000">Rs. 1,00,000 - Rs. 1,25,000</option>
                          <option value="Rs. 1,25,000 - Rs. 1,50,000">Rs. 1,25,000 - Rs. 1,50,000</option>
                          <option value="Rs. 1,50,000 - Rs. 1,75,000">Rs. 1,50,000 - Rs. 1,75,000</option>
                          <option value="Rs. 1,75,000 - Rs. 2,00,000">Rs. 1,75,000 - Rs. 2,00,000</option>
                          <option value="Rs. 2,00,000 - Rs. 2,50,000">Rs. 2,00,000 - Rs. 2,50,000</option>
                          <option value="Rs. 2,50,000 - Rs. 3,00,000">Rs. 2,50,000 - Rs. 3,00,000</option>
                          <option value="Rs. 3,00,000 - Rs. 4,00,000">Rs. 3,00,000 - Rs. 4,00,000</option>
                          <option value="Rs. 4,00,000 - Rs. 5,00,000">Rs. 4,00,000 - Rs. 5,00,000</option>
                          <option value="Rs. 5,00,000 - Rs. 6,00,000">Rs. 5,00,000 - Rs. 6,00,000</option>
                          <option value="Rs. 6,00,000 - Rs. 7,00,000">Rs. 6,00,000 - Rs. 7,00,000</option>
                            <option value="Rs. 7,00,000 - Rs. 8,00,000">Rs. 7,00,000 - Rs. 8,00,000</option>
                            <option value="Rs. 8,00,000 - Rs. 9,00,000">Rs. 8,00,000 - Rs. 9,00,000</option>
                            <option value="Rs. 9,00,000 - Rs. 10,00,000">Rs. 9,00,000 - Rs. 10,00,000</option>
                            <option value="Rs. 10,00,000 - Rs. 11,00,000">Rs. 10,00,000 - Rs. 11,00,000</option>
                            <option value="Rs. 11,00,000 - Rs. 15,00,000">Rs. 11,00,000 - Rs. 15,00,000</option>
                            <option value="Rs. 15,00,000 - Rs. 20,00,000">Rs. 15,00,000 - Rs. 20,00,000</option>
                          <option value="Rs. 20,00,000 Above">Rs. 20,00,000 Above</option>
                        </select>
                       
                  </div>
                          
                          <div class="form-group col-lg-2">
                        
                        <select name="Status" class="form-control" id="Status" >
                            <option value="Status">Marital Status</option>
                            
                            <option value="Single">Single</option>
                            <option value="Married">Married</option>
                            <option value="Seperated">Seperated</option>
                            <option value="Divorced">Divorced</option>
                            <option value="Widow">Widow</option>
                            <option value="Other">Other</option>
                            
                        </select>
                       
                  </div>
                          
                          
                         
                      
                <div class="text-center"><button type="submit" title="Search" style="background-color: #008CBA; padding: 6px 34px; color:#fff; border-radius: 8px; ">Find Charges</button></div>
                      </div>
                      
    </form>
                    
                
                </div>
            </div>
          </div>

        

        </div>
          
          
         
      </div>
    </section><!-- #more-features -->



    

  </main>

 
<!--==========================
    Footer
  ============================-->
  
<!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="container">
      <div class="row">
          
          
          
        <div class="col-lg-6 text-lg-left text-center">
            
            <div class="contact-about">
              <h3>MJais Shadi Online</h3>
              <p>
                A Project by <a href="http://mjaisstore.com/Info/" target="_blank">MJais Consultancy</a> 
                </p>
              <div class="social-links">
                
                <a href="https://www.facebook.com/MJais-Shadi-Online-253640705476687/" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a>
<!--
                  <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
-->
              </div>
            </div>
            
          <div class="copyright">
            &copy; Copyrights By <strong>MJais Shadi Online</strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Avilon
            -->
            Designed by <a href="https://www.facebook.com/inoccent.angel.35/" target="_blank">Engr. Maryam Jamil</a>
          </div>
        </div>
        <div class="col-lg-6">
            <br><br><br><br><br>
          <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
               <a href="Login.php">Client Login</a><br>
               <a href="MatchLoginSess.php">Matchmaker Login</a><br>
            <a href="index.php" class="scrollto">Home</a>
            
          </nav>
        </div>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/magnific-popup/magnific-popup.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script></body>
</html>
