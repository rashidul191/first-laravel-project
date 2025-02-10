<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create();


        // Define possible values for the 'remark' field
        $remarks = ['popular', 'new', 'top', 'special', 'trending', 'today_deal'];

        for ($i = 0; $i < 20; $i++) {
            $price = $faker->randomFloat(2, 10, 1000); // Random price between 10 and 1000
            $discount = $faker->boolean(30); // 30% chance of having a discount
            $discountPrice = $discount ? $faker->randomFloat(2, 5, $price - 1) : null; // Discount price less than the original price

            Product::create([

                'title' => $faker->sentence(3), // Random title
                'short_des' => $faker->paragraph(2), // Random description
                'price' => $faker->randomFloat(2, 1, 1000), // Random price
                'discount' => $faker->boolean, // Random true/false
                'discount_price' => $faker->randomFloat(2, 1, 1000), // Random discount price
                'image' => $faker->imageUrl(400, 400), // Random image URL
                'stock' => $faker->boolean, // Random true/false
                'star' => $faker->randomFloat(1, 1, 5), // Random star rating
                'remark' => $faker->randomElement($remarks), // Random remark
                'category_id' => $faker->numberBetween(1, 10), // Random category ID
                'brand_id' => $faker->numberBetween(1, 10), // Random brand ID
            ]);
        }
    }
}
