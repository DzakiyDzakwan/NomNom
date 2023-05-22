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
    public  $uuid, $foto, $nama, $email, $profesi, $bio, $jk, $tgl;

    public function render()
    {
        $data = User::where('uuid', Auth::user()->uuid)
        ->first();
        $this->uuid = $data->uuid;
        $this->email = $data->email;
        $this->nama = $data->nama;
        $this->foto = $data->image;
        $this->tgl = $data->tgl_lahir;
        $this->jk = $data->jenis_kelamin;
        $this->profesi = $data->pekerjaan;
        $this->bio = $data->bio;
        return view('livewire.inline.biodata-section');
    }


    public function editProfile() {
        if($this->email != Auth::user()->email){
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
        } else {
            $imageName = Carbon::now()->timestamp.'.'.$this->foto->extension();
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
        }
        
        
    }
}
