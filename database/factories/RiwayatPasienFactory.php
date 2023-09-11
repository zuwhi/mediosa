<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use Faker\Factory as Faker;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RiwayatPasien>
 */
class RiwayatPasienFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = Faker::create('id_ID');
        $created_at = $faker->dateTimeBetween('-1 year', 'now');
        return [
            'data_pasien_id' => $faker->numberBetween(1,100),
            'data_penyakit_id' => $faker->numberBetween(1,64),
            'created_at' => $created_at,
            'updated_at' => $created_at,
        ];
    }
}
