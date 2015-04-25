<?php 
// EXERCISE 9.1.3 NOT COMPLETE Retrieving Data, User Side
// EXERCISE 9.1.4 Prepared Statememts, Dynamic Queries and User Input
// EXERCISE 9.9

require 'db_connect.php'; 

$dbc->exec('TRUNCATE TABLE ads');

$ads = [
	[
		'headline' => 'Relic Silver Ball Grommet Belt',
		'price' => '5.00',
		
		'category' => 'accessories',
		'description'  => 'Synthetic leather with silver beading and nicely fashioned grommets.',
		'contact' => 'call'
	],
	[
		'headline' => 'Fun Shoe Ornaments',
		'price' => '10.00',
		
		'category' => 'shoes',
		'description' => '3/4 inches long, various ornaments, total of 20 pieces',
		'contact' => 'email'
	],
	[
		'headline' => 'Diamond Ring, 14 carat gold',
		'price' => '300.00',
		
		'category' => 'jewelry',
		'description' => 'Estate sale ring, appraised at $400 by Americus Diamond',
		'contact' => 'text'
	],
	[
		'headline' => 'Heart and charm stones necklace',
		'price' => '10.00',
		
		'category' => 'jewelry',
		'description' => 'Never worn. Sterling silver with curbic zirconia',
		'contact' => 'text'
	],
	[
		'headline' => 'Fun shoes for a little girl',
		'price' => '10.00',
		
		'category' => 'shoes',
		'description' => 'Crafted by KB Designs, sure to please',
		'contact' => 'text'
	],
	[
		'headline' => 'Cute fun party or play dress.',
		'price' => '20.00',
		
		'category' => 'clothing',
		'description' => 'Cute party dress or make believe dress! Top is cotton.',
		'contact' => 'text'
	],
	[
		'headline' => 'LA Idol USA jeans, good condition',
		'price' => '18.00',
		
		'category' => 'clothing',
		'description' => 'Great jeans for a night out',
		'contact' => 'text'
	],
	[
		'headline' => 'Vera Bradley purse, blue flower design',
		'price' => '20.00',
		
		'category' => 'accessories',
		'description' => 'Shoulder bag, very nice condition',
		'contact' => 'text'	
	]
];

$stmt = $dbc->prepare('INSERT INTO ads (headline, price, size, category, description, contact) 
	VALUES (:headline, :price, :size, :category, :description, :contact)');


foreach ($ads as $ad) {
    $stmt->bindValue(':headline',       $ad['headline'],    PDO::PARAM_STR);
    $stmt->bindValue(':price',          $ad['price'],       PDO::PARAM_STR);
    // $stmt->bindValue(':size', 			$ad['size'],		PDO::PARAM_STR);
    $stmt->bindValue(':category',		$ad['category'],    PDO::PARAM_STR);
    $stmt->bindValue(':description',	$ad['description'], PDO::PARAM_STR);
    $stmt->bindValue(':contact',		$ad['contact'],		PDO::PARAM_STR);

    $stmt->execute();
}
echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;


?>












