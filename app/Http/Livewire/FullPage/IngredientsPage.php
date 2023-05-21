<?php

namespace App\Http\Livewire\FullPage;

use Livewire\Component;
use App\Models\Resep;

class IngredientsPage extends Component
{
    public $counter = 10;
    
    public function render()
    {
        $resep = Resep::offset(0)->limit(8)->get();
        return view('livewire.ingredients-page', compact('resep'))->layout('layouts.main', ['title' => 'Bahan']);
    }
}
