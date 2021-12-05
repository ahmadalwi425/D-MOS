@extends("layouts.template")


@section('title')
<h5 class = "mb-3">Daftar Pesanan</h5>
@endsection
@section('content')
	<div class="row">
		<div class="col-lg-12">
			<div class="pull-left">
				<h3 class="mb-3" style="font-weight: bold; color: rgb(106, 89, 255)">Daftar Pesanan </h3>
				<p>Berikut adalah daftar pesanan yang <b>masih diproses</b></p>
			</div>
		</div>
	</div>
	
	@if ($message = Session::get('success'))
	<div class="alert alert-success">
		<p>{{ $message }}</p>
	</div>
	@endif
	{{-- <button onClick="notif_me()"> tes </button> --}}
	<table class="table table-bordered" id="openOrderTable">
		<thead>
		<tr>
			<th>No Meja</th>
			<th>No Pemesanan</th>
			<th>Nama Pemesan</th>
			<th>Tanggal</th>
			<th>Status Order</th>
			<th>Harga</th>
			<th>Aksi</th>
		</tr>
		</thead>
		<tbody>
		@php $no = 1; @endphp
		@foreach ($order as $ord)
		<tr>
			@if($ord->status_order == "dipesan" && Auth::User()->level == 2)
			<td>{{$ord->no_meja}}</td>
			<td>{{$ord->id}}</td>
			<td>{{$ord->nama}}</td>
			<td>{{$ord->tanggal}}</td>
			<td>
			<a href="{{url('updateStatus/dibayar/'.$ord->id)}}" class = "btn btn-primary">Dibayar</a></td>
			<td>{{$ord->harga}}</td>
			<td><a href="{{url('/waiter/detailorder/'.$ord->id)}}" class = "btn btn-primary">Detail</a></td>
			@elseif($ord->status_order == "dibayar" && Auth::User()->level == 3)
			<td>{{$ord->no_meja}}</td>
			<td>{{$ord->id}}</td>
			<td>{{$ord->nama}}</td>
			<td>{{$ord->tanggal}}</td>
			<td>
			<a href="{{url('updateStatus/dimasak/'.$ord->id)}}" class = "btn btn-primary">Dimasak</a></td>
			<td>{{$ord->harga}}</td>
			<td><a href="{{url('/waiter/detailorder/'.$ord->id)}}" class = "btn btn-primary">Detail</a></td>
			@elseif($ord->status_order == "dimasak" && Auth::User()->level == 3)
			<td>{{$ord->no_meja}}</td>
			<td>{{$ord->id}}</td>
			<td>{{$ord->nama}}</td>
			<td>{{$ord->tanggal}}</td>
			<td>
			<a href="{{url('updateStatus/siap/'.$ord->id)}}" class = "btn btn-primary">Masakan siap</a></td>
			<td>{{$ord->harga}}</td>
			<td><a href="{{url('/waiter/detailorder/'.$ord->id)}}" class = "btn btn-primary">Detail</a></td>
			@elseif($ord->status_order == "siap" && Auth::User()->level == 4)
			<td>{{$ord->no_meja}}</td>
			<td>{{$ord->id}}</td>
			<td>{{$ord->nama}}</td>
			<td>{{$ord->tanggal}}</td>
			<td>
			<a href="{{url('updateStatus/diantar/'.$ord->id)}}" class = "btn btn-primary">Diantar</a></td>
			<td>{{$ord->harga}}</td>
			<td><a href="{{url('/waiter/detailorder/'.$ord->id)}}" class = "btn btn-primary">Detail</a></td>
			@elseif($ord->status_order == "diantar" && Auth::User()->level == 4)
			<td>{{$ord->no_meja}}</td>
			<td>{{$ord->id}}</td>
			<td>{{$ord->nama}}</td>
			<td>{{$ord->tanggal}}</td>
			<td>
			<a href="{{url('updateStatus/ditutup/'.$ord->id)}}" class = "btn btn-primary">Ditutup</a></td>
			<td>{{$ord->harga}}</td>
			<td><a href="{{url('/waiter/detailorder/'.$ord->id)}}" class = "btn btn-primary">Detail</a></td>
			@endif
			
			
			
		</tr>
		@endforeach
		</tbody>
	</table>
@endsection