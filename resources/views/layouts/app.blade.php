<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.aquarelle.krizantos.com/shop/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Dec 2020 09:10:18 GMT -->

<head>
  <title>Aquarelle</title>
  <meta charset="utf-8">
  <meta name="description" content="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link href="img/favicon.ico" rel="shortcut icon">
  <link href="img/touch.png" rel="apple-touch-icon-precomposed">
  <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="css/all.css">
</head>

<body>
  @include('layouts.header')
  <!-- MAIN -->
  <main class="main">
    @yield('content')
  </main>
  <!-- FOOTER -->
  @include('layouts.footer')
  <!-- SCROLL TOP -->
  @include('layouts.scroll-top')
  <!-- POPUPs -->
  <!-- CART -->
  @include('layouts.cart')
  <!-- PRODUCT ITEM -->
  @include('layouts.product-detail')
  <!-- SCRIPTS -->
  <script src="js/jquery/jquery.min.js"></script>
  <script src="js/popper.js/popper.min.js"></script>
  <script src="js/bootstrap/bootstrap.min.js"></script>
  <script src="js/slick-carousel/slick.min.js"></script>
  <script src="js/classy-countdown/jquery.classycountdown.min.js"></script>
  <script src="js/knob/jquery.knob.min.js"></script>
  <script src="js/throttle/throttle.min.js"></script>
  <script src="js/shuffle/shuffle.min.js"></script>
  <script src="js/jquery_steps/jquery.steps.min.js"></script>
  <script src="js/validate/validate.min.js"></script>
  <script src="js/bootstrap_select/bootstrap-select.min.js"></script>
  <script src="js/slick-lightbox/slick-lightbox.min.js"></script>
  {{-- <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC4BYcbdOVz2fyOAJsXXljYqDWpknhq-58"></script>
  --}}
  <script src="js/common.js"></script>
</body>

<!-- Mirrored from html.aquarelle.krizantos.com/shop/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Dec 2020 09:12:32 GMT -->

</html>
