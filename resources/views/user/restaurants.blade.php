@extends('layouts.userapplayout')
@section('title','CampusEats - Restaurants')
@section('content')

  <!-- hero-section -->
  <section class="hero-section about gap" style="background-image: url(assets/img/x2.png)">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6" data-aos="fade-up"  data-aos-delay="200" data-aos-duration="300">
							<div class="about-text">
								<ul class="crumbs d-flex">
									<li><a href="userindex.html">Home</a></li>
									<li class="two"><a href="userindex.html"><i class="fa-solid fa-right-long"></i>Restaurants</a></li>
								</ul>
								<h2 style="color: #fff;">Restaurants</h2>
								<p>Egestas sed tempus urna et pharetra pharetra massa. Fermentum posuere urna nec tincidunt praesent semper.</p>
								<div class="restaurant">
									<div class="nice-select-one">
										<select class="nice-select Advice">
										  <option>Choose a Restaurant</option>
										  <option>Choose a Restaurant 1</option>
										  <option>Choose a Restaurant 2</option>
										  <option>Choose a Restaurant 3</option>
										  <option>Choose a Restaurant 4</option>
									</select>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6" data-aos="fade-up"  data-aos-delay="300" data-aos-duration="400">
							<div class="restaurants-girl-img food-photo-section">
								<img alt="man" src="assets/img/photo-11.png">
								<a href="restaurants.html#" class="one"><i class="fa-solid fa-burger"></i>Burgers</a>
								<a href="restaurants.html#" class="two"><i class="fa-solid fa-drumstick-bite"></i>Chicken</a>
								<a href="restaurants.html#" class="three"><i class="fa-solid fa-cheese"></i>Steaks</a>
								<a href="restaurants.html#" class="for"><i class="fa-solid fa-pizza-slice"></i>Fish</a>
							</div>
						</div>
					</div>
				</div>
	</section><br>

	<!-- banner -->
	<section class="banner" data-aos="fade-up"  data-aos-delay="200" data-aos-duration="300">
		<div class="container">
			<div class="banner-img" style="background-image: url(assets/img/food-4.jpg);">
				<div class="banner-logo">
					<h4>Restaurant<br>of the Month
					<span class="chevron chevron--left"></span>
				</h4>
					<div class="banner-wilmington">
						<img alt="logo" src="assets/img/logo-s.jpg">
						<h6>The Wilmington</h6>
					</div>
				</div>

				<div class="row">
					<div class="col-xl-6 col-lg-12">
						<div class="choose-lunches">

							<h2>Choose 2 lunches</h2>
							<h3>pay for one</h3>
							<a href="restaurants.html#" class="button button-2 non">Order Now<i class="fa-solid fa-arrow-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- best-restaurants -->
	<section class="best-restaurants gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-6" data-aos="flip-up"  data-aos-delay="200" data-aos-duration="300">
					<div class="logos-card restaurant-page ">
						<img alt="logo" src="assets/img/logos-2.jpg">
							<div class="cafa">
								<h4><a href="restaurants.html#">Kennington Lane Cafe</a></h4>
								<div>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-regular fa-star"></i>
								</div>
								<div class="cafa-button">
										<a href="restaurants.html#">american</a>
										<a href="restaurants.html#">steakhouse</a>
										<a class="end" href="restaurants.html#">seafood</a>
								</div>
								<p>Non enim praesent elementum facilisis leo vel fringilla. Lectus proin nibh nisl condimentum id. Quis varius quam quisque id diam vel.</p>
							</div>
					</div>
				</div>
				<div class="col-lg-6" data-aos="flip-up"  data-aos-delay="300" data-aos-duration="400">
					<div class="logos-card restaurant-page">
						<img alt="logo" src="assets/img/logos-1.jpg">
							<div class="cafa">
								<h4><a href="restaurant-card.html">The Wilmington</a></h4>
								<div>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
								</div>
								<div class="cafa-button">
										<a href="restaurants.html#">american</a>
										<a href="restaurants.html#">steakhouse</a>
										<a class="end" href="restaurants.html#">seafood</a>
								</div>
								<p>Vulputate enim nulla aliquet porttitor lacus luctus. Suscipit adipiscing bibendum est ultricies integer. Sed adipiscing diam donec adipiscing tristique.</p>
							</div>
					</div>
				</div>
				<div class="col-lg-6" data-aos="flip-up"  data-aos-delay="400" data-aos-duration="500">
					<div class="logos-card restaurant-page two">
						<img alt="logo" src="assets/img/logos-3.jpg">
							<div class="cafa">
								<h4><a href="restaurant-card.html">Kings Arms</a></h4>
								<div>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-regular fa-star-half-stroke"></i>
								</div>
								<div class="cafa-button">
										<a href="restaurants.html#">healthy</a>
										<a href="restaurants.html#">steakhouse</a>
										<a class="end" href="restaurants.html#">vegetarian</a>
								</div>
								<p>Tortor at risus viverra adipiscing at in tellus. Cras semper auctor neque vitae tempus. Dui accumsan sit amet nulla facilisi. Sed adipiscing diam .</p>
							</div>
					</div>
				</div>
				<div class="col-lg-6" data-aos="flip-up"  data-aos-delay="500" data-aos-duration="600">
					<div class="logos-card restaurant-page two">
						<img alt="logo" src="assets/img/logos-4.jpg">
							<div class="cafa">
								<h4><a href="restaurant-card.html">The Victoria</a></h4>
								<div>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-regular fa-star"></i>
								</div>
								<div class="cafa-button">
										<a href="restaurants.html#">american</a>
										<a href="restaurants.html#">steakhouse</a>
										<a class="end" href="restaurants.html#">seafood</a>
								</div>
								<p>Non enim praesent elementum facilisis leo vel fringilla. Lectus proin nibh nisl condimentum id. Quis varius quam quisque id diam vel.</p>
							</div>
					</div>
				</div>
				<div class="col-lg-6" data-aos="flip-up"  data-aos-delay="200" data-aos-duration="300">
					<div class="logos-card restaurant-page two">
						<img alt="logo" src="assets/img/logos-5.jpg">
							<div class="cafa">
								<h4><a href="restaurant-card.html">Lanes of London</a></h4>
								<div>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
								</div>
								<div class="cafa-button">
										<a href="restaurants.html#">american</a>
										<a href="restaurants.html#">steakhouse</a>
										<a class="end" href="restaurants.html#">seafood</a>
								</div>
								<p>At erat pellentesque adipiscing commodo elit at imperdiet dui. Suspendisse faucibus interdum posuere
								lorem. Elit sed vulputate mi sit.</p>
							</div>
					</div>
				</div>
				<div class="col-lg-6" data-aos="flip-up"  data-aos-delay="300" data-aos-duration="400">
					<div class="logos-card restaurant-page two">
						<img alt="logo" src="assets/img/logos-6.jpg">
							<div class="cafa">
								<h4><a href="restaurant-card.html">The Andover Arms</a></h4>

								<div>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-regular fa-star-half-stroke"></i>
								</div>
								<div class="cafa-button">
										<a href="restaurants.html#">healthy</a>
										<a href="restaurants.html#">steakhouse</a>
										<a class="end" href="restaurants.html#">vegetarian</a>
								</div>
								<p>Lacus vestibulum sed arcu non odio euismod lacinia at. Id neque aliquam vestibulum morbi. Ante metus dictum ullamcorper a lacus.</p>
							</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<!-- subscribe-section -->
	<section class="subscribe-section gap" style="background:#fcfcfc">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6" data-aos="flip-up"  data-aos-delay="200" data-aos-duration="300">
					<div class="img-subscribe">
						<img alt="Illustration" src="assets/img/illustration-4.png">
					</div>
				</div>
				<div class="col-lg-5 offset-lg-1" data-aos="flip-up"  data-aos-delay="300" data-aos-duration="400">
					<div class="get-the-menu">
						<h2>Get the menu of your favorite restaurants every day</h2>
						<form>
							<i class="fa-regular fa-bell"></i>
							<input type="text" name="email" placeholder="Enter email address">
							<button class="button button-2">Subscribe</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection