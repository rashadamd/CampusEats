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
	<!-- <section class="gap">
		<div class="container">
			<div class="row">	
				<div class="col-xl-5 col-lg-12" data-aos="flip-up"  data-aos-delay="200" data-aos-duration="300">
					<div class="checkout-order">
						<div class="title-checkout">
							<h2>Your order</h2>
						</div>
					

						<div class="banner-wilmington">
							<img alt="logo" src="{{ asset('storage/' . $restaurants->image) }}" alt="logo" width="50" height="50">
							<h6>{{ $restaurants->name }}</h6>
						</div>

						<ul>
							
						<li class="price-list">
								<i class="closeButton fas fa-xmark"></i>
								<div class="counter-container">
									<div class="counter-food">
										<img alt="food" src="{{ asset('storage/' . $menus->image) }}" width="80" height="80">
										<h3 style="margin:5px;">{{ $menus->name }}</h3>
									</div>
									
								</div>
								<div class="price">
									<div>
					              		<h2>{{ $menus->price }}</h2>
					              		<span>Sum</span>
					              	</div>
					              		<div>
						             	 	<div class="qty-input">
												<button class="qty-count qty-count--minus" data-action="minus" type="button">-</button>
												<input class="product-qty" type="number" name="product-qty" min="1" value="1" max="50">
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
				</div>

				<div class="offset-xl-1 col-xl-6 col-lg-12" data-aos="flip-up"  data-aos-delay="300" data-aos-duration="400"> 
			 <form class="checkout-form"> 
				@csrf
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
						<button class="nav-link active" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Cash</button>
					</div>
					
					<div class="tab-content" id="v-pills-tabContent">
						<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
						</div>
						<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab"></div>
					</div>

					<button class="button-price">Send</button>
				</form>

				
				</div>
			</div>
		</div>
		
	</section> -->


	<section class="gap">
		<div class="container">
			<div class="row">
				<div class="col-xl-5 col-lg-12" data-aos="flip-up" data-aos-delay="200" data-aos-duration="300">
					<div class="checkout-order">
						<div class="title-checkout">
							<h2>Your Order</h2>
						</div>

						<!-- Restaurant Information -->
						<div class="banner-wilmington">
							<img alt="logo" src="{{ asset('storage/' . $restaurants->image) }}" alt="logo" width="50" height="50">
							<h6>{{ $restaurants->name }}</h6>
						</div>

						<!-- Order List -->
						<ul>
							<li class="price-list">
								<div class="counter-container">
									<div class="counter-food">
										<img alt="food" src="{{ asset('storage/' . $menus->image) }}" width="80" height="80">
										<h3 style="margin:5px;">{{ $menus->name }}</h3>
									</div>
								</div>
								<div class="price">
									<div>
										<h2 id="price-per-item">Rs. {{ $menus->price }}</h2>
										<span>Per Item</span>
									</div>
									<div>
										<div class="qty-input">
											<button class="qty-count qty-count--minus" data-action="minus" type="button">-</button>
											<input class="product-qty" id="quantity" type="number" name="quantity" min="1" value="1" max="50">
											<button class="qty-count qty-count--add" data-action="add" type="button">+</button>
										</div>
										<span>Quantity</span>
									</div>
								</div>
							</li>
						</ul>

						<!-- Total Price -->
						<div class="totel-price">
							<span>To Pay:</span>
							<h2 id="total-price">Rs. {{ $menus->price }}</h2>
						</div>
					</div>
				</div>

				<!-- Buyer Information -->
				<div class="offset-xl-1 col-xl-6 col-lg-12" data-aos="flip-up" data-aos-delay="300" data-aos-duration="400">
					<form class="checkout-form" method="POST" action="{{ route('checkout.store') }}">
						@csrf
						<h4>Buyer Information</h4>
						<input type="number" name="userid" value="{{ $user->userid }}" hidden>
						<input type="number" name="menuid" value="{{ $menus->menuid }}" hidden>
						<input type="number" name="amount" id="hidden-total-price" value="{{ $menus->price }}" hidden>
						<input class="product-qty" id="hidden-quantity" type="number" min="1" name="quantity" max="50" hidden>
						
						<input type="text" name="Name" placeholder="Full Name" value="{{ $user->name }}" readonly>

						<div class="row">
							<div class="col-lg-6">
								<input type="text" name="E-mail" placeholder="E-mail" value="{{ $user->email }}" readonly>
							</div>
							<div class="col-lg-6">
								<input type="text" name="Phone" placeholder="Phone" value="{{ $user->mobile_no ?? '' }}">
							</div>
						</div>

						<h4 class="two">Delivery Address</h4>
						<input type="text" name="address" placeholder="Address" value="{{ $user->address ?? '' }}">

						<h4 class="two">Payment Method</h4>
						<div class="nav nav-pills me-3">
							<button class="nav-link active" type="button">Cash</button>
						</div>

						<button class="button-price" type="submit">Place Order</button>
					</form>
				</div>
			</div>
		</div>
	</section>


	<script>
    document.addEventListener('DOMContentLoaded', function () {
        const pricePerItem = parseFloat(document.getElementById('price-per-item').innerText.replace('$', ''));
        const quantityInput = document.getElementById('quantity');
        const totalPriceElement = document.getElementById('total-price');
        const hiddenTotalPriceInput = document.getElementById('hidden-total-price');
		const hiddenQuantity = document.getElementById('hidden-quantity');

        // Update total price dynamically
        function updateTotalPrice() {
            const quantity = parseInt(quantityInput.value);
            const total = pricePerItem * quantity;
            totalPriceElement.innerText = `$${total.toFixed(2)}`;
            hiddenTotalPriceInput.value = total.toFixed(2);
			hiddenQuantity.value = quantity;
        }

        // Quantity button actions
        document.querySelectorAll('.qty-count').forEach(button => {
            button.addEventListener('click', function () {
                let currentQuantity = parseInt(quantityInput.value);
                if (this.dataset.action === 'add') {
                    quantityInput.value = currentQuantity + 1;
                } else if (this.dataset.action === 'minus' && currentQuantity > 1) {
                    quantityInput.value = currentQuantity - 1;
                }
                updateTotalPrice();
            });
        });

        // Update total on manual input
        quantityInput.addEventListener('input', function () {
            if (this.value < 1) this.value = 1;
            updateTotalPrice();
        });
    });
</script>
@endsection
