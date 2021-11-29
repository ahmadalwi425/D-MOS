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
	<title>Document</title>

	<style>
		.btn-custom{
				font-weight: 500;
				font-size: 15px;
				letter-spacing: 1px;
				display: inline-block;
				padding: 9px 35px;
				border-radius: 50px;
				transition: 0.5s;
				margin-top: 40px;
				border: 2px solid #ffc107;
				background: #fff7df;
				color: #ffc107;
		}

		.btn-custom:hover{
			background: #ffc107;
			color: #fff;
		}
	</style>
</head>

<body>
	<nav class="navbar navbar-inverse bg-inverse fixed-top bg-faded px-5" style = "display: flex; background: #252A34 !important;">
	<div class="d-flex align-items-start flex-column mb-3"><br>
		<h4>D-MOS Restaurant</h4>
	</div>
		<div class="row">
			<div class="col ">
					<img src="{{asset('assets/images/carts.png')}}"   style="width:30px; height:30px;"data-toggle="modal" data-target="#cart" ><label for="">Cart</label>  (<span
							class="total-count"> </span>) </button>
					
					<img src="{{asset('assets/images/cartclear.png')}}"   style="width:30px; height:30px; " class="clear-cart" ><label for="" class = "">Bersihkan Cart</label>
			</div>
		</div>
	</nav>
</div>
	<!-- Main -->
<div class="d-flex align-items-center flex-column mb-4 " id="mainContent">
	<div class="d-flex mb-4 align-items-center" style="justify-content: center;">
		<p>Sort by:</p>
		<select class="custom-select ml-3" name="sortBy" id = "selectMasakan" onclick = "showMasakan()"
			style = "width : 300px; height: 40px; font-size: 15px;">   
				<option value = "makanan">Makanan</option>
				<option value = "minuman">Minuman</option>
		</select>       
	</div>
	<!-- Main -->
	<div class="container" >
		<div class= "row justify-content-center" id= "makanan" style="display: flex">
			@foreach ($makanan as $item)
			<div class="card col-lg-3  col-md-4  col-sm-6 m-4 " ><br>
				<img class="card-img-top" src="{{asset('storage/'.$item->gambar)}}" alt="Card image cap">
				<div class="card-body d-flex align-items-center flex-column mb-4">
					<h5 class="card-title">{{$item->nama_masakan}}</h5>
					<p class="card-text">{{$item->harga}} | {{$item->status}}</p> 
					<a href="#" data-name="{{$item->nama_masakan}}" data-id="{{$item->id}}" data-price="{{$item->harga}}" 
						class="add-to-cart btn-custom">Add to cart</a>

				</div>
			</div>
			@endforeach
			
		</div>
		<div class="row justify-content-center" id="minuman" style="display: none">
		
			@foreach ($minuman as $item)
			<div class="card col-lg-3  col-md-4  col-sm-6 m-4""><br>
				<img class="card-img-top" src="{{asset('storage/'.$item->gambar)}}" alt="Card image cap">
				<div class="card-body d-flex align-items-center flex-column mb-4">
					<h5 class="card-title">{{$item->nama_masakan}}</h5>
					<p class="card-text">{{$item->harga}} | {{$item->status}}</p>
					<a href="#" data-name="{{$item->nama_masakan}}" data-id="{{$item->id}}" data-price="{{$item->harga}}"
						class="add-to-cart btn-custom">Add to cart</a>
		
				</div>
			</div>
			@endforeach
		
		</div>
	<div>

		
		<!-- Modal -->
		<div class="modal fade" id="cart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
			aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content ">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Cart</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<table class="show-cart table">

						</table>
						<div>Total price: Rp <span class="total-cart"></span></div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<form action="{{route('orderList')}}" method="POST">
							@csrf
							<input type="hidden" name="no_table" value = "{{$no_table}}">
							<input type="hidden" name="no_pesanan" value= "{{$no_pesanan}}">
							<input type="hidden" name="nama_pemesan" value= "{{$nama_pemesan}}">
							<input type="hidden" name="total" id = "total">
							<input type="hidden" name="order-list" id = "order-list">
							<button type="submit" class="btn btn-primary">Order now</button>
						</form>
					</div>
				</div>
			</div>
		</div>

		<script>
		
		</script>
		<script type="text/javascript" src="{{asset('assets/js/jquery/jquery.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/js/jquery-ui/jquery-ui.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/js/popper.js/popper.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/js/bootstrap/js/bootstrap.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/js/scriptCustomer.js')}}"></script>

		
</div>
</div>
</body>

</html>