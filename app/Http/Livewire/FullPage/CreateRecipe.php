<?php

namespace App\Http\Livewire\FullPage;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Bahan;
use App\Models\Peralatan;

class CreateRecipe extends Component
{
    use WithFileUploads;

    // ========== KETERANGAN ATTRIBUTES ========== //
    public $arrayOfKategori, $kategori;
    public $nama_resep, $image, $deskripsi, $porsi, $kesulitan, $durasi, $tipe_durasi, $kalori, $lemak, $karbohidrat;

    // ========== BAHAN-BAHAN ATTRIBUTES ========== //
    public $queryBahan, $showResultBahan, $arrayOfBahan, $listBahan = [], $bahan = [], $selectedBahan = [];

    // ========== PERALATAN ATTRIBUTES ========== //
    public $queryPeralatan, $showResultPeralatan, $arrayOfPeralatan, $listPeralatan = [], $peralatan = [], $selectedPeralatan = [];

    // ========== RULES ========== //
    protected $rules = ([
        // 'kategori' => ['required']
    ]);

    // ========== EVENT LISTENERS ========== //
    protected $listeners = ['ValidateKeterangan'];

    // ========== CONSTRUCTOR TO INITIATE PROPERTIES ========== //
    public function mount()
    {
        $this->arrayOfKategori[] = null;
        $this->arrayOfBahan[] = null;
        $this->arrayOfPeralatan[] = null;
        $this->kategori[] = null;

        foreach (Bahan::all() as $item)
        {
            $this->bahan[] = $item;
            $this->listBahan[] = $item;
        }

        foreach (Peralatan::all() as $item)
        {
            $this->peralatan[] = $item;
            $this->listPeralatan[] = $item;
        }
    }

    // ========== LIVE ACTION ========== //
    public function updated($props)
    {
        $this->listBahan = [];
        $this->listPeralatan = [];

        foreach ($this->bahan as $item)
        {
            if (str_contains(strtolower($item['nama_bahan']), strtolower($this->queryBahan)))
            {
                $this->listBahan[] = $item;
            }
        }

        foreach ($this->peralatan as $item)
        {
            if (str_contains(strtolower($item['nama_peralatan']), strtolower($this->queryPeralatan)))
            {
                $this->listPeralatan[] = $item;
            }
        }
    }

    public function selectBahan($id)
    {
        foreach ($this->bahan as $data)
        {
            if (in_array($id, $data))
            {
                $this->selectedBahan[] = $data;
                
                if(empty($this->arrayOfBahan[0]))
                {
                    // $this->arrayOfBahan[0] = null;
                    $this->arrayOfBahan[0] = $data['id'];
                }
                else
                {
                    // $this->arrayOfBahan[] = null;
                    $this->arrayOfBahan[] = $data['id'];
                    // dd($this->arrayOfBahan);
                }
            }
        }

        $this->bahan = array_udiff($this->bahan, $this->selectedBahan, function ($a, $b)
        {
            if ($a === $b)
            {
                return 0;
            }
            return ($a > $b) ? 1 : -1;
        });

        $this->listBahan = $this->bahan;
        $this->queryBahan = '';
        $this->showResultBahan = false;
    }

    public function selectPeralatan($id)
    {
        foreach ($this->peralatan as $data)
        {
            if (in_array($id, $data))
            {
                $this->selectedPeralatan[] = $data;
                
                if(empty($this->arrayOfPeralatan[0]))
                {
                    // $this->arrayOfPeralatan[0] = null;
                    $this->arrayOfPeralatan[0] = $data['id'];
                }
                else
                {
                    // $this->arrayOfPeralatan[] = null;
                    $this->arrayOfPeralatan[] = $data['id'];
                    // dd($this->arrayOfPeralatan);
                }
            }
        }

        $this->peralatan = array_udiff($this->peralatan, $this->selectedPeralatan, function ($a, $b)
        {
            if ($a === $b)
            {
                return 0;
            }
            return ($a > $b) ? 1 : -1;
        });

        $this->listPeralatan = $this->peralatan;
        $this->queryPeralatan = '';
        $this->showResultPeralatan = false;
    }

    public function deleteBahan($id)
    {
        foreach ($this->selectedBahan as $data)
        {
            if (in_array($id, $data))
            {
                $this->bahan[] = $data;
            }
        }

        $this->selectedBahan = array_udiff($this->selectedBahan, $this->bahan, function ($a, $b)
        {
            if ($a === $b)
            {
                return 0;
            }
            return ($a > $b) ? 1 : -1;
        });

        $this->listBahan = $this->bahan;
    }

    public function deletePeralatan($id)
    {
        foreach ($this->selectedPeralatan as $data)
        {
            if (in_array($id, $data))
            {
                $this->peralatan[] = $data;
            }
        }

        $this->selectedPeralatan = array_udiff($this->selectedPeralatan, $this->peralatan, function ($a, $b)
        {
            if ($a === $b)
            {
                return 0;
            }
            return ($a > $b) ? 1 : -1;
        });

        $this->listPeralatan = $this->peralatan;
    }

    // ========== RENDER ========== //
    public function render()
    {
        return view('livewire.create-recipe')->layout('layouts.main', ['title' => 'Tambah Resep']);
    }

    // ========== ADD NEW KATEGORI ========== //
    public function AddNewKategori()
    {
        if (count($this->arrayOfKategori) < 3) {
            $this->arrayOfKategori[] = null;
            $this->kategori[] = null;
        }
    }

    // ========== VALIDATE KETERANGAN ========== //
    public function ValidateKeterangan()
    {
        $this->validate([
            "nama_resep" => ['required', "min:5", 'max:255'],
            'image' => 'image|max:1024',
            "deskripsi" => ['required', "min:5", 'max:255'],
            "kategori.*" => ['required', "min:4", "max:4"],
            "porsi" => ['required', "integer", "min:1"],
            "kesulitan" => ['required', 'in:"mudah", "sulit"'],
            "durasi" => ['required', "integer", "min:1"],
            "tipe_durasi" => ['required', 'in:"menit", "jam"'],
            "kalori" => ['required', "integer", "min:1"],
            "lemak" => ['required', "integer", "min:1"],
            "karbohidrat" => ['required', "integer", "min:1"]
        ]);

        $this->image->store('photos');

        $this->dispatchBrowserEvent('nextslide', ['data' => 'bahan']);
    }

    // ========== VALIDATE BAHAN ========== //
    public function ValidateBahan()
    {
        $this->validate([
            "arrayOfBahan.*" => ['required'],
        ], 
        ['arrayOfBahan.*' => "Bahan-bahan harus dipilih dulu"]);

        $this->dispatchBrowserEvent('nextslide', ['data' => 'peralatan']);
    }

    // ========== VALIDATE PERALATAN ========== //
    public function ValidatePeralatan()
    {
        $this->validate([
            "arrayOfPeralatan.*" => ['required'],
        ], 
        ['arrayOfPeralatan.*' => "Peralatan harus dipilih dulu"]);

        $this->dispatchBrowserEvent('nextslide', ['data' => 'langkah']);
    }
}
