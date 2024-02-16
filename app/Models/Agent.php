<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'username',
        'firstname',
        'gender',
        'birthday',
        'birthplace',
        'contact',
        'address',
        'identity',
        'civil_status',
        'picture'
    ];
}
