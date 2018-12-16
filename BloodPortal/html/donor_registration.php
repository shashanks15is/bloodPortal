<?php
$name=$_POST['name'];
$age=$_POST['age'];
$blood=$_POST['blood_group'];
$gender=$_POST['gender'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$state=$_POST['state'];
$district=$_POST['district'];
$location=$_POST['location'];
$address=$_POST['adrs'];


  mysql_connect("localhost","root") or die(mysql_error());
  mysql_select_db("bloodbank") or die(mysql_error());

  $query=mysql_query("insert into donors values('','$name','$age','$blood','$gender','$phone','$email','$state','$district','$location','$address')") or die(mysql_error());

if($query){  
  echo ("<SCRIPT LANGUAGE='JavaScript'>
       window.alert('Successfully Registered !')
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
 
