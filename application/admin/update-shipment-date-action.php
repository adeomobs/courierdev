<?php
include '../dbconnect.php';


if (isset($_POST['submit'])) {
    
                              
$number = $_POST['number'];
$shipmentDate = $_POST['shipment-date'];

$shipmentUpdate = $db->query("UPDATE tracking SET shipmentDate = '$shipmentDate' WHERE number = '$number'; ");

if ($shipmentUpdate) {
    
    echo 'Shipment Date has been updated <br> <a href="index.php">Go back to Options</a>';
    }
    else {
echo $db->error;
}

}
?>
