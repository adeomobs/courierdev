<!DOCTYPE html>
<html>
    <head>
        <title> <?php if ($page == 2){echo 'Parcel Select | ';} else if($page == 3){echo 'Delux Courier Economy & Standard International | ';} else if($page == 4){echo 'Delux Courier Plus | ';} else if($page == 5){echo 'USPS Canada DDP | ';} else if($page == 6){echo 'Delux Courier Returns | ';} else if($page == 7){echo 'Track a Package | ';} else if($page == 8){echo 'FAQs | ';} else if($page == 9){echo 'About Us | ';} else if($page == 10){echo 'Contact Us | ';} else if($page == 11){echo 'NGO | ';} ?>Delux Courier
        </title>
    
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="icon" href="assets/images/icon.png" type="favicon" />
    </head>
    <body>
        <header>
            <nav>
                <div class="logo">
                    <a href="https://deluxcourier.com"><img src="assets/images/log.png" alt="Delux Courier Services" /></a>
                </div>
                <div class="menu">
                    <div class="navbar">
                        <a href="index.php" class="<?php if ($page == 1) echo ' active'; ?>">Home</a>
                        <div class="dropdown">
                            <button class="dropbtn <?php if ($page == 2) echo ' active'; ?>">Domestic Shipping 
                              <i class="fa fa-caret-down"></i>
                            </button>
                            <div class="dropdown-content">
                              <a href="parcel-select.php" class="<?php if ($page == 2) echo ' active'; ?>">Parcel Select</a>
                            </div>
                        </div> 
                        <div class="dropdown">
                            <button class="dropbtn <?php if ($page == 3 || $page == 4 || $page == 5 || $page == 6) echo ' active'; ?>">International Shipping 
                              <i class="fa fa-caret-down"></i>
                            </button>
                            <div class="dropdown-content">
                                
                              <a href="gpeconomy.php" class="<?php if ($page == 3) echo ' active'; ?>" >Delux Courier Economy & Standard International</a>
                              
                              <a href="gpplus.php" class="<?php if ($page == 4) echo ' active'; ?>">Delux Courier Plus</a>
                              
                              <a href="usps.php" class="<?php if ($page == 5) echo ' active'; ?>">USPS Canada DDP</a>
                              
                              <a href="gpreturns.php" class="<?php if ($page == 6) echo ' active'; ?>">Delux Courier Returns</a>
                            </div>
                        </div> 
                        <a href="tracking.php" class="<?php if ($page == 7) echo ' active'; ?>">Track a Package</a>
                        
                        <div class="dropdown">
                            <button class="dropbtn <?php if ($page == 8 || $page == 9 ) echo ' active'; ?>">Help 
                              <i class="fa fa-caret-down"></i>
                            </button>
                            <div class="dropdown-content">
                                
                              <a href="faqs.php" class=" <?php if ($page == 8) echo ' active'; ?>">FAQS</a>
                              
                              <a href="about-us.php" class="<?php if ($page == 9) echo ' active'; ?>">About Us</a>
                            </div>
                        </div> 
                        <a href="contact.php" class="<?php if ($page == 10) echo ' active'; ?>">Contact us</a>
                    </div>
                </div>
            </nav>
        </header>