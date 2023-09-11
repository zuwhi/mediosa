<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DataPasien;
class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DataPasien::factory(100)->create(); 
    }
}
