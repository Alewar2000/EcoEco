@extends('admin.master')

@section('title', 'Editar Usuario')

@section('breadcrumb')
<li class="breadcrumb-item">
	<a href="{{url('/admin/users')}}"><i class="fas fa-users"></i> Usuarios</a>
</li>
@endsection

@section('content')
<div class="container-fluid">


	<div class="page_user">
		<div class="row">
			<div class="col-md-4">
				<div class="panel shadow">
					<div class="header">
						<h2 class="title">
							<i class="fas fa-user"></i> 
							Información
						</h2>
					</div>

					<div class="inside">

						<div class="mini_profile">
							@if(is_null($u->avatar))

							<img src="{{url('/static/images/default-avatar.png')}}" class="avatar">
							@else
							<img src="{{url('/uploads/user/'.$u->id.'/'.$user->avatar)}}" class="avatar">

							@endif

							<div class="info">
								<span class="title"> <i class="far fa-id-card"></i> Nombre: </span>
								<span class="text">{{ $u->name}} {{ $u->lastname}}</span>

								<span class="title"> <i class="fas fa-envelope-square"></i> Correo electrónico: </span>
								<span class="text">{{ $u->email}} </span>

								<span class="title"> <i class="fas fa-portrait"></i> Estado: </span>
								<span class="text">{{ getUserStatusArrayKey($u->status)}} </span>

								<span class="title"> <i class="far fa-calendar-plus "></i> Registro: </span>
								<span class="text">{{ $u->created_at}} </span>

								<span class="title"> <i class="fas fa-user-tie"></i> Tipo de usuario: </span>
								<span class="text">{{ getRoleUserArrayKey($u->role)}} </span>

								

							</div>
						</div>
						
					</div>
				</div>
			</div>


			<div class="col-md-8">
				<div class="panel shadow">
					<div class="header">
						<h2 class="title">
							<i class="fas fa-user-edit"></i> Editar información
						</h2>
					</div>

					<div class="inside">




					</div>
				</div>
			</div>
		</div>
	</div>
	
</div>	
@endsection