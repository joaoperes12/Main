<link rel="stylesheet" href="{{asset('css/styles.css')}}">
<link rel="stylesheet" href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css')}}" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a href="/"><img class="logo-img" src="img/logo.png" alt=""></a>
        <button id="bg-color-toggler" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa fa-bars" aria-hidden="true"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav" >
          <ul class="navbar-nav ml-auto">

            <li class="nav-item @if ($menuOption=='B') active @endif">
              <a class="nav-link" href="{{route('gm.Sobrenos')}}">Sobre</a>
            </li>
            <li class="nav-item @if ($menuOption=='C') active @endif">
              <a class="nav-link" href="{{route('gm.gym')}}">Ginásios</a>
            </li>
            <li class="nav-item @if ($menuOption=='D') active @endif">
              <a class="nav-link" href="{{route('gm.blog')}}">Blog</a>
            </li>
            <li class="nav-item @if ($menuOption=='E') active @endif">
              <a class="nav-link" href="{{route('gm.contact')}}">Contacto</a>
            </li>
            <li>
                <a class="nav-link" href="https://renegadegym.biz/wp/" target="_blank">Loja</a>
              </li>
            <li class="nav-item dropdown d-flex justify-content-end @if ($menuOption=='F') active @endif">
              @if (!Auth::check() || (Auth::check() && Auth::user()->role=='A'))
              <a class="nav-link" href="{{route('login')}}"><i class="fa fa-user mr-1" id="icon-userlogin" aria-hidden="true"></i></a>
              @endif
                @auth
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <form action="{{route('logout')}}" method="post" class="inline d-none" id="logout-form">
                        @csrf
                      </form>
                      <a class="dropdown-item" href="{{route('users.editpass')}}">Alterar Pass</a>
                      <a class="dropdown-item" href="#" id="logout-link">Logout</a>
                    </div>
                @endauth
            </li>
          </ul>
        </div>
    </div>
</nav>

    <script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js')}}" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $("#logout-link").click(function() {
            $("#logout-form").submit();
        });
    </script>
