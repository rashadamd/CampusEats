<!DOCTYPE html>
<html lang="zxx">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title','CampusEatsLayout')</title>
  <link rel="icon" href="assets/img/fav-icon.png">
	
  <!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOM3MLzO8a4syyIQax0e6Tw74D1G/I5R2KVa8FRd" crossorigin="anonymous">

<!-- owl carousel -->

  <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
  <!-- nice-select -->
  <link rel="stylesheet" href="assets/css/nice-select.css">
  <!-- aos -->
  <link rel="stylesheet" href="assets/css/aos.css">
  <!-- style -->
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- responsive -->
  <link rel="stylesheet" href="assets/css/responsive.css">
	<!-- color -->
  <link rel="stylesheet" href="assets/css/color.css">

	<!-- Font Awesome 5 -->
	<script src="https://kit.fontawesome.com/27a041baf1.js" crossorigin="anonymous"></script>

</head>




<body class="menu-layer">
	
	<!-- loader start-->

	<div class="page-loader">
		<div class="wrapper">
	        <div class="circle"></div>
 	        <div class=
			"circle"></div>
	        <div class="circle"></div>
	        <div class="shadow"></div>
	        <div class="shadow"></div>
	        <div class="shadow"></div>
	        <span>Loading</span>
	    </div>
	</div>
	<!-- loader end-->
	
	<!-- header -->
	<header>
		<div class="container">
			<div class="row align-items-center">
				<div class="col-xl-2">
					<div class="header-style">
						<a href="/">
							<svg xmlns="http://www.w3.org/2000/svg" width="220" height="38" viewBox="0 0 220 38">
								<g id="Logo-w" transform="translate(-260 -51)">
									<g id="Logo-2-w" data-name="Logo-w" transform="translate(260 51)">
										<g id="Elements-w">
										<path id="Path_2429" data-name="Path 2429" d="M315.086,140.507H275.222v-.894c0-11.325,8.941-20.538,19.933-20.538s19.931,9.213,19.931,20.538Z" transform="translate(-270.155 -115.396)" fill="#f29f05"/>
										<path id="Path_2430" data-name="Path 2430" d="M301.13,133.517a1.488,1.488,0,0,1-1.394-.994,11.361,11.361,0,0,0-10.583-7.54,1.528,1.528,0,0,1,0-3.055,14.353,14.353,0,0,1,13.37,9.527,1.541,1.541,0,0,1-.875,1.966A1.444,1.444,0,0,1,301.13,133.517Z" transform="translate(-264.176 -113.935)" fill="#fff"/>
										<path id="Path_2431" data-name="Path 2431" d="M297.343,146.544a14.043,14.043,0,0,1-13.837-14.211h2.975a10.865,10.865,0,1,0,21.723,0h2.975A14.043,14.043,0,0,1,297.343,146.544Z" transform="translate(-266.247 -108.544)" fill="#fff"/>
										<path id="Path_2432" data-name="Path 2432" d="M302.183,132.519a7.064,7.064,0,1,1-14.122,0Z" transform="translate(-264.027 -108.446)" fill="#fff"/>
										<path id="Path_2433" data-name="Path 2433" d="M320.332,134.575H273.3a1.528,1.528,0,0,1,0-3.055h47.033a1.528,1.528,0,0,1,0,3.055Z" transform="translate(-271.815 -108.923)" fill="#f29f05"/>
										<path id="Path_2434" data-name="Path 2434" d="M289.154,123.4a1.507,1.507,0,0,1-1.487-1.528v-3.678a1.488,1.488,0,1,1,2.975,0v3.678A1.508,1.508,0,0,1,289.154,123.4Z" transform="translate(-264.154 -116.667)" fill="#f29f05"/>
										<path id="Path_2435" data-name="Path 2435" d="M284.777,138.133H275.3a1.528,1.528,0,0,1,0-3.055h9.474a1.528,1.528,0,0,1,0,3.055Z" transform="translate(-270.84 -107.068)" fill="#fff"/>
										<path id="Path_2436" data-name="Path 2436" d="M284.8,141.691h-6.5a1.528,1.528,0,0,1,0-3.055h6.5a1.528,1.528,0,0,1,0,3.055Z" transform="translate(-269.379 -105.218)" fill="#fff"/>
										</g>
									</g>
									<text id="Quickeat-w" transform="translate(320 77)" fill="#fff" font-size="20" font-family="Poppins" font-weight="700"><tspan x="0" y="0">Campus</tspan><tspan y="0" fill="#f29f05">Eats</tspan></text>
								</g>
							</svg>
						</a>

						<div class="extras bag">
		                		<div class="bar-menu"><i class="fas fa-bars"></i></div>
						</div>
					</div>
				</div>

    <!-- navbar -->
				<div class="col-lg-7">
					<nav class="navbar">
				      <ul class="navbar-links">
				        <li class="navbar-dropdown {{ Request::is('/') ? 'active' : '' }} ">
				          <a href="/">Home</a>
				        </li>
						
						<li class="navbar-dropdown">
				          <a href="/#restaurants">Restaurants</a>
				        </li>
						<li class="navbar-dropdown">
							<a href="/#foods">Food</a>
						  </li>
						  <!-- <li class="navbar-dropdown">
							<a href="/#reviews">Reviews</a>
						  </li> -->
				        <li class="navbar-dropdown {{ Request::is('about') ? 'active' : '' }}">
				          <a  href="/about">About Us</a>
				        </li>
				       
				      </ul>
				    </nav>
				</div>



				<div class="col-lg-3">
					<div class="extras bag">
						 <a href="/login" class="button button-2">Login Now </a>
					</div>
				</div>
				
			
         	 <div class="mobile-nav hmburger-menu" id="mobile-nav" style="display:block;">
				<div class="res-log">
					<a href="/">
					<svg xmlns="http://www.w3.org/2000/svg" width="220" height="38" viewBox="0 0 220 38">
					<g id="Logo-w" transform="translate(-260 -51)">
					  <g id="Logo-2-w" data-name="Logo-w" transform="translate(260 51)">
						<g id="Elements-w">
						  <path id="Path_2429" data-name="Path 2429" d="M315.086,140.507H275.222v-.894c0-11.325,8.941-20.538,19.933-20.538s19.931,9.213,19.931,20.538Z" transform="translate(-270.155 -115.396)" fill="#f29f05"/>
						  <path id="Path_2430" data-name="Path 2430" d="M301.13,133.517a1.488,1.488,0,0,1-1.394-.994,11.361,11.361,0,0,0-10.583-7.54,1.528,1.528,0,0,1,0-3.055,14.353,14.353,0,0,1,13.37,9.527,1.541,1.541,0,0,1-.875,1.966A1.444,1.444,0,0,1,301.13,133.517Z" transform="translate(-264.176 -113.935)" fill="#fff"/>
						  <path id="Path_2431" data-name="Path 2431" d="M297.343,146.544a14.043,14.043,0,0,1-13.837-14.211h2.975a10.865,10.865,0,1,0,21.723,0h2.975A14.043,14.043,0,0,1,297.343,146.544Z" transform="translate(-266.247 -108.544)" fill="#fff"/>
						  <path id="Path_2432" data-name="Path 2432" d="M302.183,132.519a7.064,7.064,0,1,1-14.122,0Z" transform="translate(-264.027 -108.446)" fill="#fff"/>
						  <path id="Path_2433" data-name="Path 2433" d="M320.332,134.575H273.3a1.528,1.528,0,0,1,0-3.055h47.033a1.528,1.528,0,0,1,0,3.055Z" transform="translate(-271.815 -108.923)" fill="#f29f05"/>
						  <path id="Path_2434" data-name="Path 2434" d="M289.154,123.4a1.507,1.507,0,0,1-1.487-1.528v-3.678a1.488,1.488,0,1,1,2.975,0v3.678A1.508,1.508,0,0,1,289.154,123.4Z" transform="translate(-264.154 -116.667)" fill="#f29f05"/>
						  <path id="Path_2435" data-name="Path 2435" d="M284.777,138.133H275.3a1.528,1.528,0,0,1,0-3.055h9.474a1.528,1.528,0,0,1,0,3.055Z" transform="translate(-270.84 -107.068)" fill="#fff"/>
						  <path id="Path_2436" data-name="Path 2436" d="M284.8,141.691h-6.5a1.528,1.528,0,0,1,0-3.055h6.5a1.528,1.528,0,0,1,0,3.055Z" transform="translate(-269.379 -105.218)" fill="#fff"/>
						</g>
					  </g>
					  <text id="Quickeat-w" transform="translate(320 77)" fill="#fff" font-size="20" font-family="Poppins" font-weight="700"><tspan x="0" y="0">Campus</tspan><tspan y="0" fill="#f29f05">Eats</tspan></text>
					</g>
				  </svg>
	
					</a>
				  </div>
				<ul>
					
					

					  <li><a href="/">Home</a></li>
						
					 <li><a href="/#restaurants">Restaurants</a></li>
					 <li><a href="/#foods">Food</a></li>
					 <!-- <li><a href="/#reviews">Reviews</a></li>  -->
					 <li><a href="/about">About Us</a></li>
					</ul>
          <a href="JavaScript:void(0)" id="res-cross"></a>
      </div>
		</div>
	   </div>
    </header>


	
    @yield('content')

	

	<!-- footer -->
	<footer class="gap no-bottom" style="background-color: #363636;">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 col-md-6 col-sm-12">
					<div class="footer-description">
						<a href="/">
							<svg xmlns="http://www.w3.org/2000/svg" width="220" height="38" viewBox="0 0 220 38">
                <g id="Logo-w" transform="translate(-260 -51)">
                  <g id="Logo-2-w" data-name="Logo-w" transform="translate(260 51)">
                    <g id="Elements-w">
                      <path id="Path_2429" data-name="Path 2429" d="M315.086,140.507H275.222v-.894c0-11.325,8.941-20.538,19.933-20.538s19.931,9.213,19.931,20.538Z" transform="translate(-270.155 -115.396)" fill="#f29f05"/>
                      <path id="Path_2430" data-name="Path 2430" d="M301.13,133.517a1.488,1.488,0,0,1-1.394-.994,11.361,11.361,0,0,0-10.583-7.54,1.528,1.528,0,0,1,0-3.055,14.353,14.353,0,0,1,13.37,9.527,1.541,1.541,0,0,1-.875,1.966A1.444,1.444,0,0,1,301.13,133.517Z" transform="translate(-264.176 -113.935)" fill="#fff"/>
                      <path id="Path_2431" data-name="Path 2431" d="M297.343,146.544a14.043,14.043,0,0,1-13.837-14.211h2.975a10.865,10.865,0,1,0,21.723,0h2.975A14.043,14.043,0,0,1,297.343,146.544Z" transform="translate(-266.247 -108.544)" fill="#fff"/>
                      <path id="Path_2432" data-name="Path 2432" d="M302.183,132.519a7.064,7.064,0,1,1-14.122,0Z" transform="translate(-264.027 -108.446)" fill="#fff"/>
                      <path id="Path_2433" data-name="Path 2433" d="M320.332,134.575H273.3a1.528,1.528,0,0,1,0-3.055h47.033a1.528,1.528,0,0,1,0,3.055Z" transform="translate(-271.815 -108.923)" fill="#f29f05"/>
                      <path id="Path_2434" data-name="Path 2434" d="M289.154,123.4a1.507,1.507,0,0,1-1.487-1.528v-3.678a1.488,1.488,0,1,1,2.975,0v3.678A1.508,1.508,0,0,1,289.154,123.4Z" transform="translate(-264.154 -116.667)" fill="#f29f05"/>
                      <path id="Path_2435" data-name="Path 2435" d="M284.777,138.133H275.3a1.528,1.528,0,0,1,0-3.055h9.474a1.528,1.528,0,0,1,0,3.055Z" transform="translate(-270.84 -107.068)" fill="#fff"/>
                      <path id="Path_2436" data-name="Path 2436" d="M284.8,141.691h-6.5a1.528,1.528,0,0,1,0-3.055h6.5a1.528,1.528,0,0,1,0,3.055Z" transform="translate(-269.379 -105.218)" fill="#fff"/>
                    </g>
                  </g>
                  <text id="Quickeat-w" transform="translate(320 77)" fill="#fff" font-size="20" font-family="Poppins" font-weight="700"><tspan x="0" y="0">Campus</tspan><tspan y="0" fill="#f29f05">Eats</tspan></text>
                </g>
              </svg>

						</a>
						<h2>The Best Restaurants in Your  Home</h2>
						<p>Vitae congue mauris rhoncus aenean. Enim nulla aliquet porttitor lacus luctus accumsan tortor posuere. Tempus egestas sed sed risus pretium quam.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12">
					<div class="menu">
						<h4>Menu</h4>
						<ul class="footer-menu">
							<li><a href="/#">home<i class="fas fa-arrow-right"></i></a></li>
							<li><a href=" /about">about us<i class="fas fa-arrow-right"></i></a></li>
							<li><a href="/#restaurants">Restaurants<i class="fas fa-arrow-right"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="menu contacts">
						<h4>Contacts</h4>
						<div class="footer-location">
							<i class="fas fa-location-dot"></i>
							<p>South Eatsern Uniiversity of Sri Lanka</p>
						</div>
						<a href="mailto:campuseats@mail.com"><i class="fas fa-envelope"></i>campuseats@mail.com</a>
						<a href="callto:+94799999999"><i class="fas fa-phone"></i>+94 79 999 9999</a>
					</div>
					<ul class="social-media">
							<li><a href="index"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="index"><i class="fab fa-instagram"></i></a></li>
							<li><a href="index"><i class="fab fa-twitter"></i></a></li>
						</ul>
				</div>
			</div>
			<div class="footer-two gap no-bottom">
				<p>Copyright © 2024. CampusEats. All rights reserved.</p>
				<div class="privacy">
					<a href="/">Privacy Policy</a>
					<a href="/">Terms & Services</a>
				</div>
			</div>
		</div>
	</footer>
	<!-- bootstrap -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	<!-- jQuery -->
	<script src="assets/js/jquery-3.6.0.min.js"></script>
	<script src="assets/js/jquery.nice-select.min.js"></script>
	<!-- owl.carousel -->
	<script src="assets/js/owl.carousel.min.js"></script>
	<!-- aos -->
	<script src="assets/js/aos.js"></script>
	<!-- custom -->
	<script src="assets/js/custom.js"></script>



 <script src="assets/js/jquery.waypoints.min.js" type="64d060d09a2ef496689f6e54-text/javascript"></script> 
 <script src="assets/js/jquery.scrollUp.min.js" type="64d060d09a2ef496689f6e54-text/javascript"></script> 
 
</body>