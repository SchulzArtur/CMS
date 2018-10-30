<?php

$DB_HOST = 'localhost';
$DB_USER = 'root';
$DB_PASS = '';
$DB_NAME = 'cms';


$connect = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

if($connect) {
	echo "We are connected";
}else
($connect->connect_error){ 
			die('Connect Faild: ' . $connect->connect_error) 
		} 




?>