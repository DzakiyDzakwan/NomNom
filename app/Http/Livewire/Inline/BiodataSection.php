<?php

namespace App\Http\Livewire\Inline;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class BiodataSection extends Component
{
    use WithFileUploads;
    public  $uuid, $foto, $nama, $username, $email, $profesi, $bio, $jk, $tgl;

    public function mount()
    {
        $this->uuid = Auth::user()->uuid;
        $this->email = Auth::user()->email;
        $this->nama = Auth::user()->nama;
        $this->username = Auth::user()->username;
        $this->tgl = Auth::user()->tgl_lahir;
        $this->jk = Auth::user()->jenis_kelamin;
        $this->profesi = Auth::user()->pekerjaan;
        $this->bio = Auth::user()->bio;
    }

    public function updated($fields)
    {
        $this->validate(
            [
                'foto' => 'image|max:2048',
            ],
            [
                'foto.image' => ':attribute harus berupa gambar',
                'foto.max' => 'Ukuran :attribute tidak boleh lebih besar dari 2mb',
            ],
            [
                'foto' => 'Foto profile',
            ]
        );
    }

    public function render()
    {
        return view('livewire.inline.biodata-section');
    }


    public function editProfile()
    {
        $imageName = null;

        try {

            if ($this->foto) {
                $imageName = Carbon::now()->timestamp . '.' . $this->foto->extension();
                $this->foto->storeAs('public/images/user', $imageName);
            } else {
                $imagName = Auth::user()->image;
            }

            User::where('uuid', $this->uuid)
                ->update([
                    'email' => $this->email,
                    'nama' => $this->nama,
                    'username' => $this->username,
                    'image' => $imageName,
                    'tgl_lahir' => $this->tgl,
                    'jenis_kelamin' => $this->jk,
                    'pekerjaan' => $this->profesi,
                    'bio' => $this->bio
                ]);

            $this->dispatchBrowserEvent('closemodal', ['pesan' => 'Berhasil!']);
        } catch (\Throwable $th) {
            dd($th);
        }

        /*  if($this->email != Auth::user()->email){
            $this->validate(
                [
                    'nama' => 'required',
                    'email' => 'required|email|unique:users',
                    'profesi' => 'required',
                    'tgl' => 'required|before:today',
                ],
                [
                    'nama.required' => ':attribute tidak boleh kosong',

                    'email.email' => 'Format penulisan :attribute salah',
                    'email.required' => ':attribute tidak boleh kosong',
                    'email.unique' => ':attribute sudah tersedia',

                    'profesi.required' => ':attribute tidak boleh kosong',

                    'tgl.required' => ':attribute tidak boleh kosong',
                    'tgl.before' => ':attribute salah'
                ],
                [
                    'nama' => 'Nama Lengkap',
                    'email' => 'Email',
                    'profesi' => 'Profesi',
                    'tgl' => 'Tanggal Lahir'
                ]
            );
        } else {
            $this->validate(
                [
                    'nama' => 'required',
                    'email' => 'required|email',
                    'profesi' => 'required',
                    'tgl' => 'required|before:today',
                ],
                [
                    'nama.required' => ':attribute tidak boleh kosong',

                    'email.email' => 'Format penulisan :attribute salah',
                    'email.required' => ':attribute tidak boleh kosong',

                    'profesi.required' => ':attribute tidak boleh kosong',

                    'tgl.required' => ':attribute tidak boleh kosong',
                    'tgl.before' => ':attribute salah'
                ],
                [
                    'nama' => 'Nama Lengkap',
                    'email' => 'Email',
                    'profesi' => 'Profesi',
                    'tgl' => 'Tanggal Lahir'
                ]
            );
        }

        if (empty($this->foto)) {
            User::where('uuid', Auth::user()->uuid)
                ->update([
                    'email' => $this->email,
                    'nama' => $this->nama,
                    'tgl_lahir' => $this->tgl,
                    'jenis_kelamin' => $this->jk,
                    'pekerjaan' => $this->profesi,
                    'bio' => $this->bio
                ]);
            $this->dispatchBrowserEvent('closemodal');
        } else {
            $imageName = Carbon::now()->timestamp . '.' . $this->foto->extension();
            $this->foto->storeAs('public/images/user', $imageName);

            User::where('uuid', $this->uuid)
                ->update([
                    'email' => $this->email,
                    'nama' => $this->nama,
                    'image' => $imageName,
                    'tgl_lahir' => $this->tgl,
                    'jenis_kelamin' => $this->jk,
                    'pekerjaan' => $this->profesi,
                    'bio' => $this->bio
                ]);
        } */
    }
}
