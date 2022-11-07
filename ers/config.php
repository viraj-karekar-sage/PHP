<?php
session_start();
include_once('includes/Database.php');
define('DB_NAME', 'ERS');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');
define('HOME_URL','http://localhost/ers');

$dsn	= 	"mysql:dbname=".DB_NAME.";host=".DB_HOST."";
$pdo	=	"";
try {
	$pdo	=	new PDO($dsn, DB_USER, DB_PASSWORD);
}catch (PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}
$db 	=	new Database($pdo);
?>