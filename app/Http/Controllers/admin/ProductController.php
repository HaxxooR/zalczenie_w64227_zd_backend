<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use JetBrains\PhpStorm\NoReturn;

class ProductController extends Controller
{
   public function index()
    {
        $products = Product::all();
        return view('products.index', ['products'=>$products]);
    }
    public function edit($id=null)
    {
        $product = Product::with([])->findOrNew($id);

        if (request()->isMethod('post')) {

            $post = request()->all();




        if ($id) {
            $product = Product::findOrFail($id);
            $product->fill($post);
            $product->save();

        } else {
            $product = new Product();
            $product->fill($post);
            $product->save();

        }
        }
        return view('products.edit', ['product'=>$product]);
    }
}
