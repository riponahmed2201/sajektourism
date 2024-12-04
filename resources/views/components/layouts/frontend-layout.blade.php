<!doctype html>
<html lang="en" class="no-js">

<head>
    <title>Sajek Tourism</title>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link href='../../css?family=Lato:300,400,700,900,400italic' rel='stylesheet' type='text/css'>
    <link href="assets/frontend/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/jquery.bxslider.css') }}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/font-awesome.css') }}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/magnific-popup.css') }}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/owl.carousel.css') }}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/owl.theme.css') }}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/ticker-style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/style.css') }}" media="screen">

</head>

<body>

    <!-- Container -->
    <div id="container">

        <!-- start Header -->
        <x-frontend.header />
        <!-- end Header -->

        <!-- block-wrapper-section -->
            {{ $slot }}
        <!-- End block-wrapper-section -->

        <!-- start footer -->
        <x-frontend.footer />
        <!-- end footer -->

    </div>
    <!-- End Container -->

    <script type="text/javascript" src="{{ asset('assets/frontend/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/frontend/js/jquery.migrate.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/frontend/js/jquery.bxslider.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/frontend/js/jquery.magnific-popup.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/frontend/js/jquery.ticker.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/frontend/js/jquery.imagesloaded.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/frontend/js/jquery.isotope.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/frontend/js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/frontend/js/retina-1.1.0.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/frontend/js/plugins-scroll.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/frontend/js/script.js') }}"></script>

</body>

</html>
