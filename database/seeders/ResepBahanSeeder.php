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

        /* Resep 6 */
        ResepBahan::create([
            'resep_id' => 6,
            'bahan_id' => 'B005',
            'jumlah' => 6,
            'satuan' => 'Buah'
        ]);

        /* Resep 7 */
        ResepBahan::create([
            'resep_id' => 7,
            'bahan_id' => 'B006',
            'jumlah' => 7,
            'satuan' => 'Buah'
        ]);

        /* Resep 8 */
        ResepBahan::create([
            'resep_id' => 8,
            'bahan_id' => 'B007',
            'jumlah' => 8,
            'satuan' => 'Buah'
        ]);
    }
}
