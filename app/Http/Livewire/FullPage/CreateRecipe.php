<?php

namespace App\Http\Livewire\FullPage;

use Livewire\Component;

class CreateRecipe extends Component
{
    public function render()
    {
        return view('livewire.create-recipe')->layout('layouts.welcome');
    }
}