@extends('PrincipalPage.Principal')

@section('content')
    <!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./img/coleccionhogar1.jpg" alt=""><!--cambiar esta imagen-->
							</div>
							<div class="shop-body">
								<h3>Coleccion para <br>El Hogar</h3>
								<a href="#" class="cta-btn">Compra ahora <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./img/coleccioncosina1.png" alt=""><!--cambiar imagen-->
							</div>
							<div class="shop-body">
								<h3>Coleccion de <br>Accesorios</h3>
								<a href="#" class="cta-btn">Compra Ahora <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./img/coleccionlimpieza.jpg" alt=""> <!--cambiar de imagen-->
							</div>
							<div class="shop-body">
								<h3>Coleccion de<br>Limpieza</h3>
								<a href="#" class="cta-btn">COMPRA AHORA <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Nuevos Productos</h3>
							{{-- <div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<li class="list active" data-filter="all"><a data-toggle="tab">Todos</a></li>
									<li class="list" data-filter="Aceites"><a data-toggle="tab">Aceites</a></li>
									<li class="list" data-filter="Lacteos"><a data-toggle="tab">Lacteos</a></li>
									<li class="list" data-filter="Enlatados"><a data-toggle="tab">Enlatados</a></li>
									<li class="list" data-filter="Menestras"><a data-toggle="tab">Menestras</a></li>
								</ul>
							</div> --}}
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->					
					<div class="products">						
							<div class="container products-tabs">
								<!-- tab -->
									<div class="row row-cols-1 row-cols-md-4 g-4">

										<!-- product -->									  	
											@foreach($products->slice(0,15) as $product)
											<div class="col">										
												<div class="product card">
													<div class="product-img "><!--aqui poniendo un nombre a la clase para que se agrege al carrito-->
														<img class="" src="{{asset('image/'.$product->image)}}" alt=""><!--cambiar imagen-->
														<div class="product-label">
															{{-- <span class="sale">-30%</span> --}}
															<span class="new">NUEVO</span>
														</div>
													</div>
													<div class="product-body">
														<p class="product-category">{{$product->category->name}}</p>
														<h3 class="product-name"><a href="#">{{$product->name}}</a></h3>
														<h4 class="product-price"> <h3 class="product-price producto">S/{{$product->sell_price}}</h3></h4>
														<div class="product-rating">
															<i class="fa fa-star"></i><!--aqui se pone la cantidad de estrellas-->
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
														</div>
														<div class="product-btns">
															<button class="add-to-wishlist"> <i class="fa fa-heart-o"></i><span class="tooltipp">añadir a la lista de deseos</span></button>
															<button class="add-to-compare"><a href="{{route('delivery')}}"><i class="fa fa-exchange"></i><span class="tooltipp">Añadir a comprar</span></a></button>
															<button class="quick-view"><a href="{{route('detalle',$product->id)}}"> <i class="fa fa-eye"></i><span class="tooltipp">Vista rápida</span></a></button>
														</div>
													</div>
													<div class="add-to-cart">
														<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Añadir al carrito</button><!--boton para añadir al carrito-->
													</div>
												</div>		
											</div>								
											@endforeach										
										<!-- /product -->	
									</div>		
								<!-- /tab -->
							</div>
					</div>
					<!-- Products tab & slick -->

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- HOT DEAL SECTION -->
		<div id="hot-deal" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="hot-deal">
							<!--agregando-->
							<div class="banner1"></div>
							<!---->
							<ul class="hot-deal-countdown">
								<li>
									<div>
										<h3>02</h3>
										<span>Dias</span>
									</div>
								</li>
								<li>
									<div>
										<h3>10</h3>
										<span>Horas</span>
									</div>
								</li>
								<li>
									<div>
										<h3>34</h3>
										<span>Mins</span>
									</div>
								</li>
								<li>
									<div>
										<h3>60</h3>
										<span>Secs</span>
									</div>
								</li>
							</ul>
							<h2 class="text-uppercase">oferta especial esta semana</h2>
							<p>Nueva colección hasta 50% de descuento</p>
							<a class="primary-btn cta-btn" href="#">Compra ahora</a>
							<!--agregando-->
							<div class="banner2"></div>
							<!---->
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /HOT DEAL SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Más vendidos</h3>
							{{-- <div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="#tab2">Licores</a></li>
									<li><a data-toggle="tab" href="#tab2">Lacteos</a></li>
									<li><a data-toggle="tab" href="#tab2">Arroz</a></li>
									<li><a data-toggle="tab" href="#tab2">Limpieza</a></li>
								</ul>
							</div> --}}
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab2" class="tab-pane fade in active">
									<div class="products-slick" data-nav="#slick-nav-2">

										<!-- product -->
										@foreach ($productosvendidos as $productosvendido)
											<div class="product">
												<div class="product-img">
													<img src="{{asset('image/'.$productosvendido->image)}}" alt=""><!--cambiar-->
													<div class="product-label">
														<span class="sale">-30%</span>
														<span class="new">NUEVO</span>
													</div>
												</div>
												<div class="product-body">
													<p class="product-category">{{$product->category->name}}</p>
													<h3 class="product-name"><a href="#">{{$productosvendido->name}}</a></h3>
													<h4 class="product-price">S/{{$productosvendido->price}} <del class="product-old-price">S/0.00</del></h4>
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
										@endforeach
										<!-- /product -->
										
									</div>
									<div id="slick-nav-2" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- /Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">MÁS VENDIDOS</h4>
							<div class="section-nav">
								<div id="slick-nav-3" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-3">
							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/Producto6.jpg" alt=""><!--cambiar img-->
									</div>
									<div class="product-body">
										<p class="product-category">CATEGORIA</p>
										<h3 class="product-name"><a href="/Minimarket/public/DetalleProducto">NOMBRE DEL PRODUCTO</a></h3>
										<h4 class="product-price">S/0.00 <del class="product-old-price">S/0.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/Producto7.jpg" alt=""> <!--cambiar img-->
									</div>
									<div class="product-body">
										
										<p class="product-category">CATEGORIA</p>
										<h3 class="product-name"><a href="/Minimarket/public/DetalleProducto">NOMBRE DEL PRODUCTO</a></h3>
										<h4 class="product-price">S/0.00 <del class="product-old-price">S/0.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/Producto8.jpg" alt=""><!--cambiar img-->
									</div>
									<div class="product-body">
										<p class="product-category">CATEGORIA</p>
										<h3 class="product-name"><a href="/Minimarket/public/DetalleProducto">NOMBRE DEL PRODUCTO</a></h3>
										<h4 class="product-price">S/0.00 <del class="product-old-price">S/0.00</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>

							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/Producto9.jpg" alt=""><!--cambiar img-->
									</div>
									<div class="product-body">
										<p class="product-category">CATEGORIA</p>
										<h3 class="product-name"><a href="/Minimarket/public/DetalleProducto">NOMBRE DEL PRODUCTO</a></h3>
										<h4 class="product-price">S/0.00 <del class="product-old-price">S/0.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/Producto10.jpg" alt=""><!--cambiar img-->
									</div>
									<div class="product-body">
										<p class="product-category">CATEGORIA</p>
										<h3 class="product-name"><a href="/Minimarket/public/DetalleProducto">NOMBRE DEL PRODUCTO</a></h3>
										<h4 class="product-price">S/0.00 <del class="product-old-price">S/0.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/Producto11.jpg" alt=""><!--cambiar img-->
									</div>
									<div class="product-body">
										<p class="product-category">CATEGORIA</p>
										<h3 class="product-name"><a href="/Minimarket/public/DetalleProducto">NOMBRE DEL PRODUCTO</a></h3>
										<h4 class="product-price">S/0.00 <del class="product-old-price">S/0.00</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>
						</div>
					</div>

					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">MÁS VENDIDOS</h4>
							<div class="section-nav">
								<div id="slick-nav-4" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-4">
							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/Producto12.jpg.opdownload" alt=""><!--cambiar img-->
									</div>
									<div class="product-body">
										<p class="product-category">CATEGORIA</p>
										<h3 class="product-name"><a href="/Minimarket/public/DetalleProducto">NOMBRE DEL PRODUCTO</a></h3>
										<h4 class="product-price">S/0.00 <del class="product-old-price">S/0.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/Producto13.jpg" alt=""><!--cambiar img-->
									</div>
									<div class="product-body">
										<p class="product-category">CATEGORIA</p>
										<h3 class="product-name"><a href="/Minimarket/public/DetalleProducto">NOMBRE DEL PRODUCTO</a></h3>
										<h4 class="product-price">S/0.00 <del class="product-old-price">S/0.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/Producto14.jpg" alt=""><!--cambiar img-->
									</div>
									<div class="product-body">
										<p class="product-category">CATEGORIA</p>
										<h3 class="product-name"><a href="/Minimarket/public/DetalleProducto">NOMBRE DEL PRODUCTO</a></h3>
										<h4 class="product-price">S/0.00 <del class="product-old-price">S/0.00</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>

							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/Producto15.png" alt=""><!--cambiar img-->
									</div>
									<div class="product-body">
										<p class="product-category">CATEGORIA</p>
										<h3 class="product-name"><a href="/Minimarket/public/DetalleProducto">NOMBRE DEL PRODUCTO</a></h3>
										<h4 class="product-price">S/0.00 <del class="product-old-price">S/0.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/Producto16.jpg" alt=""><!--cambiar img-->
									</div>
									<div class="product-body">
										<p class="product-category">CATEGORIA</p>
										<h3 class="product-name"><a href="/Minimarket/public/DetalleProducto">NOMBRE DEL PRODUCTO</a></h3>
										<h4 class="product-price">S/0.00 <del class="product-old-price">S/0.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/Producto17.jpg" alt=""><!--cambiar img-->
									</div>
									<div class="product-body">
										<p class="product-category">CATEGORIA</p>
										<h3 class="product-name"><a href="/Minimarket/public/DetalleProducto">NOMBRE DEL PRODUCTO</a></h3>
										<h4 class="product-price">S/0.00 <del class="product-old-price">S/0.00</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>
						</div>
					</div>

					<div class="clearfix visible-sm visible-xs"></div>

					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">MÁS VENDIDOS</h4>
							<div class="section-nav">
								<div id="slick-nav-5" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-5">
							{{-- <div>
								@foreach ($productosvendidos->slice(0,3) as $productosvendido)
									<!-- product widget -->
									<div class="product-widget">
										<div class="product-img">
											<img src="./img/Producto18.jpg" alt=""><!--cambiar img-->
										</div>
										<div class="product-body">
											<p class="product-category">CATEGORIA</p>
											<h3 class="product-name"><a href="{{route('detalle',$productosvendido->id)}}">{{$productosvendido->name}}</a></h3>
											<h4 class="product-price">S/{{$productosvendido->price}} <del class="product-old-price">S/0.00</del></h4>
										</div>
									</div>
								@endforeach
								<!-- /product widget -->

							</div> --}}
						</div>
					</div>

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
@endsection