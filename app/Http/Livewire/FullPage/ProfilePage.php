<?php

namespace App\Http\Livewire\FullPage;

use App\Models\Resep;
use Livewire\Component;

class ProfilePage extends Component
{
    public $counter = 10;

    protected $listeners = ['ShowDD'];

    public function render()
    {
        $resep = Resep::offset(0)->limit(8)->get();
        return view('livewire.profile', compact('resep'))->layout('layouts.main', ['title' => 'Profil']);
    }
    
    public function ShowDD()
    {
        dd($this->counter);
    }
}
