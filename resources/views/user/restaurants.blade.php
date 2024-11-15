@extends('layouts.userapplayout')
@section('title','CampusEats - Restaurants')
@section('content')

  <!-- hero-section -->
  <section class="hero-section about gap" style="background-image: url(user/assets/img/x2.png)">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6" data-aos="fade-up"  data-aos-delay="200" data-aos-duration="300">
							<div class="about-text">
								<ul class="crumbs d-flex">
									<li><a href="userindex">Home</a></li>
									<li class="two"><a href="restaurants"><i class="fa-solid fa-right-long"></i>Restaurants</a></li>
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
								<img alt="man" src="user/assets/img/photo-11.png">
								<a href="restaurantcard" class="one"><i class="fa-solid fa-burger"></i>Burgers</a>
								<a href="restaurantcard" class="two"><i class="fa-solid fa-drumstick-bite"></i>Chicken</a>
								<a href="restaurantcard" class="three"><i class="fa-solid fa-cheese"></i>Steaks</a>
								<a href="restaurantcard" class="for"><i class="fa-solid fa-pizza-slice"></i>Fish</a>
							</div>
						</div>
					</div>
				</div>
	</section><br>

	
	<!-- best-restaurants -->
	<section class="best-restaurants gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-6" data-aos="flip-up"  data-aos-delay="200" data-aos-duration="300">
					<div class="logos-card restaurant-page ">
						<img alt="logo" src="user/assets/img/logos-2.jpg">
							<div class="cafa">
								<h4><a href="restaurantcard">Kennington Lane Cafe</a></h4>
								<div>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-regular fa-star"></i>
								</div>
								<div class="cafa-button">
										<a href="restaurantcard">american</a>
										<a href="restaurantcard">steakhouse</a>
										<a class="end" href="restaurantcard">seafood</a>
								</div>
								<p>Non enim praesent elementum facilisis leo vel fringilla. Lectus proin nibh nisl condimentum id. Quis varius quam quisque id diam vel.</p>
							</div>
					</div>
				</div>
				<div class="col-lg-6" data-aos="flip-up"  data-aos-delay="300" data-aos-duration="400">
					<div class="logos-card restaurant-page">
						<img alt="logo" src="user/assets/img/logos-1.jpg">
							<div class="cafa">
								<h4><a href="restaurantcard">The Wilmington</a></h4>
								<div>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
								</div>
								<div class="cafa-button">
										<a href="restaurantcard">american</a>
										<a href="restaurantcard">steakhouse</a>
										<a class="end" href="restaurantcard">seafood</a>
								</div>
								<p>Vulputate enim nulla aliquet porttitor lacus luctus. Suscipit adipiscing bibendum est ultricies integer. Sed adipiscing diam donec adipiscing tristique.</p>
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
						<img alt="Illustration" src="user/assets/img/illustration-4.png">
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