<?php

namespace App\Http\Livewire\FullPage;

use Livewire\Component;

class ProfilePage extends Component
{
    public function render()
    {
        return view('livewire.profile')->layout('layouts.welcome');
    }
}
