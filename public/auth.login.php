<?php 
require_once '../bootstrap.php';



if (Auth::check()) 
    {
    header("Location:users.show.php");
    exit();
    } 
if(!empty($_POST))
{

    $username = Input::has('username') ? Input::get('username') : '';
    $password = Input::has('password') ? Input::get('password') : '';

    if ($username == '' && $password == '') {
        echo "Please enter your username and password";

    } else if(Auth::attempt($username, $password)) {
        header("Location:users.show.php");
        exit();
    }else {
        echo "Sorry, login failed.";
    }

}

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

	<h1>Welcome To Fashion A[d]venue!</h1>
<!-- change forms to bootstrap forms see ads.create2.php -->
<hr>
	<div class="container">
      <h1>Sign In</h1>
      <form method="POST" action="auth.login.php" class="form-horizontal">
	    <div class="form-group">
	      <label for="inputUsername" class="col-sm-2 control-label">Username</label>
	      <div class="col-sm-10">
	        <input type="text" name="username"class="form-control" id="inputUsername" placeholder="Enter Username">
	      </div>
	    </div>
	    <div class="form-group">
	      <label for="inputPassword" class="col-sm-2 control-label">Password</label>
	      <div class="col-sm-10">
	        <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Enter Password">
	      </div>
	    </div>
	    <div class="form-group">
	      <div class="col-sm-10">
	        <button type="submit" class="btn btn-default form-btn">Sign In</button>
	      </div>
    </div>
	   </form>
	</div>
    <hr>
    <aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <h2>No Account? Sign Up And Become A Design Partner Today!</h2>
                <a href="users.create.php" class="btn btn-default btn-xl wow tada">Sign Up</a>
            </div>
        </div>
    </aside>

<?php require_once '../views/partials/footer.php'; ?>
</body>
</html>

