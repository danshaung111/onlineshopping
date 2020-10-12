<?php  

	include 'dbconnect.php';

	$id=$_GET['id'];

	$sql="DELETE FROM subcategories WHERE subcategories.id=:subcategorie_id";
	$stmt=$pdo->prepare($sql);
	$stmt->bindParam(':subcategorie_id',$id);
	$stmt->execute();


	if ($stmt->rowCount()) {
		header("location:subcategories_list.php");
	}else{
		echo "Error";
	}

?>