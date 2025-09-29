<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    /** @var list<string> */
    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];
}
