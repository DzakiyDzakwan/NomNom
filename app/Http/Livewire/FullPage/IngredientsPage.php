<?php

namespace App\Http\Livewire\FullPage;

use Livewire\Component;

class IngredientsPage extends Component
{
    public $counter = 10;
    
    public function render()
    {
        return view('livewire.ingredients-page')->layout('layouts.main');
    }
}
