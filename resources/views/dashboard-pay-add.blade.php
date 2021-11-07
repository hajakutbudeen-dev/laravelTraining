<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>NCIT Admin</title>

  <!-- Favicon -->   
  <link href="{{asset('frontend/img/favicon.png')}}" rel="shortcut icon"/>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('backend/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('backend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('backend/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('backend/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('backend/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('backend/plugins/summernote/summernote-bs4.min.css')}}">
  
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
      <!-- Profile Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-user"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-header">
              Welcome {{ Auth::user()->name }}
            </a>
          <div class="dropdown-divider"></div>
          <a href="{{ url('user/profile') }}" class="dropdown-item"> Profile </a>
          <div class="dropdown-divider"></div>
          <a href="{{ url('logout') }}" class="dropdown-item dropdown-footer">Logout</a>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <span class="brand-text">NCIT Admin Panel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
          <a href="{{ url('dashboard') }}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
               Instructors
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('admin-instructors-view') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('admin-instructor-add') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user-graduate"></i>
              <p>
              Enquiries
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('admin-enquiries-view') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('admin-enquiry-add') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
              Categories
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('admin-categories-view') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('admin-category-add') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-image"></i>
              <p>
                Courses
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('admin-courses-view') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('admin-course-add') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-swatchbook"></i>
              <p>
                Technology
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('admin-technologies-view') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('admin-technology-add') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-money-bill"></i>
              <p>
                Payment
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('admin-payments-view') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('admin-payment-add') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{ url('admin-settings') }}" class="nav-link">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Settings
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-md-6">

              <div class="card-body">

              <form action="{{ url('admin-payment-add') }}" method="post">
                @csrf
                <div class="form-group">
                  <label for="paymentName">Enquiry List</label>
                    <div style="display:flex">
                      <select id="enquiryList" class="form-control select2" style="width: 100%;" name="enquiry_no" onchange="getEnquiryInfo('<?php echo csrf_token() ?>')" required>
                        <option selected="selected" disabled>Select Option</option>
                        @foreach($enquiries as $enquiry)
                          <option value="{{$enquiry->id}}">{{$enquiry->name}}</option>
                        @endforeach
                      </select>
                    </div>
                </div>

                <div id="enquiryView" style="display:none">
                  <input id="selectedCourseNo" type="hidden" name="course_no" class="form-control" value="">
                  <input id="selectedPaymentNo" type="hidden" name="payment_no" class="form-control" value="">
                  <div class="form-group">
                        <label for="paymentCoursename">Course Name</label>
                        <input id="selectedCourseName" type="text" name="course_name" class="form-control" value="" readonly>
                  </div>
                  <div class="form-group">
                        <label for="paymentCourseFee">Course Fee</label>
                        <input id="selectedCourseFee" type="text"  name="course_fee" class="form-control" value="" readonly>
                  </div>
                  <div id="enquiryBalance" class="form-group" style="display:none">
                        <label for="paymentCourseFeeBalance">Balance</label>
                        <input id="selectedCourseFeeBalance" type="text"  name="course_fee_balance" class="form-control" value="" readonly>
                  </div>
                  <div class="form-group">
                        <label for="paymentType">Payment Type</label>
                        <input id="selectedCourseType" type="text" name="payment_type" class="form-control" value="" readonly>
                  </div>
                  <div class="form-group">
                      <label for="paymentInvoice">Invoice Number</label>
                      <input type="text" name="invoice_no" class="form-control" placeholder="Ex: TB2451" required>
                  </div>                  
                  <div class="form-group">
                      <label for="paymentRef">Reference Number</label>
                      <input type="text" name="reference_no" class="form-control" placeholder="Ex: ABC23562765712" required>
                  </div>
                  <div class="form-group">
                      <label for="paymentAmount">Amount</label>
                      <input type="text" name="paid" class="form-control" placeholder="Ex: 250" required>
                  </div>
                  <div class="form-group">
                      <label for="paymentEmail">Method</label>
                      <select class="form-control select2" style="width: 100%;" name="payment_method" required>
                          <option selected="selected" disabled>Select Option</option>
                          <option value='cash'>Cash</option>
                          <option value='bank_transfer'>Bank Transfer</option>
                          <option value='gpay'>GPay</option>
                        </select>
                  </div>
                  <div class="footer" style="float: right;">
                      <button type="submit" class="btn btn-primary" style="padding: 7px 30px;">Submit</button>
                  </div>
                </div>

                <div id="enquiryComplete" style="display:none" class="alert alert-success" role="alert">
                Your already paid your course fee!
                </div>

              </form>

              </div>

              <!-- <div class="card-body">
                <form action="{{ url('admin-payment-add') }}" method="post">
                  @csrf
                  <div class="form-group">
                    <label for="paymentInvoice">Invoice Number</label>
                    <input type="text" name="invoice_no" class="form-control" id="paymentInvoice" placeholder="Ex: TB2451" required>
                  </div>                  
                  <div class="form-group">
                    <label for="paymentRef">Reference Number</label>
                    <input type="text" name="reference_no" class="form-control" id="paymentRef" placeholder="Ex: ABC23562765712" required>
                  </div>
                  <div class="form-group">
                    <label for="paymentAmount">Amount</label>
                    <input type="text" name="amount" class="form-control" id="paymentAmount" placeholder="Ex: 250" required>
                  </div>
                  <div class="form-group">
                    <label for="paymentEmail">Method</label>
                    <select class="form-control select2" style="width: 100%;" name="type" required>
                        <option selected="selected" disabled>Select Option</option>
                        <option value='cash'>Cash</option>
                        <option value='bank_transfer'>Bank Transfer</option>
                        <option value='gpay'>GPay</option>
                      </select>
                  </div>
                  <div class="footer" style="float: right;">
                    <button type="submit" class="btn btn-primary" style="padding: 7px 30px;">Submit</button>
                  </div>
                </form>
              </div> -->

          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Powered by Hajakubudeen</strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('backend/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('backend/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('backend/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('backend/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('backend/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('backend/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('backend/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('backend/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('backend/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('backend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('backend/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('backend/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('backend/dist/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('backend/dist/js/pages/dashboard.js')}}"></script>
<script type="text/javascript">
    function getEnquiryInfo(token){
      enquiry_id = document.getElementById("enquiryList").value;
      $.ajax({
          type:'post',
          url:'/admin-payment-enquiry',
          // headers: {
          //   '_token': token,
          // },
          data: {
            '_token': token,
            'id': enquiry_id
          },
          success:function(res) {
            if(res.status == 0){
              document.getElementById("enquiryView").style.display = 'block';
              document.getElementById("enquiryComplete").style.display = 'none';
              document.getElementById("selectedCourseNo").value = res.course.id;
              document.getElementById("selectedCourseName").value = res.course.title;
              document.getElementById("selectedCourseFee").value = res.course.price;
              document.getElementById("selectedCourseType").value = res.payment_type;
              if(res.payment_type != 'full'){
                if(res.payment_id != null){
                  document.getElementById("enquiryBalance").style.display = 'block';
                  document.getElementById("selectedPaymentNo").value = res.payment.id;
                  document.getElementById("selectedCourseFeeBalance").value = res.payment.balance + ' USD';
                } else {
                  document.getElementById("enquiryBalance").style.display = 'none';
                }
              } else {
                document.getElementById("enquiryBalance").style.display = 'none';
              }
            } else {
              document.getElementById("enquiryView").style.display = 'none';
              document.getElementById("enquiryComplete").style.display = 'block';
            }
          }
      });
    }
  </script>
</body>
</html>
