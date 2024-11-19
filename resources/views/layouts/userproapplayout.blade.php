<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<meta name="format-detection" content="telephone=no">
	
	<!-- PAGE TITLE HERE -->
	<title>@yield('title','CampusEats-User-Profile-Layout')</title>
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOMZ/3q3vi4tG7FfA61LVXoTzF8S/WL9s1Cv3Kka" crossorigin="anonymous">

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

	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="user/images/favicon.png" />
	<link href="user/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
	<link href="user/vendor/lightgallery/css/lightgallery.min.css" rel="stylesheet">
    <link href="user/css/style.css" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="gooey">
		  <span class="dot"></span>
		  <div class="dots">
			<span></span>
			<span></span>
			<span></span>
		  </div>
		</div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

         <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
			<a href="userindex" class="brand-logo">
				<img src="user/images/logo.png" alt="CEATS" srcset="" class="logo-abbr" width="90" height="35" >
				<img src="user/images/title.png" alt="" srcset="" class="brand-title" width="200" height="40" >
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->
		
		
		
		<!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
							<div class="nav-item">
								
								<div class="col-lg-8">
									<nav class="navbar">
									  <ul class="navbar-links">
										<li class="navbar-dropdown {{ Request::is('userindex') ? 'active' : '' }} ">
										  <a href="userindex">Home</a>
										</li>
										<li class="navbar-dropdown {{ Request::is('userabout') ? 'active' : '' }} ">
										  <a href="userabout">About </a>
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
							</div>
                        </div>


                        <ul class="navbar-nav header-right">
							
							<li class="nav-item dropdown  header-profile">
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
							
                        </ul>
                    </div>
				</nav>
			</div>
		</div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
		<div class="deznav">
            <div class="deznav-scroll">
				<ul class="metismenu" id="menu">
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-025-dashboard"></i>
							<span class="nav-text">Dashboard</span>
						</a>
                       
						<ul aria-expanded="false">
							<li><a href="userprofile">Profile</a></li>
							<li><a href="userorderpage">Orders</a></li>
						</ul>

                    </li>
                
                   
                </ul>
				<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
				
				<div class="copyright">
					<p><strong>CampusEats</strong> © 2024 All Rights Reserved</p>
					<p class="fs-12">Made with by Group 3</p>
				</div>
			</div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
         @yield('content')
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
		<div class="footer">
		
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="" target="_blank">Rashad</a> 2024</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

		<style>
			.DZ-bt-buy-now,.DZ-theme-btn, .DZ-bt-support-now, .DZ-theme-btn{
					display: none !important;
				}
		</style>

        
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->
	
	<!--removeIf(production)-->
        
    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="user/vendor/global/global.min.js"></script>
	<script src="user/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="user/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
    <script src="user/vendor/chart.js/Chart.bundle.min.js"></script>
	<script src="user/vendor/lightgallery/js/lightgallery-all.min.js"></script>
    <script src="user/js/custom.min.js"></script>
	<script src="user/js/deznav-init.js"></script>
	
	<script>
		jQuery(document).ready(function(){
			setTimeout(function(){
				dezSettingsOptions.version = 'dark';
				new dezSettings(dezSettingsOptions);
			},0)
		});
	</script>

	
</body>
</html>