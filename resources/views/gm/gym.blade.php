@extends('master')

@section ('title', 'Ginásio')

@section ('content')


<link rel="stylesheet" href="{{asset('css/clubcss2.css')}}" media="screen">
<link rel="stylesheet" href="{{asset('css/clubcss.css')}}" media="screen">
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>



    <section class="u-align-left u-clearfix u-white u-section-1" id="sec-cfca">
      <div class="u-align-left u-clearfix u-sheet u-sheet-1">
        <div class="u-align-center u-radius-15 u-shape u-shape-round u-white u-shape-1"></div>
        <h1 class="u-custom-font u-font-roboto-condensed u-text u-text-default u-text-1">Ginásios</h1>
        <h2 class="u-custom-font u-font-roboto-condensed u-subtitle u-text u-text-2">O nosso espaço</h2>
        <p class="u-large-text u-text u-text-variant u-text-3"> Damos ao cliente a vantagem de praticar exercicio em vários ginásios em zonas diferentes escolhidas por nós.</p>
        <img class="u-expanded-width-xs u-image u-image-default u-image-1" src="{{asset('img/gym1.png')}}" alt="" data-image-width="972" data-image-height="610">
      </div>
    </section>
    <section class="u-clearfix u-grey-5 u-section-2" id="carousel_688d">
      <div class="u-align-left u-clearfix u-sheet u-sheet-1">
        <h1 class="u-custom-font u-font-roboto-condensed u-text u-text-default u-text-1">Localizações</h1>
        <h2 class="u-custom-font u-font-roboto-condensed u-subtitle u-text u-text-2">Onde estamos localizados</h2>
        @foreach($gyms as $gym)
            <h1>{{ $gym->title }}</h1>
            @foreach($gym->photos as $photo)
                <img src="{{asset('storage/gym_images/'.$photo->filename) }}" class="img-post">
            @endforeach
           <br>
        @endforeach
      </div>

    </section>

    <section class="u-align-left u-clearfix u-white u-section-3" id="carousel_54fb">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-custom-font u-font-roboto-condensed u-text u-text-default u-text-1">Galeria de fotos</h1>
        @foreach($gym->photos as $photo)
                <img class="u-image u-image-default u-image-1" src="{{asset('storage/gym_images/'.$photo->filename) }}" class="img-post">
            @endforeach
    </div>
    </section>

@endsection
