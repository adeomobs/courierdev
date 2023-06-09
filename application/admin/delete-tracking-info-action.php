<?php

include '../dbconnect.php';


if(isset($_POST['submit'])){
    $number = $_POST['number'];
    
    $deleteTracking = $db->query("DELETE from tracking where number = '$number' ");
    
    
    if($deleteTracking){
        echo 'Tracking Info Has been successfully deleted <br> <a href="index.php">Go back to Options</a>';
    }else{
        echo $db->error;
    }
    
    
}



?>