<!doctype html>
<html>
<head>
	<title>CR Gourmet Coffee</title>
	<meta charset='utf-8'>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
	<link rel='stylesheet' type='text/css' href='css/stylesheet.css'>
	<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js'></script>
	<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
</head>
<body>
	<header class='col-xs-12'>
		<nav id='navBar' class="navbar navbar-inverse navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>                        
					</button>
					<a class="navbar-brand" href="http://crgourmetcoffee.esy.es/">cr<span>gourmet</span><span>coffee.com</span></a>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul id='mainMenu' class="nav navbar-nav">
						<li><a href="#">Regions</a></li>
						<li><a href="#">Farms</a></li>
						<li><a href="#">Awards</a></li>
						<li><a href="#">Search</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a>
						</li>
						<li>
							<a href="#"><span class="glyphicon glyphicon-log-in"></span> 2</a>
						</li> 
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<div class='clearfix'></div>
	<main>
		<section class='pagetitle'>
				<h2>Farm Information</h2>
		</section>
		<section id='farmInfoSection'>
			<div class='container-fluid'>
				<div id='farmInfoContainer' class='row'>
					<div id='farmInfoHeading' class='col-xs-12'>
						<center><h3>Tortuga</h3></center>
					</div>
					<div id="farmPicContainer" class='col-xs-12 col-md-offset-3 col-md-6 col-lg-offset-0 col-lg-6'>
						<img src="imgs/tortuga1.png" id="farmPic">
					</div>
					<div id='farmInfoDetailsContainer' class='col-md-12 col-lg-6'>
						<div class='farmInfoCards col-lg-6 col-md-6'>
							<div class='farmInfoIcons'>
								<img src="imgs/icon1.png">
							</div>
							<h4>Description</h4>
							<p>For more than a decade, the Caballero family has been providing Intelligentsia with beautiful coffees we are proud to offer as La Tortuga. We enjoy this coffee's syrupy body and clean flavors of plum, brown sugar, and tamarind.</p>
						</div>
						<div class='farmInfoCards col-lg-6 col-md-6'>
							<div class='farmInfoIcons'>
								<img src="imgs/icon2.png">
							</div>
							<h4>Information</h4>
							<p><span>Elevation: </span>1200-1500 m.a.s.l.</p>
							<p><span>Harvest: </span>November-April </p>
							<p><span>Species: </span>Arabica</p>
							<p><span>Cultivar: </span>Bourbon, Geisha </p>
							<p><span>Certifications: </span>Organic</p>
						</div>
						<div class='farmInfoCards col-lg-6 col-md-6'>
							<div class='farmInfoIcons'>
								<img src="imgs/icon3.png">
							</div>
							<h4>Awards</h4>
								<li>2nd Cup of Excellence 2015</li>
								<li>4th Cup of Excellence 2013</li>
						</div>
						<div class='farmInfoCards col-lg-6 col-md-6'>
							<div class='farmInfoIcons'>
								<img src="imgs/icon4.png">
							</div>
							<h4>Location</h4>
							<img id='mapImg' src="imgs/map.jpg">
						</div>
					</div>
				</div>
			</div>
		</section>
		<div class='clearfix'></div>
		<section>
			<div id='carouselHeading' class='col-xs-12'>
				<center><h3>Roasted Coffee</h3></center>
			</div>
			<div class='clearfix'></div>
			<div class="container">
				<div class="row">
					<div class="span12">
			    	    <div class="well"> 
			                <div id="myCarousel" class="carousel slide">
				                <ol class="carousel-indicators">
				                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				                    <li data-target="#myCarousel" data-slide-to="1" class=""></li>
				                    <li data-target="#myCarousel" data-slide-to="2" class=""></li>
				                </ol>
				                <div class="carousel-inner">
					                <div class="item active">
					                	<div class="row-fluid">
											<div class="carouselCards col-xs-12 col-md-4">
												<div class="productThumbnails">
													<div class='prodThumbInside'>
														<div class="productThumbnailsHeadings">
															<h4>Chumbal</h4>
														</div>
														<img src="imgs/coffeeBag1.png">
														<p>340g/12 oz</p>
														<div class='productDetailsContainer row'>
															<div class='productDetails col-xs-5 col-xs-offset-1'>
																<p>Whole Bean, Ground, Whole Bean</p>
															</div>
															<a href="#" class='productDetails price col-xs-5 col-md-5'>
																<p>$20.00</p>
															</a>
														</div>
														<div class='productDetailsContainer row'>
															<div class='productDetails col-xs-5 col-xs-offset-1'>
																<div class="rating">
																	<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
																</div>
															</div>
															<a href="#" class='productDetails col-xs-5 col-md-5'>
																<p>5 reviews</p>
															</a>
														</div>
													</div>
												</div>
											</div>
					                	</div>
					                	<div class="row-fluid">
											<div class="carouselCards col-xs-12 col-md-4">
												<div class="productThumbnails">
													<div class='prodThumbInside'>
														<div class="productThumbnailsHeadings">
															<h4>Solela</h4>
														</div>
														<img src="imgs/coffeeBag2.png">
														<p>340g/12 oz</p>
														<div class='productDetailsContainer row'>
															<div class='productDetails col-xs-5 col-xs-offset-1'>
																<p>Whole Bean, Ground, Whole Bean</p>
															</div>
															<a href="#" class='productDetails price col-xs-5 col-md-5'>
																<p>$20.00</p>
															</a>
														</div>
														<div class='productDetailsContainer row'>
															<div class='productDetails col-xs-5 col-xs-offset-1'>
																<div class="rating">
																	<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
																</div>
															</div>
															<a href="#" class='productDetails col-xs-5 col-md-5'>
																<p>5 reviews</p>
															</a>
														</div>
													</div>
												</div>
											</div>
					                	</div>
					                	<div class="row-fluid">
											<div class="carouselCards col-xs-12 col-md-4">
												<div class="productThumbnails">
													<div class='prodThumbInside'>
														<div class="productThumbnailsHeadings">
															<h4>Reeba</h4>
														</div>
														<img src="imgs/coffeeBag3.png">
														<p>340g/12 oz</p>
														<div class='productDetailsContainer row'>
															<div class='productDetails col-xs-5 col-xs-offset-1'>
																<p>Whole Bean, Ground, Whole Bean</p>
															</div>
															<a href="#" class='productDetails price col-xs-5 col-md-5'>
																<p>$20.00</p>
															</a>
														</div>
														<div class='productDetailsContainer row'>
															<div class='productDetails col-xs-5 col-xs-offset-1'>
																<div class="rating">
																	<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
																</div>
															</div>
															<a href="#" class='productDetails col-xs-5 col-md-5'>
																<p>5 reviews</p>
															</a>
														</div>
													</div>
												</div>
											</div>
					                	</div>
					                </div>
					                 
					                <div class="item">
					                	<div class="row-fluid">
											<div class="carouselCards col-xs-12 col-md-4">
												<div class="productThumbnails">
													<div class='prodThumbInside'>
														<div class="productThumbnailsHeadings">
															<h4>Reeba</h4>
														</div>
														<img src="imgs/coffeeBag2.png">
														<p>340g/12 oz</p>
														<div class='productDetailsContainer row'>
															<div class='productDetails col-xs-5 col-xs-offset-1'>
																<p>Whole Bean, Ground, Whole Bean</p>
															</div>
															<a href="#" class='productDetails price col-xs-5 col-md-5'>
																<p>$20.00</p>
															</a>
														</div>
														<div class='productDetailsContainer row'>
															<div class='productDetails col-xs-5 col-xs-offset-1'>
																<div class="rating">
																	<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
																</div>
															</div>
															<a href="#" class='productDetails col-xs-5 col-md-5'>
																<p>5 reviews</p>
															</a>
														</div>
													</div>
												</div>
											</div>
					                	</div>
					                	<div class="row-fluid">
											<div class="carouselCards col-xs-12 col-md-4">
												<div class="productThumbnails">
													<div class='prodThumbInside'>
														<div class="productThumbnailsHeadings">
															<h4>Chumbal</h4>
														</div>
														<img src="imgs/coffeeBag3.png">
														<p>340g/12 oz</p>
														<div class='productDetailsContainer row'>
															<div class='productDetails col-xs-5 col-xs-offset-1'>
																<p>Whole Bean, Ground, Whole Bean</p>
															</div>
															<a href="#" class='productDetails price col-xs-5 col-md-5'>
																<p>$20.00</p>
															</a>
														</div>
														<div class='productDetailsContainer row'>
															<div class='productDetails col-xs-5 col-xs-offset-1'>
																<div class="rating">
																	<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
																</div>
															</div>
															<a href="#" class='productDetails col-xs-5 col-md-5'>
																<p>5 reviews</p>
															</a>
														</div>
													</div>
												</div>
											</div>
					                	</div>
					                	<div class="row-fluid">
											<div class="carouselCards col-xs-12 col-md-4">
												<div class="productThumbnails">
													<div class='prodThumbInside'>
														<div class="productThumbnailsHeadings">
															<h4>Solela</h4>
														</div>
														<img src="imgs/coffeeBag1.png">
														<p>340g/12 oz</p>
														<div class='productDetailsContainer row'>
															<div class='productDetails col-xs-5 col-xs-offset-1'>
																<p>Whole Bean, Ground, Whole Bean</p>
															</div>
															<a href="#" class='productDetails price col-xs-5 col-md-5'>
																<p>$20.00</p>
															</a>
														</div>
														<div class='productDetailsContainer row'>
															<div class='productDetails col-xs-5 col-xs-offset-1'>
																<div class="rating">
																	<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
																</div>
															</div>
															<a href="#" class='productDetails col-xs-5 col-md-5'>
																<p>5 reviews</p>
															</a>
														</div>
													</div>
												</div>
											</div>
					                	</div>
					                </div>
					                 
					                <div class="item">
					                	<div class="row-fluid">
											<div class="carouselCards col-xs-12 col-md-4">
												<div class="productThumbnails">
													<div class='prodThumbInside'>
														<div class="productThumbnailsHeadings">
															<h4>Solela</h4>
														</div>
														<img src="imgs/coffeeBag3.png">
														<p>340g/12 oz</p>
														<div class='productDetailsContainer row'>
															<div class='productDetails col-xs-5 col-xs-offset-1'>
																<p>Whole Bean, Ground, Whole Bean</p>
															</div>
															<a href="#" class='productDetails price col-xs-5 col-md-5'>
																<p>$20.00</p>
															</a>
														</div>
														<div class='productDetailsContainer row'>
															<div class='productDetails col-xs-5 col-xs-offset-1'>
																<div class="rating">
																	<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
																</div>
															</div>
															<a href="#" class='productDetails col-xs-5 col-md-5'>
																<p>5 reviews</p>
															</a>
														</div>
													</div>
												</div>
											</div>
					                	</div>
					                	<div class="row-fluid">
											<div class="carouselCards col-xs-12 col-md-4">
												<div class="productThumbnails">
													<div class='prodThumbInside'>
														<div class="productThumbnailsHeadings">
															<h4>Reeba</h4>
														</div>
														<img src="imgs/coffeeBag1.png">
														<p>340g/12 oz</p>
														<div class='productDetailsContainer row'>
															<div class='productDetails col-xs-5 col-xs-offset-1'>
																<p>Whole Bean, Ground, Whole Bean</p>
															</div>
															<a href="#" class='productDetails price col-xs-5 col-md-5'>
																<p>$20.00</p>
															</a>
														</div>
														<div class='productDetailsContainer row'>
															<div class='productDetails col-xs-5 col-xs-offset-1'>
																<div class="rating">
																	<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
																</div>
															</div>
															<a href="#" class='productDetails col-xs-5 col-md-5'>
																<p>5 reviews</p>
															</a>
														</div>
													</div>
												</div>
											</div>
					                	</div>
					                	<div class="row-fluid">
											<div class="carouselCards col-xs-12 col-md-4">
												<div class="productThumbnails">
													<div class='prodThumbInside'>
														<div class="productThumbnailsHeadings">
															<h4>Chumbal</h4>
														</div>
														<img src="imgs/coffeeBag2.png">
														<p>340g/12 oz</p>
														<div class='productDetailsContainer row'>
															<div class='productDetails col-xs-5 col-xs-offset-1'>
																<p>Whole Bean, Ground, Whole Bean</p>
															</div>
															<a href="#" class='productDetails price col-xs-5 col-md-5'>
																<p>$20.00</p>
															</a>
														</div>
														<div class='productDetailsContainer row'>
															<div class='productDetails col-xs-5 col-xs-offset-1'>
																<div class="rating">
																	<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
																</div>
															</div>
															<a href="#" class='productDetails col-xs-5 col-md-5'>
																<p>5 reviews</p>
															</a>
														</div>
													</div>
												</div>
											</div>
					                	</div>
					                </div>
				                </div>
				                <a class="left carousel-control" href="#myCarousel" data-slide="prev"></a>
				                <a class="right carousel-control" href="#myCarousel" data-slide="next"></a>
			                </div>
			            </div>
					</div>
				</div>
			</div>

		</section>
	</main>
	<div class='clearfix'></div>
	<footer class='footer'>
		<nav>
			<div class="container-fluid">
				<div class="nav navbar-nav">
					<ul id='quickLinks' class="nav navbar-nav">
						<li><a href="#">About</a></li>
						<li><a href="#">Contact</a></li>
						<li><a href="#">Terms of Use</a></li>
						<li><a href="#">Help</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="#"><div id='facebook' class="socialIcon">facebook</div></a>
						</li>
						<li>
							<a href="#"><div id='twitter' class="socialIcon">twitter</div></a>
						</li> 
				    </ul>
				</div>
			</div>
		</nav>
		<div id='credits' class='container'>
			<center>Copyright &#169; Universidad Nacional, 2017</center>
		</div>
	</footer>
	<script src='js/logicUI.js'></script>
</body>
</html>

<!--  

***********************************************************************
http://bootsnipp.com/snippets/featured/thumbnail-carousel  

<div class="container">
	<div class="row">
		<div class="span12">
    	    <div class="well"> 
                <div id="myCarousel" class="carousel slide">
                 
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class=""></li>
                    <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                </ol>
                <div class="carousel-inner">
                    
                <div class="item">
                	<div class="row-fluid">
                	  <div class="span3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                	  <div class="span3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                	  <div class="span3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                	  <div class="span3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                	</div>
                </div>
                 
                <div class="item active">
                	<div class="row-fluid">
                		<div class="span3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                		<div class="span3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                		<div class="span3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                		<div class="span3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                	</div>
                </div>
                 
                <div class="item">
                	<div class="row-fluid">
                		<div class="span3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                		<div class="span3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                		<div class="span3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                		<div class="span3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                	</div>
                </div>
                 
                </div>
                 
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
                </div>
                 
            </div>
		</div>
	</div>
</div>
***********************************************************************

-->