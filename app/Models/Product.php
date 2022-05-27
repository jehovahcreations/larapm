<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
class Product extends Eloquent
{
    protected $fillable = [
        'name',
        'desc',
        'image',
        // 'created_at',
        // add all other fields
    ];
}
