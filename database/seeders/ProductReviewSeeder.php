<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductReview;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProductReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Get all user emails from the users table
        $userEmails = User::pluck('email')->toArray();

        // Get all product IDs from the products table
        $productIds = Product::pluck('id')->toArray();

        // Number of records you want to create
        $numberOfRecords = 20;

        for ($i = 0; $i < $numberOfRecords; $i++) {
            ProductReview::create([
                'description' => $faker->paragraph(5), // Random description with 5 sentences
                'user_email' => $faker->randomElement($userEmails), // Random email from users table
                'product_id' => $faker->randomElement($productIds), // Random product ID from products table
            ]);
        }
    }
}
