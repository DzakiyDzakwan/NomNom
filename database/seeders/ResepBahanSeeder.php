<?php

namespace Database\Seeders;

use App\Models\ResepBahan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ResepBahanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        /* Resep 1 */
        ResepBahan::create([
            'resep_id' => 1,
            'bahan_id' => 'B001',
            'jumlah' => 1,
            'satuan' => 'Potong'
        ]);

        /* Resep 2 */
        ResepBahan::create([
            'resep_id' => 2,
            'bahan_id' => 'B003',
            'jumlah' => 2,
            'satuan' => 'Butir'
        ]);

        /* Resep 3 */
        ResepBahan::create([
            'resep_id' => 3,
            'bahan_id' => 'B003',
            'jumlah' => 1,
            'satuan' => 'Butir'
        ]);

        /* Resep 4 */
        ResepBahan::create([
            'resep_id' => 4,
            'bahan_id' => 'B002',
            'jumlah' => 10,
            'satuan' => 'Potong'
        ]);

        /* Resep 5 */
        ResepBahan::create([
            'resep_id' => 5,
            'bahan_id' => 'B004',
            'jumlah' => 5,
            'satuan' => 'Buah'
        ]);


    }
}
