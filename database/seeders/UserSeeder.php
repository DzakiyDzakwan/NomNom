<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'email' => 'superadmin@gmail.com',
            'username' => 'admin',
            'password' => Hash::make('admin'),
            'nama' => 'Admin',
            'role' => '1'
        ]);

        User::create([
            'uuid' => '99369fd9-568a-4d42-933d-876ceb39401b',
            'email' => 'user1@gmail.com',
            'username' => 'usersatu',
            'password' => Hash::make('usersatu'),
            'nama' => 'User Satu',
            'role' => '3'
        ]);

        User::create([
            'uuid' => '99369fd9-6c17-4d70-a4de-6c6c05612473',
            'email' => 'user2@gmail.com',
            'username' => 'userdua',
            'password' => Hash::make('userdua'),
            'nama' => 'User Dua',
            'role' => '3'
        ]);

        User::create([
            'uuid' => '99369fd9-8192-4d7d-9ed6-4feca0677e9d',
            'email' => 'user3@gmail.com',
            'username' => 'usertiga',
            'password' => Hash::make('usertiga'),
            'nama' => 'User Tiga',
            'role' => '3'
        ]);
    }
}
