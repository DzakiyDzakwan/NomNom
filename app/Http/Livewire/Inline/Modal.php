<?php

namespace App\Http\Livewire\Inline;

use Livewire\Component;

class Modal extends Component
{
    public $simpleModal;

    public function render()
    {
        return view('livewire.inline.modal')->layout('welcome');
    }
}
