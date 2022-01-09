@extends('emails.master')

@section('content')
<p>Hola: <strong>{{ $name }}</strong></p>
<p>Esta es la nueva contraseña para su cuenta en nuestra plataforma.</p>
<p><h2>{{ $password }}</h2></p>
<p><a href="{{ url('/login') }}" style="display: inline-block; background-color: #87ff66; color: #fff; padding: 12px; border-radius: 4px; text-decoration: none;">Resetear contraseña</a></p>
@stop