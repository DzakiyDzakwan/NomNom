<?php

namespace App\Http\Livewire\Inline;

use Livewire\Component;
use App\Models\Bahan;

class SearchBahan extends Component
{
    public $query;
    public $bahan;

    public function mount()
    {
        $this->reset();
    }

    public function clear()
    {
        $this->query = '';
        $this->bahan = [];
    }

    public function selectBahan()
    {
       
    }

    public function updatedQuery()
    {
        sleep(0.5);
        $this->bahan = Bahan::where('nama_bahan', 'like', '%' . $this->query . '%')
            ->get()
            ->toArray();
    }

    public function render()
    {
        return view('livewire.inline.search-bahan');
    }
}
