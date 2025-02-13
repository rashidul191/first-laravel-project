<?php

namespace App\Http\Controllers;

use App\Models\ProductReview;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ProductReviewController extends Controller
{
    //

    public function reviewWithProfile(){
        $result = ProductReview::with('reviewProfile')->get();

        return $result;
    }
}
