<?php

declare(strict_types=1);

namespace App\Models;

use App\Contract\Enums\MobilityAgentEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AgentMobility extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'motif',
        'document',
        'start_date',
        'back_date',
        'agent_id'
    ];

    protected $casts = [
        'date' => 'date',
        'start_date' => 'date',
        'back_date' => 'date',
        'motif' => MobilityAgentEnum::class
    ];

    public function agent(): BelongsTo
    {
        return $this->belongsTo(Agent::class);
    }
}
