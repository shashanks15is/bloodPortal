<!doctype html>

<html class="no-js" lang="en">



<head>
    <!--====== USEFULL META ======-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== TITLE TAG ======-->
    <title>Blood Bank</title>

    <!--====== FAVICON ICON =======-->
    <link rel="shortcut icon" type="image/ico" href="img/favicon1.png" />

    <!--====== STYLESHEETS ======-->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/pogo-slider.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">

    <!--====== MAIN STYLESHEETS ======-->
    <link href="style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
    <script src="js/ajax_lib.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      $('#login-form').modal('show');
  });
   </script>
</head>

<body>



    <!--- PRELOADER -->
    <div class="preeloader">
        <div class="preloader-spinner"></div>
    </div>

    <!--SCROLL TO TOP-->
    <a href="#home" class="scrolltotop"><i class="fa fa-long-arrow-up"></i></a>

    <!--START TOP AREA-->
    <header class="top-area" id="home">
        <div class="header-top-area">
            

            <!--MAINMENU AREA-->
            <div class="mainmenu-area" id="mainmenu-area">
                <div class="mainmenu-area-bg"></div>
                <nav class="navbar">
                    <div class="container">
                        <div class="navbar-header">
                            <button class="collapsed navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-example-js-navbar-scrollspy">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a href="#home" class="navbar-brand"><h2 style="color: red;">BLOOD  PORTAL</h2></a>
                            <a href="#home1" class="navbar-brand white-logo"><h2 style="color: #fff;">BLOOD  PORTAL</h2></a>
                        </div>
                        <div class="collapse navbar-collapse bs-example-js-navbar-scrollspy">
                            <!-- <div class="signup-and-login-button hidden-sm hidden-xs">
                                <ul>
                                    <li><a href="#" data-toggle="modal" data-target="#login-form">Login</a></li>
                                </ul>
                            </div> -->
                            <ul id="nav" class="nav navbar-nav cl-effect-11">
                                <!-- <li><a href="#home">home</a></li> -->
                                <li><a href="#about">find donor</a></li>
                                <li><a href="#catagories">Know More</a></li>
                                <li><a href="#blog">blood bank</a></li>
                                <li><a href="#faqs">faq's</a></li>
                                <li><a href="#contact">contact us</a></li>
                                <li><a href="" data-toggle="modal" data-target="#registar-form" class="blinking">register</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <!--END MAINMENU AREA END-->
        </div>

        <!--HHOME SLIDER AREA-->
        <div class="slider-area">
            <div class="pogoSlider">
                <div class="pogoSlider-slide" data-transition="fade" data-duration="1500" style="background:url(img/slider/slider1.jpg) no-repeat scroll 0 0 / cover;">
                    <h2 class="pogoSlider-slide-element" data-in="expand" data-out="expand" data-duration="700">Welcome To</h2>
                    <h1 class="pogoSlider-slide-element" data-in="expand" data-out="expand" data-duration="1500">Blood Bank Portal</h1>
                    <h3 class="pogoSlider-slide-element" data-in="expand" data-out="expand" data-duration="2300"><a href="#catagories">Know More</a></h3>
                </div>
                <div class="pogoSlider-slide" data-transition="fade" style="background:url(img/slider/slider2.jpg) no-repeat scroll 0 0 / cover;">
                    <h2 class="pogoSlider-slide-element" data-in="expand" data-out="expand" data-duration="700">Donate Blood Today</h2>
                    <h3 class="pogoSlider-slide-element" data-in="expand" data-out="expand" data-duration="1500">Give Blood,Give Life</h3>
                    <h3 class="pogoSlider-slide-element" data-in="expand" data-out="expand" data-duration="2300"><a href="#" data-toggle="modal" data-target="#registar-form">Donate Today</a></h3>
                </div>
                <div class="pogoSlider-slide" data-transition="fade" style="background:url(img/slider/slide_3.jpg) no-repeat scroll 0 0 / cover;">
                    <h2 class="pogoSlider-slide-element" data-in="expand" data-out="expand" data-duration="700">Ensuring Supply</h2>
                    <h3 class="pogoSlider-slide-element" data-in="expand" data-out="expand" data-duration="1500">Save Life</h3>
                    <h3 class="pogoSlider-slide-element" data-in="expand" data-out="expand" data-duration="2300"><a href="#blog">Browse</a></h3>
                </div>
            </div>
        </div>
        <!--HOME SLIDER AREA END-->

    </header>
    <!--END TOP AREA-->

    

    <!--Login AREA-->
    <div class="section contact-area section-padding red-bg" id="contact">
        <div class="container">
            <!--LOGIN FORM MODAL-->
                        <div id="login-form" class="modal fade" role="dialog">
                            <div class="modal-dialog modal-sm">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Admin Login</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form action="login_validate.php" method="post" class="login-form">
                                            <input id="login_username" name="user" class="form-control" type="text" placeholder="Username " required>
                                            <input id="login_password" name="pwd" class="form-control" type="password" placeholder="Password" required>
                                        
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" name="btt" class="signup-login-button">Login</button>
                                        <!-- <a href="#" class="lost-password">Lost Password ?</a>
                                        <a href="#" class="lost-password">Register</a> -->
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--LOGIN FORM MODAL END-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--CONTACT US AREA END-->

    <!--FOOER AREA-->
    
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="footer-copyright text-center">
                        <p>&copy; 2018 <a href="#">Blood Portal</a> Mini Project. Coded by <strong>Shashank, Varun & Goutham</strong>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--FOOER AREA END-->


    <!--====== SCRIPTS JS ======-->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>

    <!--====== PLUGINS JS ======-->
    <script src="js/vendor/jquery.easing.1.3.js"></script>
    <script src="js/vendor/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/jquery.pogo-slider.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/contact-form.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTS_KEDfHXYBslFTI_qPJIybDP3eceE-A&amp;sensor=false"></script>
    <script src="js/maps.active.js"></script>


    <!--===== ACTIVE JS=====-->
    <script src="js/main.js"></script>
</body>
</html>