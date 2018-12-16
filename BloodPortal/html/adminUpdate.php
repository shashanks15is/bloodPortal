<?php
$id=$_POST['id'];
$name=$_POST['user'];
$pwd=$_POST['pwd'];
$cpwd=$_POST['cpwd'];


  mysql_connect("localhost","root") or die(mysql_error());
  mysql_select_db("bloodbank") or die(mysql_error());

  if(strcmp($pwd, $cpwd)==0){

  $query=mysql_query("update admin set user='$name',pwd='$pwd' where id='$id'") or die(mysql_error());

if($query){  
  echo ("<SCRIPT LANGUAGE='JavaScript'>
       window.alert('Updated Successfully! Login again!')
       window.location.href='index.php';
       </SCRIPT>");
}
}
 else {
  	echo ("<SCRIPT LANGUAGE='JavaScript'>
       window.alert('Password do not match!!!')
       window.location.href='index.php';
       </SCRIPT>");
  }
?>
 
