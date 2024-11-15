@extends('layouts.applayout')
@section('title','CampusEats - Login')
@section('content')

	<!-- hero-section -->
	<section class="hero-section about checkout gap" style="background-image: url(assets/img/x2.png)">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-12">
						<div class="about-text pricing-table">
							<ul class="crumbs d-flex" data-aos="fade-up" data-aos-delay="200" data-aos-duration="300">
								<li><a href="/">Home</a></li>
								<li><a href="/login"><i class="fa-solid fa-right-long"></i>Login</a></li>
								
							</ul>
							<h2 data-aos="fade-up"  data-aos-delay="300" data-aos-duration="400" style="color: #fff;">Login</h2>
							<p data-aos="fade-up"  data-aos-delay="400" data-aos-duration="500">Sit amet nisl purus in mollis nunc sed id semper. Condimentum id venenatis a condimentum vitae sapien pellentesque.</p>
						</div>
					</div>
				</div>
			</div>
	</section>
	<!-- checkout-order -->
	<section class="gap">
		<div class="container">
			<div class="row">
			
				<div class="offset-xl-3 col-xl-6 col-lg-12" data-aos="flip-up"  data-aos-delay="300" data-aos-duration="400">
					<form class="checkout-form">
						<h4>Login Here</h4>
						
					
						
						<input type="text" name="Uname" placeholder="Username">
					
					<input type="password" name="Password" placeholder="Password">

			
                			<button class="button-price">Login</button><br><br>
                			<h6 style="text-align: center;">Not a member? <a href="/register" style="color:#f29f05"> Register Now</a></h6>
					</form>
				</div>
			</div>
		</div>
	</section>

@endsection