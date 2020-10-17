<?php
	
	include 'dbconnect.php';

	$id=$_POST['id'];
	$name=$_POST['name'];
	$fullpath=$_POST['oldlogo'];
	$photo=$_FILES['logo'];
	

	if ($photo['size']>0) {
		$basepath="img/items/";
		$fullpath=$basepath.$photo['name'];
		move_uploaded_file($photo['tmp_name'], $fullpath);
	}

	$sql="UPDATE categories SET name=:categorie_name, logo=:categorie_logo WHERE categories.id=:categorie_id";
	$stmt=$pdo->prepare($sql);
	$stmt->bindParam(':categorie_id',$id);
	$stmt->bindParam(':categorie_name',$name);
	$stmt->bindParam(':categorie_logo',$fullpath);
	$stmt->execute();

	header("location:categories_list.php");

?>