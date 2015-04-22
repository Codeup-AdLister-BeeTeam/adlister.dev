<?php 



// Require or include statements are allowed here.
// All other code goes in the pageController function.

/*
 *The pageController function handles all processing for this page.
 *@return array an associative array of data used in rendering the HTML view.
 */
function pageController()
{
    // Initialize an empty data array.
    

    // Add data to be used in the HTML view.
    $data['message'] = 'Hello Keyasha!';

    // Return the completed data array.
    return $data;

}
// Call the pageController function 
// and extract all the returned array as local variables.

extract(pageController());

// Only use echo, conditionals and loops anywhere within the HTML.


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
<h1>Clicked Ad Info</h1>
<hr>
    <p class="ad-info">Relic Silver Ball Grommet Belt
        <ul>
            <li class="ad-info li">Price:      $5.00 </li>
            <li class="ad-info li">Category:   Accessories</li>
            <li class="ad-info li">Description: Synthetic leather with silver beading and nicely fashioned grommets.</li>
            <li class="ad-info li">Contact Seller With: Phone Call</li>


        </ul>
    </p>

<?php require_once '../views/partials/footer.php'; ?>
 </body>
 </html>

