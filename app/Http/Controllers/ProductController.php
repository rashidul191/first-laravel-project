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
        // return Product::min('price');

        // return Product::select('title', 'price')->get();
        // return Product::select('title')->distinct()->get();
        // return Product::where('price', '=', '390')->get();

        // $result = Product::orderBy('id', 'desc')->get();
        // $result = Product::inRandomOrder()->get();
        // $result = Product::latest()->get();
        // $result = Product::oldest()->get();
        // $result = Product::groupBy('price')->get();
        // $result = Product::groupBy('price')->having('price', '>', 1000)->get();
        // $result = Product::skip(10)->take(10)->get();

        /* Pagination */
        // $result = Product::simplePaginate(3);
        $result = Product::paginate(
            $perPage = 10,
            $column = ['*'],
            $pageName = "ItemNumber"
        );


        return $result;
    }

    public function productIncrement($id)
    {
        // return Product::where('id', $id)->increment('price', 50);
        return Product::where('id', $id)->decrement('price', 50);
    }
}
