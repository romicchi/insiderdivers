<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    protected $fillable = [
        'location',
        'trip_type',
        'trip_date',
        'ext_date',
        'year',
        'client_id',
        'leader_id',
    ];

    public function leader()
    {
        return $this->belongsTo(Leader::class);
    }
}
