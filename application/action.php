<?php

include ('dbconnect.php');
include ('include/header.php');

$track_number = "";


if(isset($_POST['track'])){
    
    $track_number = $_POST['tracking-number'];        
        
        $sql_t = "SELECT * FROM tracking WHERE number='$track_number'";
        $res_u = mysqli_query($db, $sql_t);

        if (mysqli_num_rows($res_u) > 0) {
             	$tracking = $db->query("SELECT * FROM tracking WHERE number = '$track_number'"); 
                
                while ($tracking_data = $tracking->fetch_assoc()) { 
                    
                    
                    echo '<div class="container result-section-1">' . 
                            '<div class="col-12">' . 
                                '<h2>TRACK YOUR SHIPMENT</h2>' . 
                            '</div>' .
                            '<div class="col-6">' . 
                                '<p><b>TRACKING NUMBER: </b>' . $track_number;  '</p>'; 
                    echo        '<p><strong>SHIP DATE: </strong>' . $tracking_data["shipmentDate"];  '</p>';
                    echo            '<p><strong>EXPECTED DELIVERY DATE: </strong>' . $tracking_data["deliveryDate"];  '</p>';
                    echo            '<p><strong>DESTINATION: </strong>' . $tracking_data["destination"]; '</p>';
                    echo    '</div>';
                    echo    '<div class="col-6">';
                    echo        '<img src="assets/images/fast-delivery.gif" width="100%" />' .
                            '</div>
                         </div>' ;



                    echo '<div class="container result-section-2">' . 
                            '<div class="col-4" id="packaging">' .
                                    '<h2>PACKAGING </h2><img src="assets/images/mark.png" />' .
                            '</div>' .
                            '<div class="col-4">' .
                                '<h2>IN TRANSIT </h2><img src="assets/images/mark.png" />' .
                            '</div>' .
                            '<div class="col-4">' .
                                '<h2>DELIVERED </h2><img src="assets/images/mark.png" />' .
                            '</div>' .
                        '</div>' .

                        '<div class="container result-section-3">' . 
                            '<div class="col-6">' .
                                '<p><strong>STATUS: </strong><span id="stat">' . $tracking_data["status"]; '</span></p>';
                          
                                
                    echo        '<p><strong>CURRENT LOCATION: </strong>' . $tracking_data["location"]; '</p>';
                    echo        '<p><strong>DATE: </strong>' . date("Y-m-d"); '</p>';
                    echo    '</div>';
                    echo    '<div class="col-6">' .
                                '<p><strong>CARRIER: </strong>' . $tracking_data["carrier"]; '</p>';
                    echo        '<p><strong>WEIGHT: </strong>' . $tracking_data["weight"]; 'kg</p>';
                    echo    '</div>';
                    echo    '</div>';
                    
                        
                    echo    '<div class="col-12" style="text-align:center;margin-top:-40px;">' . 
                                '<p style="color:red;font-weight:bold;font-style:italic;font-size:14px;">' .  $tracking_data["error"];  '</p>'; 
                                
                    echo    '</div>';
        }}else{
            
                    echo '<div class="container result-section-4">' . 
                            '<div class="col-12">' . 
                                '<h2>TRACK YOUR SHIPMENT</h2>' . 
                            '</div>' .
                            '<div class="col-6">' . 
                                '<p><b>Sorry the Tracking Number could not be found, please check and try again</b></p>'; 
                    echo        '<a href="tracking.php" class="button">Track Shipment</a>';
                    echo    '</div>';
                    echo     '</div>' ;

            
        };

}
    /*
    $users = $mysqli->query("SELECT * FROM tracking WHERE number = '$track_number'"); while ($tracking_data = $tracking->fetch_assoc()) { 
        
        <?php echo $tracking_data['Balance']; ?>

*/
    include ('include/footer.php');
 ?>