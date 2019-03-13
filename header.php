    <header id="home" class="container-fluid">
		<?php
		 if ('/index.php' == $_SERVER['PHP_SELF']) {

                echo '<nav class="navbar navbar-expand-lg navbar-dark">
            <img class="logo" src="https://raw.githubusercontent.com/WildCodeSchool/orleans-0219-php-wildbazar2/footer/images/wild.png" alt="logo">
            <a class="navbar-brand" href="index.php">Wild Bazar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="categories/fashion.php">Fashion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="categories/aquarium.php">Pet shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="categories/tech.php">High-Tech</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="categories/watches.php">Watches</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="categories/electromenager.php">Home appliance</a>
                    </li>
                </ul>
            </div>
            <button type="button" class="btn btn-warning pull-right">Cart <i class="fas fa-cart-arrow-down"></i></button>
        </nav>';

            }
        else{

        	echo '<nav class="navbar navbar-expand-lg navbar-dark">
            <img class="logo" src="https://raw.githubusercontent.com/WildCodeSchool/orleans-0219-php-wildbazar2/footer/images/wild.png" alt="logo">
            <a class="navbar-brand" href="../index.php">Wild Bazar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                   
                    <li class="nav-item">
                        <a class="nav-link" href="fashion.php">Fashion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aquarium.php">Pet shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tech.php">High-Tech</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="watches.php">Watches</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="electromenager.php">Home appliance</a>
                    </li>
                </ul>
            </div>
            <button type="button" class="btn btn-warning pull-right">Cart <i class="fas fa-cart-arrow-down"></i></button>
        </nav>';
        }

        

            if ('/categories/electromenager.php' == $_SERVER['PHP_SELF']) {

                echo
                '<div>
                    <div class="home_appliance_banner">
                        <img src="../images/home_appliance_banner.png" class="img-fluid" alt="home appliance"/>
                        <h1>Home appliance</h1>
                        <p>Fashion equipment for cooking and housekeeping</p>
                    </div>
                </div>';


            } 

            elseif ('/categories/tech.php' == $_SERVER['PHP_SELF']) {

                echo '<div>
		<div class="home-tech p-0 m-0">
			<img src="../images/techVr.jpg" alt="background header">
			<h1>high - tech</h1>
			<p>The best high-tech articles are here</p>
		</div>
	</div>';
			}	

            else {
                echo '<div class="bd-example">
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
				</div>'	;
            }




        ?>

    </header>