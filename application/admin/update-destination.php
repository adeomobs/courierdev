<?php
include '../dbconnect.php';
?>
<html>
    <head>
        <title>Update/Change Destination</title>
    </head>
    <body>
        <h2>Update/Change Destination</h2>
        <form method="post" action="update-destination-action.php">
            <p>
           <label for="number">Select Tracking to Change Destination</label>
                            <select class="custom-select form-control crypt-input-lg" name="number" placeholder="Choose Tracking Number">
                             <?php
                                    $users = $db->query("SELECT * FROM tracking "); 
                                    while ($user_data = $users->fetch_assoc()) {  
                                        echo '<option>' .  $user_data['number'] . '</option>';
                                 }?>
                                 </select>
            </p>
            <p>
        <label for="destination">Destination</label>
            <input type="text" name="destination" placeholder="Enter Destination" />
            </p>
            <input type="submit" name="submit" value="Update Destination" />
        </form>
    </body>
</html>