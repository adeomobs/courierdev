<?php
include '../dbconnect.php';
?>
<html>
    <head>
        <title>Update/Change Shipment Date</title>
    </head>
    <body>
        <h2>Update/Change Shipment Date</h2>
        <form method="post" action="update-shipment-date-action.php">
            <p>
           <label for="number">Select Tracking to Change Shipment Date</label>
                            <select class="custom-select form-control crypt-input-lg" name="number" placeholder="Choose Tracking Number">
                             <?php
                                    $users = $db->query("SELECT * FROM tracking "); 
                                    while ($user_data = $users->fetch_assoc()) {  
                                        echo '<option>' .  $user_data['number'] . '</option>';
                                 }?>
                                 </select>
            </p>
            <p>
        <label for="shipment-date">Shipment Date</label>
            <input type="date" name="shipment-date" placeholder="yy-mm-dd Enter Date it was or will be shipped out" />
            </p>
            <input type="submit" name="submit" value="Update Shipment Date" />
        </form>
    </body>
</html>