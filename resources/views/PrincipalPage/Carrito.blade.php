<link type="text/css" rel="stylesheet" href="{{ asset('css/StyleCarrito.css') }}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
@extends('PrincipalPage.Principal')
@section('content')
    <!--#######################-->
        <!--aqui va los datos del carrito-->
        

        <section class="shopping-cart">
            <div class="container">
                <h1 class="text-center">CARRITO</h1>
                <hr>
                <div class="row">
                    <div class="col-6">
                        <div class="shopping-cart-header">
                            <h6>Producto</h6>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="shopping-cart-header">
                            <h6 class="text-truncate">Precio</h6>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="shopping-cart-header">
                            <h6>Cantidad</h6>
                        </div>
                    </div>
                </div>
                <!-- ? START SHOPPING CART ITEMS -->
                <div class="shopping-cart-items shoppingCartItemsContainer">
                    <!-- MOCKUP EXAMPLE (DELETE) -->
                    <div class="row shoppingCartItem">
                        <div class="col-6">
                            <div class="shopping-cart-item d-flex align-items-center h-100 border-bottom pb-2 pt-3">
                                <img src='./img/ACEITE-COCINERO.png' class="shopping-cart-image">
                                <h6 class="shopping-cart-item-title shoppingCartItemTitle text-truncate ml-3 mb-0">Aceite cosineeo
                                </h6>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="shopping-cart-price d-flex align-items-center h-100 border-bottom pb-2 pt-3">
                                <p class="item-price mb-0 shoppingCartItemPrice">S/6.99</p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div
                                class="shopping-cart-quantity d-flex justify-content-between align-items-center h-100 border-bottom pb-2 pt-3">
                                <input class="shopping-cart-quantity-input shoppingCartItemQuantity" type="number"
                                    value="1">
                                <button class="btn btn-danger buttonDelete" type="button">X</button>
                            </div>
                        </div>
                    </div>
					<div class="row shoppingCartItem">
                        <div class="col-6">
                            <div class="shopping-cart-item d-flex align-items-center h-100 border-bottom pb-2 pt-3">
                                <img src='./img/Producto14.jpg' class="shopping-cart-image">
                                <h6 class="shopping-cart-item-title shoppingCartItemTitle text-truncate ml-3 mb-0">Mantequilla manti
                                </h6>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="shopping-cart-price d-flex align-items-center h-100 border-bottom pb-2 pt-3">
                                <p class="item-price mb-0 shoppingCartItemPrice">S/5.00</p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div
                                class="shopping-cart-quantity d-flex justify-content-between align-items-center h-100 border-bottom pb-2 pt-3">
                                <input class="shopping-cart-quantity-input shoppingCartItemQuantity" type="number"
                                    value="1">
                                <button class="btn btn-danger buttonDelete" type="button">X</button>
                            </div>
                        </div>
                    </div>
                    <!-- END MOCKUP EXAMPLE -->
                </div>
                <!-- ? END SHOPPING CART ITEMS -->
    
                <!-- START TOTAL -->
                <div class="row">
                    <div class="col-12">
                        <div class="shopping-cart-total d-flex align-items-center">
                            <p class="mb-0">Total</p>
                            <p class="ml-4 mb-0 shoppingCartTotal">S/0.00</p>
                            <div class="toast ml-auto bg-info" role="alert" aria-live="assertive" aria-atomic="true"
                                data-delay="2000">
                                <div class="toast-header">
                                    <span>✅</span>
                                    <strong class="mr-auto ml-1 text-secondary">Elemento en el carrito</strong>
                                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="toast-body text-white">
                                    Se aumentó correctamente la cantidad
                                </div>
                            </div>
							<a class="btn btn-success ml-auto comprarButton" type="button" href="/Delivery">Comprar</a>
                            
                        </div>
                    </div>
                </div>
    
                <!-- END TOTAL -->
    
                <!-- START MODAL COMPRA -->
                <div class="modal fade" id="comprarModal" tabindex="-1" aria-labelledby="comprarModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="comprarModalLabel">Gracias por su compra</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Pronto recibirá su pedido</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END MODAL COMPRA -->
            </div>
        </section>
        <!--#########################################################-->
		
@endsection
