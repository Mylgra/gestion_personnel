<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MobiliteAgent extends Model
{
    use HasFactory;
    protected $fillable = ['date',
    'document',
    'motif',
    'dateDebut',
    'dateRetour',
    'agent_id'
 ];
}
