<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class DemoController extends Controller
{
    public function demoController()
    {

        // $users = DB::table("users")->first();
        // $users = DB::table("users")->find(2);
        // $users = DB::table("users")->pluck('email');

        // $users = DB::table('users')-> select('email', 'otp')-> get();
        // $users = DB::table('users')->get(['email']);

        // Join
        // Inner Join
        $users = DB::table('products')->join('categories', 'products.category_id', '=', 'categories.id')->get();




        // return view('Home', compact('users'));

        return $users;
    }
}
