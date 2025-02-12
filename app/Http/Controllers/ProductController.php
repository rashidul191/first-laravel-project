<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ProductController extends Controller
{
    //

    public function index()
    {
        // return Product::all();
        // return Product::count('price');
        // return Product::avg('price');
        // return Product::sum('price');
        // return Product::max('price');
        return Product::min('price');
    }

    public function productIncrement($id)
    {
        // return Product::where('id', $id)->increment('price', 50);
        return Product::where('id', $id)->decrement('price', 50);

    }
}
