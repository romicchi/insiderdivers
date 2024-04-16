<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Model
{
    use HasFactory;
    
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
