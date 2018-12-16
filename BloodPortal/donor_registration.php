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


  $con = mysqli_connect("localhost","root","","bloodbank");
    if (mysqli_connect_errno())
        {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
  $result=mysqli_query($con,"insert into donors values('','$name','$age','$blood','$gender','$phone','$email','$state','$district','$location','$address')");

  

if($result){  
  echo ("<SCRIPT LANGUAGE='JavaScript'>
       window.alert('Successfully Registered !')
       window.location.href='index.php';
       </SCRIPT>");
}
 else {
  	echo ("<SCRIPT LANGUAGE='JavaScript'>
       window.alert('Donor already existing with phone number $phone!!!')
       window.location.href='index.php';
       </SCRIPT>");
  } 
?>
 
