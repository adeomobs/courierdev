<?php 
    $page = 1;

    include ('dbconnect.php');
    include ('include/header.php');
?>

<div class="main-content">
    
    <div class="container section-1">
        <div class="col-6">
            <form action="action.php" method="post">
                <input name='tracking-number' type="text" placeholder='Type your tracking number' class="tracking" />
                <div><span><?php echo $error; ?></span></div>
                <input type="submit" value="Track" class="button" name="track" />
            </form>
            <div class="sub-text">
                <p>Seperate multiple tracking numbers with a space or comma. <span>Advanced Tracking</span></p>
            </div>
        </div>
        <div class="col-3">
            <p>Discover new ways to take your business further <br><span>Know More...</span></p>
        </div>
    </div>
    
    <div class="container section-2">
        <div class="col-4">
            <p class="heading">Find Delux Courier In <span>United States</span></p>
            <p class="underlay"></p>
            <img src="assets/images/sec-1.jpg" />
            <button>Find Nearest Location</button>
        </div>
        <div class="col-4">
            <p class="heading">International Shipping</p>
            <p class="underlay"></p>
            <img src="assets/images/sec-2.jpg" />
            <button>Learn More</button>
        </div>
        <div class="col-4" style="margin-right:0px;">
            <p class="heading">Domestic Shipping</p>
            <p class="underlay"></p>
            <img src="assets/images/sec-3.jpg" />
            <button>Learn More</button>
        </div>
    </div>
    
    <div class="container section-3">
        <div class="col-12">
            <h2>WHY DELUX COURIER</h2>
            <p>Delux Courier offers a range of domestic and international shipping solutions that simplifies parcel shipping while saving you money.  By combining our world-class customer service, easy-to-use technology and seamless integrations with the world’s top shipping platforms, we help e-commerce and warehouse sellers succeed domestically and around the world.</p>
        </div>
        <div class="col-4">
            <img src="assets/images/art-icon-1.png" alt="Icon" />
            <h5>Cost Saving</h5>
            <p>We offer solutions that offset the enormous pressure to reduce parcel shipping budgets</p>
        </div>
        <div class="col-4">
            <img src="assets/images/art-icon-2.png" alt="Icon" />
            <h5>Technology</h5>
            <p>Seamless integration with Stamps.com/Endicia and the world’s top shipping platforms</p>
        </div>
        <div class="col-4">
            <img src="assets/images/art-icon-3.png" alt="Icon" />
            <h5>Concierge Support</h5>
            <p>Free phone and email support, Monday through Friday, 6am-6pm Pacific Time</p>
        </div>
        <div class="col-4">
            <img src="assets/images/art-icon-4.png" alt="Icon" />
            <h5>Experience</h5>
            <p>Our dedicated team has 25+ years of shipping industry experience and are experts in e-commerce, fulfillment, and marketing</p>
        </div>
        <div class="col-4">
            <img src="assets/images/art-icon-5.png" alt="Icon" />
            <h5>Trust</h5>
            <p>Delux Courier is part of the Stamps.com family, the leading USPS shipping provider with over 700,000 customers</p>
        </div>
        <div class="col-4">
            <img src="assets/images/art-icon-6.png" alt="Icon" />
            <h5>Knowledge</h5>
            <p>Our shipping experts provide free consultation that results in improved efficiency and lower rates</p>
        </div>
    </div>
    
    
    <div class="container section-5">
        <div class="col-6">
            <img src="assets/images/news-1.jpg" />
            <div class="content">
                <p>News</p>
                <p class="underlay"></p>
                <p class="left">Delux Courier Revenues Increases 4% To AED 1,332 Million In Q2 2020</p>
                <p class="left">Q2 2020 Net Profit fell 23% to AED 94.4 million First Half 2020 Revenuess rose 1% to AED 2,528 million First Half 2020 Net Profit declined 30% to AED 162 million Domestic Express e-commerce volumes in core markets rose 133% i...</p>
                <button>Read More</button>
            </div>
        </div>
        <div class="col-6">
            <img src="assets/images/news-2.jpg" />
            <div class="content">
                <p>News</p>
                <p class="underlay"></p>
                <p class="left">Delux Courier Goes Live With Cargowise Globally in a "Big Bang" Approach </p>
                <p class="left">"Delux Courier SMART" is the industry's first comprehensive delivery, paymen and returns solution available for e-tailers around the world selling to shoppers in Delux Courier's core markets. The innovative solution provides an easier and more...</p>
                <button>Read More</button>
            </div>
        </div>
    </div>
        
<?php
    include('include/footer.php');
?>