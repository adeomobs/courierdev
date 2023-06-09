<?php
include '../dbconnect.php';


if (isset($_POST['submit'])) {
    
                              
$number = $_POST['number'];
$deliveryDate = $_POST['delivery-date'];

$deliveryUpdate = $db->query("UPDATE tracking SET deliveryDate = '$deliveryDate' WHERE number = '$number'; ");

if ($deliveryUpdate) {
    
    echo 'Delivery Date has been updated <br> <a href="index.php">Go back to Options</a>';
    }
    else {
echo $db->error;
}

}
?>
