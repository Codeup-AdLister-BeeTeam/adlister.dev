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

<h1 class="ad-show">All Ad's</h1>
<hr>
    <ul>
		<?php foreach ($showAds as $ad): ?>

			<li><a href="ads.show.php?id=<?=$ad['id']?>"</a><?= $ad['headline']; ?></li>
            
        <?php endforeach; ?> 

    </ul>


<?php require_once '../views/partials/footer.php'; ?>
 </body>
 </html>

