@extends('layouts.userapplayout')
@section('title','CampusEats - Home')
@section('content')

  <!-- hero-section -->
  <section class="hero-section gap" style="background-image: url(user/assets/img/x2.png)">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6" data-aos="fade-up"  data-aos-delay="200" data-aos-duration="300">
					<div class="restaurant">
						<!-- <h1>The Best restaurants
							in your  home</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p> -->
						<h1><span style="color: #fff;">Delivering </span> <span style="color: #f65f5f;">Deliciousness,  </span>  
						<span style="color: #fff;"> Direct to Your </span> <span style="color: #f5ae47">Dorm!</span>
						</h1>
						<p>Revolutionize your campus dining experience with our mouthwatering food delivery service! </p>
						<div class="nice-select-one">
						<a href="restaurants" class="button button-2">Order Now</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6" data-aos="fade-up"  data-aos-delay="300" data-aos-duration="400">
					<div class="img-restaurant">
						<img alt="man" src="user/assets/img/photo-1.png">
				
						<div class="wilmington location-restaurant" style="top: 30%; left: 70%;">
							<i class="fa-solid fa-location-dot"></i>
							<div>
								<h6>12 Restaurant</h6>
								<p>In Your city</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><br>



	<!-- works-section -->
	<section class="works-section gap no-top" >
		<div class="container">
			<div class="hading" data-aos="fade-up"  data-aos-delay="200" data-aos-duration="300">
				<h2>How it works</h2>
				<p>Ordering food through our platform is simple and hassle-free. Here’s a step-by-step guide to get your favorite meals delivered right to your doorstep.</p>
			</div>
			<div class="row ">
				<div class="col-lg-4 col-md-6 col-sm-12" data-aos="flip-up"  data-aos-delay="200" data-aos-duration="300">
					<div class="work-card">
						<img alt="img" src="user/assets/img/illustration-1.png">
						<h4><span>01</span>  Select Restaurant</h4>
						<p>Browse our diverse selection of restaurants in your area, spanning a variety of cuisines to satisfy every craving.</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12" data-aos="flip-up"  data-aos-delay="300" data-aos-duration="400">
					<div class="work-card">
						<img alt="img" src="user/assets/img/illustration-2.png">
						<h4><span>02</span>  Select menu</h4>
						<p>Find your perfect dish from the restaurant's menu, with options ranging from appetizers to desserts, and customize your order to fit your preferences.</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12" data-aos="flip-up"  data-aos-delay="400" data-aos-duration="500">
					<div class="work-card">
						<img alt="img" src="user/assets/img/illustration-3.png">
						<h4><span>03</span>  Wait for delivery</h4>
						<p>Review your selections, proceed to checkout, and choose your preferred payment method. With just a few clicks, your order is placed, and you'll receive a confirmation email.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- best-restaurants -->
	<section class="best-restaurants gap" style="background:#fcfcfc">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6" data-aos="flip-up"  data-aos-delay="200" data-aos-duration="300">
						<div class="city-restaurants">
							<h2>12 <span style="color: #f5ae47;"> Best </span> <span style="color: #f65f5f;"> Restaurants  </span> in Your City</h2>
							<p>Magna sit amet purus gravida quis blandit turpis cursus. Venenatis tellus in metus vulputate.</p>
						</div>
				</div>
				<div class="col-lg-6" data-aos="flip-up"  data-aos-delay="300" data-aos-duration="400">
					<div class="logos-card restaurant-page">
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
				<div class="col-lg-6" data-aos="flip-up"  data-aos-delay="400" data-aos-duration="500">
					<div class="logos-card two restaurant-page">
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
				<div class="col-lg-6" data-aos="flip-up"  data-aos-delay="500" data-aos-duration="600">
					<div class="logos-card three restaurant-page">
						<img alt="logo" src="user/assets/img/logos-3.jpg">
							<div class="cafa">
								<h4><a href="restaurantcard">Kings Arms</a></h4>
								<div>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-regular fa-star-half-stroke"></i>
								</div>
								<div class="cafa-button">
										<a href="restaurantcard">healthy</a>
										<a href="restaurantcard">steakhouse</a>
										<a class="end" href="restaurantcard">vegetarian</a>
								</div>
								<p>Tortor at risus viverra adipiscing at in tellus. Cras semper auctor neque vitae tempus. Dui accumsan sit amet nulla facilisi. Sed adipiscing diam donec adipiscing tristique.</p>
							</div>
					</div>
				</div>
			</div>
			<div class="button-gap">
				<a href="restaurants" class="button button-2 non">See All<i class="fa-solid fa-arrow-right"></i></a>
			</div>
		</div>
	</section>

	<!-- your-favorite-food -->
	<section class="your-favorite-food gap" style="background-image: url(user/assets/img/x4.png);">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-5" data-aos="fade-up"  data-aos-delay="200" data-aos-duration="300">
					
				</div>
				<div class="col-lg-6 offset-lg-1" data-aos="fade-up" data-aos-delay="300" data-aos-duration="400">
					<div class="food-content-section">
						<h2 style="color:white;">Food from your favorite restaurants
								to your table</h2>
								<p>Pretium lectus quam id leo in vitae turpis massa sed. Lorem donec massa sapien faucibus et molestie. Vitae elementum curabitur vitae nunc.</p>
								<a href="restaurants" class="button button-2">Order Now</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- counters-section -->
	<section class="counters-section" style="padding: 20px 0px">
		<div class="container">
			<div class="row align-items-center">
					<div class="col-lg-3 col-md-6 col-sm-12"   data-aos-delay="200" data-aos-duration="300">
						<div>
							<h2>Service shows good taste.</h2>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12"  data-aos-delay="300" data-aos-duration="400">
						<div class="count-time">
								<h2 class="timer count-title count-number" data-to="976" data-speed="6000">976</h2>
									<p>Satisfied
									Customer</p>
						</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12"  data-aos-delay="400" data-aos-duration="500">
						<div class="count-time">
								<h2 class="timer count-title count-number" data-to="1520" data-speed="6000">1520</h2>
									<p>Best
											Restaurants</p>
						</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12"  data-aos-delay="500" data-aos-duration="600">
						<div class="count-time sp">
								<h2 class="timer count-title count-number" data-to="650" data-speed="6000">650</h2>
								
									<p>Food 
											Delivered</p>
						</div>
				</div>
			</div>
		</div>
	</section>

	<!-- reviews-sections -->
	<section class="reviews-sections gap">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-xl-6 col-lg-12" data-aos="fade-up"  data-aos-delay="200" data-aos-duration="300">
					<div class="reviews-content">
						<h2 >What customers say about us</h2>
						<div class="custome owl-carousel owl-theme">
							<div class="item">
								<h4>"Dapibus ultrices in iaculis nunc sed augue lacus viverra vitae. Mauris a diam maecenas sed enim. Egestas diam in arcu cursus euismod quis. Quam quisque id diam vel".</h4>
								<div class="thomas">
									<img alt="girl" src="assets/img/photo-5.jpg">

									<div>
										<h6>Thomas Adamson</h6>
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star"></i>
									</div>
								</div>
						</div>
						<div class="item">
								<h4>"Dapibus ultrices in iaculis nunc sed augue lacus viverra vitae. Mauris a diam maecenas sed enim. Egestas diam in arcu cursus euismod quis. Quam quisque id diam vel".</h4>
								<div class="thomas">
									<img alt="girl" src="assets/img/photo-5.jpg">

									<div>
										<h6>Thomas Adamson</h6>
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star"></i>
									</div>
								</div>
						</div>
						<div class="item">
								<h4>"Dapibus ultrices in iaculis nunc sed augue lacus viverra vitae. Mauris a diam maecenas sed enim. Egestas diam in arcu cursus euismod quis. Quam quisque id diam vel".</h4>
								<div class="thomas">
									<img alt="girl" src="assets/img/photo-5.jpg">

									<div>
										<h6>Thomas Adamson</h6>
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star"></i>
									</div>
								</div>
						</div>
					</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-12" data-aos="fade-up"  data-aos-delay="300" data-aos-duration="400">
					<div class="reviews-img">
						<img alt="photo" src="assets/img/photo-4.png">
						<i class="fa-regular fa-thumbs-up"></i>
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