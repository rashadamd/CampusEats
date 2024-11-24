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
	
	<title>@yield('title','CampusEats-Restaurant-Layout')</title>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOM3MLzO8a4syyIQax0e6Tw74D1G/I5R2KVa8FRd" crossorigin="anonymous">

	<link rel="shortcut icon" type="image/png" href="restaurant/images/favicon.png" />
	
	<link rel="stylesheet" href="restaurant/vendor/chartist/css/chartist.min.css">
	<link href="restaurant/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
	<!-- Style css -->
    <link href="restaurant/css/style.css" rel="stylesheet">

		<!-- CSS only -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
		<!-- owl carousel -->
	  <link rel="stylesheet" href="restaurant/assets/css/owl.carousel.min.css">
	  <link rel="stylesheet" href="restaurant/assets/css/owl.theme.default.min.css">
	  <!-- nice-select -->
	  <link rel="stylesheet" href="restaurant/assets/css/nice-select.css">
	  <!-- aos -->
	  <link rel="stylesheet" href="restaurant/assets/css/aos.css">
	  <!-- style -->
	  <link rel="stylesheet" href="restaurant/assets/css/style.css">
	  <!-- responsive -->
	  <link rel="stylesheet" href="restaurant/assets/css/responsive.css">
		<!-- color -->
	  <link rel="stylesheet" href="restaurant/assets/css/color.css">
	
	
		<!-- Font Awesome 5 -->
		<script src="https://kit.fontawesome.com/27a041baf1.js" crossorigin="anonymous"></script>

	
</head>
<body>

@if (session('success'))
<div class="toast-container position-fixed bottom-0 end-0 p-3">
  <div id="liveToast" class="toast bg-success text-white" role="alert" aria-live="assertive" aria-atomic="true" data-bs-autohide="true">
    <div class="toast-header">
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
      {{ session('success') }}
    </div>
  </div>
</div>
@endif

@if (session('failure'))
<div class="toast-container position-fixed bottom-0 end-0 p-3">
  <div id="liveToast" class="toast bg-danger text-white" role="alert" aria-live="assertive" aria-atomic="true" data-bs-autohide="false">
    <div class="toast-header">
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
      {{ session('failure') }}
    </div>
  </div>
</div>
@endif


	
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

    <div id="main-wrapper">



        <div class="nav-header">

            <a href="dashboard" class="brand-logo">
				<img src="restaurant/images/logo.png" alt="CEATS" srcset="" class="logo-abbr" width="100" height="30" >
				<img src="restaurant/images/title.png" alt="" srcset="" class="brand-title" width="250" height="35" >
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
    
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
							
							

                        </div>
                        <ul class="navbar-nav header-right">
							
				
							
							<li class="nav-item dropdown  header-profile">
								<a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
									<img src="{{ asset('storage/'.$user->image) }}" width="56" alt=""/>
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="profile" class="dropdown-item ai-icon">
										<svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
										<span class="ms-2">Profile </span>
									</a>
								
									<form method="POST" action="{{ route('logout') }}" style="display: inline;">
									@csrf
									<button type="submit" class="dropdown-item ai-icon">
										<svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
											<path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
											<polyline points="16 17 21 12 16 7"></polyline>
											<line x1="21" y1="12" x2="9" y2="12"></line>
										</svg>
										<span class="ms-2">Logout</span>
									</button>
								</form>
								</div>
							</li>
							
                        </ul>
                    </div>
				</nav>
			</div>
		</div>

        <div class="deznav">
            <div class="deznav-scroll">
				<ul class="metismenu" id="menu">
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-025-dashboard"></i>
							<span class="nav-text">Dashboard</span>
						</a>
                        <ul aria-expanded="false">
							<li><a href="dashboard">Dashboard </a></li>
							<li><a href="orderpage">Orders</a></li>
							
							<!-- <li><a href="review">Review</a></li>	 -->
						</ul>

                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
						<i class="flaticon-050-info"></i>
							<span class="nav-text">Apps</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="profile">Profile</a></li>
							
                
							<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Shop</a>
                                <ul aria-expanded="false">
                                    <li><a href="menuview">Product Grid</a></li>
									<li><a href="productorder">Order</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    
                </ul>
				<a href="menu">
					<div class="plus-box">
					<img src="restaurant/images/plus.png" alt="">
					<h5 class="fs-18 font-w700">Add Menus</h5>
					<p class="fs-14 font-w400">Manage your food <br>and beverages menus<i class="fas fa-arrow-right ms-3"></i></p>
				</div>
				</a>
				
				<div class="copyright">
					<p><strong>CampusEats</strong> © 2024 All Rights Reserved</p>
					<p class="fs-12">Made with <span class="heart"></span>  by Group 3</p>
				</div>
			</div>
        </div>

        <div class="content-body">
            <!-- row -->
             @yield('content')
			
        </div>

        <div class="footer">
		
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="" target="_blank">Rashad</a> 2024</p>
            </div>
        </div>

		<style>
			.DZ-bt-buy-now,.DZ-theme-btn, .DZ-bt-support-now, .DZ-theme-btn{
					display: none !important;
				}
		</style>
	

	</div>

    <!-- Required vendors -->
    <script src="restaurant/vendor/global/global.min.js"></script>
	<script src="restaurant/vendor/chart.js/Chart.bundle.min.js"></script>
	<script src="restaurant/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
	
	
	<!-- Apex Chart -->
	<script src="restaurant/vendor/apexchart/apexchart.js"></script>
	
	<!-- Chart piety plugin files -->
    <script src="restaurant/vendor/peity/jquery.peity.min.js"></script>
	
	<!-- Dashboard 1 -->
	<script src="restaurant/js/dashboard/dashboard-1.js"></script>

    <script src="restaurant/js/custom.min.js"></script>
	<script src="restaurant/js/deznav-init.js"></script>
   
	<script>
		jQuery(document).ready(function(){
			setTimeout(function(){
				dezSettingsOptions.version = 'dark';
				new dezSettings(dezSettingsOptions);
			},0)
		});
	</script>
		<script>
		document.addEventListener('DOMContentLoaded', () => {
			const toastLiveExample = document.getElementById('liveToast');
			const toast = new bootstrap.Toast(toastLiveExample);
			toast.show(); // Automatically display the toast
		});

    </script>
	
</body>
</html>