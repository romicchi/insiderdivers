<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    protected $fillable = [
        'flight_num',
        'airline',
        'departure',
        'arrival',
        'client_id',
    ];
}
