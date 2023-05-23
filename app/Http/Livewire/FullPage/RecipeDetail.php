<?php

namespace App\Http\Livewire\FullPage;

use Illuminate\Queue\Listener;
use Livewire\Component;
use App\Models\Resep;
use Illuminate\Support\Facades\DB;

class RecipeDetail extends Component
{
    public $detail;

    public function mount($id)
    {
        $cardDetail = Resep::find($id);

        //dd($cardDetail);
        if($cardDetail) {
            $this->detail = $cardDetail;
        }
    }

    /* public function showRecipe($id)
    {
        $data = Resep::where('id', $id)->first();

        $this->id = $id;
        $this->nama_resep = $data->nama_resep;
        $this->image = $data->image;
        $this->deskripsi = $data->deskripsi;
        $this->durasi = $data->durasi;
        $this->porsi = $data->porsi;
        $this->kesulitan = $data->kesulitan;

        //$this->render();
    } */

    public function render()
    {
        return view('livewire.recipe-detail')->layout('layouts.main', ['title' => 'Detail Resep']);
    }
}
