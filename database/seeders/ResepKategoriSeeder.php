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
            'resep_id' => 2,
            'kategori_id' => 'C001'
        ]);

        /* Resep 3 */
        ResepKategori::create([
            'resep_id' => 3,
            'kategori_id' => 'C001'
        ]);

        ResepKategori::create([
            'resep_id' => 3,
            'kategori_id' => 'C003'
        ]);

        ResepKategori::create([
            'resep_id' => 3,
            'kategori_id' => 'C004'
        ]);

        /* Resep 4 */
        ResepKategori::create([
            'resep_id' => 4,
            'kategori_id' => 'C004'
        ]);

        ResepKategori::create([
            'resep_id' => 4,
            'kategori_id' => 'C002'
        ]);

        /* Resep 5 */
        ResepKategori::create([
            'resep_id' => 5,
            'kategori_id' => 'C005'
        ]);

        ResepKategori::create([
            'resep_id' => 5,
            'kategori_id' => 'C002'
        ]);
    }
}
