<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transfert extends Model
{
    use HasFactory;
    protected $fillable = ['date',
    'document',
    'agent_id',
    'service_id'
    //'service_id'
 ];
}
