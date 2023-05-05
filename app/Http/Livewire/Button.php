<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Button extends Component
{

    public $label, $identifier;

    /* public function mount() {
        if($this->identifier == null) {
            $this->identifier = 'btn';
        }
    } */

    public function render()
    {
        return view('livewire.button');
    }
}
