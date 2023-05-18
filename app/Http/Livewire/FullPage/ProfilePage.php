<?php

namespace App\Http\Livewire\FullPage;

use Livewire\Component;

class ProfilePage extends Component
{
    public $counter = 10;

    protected $listeners = ['ShowDD'];

    public function render()
    {
        return view('livewire.profile')->layout('layouts.main');
    }
    
    public function ShowDD()
    {
        dd($this->counter);
    }
}
