@extends('master')

@section('title', $product->name)

@section('content')


<div class="product_single">
	<div class="container">
		<div class="row">
			
			<div class="col-md-4 pleft0">
				<div class="slick-slider">
					<div>
						<a href="{{ url('/uploads/'.$product->file_path.'/'.$product->image) }}" data-fancybox="gallery">
							<img src="{{ url('/uploads/'.$product->file_path.'/'.$product->image) }}" class="img-fluid">
						</a>
					</div>
					@if(count($product->getGallery) > 0)
						@foreach($product->getGallery as $gallery)
							<div>
								<a href="{{ url('/uploads/'.$gallery->file_path.'/t_'.$gallery->file_name) }}" data-fancybox="gallery">
									<img src="{{ url('/uploads/'.$gallery->file_path.'/t_'.$gallery->file_name) }}" class="img-fluid">
								</a>
							</div>
						@endforeach
					@endif
				</div>
			</div>

			<div class="col-md-8">
				<h2 class="title">{{ $product->name }}</h2>
				<div>
					<h4 class="description mtop32">
						<p id="demo">{{ $product->content}}</p>
					</h4>

				</div>

				<div class="price mtop32">
					<h3 class="price mtop32">
						{{ $product->price}}€
					</h3>
				</div>

				<button type="button" class="btn btn-success">Comprar</button>
					
				</div>
			</div>

			
		</div>
	</div>
</div>
@endsection