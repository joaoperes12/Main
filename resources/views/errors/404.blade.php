
   <!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="{{asset('css/base.css')}}">
   <link rel="stylesheet" href="{{asset('css/mainbase.css')}}">
   <link rel="stylesheet" href="{{asset('css/vendorbase.css')}}">

   <!-- script
   ================================================== -->
	<script src="{{asset('js/modernizr.js')}}"></script>

   <!-- favicons
	================================================== -->
	<link rel="icon" type="{{asset('img/logo.png')}}" href="favicon.png">

</head>

<body>

	<!-- header
   ================================================== -->
   <header class="main-header">


   	<a class="menu-toggle" href="#"><span>Menu</span></a>
   </header> <!-- /header -->

   <!-- navigation
   ================================================== -->
   <nav id="menu-nav-wrap">

   	<h5>Website</h5>
		<ul class="nav-list">
			<li><a href="{{route('gm.index')}}" title="Home">Home</a></li>
			<li><a href="{{route('gm.Sobrenos')}}" title="Sobre">Sobre</a></li>
			<li><a href="{{route('gm.gym')}}" title="Ginásios">Ginásios</a></li>
			<li><a href="{{route('gm.blog')}}" title="Blog">Blog</a></li>
			<li><a href="{{route('gm.contact')}}" title="Contacto">Contacto</a></li>
		</ul>

		<h5>Renegade Gym</h5>
		<p>Não existe um treino milagroso, nem uma dieta mágica, o que existe é o foco, disciplina, perseverança e nunca desistir"</p>

	</nav>

	<!-- main content
   ================================================== -->
   <main id="main-404-content" class="main-content-static">

   	<div class="content-wrap">

		   <div class="shadow-overlay"></div>

		   <div class="main-content">
		   	<div class="row">
		   		<div class="col-twelve">

			  			<h1 class="kern-this">Erro 404</h1>
			  			<p>
                            Oooops! Parece que nada foi encontrado neste local.
                            Experimente um dos links abaixo, clique no menu superior
                            ou tente uma pesquisa?
			  			</p>


			   	</div> <!-- /twelve -->
		   	</div> <!-- /row -->
		   </div> <!-- /main-content -->

		   <footer>
		   	<div class="row">

		   		<div class="col-seven tab-full social-links pull-right">
			   		<ul>
				   		<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					      <li><a href="#"><i class="fa fa-behance"></i></a></li>
					      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
					      <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
					      <li><a href="#"><i class="fa fa-instagram"></i></a></li>
				   	</ul>
			   	</div>

		  			<div class="col-five tab-full bottom-links">
			   		<ul class="links">
				   		<li><a href="{{route('gm.index')}}">Home</a></li>
				         <li><a href="{{route('gm.Sobrenos')}}">Sobre</a></li>
				         <li><a href="mailto:221269@my.ipleiria.pt">Report Error</a></li>
				   	</ul>

				   	<div class="credits">
				   		<p>Design by <a href="http://renegadegym.test/" title="Staff">Renegade</a></p>
				   	</div>
			   	</div>

		   	</div> <!-- /row -->
		   </footer>

		</div> <!-- /content-wrap -->

   </main> <!-- /main-404-content -->

   <div id="preloader">
    	<div id="loader"></div>
   </div>

   <!-- Java Script
   ================================================== -->
   <script src="{{asset('js/jquery-2.1.3.min.js')}}"></script>
   <script src="{{asset('js/plugins.js')}}"></script>
   <script src="{{asset('js/mainbase.js')}}"></script>

</body>

</html>