<?php

namespace Database\Seeders;

use App\Models\Bahan;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BahanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Bahan::create([
            'id' => 'B001',
            'nama_bahan' => 'Ayam Potong',
            'harga' => '40000 / kilogram',
            'image' => '1684496584.jpg'
        ]);

        Bahan::create([
            'id' => 'B002',
            'nama_bahan' => 'Daging Sapi',
            'harga' => '80000 / ons',
            'image' => '1684496585.jpg'
        ]);

        Bahan::create([
            'id' => 'B003',
            'nama_bahan' => 'Telur',
            'harga' => '1500 / butir',
            'image' => '1684496586.jpg'
        ]);

        Bahan::create([
            'id' => 'B004',
            'nama_bahan' => 'Kaki Sapi',
            'harga' => '50000 / ons',
            'image' => '1684496587.webp'
        ]);

        Bahan::create([
            'id' => 'B005',
            'nama_bahan' => 'Mangga',
            'harga' => '30000 / kg',
            'image' => '1684496588.jpg'
        ]);

        Bahan::create([
            'id' => 'B006',
            'nama_bahan' => 'Kelapa',
            'harga' => '10000 / buah',
            'image' => '1684496589.webp'
        ]);

        Bahan::create([
            'id' => 'B007',
            'nama_bahan' => 'Stroberi',
            'harga' => '25000 / ons',
            'image' => '1684496590.jpg'
        ]);
    }
}
