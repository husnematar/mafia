<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Room extends Model
{
    use HasFactory;

    protected $cats = [
        'private' => 'boolean'
    ];

    public function game(): HasOne
    {
        return $this->hasOne(Game::class);
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(Game::class);
    }

}
