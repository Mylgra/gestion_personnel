<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Agent extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'type',
        'statut',
        'document',
        'person_id'
    ];

    protected $casts = [
        'date' => 'date'
    ];

    public function affectations(): HasMany
    {
        return $this->hasMany(Affectation::class);
    }

    public function attributions(): HasMany
    {
        return $this->hasMany(AttributionGrade::class);
    }

    public function person(): BelongsTo
    {
        return $this->belongsTo(Person::class);
    }

    public function cessations(): HasMany
    {
        return $this->hasMany(CareerBreak::class);
    }

    public function mobilities(): HasMany
    {
        return $this->hasMany(AgentMobility::class);
    }

    public function transfers(): HasMany
    {
        return $this->hasMany(Transfer::class);
    }
}
