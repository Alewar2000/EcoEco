@extends('master')

@section('title', 'Inicio')

@section('content')
<section>
	<div class="home_action_bar shadow">
		<div class="row">
			<div class="col-md-3">
				<div class="categories">
					<a href="#" class="link"><i class="fas fa-stream"></i> Categorias</a>
					<ul class="shadow">
						
					</ul>
				</div>
			</div>

			<div class="col-md-9">
				{!! Form::open(['url' => '/search']) !!}
				<div class="input-group">
					<i class="fas fa-search"></i>
					{!! Form::text('search_query', null, ['class' => 'form-control', 'placeholder' => '¿Buscas algo?', 'required']) !!}
					<button class="btn" type="submit" id="button-addon2">Buscar</button>
				</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</section>

<section class="section-intro">

	<div class="intro-banner-wrap">
		<img src="https://tienda.ecocentro.es/modules/posslideshows/images/a46eaadb01661e039af0e32c7d826b4d67dbd109_visores-nueva-weco-devolvemos-la-diferencia.jpg" class="w-100 img-fluid">
	</div>

</section>
<section>
	<div class="row row-home-links border-bottom bottom32">
		<div class=" box1 col col-lg-3 col-md-3 col-xs-4 okletsgo">
			<div class="boxs boxesw mtop32" aria-hidden="true">
				<a href=""><i class="fas fa-truck-moving"></i><br></a>
				<h5>
					<a href="">Envío gratis a partir de 49€</a>
				</h5>
			</div>
		</div>
		<div class=" box1 col col-lg-3 col-md-3 col-xs-4 okletsgo">
			<div class="boxs boxesw mtop32" aria-hidden="true">
				<a href=""><i class="fas fa-paper-plane"></i><br></a>
				<h5>
					<a href="">Entrega en 24/48h</a>
				</h5>
			</div>
		</div>
		<div class=" box1 col col-lg-3 col-md-3 col-xs-4 okletsgo">
			<div class="boxs boxesw mtop32" aria-hidden="true">
				<a href=""><i class="fab fa-pagelines"></i><br></a>
				<h5>
					<a href="">Productos totalmente ecologicos</a>
				</h5>
			</div>
		</div>
		<div class=" box1 col col-lg-3 col-md-3 hidden-xs-down okletsgo">
			<div class="boxs boxesw mtop32" aria-hidden="true">
				<a href=""><i class="fas fa-percentage"></i><br></a>
				<h5>
					<a href="">Ofertas exclusivas</a>
				</h5>
			</div>
		</div>
	</div>


	<h2 class="mtop32">
		Productos populares
	</h2>

	<div class="row mtop32 border-bottom" style="height: 830px;">
		<div class="col-md-3 rounded">
			<div href="#" class="card card-product-grid h100">
				<a href="#" class="img-wrap"> <img style="width: 100%" src="static/images/items/1.jpg"> </a>
				<figcaption class="info-wrap mtop16" style="margin-left: 10px;">
					<a href="#" style="text-decoration:none; color: black;" class="title">Producto 1</a>
					<div class="price mt-1">
						<b>$179.00</b>
					</div> <!-- price-wrap.// -->
				</figcaption>
			</div>
		</div> <!-- col.// -->
		<div class="col-md-3 rounded">
			<div href="#" class="card card-product-grid h100">
				<a href="#" class="img-wrap"> <img style="width: 100%" src="static/images/items/2.jpg"> </a>
				<figcaption class="info-wrap mtop16" style="margin-left: 10px;">
					<a href="#" style="text-decoration:none; color: black;" class="title">Producto 2</a>
					<div class="price mt-1">
						<b>$179.00</b>
					</div> <!-- price-wrap.// -->
				</figcaption>
			</div>
		</div> <!-- col.// -->
		<div class="col-md-3 rounded">
			<div href="#" class="card card-product-grid h100">
				<a href="#" class="img-wrap"> <img style="width: 100%" src="static/images/items/3.jpg"> </a>
				<figcaption class="info-wrap mtop16" style="margin-left: 10px;">
					<a href="#" style="text-decoration:none; color: black;" class="title">Producto 3</a>
					<div class="price mt-1">
						<b>$179.00</b>
					</div> <!-- price-wrap.// -->
				</figcaption>
			</div>
		</div> <!-- col.// -->
		<div class="col-md-3 rounded">
			<div href="#" class="card card-product-grid h100">
				<a href="#" class="img-wrap"> <img style="width: 80%" src="static/images/items/4.jpg"> </a>
				<figcaption class="info-wrap mtop16" style="margin-left: 10px;">
					<a href="#" style="text-decoration:none; color: black;" class="title">Producto 4</a>
					<div class="price mt-1">
						<b>$179.00</b>
					</div> <!-- price-wrap.// -->
				</figcaption>
			</div>
		</div> <!-- col.// -->
		<div class="col-md-3 rounded mtop32">
			<div href="#" class="card card-product-grid h100">
				<a href="#" class="img-wrap"> <img style="width: 100%" src="static/images/items/5.jpg"> </a>
				<figcaption class="info-wrap mtop16" style="margin-left: 10px;">
					<a href="#" style="text-decoration:none; color: black;" class="title">Producto 5</a>
					<div class="price mt-1">
						<b>$179.00</b>
					</div> <!-- price-wrap.// -->
				</figcaption>
			</div>
		</div> <!-- col.// -->
		<div class="col-md-3 rounded mtop32">
			<div href="#" class="card card-product-grid h100">
				<a href="#" class="img-wrap"> <img style="width: 100%" src="static/images/items/6.jpg"> </a>
				<figcaption class="info-wrap mtop16" style="margin-left: 10px;">
					<a href="#" style="text-decoration:none; color: black;" class="title">Producto 6</a>
					<div class="price mt-1">
						<b>$179.00</b>
					</div> <!-- price-wrap.// -->
				</figcaption>
			</div>
		</div> <!-- col.// -->
		<div class="col-md-3 rounded mtop32">
			<div href="#" class="card card-product-grid h100">
				<a href="#" class="img-wrap"> <img style="width: 100%" src="static/images/items/7.jpg"> </a>
				<figcaption class="info-wrap mtop16" style="margin-left: 10px;">
					<a href="#" style="text-decoration:none; color: black;" class="title">Producto 7</a>
					<div class="price mt-1">
						<b>$179.00</b>
					</div> <!-- price-wrap.// -->
				</figcaption>
			</div>
		</div> <!-- col.// -->
		<div class="col-md-3 rounded mtop32">
			<div href="#" class="card card-product-grid h100">
				<a href="#" class="img-wrap"> <img style="width: 100%;" src="static/images/items/8.jpg"> </a>
				<figcaption class="info-wrap mtop16" style="margin-left: 10px;">
					<a href="#" style="text-decoration:none; color: black;" class="title">Producto 8</a>
					<div class="price mt-1">
						<b>$179.00</b>
					</div> <!-- price-wrap.// -->
				</figcaption>
			</div>
		</div> <!-- col.// -->
	</div>


</section>

	<!-- Footer -->




@endsection