<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Liste extends Model
{
    protected $fillable = [
        'lists_name',
    ];

    protected $hidden = [
        'user_id',
    ];
}
