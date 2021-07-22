<?php
// Error Reporting Turn On
ini_set('error_reporting', E_ALL);

// Setting up the time zone
date_default_timezone_set('Asia/Kolkata');

// Host Name
$dbhost = 'e-commerce.cdr4a9axepic.us-east-1.rds.amazonaws.com';

// Database Name
$dbname = 'fashiony_ogs';

// Database Username
$dbuser = 'admin';

// Database Password
$dbpass = 'admin123';

// Defining base url
define("BASE_URL", "http://ecommerce-env.eba-jm3v2naw.us-east-1.elasticbeanstalk.com/");

// Getting Admin url
define("ADMIN_URL", BASE_URL . "admin" . "/");

try {
	$pdo = new PDO("mysql:host={$dbhost};dbname={$dbname}", $dbuser, $dbpass);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch( PDOException $exception ) {
	echo "Connection error :" . $exception->getMessage();
}