<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $faker = Faker::create();

        // Insert 10 random users using Eloquent (Model)
        for ($i = 0; $i < 10; $i++) {
            User::create([
                'email' => $faker->unique()->safeEmail,  // Random unique email
                'otp' => $faker->numberBetween(1000, 9999),  // Random OTP between 100000 and 999999
            ]);
        }
    }
}
