<?php
	include 'dbconnect.php';

	$name=$_POST['name'];
	$category=$_POST['category'];;

	// $basepath = "img/items/";
	// $fullpath = $basepath.$photo['logo'];
	// move_uploaded_file($photo['tmp_name'], $fullpath);

	// echo "$name and $price and $discount and $brand and $subcategory and $description and $codeno <br>";
	// print_r($photo);

	$sql = "INSERT INTO subcategories (name,category_id)VALUES(:subcategories_name,:category_id)";
	$stmt = $pdo->prepare($sql);
	$stmt->bindParam(':subcategories_name',$name);
	$stmt->bindParam(':category_id',$category);

	$stmt->execute();

	if($stmt->rowCount()){
		header("location:subcategories_list.php");
	}else{
		echo "error";
	}

?>