<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResepKategori extends Model
{
    use HasFactory;

    protected $fillable = [
        'resep_id',
        'kategori_id'
    ];

    public $timestamps = false;
}
