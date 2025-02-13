<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UserController extends Controller
{
    //

    public function index()
    {
        $result = User::with('profile')->get();

        dd($result);
        // return $result;
    }
}
