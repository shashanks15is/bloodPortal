<?php

define('IS_AJAX', isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'); 
    if(!IS_AJAX) {die('Restricted access');}

    $con = mysqli_connect("localhost","root","","bloodbank");
            if (mysqli_connect_errno())
            {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }
    
    //$query="select * from organizer";
    $result=mysqli_query($con,"select * from organizer");
    
    
    //$result=mysqli_query($query);
    $json_data=array();
    while($row=mysqli_fetch_assoc($result)){
        $json_data[]=$row;
    }
    
    echo json_encode($json_data);
    
?>