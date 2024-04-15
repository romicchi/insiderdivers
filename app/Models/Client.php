<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'gender',
        'email',
        'shirt_size',
        'birthday',
        'whatsapp',
        'nationality',
        'interests',
        'dietary_reqs',
        'status',
    ];
}
