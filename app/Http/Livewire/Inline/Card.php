<?php

namespace App\Http\Livewire\Inline;

use Livewire\Component;

class Card extends Component
{

    public $data;
    
    public function render()
    {
        return view('livewire.inline.card');
    }
}
