<?php
$name=$_POST['name'];
$venue=$_POST['venue'];
$date=$_POST['date'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];



  $con = mysqli_connect("localhost","root","","bloodbank");
    if (mysqli_connect_errno())
        {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

  $result=mysqli_query($con,"insert into organizer values('','$name','$venue','$date','$email','$phone','$message')");

if($result){  
  echo ("<SCRIPT LANGUAGE='JavaScript'>
       window.alert('Your request has been received . Administrator will contact you for confirmation. Thank You!')
       window.location.href='index.php';
       </SCRIPT>");
}
 else {
  	echo ("<SCRIPT LANGUAGE='JavaScript'>
       window.alert('Unsuccessful !Try again..')
       window.location.href='index.php';
       </SCRIPT>");
  }
?>
 
