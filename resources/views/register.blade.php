@extends('layouts.applayout')
@section('title','CampusEats - Register')
@section('content')

	<!-- hero-section -->
	<section class="hero-section about checkout gap" style="background-image: url(assets/img/x2.png)">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-12">
						<div class="about-text pricing-table">
							<ul class="crumbs d-flex" data-aos="fade-up" data-aos-delay="200" data-aos-duration="300">
								<li><a href="/">Home</a></li>
								<li><a href="/register"><i class="fa-solid fa-right-long"></i>Register </a></li>
								
							</ul>
							<h2 data-aos="fade-up"  data-aos-delay="300" data-aos-duration="400" style="color: #fff;">Register</h2>
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
						<h4>Register Here</h4>
						
						<select name="client" id="client" type="clientdrop">
							<option value="restaurant" >Restaurant</option>
							<option value="user" >User</option>
						</select>
						
						<input type="file">
						<input type="text" name="Name" placeholder="Enter the Name">
						<input type="text" name="Address" placeholder="Address">
						<input type="text" name="mobileno" placeholder="Mobile Number">
						<input type="text" name="E-mail" placeholder="E-mail">

						<div class="row">
							<div class="col-lg-6">
								<input type="text" name="Uname" placeholder="Username">
							</div>
							<div class="col-lg-6">
								<input type="password" name="Password" placeholder="Password">
							</div>
						</div>
						
                			<button class="button-price">Register</button><br><br>
                			<h6 style="text-align: center;">Already a member? <a href="/login" style="color:#f29f05"> Login Now</a></h6>
					</form>
				</div>
			</div>
		</div>
	</section>
	

@endsection