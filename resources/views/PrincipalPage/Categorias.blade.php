@extends('PrincipalPage.Principal')
@section('content')
    <!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<ul class="breadcrumb-tree">
							<li><a href="{{route('inicio')}}">Home</a></li>
							<li><a href="{{route('categoria')}}">Todas las categorias</a></li>
							{{-- <li><a href="#">Abarrotes</a></li> --}}
							{{-- <li class="active">Chucherias (0 Resultados)</li> --}}
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- ASIDE -->
					<div id="aside" class="col-md-3">
						<!-- aside Widget -->

						<div class="aside">
							<h3 class="aside-title">Categorias</h3>
							<div class="checkbox-filter">

								<div class="input-radio list" data-filter="all">
									<input class="active" selected="true" type="radio" name="radioCategoria" id="category-0" checked>
									<label for="category-0">
										<span></span>
										Todo
										<small></small>
									</label>
								</div>

								@foreach($categories as $category)
								<div class="input-radio list" data-filter="{{$category->name}}">
									<input type="radio" name="radioCategoria" id="category-{{$category->id}}">
									<label for="category-{{$category->id}}">
										<span></span>
										{{$category->name}}
										<small>({{$category->cantCategory}})</small>
									</label>
								</div>
								@endforeach

							</div> 
						</div>
						
						<div class="aside">
							<h3 class="aside-title">Más vendidos</h3>
							@foreach($productosvendidos as $masvendidos)
							<div class="product-widget">
								<div class="product-img mt-3">
									<img src="{{asset('image/'.$masvendidos->image)}}" alt="">
								</div>
								<div class="product-body">
									<p class="product-category">{{$masvendidos->category}}</p>
									<h3 class="product-name"><a href="{{route('detalle',$masvendidos->id)}}">{{$masvendidos->name}}</a></h3>
									<h4 class="product-price"><h3 class="product-price producto">S/{{$masvendidos->price}}</h3></h4>
								</div>
							</div>
							@endforeach
						</div>
						<!-- /aside Widget -->
					</div>
					<!-- /ASIDE -->

					<!-- STORE -->
					<div id="store" class="col-md-9">
						<div class="row row row-cols-1 row-cols-md-3 g-5">
							<!-- product -->
							@foreach($products as $product)
							<div class="col Producto {{$product->category->name}}">								
								<div class="product">									
									<div class="product-img">
										<img src="{{asset('image/'.$product->image)}}" alt="">
										<div class="product-label">
											<span class="sale">-30%</span>
											<span class="new">NUEVO</span>
										</div>
									</div>
									<div class="product-body">
										<p class="product-category">{{$product->category->name}}</p>
										<h3 class="product-name"><a href="#">{{$product->name}}</a></h3>
										<h4 class="product-price"><h3 class="product-price producto">{{$product->sell_price}}</h3> <del class="product-old-price">S/0.00</del></h4>
										<div class="product-rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
										<div class="product-btns">
											<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">añadir a la lista de deseos</span></button>
											<button class="add-to-compare"><a href="{{route('delivery')}}"><i class="fa fa-exchange"></i><span class="tooltipp">Añadir a comprar</span></a></button>
											<button class="quick-view"><a href="{{route('detalle',$product->id)}}"> <i class="fa fa-eye"></i><span class="tooltipp">Vista rápida</span></a></button>
										</div>
									</div>
									<div class="add-to-cart">
										<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Añadir al carrito</button>
									</div>
								</div>								
							</div>
							@endforeach
							<!-- /product -->
						</div>
						<!-- /store products -->

						<!-- store bottom filter -->
						<div class="store-filter clearfix">
							<!--
							<span class="store-qty">Showing 20-100 products</span>
							-->
							<ul class="store-pagination">
								<li class="active">1</li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
							</ul>
						</div>
						<!-- /store bottom filter -->
					</div>
					<!-- /STORE -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
@endsection