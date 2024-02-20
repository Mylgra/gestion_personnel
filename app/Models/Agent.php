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
        'personne_id'
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

    public function personne(): BelongsTo
    {
        return $this->belongsTo(Personne::class);
    }

    public function cessations(): HasMany
    {
        return $this->hasMany(CessationCarriere::class);
    }

    public function mobilities(): HasMany
    {
        return $this->hasMany(MobiliteAgent::class);
    }

    public function transfers(): HasMany
    {
        return $this->hasMany(Transfert::class);
    }
}
