<?php

namespace App\Http\Livewire\FullPage;

use Livewire\Component;
use App\Models\Resep;

class SearchResult extends Component
{
    public $filter;

    protected $listeners = ['changeFilter'];

    public function render()
    {
        if($this->filter) {
            if ($this->filter == 2) {
                $resep = Resep::latest()->paginate(2);
            } else {
                $resep = Resep::oldest()->paginate(2);
            }
        } else {
            $resep = Resep::paginate(2);
        }
        return view('livewire.search-result', compact('resep'))->layout('layouts.main', ['title' => 'Hasil Pencarian']);
    }

    public function changeFilter($filter_id) {
        $this->filter = $filter_id;
    }
}
