<!DOCTYPE html>
<html lang="zxx">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title','CampusEats-User-Layout')</title>
  <link rel="icon" href="user/assets/img/fav-icon.png">

	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<!-- owl carousel -->
  <link rel="stylesheet" href="user/assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="user/assets/css/owl.theme.default.min.css">
  <!-- nice-select -->
  <link rel="stylesheet" href="user/assets/css/nice-select.css">
  <!-- aos -->
  <link rel="stylesheet" href="user/assets/css/aos.css">
  <!-- style -->
  <link rel="stylesheet" href="user/assets/css/style.css">
  <!-- responsive -->
  <link rel="stylesheet" href="user/assets/css/responsive.css">
	<!-- color -->
  <link rel="stylesheet" href="user/assets/css/color.css">


  <link rel="stylesheet" href="user/vendor/chartist/css/chartist.min.css">
	<link href="user/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
	<!-- Style css -->
    <link href="user/css/style.css" rel="stylesheet">

	<!-- Font Awesome 5 -->
	<script src="https://kit.fontawesome.com/27a041baf1.js" crossorigin="anonymous"></script>
	
</head>




<body class="menu-layer">

	<!-- loader start-->
	<div class="page-loader">
		<div class="wrapper">
	        <div class="circle"></div>
	        <div class="circle"></div>
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
						<a href="userindex">
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
	           				<a href="checkout" class="menu-btn"><i class="fa-solid fa-bag-shopping"></i></a>
		                		<div class="bar-menu"><i class="fa-solid fa-bars"></i></div>
						</div>
					</div>
				</div>


				<div class="col-lg-7">
					<nav class="navbar">
				      <ul class="navbar-links">
				        <li class="navbar-dropdown {{ Request::is('userindex') ? 'active' : '' }} ">
				          <a href="userindex">Home</a>
				        </li>
				        <li class="navbar-dropdown {{ Request::is('userabout') ? 'active' : '' }} ">
				          <a href="userabout">About Us</a>
				        </li>
				        <li class="navbar-dropdown {{ Request::is('restaurants') ? 'active' : '' }} ">
				          <a href="restaurants">Restaurants</a>
				          <div class="dropdown">
				            <a href="restaurants">Restaurants</a>
				            <a href="restaurantcard">Restaurant Card</a>
				            <a href="checkout">Checkout</a>
				          </div>
				        </li>
				      </ul>
				    </nav>
				</div>

				<div class="col-lg-3">
					<div class="extras bag">
						 
						<li class="nav-item dropdown  header-profile" >
							<a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
								<img src="{{ asset('storage/'.$user->image) }}" width="56" alt=""/>
							</a>
							<div class="dropdown-menu dropdown-menu-end">
								<a href="userprofile" class="dropdown-item ai-icon">
									<svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
									<span class="ms-2">Profile </span>
								</a>
							
								<a href="../login" class="dropdown-item ai-icon">
									<svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
									<span class="ms-2">Logout </span>
								</a>

							</div>
						</li>
					</div>
				</div>
				
         	 <div class="mobile-nav hmburger-menu" id="mobile-nav" style="display:block;">


            <div class="res-log">
            	<a href="userindex">
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

				  <li><a href="userindex">Home</a>
				  </li>

				  <li><a href="userabout">About Us</a></li>

                  <li class="menu-item-has-children"><a href="JavaScript:void(0)">Restaurants</a>

					<ul class="sub-menu">

                      <li><a href="restaurants">Restaurants</a></li>
				      <li><a href="restaurantcard">Restaurant Card</a></li>
				      <li><a href="checkout">Checkout</a></li>
                    </ul>

                   </li>
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
							<a href="userindex">
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
								<li><a href="userindex.">Home<i class="fa-solid fa-arrow-right"></i></a></li>
								<li><a href="userabout">About us<i class="fa-solid fa-arrow-right"></i></a></li>
								<li><a href="restaurants">Restaurants<i class="fa-solid fa-arrow-right"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12">
						<div class="menu contacts">
							<h4>Contacts</h4>
							<div class="footer-location">
								<i class="fa-solid fa-location-dot"></i>
								<p>South Eatsern Uniiversity of Sri Lanka</p>
							</div>
							<a href="mailto:campuseats@mail.com"><i class="fa-solid fa-envelope"></i>campuseats@mail.com</a>
							<a href="callto:+94799999999"><i class="fa-solid fa-phone"></i>+94 79 999 9999</a>
						</div>
						<ul class="social-media">
								<li><a href="userindex"><i class="fa-brands fa-facebook-f"></i></a></li>
								<li><a href="userindex"><i class="fa-brands fa-instagram"></i></a></li>
								<li><a href="userindex"><i class="fa-brands fa-twitter"></i></a></li>
							</ul>
					</div>
				</div>
				<div class="footer-two gap no-bottom">
					<p>Copyright © 2024. CampusEats. All rights reserved.</p>
					<div class="privacy">
						<a href="userindex">Privacy Policy</a>
						<a href="userindex">Terms & Services</a>
					</div>
				</div>
			</div>
		</footer>
		<!-- bootstrap -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
		<!-- jQuery -->
		<script src="user/assets/js/jquery-3.6.0.min.js"></script>
		<script src="user/assets/js/jquery.nice-select.min.js"></script>
		<!-- owl.carousel -->
		<script src="user/assets/js/owl.carousel.min.js"></script>
		<!-- aos -->
		<script src="user/assets/js/aos.js"></script>
		<!-- custom -->
		<script src="user/assets/js/custom.js"></script>
	
	
	
	 <script src="user/assets/js/jquery.waypoints.min.js" type="64d060d09a2ef496689f6e54-text/javascript"></script> 
	 <script src="user/assets/js/jquery.scrollUp.min.js" type="64d060d09a2ef496689f6e54-text/javascript"></script> 
	
	</body>