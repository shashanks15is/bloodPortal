<?php session_start(); ?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en"><!--<![endif]-->


<!-- Mirrored from quomodotheme.website/html/playtube/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Nov 2017 12:57:02 GMT -->
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
    <script type="text/javascript">
      $(document).ready(function(){
      filter1("all")
  });

  function filter1(str) {
   if(str){
                 
                $.ajax({
                    url:"enquiries.php",
                    type:"post",
                    data:{
                        "str":str
                    },
                    success:function(data){
                        var obj=JSON.parse(data);
                        var table_content=""
                        $('#hospital_list').find( 'tr:not(:first)' ).remove();
                        $.each(obj,function(index,value){
                            table_content+="<tr id=\"this\">";
                            table_content+="<td><center>"+value.id+"</center></td>";
                            table_content+="<td contenteditable=\"true\" id=\"Name\"><center>"+value.name+"</center></td>";
                            table_content+="<td contenteditable=\"true\" id=\"mail\"><center>"+value.email+"</center></td>";
                            table_content+="<td contenteditable=\"true\" id=\"phone\"><center>"+value.phone+"</center></td>";
                            table_content+="<td contenteditable=\"true\" id=\"message\"><center>"+value.message+"</center></td>";
                            table_content+="<td><span class=\"btn btn-info\" style=\"color:#fff\"  onclick=\"register('"+value.id+"',this.id)\">Delete</span></td>";                        
                        });
                        $("#hospital_list").append(table_content);

                    }
                });
            }
            else{
                location.reload();
            }
   }

   function register(id) {
                         var hold=id;
                         var x="1";
                         $.ajax({
                    url:"adminForm2_operation.php",
                    type:"post",
                    data:{
                        "str":id,"f":x
                    },
                    success:function(data){
                        filter1();

                    }
                });                  
            }  
   </script>
<script>
    if(!(localStorage['login']=="success")){
        window.location.replace("index.php");
    }
    function signout(){
      localStorage.removeItem("login");
      window.location.replace("index.php");
    }
</script>
    


    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>
<?php
mysql_connect("localhost","root") or die(mysql_error());
mysql_select_db("bloodbank") or die(mysql_error());


$user=$_SESSION['username'];


$query=mysql_query("select * from trigger_count") or die(mysql_error());
$row=mysql_fetch_row($query);

$query1=mysql_query("select * from admin where user='".$user."'");
$row1=mysql_fetch_row($query1);
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
                                <li><a href="#blog" class="active">Enquiries</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <!--END MAINMENU AREA END-->
        </div><br>

        

    <!--ENQUIRY AREA-->
    <section class="faqs-area section-padding black-bg" id="blog" style="margin-top: 100px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="area-title text-center">
                        <h2>ENQUIRIES</h2>
                    </div>
                </div>
            </div>
            <center><strong><h4>Enquiries from Visitors.</h4></strong></center>
            <div class="row">
          <!-- Table content -->
              <div class="pricing-table-content">
                <div class="row">
                  <div class="col-md-12 col-sm-6 col-xs-12">
                    <div class="single-table-price "><center><strong style="text-align: right;">COUNT : <?php echo $row[1]; ?></strong></center><br><br>
                        <table width="629" class="table table-bordered " id="hospital_list">
                        
                            <tr>
                                    <th style="text-align: center">Sl No</th>
                                    <th style="text-align: center">Name</th>
                                    <th style="text-align: center">Email</th>
                                    <th style="text-align: center">Phone No</th>
                                    <th style="text-align: center">Message</th>
                                    <th style="text-align: center">Delete</th>
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
    <!--ENQUIRY AREA END-->
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