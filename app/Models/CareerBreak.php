<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CareerBreak extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'reason',
        'document',
        'agent_id',
    ];

    protected $casts = [
        'date' => 'date',
    ];

    public function agent(): BelongsTo
    {
        return $this->belongsTo(Agent::class);
    }


}
