<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('title') - Home</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="routeName" content="{{ Route::currentRouteName() }}">

	<!-- CSS only -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />




	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
	

	<link rel="stylesheet" href="{{ url('/static/css/style.css?v='.time()) }}">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/b0d8aefb17.js" crossorigin="anonymous"></script>
 	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
	<!--<script src="{{ url('/static/libs/ckeditor/ckeditor.js') }}"></script> -->
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

	<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

	<script src="{{ url('/static/js/site.js?v='.time()) }}"></script>

	<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>




</head>
<body>

	<nav class="navbar navbar-expand-lg shadow">
		<div class="container">
			<a class="navbar-brand" href="{{ url('/') }}"><img src="{{ url('/static/images/logo2.png') }}"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigationMain" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<i class="fas fa-bars"></i>
			</button>

			<div class="collapse navbar-collapse" id="navigationMain">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a href="{{ url('/') }}" class="nav-link"><i class="fas fa-home"></i> <span>Inicio</span></a>
					</li>
					<li class="nav-item">
						<a href="{{ url('/') }}" class="nav-link"><i class="fas fa-store-alt"></i> <span>Tienda</span></a>
					</li>
					<li class="nav-item">
						<a href="{{ url('/') }}" class="nav-link"><i class="fas fa-id-card-alt"></i> <span>Sobre Nosotros</span></a>
					</li>
					<li class="nav-item">
						<a href="{{ url('/') }}" class="nav-link"><i class="far fa-envelope-open"></i> <span>Contacto</span></a>
					</li>
					<li class="nav-item">
						<a href="{{ url('/car') }}" class="nav-link"><i class="fas fa-shopping-cart"></i> <span class="carnumber">0</span></a>
					</li>
					@if(Auth::guest())
					<li class="nav-item link-acc">
						<a href="{{ url('/login') }}" class="nav-link btn"><i class="fas fa-fingerprint"></i> Ingresar</a>
						<a href="{{ url('/register') }}" class="nav-link btn"><i class="far fa-user-circle"></i> Crear Cuenta</a>
					</li>
					@else
					<li class="nav-item dropdown link-acc link-user">
						<a href="#" class="nav-link btn dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
							@if(is_null(Auth::user()->avatar))
								<img src="{{ url('/static/images/default-avatar.png') }}">
							@else
								<img src="{{ url('/uploads_users/'.Auth::id().'/av_'.Auth::user()->avatar) }}" class="circle">
							@endif Hola: {{ Auth::user()->name }}
						</a>
						<ul class="dropdown-menu shadow" aria-labelledby="navbarDropdown">
							@if(Auth::user()->role == "1")
							<li>
								<a class="dropdown-item" href="{{ url('/admin') }}">
									<i class="fas fa-chalkboard-teacher"></i> Administración
								</a>
							</li>
							<li><hr class="dropdown-divider"></li>
							@endif
							<li>
								<a class="dropdown-item" href="{{ url('/account/edit') }}">
									<i class="fas fa-address-card"></i> Editar mi perfil
								</a>
							</li>
							<li>
								<a class="dropdown-item" href="{{ url('/logout') }}">
									<i class="fas fa-sign-out-alt"></i> Salir
								</a>
							</li>
						</ul>
					</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>




	@if(Session::has('message'))
		<div class="container">           
		<div class="alert alert-{{ Session::get('typealert') }} mtop16" style="display:block; margin-bottom: 16px;"> 
			{{ Session::get('message') }}
			@if ($errors->any())       
			<ul>
				@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
			@endif
			<script>
				$('.alert').slideDown();
				setTimeout(function(){ $('.alert').slideUp(); }, 10000);
			</script>
		</div>
		</div>
	@endif

	<div class="wrapper">
		<div class="container">
			@yield('content')
		</div>
	</div>

	<footer class="bg-dark text-center text-white mtop32">
		<!-- Grid container -->
		<div class="container p-4">
			<!-- Section: Social media -->
			<section class="mb-4">
				<!-- Facebook -->
				<a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
				><i class="fab fa-facebook-f"></i
				></a>

				<!-- Twitter -->
				<a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
				><i class="fab fa-twitter"></i
				></a>

				<!-- Google -->
				<a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
				><i class="fab fa-google"></i
				></a>

				<!-- Instagram -->
				<a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
				><i class="fab fa-instagram"></i
				></a>

				<!-- Linkedin -->
				<a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
				><i class="fab fa-linkedin-in"></i
				></a>

				<!-- Github -->
				<a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
				><i class="fab fa-github"></i
				></a>
			</section>
			<!-- Section: Social media -->

			<!-- Section: Form -->
			<section class="">
				<form action="">
					<!--Grid row-->
					<div class="row d-flex justify-content-center">
						<!--Grid column-->
						<div class="col-auto">
							<p class="pt-2">
								<strong>Suscribete a nuestro newsletter</strong>
							</p>
						</div>
						<!--Grid column-->

						<!--Grid column-->
						<div class="col-md-5 col-12">
							<!-- Email input -->
							<div class="form-outline form-white mb-4">
								<input type="email" id="form5Example21" class="form-control" />
								<label class="form-label" for="form5Example21">Email address</label>
							</div>
						</div>
						<!--Grid column-->

						<!--Grid column-->
						<div class="col-auto">
							<!-- Submit button -->
							<button type="submit" class="btn btn-outline-light mb-4">
								Subscribe
							</button>
						</div>
						<!--Grid column-->
					</div>
					<!--Grid row-->
				</form>
			</section>
			<!-- Section: Form -->



			<!-- Seccion: Links -->
			<section class="">

				<div class="row">

					<div class="col-lg-4 col-md-6 mb-4 mb-md-0">
						<h5 class="text-uppercase">Ayuda</h5>

						<ul class="list-unstyled mb-0">
							<li>
								<a href="#!" class="text-white">Contáctanos</a>
							</li>
							<li>
								<a href="#!" class="text-white">Devoluciones</a>
							</li>
							<li>
								<a href="#!" class="text-white">Estado de la orden</a>
							</li>
							<li>
								<a href="#!" class="text-white">Abrir disputa</a>
							</li>
						</ul>
					</div>

					<div class="col-lg-4 col-md-6 mb-4 mb-md-0">
						<h5 class="text-uppercase">Cuenta</h5>

						<ul class="list-unstyled mb-0">
							<li>
								<a href="#!" class="text-white">Login</a>
							</li>
							<li>
								<a href="#!" class="text-white">Registro</a>
							</li>
							<li>
								<a href="#!" class="text-white">Ajustes de cuenta</a>
							</li>
							<li>
								<a href="#!" class="text-white">Mis ordenes</a>
							</li>
						</ul>
					</div>

					<div class="col-lg-4 col-md-6 mb-4 mb-md-0">
						<h5 class="text-uppercase">Compañia</h5>

						<ul class="list-unstyled mb-0">
							<li>
								<a href="#!" class="text-white">Sobre nosotros</a>
							</li>
							<li>
								<a href="#!" class="text-white">Encuentra una tienda</a>
							</li>
							<li>
								<a href="#!" class="text-white">Términos y condiciones</a>
							</li>
							<li>
								<a href="#!" class="text-white">Sitemap</a>
							</li>
						</ul>
					</div>

					
				</div>

			</section>

		</div>

		<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
			© 2022 Copyright:
			<a class="text-white" href="http://ecoecoalewar.com/#">EcoEco</a>
		</div>
	</footer>




	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>





</body>
</html>