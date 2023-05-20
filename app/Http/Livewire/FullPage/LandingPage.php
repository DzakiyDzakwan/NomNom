<?php

namespace App\Http\Livewire\FullPage;

use Livewire\Component;

class LandingPage extends Component
{
    public $counter = 100;

    protected $listeners = ['ShowDD'];

    public function render()
    {
        return view('livewire.welcome')->layout('layouts.main');
    }

    public function ShowDD()
    {
        dd($this->counter);
    }
}
