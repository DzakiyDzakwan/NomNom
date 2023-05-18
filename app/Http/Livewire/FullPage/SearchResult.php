<?php

namespace App\Http\Livewire\FullPage;

use Livewire\Component;

class SearchResult extends Component
{
    public $counter = 10;

    protected $listeners = ['ShowDD'];

    public function render()
    {
        return view('livewire.search-result')->layout('layouts.main');
    }

    public function ShowDD()
    {
        dd($this->counter);
    }
}
