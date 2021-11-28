<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>Baker Bootstrap Template - Index</title>
	<meta content="" name="description">
	<meta content="" name="keywords">

	<!-- Favicons -->
	<link href="{{asset('assets/images/favicon.png')}}" rel="icon">
	<link href="{{asset('assets/images/apple-touch-icon.png')}}" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link
		href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
		rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
	<link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
	<link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
	<link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

	<!-- Template Main CSS File -->
	<link href="{{asset('assets/css/styleAuth.css')}}" rel="stylesheet">
	<style>
		.containerLogin{
			padding: 40px;
			margin: 20px;
			border-radius: 10px;
			background-color: rgba(37, 42, 52, 0.7) !important;
			/* background: #252A34 !important; */
		}
		.btn-get-started{
			background: #ffc107;
		}
		.form-control{
			min-height: 50px !important;
			border-radius: 5px !important;
		}

	</style>
</head>

<body>


	<!-- ======= Hero Section ======= -->
	<section id="hero" class="d-flex align-items-center justify-content-center">
		<div class="container position-relative">
			<h1>Welcome Back!</h1>
			 <center>
						<div class="col-lg-4 containerLogin" style="background: black">
							<form role="form" action="{{ route('login') }}" method="POST">
								@csrf
								<h2 style="margin-bottom: 20px">Pelase Login First</h2>
								<div class="input-group">
									<span class="md-line"></span>
									<input type="text" class="form-control" name="name" placeholder="Enter your email" >
									<span class="md-line"></span>
								</div>
								<br>
								<div class="input-group">
									<span class="md-line"></span>
									<input type="password" class="form-control" name="password" placeholder="Password">
									<span class="md-line"></span>
								</div>
								<div class="text-center"><button type="submit" class="btn-get-started scrollto">Login</button></div>
							</form>
						</div>
						</center>
			
	</section><!-- End Hero -->



	<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
			class="bi bi-arrow-up-short"></i></a>

	<!-- Vendor JS Files -->
	<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
	<script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
	<script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
	<script src="{{asset('assets/vendor/purecounter/purecounter.js')}}"></script>
	<script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>

	<!-- Template Main JS File -->
	<script src="{{asset('assets/js/scriptAuth.js')}}"></script>

</body>

</html>