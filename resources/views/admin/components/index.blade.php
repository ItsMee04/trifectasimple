<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		<meta name="description" content="POS - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern,  html5, responsive">
		<meta name="author" content="Dreamguys - Bootstrap Admin Template">
		<meta name="robots" content="noindex, nofollow">
		<meta name="csrf-token" content="{{csrf_token()}}">
		<title>Trifecta SIMpel - @yield('title')</title>
		
		<!-- Favicon -->
		<link rel="shortcut icon" type="image/x-icon" href="{{asset('assets')}}/img/trifecta.png">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.min.css">
		
		<!-- Animation CSS -->
		<link rel="stylesheet" href="{{asset('assets')}}/css/animate.css">

		<!-- Select2 CSS -->
		<link rel="stylesheet" href="{{asset('assets')}}/plugins/select2/css/select2.min.css">

		<!-- Datatable CSS -->
		<link rel="stylesheet" href="{{asset('assets')}}/css/dataTables.bootstrap4.min.css">
		
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="{{asset('assets')}}/plugins/fontawesome/css/fontawesome.min.css">
		<link rel="stylesheet" href="{{asset('assets')}}/plugins/fontawesome/css/all.min.css">
		
		<!-- Main CSS -->
		<link rel="stylesheet" href="{{asset('assets')}}/css/style.css">

        <!-- SweetAlert2 -->
        <link rel="stylesheet" href="{{asset('plugins')}}/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
        <!-- Toastr -->
        <link rel="stylesheet" href="{{asset('plugins')}}/toastr/toastr.min.css">
		
	</head>
	<body>
		<div id="global-loader" >
			<div class="whirly-loader"> </div>
		</div>
		<!-- Main Wrapper -->
		<div class="main-wrapper">

			<!-- Header -->
			@include('admin.components.header')
			<!-- Header -->
			
			<!-- Sidebar -->
			@include('admin.components.sidebar')
			<!-- /Sidebar -->

			@yield('content')

		</div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
		<script src="{{asset('assets')}}/js/jquery-3.6.0.min.js"></script>

		<!-- Feather Icon JS -->
		<script src="{{asset('assets')}}/js/feather.min.js"></script>

		<!-- Slimscroll JS -->
		<script src="{{asset('assets')}}/js/jquery.slimscroll.min.js"></script>

		<!-- Datatable JS -->
		<script src="{{asset('assets')}}/js/jquery.dataTables.min.js"></script>
		<script src="{{asset('assets')}}/js/dataTables.bootstrap4.min.js"></script>
		
		<!-- Bootstrap Core JS -->
		<script src="{{asset('assets')}}/js/bootstrap.bundle.min.js"></script>

		<!-- Select2 JS -->
		<script src="{{asset('assets')}}/plugins/select2/js/select2.min.js"></script>
        <script src="{{asset('assets')}}/plugins/select2/js/custom-select.js"></script>

		<!-- Chart JS -->
		<script src="{{asset('assets')}}/plugins/apexchart/apexcharts.min.js"></script>
		<script src="{{asset('assets')}}/plugins/apexchart/chart-data.js"></script>
		
		<!-- Custom JS -->
		<script src="{{asset('assets')}}/js/script.js"></script>

		<!-- Sweetalert 2 -->
		<script src="{{asset('assets')}}/plugins/sweetalert/sweetalert2.all.min.js"></script>

		<!-- SweetAlert2 -->
        <script src="{{asset('plugins')}}/sweetalert2/sweetalert2.min.js"></script>
        <!-- Toastr -->
        <script src="{{asset('plugins')}}/toastr/toastr.min.js"></script>
        @if (session('danger'))
		<script>
		$(function()
		{
			var Toast = Swal.mixin({
			toast: true,
			position: 'top-end',
			showConfirmButton: false,
			timer: 3000
			});
			
			toastr.error('{{session('danger')}}')
		});
		</script>
		@endif
		@if (session('success'))
		<script>
		$(function()
		{
			var Toast = Swal.mixin({
			toast: true,
			position: 'top-end',
			showConfirmButton: false,
			timer: 3000
			});
			
			toastr.success('{{session('success')}}')
		});
		</script>
		@endif
	</body>
</html>