<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Willy Wonkas - Personal Portfolio Website Template" />
    <meta name="keywords"
        content="blog, business card, creative, creative portfolio, cv theme, online resume, personal, portfolio, professional cv, responsive portfolio, resume, resume theme, vcard" />
    <meta name="author" content="willy wonka" />
    <title>Willy Wonkas - Personal Portfolio Website Template</title>
    <!--favicon-img-->
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">
    <!--favicon-img-->
    <!--main css file should not be removed -->
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <!--main css file-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.6/gsap.min.js"></script>
</head>


<body>

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

    <script src="{{ asset('js/jquery.min.js') }}"></script>

    <script src="{{ asset('js/index.js') }}"></script>


</body>

</html>
