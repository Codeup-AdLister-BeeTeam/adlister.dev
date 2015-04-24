<?php 
// exercise 9.9 Adlister project

require 'db_connect.php';

$dbc->exec('DROP TABLE IF EXISTS ads');

$query = 'CREATE TABLE IF NOT EXISTS ads (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    headline VARCHAR(100) NOT NULL,
    price VARCHAR(10) NOT NULL,
    size VARCHAR(8) NOT NULL,
    contact VARCHAR(6) NOT NULL,
    category VARCHAR(20) NOT NULL,
    description VARCHAR(100) NOT NULL,
    PRIMARY KEY (id)
)';

$dbc->exec($query);

