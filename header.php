<header id="home" class="container-fluid">
	<nav class="navbar navbar-expand-lg navbar-dark">
		<img class="logo" src="https://raw.githubusercontent.com/WildCodeSchool/orleans-0219-php-wildbazar2/footer/images/wild.png" alt="logo">
		<a class="navbar-brand" href="/index.php">Wild Bazar</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item">
				<a class="nav-link" href="/categories/fashion.php">Fashion</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="/categories/aquarium.php">Pet shop</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="/categories/tech.php">High-Tech</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="/categories/watches.php">Watches</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="/categories/electromenager.php">Home appliance</a>
				</li>
			</ul>
		</div>
		<button type="button" class="btn btn-warning pull-right">Cart <i class="fas fa-cart-arrow-down"></i></button>
	</nav>

	<?php
	
		if('/index.php'== $_SERVER['PHP_SELF']){
			include 'carousel.php';
		}
		else{
			include 'banner.php';
		}
	?>
</header>