<?php
require '../src/connec.php';
$pdo = new PDO(DSN, USER, PASS);
$query = "SELECT * FROM products";
$statement = $pdo->query($query);
$products = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($products as $product){ ?>
        <div class="col-lg-4 card" style="">
            <img src="<?php echo $product['img'] ?>" class="card-img-top" alt="<?= $product['title']?>">
            <div class="card-body">
                <h5 class="card-title"><?= $product['title'] ?></h5>
                <p class="card-text"><?php echo$product['price'] ?><i class="fas fa-euro-sign"></i></p>
                <a href="#" class="btn btn-primary"><i class="fas fa-cart-plus"></i>  Add to cart</a>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#id<?= $product['id']?>"><i class="fas fa-info"></i>
                </button>
            </div>
        </div>


    <div class="modal fade" id="id<?= $product['id']?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header justify-content-between">
                    <h5 class="modal-title"><?php echo $product['title'] ?></h5>
                    <p class="card-text"><?php echo $product['price'] ?><i class="fas fa-euro-sign"></i></p>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body row">
                    <div class="card-modal col-12 col-lg-6 justify-content-center">
                        <img src="<?php echo $product['img'] ?>" class="modal-img" alt="raspberry pi" >
                        <div class="card-body ">
                            <h5 class="card-title-features">Features :</h5>
                            <ul>
                                <li><?php echo $product['feat1'] ?></li>
                                <li><?php echo $product['feat2'] ?></li>
                                <li><?php echo $product['feat3'] ?></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">

                        <p><?php echo $product['description']?></p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Add to cart</button>
                </div>
            </div>
        </div>
    </div>
<?php } ?>