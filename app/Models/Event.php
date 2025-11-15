<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $guarded = [
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'date' => 'date',
    ];
}
