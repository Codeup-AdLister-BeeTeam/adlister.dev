<?php 


require '../bootstrap.php';



function pageController()
{       
    // Step One in controller, initialize empty array
    $adsForShow = ['showAds' => Ads::all()];
    
    return $adsForShow;   
}

extract(pageController());


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
<hr>
<div class="adsList">
<h1 class="ad-show">All Ads</h1>

    <p>
		<?php foreach ($showAds as $ad): ?>

			<span class="adsList"><a href="ads.show.php?id=<?=$ad['id']?>"</a><?= $ad['headline']; ?><br></span>
            
        <?php endforeach; ?> 

    </p>


<?php require_once '../views/partials/footer.php'; ?>
</div>
 </body>
 </html>

