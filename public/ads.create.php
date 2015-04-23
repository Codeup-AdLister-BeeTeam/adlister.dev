<?php 

require_once '../bootstrap.php';

if (empty($_POST)) {
	var_dump("I am empty");
} 
else if (!empty($_POST)) {

	$query = 'INSERT INTO ads (headline, price, description) 
			VALUES (:headline, :price, :description)';
	
	$stmt = $dbc->prepare($query);
	$stmt->bindValue(':headline', 	$_POST['headline'], 	PDO::PARAM_STR);
	$stmt->bindValue(':price', 		$_POST['price'], 		PDO::PARAM_STR);
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
				Headline of Ad: <input 	type="text" 	name="headline"><br>
				Price: <input 			type="text" 	name="price"><br>
				Description: <input 	type="text" 	name="description">
			</fieldset>

			<!-- <input id="location" 	placeholder="Enter location, i.e. Stone Oak, I-10 and Wurzbach"> -->

			<!-- <fieldset>
				<legend>Item Categories</legend>
				Women's Clothing <input type="radio" 	class="tags" name="womensClothing"><br>
				Women's Shoes <input 	type="radio" 	class="tags" name="womensShoes"><br>
				Men's Clothing <input 	type="radio" 	class="tags" name="mensClothing"><br>
				Men's Shoes <input 		type="radio" 	class="tags" name="mensShoes"><br>
				Jewelry <input 			type="radio"  	class="tags" name="jewelry"><br>
				Accessories <input 		type="radio" 	class="tags" name="accessories"><br>
			</fieldset> -->
			<!-- <fieldset>
				<legend>Preferred Contact Method</legend>
				Call <input type="radio"  class="tags" name="call" placeholder="type call"><br>
				Text <input type="radio"  class="tags" name="texting" placeholder="type text"><br>
			    Email <input type="radio" class="tags" name="email" placeholder="type email"><br>
			</fieldset> -->
			<button type="submit">Submit Ad</button>
		</form>
	</div>
 </body>
 </html>

