<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ProfileController extends Controller
{
    //

    public function index()

    {
        $result = Profile::with('user')->get();

        return $result;
    }

    public function profileWithReview()
    {
        $result = Profile::with('productReview')->get();
        return $result;
    }

    public function profileWithProduct()
    {
        $result = Profile::with('products')->get();
        return $result;
    }
}
