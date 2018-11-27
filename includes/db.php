<?php ob_start(); ?>

<?php

// $DB_HOST = 'localhost';
// $DB_USER = 'root';
// $DB_PASS = '';
// $DB_NAME = 'cms';

$DB_HOST = 'sql.arturek666.nazwa.pl';
$DB_USER = 'arturek666_cms';
$DB_PASS = 'Arturek666';
$DB_NAME = 'arturek666_cms';

$connect = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

if($connect) {
}else
($connect->connect_error){ 
			die('Connect Faild: ' . $connect->connect_error) 
		} 

?>