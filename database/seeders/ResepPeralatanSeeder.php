<?php

namespace Database\Seeders;

use App\Models\ResepPeralatan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ResepPeralatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /* Resep 1 */
        ResepPeralatan::create([
            'resep_id' => 1,
            'peralatan_id' => 'P001'
        ]);

        ResepPeralatan::create([
            'resep_id' => 1,
            'peralatan_id' => 'P002'
        ]);

        ResepPeralatan::create([
            'resep_id' => 1,
            'peralatan_id' => 'P003'
        ]);

        /* Resep 2 */

        ResepPeralatan::create([
            'resep_id' => 2,
            'peralatan_id' => 'P001'
        ]);

        /* Resep 3 */
        ResepPeralatan::create([
            'resep_id' => 3,
            'peralatan_id' => 'P001'
        ]);

        ResepPeralatan::create([
            'resep_id' => 1,
            'peralatan_id' => 'P005'
        ]);

        /* Resep 4 */
        ResepPeralatan::create([
            'resep_id' => 4,
            'peralatan_id' => 'P001'
        ]);

        ResepPeralatan::create([
            'resep_id' => 4,
            'peralatan_id' => 'P002'
        ]);

        /* Resep 5 */
        ResepPeralatan::create([
            'resep_id' => 5,
            'peralatan_id' => 'P001'
        ]);

        ResepPeralatan::create([
            'resep_id' => 5,
            'peralatan_id' => 'P002'
        ]);

        /* Resep 6 */
        ResepPeralatan::create([
            'resep_id' => 6,
            'peralatan_id' => 'P002'
        ]);

        ResepPeralatan::create([
            'resep_id' => 6,
            'peralatan_id' => 'P003'
        ]);

        /* Resep 7 */
        ResepPeralatan::create([
            'resep_id' => 7,
            'peralatan_id' => 'P002'
        ]);

        ResepPeralatan::create([
            'resep_id' => 7,
            'peralatan_id' => 'P003'
        ]);

        /* Resep 8 */
        ResepPeralatan::create([
            'resep_id' => 8,
            'peralatan_id' => 'P001'
        ]);

        ResepPeralatan::create([
            'resep_id' => 8,
            'peralatan_id' => 'P002'
        ]);

        ResepPeralatan::create([
            'resep_id' => 8,
            'peralatan_id' => 'P003'
        ]);

        ResepPeralatan::create([
            'resep_id' => 8,
            'peralatan_id' => 'P005'
        ]);
    }
}
