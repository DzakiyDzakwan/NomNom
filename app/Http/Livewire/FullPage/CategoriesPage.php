<?php

namespace App\Http\Livewire\FullPage;

use App\Models\Kategori;
use Livewire\Component;
use App\Models\Resep;
use Livewire\WithPagination;

class CategoriesPage extends Component
{

    use WithPagination;

    public $filter, $kategori;

    protected $listeners = ['changeFilter','changeKategori'];
    
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
        
        return view('livewire.categories-page', compact('resep'))->layout('layouts.main', ['title' => 'Kategori']);
    }

    public function changeFilter($filter_id) {
        $this->filter = $filter_id;
    }

    public function changeKategori($kategori_id) {
        $data = Kategori::where('id', $kategori_id)->first();
        $this->kategori = $data;
    }
}
