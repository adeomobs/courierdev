<?php
include '../dbconnect.php';
?>
<html>
    <head>
        <title>Delete Tracking Info</title>
    </head>
    <body>
        <h2>Delete Tracking Information</h2>
        <form method="post" action="delete-tracking-info-action.php">
            <p>
            <label for="type">Tracking Number</label>
            <input type="text" name="number" placeholder="Enter Tracking Number" />
            </p>
            <input type="submit" name="submit" value="Delete Tracking Info" />
        </form>
    </body>
</html>