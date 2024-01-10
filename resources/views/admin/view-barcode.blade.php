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

		<link rel="stylesheet" href="{{asset('assets')}}/plugins/owlcarousel/owl.carousel.min.css">

		<link rel="stylesheet" href="{{asset('assets')}}/plugins/icons/feather/feather.css">
		
	</head>
	<body>
		<div id="global-loader" >
			<div class="whirly-loader"> </div>
		</div>
		<!-- Main Wrapper -->
		<div class="main-wrapper">

			<div class="page-wrapper">
                <div class="content">
                    <!-- /product list -->
                    <section class="comp-section">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-4 d-flex">
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 d-flex">
                                <div class="flex-fill">
                                    @foreach ($produk as $item)
                                    {!! DNS2D::getBarcodeSVG($item->kodeproduk, 'QRCODE',10,10)!!}
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 d-flex">
                            </div>
                        </div>
                    </section>
                    <!-- /product list -->
                </div>
            </div>
            

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

		<!-- Fileupload JS -->
		<script src="{{asset('assets')}}/plugins/fileupload/fileupload.min.js"></script>
		
		<!-- Custom JS -->
		<script src="{{asset('assets')}}/js/script.js"></script>

		<script src="{{asset('assets')}}/plugins/owlcarousel/owl.carousel.min.js"></script>

		<!-- Sweetalert 2 -->
		<script src="{{asset('assets')}}/plugins/sweetalert/sweetalert2.all.min.js"></script>

		<!-- SweetAlert2 -->
        <script src="{{asset('plugins')}}/sweetalert2/sweetalert2.min.js"></script>
        <!-- Toastr -->
        <script src="{{asset('plugins')}}/toastr/toastr.min.js"></script>
		<script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>

		<script>
			function onScanSuccess(decodedText, decodedResult) {
				// handle the scanned code as you like, for example:
				
				 // alert(decodedText);
				 $('#result').val(decodedText);
					let id = decodedText;                
					html5QrcodeScanner.clear().then(_ => {
						var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
						$.ajax({
							
							url: "scanbarcodevalidasi",
							type: 'POST',            
							data: {
								_methode : "POST",
								_token: CSRF_TOKEN, 
								qr_code : id
							},            
							success: function (data) { 
								if(data){
									var Toast = Swal.mixin({
									toast: true,
									position: 'top-end',
									showConfirmButton: false,
									timer: 3000
									});
									
									toastr.success('Data Berhasil Ditemukan')
									window.location ="produk-detail/"+id;
								}else{
									alert('gagal');
								}
								
							}
						});   
					}).catch(error => {
						alert('something wrong');
					});
					
				}
	 
				function onScanFailure(error) {
				// handle scan failure, usually better to ignore and keep scanning.
				// for example:
					// console.warn(`Code scan error = ${error}`);
				}
	 
				let html5QrcodeScanner = new Html5QrcodeScanner(
				"reader",
				{ fps: 10, qrbox: {width: 250, height: 250} },
				/* verbose= */ false);
				html5QrcodeScanner.render(onScanSuccess, onScanFailure);
		</script>
	
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