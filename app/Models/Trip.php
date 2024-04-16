<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Trip extends Model
{
    use HasFactory;

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
