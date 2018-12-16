<?php session_start(); ?>
<!doctype html>
<html class="no-js" lang="en"><!--<![endif]-->


<head>
    <!--====== USEFULL META ======-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Playtube is a simple video landing website" />
    <meta name="keywords" content="Video, youtube, vimeo" />

    <!--====== TITLE TAG ======-->
    <title>Blood Bank</title>

    <!--====== FAVICON ICON =======-->
    <link rel="shortcut icon" type="image/ico" href="img/favicon.html" />

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
    
<script>
    if(!(localStorage['login']=="success")){
        window.location.replace("index.php");
    }
    function signout(){
      localStorage.removeItem("login");
      window.location.replace("index.php");
    }
</script>
<script type="text/javascript">
      $(document).ready(function(){
      call1(1);
      
      });

      function call1(n)
   {
        document.getElementById("display").style.display="none";
        var s1 = document.getElementById("district");
        var str1 = s1.value;

        var s2 = document.getElementById("blood");
        var str2 = s2.value;

        if(n==1)
        {
          filter_donor(n,str1,str2);
          var x = document.getElementById("display");
            if (x.style.display === "none") {
              x.style.display = "block";
              document.getElementById("records2").style.visibility="hidden";
              document.getElementById("d2").style.visibility="visible";
              document.getElementById("records1").style.visibility="visible";
              
            } 

            else 
            {
              x.style.display = "none";
            }
        }

        
        else
        {
            filter_donor(n,str1,str2);
           var x = document.getElementById("display");
            if (x.style.display === "none") {
              x.style.display = "block";
              document.getElementById("records2").style.visibility="hidden";
              document.getElementById("d2").style.visibility="visible";
              document.getElementById("records1").style.visibility="visible";
              
            } 

            else 
            {
              x.style.display = "none";
            }
        }   

            
    }

   function filter_donor(n,str1,str2) {
                 
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
                        $('#d2').find( 'tr:not(:first)' ).remove();
                        $.each(obj,function(index,value){
                            table_content+="<tr>";
                            table_content+="<td><center>"+value.blood+"</center></td>";
                            table_content+="<td><center>"+value.name+"</center></td>";
                            table_content+="<td><center>"+value.phone+"</center></td>";
                            table_content+="<td><center>"+value.email+"</center></td>";
                            table_content+="<td><center>"+value.district+"</center></td>";                            
                        });
                        $("#d2").append(table_content);

                    }
                });
            
            
   }
   </script>  
</head>

<body>

<?php
$con = mysqli_connect("localhost","root","","bloodbank");
            if (mysqli_connect_errno())
            {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }

$user=$_SESSION['username'];


$query1=mysqli_query($con,"select * from admin where user='".$user."'");
$donors=mysqli_query($con,"select count(*) from donors");
$count=mysqli_fetch_row($donors);
$row1=mysqli_fetch_row($query1);
?>    

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
                            <a href="#home" class="navbar-brand white-logo"><h2 style="color: #fff;">BLOOD  PORTAL</h2></a>
                        </div>
                        <div class="collapse navbar-collapse bs-example-js-navbar-scrollspy">
                            <div class="signup-and-login-button hidden-sm hidden-xs">
                                <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $user;?>&nbsp;&nbsp;<span class="glyphicon glyphicon-user" aria-hidden="true"></span><span class="fa fa-angle-down"></span></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#" data-toggle="modal" data-target="#login-form">Account</a></li>   
                                            <li><a href="#" onclick="signout()">Logout&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-off" aria-hidden="true"></span></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <ul id="nav" class="nav navbar-nav cl-effect-11">
                                <li><a href="adminForm.php">Organizers Enquiry</a></li>
                                <li><a href="adminForm2.php">Enquiries</a></li>
                                <li><a href="#about" class="active">donorList</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <!--END MAINMENU AREA END-->
        </div><br>

        <section class="about-area section-padding" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="area-title text-center">
                        <h2>Donor List</h2><br/><br/><br/>
                       <h4>Count  :  <?php echo $count[0];?></h4> 
                    </div>
                </div>
                
                
            
            <div>
                <div class=" col-md-12">                
                   <div style="margin-top: 10px;">
                    <div class="col-md-4">
                    <select onchange="call1(2);" autocomplete="off" class="form-control" name="rblood" id="blood" style="height:41px;">
                             <option value="0">Select Blood Group</option>
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
                <select  autocomplete="off" class="form-control" name="rstate" id="rstate" style="height:41px;">
                    <option value="0">Select State</option>
                    <option value="Karnataka">Karnataka</option>
                </select></div>
                    
                    
                    <div id="s" class="col-md-4">
                    <select onchange="call1(3);" autocomplete="off" class="form-control"  name="rdistrict" id="district" style="height:41px;">
                    <option value="0">Select District</option>
                    <option value="Bengaluru">Bengaluru</option>
                    <option value="Mysore">Mysore</option>
                    <option value="Tumkur">Tumkur</option>
                    <option value="Belgum">Belgum</option>
                    </select>
                    </div>
                </div>
                    <br/><br/>
                    <CENTER><button type="button" class="btn btn-info" onclick="call1(4);">Search Blood in District</button></CENTER> -
                    </div>
                </div>
         
              <!-- Table content -->
              <div class="pricing-table-content">
                <div class="row">
                  <div class="col-md-12 col-sm-6 col-xs-12">
                    <div class="single-table-price " id="display">
                        <center><strong><h4 class="alert alert-success" id="records1">Donors Record Found</h4></strong></center>
                        <center><strong><h4 class="alert alert-danger alert-dismissible fade in" id="records2">No Donors Found</h4></strong></center>
                        <table width="629" class="table table-bordered " id="d2">
                        
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


    <div class="section contact-area section-padding red-bg" id="contact">
    <div class="container">
    <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="contact-button text-center">
    <!--LOGIN FORM MODAL-->
                        <div id="login-form" class="modal fade" role="dialog">
                            <div class="modal-dialog modal-sm">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Account</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form action="adminUpdate.php" method="post" class="login-form">
                                            <?php echo '<input id="login_username" name="id" class="form-control" type="text"  value="'. htmlspecialchars($row1[0]) .'">'?>
                                            <?php echo '<input id="login_username" name="user" class="form-control" type="text"  value="'. htmlspecialchars($row1[1]) .'">'?>
                                            <input id="login_password" name="pwd" class="form-control" type="password" placeholder="Password" required>
                                            <input id="login_password" name="cpwd" class="form-control" type="password" placeholder="Confirm Password" required>
                                        
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" name="btt" class="signup-login-button">Submit</button>
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
     </section> 



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