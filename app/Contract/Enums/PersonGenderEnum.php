<?php

declare(strict_types=1);

namespace App\Contract\Enums;

enum PersonGenderEnum: string
{
    case Masculin = 'Masculin';
    case Feminin = 'Feminin';
    case NonReconnu = 'Non reconnu';
}
