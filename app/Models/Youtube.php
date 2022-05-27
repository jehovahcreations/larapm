<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Youtube extends Eloquent
{
    protected $fillable = [
        'name',
        'url',
        'image',
        // 'created_at',
        // add all other fields
    ];
}
