<?php
include '../dbconnect.php';


if (isset($_POST['submit'])) {
    
                              
$number = $_POST['number'];
$error = $_POST['error'];

$errors = $db->query("UPDATE tracking SET error = '$error' WHERE number = '$number'; ");

if ($errors) {
    
    echo 'Error Message has been updated <br> <a href="index.php">Go back to Options</a>';
    }
    else {
echo $db->error;
}

}
?>
