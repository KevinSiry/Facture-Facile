<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prestation extends Model
{
    protected $fillable = [
        'presta_name',
    ];

    protected $hidden = [
        'lists_id',
    ];
}
