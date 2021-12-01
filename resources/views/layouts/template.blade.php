<!DOCTYPE html>
<html lang="en">

<head>
	<title>GURU Able - Free Lite Admin Template </title>
	<!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="CodedThemes">
	<meta name="keywords"
		content=" Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
	<meta name="author" content="CodedThemes">
	<!-- Favicon icon -->
	<link rel="icon" href="{{asset('assets/images/logo.png')}}" type="image/x-icon">
	<!-- Google font-->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
	<!-- Required Fremwork -->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap/css/bootstrap.min.css')}}">
	<!-- themify-icons line icon -->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/icon/themify-icons/themify-icons.css')}}">
	<!-- ico font -->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/icon/icofont/css/icofont.css')}}">
	<!-- Style.css -->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/jquery.mCustomScrollbar.css')}}">
	<!-- <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css"> -->
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css"> -->
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">

</head>

<body>


	<!-- Pre-loader end -->
	
	<div id="pcoded" class="pcoded">
		<div class="pcoded-overlay-box"></div>
		<div class="pcoded-container navbar-wrapper">

			<nav class="navbar header-navbar pcoded-header">
				<div class="navbar-wrapper">

					<div class="navbar-logo" style="background: #252A34">
						<a class="mobile-menu" id="mobile-collapse" href="#!">
							<i class="ti-menu"></i>
						</a>
						<a class = "mt-3 text-center">
							<img class="img-fluid" src="{{asset('assets')}}/images/logo.png" alt="Theme-Logo" style="height: 40px" />
							<p>D-MOS</p>
						</a>
						<a class="mobile-options">
							<i class="ti-more"></i>
						</a>
					</div>

					<div class="navbar-container container-fluid">
						<ul class="nav-left">
							<li>
								<div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a>
								</div>
							</li>

							<li>
								<a href="#!" onclick="javascript:toggleFullScreen()">
									<i class="ti-fullscreen"></i>
								</a>
							</li>
						</ul>
						<ul class="nav-right">
							<li class="header-notification">
								{{-- <a href="#!">
									<i class="ti-bell"></i>
									<span class="badge bg-c-pink"></span>
								</a> --}}
								{{-- @include('layouts.notification') --}}
							</li>
							<li class="user-profile header-notification">
								<a href="#!">
									
									<span>{{Auth::user()->name}}</span>
									<i class="ti-angle-down"></i>
								</a>
								<ul class="show-notification profile-notification">
									<li>
										<a href="#">
											<i class="ti-user"></i> Profiles
										</a>
									</li>
									<li>
										<a onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
											<i class="ti-layout-sidebar-left"></i> Logout
										</a>
										<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
											@csrf
										</form>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</nav>
			<div class="pcoded-main-container">
				<div class="pcoded-wrapper">
					@include('layouts.sidebar')
					<div class="pcoded-content">
						<div class="pcoded-inner-content">
							<div class="main-body">
								<div class="page-wrapper">									
									<div class="page-body">
										<div class="row">
											<div class="col-sm-12">
												<div class="card">
													<div class="card-header">
														<span></span>
													</div>
													<div class="card-block">
														<button id="try" onclick="notif_me()">
															Please Click
														</button>
													<!-- <button onclick="autoRefreshPage()"> tes cookies</button> -->
														@yield('content')
														<p>Jumlah pesanan saat ini : {{$total_order}}</p>
														<?php
															if (isset($_COOKIE['jumlahorder'])) {//var lama
																echo ('<script>
																	var temp_jumlah = '.$_COOKIE['jumlahorder'].' 
																</script>');
															}else{
																echo 'document.cookie = "jumlahorder={!! $total_order !!}; Secure";';
															}
														?>
														
														<input type="hidden" id="linknext" value="{{url('home')}}">
													</div>
												</div>
											</div>
										</div>
									</div>
									
								</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
		
	</div>
	<!-- Optional JS -->
	<script src="{{asset('assets')}}/vendor/chart.js/dist/Chart.min.js"></script>
	<script src="{{asset('assets')}}/vendor/chart.js/dist/Chart.extension.js"></script>
	<!-- Argon JS -->
	<script src="{{asset('assets')}}/js/argon.js?v=1.2.0"></script>
	<script src="{{asset('assets/js/push.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery/jquery-2.1.1.min.js')}}" type="text/javascript"></script>
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
	
	<script>
		// var url = document.getElementById("linknext");
		
		 

		
		// setTimeout(function() 
		// 	notif_me();
		// },5000);
	</script>

	
	
	<!-- Required Jquery -->
	<script type="text/javascript" src="{{asset('assets/js/jquery/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/jquery-ui/jquery-ui.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/popper.js/popper.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/bootstrap/js/bootstrap.min.js')}}"></script>
	<!-- jquery slimscroll js -->
	<script type="text/javascript" src="{{asset('assets/js/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
	<!-- modernizr js -->
	<script type="text/javascript" src="{{asset('assets/js/modernizr/modernizr.js')}}"></script>
	<!-- am chart -->
	<script src="{{asset('assets/pages/widget/amchart/amcharts.min.js')}}"></script>
	<script src="{{asset('assets/pages/widget/amchart/serial.min.js')}}"></script>
	<!-- Todo js -->
	<script type="text/javascript " src="{{asset('assets/pages/todo/todo.js')}}"></script>
	<!-- Custom js -->
	<script type="text/javascript" src="{{asset('assets/pages/dashboard/custom-dashboard.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/script.js')}}"></script>
	<!-- <script type="text/javascript " src="{{asset('assets/js/SmoothScroll.js')}}"></script> -->
	<script src="{{asset('assets/js/pcoded.min.js')}}"></script>
	<script src="{{asset('assets/js/demo-12.js')}}"></script>
	<script src="{{asset('assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
	<!-- <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script> -->
	<!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> -->
	<!-- <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script> -->
	<script src="http://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
	<script>
		var $window = $(window);
        var nav = $('.fixed-button');
        $window.scroll(function () {
            if ($window.scrollTop() >= 200) {
                nav.addClass('active');
            } else {
                nav.removeClass('active');
            }
        });

			
				function notif_me() {
						alert('k')
					Push.create('Hello World!')
				}
	</script>
	<script>
		
		$(document).ready(function(){
			
				fetchOrder()
								
				function autoRefreshPage(res){
					document.cookie = "jumlahorder=" + res +"; Secure";
					if (document.cookie.split(';').some((item) => item.trim().startsWith('jumlahorder='))){
						var temp_baru = res; //jumlah terbaru
						console.log("temp-jumlah " + temp_jumlah);
						console.log( "temp-baru " + temp_baru);
					if(temp_baru>temp_jumlah){
						notif_me(temp_baru-temp_jumlah);
						document.cookie = "jumlahorder= " + res + " ; Secure";
						window.location.reload(1)
					}
				} else {
					document.cookie = "jumlahorder= " + res +" ; Secure";
					console.log('tes2');
					}
				}
				
	
				function fetchOrder(){
					$.ajax({
						type: "GET",
						url : "orderAll/fecthOrder", 
						dataType : "json",
						contentType: "application/json; charset=utf-8",
						success : function (response){
							console.log(response)
							// notif_me()
							
						}
					})
				}
				setInterval(fetchOrder,5000);
			})
	</script>
</body>

</html>

