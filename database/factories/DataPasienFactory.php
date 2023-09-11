<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use Faker\Factory as Faker;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DataPasien>
 */
class DataPasienFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = Faker::create('id_ID');
        $timestamp = time();
        $username = date('ym', $timestamp) . $faker->unique()->randomNumber(3) . substr($faker->name(), 0, 4);
        return [
            'username' => $username,
            'nama' => $faker->name(),
            'kelamin' => $faker->randomElement(['L', 'P']), // Assuming 'L' represents male and 'P' represents female
            'umur' => $faker->numberBetween(1, 70),
            'alamat' => $faker->address(),
            'telepon' => $faker->phoneNumber(),
        ];
    }
}
