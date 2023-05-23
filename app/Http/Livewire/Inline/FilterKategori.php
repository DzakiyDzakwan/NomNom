<?php

namespace App\Http\Livewire\Inline;

use App\Models\Kategori;
use Livewire\Component;

class FilterKategori extends Component
{

    public $label, $kategori = [];

    protected $listeners = ['changeSubKategori'];


    public function mount() {
        $data = Kategori::all();
        foreach ($data as $item) {
            $this-> kategori[] = $item;
        }
    }

    public function render()
    {
        return view('livewire.inline.filter-kategori');
    }

    public function update($id) {
        $data = Kategori::where('id',$id)->first();
        $this->label = $data->nama_kategori;
        $this->emit('changeKategori', $id);
    }

    public function changeSubKategori($id) {
        $this->kategori = [];
       $data = Kategori::where('sub_kategori_id', $id)->get();
       foreach ($data as $item) {
        $this-> kategori[] = $item;
    }
    }
}
