<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = Factory::create('nl_NL');

        return [
            'rol_id' => rand(1, 3),
            'voornaam' => $faker->name,
            'adres' => $faker->address,
            'postcode' => $faker->postcode,
            'woonplaats' => $faker->city,
            'telefoon' => $faker->phoneNumber,
            'email' => $faker->email,
            'password' => static::$password ??= Hash::make('test'),

        ];
    }
}
