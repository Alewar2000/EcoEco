@extends('admin.master')

@section('title', 'Categorias')

@section('breadcrumb')
<li class="breadcrumb-item">
	<a href="{{url('/admin/categories')}}"><i class="fas fa-object-ungroup"></i> Categorías</a>
</li>
@endsection


@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-3">
			<div class="panel shadow">
				<div class="header">
					<h2 class="title">
						<i class="fas fa-plus"></i>Agregar categoría
					</h2>
				</div>

				<div class="inside">
					{!! Form::open(['url'=> '/admin/category/add']) !!}
					

					<label for="name">Nombre de la categoría:</label>
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text" id="basic-addon1">
								<i class="fas fa-keyboard"></i>
							</span>
						</div>
						{!! Form::text('name', null, ['class' => 'form-control']) !!}
					</div>


					<label for="module" class="mtop16">Módulo:</label>
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text" id="basic-addon1">
								<i class="fas fa-keyboard"></i>
							</span>
						</div>
						{!! Form::select('module', getModulesArray(), 0, ['class' => 'custom-select']) !!}
					</div>

					<label for="icon" class="mtop16">Ícono:</label>
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text" id="basic-addon1">
								<i class="fas fa-icons"></i>
							</span>
						</div>
						{!! Form::text('icon', null, ['class' => 'form-control']) !!}
					</div>

					{!! Form::submit('Guardar', ['class' => 'btn btn-success mtop16']) !!}

					
					{!!	Form::close() !!}
				</div>
			</div>
		</div>

		<div class="col-md-9">
			<div class="panel shadow">
				<div class="header">
					<h2 class="title">
						<i class="fas fa-object-ungroup"></i> Categorías
					</h2>
				</div>

				<div class="inside ">
					<nav class="nav nav-pills nav-fill">
						@foreach(getModulesArray() as $mod => $k)
						
						<a href="{{url('/admin/categories/'.$mod)}}" class="nav-link">{{$k}}</a>
						
						@endforeach
					</nav>

					<table class="table">
						<thead>
							<tr>
								<td width="32px">Ícono</td>
								<td>Nombre</td>
								<td width="140px"></td>
							</tr>
						</thead>
						<tbody>
							@foreach($cats as $cat)
							<tr>
								<td>{!! htmlspecialchars_decode($cat->icono) !!}</td>
								<td>{{ $cat->name}}</td>
								<td>
									<div class="opts">
										<a href="{{url('/admin/category/'.$cat->id.'/edit')}}" title="Editar">
											<i class="fas fa-edit"></i>
										</a>
										<a href="{{url('/admin/category/'.$cat->id.'/delete')}}" title="Eliminar">
											<i class="fas fa-trash-alt"></i>
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
	</div>
</div>

@endsection

