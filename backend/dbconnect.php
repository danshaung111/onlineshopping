<?php

	$servername = "localhost";
	$dbname = "onlineshop";
	$dbuser = "root";
	$dbpassword = "";

	$dsn = "mysql:host=$servername;dbname=$dbname";
	$pdo = new PDO($dsn,$dbuser,$dbpassword);

	try{
		$conn = $pdo;
		$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		// echo "Connection Sucess";
	}catch(PDOException $e){
		echo "Connection fail:".$e->getMessage();
	}

?>