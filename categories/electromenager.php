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

		<link rel="stylesheet" href="../css/style.css" />
		<link rel="stylesheet" href="../css/electromenager.css" />

		<title>WB2 - Home appliance</title>
	</head>

	<body>


		<!-- Header -->
        <header id="home" class="container-fluid">
        <?php

        include '../header.php';

        ?>
			
            <div>
                <div class="home_appliance_banner">
                    <img src="../images/home_appliance_banner.png" class="img-fluid" alt="home appliance"/>
                    <h1>Home appliance</h1>
                    <p>Fashion equipment for cooking and housekeeping</p>
                </div>
            </div>
        </header>


<!-- Main -->
		<main class="container-fluid">
			<section>
<!-- Black toaster -->
				<div class="row justify-content-center">
					<div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-2 ">				
						<div class="card">
							<img class="card-img-top" src="../images/grille_pain_russel_noir.jpg" alt="Card image cap">
							<div class="card-body">
								<h5 class="card-text">Black toaster</h5>
								<p class="price">30 &euro;</p>
								<a href="#" class="btn" id="categoryBtn">
									<i class="fas fa-cart-plus"></i> 
									Add to cart
								</a>
								<button type="button" data-toggle="modal" data-toggle="tooltip" data-target="#blackToaster" class="btn btnInfo" data-placement="bottom" title="More details">
									<i class="fas fa-info"></i>
								</button> 
							</div>
						</div>
					</div>

<!-- Black toaster modal -->
					<div class="modal fade" id="blackToaster" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLongTitle">Black toaster - Russel Hobbs</h5>
									 <h3> 30 &euro;</h3>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body row">
									<div class="card col-sm-6 modalImg">
										<img class="card-img-top" src="../images/grille_pain_russel_noir.jpg" alt="Card image cap">
										<div class="card-body">
											<h5 class="carac">Technical description :</h5>
											<ul class="carac">
												<li><span class="bold">Size :</span> 20x15cm</li>
												<li><span class="bold">Power :</span> 585W</li>
												<li><span class="bold">Color :</span> Black</li>
											</ul>
										</div>
									</div>
									<div class="col-sm-6 features">
										
										<p> This toaster with a beautiful black design will fit well in your kitchen.</p>
										<p>Toast clip included.</p>
										<p>2 Large slots. </p>
									</div>								
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-card" data-toggle="modal" data-dismiss="modal"><i class="fas fa-cart-plus"></i> Add to cart</button>
								</div>
							</div>
						</div>
					</div>
<!-- STAR WARS TOASTER -->
					<div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-2 ">					
						<div class="card">
							<img class="card-img-top" src="../images/grille_pain_etoile_de_la_mort.jpeg" alt="Card image cap">
							<div class="card-body">
								<h5 class="card-text">Star-Wars toaster</h5>
								<p class="price">59 &euro;</p>
								<a href="#" class="btn btn-primary"><i class="fas fa-cart-plus"></i> Add to cart</a>
								<button type="button" data-toggle="modal" data-toggle="tooltip" data-target="#starWarsToaster" class="btn btnInfo" data-placement="bottom" title="More details">
									<i class="fas fa-info"></i>
								</button>
							</div>
						</div>
					</div>
<!-- STAR WARS TOASTER MODAL-->
					<div class="modal fade" id="starWarsToaster" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLongTitle">Black toaster - Russel Hobbs</h5>
									<h3> 59 &euro;</h3>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body row">
									<div class="card col-sm-6 modalImg">
										<img class="card-img-top" src="../images/grille_pain_etoile_de_la_mort.jpeg" alt="Card image cap">
										<div class="card-body">
											<h5 class="carac">Technical description :</h5>
											<ul class="carac">
												<li><span class="bold">Size :</span> Round (Death Star style)</li>
												<li><span class="bold">Power :</span> 500 W</li>
												<li><span class="bold">Color :</span> Silver</li>
											</ul>
										</div>
									</div>
									<div class="col-sm-6 features">
										<p> A good toaster if you like Star Wars universe.</p>
										<p> Customize your toasts with a TIE fighter.</p>
										<p> 2 slots.</p>
									</div>								
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-card" data-toggle="modal" data-dismiss="modal"><i class="fas fa-cart-plus"></i> Add to cart</button>
								</div>
							</div>
						</div>
					</div>

<!-- RED TOASTER -->
					<div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-2 ">	
						<div class="card">
							<img class="card-img-top" src="../images/grille_pain_rouge.jpg" alt="Card image cap">
							<div class="card-body">
								<h5 class="card-text">Red toaster</h5>
								<p class="price">99 &euro;</p>
								<a href="#" class="btn btn-primary"><i class="fas fa-cart-plus"></i> Add to cart</a>
								<button type="button" data-toggle="modal" data-toggle="tooltip" data-target="#redToaster" class="btn btnInfo" data-placement="bottom" title="More details">
									<i class="fas fa-info"></i>
								</button>
							</div>
						</div>
					</div>
<!-- RED TOASTER MODAL -->
					<div class="modal fade" id="redToaster" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLongTitle">Red toaster - Kitchenaid</h5>
									<h3> 99 &euro;</h3>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body row">
									<div class="card col-sm-6 modalImg">
										<img class="card-img-top" src="../images/grille_pain_rouge.jpg" alt="Card image cap">
										<div class="card-body">
											<h5 class="carac">Technical description :</h5>
											<ul class="carac">
												<li><span class="bold">Size :</span> 30 x 15 cm</li>
												<li><span class="bold">Power :</span> 1800 W</li>
												<li><span class="bold">Color :</span> Black</li>
											</ul>
										</div>
									</div>
									<div class="col-sm-6 features">
										<p> Make a statement in your kitchen with the KitchenAid KMT4116 4-Slice Long Slot Toaster.</p>
										<p> Designed for versatility, efficiency and style, this classy toaster is available in a range of colours to suit your home decor.	</p>
									</div>								
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-card" data-toggle="modal" data-dismiss="modal"><i class="fas fa-cart-plus"></i> Add to cart</button>
								</div>
							</div>
						</div>
					</div>

<!-- VINTAGE TOASTER -->
					<div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-2 ">				
						<div class="card">
							<img class="card-img-top" src="../images/grille_pain_vintage.jpg" alt="Card image cap">
							<div class="card-body">
								<h5 class="card-text">Vintage toaster</h5>
								<p class="price">49 &euro;</p>
								<a href="#" class="btn btn-primary"><i class="fas fa-cart-plus"></i> Add to cart</a>
								<button type="button" data-toggle="modal" data-toggle="tooltip" data-target="#vintageToaster" class="btn btnInfo" data-placement="bottom" title="More details">
									<i class="fas fa-info"></i>
								</button>
							</div>
						</div>
					</div>

<!-- VINTAGE TOASTER MODAL -->
					<div class="modal fade" id="vintageToaster" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLongTitle">Vintage toaster - Ariete</h5>
									<h3> 49 &euro;</h3>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body row">
									<div class="card col-sm-6 modalImg">
										<img class="card-img-top" src="../images/grille_pain_vintage.jpg" alt="Card image cap">
										<div class="card-body">
											<h5 class="carac">Technical description :</h5>
											<ul class="carac">
												<li><span class="bold">Size :</span> 39 x 38 cm</li>
												<li><span class="bold">Power :</span> 1000 W</li>
												<li><span class="bold">Color :</span> Black</li>
											</ul>
										</div>
									</div>
									<div class="col-sm-6 features">
										<p> 2 slots vintage toaster.</p>
										<p> Automatic ejection & crumb tray.</p>
										<p> Functions for defrosting, reheating and toasting.</p>
										<p> Perfect for toasting simple toasts or sandwiches.</p>
										<p> 6 position thermostat, cold walls.	</p>
									</div>								
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-card" data-toggle="modal" data-dismiss="modal"><i class="fas fa-cart-plus"></i> Add to cart</button>
								</div>
							</div>
						</div>
					</div>

				</div>
				<hr/>

					

<!-- RED MICROWAVE -->

				<div class="row justify-content-center">
					<div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-2 ">				
						<div class="card">
							<img class="card-img-top" src="../images/micro_ondes_rouge.jpg" alt="Card image cap">
							<div class="card-body">
								<h5 class="card-text">Red microwave</h5>
								<p class="price">89 &euro;</p>
								<a href="#" class="btn btn-primary"><i class="fas fa-cart-plus"></i> Add to cart</a>
								<button type="button" data-toggle="modal" data-toggle="tooltip" data-target="#redMicrowave" class="btn btnInfo" data-placement="bottom" title="More details">
									<i class="fas fa-info"></i>
								</button>
							</div>
						</div>
					</div>				
<!-- RED MICROWAVE MODAL -->
					<div class="modal fade" id="redMicrowave" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLongTitle">Red microwave - Salco</h5>
									<h3> 89 &euro;</h3>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body row">
									<div class="card col-sm-6 modalImg">
										<img class="card-img-top" src="../images/micro_ondes_rouge.jpg" alt="Card image cap">
										<div class="card-body">
											<h5 class="carac">Technical description :</h5>
											<ul class="carac">
												<li><span class="bold">Size :</span> 50 x 30 x 35 cm</li>
												<li><span class="bold">Power :</span> 900 W</li>
												<li><span class="bold">Color :</span> Red</li>
											</ul>
										</div>
									</div>
									<div class="col-sm-6 features">
										<p>Equipped with a 27 cm glass tray, it can program 12 cooking functions according to your dishes: drinks, frozen dishes, vegetables, fish, starches... all on its LED display.</p>
										<p> The interior cavity is illuminated for better use. </p>
										<p> The power is also adjustable from 20% to 100%.</p>
									</div>								
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-card" data-toggle="modal" data-dismiss="modal"><i class="fas fa-cart-plus"></i> Add to cart</button>
								</div>
							</div>
						</div>
					</div>

<!-- ROUND MICROWAVE -->
					<div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-2 ">				
						<div class="card">
							<img class="card-img-top" src="../images/micro_ondes_rond.jpg" alt="Card image cap">
							<div class="card-body">
								<h5 class="card-text">Round microwave</h5>
								<p class="price">89 &euro;</p>
								<a href="#" class="btn btn-primary"><i class="fas fa-cart-plus"></i> Add to cart</a>
								<button type="button" data-toggle="modal" data-toggle="tooltip" data-target="#roundMicrowave" class="btn btnInfo" data-placement="bottom" title="More details">
									<i class="fas fa-info"></i>
								</button>
							</div>
						</div>
					</div>
<!-- ROUND MICROWAVE MODAL -->
					<div class="modal fade" id="roundMicrowave" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLongTitle">Round microwave Spoutnik - Brandt</h5>
									<h3> 89 &euro;</h3>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body row">
									<div class="card col-sm-6 modalImg">
										<img class="card-img-top" src="../images/micro_ondes_rond.jpg" alt="Card image cap">
										<div class="card-body">
											<h5 class="carac">Technical description :</h5>
											<ul class="carac">
												<li><span class="bold">Size :</span> 26 x 42 x 32 cm</li>
												<li><span class="bold">Power :</span> 1200 W</li>
												<li><span class="bold">Color :</span> Green (other colors available soon)</li>
											</ul>
										</div>
									</div>
									<div class="col-sm-6 features">
										<p> SPOUTNIK is compact in shape, but still has a 28 cm tray that can accommodate the same types of food as a conventional rectangular microwave.</p>
										<p> SPOUTNIK has a completely new opening system that simplifies access to food.</p>
									</div>								
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-card" data-toggle="modal" data-dismiss="modal"><i class="fas fa-cart-plus"></i> Add to cart</button>
								</div>
							</div>
						</div>
					</div>

<!-- BLACK MICROWAVE -->
					<div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-2 ">				
						<div class="card">
							<img class="card-img-top" src="../images/micro_onde_noir.jpg" alt="Card image cap">
							<div class="card-body">
								<h5 class="card-text">Black microwave</h5>
								<p class="price">75 &euro;</p>
								<a href="#" class="btn btn-primary"><i class="fas fa-cart-plus"></i> Add to cart</a>
								<button type="button" data-toggle="modal" data-toggle="tooltip" data-target="#blackMicrowave" class="btn btnInfo" data-placement="bottom" title="More details">
									<i class="fas fa-info"></i>
								</button>
							</div>
						</div>
					</div>

<!-- BLACK MICROWAVE MODAL -->
					<div class="modal fade" id="blackMicrowave" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLongTitle">Black microwave - Daewoo</h5>
									<h3> 75 &euro;</h3>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body row">
									<div class="card col-sm-6 modalImg">
										<img class="card-img-top" src="../images/micro_onde_noir.jpg" alt="Card image cap">
										<div class="card-body">
											<h5 class="carac">Technical description :</h5>
											<ul class="carac">
												<li><span class="bold">Size :</span> 50 x 30 x35 cm</li>
												<li><span class="bold">Power :</span> 800 W</li>
												<li><span class="bold">Color :</span> Black</li>
											</ul>
										</div>
									</div>
									<div class="col-sm-6 features">
										<p> Monofunction microwave oven</p>
										<p> Capacity 23 litres</p>
										<p> Power MO 800 watts</p>
										<p> S.R.C System</p>
										<p> Touch control panel with rotary knob.	</p>
									</div>								
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-card" data-toggle="modal" data-dismiss="modal"><i class="fas fa-cart-plus"></i> Add to cart</button>
								</div>
							</div>
						</div>
					</div>

<!-- PINK MICROWAVE -->

					<div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-2 ">				
						<div class="card">
							<img class="card-img-top" src="../images/micro_ondes_violet.jpg" alt="Card image cap">
							<div class="card-body">
								<h5 class="card-text">Pink microwave</h5>
								<p class="price">99 &euro;</p>
								<a href="#" class="btn btn-primary"><i class="fas fa-cart-plus"></i> Add to cart</a>
								<button type="button" data-toggle="modal" data-toggle="tooltip" data-target="#pinkMicrowave" class="btn btnInfo" data-placement="bottom" title="More details">
									<i class="fas fa-info"></i>
								</button>
							</div>
						</div>
					</div>
<!-- PINK MICROWAVE MODAL -->
					<div class="modal fade" id="pinkMicrowave" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLongTitle">Pink microwave - Schneider</h5>
									<h3> 99 &euro;</h3>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body row">
									<div class="card col-sm-6 modalImg">
										<img class="card-img-top" src="../images/micro_ondes_violet.jpg" alt="Card image cap">
										<div class="card-body">
											<h5 class="carac">Technical description :</h5>
											<ul class="carac">
												<li><span class="bold">Size :</span> 49 x 35 x 36 cm</li>
												<li><span class="bold">Power :</span> 900/1000 W</li>
												<li><span class="bold">Color :</span> Pink</li>
											</ul>
										</div>
									</div>
									<div class="col-sm-6 features">
										<p> Capacity 25 L.</p>
										<p> Microwave power 900 W, grill 1000 W.</p>
										<p> Mechanical controls.</p>
										<p> Timer 30 mn.</p>
										<p> Turntable 27 cm.	</p>
									</div>								
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-card" data-toggle="modal" data-dismiss="modal"><i class="fas fa-cart-plus"></i> Add to cart</button>
								</div>
							</div>
						</div>
					</div>

				</div>
				<hr/>
<!-- ROBOT HOOVER -->
				<div class="row justify-content-center">
					<div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-2 ">			
						<div class="card">
							<img class="card-img-top" src="../images/aspirateur_robot_dv.jpg" alt="Card image cap">
							<div class="card-body">
								<h5 class="card-text">Star-Wars hoover</h5>
								<p class="price">649 &euro;</p>
								<a href="#" class="btn btn-primary"><i class="fas fa-cart-plus"></i> Add to cart</a>
								<button type="button" data-toggle="modal" data-toggle="tooltip" data-target="#hooverVador" class="btn btnInfo" data-placement="bottom" title="More details">
									<i class="fas fa-info"></i>
								</button>
							</div>
						</div>
					</div>
<!-- ROBOT HOOVER MODAL -->
					<div class="modal fade" id="hooverVador" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLongTitle">Star-Wars hoover - Samsung</h5>
									<h3> 649 &euro;</h3>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body row">
									<div class="card col-sm-6 modalImg">
										<img class="card-img-top" src="../images/aspirateur_robot_dv.jpg" alt="Card image cap">
										<div class="card-body">
											<h5 class="carac">Technical description :</h5>
											<ul class="carac">
												<li><span class="bold">Size :</span> 20 x 20 x 18 cm</li>
												<li><span class="bold">Power :</span> 500 W</li>
												<li><span class="bold">Color :</span> Black / Dark Vador design</li>
											</ul>
										</div>
									</div>
									<div class="col-sm-6 features">
										<p>Sensor: FullView Sensor™ 2.0</p>
										<p>Automatic Loading</p>
										<p>Wi-fi Control</p>
										<p>Intelligent Power Control</p>
										<p>Highlights: Connected robot vacuum cleaner for hard floors and carpets</p>
										<p>Cyclone Force vacuum technology</p>
										<p> Design Star Wars	</p>
									</div>								
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-card" data-toggle="modal" data-dismiss="modal"><i class="fas fa-cart-plus"></i> Add to cart</button>
								</div>
							</div>
						</div>
					</div>

<!-- CLASSICAL HOOVER -->
					<div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-2 ">				
						<div class="card">
							<img class="card-img-top" src="../images/aspirateur_fagor.jpg" alt="Card image cap">
							<div class="card-body">
								<h5 class="card-text">Classical hoover</h5>
								<p class="price">175 &euro;</p>
								<a href="#" class="btn btn-primary"><i class="fas fa-cart-plus"></i> Add to cart</a>
								<button type="button" data-toggle="modal" data-toggle="tooltip" data-target="#hooverClassic" class="btn btnInfo" data-placement="bottom" title="More details">
									<i class="fas fa-info"></i>
								</button>
							</div>
						</div>
					</div>
<!-- CLASSICAL HOOVER MODAL -->
					<div class="modal fade" id="hooverClassic" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLongTitle">Classical hoover - Fagor</h5>
									<h3> 175 &euro;</h3>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body row">
									<div class="card col-sm-6 modalImg">
										<img class="card-img-top" src="../images/aspirateur_fagor.jpg" alt="Card image cap">
										<div class="card-body">
											<h5 class="carac">Technical description :</h5>
											<ul class="carac">
												<li><span class="bold">Size :</span> 20 x 20 x 18 cm</li>
												<li><span class="bold">Power :</span> 500 W</li>
												<li><span class="bold">Color :</span> Black / Dark Vador design</li>
											</ul>
										</div>
									</div>
									<div class="col-sm-6 features">
										<p>Cleaning mode: Eco2 Level Cyclone.</p>
										<p>Maximum noise level: 76 dB.</p>
										<p>Cord length: 6 m.</p>
										<p>Filter type: Hepa filter.</p>
									</div>								
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-card" data-toggle="modal" data-dismiss="modal"><i class="fas fa-cart-plus"></i> Add to cart</button>
								</div>
							</div>
						</div>
					</div>

<!-- SMILEY HOOVER -->
					<div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-2 ">				
						<div class="card">
							<img class="card-img-top" src="../images/aspirateur_henry.jpg" alt="Card image cap">
							<div class="card-body">
								<h5 class="card-text">Smiley hoover</h5>
								<p class="price">158 &euro;</p>
								<a href="#" class="btn btn-primary"><i class="fas fa-cart-plus"></i> Add to cart</a>
								<button type="button" data-toggle="modal" data-toggle="tooltip" data-target="#smileyHoover" class="btn btnInfo" data-placement="bottom" title="More details">
									<i class="fas fa-info"></i>
								</button>
							</div>
						</div>
					</div>
<!-- SMILEY HOOVER MODAL -->
					<div class="modal fade" id="smileyHoover" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLongTitle">Smiley hoover - Henry</h5>
									<h3> 158 &euro;</h3>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body row">
									<div class="card col-sm-6">
										<img class="card-img-top modalImg" src="../images/aspirateur_henry.jpg" alt="Card image cap">
										<div class="card-body">
											<h5 class="carac">Technical description :</h5>
											<ul class="carac">
												<li><span class="bold">Size :</span> 34 x 34 x 34 cm</li>
												<li><span class="bold">Power :</span> 500 W</li>
												<li><span class="bold">Color :</span> Red</li>
											</ul>
										</div>
									</div>
									<div class="col-sm-6 features">
										<p> Power supply 230 V </p>
										<p>AC 50/60 Hz.</p>
										<p> Air flow rate 44 L/sec.</p>
										<p> Vacuum 2250 mm.</p>
										<p> Tank 8 L.</p>
										<p> Cable length: 10 m.</p>
										<p> Weight 8.5 kg.</p>
									</div>								
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-card" data-toggle="modal" data-dismiss="modal"><i class="fas fa-cart-plus"></i> Add to cart</button>
								</div>
							</div>
						</div>
					</div>


<!-- HOOVER TABLE -->
					<div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-2 ">				
						<div class="card">
							<img class="card-img-top" src="../images/aspirateur_de_table.jpg" alt="Card image cap">
							<div class="card-body">							
								<h5 class="card-text">Hoover table cleaner</h5>
								<p class="price">119 &euro;</p>
								<a href="#" class="btn btn-primary"><i class="fas fa-cart-plus"></i> Add to cart</a>
								<button type="button" data-toggle="modal" data-toggle="tooltip" data-target="#tableHoover" class="btn btnInfo" data-placement="bottom" title="More details">
									<i class="fas fa-info"></i>
								</button>
							</div>
						</div>
					</div>
<!-- HOOVER TABLE MODAL -->
					<div class="modal fade" id="tableHoover" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLongTitle">Hoover table cleaner - Alessi</h5>
									<h3> 119 &euro;</h3>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body row">
									<div class="card col-sm-6">
										<img class="card-img-top modalImg" src="../images/aspirateur_de_table.jpg" alt="Card image cap">
										<div class="card-body">
											<h5 class="carac">Technical description :</h5>
											<ul class="carac">
												<li><span class="bold">Size :</span> 38 x 11 x 11 cm</li>
												<li><span class="bold">Power :</span> 400 W</li>
												<li><span class="bold">Color :</span> Steel / White</li>
											</ul>
										</div>
									</div>
									<div class="col-sm-6 features">
										<p> Material: Stainless steel - Thermoplastic resin.</p>
										<p> Weight: 3.4 kg.</p>
										<p> Characteristics: Charger - nozzle for interstices and liquid nozzle.</p>
										<p> Suction power: 7l.	</p>
									</div>								
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-card" data-toggle="modal" data-dismiss="modal"><i class="fas fa-cart-plus"></i> Add to cart</button>
								</div>
							</div>
						</div>
					</div>



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