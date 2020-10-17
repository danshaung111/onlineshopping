<?php 

  include 'include/header.php';
  include 'backend/dbconnect.php';

$sql="SELECT items.*,brands.name as brand_name,subcategories.name as sub_name,categories.name as c_name FROM items INNER JOIN brands ON items.brand_id=brands.id INNER JOIN subcategories ON items.subcategory_id=subcategories.id INNER JOIN categories ON subcategories.category_id=categories.id ORDER BY items.id DESC LIMIT 8";


    $stmt=$pdo->prepare($sql);
    $stmt->execute();
    $items=$stmt->fetchAll();

    // var_dump($items);

?>

    <div class="container container-float container-carousel">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/buy.jpg" class="d-block w-100" alt="...">
                    <div class="img-overlay1"></div>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/cart1.jpg" class="d-block w-100" alt="...">
                    <div class="img-overlay"></div>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div class="container my-4 text-center txt">
        <p>New Arrival</p>
    </div>

    <div class="container">
        <div class="row">
            <?php 

                foreach ($items as $item) {
        
            ?>
            <div class="col-lg-3 my-2">
                <div class="card">
                  <img class="card-img-top" src="backend/<?= $item['photo'] ?>" alt="Card image cap" width="100%" height="180px">
                  <div class="overlay">
                  <button class="btn btn-warning btn-block border-radius view_detail" data-id="<?= $item['id'] ?>" data-name="<?= $item['name'] ?>" data-price="<?= $item['price'] ?>" data-discount="<?= $item['discount'] ?>" data-brand="<?= $item['brand_name'] ?>" data-subcategory="<?= $item['sub_name'] ?>" data-description="<?= $item['description'] ?>" data-photo="<?= $item['photo'] ?>">Quick View</button>
                  </div>
                  <div class="card-body">
                    <p class="card-text"><b>Category:</b><?= trim($item['c_name']) ?></p>
                    <p class="card-text"><b>Name: </b><?= $item['name'] ?></p>
                    <p class="card-text"><b>Price: </b>
                        <?php  
                            if (isset($item['discount'])) {
                                echo $item['discount']." MMK";
                                
                            ?>
                                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<del><?= $item['price']." MMK"; ?></del>
                            <?php }else{
                            echo $item['price']." MMK";
                                        }
                            ?> 
                    </p>
                    
                  </div>
                  <div class="container-fluid p-0 m-0">
                        <div class="row text-center p-0 m-0">
                            <div class="col-md-6 item-bg mt-1">
                                <a href="" class="text-decoration-none text-dark item-save">
                                    <i class="fas fa-heart fa-lg py-3"></i>
                                </a>
                            </div>
                            <div class="col-md-6 item-bg mt-1">
                                <a href="javascript:void(0)" class="text-decoration-none text-dark item-add addtocart" data-id="<?= $item['id'] ?>" data-name="<?= $item['name'] ?>" data-price="<?= $item['price'] ?>" data-discount="<?= $item['discount'] ?>">
                                    <i class="fas fa-cart-plus fa-lg py-3 item-add"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-5 my-5">
                <img src="images/sky.jpg" class="img-fluid">
            </div>
            <div class="col-lg-7 my-5">
                <h4>About Our Website</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
    </div>

<?php 

  include 'include/footer.php';

?>
    

    