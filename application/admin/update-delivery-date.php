<?php
include '../dbconnect.php';
?>
<html>
    <head>
        <title>Update/Change Delivery Date</title>
    </head>
    <body>
        <h2>Update/Change Delivery Date</h2>
        <form method="post" action="update-delivery-date-action.php">
            <p>
           <label for="number">Select Tracking to Change Delivery Date</label>
                            <select class="custom-select form-control crypt-input-lg" name="number" placeholder="Choose Tracking Number">
                             <?php
                                    $users = $db->query("SELECT * FROM tracking "); 
                                    while ($user_data = $users->fetch_assoc()) {  
                                        echo '<option>' .  $user_data['number'] . '</option>';
                                 }?>
                                 </select>
            </p>
            <p>
        <label for="delivery-date">Delivery Date</label>
            <input type="date" name="delivery-date" placeholder="yy-mm-dd Enter Date it was or will be Delivered" />
            </p>
            <input type="submit" name="submit" value="Update Delivery Date" />
        </form>
    </body>
</html>