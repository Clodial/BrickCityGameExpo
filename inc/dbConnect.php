<?php

//Database Connection info
require_once('inc/dbInclude.php');

$db = NULL;

try{

	$db = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	$main = new main($db);

}catch( PDOException $e){

	echo $e->getMessage();

}

?>