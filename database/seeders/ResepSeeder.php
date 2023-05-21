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
            'deskripsi' => 'Buat kamu penyuka ayam goreng sekaligus pecinta pedas, coba bikin resep ayam geprek sambal bawang ini, yuk! Meski menu ini bisa kamu temukan dengan mudah di berbagai kafe ataupun rumah makan, buatan sendiri pasti lebih nikmat.

            Sejatinya, ini adalah hidangan ayam goreng crispy bertepung yang sangat disukai masyarakat Indonesia, yang kemudian dilumatkan atau digeprek bersama sambal. Meski kamu bisa menggunakan potongan ayam apa pun, di resep ini kami menyarankan untuk menggunakan potongan fillet supaya lebih praktis.
            
            Untuk pilihan sambalnya, sebenarnya bebas saja, sih. Selain sambal bawang seperti yang ada di resep kali ini, kamu bisa memakai sambal lain sesuai selera, seperti sambal ijo, sambal goang, atau sambal terasi.',
            'durasi' => '1 jam',
            'porsi' => '1',
            'kesulitan' => 'mudah',
        ]);

        /* Resep 2 */
        Resep::create([
            'user_id' => '99369fd9-568a-4d42-933d-876ceb39401b',
            'nama_resep' => 'Risol Ayam telur Asin User Satu',
            'image' => '1784496502.jpg',
            'deskripsi' => 'Berjuta resep camilan ada di luar sana tapi Risoles Ayam Telur Asin adalah beberapa di antaranya yang unik. Sudah beberapa tahun terakhir ini orang Indonesia tidak bosan-bosannya menikmati beragam protein yang dibalut dengan telur asin. Meski asalnya dari masakan khas Tionghoa, telur asin membuktikan diri sangat fleksibel untuk dimasak menjadi apa saja.

            Sebagai isian unik untuk risoles, tentu ada faktor kejutan sekaligus rasa yang familiar bagi para penikmatnya. Kita yang senantiasa disuguhi jajanan ini saat bertamu, umumnya selalu berpikir-pikir bahkan bertanya mengenai isiannya. Kembali isiannya adalah seputar ragout, mayones, ataupun sayur saja. Tapi dengan adanya isian ayam telur asin yang kekinian ini, camilan yang telah lama kita kenal seolah mendatangkan kejutan baru yang menyenangkan! Untuk kulitnya, kamu bisa coba beberapa langkah cara membuat risoles yang ternyata tidak sulit.',
            'durasi' => '45 menit',
            'porsi' => '1',
            'kesulitan' => 'mudah',
        ]);

        /* Resep 3 */
        Resep::create([
            'user_id' => '99369fd9-6c17-4d70-a4de-6c6c05612473',
            'nama_resep' => 'Nasi Goreng User Dua',
            'image' => '1784496503.jpg',
            'deskripsi' => 'Semua orang punya definisinya masing-masing kalau bicara soal resep nasi goreng rumahan. Ada yang mirip dengan nasi goreng kampung, ada yang menggunakan saus tiram dan kecap asin seperti khas Peranakan. Yang jelas, satu elemen yang sama adalah kehadiran telur mata sapi yang bikin siapapun makin tergugah untuk mencicipinya.

            Kalau biasanya nasi goreng rumahan menggunakan suwiran ayam ataupun aneka sayuran dan jamur. Kami merekomendasikan kamu untuk menggunakan irisan daging sapi has dalam. Soal bumbunya tak perlu khawatir, kamu bisa menggunakan Bango Bumbu Kuliner Nusantara Nasi Goreng Kambing yang praktis dan cocok dipadukan dengan daging merah. Pastikan untuk menggunakan satu sachet sekaligus dan jangan menyisakannya, ya. Tujuannya adalah agar kualitasnya lebih terjamin dan menghindari risiko basi. Untuk hijau-hijaunya, kamu bisa menambahkan bayam yang cukup masuk di bagian terakhir proses memasak. Sajikan dengan potongan mentimun dan tomat, maka selesai sudah resep nasi goreng rumahan kali ini!',
            'durasi' => '30 menit',
            'porsi' => '1',
            'kesulitan' => 'mudah',
        ]);
    }
}
