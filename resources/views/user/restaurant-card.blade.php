@extends('layouts.userapplayout')
@section('title','CampusEats - Restaurant - Card')
@section('content')

	<!-- hero-section -->
	<section class="hero-section about gap" style="background-image: url(assets/img/x2.png)">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6" data-aos="fade-up"  data-aos-delay="300" data-aos-duration="400">
					<div class="about-text">
						<ul class="crumbs d-flex">
							<li><a href="userindex">Home</a></li>
							<li><a href="restaurants"><i class="fa-solid fa-right-long"></i>Restaurants</a></li>
						</ul>
						<div class="logo-detail">
							<img alt="logo" src="{{ asset('storage/' . $user->image) }}" alt="logo" width="125" height="125">
							<h2 style="color:white">{{ $user->name }}</h2>
						</div>
						

					</div>
				</div>
				<div class="col-lg-6" data-aos="fade-up"  data-aos-delay="400" data-aos-duration="500">
					<div class="about-img">
						<img alt="man" src="user/assets/img/restaurant-1.jpg">
						<div class="hours">
							<i class="fa-regular fa-clock"></i>
							<h4>8am – 12pm<br><span>Hours</span></h4>
						</div>
						<div class="hours two">
							<i class="fa-solid fa-utensils"></i>
							<h4>Breakfast, Lunch, Dinner<br><span>Meals</span></h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- tabs -->
	<section class="tabs gap">

      <div class="container">

      <div class="tabs-img-back">

		<div class="row">
			
		@foreach($menus as $menu)
		<div class="col-lg-12 col-xl-6">
				<div class="card">
					<div class="card-body">
						<div class="menu-product d-flex">
							<img src="{{ asset('storage/' . $menu->image) }}">
							<div class="content-detail-wrap">	
								<div>
									<h4>{{ $menu->name }}</h4>
								</div>
								<div class="mt-4 d-flex justify-content-between align-items-center">
									<div>
										<h5 class="mb-0"><span class="fs-14 me-2">start From</span>{{ $menu->price }}</h5>
									</div>
									<div>
										<a href="checkout-{{$menu->menuid}}" class="btn btn-danger">Buy</a>
									</div>
								</div>
							</div>	
						</div>
					</div>
				</div>
			</div>
		@endforeach

			
		</div>

      </div>

     </div>

   </section>
   

@endsection