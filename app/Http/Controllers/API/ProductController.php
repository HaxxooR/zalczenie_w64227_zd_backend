<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Product;
use JetBrains\PhpStorm\NoReturn;

class ProductController extends Controller
{
   public function getAll()
    {
        $products = \App\Models\Product::all();
        return response()->json($products);
    }
    public function getOne($id)
    {
        $product = \App\Models\Product::find($id);
        return response()->json($product);
    }
}
