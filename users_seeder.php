<?php 
// EXERCISE 9.1.3 NOT COMPLETE Retrieving Data, User Side
// EXERCISE 9.1.4 Prepared Statememts, Dynamic Queries and User Input
// EXERCISE 9.9 Adlister project 

require 'db_connect.php'; 

// $dbc->exec('DROP TABLE IF EXISTS users');

$users = [];

$users = [
	['firstName' => 'Mic',
	'lastName' => 'Jagger',
	'email' => 'Micky@gmail.com',
	'phone' => '2108541466',
	'houseNum' => '123',
	'street' => 'Monticello',
	'city' => 'San Antonio',
	'state' => 'TX',
	'zipCode' => '78212',
	'preferContact' => 'call'
	],
	['firstName' => 'Kermit',
	'lastName' => 'Frog',
	'email' => 'paulasatx@gmail.com',
	'phone' => '2101111111',
	'houseNum' => '564',
	'street' => 'Lilly Pad',
	'apartment' => '4',
	'city' => 'San Antonio',
	'state' => 'TX',
	'zipCode' => '78201',
	'preferContact' => 'email'
	],
	['firstName' => 'Leah',
	'lastName' => 'Skywalker',
	'email' => 'paulabox2@gmail.com',
	'phone' => '2107777777',
	'houseNum' => '7',
	'street' => 'Galaxy',
	'city' => 'San Antonio',
	'state' => 'TX',
	'zipCode' => '78209',
	'preferContact' => 'email'
	],
	['firstName' => 'Julian',
	'lastName' => 'Castro',
	'email' => 'thebettertwin@gmail.com',
	'phone' => '2102102100',
	'houseNum' => '1600',
	'street' => 'Pennsylvania Avenue',
	'city' => 'San Antonio',
	'state' => 'TX',
	'zipCode' => '78205',
	'preferContact' => 'text'
	],
	['firstName' => 'Johnny',
	'lastName' => 'Appleseed',
	'email' => 'apples@gmail.com',
	'phone' => '2109992100',
	'houseNum' => '1',
	'street' => 'Apple Avenue',
	'city' => 'San Antonio',
	'state' => 'TX',
	'zipCode' => '78210',
	'preferContact' => 'email'
	],
];
 
// with id auto-incrementing via function in migration file. 
$stmt = $dbc->prepare('INSERT INTO users (firstName, lastName, 
	email, phone, houseNum, street, city, state, zipCode, preferContact) 
	VALUES (:firstName, :lastName, :email, :phone, :houseNum, 
		:street, :city, :state, :zipCode, :preferContact)');


foreach ($users as $user) {
    $stmt->bindValue(':userName',         	$user['userName'],         PDO::PARAM_STR);
    $stmt->bindValue(':firstName',          $user['firstName'],        PDO::PARAM_STR);
    $stmt->bindValue(':lastName', 			$user['lastName'], 			PDO::PARAM_STR);
    $stmt->bindValue(':email',    			$user['email'],   			PDO::PARAM_STR);
    $stmt->bindValue(':phone',      		$user['phone'],      		PDO::PARAM_STR);
    $stmt->bindValue(':houseNum',			$user['houseNum'],			PDO::PARAM_STR);
    $stmt->bindValue(':street',				$user['street'],			PDO::PARAM_STR);
    $stmt->bindValue(':city',				$user['city'],				PDO::PARAM_STR);
    $stmt->bindValue(':state', 				$user['state'],				PDO::PARAM_STR);
    $stmt->bindValue(':zipCode',			$user['zipCode'],			PDO::PARAM_STR);
    $stmt->bindValue(':preferContact',		$user['preferContact'],		PDO::PARAM_STR);

    $stmt->execute();
}
echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;

?>












