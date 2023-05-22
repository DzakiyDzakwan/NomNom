<?php

namespace App\Http\Livewire\Inline;

use Livewire\Component;
use App\Models\Bahan;

class SearchBahan extends Component
{
    public $query;
    public $bahan;
    public $selectedBahan = [];

    public function mount()
    {
        $this->reset();
    }

    public function clear()
    {
        $this->query = '';
        $this->bahan = [];
    }

    public function updatedQuery()
    {
        sleep(1);
        $this->bahan = Bahan::where('nama_bahan', 'like', '%' . $this->query . '%')
            ->get()
            ->toArray();
    }

    public function render()
    {
        return view('livewire.inline.search-bahan');
    }

    public function toggleTag($tag)
    {
        if (in_array($tag, $this->selectedBahan)) {
            $this->selectedBahan = array_diff($this->selectedBahan, [$tag]);
        } else {
            $this->selectedBahan[] = $tag;
        }
    }

    public function showResep($id)
    {
        $this->emit('showResep', $id);
    }
}
