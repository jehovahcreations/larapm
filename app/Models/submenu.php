<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
class submenu extends Eloquent
{
    use HasFactory;
    protected $fillable = [
        'mainmenu',
        'menuName',
        'menuID',
        'image',
        'url',
        'points',
        'dataurl',
        'formid',
        'field1',
        'field2',
        'field3',
        'field4',
        'field5',
        'vendor',
        'amount',
        'isActive',
    ];

}
