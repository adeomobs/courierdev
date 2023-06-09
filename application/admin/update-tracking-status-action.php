<?php
include '../dbconnect.php';


if (isset($_POST['submit'])) {
    
                              
$number = $_POST['number'];
$status = $_POST['status'];

$statusUpdate = $db->query("UPDATE tracking SET status = '$status' WHERE number = '$number'; ");

if ($statusUpdate) {
    
    echo 'Status has been updated <br> <a href="index.php">Go back to Options</a>';
    }
    else {
echo $db->error;
}

}
?>
