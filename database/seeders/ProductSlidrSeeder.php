<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductSlider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProductSlidrSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Get all product IDs from the products table
        $productIds = Product::pluck('id')->toArray();

        // Number of records you want to create
        $numberOfRecords = 10;

        for ($i = 0; $i < $numberOfRecords; $i++) {
            // Use a unique product_id
            $productId = $faker->unique()->randomElement($productIds);

            ProductSlider::create([
                'title' => $faker->sentence(3), // Random title with 3 words
                'short_des' => $faker->paragraph(2), // Random short description with 2 sentences
                'image' => $faker->imageUrl(640, 480, 'technics'), // Random image URL
                'product_id' => $productId, // Unique product_id from the products table
            ]);
        }
    }
}
