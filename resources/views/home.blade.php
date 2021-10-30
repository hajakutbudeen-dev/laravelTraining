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

	<!-- Hero section -->
	<section class="hero-section set-bg" data-setbg="{{asset('frontend/img/bg.png')}}">
		<div class="container">
			<div class="hero-text text-white" style="margin-bottom: 40px; padding-top: 300px;">
				<h2>Get The Best Online Courses</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla <br> dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
			</div>
		</div>
	</section>
	<!-- Hero section end -->

    <!-- banner section -->
	<section class="banner-section spad">
		<div class="container">
			<div class="section-title mb-0 pb-2">
				<h2>Join Our Community Now!</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
			</div>
			<div class="text-center pt-5">
				<a href="{{ url('join') }}" class="site-btn">Register Now</a>
			</div>
		</div>
	</section>
	<!-- banner section end -->


    <!-- search section -->
	<section class="search-section">
		<div class="container-fluid" style="margin: 0;padding: 0;">
			<div class="search-warp" style="height: 250px;">
                
			</div>
		</div>
	</section>
	<!-- search section end -->


	<!-- categories section -->
	<section class="categories-section spad">
		<div class="container">
			<div class="section-title">
				<h2>Our Course Categories</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
			</div>
			<div class="row">
				<!-- categorie -->
				@foreach($categories as $catogory)
				<div class="col-lg-4 col-md-6">
					<div class="categorie-item">
						<div class="ci-thumb set-bg" data-setbg="{{$catogory->image}}">
                    </div>
						<div class="ci-text">
							<h5>{{$catogory->category_name}}</h5>
							<p>Lorem ipsum dolor sit amet, consectetur</p>
							<span>Courses</span> 
							<!-- C, C++, C#, VB.Net, Java, Python, Electron JS -->
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</section>
	<!-- categories section end -->


	<!-- search section -->
	<section class="search-section">
		<div class="container-fluid" style="margin: 0;padding: 0;">
			<div class="search-warp" style="height: 250px;">
                
			</div>
		</div>
	</section>
	<!-- search section end -->


	<!-- course section -->
	<section class="course-section spad">
		<div class="container">
			<div class="section-title mb-0">
				<h2>Courses</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
			</div>
		</div>
		<div class="course-warp">
			<ul class="course-filter controls">
				<li class="control active" data-filter="all">All</li>
				@foreach($categories as $catogory)
				<li class="control" data-filter="{{$catogory->slug}}">{{$catogory->category_name}}</li>
				@endforeach
			</ul>                                       
			<div class="row course-items-area">
				<!-- course -->
				@foreach($courses as $course)
				<div class="mix col-lg-3 col-md-4 col-sm-6 {{$catogory->slug}}">
					<div class="course-item">
						<div class="course-thumb set-bg" data-setbg="{{$course->image}}">
							<div class="price">Price: {{$course->price}}</div>
						</div>
						<div class="course-info">
							<div class="course-text">
								<h5>{{$course->title}}</h5>
								<p>{{$course->description}}</p>
								<div class="students">20 Students</div>
							</div>
							<div class="course-author">
								<div class="ca-pic set-bg" data-setbg="{{asset('frontend/img/authors/1.jpg')}}">
                            </div>
								<p>William Parker, <span>Developer</span></p>
							</div>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</section>
	<!-- course section end -->

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





<!-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>NCIT Training</title>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
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
            @endif

        </div>
    </body>
</html> -->
