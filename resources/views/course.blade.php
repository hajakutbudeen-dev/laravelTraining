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
	<section class="single-course spad pb-0" style="padding-top: 50px;">
		<div class="container">
			<div class="row" style="margin: 0px;">
					@if (!empty($course->category))
				<div class="col-lg-12 jumbotron" style="height: 400px; background-position-x: center; background-position-y: center; background-image:url('{{url('/')}}/{{$course->image}}')">
				</div>
					@endif
			</div>
			<div class="course-meta-area">
				<div class="row">
					<div class="col-lg-10 offset-lg-1">
						<h3>{{$course->title}}</h3>
						<div class="course-metas">
							<div class="course-meta">
								<div class="course-author">
									@if (!empty($course->instructor))
									<div class="ca-pic set-bg" data-setbg="{{url('/')}}/{{$course->instructor->image}}"></div>
									<h6>Teacher</h6>
									<p>{{$course->instructor->name}}, <span>{{$course->instructor->designation}}</span></p>
									@endif
								</div>
							</div>
							<div class="course-meta">
								<div class="cm-info">
									<h6>Category</h6>
									@if (!empty($course->category))
									<p>{{$course->category->category_name}}</p>
									@endif
								</div>
							</div>
							<div class="course-meta">
								<div class="cm-info">
									<h6>Lauguage</h6>
									@if (!empty($course->locale))
										@foreach(explode(',', str_replace(['"','[', ']'], '', $course->locale)) as $language) 
											<p>{{$language}}</p>
										@endforeach
									@endif
								</div>
							</div>
							<div class="course-meta">
								<div class="cm-info">
									<h6>Duration</h6>
									<p>{{$course->duration}}</p>
								</div>
							</div>
						</div>
						<a href="#" class="site-btn price-btn">Price: {{$course->price}}</a>
						<a href="#" class="site-btn buy-btn" data-toggle="modal" data-target="#enq-modal">Register Now</a>
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
										<p>{{$course->description}}</p>
									</div>
								</div>
							</div>
							<div class="panel">
								<div class="panel-header" id="headingTwo">
									<button class="panel-link active" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">What you will learn</button>
								</div>
								<div id="collapse2" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordion">
									<div class="panel-body" style="display: flex;justify-content: space-between;">
										<div class="widget-item">
											<ul class="contact-list">
												@if (!empty($course->technologies))
													@foreach(explode(',', str_replace(['"','[', ']'], '', $course->technologies)) as $technology) 
														<li>{{$technology}}</li>
													@endforeach
												@endif
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="panel">
								<div class="panel-header active" id="headingThree">
									<button class="panel-link active" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse3">About Instructor</button>
								</div>
								<div id="collapse3" class="collapse show" aria-labelledby="headingThree" data-parent="#accordion">
									<div class="panel-body">
										@if (!empty($course->instructor))
										<p>{{$course->instructor->description}}</p>
										@endif
									</div>
								</div>
							</div>
						</div>
				</div>
			</div>
		</div>
	</section>
	<!-- single course section end -->

	<div class="modal fade" id="enq-modal">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Enquiry Form</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            
			<!-- Enquiry Form start -->
			<form action="{{ url('guest-enquiry-add') }}" method="post" enctype="multipart/form-data">
				@csrf
				<div class="card-body">
					<div class="form-group">
						<label for="enquiryFName">Name</label>
						<input type="name" name="name" class="form-control" id="enquiryFName" placeholder="Ex: Thomas" required>
					</div>
					<div class="form-group">
						<label for="enquiryDob">Date of Birth</label>
						<input type="date" name="dob" class="form-control" id="enquiryDob" required>
					</div>
					<div class="form-group">
						<label>Gender</label>
						<select class="form-control select2" style="width: 100%;" name="gender" required>
							<option selected="selected" disabled>Select Option</option>
							<option>Male</option>
							<option>Female</option>
						</select>
					</div>
					<div class="form-group">
						<label for="enquiryEmail">Email</label>
						<input type="name" name="email" class="form-control" id="enquiryEmail" placeholder="Ex: info@email.com" required>
					</div>
					<div class="form-group">
						<label for="enquiryPhone">Phone</label>
						<input type="name" name="phone" class="form-control" id="enquiryPhone" placeholder="Ex: +91 23224 23232" required>
					</div>
					<div class="form-group">
						<label for="enquiryPassedOut">Passed Out</label>
						<input type="name" name="passedout" class="form-control" id="enquiryPassedOut" placeholder="Ex: 2021" required>
					</div>
					<div class="form-group">
						<label>Qualification</label>
						<select class="form-control select2" style="width: 100%;" name="qualification" required>
						<option selected="selected" disabled>Select Option</option>
								@foreach($degrees as $degree)
							<option value="{{$degree->id}}">{{$degree->degree_name}}</option>
								@endforeach
						</select>
					</div>
					<div class="form-group">
						<label>Specialization</label>
						<select class="form-control select2" style="width: 100%;" name="specialization" required>
						<option selected="selected" disabled>Select Option</option>
								@foreach($specializations as $specialization)
							<option value="{{$specialization->id}}">{{$specialization->major_name}}</option>
								@endforeach
						</select>
					</div>
					<div class="form-group">
						<label>College</label>
						<select class="form-control select2" style="width: 100%;" name="college" required>
						<option selected="selected" disabled>Select Option</option>
								@foreach($colleges as $college)
							<option value="{{$college->id}}">{{$college->college_name}}</option>
								@endforeach
						</select>
					</div>
					<div class="form-group">
						<label>Course</label>
						<select class="form-control select2" style="width: 100%;" name="course" required>
							<option selected="selected" value="{{$course->id}}">{{$course->title}}</option>
						</select>
					</div>
					<div class="form-group">
						<label>Payment Type</label>
						<select class="form-control select2" style="width: 100%;" name="payment" required>
						<option selected="selected" disabled>Select Option</option>
						<option value='full'>Full Payment</option>
						<option value='emi'>EMI Payment (split by 2)</option>
						</select>
					</div>
					<div class="form-group">
						<label>Address</label>
						<textarea class="form-control" name="address" rows="3" placeholder="About ..."></textarea>
					</div>
				</div>
            </div>

            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			  <button type="submit" class="btn btn-primary" style="padding: 7px 30px;">Save</button>
            </div>

			<!-- Enquiry Form end -->
			</form>

          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>


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