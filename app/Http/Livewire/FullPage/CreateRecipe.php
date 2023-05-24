<?php

namespace App\Http\Livewire\FullPage;

use Livewire\Component;

class CreateRecipe extends Component
{
    public $judul, $thumbnail;


    public function render()
    {
        return view('livewire.create-recipe')->layout('layouts.main', ['title' => 'Tambah Resep']);
    }
}
