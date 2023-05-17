<?php

namespace App\Http\Livewire\FullPage;

use Livewire\Component;

class RecipeDetail extends Component
{
    public $counter = 100;

    public function render()
    {
        return view('livewire.recipe-detail')->layout('layouts.main');
    }
}
