<?php

namespace App\Http\Livewire\FullPage;

use Livewire\Component;
use App\Models\Resep;

class CategoriesPage extends Component
{
    public $filter, $kategori, $subkategori;

    protected $listeners = ['changeFilter'];
    
    public function render()
    {
        if($this->filter) {
            if ($this->filter == 2) {
                $resep = Resep::latest()->paginate(3);
            } else {
                $resep = Resep::oldest()->paginate(3);
            }
        } else {
            $resep = Resep::paginate(3);
        }
        
        return view('livewire.categories-page', compact('resep'))->layout('layouts.main', ['title' => 'Kategori']);
    }

    public function changeFilter($filter_id) {
        $this->filter = $filter_id;
    }
}
