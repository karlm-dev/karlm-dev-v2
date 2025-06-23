<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    public function responsibilities()
    {
        return $this->hasMany(Responsibility::class);
    }
}
