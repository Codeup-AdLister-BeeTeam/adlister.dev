<?php 

require_once '../bootstrap.php';

// Require or include statements are allowed here.
// All other code goes in the pageController function.

/*
 *The pageController function handles all processing for this page.
 *@return array an associative array of data used in rendering the HTML view.
 */
    function pageController()
    {
         // Step One in controller, initialize array
        $adsForShow = ['showAds' => Ads::all()];
        
        return $adsForShow;    
    }

    extract(pageController());


?>



 <html>
<?php require_once '../views/partials/head.php'; ?> 
    <title>Ads Index</title>


 <body class="showad">
<?php require_once '../views/partials/navbar.php'; ?>
<!-- change this headers img need something that doesn't distract the user
from the ad info/photos that they came to see -->
<header class="blkwht">
    <div class="header-content">
        <div class="header-content-inner">
            <h1>The intersection where fashion meets passion</h1>
        </div>
    </div>
</header>
<!-- php foreach $ads as $ad, php each inside of the list item which will link to show
the specific ad the user clicked in ads.show.php -->
<h1>Detail</h1>
<hr>

    <?php foreach($showAds as $ad) { ?>
        <?php if($ad['id'] == $_GET['id']) { ?>
            <p class="ad-info"> <?= $ad['headline']; ?>
                <ul>
                    <li class="ad-info li"><?="Price: " . $ad['price']; ?></li>
                    <li class="ad-info li"><?="Category: " . $ad['category']; ?></li>
                    <li class="ad-info li"><?="Description: " . $ad['description']; ?></li>
                    <li class="ad-info li"><?="Contact Seller With: " . $ad['contact']; ?></li>
                </ul>
            </p>
        <?php } ?>
    <?php } ?>

<?php require_once '../views/partials/footer.php'; ?>
 </body>
 </html>

