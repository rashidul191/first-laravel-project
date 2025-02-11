<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductCart;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProductCartSeeder extends Seeder
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



        for ($i = 0; $i < 20; $i++) {
           ProductCart::create([
                'user_email' => $faker->randomElement($userEmails), // Use existing emails
                'product_id' => $faker->randomElement($productIds),
                'color' => $faker->colorName,
                'size' => $faker->randomElement(['S', 'M', 'L', 'XL']),
            ]);
        }
    }
}
