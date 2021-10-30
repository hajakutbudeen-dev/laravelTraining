<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<title>NCIT Training</title>
	<meta charset="UTF-8">
	<meta name="description" content="WebUni Education Template">
	<meta name="keywords" content="webuni, education, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="{{asset('frontend/img/favicon.png')}}" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.css')}}"/>
	<link rel="stylesheet" href="{{asset('frontend/css/style.css')}}"/>

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	 <!-- Header section -->
	 <header class="header-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="site-logo">
                        <img src="img/logo.png" alt="">
                    </div>
                    <div class="nav-switch">
                        <i class="fa fa-bars"></i>
                    </div>
                </div>
				<div class="col-lg-8 col-md-8">
                    @if (Route::has('login'))
                    @auth
					<a href="{{ url('/dashboard') }}" class="site-btn header-btn btn-sm">Dashboard</a>
                    @else
					<a href="{{ route('login') }}" class="site-btn header-btn btn-sm" style="margin-top: 10px; padding: 10px 5px;">Login</a>
                    @endif
                    @endauth
					<nav class="main-menu">
						<ul>
							<li><a href="{{ url('/') }}">Home</a></li>
							<li><a href="#">About us</a></li>
							<li><a href="#">Courses</a></li>
							<li><a href="#">News</a></li>
							<li><a href="#">Contact</a></li>
						</ul>
					</nav>
				</div>
            </div>
        </div>
    </header>
    <!-- Header section end -->


    <!-- Page info -->
    <div class="page-info-section set-bg" data-setbg="{{asset('frontend/img/bg.png')}}" style="height: 350px;">
        <div class="container">
            <div class="site-breadcrumb">
                <a href="#">Home</a>
                <span>Courses</span>
            </div>
        </div>
    </div>
    <!-- Page info end -->
	
	<!-- Header section -->
	<header class="header-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4">
					<div class="site-logo">
						<img src="{{asset('frontend/img/logo.png')}}" alt="">
					</div>
					<div class="nav-switch">
						<i class="fa fa-bars"></i>
					</div>
				</div>
				<div class="col-lg-8 col-md-8">
                    @if (Route::has('login'))
                    @auth
					<a href="{{ url('/dashboard') }}" class="site-btn header-btn btn-sm">Dashboard</a>
                    @else
					<a href="{{ route('login') }}" class="site-btn header-btn btn-sm" style="margin-top: 10px; padding: 10px 5px;">Login</a>
                    @endif
                    @endauth
					<nav class="main-menu">
						<ul>
							<li><a href="{{ url('/') }}">Home</a></li>
							<li><a href="#">About us</a></li>
							<li><a href="#">Courses</a></li>
							<li><a href="#">News</a></li>
							<li><a href="#">Contact</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>
	<!-- Header section end -->

    <!-- @if (Route::has('login'))
       <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
    @auth
        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
    @else
        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
    @if (Route::has('register'))
        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
    @endif
    @endauth
        </div>
    @endif -->
	
	<!-- signup section -->
	<section class="signup-section spad" style="padding: 50px 0px; background:#ffffff">
		<div class="container-fluid">
			<div class="row" style="justify-content: center;">
				<div class="col-lg-8">
					<div class="signup-warp">
						<div class="section-title text-white text-left">
							<h2 style="color:#7f8080">Sign up to became a student</h2>
							<p style="color:#7f8080">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
						</div>
						<!-- signup form -->
						<form class="signup-form" style="padding:0px">
							<input type="text" placeholder="Your Name">
							<input type="text" placeholder="Your E-mail">
							<input type="text" placeholder="Your Phone">
							<button class="site-btn">Search Couse</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- signup section end -->


	<!-- footer section -->
	<footer class="pb-0">
		<div class="footer-bottom" style="background:#0acacd;">
			<div class="footer-warp">
				<ul class="footer-menu">
					<li><a style="color:#ffffff;" href="{{ url('/') }}">Home</a></li>
				    <li><a style="color:#ffffff;" href="#">About us</a></li>
					<li><a style="color:#ffffff;" href="#">Courses</a></li>
					<li><a style="color:#ffffff;" href="#">News</a></li>
					<li><a style="color:#ffffff;" href="#">Contact</a></li>
				</ul>
				<div class="copyright"><a target="_blank" href="#" style="color:#ffffff">Powered By Hajakutbudeen</a></div>
			</div>
		</div>
	</footer> 
	<!-- footer section end -->
	<!--====== Javascripts & Jquery ======-->
	<script src="{{asset('frontend/js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('frontend/js/mixitup.min.js')}}"></script>
	<script src="{{asset('frontend/js/circle-progress.min.js')}}"></script>
	<script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('frontend/js/main.js')}}"></script>
</body>
</html>