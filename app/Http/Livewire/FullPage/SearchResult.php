<?php

namespace App\Http\Livewire\FullPage;

use Livewire\Component;
use App\Models\Resep;
use Illuminate\Http\Request;

class SearchResult extends Component
{
    public $filter;

    protected $listeners = ['changeFilter'];

    public function render(Request $request)
    {
        $search = $request->input('search');
        $resep = Resep::where('nama_resep', 'LIKE', '%' .$search. '%')->get();
        $count = count($resep);
        // $resep = Resep::join('resep_bahans', 'reseps.id', '=', 'resep_bahans.resep_id')
        // ->join('bahans', 'resep_bahans.bahan_id', '=', 'bahans.id')
        // ->join('resep_kategoris', 'reseps.id', '=', 'resep_kategoris.resep_id')
        // ->join('kategoris', 'resep_kategoris.kategori_id', '=', 'kategoris.id')
        // ->join('resep_peralatans', 'reseps.id', '=', 'resep_peralatans.resep_id')
        // ->join('peralatans', 'resep_peralatans.peralatan_id', '=', 'peralatans.id')
        // ->where('nama_resep', 'LIKE', '%' .$search. '%')
        // ->orWhere('kategoris.nama_kategori', 'LIKE', '%' .$search. '%')
        // ->orWhere('bahans.nama_bahan', 'LIKE', '%' .$search. '%')
        // ->orWhere('peralatans.nama_peralatan', 'LIKE', '%' .$search. '%')
        // ->get();
        // if($this->filter) {
        //     if ($this->filter == 2) {
        //         $resep = Resep::latest()->paginate(4);
        //     } else {
        //         $resep = Resep::oldest()->paginate(4);
        //     }
        // } else {
        //     $resep = Resep::paginate(4);
        // }
        return view('livewire.search-result', compact('resep', 'search', 'count'))->layout('layouts.main', ['title' => 'Hasil Pencarian']);
    }

    public function changeFilter($filter_id) {
        $this->filter = $filter_id;
    }
}
