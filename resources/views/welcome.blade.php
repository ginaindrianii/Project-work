<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Prawitama Care</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/style/assets/img/favicon.png" rel="icon">
  <link href="assets/style/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/style/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/style/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/style/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/style/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/style/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/style/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/style/assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/style/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Moderna - v2.0.1
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-transparent">
    <div class="container">

      <div class="logo float-left">
          
        <h1 class="text-light"><a href="welcome"><span>PRAWITAMA CARE</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
        
            @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <li><a href="{{ url('/dashboard') }}" class="btn btn-google btn-user btn-block">
                        <i class="fab fa-google fa-fw"></i><h3> dashboard</h3>
                    </a>
                    @else  
                        <li><a href="{{ route('login') }}"><h3>Login</h3></a>

                    @if (Route::has('register'))
                    
                   <a href="{{ route('register') }}"><h3>Registrasi</h3></a></li>
                  
                    @endif
                @endauth
            </div>
        @endif
        </ul>
         
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animated fadeInDown">Welcome to <span>Prawitama</span></h2>
          <p class="animated fadeInUp"> Wiyata, Krida, Manggala</p>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animated fadeInDown">Welcome to <span>Prawitama</span></h2>
          <p class="animated fadeInUp">Ilmu yang ilmiah <br> Amal yang amaliah <br>Akhlakul karimah </p>
      </div>

     

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Services Section ======= -->
   

    <!-- ======= Why Us Section ======= -->
    

    <!-- ======= Features Section ======= -->
  
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
 




</html>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/style/assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/style/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/style/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/style/assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/style/assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/style/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/style/assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/style/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/style/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/style/assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/style/assets/js/main.js"></script>

</body>

</html>

