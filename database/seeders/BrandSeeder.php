<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Number of records you want to create

        for ($i = 0; $i < 10; $i++) {
            Brand::create([
                'brandName' => $faker->company,
                'brandImg' => $faker->imageUrl(300, 300), // Generates a random image URL
            ]);
        }
    }
}
