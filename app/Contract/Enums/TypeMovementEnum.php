<?php

namespace App\Contract\Enums;

enum TypeMovementEnum: string
{
    case INPUT = 'input';
    case OUTPUT = 'output';
    case OTHER = 'other';
}
