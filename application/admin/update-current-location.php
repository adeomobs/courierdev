<?php
include '../dbconnect.php';
?>
<html>
    <head>
        <title>Update/Change Current Location</title>
    </head>
    <body>
        <h2>Update/Change Current Location</h2>
        <form method="post" action="update-current-location-action.php">
            <p>
           <label for="number">Select Tracking to Change Current Location</label>
                            <select class="custom-select form-control crypt-input-lg" name="number" placeholder="Choose Tracking Number">
                             <?php
                                    $users = $db->query("SELECT * FROM tracking "); 
                                    while ($user_data = $users->fetch_assoc()) {  
                                        echo '<option>' .  $user_data['number'] . '</option>';
                                 }?>
                                 </select>
            </p>
            <p>
        <label for="current-location">Current Location</label>
            <input type="text" name="current-location" placeholder="Enter Current Location" />
            </p>
            <input type="submit" name="submit" value="Update Current Location" />
        </form>
    </body>
</html>