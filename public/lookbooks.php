<?php
require_once '../bootstrap.php';


?>

<!DOCTYPE html>
<html>

<?php require_once '../views/partials/head.php'; ?>

<body class="page-look">

<?php require_once '../views/partials/navbar.php'; ?>

<header class="lookbook">
    <div class="header-content">
        <div class="header-content-inner">
            <h1>The intersection where fashion meets passion</h1>
            <hr>
            <h2>::LOOKBOOKS::</h2>
        </div>
    </div>
</header>
    
   
<div class="container">

        <div class="row">

            <div class="col-lg-12">
                <h1 class="page-header">Current Trends</h1>
            </div>

            <div class="col-lg-2 col-md-4 col-xs-6 thumb">
                <a class="thumbnail">
                    <img class="img-responsive" src="/img/fashlady1.jpg" alt="">
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-xs-6 thumb">
                <a class="thumbnail">
                    <img class="img-responsive" src="/img/mansuit1.png" alt="">
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-xs-6 thumb">
                <a class="thumbnail">
                    <img class="img-responsive" src="/img/shades.jpg" alt="">
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-xs-6 thumb">
                <a class="thumbnail">
                    <img class="img-responsive" src="/img/vintagetees.jpg" alt="">
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-xs-6 thumb">
                <a class="thumbnail">
                    <img class="img-responsive" src="/img/mansuit2.jpg" alt="">
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-xs-6 thumb">
                <a class="thumbnail">
                    <img class="img-responsive" src="/img/accessory1.jpg" alt="">
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-xs-6 thumb">
                <a class="thumbnail">
                    <img class="img-responsive" src="/img/blues.jpg" alt="">
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-xs-6 thumb">
                <a class="thumbnail">
                    <img class="img-responsive" src="/img/girlbow.jpg" alt="">
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-xs-6 thumb">
                <a class="thumbnail">
                    <img class="img-responsive" src="/img/mansuit3.jpg" alt="">
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-xs-6 thumb">
                <a class="thumbnail">
                    <img class="img-responsive" src="/img/burberry.jpg" alt="">
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-xs-6 thumb">
                <a class="thumbnail">
                    <img class="img-responsive" src="/img/grafitti.jpg" alt="">
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-xs-6 thumb">
                <a class="thumbnail">
                    <img class="img-responsive" src="/img/versace.jpeg" alt="">
                </a>
            </div>
        </div>

    <h1>Other Lookbooks</h1>
    
    <section class="no-padding" id="portfolio">
        <div class="container-fluid">
            <div class="row no-gutter">
                <div class="col-md-6">
                    <a href="#" class="portfolio-box">
                        <img src="/img/ladyfall.png" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Lookbook
                                </div>
                                <div class="project-name">
                                    Fall 2014
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="#" class="portfolio-box">
                        <img src="/img/manwinter.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Lookbook
                                </div>
                                <div class="project-name">
                                    Winter 2014
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="#" class="portfolio-box">
                        <img src="/img/spring.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Lookbook
                                </div>
                                <div class="project-name">
                                    Spring <?php echo date('Y'); ?>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="#" class="portfolio-box">
                        <img src="/img/summerlrg.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                   Lookbook
                                </div>
                                <div class="project-name">
                                    Summer <?php echo date('Y'); ?>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>
    <?php require_once '../views/partials/footer.php'; ?>
</body>
</html>