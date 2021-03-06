@extends('admin.master')

@section('title', 'Usuarios')

@section('breadcrumb')
<li class="breadcrumb-item">
	<a href="{{url('/admin/users')}}"><i class="fas fa-users"></i> Usuarios</a>
</li>
@endsection

@section('content')
<div class="container-fluid">
	<div class="panel shadow">
		<div class="header">
			<h2 class="title">
				<i class="fas fa-users"></i> Usuarios
			</h2>
		</div>

		<div class="inside">

			<div class="row">
				<div class="col-md-2 offset-md-10">
				</div>
			</div>

			<table class="table mtop16">
				<thead>
					<tr>
						<td>ID</td>
						<td>Nombre</td>
						<td>Apellido</td>
						<td>Email</td>
						<td>Rol</td>
						<td>Estado</td>
						<td></td>
					</tr>
				</thead>

				<tbody>
					@foreach($users as $user)
					<tr>
						<td>{{$user->id}}</td>
						<td>{{$user->name}}</td>
						<td>{{$user->lastname}}</td>
						<td>{{$user->email}}</td>
						<td>{{getRoleUserArrayKey($user->role)}}</td>
						<td>{{getUserStatusArrayKey($user->status)}}</td>
						<td>
							<div class="opts">
								<a href="{{url('/admin/user/'.$user->id.'/edit')}}" title="Editar">
									<i class="fas fa-edit"></i>
								</a>

							</div>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			


		</div>
	</div>
</div>	
@endsection