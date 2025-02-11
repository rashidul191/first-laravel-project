<?php

namespace Database\Seeders;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Get all user emails from the users table
        $userEmails = User::pluck('email')->toArray();

        // Number of records you want to create
        $numberOfRecords = 20;

        for ($i = 0; $i < $numberOfRecords; $i++) {
            Profile::create([
                'firstName' => $faker->firstName,
                'lastName' => $faker->lastName,
                'mobile' => $faker->phoneNumber,
                'city' => $faker->city,
                'shippingAddress' => $faker->address,
                'profileEmail' => $faker->unique()->randomElement($userEmails), // Unique email from users table
            ]);
        }
    }
}
