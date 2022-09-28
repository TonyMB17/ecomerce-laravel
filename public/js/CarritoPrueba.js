const boton_añadir_carrito = document.querySelectorAll('.add-to-cart-btn')
//variable para el div despegable del carrito
const shoppingCartItemsContainer = document.querySelector(
    '.shoppingCartItemsContainer'
);

boton_añadir_carrito.forEach(boton_carrito => {
    boton_carrito.addEventListener('click', boton_carrito_Clicked);
});
//creando la funcion para tener elementos de los productos
function boton_carrito_Clicked(event){
    const boton = event.target;
    const item = boton.closest('.product'); //aqui coloco todos los elementos del div contenedor de elementos del producto

    const itemTitulo= item.querySelector('.product-name').textContent;
    const itemPrecio = item.querySelector('.producto').textContent;
    const itemIMG = item.querySelector('img').src;
    //console.log('boton_carrito_Clicked -> itemTitulo',itemTitulo)
    console.log('boton_carrito_Clicked -> itemPrecio',itemTitulo, itemPrecio,itemIMG);

    //funcion para agregar al carrito de compras
    //agregar_al_carrito_compras(itemTitulo,itemPrecio,itemIMG);
}

//funcion para agregar al carrito de compras
function agregar_al_carrito_compras(itemTitulo,itemPrecio,itemIMG){
    const fila_carrito_compras= document.createElement('div');
    const shoppingCartContent = `
    <div class="row shoppingCartItem">
        <div class="col-6">
            <div class="shopping-cart-item d-flex align-items-center h-100 border-bottom pb-2 pt-3">
                <img src='${itemIMG}' class="shopping-cart-image">
                <h6 class="shopping-cart-item-title shoppingCartItemTitle text-truncate ml-3 mb-0">${itemTitulo}</h6>
            </div>
        </div>
        <div class="col-2">
            <div class="shopping-cart-price d-flex align-items-center h-100 border-bottom pb-2 pt-3">
                <p class="item-price mb-0 shoppingCartItemPrice">${itemPrecio}</p>
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
    </div>`;
    
    fila_carrito_compras.innerHTML = shoppingCartContent;
    shoppingCartItemsContainer.append(fila_carrito_compras);

    //console.log('boton_carrito_Clicked -> itemPrecio',itemTitulo, itemPrecio,itemIMG);
}





