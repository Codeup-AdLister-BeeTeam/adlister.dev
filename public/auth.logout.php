<?php 
require_once '../bootstrap.php';

    Auth::logout();
    header("Location:index.php");
    exit();
    

var_dump(session_id());

 ?>
 <html>
 <?php require_once '../views/partials/head.php'; ?>
 <body>
 <?php require_once '../views/partials/navbar.php'; ?>

 	<header class="lookbook">
        <div class="header-content">
            <div class="header-content-inner">
                <h1>The intersection where fashion meets passion</h1>
            </div>
        </div>
    </header>
    <h1></h1>
    <!-- header redirect back to main page  can I have a time delay before the redirect issues?-->
 <?php require_once '../views/partials/footer.php'; ?>

 </body>
 </html>