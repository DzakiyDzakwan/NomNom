<?php

namespace App\Http\Livewire\Inline;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Navbar extends Component
{

    public  $username, $email, $password;

    public function render()
    {
        return view('livewire.inline.navbar');
    }

    public function register() {
        $this->validate(
            [
                'username' => 'required|unique:users',
                'email' => 'required|email|unique:users',
                'password' => 'required',
            ],
            [
                'username.required' => ':attribute tidak boleh kosong',
                'username.unique' => ':attribute sudah tersedia',

                'email.email' => 'Format penulisan :attribute salah',
                'email.required' => ':attribute tidak boleh kosong',
                'email.unique' => ':attribute sudah tersedia',

                'password.required' => ':attribute tidak boleh kosong'
            ],
            [
                'username' => 'Username',
                'email' => 'Email',
                'password' => 'Kata sandi'
            ]
        );

        try {
            User::create([
                'username' => $this->username,
                'email' => $this->email,
                'password' => Hash::make($this->password),
                'role' => '3'
            ]);

            if(Auth::attempt(['username' => $this->username, 'password' => $this->password])){
                $this->reset();
                session()->regenerate();
            }
        } catch (\Throwable $th) {
            dd($th);
        }

    }

    public function login() {
        if(Auth::attempt(['username' => $this->username, 'password' => $this->password])){
            $this->reset();
            session()->regenerate();
            $this->dispatchBrowserEvent('close-modal');
        }
    }

    public function logout() {
        Auth::logout();
        session()->invalidate();
    }
}