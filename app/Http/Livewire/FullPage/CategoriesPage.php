<?php

namespace App\Http\Livewire\FullPage;

use Livewire\Component;

class CategoriesPage extends Component
{
    public $counter = 10;
    
    public function render()
    {
        return view('livewire.categories-page')->layout('layouts.main');
    }
}
