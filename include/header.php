<?php
    session_start();

include 'backend/dbconnect.php';
    $sql="SELECT * FROM categories";
    $stmt=$pdo->prepare($sql);
    $stmt->execute();
    $categories=$stmt->fetchAll();

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>onlineshop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
	<script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#nav2").hide();
            $("#nav1").show();

            $("#search1").click(function(){
                $("#nav2").show();
                $("#nav1").hide();
            })
            $("#back").click(function(){
                $("#nav2").hide();
                $("#nav1").show();
            })
        })
    </script>
</head>
<body>
    <div class="container-float fixed-top" id="nav1">
        <nav class="navbar navbar-expand-lg py-3 menu">
          <a class="navbar-brand" href="#">Hein Store</a>
          <button class="navbar-toggler bg-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fas fa-sliders-h"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Categories
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
                            <?php 

                            foreach ($categories as $category) {
                                
                            ?>
                                <a class="dropdown-item" href="categories.php?id=<?=$category['id']?>"><?=$category['name']?></a>
                            <?php } ?>
                          
                        </div>
                      </li>
                    <li class="nav-item">
                        <a class="nav-link" href="product.php">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <?php 
                        if (isset($_SESSION['loginuser'])) {
                        
                    ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <?= $_SESSION['loginuser']['name']; ?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="#">Profile</a>
                          <a class="dropdown-item" href="backend/logout.php">Logout</a>
                          
                        </div>
                      </li>
                      <?php 
                        }else{
                      ?>
                    <li class="nav-item"><a href="backend/login.php" class="nav-link">Login</a></li>
                    <li class="nav-item"><a href="backend/register.php" class="nav-link">Register</a></li>
                <?php } ?>

                    <li class="nav-item">
                        <a href="checkout.php" class="nav-link" id="count">
                            <span class="p1 fa-stack has-badge" id="item_count">
                                <i class="p3 fa fa-shopping-cart fa-stack-1x xfa-inverse"></i>
                            </span>
                        
                        </a>
                    </li>

                    <li class="nav-item" id="search1">
                        <a class="nav-link" href="#"><i class="fas fa-search"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="container-float fixed-top" id="nav2">
        <nav class="navbar navbar-expand-lg py-3">
            <input type="hidden" name="sid" id="sid">
            <div class="img-overlay1"></div>
            <div class="container" id="psize">
                <div class="input-group col-md-2 col-sm-2">
                    <i class="fas fa-arrow-left fa-1x" id="back"></i>
                </div>
                <div class="input-group col-md-8 col-sm-4">
                    <input type="text" class="form-control" placeholder="Search" aria-label="Search Products"
                    aria-describedby="button-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fas fa-search"></i></button>
                    </div>
                </div>
                <div class="col-md-2">
                    
                </div>
            </div>
        </nav>
    </div>