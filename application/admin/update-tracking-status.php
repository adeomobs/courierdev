<?php
include '../dbconnect.php';
?>
<html>
    <head>
        <title>Update Tracking Status</title>
    </head>
    <body>
        <h2>Update Status Of Tracking Number</h2>
        <form method="post" action="update-tracking-status-action.php">
            <p>
           <label for="number">Select Tracking to Change Status</label>
                            <select class="custom-select form-control crypt-input-lg" name="number" placeholder="Choose Tracking Number">
                             <?php
                                    $users = $db->query("SELECT * FROM tracking "); 
                                    while ($user_data = $users->fetch_assoc()) {  
                                        echo '<option>' .  $user_data['number'] . '</option>';
                                 }?>
                                 </select>
            </p>
            <p>
            <label for="status">Transaction Status</label>
                <input type="text" name="status" placeholder="Status of Shipment" />
            </p>
            <input type="submit" name="submit" value="Update Status" />
        </form>
    </body>
</html>