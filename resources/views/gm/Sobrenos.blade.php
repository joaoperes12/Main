@extends('master')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />

        <title>Sobre Nós</title>


        <title>Sobre nos</title>
        <!--<link rel="stylesheet" href="fontawesome-5.5/css/all.min.css" />-->

        <link rel="stylesheet" href="{{ asset('slick/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('slick/slick-theme.css') }}">
        <link rel="stylesheet" href="{{ asset('magnific-popup/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/templatemo-style.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/our-team.css') }}" />

    </head>

    <body>
        <!-- Hero section -->
        <section id="hero" class="text-white tm-font-big tm-parallax mb-5">
            <!-- Navigation -->



            <div class="text-center tm-hero-text-container">
                <div class="tm-hero-text-container-inner">
                    <h2 class="tm-hero-title">Quem nós somos?</h2>
                    <p class="tm-hero-subtitle">
                        Somos uma instituição sem fins lucrativos
                        <br> Mais informações, abaixo..
                    </p>

                </div>
            </div>


        </section>

        <section id="introduction">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <img src="img/logo.png" alt="Image" class="img-fluid tm-intro-img" />
                    </div>
                    <div class="col-lg-6">
                        <div class="tm-intro-text-container">
                            <h2 class="tm-text-danger mb-4 tm-section-title">Introdução</h2>
                            <p class="mb-4 tm-intro-text">
                                A instituição Renegade é uma entidade sem fins lucrativos que foi criada com o ambito
                                de ajudar e oferecer o bem estar fisico e mental ao utiliziador, oferecendo uma variedade
                                de serviços para o ajudar a melhorar o seu estado de vida com o desporto.
                            </p>
                            <div class="tm-next">
                                <a href="#work" class="tm-intro-text btn btn-danger">Ler mais</a>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <div class="container mt-5 mb-5">
            <div class="row tm-section-pad-top">
                <div class="col-lg-4 mb-5">
                    <i class="fa fa-home d-flex pb-3 justify-content-center" id="iconssss" aria-hidden="true"></i>
                    <h4 class="text-center text-danger mb-4">Ginásios</h4>
                    <p>
                        Estamos abertos em 5 cidades do paí, façanos uma visita e usufrua do melhor e único ginásio grátis.
                    </p>
                </div>

                <div class="col-lg-4 mt-5 mt-lg-0">
                    <i class="fa fa-users d-flex pb-3 justify-content-center" id="iconssss" aria-hidden="true"></i>
                    <h4 class="text-center text-danger  mb-4">Aulas de grupo</h4>
                    <p>
                        Ofereçemos uma basta variedade de aulas de grupo todos os dias, é só fazer a sua reserva e poderá
                        participar em cada uma, todas elas em diferentes horários
                    </p>
                </div>
                <div class="col-lg-4 mt-5 mt-lg-0">
                    <i class="fa fa-sign-language pb-3 d-flex justify-content-center" id="iconssss" aria-hidden="true"></i>
                    <h4 class="text-center text-danger mb-4">Modalidades</h4>
                    <p>
                        Escolhemos a dedo as modalidades, todas elas importantes e com diferentes objetivos para o cliente
                    </p>
                </div>
            </div>
        </div>

        </section>

        <div class="container">
            @if (count($users))
                <h1 class="tm-text-danger mb-4 tm-section-title" align="center">A nossa equipa</h1>

                <div class="row">
                    @foreach ($users as $user)
                        <div class="col">
                            @if ($user->photo)
                                <div class="img-crop mx-auto">
                                    <img src="{{asset('storage/users_photos/'.$user->photo)}}" class="rounded" alt="User photo">
                                </div>
                            @else
                                <img src="{{ asset('img/default_user.jpg') }}" class="img-post rounded mx-auto d-block"
                                    alt="User photo">
                            @endif
                            <h3 class="user-name">{{ $user->name }}</h3>
                        </div>
                    @endforeach
                </div>


            @else
                <h6>Nao existe Users</h6>
            @endif
        </div>

        <script src="js/jquery-1.9.1.min.js"></script>
        <script src="slick/slick.min.js"></script>
        <script src="magnific-popup/jquery.magnific-popup.min.js"></script>
        <script src="js/jquery.singlePageNav.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script>
            function getOffSet() {
                var _offset = 450;
                var windowHeight = window.innerHeight;

                if (windowHeight > 500) {
                    _offset = 400;
                }
                if (windowHeight > 680) {
                    _offset = 300
                }
                if (windowHeight > 830) {
                    _offset = 210;
                }

                return _offset;
            }

            function setParallaxPosition($doc, multiplier, $object) {
                var offset = getOffSet();
                var from_top = $doc.scrollTop(),
                    bg_css = 'center ' + (multiplier * from_top - offset) + 'px';
                $object.css({
                    "background-position": bg_css
                });
            }

            // Parallax function
            // Adapted based on https://codepen.io/roborich/pen/wpAsm
            var background_image_parallax = function($object, multiplier, forceSet) {
                multiplier = typeof multiplier !== 'undefined' ? multiplier : 0.5;
                multiplier = 1 - multiplier;
                var $doc = $(document);
                // $object.css({"background-attatchment" : "fixed"});

                if (forceSet) {
                    setParallaxPosition($doc, multiplier, $object);
                } else {
                    $(window).scroll(function() {
                        setParallaxPosition($doc, multiplier, $object);
                    });
                }
            };

            var background_image_parallax_2 = function($object, multiplier) {
                multiplier = typeof multiplier !== 'undefined' ? multiplier : 0.5;
                multiplier = 1 - multiplier;
                var $doc = $(document);
                $object.css({
                    "background-attachment": "fixed"
                });
                $(window).scroll(function() {
                    var firstTop = $object.offset().top,
                        pos = $(window).scrollTop(),
                        yPos = Math.round((multiplier * (firstTop - pos)) - 186);

                    var bg_css = 'center ' + yPos + 'px';

                    $object.css({
                        "background-position": bg_css
                    });
                });
            };

            $(function() {
                        // Hero Section - Background Parallax
                        background_image_parallax($(".tm-parallax"), 0.30, false);
                        background_image_parallax_2($("#contact"), 0.80);

                        // Handle window resize
                        window.addEventListener('resize', function() {
                            background_image_parallax($(".tm-parallax"), 0.30, true);
                        }, true);

                        // Detect window scroll and update navbar
                        $(window).scroll(function(e) {
                            if ($(document).scrollTop() > 120) {
                                $('.tm-navbar').addClass("scroll");
                            } else {
                                $('.tm-navbar').removeClass("scroll");
                            }
                        });

                        // Close mobile menu after click
                        $('#tmNav a').on('click', function() {
                            $('.navbar-collapse').removeClass('show');
                        })

                        // Scroll to corresponding section with animation
                        $('#tmNav').singlePageNav();

                        // Add smooth scrolling to all links
                        // https://www.w3schools.com/howto/howto_css_smooth_scroll.asp
                        $("a").on('click', function(event) {
                            if (this.hash !== "") {
                                event.preventDefault();
                                var hash = this.hash;

                                $('html, body').animate({
                                    scrollTop: $(hash).offset().top
                                }, 400, function() {
                                    window.location.hash = hash;
                                });
                            } // End if
                        });

                        // Pop up
                        $('.tm-gallery').magnificPopup({
                            delegate: 'a',
                            type: 'image',
                            gallery: {
                                enabled: true
                            }
                        });

                        // Gallery
                        $('.tm-gallery').slick({
                                    dots: true,
                                    infinite: false,
                                    slidesToShow: 5,
                                    slidesToScroll: 2,
                                    responsive: [{
                                            breakpoint: 1199,
                                            settings: {
                                                slidesToShow: 4,
                                                slidesToScroll: 2
                                            }
                                        },
                                        {
                                            breakpoint: 991,
                                            settings: {
                                                slidesToShow: 3,
                                                slidesToScroll: 2
                                            }
                                        },
                                        {
                                            breakpoint: 767,
                                            settings: {
                                                slidesToShow: 2,
                                                slidesToScroll: 1
                                            } {
                                                {
                                                    asset('
                                                    }, {
                                                        breakpoint: 480,
                                                        settings: {
                                                            slidesToShow: 1,
                                                            slidesToScroll: 1
                                                        }
                                                    }
                                                ]
                                            });
                                    });
        </script>
    </body>

    </html>
@endsection
