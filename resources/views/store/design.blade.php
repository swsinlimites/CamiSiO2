@extends('store.template')

@section('content')

	<div class="jumbotron jumbotron-fluid">
		<div class="container">

			@if(!empty($product))<img id="playera" src="{{ $product->image }}">
			@endif

			<div class="row">
				<div class="col-md-8 col-sm-6">

					<div id="designer"></div>
					@if(!empty($estampas))<ul class="product-view-selector">
					@foreach($estampas as $estampa)	<li class="view-front"><img src="{{ url($estampa->image) }}" alt=""></li>
					@endforeach</ul>
					@else <div class="alert alert-danger">No hay estampas para mostrar</div>
					<div class="alert alert-info">
						<strong>Info!</strong> No hay estampas para mostrar.
					</div>
					@endif
					{{-- <ul class="product-view-selector">
						<li class="view-front" id="2star"><img src="http://joy105.com/wp-content/uploads/2017/05/heart.png" alt="heart"></li>
						<li class="view-front" id="2ancla"><img src="{{ url('img/ancla.png') }}" alt="ancla"></li>
						<li class="view-front" id="2star"><img src="{{ url('img/star.png') }}" alt="star"></li>
						<li class="view front" id="save">Save</li>
						<!-- <li class="view-front" id="2move">Move</li>
						<li class="view-front" id="2scale">Escala</li> -->
					</ul> --}}
				
				</div>

				<div class="col-md-4 col-sm-6">
					<div class="pricingTable">
						<div class="pricingTable-header">
							@if(!empty($categoria))<h3 class="heading">{{ $categoria->name }}</h3>
							@else<h3 class="heading">Deportiva</h3>
							@endif

							<span class="price-value">
								@if(!empty($product))<span class="currency">$</span> {{ $product->price }}
								@else<span class="currency">$</span> 10
								@endif
								
								<span class="month">/un</span>
							</span>
						</div>
						<div class="pricing-content">
							<ul>
								@if(!empty($product))<li>{{ $product->name }}</li>
								@else<li>Azul</li>
								@endif<li>Cuello redondo</li>
							</ul>

							@if(!empty($product))<a href="{{ route('cart-add', $product->slug) }}" class="read">Comprar</a>
							@else<a href="#" class="read">Comprar</a>
							@endif

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection