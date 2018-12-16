<?php
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];



  $con = mysqli_connect("localhost","root","","bloodbank");
            if (mysqli_connect_errno())
            {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }

  $result=mysqli_query($con,"insert into enquiry_form values('','$name','$email','$phone','$message')");

  /*$query=mysql_query("insert into enquiry_form values('','$name','$email','$phone','$message')") or die(mysql_error());*/

if($result){  
  echo ("<SCRIPT LANGUAGE='JavaScript'>
       window.alert('Your message has been received. Thank You!')
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
 
