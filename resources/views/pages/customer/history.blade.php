<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
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
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/styleCustomer.css')}}">

	<style>
		body {

			background-repeat: no-repeat;
			background-size: cover;
		}

		body:before {
			content: "";
			background: rgba(45, 53, 69, 0.7);
			position: absolute;
			bottom: 0;
			top: 0;
			left: 0;
			right: 0;
		}
	</style>
</head>

<body style="background: url({{asset('assets/images/hero-bg.jpg')}})">
	<div style=" display : flex;justify-content: center">
		<div class="card p-5 m-5" style="background-color: rgba(37, 42, 52, 0.8) !important;">
			<center>
				<h1 style="color: white" class="mb-5">Pesanan Anda</h1>
			</center>
			<h5 style="color: #ffc107">No Pesanan {{$no_pesanan}}</h5>
			<h5 style="color: #ffc107">{{$no_table}} / {{$nama_pemesan}}</h5>
			<div style="background :#ffc107; height: 5px">
				<p> </p>
			</div>
			<table class="table table-responsive mt-4" style="color: white; font-size: 16px !important;">
			<tr>
				<th>No</th>
				<th>Nama Masakan</th>
				<th>Quantity</th>
				<th>Harga Satuan</th>
				<th>Total Harga</th>
			</tr>
			@php $no = 1; @endphp
			@foreach ($pesanan as $p)
			<tr>
				<td>{{$no++}}</td>
				<td>{{$p['name']}}</td>
				<td>{{$p['count']}}</td>
				<td>Rp. {{$p['price']}}</td>
				<td>Rp. {{$p['price']}}</td>
			</tr>
			@endforeach

			</table>
			<h4 style="color: white">Total Keseluruhan : Rp. {{$total}}</h4>
			<hr class="mt-2" style="background: white">
			<center><p style="font-size: 14px; color: white" id="ress" value="1">Silakan tunggu pesanan Anda</p>
			<p style="font-size: 14px; color: white">Terima Kasih sudah memesanan di restoran kami</p></center>

		</div>


	</div>
	
	<script type="text/javascript" src="{{asset('assets/js/jquery/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/jquery-ui/jquery-ui.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/popper.js/popper.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/bootstrap/js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/scriptCustomer.js')}}"></script>
</body>

</html>