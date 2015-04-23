<?php 


require '../bootstrap.php';


$showAds = Ads::all();


/*
 *The pageController function handles all processing for this page.
 *@return array an associative array of data used in rendering the HTML view.
 */
// THAT CONTROLLER IS HOW WE LISTEN AND REACT TO THINGS, CLICKS ON ANCHOR TAGS BELOW
function pageController()
{       

	// Initialize an empty data array.
	$ads = [];

	// Add data to be used in the HTML view.
	// $data['message'] = 'Hello Keyasha!';

	// if ($__GET['show'] == 'clicked')) {
	

	// }


	// Return the completed data array.
	return $ads;

}

extract(pageController());

$ads = Ads::all();

?>



 <html>
<?php require_once '../views/partials/head.php'; ?> 
 	<title>Ads Index</title>


 <body>
<?php require_once '../views/partials/navbar.php'; ?>
<header>
    <div class="header-content">
        <div class="header-content-inner">
            <h1>The intersection where fashion meets passion</h1>
        </div>
    </div>
</header>

<h1 class="ad-show">All Ad's</h1>
<hr>
    <ul>
		<?php foreach ($ads as $ad): ?>


			<li><a href="ads.show.php?show=clicked=<?php echo $ad['id']?>" </a><?= $ad['headline']; ?></li>
    
        <?php endforeach; ?> 

      <!--   <li><a href="ads.show.php">1 Relic Silver Ball Grommet Belt</a></li>
        <li class="ad-show"><a id="ads-li" href="ads.show.php">2 Fun Shoe Ornaments</a></li>
        <li class="ad-show"><a href="ads.show.php">3 Diamond Ring, 14 carat gold</a></li>
        <li class="ad-show"><a href="ads.show.php">4 Heart and charm stones necklace</a></li> 
        <li class="ad-show"><a href="ads.show.php">5 Fun shoes for a little girl</a></li> 
        <li class="ad-show"><a href="ads.show.php">6 Cute fun party or play dress</a></li> 
        <li class="ad-show"><a href="ads.show.php">7 LA Idol USA jeans, good condition</a></li> 
        <li class="ad-show"><a href="ads.show.php">8 Vera Bradley purse, blue flower design</a></li> --> 
         
        



    </ul>



<?php require_once '../views/partials/footer.php'; ?>
 </body>
 </html>

