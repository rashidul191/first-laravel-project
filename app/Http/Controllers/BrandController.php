<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BrandController extends Controller
{
    //
    public function index()
    {
        $result = Brand::all();
        return $result;
    }

    public function show($id)
    {
        return Brand::find($id);
    }

    public function destroy($id)
    {
        return Brand::find($id)->delete();
    }
}
