<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CessationCarriere extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'document',
        'motif',
        'agent_id'
    ];

    protected $casts = [
        'date' => 'date'
    ];

    public function agent(): BelongsTo
    {
        return $this->belongsTo(Agent::class);
    }
}
