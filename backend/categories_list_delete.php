<?php  

	include 'dbconnect.php';

	$id=$_GET['id'];

	$sql="DELETE FROM categories WHERE categories.id=:categorie_id";
	$stmt=$pdo->prepare($sql);
	$stmt->bindParam(':categorie_id',$id);
	$stmt->execute();


	if ($stmt->rowCount()) {
		header("location:categories_list.php");
	}else{
		echo "Error";
	}

?>