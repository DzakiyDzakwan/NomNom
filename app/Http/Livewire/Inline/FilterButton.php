<?php

namespace App\Http\Livewire\Inline;

use Livewire\Component;

class FilterButton extends Component
{
    
    public $label;

    public function render()
    {
        return view('livewire.inline.filter-button');
    }

    public function update($filter) {
        if ($filter == 1) {
            $this->label = "Populer";
        } elseif ($filter == 2) {
            $this->label = "Terbaru";
        } else {
            $this->label = "Terlama";
        }
        $this->emit('changeFilter', $filter);
    }
}
