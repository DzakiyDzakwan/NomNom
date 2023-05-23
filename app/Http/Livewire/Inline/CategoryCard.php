<?php

namespace App\Http\Livewire\Inline;

use App\Models\Kategori;
use Livewire\Component;

class CategoryCard extends Component
{

    public function render()
    {
        $kategori = Kategori::offset(0)->limit(8)->get();
        return view('livewire.inline.category-card', compact('kategori'));
    }
}
