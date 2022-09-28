<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>MINIMARKET</title>

		<!--link -->

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<link type="text/css" rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="{{ asset('css/slick.css') }}" >
		<link type="text/css" rel="stylesheet" href="{{ asset('css/slick-theme.css') }}"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="{{ asset('css/nouislider.min.css') }}"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="{{ asset('css/style.css') }}"/>


    </head>
	<body>
		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i>+51-984584655</a></li> <!--numero de contacto-->
						<li><a href="#"><i class="fa fa-envelope-o"></i> Minimark@MANOLITO.gob.pe</a></li> <!--correo de la emprez}sa-->
						<li><a href="#"><i class="fa fa-map-marker"></i> 0015 Las Arenas</a></li> <!--ubicacion-->
					</ul>
					<ul class="header-links pull-right">
						<li><a href="#"><i class="fa fa-money"></i> PEN</a></li> <!--monedas-->
						<li><a href={{route('login')}} target="_blank"><i class="fa fa-user-o"></i> MI CUENTA</a></li> <!--mi cueeta-->
					</ul>
				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="{{route('inicio')}}" class="logo">
									<img src="{{asset('img/logo3.png')}}" alt=""><!--CAMBIAR LOGO-->
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form>
									{{-- <select class="input-select">
										<option value="0" >Categorias</option><!--caregorias-->
										<option value="2">Abarrotes</option>
										<option value="2">Para el hogar</option>
									</select> --}}
									<input class="input" placeholder="Busca aquí">
									<button class="search-btn">Buscar</button> <!--boton buscar-->
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								<!-- Wishlist -->
								<div>
									<a href="#">
										<i class="fa fa-heart-o"></i>
										<span>Tu lista de deseos</span>
										<div class="qty">0</div><!--cantidad de elemntos de la lista-->
									</a>
								</div>
								<!-- /Wishlist -->

								<!-- Cart -->
								<div ><!--aqui va el desplegable del carrito-->
									<a href="/Carrito">
										<i class="fa fa-shopping-cart"></i>
										<span>Tu carrito</span>
										<div class="qty">1</div><!--cantidad de cosas que hay en el carrito-->
									</a>
								</div>
								<!-- /Cart -->

								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->

		<!-- NAVIGATION -->
		<nav class="navbar navbar-expand-lg navbar-light bg-light" id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li class="nav-item"><a class="nav-link active" href="{{route('inicio')}}">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="#">Las mejores ofertas</a></li>
						<li class="nav-item"><a class="nav-link" href="{{route('categoria')}}">Categorias</a></li>
						<li class="nav-item"><a class="nav-link" href="#">Licores</a></li>
						<li class="nav-item"><a class="nav-link" href="#">Concervas</a></li>
						<li class="nav-item"><a class="nav-link" href="#">Lacteos</a></li>
						<li class="nav-item"><a class="nav-link" href="#">Accesorios</a></li>
						<li class="nav-item"><a class="nav-link" href="#">Limpieza</a></li>
						<li class="nav-item"><a class="nav-link" href="#">Confiteria</a></li>
						<li class="nav-item"><a class="nav-link" href="#">Dulceria</a></li>
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->

        <!--PARA EL CONTENIDO-->
        @yield('content')


        <!-- NEWSLETTER -->
		<div id="newsletter" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="newsletter">
							<p>Regístrese para el <strong>BOLETIN INFORMATIVO</strong></p>
							<form>
								<input class="input" type="email" placeholder="Ingresa tu Email">
								<button class="newsletter-btn"><i class="fa fa-envelope"></i> Suscribir</button>
							</form>
							<ul class="newsletter-follow">
								<li>
									<a href="#"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-instagram"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-pinterest"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /NEWSLETTER -->

		<!-- FOOTER -->
		<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Sobre nosotros</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</p>
								<ul class="footer-links">
									<li><a href="#"><i class="fa fa-map-marker"></i>0015 Las Arenas</a></li>
									<li><a href="#"><i class="fa fa-phone"></i>+51-984584655</a></li>
									<li><a href="#"><i class="fa fa-envelope-o"></i>Minimark@MANOLITO.gob.pe</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Categorias</h3>
								<ul class="footer-links">
									<li><a href="#">Las mejores ofertas</a></li>
									<li><a href="#">Abarrotes</a></li>
									<li><a href="#">Articulos de limpieza</a></li>
									<li><a href="#">Articulos para el Hogar</a></li>
									<li><a href="#">Articulos para el seo Personal</a></li>
								</ul>
							</div>
						</div>

						<div class="clearfix visible-xs"></div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Informacion</h3>
								<ul class="footer-links">
									<li><a href="#">Sobre nosotros</a></li>
									<li><a href="#">Contacta con nosotros</a></li>
									<li><a href="#">Política de privacidad</a></li>
									<li><a href="#">Pedidos y Devoluciones</a></li>
									<li><a href="#">Términos y condiciones</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Servicios</h3>
								<ul class="footer-links">
									<li><a href="#">Mi cuenta</a></li>
									<li><a href="/Carrito">Ver carrito</a></li>
									<li><a href="#">Lista de deseos</a></li>
									<li><a href="#">Seguimiento de mi pedido</a></li>
									<li><a href="#">Ayuda</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->

			<!-- bottom footer -->
			<div id="bottom-footer" class="section">
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12 text-center">
							<ul class="footer-payments">
								<li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
								<li><a href="#"><i class="fa fa-credit-card"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
							</ul>
							<span class="copyright">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los derechos reservados | Este trabajo esta hecho  <i class="fa fa-heart-o" aria-hidden="true"></i> por el equipo <a href="#" >DINAMITA</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</span>
						</div>
					</div>
						<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /bottom footer -->
		</footer>
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>

		<script src="{{ asset('js/jquery.min.js') }}" ></script>
		<script src="{{ asset('js/bootstrap.min.js') }}" ></script>
		<script src="{{ asset('js/slick.min.js') }}" ></script>
		<script src="{{ asset('js/nouislider.min.js') }}" ></script>
		<script src="{{ asset('js/jquery.zoom.min.js') }}" ></script>
		<script src="{{ asset('js/main.js') }}" ></script>
		<script src="https://code.jquery.com/jquery-3.6.0.js" 
		integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" 
		crossorigin="anonymous"></script>

		<!-- filter -->
		<script type="text/javascript">
			$(document).ready(function(){
				$('.list').click(function(){
					const value = $(this).attr('data-filter');
					if (value == 'all'){
						$('.Producto').show('1000');
					}
					else{
						$('.Producto').not('.'+value).hide('1000');
						$('.Producto').filter('.'+value).show('1000');
					}
				})

			})
		</script>
		<!-- /filter -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
		<!--link para el scrip del carrito
		<script src="./js/CarritoPrueba.js"></script>-->
	</body>
</html>
