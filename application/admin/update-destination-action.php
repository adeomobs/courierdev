<?php
include '../dbconnect.php';


if (isset($_POST['submit'])) {
    
                              
$number = $_POST['number'];
$destination = $_POST['destination'];

$destinations = $db->query("UPDATE tracking SET destination = '$destination' WHERE number = '$number'; ");

if ($destinations) {
    
    echo 'Destination has been updated <br> <a href="index.php">Go back to Options</a>';
    }
    else {
echo $db->error;
}

}
?>
