@extends('layouts.userapplayout')
@section('title','CampusEats - Checkout')
@section('content')

	<!-- hero-section -->
	<section class="hero-section about checkout gap" style="background-image: url(user/assets/img/x2.png)">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-12">
						<div class="about-text pricing-table">
							<ul class="crumbs d-flex" data-aos="fade-up" data-aos-delay="200" data-aos-duration="300">
								<li><a href="userindex">Home</a></li>
								<li><a href="restaurants"><i class="fas fa-right-long"></i>Restaurants </a></li>
								<li class="two"><a href="checkout"><i class="fas fa-right-long"></i>Checkout</a></li>
							</ul>
							<h2 data-aos="fade-up"  data-aos-delay="300" data-aos-duration="400" style="color: #fff;">Checkout</h2>
						</div>
					</div>
				</div>
			</div>
	</section>
	
	<!-- checkout-order -->
	<section class="gap">
		<div class="container">
			<div class="row">
				
				<div class="col-xl-5 col-lg-12" data-aos="flip-up"  data-aos-delay="200" data-aos-duration="300">
					<div class="checkout-order">
						<div class="title-checkout">
							<h2>Your order</h2>
						</div>
						<div class="banner-wilmington">
							<img alt="logo" src="user/assets/img/logo-s.jpg">
							<h6>Kennington Lane Cafe</h6>
						</div>
						<ul>
							<li class="price-list">
								<i class="closeButton fas fa-xmark"></i>
								<div class="counter-container">
									<div class="counter-food">
										<img alt="food" src="user/assets/img/order-1.png">
										<h4>Pasta, kiwi and sauce chilli</h4>
									</div>
									<h3>$39</h3>
								</div>
								<div class="price">
									<div>
					              		<h2>$39</h2>
					              		<span>Sum</span>
					              	</div>
					              		<div>
						             	 	<div class="qty-input">
												<button class="qty-count qty-count--minus" data-action="minus" type="button">-</button>
												<input class="product-qty" type="number" name="product-qty" min="0" value="1">
												<button class="qty-count qty-count--add" data-action="add" type="button">+</button>
											</div>
											<span>Quantity</span>
										</div>
								</div>
							</li>

						</ul>
						<div class="totel-price">
							<span>To pay:</span>
							<h2>$137</h2>
						</div>
					</div>

					<!-- Testing -->
				</div>

				<div class="offset-xl-1 col-xl-6 col-lg-12" data-aos="flip-up"  data-aos-delay="300" data-aos-duration="400">
				<form class="checkout-form">
					<h4>Buyer information</h4>
					<input type="text" name="Name" placeholder="Full Name" value="{{ $user->name }}" readonly>
					
					<div class="row">
						<div class="col-lg-6">
							<input type="text" name="E-mail" placeholder="E-mail" value="{{ $user->email }}" readonly>
						</div>
						<div class="col-lg-6">
							<input type="text" name="Phone" placeholder="Phone" value="{{ $user->mobile_no ?? '' }}">
						</div>
					</div>

					<h4 class="two">Delivery address</h4>
					<input type="text" name="address" placeholder="Address" value="{{ $user->address ?? '' }}">

					<h4 class="two">Payment method</h4>
					<div class="nav nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Cash</button>
					</div>
					
					<div class="tab-content" id="v-pills-tabContent">
						<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
							<!-- Payment Content -->
						</div>
						<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab"></div>
					</div>

					<button class="button-price">Send</button>
				</form>

				</div>
			</div>
		</div>
	</section>
	

@endsection