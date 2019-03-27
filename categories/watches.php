<?php

//Connection to DATABASE
require '../connec.php';
$pdo = new PDO(DSN, USER, PASS);

//Fetching products
$query = "SELECT * FROM watches LIMIT 12";
$statement = $pdo->query($query);
$products = $statement->fetchAll(PDO::FETCH_ASSOC);

?>

<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<!--  Call fonts -->
		<link href="https://fonts.googleapis.com/css?family=Alegreya|Ubuntu" rel="stylesheet">
		<!-- Call style.css -->
		<link rel="stylesheet" type="text/css" href="../css/watches.css">
        <link rel="stylesheet" type="text/css" href="../css/style.css">

		<title>Watches</title>
	</head>
	<body>
	    <!-- Header -->
        <?php

        $classValueBanner = 'watches_banner';
        $imgBannerSrc = '../images/slide-watch.png';
        $titleBanner = 'Only for Men';
        $textBanner = 'Time is life';

        include '../header.php';

        ?>

        <main class="container-fluid">
            <section id="watches" class="container">
                <div class="watches row mb-5">

                    <?php foreach($products as $product): ?>

                        <div class="card cont-watches col-xl-3 col-lg-3 col-md-4 col-sm-6 n-bd">
                            <img src="../images/<?= $product['p_image']; ?>" class="card-img-top" alt="watches">
                            <div class="card-body">
                                <h5 class="card-title"><?= $product['p_name']; ?></h5>
                                <p class="card-text"><?= $product['p_price']; ?>€</p>
                                <button type="button" class="btn btn-primary btn-card" data-toggle="modal" data-target="#"><i class="fas fa-cart-plus"></i> Add to cart</button>
                                <a href="#id_<?= $product['p_id']; ?>" class="btn i-btn" data-toggle="modal" data-toggle="tooltip" data-placement="bottom" title="More Details"><i class="fas fa-info"></i></a>
                            </div>
                        </div>
                        <!--Modal-->
                        <div class="modal fade" id="id_<?= $product['p_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="<?= str_replace('ontre','',$product['p_image']); ?>" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3><?= $product['p_price']; ?>€</h3>
                                        <h5 class="modal-title" id="<?= str_replace('ontre','',$product['p_image']); ?>"><?= $product['p_name']; ?></h5>
                                        <h3><?= $product['p_price']; ?>€</h3>
                                        <button type="button" class="close" data-dismiss="modal">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body row">
                                        <div class="card col-sm-6">
                                            <img src="../images/<?= $product['p_image']; ?>" class="card-img-top" alt="watches">
                                            <div class="card-body">
                                                <h5 class="descriptif">Technical Description</h5>
                                                <ul class="card-text">
                                                    <li><b>Branch: </b><?= $product['p_branch']; ?></li>
                                                    <li><b>Batteries: </b><?= $product['p_battery']; ?></li>
                                                    <li><b>Shipping Weight: </b><?= $product['p_shipping']; ?></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features col-sm-6">
                                            <p><?= $product['p_caracteristics']; ?>.</p>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-card" data-toggle="modal" data-dismiss="modal"><i class="fas fa-cart-plus"></i> Add to cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php endforeach; ?>

                </div>
                <div><a href="formulaire/form.php" class="btn btn-primary fixed-button i-btn"><i class="fas fa-plus"></i> <span class="i-item">item</span></a></div>
            </section>
        </main>
	<!--Footer-->
	<?php include '../footer.php'; ?>

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<!-- Font Awesome  -->
		<script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js" integrity="sha384-0pzryjIRos8mFBWMzSSZApWtPl/5++eIfzYmTgBBmXYdhvxPc+XcFEk+zJwDgWbP" crossorigin="anonymous"></script>
	</body>
</html>
