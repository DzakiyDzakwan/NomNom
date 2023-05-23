<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tahapan;

class TahapanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tahapan::create([
            'resep_id' => '1',
            'urutan' => '1',
            'deskripsi' => 'Bumbu kering: Aduk rata semua bahan termasuk Royco Kaldu Ayam. Ambil 1/3 bagian bumbu, gunakan untuk melumuri daging ayam hingga merata, diamkan selama 20 menit dalam kulkas. Sisihkan.',
            'durasi' => '20 menit',
        ]);

        Tahapan::create([
            'resep_id' => '1',
            'urutan' => '2',
            'deskripsi' => 'Aduk sisa bumbu kering bersama semua bahan campuran tepung. Sisihkan.',
            'durasi' => '3 menit',
        ]);

        Tahapan::create([
            'resep_id' => '1',
            'urutan' => '3',
            'deskripsi' => 'Sambal bawang: Ulek atau haluskan cabai, bawang merah, dan bawang putih. Tambahkan Royco Kaldu Ayam, aduk rata. Sisihkan. Panaskan minyak, tumis cabai ulek hingga harum. Angkat dan sisihkan.',
            'image' => '1784496551.webp',
            'durasi' => '15 menit',
        ]);

        Tahapan::create([
            'resep_id' => '1',
            'urutan' => '4',
            'deskripsi' => 'Siapkan wadah datar atau piring. Jejerkan filet daging ayam yang sudah dimarinasi dengan bumbu. Taburi dengan tepung maizena hingga merata di kedua sisinya. Balur ke dalam telur kocok, kemudian lumuri dengan campuran tepung berbumbu.',
            'image' => '1784496552.webp',
            'durasi' => '15 menit',
        ]);

        Tahapan::create([
            'resep_id' => '1',
            'urutan' => '5',
            'deskripsi' => 'Panaskan minyak, goreng ayam hingga matang. Angkat dan tiriskan.',
            'image' => '1784496553.webp',
            'durasi' => '15 menit',
        ]);

        Tahapan::create([
            'resep_id' => '1',
            'urutan' => '6',
            'deskripsi' => 'Siapkan cobek, tumbuk ayam goreng hingga hancur.',
            'image' => '1784496554.webp',
            'durasi' => '5 menit',
        ]);

        Tahapan::create([
            'resep_id' => '1',
            'urutan' => '7',
            'deskripsi' => 'Pindahkan ke atas piring saji. Sendokkan sambal bawang ke atasnya. Sajikan.',
            'durasi' => '2 menit',
        ]);
    }
}
