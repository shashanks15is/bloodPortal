<?php
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];



  mysql_connect("localhost","root") or die(mysql_error());
  mysql_select_db("bloodbank") or die(mysql_error());

  $query=mysql_query("insert into enquiry_form values('','$name','$email','$phone','$message')") or die(mysql_error());

if($query){  
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
 
