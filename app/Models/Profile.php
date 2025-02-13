<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    // One To One
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // One To Many
    public function productReview()
    {
        return $this->hasMany(ProductReview::class);
    }

    // Many To Many
    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_reviews');
    }
}
