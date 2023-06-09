<?php
include '../dbconnect.php';
?>
<html>
    <head>
        <title>Add New Tracking Information</title>
    </head>
    <body>
        <h2>Add New Tracking Information</h2>
        <form method="POST" action="add-tracking-info-action.php"  enctype="multipart/form-data">
            <p>
            <lable for="tracking-number">Tracking Number</lable>
            <input type="text" name="tracking-number" placeholder="123456789" />
            </p>
            <p>
        <label for="shipment-date">Shipment Date</label>
            <input type="date" name="shipment-date" placeholder="yy-mm-dd Enter Date it was or will be shipped out" />
            </p>
            <p>
            <label for="delivery-date">Delivery Date</label>
            <input type="date" name="delivery-date" placeholder="yy-mm-dd Enter the Estimated Delivery Date" />
            </p>
            <p>
            <label for="destination">Destination</label>
            <input type="text" name="destination" placeholder="Enter address where it will be delivered too" />
            </p>
            <p>
            <label for="location">Current Location</label>
            <input type="text" name="location" placeholder=" Enter Current Location of Shipment" />
            </p>
            <p>
            <label for="status">Transaction Status</label>
            <select name="status" placeholder="Select Status of Shipment">
                <option value="Packaging">Packaging</option>
                <option value="Ready for Shipping">Reading for Shipping</option>
                <option value="In Transit">In Transit</option>
                <option value="Delivered">Delivered</option>
            </select>
            </p>
            <p>
            <label for="carrier">Carrier</label>
            <input type="text" name="carrier" placeholder="Enter Carrier e.g Fedex" />
            </p>
            <p>
            <label for="weight">Enter Weight</label>
            <input type="text" name="weight" placeholder="Type the weight in KG " />
            </p>
            <input type="submit" name="submit" value="Add Tracking Info" />
        </form>
    </body>
</html>