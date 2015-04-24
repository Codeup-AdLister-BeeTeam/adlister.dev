<?php 

require_once '../bootstrap.php';

if (empty($_POST)) {
  var_dump("I am empty");
} 
else if (!empty($_POST)) {

  $query = 'INSERT INTO users (userName, password, email, phone, preferContact, firstName, lastName, zipCode) 
      VALUES (:userName, :password, :email, :phone, :preferContact, :firstName, :lastName, :zipCode)';
  
  $stmt = $dbc->prepare($query);
  $stmt->bindValue(':userName',       $_POST['userName'], PDO::PARAM_STR);
  $stmt->bindValue(':password',       $_POST['password'], PDO::PARAM_STR);
  $stmt->bindValue(':email',          $_POST['email'],    PDO::PARAM_STR);
  $stmt->bindValue(':phone',          $_POST['phone'],    PDO::PARAM_STR);
  $stmt->bindValue(':preferContact',  $_POST['preferContact'], PDO::PARAM_STR);
  $stmt->bindValue(':firstName',      $_POST['firstName'], PDO::PARAM_STR);
  $stmt->bindValue(':lastName',       $_POST['lastName'], PDO::PARAM_STR);
  $stmt->bindValue(':zipCode',        $_POST['zipCode'],  PDO::PARAM_STR);

  
  $stmt->execute(); 

  echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;
}


?>
<!-- This is the user signup page -->
<html>
<?php require_once '../views/partials/head.php'; ?>
<body>
<?php require_once '../views/partials/navbar.php'; ?>
<header class="blkwht">
    <div class="header-content">
        <div class="header-content-inner">
            <h1>The intersection where fashion meets passion</h1>
        </div>
    </div>
</header>


<h1 class="userCreate">Register Your Account</h1>
	<form>
        <div class="userCreate form-group">
            <input type="text" name="userName" class="form-control" id="userName" placeholder="userName">
        </div>
        <div class="userCreate form-group">
            <label for="password">Password</label>
            <input type="text" name="password" class="form-control" id="password" placeholder="Password">
        </div>
        <div class="userCreate form-group">
            <label for="email">Email</label>
            <input type="text" name="email" class="form-control" id="email" placeholder="Email">
        </div>
        <div class="userCreate form-group">
            <label for="phone">Phone</label>
            <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone">
        </div>
        <div class="userCreate form-group">
            <label for="firstName">First Name</label>
            <input type="text" name="firstName" class="form-control" id="firstName" placeholder="Phone">
        </div>
        <div class="userCreate form-group">
            <label for="lastName">Last Name</label>
            <input type="text" name="lastName" class="form-control" id="lastName" placeholder="Last Name">
        </div>
        <div class="userCreate form-group">
            <label for="zipCode">Zip Code</label>
            <input type="text" name="zipCode" class="form-control" id="zipCode" placeholder="Zip Code">
        </div>

                            <div class="userCreate form-group">
                                <label for="image">File input</label>
                                <input type="file" name="image" id="image">
                              <p class="help-block">Example block-level help text here.</p>
                            </div>
                    <div class="userCreate checkbox">
                        <label for="remember id'"remember>Remember Me</label>
                        <input type="checkbox" name="remember">
                    </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>

</body>
</html>


 