@extends('admin.master')

@section('title', 'Productos')

@section('breadcrumb')
<li class="breadcrumb-item">
	<a href="{{url('/admin/products')}}"><i class="fas fa-boxes"></i> Productos</a>
</li>
@endsection

@section('content')
<div class="container-fluid">
	<div class="panel shadow">
		<div class="header">
			<h2 class="title">
				<i class="fas fa-boxes"></i> Productos
			</h2>
		</div>

		<div class="inside">
			<table class="table">
				<div class="btns">
					<a href="{{url('/admin/product/add')}}"  class="btn btn-success"><i class="fas fa-plus"></i> Agregar producto</a>
				</div>

				
			</table>
			


		</div>
	</div>
</div>	
@endsection