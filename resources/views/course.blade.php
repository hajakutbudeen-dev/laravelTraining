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

	
	<!-- single course section -->
	<section class="single-course spad pb-0">
		<div class="container">
			<div class="course-meta-area">
				<div class="row">
					<div class="col-lg-10 offset-lg-1">
						<h3>HTML5 & CSS For Begginers</h3>
						<div class="course-metas">
							<div class="course-meta">
								<div class="course-author">
									<div class="ca-pic set-bg" data-setbg="img/authors/2.jpg"></div>
									<h6>Teacher</h6>
									<p>William Parker, <span>Developer</span></p>
								</div>
							</div>
							<div class="course-meta">
								<div class="cm-info">
									<h6>Category</h6>
									<p>Development</p>
								</div>
							</div>
							<div class="course-meta">
								<div class="cm-info">
									<h6>Students</h6>
									<p>120 Registered Students</p>
								</div>
							</div>
							<div class="course-meta">
								<div class="cm-info">
									<h6>Hours</h6>
									<p>60 Hours</p>
								</div>
							</div>
						</div>
						<a href="#" class="site-btn price-btn">Price: $15</a>
						<a href="#" class="site-btn buy-btn">Register Now</a>
					</div>
				</div>
			</div>
			<img src="img/courses/single.jpg" alt="" class="course-preview">
			<div class="row">
				<div class="col-lg-12 course-list">
					<div class="cl-item">

						<div id="accordion" class="accordion-area">
							<div class="panel">
								<div class="panel-header" id="headingOne">
									<button class="panel-link active" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">Course description</button>
								</div>
								<div id="collapse1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
									<div class="panel-body">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
									</div>
								</div>
							</div>
							<div class="panel">
								<div class="panel-header" id="headingTwo">
									<button class="panel-link" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">What you will learn</button>
								</div>
								<div id="collapse2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
									<div class="panel-body" style="display: flex;justify-content: space-between;">
										<div class="widget-item">
											<ul class="contact-list">
												<li>C</li>
												<li>C++</li>
											</ul>
										</div>
										<div class="widget-item">
											<ul class="contact-list">
												<li>Java</li>
												<li>Python</li>
											</ul>
										</div>
										<div class="widget-item">
											<ul class="contact-list">
												<li>.NET</li>
												<li>Javascript</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="panel">
								<div class="panel-header active" id="headingThree">
									<button class="panel-link" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse3">About Instructor</button>
								</div>
								<div id="collapse3" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
									<div class="panel-body">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
									</div>
								</div>
							</div>
						</div>
				</div>
			</div>
		</div>
	</section>
	<!-- single course section end -->


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