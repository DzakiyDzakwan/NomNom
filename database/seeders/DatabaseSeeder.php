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
        $this->call(SubKategoriSeeder::class);
        $this->call(KategoriSeeder::class);
        $this->call(BahanSeeder::class);
        $this->call(PeralatanSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ResepSeeder::class);
        $this->call(ResepKategoriSeeder::class);
        $this->call(ResepBahanSeeder::class);
        $this->call(ResepPeralatanSeeder::class);
        /* $this->call(TahapanSeeder::class); */
    }
}
