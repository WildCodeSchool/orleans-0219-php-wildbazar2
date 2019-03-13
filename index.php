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

		<link rel="stylesheet" href="css/style.css" />

		<title>Wild Bazar 2</title>
	</head>

	<body>


		<!-- Header -->
        <?php

        include 'header.php';

        ?>


            <div class="container-fluid">
				<div class="bd-example">
			      	<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
			        	<ol class="carousel-indicators">
					        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
					        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
					        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
					        <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
					        <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
					        <li data-target="#carouselExampleCaptions" data-slide-to="5"></li>
			        	</ol>
		        		<div class="carousel-inner">
				      	<div class="carousel-item active">
				        	<a href="#home">
				        		<img class="carousel_image homeImg" src="images/banner_image_original_1509469545.jpg" class="d-block w-100" alt="soldes">
				        	</a>
				        	<div class="carousel-caption d-none d-md-block">
				          		<h1 class="carousel_title3">Wild Bazar</h1>
				          		<p class="carousel_text3">You can find everything and especially anything</p>
				        	</div>
				      	</div>
				      	<div class="carousel-item">
				      		<a href="partisolocategorie/Aquarium.php">
				       			<img class="carousel_image  homeImg" src="images/fish.jpg" class="d-block w-100" alt="fishs">
				       		</a>
				        	<div class="carousel-caption d-none d-md-block">
				        		<h2 class="carousel_title3">Pet shop</h2>
				          		<p class="carousel_text3">All for your fishs</p>
				        	</div>
				      	</div>
				      	
				      	<div class="carousel-item">
				        	<a href="fashion.php">	
				        		<img class="carousel_image homeImg" src="images/fashion3.jpg">
				        	</a>
				        	<div class="carousel-caption d-none d-md-block">
				          		<h2 class="carousel_title3">Fashion</h2>
				          		<p class="carousel_text3">All fashion is here !</p>
				        	</div>
				      	</div>
				      	<div class="carousel-item">
				      		<a href="watches-items.php">
					        	<img class="carousel_image homeImg" src="images/montres.jpg">
					        </a>
				        	<div class="carousel-caption d-none d-md-block">
				          		<h2 class="carousel_title3">Watches</h2>
				          		<p class="carousel_text3">Efficient, stylish, and on top of that, they give you the good time !</p>
				        	</div>
				      	</div>
				      	<div class="carousel-item">
				      		<a href="categories-tech.php">
					        	<img class="carousel_image homeImg" src="images/tech.jpg">
					        </a>
				        	<div class="carousel-caption d-none d-md-block">
				          		<h2 class="carousel_title3">High-tech</h2>
				          		<p class="carousel_text3">The best of high-tech !</p>
				        	</div>
				      	</div>
				      	<div class="carousel-item">
				      		<a href="electromenager.php">
					        	<img class="carousel_image homeImg" src="images/cuisine.jpg">
					        </a>
				        	<div class="carousel-caption d-none d-md-block">
				          		<h2 class="carousel_title3">Home appliance</h2>
				          		<p class="carousel_text3">Fashion equipment for cooking and housekeeping</p>
				        	</div>
				      	</div>

<!--  -->




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
            </div>

		<main class="container-fluid">
			<!-- Categories -->
			<section id="category" class="container-fluid category row">
				<h2 class="title">Categories</h2>
				<div class="row category">
					<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 cont-cat">
						<img class="cat" src="images/categories001.png" alt="montre-003">
						<a href="watches-items.php">
						<div class="overlay">
    						<div class="text">Watches</div>
  						</div>
  						</a>
  						<h5>Watches</h5>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 cont-cat">
						<img class="cat" src="images/categories002.png" alt="montre-005">
						<a href="electromenager.php">
						<div class="overlay">
    						<div class="text">Home Appliance</div>
  						</div>
  						</a>
  						<h5>Home appliance</h5>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 cont-cat">
						<img class="cat" src="images/categories003.png" alt="montre-006">
						<a href="categories-tech.php">
						<div class="overlay">
    						<div class="text">High Tech</div>
  						</div>
  						</a>
  						<h5>High-tech</h5>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 cont-cat">
						<img class="cat" src="images/categories004.png" alt="montre-007">
						<a href="fashion.php">
						<div class="overlay">
    						<div class="text">Fashion</div>
  						</div>
  						</a>
  						<h5>Fashion</h5>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 cont-cat">
						<img class="cat" src="images/categories005.png" alt="montre-008">
						<a href="aquarium.php">
						<div class="overlay">
    						<div class="text">Pet shop</div>
  						</div>
  						</a>
  						<h5>Pet shop</h5>
					</div>
				</div>
			</section>

<!-- About us -->
			<section id="about">
				<div class="row justify-content-center">
					<div>
						<h2 class="col-12 title">About us</h2> 
					</div>
				</div>
				<div class="row media justify-content-center">
					<div class="col-12 col-lg-3 media-img">
						<img src="images/about.jpeg" class="col-12">
					</div>
					<div class="col-12 col-lg-7 media-body">
						<p>Here you will find a range of quality products, specially chosen by our specialists. Quality and originality are our main objectives.</p>
						<br>
						<p> Our site is updated daily with the new products available, do not hesitate to visit us frequently!</p>
					</div>
				</div>
			</section>

<!-- Top selling -->
		<section id="topSelling">

			<div class="row">
		    	<div class="col-12 mb-4 text-center">
		    		<h2 class="title">Top selling</h2>
		    		<p>The three best sales of the month</p>
		    	</div> 
			</div>

      		<div class="container-fluid ">

        		<div class="row justify-content-around">

          		<!-- ROLEX -->

		         	<div class="card col-sm-12 col-md-3">
		            	<img class="card-img-top" src="images/rolex.jpg" alt="Card image cap">
		            	<p class="nameWanted">2700 &euro;</p>
		            	<div class="card-body">
		              		<h4 class="card-text">WATCH ROLEX DEEPSEA SEA-DWELLER 116660.</h4>
		            	</div>
		          	</div>
		          <!-- MICRONDE -->

		          	<div class="card col-sm-12 col-md-3">
		            	<img class="card-img-top" src="images/micronde.png" alt="Card image cap">
		            	<p class="nameWanted">200 &euro;</p>
		            	<div class="card-body">
		              		<h4 class="card-text">H.KOENIG VIO9 MICROWAVE OVEN AND GRILL 25L</h4>  
		            	</div>
		          	</div>

		          <!-- RASPBERRY -->

		          	<div class="card col-sm-12 col-md-3">
		            	<img class="card-img-top" src="images/raspberryPi.JPG" alt="Card image cap">
		          		<p class="nameWanted">50 &euro;</p>
		            	<div class="card-body">
		              		<h4 class="card-text">RASPBERRY PI 3 MODEL B+ RASPBERRY PI</h4>
		            	</div>
		          	</div>
        		</div>
      		</div>
      	</section>

		</main>

<!-- Footer -->
        <?php

        include 'footer.php';

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