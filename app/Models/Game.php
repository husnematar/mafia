<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Game extends Model
{
    use HasFactory;

    protected $casts = [
        'total_size' => 'integer',
        'min_player' => 'integer',
        'mafias' => 'integer',
        'doctors' => 'integer',
        'sheriffs' => 'integer',
        'civilians' => 'integer',
        'night_time' => 'integer',
        'day_time' => 'integer',
        'discussion_vote_time' => 'integer',


    ];

    public function room(): BelongsTo
    {
        return $this->belongsTo(Room::class);
    }
}
