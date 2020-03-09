

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
      <a href="#contact" class="btn-get-started scrollto">Get Started</a>
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
      Contact Section
    ============================-->
    <section id="contact">
      <div class="container">
        <div class="row wow fadeInUp">

          <div class="col-lg-4 col-md-4">
            <div class="contact-about">
              <h3>Registeration</h3>
              <p>Kindly Give all your Information Authentically in Case You Need To Find the Best Match. <br>
                Write your WhatsApp number So that We can Contact You. In Case You donot know What to Select Choose Others Option. 
                  Tell your Area of Residence and City Correctly to Find the best match Near You.
                  If you Are Single, write N.A or 0 in No. of Kids.
                </p>
              
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="info">
              
              <div>
                <i class="ion-ios-telephone-outline"></i>
                <p><strong>+92 332 5568674</strong>
                     <br>
                  WhatsApp for More Information in Case You Need Help
                  </p>
              </div>

            </div>
          </div>

          <div class="col-lg-5 col-md-8">
            <div class="form">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>
              <form action="Registeration1Success.php" method="post" >
                  
                  <div class="form-group">
                  <input type="text" class="form-control" name="whatsapp" id="whatsapp" placeholder="WhatsApp Number +92 332 5568674" data-rule="minlen:7" data-msg="Please enter at least 7 chars of subject" required />
                  <div class="validation"></div>
                </div>
                
                <div class="form-row">
                  
                    <div class="form-group col-lg-6">
                    <input type="text" name="first" class="form-control" id="first" placeholder="First Name Maryam" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required />
                    <div class="validation"></div>
                  </div>
                    
                    <div class="form-group col-lg-6">
                    <input type="text" name="last" class="form-control" id="last" placeholder="Last Name Jamil" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                  </div>
                    
                  <div class="form-group col-lg-6">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email mjam691@gmail.com" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validation"></div>
                  </div>
                    
                    <div class="form-group col-lg-6">
                    <input type="password" name="password" class="form-control" id="password" placeholder="" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                  </div>
                    
                    
                    <div class="form-group col-lg-6">
                        
                        <select name="Sect" class="form-control" id="Sect" >
                            
                          
                            <option value="Sunni">Sunni</option>
                          <option value="Shia">Shia</option>
                          <option value="Ahl.e.Hadees">Ahl.e.Hadees</option>
                            <option value="Deobandi">Deobandi</option>
                          <option value="Others">Others</option>
                        </select>
                       
                  </div>
                    
                     <div class="form-group col-lg-6">
                        
                        <select name="Caste" class="form-control" id="Caste" >
                            <option value="Others">Others</option>
                            <option value="Abbasi">Abbasi</option>
                            <option value="Arain">Arain</option>
                            <option value="Ashri">Ashri</option>
                            <option value="Awan">Awan</option>
                            <option value="Baloch">Baloch</option>
                            <option value="Bhatti">Bhatti</option>
                            <option value="Bozodar">Bozodar</option>
                            
                            <option value="Chaudhary">Chaudhary</option>
                            <option value="Hashmi">Hashmi</option>
                            <option value="Jutt">Jutt</option>
                            <option value="Kalhoro">Kalhoro</option>
                            <option value="Malik">Malik</option>
                            <option value="Marwat">Marwat</option>
                            <option value="Mian">Mian</option>
                            <option value="Mughal">Mughal</option>
                            <option value="Muhajir">Muhajir</option>
                            <option value="Pathan">Pathan</option>
                            <option value="Qureshi">Qureshi</option>
                          <option value="Rajpoot">Rajpoot</option>
                            <option value="Sheikh">Sheikh</option>
                            <option value="Sindhi">Sindhi</option>
                            <option value="Swati">Swati</option>
                            <option value="Syed">Syed</option>
                            <option value="UrduSpeaking">UrduSpeaking</option>
                            <option value="Usmani">Usmani</option>
                          <option value="Yousafzai">Yousafzai</option>
                          
                        </select>
                       
                  </div>
                    
                </div>
                  
                  
                    <div class="form-row">
                    <div class="form-group col-lg-4">
                      <strong>Birth Details: </strong>
                  </div>
                    <div class="form-group col-lg-4">
                        
                        <select name="Year" class="form-control" id="Year" >
                            <option value="Others">Others</option>
                            
                          <option value="1961">1961</option>
                          <option value="1962">1962</option>
                          <option value="1963">1963</option>
                          <option value="1964">1964</option>
                          <option value="1965">1965</option>
                          <option value="1966">1966</option>
                          <option value="1967">1967</option>
                          <option value="1968">1968</option>
                          <option value="1969">1969</option>
                          <option value="1970">1970</option>
                          <option value="1971">1971</option>
                          <option value="1972">1972</option>
                          <option value="1973">1973</option>
                          <option value="1974">1974</option>
                          <option value="1975">1975</option>
                          <option value="1976">1976</option>
                          <option value="1977">1977</option>
                          <option value="1978">1978</option>
                          <option value="1979">1979</option>
                            
                          <option value="1980">1980</option>
                          <option value="1981">1981</option>
                          <option value="1982">1982</option>
                          <option value="1983">1983</option>
                          <option value="1984">1984</option>
                          <option value="1985">1985</option>
                          <option value="1986">1986</option>
                          <option value="1987">1987</option>
                          <option value="1988">1988</option>
                          <option value="1989">1989</option>
                        
                          <option value="1990">1990</option>
                          <option value="1991">1991</option>
                          <option value="1992">1992</option>
                          <option value="1993">1993</option>
                          <option value="1994">1994</option>
                          <option value="1995">1995</option>
                          <option value="1996">1996</option>
                          <option value="1997">1997</option>
                          <option value="1998">1998</option>
                          <option value="1999">1999</option>
                            
                          <option value="2000">2000</option>
                          <option value="2001">2001</option>
                          <option value="2002">2002</option>
                          <option value="2003">2003</option>
                          <option value="2004">2004</option>
                          <option value="2005">2005</option>
                          <option value="2006">2006</option>
                          <option value="2007">2007</option>
                          <option value="2008">2008</option>
                          <option value="2009">2009</option>
                            
                          <option value="2010">2010</option>
                          <option value="2011">2011</option>
                          <option value="2012">2012</option>
                          <option value="2013">2013</option>
                          <option value="2014">2014</option>
                          <option value="2015">2015</option>
                          <option value="2016">2016</option>
                          <option value="2017">2017</option>
                          <option value="2018">2018</option>
                          <option value="2019">2019</option>
                            
                          <option value="2020">2020</option>
                          <option value="2021">2021</option>
                          <option value="2022">2022</option>
                          <option value="2023">2023</option>
                          <option value="2024">2024</option>
                          <option value="2025">2025</option>
                          <option value="2026">2026</option>
                          <option value="2027">2027</option>
                          <option value="2028">2028</option>
                          <option value="2029">2029</option>
                        </select>
                       
                  </div>
                    
                     <div class="form-group col-lg-4">
                        
                        <select name="Month" class="form-control" id="Month" >
                            <option value="Jan">Jan</option>
                            <option value="Feb">Feb</option>
                            <option value="Mar">Mar</option>
                            <option value="Apr">Apr</option>
                            <option value="May">May</option>
                            <option value="Jun">Jun</option>
                            <option value="Jul">Jul</option>
                            <option value="Aug">Aug</option>
                            <option value="Sep">Sep</option>
                            <option value="Oct">Oct</option>
                            <option value="Nov">Nov</option>
                            <option value="Dec">Dec</option>
                          
                          
                        </select>
                       
                  </div>
                    
                </div>
                  
                  
                  
                  
               
                <div class="text-center"><button type="submit" title="Send Message">Submit Details</button></div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #contact -->

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
  <script src="js/main.js"></script>
</body>
</html>
