<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PC extends Model
{
    protected $fillable = [
        'name',
        'brand',
        'processor',
        'ram',
        'storage',
    ];
}
