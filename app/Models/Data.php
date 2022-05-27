<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Data extends Eloquent
{
    use HasFactory;
    protected $fillable = [
        'name',
        'vid',
        'dob',
        'data',
        'gender',
        'isActive',
        'created_by',
        'email',
        'cate',
        'type',
        'village',
        'interest',
        'occupation',
        'mobile',
        'address',
        'pin',
        'ptype',

    ];
}
