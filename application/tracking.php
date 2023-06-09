<?php 
    $page = 7;
    include ('include/header.php');
?>

<div class="main-content">
    
    <div class="container tracking-section-1">
        <div class="col-6">
            <form method="post" action="action.php">
                <input name='tracking-number' type="text" placeholder='Type your tracking number' class="tracking" />
                <input type="submit" value="Track" class="button" name="track" />
            </form>
        </div>
    </div>
        
<?php
    include('include/footer.php');
?>