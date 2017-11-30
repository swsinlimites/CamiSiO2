<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use App\Estampa;

class DesignerController extends Controller
{
    public function index()
    {
    	// $products = Product::all();
    	//dd($products);
        $estampas = Estampa::all();
    	return view('store.design', compact('product', 'estampas'));
    }

    public function show($slug)
    {
        //busca en la base de datos el slug del producto y devuelve el producto
    	$product = Product::where('slug', $slug)->first();
        $categoria = Category::where('id', $product->category_id)->first();
        $estampas = Estampa::all();
    	//dd($product);
        //first es para devolver el primero que encuentre
    	return view('store.design', compact('product', 'categoria', 'estampas'));
    }
}
