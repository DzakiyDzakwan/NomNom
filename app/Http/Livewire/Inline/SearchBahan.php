<?php

namespace App\Http\Livewire\Inline;

use Livewire\Component;
use App\Models\Bahan;

class SearchBahan extends Component
{
    public $query;
    public $kategoriBar = false;
    public $bahan = [];
    public $listBahan = [];
    public $selectedBahan = [];

    public function mount()
    {
        $data = Bahan::all();
        foreach ($data as $item)
        {
            $this->bahan[] = $item;
            $this->listBahan[] = $item;
        }
    }

    public function clear()
    {
        //
    }

    public function updatedQuery()
    {
        sleep(1);
        $this->listBahan = [];
        foreach ($this->bahan as $item)
        {
            if (str_contains(strtolower($item['nama_bahan']), strtolower($this->query)))
            {
                $this->listBahan[] = $item;
            }
        }
    }

    public function render()
    {
        return view('livewire.inline.search-bahan');
    }

    public function selectBahan($id)
    {
        foreach ($this->bahan as $data)
        {
            if (in_array($id, $data))
            {
                $this->selectedBahan[] = $data;
            }
        }

        $this->bahan = array_udiff($this->bahan, $this->selectedBahan, function ($a, $b)
        {
            if ($a === $b)
            {
                return 0;
            }
            return ($a > $b) ? 1 : -1;
        });

        $this->listBahan = $this->bahan;
        $this->query = '';

        $this->emit('searchIngredient', $id);
    }

    public function deleteTag($id)
    {
        foreach ($this->selectedBahan as $data)
        {
            if (in_array($id, $data))
            {
                $this->bahan[] = $data;
            }
        }

        $this->selectedBahan = array_udiff($this->selectedBahan, $this->bahan, function ($a, $b)
        {
            if ($a === $b)
            {
                return 0;
            }
            return ($a > $b) ? 1 : -1;
        });

        $this->listBahan = $this->bahan;
    }
}
