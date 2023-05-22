<?php

namespace App\Http\Livewire\FullPage;

use App\Models\Resep;
use Livewire\Component;

class LandingPage extends Component
{
    protected $listeners = ['ShowDD'];

    public function render()
    {
        $resep = Resep::offset(0)->limit(8)->get();
        return view('livewire.welcome', compact('resep'))->layout('layouts.main', ['title' => 'Dashboard']);
    }

}
