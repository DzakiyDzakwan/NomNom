<?php

namespace Database\Seeders;

use App\Models\ResepKategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ResepKategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        /* Resep 1 */
        ResepKategori::create([
            'resep_id' => 1,
            'kategori_id' => 'C002'
        ]);

        ResepKategori::create([
            'resep_id' => 1,
            'kategori_id' => 'C004'
        ]);

        /* Resep 2 */
        ResepKategori::create([
            'resep_id' => 1,
            'kategori_id' => 'C001'
        ]);

        /* Resep 3 */
        ResepKategori::create([
            'resep_id' => 1,
            'kategori_id' => 'C001'
        ]);

        ResepKategori::create([
            'resep_id' => 1,
            'kategori_id' => 'C003'
        ]);

        ResepKategori::create([
            'resep_id' => 1,
            'kategori_id' => 'C004'
        ]);
    }
}
