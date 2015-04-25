<?php 
// exercise 9.9 Adlister project

require_once 'bootstrap.php';

                    
$dbc->exec('DROP TABLE IF EXISTS users');
// var_dump($dbc);

$query = 'CREATE TABLE IF NOT EXISTS users (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    userName VARCHAR(60) NOT NULL,
    password VARCHAR (60) NOT NULL,
    email VARCHAR(60) NULL,
    phone VARCHAR(10) NULL,
    preferContact VARCHAR(6) NOT NULL,
    firstName VARCHAR(60) NOT NULL,
    lastName VARCHAR(60) NOT NULL,
    zipCode VARCHAR(5) NOT NULL,
    PRIMARY KEY (id)
)';

$dbc->exec($query);