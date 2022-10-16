@extends ('master')

@section('Title', 'Home')

@section('content')

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Renegades Gym</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

        <link href="{{ asset('css/indexricardo.css') }}" rel="stylesheet" />
    </head>

    <body class="d-flex flex-column h-100">

        <!-- Header-->
        <header class="fundo_personalizado" style="background-image: url('https://images.pexels.com/photos/669576/pexels-photo-669576.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260');
                background-size: cover;
                background-repeat: no-repeat;
                background-position: bottom;">
            <div class="container px-5">
                <div class="row gx-5 align-items-center justify-content-center">
                    <div class="col-lg-8 col-xl-7 col-xxl-6">
                        <div class="my-5 text-center text-xl-start">
                            <h1 class="display-5 fw-bolder text-white mb-2">Bem vindo ao nosso websites</h1>
                            <p class="lead fw-normal text-white mb-4">Aqui poderas encontrar diversos planos de treino bem
                                como acompanhamento e vários produtos na nossa loja.</p>
                            <div class="gap-3 d-sm-flex justify-content-sm-center justify-content-xl-center">
                                <a class="btn btn-danger btn-lg px-4 me-sm-3" href="https://renegadegym.biz/wp/"
                                    target="_blank">Loja</a>
                                <a class="btn btn-danger btn-lg px-4" href="{{ route('gm.contact') }}">Mais Informações</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5"
                            src="{{ asset('img/logo.png') }}" alt="..." /></div>
                </div>
            </div>
        </header>
        <!-- Fim Header-->







        <!-- Features do ginásio -->
        <section class="py-5" id="features">
            <div class="container px-5 my-5">
                <div class="row gx-5">
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h1 class="fw-bolder mb-0">Começe a sua aventura connosco</h1>
                    </div>
                    <div class="col-lg-8" >
                        <div class="row gx-5 row-cols-1 row-cols-md-2">
                            <div class="col mb-5 h-100">
                                <div class="feature bg-danger bg-gradient text-white rounded-1 mb-3" style="border-radius: 5px;"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="20" height="25" fill="currentColor"
                                        class="bi bi-activity" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M6 2a.5.5 0 0 1 .47.33L10 12.036l1.53-4.208A.5.5 0 0 1 12 7.5h3.5a.5.5 0 0 1 0 1h-3.15l-1.88 5.17a.5.5 0 0 1-.94 0L6 3.964 4.47 8.171A.5.5 0 0 1 4 8.5H.5a.5.5 0 0 1 0-1h3.15l1.88-5.17A.5.5 0 0 1 6 2Z" />
                                    </svg></i></div>
                                <h2 class="h5">Planos de treino adaptados</h2>
                                <p class="mb-0">Na nossa página de planos de treino irão encontrar planos
                                    adapatados para qualquer tipo de treino. </p>
                            </div>
                            <div class="col mb-5 h-100">
                                <div class="feature bg-danger bg-gradient text-white rounded-3 mb-3"  style="border-radius: 5px;"><i
                                        class="bi bi-person"></i></div>
                                <h2 class="h5">Incrição gratuita</h2>
                                <p class="mb-0">Este projeto tem como objetivo não cobrar inscrição nem
                                    mensalidades, incentivando assim as pessoas a aderirem.</p>
                            </div>
                            <div class="col mb-5 mb-md-0 h-100">
                                <div class="feature bg-danger bg-gradient text-white rounded-3 mb-3" style="border-radius: 5px;"><i
                                        class="bi bi-minecart-loaded"></i></div>
                                <h2 class="h5">Produtos próprios</h2>
                                <p class="mb-0">Todos os produtos da nossa loja são exclusivos e limitados.</p>
                            </div>
                            <div class="col h-100">
                                <div class="feature bg-danger bg-gradient text-white rounded-3 mb-3" style="border-radius: 5px;"><i
                                        class="bi bi-award"></i></div>
                                <h2 class="h5">Acompanhamento profissional adequado</h2>
                                <p class="mb-0">Durante as aulas irão ter acompanhamento feito por profissionais.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Fim features do ginásio -->

        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                @if (count($quotes))
                    @foreach ($quotes as $quote)
                        <div class='carousel-item @if ($loop->first) active @endif'>
                            <img id="carousel-img-height" class="d-block w-100" src="{{asset('https://images.pexels.com/photos/669578/pexels-photo-669578.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260')}}"
                                alt="First slide">
                                <div id="frase-motiv">
                                    <p class="font-italic">" {{ $quote->quote }} "</p>
                                    <p class="font-weight-bold text-center">{{ $quote->author }}</p>
                                </div>
                        </div>
                    @endforeach

                @else
                    <div class="carousel-item active">
                        <img id="carousel-img-height" class="d-block w-100" src="{{ asset('img/pexels-photo-3112004.jpg') }}"
                            alt="First slide">
                        <p id="frase-motiv">Sem frases</p>
                    </div>

                @endif
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <br><br>
        <!-- Fim Frase -->




        <!--   Destaques do Blog-->
        <section class="pt-0 pb-0">
            <div class="container px-0 my-5">
                @if (count($posts))
                    <div class="row gx-5">
                        @foreach ($posts as $post)

                            <div class="col-lg-4 mb-5">
                                <div class="card h-100 shadow border-0">
                                    <img class="card-img-top" src="{{ asset('storage/posts_images/' . $post->image) }}"
                                        alt="..." />
                                    <div class="card-body p-4">
                                        <div class="badge bg-gradient rounded-pill mb-2">News</div>
                                        <a class="text-decoration-none link-dark stretched-link" href="blog-post.html">
                                            <h5 class="card-title mb-3">{{ $post->title }}</h5>
                                        </a>
                                        <p class="card-text mb-0">{{ $post->content }}</p>
                                    </div>
                                    <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                        <div class="d-flex align-items-end justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <img class="rounded-circle me-3" src="{{ asset('img/logo.png') }}"
                                                    height="40px" width="40px" />
                                                <div class="small">
                                                    <div class="fw-bold">Kelly Rowan</div>
                                                    <div class="text-muted">March 12, 2021 &middot; 6 min read</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- Fim Destaques do Blog-->





                @else
                    <h6>Sem posts</h6>
                @endif
            </div>
        </section>

        </section>
        </main>

        <script src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/scripts.js') }}"></script>
    </body>

    </html>
@endsection
