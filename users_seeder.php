<?php 
// EXERCISE 9.1.3 NOT COMPLETE Retrieving Data, User Side
// EXERCISE 9.1.4 Prepared Statememts, Dynamic Queries and User Input
// EXERCISE 9.9 Adlister project 

require_once 'bootstrap.php';

$dbc->exec('TRUNCATE TABLE users');

$users = [];

$users = [
	['userName' => 'Mic',
	'password' => 'pass',
	'email' => 'Micky@gmail.com',
	'phone' => '2108541466',
	'preferContact' => 'call',
	'firstName' => 'Mic',
	'lastName' => 'Jagger',
	'zipCode' => '78212'
	],
	['userName' => 'Kermie',
	'password' => 'pass',
	'email' => 'paulasatx@gmail.com',
	'phone' => '2101111111',
	'preferContact' => 'email',
	'firstName' => 'Kermit',
	'lastName' => 'Frog',
	'zipCode' => '78201'
	],
	['userName' => 'Princess',
	'password' => 'pass',
	'email' => 'paulabox2@gmail.com',
	'phone' => '2107777777',
	'preferContact' => 'email',
	'firstName' => 'Leah',
	'lastName' => 'Skywalker',
	'zipCode' => '78209'
	],
	['userName'=> 'prez',
	'password' => 'pass',
	'email' => 'thebettertwin@gmail.com',
	'phone' => '2102102100',
	'preferContact' => 'text',
	'firstName' => 'Julian',
	'lastName' => 'Castro',
	'zipCode' => '78205'
	],
	['userName' => 'seedy',
	'password' => 'pass',
	'email' => 'apples@gmail.com',
	'phone' => '2109992100',
	'preferContact' => 'email',
	'firstName' => 'Johnny',
	'lastName' => 'Appleseed',
	'zipCode' => '78210'
	],
];
 
// with id auto-incrementing via function in migration file. 
$stmt = $dbc->prepare('INSERT INTO users (userName, password, email, phone, preferContact, firstName, lastName, zipCode) 
	VALUES (:userName, :password, :email, :phone, :preferContact, :firstName, :lastName, :zipCode)');


foreach ($users as $user) {
    $stmt->bindValue(':userName',         	$user['userName'],         PDO::PARAM_STR);
    $stmt->bindValue(':password',         	$user['password'],         PDO::PARAM_STR);
    $stmt->bindValue(':email',    			$user['email'],   			PDO::PARAM_STR);
    $stmt->bindValue(':phone',      		$user['phone'],      		PDO::PARAM_STR);
    $stmt->bindValue(':preferContact',		$user['preferContact'],		PDO::PARAM_STR);
    $stmt->bindValue(':firstName',          $user['firstName'],        PDO::PARAM_STR);
    $stmt->bindValue(':lastName', 			$user['lastName'], 			PDO::PARAM_STR);
    $stmt->bindValue(':zipCode',			$user['zipCode'],			PDO::PARAM_STR);
    

    $stmt->execute();
}
echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;

?>












