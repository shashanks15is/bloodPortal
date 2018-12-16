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
    <script src="js/validation.js"></script>

    
    <script src="js/ajax_lib.js"></script>
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
                                <li><a href="#organize1">organize camp</a></li>
                                <li><a href="#organize1">Help</a></li>
                                <!-- <li><a href="#contact">contact us</a></li> -->
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

    <!--ABOUT AREA-->
    <section class="about-area section-padding" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="area-title text-center">
                        <h2>Find Donor</h2>
                    </div>
                </div>
                
                <div class="about-content">
            <div id="wc-find-donor">
            <div class="wc-find-donor">
                <div class="in-donor-wrap col-md-12">
                    <h2>Find a Donor</h2>
                
                   <div style="margin-top: 10px;">
                    <div class="col-md-4">
                    <select autocomplete="off" class="form-control" name="rblood" id="blood" style="height:41px;">
                             <option value=0>Select Blood Group</option>
                             <option  value="A+">A+</option>
                             <option  value="A-">A-</option>
                             <option  value="B+">B+</option>
                             <option  value="B-">B-</option>
                             <option  value="O+">O+</option>
                             <option  value="O-">O-</option>
                             <option  value="AB+">AB+</option>
                             <option  value="AB-">AB-</option>
                             <option  value="A1+">A1+</option>
                             <option  value="A1-">A1-</option>
                             <option  value="A2+">A2+</option>
                             <option  value="A2-">A2-</option>
                             <option  value="A1B+">A1B+</option>
                             <option  value="A1B-">A1B-</option>
                             <option  value="A2B+">A2B+</option>
                             <option  value="A2B-">A2B-</option>
                    </select></div>
  
                 <div class="col-md-4">   
                <select autocomplete="off" class="form-control" name="rstate" id="rstate" style="height:41px;">
                    <option value=0>Select State</option>
                    <option value="Karnataka">Karnataka</option>
                </select></div>
                    
                    
                    <div id="s" class="col-md-4">
                    <select autocomplete="off" class="form-control"  name="rdistrict" id="district" style="height:41px;">
                    <option value=0>Select District</option>
                    <option value="Bengaluru">Bengaluru</option>
                    <option value="Mysore">Mysore</option>
                    <option value="Tumkur">Tumkur</option>
                    <option value="Belgum">Belgum</option>
                    </select>
                    </div>
                </div>
                    
                    </div>
                    <input type="image" alt="Search" onclick="invoke(4)" src="img/btn-search.jpg" class="btn-search" />
                    
                  </form> 
                </div>
         
              <!-- Table content -->
              <div class="pricing-table-content">
                <div class="row">
                  <div class="col-md-12 col-sm-6 col-xs-12">
                    <div class="single-table-price " id="display">
                        <center><strong><h4 class="alert alert-success" id="records1">Donors Record Found</h4></strong></center>
                        <center><strong><h4 class="alert alert-danger alert-dismissible fade in" id="records2">No Donors Found</h4></strong></center>
                        <table width="629" class="table table-bordered " id="d1">
                        
                            <tr>
                                    <th style="text-align: center">Blood Group</th>
                                    <th style="text-align: center">Name</th>
                                    <th style="text-align: center">Phone No</th>
                                    <th style="text-align: center">Email</th>
                                    <th style="text-align: center">District</th>
                            </tr>
                        </table>
                    </div>
                  </div><br>&nbsp;<br>       
            </div>
          </div>      
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--ABOUT AREA END-->

    <!--KNOWMORE AREA-->
    <section class="video-area red-bg section-padding" id="catagories">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="area-title text-center">
                        <h2>Know More</h2>
                    </div>
                </div>

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <a href="#" data-toggle="modal" data-target="#registar-form"><img src="img/slide-3.jpg" alt="Los Angeles" style="width:100%;"></a>
      </div>

      <div class="item">
        <a href="#" data-toggle="modal" data-target="#registar-form"><img src="img/slide-4.jpg" alt="Chicago" style="width:100%;"></a>
      </div>
    
      <div class="item">
        <a href="#" data-toggle="modal" data-target="#registar-form"><img src="img/slide-6.jpg" alt="New york" style="width:100%;"></a>
      </div>

      <div class="item">
        <a href="#" data-toggle="modal" data-target="#registar-form"><img src="img/slide-7.jpg" alt="New york" style="width:100%;"></a>
      </div>

      <div class="item">
        <a href="#" data-toggle="modal" data-target="#registar-form"><img src="img/slide-8.jpg" alt="New york" style="width:100%;"></a>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
              </div>
        </div>
    </section>
    <!--KNOW MORE AREA END-->

    <!--BLOOD BANK AREA-->
    <section class="blog-area section-padding" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="area-title text-center">
                        <h2>BLOOD BANKS</h2>
                    </div>
                </div>
            </div>
            <center><strong><h4>Blood Banks in Bangalore.</h4></strong></center>
            <div class="row">
          <!-- Table content -->
              <div class="pricing-table-content">
                <div class="row">
                  <div class="col-md-12 col-sm-6 col-xs-12">
                    <div class="single-table-price ">
                        <table width="629" class="table table-bordered " id="hospital_list">
                        
                            <tr>
                                    <th style="text-align: center">Sl No</th>
                                    <th style="text-align: center">Blood Bank</th>
                                    <th style="text-align: center">Address</th>
                                    <th style="text-align: center">Phone No</th>
                            </tr>
                        </table>
                    </div>
                  </div><br>&nbsp;<br>       
            </div>
          </div>
        </div>
      </div>
    </div>
        </div>
    </section>
    <!--BLOOD BANK AREA END-->
    

    <!--FAQS AREA-->
    <section class="faqs-area section-padding red-bg" id="faqs">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="area-title text-center">
                        <h2>Faqs</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="faqs-list">
                        <div class="panel-group" id="accordion">
                            <div class="panel active">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#faqs_one"><i class="fa fa-arrow-down"></i> How To Donate Blood? </a>
                                    </h4>
                                </div>
                                <div id="faqs_one" class="panel-collapse collapse in">
                                    <div class="panel-body">You may please visit a Clinical Laboratory center and identify your blood group. The clinical test will cost you just ` 50-60. The result shall be provided within 2 hours time. In case you wish to donate blood now, please visit your nearest Blood Collection Center. Alternatively you may use the Registration Form given here in the website and submit for registration. Recipient, relatives or Hospital authorities will contact you directly.</div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#faqs_two"><i class="fa fa-arrow-down"></i> Eligibilities </a>
                                </h4>
                                </div>
                                <div id="faqs_two" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <li>Any donor, who is healthy, fit and not suffering from any transmittable diseases can donate blood.</li>
                                        <li>Donor must be 18 -60 years age and having a minimum weight of 50Kg can donate blood.</li>
                                        <li>Donor’s Hemoglobin level is 12.5% minimum.</li>
                                        <li>A donor can again donate blood after 3 months of your last donation of blood.</li>
                                        <li>BP Diastolic 50 to 100 mm Hg and Systolic 100 to 180 mm Hg.</li>                                    
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#faqs_three"><i class="fa fa-arrow-down"></i> Non-Eligibilities</a>
                                </h4>
                                </div>
                                <div id="faqs_three" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <li>Donors should not suffer from Cardiac arrest, hypertension, kidney alignments, epilepsy or diabetics.</li>
                                        <li>Ladies with a bad miscarriage should avoid donating blood for the next 6 months.</li>
                                        <li>If donor already donated blood or have been treated for malaria within the last three months.</li>
                                        <li>If donor consumed alcohol within the last 24 hours.</li>
                                        <li>If you are HIV+.</li>
                                        <li>If donor had a dental work for next 24 hours and wait for one month if donor had a major dental procedure.</li>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#faqs_four"><i class="fa fa-arrow-down"></i> Preparation </a>
                                </h4>
                                </div>
                                <div id="faqs_four" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <li>Prepare yourself by having enough fruit juice and water in the night and morning before you donate blood.</li>
                                        <li>Avoid donating blood in empty stomach. Eat three hours before you donate blood. Avoid fatty foods. Eat food which is rich in iron such as whole grains, eggs, and beef, and spinach, leafy vegetables, orange and citrus.</li>
                                        <li>Don’t consume Alcohol or caffeine beverages before donating blood.</li>
                                        <li>Avoid donating blood for 6 months if you had any major surgery.</li>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="faqs-right-img">
                        <img src="img/faq.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--FAQS AREA END-->

    <!--CLIENT AREA-->
    <section class="client-area section-padding" id="organize1">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="area-title text-center">
                        <h2>Organizers</h2>
                    </div>
                    <div class="contact-button text-center">
                        <h3>Organize a Blood Camp ?</h3>
                        <a href="#" class="contact-button" data-toggle="modal" data-target="#organizer-form-modal">Yes I Want</a>

                        <!-- ORGANIZER FORM MODAL -->
                        <div class="modal fade" id="organizer-form-modal" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title">Create Blood Donation Camp</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="contact-form">
                                            <form autocomplete="off" action="organizers.php" method="post" onsubmit="return organizer_validate();">
                                                <div class="form-group" >
                                                    <div class="form-input">
                                                        <input type="text" name="name" class="form-control"  placeholder="Organization Name" id="org_name" onkeypress="return onlyAlphabets(event,this);" required>
                                                    </div>
                                                </div>
                                                <div class="form-group" >
                                                    <div class="form-input">
                                                        <input type="text" name="venue" class="form-control"  placeholder="Venue" id="org_venue" maxlength="30" required>
                                                    </div>
                                                </div>
                                                <div class="form-group" >
                                                    <div class="form-input">
                                                        <input type="date" name="date" class="form-control"  placeholder="date" id="org_date" required>
                                                    </div>
                                                </div>
                                                <div class="form-group" >
                                                    <div class="form-input">
                                                        <input type="email" name="email" class="form-control"  placeholder="Email.." id="org_mail" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-input">
                                                        <input type="number" name="phone" class="form-control"  placeholder="Phone.." pattern="[0-9]{10,}" id="org_phone" minlength="10" maxlength="10">
                                                    </div>
                                                </div>
                                                <div class="form-group" >
                                                    <div class="form-input">
                                                        <textarea class="form-control" rows="6" name="message" placeholder="Message..."  autocomplete="off" required></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" >SUBMIT NOW</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ORGANIZER FORM MODAL -->
                    </div>    
                </div>
            </div>
            
        </div>
    </section>
    <!--CLIENT AREA END-->

    <!--CONTACT US AREA-->
    <div class="section contact-area section-padding red-bg" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="area-title text-center">
                        <h2>Contact</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                    <div class="single-contact text-center">
                        <h3>Victoria Hospital</h3>
                        <p>Near City Market, Fort Road, Bengaluru 560002
                            <br>Telephone: 080 2670 1150</p>
                        
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                    <div class="single-contact text-center">
                        <h3>Manipal Hospital</h3>
                        <p>Number 98, HAL Airport Road, Bengaluru, 560017
                            <br>Telephone: 080 4011 9000</p>
                        
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                    <div class="single-contact text-center">
                        <h3>M S Ramaiah Hospital</h3>
                        <p>New BEL Road, Mathikere, Bengaluru 560054
                            <br>Telephone: 080 2218 3444</p>
                        
                    </div>
                </div>
            </div><br><br>
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="contact-button text-center">
                        <h3>Do you want write something ?</h3>
                        <a href="#" class="contact-button" data-toggle="modal" data-target="#contact-form-modal">Yes I Want</a>

                        <!-- CONTACT FORM MODAL -->
                        <div class="modal fade" id="contact-form-modal" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title">Write Your Message Here</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="contact-form">
                                            <form autocomplete="off" action="enquiry_form.php"  method="post" onsubmit="return validate_feedback();">
                                                <div class="form-group" >
                                                    <div class="form-input">
                                                        <input type="text" name="name" class="form-control"  placeholder="Name.." onkeypress="return onlyAlphabets(event,this);" required>
                                                    </div>
                                                </div>
                                                <div class="form-group" >
                                                    <div class="form-input">
                                                        <input type="email" name="email" class="form-control"  placeholder="Email.." required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-input">
                                                        <input type="text" id="feedback_phone" name="phone" class="form-control"  placeholder="Phone.." maxlength="10" required>
                                                    </div>
                                                </div>
                                                <div class="form-group" >
                                                    <div class="form-input">
                                                        <textarea class="form-control" rows="6" name="message" placeholder="Message..." required></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit">SUBMIT NOW</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- CONTACT FORM MODAL -->

                        <!--REGISTER FORM MODAL-->
                        <div id="registar-form" class="modal fade" role="dialog">
                            <div class="modal-dialog modal-lg">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">DONOR REGISTRATION</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form autocomplete="off" action="donor_registration.php" method="post" class="login-form" onsubmit="return registration_validate();">

                                            <input name="name" class="form-control" type="text" placeholder="Full Name" pattern="[A-Za-z].{3,}" onkeypress="return onlyAlphabets(event,this);" required>

                                            <input name="age" class="form-control" type="text" placeholder="Age" pattern="[0-9][0-9]" maxlength="2"required>

                                            <!-- <input id="username" name="blood_group" class="form-control" type="text" placeholder="Blood Group"  autocomplete="off" required> -->

                                            <select name="blood_group" id="reg_bg" class="form-control" required> 
                                                <option value="">Select Blood Group</option>
                                                <option  value="A+">A+</option>
                                                <option  value="A-">A-</option>
                                                <option  value="B+">B+</option>
                                                <option  value="B-">B-</option>
                                                <option  value="O+">O+</option>
                                                <option  value="O-">O-</option>
                                                <option  value="AB+">AB+</option>
                                                <option  value="AB-">AB-</option>
                                                <option  value="A1+">A1+</option>
                                                <option  value="A1-">A1-</option>
                                                <option  value="A2+">A2+</option>
                                                <option  value="A2-">A2-</option>
                                                <option  value="A1B+">A1B+</option>
                                                <option  value="A1B-">A1B-</option>
                                                <option  value="A2B+">A2B+</option>
                                                 <option  value="A2B-">A2B-</option>
                                            </select>

                                            Gender&nbsp;&nbsp;&nbsp;&nbsp;
                                            <input  name="gender" type="radio"  value="male" />Male&nbsp;&nbsp;&nbsp;&nbsp;
                                            <input  name="gender" type="radio"  value="female" />Female

                                            <input id="reg_phone" name="phone" class="form-control" type="number" placeholder="Mobile No" required>

                                            <input id="signup_password" name="email" class="form-control" type="email" placeholder="Email">

                                            <!-- <input id="signup_password" name="state" class="form-control" type="text" placeholder="State"  autocomplete="off" pattern="[A-Za-z].{3,}" required> -->

                                            <select name="state" id="reg_state" class="form-control" required> 
                                                <option value="">State</option>
                                                <option value="Karnataka">Karnataka</option>
                                            </select>

                                            <!-- <input id="signup_password" name="district" class="form-control" type="text" placeholder="District"  autocomplete="off" pattern="[A-Za-z].{3,}" required> -->

                                            <select name="district" id="reg_district" class="form-control" required> 
                                                <option value="">Select District</option>
                                                <option value="Bengaluru">Bengaluru</option>
                                                <option value="Mysore">Mysore</option>
                                                <option value="Tumkur">Tumkur</option>
                                                <option value="Belgum">Belgum</option>
                                            </select>
                                          <div class="autocomplete" style="width:450px;">
                                            <input id="myInput" name="location" class="form-control" type="text" placeholder="Location" pattern="[A-Za-z].{3,}" maxlength="20" required autocomplete="off">
                                          </div>

                                            <textarea name="adrs" class="form-control" type="text" placeholder="Address" required></textarea>

                                            <div class="checkbox form-control">
                                                <label>
                                                    <input id="myCheck" type="checkbox" name="teams-and-condition" onclick="registration_submit();"> Accept the <dfn><abbr title="I authorise the website to display my telephone number, e-mail ID and mailing address so that the needy could contact me, as and when there is an emergency.">Terms & Conditions</abbr></dfn></label>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button id="mySubmit" type="submit" class="signup-login-button" disabled>SUBMIT</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--REGISTER FORM MODAL END-->

    <!--FOOER AREA-->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="footer-copyright text-center">
                        <p>&copy; 2018 Blood Portal Mini Project. Coded by <strong>Shashank, Varun & Goutham</strong>.</p>
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
    <script type="text/javascript">
        $(document).ready(function(){
      filter1("all");Hide();
      });

      function Hide()
      {
        var x = document.getElementById("display");
        x.style.display = "none";
      }

  function filter1(str) {
   if(str){
                 
                $.ajax({
                    url:"hospitals.php",
                    type:"post",
                    data:{
                        "str":str
                        },
                    success:function(data){
                        var obj=JSON.parse(data);
                        var table_content=""
                        $('#hospital_list').find( 'tr:not(:first)' ).remove();
                        $.each(obj,function(index,value){
                            table_content+="<tr>";
                            table_content+="<td><center>"+value.id+"</center></td>";
                            table_content+="<td><center>"+value.blood_bank+"</center></td>";
                            table_content+="<td><center>"+value.address+"</center></td>";
                            table_content+="<td><center>"+value.phone+"</center></td>";                            
                        });
                        $("#hospital_list").append(table_content);

                    }
                });
            }
            else{
                location.reload();
            }
   }


   function invoke(n)
   {
        
        document.getElementById("display").style.display="none";
        var s1 = document.getElementById("district");
        var str1 = s1.value;

        var s2 = document.getElementById("blood");
        var str2 = s2.value;

        if(n==1)
        {
          filter2(n,str1,str2);
        }

        else if(str1==0 || str2==0)
          {
            var x = document.getElementById("display");
            if (x.style.display === "none") 
            {
              x.style.display = "block";
              document.getElementById("records1").style.visibility="hidden";
              document.getElementById("d1").style.visibility="hidden";
              document.getElementById("records2").style.visibility="visible";
              document.getElementById("records2").innerHTML="Please select an appropriate option!";
            } 
            
            else 
            {
              x.style.display = "none";
            }
          }



        else
        {
            filter2(n,str1,str2);
           var x = document.getElementById("display");
            if (x.style.display === "none") {
              x.style.display = "block";
              document.getElementById("records2").style.visibility="hidden";
              document.getElementById("d1").style.visibility="visible";
              document.getElementById("records1").style.visibility="visible";
              
            } 

            else 
            {
              x.style.display = "none";
            }
        }   

            
    }

   function filter2(n,str1,str2) {
   if(n>0){
                 
                $.ajax({
                    url:"donors_list.php",
                    type:"post",
                    data:{
                        "str1":str1,"str2":str2,"n":n
                    },
                    success:function(data){
                        var obj=JSON.parse(data);
                        var table_content="";
                        if(jQuery.isEmptyObject(obj))
                        {
                            document.getElementById("records1").style.visibility="hidden";
                            document.getElementById("records2").style.visibility="visible";
                        }
                        $('#d1').find( 'tr:not(:first)' ).remove();
                        $.each(obj,function(index,value){
                            table_content+="<tr>";
                            table_content+="<td><center>"+value.blood+"</center></td>";
                            table_content+="<td><center>"+value.name+"</center></td>";
                            table_content+="<td><center>"+value.phone+"</center></td>";
                            table_content+="<td><center>"+value.email+"</center></td>";
                            table_content+="<td><center>"+value.district+"</center></td>";                            
                        });
                        $("#d1").append(table_content);

                    }
                });
            }
            else{
                location.reload();
            }
   }
    </script>    
</body>
</html>