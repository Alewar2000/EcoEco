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



@endsection