<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dashboard - Renegade Gym</title>

  <!-- Custom fonts for this template -->
  <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel=" stylesheet" type="text/css">
  <link
  href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
  rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{asset('css/sb-admin-3.css')}}" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="{{asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-dark sidebar sidebar-dark bg-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('gm.index') }}">
        <div class="sidebar-brand-icon">
            <img src="{{asset('img/logo.png')}}" height="80px" width="80px" alt="logo" class="logo">

        </div>

      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="/admin">
            <i class="fas fa-crown"></i> <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">



        <!-- Nav Item - Pages Collapse Menu -->
        @if(Auth::user()->role == "A")
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUsers" aria-expanded="true"
          aria-controls="collapseUsers">
          <i class="fas fa-users-cog"></i>
          <span>Utilizadores</span>
        </a>
        <div id="collapseUsers" class="collapse" aria-labelledby="headingUsers" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">

            <a class="collapse-item" href="{{route('users.index')}}"> <i class="fas fa-address-book pr-2"></i></i>Ver Utilizadores</a>
            <a class="collapse-item" href="{{route('users.create')}}"><i class="fas fa-user-secret pr-2"></i>Adicionar Utilizador</a>
          </div>
        </div>
      </li>
      @endif
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePosts" aria-expanded="true"
        aria-controls="collapsePosts">
        <i class="fas fa-wallet"></i>
        <span>Categorias</span>
      </a>
      <div id="collapsePosts" class="collapse" aria-labelledby="headingPosts" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <a class="collapse-item" href="{{route('categories.index')}}"><i class="fas fa-folder-plus pr-2"></i>Ver Categorias</a>
          <a class="collapse-item" href="{{route('categories.create')}}"><i class="fas fa-folder-plus pr-2"></i>Adicionar Categorias</a>
          <div class="collapse-divider"></div>
        </div>
      </div>
    </li>



    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLanding" aria-expanded="true"
        aria-controls="collapseLanding">
        <i class="fas fa-user-plus"></i>
        <span>Inscrição</span>
      </a>
      <div id="collapseLanding" class="collapse" aria-labelledby="headingLanding" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <a class="collapse-item" href="{{route('landing.index')}}"><i class="fas fa-folder-plus pr-2"></i>Ver inscrição</a>
          <div class="collapse-divider"></div>
        </div>
      </div>
    </li>

    {{-- <!-- Gym -->  --}}


    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseGym" aria-expanded="true"
        aria-controls="collapseGym">
        <i class="fas fa-dumbbell"></i>
        <span>Ginásio</span>
      </a>
      <div id="collapseGym" class="collapse" aria-labelledby="headingGym" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <a class="collapse-item" href="{{route('gym.index')}}"><i class="fas fa-folder-plus pr-2"></i>Ver ginásio</a>
          <a class="collapse-item" href="{{route('gym.create')}}"><i class="fas fa-folder-plus pr-2"></i>Adicionar ginásio</a>
          <div class="collapse-divider"></div>
        </div>
      </div>
    </li>


    {{-- <!-- BLOG --> --}}

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBlogs" aria-expanded="true"
        aria-controls="collapseBlogs">
        <i class="fab fa-blogger"></i>
        <span>Blog</span>
      </a>
      <div id="collapseBlogs" class="collapse" aria-labelledby="headingBlogs" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <a class="collapse-item" href="{{route('posts.index')}}"><i class="fas fa-folder-plus pr-2"></i></i>Ver Artigos</a>
          <a class="collapse-item" href="{{route('posts.create')}}"><i class="fas fa-blog pr-2"></i>Adicionar Artigo</a>
        </div>
      </div>
    </li>

    {{-- <!-- Frases --> --}}

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseQuotes" aria-expanded="true"
        aria-controls="collapseQuotes">
        <i class="fab fa-blogger"></i>
        <span>Frases</span>
      </a>
      <div id="collapseQuotes" class="collapse" aria-labelledby="headingQuotes" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <a class="collapse-item" href="{{route('quotes.index')}}"><i class="fas fa-folder-plus pr-2"></i></i>Ver Frases</a>
          <a class="collapse-item" href="{{route('quotes.create')}}"><i class="fas fa-blog pr-2"></i>Adicionar Frases</a>
        </div>
      </div>
    </li>




    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0 btn-danger" id="sidebarToggle"></button>
    </div>

  </ul>
  <!-- End of Sidebar -->

  <!-- Content Wrapper -->
  <div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

      <!-- Topbar -->
      <nav class="navbar navbar-expand navbar-nav bg-dark topbar mb-4 static-top shadow">

        <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="btn-danger d-md-none rounded-circle mr-3">
          <i class="fa fa-bars"></i>
        </button>

        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">


          <!-- Nav Item - User Information -->
          <li class="nav-item dropdown no-arrow">
            @if (auth()->check())
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-gray-400 small">
              {{auth()->user()->name}}</span>
              @if (auth()->user()->photo==null)
              <img class="img-profile rounded-circle" alt="User Photo"
              src="{{asset('img /default_user.jpg')}}">
              @else
              <img class="img-profile rounded-circle" alt="User Photo"
              src="{{asset('storage/users_photos/'.auth()->user()->photo)}}">
              @endif
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
              <a class="dropdown-item" href="{{route('users.show', Auth::user())}}">
                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                Perfil
              </a>
              <a class="dropdown-item" href="{{route('users.editpass')}}">
                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                Alterar Password
              </a>
              <a class="dropdown-item" href="{{route("users.edit",auth()->user())}}" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                Logout
              </a>
            </div>
            @else
            <a href="{{route('login')}}">
             <span class="mr-2 d-none d-lg-inline text-gray-200 small">Login</span>
           </a>
           @endif
         </li>

       </ul>

     </nav>
     <!-- End of Topbar -->

     @if ($errors->any())
     @include ('partials.errors')
     @endif
     @if (!empty(session('success')))
     @include ('partials.success')
     @endif

     <!-- Begin Page Content -->
     @yield("content")


   </div>
   <!-- End of Main Content -->

   <!-- Footer -->
   <footer class="sticky-footer bg-dark">
    <div class="container my-auto">
      <div class="copyright text-center my-auto">
        <span>Copyright &copy; Renegade Gym 2021</span>
      </div>
    </div>
  </footer>
  <!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Pronto para sair?</h5>
      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
    </div>
    <div class="modal-body">Selecione "Logout" abaixo se estiver pronto para encerrar a sessão atual</div>
    <div class="modal-footer">
      <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>
      <form action="{{route('logout')}}" method="post" class="inline">
        @csrf
        <button class="btn btn-danger" type="submit">Logout</button>
      </form>
    </div>
  </div>
</div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Core plugin JavaScript-->
<script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Custom scripts for all pages-->
<script src="{{asset('vendor/jquery/sb-admin-2.min.js')}}"></script>

<!-- Page level plugins -->
<script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

@yield("moreScripts")



</body>

</html>
