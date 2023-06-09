<?php
    $page = 10;
    include ('include/header.php');
    
    echo $page;
?>

<div class="container contact-section-1">
    <div class="col-6">
        <h2>Contact Us</h2>
        <p>Ready to get started with Delux Courier? Contact us at +1-(406)-478-2352 or send us a message using the form below. A Delux Courier rep will get back to you shortly.</p>
        
        <form method="POST" action="#">
            <input type="text" placeholder="First Name" name="firstName" />
            <input type="text" placeholder="Last Name" name="lastName" />
            <input type="text" placeholder="Company" name="company" />
            <input type="email" placeholder="Email" name="email" />
            <input type="text" placeholder="Phone" name="phone" />
            <select name="state">
                <option>State</option>
                <option>Alabama</option>
                <option>Alaska</option>
                <option>Arizona</option>
                <option>Arkansas</option>
                <option>California</option>
                <option>Colorado</option>
                <option>Connecticut</option>
                <option>Delaware</option>
                <option>Florida</option>
                <option>Georgia</option>
            </select>
            <select name="inquiry-type">
                <option>Inquiry Type</option>
                <option>Sales</option>
                <option>General Questions</option>
                <option>Support enquiries</option>
            </select>
            <textarea placeholder="Please Provide a brief description of your shipping needs (include tracking numbers or account number, if applicable)" name"message"></textarea>
            <p>By clicking “submit,” I give my consent to receive calls from or on behalf of Delux Courier to contact me at the number provided for new product information and shipping information. I understand that I can revoke this consent at any time and consent is not a condition to purchase.</p>
            <input type="submit" value="Submit" class="submit" />
        </form>
    </div>
    
    <div class="col-4">
        <p><strong>Address 1: </strong>769 Fallow Ln, Billings, MT 59101.</p>
        <p><strong>Address 2: </strong>Alexandrineplatz 2A, 18205 Bad Doberan, Marcklenburg-West Pomerania.</p>
        <p><strong>Phone : </strong>+1-(406)-478-2352</p>
        <p><strong>Phone : </strong>+1-(775)-464-0577</p>
        <p><strong>Phone : </strong>+49-(1514)-368-4834</p>
        <p><strong>Phone : </strong>+1-(775)-464-0577</p>
        <p><strong>Phone : </strong>+48-(576)-364-028</p>
        <p><strong>Email : </strong>info@deluxcourier.com</p>
        <p><strong>Customer Support Hours : </strong>Monday–Friday, 6am–6pm PT</p>
    </div>
</div>



<div class="container contact-section-2">
    
    <div class="col-3">
        <img src="assets/images/con-icon-1.png" />
        <p class="p1">Free Pick-up Service</p>
        <p class="p2">Ship orders the same day you receive them</p>
    </div>
    
    
    <div class="col-3">
        <img src="assets/images/con-icon-2.png" />
        <p class="p1">No Customs Forms</p>
        <p class="p2">Send Customs electronically – no forms to print</p>
    </div>
    
    
    <div class="col-3">
        <img src="assets/images/con-icon-3.png" />
        <p class="p1">Door-to-Door</p>
        <p class="p2">Give customers more detailed insight into package location</p>
    </div>
    
    
    <div class="col-3">
        <img src="assets/images/con-icon-4.png" />
        <p class="p1">$200 Replacement Coverage</p>
        <p class="p2">Free Coverage up to $200</p>
    </div>
    
</div>


<?php
 include ('include/footer.php');
?>