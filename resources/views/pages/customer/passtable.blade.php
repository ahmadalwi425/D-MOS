<html>

<head>
 <link rel="stylesheet" type="text/css" href="{{asset('assets/css/styleCustomer.css')}}">
 <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap/css/bootstrap.min.css')}}">
</head>

<body>
    <div class="wrapper">
        <div id="box">
            <img src="{{asset('assets/images/logo.jpeg')}}" alt="lock" /> <br>
            <h3>Meja : {{$no_table}}</h3>
            <h3 class="mb-3">No Pemesanan : {{$no_pesanan}}</h3>
            <form action="{{route('sendNama')}}" method = "POST">
                @csrf
                <input type="hidden" name="no_table" value="{{$no_table}}">
                <input type="hidden" name="no_pesanan" value="{{$no_pesanan}}"><br>
                <label class = "mb-2"for="" style="color: #ffde59; font-weight: bold;">Masukkan Nama</label><br><br>
                <input type="text" name="nama_pemesan"><br><br>
                <button class = "mb-3 mt-2 btn btn-warning" type="Submit">Lanjut Pesan</button>
            </form>
        </div>
    </div>
</body>

</html>




