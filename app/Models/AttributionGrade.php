<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AttributionGrade extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'motif',
        'document',
        'agent_id',
        'grade_id'
    ];

    protected $casts = [
        'date' => 'date'
    ];

    public function agent(): BelongsTo
    {
        return $this->belongsTo(Agent::class);
    }

    public function grade(): BelongsTo
    {
        return $this->belongsTo(Grade::class);
    }
}
