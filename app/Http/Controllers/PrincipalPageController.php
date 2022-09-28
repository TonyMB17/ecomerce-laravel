<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuBarController extends Controller
{
    //para llamar al MenuBaar
    public function MenuBar() {
        return view('MenuBar');
    }

    //prueba
    public function Hola() {
        return 'hola';
    }

    //para la vista home
    public function Home(){
        return view('Home');
    }

    //para la vista Producto
    public function Producto(){
        return view('Producto');
    }

    //para la vista Servicios
    public function Servicios(){
        return view('Servicios');
    }

    //para la vista Contactanos
    public function Contactanos(){
        return view('Contactanos');
    }

    //para la vista del carrito
    public function Carrito(){
        return view('Carrito');
    }



}