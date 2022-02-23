<?php

$server_name = "localhost";
$user_name = "root";
$password = "";
$db_name = "apartments_simic";

try{
	$pdo = new PDO("mysql:host=${server_name};dbname=${db_name};charset=utf8",$user_name,$password);
	
} catch(PDOException $e){
	echo "Connection failed " . $e->getMessage(); // DELETE MESSAGE
}
