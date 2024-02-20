<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttributionGrade extends Model
{
    use HasFactory;
    protected $fillable = ['date',
                           'motif',
                           'document',
                           'agent_id',
                           'grade_id'
                        ];
}
