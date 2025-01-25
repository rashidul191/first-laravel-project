<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    function demoAction(Request $request)
    {
        // dd($request);

        $name = $request->header('name');
        $age = $request->header('age');

        return $name . "," . $age;
    }
}
