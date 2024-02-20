<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Affectation extends Model
{
    use HasFactory;
    protected $fillable = ['date',
                           'personalFonction',
                           'document',
                           'agent_id',
                           'service_id',
                           'fonction_id'
                        ];
}
