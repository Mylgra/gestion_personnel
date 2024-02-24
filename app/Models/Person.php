<?php

declare(strict_types=1);

namespace App\Models;

use App\Contract\Enums\PersonCivilStatusEnum;
use App\Contract\Enums\PersonGenderEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Person extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'firstname',
        'lastname',
        'contact',
        'address',
        'picture',
        'identity',
        'birthplace',
        'birthday',
        'gender',
        'civil_status'
    ];

    protected $casts = [
        'birthday' => 'date',
        'gender' => PersonGenderEnum::class,
        'civil_status' => PersonCivilStatusEnum::class
    ];

    public function agents(): HasMany
    {
        return $this->hasMany(Agent::class);
    }
}
