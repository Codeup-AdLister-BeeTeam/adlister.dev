<?php 
require_once '../bootstrap.php';

// switch ($_SERVER['REQUEST_URI']) {
//     case '/ads':
//         include 'ads/index.php';
//         break;
//     case '/ads/show':
//         include 'ads/show.php';
//         break;
//     default:
//         include 'home.php';
//         break;
// }

 ?>

<!DOCTYPE html>
<html lang="en">

<?php require_once '../views/partials/head.php'; ?>

<body id="page-top">

    <?php require_once '../views/partials/navbar.php'; ?>

    <?php require_once '../views/partials/header.php'; ?>

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">We've got what you need!</h2>
                    <hr class="light">
                    <p class="text-faded">Looking for that hard to find vintage blouse or killer date night outfit? Have you created a beautiful accessory that's seeking a long term relationship with the perfetct outfit? Awesome, Stroll on over to Fashion A[d]Venue! As exclusive, eclectic and awesome as a trip down the runway, without the trip!</p>
                    <a href="ads.index.php" class="btn btn-default btn-xl">Get Started!</a>
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Popular Categories</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-diamond wow bounceIn text-primary"></i>
                        <h3>Jewelry</h3>
                        <p class="text-muted">Beautiful and creative pieces to complement your wardrobe stylishly.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-magic wow bounceIn text-primary" data-wow-delay=".1s"></i>
                        <h3>Accessories</h3>
                        <p class="text-muted">The perfect handbag or the belt that makes your ensemble magical, is waiting for you!</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-camera-retro wow bounceIn text-primary" data-wow-delay=".2s"></i>
                        <h3>Clothing</h3>
                        <p class="text-muted">Strut your stuff, dress to kill and always look camera ready..set..go!</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-heart wow bounceIn text-primary" data-wow-delay=".3s"></i>
                        <h3>Made with Love</h3>
                        <p class="text-muted">Vintage finds, awesome creations and wicked outfits created or selected with you in mind! </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="no-padding" id="portfolio">
        <div class="container-fluid">
            <div class="row no-gutter">
                <div class="col-lg-4 col-sm-6">
                    <a href="ads.index.php" class="portfolio-box">
                        <img src="/img/womensclothes.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Women's Clothing
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Need to replace photo for men's clothes site went down -->
                <div class="col-lg-4 col-sm-6">
                    <a href="ads.index.php" class="portfolio-box">
                        <img src="/img/mensclothes.jpeg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Men's Clothing
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="ads.index.php" class="portfolio-box">
                        <img src="/img/fashadvjewelry.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Jewelry
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="ads.index.php" class="portfolio-box">
                        <img src="/img/mensshoes.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Men's Shoes
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="ads.index.php" class="portfolio-box">
                        <img src="/img/bag.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Accessories
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="ads.index.php" class="portfolio-box">
                        <img src="/img/womensshoes.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Women's Shoes
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <h2>Become a design partner and sign up for an account now!</h2>
                <a href="#" class="btn btn-default btn-xl wow tada">Create Account</a>
            </div>
        </div>
    </aside>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Connect With Us!</h2>
                    <hr class="primary">
                    <p>Ready to share your amazing fashion sense with the world? How about discovering the next indie designer's cool fashions, or just ready to create awesome things for others? That's awesome, stroll down the A[d]venue and share your Passion for Fashion!</p>
                </div>

                <div class="col-lg-4 text-center">
                    <i class="fa fa-facebook-square fa-4x wow bounceIn"></i>
                    <p><a href ="facebook.com">Find Us On Facebook</a></p>
                </div>
                <div class="col-lg-4 text-center" "instagram">
                    <i class="fa fa-instagram fa-4x wow bounceIn"></i>
                    <p><a href="instagram.com">Find Us On Instagram</a></p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-twitter-square fa-4x wow bounceIn" "twitter" data-wow-delay=".1s"></i>
                    <p><a href="twitter.com">Find Us On Twitter</a></p>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/creative.js"></script>

    <?php require '../views/partials/footer.php'; ?>

</body>

</html>