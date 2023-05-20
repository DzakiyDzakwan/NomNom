<?php

namespace App\Http\Livewire\FullPage;

use Livewire\Component;

class SavedCollections extends Component
{
    public $counter = 10;

    protected $listeners = ['ShowDD'];

    public function render()
    {
        return view('livewire.saved-collections')->layout('layouts.main');
    }
    
    public function ShowDD()
    {
        dd($this->counter);
    }
}
