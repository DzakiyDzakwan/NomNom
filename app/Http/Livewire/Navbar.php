<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Navbar extends Component
{
    public $counter;

    protected $listeners = ['ShowDD'];

    public function mount($counter)
    {
        $this->counter = $counter;
    }

    public function render()
    {
        return view('livewire.navbar');
    }

    public function ShowDD()
    {
        dd($this->counter);
    }
}
