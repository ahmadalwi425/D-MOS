@extends('layouts.templateAuth')

@section('content')
<style>


#btnmenu1{
    
    display:flex;
    align-items:center;
    justify-content: center;
    transition-duration:0.25s;
    font-size:large;
    font-weight: bold;
    background-color:#ffde59;
}

#btnmenu2{
    
    display:flex;
    align-items:center;
    justify-content: center;
    transition-duration:0.25s;
    font-size:large;
    font-weight: bold;
    background-color:#545454;
}

</style>
<br>
<div class="text-center">
					<img src="{{asset('assets')}}/images/logo.jpeg" alt="logo.png" style="height: 100px">
</div>
<br>
<div class="row" style="height:350px;">
    
    <div class="col-sm-6" id="btnmenu1" onclick="window.open('https://qrcodescan.in/', '_blank').focus()">
        <button type="button"  class="btn btn-outline-dark btn-lg ">     Pesan Sekarang     </button>
    </div>
    <div class="col-sm-6" id="btnmenu2" onclick="window.open('{{url("login")}}', '_blank').focus()">
    <button type="button"  class="btn btn-outline-warning btn-lg ">          Log In          </button>
    </div>
    <!-- end of col-sm-12 -->
</div>
@endsection



