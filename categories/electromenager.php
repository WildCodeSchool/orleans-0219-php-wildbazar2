<?php

require '../src/bdd/connec.php';

$pdo = new PDO(DSN, USER, PASS);

$id = $_GET['id'];

$query = "SELECT * FROM home_appliance";
$res = $pdo->query($query);
$products = $res->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

		<!--  Call fonts -->
		<link href="https://fonts.googleapis.com/css?family=Alegreya|Ubuntu" rel="stylesheet">

        <!-- Call local style sheets-->
		<link rel="stylesheet" href="../css/style.css" />
		<link rel="stylesheet" href="../css/electromenager.css" />

		<title>WB2 - Home appliance</title>
	</head>

	<body>


		<!-- Header -->

        <?php

        $classValueBanner = 'home_appliance_banner';
        $imgBannerSrc = '../images/home_appliance_banner.png';
        $titleBanner = 'Home appliance';
        $textBanner = 'Fashion equipment for cooking and housekeeping';

        include '../header.php';

        ?>
			


<!-- Main -->
		<main class="container-fluid">
            <div>
               <a href="electromenagerForm.php"> <button type="button" class="btn btnAdd">+ Add an object</button></a>
            </div>
			<section>
<!-- Black toaster -->
				<div class="row justify-content-center mt-5 ml-5 mr-5">


                    <?php


                    foreach ($products as $product => $productDescription) {
                    ?>

                    <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 justify-content-around">
                        <div class="card">
                            <img class="card-img-top" src="<?= $productDescription['src']; ?>" alt="<?= $productDescription['shorttitle'] ?>">
                            <div class="card-body">
                                <h5 class="card-text"><?= $productDescription['shorttitle'];?></h5>
                                <p class="price"><?= $productDescription['price'];?> &euro;</p>
                                <a href="#" class="btn" id="categoryBtn">
                                    <i class="fas fa-cart-plus"></i>
                                    Add to cart
                                </a>
                                <button type="button" data-toggle="modal" data-toggle="tooltip" data-target="#id<?= $productDescription['id'] ?>" class="btn btnInfo" data-placement="bottom" title="More details">
                                    <i class="fas fa-info"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="id<?= $productDescription['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle"><?= $productDescription['longtitle'];?></h5>
                                     <h3> <?= $productDescription['price'];?> &euro;</h3>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body row">
                                    <div class="card col-sm-6 modalImg">
                                        <img class="card-img-top" src="<?= $productDescription['src']; ?>" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="carac">Technical description :</h5>
                                            <ul class="carac">
                                                <li><span class="bold">Size :</span> <?= $productDescription['size'];?></li>
                                                <li><span class="bold">Power :</span> <?= $productDescription['power'];?></li>
                                                <li><span class="bold">Color :</span> <?= $productDescription['color'];?></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 features">
                                        <?= $productDescription['description']; ?>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-card" data-toggle="modal" data-dismiss="modal"><i class="fas fa-cart-plus"></i> Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php } ?>
				</div>
			</section>
		</main>

<!-- Footer -->
        <?php

        include '../footer.php';

        ?>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<!-- Font Awesome  -->
	<script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js" integrity="sha384-0pzryjIRos8mFBWMzSSZApWtPl/5++eIfzYmTgBBmXYdhvxPc+XcFEk+zJwDgWbP" crossorigin="anonymous"></script>
	
	</body>
</html>