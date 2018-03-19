<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href= "css/style.css">
	<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link rel="stylesheet" type="text/css" href="js/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="js/slick/slick-theme.css"/>
	<link rel="stylesheet" type="text/css" href="js/lightbox/dist/slick-lightbox.css"/>
	<link href="https://fonts.googleapis.com/css?family=PT+Sans|Raleway" rel="stylesheet">
	<link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<!-- Top Bar -->
		<div class="row">
			<div class="top-bar">
				<ul>
					<li><i class="fas fa-phone-volume"></i>  <a href="#">+370 644 54348</a></li>
					<li><i class="far fa-envelope"></i>  <a href="#">info@gamestar.eu</a></li>
				</ul>
			</div>
		</div>
		<!-- Header -->
		<div class="row">
			<div class="logo">
				<img src="images/logo.png">
			</div>
			<div class="cart-menu-mobile">
				<span class="cart-menu-icon-mobile">
					<i class="fas fa-cart-arrow-down"></i>
				</span>
			</div>
			<div class="nav d-flex justify-content-center">
				<nav class="navbar navbar-expand-lg navbar-light bg-light">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav mr-auto">
							<li class="nav-item active">
								<a class="nav-link btn btn-outline-danger" href="http://localhost/voldemaras/laravel-front-end/front-end/">Home <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link btn btn-danger" href="#">Order</a>
							</li>
							<li class="nav-item">
								<a class="nav-link btn btn-danger" href="#">Profile</a>
							</li>
							<li class="nav-item">
								<a class="nav-link btn btn-danger" href="#">Contact</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
			<div class="cart-menu">
				<span class="cart-menu-inside">
					<span class="cart-menu-icon">
						<i class="fas fa-cart-arrow-down"></i>
					</span>
					<span class="cart-menu-price">Items: 0</span>
					<span class="cart-menu-price">€200</span>
				</span>
			</div>
		</div>
		<!-- Slider -->
		<div id="search" class="row justify-content-center">
			<div class="slider">
				<div>
					<img src="images/slides/1.jpg" />
				</div>
				<div>
					<img src="images/slides/2.jpg" />
				</div>
				<div>
					<img src="images/slides/3.jpg" />
				</div>
				<div>
					<img src="images/slides/4.jpg" />
				</div>
			</div>
			<div class="slider-arrows-left left"><i class="fas fa-arrow-circle-left"></i></div>
			<div class="slider-arrows-right right"><i class="fas fa-arrow-circle-right right"></i></div>
		</div>
		<!-- Search -->
		<div class="row">
			<div class="col-12 d-flex justify-content-center pt-3 pb-3 search-bar-back">
				<form class="form-inline">
					<input class="form-control mr-sm-2 search-inputas" type="search" placeholder="Search" aria-label="Search">
					<button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
				</form>
			</div>
		</div>
		<!-- Sidebar -->
		<div class="row">
			<div id="sidebar" class="col-2">
				<div id="categories" class="row">
					<div class="col-12 text-center">
						<h4>Categories</h4>
					</div>
					<div class="sidebar-categories">
						<ul class="list-group">
							<li>Cras justo odio</li>
							<li>Dapibus ac facilisis in</li>
							<li>Morbi leo risus</li>
							<li>Porta ac consectetur ac</li>
							<li>Vestibulum at eros</li>
							<li>Vestibulum at eros</li>
							<li>Vestibulum at eros</li>
							<li>Vestibulum at eros</li>
							<li>Vestibulum at eros</li>
							<li>Vestibulum at eros</li>
							<li>Vestibulum at eros</li>
						</ul>
					</div>
				</div>
				<!-- Most popular -->
				<hr>
				<div id="popular" class="row">
					<div class="col-12 text-center">
						<h4>Most Popular</h4>
					</div>
					<div class="col-12">
						<div class="most-popular-prod-sidebar text-center">
							<img id="popular" src="images/fc4.jpg"class="img-thumbnail">
							<h6 class="mt-2">Half Life</h6>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							<div class="row">
								<div class="input-group mb-3 d-flex justify-content-center">
									<input class="counter-inputas" type="number" name="amount">
									<div class="input-group-append">
										<a class="btn btn-dark" href="#">Add to Cart</a>
									</div>
								</div>
							</div>
						</div>
						<div class="most-popular-prod-sidebar text-center">
							<img id="popular" src="images/fc4.jpg"class="img-thumbnail">
							<h6 class="mt-2">Half Life</h6>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							<div class="row">
								<div class="input-group mb-3 d-flex justify-content-center">
									<input class="counter-inputas" type="number" name="amount">
									<div class="input-group-append">
										<a class="btn btn-dark" href="#">Add to Cart</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Single page -->
			
			<div class="col-10 mt-5 single-product">
				<div class="row single-product-title">
					<div class="col-lg-6 col-md-12 single-product-title-main">
						<h1>Half Life</h1> 
					</div>
					<div class="col-lg-6 col-md-12 single-product-title-pre">
						<p>Pre-Order Now</p>
					</div>
				</div>
				<div class="row slider-mobile-margin">
					<div class="col-lg-5 col-md-12">
						<div class="row">
							<div class="col-12">
								<div id="gll" class="slider-for">
									<div class="single-product-image d-flex justify-content-center"><a href="images/packshots/1.jpg"><img src="images/packshots/1.jpg"></a></div>
									<div class="single-product-image d-flex justify-content-center"><a href="images/packshots/2.jpg"><img src="images/packshots/2.jpg"></a></div>
									<div class="single-product-image d-flex justify-content-center"><a href="images/packshots/3.jpg"><img src="images/packshots/3.jpg"></a></div>
									<div class="single-product-image d-flex justify-content-center"><a href="images/packshots/4.jpg"><img src="images/packshots/4.jpg"></a></div>
									<div class="single-product-image d-flex justify-content-center"><a href="images/packshots/5.jpg"><img src="images/packshots/5.jpg"></a></div>
									<div class="single-product-image d-flex justify-content-center"><a href="images/packshots/4.jpg"><img src="images/packshots/4.jpg"></a></div>
									<div class="single-product-image d-flex justify-content-center"><a href="images/packshots/3.jpg"><img src="images/packshots/3.jpg"></a></div>
									<div class="single-product-image d-flex justify-content-center"><a href="images/packshots/2.jpg"><img src="images/packshots/2.jpg"></a></div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-12 d-flex justify-content-center">
								<div class="slider-nav mt-3">
									<div class="d-flex justify-content-center"><img src="images/packshots/1.jpg"></div>
									<div class="d-flex justify-content-center"><img src="images/packshots/2.jpg"></div>
									<div class="d-flex justify-content-center"><img src="images/packshots/3.jpg"></div>
									<div class="d-flex justify-content-center"><img src="images/packshots/4.jpg"></div>
									<div class="d-flex justify-content-center"><img src="images/packshots/5.jpg"></div>
									<div class="d-flex justify-content-center"><img src="images/packshots/2.jpg"></div>
									<div class="d-flex justify-content-center"><img src="images/packshots/1.jpg"></div>
									<div class="d-flex justify-content-center"><img src="images/packshots/2.jpg"></div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-10 mt-5 pl-5 single-info">
								<p>Category: Strategy</p>
								<p>EAN: 56dsa41f56ads1f</p>
								<p>Platform: XBOX</p>
								<p>Publisher: Game Star</p>
								<p>Pegi Rating: 10</p>
								<p>Release date: 2017-08-15</p>
							</div>
						</div>

					</div>
					<div class="col-lg-7 col-md-12">

						<div class="row">
							<div class="col-lg-12 col-md-12 single-price-block">
								<div class="row">
									<div class="col-lg-1 col-md-6">
										<p>Price:</p>
									</div>
									<div class="col-lg-2 col-md-6">
										<h3>€50</h3>
									</div>
									<div class="col-lg-1 col-md-6">
										<p>Stock:</p>
									</div>
									<div class="col-lg-2 col-md-6">
										<h3>50</h3>
									</div>
									<div class="col-lg-6 col-md-12 single-price-block-button">
										<div class="input-group mt-1 mb-1 d-flex justify-content-center">
											<input class="counter-inputas" type="number" name="amount">
											<div class="input-group-append">
												<a class="btn btn-dark" href="#">Add to Cart</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-12 text-justify mt-3">
								<p>Just Sing has players singing or lip-syncing their way to living room or online fame through an epic tracklist that includes songs from Justin Bieber, Meghan Trainor, Sia, One Direction and Queen. With more than 40 tracks to choose from including classic hits like Queen’s “I Want to Break Free” as well as today’s hottest tracks like “What Do You Mean?” from Justin Bieber, players will unleash their inner star and can either record their voice or lip-sync along. All Just Sing moments can be customized with themes and filters, letting players get creative with their videos, and are easily sharable with friends and the Just Sing community.</p>
							</div>
						</div>
						<div class="row">
							<div class="col-12 mt-3">
								<iframe width="100%" height="315" src="https://www.youtube.com/embed/i9bC1mYuiK0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
							</div>
						</div>

					</div>
				</div>
					<div class="col-12 mt-5">
						<h4>Related products</h4>
					</div>
					<div class="row mt-3">
						<div class="col-lg-3 col-md-12 related-products d-flex justify-content-center">
							<img src="images/packshots/1.jpg">
						</div>
						<div class="col-lg-3 col-md-12 related-products d-flex justify-content-center">
							<img src="images/packshots/1.jpg">
						</div>
						<div class="col-lg-3 col-md-12 related-products d-flex justify-content-center">
							<img src="images/packshots/1.jpg">
						</div>
						<div class="col-lg-3 col-md-12 related-products d-flex justify-content-center">
							<img src="images/packshots/1.jpg">
						</div>
					</div>
			</div>
		</div>
		<!-- New arrivals -->
		<hr>
		<div class="row">
			<div class="col-12 text-center">
				<h4>New arrivals</h4>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-2 karuseles-arrow-containeris d-flex justify-content-center">
				<div class="karuseles-arrow prev"><i class="fas fa-caret-left"></i>
				</div>
			</div>
			<div class="col-sm-8">
				<div class="karusele">
					<div class="karuseles-img">
						<img class="gallery" src="images/fc4.jpg">
						<h5>Half Life</h5>
					</div>
					<div class="karuseles-img">
						<img class="gallery" src="images/fc4.jpg">
						<h5>Half Life</h5>
					</div>
					<div class="karuseles-img">
						<img class="gallery" src="images/fc4.jpg">
						<h5>Half Life</h5>
					</div>
					<div class="karuseles-img">
						<img class="gallery" src="images/fc4.jpg">
						<h5>Half Life</h5>
					</div>
					<div class="karuseles-img">
						<img class="gallery" src="images/fc4.jpg">
						<h5>Half Life</h5>
					</div>
					<div class="karuseles-img">
						<img class="gallery" src="images/fc4.jpg">
						<h5>Half Life</h5>
					</div>
					<div class="karuseles-img">
						<img class="gallery" src="images/fc4.jpg">
						<h5>Half Life</h5>
					</div>
				</div>
			</div>
			<div class="col-sm-2 karuseles-arrow-containeris d-flex justify-content-center">
				<div class="karuseles-arrow next"><i class="fas fa-caret-right"></i></div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 mt-5 text-center footer">
				<p>Copyright © GameStar 2018</p>
			</div>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/slick/slick.min.js"></script>
	<script src="js/lightbox/dist/slick-lightbox.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/main.js"></script>
</body>
</html>