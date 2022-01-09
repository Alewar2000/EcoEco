@extends('emails.master')

@section('content')
<p>Hola: <strong>{{ $name }}</strong></p>
<p>Estimado cliente su petición de recuperar su contraseña esta en curso.</p>
<p>Para continuar haga clic en el siguiente botón e ingrese el siguiente código: <h2>{{ $code }}</h2></p>
<p><a href="{{ url('/reset?email='.$email) }}" style="display: inline-block; background-color: #87ff66; color: #fff; padding: 12px; border-radius: 4px; text-decoration: none;">Resetear contraseña</a></p>


<p>En caso de no haber solicitado el recuperar contraseña, pongase en contacto con nuestros administradores.</p>
@stop