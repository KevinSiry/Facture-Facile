<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'info_cust_name', 'info_cust_phone', 'info_cust_street', 'info_cust_city',
    ];

    protected $hidden = [
        'id_artisan',
    ];
}
