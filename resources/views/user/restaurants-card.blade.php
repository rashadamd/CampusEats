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
							<li class="two"><a href="restaurantcard"><i class="fa-solid fa-right-long"></i>The Wilmington</a></li>
						</ul>
						<div class="logo-detail">
							<img alt="logo" src="user/assets/img/logos-2.jpg">
							<h2 style="color:white">Kennington Lane Cafe</h2>
						</div>
						<div class="rate">
							<span>Rate:</span>
								<div class="star">
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-regular fa-star-half-stroke"></i>
								</div>
								<span>CUISINES:</span>
								<div class="cafa-button">
										<a href="restaurantcard">american</a>
										<a href="restaurantcard">steakhouse</a>
										<a href="restaurantcard">seafood</a>
								</div>
								<span>FEATURES:</span>
								<p>Lorem mollis aliquam ut porttitor. Nisl rhoncus mattis rhoncus urna neque. Pharetra sit amet aliquam id. Urna nec tincidunt praesent semper feugiat nibh.</p>
						</div>

					</div>
				</div>
				<div class="col-lg-6" data-aos="fade-up"  data-aos-delay="400" data-aos-duration="500">
					<div class="about-img">
						<img alt="man" src="user/assets/img/restaurant-1.jpg">
						<div class="hours">
							<i class="fa-regular fa-clock"></i>
							<h4>9am – 12pm<br><span>Hours</span></h4>
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


<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
              
                
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


	<!-- tabs -->
	<section class="tabs gap">
		



      <div class="container">

      <div class="tabs-img-back">

		<div class="row">
			<div class="col-lg-12 col-xl-6">
				<div class="card">
					<div class="card-body">
						<div class="menu-product d-flex">
							<img src="user/images/product/pizz1.jpg">
							<div class="content-detail-wrap">	
								<div>
									<h4>Margherita Pizza</h4>
									<span>Lots of cheese</span>
								</div>
								<div class="mt-4 d-flex justify-content-between align-items-center">
									<div>
										<h5 class="mb-0"><span class="fs-14 me-2">start From</span>$15.00</h5>
										<span class="text-danger">Customization available</span>
									</div>
									<div>
										<a href="javascript:void(0);" class="btn btn-danger">Add</a>
									</div>
								</div>
							</div>	
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-12 col-xl-6">
				<div class="card">
					<div class="card-body">
						<div class="menu-product d-flex">
							<img src="user/images/product/pizz2.jpg">
							<div class="content-detail-wrap">	
								<div>
									<h4>Vegitarian Bite Pizza</h4>
									<span>Cheese, Green Pepper, Tomato, Onions.</span>
								</div>
								<div class="mt-4 d-flex justify-content-between align-items-center">
									<div>
										<h5 class="mb-0"><span class="fs-14 me-2">start From</span>Rs 165.00</h5>
										<span class="text-danger">Customization available</span>
									</div>
									<div>
										<a href="javascript:void(0);" class="btn btn-danger">Add</a>
									</div>
								</div>
							</div>	
						</div>
					</div>
				</div>
			</div>
			

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