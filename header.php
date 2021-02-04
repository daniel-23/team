<header>
	<div class="row">
		<div class="col-md-3 top-info text-left mt-lg-4">
			<h6>Need Help</h6>
			<ul>
				<li>
					<i class="fas fa-phone"></i> Call
				</li>
				<li class="number-phone mt-3">12345678099</li>
			</ul>
		</div>
		<div class="col-md-6 logo-w3layouts text-center">
			<h1 class="logo-w3layouts">
				<a class="navbar-brand" href="index.php">
					Team Shop </a>
			</h1>
		</div>

		<div class="col-md-3 top-info-cart text-right mt-lg-4">
			<ul class="cart-inner-info">
				
				<li class="galssescart galssescart2 cart cart box_1">
					<form action="index.html#" method="post" class="last">
						<input type="hidden" name="cmd" value="_cart">
						<input type="hidden" name="display" value="1">
						<button class="top_googles_cart" type="submit" name="submit" value="">
							Carrito
							<i class="fas fa-cart-arrow-down"></i>
						</button>
					</form>
				</li>
			</ul>
			<!---->
			<div class="overlay-login text-left">
				<button type="button" class="overlay-close1">
					<i class="fa fa-times" aria-hidden="true"></i>
				</button>
				<div class="wrap">
					<h5 class="text-center mb-4">Login Now</h5>
					<div class="login p-5 bg-dark mx-auto mw-100">
						<form action="index.html#" method="post">
							<div class="form-group">
								<label class="mb-2">Email address</label>
								<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required="">
								<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
							</div>
							<div class="form-group">
								<label class="mb-2">Password</label>
								<input type="password" class="form-control" id="exampleInputPassword1" placeholder="" required="">
							</div>
							<div class="form-check mb-2">
								<input type="checkbox" class="form-check-input" id="exampleCheck1">
								<label class="form-check-label" for="exampleCheck1">Check me out</label>
							</div>
							<button type="submit" class="btn btn-primary submit mb-4">Sign In</button>

						</form>
					</div>
					<!---->
				</div>
			</div>
			<!---->
		</div>
	</div>
	<div class="search">
		
		<div class="overlay overlay-door">
			<button type="button" class="overlay-close">
				<i class="fa fa-times" aria-hidden="true"></i>
			</button>
			<form action="index.html#" method="post" class="d-flex">
				<input class="form-control" type="search" placeholder="Search here..." required="">
				<button type="submit" class="btn btn-primary submit">
					<i class="fas fa-search"></i>
				</button>
			</form>

		</div>
		<!-- open/close -->
	</div>
	<label class="top-log mx-auto"></label>
	<nav class="navbar navbar-expand-lg navbar-light bg-light top-header mb-2">

		<button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"> </span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav nav-mega mx-auto">
				<li class="nav-item active">
					<a class="nav-link ml-lg-0" href="index.php">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">About</a>
				</li>
				
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="index.html#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true"
					    aria-expanded="false">
						Categorias
					</a>
					<ul class="dropdown-menu mega-menu ">
						<li>
							<div class="row">
								<div class="col-md-4 media-list span4 text-left">
									
								</div>
								<div class="col-md-4 media-list span4 text-left">
									<h5 class="tittle-w3layouts-sub"> Categorias </h5>
									<ul>
										<?php foreach ($productModel->getCategoriesModel() as $category) :?>
											<li class="media-mini mt-3">
												<a href="categories.php?cat=<?= $category['id'] ?>"><?= $category['name'] ?></a>
											</li>
										<?php endforeach; ?>
										
										
									</ul>
									
									

								</div>
								<div class="col-md-4 media-list span4 text-left">

									<h5 class="tittle-w3layouts-sub-nav">Tittle goes here </h5>
									<div class="media-mini mt-3">
										<a href="shop.html">
											<img src="images/g1.jpg" class="img-fluid" alt="">
										</a>
									</div>

								</div>
							</div>
							<hr>
						</li>
					</ul>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="ofertas.php">Ofertas</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Contact</a>
				</li>
			</ul>

		</div>
	</nav>
</header>


<!-- banner -->
<div class="banner">
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="carousel-item active">
				<div class="carousel-caption text-center">
					<h3>Men’s eyewear
						<span>Cool summer sale 50% off</span>
					</h3>
					<a href="index.php" class="btn btn-sm animated-button gibson-three mt-4">Shop Now</a>
				</div>
			</div>
			<div class="carousel-item item2">
				<div class="carousel-caption text-center">
					<h3>Women’s eyewear
						<span>Want to Look Your Best?</span>
					</h3>
					<a href="index.php" class="btn btn-sm animated-button gibson-three mt-4">Shop Now</a>

				</div>
			</div>
			<div class="carousel-item item3">
				<div class="carousel-caption text-center">
					<h3>Men’s eyewear
						<span>Cool summer sale 50% off</span>
					</h3>
					<a href="index.php" class="btn btn-sm animated-button gibson-three mt-4">Shop Now</a>

				</div>
			</div>
			<div class="carousel-item item4">
				<div class="carousel-caption text-center">
					<h3>Women’s eyewear
						<span>Want to Look Your Best?</span>
					</h3>
					<a href="index.php" class="btn btn-sm animated-button gibson-three mt-4">Shop Now</a>
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="index.html#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="index.html#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<!--//banner -->
</div>