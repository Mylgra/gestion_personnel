<?php

namespace App\Contract\Enums;

enum LevelEnum: string
{
    case Direction = 'Direction';
    case Division = 'Division';
    case Bureau = 'Bureau';
    case Cellule = 'Cellule';
    case Cabinet = 'Cabinet';
    case Autre = 'Autre';
}
