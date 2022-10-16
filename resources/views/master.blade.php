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
    <!--contains all the div-->
    <div id="all">
        <!--mouse  follower-->
        <div class="cursor"></div>
        <!--mouse  follower-->
        <!--loader-->
        <div id="loader">
            <span class="color">Arlo</span>Brown
        </div>
        <!--loader-end-->
        <!--link-screen-->
        <div id="breaker">
        </div>
        <div id="breaker-two">
        </div>
        <!--link-screen-->
        <!--Main-Section-->
        <!--Header-->
        <div id="header">
            <div id="particles"></div>
            <!--Social Media Links-->
            <div class="social-media-links">
                <a href="#"><img src="{{ asset('images/instagram logo.png') }}" class="social-media"
                        alt="instagram-logo"></a>
                <!--Your instagram homepage link inser in place of "#"-->
                <a href="#"><img src="{{ asset('images/facebook logo.png') }}" class="social-media"
                        alt="facebook-logo"></a>
                <a href="#"><img src="{{ asset('images/linkedin logo.png') }}" class="social-media"
                        alt="linkedin-logo"></a>
                <a href="#"><img src="{{ asset('images/twitter logo.png" ') }}" class="social-media"
                        alt="twitter-logo"></a>

            </div>
            <!--Social Media Links end-->
            <div class="header-content">
                <div class="header-content-box">
                    <div class="firstline"><span class="color">Arlo </span>Brown</div>
                    <div class="secondline">
                        I'm a
                        <span class="txt-rotate color"
                            data-period="1200"data-rotate='[ " Designer.", " Blogger.", " Freelancer." ]'></span>
                        <span class="slash">|</span>
                    </div>
                    <div class="contact">
                        <a href="Mailto:#"><img src="images/mail.png" alt="email-pic" class="contactpic"></a>
                        <!--Your email Id write in place of "#"-->
                        <a href="Tel:#"><img src="images/call.png" alt="phone-pic" class="contactpic"></a>
                        <!--Your telephone number Id write in place of "#"-->
                    </div>
                </div>
            </div>
            <!--header image-->
            <div class="header-image">
                <img src="images/man.jpg" alt="logo">
            </div>
            <!--header image end-->
        </div>
        <!--Header End-->
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
