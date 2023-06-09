<?php 
include ('include/header.php');

?>

<div class="container result-section-1">
    <div class="col-12">
        <h2>TRACK YOUR SHIPMENT</h2>
    </div>
    <div class="col-6"><p><strong>TRACKING NUMBER: </strong><?php echo $tracking_number; ?></p>
        <p><strong>SHIP DATE: </strong><?php echo $tracking_data['ship-date']; ?></p>
        <p><strong>EXPECTED DELIVERY DATE: </strong><?php echo $tracking_data['delivery-date']; ?></p>
        <p><strong>DESTINATION: </strong><?php echo $tracking_data['destination']; ?></p>
    </div>
    <div class="col-6">
        <img src="assets/images/fast-delivery.gif" width="100%" />
    </div>
</div>



<div class="container result-section-2">
    <div class="col-4">
        <h2>PACKAGING </h2><img src="assets/images/mark.png" />
    </div>
    <div class="col-4">
        <h2>IN TRANSIT </h2><img src="assets/images/mark.png" />
    </div>
    <div class="col-4">
        <h2>DELIVERED </h2><img src="assets/images/mark.png" />
    </div>
</div>


<div class="container result-section-3">
    <div class="col-6">
        <p><strong>STATUS: </strong><?php echo $tracking_data['status']; ?></p>
        <p><strong>CURRENT LOCATION: </strong><?php echo $tracking_data['location']; ?></p>
        <p><strong>DATE: </strong><?php echo date("Y-m-d"); ?></p>
    </div>
    <div class="col-6">
        <p><strong>CARRIER: </strong><?php echo $tracking_data['carrier']; ?></p>
        <p><strong>WEIGHT LOCATION: </strong><?php echo $tracking_data['weight']; ?></p>
    </div>
</div>