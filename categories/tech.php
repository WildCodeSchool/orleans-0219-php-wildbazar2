<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>high-tech</title>
<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!--  Call fonts -->
	<link href="https://fonts.googleapis.com/css?family=Alegrya|Ubuntu" rel="stylesheet"> 
<!-- Call style.css -->
	<link rel="stylesheet" type="text/css" href="../css/style-tech.css">
</head>


<body>

<header id="home" class="container-fluid m-0 p-0">
	<nav class="navbar navbar-expand-lg navbar-dark">
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
				<a class="nav-link" href="categories-tech.php">High-Tech</a>
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
	</nav>
	<div>
		<div class="home-tech p-0 m-0">
			<img src="../images/techVr.jpg" alt="background header">
			<h1>high - tech</h1>
			<p>The best high-tech articles are here</p>
		</div>
	</div>
</header>

<div class="container-fluid" id="tech">
	<div class="row justify-content-center p-2 mt-5">
		<div class="col-12 col-md-6 col-lg-2 m-3">
			<div class="card" style="">
				<img src="../images/raspberryPi.JPG" class="card-img-top" alt="raspberry pi">
				<div class="card-body">
					<h5 class="card-title">Raspberry Pi 3</h5>
					<p class="card-text">29.99  <i class="fas fa-euro-sign"></i></p>
					<a href="#" class="btn btn-primary"><i class="fas fa-cart-plus"></i>  Add to cart</a>
					 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#raspi"><i class="fas fa-info"></i>
					 </button>				    
				</div>
			</div>
		</div>
		<div class="modal fade" id="raspi" tabindex="-1" role="dialog" aria-hidden="true">
			 <div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					 <div class="modal-header">
						 <h5 class="modal-title">Raspberry PI 3</h5>
						 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						 <span aria-hidden="true">&times;</span>
						 </button>
					 </div>
			 <div class="modal-body row">
				<div class="card-modal col-12 col-lg-6 justify-content-center">
				<img src="../images/raspberryPi.JPG" class="modal-img" alt="raspberry pi" >
					<div class="card-body ">
						<h5 class="card-title-features">Features :</h5>
						<ul>
							<li>Processeur : 700 MHz ARM1176JZF-S core (ARM11)</li>
							<li>Système sur puce (Soc) : Broadcom BCM2835</li>
							<li>décodeur Broadcom VideoCore IV, API logicielle vidéo OpenGL ES 2.0</li>
						</ul>
					</div>
				</div>
			<div class="col-12 col-lg-6">
				<p class="price"><p class="card-text">29.99  <i class="fas fa-euro-sign"></i></p></p>
				<p>The Raspberry Pi is a series of small single-board computers developed in the United Kingdom by the Raspberry Pi Foundation to promote teaching of basic computer science in schools and in developing countries.</p>
			</div>
			</div>
			<div class="modal-footer">
			<button type="button" class="btn btn-primary">Add to cart</button>
			</div>
			</div>
		</div>
	</div>
		<div class="col-12 col-md-6 col-lg-2 m-3 ">
			<div class="card" style="">
			 <img src="../images/googleHome.jpg" class="card-img-top" alt="google home">
				 <div class="card-body">
					 <h5 class="card-title">Google Home</h5>
					 <p class="card-text">129.99  <i class="fas fa-euro-sign"></i></p><a href="#" class="btn btn-primary"><i class="fas fa-cart-plus"></i>  Add to cart</a>
					 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#googleHome"><i class="fas fa-info"></i>
					 </button>
				 </div>
			</div>
		</div>
		<div class="modal fade" id="googleHome" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Google Home</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body row">
						<div class="card-modal col-12 col-lg-6 justify-content-center">
							<img src="../images/googleHome.jpg" class="modal-img" alt="google home" >
						<div class="card-body ">
							 <h5 class="card-title-features">Features :</h5>
							<ul>
								<li>Processeur : 700 MHz ARM1176JZF-S core (ARM11)</li>
								<li>Système sur puce (Soc) : Broadcom BCM2835</li>
								<li>décodeur Broadcom VideoCore IV, API logicielle vidéo OpenGL ES 2.0</li>
							</ul>
						</div>
					</div>
					<div class="col-12 col-lg-6">
						<p class="price"><p class="card-text">129.99  <i class="fas fa-euro-sign"></i></p></p>
						<p>Google Home is a brand of smart speakers developed by Google. The first device was announced in May 2016 and released in the United States in November 2016, with subsequent releases globally throughout 2017 and 2018</p>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary">Add to cart</button>
				</div>
		  </div>
	</div>
</div>
		<div class="col-12  col-md-6 col-lg-2 m-3">
			<div class="card" style="">
				<img src="../images/google-mini.jpg" class="card-img-top" alt="google home mini">
				<div class="card-body">
					<h5 class="card-title">Google Home Mini</h5>
					<p class="card-text">99.99  <i class="fas fa-euro-sign"></i></p>
					<a href="#" class="btn "><i class="fas fa-cart-plus"></i>   Add to cart</a>
					<button type="button" class="btn " data-toggle="modal" data-target="#google-mini"><i class="fas fa-info"></i>
					</button>				  
				</div>
			</div>
		</div>
		<div class="modal fade" id="google-mini" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					 <div class="modal-header">
						 <h5 class="modal-title">Google Home Mini</h5>
						 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						 <span aria-hidden="true">&times;</span>
						 </button>
					</div>
					<div class="modal-body row">
						<div class="card-modal col-12 col-lg-6 justify-content-center">
						<img src="../images/google-mini.jpg" class="modal-img" alt="google home mini" >
						<div class="card-body ">
				<h5 class="card-title-features">Features :</h5>
				<ul>
					<li>Processeur : 700 MHz ARM1176JZF-S core (ARM11)</li>
					<li>Système sur puce (Soc) : Broadcom BCM2835</li>
					<li>décodeur Broadcom VideoCore IV, API logicielle vidéo OpenGL ES 2.0</li>
				</ul>
			</div>
		</div>
	  <div class="col-12 col-lg-6">
	  			<p class="price"><p class="card-text">99.99  <i class="fas fa-euro-sign"></i></p></p>
				<p>Google Home is a brand of smart speakers developed by Google. The first device was announced in May 2016 and released in the United States in November 2016, with subsequent releases globally throughout 2017 and 2018</p>
			</div>
		</div>
	  <div class="modal-footer">
		<button type="button" class="btn btn-primary">Add to cart</button>
	  </div>
	</div>
  </div>
</div>
		<div class="col-12 col-md-6 col-lg-2 m-3">
			<div class="card" style="">
			 <img src="../images/01-108154.jpg.png" class="card-img-top" alt="connected watch">
				 <div class="card-body">
					 <h5 class="card-title">Connected watch</h5>
					 <p class="card-text">199.99  <i class="fas fa-euro-sign"></i></p>
					 <a href="#" class="btn btn-primary"><i class="fas fa-cart-plus"></i>  Add to cart</a>
					 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#watch"><i class="fas fa-info"></i>
</button>				  
				 </div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="watch" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
	<div class="modal-content">
	  <div class="modal-header">
		<h5 class="modal-title">Connected watch</h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>
	  <div class="modal-body row">
		<div class="card-modal col-12 col-lg-6 justify-content-center">
			<img src="../images/01-108154.jpg.png" class="modal-img" alt="connected watch" >
			<div class="card-body ">
				<h5 class="card-title-features">Features :</h5>
				<ul>
					<li>Processeur : 700 MHz ARM1176JZF-S core (ARM11)</li>
					<li>Système sur puce (Soc) : Broadcom BCM2835</li>
					<li>décodeur Broadcom VideoCore IV, API logicielle vidéo OpenGL ES 2.0</li>
				</ul>
			</div>
		</div>
	  <div class="col-12 col-lg-6">
	  			<p class="price"><p class="card-text">199.99  <i class="fas fa-euro-sign"></i></p></p>
				<p> Google Home is a brand of smart speakers developed by Google. The first device was announced in May 2016 and released in the United States in November 2016, with subsequent releases globally throughout 2017 and 2018</p>
			</div>
		</div>
	  <div class="modal-footer">
		<button type="button" class="btn btn-primary">Add to cart</button>
	  </div>
	</div>
  </div>
</div>
  <hr>
	<div class="row justify-content-center p-2">
		<div class="col-12  col-md-6 col-lg-2 m-3">
			<div class="card" style=";">
				<img src="../images/bartop.jpg" class="card-img-top" alt="bartop">
				<div class="card-body">
					<h5 class="card-title">Bartop</h5>
					<p class="card-text">229.99  <i class="fas fa-euro-sign"></i></p>
					<a href="#" class="btn btn-primary"><i class="fas fa-cart-plus"></i>  Add to cart</a>
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#bartop"><i class="fas fa-info"></i>
</button>				  
				</div>
			</div>
		</div>
		<div class="modal fade" id="bartop" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
	<div class="modal-content">
	  <div class="modal-header">
		<h5 class="modal-title">Bartop</h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>
	  <div class="modal-body row">
		<div class="card-modal col-12 col-lg-6 justify-content-center">
			<img src="../images/bartop.jpg" class="modal-img" alt="bartop" >
			<div class="card-body ">
				<h5 class="card-title-features">Features :</h5>
				<ul>
					<li>Processeur : 700 MHz ARM1176JZF-S core (ARM11)</li>
					<li>Système sur puce (Soc) : Broadcom BCM2835</li>
					<li>décodeur Broadcom VideoCore IV, API logicielle vidéo OpenGL ES 2.0</li>
				</ul>
			</div>
		</div>
	  <div class="col-12 col-lg-6">
	  			<p class="price"><p class="card-text">229.99  <i class="fas fa-euro-sign"></i></p></p>
				<p> Google Home is a brand of smart speakers developed by Google. The first device was announced in May 2016 and released in the United States in November 2016, with subsequent releases globally throughout 2017 and 2018</p>
			</div>
		</div>
	  <div class="modal-footer">
		<button type="button" class="btn btn-primary">Add to cart</button>
	  </div>
	</div>
  </div>
</div>
		<div class="col-12 col-md-6 col-lg-2 m-3">
			<div class="card" style=";">
			 <img src="../images/linux.jpg" class="card-img-top" alt="linux computer">
				 <div class="card-body">
					 <h5 class="card-title">Desktop</h5>
					 <p class="card-text">499.99 <i class="fas fa-euro-sign"></i></p>
					 <a href="#" class="btn btn-primary"><i class="fas fa-cart-plus"></i>  Add to cart</a>
					 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Comptuter"><i class="fas fa-info"></i>
</button>				  
				 </div>
			</div>
		</div>
		<div class="modal fade" id="Comptuter" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
	<div class="modal-content">
	  <div class="modal-header">
		<h5 class="modal-title">Desktop</h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>
	  <div class="modal-body row">
		<div class="card-modal col-12 col-lg-6 justify-content-center">
			<img src="../images/linux.jpg" class="modal-img" alt="linux computer" >
			<div class="card-body ">
				<h5 class="card-title-features">Features :</h5>
				<ul>
					<li>Processeur : 700 MHz ARM1176JZF-S core (ARM11)</li>
					<li>Système sur puce (Soc) : Broadcom BCM2835</li>
					<li>décodeur Broadcom VideoCore IV, API logicielle vidéo OpenGL ES 2.0</li>
				</ul>
			</div>
		</div>
	  <div class="col-12 col-lg-6">
	  			<p class="price"><p class="card-text">499.99 <i class="fas fa-euro-sign"></i></p></p>
				<p> Google Home is a brand of smart speakers developed by Google. The first device was announced in May 2016 and released in the United States in November 2016, with subsequent releases globally throughout 2017 and 2018</p>
			</div>
		</div>
	  <div class="modal-footer">
		<button type="button" class="btn btn-primary">Add to cart</button>
	  </div>
	</div>
  </div>
</div>
		<div class="col-12  col-md-6 col-lg-2 m-3">
			<div class="card" style=";">
				<img src="../images/domo.jpg " class="card-img-top" alt="domotic box">
				<div class="card-body">
					<h5 class="card-title">Domo Box</h5>
					<p class="card-text">279.99 <i class="fas fa-euro-sign"></i></p>
					<a href="#" class="btn btn-primary"><i class="fas fa-cart-plus"></i>  Add to cart</a>
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#domo"><i class="fas fa-info"></i>
</button>				  
				</div>
			</div>
		</div>
		<div class="modal fade" id="domo" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
	<div class="modal-content">
	  <div class="modal-header">
		<h5 class="modal-title">Domo Box</h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>
	  <div class="modal-body row">
		<div class="card-modal col-12 col-lg-6 justify-content-center">
			<img src="../images/domo.jpg" class="modal-img" alt="domotic box" >
			<div class="card-body ">
				<h5 class="card-title-features">Features :</h5>
				<ul>
					<li>Processeur : 700 MHz ARM1176JZF-S core (ARM11)</li>
					<li>Système sur puce (Soc) : Broadcom BCM2835</li>
					<li>décodeur Broadcom VideoCore IV, API logicielle vidéo OpenGL ES 2.0</li>
				</ul>
			</div>
		</div>
	  <div class="col-12 col-lg-6">
	  			<p class="price"><p class="card-text">279.99 <i class="fas fa-euro-sign"></i></p></p>
				<p> Google Home is a brand of smart speakers developed by Google. The first device was announced in May 2016 and released in the United States in November 2016, with subsequent releases globally throughout 2017 and 2018</p>
			</div>
		</div>
	  <div class="modal-footer">
		<button type="button" class="btn btn-primary">Add to cart</button>
	  </div>
	</div>
  </div>
</div>
		<div class="col-12 col-md-6 col-lg-2 m-3">
			<div class="card" style=";">
			 <img src="../images/p20.jpg" class="card-img-top" alt="phone p20 pro">
				 <div class="card-body">
					 <h5 class="card-title">Huawei P20 Pro</h5>
					 <p class="card-text">699.99  <i class="fas fa-euro-sign"></i></p>
					 <a href="#" class="btn btn-primary"><i class="fas fa-cart-plus"></i>  Add to cart</a>
					 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#p20"><i class="fas fa-info"></i>
</button>				  
				 </div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="p20" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
	<div class="modal-content">
	  <div class="modal-header">
		<h5 class="modal-title">Huawei p20 pro</h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>
	  <div class="modal-body row">
		<div class="card-modal col-12 col-lg-6 justify-content-center">
			<img src="../images/p20.jpg" class="modal-img" alt="phone p20 pro" >
			<div class="card-body ">
				<h5 class="card-title-features">Features :</h5>
				<ul>
					<li>Processeur : 700 MHz ARM1176JZF-S core (ARM11)</li>
					<li>Système sur puce (Soc) : Broadcom BCM2835</li>
					<li>décodeur Broadcom VideoCore IV, API logicielle vidéo OpenGL ES 2.0</li>
				</ul>
			</div>
		</div>
	  <div class="col-12 col-lg-6">
	  			<p> <p class="card-text">699.99  <i class="fas fa-euro-sign"></i></p></p>
				<p> Google Home is a brand of smart speakers developed by Google. The first device was announced in May 2016 and released in the United States in November 2016, with subsequent releases globally throughout 2017 and 2018</p>
			</div>
		</div>
	  <div class="modal-footer">
		<button type="button" class="btn btn-primary">Add to cart</button>
	  </div>
	</div>
  </div>
</div>
  <hr>
	<div class="row justify-content-center p-2">
		<div class="col-12  col-md-6 col-lg-2 m-3">
			<div class="card" style=";">
				<img src="../images/platine.jpg " class="card-img-top" alt="platines vyniles">
				<div class="card-body">
					<h5 class="card-title">Platine</h5>
					<p class="card-text">229.99  <i class="fas fa-euro-sign"></i></p>
					<a href="#" class="btn btn-primary"><i class="fas fa-cart-plus"></i>  Add to cart</a>
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#platine"><i class="fas fa-info"></i>
</button>				  
				</div>
			</div>
		</div>
		<div class="modal fade" id="platine" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
	<div class="modal-content">
	  <div class="modal-header">
		<h5 class="modal-title">Platine</h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>
	  <div class="modal-body row">
		<div class="card-modal col-12 col-lg-6 justify-content-center">
			<img src="../images/platine.jpg" class="modal-img" alt="platine vyniles" >
			<div class="card-body ">
				<h5 class="card-title-features">Features :</h5>
				<ul>
					<li>Processeur : 700 MHz ARM1176JZF-S core (ARM11)</li>
					<li>Système sur puce (Soc) : Broadcom BCM2835</li>
					<li>décodeur Broadcom VideoCore IV, API logicielle vidéo OpenGL ES 2.0</li>
				</ul>
			</div>
		</div>
	  <div class="col-12 col-lg-6">
	  			<p class="price"><p class="card-text">229.99  <i class="fas fa-euro-sign"></i></p></p>
				<p> Google Home is a brand of smart speakers developed by Google. The first device was announced in May 2016 and released in the United States in November 2016, with subsequent releases globally throughout 2017 and 2018</p>
			</div>
		</div>
	  <div class="modal-footer">
		<button type="button" class="btn btn-primary">Add to cart</button>
	  </div>
	</div>
  </div>
</div>
		<div class="col-12 col-md-6 col-lg-2 m-3">
			<div class="card" style=";">
			 <img src="../images/beat.jpg" class="card-img-top" alt="Headphone">
				 <div class="card-body">
					 <h5 class="card-title">Headphones</h5>
					 <p class="card-text">149.99  <i class="fas fa-euro-sign"></i></p>
					 <a href="#" class="btn btn-primary"><i class="fas fa-cart-plus"></i>  Add to cart</a>
					 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Headphones"><i class="fas fa-info"></i>
</button>				  
				 </div>
			</div>
		</div>
				<div class="modal fade" id="Headphones" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
	<div class="modal-content">
	  <div class="modal-header">
		<h5 class="modal-title">Headphones</h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>
	  <div class="modal-body row">
		<div class="card-modal col-12 col-lg-6 justify-content-center">
			<img src="../images/beat.jpg" class="modal-img" alt="headphone" >
			<div class="card-body ">
				<h5 class="card-title-features">Features :</h5>
				<ul>
					<li>Processeur : 700 MHz ARM1176JZF-S core (ARM11)</li>
					<li>Système sur puce (Soc) : Broadcom BCM2835</li>
					<li>décodeur Broadcom VideoCore IV, API logicielle vidéo OpenGL ES 2.0</li>
				</ul>
			</div>
		</div>
	  <div class="col-12 col-lg-6">
	  			<p class="price"><p class="card-text">149.99  <i class="fas fa-euro-sign"></i></p></p>
				<p> Google Home is a brand of smart speakers developed by Google. The first device was announced in May 2016 and released in the United States in November 2016, with subsequent releases globally throughout 2017 and 2018</p>
			</div>
		</div>
	  <div class="modal-footer">
		<button type="button" class="btn btn-primary">Add to cart</button>
	  </div>
	</div>
  </div>
</div>
		<div class="col-12  col-md-6 col-lg-2 m-3">
			<div class="card" style=";">
				<img src="../images/vr.jpg " class="card-img-top" alt="virtual reality">
				<div class="card-body">
					<h5 class="card-title">Occulus V.R</h5>
					<p class="card-text">199.99  <i class="fas fa-euro-sign"></i></p>
					<a href="#" class="btn btn-primary"><i class="fas fa-cart-plus"></i>  Add to cart</a>
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#vr"><i class="fas fa-info"></i>
</button>				  
				</div>
			</div>
		</div>
		<div class="modal fade" id="vr" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
	<div class="modal-content">
	  <div class="modal-header">
		<h5 class="modal-title">Occculus VR</h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>
	  <div class="modal-body row">
		<div class="card-modal col-12 col-lg-6 justify-content-center">
			<img src="../images/vr.jpg" class="modal-img" alt="virual reality" >
			<div class="card-body ">
				<h5 class="card-title-features">Features :</h5>
				<ul>
					<li>Processeur : 700 MHz ARM1176JZF-S core (ARM11)</li>
					<li>Système sur puce (Soc) : Broadcom BCM2835</li>
					<li>décodeur Broadcom VideoCore IV, API logicielle vidéo OpenGL ES 2.0</li>
				</ul>
			</div>
		</div>
	  <div class="col-12 col-lg-6">
	  			<p class="price"><p class="card-text">199.99  <i class="fas fa-euro-sign"></i></p></p>
				<p> Google Home is a brand of smart speakers developed by Google. The first device was announced in May 2016 and released in the United States in November 2016, with subsequent releases globally throughout 2017 and 2018</p>
			</div>
		</div>
	  <div class="modal-footer">
		<button type="button" class="btn btn-primary">Add to cart</button>
	  </div>
	</div>
  </div>
</div>
		<div class="col-12 col-md-6 col-lg-2 m-3">
			<div class="card" style=";">
			 <img src="../images/snes.jpg" class="card-img-top" alt="super nintendo">
				 <div class="card-body">
					 <h5 class="card-title">Snes Mini</h5>
					 <p class="card-text">79.99  <i class="fas fa-euro-sign"></i></p>
					 <a href="#" class="btn btn-primary"><i class="fas fa-cart-plus"></i>  Add to cart</a>
					 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#snes"><i class="fas fa-info"></i>
</button>				  
				 </div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="snes" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
	<div class="modal-content">
	  <div class="modal-header">
		<h5 class="modal-title">Super Nintendo</h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>
	  <div class="modal-body row">
		<div class="card-modal col-12 col-lg-6 justify-content-center">
			<img src="../images/snes.jpg" class="modal-img" alt="super nintendo" >
			<div class="card-body ">
				<h5 class="card-title-features">Features :</h5>
				<ul>
					<li>Processeur : 700 MHz ARM1176JZF-S core (ARM11)</li>
					<li>Système sur puce (Soc) : Broadcom BCM2835</li>
					<li>décodeur Broadcom VideoCore IV, API logicielle vidéo OpenGL ES 2.0</li>
				</ul>
			</div>
		</div>
	  <div class="col-12 col-lg-6">
	  			<p class="price"><p class="card-text">79.99  <i class="fas fa-euro-sign"></i></p></p>
				<p> Google Home is a brand of smart speakers developed by Google. The first device was announced in May 2016 and released in the United States in November 2016, with subsequent releases globally throughout 2017 and 2018</p>
			</div>
		</div>
	  <div class="modal-footer">
		<button type="button" class="btn btn-primary">Add to cart</button>
	  </div>
	</div>
  </div>
</div>
<!-- Modal -->

<!-- Footer -->
<footer class="container-fluid footer">
	<div class="row">
		<div class="col-12 col-sm-8 col-md-6">
			<div class="row tableFooter">
				<div class="col-5 col-sm-5 col-md-5 col-lg-3"> 
					<a href="#"> Home </a>
				 </div>
					<div class="col-5 col-sm-5 col-md-5 col-lg-3"> 
						<a href="#">Fashion</a>
					</div>
				</div>
<div class="row tableFooter">
<div class="col-5 col-sm-5 col-md-5 col-lg-3"> <a href="#">About us </a></div>
<div class="col-5 col-sm-5 col-md-5 col-lg-3"> <a href="#">Pet shop</a></div>
</div>
<div class="row tableFooter">
<div class="col-5 col-sm-5 col-md-5 col-lg-3"> <a href="#">Top selling </a></div>
<div class="col-5 col-sm-5 col-md-5 col-lg-3"> <a href="#">high-tech</a></div>
</div>        
<div class="row tableFooter">
<div class="col-5 col-sm-5 col-md-5 col-lg-3"> <a href="#">Contact </a></div>
<div class="col-5 col-sm-5 col-md-5 col-lg-3"> <a href="#">Watches</a></div>
</div>        
<div class="row tableFooter">
<div class="col-5 col-sm-5 col-md-5 col-lg-3"> <a href="#">Legal mentions </a></div>
<div class="col-5 col-sm-5 col-md-5 col-lg-3"> <a href="#">Fishery</a></div>
</div>
<br>  
</div>  
<div class="form col-12 col-sm-12 col-md-6"> 
<h3>Contact us</h3>
<form method="post" action="traitement.php">
<p>
<label for="email"><i class="far fa-envelope"></i></label> <input type="email" name="email" id="email" placeholder="wildbazard2@example.com">
</p>
<p>
<label for="message"> <i class="far fa-comment"></i> </label>  <input type="text" name="message" class="inputText" id="message">
</p>
<button type="button" class="btn btn-lg" id="btnFooter">Submit</button>
</form>
</div>          
</div>
<div class="info">
<p> 
<img src="../images/wild.png" class="footerImg" alt="logo">
<span class="titleFooter"> WILD BAZAR</span> 1, rue de la Paix - 75000 Paris - <i class="fas fa-phone"></i> 01-23-45-67-89
</p>
</div>
</footer>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!-- Font Awesome  -->
<script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js" integrity="sha384-0pzryjIRos8mFBWMzSSZApWtPl/5++eIfzYmTgBBmXYdhvxPc+XcFEk+zJwDgWbP" crossorigin="anonymous"></script>

</body>
</html>