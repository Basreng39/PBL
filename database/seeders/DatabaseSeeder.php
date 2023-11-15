<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Kamar;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'status' => 'admin',
            'password' => '123',
            'email' => 'admin@gmail.com',
        ]);

        Kamar::factory(100)->create([
            "nama_kamar" => "Kamar",
            "jenis" => "Singel",
            "status" => "Kosong",
            "keterangan" => "Pre Order",
            "harga" => 10000,
        ]);
    }
}
