<?php

namespace App\Http\Livewire\Inline;

use App\Models\SubKategori;
use Livewire\Component;

class FilterSubKategori extends Component
{

    public $label;

    public function render()
    {
        $subkategori = SubKategori::all();
        return view('livewire.inline.filter-sub-kategori', compact('subkategori'));
    }

    public function update($id) {
        $data = SubKategori::where('id',$id)->first();
        $this->label = $data->nama_sub_kategori;
        $this->emit('changeSubKategori', $id);
    }
}
