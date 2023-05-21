<?php

namespace App\Http\Livewire\FullPage;

use Livewire\Component;
use App\Models\Resep;

class SearchResult extends Component
{
    public $counter = 10;

    protected $listeners = ['ShowDD'];

    public function render()
    {
        $resep = Resep::offset(0)->limit(8)->get();
        return view('livewire.search-result', compact('resep'))->layout('layouts.main', ['title' => 'Hasil Pencarian']);
    }

    public function ShowDD()
    {
        dd($this->counter);
    }
}
