<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResepPeralatan extends Model
{
    use HasFactory;

    protected $fillable = [
        'resep_id',
        'peralatan_id'
    ];

    public $timestamps = false;
}
