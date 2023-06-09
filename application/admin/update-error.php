<?php
include '../dbconnect.php';
?>
<html>
    <head>
        <title>Update/Change Error</title>
    </head>
    <body>
        <h2>Update/Change Error</h2>
        <form method="post" action="update-error-action.php">
            <p>
           <label for="number">Select Tracking to Change Error Message</label>
                            <select class="custom-select form-control crypt-input-lg" name="number" placeholder="Choose Tracking Number">
                             <?php
                                    $users = $db->query("SELECT * FROM tracking "); 
                                    while ($user_data = $users->fetch_assoc()) {  
                                        echo '<option>' .  $user_data['number'] . '</option>';
                                 }?>
                                 </select>
            </p>
            <p>
        <label for="error">Error</label>
            <input type="text" name="error" placeholder="Enter Error Message" />
            </p>
            <input type="submit" name="submit" value="Update Error Message" />
        </form>
    </body>
</html>