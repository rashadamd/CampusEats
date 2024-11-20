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
										<a href="{{ route('checkout') }}" class="btn btn-danger">Buy</a>
									</div>
								</div>
							</div>	
						</div>
					</div>
				</div>
			</div>
		@endforeach

			<!-- review -->
			<div class="modal fade" id="reviewModal">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Review</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal">
							</button>
						</div>
						<div class="modal-body">
							<form>
								<div class="text-center mb-4">
									<img class="img-fluid rounded" width="78" src="user/images/avatar/1.jpg" alt="DexignZone">
								</div>
								<div class="mb-3">
									<div class="rating-widget mb-4 text-center">
										<!-- Rating Stars Box -->
										<div class="rating-stars">
											<ul id="stars">
												<li class="star" title="Poor" data-value="1">
													<i class="fa fa-star fa-fw"></i>
												</li>
												<li class="star" title="Fair" data-value="2">
													<i class="fa fa-star fa-fw"></i>
												</li>
												<li class="star" title="Good" data-value="3">
													<i class="fa fa-star fa-fw"></i>
												</li>
												<li class="star" title="Excellent" data-value="4">
													<i class="fa fa-star fa-fw"></i>
												</li>
												<li class="star" title="WOW!!!" data-value="5">
													<i class="fa fa-star fa-fw"></i>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="mb-3">
									<textarea class="form-control" placeholder="Comment" rows="5"></textarea>
								</div>
								<button class="btn btn-success btn-block">RATE</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

      </div>

     </div>

   </section>
   

@endsection