<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PrincipalController extends Controller
{
    
    public function index(){
        $productosvendidos=DB::select('SELECT p.code as code, c.name as category,
        sum(dv.quantity) as quantity, p.name as name , p.id as id , p.stock as stock , p.sell_price as price , p.image from products p 
        inner join sale_details dv on p.id=dv.product_id 
        inner join sales v on dv.sale_id=v.id
        inner join categories c on p.category_id=c.id
        where v.status="VALID" 
        and year(v.sale_date)=year(curdate()) 
        group by p.code ,p.name, p.id , p.stock order by sum(dv.quantity) desc limit 10');

        $products = Product::orderBy('code','DESC')->get();
        return view('PrincipalPage.Home', compact('products','productosvendidos'));
    } 
    
    public function Categorias(){

        $categories =DB::select
        (
            'SELECT 
            c.id, 
            c.name as name, 
            c.description as descripcion, 
            count(p.id) as cantCategory
            from categories c inner join products p on c.id=p.category_id
            group by c.name'
        );

        $products = Product::get();

        $productosvendidos=DB::select('SELECT p.code as code, c.name as category,
        sum(dv.quantity) as quantity, p.name as name , p.id as id , p.stock as stock , p.sell_price as price , p.image from products p 
        inner join sale_details dv on p.id=dv.product_id 
        inner join sales v on dv.sale_id=v.id
        inner join categories c on p.category_id=c.id
        where v.status="VALID" 
        and year(v.sale_date)=year(curdate()) 
        group by p.code ,p.name, p.id , p.stock order by sum(dv.quantity) desc limit 10');

        return view('PrincipalPage.Categorias',compact('categories','products','productosvendidos'));
    } 
    
    public function DetalleProducto($id){

        $product = Product::findOrFail($id);
        
        // $productCat = Product::find($product->category->name);
        $productCat = DB::select('SELECT c.name as category, p.name as name , p.id as id , p.sell_price as price , p.image as image 
        FROM products p
        inner join categories c on c.id=p.category_id
        WHERE category_id= ?',[$product->category_id]);
        
        return view('PrincipalPage.DetalleProducto',compact('product','productCat'));
    } 
    
    public function Carrito(){
        return view('PrincipalPage.Carrito');
    } 
    
    public function Delivery($id){
        
        $product = Product::findOrFail($id);
        return view('PrincipalPage.Delivery');
    } 
    
}
