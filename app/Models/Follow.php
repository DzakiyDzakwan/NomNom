<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    use HasFactory;

    protected $guarded = [
        'following_at',
        'follower_id'
    ];

    const CREATED_AT = 'following_at';
    const UPDATED_AT = null;
}
