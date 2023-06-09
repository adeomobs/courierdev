<?php
include '../dbconnect.php';
?>

<html>
    <body style="text-align: center; margin:auto;">
                                        <table class="table" style="margin:auto;text-align:center;">
                                            <thead>
                                                <tr>
                                                    <td>Id</td>
                                                    <td>Tracking Number</td>
                                                    <td>Shipment Date</td>
                                                    <td>Delivery Date</td>
                                                    <td>Destination</td>
                                                    <td>Current Location</td>
                                                    <td>Status</td>
                                                    <td>Carrier</td>
                                                    <td>Weight</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                               <!-- We use while loop to fetch data and display rows of date on html table -->
                                        <?php  
        						    	$users = $db->query("SELECT * FROM tracking "); 
        									          while ($user_data = $users->fetch_assoc()) {
        									            echo '<tr>';
        									            echo '<th>' . $user_data['id'] . '</th>';
        									            echo '<td>' . $user_data['number'] . '</td>';
        									            echo '<td>' . $user_data['shipmentDate'] . '</td>';
            									        echo '<td>' . $user_data['deliveryDate'] . '</td>';
        									            echo '<td>' . $user_data['destination'] . '</td>';
        									            echo '<td>' . $user_data['location'] . '</td>';
        									            echo '<td>' . $user_data['status'] . '</td>';
        									            echo '<td>' . $user_data['carrier'] . '</td>';
        									            echo '<td>' . $user_data['weight'] . '</td>';
        									            echo '</tr>';
        									          }
        									        ?>
                                            </tbody>
                                        </table>
                                        
                                        
                                        
        <h2>Options of things to do</h2>
        <h4><a href="add-tracking-info.php">Add New Tracking Info</a></h4>
        <h4><a href="delete-tracking-info.php">Delete Tracking Info</a></h4>
        <!--<h4><a href="add-transactions.php">Add New Transaction to a Bank Account Profile</a></h4>
        <h4><a href="delete-transactions.php">Delete Transaction from a Profile</a></h4>-->
        <h4><a href="update-tracking-status.php">Update Status of Tracking Number</a></h4>
        <h4><a href="update-shipment-date.php">Update Shipment Date of Tracking</a></h4>
        <h4><a href="update-delivery-date.php">Update Delivery Date of Tracking</a></h4>
        <h4><a href="update-current-location.php">Update Current Location</a></h4>
        <h4><a href="update-destination.php">Update Destination</a></h4>
        <h4><a href="update-error.php">Update Error</a></h4>
        
    </body>
    
</html>