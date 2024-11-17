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
				<form class="checkout-form" action="{{ route('loginpost') }}" method="POST">
					@csrf
					<h4>Login Here</h4>
					
					<input type="text" name="uname" placeholder="Username" required>
					@if($errors->has('uname'))
									<span class="error" style="color: red">
										<strong>{{ $errors->first('uname') }}</strong>
									</span>
								@endif
					<input type="password" name="password" placeholder="Password" required>
					@if($errors->has('password'))
									<span class="error" style="color: red">
										<strong>{{ $errors->first('password') }}</strong>
									</span>
								@endif
					<button class="button-price" type="submit">Login</button><br><br>
					<h6 style="text-align: center;">Not a member? <a href="/register" style="color:#f29f05"> Register Now</a></h6>
				</form>

				</div>
			</div>
		</div>
	</section>
	<div class="toast align-items-center" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="d-flex">
    <div class="toast-body">
      Hello, world! This is a toast message.
    </div>
    <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
  </div>
</div>

@endsection