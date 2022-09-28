@extends('PrincipalPage.Principal')
@section('content')
    <!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">Verificar</h3>
						<ul class="breadcrumb-tree">
							<li><a href="index.html">Home</a></li>
							<li class="active">Verificar</li>
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

					<div class="col-md-7">
						<!-- Billing Details -->
						<div class="billing-details">
							<div class="section-title">
								<h3 class="title">Dirección de Envio</h3>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="first-name" placeholder="Primer nombre">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="last-name" placeholder="Apellido">
							</div>
							<div class="form-group">
								<input class="input" type="email" name="email" placeholder="Email">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="address" placeholder="Dirección">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="city" placeholder="Ciudad">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="zip-code"placeholder="Código postal">
							</div>
							<div class="form-group">
								<input class="input" type="tel" name="tel" placeholder="Telefono">
							</div>
						</div>
						<!-- /Billing Details -->

						<!-- Shiping Details -->
						<div class="shiping-details">
							<div class="section-title">
								<h3 class="title">Otra dirección de envío</h3>
							</div>
							<div class="input-checkbox">
								<input type="checkbox" id="shiping-address">
								<label for="shiping-address">
									<span></span>
									¿Enviar a una dirección diferente?
								</label>
								<div class="caption">
									<div class="form-group">
										<input class="input" type="text" name="first-name" placeholder="Primer nombre">
									</div>
									<div class="form-group">
										<input class="input" type="text" name="last-name" placeholder="Apellido">
									</div>
									<div class="form-group">
										<input class="input" type="email" name="email" placeholder="Email">
									</div>
									<div class="form-group">
										<input class="input" type="text" name="address" placeholder="Dirección">
									</div>
									<div class="form-group">
										<input class="input" type="text" name="city" placeholder="Ciudad">
									</div>
									<div class="form-group">
										<input class="input" type="text" name="zip-code"placeholder="Código postal">
									</div>
									<div class="form-group">
										<input class="input" type="tel" name="tel" placeholder="Telefono">
									</div>
								</div>
							</div>
						</div>
						<!-- /Shiping Details -->

						<!-- Order notes -->
						<div class="order-notes">
							<textarea class="input" placeholder="notas de pedido opcional"></textarea>
						</div>
						<!-- /Order notes -->
					</div>

					<!-- Order Details -->
					<div class="col-md-5 order-details">
						<div class="section-title text-center">
							<h3 class="title">Su pedido</h3>
						</div>
						<div class="order-summary">
							<div class="order-col">
								<div><strong>PRODUCTO</strong></div>
								<div><strong>TOTAL</strong></div>
							</div>
							<!--ESTO SE CANBIARA PARA QUE TRABAJE CON LA BASE DE DATOS-->
							<div class="order-products">
								<div class="order-col">
									<div>{{1x El nombre del producto va aquí}}</div>
									<div>S/0.00</div>
								</div>
								<div class="order-col">
									<div>2x El nombre del producto va aquí</div>
									<div>S/0.00</div>
								</div>
							</div>
							<div class="order-col">
								<div>Envío</div>
								<div><strong>GRATIS</strong></div>
							</div>
							<div class="order-col">
								<div><strong>TOTAL</strong></div>
								<div><strong class="order-total">S/0.00</strong></div>
							</div>
						</div>
						<div class="payment-method">
							<!--
							<div class="input-radio">
								<input type="radio" name="payment" id="payment-1">
								<label for="payment-1">
									<span></span>
									Transferencia bancaria directa
								</label>
								<div class="caption">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>-->
							<div class="input-radio">
								<input type="radio" name="payment" id="payment-2">
								<label for="payment-2">
									<span></span>
									Pago con cheque
								</label>
								<div class="caption">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
							<div class="input-radio">
								<input type="radio" name="payment" id="payment-3">
								<label for="payment-3">
									<span></span>
									Paypal
								</label>
								<div class="caption">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
							<!--AGREGADO POR MI-->
							<div class="input-radio">
								<input type="radio" name="payment" id="payment-4">
								<label for="payment-4">
									<span></span>
									BCP
								</label>
								<div class="caption">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>

							<div class="input-radio">
								<input type="radio" name="payment" id="payment-5">
								<label for="payment-5">
									<span></span>
									Interback
								</label>
								<div class="caption">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
						</div>
						<div class="input-checkbox">
							<input type="checkbox" id="terms">
							<label for="terms">
								<span></span>
								He leído y acepto los <a href="#">términos y condiciones.</a>
							</label>
						</div>
						<a href="#" class="primary-btn order-submit" >Realizar pedido</a>
					</div>
					<!-- /Order Details -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
@endsection