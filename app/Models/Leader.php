<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Leader extends Model
{
    protected $fillable = [
        'leader_name',
        'leader_nationality',
        'official_position',
    ];
}
