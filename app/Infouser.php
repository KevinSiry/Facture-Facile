<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Infouser extends Model
{
    protected $fillable = [
        'info_phone', 'info_etpname', 'info_tva', 'info_siret',
    ];

    protected $hidden = [
        'info_userid',
    ];
}
