<?php

define('IS_AJAX', isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'); 
    if(!IS_AJAX) {die('Restricted access');}

    mysql_connect("localhost","root") or die(mysql_error());
    mysql_select_db("bloodbank") or die(mysql_error());
    
        $query="select * from enquiry_form";
    
    
    
    $result=mysql_query($query);
    $json_data=array();
    while($row=mysql_fetch_assoc($result)){
        $json_data[]=$row;
    }
    
    echo json_encode($json_data);
    
?>