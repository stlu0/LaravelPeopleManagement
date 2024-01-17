<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;


class PeopleDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
        
        $faker = Faker::create();
        $records = 200;

        for ($i = 0; $i < $records; $i++) {
            DB::table("people_data")->insert([
                "name"=> $faker->firstName,
                "surname"=> $faker->lastName,
                "age"=> $faker->numberBetween(20, 60),
                "phone_number"=> $faker->phoneNumber,
                "email"=> $faker->safeEmail,
                "street"=> $faker->streetAddress,
                "city"=> $faker->city,
                "country"=> $faker->country,
                "created_at"=> now(),
                "updated_at"=> now()
            ]);
        }

    }
}
