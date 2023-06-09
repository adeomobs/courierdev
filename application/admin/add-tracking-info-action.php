<?php

include '../dbconnect.php';

    

if(isset($_POST['submit'])){
    $trackingNumber = $_POST['tracking-number'];
    $shipmentDate = $_POST['shipment-date'];
    $deliveryDate = $_POST['delivery-date'];
    $destination = $_POST['destination'];
    $location = $_POST['location'];
    $status = $_POST['status'];
    $carrier = $_POST['carrier'];
    $weight = $_POST['weight'];
    
    $addInfo = $db->query("INSERT into tracking (number, shipmentDate, deliveryDate, destination, location, status, carrier, weight) VALUES ('$trackingNumber', '$shipmentDate', '$deliveryDate', '$destination', '$location', '$status', '$carrier', '$weight')");
    
        
    if($addInfo){
        echo $msg . 'Tracking Information Has been successfully added <br> <a href="index.php">Go back to Options</a>';
    }else{
        echo $db->error;
    }
        }
    


?>