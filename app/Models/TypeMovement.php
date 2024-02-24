<?php

namespace App\Models;

use App\Contract\Enums\TypeMovementEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeMovement extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'designation'
    ];

    protected $casts = [
        'type' => TypeMovementEnum::class
    ];
}
