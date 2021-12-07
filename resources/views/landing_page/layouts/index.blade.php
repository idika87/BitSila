<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Balitekno - Index</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="Bootslander/assets/img/favicon.png" rel="icon">
  <link href="Bootslander/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="Bootslander/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="Bootslander/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="Bootslander/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="Bootslander/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="Bootslander/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="Bootslander/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="Bootslander/assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="Bootslander/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Bootslander - v2.2.0
  * Template URL: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  @include('landing_page/layouts/header')

  <!-- ======= Hero Section ======= -->
  <section id="hero">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
          <div data-aos="zoom-out">
            <h1>{{$lphome->first()->title}}</h1>
            <h2>{{$lphome->first()->dekskripsi}}</h2>
          </div>
        </div>

        <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
          <img style="width: 500px" src="lte/dist/img/landing_page/home/{{$lphome->first()->logo}}" class="img-fluid animated" alt="">
        </div>
      </div>

      <div class="row mt-5">
        <div class="col-12">
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              @foreach($acarousel as $i => $cc)
              <li data-target="#myCarousel" data-slide-to="{{$i++}}" class="<?php if ($i == 0): ?>
              active
              <?php endif ?>"></li>
              @endforeach
            </ol>
            <div class="carousel-inner">
              @foreach($acarousel as $i => $cc)
              <div class="carousel-item <?php if ($i == 0): ?>
              active
              <?php endif ?>">
              <img src="{{ asset('lte/dist/img/landing_page/carousel/'.$cc->pictures)}}" class="img-fluid animated" alt="">
              <div class="container">
                <div class="carousel-caption"> 
                </div>
              </div>
            </div>
            @endforeach


          </div>
          <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>

  </div>

  <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
    <defs>
      <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
        </g>
        <g class="wave2">
          <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
          </g>
          <g class="wave3">
            <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
            </g>
          </svg>

        </section><!-- End Hero -->

        @include('landing_page/layouts/main')

        @include('landing_page/layouts/footer')

        <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
        <div id="preloader"></div>

        <!-- Vendor JS Files -->
        <script src="Bootslander/assets/vendor/jquery/jquery.min.js"></script>
        <script src="Bootslander/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="Bootslander/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
        <script src="Bootslander/assets/vendor/php-email-form/validate.js"></script>
        <script src="Bootslander/assets/vendor/venobox/venobox.min.js"></script>
        <script src="Bootslander/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
        <script src="Bootslander/assets/vendor/counterup/counterup.min.js"></script>
        <script src="Bootslander/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
        <script src="Bootslander/assets/vendor/aos/aos.js"></script>

        <!-- Template Main JS File -->
        <script src="Bootslander/assets/js/main.js"></script>

      </body>

      </html>