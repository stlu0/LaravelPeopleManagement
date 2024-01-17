<?php

namespace Database\Factories;

use App\Models\People;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\People>
 */
class PeopleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "name" => $this->faker->firstName,
            "surname" => $this->faker->lastName,
            "age" => $this->faker->numberBetween(20, 60),
            "phone_number" => $this->faker->phoneNumber,
            "email" => $this->faker->safeEmail,
            "street" => $this->faker->streetAddress,
            "city" => $this->faker->city,
            "country" => $this->faker->country,
        ];
    }
}
