<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Grade extends Model
{
    use HasFactory;

    protected $fillable = [
        'category',
        'level',
        'acronym',
        'echelon',
        'designation'
    ];

    public function attributions(): HasMany
    {
        return $this->hasMany(AttributionGrade::class);
    }
}
