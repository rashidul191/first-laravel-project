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

    public function update(Request $request)
    {
        return Brand::where('id', $request->id)->update($request->input());
    }

    public function updateOrCreate(Request $request)
    {
        return Brand::updateOrCreate(['id' => $request->id], $request->input());
    }


    public function destroy(Request $request)
    {
        return Brand::where('id', $request->id)->delete();
    }
}
