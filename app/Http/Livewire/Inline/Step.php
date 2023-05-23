<?php

namespace App\Http\Livewire\Inline;

use Livewire\Component;
use App\Models\Tahapan;

class Step extends Component
{
    public $data;

    /* public function mount($id)
    {
        $cardDetail = Tahapan::where('tahapans.resep_id', $id)
            ->get();

        //dd($cardDetail);
        if($cardDetail) {
            $this->detail = $cardDetail;
        }
    } */

    public function render()
    {
        //dd($this->data);
        return view('livewire.inline.step');
    }
}
