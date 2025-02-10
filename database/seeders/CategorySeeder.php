<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Number of records you want to create


        for ($i = 0; $i < 10; $i++) {
            Category::create([
                'categoryName' => $faker->company,
                'categoryImg' => $faker->imageUrl(300, 300), // Generates a random image URL
            ]);
        }
    }
}
