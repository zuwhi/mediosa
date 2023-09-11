<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            PasienSeeder::class,
            PenyakitSeeder::class,
            RiwayatSeeder::class
        ]);

        \App\Models\User::create([
            'nama' => 'SUPER ADMIN',
            'email' => 'admin@mediosa.com',
            'password' => '1',
            'alamat' => '0',
            'telepon' => '0',
            'role' => 'admin',
        ]);
    }
}
