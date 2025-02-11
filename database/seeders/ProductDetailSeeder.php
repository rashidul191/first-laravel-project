<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProductDetailSeeder extends Seeder
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
        $numberOfRecords = 20;

        for ($i = 0; $i < $numberOfRecords; $i++) {
            // Use a unique product_id
            $productId = $faker->unique()->randomElement($productIds);

            ProductDetail::create([
                'img1' => $faker->imageUrl(640, 480, 'fashion'), // Random image URL
                'img2' => $faker->imageUrl(640, 480, 'fashion'),
                'img3' => $faker->imageUrl(640, 480, 'fashion'),
                'img4' => $faker->imageUrl(640, 480, 'fashion'),
                'product_des' => $faker->paragraph(3), // Random description with 3 sentences
                'color' => $faker->colorName,
                'size' => $faker->randomElement(['S', 'M', 'L', 'XL']),
                'product_id' => $productId, // Unique product_id from the products table
            ]);
        }
    }
}
