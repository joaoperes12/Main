<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">

    <title>Elegance - Creative HTML5 Template</title>
    <!--
Elegance Template
https://templatemo.com/tm-528-elegance
-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/fullpage.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.css') }}">

    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('css/templatemo-style.css') }}">

    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

</head>

<body>


    <div id="video">
        <div class="preloader">
            <div class="preloader-bounce">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        @include('layout.partials.navbar')

        @yield('content')


        <script src="{{ asset('js/jquery.js') }}"></script>

        <script src="{{ asset('js/bootstrap.min.js') }}"></script>

        <script src="{{ asset('js/fullpage.min.js') }}"></script>

        <script src="{{ asset('js/scrolloverflow.js') }}"></script>

        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>

        <script src="{{ asset('js/jquery.inview.min.js') }}"></script>

        <script src="{{ asset('js/form.js') }}"></script>

        <script src="{{ asset('js/custom.js') }}"></script>

</body>

</html>
