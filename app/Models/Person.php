<?php

declare(strict_types=1);

namespace App\Models;

use App\Contract\Enums\PersonCivilStatusEnum;
use App\Contract\Enums\PersonGenderEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
