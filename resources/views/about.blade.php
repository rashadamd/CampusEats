@extends('layouts.applayout')
@section('title','CampusEats - About')
@section('content')

	<!-- hero-section -->
	<section class="hero-section about gap" style="background-image: url(assets/img/x2.png)">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 col-md-12 col-sm-12" data-aos="fade-up"  data-aos-delay="300" data-aos-duration="400">
					<div class="about-text">
						<ul class="crumbs d-flex">
							<li><a href="home">Home</a></li>
							<li class="two"><a href="about"><i class="fas fa-right-long"></i> About Us</a></li>
						</ul>
						<h2 style="color:#fff">Nothing to worry about with CampusEats</h2>
					</div>
				</div>
				<div class="col-lg-6 col-md-12 col-sm-12" data-aos="fade-up"  data-aos-delay="400" data-aos-duration="500">
					<div class="about-img">
						<img alt="man" src="assets/img/a.png">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- our-mission-section -->
	<section class="our-mission-section gap">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 col-md-12 col-sm-12" data-aos="flip-up"  data-aos-delay="300" data-aos-duration="400">
					<div class="our-mission-img">
						<img alt="Illustration" src="assets/img/illustration-5.png">
					</div>
				</div>
				<div class="offset-xl-1 col-lg-5 col-md-12 col-sm-12" data-aos="flip-up"  data-aos-delay="400" data-aos-duration="500">
					<div class="our-mission-text">
						<h2>Our mission is to save you time</h2>
							<p>Our goal is to simplify your life by offering seamless solutions that save you valuable time, letting you focus on what truly matters</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- cards-section -->
	<section class="cards-section gap no-top">
		<div class="container">
			<div class="row">
				<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12" data-aos="flip-up"  data-aos-delay="200" data-aos-duration="300">
					<div class="card-text-data">
						<img class="on" alt="icon" src="assets/img/service-icon-2.svg">
						<img class="off" alt="icon" src="assets/img/service-icon-1.svg">

						<h3>Free Delivery</h3>
								<p>Enjoy the convenience of free delivery on every order, bringing your favorite meals straight to your doorstep without any extra cost.</p>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12" data-aos="flip-up"  data-aos-delay="300" data-aos-duration="400">
					<div class="card-text-data two">
						<img class="on" alt="icon" src="assets/img/service-icon-3.svg">
						<img class="off" alt="icon" src="assets/img/service-icon-4.svg">

						<h3>Save Your Time</h3>
								<p>Skip the hassle of waiting—our efficient service ensures that your orders are processed quickly, saving you precious time every day</p>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12" data-aos="flip-up"  data-aos-delay="400" data-aos-duration="500">
					<div class="card-text-data">
						<img class="on" alt="icon" src="assets/img/service-icon-5.svg">
						<img class="off" alt="icon" src="assets/img/service-icon-6.svg">

						<h3>Regular Discounts</h3>
								<p>Take advantage of our regular discounts and offers, making delicious meals even more affordable for you.</p>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12" data-aos="flip-up"  data-aos-delay="500" data-aos-duration="600">
					<div class="card-text-data two">
						<img class="on" alt="icon" src="assets/img/service-icon-7.svg">
						<img class="off" alt="icon" src="assets/img/service-icon-8.svg">

						<h3>Variety Food</h3>
								<p>Discover a diverse menu featuring cuisines from around the world, offering something for every taste and craving.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- video-section -->
	<!-- <section class="video-section gap">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6" data-aos="fade-up"  data-aos-delay="200" data-aos-duration="300">
					<div class="wait-a-minute">
						<h2>Wait a minute for delicious</h2>
						<p>Amet massa vitae tortor condimentum lacinia quis. Elit at imperdiet dui accumsan sit amet nulla facilisi. Lacus laoreet non curabitur gravida arcu ac tortor dignissim.</p>
						<h6>Interdum varius sit amet mattis.</h6>
						<ul class="paragraph">
							<li><i class="fas fa-circle-check"></i><h5>Interdum varius sit amet mattis;</h5></li>
							<li><i class="fas fa-circle-check"></i><h5>Sed elementum tempus egestas sed sed;</h5></li>
							<li><i class="fas fa-circle-check"></i><h5>Sit amet purus gravida quis blandit;</h5></li>
							<li><i class="fas fa-circle-check"></i><h5>Feugiat pretium nibh ipsum consequat nisl vel pretium.</h5></li>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</section> -->
	
	<!-- about-counters-section -->
	<section class="about-counters-section gap" style="background-image: url(user/assets/img/background.png);">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 col-md-12 col-sm-12" data-aos="flip-up"  data-aos-delay="200" data-aos-duration="300">
					<div class="about-counters-img">
						<img alt="girl" src="user/assets/img/photo-10.png">
					</div>
				</div>
				<div class="col-lg-6 col-md-12 col-sm-12" data-aos="flip-up"  data-aos-delay="300" data-aos-duration="400">
					<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="counter-hading">
							<h2>Service shows good taste.</h2>
						</div>
					</div>
					
				<!-- Best Restaurants -->
				<div class="col-lg-6 col-md-6 col-sm-6" data-aos="flip-up" data-aos-delay="300" data-aos-duration="400">
					<div class="count-time">
						<h2 class="timer count-title count-number" data-to="{{ $restaurantCount }}" data-speed="2000">{{ $restaurantCount }}</h2>
						<p>Best<br>Restaurants</p>
					</div>
				</div>

				<!-- Food Delivered -->
				<div class="col-lg-6 col-md-6 col-sm-6" data-aos="flip-up" data-aos-delay="300" data-aos-duration="400">
					<div class="count-time sp">
						<h2 class="timer count-title count-number" data-to="{{ $foodDeliveredCount }}" data-speed="2000">{{ $foodDeliveredCount }}</h2>
						<p>Food<br>Delivered</p>
					</div>
				</div>
			</div>
				</div>
			</div>
		</div>
	</section>

		<!-- Our Team Section -->
		<section class="our-team-section gap">
		<div class="container" style="text-align:center;"> 
			<div class="hading" data-aos="fade-up"  data-aos-delay="200" data-aos-duration="300">
				<h2>Our team</h2>
			</div>
			<div class="row">
				<!-- Team Member 1 -->
				<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mb-4" data-aos="fade-up" data-aos-delay="400" data-aos-duration="500">
					<div class="our-team text-center">
						<img alt="team-img" src="assets/img/1.jfif" class="img-fluid rounded" style="width: 300px; height: 300px; object-fit: cover;">
						<h4 class="mt-3"><a href="#">Rashad Ahamed</a></h4>
						
					</div>
				</div>

				<!-- Team Member 2 -->
				<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mb-4" data-aos="fade-up" data-aos-delay="400" data-aos-duration="500">
					<div class="our-team text-center">
						<img alt="team-img" src="assets/img/6.jfif" class="img-fluid rounded" style="width: 300px; height: 300px; object-fit: cover;">
						<h4 class="mt-3"><a href="#">Abzan Iqbal</a></h4>
						
					</div>
				</div>

				<!-- Team Member 3 -->
				<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mb-4" data-aos="fade-up" data-aos-delay="400" data-aos-duration="500">
					<div class="our-team text-center">
						<img alt="team-img" src="assets/img/4.jpg" class="img-fluid rounded" style="width: 300px; height: 300px; object-fit: cover;">
						<h4 class="mt-3"><a href="#">Athistakumar</a></h4>
						
					</div>
				</div>

				<!-- Team Member 4 -->
				<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mb-4" data-aos="fade-up" data-aos-delay="400" data-aos-duration="500">
					<div class="our-team text-center">
						<img alt="team-img" src="assets/img/2.jfif" class="img-fluid rounded" style="width: 300px; height: 300px; object-fit: cover;">
						<h4 class="mt-3"><a href="#">Sachintha</a></h4>
					
					</div>
				</div>

				<!-- Team Member 5 -->
				<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mb-4" data-aos="fade-up" data-aos-delay="400" data-aos-duration="500">
					<div class="our-team text-center">
						<img alt="team-img" src="assets/img/7.jfif" class="img-fluid rounded" style="width: 300px; height: 300px; object-fit: cover;">
						<h4 class="mt-3"><a href="#">Nuha Yousuf</a></h4>
						
					</div>
				</div>

				<!-- Team Member 6 -->
				<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mb-4" data-aos="fade-up" data-aos-delay="400" data-aos-duration="500">
					<div class="our-team text-center">
						<img alt="team-img" src="assets/img/3.jfif" class="img-fluid rounded" style="width: 300px; height: 300px; object-fit: cover;">
						<h4 class="mt-3"><a href="#">Kalindu Bawantha</a></h4>
					
					</div>
				</div>

				<!-- Team Member 7 -->
				<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mb-4" data-aos="fade-up" data-aos-delay="400" data-aos-duration="500">
					<div class="our-team text-center">
						<img alt="team-img" src="assets/img/4.jfif" class="img-fluid rounded" style="width: 300px; height: 300px; object-fit: cover;">
						<h4 class="mt-3"><a href="#">Himashi</a></h4>
					
					</div>
				</div>

				<!-- Team Member 8 -->
				<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mb-4" data-aos="fade-up" data-aos-delay="400" data-aos-duration="500">
					<div class="our-team text-center">
						<img alt="team-img" src="assets/img/5.jfif" class="img-fluid rounded" style="width: 300px; height: 300px; object-fit: cover;">
						<h4 class="mt-3"><a href="#">Hiruni</a></h4>
					
				</div>
			</div>

		</div>
	</section>

	
	<!-- subscribe-section -->
	<!-- <section class="subscribe-section about gap" style="background-image: url(assets/img/background-img.jpg);" >
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="get-the-menu">
						<h2 data-aos="fade-up"  data-aos-delay="200" data-aos-duration="300">Get the menu of your favorite restaurants every day</h2>
						<form data-aos="fade-up"  data-aos-delay="300" data-aos-duration="400">
							<i class="far fa-bell"></i>
							<input type="text" name="email" placeholder="Enter email address">
							<button class="button button-2">Subscribe</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	 -->

@endsection