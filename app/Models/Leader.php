<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Leader extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'leader_name',
        'leader_nationality',
        'official_position',
    ];
}
