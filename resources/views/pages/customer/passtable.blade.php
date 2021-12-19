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
        .containerPasstable{
            
            padding: 40px;
            margin: 20px;
            border-radius: 10px;
            background-color: rgba(37, 42, 52, 0.7) !important;
            /* background: #252A34 !important; */
            
        }

        h3{
            color: white;
        }
        .btn-get-started{
        background: #ffc107;
        }
        .form-control{
        min-height: 50px !important;
        border-radius: 5px !important;
        margin-top: 0 !important;
        }
    </style>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top header-transparent">
        <div class="container d-flex align-items-center justify-content-between">

            <h1 class="logo"><a href="index.html">D-MOS</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center justify-content-center"
        style="background: url({{asset('assets/img/hero-bg.jpg')}} top center;">
        <div class="container position-relative">
            <div class="containerPasstable">
                <h3>Meja : {{$no_table}}</h3>
                <h3 class="mb-3">No Pemesanan : {{$no_pesanan}}</h3>
                <hr style="color: aliceblue">
                <form action="{{route('sendNama')}}" class = "md-5"method="POST">
                    @csrf
                    <input type="hidden" name="no_table" value="{{$no_table}}">
                    <input type="hidden" name="no_pesanan" value="{{$no_pesanan}}"><br>
                    <h4 class="" for="" style="color: #ffde59; font-weight: bold;">Masukkan Nama</h4><br><br>
                    <input type="text" class = "form-control" name="nama_pemesan"><br><br>
                    <button class="mb-3 mt-2 btn-get-started" type="Submit">Lanjut Pesan</button>
                </form>
            </div>
        </div>
    </section><!-- End Hero -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="container d-md-flex py-4">

            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy; Copyright <strong><span>D-MOS</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/baker-free-onepage-bootstrap-theme/ -->
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>, Customize by D-MOS team
                </div>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    {{-- <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script> --}}

    <!-- Template Main JS File -->
    <!-- <script src="{{asset('assets/js/scriptAuth.js')}}"></script> -->

</body>

</html>




