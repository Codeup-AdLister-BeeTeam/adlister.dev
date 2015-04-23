<?php 

require_once '../bootstrap.php';

if (empty($_POST)) {
	var_dump("I am empty");
} 
else if (!empty($_POST)) {

	$query = 'INSERT INTO ads (headline, price, contact, category, description) 
			VALUES (:headline, :price, :contact, :category, :description)';
	
	$stmt = $dbc->prepare($query);
	$stmt->bindValue(':headline', 	$_POST['headline'], 	PDO::PARAM_STR);
	$stmt->bindValue(':price', 		$_POST['price'], 		PDO::PARAM_STR);
	$stmt->bindValue(':contact', 	$_POST['contact'], 		PDO::PARAM_STR);
	$stmt->bindValue(':category', $_POST['category'], 		PDO::PARAM_STR);
	$stmt->bindValue(':description', $_POST['description'], PDO::PARAM_STR);
	
	$stmt->execute(); 

	echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;
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
            <hr>
            <h2>Create Your Advertisement</h2>
        </div>
    </div>
</header>
	 <h1>Create Your Ad</h1>
	 <div>

		<form method="POST" action="ads.create.php">
			<fieldset>
				<legend>Your Item</legend>	
				Headline of Ad: <input type="text" name="headline"><br>
				Price: <input type="text" name="price"><br>
				Description: <input type="text" name="description">
			</fieldset>

			<!-- <input id="location" 	placeholder="Enter location, i.e. Stone Oak, I-10 and Wurzbach"> -->

			<fieldset>
				<legend>Item Categories</legend>
				Women's Clothing <input type="checkbox" class="tags" name="category"><br>
				Women's Shoes <input 	type="checkbox" class="tags" name="category"><br>
				Men's Clothing <input 	type="checkbox" class="tags" name="category"><br>
				Men's Shoes <input 		type="checkbox" class="tags" name="category"><br>
				Jewelry <input 			type="checkbox" class="tags" name="category"><br>
				Accessories <input 		type="checkbox" class="tags" name="category"><br>
			</fieldset>
			<fieldset>
				<legend>Preferred Contact Method</legend>
				Call <input type="checkbox"  class="tags" name="contact"><br>
				Text <input type="checkbox"  class="tags" name="contact"><br>
			    Email <input type="checkbox" class="tags" name="contact"><br>
			</fieldset>
			<button type="submit">Submit Ad</button>
		</form>
	</div>
 </body>
 </html>

