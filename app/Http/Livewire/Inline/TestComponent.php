<?php

namespace App\Http\Livewire\Inline;

use Livewire\Component;

class TestComponent extends Component
{
    public function render()
    {
        return view('livewire.test-component')->layout("welcome");
    }
}
