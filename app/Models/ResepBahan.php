<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResepBahan extends Model
{
    use HasFactory;

    protected $fillable = [
        'resep_id',
        'bahan_id',
        'jumlah',
        'satuan'
    ];

    public $timestamps = false;
}
