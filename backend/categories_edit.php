<?php
session_start();
if (isset($_SESSION['loginuser']) && $_SESSION['loginuser']['role_name']=="Admin" ) {
	
	include 'include/header.php';
	include 'dbconnect.php';
	$id=$_GET['id'];
	// echo $id;die();
	$sql="SELECT * FROM categories WHERE categories.id=:categorie_id";
	$stmt=$pdo->prepare($sql);
	$stmt->bindParam(':categorie_id',$id);
	$stmt->execute();
	$categorie=$stmt->fetch(PDO::FETCH_ASSOC);

	// var_dump($categorie);
?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
	<h1 class="h3 mb-0 text-gray-800">Categories Create</h1>
	<a href="categories_list.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-backward fa-sm text-white-50"></i> Go Back</a>
</div>

<div class="row">
	<div class="offset-md-2 col-md-8">
		<form action="updatecategories.php" method="POST" enctype="multipart/form-data">
			<input type="hidden" name="id" value="<?php echo $categorie['id']; ?>">

			<div class="form-group">
				<label for="name">Categories Name</label>
				<input type="text" name="name" id="name" class="form-control" value="<?php echo $categorie['name']; ?>">
			</div>
			<div class="form-group">
				<label for="logo">Categories Logo</label>
				<input type="file" name="logo" id="logo" class="form-control-file" accept="image/*">
				<input type="hidden" name="oldlogo" value="<?php echo $categorie['logo']; ?>">
				<img src="<?php echo $categorie['logo']; ?>" width="150" height="150">
			</div>
			<input type="submit" class="btn btn-primary float-right" value="Update">
		</form>
	</div>
</div>

<?php
	
	include 'include/footer.php';
}else{
  header("location:../onlineshop/index.php");
}
?>