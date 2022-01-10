	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>@yield('title') - EcoEco</title>
		<meta name="csrf-token" content="{{csrf_token()}}">
		<meta name="routeName" content="{{Route::currentRouteName()}}">

		<!-- CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
		<link rel="stylesheet" href="{{url('/static/css/admin.css?v='.time())}}">
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.13.0/css/all.css">
		
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css"/>

		<!-- JS -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
		<script src="{{url('static/libs/ckeditor/ckeditor.js')}}"></script>
		<script src="{{url('static/js/admin.js?v='.time())}}"></script>

		<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>



	</head>
	<body>
		
		<div class="wrapper">
			<div class="col1">@include('admin.sidebar')</div>
			<div class="col2">
				<nav class="navbar navbar-expand-lg shadow">
					<div class="collapse navbar-collapse">
						<ul class="navbar-nav">
							<li class="nav-item">
								<a href="{{url('/admin')}}" class="nav-link">
									<i class="fas fa-home"></i>Dashboard
								</a>
							</li>
						</ul>
					</div>
				</nav>
				<div class="page">

					<div class="container-fluid">
						<nav aria-label="breadcrumb shadow">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="{{url( '/admin') }}"><i class="fas fa-home"></i>Dashboard</a>
								</li>
								@section('breadcrumb')
								@show
							</ol>
						</nav>
					</div>

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
								setTimeout(function(){ $('.alert').slideUp(); }, 5000);
							</script>
						</div>
					</div>
					@endif

					@section('content')
					@show

				</div>

			</div>
		</div>
	</body>
	</html>