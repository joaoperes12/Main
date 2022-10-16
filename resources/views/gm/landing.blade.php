    @extends('master')

    @section('title', 'Landing page')

    @section('content')

        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <link rel="stylesheet" href="{{ asset('css/landingpage.css') }}" />
            <title>Landing Page</title>
            <link rel="stylesheet" href="{{ asset('bootstrap-5.1.3-dist/css/bootstrap.min.css') }}">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link
                href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
                rel="stylesheet">
        </head>

        <body>
            <section id="main">
                <div class="containerr">
                    <video class="video" autoplay muted loop>
                        <source src="{{ asset('videos/blog.mp4') }}" type="video/mp4" />
                    </video>
                </div>
                <div class="page-content">
                    <div id="logotipo"><img src="./{{ asset('img/logo.png') }}" alt=""></div>
                    <h4>22 de Novembro, 2021</h4>
                    <h2>WORKSHOP DE</h2>
                    <h1>CALISTENIA</h1>
                    <div id="buttons-div">
                        <a href="#second-section"><button id="btn-saiba">Saiba mais</button></a>
                        <a href="#formulario"><button id="btn-inscrever">Inscreve-te</button></a>
                    </div>
                </div>
            </section>

            <section id="second-section">
                <div class="container-">
                    <div class="row">
                        <div class="col-lg-6">
                            <h3 class="titulo">EVENTO</h3>
                            <p id="texto-desc">Este Evento será promovido pela Liga Portuguesa de Street Workout, o único
                                projeto oficial registrado internacionalmente pola World Street Workout Calisthenics &
                                Federation – WSWCF.<br><br>O Worshop estará aberto ao público, grátis e terá várias
                                demonstrações de Freestyle, Strength, Street Lifting e muito mais!<br><br>
                            <p id="texto-maior">Não perca esta oportunidade.</p>
                        </div>
                        <div id="video" class="col-lg-6">
                            <video poster="{{ asset('img/212.jpg') }}" controls
                                src="{{ asset('videos/video3.mp4') }}"></video>
                        </div>
                    </div>
                </div>
            </section>

            <section id="formulario">
                <div class="container--">
                    <div class="row">
                        <div class="col-lg-6 form">
                            <h3 class="inscrever">INSCREVE-TE</h3>
                            <form action="{{ route('gm.landing.store') }}" method="POST" class="inline">
                               @csrf
                                <div>
                                <label id="nome" for="nome">Nome</label><br>

                                <input type="text" id="fname @error('name') is-invalid @enderror" name="name"
                                value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div>
                                <label id="email" for="email">Email:</label><br>

                                <input type="email" id="email @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div>
                                <label for="Contact">Contacto</label><br>

                                <input type="tel" id="contact @error('contact') is-invalid @enderror" name="contact"
                                value="{{ old('contact') }}" required autocomplete="contact" autofocus>
                            @error('contact')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                                <button id="btn-enviar">Enviar</button>
                            </form>
                        </div>
                        <div class="mockup col-lg-6">
                            <img src="./{{ asset('img/Mockup.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </section>

            <section id="fundo">
                <div class="container--">
                    <div class="row">
                        <div id="mapa" class="col-12">
                            <h3 class="inscreverr pb-3">LOCAL</h3>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49077.69065862598!2d-8.840978083648444!3d39.7541222256194!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd22731534c9b2b9%3A0x4daf832739d43c6c!2sLeiria!5e0!3m2!1spt-PT!2spt!4v1634769549954!5m2!1spt-PT!2spt"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </section>

        </body>

        </html>

    @endsection
