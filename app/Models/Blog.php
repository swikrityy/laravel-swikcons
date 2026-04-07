<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
     protected $fillable = [
        'name',
        'description',
        'staus',
        'image',
        'links'
    ];
}
