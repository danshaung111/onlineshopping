<?php
	include 'dbconnect.php';

	$name=$_POST['name'];
	$photo=$_FILES['logo'];;

	$basepath = "img/items/";
	$fullpath = $basepath.$photo['logo'];
	move_uploaded_file($photo['tmp_name'], $fullpath);

	// echo "$name and $price and $discount and $brand and $subcategory and $description and $codeno <br>";
	// print_r($photo);

	$sql = "INSERT INTO categories (name,logo)VALUES(:categories_name,:categories_logo)";
	$stmt = $pdo->prepare($sql);
	$stmt->bindParam(':categories_name',$name);
	$stmt->bindParam(':categories_logo',$fullpath);

	$stmt->execute();

	if($stmt->rowCount()){
		header("location:categories_list.php");
	}else{
		echo "error";
	}

?>