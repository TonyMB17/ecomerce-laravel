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
							<li><a href="{{route('categoria')}}">TODAS LAS CATEGORIAS</a></li>
							<li><a href="#">{{$product->category->name}}</a></li>
							<li class="active">{{$product->name}}</li>
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
					<!-- Product main img -->
					<div class="col-md-5 col-md-push-2">
						<div id="product-main-img">
							<!--estas imagenes deben cambiar de acuerdo a los productos-->
							<div class="product-preview">
								<img src="{{asset('image/'.$product->image)}}" alt="">
							</div>
							{{-- <div class="product-preview">
								<img src="{{asset('image/'.$product->image)}}" alt="">
							</div>

							<div class="product-preview">
								<img src="{{asset('image/'.$product->image)}}" alt="">
							</div>

							<div class="product-preview">
								<img src="{{asset('image/'.$product->image)}}" alt="">
							</div> --}}
						</div>
					</div>
					<!-- /Product main img -->

					<!-- Product thumb imgs -->
					<div class="col-md-2  col-md-pull-5">
						<div id="product-imgs">
							<div class="product-preview">
								<img src="{{asset('image/'.$product->image)}}" alt="">
							</div>

							{{-- <div class="product-preview">
								<img src="./img/Producto13.jpg" alt="">
							</div>

							<div class="product-preview">
								<img src="./img/Producto17.jpg" alt="">
							</div>

							<div class="product-preview">
								<img src="./img/Producto18.jpg" alt="">
							</div> --}}
						</div>
					</div>
					<!-- /Product thumb imgs -->

					<!-- Product details -->
					<div class="col-md-5">
						<div class="product-details">
							<h2 class="product-name">{{$product->name}}</h2>
							<div>
								<div class="product-rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
								</div>
								<a class="review-link" href="#">10 Revisión (es) | Añadir tu reseña</a>
							</div>
							<div>
								<h3 class="product-price">{{$product->sell_price}}</h3>
								<span class="product-available">En stock</span>
							</div>
							<p>
								{{$product->category->description}}
							</p>
							
							<div class="add-to-cart">
								<div class="qty-label">
									Cant.
									<div class="input-number">
										<input type="number">
										<span class="qty-up">+</span>
										<span class="qty-down">-</span>
									</div>
								</div>
								<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Añadir al carrito</button>
							</div>

							<ul class="product-btns">
								<li><a href="#"><i class="fa fa-heart-o"></i> añadir a la lista de deseos</a></li>
								<li><a href="#"><i class="fa fa-exchange"></i> Añadir a comparar</a></li>
							</ul>

							<ul class="product-links">
								<li>Categoria:</li>
								<li><a href="#">{{$product->category->name}}</a></li>
							</ul>

							<ul class="product-links">
								<li>Compartir:</li>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-envelope"></i></a></li>
							</ul>

						</div>
					</div>
					<!-- /Product details -->

					<!-- Product tab -->
					<div class="col-md-12">
						<div id="product-tab">
							<!-- product tab nav -->
							<ul class="tab-nav">
								<li class="active"><a data-toggle="tab" href="#tab1">Description</a></li>
								<li><a data-toggle="tab" href="#tab2">Detalles</a></li>
								<!--<li><a data-toggle="tab" href="#tab3">Reviews (3)</a></li>-->
							</ul>
							<!-- /product tab nav -->

							<!-- product tab content -->
							<div class="tab-content">
								<!-- tab1  -->
								<div id="tab1" class="tab-pane fade in active">
									<div class="row">
										<div class="col-md-12">
											<p>
												Le damos la Bienvenida a nuestra tienda online Tenemos el agrado de comunicarle a nuestros clientes y amigos el lanzamiento de  nuestra tienda online donde van a  poder comprar toda nuestra línea de productos y algunas partidas especiales.

												Siguiendo con el concepto de Lagarde como una bodega histórica pero con proyección hacia futuro, consideramos importante sumarnos a la tendencia mundial hacia la venta online.

												Buscamos acercarnos a nuestro público desde otro canal de venta, garantizándoles comprar de manera fácil y confiable, ofreciéndoles diferentes medios de pago.

												La tienda a su vez se convierte en un lugar de exposición de nuestros productos, donde buscamos trasladarles nuestra pasión y entrega por el vino.

												Con el fin de impulsar nuestra tienda de e-commerce, estaremos ofreciéndoles a nuestros clientes, un 30 % de descuento en su primera compra dentro de la Argentina.

												¡Los invitamos a conocer nuestra tienda y aprovechar esta promoción especial!
											</p>
										</div>
									</div>
								</div>
								<!-- /tab1  -->

								<!-- tab2  -->
								<div id="tab2" class="tab-pane fade in">
									<div class="row">
										<div class="col-md-12">
											<p>
												{{$product->category->description}}
											</p>
										</div>
									</div>
								</div>
								<!-- /tab2  -->

								<!-- /tab3  -->
							</div>
							<!-- /product tab content  -->
						</div>
					</div>
					<!-- /product tab -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- Section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<div class="col-md-12">
						<div class="section-title text-center">
							<h3 class="title">Productos relacionados</h3>
						</div>
					</div>

					<!-- product -->
					@foreach($productCat as $product)
					<div class="col-md-3 col-xs-6">
						<div class="product">
							<div class="product-img">
								<img src="{{asset('image/'.$product->image)}}" alt="">
								{{-- <div class="product-label">
									<span class="sale">-30%</span>
								</div> --}}
							</div>
							<div class="product-body">
								<p class="product-category">{{$product->category}}</p>
								<h3 class="product-name"><a href="#">{{$product->name}}</a></h3>
								<h4 class="product-price"><h3 class="product-price producto">S/.{{$product->price}}</h3></h4>
								<div class="product-rating">
								</div>
								<div class="product-btns">
									<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">añadir a la lista de deseos</span></button>
									<button class="add-to-compare"><a href="Delivery.html"><i class="fa fa-exchange"></i><span class="tooltipp">Añadir a comprar</span></a></button>
									<button class="quick-view"><a href="Productos.html"> <i class="fa fa-eye"></i><span class="tooltipp">Vista rápida</span></a></button>
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
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /Section -->


@endsection