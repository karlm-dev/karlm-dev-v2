<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ToolCategory extends Model
{
    /** @var list<string> */
    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    /** @return HasMany<Tool, ToolCategory> */
    public function tools(): HasMany
    {
        return $this->hasMany(Tool::class, 'category_id');
    }
}
