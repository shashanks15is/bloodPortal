<?php

define('IS_AJAX', isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'); 
    if(!IS_AJAX) {die('Restricted access');}

    $con = mysqli_connect("localhost","root","","bloodbank");
    if (mysqli_connect_errno())
        {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
 $n=$_POST['n'];

 if($n=="1")
 {
    $result=mysqli_query($con,"select blood,name,phone,email,district from donors");
 }
 else if($n=="2")
 {
    $result=mysqli_query($con,"select blood,name,phone,email,district from donors where blood='".$_POST['str2']."'");
 }

 else if($n=="3")
 {
    $result=mysqli_query($con,"select blood,name,phone,email,district from donors where district='".$_POST['str1']."'");
 }

  else
  {
    $result=mysqli_query($con,"select blood,name,phone,email,district from donors where district='".$_POST['str1']."' && blood='".$_POST['str2']."'");
  }
    
    
     
    
    
    $json_data=array();
    while($row=mysqli_fetch_assoc($result)){
        $json_data[]=$row;
    }
    
    echo json_encode($json_data);
    
?>