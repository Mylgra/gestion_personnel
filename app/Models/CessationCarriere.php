<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CessationCarriere extends Model
{
    use HasFactory;
    protected $fillable = ['date',
    'document',
    'motif',
    'agent_id'
 ];
}
