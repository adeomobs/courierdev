<?php
include '../dbconnect.php';


if (isset($_POST['submit'])) {
    
                              
$number = $_POST['number'];
$currentLocation = $_POST['current-location'];

$currentLocations = $db->query("UPDATE tracking SET location = '$currentLocation' WHERE number = '$number'; ");

if ($currentLocations) {
    
    echo 'Current Location has been updated <br> <a href="index.php">Go back to Options</a>';
    }
    else {
echo $db->error;
}

}
?>
