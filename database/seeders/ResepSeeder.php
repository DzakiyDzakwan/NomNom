<?php

namespace Database\Seeders;

use App\Models\Resep;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ResepSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        /* Resep 1 */
        Resep::create([
            'user_id' => '99369fd9-568a-4d42-933d-876ceb39401b',
            'nama_resep' => 'Ayam Geprek User Satu',
            'image' => '1784496501.jpg',
            'deskripsi' => 'Buat kamu penyuka ayam goreng sekaligus pecinta pedas, coba bikin resep ayam geprek sambal bawang ini, yuk! Meski menu ini bisa kamu temukan dengan mudah di berbagai kafe ataupun rumah makan, buatan sendiri pasti lebih nikmat.',
            'durasi' => '1 jam',
            'porsi' => '1',
            'kesulitan' => 'mudah',
        ]);

        /* Resep 2 */
        Resep::create([
            'user_id' => '99369fd9-568a-4d42-933d-876ceb39401b',
            'nama_resep' => 'Risol Ayam telur Asin User Satu',
            'image' => '1784496502.jpg',
            'deskripsi' => 'Berjuta resep camilan ada di luar sana tapi Risoles Ayam Telur Asin adalah beberapa di antaranya yang unik. Sudah beberapa tahun terakhir ini orang Indonesia tidak bosan-bosannya menikmati beragam protein yang dibalut dengan telur asin. Meski asalnya dari masakan khas Tionghoa, telur asin membuktikan diri sangat fleksibel untuk dimasak menjadi apa saja.',            
            'durasi' => '45 menit',
            'porsi' => '1',
            'kesulitan' => 'mudah',
        ]);

        /* Resep 3 */
        Resep::create([
            'user_id' => '99369fd9-6c17-4d70-a4de-6c6c05612473',
            'nama_resep' => 'Nasi Goreng User Dua',
            'image' => '1784496503.jpg',
            'deskripsi' => 'Semua orang punya definisinya masing-masing kalau bicara soal resep nasi goreng rumahan. Ada yang mirip dengan nasi goreng kampung, ada yang menggunakan saus tiram dan kecap asin seperti khas Peranakan. Yang jelas, satu elemen yang sama adalah kehadiran telur mata sapi yang bikin siapapun makin tergugah untuk mencicipinya.',            
            'durasi' => '30 menit',
            'porsi' => '1',
            'kesulitan' => 'mudah',
        ]);

        /* Resep 4 */
        Resep::create([
            'user_id' => '99369fd9-8192-4d7d-9ed6-4feca0677e9d',
            'nama_resep' => 'Dendeng Balado Wuenak Pol',
            'image' => '1784496504.jpg',
            'deskripsi' => 'Tampilan daging berwarna gelap yang diselimuti potongan cabai dan berminyak bisa jadi mengundang kerutan untuk yang baru pertama kali berkenalan dengan masakan Sumatra Barat. Tapi, tahukah kamu, di balik resep dendeng balado ini, ternyata ada jutaan cerita penuh kebahagiaan bagi yang pernah menikmatinya?',           
            'durasi' => '2 jam',
            'porsi' => '2',
            'kesulitan' => 'sulit',
        ]);

        /* Resep 5 */
        Resep::create([
            'user_id' => '99369fd9-6c17-4d70-a4de-6c6c05612473',
            'nama_resep' => 'Gulai Tunjang Salero Minang',
            'image' => '1784496505.jpg',
            'deskripsi' => 'Salah satu jenis gulai yang paling populer saat berkunjung ke lapau atau rumah makan Padang adalah gulai tunjang. Kalau kamu adalah salah satu penggemar berat aneka olahan kaki sapi, resep dari NomNom berikut seru untuk diikuti. Ternyata bisa juga tunjang diolah dengan cara yang lebih praktis namun juga memerlukan perhatian ekstra. Sudah siap membuatnya hari ini?',            
            'durasi' => '2 jam',
            'porsi' => '1',
            'kesulitan' => 'sulit',
        ]);
    }
}
