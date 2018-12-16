<?php
$name=$_POST['name'];
$venue=$_POST['venue'];
$date=$_POST['date'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];



  mysql_connect("localhost","root") or die(mysql_error());
  mysql_select_db("bloodbank") or die(mysql_error());

  $query=mysql_query("insert into organizer values('','$name','$venue','$date','$email','$phone','$message')") or die(mysql_error());

if($query){  
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
 
