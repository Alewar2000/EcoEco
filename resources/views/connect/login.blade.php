@extends('connect.master')

@section('title', 'Login')

@section('content')

<div class="box box_login shadow p-3 mb-5 bg-body rounded">
	<div class="header">
		<a href="{{url('/')}}">
			<img src="{{url('/static/images/logo.PNG')}}">
		</a>
	</div>
	<div class="inside">
	{!! Form::open(['url'=> '/login']) !!}
	<label for="email">Correo electrónico:</label>
	<div class="input-group">

		<div class="input-group-text"><i class="far fa-envelope-open"></i></div>
	{!! Form::email('email', null, ['class' => 'form-control']) !!}
	</div>

	<label for="email" class="mtop16">Contraseña:</label>
	<div class="input-group">

		<div class="input-group-text"><i class="fas fa-key"></i></div>
	{!! Form::password('password', ['class' => 'form-control']) !!}
	</div>
	{!! Form::submit('Ingresar', ['class' => 'btn btn-success mtop16'])!!}
	{!! Form::close()!!}

	@if(Session::has('message'))
		<div class="container">           
		<div class="alert alert-danger{{ Session::get('typealert') }} mtop16" style="display:block; margin-bottom: 16px;"> 
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

	<div class="footer mtop16">
		<a href="{{url('/register')}}">Crea una cuenta</a>
		<a href="{{url('/recover')}}">Recuperar contraseña</a>
	</div>

	</div>

	
</div>

@stop