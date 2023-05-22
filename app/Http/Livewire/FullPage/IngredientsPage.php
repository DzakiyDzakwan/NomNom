<?php

namespace App\Http\Livewire\FullPage;

use Livewire\Component;
use App\Models\Resep;

class IngredientsPage extends Component
{
    public $counter = 10;

    protected $listeners = [
        'showResep'=> 'render',
    ];

    public function render()
    {
        /* $resep = Resep::select('reseps.id', 'reseps.user_id', 'reseps.nama_resep', 'reseps.image', 'reseps.durasi', 'reseps.porsi', 'users.username', 'users.uuid', 'resep_bahans.resep_id', 'resep_bahans.bahan_id', 'bahans.id', 'bahans.nama_bahan', 'bahans.image')
        ->join('users', 'users.uuid', '=', 'reseps.user_id')
        ->join('resep_bahans', 'resep_bahans.resep_id', '=', 'reseps.id')
        ->join('bahans', 'bahans.id', '=', $id)
        ->get(); */

        $resep = Resep::offset(0)->limit(8)->get();
        return view('livewire.ingredients-page', compact('resep'))->layout('layouts.main', ['title' => 'Bahan']);
    }
}
